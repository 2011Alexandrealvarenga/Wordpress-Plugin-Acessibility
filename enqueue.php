<?php 
function wp_acessibility_enqueue_css(){
    
    wp_register_style(
        'wp_acessibility_style',
        plugins_url('/assets/css/style_acessibility.css', WP_ACESSIBILITY_PLUGIN_URL)
    );

    wp_enqueue_style('wp_acessibility_style');
}