<!doctype html>
<html <?php language_attributes(); ?> class="no-js" data-logo-width="<?php echo get_theme_mod('logo_width'); ?>";>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<?php wp_head(); ?>

	</head>

	<body <?php body_class( ! is_front_page() ? "not-home" : "" ); ?>>
		<div class="wrapper">
			<?php // get_template_part('partials/page_header'); ?>
			<?php get_template_part('partials/customizer_page_header'); ?>
