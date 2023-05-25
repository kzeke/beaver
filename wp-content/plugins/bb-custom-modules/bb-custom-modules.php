<?php
/**
 * Plugin Name: Beaver Builder Custom Module
 * Plugin URI: https://huemor.rocks
 * Description: Custom modules made from Beaver Builder
 * Version: 1.0
 * Author: Huemor
 * Author URI: https://huemor.rocks
 */

// Do not add code directly to this plugin file. Instead, declare it in a
// .decl.php file in your component directory.
$theme_path = plugin_dir_path(__FILE__);

$dir = opendir($theme_path . "/components");
while ($dir !== FALSE && FALSE !== ($entry = readdir($dir))) {
    if (is_dir($theme_path . "/components/" . $entry)) {
        foreach (glob($theme_path . "/components/" . $entry . "/*.decl.php") as $file) {
            require_once "$file";
        }
    }
}

require_once "vendor/vendor.decl.php";