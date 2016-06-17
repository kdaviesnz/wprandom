<?php
declare(strict_types=1); // must be first line

namespace vendorname\subnamespace; // use vendorname\subnamespace\classname;
/*
Plugin Name: Wprandom
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: kevindavies
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

// Configure this file by going to Preferences -> Editor -> File and Code Templates
// To set coding standard go to Preferences -> Editor -> Inspections -> PHP -> PHP Code Sniffer validation
// [in coding standards drop down select desired coding standard]
// To set PHP version to use click on External Libraries on left pane and select Configure PHP include paths.
// To verify this file go to Code -> Inspect code
// To view error log go to /Applications/MAMP/logs
// To view error log go to /Applications/MAMP/logs
// To install a composer package right click on project name, click on composer and select init. Once done select
// composer again and select add dependency.
// To add a bookmark click fn+F3
// To show bookmarks click fn+cmd+F3
// To go to a bookmark click ctl+[0=9]
// To format cmd+alt+L
// To duplicate a line(s): cmd+d

// To generate constructors etc go to Code -> Generate (cmd+N)
// To extract code into a new method click ctl+alt+M.

include("src/Wprandom.bootstrap.functions.php");
include("src/Wprandom.bootstrap.classes.php");

add_action("plugins_loaded", onPluginsLoaded());