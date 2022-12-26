<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}

function planty_menu_class($classes)
{   $classes[] = 'nav-item';
    return $classes;
}
function planty_menu_link_class($attrs)
{$attrs['class'] = 'nav-link';
    return $attrs;

}
function add_admin_link($items, $args){
    if (is_user_logged_in() && $args -> menu=='Menu Principal'){
        $items.='<li><a class=hookLink href="admin">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
add_filter('nav_menu_css_class', 'planty_menu_class');
add_filter('nav_menu_link_attributes', 'planty_menu_link_class');