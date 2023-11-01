<?php

/**
 * Plugin Name: Plugin Name
 * Description: Plugin Description
 * Author: Prappo
 * Author URI: https://prappo.dev
 * License: GPLv2
 * Version: 0.0.1
 */

use PluginName\Frontend\Frontend;

require_once __DIR__ . '/vendor/autoload.php';

define('PLUGINNAME_DIR', plugin_dir_path(__FILE__));
define('PLUGINNAME_URL', plugin_dir_url(__FILE__));
define('PLUGINNAME_ASSETS_URL', PLUGINNAME_URL . '/assets');

$frontend = new Frontend;
$frontend->bootstrap();
