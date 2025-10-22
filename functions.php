<?php
add_action('wp_enqueue_scripts','add_styles');

function add_styles() {
    wp_enqueue_style( 
    'google-fonts_style',
     'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Viga&display=swap',
     array() 
    );

    wp_enqueue_style(
        'main_style',
        get_template_directory_uri(). '/css/main.css',
        array('google-fonts_style'),
        '1.0'
    );

    wp_enqueue_script(
    'main_script',
    get_template_directory_uri() . '/js/main.js',
    array('jquery'),
    '1.0',
    true
  );
}
?>
