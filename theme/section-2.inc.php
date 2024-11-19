<?php
/*
Template Name: Section: Help Block
Template Post Type: section
*/
?>
<section class="section s-keep">
	<div class="container">
		<div class="keep">
			<div class="keep-inner">
				<h2 class="h2"><?php echo get_field('help_block_title',74); ?></h2>
				<?php echo get_field('help_block_text',74); ?>
			</div>
		</div>
	</div>
</section>