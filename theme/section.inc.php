<?php
/*
Template Name: Section: Keep in Mind
Template Post Type: section
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
?>
<section class="section s-keep">
	<div class="container">
		<div class="keep">
			<div class="keep-inner">
				<img class="keep__icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/icon1.webp" alt="Icon" width="640" height="284" />
				<h2 class="h2 keep__title">
					<?php
					$keep_title = get_field('keep_in_mind_title', 61);
					if ($keep_title) {
						echo esc_html($keep_title);
					}
					?>
				</h2>
				<?php
				$keep_text = get_field('keep_in_mind_text', 61);
				if ($keep_text) {
					echo wp_kses_post($keep_text);
				}
				?>
				<div class="row-btn row--center">
					<a class="button button--big button--outline" title="Contact Me" role="button" href="/contact-dr-anna/">
						<img class="button__icon" src="<?php bloginfo('template_url'); ?>/img/icon/message-icon.svg" alt="Contact Icon" width="24" height="24" />
						<img class="button__icon button__icon--active" src="<?php bloginfo('template_url'); ?>/img/icon/message-icon-ac.svg" alt="Active Contact Icon" width="24" height="24" />
						Contact Dr. Anna
					</a>
					<span class="row-btn__text">or</span>
					<a class="button button--big" title="Schedule a Visit" role="button" href="https://aws-portal.owlpractice.ca/insight4youth/booking" target="_blank" rel="noopener">
						<img class="button__icon" src="<?php bloginfo('template_url'); ?>/img/icon/calendar-icon.svg" alt="Calendar Icon" width="24" height="24" />
						<img class="button__icon button__icon--active" src="<?php bloginfo('template_url'); ?>/img/icon/calendar-icon-ac.svg" alt="Active Calendar Icon" width="24" height="24" />
						Schedule a Visit
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
