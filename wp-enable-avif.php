<?php
/**
 * Plugin Name: WP Enable Avif
 * Plugin URI:  https://wordpress.org/plugins/easy-remove-item-menu
 * Description: A plugin to easily uploads avif images
 * Version:     1.0.0
 * Author:      Camilo
 * Author URI:  https://camilowp.com/
 * Text Domain: wp-enable-avif
 * Domain Path: /languages
 * License:     GPL3
 */

 if (!defined('ABSPATH')) {
     exit;
 }

 add_filter( 'wp_check_filetype_and_ext', 'wp_enable_avif_1', 10, 4 );
 function wp_enable_avif_1( $types, $file, $filename, $mimes ) {
     if ( false !== strpos( $filename, '.avif' ) ) {
         $types['ext'] = 'avif';
         $types['type'] = 'image/avif';
     }

     return $types;
 }


 add_filter( 'upload_mimes', 'wp_enable_avif_2' );
 function wp_enable_avif_2( $mimes ) {
     $mimes['avif'] = 'image/avif';

   return $mimes;
 }
