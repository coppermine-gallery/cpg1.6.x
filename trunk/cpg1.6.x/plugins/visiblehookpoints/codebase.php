<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
  
**********************************************/

$vhp_tableHeaderCounter = 0;

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');
$superCage = Inspekt::makeSuperCage();
// Add an install action
$thisplugin->add_action('plugin_install','visiblehookpoints_install');

// Add an uninstall action
$thisplugin->add_action('plugin_uninstall','visiblehookpoints_uninstall');

// Add a configure action
$thisplugin->add_action('plugin_configure','visiblehookpoints_configure');

if ($superCage->get->keyExists('hookpoints') || $CONFIG['plugin_visiblehookpoints_display'] == 1 || ($CONFIG['plugin_visiblehookpoints_display'] == 2 && GALLERY_ADMIN_MODE)) {

	$thisplugin->add_filter('anycontent','vhp_anycontent'); // ( anycontent page + plugin accessible content )
	$thisplugin->add_filter('gallery_header','vhp_gallery_header'); // (shows just above the gallery)
	$thisplugin->add_filter('gallery_footer','vhp_gallery_footer'); // (allows data just above the &quot;powered by coppermine&quot; notice)
	$thisplugin->add_filter('file_header','vhp_file_header'); // (displays above file on displayimage page)
	$thisplugin->add_filter('file_footer','vhp_file_footer'); // (displays below file on displayimage page)
	$thisplugin->add_filter('thumb_header','vhp_thumb_header'); // (displays above thumbs on index, thumbnails, and displayimage pages) ?
	$thisplugin->add_filter('thumb_footer','vhp_thumb_footer'); // (displays below thumbs on index, thumbnails, and displayimage pages) ?
	$thisplugin->add_filter('plugin_block','vhp_plugin_block'); // (filters main page blocks) //output one for each block
	$thisplugin->add_filter('thumb_caption','vhp_thumb_caption'); // (executed before the more specific &quot;thumb_caption_*&quot; plugins.)
	$thisplugin->add_filter('thumb_caption_regular','vhp_thumb_caption_regular'); //
	$thisplugin->add_filter('thumb_caption_lastcom','vhp_thumb_caption_lastcom'); //
	$thisplugin->add_filter('thumb_caption_lastcomby','vhp_thumb_caption_lastcomby'); //
	$thisplugin->add_filter('thumb_caption_lastup','vhp_thumb_caption_lastup'); //
	$thisplugin->add_filter('thumb_caption_topn','vhp_thumb_caption_topn'); //
	$thisplugin->add_filter('thumb_caption_toprated','vhp_thumb_caption_toprated'); //
	$thisplugin->add_filter('thumb_caption_lasthits','vhp_thumb_caption_lasthits'); //
	$thisplugin->add_filter('thumb_caption_random','vhp_thumb_caption_random'); //
	$thisplugin->add_filter('thumb_caption_search','vhp_thumb_caption_search'); //
	$thisplugin->add_filter('thumb_caption_lastalb','vhp_thumb_caption_lastalb'); //
	$thisplugin->add_filter('thumb_caption_favpics','vhp_thumb_caption_favpics'); //
	$thisplugin->add_filter('post_breadcrumb','vhp_post_breadcrumb'); //(only on thumbnails.php and displayimage.php)
	$thisplugin->add_filter('user_caption_params','vhp_user_caption_params');
	$thisplugin->add_filter('thumb_data','vhp_thumb_data');
	$thisplugin->add_filter('file_data','vhp_file_data');
	$thisplugin->add_filter('usermgr_header','vhp_usermgr_header');
	$thisplugin->add_filter('usermgr_footer','vhp_usermgr_footer');
	$thisplugin->add_filter('page_html','vhp_page_html');
	$thisplugin->add_filter('page_meta','vhp_page_meta');
	$thisplugin->add_action('page_start','vhp_page_start');
	$thisplugin->add_action('page_end','vhp_page_end');
	$thisplugin->add_action('plugin_wakeup','vhp_plugin_wakeup'); // ( ...when initialized )
	$thisplugin->add_action('plugin_sleep','vhp_plugin_sleep'); // ( ...when shutdown )
}

function vhp_plugin_wakeup()
{
        return vhp_echo_marker('plugin_wakeup',true);
}

