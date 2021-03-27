<?php

/**
 * Add CSS Stylesheet
 **/

    function codifycode_styles()
     {
        wp_enqueue_style( 'style' , get_stylesheet_directory_uri() . '/style.css');
        wp_enqueue_style( 'bootstrap.min.css' , get_stylesheet_directory_uri() . '/asstes/node_modules/bootstrap/dist/css/bootstrap.min.css');

     }

    add_action('wp_enqueue_scripts', 'codifycode_styles');

/**


/**
 * Add JS Scritps
**/
    
      function codifycode_scripts()
       {
           wp_enqueue_script('jquery.min.js' , get_stylesheet_directory_uri() . '/asstes/node_modules/jquery/dist/jquery.min.js');
         wp_enqueue_script('bootsrap.min.js' , get_stylesheet_directory_uri() . '/asstes/node_modules/bootstrap/dist/js/bootstrap.min.js');

       }
     
       add_action('wp_enqueue_scripts', 'codifycode_scripts');

/**
* Add theme support files
**/

    function codifycode_theme_setup()
    {
        add_theme_support('menue');
    }

    add_action('after_setup_theme', 'codifycode_theme_setup');

/**
* Add theme support function for custome logo
**/

    function codifycode_custom_logo_setup()
     {
       $defaults = array(
       'height'      => 207,
       'width'       => 76,
       'flex-height' => true,
       'flex-width'  => true,
       'header-text' => array( 'site-title', 'site-description' ),
      'unlink-homepage-logo' => true, 
     );

     add_theme_support( 'custom-logo', $defaults );
    }

    add_action( 'after_setup_theme', 'codifycode_custom_logo_setup' );

    /*
    * Register the files
    */
    

?>