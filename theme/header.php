<?php
/**
 * Header Template
 * @subpackage insight4youth
 */
?>
<!doctype html>
<html id="page-html" class="no-js" <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicons -->
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon.ico">
	<!-- favicons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&family=Marcellus&family=Quicksand&family=Roboto+Slab:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/main.min.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<header class="header" role="banner">
		<div class="container">
			<a href="/" title="<?php bloginfo('name'); ?>" class="header__logo-link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="header__logo" width="183" height="56" loading="auto" alt="<?php bloginfo('name'); ?>">
			</a>
			<nav class="main-nav-wrapper">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'main-nav',
					'menu_class'     => 'main-nav__list',
					'container'      => false,
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'          => 0,
					'wrapper'        => '<nav id="%1$s" class="%2$s main-nav-wrapper">%3$s</nav>',
				));
				?>
			</nav>
			<a href="https://aws-portal.owlpractice.ca/insight4youth/booking" target="_blank" class="button button--big button--contact" title="Book a Visit" aria-label="Book a Visit">
				<img class="button__icon" src="<?php echo get_template_directory_uri(); ?>/img/icon/calendar-icon.svg" alt="img" width="24" height="24" />
				<img class="button__icon button__icon--active" src="<?php echo get_template_directory_uri(); ?>/img/icon/calendar-icon-ac.svg" alt="img" width="24" height="24" />
				Book a Visit
			</a>
			<span class="btn-nav" role="button" aria-label="Open Navigation Menu"><figure></figure></span>
		</div>
	</header>
	<div class="mob-panel">
		<div class="mob-panel__content">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'main-nav',
				'menu_class'     => 'main-nav__list',
				'container'      => false,
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'          => 0,
				'wrapper'        => '<nav id="%1$s" class="%2$s main-nav-wrapper">%3$s</nav>',
			));
			?>
			<a href="https://aws-portal.owlpractice.ca/insight4youth/booking" target="_blank" class="button button--big button--contact" title="Book a Visit" aria-label="Book a Visit">
				<img class="button__icon" src="<?php echo get_template_directory_uri(); ?>/img/icon/calendar-icon.svg" alt="img" width="24" height="24" />
				<img class="button__icon button__icon--active" src="<?php echo get_template_directory_uri(); ?>/img/icon/calendar-icon-ac.svg" alt="img" width="24" height="24" />
				Book a Visit
			</a>
		</div>
	</div>
	<main class="main">