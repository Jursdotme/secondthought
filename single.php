<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<!-- post details -->
				<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<!-- Byline -->
				<p class="author"><?php the_author_posts_link(); ?></p>
			<!-- END Byline -->

			<?php //the_tags( __( 'Tags: ', 'secondthought' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php // _e( 'Categorised in: ', 'secondthought' ); // the_category(', '); // Separated by commas ?></p>

			<p><?php // _e( 'This post was written by ', 'secondthought' ); // the_author(); ?></p>

			<?php // edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php  comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'secondthought' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->


	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
