<?php
/**
 * Plugin Name: Must Use Plugins Autoloader
 * Plugin URI: https://codex.wordpress.org/Must_Use_Plugins
 * Description: This Plugin is loading all plugins within folder in the /mu-plugins directory. For more details please have a look into your /wp-content/mu-plugins folder.
 * Author: WordPress Codex
 */

$dirs = glob(dirname(__FILE__) . '/*' , GLOB_ONLYDIR);

foreach($dirs as $dir) {
    if(file_exists($dir . DIRECTORY_SEPARATOR . basename($dir) . ".php")) {
        require($dir . DIRECTORY_SEPARATOR . basename($dir) . ".php");
    }
}
