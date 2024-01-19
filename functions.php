<?php

add_action('wp_enqueue_scripts', 'load_scripts_and_style');
add_theme_support('title-tag');

function load_scripts_and_style()
{
  $template_directory_uri = get_template_directory_uri();
  wp_enqueue_style('theme-style', $template_directory_uri . '/style.css', [], filemtime(get_template_directory() . '/style.css'));

  if (file_exists(get_template_directory() . '/dist/main.css')) {
    wp_enqueue_style('styles-bundle', $template_directory_uri . '/dist/main.css', [], filemtime(get_template_directory() . '/dist/main.css'));
  }

  if (file_exists(get_template_directory() . '/dist/main.js')) {
    wp_enqueue_script('js-bundle', $template_directory_uri . '/dist/main.js', [], filemtime(get_template_directory() . '/dist/main.js'), true);
  }

  wp_localize_script('js-bundle', 'WP', array(
    'root' => esc_url_raw(rest_url()),
    'nonce' => wp_create_nonce(),
    'base' => get_site_url(),
    'publicPath' => $template_directory_uri . "/dist/",
  ));
}

//Add image size

add_image_size('header_banner_computer', 1920, 800, ['center', 'center']);
add_image_size('header_banner', 1440, 800, ['center', 'center']);
add_image_size('services_background', 430, 450, ['center', 'center']);
add_image_size('content_picture', 600, 550, ['center', 'center']);
add_image_size('realisation_picture', 500, 500, ['center', 'center']);
add_image_size('contact_background', 1440, 1600, ['center', 'center']);
