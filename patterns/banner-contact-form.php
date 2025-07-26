<?php

/**
 * Title: Banner with contact form
 * Slug: easyenglishwithcristina/banner-contact-form
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/AdobeStock_186475779.jpeg","dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"focalPoint":{"x":1,"y":0.5},"minHeight":100,"minHeightUnit":"vh","align":"full","style":{"color":{"duotone":"var:preset|duotone|blue-and-lavender"}}} -->
<div class="wp-block-cover alignfull" style="min-height:100vh" id="get-in-touch"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/AdobeStock_186475779.jpeg" style="object-position:100% 50%" data-object-fit="cover" data-object-position="100% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"120px"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"white-semi-trasparent","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-white-semi-trasparent-background-color has-text-color has-background has-link-color" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:site-tagline {"style":{"typography":{"textTransform":"uppercase","fontWeight":"300"}},"textColor":"secondary","fontSize":"medium"} /-->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0"><?php esc_html_e( 'Get in touch', 'easyenglishwithcristina' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Fill out this quick contact form, and we will send you the estimate cost for your course.', 'easyenglishwithcristina' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/contact-form {"to":"info@easyenglishwithcristina.com","className":"is-style-default"} -->
<div class="wp-block-jetpack-contact-form is-style-default"><!-- wp:jetpack/field-name {"required":true} /-->

<!-- wp:jetpack/field-email {"required":true} /-->

<!-- wp:jetpack/field-telephone /-->

<!-- wp:jetpack/field-textarea {"label":"Messaggio"} /-->

<!-- wp:jetpack/button {"element":"button","text":"Contattaci","lock":{"remove":true}} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"120px"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->

