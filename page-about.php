<?php
/**
 * Template Name: About
 */
?>
<?php
get_header(); ?>

<div class="nav-header-about-pages">
  <?php get_template_part( 'template-parts/nav', null, array( 'nav_extra_class' => 'nav-menu-pages', 'logo_extra_class' => 'logo-container-pages' ) ); ?>

  <div class="pages-header">
    <div class="container pages-header-container">
      <h1>About</h1>
    </div>
  </div>

  <section class="about-section">
    <div class="container about-section-content">
      <div class="about-section-text-box">
        <h2 class="text-center">About Harvesting Democracy PAC</h2>
        <div class="about-us-video">
          <iframe
            src="https://www.youtube.com/embed/i3NkgabDnXM?si=2j6PP5GQJWyh9j-H"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>
        <p>"We can't win a statewide race if we don't have a rural strategy." -Kate Craig</p>
        <p>Harvesting Democracy grew out of Kate's 2021 TNDP Chair's race, and a recognized need for a rural strategy in Tennessee. Urban and suburban strongholds get the most attention and support while rural counties, rural districts, and rural candidates are left with little to no support.</p>
        <p>After Kate ran for TN Senate in 2022, this gap became even more apparent as most national organizations refused to support her campaign in favor of already blue strongholds (with some exception). The focus was mainly on Tennessee's urban districts with rural candidates left to fend for themselves with little support. Harvesting Democracy will close this much needed gap by supporting Tennessee's state and local candidates running in majority rural districts.</p>
        <p>We have to redefine what it means to win in rural areas. It isn't always going to be a flipped seat and sometimes it takes several needle moves before the seat will flip. But those seats will never flip unless we start investing in those districts. And the majority of the seats in the Tennessee Legislature include majority rural districts, which means without a rural strategy Democrats won't be successful on election day or passing legislation.</p>
        <p>And if we want more Democratic candidates running at the state level, then we have to invest in progressive candidates running at the local level. We have to recruit and support candidates running for school boards, city commissions, county commissions, etc. And progressive candidates elected at the local level can stop the book bans and as well as the dismissal of teachers for introducing Black voices into classrooms that are currently supported by Republican extremists serving on school boards.</p>
        <p>To date, Harvesting Democracy PAC has endorsed 16 candidates who ran in one of Tennessee's rural districts for state or local office. Check out our <span class="link"><a href="<?php echo esc_url( home_url( '/endorsed-candidates/' ) ); ?>">past endorsed candidates</a></span>.</p>
        <p>Harvesting Democracy PAC is a 100% volunteer-run organization.</p>
      </div>
    </div>
  </section>
</div>

<section class="about-kate">
  <div class="container">
    <div class="about-kate-grid">
      <div class="kate-grid-item kate-grid-item-image">
        <img
          src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/kate-craig-headshot.jpg"
          alt="Kate Craig Headshot"
        />
      </div>
      <div class="kate-grid-item kate-grid-item-text">
        <h2>About Our Founder</h2>
        <p>Kate Craig founded Harvesting Democracy PAC in 2023, after moving the needle 7 points in her 2022 state senate campaign. She served two terms as both the Chair of the Washington County Democratic Party and Chair of the First Congressional District for the Tennessee Democratic County Chairs Association.</p>
        <p>She's launched 3 businesses: Kate Craig Photography, Harvesting Democracy LLC, and Kate Craig Consulting. She's written eight books and has completed the NaNoWriMo challenge 4 times. Currently, she works as a front end developer, a digital marketing consultant, and a political consultant for Tennessee's state and local rural candidates. This year, she was chosen to be a TEDx Johnson City speaker.</p>
        <p>Currently, she serves on the board for Planned Parenthood of Tennessee & Northern Mississippi, Tennessee Advocates for Planned Parenthood, and the Tennessee Equality Project.</p>
        <p>Kate is passionate about her community, organizing in rural communities, and inspiring positive, lasting change.</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
