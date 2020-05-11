<?php
    //Einbinden des Normalen Wordpress stylsheets (Hier 2 aufgrund sass einbindung)
    function load_stylesheets(){

        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('style');

        
       

    }

    //Script einbinden zuende aufruf von load_stylesheets();

    add_action('wp_enqueue_scripts','load_stylesheets');

    function load_js(){
        wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
        wp_enqueue_script('customjs');
    }

    add_action('wp_enqueue_scripts','load_js');

    //Include Jquery

    function load_jquery(){
        //wp_deregister_script('jquery'); 
        wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', '', 1, true);
        wp_enqueue_script('jquery');
    }

    add_action('wp_enqueue_scripts','load_jquery');

    //Theme Unterstuetzung aktivieren

    add_theme_support('menus');

    add_theme_support('post-thumbnails');

    add_theme_support('widgets');
    
    // MENUS REGISTRIEREN !!!
    register_nav_menus(
        array(
            'top-menu' => __('navigation', 'theme'),
            'footer-menu' => __('fussleiste', 'theme'),

        ));

    

    add_image_size( 'smallest', 300, 300, true);
    add_image_size( 'biggest', 800, 800, true);

    
    //Sidebars

   function my_sidebars(){
        register_sidebar(
            array(
                'name' => 'Page Sidebar',
                'id' => 'page-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
                )
            );
        register_sidebar(
            array(
                'name' => 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
                )
            );
        register_sidebar(
            array(
                'name' => 'Frontpage Sidebar',
                'id' => 'front-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
                )
                );
   }
       
   add_action('widgets_init','my_sidebars');