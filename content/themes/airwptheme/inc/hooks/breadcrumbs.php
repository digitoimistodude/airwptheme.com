<?php
/**
 * @Author: Roni Laukkarinen
 * @Date:   2020-06-28 16:54:13
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2020-06-28 16:58:00
 *
 * @package airwptheme
 */

namespace Hybrid\Breadcrumbs\Crumb;

add_filter( 'hybrid/breadcrumbs/crumb/PostType', function( $class, $data ) {
  if ( 'event' === $data['post_type']->name ) {
    return '\Hybrid\Breadcrumbs\Crumb\EmptyLabel';
  }

  return $class;
}, 10, 2 );

/**
 * Crumb sub-class to output empty label = prevent crumb render
 */
class EmptyLabel extends Base {
  public function label() {
    return '';
  }
}
