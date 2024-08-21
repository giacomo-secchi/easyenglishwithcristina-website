<?php

/**
 * Title: Banner offer
 * Slug: easyenglishwithcristina/banner-offer
 * Categories: header, banner, call-to-action
 * Keywords: header, nav, links, button
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>

<!-- wp:cover {"metadata":{"name":"Banner 1"},"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/pexels-startup-stock-photos-7102.jpg","dimRatio":0,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"style":{"color":{"duotone":"var:preset|duotone|blue-and-lavender"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:100vh" id="header-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim "></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/pexels-startup-stock-photos-7102.jpg" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">

		<!-- wp:columns {"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"36%"} -->
			<div class="wp-block-column" style="flex-basis:36%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"white","textColor":"contrast"} -->
			<div class="wp-block-column is-vertically-aligned-center has-contrast-color has-white-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
				<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="text-transform:uppercase;font-weight:300"><?php echo esc_html_x('Educational offer', 'easyenglishwithcristinatheme'); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}}} -->
				<h2 class="wp-block-heading" id="lorem-ipsum" style="margin-top:0"><?php echo esc_html_x('What You Get', 'easyenglishwithcristinatheme'); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
						<p>My method is based on the theory of natural language acquisition, through real-life simulations, in a context where only English is spoken. In this way, each student learns at their own natural study pace and according to their specific needs. This method ensures the achievement of their language goals and helps them quickly reach the desired level of English.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:list {"className":"is-style-checked","fontSize":"display"} -->
						<ul class="wp-block-list is-style-checked has-display-font-size"><!-- wp:list-item -->
							<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
							<li style="margin-bottom:var(--wp--preset--spacing--40)">A unique and customized methodology that fits the needs of your company</li>
							<!-- /wp:list-item -->
							<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
							<li style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">Improvement of the team’s skills and abilities</li>
							<!-- /wp:list-item -->
							<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
							<li style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">Individualized monitoring for each employee</li>
							<!-- /wp:list-item -->
							<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
							<li style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">Measurable results and return on investment</li>
							<!-- /wp:list-item -->
						</ul>
						<!-- /wp:list -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

			</div>
			<!-- /wp:column -->


		</div>
		<!-- /wp:columns -->

	</div>
</div>
<!-- /wp:cover -->