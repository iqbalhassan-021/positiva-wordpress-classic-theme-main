<?php
    //Loading our css
    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/pluggins/slick_slider/slick/');
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/pluggins/slick_slider/slick/');

    });
    //Loading the images
    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_style('media-files', get_template_directory_uri() . '/assets/images/');
    });
    //Loading our js
    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/pluggins/slick_slider/slick/');
        wp_enqueue_script('slick-min-js', get_template_directory_uri() . '/assets/pluggins/slick_slider/slick/');
        wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/code.js');
    });

    //Loading our options
    add_theme_support( 'menus' );
    add_theme_support( 'Widgets' );
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    add_theme_support('automatic-feed-links');

    // Add theme support for HTML5 and title tag
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('title-tag');
    
    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    //  Adding Menus in WP
    register_nav_menu('primary', __('Primary Menu', 'theme-text-domain'));
    //  Initilize the Theme-options page
    include_once get_template_directory() . '/incs/theme-options.php';
    function enqueue_media_uploader() {
        if (is_admin()) {
            wp_enqueue_media();
        }
    }
    add_action('admin_enqueue_scripts', 'enqueue_media_uploader');
    function arphabet_widgets_init() {

        register_sidebar( array(
            'name' => 'Home right sidebar',
            'id' => 'home_right_1',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="rounded">',
            'after_title' => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );

?>