function vhp_page_end()
{
        return vhp_echo_marker('page_end',true);
}

function vhp_page_start() {
        return vhp_echo_marker('page_start',true);
}

function vhp_page_meta($var) {
	global $JS, $LINEBREAK; // Don't forget to make that variable global when using from inside functions
	$JS['includes'][] = 'plugins/visiblehookpoints/js/script.js';
    $var = vhp_echo_marker('page_meta',$var);
    $var = '<link rel="stylesheet" href="plugins/visiblehookpoints/css/style.css" type="text/css" />' . $LINEBREAK . $var;
    return $var;
}

function vhp_file_data($var) {
        return vhp_echo_marker('file_data',$var);
}

function vhp_usermgr_footer($var) {
        return vhp_echo_marker('usermgr_footer',$var);
}

function vhp_anycontent($var) {
        return vhp_echo_marker('anycontent',$var);
}
function vhp_gallery_header($var) {
        return vhp_echo_marker('gallery_header',$var);
}

function vhp_gallery_footer($var) {
        return vhp_echo_marker('gallery_footer',$var);
}
function vhp_file_header($var) {
        return vhp_echo_marker('file_header',$var);
}

function vhp_file_footer($var) {
        return vhp_echo_marker('file_footer',$var);
}

function vhp_thumb_header($var) {
        return vhp_echo_marker('thumb_header',$var);
}
function vhp_thumb_footer($var) {
        return vhp_echo_marker('thumb_footer',$var);
}
function vhp_thumb_caption($var) {
        return vhp_echo_marker('thumb_caption',$var);
}

function vhp_thumb_caption_regular($var) {
        return vhp_echo_marker('thumb_caption_regular',$var);
}
function vhp_thumb_caption_lastcom($var) {
        return vhp_echo_marker('thumb_caption_lastcom',$var);
}

function vhp_thumb_caption_lastcomby($var) {
        return vhp_echo_marker('thumb_caption_lastcomby',$var);
}
function vhp_thumb_caption_lastup($var) {
        return vhp_echo_marker('thumb_caption_lastup',$var);
}
function vhp_thumb_caption_topn($var) {
        return vhp_echo_marker('thumb_caption_topn',$var);
}

function vhp_thumb_caption_toprated($var) {
        return vhp_echo_marker('thumb_caption_toprated',$var);
}
function vhp_thumb_caption_lasthits($var) {
        return vhp_echo_marker('thumb_caption_lasthits',$var);
}
function vhp_thumb_caption_random($var) {
        return vhp_echo_marker('thumb_caption_random',$var);
}

function vhp_thumb_caption_search($var) {
        return vhp_echo_marker('thumb_caption_search',$var);
}
function vhp_thumb_caption_lastalb($var) {
        return vhp_echo_marker('thumb_caption_lastalb',$var);
}
function vhp_thumb_caption_favpics($var) {
        return vhp_echo_marker('thumb_caption_favpics',$var);
}

function vhp_post_breadcrumb($var) {
        return vhp_echo_marker('post_breadcrumb',$var);
}
function vhp_user_caption_params($var) {
        return vhp_echo_marker('user_caption_params',$var);
}

function vhp_thumb_data($var) {
        return vhp_echo_marker('thumb_data',$var);
}

function vhp_plugin_block($var) {
        return vhp_echo_marker('plugin_block_'.$var[1],$var);
}
function vhp_page_html($var) {
    return vhp_echo_marker('page_html',$var);
}

function vhp_echo_marker($marker,$var)
{

    global $VHP,$cpg_time_start;

    if (!isset($VHP)) $VHP=array();

    $VHP[][$marker]=round(cpgGetMicroTime() - $cpg_time_start, 3);

    dbug(array(strtoupper($marker)=>$var));

        if (!is_array($var) && !is_bool($var) && $marker != 'page_html') {
                $var.=dbug_export(array(strtoupper($marker)=>$var),'',$marker);
        }

        return $var;
}

function vhp_plugin_sleep($var)
{
        vhp_echo_marker('plugin_sleep',$var);
        echo vhp_stats();
        return true;
}

