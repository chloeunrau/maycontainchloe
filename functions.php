<?php




/* Register widget areas */
register_sidebar( array(
    'id'          => 'activities',
    'name'        => 'Activities',
    'description' => 'The Widget area for Activities on the home page.'
) );
register_sidebar( array(
    'id'          => 'portfolio',
    'name'        => 'Portfolio',
    'description' => 'The Widget area for the Portfolio page.'
) );
register_sidebar( array(
    'id'          => 'blogpostaboutme',
    'name'        => 'Blog Post About Me',
    'description' => 'The author description that appears on blog posts.'
) );




/* Surround images with <div> tags instead of <p> tags */
function filter_ptags_on_images($content) {
  return preg_replace('/<p[^>]*>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\/p>/', '<div class="radius_fix">$1</div>', $content);
}
add_filter('the_content', 'filter_ptags_on_images');




/* Change the 'Read More' text */
add_filter( 'the_content_more_link', 'my_more_link', 10, 2 );

function my_more_link( $more_link, $more_link_text ) {
  return str_replace( $more_link_text, 
                      '<div class="morelink">Continue reading...</div>', 
                      $more_link );
}




?>