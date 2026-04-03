<?php
/**
 * Template Name: Endorsed Candidates 2024
 */
?>
<?php
get_header(); ?>

<div class="nav-header-endorsement-candidates-pages">
  <?php get_template_part( 'template-parts/nav', null, array( 'nav_extra_class' => 'nav-menu-pages', 'logo_extra_class' => 'logo-container-pages' ) ); ?>

  <div class="pages-header">
    <div class="container pages-header-container">
      <h1>Endorsed Candidates</h1>
    </div>
  </div>

  <section class="endorsed-candidates-years">
    <div class="container">
      <div class="endorsed-candidates-elements">
        <div class="endorsed-candidates-grid">
          <div class="endorsed-candidates-grid-item">
            <h3>Years</h3>
            <p><a href="<?php echo esc_url( home_url( '/endorsed-candidates/' ) ); ?>">2026</a></p>
            <p><a href="<?php echo esc_url( home_url( '/2024-endorsed-candidates/' ) ); ?>" class="green">2024</a></p>
            <p><a href="<?php echo esc_url( home_url( '/2023-endorsed-candidates/' ) ); ?>">2023</a></p>
          </div>
          <div class="endorsed-candidates-grid-item">
            <h2>Harvesting Democracy PAC Endorsed Candidates</h2>
            <div class="endorsed-candidate-image-grid">
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/leslie-braddock.png" alt="Leslie Braddock endorsement graphic using her headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/sylvain-bruni.png" alt="Sylvain Bruni endorsement graphic using his headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/lauren-carver.png" alt="Lauren Carver endorsement graphic using her headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/ashley-craven.png" alt="Ashley Craven endorsement graphic using her headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/james-dallas.png" alt="James Dallas endorsement graphic using his headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/sue-dubois.png" alt="Sue DuBois endorsement graphic using her headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/karen-gertz.png" alt="Karen Gertz endorsement graphic using her headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/justin-gross.png" alt="Justin Gross endorsement graphic using his headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/derek-hawn.png" alt="Derek Hawn endorsement graphic using his headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/curtis-kelly.png" alt="Curtis Kelly endorsement graphic using his headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/teri-mai.png" alt="Teri Mai endorsement graphic using her headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/lexi-melton.png" alt="Lexi Melton endorsement graphic using her headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/david-thomforde.png" alt="David Thomforde endorsement graphic using his headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/brittany-warfel.png" alt="Brittany Warfel endorsement graphic using her headshot." />
              </div>
              <div class="endorsed-candidate-image-grid-item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/endorsed-candidates/patti-young.png" alt="Patti Young endorsement graphic using her headshot." />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
