<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 
if( !is_admin()){
 
wp_deregister_script('jquery');
wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"), false, '1.7.1');
wp_enqueue_script('jquery');
}

if ( function_exists('register_sidebar') )
register_sidebar( array('name'=>'Home', 'id'=>'home', 'before_widget' => '<div class="widget">', 'after_widget' => '</div>',) );

function myFeedExcluder($query) {
 if ($query->is_feed) {
   $query->set('cat','-260');
 }
return $query;
}
 
add_filter('pre_get_posts','myFeedExcluder');

add_theme_support('post-thumbnails');
add_image_size('portfolio-thumb', 130, 65);

function codex_custom_init() {
  $labels = array(
    'name' => _x('Project', 'post type general name'),
    'singular_name' => _x('Project', 'post type singular name'),
    'add_new' => _x('Add New', 'project'),
    'add_new_item' => __('Add New Project'),
    'edit_item' => __('Edit Project'),
    'new_item' => __('New Project'),
    'all_items' => __('All Projects'),
    'view_item' => __('View Project'),
    'search_items' => __('Search Projects'),
    'not_found' =>  __('No projects found'),
    'not_found_in_trash' => __('No projects found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Portfolio'

  );
 $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','author','thumbnail','excerpt','comments')
  ); 
    register_post_type( 'project', $args );
}
add_action( 'init', 'codex_custom_init' );

/** @ignore */