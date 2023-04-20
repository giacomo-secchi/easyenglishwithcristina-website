banner cookie remove on checkout
blog (width column e quote styles) block quotes also in about me page
Check wheel of fortune  and get parameters
check email order hook
Contact form in home, about me page, blog page
create an account giacomo.secchi -> html5publishing@gmail.com
create an account cristina.fara-> info@easyenglishwithcrisitna.com
set administator mail as wordpress@easyenglishwithcristina.com

add custom fonts
Add fontawesome


manage alternatively these options
IN_MAINTENANCE=OFF
ALLOWED_IP="172.19.0.1"



create accordion as module ACF

set persistent cache https://wordpress.org/documentation/article/optimization/#persistent-object-cache


Old functions to check
/**
 * Sensei LMS configurations
 */

// add_filter( 'sensei_archive_course_order_by_options', '__return_empty_array' );
// add_filter( 'sensei_archive_course_filter_by_options', '__return_empty_array' );
// add_filter( 'sensei_disable_styles', '__return_true' );

// add_filter( 'sensei_course_loop_number_of_columns',  function () {
//     return 3; // Change to whatever number of columns you want.
// } );


// /**
//  * Display available attributes.
//  *
//  * @return array|void
//  */
// // https://iconicwp.com/blog/display-woocommerce-attributes-on-the-shop-page/
// function storefront_child_available_attributes() {
//     global $product;

//     $attribute = 'pa_difficulty-level';
//     $name = $product->get_attribute( $attribute );
//     $string = wc_attribute_label( $attribute, $product );



//     if ( empty( $attribute ) ) {
//         return;
//     }

//
// }

// add_action( 'woocommerce_shop_loop_item_title', 'storefront_child_available_attributes', 20 );



// TODELETE: old sensei course and WooCommerce  modifications

// function mcf_modify_single_lesson_title( $title, $id ) {
// 	if ( 'lesson' === get_post_type( $id ) ) {
//         $course_id = 20;
//         $lesson_order_value = get_post_meta( get_the_id(), "_order_".$course_id, true );

//         return 'Lesson '. $lesson_order_value . ': '. $title;
// 	}
//     //is_singular( 'lesson' ) ){




// 	return $title;
// }

// add_filter( 'the_title', 'mcf_modify_single_lesson_title', 10, 2 );




// function storefront_child_single_course_header() {


// 	if ( is_singular( 'course' ) ) {

// 		// remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
// 		remove_action( 'storefront_post_content_before', 'storefront_post_thumbnail', 10 );

//         add_action( 'storefront_before_content', function() { storefront_child_wrapper( 'header-featured-image' ); }, 0 );
// 		add_action( 'storefront_before_content', 'storefront_post_thumbnail', 10 );
// 		add_action( 'storefront_before_content', function() { storefront_child_wrapper( 'col-full bottom margin-bottom-1' ); }, 20 );
//         add_action( 'storefront_before_content', function() {
//             \Sensei_WC_Paid_Courses\Frontend\Courses::output_course_price( get_the_id() );
//             _e( ' / Course Price' );
//         }, 30 );


// 		add_action( 'storefront_before_content', 'storefront_post_header', 20 );
// 		add_action( 'storefront_before_content', 'the_excerpt', 20 );
//         add_action( 'storefront_before_content', 'sensei_simple_course_price', 10 );

// 		add_action( 'storefront_before_content', 'storefront_header_container_close', 30 );
// 		add_action( 'storefront_before_content', 'storefront_header_container_close', 40 );
// 	}

// }

// add_action( 'wp', 'storefront_child_single_course_header' );



// Old banner
        <!-- wp:cover {"url":"https://www.easyenglishwithcristina.com/wp-content/uploads/2022/08/cristinaxelsa.png","id":1352,"dimRatio":0,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","style":{"color":{}}} -->
<div class="wp-block-cover alignfull is-light" style="min-height:100vh" id="elsa-speak-app"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1352" alt="" src="https://www.easyenglishwithcristina.com/wp-content/uploads/2022/08/cristinaxelsa.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"align":"right","id":1347,"width":455,"height":158,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image alignright size-full is-resized"><img src="https://www.easyenglishwithcristina.com/wp-content/uploads/2022/08/LOGO-ELSA-FOOTER.svg" alt="" class="wp-image-1347" width="455" height="158"/></figure>
        <!-- /wp:image -->

        <!-- wp:group {"style":{"border":{"width":"1px","radius":"8px"},"spacing":{"padding":{"right":"6px","left":"6px"}}},"borderColor":"luminous-vivid-amber","className":"is-style-inline","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","orientation":"vertical"}} -->
        <div class="wp-block-group is-style-inline has-border-color has-luminous-vivid-amber-border-color" style="border-radius:8px;border-width:1px;padding-right:6px;padding-left:6px"><!-- wp:paragraph {"align":"left","textColor":"luminous-vivid-amber"} -->
        <p class="has-text-align-left has-luminous-vivid-amber-color has-text-color"><strong>The super discount offer up to 85%</strong></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group"><!-- wp:heading {"textAlign":"right","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"white"} -->
        <h2 class="has-text-align-right has-white-color has-text-color" style="font-style:normal;font-weight:300">Why ELSA</h2>
        <!-- /wp:heading --></div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"right","textColor":"blue"} -->
        <p class="has-text-align-right has-blue-color has-text-color">ELSA stands for English Language Speech Assistant</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"align":"right","textColor":"background"} -->
        <p class="has-text-align-right has-background-color has-text-color">PRACTICE WITHOUT A TEACHER <br>AND MAKE YOUR PRONUNCIATION PERFECT</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
        <div class="wp-block-buttons"><!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://elsaspeak.com/inf/easyenglishwithcristina/" target="_blank" rel="noreferrer noopener">Pay once and use it a lifetime</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div></div>
        <!-- /wp:cover -->
