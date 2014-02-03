<?php





add_action( 'init', 'register_my_menus' );
function register_my_menus() {
register_nav_menus(
array(
'main-menu' => __( 'Main Menu' ),
) );
}





register_sidebar( array(
    'id'          => 'portfolio',
    'name'        => 'Portfolio',
    'description' => 'This is the Widget area for the Portfolio page.'
) );





/* Surround images with <div> tags instead of <p> tags */
function filter_ptags_on_images($content) {
  return preg_replace('/<p[^>]*>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\/p>/', '<div class="radius_fix">$1</div>', $content);
}
add_filter('the_content', 'filter_ptags_on_images');





?>