<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'secondthought' ); ?></h1>
				<h2>
					<a class="button" href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'secondthought' ); ?></a> or
				</h2>

				<?php get_template_part('searchform') ?>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
