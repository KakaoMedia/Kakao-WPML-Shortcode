<?php
/**
 * @package Kakao WPML Shortcode
 * @version 1.0
 */
/*
Plugin Name: kakao WPML Shortcode
Plugin URI: http://kakaomedia.com
Description: Add WPML Switcher to a shortcode [kakao_wpml_switch]
Author: Eveevans
Version: 1.0
Author URI: http://www.testhumansuits.com/
*/


function kakao_wpml_switch(){
  if( function_exists('icl_get_languages') ){
    ob_start();
    do_action('icl_language_selector');
    $langDropdown = ob_get_clean();
    return '<span class="tm-wpml-lang-switcher">'.$langDropdown.'</span>';
  }
}

add_shortcode('kakao_wpml_switch','kakao_wpml_switch');

?>
