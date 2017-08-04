<?php
/**
 * ICESP Theme Customizer
 *
 */

function icesp_customize_register( $wp_customize ) {
 	$wp_customize->add_setting( 'icesp_logo' , array(
	    'default'   		=> '',
	    'type'				=> 'theme_mod',
	    'transport'			=> 'refresh',
	    'sanitize_callback'	=> 'esc_url_raw'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label'      => __('Logo', 'icesp'),
		'section'    => 'title_tagline',
		'settings'   => 'icesp_logo',
	    'priority'   => 11
	) ) );

	$wp_customize->add_setting( 'banner_home' , array(
	    'default'   		=> '',
	    'type'				=> 'theme_mod',
	    'transport'			=> 'refresh',
	    'sanitize_callback'	=> 'esc_url_raw'
    ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bannerhome', array(
        'label'    	=> __('Banner Home', 'icesp-theme'),
        'section'  	=> 'title_tagline',
        'settings' 	=> 'banner_home',
		'priority'  => 13
    ) ) );

	$wp_customize->add_setting( 'regua_logos' , array(
	    'default'   		=> '',
	    'type'				=> 'theme_mod',
	    'transport'			=> 'refresh',
	    'sanitize_callback'	=> 'esc_url_raw'
    ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'regualogos', array(
        'label'    	=> __('Reguá de logos', 'icesp-theme'),
        'section'  	=> 'title_tagline',
        'settings' 	=> 'regua_logos',
		'priority'  => 14
    ) ) );
}
add_action( 'customize_register', 'icesp_customize_register' );