function vhp_stat_table($title,$status)
{
    global $LINEBREAK, $vhp_tableHeaderCounter;
    $vhp_tableHeaderCounter++;
    //$column1=ceil(count($status)/3);
    $entries=ceil(count($status)/3);

    $columns[0]=array_slice($status,0,$entries);
    $columns[1]=array_slice($status,$entries,$entries);
    $columns[2]=array_slice($status,2*$entries);

    $html .= <<<EOT
    <div id="vhp_head_'.$vhp_tableHeaderCounter.'" class="vhp_head" onclick="vhp_toggle_cell_parent('{$vhp_tableHeaderCounter}');">{$title}
    </div>
    <div id="vhp_cell_{$vhp_tableHeaderCounter}" class="vhp_cell" style="display:none">
    <table border="0" width="100%">
       <tr class="tableh1">
            <th>Name</th>
            <th>Value</th>
            <th>Name</th>
            <th>Value</th>
            <th>Name</th>
            <th>Value</th>
       </tr>
EOT;
    for ($entry=0;$entry<$entries;$entry++) {
        $html .= '<tr>' . $LINEBREAK;
        for ($column=0;$column<3;$column++) {
            $html .= "<th class=\"tableh2\">{$columns[$column][$entry]['Variable_name']}</th>" . $LINEBREAK;
            $html .= "<td class=\"tableb\">{$columns[$column][$entry]['Value']}</td>" . $LINEBREAK;
        }
        $html .= '</tr>' . $LINEBREAK;
    }
    $html .= '</table>' . $LINEBREAK;
    $html .= '</div>' . $LINEBREAK;
    //$html = testoutput();
    return $html;
}

function vhp_stats()
{
    global $VHP;
    $html ='';
    $marks=$times=$counts=array();
    foreach ($VHP as $value) {
        foreach ($value as $marker=>$time) {
            $marks[$marker]++;
            $times[]=array('Variable_name'=>$marker,'Value'=>$time);
        }
    }
    ksort($marks);
    foreach ($marks as $marker=>$count) {
          $counts[]=array('Variable_name'=>$marker,'Value'=>$count);
    }
    $html .= '<div class="vhp_wrap">';
    $html .= vhp_stat_table('Visual Hookpoint Marker Usage Stats',$counts);
    $html .= '</div>';
    $html .= '<div class="vhp_wrap">';
    $html .= vhp_stat_table('Visual Hookpoint Time Chart in Seconds from CPG_TIME_START',$times);
    $html .= '</div>';
    return $html;
}


/*********************************************************************************************************************\
 *
 * AUTHOR
 * =============
 * Kwaku Otchere
 * ospinto@hotmail.com
 *
 * Thanks to Andrew Hewitt (rudebwoy@hotmail.com) for the idea and suggestion
 *
 * All the credit goes to ColdFusion's brilliant cfdump tag
 * Hope the next version of PHP can implement this or have something similar
 * I love PHP, but var_dump BLOWS!!!
 *
 * FOR DOCUMENTATION AND MORE EXAMPLES: VISIT http://dbug.ospinto.com
 *
 *
 * PURPOSE
 * =============
 * Dumps/Displays the contents of a variable in a colored tabular format
 * Based on the idea, javascript and css code of Macromedia's ColdFusion cfdump tag
 * A much better presentation of a variable's contents than PHP's var_dump and print_r functions
 *
 *
 * USAGE
 * =============
 * new dBug ( variable [,forceType] );
 * example:
 * new dBug ( $myVariable );
 *
 *
 * if the optional "forceType" string is given, the variable supplied to the
 * function is forced to have that forceType type.
 * example: new dBug( $myVariable , "array" );
 * will force $myVariable to be treated and dumped as an array type,
 * even though it might originally have been a string type, etc.
 *
 * NOTE!
 * ==============
 * forceType is REQUIRED for dumping an xml string or xml file
 * new dBug ( $strXml, "xml" );
 *
\*********************************************************************************************************************/

function dbug($var,$type='')
{
    new dBug($var,$type);
}

function dbug_export($var,$type='',$marker)
{
    ob_start();
    new dBug($var,$type);
    return ob_get_clean();
}

