<?php
/**
 * Navigation partial.
 * Called via: get_template_part( 'template-parts/nav', null, $args )
 *
 * Accepted $args keys:
 *   'nav_extra_class'  — appended to .nav-menu       (e.g. 'nav-menu-pages')
 *   'logo_extra_class' — appended to .logo-container  (e.g. 'logo-container-pages')
 *
 * When called without $args (homepage), both extras are empty strings,
 * yielding the original class="nav-menu" and class="logo-container".
 */
$nav_extra  = ( is_array( $args ) && isset( $args['nav_extra_class'] ) )
    ? ' ' . esc_attr( $args['nav_extra_class'] )
    : '';
$logo_extra = ( is_array( $args ) && isset( $args['logo_extra_class'] ) )
    ? ' ' . esc_attr( $args['logo_extra_class'] )
    : '';
?>
<header>
  <div class="header-content">
    <nav>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="nav-menu<?php echo $nav_extra; ?>">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
        <li><a href="<?php echo esc_url( home_url( '/endorsement/' ) ); ?>">Endorsement</a></li>
        <li><a href="<?php echo esc_url( home_url( '/elections/' ) ); ?>">Elections</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
        <li>
          <a href="https://secure.actblue.com/donate/harvestingdemocracyl" class="btn-donate" target="_blank">Donate</a>
        </li>
      </ul>
    </nav>
    <div class="logo-container<?php echo $logo_extra; ?>">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img
          src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hdpac-logo-white-background.jpg"
          alt="Harvesting Democracy PAC Logo"
          class="logo"
        />
      </a>
    </div>
  </div>
</header>
