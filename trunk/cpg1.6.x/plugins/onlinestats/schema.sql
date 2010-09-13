##  ********************************************
##  Coppermine Photo Gallery
##  ************************
##  Copyright (c) 2003-2010 Coppermine Dev Team
##  v1.0 originally written by Gregory Demar
##
##  This program is free software; you can redistribute it and/or modify
##  it under the terms of the GNU General Public License version 3
##  as published by the Free Software Foundation.
##
##  ********************************************
##  Coppermine version: 1.6.01
##  $HeadURL$
##  $Revision$
##  ********************************************

CREATE TABLE IF NOT EXISTS `CPG_mod_online` (
  `user_id` int(11) NOT NULL default '0',
  `user_name` varchar(25) NOT NULL default '',
  `user_ip` tinytext NOT NULL,
  `last_action` datetime default NULL,
PRIMARY KEY  (`user_id`,`user_ip`(15))
);
INSERT IGNORE INTO CPG_config ( `name` , `value` ) VALUES ('record_online_users', ''), ('record_online_date', '');