<?php
/**
 * Site branding & logo
 *
 * @package airwptheme
 */

namespace Air_Light;

$description = get_bloginfo( 'description', 'display' );
?>

<div class="site-branding">

  <p class="site-title">
      <span class="label"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php include get_theme_file_path( '/svg/logo.svg' ); ?> WordPress Starter Theme</label></a> <span class="by">by</span> <a href="https://www.dude.fi"><span class="screen-reader-text">DUDE</span> <?php include get_theme_file_path( '/svg/logo-dude.svg' ); ?></a>
    </a>
  </p>

  <?php if ( $description || is_customize_preview() ) : ?>
    <p class="site-description screen-reader-text">
      <?php echo esc_html( $description ); ?>
    </p>
  <?php endif; ?>

</div>
