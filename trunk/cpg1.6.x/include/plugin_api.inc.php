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

global $thisplugin;                     // Stores the current plugin being processed
global $CPG_PLUGINS;                    // Stores all the plugins

$CPG_PLUGINS = array();                 // Initialize the plugin array

define('CPG_EXEC_ALL','all');           // Define CPG_EXEC_ALL
define('CPG_EXEC_FIRST', 'first');      // Define CPG_EXEC_FIRST
define('CPG_EXEC_NEW', 'new');          // Define CPG_EXEC_NEW

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// Store the table name in CONFIG
$CONFIG['TABLE_PLUGINS']                = $CONFIG['TABLE_PREFIX'].'plugins';

/**
 * Local plugin class
 * Processes all the plugins (filters,actions,install,uninstall)
 */
class CPGPluginAPI {

    /**
     * CPGPluginAPI::load()
     *
     * Load all the plugins into the global CPG_PLUGINS array
     *
     * @param N/A
     * @return N/A
     **/

    function load() {
        global $CONFIG,$thisplugin,$USER_DATA,$CPG_PLUGINS,$lang_plugin_api;

        // Get the installed plugins from the database and sort them by execution priority
        $sql = "SELECT * FROM {$CONFIG['TABLE_PLUGINS']} ORDER BY priority";
        $result = cpg_db_query($sql);

        // Exit if no plugins are installed
        if (mysql_num_rows($result) == 0) {
            return;
        }

        // Register page_end action for shutdown
        register_shutdown_function('cpg_action_page_end');

        // Register plugin_sleep action for shutdown
        register_shutdown_function('pluginapi_sleep_wrapper');

        // Used as a failsafe to keep plugins in order
        $index = 0;

        // Get the plugin properties from the database
        while ($plugin = mysql_fetch_assoc($result)) {

            // If configuration and codebase files aren't present, skip this plugin.
            if (!file_exists('./plugins/'.$plugin['path'].'/codebase.php') &&
                !file_exists('./plugins/'.$plugin['path'].'/configuration.php')) {
                continue;
            }

            $plugin['index'] = $index;

            $CPG_PLUGINS[$plugin['plugin_id']] = new CPGPlugin($plugin);

            $thisplugin =& $CPG_PLUGINS[$plugin['plugin_id']];

            include ('./plugins/'.$thisplugin->path.'/codebase.php');

            // Check if plugin has a wakeup action
            if (!($thisplugin->awake = CPGPluginAPI::action('plugin_wakeup',true,$thisplugin->plugin_id))) {


                if ($CONFIG['log_mode']) {
                    log_write("Couldn't wake plugin '" . $thisplugin->name, CPG_GLOBAL_LOG);
                }

                $thisplugin->filters = array();
                $thisplugin->actions = array();
                if (!isset($thisplugin->error['desc']) || is_null($thisplugin->error['desc'])) {
                    $thisplugin->error['desc'] = "Couldn't wake plugin '{$thisplugin->name}'";
                }
            }

            $index++;
        }
        mysql_free_result($result);
    }


    /**
     * CPGPluginAPI::installed()
     *
     * Check if a given plugin installed
     *
     * @param string $path_to_plugin_folder
     * @return boolean TRUE/FALSE
     **/

    function installed( $plugin_folder ) {
        global $CONFIG;

        // Stores if a given plugin is installed or not
        static $installed_array = array();

        // If the plugin doesn't exist in the array get its information from the database
        if (!isset($installed_array[$plugin_folder])) {
            
            $sql = "SELECT plugin_id FROM {$CONFIG['TABLE_PLUGINS']} WHERE path = '$plugin_folder'";
            $result = cpg_db_query($sql);

            // If the plugin isn't in the database store a false value in the array
            if (mysql_num_rows($result) == 0) {
                $installed_array[$plugin_folder] = false;
                return false;
            }

            // It's installed! Get the plugin_id
            $plugin = mysql_fetch_assoc($result);
            mysql_free_result($result);

            // Store the plugin_id in the database
            $installed_array[$plugin_folder] = $plugin['plugin_id'];
        }

        // Return the plugin_id or false, if the plugin isn't installed
        return $installed_array[$plugin_folder];
    }


