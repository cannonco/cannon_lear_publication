<?php
if (!defined('ABSPATH')) exit;

function cannon_lear_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
  register_nav_menus(['primary' => __('Primary Menu', 'cannon-lear')]);
}
add_action('after_setup_theme', 'cannon_lear_setup');

function cannon_lear_assets() {
  wp_enqueue_style('cannon-lear-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
  wp_enqueue_script('cannon-lear-menu', get_template_directory_uri().'/assets/js/site.js', [], wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'cannon_lear_assets');

function cannon_lear_create_pages() {
  $pages = [
    ['title'=>'Books','slug'=>'books','parent'=>0],
    ['title'=>'Executive Knowledge Management','slug'=>'ekm','parent'=>'books'],
    ['title'=>'Authors','slug'=>'authors','parent'=>0],
    ['title'=>'Cory Lee Cannon','slug'=>'cory-lee-cannon','parent'=>'authors'],
    ['title'=>'Contact','slug'=>'contact','parent'=>0],
  ];
  $ids = [];
  foreach ($pages as $page) {
    $path = is_string($page['parent']) ? $page['parent'].'/'.$page['slug'] : $page['slug'];
    $existing = get_page_by_path($path);
    if ($existing) { $ids[$page['slug']] = $existing->ID; continue; }
    $parent = is_string($page['parent']) && isset($ids[$page['parent']]) ? $ids[$page['parent']] : 0;
    $ids[$page['slug']] = wp_insert_post(['post_title'=>$page['title'],'post_name'=>$page['slug'],'post_type'=>'page','post_status'=>'publish','post_parent'=>$parent]);
  }
  flush_rewrite_rules();
}
add_action('after_switch_theme', 'cannon_lear_create_pages');

function cannon_lear_upgrade() {
  $version = wp_get_theme()->get('Version');
  if (get_option('cannon_lear_theme_version') !== $version) {
    cannon_lear_create_pages();
    update_option('cannon_lear_theme_version', $version);
  }
}
add_action('admin_init', 'cannon_lear_upgrade');

function cannon_lear_asset($file) { return esc_url(get_template_directory_uri().'/assets/images/'.$file); }
function cannon_lear_icon($symbol) { echo '<span class="icon" aria-hidden="true">'.esc_html($symbol).'</span>'; }
?>
