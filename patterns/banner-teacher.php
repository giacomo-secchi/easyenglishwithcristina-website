<?php

/**
 * Title: Teacher banner
 * Slug: easyenglishwithcristina/banner-teacher
 * Categories: banner
 * Keywords: banner
 * Viewport Width: 1500
 * Inserter: true
 */
?>




<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	
<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e( 'About the teacher', 'easyenglishwithcristina' ); ?></p>
<!-- /wp:paragraph -->

 
<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:0"><?php echo wp_kses_post( __('Hello and Welcome!<br> Nice to meet you.', 'easyenglishwithcristina' ) ); ?></h2>
<!-- /wp:heading -->
				 
				
				<!-- wp:paragraph {"fontSize":"display"} -->
				<p class="has-display-font-size"><?php echo wp_kses_post( 'I’m Cristina and I am a <strong>TESOL certified English teacher</strong> with <strong>+30 years of experience.</strong>', 'easyenglishwithcristina' ); ?></p>
				<!-- /wp:paragraph -->
				 		 
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'My personal life is full of passion for languages, travelling, and socialization. That’s why I enjoy working with people and being a teacher is not what I do any more, it has become who I am.', 'easyenglishwithcristina' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo wp_kses_post( 'I possess soft skills like:', 'easyenglishwithcristina' ); ?></p>
				<!-- /wp:paragraph --> 	
				 
				<!-- wp:list -->
				<ul class="wp-block-list"><!-- wp:list-item -->
				<li><?php esc_html_e( 'Facilitating learning process using different digital software', 'easyenglishwithcristina' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Presenting webinars', 'easyenglishwithcristina' ); ?></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Preparing goal oriented lesson plans', 'easyenglishwithcristina' ); ?></li>
				<!-- /wp:list-item --></ul>
				<!-- /wp:list -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"secondary"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="<?php echo esc_url( home_url( 'about-me/' ) ); ?>"><?php esc_html_e( 'Learn More About Me →', 'easyenglishwithcristina' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
 

</div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">
 
 
<!-- wp:image {"linkDestination":"none","className":"is-style-rounded","style":{"border":{"radius":"30px"}}} -->
<figure class="wp-block-image has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cristina-fara.jpg" alt="" style="border-radius:30px;"/></figure>
<!-- /wp:image -->
 

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

 