    /**
     * CPGPluginAPI::filter()
     *
     * Checks all the plugin's for a given filter key sends the value
     *
     * @param string $filter_name
     * @param variant $value
     * @param boolean [$execute_scope = 'all']
     * @return $value
     **/

    function& filter( $key, $value, $execute_scope = CPG_EXEC_ALL ) {
        global $CPG_PLUGINS,$CONFIG,$USER_DATA,$thisplugin;

        global $hook_name;
        $hook_name = $key;

        if(is_numeric($execute_scope)) {

            $plugin_id = $execute_scope;

            // Reference current plugin to local scope
            $thisplugin =& $CPG_PLUGINS[$plugin_id];

            // Skip this plugin; the key isn't set
            if (!isset($thisplugin->filters[$key]) || (!$thisplugin->awake)) {
                 return $value;
            }

            // Get the filter's value from the plugin
            $plugin_function = $thisplugin->filters[$key];

            if (function_exists($plugin_function)) {
                // Pass the value to the filter's function and get a value back
                $value = call_user_func($plugin_function,$value);

                // Copy back to global scope
                //$CPG_PLUGINS[$plugin_id] = $thisplugin;
            }

            // Copy back to global scope
            //$CPG_PLUGINS[$plugin_id] = $thisplugin;

        // Loop through all the plugins
        } else {
            // Get all the plugin ids
            $ids = array_keys($CPG_PLUGINS);

            foreach($ids as $plugin_id) {

                // Reference current plugin to local scope
                $thisplugin =& $CPG_PLUGINS[$plugin_id];

                // Get the filter's value from the plugin
                if (!isset($thisplugin->filters[$key]) || ($key != 'plugin_wakeup' && !$thisplugin->awake)) {
                    continue;
                } else {
                    $plugin_function = $thisplugin->filters[$key];
                }

                // Skip this plugin; Only looking for new plugins
                if (($execute_scope == CPG_EXEC_NEW) && ($thisplugin->plugin_id != CPG_EXEC_NEW)) {
                    continue;
                }

                if (function_exists($plugin_function)) {
                    // Pass the value to the filter's function and get a value back
                    $value = call_user_func($plugin_function,$value);

                    // Copy back to global scope
                    //$CPG_PLUGINS[$plugin_id] = $thisplugin;
                }

                // Copy back to global scope
                //$CPG_PLUGINS[$plugin_id] = $thisplugin;

                if ($execute_scope != CPG_EXEC_ALL) {
                    return $value;
                    break;
                }
            }
        }

        // Return the value back to Coppermine
        return $value;
    }


    /**
     * CPGPluginAPI::action()
     *
     * Checks all the plugin's for a given action key sends the value
     *
     * @param string $action_name
     * @param variant $value
     * @param boolean [$execute_scope = 'all']
     * @return $value
     **/

