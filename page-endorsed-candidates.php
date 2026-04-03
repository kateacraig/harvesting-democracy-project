<?php
/**
 * Template Name: Endorsed Candidates 2026
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
            <p><a href="<?php echo esc_url( home_url( '/endorsed-candidates/' ) ); ?>" class="green">2026</a></p>
            <p><a href="<?php echo esc_url( home_url( '/2024-endorsed-candidates/' ) ); ?>">2024</a></p>
            <p><a href="<?php echo esc_url( home_url( '/2023-endorsed-candidates/' ) ); ?>">2023</a></p>
          </div>
          <div class="endorsed-candidates-grid-item endorsed-candidates-grid-item-text">
            <h2>Harvesting Democracy PAC Endorsed Candidates</h2>
            <p>We're excited to announce our 2026 endorsed candidates. Check back soon!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
