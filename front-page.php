<?php get_header(); ?>

<?php get_template_part('partials/frontpage_slider') ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="hover-tile-outer">
				  <div class="hover-tile-container">
				    <div class="hover-tile hover-tile-visible">
				      Hover
				    </div>
				    <div class="hover-tile hover-tile-hidden">
				      <h4>Hidden Copy</h4>
				      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, hic, dolore, labore,provident eligendi fugiat ad exercitationem.</p>
				    </div>
				  </div>
				</div>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->


	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