    function& action( $key, $value, $execute_scope = CPG_EXEC_ALL ) {
        global $CPG_PLUGINS,$CONFIG,$USER_DATA,$thisplugin;

        global $hook_name;
        $hook_name = $key;

        if(is_numeric($execute_scope)) {

            $plugin_id = $execute_scope;

            // Reference current plugin to local scope
            $thisplugin =& $CPG_PLUGINS[$plugin_id];

            // Skip this plugin; the key isn't set
            if (!isset($thisplugin->actions[$key]) || (!$thisplugin->awake && $key!='plugin_wakeup')) {

                 return $value;
            }

            // Get the filter's value from the plugin
            $plugin_function = $thisplugin->actions[$key];

            if (function_exists($plugin_function)) {
                // Pass the value to the filter's function and get a value back
                $value = call_user_func($plugin_function,$value);

                // Copy back to global scope
                //$CPG_PLUGINS[$plugin_id] = $thisplugin;
            }

            // Copy back to global scope
            //$CPG_PLUGINS[$plugin_id] = $thisplugin;

        // Loop through all the plugins
        } else {
            // Get all the plugin ids
            $ids = array_keys($CPG_PLUGINS);

            foreach($ids as $plugin_id) {

                // Copy current plugin to local scope
                $thisplugin =& $CPG_PLUGINS[$plugin_id]; //changed to reference for PHP4 see note below

                // Get the action's value from the plugin
                if (!isset($thisplugin->actions[$key]) || ($key != 'plugin_wakeup' && !$thisplugin->awake)) {
                    continue;
                } else {
                    $plugin_function = $thisplugin->actions[$key];
                }

                // Skip this plugin; Only looking for new plugins
                if (($execute_scope == CPG_EXEC_NEW) && ($thisplugin->plugin_id != CPG_EXEC_NEW)) {
                    continue;
                }

                if (function_exists($plugin_function)) {
                    // Pass the value to the action's function and get a value back
                    $value = call_user_func($plugin_function,$value);

                     /**
                      * Disabled by donnoman
                      * when plugins cause any other underlying api hooks to be executed while
                      * they are running, $thisplugin becomes invalid because it is reset
                      * by the underlying calls to the plugin system. Therefore the results of copying
                      * $thisplugin to the global scope is undefined.  We don't know what plugin/revision is contained in
                      * $thisplugin.
                      *
                      * This shouldn't be a problem with PHP5 since objects are passed by reference by default
                      * there shouldn't be much cause to write over a refreenced object with a new reference to the same object.
                      *
                      * PHP4 on the other hand copies objects, we should probably always pass the object by reference
                      * which shouldn't cause PHP5 any greif, and will allow PHP4 to have the latest information from the plugin before
                      * it's reference was changed to a different plugin.
                      */
                    // Copy back to global scope
                    //$CPG_PLUGINS[$plugin_id] = $thisplugin;
                }

                if ($execute_scope != CPG_EXEC_ALL) {
                    return $value;
                    break;
                }
            }
        }

        // Return the value back to Coppermine
        return $value;
    }


    /**
     * CPGPluginAPI::wakeup()
     *
     * Wakes a plugin
     *
     * @param array $properties
     * @return CPGPlugin $object
     **/

    function wakeup($properties) {
        global $CONFIG,$USER_DATA,$CPG_PLUGINS,$thisplugin,$lang_plugin_api;

        // Get a new instance of the plugin object
        $CPG_PLUGINS[$properties['plugin_id']] = new CPGPlugin($properties);

        $thisplugin =& $CPG_PLUGINS[$properties['plugin_id']];


        // Include the plugin's code into Coppermine
        include ('./plugins/'.$thisplugin->path.'/codebase.php');

        return;
    }


    /**
     * CPGPluginAPI::sleep()
     *
     * Executes 'plugin_sleep' action
     *
     * @param N/A
     * @return N/A
     **/

    function sleep() {
        global $CPG_PLUGINS,$thisplugin,$lang_plugin_api;

        // Loop through all the plugins
        foreach($CPG_PLUGINS as $thisplugin) {

            // If the plugin has a sleep action, execute it
            if (!CPGPluginAPI::action('plugin_sleep',true,$thisplugin->plugin_id)) {

                if ($CONFIG['log_mode']) {
                    log_write("Couldn't put plugin '".$thisplugin->name."' to sleep", CPG_GLOBAL_LOG);
                }

                // Couldn't put plugin to sleep...Die!
                sprintf($lang_plugin_api['error_sleep'].'<br />',$thisplugin->name);
            }
        }
    }


    /**
     * CPGPluginAPI::install()
     *
     * Installs a plugin and executes 'plugin_install' action
     *
     * @param string $path_to_plugin_folder
     * @return N/A
     **/

