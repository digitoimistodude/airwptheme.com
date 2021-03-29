<?php
/**
 * @package airwptheme
 */

if ( have_rows( 'gallery' ) ) : ?>
<section class="block block-built-with-air">
  <div class="container">
    <h2>Built with Air</h2>
    <p class="description">There are already hundreds of websites out there built on Air-light WordPress Theme. Below you can browse some of them. Want your website here? Send <a href="https://github.com/digitoimistodude/airwptheme.com/issues">an issue</a>.</p>
  </div>
</section>

<div class="site-gallery">
  <?php while ( have_rows( 'gallery' ) ) : the_row();
    // Fields
    $image = get_sub_field( 'image' );
    $url = get_sub_field( 'url' );
  ?>

    <?php if ( ! empty( $image ) ) : ?>
      <?php if ( ! empty( $url ) ) : ?>
        <div>
          <a href="<?php echo esc_url( $url ); ?>">
            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="" />
          </a>
        </div>
      <?php endif; ?>
    <?php endif; ?>

  <?php endwhile; ?>
</div>
<?php endif; ?>
