<?php

/**
 * Template Name: Services
 * @subpackage insight4youth
 */
$allowed_tags = array(
	'strong' => array(),
	'em'     => array(),
	'a'      => array(
		'href'  => array(),
		'title' => array(),
	),
	'br'     => array(),
);
get_header(); ?>
<section class="section section--1 section--bottom-null">
	<div class="container">
		<strong class="h1 section__title mob"><?php the_title(); ?></strong>
		<div class="section-content">
			<div class="section-content__col">
				<picture class="section__dr-img">
					<source media="(max-width: 640px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img8-640.webp" />
					<source media="(min-width: 641px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img8.webp" />
					<img
						src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img8.webp"
						alt="Resources"
						loading="lazy"
						width="1080"
						height="1040"
						decoding="async"
						class="section__img"
					/>
				</picture>
				<div class="help-block">
					<?php echo wp_kses_post(get_field('help_block_text', 74) ?: ''); ?>
				</div>
			</div>
			<div class="section-content__col">
				<h1 class="h1 section__title web"><?php the_title(); ?></h1>
				<div class="box-mark">
					<?php echo wp_kses_post(get_field('services_text') ?: ''); ?>
				</div>
				<?php echo wp_kses_post(get_field('what_to_expect') ?: ''); ?>
			</div>
		</div>
	</div>
</section>
<?php include(get_template_directory() . '/section.inc.php'); ?>
<section class="section section--white">
	<div class="container">
		<div class="section-content">
			<div class="section-content__col">
				<h2 class="h2 section__title"><?php echo esc_html(get_field('acknowledgement_title') ?: ''); ?></h2>
				<?php echo wp_kses_post(get_field('acknowledgement_text') ?: ''); ?>
			</div>
			<div class="section-content__col">
				<picture class="image-small">
					<source media="(max-width: 640px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/image-small-640.webp'); ?>" />
					<source media="(min-width: 641px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/image-small.webp'); ?>" />
					<img
						src="<?php echo esc_url(get_template_directory_uri() . '/img/image-small.webp'); ?>"
						alt="image"
						loading="lazy"
						width="880"
						height="960"
						decoding="async"
						class="map-wrapper__img"
					/>
				</picture>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>