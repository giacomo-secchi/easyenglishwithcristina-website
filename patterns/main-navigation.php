<?php
/**
 * Title: Main navigation
 * Slug: write-white/main-navigation
 */
?>
<!-- wp:navigation {"icon":"menu","className":"main-menu","style":{"typography":{"fontWeight":"300","textTransform":"uppercase"},"layout":{"type":"flex","selfStretch":"fill"}},"layout":{"type":"flex","justifyContent":"center"},"ariaLabel":"<?php esc_attr_e( 'About', 'easyenglishwithcristina' ); ?>"} -->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'English for Beginners', 'easyenglishwithcristina' ); ?>","type":"page","url":"<?php echo esc_url( home_url( 'english-for-beginners/' ) ); ?>","kind":"post-type"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'English for Students', 'easyenglishwithcristina' ); ?>","type":"page","url":"<?php echo esc_url( home_url( 'english-for-students/' ) ); ?>","kind":"post-type"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'English for Business', 'easyenglishwithcristina' ); ?>","type":"page","url":"<?php echo esc_url( home_url( 'english-for-business/' ) ); ?>","kind":"post-type"} /-->
<!-- /wp:navigation -->
 
<!-- wp:group {className":"language-switcher language-switcher-layout-1"} -->
<div class="wp-block-group language-switcher language-switcher-layout-1">
    <!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"write-white/translatepress-language-switcher"}}}} -->
    <p>Language Switcher</p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
 


