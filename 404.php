<?php get_header(); ?>

<div class="nav-header-about-pages">
  <!-- 404 page uses nav-header-about-pages for the header background.
       Change this class to any other nav-header-*-pages class to swap the background. -->
  <?php get_template_part( 'template-parts/nav', null, array( 'nav_extra_class' => 'nav-menu-pages', 'logo_extra_class' => 'logo-container-pages' ) ); ?>

  <div class="pages-header">
    <div class="container pages-header-container">
      <h1>Page Not Found</h1>
    </div>
  </div>
</div>

<section style="padding: 4rem 0;">
  <div class="container">
    <div style="text-align: center; max-width: 600px; margin: 0 auto;">
      <h2>404 &mdash; Oops! This page doesn't exist.</h2>
      <p>The page you're looking for may have been moved or removed.</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn" style="display: inline-block; margin-top: 1.5rem;">Back to Home</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
