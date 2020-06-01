<?php
/*
Plugin Name: Bits
Plugin URI: http://clivern.com/
Description: Another Wordpress Plugin
Version: 1.2
Author: Clivern
Author URI: http://clivern.com
License: http://clivern.com
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Get bits root file path for activation hooks
define('BITSROOTFILE', __FILE__);

// Load core functionalities
include_once 'core/syntax_highlighter.php';
