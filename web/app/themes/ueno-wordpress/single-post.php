<?php get_header(); ?>

<?php
while (have_posts()):
  the_post();
  $category = get_the_category();
  $date = get_the_date();
  $headline = get_the_title();
  $content = apply_filters('the_content', get_the_content());
  $tags = get_the_tags();
?>

<div class="blog">
  <?php echo '<a class="blog__category" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>'; ?>
  <span class="blog__date"><?php echo $date; ?></span>
  <h1 class="blog__headline"><?php echo $headline; ?></h1>
  <div class="blog__content"><?php echo $content; ?></div>
  <ul class="blog__tags">
    <?php
    if ($tags):
      foreach ($tags as $tag):
        $tag_text = $tag->name;
        $tag_link = '/tag/'.$tag->slug;
    ?>
        <li class="blog__tag">
          <a href="<?php echo $tag_link; ?>">
            <?php echo $tag_text; ?>
          </a>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>
  </div>
</div>

<?php
endwhile;
get_footer();
