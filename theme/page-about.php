<?php

/**
 * Template Name: About
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
<section class="section section--1">
	<div class="container">
		<strong class="h1 section__title mob"><?php the_title(); ?></strong>
		<div class="section-content">
			<div class="section-content__col">
				<?php
				$thumbnail_medium = get_the_post_thumbnail_url(get_the_ID(), 'medium');
				$thumbnail_large = get_the_post_thumbnail_url(get_the_ID(), 'large');
				$attachment_id = get_post_thumbnail_id(get_the_ID());

				if ($thumbnail_medium) {
					if ($attachment_id) {
						$image_meta = wp_get_attachment_metadata($attachment_id);
						$width = isset($image_meta['sizes']['large']['width']) ? $image_meta['sizes']['large']['width'] : '';
						$height = isset($image_meta['sizes']['large']['height']) ? $image_meta['sizes']['large']['height'] : '';
					}
					?>
					<picture class="section__dr-img">
						<source media="(max-width: 640px)" srcset="<?php echo esc_url($thumbnail_medium); ?>" />
						<source media="(min-width: 641px)" srcset="<?php echo esc_url($thumbnail_large); ?>" />
						<img
							src="<?php echo esc_url($thumbnail_large); ?>"
							alt="Dr. Anna"
							loading="lazy"
							width="<?php echo esc_attr($width); ?>"
							height="<?php echo esc_attr($height); ?>"
							decoding="async"
							class="section__img"
						/>
					</picture>
					<?php
				}
				?>
			</div>
			<div class="section-content__col">
				<h1 class="h1 section__title web"><?php the_title(); ?></h1>
				<?php echo wp_kses_post(get_field('about_text') ?: ''); ?>
			</div>
		</div>
	</div>
</section>
<section class="section section--white">
	<div class="container">
		<div class="section-content">
			<div class="section-content__col">
				<h2 class="h2 section__title"><?php echo get_field('my_approach_title') ?: ''; ?></h2>
				<?php echo wp_kses_post(get_field('my_approach_text') ?: ''); ?>
				<div class="row-more">
					<a class="more__link" title="my services" href="/services-by-dr-anna/">Learn more about my services
						<img class="more__icon" src="<?php echo esc_url(get_template_directory_uri() . '/img/icon/arrow-icon.svg'); ?>" loading="lazy" decoding="async" alt="img" width="34" height="15" />
					</a>
				</div>
			</div>
			<div class="section-content__col">
				<?php
				$imgApproachID = get_field('my_approach_image');

				if ($imgApproachID) {
					$thumbnail_medium = wp_get_attachment_image_src($imgApproachID, 'medium')[0];
					$thumbnail_large = wp_get_attachment_image_src($imgApproachID, 'large')[0];

					$image_data = wp_get_attachment_image_src($imgApproachID, 'large');
					$width = $image_data[1];
					$height = $image_data[2];
				}
				?>
				<picture class="section__dr-img">
					<source media="(max-width: 640px)" srcset="<?php echo esc_url($thumbnail_medium); ?>" />
					<source media="(min-width: 641px)" srcset="<?php echo esc_url($thumbnail_large); ?>" />
					<img
							src="<?php echo esc_url($thumbnail_large); ?>"
							alt="approach"
							loading="lazy"
							width="<?php echo esc_attr($width); ?>"
							height="<?php echo esc_attr($height); ?>"
							decoding="async"
							class="section__img"
					/>
				</picture>
			</div>
		</div>
	</div>
</section>
<?php include(get_template_directory() . '/section.inc.php'); ?>
<?php get_footer(); ?>
