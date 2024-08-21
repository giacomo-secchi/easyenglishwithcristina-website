<?php


add_action( 'custom_language_span_output', function ( $args, $short_language_name, $language_name, $flag_link ) {
   return '<span><img src="' . $flag_link .'">&nbsp;' . strtoupper( $short_language_name ) . '</span>';
}, 10, 4 );