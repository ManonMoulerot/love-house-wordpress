<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'my-custom-menu' => __( 'My Custom Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

// Add Our Widget Locations
function my_custom_sidebar() {
    register_sidebar( array (
            'name' => __( 'Custom'),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar( array (
        'name' => __( 'Test'),
        'id' => 'test-side-bar',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
);
    register_sidebar( array (
        'name' => __( 'copyright'),
        'id' => 'copyright',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'rideau'),
        'id' => 'rideau',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'decor'),
        'id' => 'decor',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'linge'),
        'id' => 'linge',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'bain'),
        'id' => 'bain',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'lit'),
        'id' => 'lit',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'prestation'),
        'id' => 'prestation',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'contact'),
        'id' => 'contact',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'horaire jour'),
        'id' => 'horairejour',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'horaire heure'),
        'id' => 'horaireheure',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'reseaux sociaux'),
        'id' => 'reseauxsociaux',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'Logo menu'),
        'id' => 'logomenu',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'Image'),
        'id' => 'image',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );
    register_sidebar( array (
        'name' => __( 'Map'),
        'id' => 'map',
        'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
        'before_widget' => '<div class="widget-content">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    )
    );

    
}
add_action( 'widgets_init', 'my_custom_sidebar' );