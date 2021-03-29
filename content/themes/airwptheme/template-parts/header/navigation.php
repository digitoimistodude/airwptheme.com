<?php
/**
 * Navigation layout.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:22:26
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-03-29 23:12:53
 *
 * @package airwptheme
 */

namespace Air_Light;

?>

<div class="main-navigation-wrapper" id="main-navigation-wrapper">

  <!-- NB! Accessibility: Add/remove has-visible-label class for button if you want to enable/disable visible "Show menu/Hide menu" label for seeing users -->
  <button aria-controls="nav" id="nav-toggle" class="nav-toggle hamburger has-visible-label" type="button" aria-label="<?php echo esc_html( get_default_localization( 'Open main menu' ) ); ?>">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
    <span id="nav-toggle-label" class="nav-toggle-label"><?php echo esc_html( get_default_localization( 'Open main menu' ) ); ?></span>
  </button>

  <nav id="nav" class="nav-primary" aria-label="<?php echo esc_html( get_default_localization( 'Main navigation' ) ); ?>">

    <ul class="menu-items">
      <li class="menu-item"><a href="https://airwptheme.com/demo">Demo</a></li>
      <li class="menu-item social separator-left"><a href="https://www.linkedin.com/company/digitoimisto-dude-oy"><?php include get_theme_file_path( '/svg/linkedin.svg' ); ?><span class="screen-reader-text">LinkedIn</span></a></li>
      <li class="menu-item social"><a href="https://profiles.wordpress.org/digitoimistodude/"><?php include get_theme_file_path( '/svg/wordpress.svg' ); ?><span class="screen-reader-text">WordPress</span></a></li>
      <li class="menu-item social"><a href="https://www.facebook.com/digitoimistodude/"><?php include get_theme_file_path( '/svg/facebook.svg' ); ?><span class="screen-reader-text">Facebook</span></a></li>
      <li class="menu-item social"><a href="https://twitter.com/dudetoimisto"><?php include get_theme_file_path( '/svg/twitter.svg' ); ?><span class="screen-reader-text">Twitter</span></a></li>
      <li class="menu-item social"><a href="https://www.instagram.com/digitoimistodude/"><?php include get_theme_file_path( '/svg/instagram.svg' ); ?><span class="screen-reader-text">Instagram</span></a></li>
      <li class="menu-item social"><a href="https://github.com/digitoimistodude"><?php include get_theme_file_path( '/svg/github.svg' ); ?><span class="screen-reader-text">GitHub</span></a></li>
    </ul>

  </nav><!-- #nav -->
</div>
