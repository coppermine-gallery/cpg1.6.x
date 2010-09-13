/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.6.01
  $HeadURL$
  $Revision$
**********************************************/

CPG - Coppermine Photo Gallery Quick-Start Guide
================================================

Congratulations on downloading the most recent, most powerful, and feature rich version of Coppermine, ever. You've already made the right decision in selecting Coppermine as your photo gallery script and just about now, you're probably wondering how to get started and you want to install CPG A.S.A.P. Right? Before that, however, make another "right" decision and take some time out to read the 'fascinating' manuals (RTFM) that come with Coppermine.

Look in the folder that you just extracted your Coppermine files into. In it, you'll find a folder called 'docs'. All the documentation for installation, faqs, administration, troubleshooting, modifying themes, and more is there. Familiarize yourself with the contents of the various docs to enhance your CPG experience and create the gallery that you've always dreamed about, in the least amount of time, and with the least amount of set-backs and frustration. Read it and in no time at all, your friends and relatives will be praising you and gawking at your incredible photo-gallery.

Even if you are installing this as an upgrade from an older version of Coppermine, you'll still need to read the docs for directions and to understand some of the major changes between CPG 1.5x and all previous versions. You'll need to know what can and cannot be ported from your previous installation to this new version. It is important to note that upgrade installations are considerably different from update installations. For example, In version 1.3.5, an 'update' to 1.3.4, the Classic theme's theme.php script was a whopping 1487 lines long. In 1.4x, an upgrade, it's a mere 24. Nope, this is NOT a miss-type. So where did all that code go? Read the docs. Your custom themes from previous versions will undoubtedly need some changes made to it before you can use them in this new version. So, just how do you go about doing that? RTFM!

This download is a stand-alone version of Coppermine Photo Gallery– if you are looking for something that integrates with a CMS (content management system), you should visit http://www.cpgnuke.com.

Ok, okay, so you don't want to read the documentation. At least, "not just yet," you say. You just want to get it up and running. Poke around and see what's what. Well, you've been warned! The rest of this guide will help walk you through the basics of installing Coppermine as a fresh, stand-alone (non-upgrade) install. (If you are trying to upgrade from a previous installation of coppermine, you already know what to do - RTFM.) Ready?

Let's Start!

Question: Does my webserver support Coppermine?
Answer: You need to have a webserver or webhost that provides the following: PHP 4.3.0 or newer (PHP 5 is supported), and MySQL 3.23.23 or newer (4.1 recommended). You also need either GD 1.xx or 2.xx (2.xx recommended) or ImageMagick installed. GD normally comes bundled with PHP; ImageMagick must be installed by your webhost.

Question: Where can I find out that stuff?
Answer: Ask your webhost, they should be able to tell you. You can also create a file called phpinfo.php, upload it to your website and enter www.yoursite.com/phpinfo.php in your browser, run it and see what versions of the above requirements you have. Only your host, however, can tell you the exact location of ImageMagick's convert utility, if it's available, at all.

To create your phpinfo file, copy the following into a text file and save the file as phpinfo.php.

    <?php
    phpinfo();
    ?>

Question: Where do I put all these files?
Answer: You could put them in your root directory (not recommended) or upload the coppermine directory to your website. If you are uncertain about where exactly to upload it,ask your webhost into what folder you need to upload your html and other script files. We recommend uploading the directory cpg15x (and all the files contained within) directly to your webhost's recommended folder and renaming to your liking after the upload is complete. Compare your uploaded files with your coppermine package. Make sure all the files were successfully uploaded.

Question: Ok, I uploaded everything to www.yoursite.com/cpg15x. Now what?
Answer: You need to change permissions on a few directories before you can do anything else. Using your FTP program or website Control Panel, change permissions on the: "include", "albums", "albums/userpics", and "albums/edit" directories to 777. You should also create a new directory in albums that you will FTP your images/files into (name it "uploads" or any thing that catches your fancy -just no spaces or funny diacritical symbols, please.) and set it's permissions to '777' also. Some server set-ups will not work with chmod '777'. In which case, you should use '755'. (Confused? Don't know what CHMODE is? You've been warned, need we say more?)

Question: I changed the permissions. What's next?
Answer: You need to create a MySQL database. Using your website Control Panel or a tool like phpMyAdmin, create a MySQL database. Write down the database name, the username and password – you'll need it to successfully install Coppermine. If you already have a database you're using for a BBS or something else, that'll work just as well. You can use that database for Coppermine, too. If you have a BBS and plan to connect it to Coppermine install, you'll need to share the database anyway.

Question: My files are in place, permissions are set, and I have my MySQL database information. What's the next step?
Answer: Read the... (Oops, sorry.)  Now you have to run the Coppermine install. Launch your web browser and enter http://www.yousite.com/coppermine/install.php and fill in the information that is requested. If you have never used ImageMagick before, leave that line blank during the install process. You can always add that information after you have Coppermine up and running.

