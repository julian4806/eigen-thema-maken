<?php
function arphabet_widgets_init()
{

    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-widgets',
        'before_widget' => '<div class="side-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'arphabet_widgets_init');

function mytheme_menu()
{
    register_nav_menu('mijn_custom_menu', __('Mijn Custom Menu'));
}
add_action('init', 'mytheme_menu');
add_theme_support('post-thumbnails');
add_image_size('sidebar-thumb', 120, 120, true);
add_image_size('custom-page-thumb', 600, 600);
add_image_size('singlepost-thumb', 200, 200);
add_image_size('header-image', 505, 605);
