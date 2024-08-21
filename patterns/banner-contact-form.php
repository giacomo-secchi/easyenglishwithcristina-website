<?php

/**
 * Title: Banner with contact form
 * Slug: easyenglishwithcristina/banner-contact-form
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/AdobeStock_186475779.jpeg","dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","align":"full","style":{"color":[]}} -->
<div class="wp-block-cover alignfull" style="min-height:100vh" id="get-in-touch"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/AdobeStock_186475779.jpeg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"120px"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
    
<!-- wp:group {"style":"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"white","textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-white-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
    
<!-- wp:site-tagline {"style":{"typography":{"textTransform":"uppercase","fontWeight":"300"}},"textColor":"secondary","fontSize":"medium"} /-->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}}} -->
<h2 class="wp-block-heading" id="lorem-ipsum" style="margin-top:0"><?php echo esc_html_x( 'Get in touch', 'easyenglishwithcristinatheme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Fill out this quick contact form, and we will send you the estimate cost for your course.</p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/contact-form {"to":"example@example.com","className":"is-style-default"} -->
<div class="wp-block-jetpack-contact-form is-style-default"><!-- wp:jetpack/field-name {"required":true} /-->

<!-- wp:jetpack/field-email {"required":true} /-->

<!-- wp:jetpack/field-telephone /-->

<!-- wp:jetpack/field-textarea {"label":"Message"} /-->

<!-- wp:jetpack/button {"element":"button","text":"Contact Us","lock":{"remove":true}} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"120px"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->

