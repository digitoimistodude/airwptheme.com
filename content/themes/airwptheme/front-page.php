<?php
/**
 * The template for displaying front page
 *
 * Contains the closing of the #content div and all content after.
 * Initial styles for front page template.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2020-03-03 14:38:06
 * @package airwptheme
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Air_Light;

get_header(); ?>

<main class="site-main">

  <section class="block block-hero-fp">
    <div class="container">
      <h1>Speed up your WordPress development</h1>
      <p>Air-light WordPress Starter  Theme</p>

      <div class="featured">
        <p><span>As featured in</span></p>
        <ul>
          <li><a class="hongkiat" aria-label="Hongkiat: Fresh Resources for Web Designers and Developers (December 2017)" href="https://www.hongkiat.com/blog/designers-developers-monthly-12-2017/"><?php include get_theme_file_path( '/svg/logo-hongkiat.svg' ); ?></a></li>
          <li><a class="speckyboy" aria-label="Speckyboy Design Magazine: The Top Starter & Barebone Themes for WordPress Development" href="https://speckyboy.com/wordpress-starter-themes/"><?php include get_theme_file_path( '/svg/logo-speckyboy.svg' ); ?></a></li>
          <li><a class="wplift" aria-label="WPLift: 40+ Blank WordPress Starter Themes & Frameworks to Help You Kick-start Your Entrepreneurial Journey" href="https://wplift.com/wordpress-starter-themes"><?php include get_theme_file_path( '/svg/logo-wplift.svg' ); ?></a></li>
          <li><a class="wpbeginner" aria-label="WPBeginner:
19 Best WordPress Starter Themes for Developers in 2021" href="https://www.wpbeginner.com/wp-themes/21-best-wordpress-starter-themes-for-developers/"><?php include get_theme_file_path( '/svg/logo-wpbeginner.svg' ); ?></a></li>
          <li><a class="themessearch" aria-label="themessearch: Top 10+ Best Free Starter Themes for WordPress Theme Development" href="https://www.wpbeginner.com/wp-themes/21-best-wordpress-starter-themes-for-developers/"><?php include get_theme_file_path( '/svg/logo-themessearch.svg' ); ?></a></li>
        </ul>
      </div>
    </div>
  </section>

</main>

<?php get_footer();
