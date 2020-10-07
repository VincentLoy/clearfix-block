<?php
/**
 * Plugin Name: Clearfix Block
 * Plugin URI: https://github.com/VincentLoy/clearfix-block/
 * Description: Clearfix Block — A dead simple clearfix block for Gutenberg.
 * Author: Vincent Loy
 * Author URI: https://vincent-loy.fr/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
