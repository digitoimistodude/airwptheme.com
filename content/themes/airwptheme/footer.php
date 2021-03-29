<?php
/**
 * Template for displaying the footer
 *
 * Description for template.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:33:49
 * @Last Modified by: Roni Laukkarinen
 * @Last Modified time: 2021-03-29 22:26:28
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package airwptheme
 */

namespace Air_Light;

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer has-dark-bg">
  <p>Air-light WordPress Starter Theme is an open-sourced project by <a href="https://www.dude.fi"><span class="screen-reader-text">DUDE</span><?php include get_theme_file_path( '/svg/logo-dude.svg' ); ?></a></p>

  <p class="back-to-top"><a href="#page" class="js-trigger top no-text-link no-external-link-indicator" data-mt-duration="300"><span class="screen-reader-text"><?php echo esc_html( get_default_localization( 'Back to top' ) ); ?></span><?php include get_theme_file_path( '/svg/chevron-up.svg' ); ?></a></p>

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>
