<?php
/**
 * Title: Services, 3 columns
 * Slug: easyenglishwithcristina/courses-3-col
 * Categories: call-to-action, banner, services
 * Description: Three columns with images and text to showcase services.
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)" id="my-courses-type"><!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} -->
        <p class="has-text-align-center has-secondary-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Course Type', 'easyenglishwithcristina' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary"} -->
        <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Choose the course that best fits your needs', 'easyenglishwithcristina' ); ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:column -->
        <div class="wp-block-column">
                      <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					  <h3 class="wp-block-heading has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Do you want to speak English more fluently?', 'easyenglishwithcristina' ); ?></h3>
            <!-- /wp:heading -->  

            <!-- wp:paragraph -->
            <p><?php esc_html_e( 'Fluency practice speaking building confidence, Learning English is easy and fun!', 'easyenglishwithcristina' ); ?></p>
            <!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button"  href="<?php echo esc_url( home_url( 'english-for-beginners/' ) ); ?>"><?php esc_html_e( 'English for Beginners →', 'easyenglishwithcristina' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
 
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">                            
                       <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					   <h3 class="wp-block-heading has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Are you preparing for IELTS / Cambridge Exams?', 'easyenglishwithcristina' ); ?></h3>
            <!-- /wp:heading -->  

            <!-- wp:paragraph -->
            <p><?php esc_html_e( 'Enroll live lessons weekly! This course focuses on four fundamental skills such as reading comprehension, tactics for listening, writing correction and, speaking practice. You will learn certain techniques that help you to achieve your desirable score. achieve your desirable score.', 'easyenglishwithcristina' ); ?></p>
            <!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="<?php echo esc_url( home_url( 'english-for-students/' ) ); ?>"><?php esc_html_e( 'English for Students →', 'easyenglishwithcristina' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">         
            <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
            <h3 class="wp-block-heading has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Do you want to communicate effectively with your colleagues?', 'easyenglishwithcristina' ); ?></h3>
            <!-- /wp:heading -->  

            <!-- wp:paragraph -->
            <p><?php esc_html_e( 'Cristina will plan each lesson based on your needs (Legal and financial vocabulary, how to communicate during a speech, how to sound like a professional not only in speaking 🗣 but also in writing ✍🏼)! Let’s get down to business!', 'easyenglishwithcristina' ); ?></p>
            <!-- /wp:paragraph -->
			 
				
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="<?php echo esc_url( home_url( 'english-for-business/' ) ); ?>"><?php esc_html_e( 'English for Business →', 'easyenglishwithcristina' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->