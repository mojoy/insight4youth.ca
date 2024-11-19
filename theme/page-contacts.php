<?php

/**
 * Template Name: Contacts
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
		<strong class="h1 section__title mob"><?php the_title(); ?>
			<span class="section__title-sub"><?php echo esc_html(get_field('contacts_subtitle') ?: ''); ?></span>
		</strong>

		<div class="section-content">
			<div class="section-content__col">
				<a title="Google Maps" href="https://www.google.com.ua/maps/place/25+Dupont+St+E+Unit+1,+Waterloo,+ON+N2J+2G8,+Canada/@43.4661146,-80.5208811,17z/data=!3m1!4b1!4m6!3m5!1s0x882bf472c556aaab:0x7964e20542ba095a!8m2!3d43.4661146!4d-80.5208811!16s%2Fg%2F11n12s4my4?entry=ttu" target="_blank" rel="noopener">
					<picture class="map-wrapper">
						<source media="(max-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/img-map-mob.webp'); ?>" />
						<source media="(min-width: 769px)" srcset="<?php echo esc_url(get_template_directory_uri() . '/img/img-map.webp'); ?>" />
						<img
							src="<?php echo esc_url(get_template_directory_uri() . '/img/img-map.webp'); ?>"
							alt="map"
							loading="lazy"
							width="810"
							height="1335"
							decoding="async"
							class="map-wrapper__img"
						/>
					</picture>
				</a>
			</div>
			<div class="section-content__col">
				<h1 class="h1 section__title web"><?php the_title(); ?>
					<span class="section__title-sub"><?php echo esc_html(get_field('contacts_subtitle') ?: ''); ?></span>
				</h1>

				<div class="box-mark">
					<?php echo wp_kses_post(get_field('text_block_-_1') ?: ''); ?>
				</div>
				<div class="box-mark">
					<?php echo wp_kses_post(get_field('text_block_-_2') ?: ''); ?>
				</div>

				<?php echo wp_kses_post(get_field('text_block_-_3') ?: ''); ?>
			</div>
		</div>
	</div>
</section>

<section class="section s-form-message" role="region" aria-labelledby="formSectionTitle">
	<div class="container">
		<div class="form-message">
			<h2 id="formSectionTitle" class="h2 section__title form-message__title"><?php echo esc_html(get_field('contact_form_title') ?: ''); ?></h2>
			<?php echo get_field('contact_form_code'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