    function install($path) {
        global $CONFIG,$thisplugin,$CPG_PLUGINS,$lang_plugin_api,$lang_plugin_php;

        // If this plugin is already installed return true
        if (CPGPluginAPI::installed($path)) {
            return true;
        }

        // If the codebase and configuration.php file is missing return false
        if (!file_exists('./plugins/'.$path.'/codebase.php') &&
            !file_exists('./plugins/'.$path.'/configuration.php')) {
            return false;
        }

        // Get the lowest priority level (highest number) from the database
        $sql = "SELECT priority FROM {$CONFIG['TABLE_PLUGINS']} ORDER BY priority DESC LIMIT 1";
        $result = cpg_db_query($sql);

        $data = mysql_fetch_assoc($result);
        mysql_free_result($result);

        // Set the execution priority to last
        $priority = (is_null($data['priority'])) ? (0) : ($data['priority']+1);

        // Grab the plugin's credits
        include_once ('./plugins/'.$path.'/configuration.php');

        // Create a generic plugin object
        $thisplugin = new CPGPlugin(
                                    array(
                                          'plugin_id' => 'new',
                                          'name' => $name,
                                          'priority' => $priority,
                                          'path' => $path
                                         )
                                    );
        $thisplugin->awake = true;

        // Grab plugin's code
        include_once ('./plugins/'.$path.'/codebase.php');

        // Copy it to the global scope
        $CPG_PLUGINS['new'] = $thisplugin;

        // If the plugin has an install action, execute it
        $installed = CPGPluginAPI::action('plugin_install',true,CPG_EXEC_NEW);

        // If $installed is boolean then plugin was installed; Return true
        if (is_bool($installed) && $installed) {
            $sql = "INSERT INTO {$CONFIG['TABLE_PLUGINS']} (name, path, priority) VALUES ('" . addslashes($name) . "', '" . addslashes($path) . "', $priority)";
            $result = cpg_db_query($sql);

            if ($CONFIG['log_mode']) {
                log_write("Plugin '".$name."' installed", CPG_GLOBAL_LOG);
            }

            return $installed;

        // If $installed is an integer then the plugin needs to be configured; Return the value
        } elseif (is_int($installed)) {

            return $installed;

        // Plugin wasn't installed; Display an error
        } else {

            // The plugin's install function failed
            cpg_die(CRITICAL_ERROR,sprintf($lang_plugin_api['error_install'],$thisplugin->name),__FILE__,__LINE__);
        }
    }

    /**
     * CPGPluginAPI::uninstall()
     *
     * Uninstalls a plugin and executes 'plugin_uninstall' action
     *
     * @param integer $plugin_id
     * @return N/A
     **/

    function uninstall($plugin_id) {
        global $CONFIG,$USER_DATA,$CPG_PLUGINS,$thisplugin,$lang_plugin_api,$name;

        if (!isset($CPG_PLUGINS[$plugin_id])) {
            return true;
        }

        // Grab the plugin from the global scope
        $thisplugin =& $CPG_PLUGINS[$plugin_id];

        // Grab the priority level, so you can shift the ones in the database
        $priority = $thisplugin->priority;

        // If plugin has an uninstall action, execute it
        $uninstalled = CPGPluginAPI::action('plugin_uninstall', true, $plugin_id);

        if (is_bool($uninstalled) && $uninstalled) {

            $sql = "DELETE FROM {$CONFIG['TABLE_PLUGINS']} WHERE plugin_id = $plugin_id";
            $result = cpg_db_query($sql);

            // Shift the plugins up
            $sql = "UPDATE {$CONFIG['TABLE_PLUGINS']} SET priority = priority - 1 WHERE priority > $priority";
            $result = cpg_db_query($sql);

            unset($CPG_PLUGINS[$plugin_id]);

            if ($CONFIG['log_mode']) {
                log_write("Plugin '".$thisplugin->name."' uninstalled", CPG_GLOBAL_LOG);
            }

            return true;

        // If $uninstalled is an integer then the plugin needs to be cleaned up; Return the value
        } elseif (is_numeric($uninstalled)) {

            return $uninstalled;
        } else {

            // The plugin's uninstall action failed
            cpg_die(CRITICAL_ERROR,sprintf($lang_plugin_api['error_uninstall'],$thisplugin->name),__FILE__,__LINE__);
        }
    }
}


