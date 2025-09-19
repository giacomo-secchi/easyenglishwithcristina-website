<?php
/**
 * Plugin Name: Project engine room
 * Author: Giacomo Secchi
 * Author URI: https://giacomosecchi.com
 * Version: 1.0.0
 */

/* Place custom code below this line. */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


// custom code for the current project


/**
 * Set the environment type
 * @link https://make.wordpress.org/core/2020/07/24/new-wp_get_environment_type-function-in-wordpress-5-5/
 */
if ( ! defined( 'WP_ENVIRONMENT_TYPE' ) ) {
	define( 'WP_ENVIRONMENT_TYPE', 'production' );
}



add_filter(
	'writepoetry_register_theme_directories',
	function () {
		return array( 'easyenglishwithcristina-website/themes' );
	}
);


// Disable Plugin and Theme Update and Installation
define( 'DISALLOW_FILE_MODS', false );





// Enable maintenance mode
add_filter( 'pre_option_writepoetry_maintenance_mode', function ( $default ) {
	return '0';
} );



// Choose to enable or disable product image zoom on product page (to disable change 'yes' to 'no')
add_filter( 'pre_option_writepoetry_product_zoom', function ( $default ) {
	return 'no';
} );


add_filter( 'pre_option_writepoetry_product_quantity_layout', function ( $default ) {
	// 'hidden';
	// 'input';
	// 'buttons';
	// 'select';
	return 'hidden';
} );


// Choose to what page redirect after add to cart
add_filter( 'pre_option_writepoetry_redirect_after_add', function ( $default ) {
	// 'product-checkout';
	// 'product-cart';
	// 'checkout';
	// 'cart';
	return 'checkout';
} );


add_filter( 'pre_option_writepoetry_product_min_quantity', function ( $default ) {
	return 1;
} );


add_filter( 'pre_option_writepoetry_product_max_quantity', function ( $default ) {
	return 10;
} );


// What kind of design do you want for single product page additional info (possible vaules are accordion, tabs or list)
add_filter( 'pre_option_writepoetry_product_infos_layout', function ( $default ) {
	// 'tabs'
	// 'list'
	// 'accordion'
	return 'list';
} );


// Disable elements
add_filter( 'writepoetry_disable_features', function ( $args ) {
	$args[] = 'woocommerce_sale_flash';
	// $args[] = 'woocommerce_twenty_twenty_two_styles';

	return $args;
}, 10, 1 );


// Add parameters to url
add_filter( 'writepoetry_query_vars', function () {
    return array( 'show-wheel' );
} );


add_action( 'plugins_loaded', function () {
	// Hide WooCommerce Breadcrumbs
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

	// Hide Single product informations (SKU, Category, tags) and all that is hooked on woocommerce_product_meta_start and woocommerce_product_meta_end
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
});


add_action( 'woocommerce_email_order_details', function ($order, $sent_to_admin, $plain_text, $email){
	$plain_text = "<p><?php esc_html_e( 'You will receive a Google Meet link one day before the lesson will take place.', 'storefrontchild' ); ?></p>";

}, 10, 4 );



add_filter( 'woocommerce_product_tabs', function( $tabs ) {

	// Remove additional information tab on Product Page
	unset( $tabs['reviews'] );

	return $tabs;

}, 20 );




// Hide Clear Link | WooCommerce Variable Products
add_filter( 'woocommerce_reset_variations_link', '__return_empty_string', 9999 );

add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

add_filter( 'mcf_add_custom_taxonomies', function () {
 	$string = array(
		'product-type' => array(
			'post_type' => 'product',
			'labels' => array(
				'name' => esc_html( 'Product Type' )
			),
			'show_ui'                    => true,
			// 'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true
		),
		'product-format' => array(
			'post_type' => 'product',
			'labels' => array(
				'name' => esc_html( 'Product Format' )
			),
			'show_ui'                    => true,
			'show_tagcloud'              => true
		),
	);

	return $string;
}, 10, 3 );


// Remove Additional Information section heading and content
add_filter( 'writepoetry_plugin_remove_testimonial_link', '__return_true' );

 
 
 /* Exclude One Content Type From Yoast SEO Sitemap */
add_filter(
   'wpseo_sitemap_exclude_post_type',
   function( $value, $post_type ) {
      if ( 
         $post_type == 'jetpack-testimonial' 
      ) {
         return true;
      }
   }, 10, 2 ); 
   

/**
 * Redirect single posts to 404.
*/
add_action( 'template_redirect', function () {
   $post_type = 'jetpack-testimonial';
   
   if ( is_post_type_archive( $post_type ) || is_singular( $post_type ) ) {
      global $wp_query;
      
      $wp_query->set_404();
      status_header( 404 );
      nocache_headers();
      get_template_part( '404' );
   }
}  );



add_filter(
	'writepoetry_add_custom_fields_to_page',
	function () { 

		return array(
			'easyenglishwithcristina_offer_description',
			'easyenglishwithcristina_offer_element_1',
			'easyenglishwithcristina_offer_element_2',
			'easyenglishwithcristina_offer_element_3',
			'easyenglishwithcristina_offer_element_4',
		);
	},
	10,
	3
);

// Custom Language Switcher output
add_action( 'custom_language_span_output', function ( $args, $short_language_name, $language_name, $flag_link ) {
   return '<span><img src="' . $flag_link .'">&nbsp;' . strtoupper( $short_language_name ) . '</span>';
}, 10, 4 );




