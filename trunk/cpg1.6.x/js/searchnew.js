/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

// Queue manager object - manages the queue
var qm = {

    // Store the assigned process limits
    maxprocesses: js_vars.proc_limit,
    
    // Concurrent process counter
    processes: 0,
    
    // List of jobs which are pending
    pending: [],
    
    // Selected album
    aid: 0,
        
    // Looks for a chance to start new jobs 
    step: function () {

        // Starts as many as limit allows, assuming we have anything left to do
        while (this.processes < this.maxprocesses && this.pending.length > 0) {
        
            // Grab next job from pending list
            var nextjob = this.pending.shift();
            
            // signal it to start
            nextjob.commence();
            
            // increment the process counter
            this.processes++;
        }
    },

    // Add a job to the pending queue
    add: function (job) {
        this.pending.push(job);
    },

    // Queue manager is notified of a completed job 
    notifydone: function () {

        // Decrement the process counter
        this.processes--;
        
        // Look for next job
        this.step();
        
        // If queue is empty and that was last running job we announce completion
        if (this.pending.length === 0 && this.processes === 0) {
            this.queuedone();
        }
    },
    
    queuedone: function () {
        redirect('editpics.php?album=' + this.aid);
    }
};

// Job class - represents a single job in the system
function Job(obj) {

    // This is the object we are representing, update its status as things happen
    this.obj = obj;
    
    // Register methods
    this.commence = job_start;
    this.notifydone = job_done;
    this.notifyfailed = job_failed;
}

// Start the job
function job_start() {
    
    // Get url stub from the p tag's name
    var url = this.obj.getAttribute('name');
    
    // append the album id
    url += '&aid=' + qm.aid;
    
    // Send http request
    request(url, this);
}

// Job is completed
function job_done(response) {

    var src;
    
    switch (response) {
    
    case 'OK':
        src = 'images/batch/ok.png';
        break;

    case 'DUPE':
        src = 'images/batch/duplicate.png';
        break;
    
    case 'PB':
        src = 'images/batch/folder_locked.png';
        break;      
    }

    var img = document.createElement('img');
    img.setAttribute('src', src);
    
    this.obj.appendChild(img);
    
    // Notify the queue manager
    qm.notifydone();
}

// Job has failed (http request failed)
function job_failed() {
    job_done('PB');
}

// Sends the http request
function request(url, job) {

    $.ajax({
        url: url,
        cache: false,
        success: function (data) {
            job.notifydone(data);
        },
        error: function (data) {
            job.notifyfailed(data);
        }
    });
}

// Start the script
function process() {

    var aidbox = document.getElementById('aid');
    
    // append the album id
    qm.aid = aidbox.options[aidbox.selectedIndex].value;
    
    if (qm.aid == 0) {
        alert(js_vars.no_album_selected);
        return false;
    }
    
    // Collect object that represent jobs from the html list
    var queuelist = document.getElementById('queue');
    var objects = queuelist.getElementsByTagName('p');

    // Cycle through the objects, making jobs from them, adding them to the queue manager
    for (var i = 0; i < objects.length; i++) {
    
        // if this is image is not selected then skip it
        if (document.getElementById('checkbox_' + objects[i].id).checked === false) {
            continue;
        }   
        
        // add job to queue
        qm.add(new Job(objects[i]));
        
        // clear the display from any previous run
        objects[i].innerHTML = '';
    }
    
    // Start the queue manager
    qm.step();
    
    return false;
}

function searchnewPageLoaded() {
    $('#submit_button, #submit_button_bottom').click(process);
}

addonload('searchnewPageLoaded()');