<?php
/**
 * Title: Header hero for landing page
 * Slug: easyenglishwithcristina/hero-landing
 * Categories: header, banner, call-to-action
 * Keywords: header, nav, links, button
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>

<!-- wp:cover {"metadata":{"name":"Merged banner with header"},"align":"center","url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-charlotte-may-5824814.jpg","dimRatio":50,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","style":{"color":{"duotone":"var:preset|duotone|blue-and-lavender"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover aligncenter" style="min-height:100vh" id="header-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-dim "></span>
<img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-charlotte-may-5824814.jpg" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">	
		<!-- wp:spacer {"height":"60px"} -->
		<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		 
		<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontWeight":"300","fontStyle":"normal"}},"textColor":"secondary","fontSize":"medium"} /-->				 
		
		<!-- wp:post-content /-->
			
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#get-in-touch"><?php esc_html_e( 'Contact Me ↓', 'easyenglishwithcristina' ); ?></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
		 
		<!-- wp:spacer {"height":"60px"} -->
		<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
    </div>
</div>
<!-- /wp:cover -->