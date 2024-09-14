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
				<p style="font-weight:300"><?php echo esc_html_x( 'L\'inglese è una lingua globale. Immagina se potessi parlare in modo più fluente, potresti guadagnare di più e avere più successo nel lavoro, nello studio e nella vita. Quindi, inizia a imparare oggi stesso!', 'easyenglishwithcristina' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:pattern {"slug":"write-white/newsletter-subscribe-jetpack"} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
				<div class="wp-block-group">
				
					<!-- wp:navigation {"overlayMenu":"never","icon":"menu","style":{"typography":{"fontWeight":"300","textTransform":"uppercase"},"layout":{"type":"flex","selfStretch":"fill","flexWrap":"wrap"}},"layout":{"type":"flex"},"ariaLabel":"<?php esc_attr_e( 'About', 'easyenglishwithcristina' ); ?>"} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'English for Beginners', 'easyenglishwithcristina' ); ?>","type":"page","url":"<?php echo esc_url( home_url( 'english-for-beginners/' ) ); ?>","kind":"post-type"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'English for Students', 'easyenglishwithcristina' ); ?>","type":"page","url":"<?php echo esc_url( home_url( 'english-for-students/' ) ); ?>","kind":"post-type"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'English for Business', 'easyenglishwithcristina' ); ?>","type":"page","url":"<?php echo esc_url( home_url( 'english-for-business/' ) ); ?>","kind":"post-type"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'easyenglishwithcristina' ); ?>","type":"page","url":"<?php echo esc_url( home_url( 'blog/' ) ); ?>","kind":"post-type"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Assessment Test', 'easyenglishwithcristina' ); ?>","type":"page","url":"<?php echo esc_url( home_url( 'english-test/' ) ); ?>","kind":"post-type"} /-->
					<!-- /wp:navigation -->
					 

					<!-- wp:columns -->
					<div class="wp-block-columns">
						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:list {"className":"is-style-none"} -->
							<ul class="wp-block-list is-style-none">
								<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
								<li style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
									<!-- wp:html -->
									<a href="https://www.iubenda.com/privacy-policy/70739930" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
									<!-- /wp:html -->
								</li>
								<!-- /wp:list-item -->
								<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
								<li style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
									<!-- wp:html -->
									<a href="https://www.iubenda.com/privacy-policy/70739930/cookie-policy" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Cookie Policy ">Cookie Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
									<!-- /wp:html -->
								</li>
								<!-- /wp:list-item -->
								
								<!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
								<li style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
									<!-- wp:html -->
									<a href="https://www.iubenda.com/termini-e-condizioni/70739930" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Termini e Condizioni ">Termini e Condizioni</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
									<!-- /wp:html -->
								</li>
								<!-- /wp:list-item -->
							</ul>
							<!-- /wp:list -->
						</div>
						<!-- /wp:column -->
			 	 
						<!-- wp:column -->
						<div  class="wp-block-column">	
							<!-- wp:group {className":"language-switcher language-switcher-layout-1"} -->
							<div class="wp-block-group language-switcher language-switcher-layout-1">
								<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"write-white/translatepress-language-switcher"}}}} -->
								<p>Language Switcher</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->
			
					</div>
					<!-- /wp:columns -->
			
				</div>
				<!-- /wp:group -->
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
		<!-- wp:social-links {"openInNewTab":true,"iconColor":"base","size":"has-medium-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
		<ul class="wp-block-social-links has-medium-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://www.instagram.com/easyenglishwithcristina","service":"instagram","label":"My Instagram Profile"} /-->
			<!-- wp:social-link {"url":"https://www.threads.net/@easyenglishwithcristina","service":"threads"} /-->
			<!-- wp:social-link {"url":"https://www.youtube.com/channel/UC9EORwHrZ7Lv60TsqCfxzAg","service":"youtube","label":"My YouTube Channel"} /-->
			<!-- wp:social-link {"url":"https://www.linkedin.com/in/cristina-farahani-040282147/","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"https://www.tiktok.com/@easyenglishwithcr","service":"tiktok"} /-->
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