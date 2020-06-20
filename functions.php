<?php

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
 function mytheme_register_nav_menu(){
     register_nav_menus( array(
         'primary_menu' => __( 'Primary Menu', 'text_domain' ),
         'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
     ) );
 }
 add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
?>

<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'header logo',
        'id'            => 'header logo',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
    
    register_sidebar( array(
        'name'          => 'footer column-1',
        'id'            => 'footer column-1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'footer column-2',
        'id'            => 'footer column-2',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>