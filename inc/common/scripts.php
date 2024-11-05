<?php

function add_theme_scripts() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('swiper-bundle-css', get_template_directory_uri() . '/assets/css/swiper-bundle.css');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('font-awesome-pro-css', get_template_directory_uri() . '/assets/css/font-awesome-pro.css');
    wp_enqueue_style('flaticon-css', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('spacing-css', get_template_directory_uri() . '/assets/css/spacing.css');
    wp_enqueue_style('techub-css', get_template_directory_uri() . '/assets/css/techub.css');

 
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array('jquery'), null, true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array('jquery'), null, true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array('jquery'), null, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), null, true);
    wp_enqueue_script('range-slider', get_template_directory_uri() . '/assets/js/range-slider.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), null, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array('jquery-ui-slider'), null, true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array(), null, true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array(), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array('imagesloaded'), null, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array('jquery'), null, true);
    wp_enqueue_script('ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', array('jquery'), null, true);
    wp_enqueue_script('techub-main', get_template_directory_uri() . '/assets/js/techub-main.js', array('jquery'), null, true);

    // comment
    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');