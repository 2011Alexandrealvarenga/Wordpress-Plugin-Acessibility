<?php 
if( ! function_exists( 'wp_acessibility_enqueue_css' )){
    function wp_acessibility_enqueue_css(){    
        wp_register_style(
            'wp_acessibility_style',
            plugins_url('/assets/css/style_acessibility.css', WP_ACESSIBILITY_PLUGIN_URL)
        );
        wp_enqueue_style('wp_acessibility_style');
    }
}

if( ! function_exists( 'wp_script_acessibility' )){
    function wp_script_acessibility()
    {         
        wp_enqueue_script(
                'wp_acessibility_js',
                plugins_url('/assets/js/script.js', WP_ACESSIBILITY_PLUGIN_URL)
            );
            wp_enqueue_script('wp_acessibility_js');
    }
}

