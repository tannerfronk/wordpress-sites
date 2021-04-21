<?php 

// create a menu
// register_nav_menu('siteNavigation', 'navbar-start');

//remove WP <br> tags
remove_filter ('the_content', 'wpautop');

//bulma nav walker
require_once('navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'primary' ),
) );

?>