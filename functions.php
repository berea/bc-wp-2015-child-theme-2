<?php
/**
 * Child theme functions and definitions
 *
 * @package berea
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( 'parent-js', get_template_directory_uri() . '/assets/js/production.js', array( 'jquery' ), '1.0.0', false );
}

//if ( !function_exists('berea_optional_scripts') ) :
    function berea_optional_scripts() {

        // Header Image
        if( get_header_image() == '') {

        } else {
            ?>
            <style type="text/css">
                .homepage-slider-dept { background: url("<?php echo get_header_image(); ?>"); }
            </style>
        <?php }

    }
    add_action( 'wp_head', 'berea_optional_scripts' );
//endif;

