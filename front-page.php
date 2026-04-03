<?php get_header(); ?>

<div class="nav-header">
  <video class="bg-video" autoplay loop muted playsinline>
    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/video/small-town.mp4" type="video/mp4" />
  </video>

  <?php get_template_part( 'template-parts/nav' ); ?>

  <section class="hero">
    <div class="container">
      <div class="hero-name">
        <h1>Harvesting Democracy</h1>
        <h2>Flipping <span class="bold-red">RED</span> seats <span class="blue-bold">BLUE</span>.</h2>
      </div>
      <div class="hero-btn-grid">
        <div class="hero-btn-grid-item">
          <a href="https://secure.actblue.com/donate/harvestingdemocracyl" class="btn" target="_blank">Donate</a>
        </div>
        <div class="hero-btn-grid-item">
          <a href="<?php echo esc_url( home_url( '/endorsement-application/' ) ); ?>" class="btn" target="_blank">Apply for Endorsement</a>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="tennessee-background">
  <section class="tennessee">
    <div class="container">
      <div class="tennessee-grid">
        <div class="tennessee-grid-item tennessee-grid-item-left">
          <h2>The only way to win a statewide race or flip Tennessee blue is with a rural strategy.</h2>
        </div>
        <div class="tennessee-grid-item">
          <div class="tennessee-stat-grid">
            <div class="tennessee-stat-grid-item">
              <h3>93%</h3>
              <h2>Tennessee is 93% Rural</h2>
            </div>
            <div class="tennessee-stat-grid-item">
              <h3>41%</h3>
              <h2>41% of Tennesseans don't vote.</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
