<?php

if ( ! function_exists( 'ali_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 0.0.1
	 *
	 * @return void
	 */
	function ali_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'ali_theme_support' );

/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/
if ( ! function_exists( 'ali_styles' ) ) :

    function ali_styles() {
      // Register Stylesheet
      wp_enqueue_style('ali-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
      wp_enqueue_style('ali-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
    }
  
  endif;
  
  add_action( 'wp_enqueue_scripts', 'ali_styles' );