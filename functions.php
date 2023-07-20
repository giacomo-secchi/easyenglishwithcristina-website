<?php
/**
 * Twenties Child Theme
 *
 * @package Twenty_Twenty_Child
 */

/**
 * Get theme version.
 */
$theme_version  = wp_get_theme( get_stylesheet() )->get( 'Version' );
$version_string = is_string( $theme_version ) ? $theme_version : false;





if ( ! function_exists( 'eewc_scripts' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function eewc_scripts() {
		global $version_string;

		// Register WooCommerce stylesheet.
		wp_register_style(
			'eewc-woocommerce',
			get_stylesheet_directory_uri() . '/assets/css/plugins/woocommerce/woocommerce.css',
			array( 'woocommerce-general' ),
			$version_string
		);

		// Enqueue WooCommerce Styles.
		if ( class_exists( 'woocommerce' ) ) {
			wp_enqueue_style( 'eewc-woocommerce' );
		}

	}

endif;

add_action( 'wp_enqueue_scripts', 'eewc_scripts' );

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function eewc_register_block_styles() {

	// Define block styles with their labels and CSS styles
    $block_styles = array(
        'core/group'	=> array(
            'name'			=> 'inline',
			'label'			=> __( 'Inline', 'easyenglishwithcristinatheme' ),
			// 'is_default'	=> true,
			'inline_style'	=> '.wp-block-group .is-style-inline { display: inline-flex; }'
        )
    );

	// Register each block style with its label and CSS style
	if ( function_exists( 'register_block_style' ) ) {
	    foreach ( $block_styles as $block_name => $style_properties ) {
		 	register_block_style( $block_name, $style_properties );
		}
	}
}
add_action( 'init', 'eewc_register_block_styles' );



if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {
		global $version_string;

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Add blocks styles.
		$blocks = array(
			array(
				'name'	=> 'jetpack/mailchimp',
				// Same args used for wp_enqueue_style().
				'args'	=> array(
					'handle'	=> 'eewc-mailchimp',
					'src'		=> get_theme_file_uri( 'assets/blocks/mailchimp.css' ),
					'ver'		=> $version_string
				)
			),
			array(
				'name'	=> 'core/site-title',
				'args'	=> array(
					'handle'	=> 'eewc-site-title',
					'src'		=> get_theme_file_uri( 'assets/blocks/site-title.css' ),
					// Add "path" to allow inlining asset if the theme opts-in.
					'path'		=> get_theme_file_path( 'assets/blocks/site-title.css' ),
					'ver'		=> $version_string
				)
			),
			array(
				'name'	=> 'yoast/reading-time',
				'args'	=> array(
					'handle'	=> 'eewc-reading-time',
					'src'		=> get_theme_file_uri( 'assets/blocks/reading-time.css' ),
					'ver'		=> $version_string
				)
			),
			array(
				'name'	=> 'jetpack/slideshow',
				'args'	=> array(
					'handle'	=> 'eewc-slideshow',
					'src'		=> get_theme_file_uri( 'assets/blocks/slideshow.css' ),
					'ver'		=> $version_string
				)
			),
			array(
				'name'	=> 'core/navigation',
				'args'	=> array(
					'handle'	=> 'eewc-navigation',
					'src'		=> get_theme_file_uri( 'assets/blocks/navigation.css' ),
					'path'		=> get_theme_file_path( 'assets/blocks/navigation.css' ),
					'ver'		=> $version_string
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

