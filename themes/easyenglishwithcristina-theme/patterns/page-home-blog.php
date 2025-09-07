<?php
/**
 * Title: Blog home
 * Slug: blankspace/page-home-blog
 * Keywords: page, starter
 * Post Types: page, wp_template
 * Viewport width: 1400
 * Description: A blogging home page with a hero section, a text section, a blog section.
 */
?>
<?php
if ( ! is_paged() ) {
    echo '<!-- wp:pattern {"slug":"easyenglishwithcristina/hero-home-blog"} /-->';
    echo '<!-- wp:pattern {"slug":"blankspace/banner-2-col-sticky-posts"} /-->';
}
?>
<!-- wp:pattern {"slug":"blankspace/template-query-loop"} /-->
