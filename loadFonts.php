<?php
/*
Plugin Name: Wp-fonts
Plugin URI: https://github.com/ChazzIV
Description: Plugin para insertar fuentes a mano en <code>functions.php</code> y activarlo a placer (o no) .
Version: 1.0
Author: Marcelo Villalpando
Author URI: https://twitter.com/chazz_IV
License: GPLv2 o posterior
*/

function load_karla() {
wp_register_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap');
wp_enqueue_style('googleFonts');

wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');
wp_enqueue_style('montserrat');

add_action('wp_enqueue_scripts', 'load_karla');




}

?>
