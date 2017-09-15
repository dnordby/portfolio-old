<header class="container-fluid">
  <div class="row full-bleed">
    <div class="col-xs-12 header">
      <div class="scrolled-logo-wrapper">
        <a href="<?= esc_url(home_url('/')); ?>">
          <h1 class="hidden-sm hidden-md hidden-lg">Dn</h1>
          <h1 class="hidden-xs">Daniel Nordby</h1>
        </a>
        <nav class="scrolled-nav">
          <?php wp_nav_menu( array('menu' => 'Scrolled Primary Navigation', 'container_class' => 'scrolled-primary-navigation') ); ?>
        </nav>
      </div>

      <div class="scrolltop-wrapper">
        <div class="logo-wrapper">
          <a href="<?= esc_url(home_url('/')); ?>">
            <h1>Daniel Nordby</h1>
            <p>Web Developer</p>
          </a>
        </div>
        <hr>
        <nav class="nav-primary">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            endif;
          ?>
        </nav>
      </div>
    </div>
  </div>
</header>