Question: Screen went blank! Suddenly there are error messages popping up all over the place! My webhost, crashed! What do I do?
Answer: Read the documentation! If you haven't done so already, you're not going anywhere, anyway, so here's the perfect opportunity. We can wait. Chances are, you'll find the answers you need, there. All we can say at this point is that if your server crashed, it probably wasn't your install and it wasn't our fault. It was just a coincidence. Wait till it's up and running again and try the installation again. If, however, you really can't find the answers you need in the documents, go to http://coppermine-gallery.net/forum/ and review the support boards. Spend a little time looking around and search for your problem. Thousands have gone before you, so a solution for your installation issues have probably been posted, already. (HINT: search using the exact error message you see on your screen.)

Question: Ha! Ha! Got You! It's installed and working! Now what?
Answer: 1) Wipe that smile off your face. 2) Read the docs, anyway -- twice. 3) You'll need to look at the configuration of Coppermine to make sure it's set up the way you want it. Log in as the admin, if you aren't already logged in. Enable admin controls - (if the 'Hide admin controls' menu link isn't visible, you are already logged in). Click on the Config button. These are a few of the things you should pay close attention to:

* General Settings: You should put in your site name and email address, and set your GMT time zone offset.
* Language, Themes & Charset settings: Choose your default language.
* Files and thumbnails settings: Set the max size for uploaded files to whatever size you prefer in kilobytes . The default setting is 1024kb. Make sure that this maximum file size is within the maximum allowed by your webhost. While you are at it, you should also set the "max width or height for uploaded pictures/videos (pixels)" – this will prevent your users from uploading images that are larger than what is desireable. If you would like Coppermine to automatically resize images that are larger than what you've designated in the Config settings, set "auto resize images that are larger than max width or height" to either: "Yes:Everyone" or "Yes:User only". "Everyone" means everybody, including when the administrator(you) batch-adds pictures, and User means just your gallery members when they upload pictures.
* Files and thumbnails advanced settings: Make sure you have the correct image manipulation software selected. If you are using GD, you should select GD2 if available on your webserver. If you plan to use ImageMagick you should put in the path now to the binaries (make sure it ends with a trailing slash "/"). Do you want to allow your members to be able to create private albums? If you do, be sure to set "Users can have private albums" to 'Yes'.
* User settings: If you plan to let people register and upload pictures, make certain that you set "Allow new user registrations" to 'Yes'.
* You also want to take a peek at the groups settings. Coppermine comes with four groups by default: administrators, registered users, anonymous users, and banned users. This is where you control permissions to send e-cards, upload files, etc. This is also where you can set the maximum allowed disk space for each group (disk quota). It's set to 1024kb by default.

Question: I think everything is set correctly. Can I upload pictures yet?
Answer: No. First you need to create an album to put them in. In the same row as the Config link or button, you'll see a link called Albums. Click on it and you are taken to a screen that allows you to create an album. Click "New Album", then rename it to whatever you'd like. Click "Apply changes" and presto! You now have an album.

Question: I made an album, so now can I upload pictures?
Answer: Yes. As the admin, you should use an FTP program to upload your pictures to your website, then do a batch-add to put them into your Coppermine database. Back at the beginning of this guide I told you to create a directory in albums for just this purpose. Let's say you made one called "uploads". FTP your images to your albums/uploads folder. When that's done, click on batch-add. Select uploads as the directory. You are now presented with a list of all the pictures you just uploaded. By default Coppermine selects all of the images. Select the album (uploads) to put them into, then click Go. You now have an online gallery with pictures to look at! Aren't you amazing!

Question: Now, can I add a title to a picture?
Answer: Yes you can. On the main Coppermine screen, when you are logged in as an admin, you'll see a number of options listed next to the album. If you click on "edit files" you will be able to add all sorts of information to each picture.

Question: I can delete the original pictures now, right? After all, they are in the database, right?
Answer: Wrong! Coppermine doesn't actually put the pictures into the database. It just uses the database to remember where the pictures are stored on the webserver, what album and category they belong to, and other information related to the pictures. If you delete the original picture, it will cause a bunch of errors. If you want to delete the original, read the documentation on what the Admin Tools are for and can do for you. You should never delete anything using your webhost tools or ftp program that can be handled internally with coppermine. Doing so can lead to a host of mysql database errors.

You are now successfully running Coppermine on your website! Now take a few minutes to read the documentation so you'll know how to administer your gallery. Coppermine is very powerful and can do a lot more than what you probably thought was possible.

Experiment with it with just a few pictures, categories, and albums at first. Set it up exactly the way you want it before adding a bunch of pictures. Most of all have a good time! Oh yeah, and don't forget, RTFM!


The Coppermine Dev Team
http://coppermine-gallery.net