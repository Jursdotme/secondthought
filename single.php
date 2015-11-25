<?php get_header(); ?>

	<main role="main">
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php endif; ?>

				<h1>
					<?php the_title(); ?>
				</h1>

				<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>

				<?php the_content(); ?>

				<?php // comments_template(); ?>

			</article>

		<?php endwhile; ?>

		<?php endif; ?>

		</section>


	</main>

<?php get_footer(); ?>
