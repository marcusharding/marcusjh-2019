<?php
/**
 * Template Name:  Homepage Template
 */
?>

<!DOCTYPE html>
<html lang="en">
	<?php get_template_part('../marcusjh/assets/src/templates/head'); ?>
		<body id="page-top" <?php body_class();?>>
			<?php
				do_action('get_header');
				get_template_part('../marcusjh/assets/src/templates/header');
        	?>
			<!-- PAGE HERO -->
			<?php get_template_part('../marcusjh/assets/src/templates/02-partials/homepage_hero/homepage-hero'); ?>
			<!-- ABOUT SECTION -->
			<?php get_template_part(''); ?>
			<!-- SKILLS SECTION -->
			<?php get_template_part(''); ?>
			<!-- AWARDS -->
			<?php get_template_part(''); ?>
			<!-- PORTFOLIO -->
			<?php get_template_part(''); ?>
			<!-- TEAM -->
			<?php get_template_part(''); ?>
			<!-- CONTACT -->
			<?php get_template_part(''); ?>
	</body>
</html>