<?php

namespace Roots\Sage\Init;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage'),
    'super_navigation' => __('Super Navigation', 'sage'),
    'social_navigation' => __('Social Navigation', 'sage'),
    'nosotros_navigation' => __('Nosotros Navigation', 'sage'),
    'normatividad_navigation' => __('Normatividad Navigation', 'sage'),
    'gestion_navigation' => __('Gestión Navigation', 'sage'),
    'comunicacion_navigation' => __('Comunicación Navigation', 'sage'),
    'transparencia_navigation' => __('Transparencia Navigation', 'sage'),
    'convocatoria_navigation' => __('Convocatorias Navigation', 'sage'),
    'publicaciones_navigation' => __('Publicaciones Navigation', 'sage'), 
    'capacitacion_navigation' => __('Capacitación Navigation', 'sage')
  ]);

  // Add post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Add post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Add HTML5 markup for captions
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list']);

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style(Assets\asset_path('styles/editor-style.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Nosotros', 'sage'),
    'id'            => 'sidebar-nosotros',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Contacto', 'sage'),
    'id'            => 'sidebar-contacto',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Eventos', 'sage'),
    'id'            => 'sidebar-eventos',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<div class="page-header"><h4>',
    'after_title'   => '</h4></div>'
  ]);

  register_sidebar([
    'name'          => __('Footer 1', 'sage'),
    'id'            => 'footer-1',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ]);
    register_sidebar([
    'name'          => __('Footer 2', 'sage'),
    'id'            => 'footer-2',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ]);
      register_sidebar([
    'name'          => __('Footer 3', 'sage'),
    'id'            => 'footer-3',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');
