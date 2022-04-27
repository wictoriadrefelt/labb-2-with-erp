<?php 


function get_scripts(){
    wp_register_style('customCss', get_template_directory_uri(  ).'/style.css');
    wp_register_style('bootstrap', get_template_directory_uri(  ).'./css/bootstrap.css');
    wp_enqueue_style('customCss');
    wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'get_scripts');

add_action('woocommerce_email_order_details', 'doSomething');

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function doSomething(){
    
    echo 'Well done, you did good';
}


add_action('woocommerce_cart_item_visible', 'cheekyUpdate');

function cheekyUpdate(){
    echo 'Go on then, we know you want to find sanity'; 
}


add_action('woocommerce_cart_is_empty', 'youCanDoBetter');

function youCanDoBetter(){
    echo 'It seems to be very empty here, did you forget something?'; 
}


remove_action( 'wp_head', 'wp_generator' );

//action to remove our product thumbnails, but why would we want to do that? 

//remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail' );

remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );



?> 