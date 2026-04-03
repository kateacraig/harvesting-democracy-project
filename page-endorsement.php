<?php
/**
 * Template Name: Endorsement
 */
get_header(); ?>

<div class="nav-header-endorsement-pages">
  <?php get_template_part( 'template-parts/nav', null, array( 'nav_extra_class' => 'nav-menu-pages', 'logo_extra_class' => 'logo-container-pages' ) ); ?>

  <div class="pages-header">
    <div class="container pages-header-container">
      <h1>Endorsement</h1>
    </div>
  </div>

  <section class="apply-for-endorsements-section">
    <div class="container">
      <div class="apply-for-endorsement-text">
        <h2>Harvesting Democracy PAC's Endorsement Process</h2>
        <p>
          Harvesting Democracy PAC stands in the gap to support and uplift
          Tennessee's state and local candidates running in rural districts.
          We know that sometimes these candidates don't get the support they
          deserve.
        </p>
        <p>
          It is important to protect seats in blue districts. It's also
          important to invest in flipping seats in purple districts. At
          Harvesting Democracy PAC, we believe it's equally important to
          invest in flipping seats, closing the gap, growing candidates,
          growing campaign staff, growing volunteer bases, growing
          organizing efforts, and increasing progressive bases in rural
          areas.
        </p>
        <p>
          Endorsements are decided by an endorsement committee with
          representatives from across Tennessee. The founder facilitates the
          meetings, but does not have a vote in the endorsement process. The
          endorsement committee decides the level of support given to
          candidates based on the candidate's application.
        </p>
        <p>
          Harvesting Democracy PAC
          <span class="bold-red">does not</span> endorse candidates in a
          competitive primary. The PAC
          <span class="bold-red">does not</span> endorse candidates for any
          political party positions, on the ballot or at re-organizations.
          The PAC <span class="bold-red">does not</span> endorse candidates
          running for federal office.
        </p>
        <p>
          Endorsements happen on a rolling basis. If you are a progressive
          candidate running for state and local office in Tennessee's rural
          districts, you are encouraged to apply.
        </p>
        <div class="about-endorsement-grid">
          <div class="about-endorsement-grid-item">
            <h3>2026 Applications</h3>
            <p>
              Applications are open for state and local candidates running
              in one of Tennessee's rural districts.
            </p>
            <a href="<?php echo esc_url( home_url( '/endorsement-application/' ) ); ?>" class="btn-endorsement">Apply for Endorsement</a>
          </div>
          <div class="about-endorsement-grid-item">
            <h3>Endorsed Candidates</h3>
            <p>
              Harvesting Democracy PAC endorsed our first candidate in 2023.
              See who all we've endorsed!
            </p>
            <a href="<?php echo esc_url( home_url( '/endorsed-candidates/' ) ); ?>" class="btn-past-candidates">Endorsed Candidates</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
