<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if (!siteorigin_panels_render( $post_id = $page_data->ID)){ ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php } ?>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->


	</main>

<?php get_footer(); ?>
