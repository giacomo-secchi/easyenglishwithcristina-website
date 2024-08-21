<?php
/**
 * Title: Header inside hero
 * Slug: write-white/banner-2
 * Categories: header, banner, call-to-action
 * Keywords: header, nav, links, button
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>

<!-- wp:cover {"metadata":{"name":"Banner 1"},"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-nappy-936137.jpg","dimRatio":0,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"style":{"color":{"duotone":"var:preset|duotone|blue-and-lavender"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:100vh" id="header-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim "></span>
<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-nappy-936137.jpg" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">

		<!-- wp:columns {"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column"></div>
			<!-- /wp:column -->
			 	 
			<!-- wp:column {"verticalAlignment":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"white","textColor":"contrast"} -->
			<div class="wp-block-column is-vertically-aligned-center has-contrast-color has-white-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

				<!-- wp:query {"queryId":<?php echo get_page_by_path( 'english-for-business', OBJECT, 'page')->ID; ?>,"query":{"perPage":1,"postType":"page"}} -->
				<div class="wp-block-query">
					<!-- wp:post-template -->
					<!-- wp:post-content /-->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
				 
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( 'english-for-business/' ) ); ?>"><?php echo esc_html_x( 'English for Business →', 'easyenglishwithcristinatheme' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			
		
		</div>
		<!-- /wp:columns -->
			
    </div>
</div>
<!-- /wp:cover -->