/**
 * class CPGPlugin
 *
 * The plugin object
 **/

class CPGPlugin {
    var $actions = array();
    var $filters = array();
    var $awake = false;
    var $error = array();

    /**
     * CPGPlugin()
     *
     * Initialize the plugin
     *
     * @param array $properties
     * @return N/A
     **/

    function CPGPlugin($properties) {

        // Store the properties in the object
        foreach($properties as $key => $value) {
            $this->$key = stripslashes($value);
        }

        $this->fullpath = './plugins/'.$this->path;
    }

    /**
     * cpg_add_filter()
     *
     * Add a plugin filter
     *
     * @param string $action
     * @param variant $value
     * @return N/A
     **/

    function add_filter($key,$value) {
        if (!isset($this->filters[$key])) {
            $this->filters[$key] = $value;
        }
    }

    /**
     * cpg_delete_filter()
     *
     * Delete a plugin filter
     *
     * @param integer $plugin_id
     * @return N/A
     **/

    function delete_filter($key) {
        if (isset($this->filters[$key])) {
            unset($this->filters[$key]);
        }
    }

    /**
     * cpg_add_action()
     *
     * Add a plugin action
     *
     * @param string $action
     * @param variant $value
     * @return N/A
     **/

    function add_action($key,$value) {
        if (!isset($this->actions[$key])) {
            $this->actions[$key] = $value;
        }
    }

    /**
     * cpg_delete_action()
     *
     * Delete a plugin action
     *
     * @param integer $plugin_id
     * @return N/A
     **/

    function delete_action($key) {
        if (isset($this->actions[$key])) {
            unset($this->actions[$key]);
        }
    }
}

/**
 * cpg_get_scope()
 *
 * Get the current plugin from the scope
 * Sets global variable $thisplugin to return value
 *
 * @param integer [$plugin_id = null]
 * @return CPGPlugin $object
 **/

function& cpg_get_scope( $plugin_id = null ) {
    global $CPG_PLUGINS,$thisplugin;

    // Create the super cage
    $superCage = Inspekt::makeSuperCage();

    if (!is_null($plugin_id)) {
        return $CPG_PLUGINS[$plugin_id];
    } else {
        $plugin_id = $superCage->get->getInt('scope');
        $thisplugin =& $CPG_PLUGINS[$plugin_id];
        return $CPG_PLUGINS[$plugin_id];
    }
}

/**
 * cpg_action_page_end()
 *
 * Executes page_end action on all plugins
 *
 * @param null
 * @return N/A
 **/

function cpg_action_page_end() {
    CPGPluginAPI::action('page_end',null);
}

/**
 * cpg_filter_page_html()
 *
 * Executes page_html filter on all plugins
 *
 * @param string HTML
 * @return string HTML
 **/

function& cpg_filter_page_html( &$html ) {
    return CPGPluginAPI::filter('page_html',$html);
}

/**
 * cpg_get_dir_list()
 *
 * Returns all the subdirecties in a given folder
 *
 * @param string $path_to_folder
 * @return array $subdirectories
 **/

function& cpg_get_dir_list($folder) {
    global $CONFIG;
    $dirs = array();

    $dir = opendir($folder);
    while (($file = readdir($dir)) !== false) {
        if (is_dir($folder . $file) && $file != '.' && $file != '..') {
                $dirs[] = $file;
        }
    }
    closedir($dir);

    natcasesort($dirs);
    return $dirs;
}

function pluginapi_sleep_wrapper() {
    CPGPluginAPI::sleep();
}    
    
?>
