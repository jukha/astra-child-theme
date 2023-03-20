<?php
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'astra-child-style', get_stylesheet_uri(), array('astra-theme-css'), wp_get_theme()->get('Version') );
}

function add_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap', array(), null );
}
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
?>

