<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php // Google Map

  $location = get_field('google_map');

  if( !empty($location) ):

  ?>
  <div class="acf-map">
    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
  </div>


<?php endif; // END Google Map?>


<main role="main">
  <!-- section -->
  <section>

    <?php the_field('kontakt_formular'); // The contact form ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1><?php the_title(); ?></h1>

      <h4><?php the_field('firmanavn', 'option') ?></h4>
      <p>
        <?php the_field('adresse', 'option') ?></br>
        <?php the_field('postnummer', 'option') ?>
        <?php the_field('by', 'option') ?>
      </p>

      <p>
        <i class="fa fa-envelope fa-fw"></i> <?php the_field('telefon', 'option') ?></br>
        <i class="fa fa-phone fa-fw"></i><a href="mailto:<?php the_field('email', 'option') ?>"> <?php the_field('email', 'option') ?></a>
      </p>

      <hr>
        <p><i class="fa fa-facebook fa-fw"></i> <?php the_field('facebook', 'option') ?></p>
        <p><i class="fa fa-twitter fa-fw"></i> <?php the_field('twitter', 'option') ?></p>
        <p><i class="fa fa-google-plus fa-fw"></i> <?php the_field('googleplus', 'option') ?></p>
        <p><i class="fa fa-linkedin fa-fw"></i> <?php the_field('linkedin', 'option') ?></p>
        <p><i class="fa fa-instagram fa-fw"></i> <?php the_field('instagram', 'option') ?></p>
        <p><i class="fa fa-pinterest fa-fw"></i> <?php the_field('pinterest', 'option') ?></p>
      <hr>

      <?php the_content(); ?>

    </article>
    <!-- /article -->

  <?php
    endwhile;
    endif;
  ?>

  </section>
  <!-- /section -->


</main>

<?php get_footer(); ?>
