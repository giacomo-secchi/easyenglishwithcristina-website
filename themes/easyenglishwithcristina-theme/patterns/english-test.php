<?php

/**
 * Title: English test banner
 * Slug: easyenglishwithcristina/english-test
 * Categories: banner
 * Keywords: banner
 * Viewport Width: 1500
 * Inserter: true
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-thirdman-5649423.jpg","id":725,"dimRatio":90,"overlayColor":"base","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"sizeSlug":"large","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="min-height:100vh" id="english-test"><img class="wp-block-cover__image-background wp-image-725 size-large" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-thirdman-5649423.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Multiple choice quiz', 'easyenglishwithcristina' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-primary-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0"><?php echo wp_kses_post( _x( 'What’s your English level?<br>Find out NOW!', '', 'easyenglishwithcristina' ) ) ; ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

 
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'This test will give you a rough indication of your current level of English. The test consists of 50 multiple-choice questions. It only lasts 10 minutes, suitable for a quick and effective assessment of your English level!', 'easyenglishwithcristina' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Free English-level test', 'easyenglishwithcristina' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Test your English for free!', 'easyenglishwithcristina' ); ?></p>
<!-- /wp:paragraph -->



    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( 'english-test/' ) ); ?>"><?php esc_html_e( 'Start the test', 'easyenglishwithcristina' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons --></div></div>
<!-- /wp:cover -->