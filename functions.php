<?php
/**
 * functions.php
 *
 * Child theme functions.
 */



if ( ! function_exists( 'eewc_scripts' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function eewc_scripts() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme( get_stylesheet() )->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		wp_register_style(
			'eewc-woocommerce',
			get_stylesheet_directory_uri() . '/assets/css/plugins/woocommerce/woocommerce.css',
			array( 'woocommerce-general' ),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );


		// Enqueue WooCommerce Styles
		wp_enqueue_style( 'eewc-woocommerce' );


	}

endif;

add_action( 'wp_enqueue_scripts', 'eewc_scripts' );


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add blocks styles.
		$blocks = array(
			array(
				'name'	=> 'jetpack/mailchimp',
				// Same args used for wp_enqueue_style().
				'args'	=> array(
					'handle'	=> 'eewc-mailchimp',
					'src'		=> get_theme_file_uri( 'assets/blocks/mailchimp.css' ),
				)
			),
			array(
				'name'	=> 'core/site-title',
				'args'	=> array(
					'handle'	=> 'eewc-site-title',
					'src'		=> get_theme_file_uri( 'assets/blocks/site-title.css' ),
					// Add "path" to allow inlining asset if the theme opts-in.
					'path'		=> get_theme_file_path( 'assets/blocks/site-title.css' ),
				)
			),
			array(
				'name'	=> 'yoast/reading-time',
				'args'	=> array(
					'handle'	=> 'eewc-reading-time',
					'src'		=> get_theme_file_uri( 'assets/blocks/reading-time.css' ),
				)
			),
			array(
				'name'	=> 'jetpack/slideshow',
				'args'	=> array(
					'handle'	=> 'eewc-slideshow',
					'src'		=> get_theme_file_uri( 'assets/blocks/slideshow.css' ),
				)
				),
			array(
				'name'	=> 'core/navigation',
				'args'	=> array(
					'handle'	=> 'eewc-navigation',
					'src'		=> get_theme_file_uri( 'assets/blocks/navigation.css' ),
					'path'		=> get_theme_file_path( 'assets/blocks/navigation.css' ),
				)
			)
		);

		foreach ( $blocks as $block ) {
			// Enqueue asset.
			wp_enqueue_block_style( $block['name'],  $block['args'] );
		}
	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

