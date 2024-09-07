<?php
/**
 * Title: Header hero for landing page
 * Slug: easyenglishwithcristina/header-hero-landing
 * Categories: header, banner, call-to-action
 * Keywords: header, nav, links, button
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>


<!-- wp:cover {"metadata":{"name":"Merged banner with header"},"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pexels-charlotte-may-5824814.jpg","dimRatio":50,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:100vh" id="header-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-dim "></span>
<img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pexels-charlotte-may-5824814.jpg" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
		<!-- wp:pattern {"slug":"easyenglishwithcristina/header-default"} /--> 
		 
		<!-- wp:columns {"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
                
			</div>
			<!-- /wp:column -->
				 
			<!-- wp:column {"verticalAlignment":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"white","textColor":"contrast"} -->
			<div class="wp-block-column is-vertically-aligned-center has-contrast-color has-white-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:post-title {"level":0,"style":{"typography":{"textTransform":"uppercase","fontWeight":"300"}},"textColor":"secondary"} /-->
				 
				<!-- wp:post-content /-->
				 
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#get-in-touch"><?php echo esc_html_x( 'Contattami ↓', 'easyenglishwithcristina' ); ?></a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		
		</div>
		<!-- /wp:columns -->
			
    </div>
</div>
<!-- /wp:cover -->
