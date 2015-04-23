<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<?php if (get_field('aktiver_cookie_advarsel', 'option')): ?>

			<?php if (get_field('placering', 'option') == 'top') {
				$placering = 'false';
			} else {
				$placering = 'true';
			}?>

			<script type="text/javascript">
			$(document).ready(function(){
				$.cookieBar({
					message: '<?php the_field('besked', 'option'); ?>',
					acceptButton: <?php the_field('accepter_knap', 'option'); ?>,
					acceptText: 'I Understand',
					declineButton: false,
					declineText: 'Disable Cookies',
					policyButton: false,
					policyText: 'Privacy Policy',
					policyURL: '/privacy-policy/',
					autoEnable: true,
					acceptOnContinue: false,
					expireDays: 30,
					forceShow: false,
					effect: 'slide',
					element: 'body',
					append: false,
					fixed: <?php echo $placering; ?>,
					bottom: <?php echo $placering; ?>,
					zindex: '',
					redirect: '/',
					domain: 'www.example.com',
					referrer: 'www.inzite.com'
				});
			});
			</script>
		<?php endif; ?>

	</head>

	<body <?php body_class( ! is_front_page() ? "not-home" : "" ); ?>>
		<div class="wrapper">
			<?php get_template_part('partials/page_header'); ?>
