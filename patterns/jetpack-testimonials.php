<?php

/**
 * Title: Testimonials
 * Slug: easyenglishwithcristina/jetpack-testimonials
 * Categories: banner
 * Keywords: banner
 * Viewport Width: 1500
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        
        <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
        <p class="has-text-align-center has-secondary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Testimonials', 'easyenglishwithcristina' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary"} -->
        <h2 class="wp-block-heading alignwide has-text-align-center has-primary-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'What our customers think of us', 'easyenglishwithcristina' ); ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:shortcode -->[testimonials columns=3 display_content=full]<!-- /wp:shortcode -->
</div>
<!-- /wp:group -->