<?php
/**
 * Theme functions and definitions
 *
 * @package Corvia
 */

/**
 * After setup theme hook
 */
function corvia_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'corvia' );	
}
add_action( 'after_setup_theme', 'corvia_theme_setup' );

/**
 * Load assets.
 */

function corvia_theme_css() {
	wp_enqueue_style( 'corvia-parent-theme-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'corvia_theme_css', 99);

require get_stylesheet_directory() . '/theme-functions/controls/class-customize.php';

/*=========================================
 Corvia Remove Customize Panel from parent theme
=========================================*/
function corvia_remove_parent_setting( $wp_customize ) {
	$wp_customize->remove_control('corpiva_hdr_contact');
	$wp_customize->remove_control('corpiva_hs_hdr_contact');
	$wp_customize->remove_control('corpiva_hdr_contact_icon');
	$wp_customize->remove_control('corpiva_hdr_contact_ttl');
	$wp_customize->remove_control('corpiva_hdr_contact_txt');
}
add_action( 'customize_register', 'corvia_remove_parent_setting',99 );

/**
 * Import Options From Parent Theme
 *
 */
function corvia_parent_theme_options() {
	$corpiva_mods = get_option( 'theme_mods_corpiva' );
	if ( ! empty( $corpiva_mods ) ) {
		foreach ( $corpiva_mods as $corpiva_mod_k => $corpiva_mod_v ) {
			set_theme_mod( $corpiva_mod_k, $corpiva_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'corvia_parent_theme_options' );