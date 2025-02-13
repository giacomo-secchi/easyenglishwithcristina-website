<?php
/**
 * Title: Main navigation
 * Slug: blankspace/nav-main
 */
?>

<!-- wp:navigation {"overlayMenu":"mobile","hasIcon":false,"className":"main-menu","style":{"typography":{"fontWeight":"300","textTransform":"uppercase"},"layout":{"type":"flex","selfStretch":"fill"}},"layout":{"type":"flex","justifyContent":"center"},"ariaLabel":"<?php esc_attr_e( 'About', 'easyenglishwithcristina' ); ?>"} -->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Beginners', 'easyenglishwithcristina' ); ?>","type":"page","title":"<?php esc_html_e( 'Start learning English with easy lessons for beginners', 'easyenglishwithcristina' ); ?>","url":"<?php echo esc_url( home_url( 'english-for-beginners/' ) ); ?>","kind":"post-type"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Students', 'easyenglishwithcristina' ); ?>","type":"page","title":"<?php esc_html_e( 'English lessons tailored for students to improve grammar and vocabulary', 'easyenglishwithcristina' ); ?>","url":"<?php echo esc_url( home_url( 'english-for-students/' ) ); ?>","kind":"post-type"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Business', 'easyenglishwithcristina' ); ?>","type":"page","title":"<?php esc_html_e( 'Professional English lessons for business and workplace communication', 'easyenglishwithcristina' ); ?>","url":"<?php echo esc_url( home_url( 'english-for-business/' ) ); ?>","kind":"post-type"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'easyenglishwithcristina' ); ?>","type":"page","title":"<?php esc_html_e( 'American English Blog', 'easyenglishwithcristina' ); ?>","url":"<?php echo esc_url( home_url( 'blog/' ) ); ?>","kind":"post-type"} /-->
<!-- /wp:navigation -->
 