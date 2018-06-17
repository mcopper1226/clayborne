<?php


get_header();
?>

<main>

<?php
if (have_posts()) {
  while (have_posts()) :
    the_post();
?>
  <div class="hero">
    <?php
    if (has_post_thumbnail() ):
      $id = get_post_thumbnail_id();
      $src1 = wp_get_attachment_image_src( $id, 'full' );
      $src = $src1[0];
      $srcset = wp_get_attachment_image_srcset( $id, 'full');
      $thumb = wp_get_attachment_image_src( $id, 'blur-thumb');
      $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
    endif;
    ?>
    <div class="placeholder hero-wrapper" data-large="<?php echo $src; ?>">
      <img src="<?php echo $thumb[0]; ?>" class="img-small">


    </div>
    <img class="aspect" src="http://charlottesvilleabundantlife.org/wp-content/themes/abundantlife/images/aspect-3x1.gif">

  </div>
  <section class="intro">
    <div class="outer-container">
      <div class="inner-container">
      <?php the_content(); ?>
      </div>
    </div>
  </section>
  <section class="bottom-cta np">
    <div class="outer-container">
      <div class="inner-container">
        <h2>Start your college success story</h2>
        <a class="square-btn-sm" href="#">Get Started</a>
      </div>
    </div>
  </section>
<?php
  endwhile;
}
?>
</main>

<?php get_footer();
