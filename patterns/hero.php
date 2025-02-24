<?php
/**
 * Title: Header inside hero
 * Slug: easyenglishwithcristina/hero
 * Categories: header, banner, call-to-action
 * Keywords: header, nav, links, button
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>

<!-- wp:cover {"metadata":{"name":"Merged banner with header"},"align":"center","url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-antonio-quagliata-227433.jpg","dimRatio":50,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","style":{"color":{"duotone":"var:preset|duotone|blue-and-lavender"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover aligncenter" style="min-height:100vh" id="header-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim has-background-dim "></span>
<img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-antonio-quagliata-227433.jpg" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
	
		<!-- wp:spacer {"height":"60px"} -->
		<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		 
		<!-- wp:site-tagline {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontWeight":"300","fontStyle":"normal"}},"textColor":"secondary","fontSize":"medium"} /-->		
		
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"0"}}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="margin-top:0"><?php esc_html_e( 'Do you want to speak English more fluently?', 'easyenglishwithcristina' ); ?></h1>
		<!-- /wp:heading -->

		 
		<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"860px"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:embed {"url":"https://www.youtube.com/watch?v=S1dZ-JrMAYc","type":"video","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-4-3 wp-has-aspect-ratio"} -->
			<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-4-3 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
		https://www.youtube.com/watch?v=S1dZ-JrMAYc
			</div></figure>
			<!-- /wp:embed -->	
		</div>
		<!-- /wp:group -->

	
		<!-- wp:paragraph {"align":"center","fontSize":"display"} -->
		<p class="has-text-align-center has-display-font-size"><?php esc_html_e( 'Fluency practice speaking building confidence, Learning English is easy and fun!', 'easyenglishwithcristina' ); ?></p>
		<!-- /wp:paragraph -->
					

	 
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( 'english-for-beginners/' ) ); ?>"><?php esc_html_e( 'English for Beginners →', 'easyenglishwithcristina' ); ?></a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons -->
			
		<!-- wp:spacer {"height":"60px"} -->
		<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
    </div>
</div>
<!-- /wp:cover -->
