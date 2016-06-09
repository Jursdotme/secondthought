<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest News', 'secondthought' ); ?></h1>

			<?php get_template_part('partials/loop'); ?>

			<?php secondthought_pagination(); ?>


		</section>
		<!-- /section -->

	</main>
<?php get_footer(); ?>