if (!class_exists('dBug')) {
    class dBug {

            var $xmlDepth=array();
            var $xmlCData;
            var $xmlSData;
            var $xmlDData;
            var $xmlCount=0;
            var $xmlAttrib;
            var $xmlName;
            var $arrType=array("array","object","resource","boolean");

            //constructor
            function dBug($var,$forceType="") {
                    $arrAccept=array("array","object","xml"); //array of variable types that can be "forced"
                    if(in_array($forceType,$arrAccept))
                            $this->{"varIs".ucfirst($forceType)}($var);
                    else
                            $this->checkType($var);
            }

            //create the main table header
            function makeTableHeader($type, $header, $colspan = 2) {
                    global $vhp_tableHeaderCounter, $vhp_tableCellCounter;
                    $vhp_tableHeaderCounter++;
                    $vhp_tableCellCounter++;
                    echo '<div class="vhp_wrap">' . $LINEBREAK;
                    if ($vhp_tableCellCounter == 1) {
                        echo '<div id="vhp_head_'.$vhp_tableHeaderCounter.'" class="vhp_head dBug_'.$type.'Header" onclick="vhp_toggle_cell_parent(\''.$vhp_tableHeaderCounter.'\');">';
                    } else {
                        echo '<div id="vhp_head_'.$vhp_tableHeaderCounter.'" class="vhp_head dBug_'.$type.'Header" onclick="vhp_toggle_cell_child(\''.$vhp_tableHeaderCounter.'\');">';
                    }
                    echo $header.'</div>';
                    echo '<div id="vhp_cell_'.$vhp_tableHeaderCounter.'" class="vhp_cell" style="display:none"><table cellspacing="2" cellpadding="3" class="dBug_'.$type.'">';
            }

            //create the table row header 
            function makeTDHeader($type,$header) {
                    echo "<tr>
                                    <td valign=\"top\" onclick=\"dBug_toggleRow(this)\" style=\"cursor:hand\" class=\"dBug_".$type."Key\">".$header."</td>
                                    <td>";
            }

            //close table row
            function closeTDRow() {
                    global $LINEBREAK;
                    return '</td>' . $LINEBREAK . '</tr>';
            }

            //error
            function  error($type) {
                    $error="Error: Variable is not a";
                    //thought it would be nice to place in some nice grammar techniques :)
                    // this just checks if the type starts with a vowel or "x" and displays either "a" or "an"
                    if(in_array(substr($type,0,1),array("a","e","i","o","u","x")))
                            $error.="n";
                    return ($error." ".$type." type");
            }

            //check variable type
            function checkType($var) {
                    global $LINEBREAK;
                    switch(gettype($var)) {
                            case "resource":
                                    $this->varIsResource($var);
                                    break;
                            case "object":
                                    $this->varIsObject($var);
                                    break;
                            case "array":
                                    $this->varIsArray($var);
                                    break;
                            case "boolean":
                                    $this->varIsBoolean($var);
                                    break;
                            default:
                                    $var=($var=="") ? "[empty string]" : $var;
                                    echo '<table cellspacing="0"><tr>' . $LINEBREAK . '<td>'.$var.'</td>' . $LINEBREAK . '</tr>' . $LINEBREAK . '</table>' . $LINEBREAK;
                                    break;
                    }
            }

            //if variable is a boolean type
            function varIsBoolean($var) {
                    global $LINEBREAK;
                    $var=($var==1) ? "TRUE" : "FALSE";
                    echo $var.'</td>' . $LINEBREAK . '</tr>' . $LINEBREAK;
            }

            //if variable is an array type
            function varIsArray($var) {
                    global $LINEBREAK, $vhp_tableCellCounter;
                    if(is_array($var)) {
                            $loopCounter = 0;
                            foreach($var as $key=>$value) {
                                    if ($loopCounter == 0) {
                                        $this->makeTableHeader("array", $key);
                                    }
                                    $this->makeTDHeader("array",$key);
                                    if (in_array(gettype($value),$this->arrType))
                                            $this->checkType($value);
                                    else {
                                            $value=(trim($value)=="") ? "[empty string]" : $value;
                                            //echo '['.$vhp_tableCellCounter.']';
                                            echo $value.'</td>' . $LINEBREAK . '</tr>' . $LINEBREAK;
                                    }
                                    $loopCounter++;
                            }
                    } else {
                        $this->makeTableHeader("array","error");
                        echo "<tr><td>".$this->error("array").$this->closeTDRow();
                    }
                    echo '</table></div>'.$LINEBREAK;
                    echo '</div>'.$LINEBREAK;
                    $vhp_tableCellCounter--;
            }

            //if variable is an object type
            function varIsObject($var) {
                    $this->makeTableHeader("object","object");
                    $arrObjVars=get_object_vars($var);
                    if(is_object($var)) {
                            foreach($arrObjVars as $key=>$value) {
                                    $value=(trim($value)=="") ? "[empty string]" : $value;
                                    $this->makeTDHeader("object",$key);
                                    if(in_array(gettype($value),$this->arrType))
                                            $this->checkType($value);
                                    else echo $value.$this->closeTDRow();
                            }
                            $arrObjMethods=get_class_methods(get_class($var));
                            foreach($arrObjMethods as $key=>$value) {
                                    $this->makeTDHeader("object",$value);
                                    echo "[function]".$this->closeTDRow();
                            }
                    } else {
                        echo "<tr><td>".$this->error("object").$this->closeTDRow();
                    }
                    echo "</table>";
            }

            //if variable is a resource type
            function varIsResource($var) {
                    global $LINEBREAK;
                    $this->makeTableHeader("resourceC","resource",1);
                    echo '<tr>' . $LINEBREAK . '<td>' . $LINEBREAK;
                    switch(get_resource_type($var)) {
                            case "fbsql result":
                            case "mssql result":
                            case "msql query":
                            case "pgsql result":
                            case "sybase-db result":
                            case "sybase-ct result":
                            case "mysql result":
                                    $db=current(explode(" ",get_resource_type($var)));
                                    $this->varIsDBResource($var,$db);
                                    break;
                            case "gd":
                                    $this->varIsGDResource($var);
                                    break;
                            case "xml":
                                    $this->varIsXmlResource($var);
                                    break;
                            default:
                                    echo get_resource_type($var).$this->closeTDRow();
                                    break;
                    }
                    echo $this->closeTDRow().'</table>' . $LINEBREAK;
            }

            //if variable is an xml type
            function varIsXml($var) {
                    $this->varIsXmlResource($var);
            }

            //if variable is an xml resource type
            function varIsXmlResource($var) {
                    global $LINEBREAK;
                    $xml_parser=xml_parser_create();
                    xml_parser_set_option($xml_parser,XML_OPTION_CASE_FOLDING,0);
                    xml_set_element_handler($xml_parser,array(&$this,"xmlStartElement"),array(&$this,"xmlEndElement"));
                    xml_set_character_data_handler($xml_parser,array(&$this,"xmlCharacterData"));
                    xml_set_default_handler($xml_parser,array(&$this,"xmlDefaultHandler"));

                    $this->makeTableHeader("xml","xml document",2);
                    $this->makeTDHeader("xml","xmlRoot");

                    //attempt to open xml file
                    $bFile=(!($fp=@fopen($var,"r"))) ? false : true;

                    //read xml file
                    if($bFile) {
                            while($data=str_replace("\n","",fread($fp,4096)))
                                    $this->xmlParse($xml_parser,$data,feof($fp));
                    }
                    //if xml is not a file, attempt to read it as a string
                    else {
                            if(!is_string($var)) {
                                    echo $this->error("xml").$this->closeTDRow().'</table>' . $LINEBREAK;
                                    return;
                            }
                            $data=$var;
                            $this->xmlParse($xml_parser,$data,1);
                    }

                    echo $this->closeTDRow().'</table>' . $LINEBREAK;

            }

            //parse xml
            function xmlParse($xml_parser,$data,$bFinal) {
                    global $LINEBREAK;
                    if (!xml_parse($xml_parser,$data,$bFinal)) {
                                       die(sprintf("XML error: %s at line %d" . $LINEBREAK,
                                                               xml_error_string(xml_get_error_code($xml_parser)),
                                                               xml_get_current_line_number($xml_parser)));
                    }
            }

            //xml: inititiated when a start tag is encountered
            function xmlStartElement($parser,$name,$attribs) {
                    $this->xmlAttrib[$this->xmlCount]=$attribs;
                    $this->xmlName[$this->xmlCount]=$name;
                    $this->xmlSData[$this->xmlCount]='$this->makeTableHeader("xml","xml element",2);';
                    $this->xmlSData[$this->xmlCount].='$this->makeTDHeader("xml","xmlName");';
                    $this->xmlSData[$this->xmlCount].='echo "<strong>'.$this->xmlName[$this->xmlCount].'</strong>".$this->closeTDRow();';
                    $this->xmlSData[$this->xmlCount].='$this->makeTDHeader("xml","xmlAttributes");';
                    if(count($attribs)>0)
                            $this->xmlSData[$this->xmlCount].='$this->varIsArray($this->xmlAttrib['.$this->xmlCount.']);';
                    else
                            $this->xmlSData[$this->xmlCount].='echo "&nbsp;";';
                    $this->xmlSData[$this->xmlCount].='echo $this->closeTDRow();';
                    $this->xmlCount++;
            }

            //xml: initiated when an end tag is encountered
            function xmlEndElement($parser,$name) {
                    for($i=0;$i<$this->xmlCount;$i++) {
                            eval($this->xmlSData[$i]);
                            $this->makeTDHeader("xml","xmlText");
                            echo (!empty($this->xmlCData[$i])) ? $this->xmlCData[$i] : "&nbsp;";
                            echo $this->closeTDRow();
                            $this->makeTDHeader("xml","xmlComment");
                            echo (!empty($this->xmlDData[$i])) ? $this->xmlDData[$i] : "&nbsp;";
                            echo $this->closeTDRow();
                            $this->makeTDHeader("xml","xmlChildren");
                            unset($this->xmlCData[$i],$this->xmlDData[$i]);
                    }
                    echo $this->closeTDRow();
                    echo "</table>";
                    $this->xmlCount=0;
            }

            //xml: initiated when text between tags is encountered
            function xmlCharacterData($parser,$data) {
                    $count=$this->xmlCount-1;
                    if(!empty($this->xmlCData[$count]))
                            $this->xmlCData[$count].=$data;
                    else
                            $this->xmlCData[$count]=$data;
            }

            //xml: initiated when a comment or other miscellaneous texts is encountered
            function xmlDefaultHandler($parser,$data) {
                    //strip '<!--' and '-->' off comments
                    $data=str_replace(array("&lt;!--","--&gt;"),"",htmlspecialchars($data));
                    $count=$this->xmlCount-1;
                    if(!empty($this->xmlDData[$count]))
                            $this->xmlDData[$count].=$data;
                    else
                            $this->xmlDData[$count]=$data;
            }

            //if variable is a database resource type
            function varIsDBResource($var,$db="mysql") {
                    $numrows=call_user_func($db."_num_rows",$var);
                    $numfields=call_user_func($db."_num_fields",$var);
                    $this->makeTableHeader("resource",$db." result",$numfields+1);
                    echo "<tr><td class=\"dBug_resourceKey\">&nbsp;</td>";
                    for($i=0;$i<$numfields;$i++) {
                            $field[$i]=call_user_func($db."_fetch_field",$var,$i);
                            echo "<td class=\"dBug_resourceKey\">".$field[$i]->name."</td>";
                    }
                    echo "</tr>";
                    for($i=0;$i<$numrows;$i++) {
                            $row=call_user_func($db."_fetch_array",$var,constant(strtoupper($db)."_ASSOC"));
                            echo '<tr>' . $LINEBREAK;
                            echo '<td class="dBug_resourceKey">'.($i+1).'</td>';
                            for($k=0;$k<$numfields;$k++) {
                                    $fieldrow=$row[($field[$k]->name)];
                                    $fieldrow=($fieldrow=="") ? "[empty string]" : $fieldrow;
                                    echo '<td>'.$fieldrow.'</td>' . $LINEBREAK;
                            }
                            echo '</tr>' . $LINEBREAK;
                    }
                    echo "</table>";
                    if($numrows>0)
                            call_user_func($db."_data_seek",$var,0);
            }

            //if variable is an image/gd resource type
            function varIsGDResource($var) {
                    $this->makeTableHeader("resource","gd",2);
                    $this->makeTDHeader("resource","Width");
                    echo imagesx($var).$this->closeTDRow();
                    $this->makeTDHeader("resource","Height");
                    echo imagesy($var).$this->closeTDRow();
                    $this->makeTDHeader("resource","Colors");
                    echo imagecolorstotal($var).$this->closeTDRow();
                    echo "</table>";
            }
    }
}


