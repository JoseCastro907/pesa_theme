<!doctype html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=4, user-scalable=yes">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>

 <!--header NAV menu -->
 <header>
    <nav class="navbar row fixed-top">
      <div class="container-fluid col-md-10">
          <div class="brand">
          <a href="<?php echo home_url(); ?>">
          <img class="pesa_logo"
            src="<?php echo get_template_directory_uri() . "/imgs/pesax40.png"; ?>"
            alt="PESA LOGO">
            </a>
          </div>
          <div class="container-button">
            <button class="btn hamburguer" type="button"  aria-label="true" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#17242A" class="bi bi-list" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" /></svg>
            </button>
          </div>

          <!-- Menu hamburguesa -->

          <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'primary',
                                    'depth'             => 1,
                                    'container'         => 'div',
                                    'container_class'   => 'navbar-collapse collapse collapsed',
                                    'container_id'      => 'bdNavbar',
                                    'menu_class'        => 'navbar-nav mr-auto',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker()
                                ) );
                            ?>



          <!-- Menu principal -->
          <?php
                            wp_nav_menu( array(
                              'theme_location'    => 'primary',
                              'depth'             => 1,
                              'container'         => 'div',
                              'container_class'   => 'navbar-top-style-list',
                              'container_id'      => 'navtop"',
                              'menu_class'        => 'navbar-style-list',
                              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'            => new WP_Bootstrap_Navwalker()
                          ) );
                      ?>




      </div>
    </nav>
  </header>

  <div class="pb-5">
    <span></span>
  </div>

