<?php
/**
 *@package TSKPlugins
 */
/**
 * Plugin Name: TSKAMATH Carousel Widget
 * Plugin URI: http://tsktech.in/plugins-tsk-widget
 * Description: Add Carousel to widget area
 * Version: 1.0.0
 * Author: Srikanth Kamath
 * Author URI: http://tskamath.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: tsk-carousel-widget
 * Domain Path: /languages
 */

// Exit if accessed directly
if(!defined('ABSPATH')){
  exit;
}

// echo  (plugins_url());
// echo "hello";

/*
* load scripts
*/
require_once (plugin_dir_path(__FILE__) . '/includes/tsk-widget-scripts.php');

/*
* load Class
*/
require_once (plugin_dir_path(__FILE__) . '/includes/tsk-carousel-class.php');
//require_once (plugin_dir_path(__FILE__) . '/includes/tskwidget-class.php');

/*
* Register Widget
*/
// function register_tsk_widget() {
//  	register_widget('TSK_Widgets_Widget');
// }
// add_action('widgets_init', 'register_tsk_widget')

// register Foo_Widget widget
function register_tsk_carousel() {
    register_widget( 'TSK_Carousel_Widget' );
}
add_action( 'widgets_init', 'register_tsk_carousel' );