// Install function
function visiblehookpoints_install() {
    global $CONFIG;
	$superCage = Inspekt::makeSuperCage();
	if ($superCage->post->keyExists('visiblehookpoints_display')) {
        // Perform database queries
		if ($superCage->post->getInt('visiblehookpoints_display') == 1) {
          $value = 1;
		} elseif ($superCage->post->getInt('visiblehookpoints_display') == 0) {
          $value = 0;
        } elseif ($superCage->post->getInt('visiblehookpoints_display') == 2) {
          $value = 2;
        } elseif (array_key_exists('plugin_visiblehookpoints_display', $CONFIG) == TRUE) {
          $value = $CONFIG['plugin_visiblehookpoints_display'];
        } else {
          $value = 0;
        }
        if (array_key_exists('plugin_visiblehookpoints_display', $CONFIG) == FALSE) {
            $f= cpg_db_query("INSERT INTO {$CONFIG['TABLE_CONFIG']} VALUES ('plugin_visiblehookpoints_display', '{$value}')");
        } else {
            $f= cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$value}' WHERE name = 'plugin_visiblehookpoints_display'");
        }
        return true;
    // Loop again
    } else {
        return 1;
    }
}

// Uninstall function
function visiblehookpoints_uninstall() {
    global $CONFIG;
    $f= cpg_db_query("DELETE FROM {$CONFIG['TABLE_CONFIG']} WHERE `name` = 'plugin_visiblehookpoints_display'");
    return true;
}


