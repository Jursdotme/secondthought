<!-- header -->

<?php
$header_logo =
"<div class='logo'>".
  "<a href='" . home_url() ."'>".
    "<img src='" . get_theme_mod('logo_image') . "' alt='Logo' class='logo-img'>".
  "</a>".
"</div>";
?>

    <?php if (get_theme_mod('header_layout') == 'logo_left') { ?>
      <div class="header_wrapper">
        <header class="header clear" role="banner">
          <div class="header-inner nav-right">

            <?php echo $header_logo; ?>

            <?php secondthought_nav(); ?>

          </div>
        </header>
      </div>

    <?php } elseif (get_theme_mod('header_layout') == 'logo_right') { ?>
      <div class="header_wrapper">
        <header class="header clear" role="banner">
          <div class="header-inner nav-left">

            <?php secondthought_nav(); ?>

            <?php echo $header_logo; ?>

          </div>
        </header>
      </div>

    <?php } elseif (get_theme_mod('header_layout') == 'logo_top') { ?>
      <div class="header_wrapper">
        <header class="header clear" role="banner">
          <div class="header-inner logo_top">

            <?php echo $header_logo; ?>

          </div>

        </header>

        <div class="nav_bottom centered">
          <?php secondthought_nav(); ?>
        </div>
      </div>

    <?php } elseif (get_theme_mod('header_layout') == 'logo_seperate') { ?>
      <div class="header_wrapper">
        <header class="header clear" role="banner">
          <div class="header-inner nav-left">

            <?php echo $header_logo; ?>

          </div>
        </header>

        <div class="nav_bottom">
          <?php secondthought_nav(); ?>
        </div>
      </div>

    <?php } ?>

<!-- /header -->

<?php // get_template_part("partials/top_navigation")?>
<?php get_template_part('partials/mobile_navigation'); ?>
