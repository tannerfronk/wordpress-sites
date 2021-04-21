<?php 

// create a menu
register_nav_menu('siteNavigation', 'primaryNavigation');

//excerpt length
function cruise_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'cruise_custom_excerpt_length', 999 );

//create excerpt link
function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow" class="read-more">Read More</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//remove WP <br> tags
remove_filter ('the_content', 'wpautop');

?>