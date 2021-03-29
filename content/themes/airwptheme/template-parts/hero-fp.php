<?php
/**
 * @package airwptheme
 */

// Get latest GitHub version
ini_set( 'user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0)' ); // phpcs:ignore
$json = file_get_contents( 'https://api.github.com/repos/digitoimistodude/air-light/releases/latest' ); // phpcs:ignore
$obj = json_decode( $json );
$air_version = $obj->tag_name;
?>
<section class="block block-hero-fp">
  <div class="container">
    <h1>Speed up your WordPress development</h1>
    <p>WordPress Starter Theme that weights under 20 KB.</p>

    <p class="button-wrapper">
      <a href="https://github.com/digitoimistodude/air-light#usage" class="button button-large"><?php include get_theme_file_path( '/svg/github.svg' ); ?> Get Air <?php echo esc_html( $air_version ); ?></a>
    </p>

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
