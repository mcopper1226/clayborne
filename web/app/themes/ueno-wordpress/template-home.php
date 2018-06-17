<?php
// Template Name: Homepage

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
      <div class="hero-content">
        <h1>Charlottesville Test Prep & Tutoring</h1>
        <h2>Score guarantee verbiage should go right here.</h2>
        <a href="#" class="square-btn-sm">Learn More</a>
      </div>

    </div>
    <img class="aspect" src="http://charlottesvilleabundantlife.org/wp-content/themes/abundantlife/images/aspect-2x1.gif">

  </div>
  <section class="ratings-reel np">
    <div class="outer-container">
      <div class="inner-container">
        <a class="rating" href="#">
          <h4>Yelp</h4>
          <div class="stars"><img src="<?php echo THEME_IMG_PATH . '/stars.svg'?>"></div>
          <p>4.8 of 5 Stars</p>
        </a>
        <div class="rating">
          <h4>Google</h4>
          <div class="stars"><img src="<?php echo THEME_IMG_PATH . '/stars.svg'?>"></div>
          <p>4.8 of 5 Stars</p>
        </div>
        <div class="rating">
          <h4>Facebook</h4>
          <div class="stars"><img src="<?php echo THEME_IMG_PATH . '/stars.svg'?>"></div>
          <p>4.8 of 5 Stars</p>
        </div>
      </div>
    </div>
  </section>
  <section class="intro">
    <div class="outer-container">
      <div class="inner-container">
        <h4>Some sort of eyebrow heading here</h4>
        <h2>For parents, peace of mind. For students, a better future.</h2>
      </div>
      <div class="inner-container three-col">
        <div href="#" class="block">
          <div class="block-inner">
            <div class="block-content">
              <h4>High School Test Prep</h4>
              <div class="test-links">
                <a class="test-link" href="#">ACT</a><span class="circle"></span>
                <a class="test-link" href="#">SAT</a>
              </div>
              <div class="test-links">
                <a class="test-link" href="#">SSAT</a>

              </div>
            </div>
          </div>
            <img class="aspect" src="<?php echo THEME_IMG_PATH . '/aspect-1x1.gif'?>">
        </div>
        <div href="#" class="block">
          <div class="block-inner">
            <div class="block-content">
              <h4>College Test Prep</h4>
              <div class="test-links">
                <a class="test-link" href="#">GRE</a><span class="circle"></span>
                <a class="test-link" href="#">MCAT</a>

              </div>
              <div class="test-links">
                <a class="test-link" href="#">LSAT</a><span class="circle"></span>
                <a class="test-link" href="#">GRE</a>

              </div>
            </div>
          </div>
            <img class="aspect" src="<?php echo THEME_IMG_PATH . '/aspect-1x1.gif'?>">
        </div>
        <div href="#" class="block">
          <div class="block-inner">
            <div class="block-content">
              <h4>Academic Preparation</h4>
              <div class="test-links">
                <a class="test-link" href="#">Subject Tutoring</a>
              </div>
              <div class="test-links">
                <a class="test-link" href="#">Organizational</a>
              </div>
            </div>
          </div>
            <img class="aspect" src="<?php echo THEME_IMG_PATH . '/aspect-1x1.gif'?>">
        </div>
      </div>
      <div class="inner-container">
        <h3 class="cta-text">Your future awaits - <a class="underline-link" href="#">Get Started</a> today!</h3>
      </div>
    </div>
  </section>
  <section class="results">
    <div class="outer-container">
      <div class="inner-container small">
        <h2>Guaranteed Results</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut hendrerit, lacus scelerisque varius molestie, ipsum erat malesuada lectus, sit amet aliquam augue ipsum in, ipsum erat malesuada lectus, velit. Ut hendrerit, lacus scelerisque varius molestie, ipsum erat malesuada lectus, sit amet aliquam augue ipsum in, ipsum erat malesuada lectus, velit.
        </p>
      </div>
      <div class="inner-container three-col">
        <div class="result-value">
          <img src="http://localhost:3000/app/uploads/2018/05/hs-results.svg">
          <h3>Average Score Increase</h3>
        </div>
        <div class="result-value">
          <img src="http://localhost:3000/app/uploads/2018/05/acceptance-01.svg">
          <h3>Average Score Increase</h3>
        </div>
        <div class="result-value">
          <img src="http://localhost:3000/app/uploads/2018/05/college-01.svg">
          <h3>Average Score Increase</h3>
        </div>
      </div>
    </div>
  </section>
  <section class="process np">
    <div class="outer-container-full">
      <div class="inner-container two-col">
        <div class="content">
          <h4 class="lined">How It Works</h4>
          <div class="content-inner">
            <div class="steps">
              <div class="step">

                <h5><span class="step-number">1. </span>Diagnostic</h5>
                <p>Sed in mauris sit amet nisi posuere sagittis. In elementum sagittis mauris.</p>
              </div>
              <div class="step">
                <h5><span class="step-number">2. </span>Diagnostic</h5>
                <p>Sed in mauris sit amet nisi posuere sagittis. In elementum sagittis mauris.</p>
              </div>
              <div class="step">
                <h5><span class="step-number">3. </span>Diagnostic</h5>
                <p>Sed in mauris sit amet nisi posuere sagittis. In elementum sagittis mauris.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="image-wrap" style="background-image: url('http://localhost:3000/app/uploads/2018/05/grid-1.jpg')">
          <img class="aspect" src="<?php echo THEME_IMG_PATH . '/aspect-5x3.gif'?>"
        </div>
      </div>
    </div>
  </section>
  <section class="testimonials np">
    <div class="outer-container-full">
      <div class="inner-container two-col">
        <div class="image-wrap" style="background-image: url('http://localhost:3000/app/uploads/2018/05/test-1.jpg')">
          <img class="aspect" src="<?php echo THEME_IMG_PATH . '/aspect-5x3.gif'?>">
        </div>
        <div class="content">

          <div class="content-inner">
            <p>Etiam ac turpis tristique, pharetra est ut, vulputate nibh. Donec urna nulla, convallis eu ligula in, luctus tincidunt purus. Nullam in mi lorem.</p>
            <p class="attribution">Jack Johnson<span class="context">Student, Charlottesville High School</span></p>
          </div>
        </div>

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
