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
	<section class="content">
		<div class="container">
			<div class="heading">
				<h1 class="title"><?php the_title(); ?></h1>
			</div>
			<?php edit_post_link('edit', '<p class="btn-edit">', '</p>'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="entry">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
