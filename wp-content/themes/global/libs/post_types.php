<?php

add_action('init','global_post_types' );

function global_post_types() {

  /* Register 'News' Post Type*/

  $news_args = array(
    'labels' => array(
      'name' => 'Aktualności',
      'singular_name' => 'Aktualności',
      'all_items' => 'Wszystkie aktualności',
      'add_new' => 'Dodaj nową aktualność',
      'add_new_item' => 'Dodaj nową aktualność',
      'edit_item' => 'Edytuj aktualność',
      'new_item' => 'Nowa aktualność',
      'view_item' => 'Zobacz aktualność',
      'search_items' => 'Szukaj w aktualnościach',
      'not_found_in_trash' => 'Brak aktualności w koszu',
      'not_found' => 'Nie znaleziono aktualności',
      'parent_item_colon' => ''
    ),
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-id-alt',
    'capability_type' => 'post',
    'rewrite' => true,
    'hierarchical' => false,
    'query_var' => true,
    'supports' => array(
      'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'post-formats'
    ),
    'has_archive' => true
  );

  register_post_type( 'aktualnosci', $news_args );

}








 ?>