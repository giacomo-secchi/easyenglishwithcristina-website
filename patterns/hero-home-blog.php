<?php
/**
 * Title: Hero with full screen image
 * Slug: easyenglishwithcristina/hero-home-blog
 * Categories: banner, call-to-action, featured
 * Description: A hero with a full screen image, heading, short paragraph and buttons.
 * Viewport width: 1400
 *
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2186228674_34104ccbbf_o.jpg","dimRatio":50,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","gradient":"black-contrast-radial","align":"full","className":"is-dark","style":{"color":{"duotone":"var:preset|duotone|blue-and-lavender"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-dark" style="min-height:100vh" id="hero-banner-image"><span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient has-black-contrast-radial-gradient-background"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/2186228674_34104ccbbf_o.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"secondary","fontSize":"medium"} -->
    <p class="has-text-align-center has-secondary-color has-text-color has-link-color has-medium-font-size" style="text-transform:uppercase"><?php esc_html_e( 'Blog & news', 'blankspace' ); ?></p>
    <!-- /wp:paragraph -->
 
    <!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <h1 class="wp-block-heading alignwide has-text-align-center" style="margin-top:0;margin-bottom:0"><?php echo wp_kses_post( 'Master English with Ease and Fun <br> New Posts Every Friday!', 'Heading of the hero section', 'easyenglishwithcristina' ); ?></h1>
    <!-- /wp:heading -->

     
    <!-- wp:paragraph {"className":"has-text-align-center","fontSize":"medium"} -->
    <p class="has-text-align-center has-medium-font-size"><?php echo wp_kses_post( 'Welcome to my blog, where I share tips, tricks, and resources to help you master English in a fun and engaging way. Whether you’re a beginner or willing to brush up your skills, you’ll find practical advice, inspiring stories, and interactive content designed to make your learning journey smooth and exciting. Don’t forget to check out our website every Friday for a brand-new post. Our posts are packed with fresh insights and tools to boost your English skills. Let’s make learning English a joyful adventure together!', 'blankspace' ); ?></p>
    <!-- /wp:paragraph -->
	 
</div></div>
<!-- /wp:cover -->
 
