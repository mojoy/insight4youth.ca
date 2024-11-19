<?php

/**
 * Template Name: Resources
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
				<picture class="section__dr-img">
					<source media="(max-width: 640px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img10-640.webp" />
					<source media="(min-width: 641px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/img10.webp" />
					<img
						src="<?php echo esc_url(get_template_directory_uri()); ?>/img/img10.webp"
						alt="Resources"
						loading="lazy"
						width="1080"
						height="1040"
						decoding="async"
						class="section__img"
					/>
				</picture>
			</div>
			<div class="section-content__col">
				<h1 class="h1 section__title web"><?php the_title(); ?></h1>
				<?php echo wp_kses_post(get_field('resources_text') ?: ''); ?>
			</div>
		</div>
	</div>
</section>
<section class="section s-services">
	<div class="container">
		<div class="section-head">
			<h2 class="h2"><?php echo esc_html(get_field('common_reasons_title') ?: ''); ?></h2>
			<?php echo wp_kses_post(get_field('common_reasons_subtitle') ?: ''); ?>
		</div>
		<div class="services swiper-services">
			<div class="swiper-wrapper">
				<?php
				// Loop through each service item
				for ($i = 1; $i <= 8; $i++):
					$text = get_field("common_reasons_text_$i");
					if ($text): // Check if the field is set
						?>
						<div class="swiper-slide services__item">
							<img class="services__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon/help-icon-<?php echo $i; ?>.svg" loading="lazy" decoding="async" alt="icon" width="80" height="80" />
							<div class="services__text"><?php echo wp_kses_post($text); ?></div>
						</div>
					<?php
					endif;
				endfor;
				?>
			</div>

			<div class="swiper-services-button swiper-services-button--prev">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="32" viewBox="0 0 18 32" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5163 0.494059C16.8714 -0.164686 15.8257 -0.164686 15.1808 0.494059L0 16L15.1808 31.5059C15.8257 32.1647 16.8714 32.1647 17.5163 31.5059C18.1612 30.8472 18.1612 29.7792 17.5163 29.1204L4.67101 16L17.5163 2.87959C18.1612 2.22084 18.1612 1.15281 17.5163 0.494059Z" fill="#4A5777"/>
				</svg>
			</div>
			<div class="swiper-services-button swiper-services-button--next">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="32" viewBox="0 0 18 32" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0.483699 0.494059C1.12863 -0.164686 2.17427 -0.164686 2.81921 0.494059L18 16L2.81921 31.5059C2.17427 32.1647 1.12863 32.1647 0.483699 31.5059C-0.161234 30.8472 -0.161232 29.7792 0.483699 29.1204L13.329 16L0.483699 2.87959C-0.161233 2.22084 -0.161233 1.15281 0.483699 0.494059Z" fill="#4A5777"/>
				</svg>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</section>
<?php include(get_template_directory() . '/section-2.inc.php'); ?>
<?php get_footer(); ?>