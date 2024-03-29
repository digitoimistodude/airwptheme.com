<?php
/**
 * Hero-fp.
 *
 * A file for front page hero.
 *
 * @Author:		Roni Laukkarinen
 * @Date:   		2021-03-29 18:40:50
 * @Last Modified by:   Roni Laukkarinen
 * @Last Modified time: 2022-09-28 14:43:04
 *
 * @package airwptheme
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

// Get latest GitHub version
ini_set( 'user_agent', 'Mozilla/4.0 (compatible; MSIE 6.0)' ); // phpcs:ignore

// Fetch data and set up simple cache
$version_url = 'https://api.github.com/repos/digitoimistodude/air-light/releases/latest';
$version_cachefile = get_theme_file_path( 'inc/cache/version.json' );
$version_cachetime = 7200; // 2 hours

// If cache file does not exist, let's create it
if ( ! file_exists( $version_cachefile ) ) {
  touch( $version_cachefile );
  copy( $version_url, $version_cachefile );
}

// Fetch version
$json = file_get_contents( $version_cachefile ); // phpcs:ignore
$obj = json_decode( $json );
$air_version = $obj->tag_name;
?>
<section class="block block-hero-fp has-dark-bg">
  <div class="container">
    <h1 id="content">Speed up your WordPress development</h1>
    <p class="description">WordPress Starter Theme that weights under 20 KB. <span class="mobile">Try out the <a href="https://airwptheme.com/demo">demo</a> or go to <a href="https://docs.airwptheme.com">docs</a>.</span></p>

    <p class="button-wrapper">
      <a href="https://github.com/digitoimistodude/air-light" class="button button-large"><?php include get_theme_file_path( '/svg/github.svg' ); ?> Get Air <?php echo esc_html( $air_version ); ?></a>
    </p>

    <div class="featured">
      <p><span>As featured in</span></p>
      <ul>
        <li><a class="hongkiat" aria-label="Hongkiat: Fresh Resources for Web Designers and Developers (December 2017)" href="https://www.hongkiat.com/blog/designers-developers-monthly-12-2017/"><?php include get_theme_file_path( '/svg/logo-hongkiat.svg' ); ?></a></li>
        <li><a class="speckyboy" aria-label="Speckyboy Design Magazine: The Top Starter & Barebone Themes for WordPress Development" href="https://speckyboy.com/wordpress-starter-themes/"><?php include get_theme_file_path( '/svg/logo-speckyboy.svg' ); ?></a></li>
        <li><a class="tophermcculloch" aria-label="Topher McCulloch: Best WordPress Starter Themes for Developers with Gutenberg Support in 2022" href="https://tophermcculloch.com/2022/09/best-wordpress-starter-themes-for-developers-with-gutenberg-support-in-2022/"><?php include get_theme_file_path( '/svg/logo-tophermcculloch.svg' ); ?></a></li>
        <li><a class="wpbeginner" aria-label="WPBeginner:
19 Best WordPress Starter Themes for Developers in 2021" href="https://www.wpbeginner.com/wp-themes/21-best-wordpress-starter-themes-for-developers/"><?php include get_theme_file_path( '/svg/logo-wpbeginner.svg' ); ?></a></li>
        <li><a class="themessearch" aria-label="themessearch: Top 10+ Best Free Starter Themes for WordPress Theme Development" href="https://www.themessearch.com/best-wordpress-themes/starter-themes/"><?php include get_theme_file_path( '/svg/logo-themessearch.svg' ); ?></a></li>
      </ul>
    </div>
  </div>
</section>
