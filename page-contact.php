<?php
/**
 * Template Name: Contact
 */
?>
<?php
get_header(); ?>

<div class="nav-header-contact-pages">
  <?php get_template_part( 'template-parts/nav', null, array( 'nav_extra_class' => 'nav-menu-pages', 'logo_extra_class' => 'logo-container-pages' ) ); ?>

  <div class="pages-header">
    <div class="container pages-header-container">
      <h1>Contact</h1>
    </div>
  </div>

  <section class="contact-section">
    <div class="container">
      <div class="contact-text-box">
        <h2>We'd love to hear from you!</h2>
        <p>
          Send us an email at<span class="bold-green">
            <a href="mailto:info@harvestingdemocracypac.org">info@harvestingdemocracypac.org</a></span>
          with any questions regarding the endorsement process, endorsement
          status, how to support the PAC or Tennessee Elections.
        </p>
        <div class="contact-text-box-grid">
          <div class="contact-text-box-grid-item">
            <h3>Apply for Endorsement!</h3>
            <p>State and local candidate running in one of Tennessee's rural districts, you should apply for endorsement.</p>
            <a href="<?php echo esc_url( home_url( '/endorsement-application/' ) ); ?>" class="btn-application-contact" target="_blank">Apply for Endorsement</a>
          </div>
          <div class="contact-text-box-grid-item">
            <h3>Donate!</h3>
            <p>Every dollar you donate goes to supporting endorsed state and local rural candidates running in Tennessee.</p>
            <a href="https://secure.actblue.com/donate/harvestingdemocracyl" class="btn-donate-contact" target="_blank">Donate</a>
          </div>
        </div>
        <div class="contact-slogan">
          <p>Let's flip these <span class="bold-red">RED</span> seats <span class="blue-bold">BLUE</span>!</p>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
