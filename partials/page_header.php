<!-- header -->
<header class="header clear" role="banner">

    <div class="header-inner">
      <!-- logo -->
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
          <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
        </a>
      </div>
      <!-- /logo -->

      <?php secondthought_nav(); ?>
    </div>


</header>
<!-- /header -->

<?php // get_template_part("partials/top_navigation")?>
<?php get_template_part('partials/mobile_navigation'); ?>
