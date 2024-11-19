<?php

/**
 * Template Name: Home
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
<section class="section promo section--1">
	<div class="container">
		<div class="section-content">
			<div class="section-content__col">
				<div class="section__img-box">
					<img class="section__img mob" src="<?php bloginfo('template_url'); ?>/img/img11.webp" loading="lazy" decoding="async" alt="img" width="600" height="427" />
				</div>
			</div>
			<div class="section-content__col">
				<div class="section__content">
					<h1 class="h1 section__title">
						<span itemprop="name"><?php echo wp_kses(get_field('home_title') ?: '', $allowed_tags); ?></span>
						<span class="section__title-sub" itemprop="jobTitle"><?php echo esc_html(get_field('home_subtitle') ?: ''); ?></span>
					</h1>
					<?php echo wp_kses_post(get_field('home_text') ?: ''); ?>
					<div class="row-more">
						<a class="more__link" title="my services" href="/services-by-dr-anna/">
							Learn more about me
							<img class="more__icon" src="<?php bloginfo('template_url'); ?>/img/icon/arrow-icon.svg" loading="lazy" decoding="async" alt="img" width="32" height="20" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section section--white">
	<div class="container">
		<div class="section-content">
			<div class="section-content__col">
				<h2 class="h2 section__title"><?php echo esc_html(get_field('home_2nd_block_title') ?: ''); ?></h2>
				<?php echo wp_kses_post(get_field('home_2nd_block_text') ?: ''); ?>
			</div>
			<!--
			<div class="section-content__col">
				<img class="section__img" src="<?php bloginfo('template_url'); ?>/img/img2.webp" loading="lazy" decoding="async" width="540" height="520" alt="img">
			</div>
			-->
		</div>
	</div>
</section>
<section class="section s-posts">
	<div class="container">
		<h2 class="h2 section__title posts__title"><?php echo wp_kses(get_field('private_and_secure_title') ?: '', $allowed_tags); ?></h2>
		<div class="posts">
			<?php for ($i = 1; $i <= 3; $i++): ?>
				<div class="posts__item">
					<picture class="posts-img-wrapper">
						<source media="(max-width: 640px)" srcset="<?php bloginfo('template_url'); ?>/img/img-individual-<?php echo $i; ?>-640.webp" />
						<source media="(min-width: 641px)" srcset="<?php bloginfo('template_url'); ?>/img/img-individual-<?php echo $i; ?>.webp" />
						<img
							src="<?php bloginfo('template_url'); ?>/img/img-individual-<?php echo $i; ?>.webp"
							alt="Resources"
							loading="lazy"
							width="840"
							height="564"
							decoding="async"
							class="posts-img-wrapper__img"
						/>
					</picture>
					<div class="posts__text"><?php echo wp_kses_post(get_field("private_and_secure_text-$i") ?: ''); ?></div>
				</div>
			<?php endfor; ?>
		</div>
		<div class="row-btn row-btn--lines row--center">
			<a class="button button--big" href="https://aws-portal.owlpractice.ca/insight4youth/booking" target="_blank" rel="noopener">
				<img class="button__icon" src="<?php bloginfo('template_url'); ?>/img/icon/calendar-icon.svg" loading="lazy" decoding="async" alt="img" width="24" height="24" />
				<img class="button__icon button__icon--active" src="<?php bloginfo('template_url'); ?>/img/icon/calendar-icon-ac.svg" loading="lazy" decoding="async" alt="img" width="24" height="24" />
				Schedule a Visit
			</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>