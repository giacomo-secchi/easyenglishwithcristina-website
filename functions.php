<?php



// Custom Language Switcher output
add_action( 'custom_language_span_output', function ( $args, $short_language_name, $language_name, $flag_link ) {
   return '<span><img src="' . $flag_link .'">&nbsp;' . strtoupper( $short_language_name ) . '</span>';
}, 10, 4 );




add_filter('woocommerce_checkout_fields', function ( $fields ) {
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
add_filter('woocommerce_enable_order_notes_field', '__return_false');



