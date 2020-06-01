<?php
/**
 * Bits - Modern Syntax Highlighter
 * --------------------------------
 * @author Clivern <hello@clivern.com>
 * @link http://clivern.com/
 * @version 1.2
 * @copyright Copyright (c) 2014, Clivern
 * @license http://codecanyon.net/licenses
 * @package bits
 */

if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

/**
 * Remove the legcay bits syntax highlighter options
 */
delete_option('clivern_bits_plugin_options');
