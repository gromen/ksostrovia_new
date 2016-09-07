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
      'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'post-formats'
    ),
    'has_archive' => true
  );

  register_post_type( 'aktualnosci', $news_args );

}

add_action('init', 'global_init_taxonomies');

function global_init_taxonomies() {

  register_taxonomy( 'druzyny', array('aktualnosci'),
    array (
      'hierarchical' => false,
      'labels' => array (
        'name' => 'Drużyny',
        'singular_name' => 'Drużyny',
        'search_items' => 'Wyszukaj drużyny',
        'popular_items' => 'Popularne drużyny',
        'all_items' => 'Wszystkie drużyny',
        'edit_item' => 'Edytuj drużynę',
        'update_item' => 'Aktualizuj drużynę',
        'add_new_item' => 'Dodaj nową drużynę',
        'new_item_name' => 'Nazwa nowej drużyny',
        'separate_items_with_commas' => 'Oddziel drużyny przecinkiem',
        'choose_from_most_used' => 'Wybierz sposród najczęciej używanych drużyn',
        'menu_name' => 'Drużyny'
        ),
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array ('slug' => 'druzyna'),
    )

   );
}








 ?>