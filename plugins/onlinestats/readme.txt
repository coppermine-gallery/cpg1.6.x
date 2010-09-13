/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
  **********************************************
  Plugin "Who is online" aka "onlinestats" for cpg1.5.x
  This plugin has been re-designed to work with cpg1.5.x only. Do not use it with cpg1.4.x
  **********************************************
  Modified by Frantz to add language files
  **********************************************/

What it does:
-------------
Displays number and identity of users currently browsing the gallery.
This plugin has been originally created for cpg1.4.x (based on the mod for cpg1.3.x) and adapted for cpg1.5.x

=========================================================================

Credits:
--------
This plugin was created by Nibbler. It is based on the "Who is online mod" for cpg1.3.x.
Don't try to contact the plugin author for support - post on the board publicly instead.

=========================================================================

Caveats:
--------
The plugin runs additional queries on the database each time it is being executed, burning cpu cycles and using resources. If your coppermine gallery is slow or has got a lot of users, you shouldn't use it.

Changes:
--------
From 1.1 to 1.2
* Fixed the set duration not being taken into account
* Language files avaible now for internationalisation

From 1.2 to 1.6
* Unknown changes, contributors failed to modify this file

From 1.6 to 1.7
* Updated version number in header
* Re-packaged with language files
* Minor fixes in HTML output for standards compliance

From 1.7 to 1.8
* Improved bridge compatibility
* Added Spanish and Lithuanian language files (user contributions)
* Corrected double application of timezone offset
* Added missing code in uninstall to clean records
* Minor changes to english lang file

From 1.8 to 2.0
* Replaced internationalization includes with correlation to core language file
* Introduced sanitization (Inspekt) to make this plugin fit for being used with cpg1.5.x
* Added feature to enable the plugin once it get's installed by adding the string "onlinestats" to the config field "content of the main page" during plugin install
* Cleaned up table layout

From 2.0 to 2.2
* Added config page link
* Added option to move onlinestats placeholder around on plugin config screen