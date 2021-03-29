<?php
/**
 * @package airwptheme
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:05:35
 * @Last Modified by: Niku Hietanen
 * @Last Modified time: 2020-02-18 15:06:07
 */

namespace Air_Light;

/**
 * Registers the Your Taxonomy taxonomy.
 *
 * @param Array $post_types Optional. Post types in
 * which the taxonomy should be registered.
 */
class Your_Taxonomy extends Taxonomy {


  public function register( array $post_types = [] ) {
    // Taxonomy labels.
    $labels = [
      'name'                  => _x( 'Your Taxonomies', 'Taxonomy plural name', 'airwptheme' ),
      'singular_name'         => _x( 'Your Taxonomy', 'Taxonomy singular name', 'airwptheme' ),
      'search_items'          => __( 'Search Your Taxonomies', 'airwptheme' ),
      'popular_items'         => __( 'Popular Your Taxonomies', 'airwptheme' ),
      'all_items'             => __( 'All Your Taxonomies', 'airwptheme' ),
      'parent_item'           => __( 'Parent Your Taxonomy', 'airwptheme' ),
      'parent_item_colon'     => __( 'Parent Your Taxonomy', 'airwptheme' ),
      'edit_item'             => __( 'Edit Your Taxonomy', 'airwptheme' ),
      'update_item'           => __( 'Update Your Taxonomy', 'airwptheme' ),
      'add_new_item'          => __( 'Add New Your Taxonomy', 'airwptheme' ),
      'new_item_name'         => __( 'New Your Taxonomy', 'airwptheme' ),
      'add_or_remove_items'   => __( 'Add or remove Your Taxonomies', 'airwptheme' ),
      'choose_from_most_used' => __( 'Choose from most used Taxonomies', 'airwptheme' ),
      'menu_name'             => __( 'Your Taxonomy', 'airwptheme' ),
    ];

    $args = [
      'labels'            => $labels,
      'public'            => false,
      'show_in_nav_menus' => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
      'show_tagcloud'     => false,
      'show_ui'           => true,
      'query_var'         => false,
      'rewrite'           => [
        'slug' => 'your-taxonomy',
      ],
    ];

    $this->register_wp_taxonomy( $this->slug, $post_types, $args );
  }

}
