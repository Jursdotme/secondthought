<?php get_header(); ?>

<?php //get_template_part('partials/frontpage_slider') ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->


	</main>

<?php get_footer(); ?>
