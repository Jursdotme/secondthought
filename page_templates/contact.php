<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<main role="main">
  <!-- section -->
  <section>

    <h1><?php the_title(); ?></h1>


    <?php the_field('kontakt_formular'); // The contact form ?>


    <?php // Google Map

      $location = get_field('google_map');

      if( !empty($location) ):

      ?>
      <div class="acf-map">
      	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
      </div>


    <?php endif; // END Google Map?>


  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
