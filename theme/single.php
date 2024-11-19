<?php
/**
 * Pages Template
 * @subpackage insight4youth
 *
 *
 * @file           page.php

 */
get_header(); ?>
<main class="main" role="main">
	<section class="section">
		<div class="container">
			<?php the_title(); ?>
			<?php the_content(); ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