// Configure function
// Displays the form
function visiblehookpoints_configure() {
    global $CONFIG;
	$superCage = Inspekt::makeSuperCage();
	$req_uri = $superCage->server->getMatched('REQUEST_URI', '/([^\/]+\.php)$/');
	$req_uri = $req_uri[1];
    if ($CONFIG['plugin_visiblehookpoints_display'] == 1) {
      $invisible = '';
      $visible = 'checked="checked"';
      $admin_only = '';
    } elseif($CONFIG['plugin_visiblehookpoints_display'] == 0) {
      $invisible = 'checked="checked"';
      $visible = '';
      $admin_only = '';
    } else {
      $invisible = '';
      $visible = '';
      $admin_only = 'checked="checked"';
    }
    $help_invisible = '&nbsp;'.cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize('Adding the hookpoint parameter manually'))).'&amp;t='.urlencode(base64_encode(serialize('Manually add the parameter &quot;hookpoint&quot; to the URL in the address bar of your browser (e.g. <tt class="code">'.$CONFIG['ecards_more_pic_target'].'index.php?hookpoint</tt>) to see the hookpoints. This option is meant for live, production galleries, where you wouldn\'t want to display the hookpoints to every site visitor.'))),470,245);
    $help_visible = '&nbsp;'.cpg_display_help('f=empty.htm&amp;base=64&amp;h='.urlencode(base64_encode(serialize('Displaying the hookpoints for everyone'))).'&amp;t='.urlencode(base64_encode(serialize('Only choose this option on your testbed server, i.e. for galleries that don\'t run in a production environment, as the hookpoints will be displayed for all gallery visitors.'))),470,245);
    echo <<< EOT
    <form name="cpgform" id="cpgform" action="{$req_uri}" method="post">