add_filter( 'woocommerce_checkout_fields', function ( $fields ) {
   // Unset fields you want to remove
   unset( $fields['billing']['billing_company'] );
   unset( $fields['billing']['billing_address_1'] );
   unset( $fields['billing']['billing_address_2'] );
   unset( $fields['billing']['billing_postcode'] );
   unset( $fields['billing']['billing_city'] );
   unset( $fields['billing']['billing_phone'] );
   unset ($fields['billing']['billing_country'] );
   
   
   return $fields;
} );

// Remove Additional Information section heading and content
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

add_filter( 'blankspace_enable_dashicons', '__return_true' );




// Exclude sticky posts from main query and set posts per page to 12.
add_action('pre_get_posts', function ( $query ) {
    if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
		$sticky_posts = get_option( 'sticky_posts' );
        
		if ( ! empty( $sticky_posts ) ) {
            $query->set( 'post__not_in', $sticky_posts );
        }
		$query->set( 'posts_per_page', 12 );

    }
}, 10, 2 );


add_action('transition_post_status', function ( $new_status, $old_status, $post ) {

	if ( 'publish' !== $new_status || 'publish' === $old_status ) {
        return;
    }

	if ( empty( N8N_WEBHOOK_URL ) || empty( N8N_JWT_SECRET )) {
		return;
	}

	$allowed_types = [ 'post' ]; // If you need to extend allowed post types, add them here ('post', 'page', 'product').
	if ( ! in_array( $post->post_type, $allowed_types, true ) ) {
		return;
	}

    $webhook_url = N8N_WEBHOOK_URL;
	$JWT = generate_jwt_hs256( N8N_JWT_SECRET );	

	$featured_image_id = get_post_thumbnail_id( $post->ID );
	$image_metadata = wp_get_attachment_metadata( $featured_image_id );

    $data = array(
		'post' => array(
			'post_title' => $post->post_title,
			'post_content' => trim( htmlspecialchars( apply_filters( 'the_content', $post->post_content ) ) ),
			'post_excerpt' => $post->post_excerpt ?: wp_trim_words( $post->post_content, 30, '…' ),
			'post_url' => get_permalink( $post->ID ),
			'post_date' => $post->post_date,
			'post_id' => $post->ID,
			'meta_desc'    => get_post_meta( $post->ID, '_yoast_wpseo_metadesc', true ),
			'featured_image' => array(
				'url' => get_the_post_thumbnail_url( $post->ID, 'full' ),
				'alt' => get_post_meta( $featured_image_id, '_wp_attachment_image_alt', true ),
				'caption' => wp_get_attachment_caption( $featured_image_id ),
				'width' => $image_metadata['width'] ?? '',
				'height' => $image_metadata['height'] ?? '',
				'sizes' => array(
					'full' => get_the_post_thumbnail_url( $post->ID, 'full' ),
					'large' => get_the_post_thumbnail_url( $post->ID, 'large' ),
					'medium' => get_the_post_thumbnail_url( $post->ID, 'medium' ),
					'thumbnail' => get_the_post_thumbnail_url( $post->ID, 'thumbnail' )
				)
			),
		), 
		'site_name' => get_bloginfo( 'name' ),
		'site_description' => get_bloginfo( 'description' ),
		'site_url' => get_bloginfo( 'url' ),
		'admin_email' => get_bloginfo( 'admin_email' ),
		'author_name' => get_the_author_meta( 'display_name', $post->post_author ),
		'author_email' => get_the_author_meta( 'user_email', $post->post_author ),
		'brevo' => array(
			'list_ids' => BREVO_LIST_IDS ?? array(),
			'sender_id' => BREVO_SENDER_ID,
			'template_id' => BREVO_TEMPLATE_ID ?? null
		)
    );

    
    wp_remote_post( $webhook_url, array(
        'body' => json_encode( $data ),
		'headers' => array(
			'Content-Type'  => 'application/json',
			'Authorization' => 'Bearer ' . $JWT
		),
	    'timeout' => 10
    ) );

	if ( is_wp_error( $response ) ) {
        error_log( 'Webhook error: ' . $response->get_error_message() );
    } else {
	    error_log( 'Webhook response: ' . print_r( $response, true ) );
    }

}, 10, 3 );

function generate_jwt_hs256( $secret ) {
    // 1. Header
    $header = json_encode(['alg' => 'HS256', 'typ' => 'JWT']);
    $header_b64 = rtrim(strtr(base64_encode($header), '+/', '-_'), '=');

    // 2. Payload
    $payload_data = [
        'iat' => time(),           // Issued at
        'exp' => time() + 3600,    // Expiration (1 ora)
        'sub' => 'wordpress'       // Soggetto (puoi cambiarlo)
    ];

    $payload = json_encode($payload_data);
    $payload_b64 = rtrim(strtr(base64_encode($payload), '+/', '-_'), '=');

    // 3. Signature
    $signature = hash_hmac('sha256', $header_b64 . '.' . $payload_b64, $secret, true);
    $signature_b64 = rtrim(strtr(base64_encode($signature), '+/', '-_'), '=');

    // 4. Token
    return $header_b64 . '.' . $payload_b64 . '.' . $signature_b64;
}



