<?php
/**
 * Template Name: Elections
 */
?>
<?php
get_header(); ?>

<div class="nav-header-elections-pages">
  <?php get_template_part( 'template-parts/nav', null, array( 'nav_extra_class' => 'nav-menu-pages', 'logo_extra_class' => 'logo-container-pages' ) ); ?>

  <div class="pages-header">
    <div class="container pages-header-container">
      <h1>Elections</h1>
    </div>
  </div>

  <section class="elections-section">
    <div class="container">
      <div class="elections-content">
        <div class="registered-to-vote">
          <h2>Are You Registered to Vote?</h2>
          <p>Your vote is your voice when it comes to expressing yourself in who you want to lead in your community, in your state, and in federal office.</p>
          <div class="register-to-vote-grid">
            <div class="register-to-vote-grid-item">
              <h3>Check Your Registration</h3>
              <div class="register-to-vote-block-text">
                <p>Ensure your voter registration is active before you try to vote.</p>
              </div>
              <a href="https://tnmap.tn.gov/voterlookup/" target="_blank" class="btn-voter-registration-check">Check Your Registration</a>
            </div>
            <div class="register-to-vote-grid-item">
              <h3>Register to Vote</h3>
              <div class="register-to-vote-block-text">
                <p>Your voice is your vote and you can't have a say if you aren't registered.</p>
              </div>
              <a href="https://ovr.govote.tn.gov/" target="_blank" class="btn-voter-registration">Register to Vote</a>
            </div>
          </div>
        </div>
        <div class="polling-location">
          <h2>Find Your Polling Location</h2>
          <p>Do you know where to vote on Election Day?</p>
          <div class="polling-location-box">
            <h3>Polling Location Look Up</h3>
            <p>Polling locations sometimes change between elections. Be sure to look up your current polling location so you don't try to vote at the wrong location on Election Day.</p>
            <a href="https://tnmap.tn.gov/voterlookup/" target="_blank" class="btn-polling-location-check">Find Your Polling Location</a>
          </div>
        </div>
        <!--
        <div class="sample-ballot">
          <h2>View Your Ballot</h2>
          <p>Do you know what's on your ballot?</p>
          <div class="review-sample-ballot">
            <h3>Look Up Your Sample Ballot</h3>
            <p>View your ballot to research the candidates and issues before you vote.</p>
            <a href="https://tnmap.tn.gov/voterlookup/" target="_blank" class="btn-sample-ballot">View Your Ballot</a>
          </div>
        </div>
        -->
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