EOT;
    starttable('100%', 'Configuration of plugin &quot;Visible HookPoints&quot;', 1);
    echo <<< EOT
              <tr>
                <td class="tableh2">
                  <h3>Choose visibility option of hooks</h3>
                </td>
              </tr>
              <tr>
                <td class="tableb">
                  <input type="radio" name="visiblehookpoints_display" id="invisible" value="0" class="radio" {$invisible} />
                  <label for="invisible" class="clickable_option">Only visible with URL-parameter &quot;hookpoints&quot;</label>{$help_invisible}
              </tr>
              <tr>
                <td class="tableb tableb_alternate">
                  <input type="radio" name="visiblehookpoints_display" id="visible" value="1" class="radio" {$visible} />
                  <label for="visible" class="clickable_option">Visible permanently for everyone</label>{$help_visible}
              </tr>
              <!--<tr>
                <td class="tableb">
                  <input type="radio" name="visiblehookpoints_display" id="admin_only" value="2" class="radio" {$admin_only} />
                  <label for="admin_only" class="clickable_option">Only visible for the admin</label>
              </tr>-->
              <tr>
                <td class="tablef">
                  <input type="submit" value="Go!" class="button" />
                </td>
              </tr>
EOT;
    endtable();
    echo <<< EOT
    </form>
EOT;
}


?>