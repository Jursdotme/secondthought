<!-- header -->


    <?php if (get_theme_mod('layout_selector') == 'nav_right') { ?>
      <header class="header clear" role="banner">
        <div class="header-inner nav-right">
          <!-- logo -->
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->

              <img src="<?php echo get_theme_mod('logo_file'); ?>" alt="Logo" class="logo-img">
            </a>
          </div>
          <!-- /logo -->

          <?php secondthought_nav(); ?>
        </div>
      </header>

    <?php } elseif (get_theme_mod('layout_selector') == 'nav_left') { ?>
      <header class="header clear" role="banner">
        <div class="header-inner nav-left">

          <?php secondthought_nav(); ?>

          <!-- logo -->
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->

              <img src="<?php echo get_theme_mod('logo_file'); ?>" alt="Logo" class="logo-img">
            </a>
          </div>
          <!-- /logo -->
        </div>
      </header>

    <?php } elseif (get_theme_mod('layout_selector') == 'nav_bottom') { ?>
      <header class="header clear" role="banner">
        <div class="header-inner nav-left">

          <!-- logo -->
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->

              <img src="<?php echo get_theme_mod('logo_file'); ?>" alt="Logo" class="logo-img">
            </a>
          </div>
          <!-- /logo -->

        </div>
      </header>

      <div class="nav_bottom">
        <?php secondthought_nav(); ?>
      </div>

    <?php } ?>

<!-- /header -->

<?php // get_template_part("partials/top_navigation")?>
<?php get_template_part('partials/mobile_navigation'); ?>
