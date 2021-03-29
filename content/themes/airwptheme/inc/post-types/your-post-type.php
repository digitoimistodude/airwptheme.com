<?php
/**
 * @package airwptheme
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:06:45
 * @Last Modified by: Timi Wahalahti
 * @Last Modified time: 2020-10-15 17:08:38
 **/

namespace Air_Light;

/**
 * Registers the Your Post Type post type.
 */
class Your_Post_Type extends Post_Type {

  public function register() {

    // Modify all the i18ized strings here.
    $generated_labels = [
      'menu_name'          => __( 'Your Post Type', 'airwptheme' ),
      'name'               => _x( 'Your Post Types', 'post type general name', 'airwptheme' ),
      'singular_name'      => _x( 'Your Post Type', 'post type singular name', 'airwptheme' ),
      'name_admin_bar'     => _x( 'Your Post Type', 'add new on admin bar', 'airwptheme' ),
      'add_new'            => _x( 'Add New', 'thing', 'airwptheme' ),
      'add_new_item'       => __( 'Add New Your Post Type', 'airwptheme' ),
      'new_item'           => __( 'New Your Post Type', 'airwptheme' ),
      'edit_item'          => __( 'Edit Your Post Type', 'airwptheme' ),
      'view_item'          => __( 'View Your Post Type', 'airwptheme' ),
      'all_items'          => __( 'All Your Post Types', 'airwptheme' ),
      'search_items'       => __( 'Search Your Post Types', 'airwptheme' ),
      'parent_item_colon'  => __( 'Parent Your Post Types:', 'airwptheme' ),
      'not_found'          => __( 'No your post types found.', 'airwptheme' ),
      'not_found_in_trash' => __( 'No your post types found in Trash.', 'airwptheme' ),
    ];

    // Definition of the post type arguments. For full list see:
    // http://codex.wordpress.org/Function_Reference/register_post_type
    $args = [
      'labels'              => $generated_labels,
      'description'         => '',
      'menu_icon'           => null,
      'rewrite'             => [
        'with_front'  => false,
        'slug'        => 'your-post-type',
      ],
      'supports'            => [ 'title', 'editor', 'thumbnail', 'revisions' ],
      'taxonomies'          => [],
      'public'              => false,
      'has_archive'         => false,
      'exclude_from_search' => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_rest'        => false,
    ];

    $this->register_wp_post_type( $this->slug, $args );
  }
}
