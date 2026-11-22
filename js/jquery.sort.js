/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2016 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.03
  $HeadURL$
**********************************************/

/**
 * TableDnD plug-in for JQuery, allows you to drag and drop table rows
 * You can set up various options to control how the system will work
 * Copyright (c) Denis Howlett <denish@isocra.com>
 * Licensed like jQuery, see http://docs.jquery.com/License.
 */
 
 /** 
  *  CPG Dev Team addition: sortManually(): to handle manual sorting in album and file managers
  */
  
jQuery.tableDnD = {
    /** Keep hold of the current table being dragged */
    currentTable : null,
    /** Keep hold of the current drag object if any */
    dragObject: null,
    /** Keep hold of the current select object if any */
    selectObject: null,
    /** Keep hold of the Height.y current selected object on mouseDown */
    selectObjectY: null,
    /** The current mouse offset */
    mouseOffset: null,
    /** Assign first TR element height from the top of the browser */
    firstObjectHeight: null,
    /** Assign last TR element height from the top of the browser */
    lastObjectHeight: null,
    /** Keep hold of the current dragged object */
    currentHeight : null,
    /** Remember the old value of Y so that we don't do too much processing */
    oldY: 0,

    /** Actually build the structure */
    build: function(options) {
        // Make sure options exists
        options = options || {};
        // Set up the defaults if any

        this.each(function() {
            // Remember the options
            this.tableDnDConfig = {
                onDragStyle: options.onDragStyle,
                onDropStyle: options.onDropStyle,
                // Add in the default class for whileDragging
                onDragClass: options.onDragClass ? options.onDragClass : "tDnD_whileDrag",
                /**add in the default calls for selected (this operation will be done to onmouseUp event)*/
                onSelectedClass:options.onSelectedClass? options.onSelectedClass : "selected",
                onDrop: options.onDrop,
                onDragStart: options.onDragStart,
                scrollAmount: options.scrollAmount ? options.scrollAmount : 5
            };
            // Now make the rows draggable
            jQuery.tableDnD.makeDraggable(this);
        });

        // Now we need to capture the mouse up and mouse move event
        // We can use bind so that we don't interfere with other event handlers
        jQuery(document)
            .bind('mousemove', jQuery.tableDnD.mousemove)
            .bind('mouseup', jQuery.tableDnD.mouseup);
        // Don't break the chain
        
        return this;
    },

    /** This function makes all the rows on the table draggable apart from those marked as "NoDrag" */
    makeDraggable: function(table) {
        // Now initialize the rows
        var rows = table.rows; //getElementsByTagName("tr")
        var config = table.tableDnDConfig;
     
            // We only need to add the event to the specified cells
            var cells = jQuery("td.dragHandle", table);
            cells.each(function() {

               jQuery(this).mousedown(function(ev) {
                        jQuery.tableDnD.dragObject = this.parentNode;
                        /**select the tr object when sort manually */
                        jQuery.tableDnD.selectObject  = this.parentNode;
                        jQuery(this.parentNode).addClass("selected");
                        /**get the y length of the selected TR object when sort manually*/
                        jQuery.tableDnD.selectObjectY  = jQuery.tableDnD.getPosition(this.parentNode).y;
                        /**get the first element height*/
                        jQuery.tableDnD.firstObjectHeight = jQuery.tableDnD.getPosition(rows[0]).y;
                        /**get the last element height*/
                        jQuery.tableDnD.lastObjectHeight  = jQuery.tableDnD.getPosition(rows[(rows.length-1)]).y;
                        jQuery.tableDnD.currentTable = table;
                        jQuery.tableDnD.mouseOffset = jQuery.tableDnD.getMouseOffset(this, ev);
                        if (config.onDragStart) {
                            // Call the onDrop method if there is one
                            config.onDragStart(table, this);
                        }
                        return false;
                }).css("cursor", "move"); // Store the tableDnD object
                
            });
      
    },

    /** Get the mouse coordinates from the event (allowing for browser differences) */
    mouseCoords: function(ev){
        if(ev.pageX || ev.pageY){
            return {x:ev.pageX, y:ev.pageY};
        }
        return {
            x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
            y:ev.clientY + document.body.scrollTop  - document.body.clientTop
        };
    },

    /** Given a target element and a mouse event, get the mouse offset from that element.
        To do this we need the element's position and the mouse position */
    getMouseOffset: function(target, ev) {
        ev = ev || window.event;

        var docPos    = this.getPosition(target);
        var mousePos  = this.mouseCoords(ev);
        return {x:mousePos.x - docPos.x, y:mousePos.y - docPos.y};
    },

    /** Get the position of an element by going up the DOM tree and adding up all the offsets */
    getPosition: function(e){
        var left = 0;
        var top  = 0;
        /** Safari fix -- thanks to Luis Chato for this! */
        if (e.offsetHeight == 0) {
            /** Safari 2 doesn't correctly grab the offsetTop of a table row */
            e = e.firstChild; // a table cell
        }

        while (e.offsetParent){
            left += e.offsetLeft;
            top  += e.offsetTop;
            e     = e.offsetParent;
        }

        left += e.offsetLeft;
        top  += e.offsetTop;

        return {x:left, y:top};
    },

    mousemove: function(ev) {
        if (jQuery.tableDnD.dragObject == null) {
            return;
        }

        var dragObj = jQuery(jQuery.tableDnD.dragObject);
        var config = jQuery.tableDnD.currentTable.tableDnDConfig;
        var mousePos = jQuery.tableDnD.mouseCoords(ev);
        var y = mousePos.y - jQuery.tableDnD.mouseOffset.y;
        //auto scroll the window
        var yOffset = window.pageYOffset;
        if (document.all) {
            // Windows version
            //yOffset=document.body.scrollTop;
            if (typeof document.compatMode != 'undefined' &&
                 document.compatMode != 'BackCompat') {
               yOffset = document.documentElement.scrollTop;
            }
            else if (typeof document.body != 'undefined') {
               yOffset=document.body.scrollTop;
            }

        }
            
        if (mousePos.y-yOffset < config.scrollAmount) {
            window.scrollBy(0, -config.scrollAmount);
        } else {
            var windowHeight = window.innerHeight ? window.innerHeight
                    : document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight;
            if (windowHeight-(mousePos.y-yOffset) < config.scrollAmount) {
                window.scrollBy(0, config.scrollAmount);
            }
        }


        if (y != jQuery.tableDnD.oldY) {
            // work out if we're going up or down...
            var movingDown = y > jQuery.tableDnD.oldY;
            // update the old value
            jQuery.tableDnD.oldY = y;
            // update the style to show we're dragging
            if (config.onDragClass) {
                dragObj.addClass(config.onDragClass);
            } else {
                dragObj.css(config.onDragStyle);
            }
            // If we're over a row then move the dragged row to there so that the user sees the
            // effect dynamically
            var currentRow = jQuery.tableDnD.findDropTargetRow(dragObj, y);
            if (currentRow) {
                // TODO worry about what happens when there are multiple TBODIES
                if (movingDown && jQuery.tableDnD.dragObject != currentRow) {
                    jQuery.tableDnD.dragObject.parentNode.insertBefore(jQuery.tableDnD.dragObject, currentRow.nextSibling);
                    /**show the message to save changes*/
                    Sort.showMessage();
                } else if (! movingDown && jQuery.tableDnD.dragObject != currentRow) {
                    jQuery.tableDnD.dragObject.parentNode.insertBefore(jQuery.tableDnD.dragObject, currentRow);
                    /**show the message to save changes*/
                    Sort.showMessage();
                }
            }
        }

        return false;
    },

    /** We're only worried about the y position really, because we can only move rows up and down */
    findDropTargetRow: function(draggedRow, y) {
        var rows = jQuery.tableDnD.currentTable.rows;
        for (var i=0; i<rows.length; i++) {
            var row       = rows[i];
            var rowY      = this.getPosition(row).y;
            var rowHeight = parseInt(row.offsetHeight)/2;
            if (row.offsetHeight == 0) {
                rowY = this.getPosition(row.firstChild).y;
                rowHeight = parseInt(row.firstChild.offsetHeight)/2;
            }
            // Because we always have to insert before, we need to offset the height a bit
            if ((y > rowY - rowHeight) && (y < (rowY + rowHeight))) {
                // that's the row we're over
                // If it's the same as the current row, ignore it
                if (row == draggedRow) {
                    return null;
                }
                var config = jQuery.tableDnD.currentTable.tableDnDConfig;
                if (config.onAllowDrop) {
                    if (config.onAllowDrop(draggedRow, row)) {
                        return row;
                    } else {
                        return null;
                    }
                } else {
                    // If a row has nodrop class, then don't allow dropping (inspired by John Tarr and Famic)
                    var nodrop = $(row).hasClass("nodrop");
                    if (!nodrop) {
                        return row;
                    } else {
                        return null;
                    }
                }
                return row;
            }
        }
        return null;
    },

    mouseup: function(e) {
        if (jQuery.tableDnD.currentTable && jQuery.tableDnD.dragObject) {
            var droppedRow = jQuery.tableDnD.dragObject;
            var config = jQuery.tableDnD.currentTable.tableDnDConfig;
            // If we have a dragObject, then we need to release it,
            /**remove the selected class when mouseUp*/
            jQuery.tableDnD.makeDraggable(jQuery.tableDnD.currentTable);
            //get the current height of the Dragged object//
            jQuery.tableDnD.currentHeight = jQuery.tableDnD.getPosition(droppedRow).y;

            if (config.onDragClass) {
                jQuery(droppedRow).removeClass(config.onDragClass);
            } else {
                jQuery(droppedRow).css(config.onDropStyle);
            }
            jQuery.tableDnD.dragObject   = null;
            if (config.onDrop) {
                // Call the onDrop method if there is one
                config.onDrop(jQuery.tableDnD.currentTable, droppedRow);
            }
        }
    },

    //**this edit by Nuwan sameera for manually sorting*/
    sortManually: function(count,moveToExtreme,selectedRow,tableName) {

        jQuery.tableDnD.currentTable = document.getElementById(tableName);

        var rowHeight = selectedRow.offsetHeight;
        var dragObj = selectedRow;
        jQuery.tableDnD.currentHeight = jQuery.tableDnD.getPosition(dragObj).y;
        if (jQuery.tableDnD.currentHeight) {
            jQuery.tableDnD.selectObjectY = jQuery.tableDnD.currentHeight;
            jQuery.tableDnD.currentHeight = null;
        }

        var prevY = jQuery.tableDnD.selectObjectY;
        var y     = (jQuery.tableDnD.selectObjectY + (count>0 ? rowHeight : -rowHeight));
        var rows  = jQuery.tableDnD.currentTable.rows;
        jQuery.tableDnD.firstObjectHeight = jQuery.tableDnD.getPosition(rows[0]).y;
        jQuery.tableDnD.lastObjectHeight  = jQuery.tableDnD.getPosition(rows[(rows.length-1)]).y;
        if (moveToExtreme) {
            y = (count<0 ? jQuery.tableDnD.firstObjectHeight : jQuery.tableDnD.lastObjectHeight);
        } else if ((jQuery.tableDnD.firstObjectHeight > y) 
                    || (jQuery.tableDnD.lastObjectHeight < y)) {
            jQuery.tableDnD.selectObjectY = prevY;
            return false;
        }
        jQuery.tableDnD.selectObjectY = y;
        //auto scroll the window
        if (y != jQuery.tableDnD.oldY) {
            // work out if we're going up or down...
            var movingDown = (count > 0);
            var currentRow = jQuery.tableDnD.findDropTargetRow(dragObj, y);
            if (currentRow) {
                // TODO: worry about what happens when there are multiple TBODIES
                if (movingDown && selectedRow != currentRow) {
                    selectedRow.parentNode.insertBefore(selectedRow, currentRow.nextSibling);
                } else if (!movingDown && jQuery.tableDnD.selectObject != currentRow) {
                    selectedRow.parentNode.insertBefore(selectedRow, currentRow);
                }
            }
        }

        return true;
    },

    serialize: function() {
        if (jQuery.tableDnD.currentTable) {
            var result = "";
            var tableId = jQuery.tableDnD.currentTable.id;
            var rows = jQuery.tableDnD.currentTable.rows;
            for (var i=0; i<rows.length; i++) {

                var serializeRegexp = /[^\-]*$/;
                var aid = (rows[i].id).match(serializeRegexp)[0];
                result += aid+",";
            }
            return result;
        } else {
            return "Error: No Table id set, you need to set an id on your table and every row";
        }
    }
    
}

jQuery.fn.extend(
    {
        tableDnD : jQuery.tableDnD.build
    }
);


/**************************************************************************************
    The livequery plugin that used to live here relied on the jQuery .selector/.context
    properties (removed in jQuery 3) and overrode jQuery.fn.init. It has been removed;
    use delegated events instead, e.g. $(document).on('click', 'selector', handler)
***************************************************************************************/
