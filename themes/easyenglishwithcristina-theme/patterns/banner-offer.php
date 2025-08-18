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

<!-- wp:cover {"metadata":{"name":"Banner 1"},"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-startup-stock-photos-7102.jpg","dimRatio":0,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"style":{"color":{"duotone":"var:preset|duotone|blue-and-lavender"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:100vh" id="header-cover"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim "></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-startup-stock-photos-7102.jpg" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">

		<!-- wp:columns {"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"36%"} -->
			<div class="wp-block-column" style="flex-basis:36%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"white","textColor":"contrast"} -->
			<div class="wp-block-column is-vertically-aligned-center has-contrast-color has-white-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
				<p class="has-text-align-left has-secondary-color has-text-color has-link-color" style="text-transform:uppercase;font-weight:300"><?php esc_html_e('Educational Offer', 'easyenglishwithcristina'); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}}} -->
				<h2 class="wp-block-heading" id="lorem-ipsum" style="margin-top:0"><?php esc_html_e( 'What You Get', 'easyenglishwithcristina' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph {
							"metadata":{
								"bindings":{
									"content":{
										"source":"core/post-meta",
										"args":{
											"key":"easyenglishwithcristina_offer_description"
										}
									}
								}
							}
						} -->
						<p></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:list {"className":"is-style-checked"} -->
						<ul class="wp-block-list is-style-checked">
							<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
							<li style="margin-bottom:var(--wp--preset--spacing--40)">
								<!-- wp:paragraph {
									"metadata":{
										"bindings":{
											"content":{
												"source":"core/post-meta",
												"args":{
													"key":"easyenglishwithcristina_offer_element_1"
												}
											}
										}
									}
								} -->
								<p></p>
								<!-- /wp:paragraph -->
							</li>
							<!-- /wp:list-item -->
							<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
							<li style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
								<!-- wp:paragraph {
									"metadata":{
										"bindings":{
											"content":{
												"source":"core/post-meta",
												"args":{
													"key":"easyenglishwithcristina_offer_element_2"
												}
											}
										}
									}
								} -->
								<p></p>
								<!-- /wp:paragraph -->
								</li>
							<!-- /wp:list-item -->
							<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
							<li style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
								<!-- wp:paragraph {
									"metadata":{
										"bindings":{
											"content":{
												"source":"core/post-meta",
												"args":{
													"key":"easyenglishwithcristina_offer_element_3"
												}
											}
										}
									}
								} -->
								<p></p>
								<!-- /wp:paragraph -->
								</li>
							<!-- /wp:list-item -->
							<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
							<li style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
								<!-- wp:paragraph {
									"metadata":{
										"bindings":{
											"content":{
												"source":"core/post-meta",
												"args":{
													"key":"easyenglishwithcristina_offer_element_4"
												}
											}
										}
									}
								} -->
								<p></p>
								<!-- /wp:paragraph -->
							</li>
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