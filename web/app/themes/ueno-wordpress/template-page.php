<?php
// Template Name: No-Hero Page

get_header();
?>

<main>

<?php
if (have_posts()) {
  while (have_posts()) :
    the_post();
?>

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
