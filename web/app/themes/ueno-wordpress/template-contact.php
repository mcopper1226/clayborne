<?php
// Template Name: Contact

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
  <section class="contact-intro np">
    <div class="outer-container">
      <div class="inner-container">
        <h4>You know where you want to go</h4>
        <h2>We Can't Wait To Help You Get there</h2>
        <p>Whether you’ll be testing in two years or two months, our directors are here to help you formulate an ideal preparation plan. Our goal in the initial conversation is not to sell a program, but to help you start addressing the fundamental questions: How important are test scores, really? How much can I improve? How does test preparation fit into my busy schedule? This allows us to make personalized recommendations and you to understand our approach before you sign up for lessons.</p>
        <p>Our director consultations, practice tests, and The Compass Guide to College Admission Testing are <em>always free</em>.</p>
      </div>
    </div>
  </section>
  <section class="contact">
    <div class="outer-container">
        <h2>Your Next Steps</h2>
      <div class="inner-container two-col">

        <div class="content contact-info">

          <p>Call us or fill out the form below to receive an in-depth consultation, schedule a proctored practice test, and obtain a copy of our College Admission Testing Guide — all with no cost or obligation.</p>
          <div class="location-info two-col">
            <div class="location">
              <h4>Locust Avenue Location</h4>
              <a href=#>info@clayborne.com
              <a href=#>9100 Wilshire Blvd, Suite 520E
              </br>Beverly Hills, CA 90212</a>
              <a href="#">(800) 925-1250</a>
            </div>
            <div class="location">
              <h4>Locust Avenue Location</h4>
              <a href=#>info@clayborne.com
              <a href=#>9100 Wilshire Blvd, Suite 520E
              </br>Beverly Hills, CA 90212</a>
              <a href="#">(800) 925-1250</a>
            </div>
          </div>
        </div>
        <div class="content form-module">
          <form>
      <input type="text" placeholder="Username"/>
      <input type="password" placeholder="Password"/>
      <input type="email" placeholder="Email Address"/>
      <input type="tel" placeholder="Phone Number"/>
      <button>Register</button>
    </form>
        </div>
      </div>
    </div>
  </section>

<?php
  endwhile;
}
?>
</main>

<?php get_footer();
