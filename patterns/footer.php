<?php

/**
 * Title: Footer with copyright
 * Slug: write-white/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Keywords: newsletter, subscribe, button
 */
?>

<!-- wp:group {"textColor":"white","backgroundColor":"contrast"} -->
<div class="wp-block-group has-white-color has-text-color has-contrast-background-color has-background">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">			
				<!-- wp:group {"layout":{"type":"flex"}} -->
				<div class="wp-block-group">
					<!-- wp:pattern {"slug":"write-white/branding"} /-->       
				</div>
				<!-- /wp:group -->
				 
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"300"}}} -->
				<p style="font-weight:300"><?php echo esc_html_x( 'English is a global language. Imagine if you were a fluent speaker, you could make more money and become more successful in your work, study and life. So start learning today', 'easyenglishwithcristinatheme' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:pattern {"slug":"write-white/newsletter-subscribe-jetpack"} /-->

				<!-- wp:pattern {"slug":"write-white/main-navigation"} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
	 

	<!-- wp:separator {"align":"wide","backgroundColor":"white","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-text-color has-white-color has-alpha-channel-opacity has-white-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->
 
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-medium-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
		<ul class="wp-block-social-links has-medium-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://www.instagram.com/easyenglishwithcristina","service":"instagram","label":"My Instagram Profile"} /-->
			<!-- wp:social-link {"url":"https://www.youtube.com/channel/UC9EORwHrZ7Lv60TsqCfxzAg","service":"youtube","label":"My YouTube Channel"} /-->
			<!-- wp:social-link {"url":"https://www.linkedin.com/in/cristina-farahani-040282147/","service":"linkedin"} /-->
		</ul>
		<!-- /wp:social-links -->
 
		<!-- wp:navigation {"overlayMenu":"never","fontSize":"small"} -->
			<!-- wp:navigation-link {"label":"Sitemap","type":"custom","opensInNewTab":true,"url":"<?php echo esc_url( home_url( 'sitemap.xml' ) ); ?>","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"Open an Issue","type":"custom","url":"mailto:giacomosecchi@gmail.com?subject=Problema%20su%20sito%20Easy%20English%20w/%20Cristina","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"Credits","type":"custom","opensInNewTab":true,"url":"https://giacomosecchi.com","kind":"custom","isTopLevelLink":true} /-->
 		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"write-white/copyright"} /-->