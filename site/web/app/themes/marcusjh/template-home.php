<?php
/**
 * Template Name:  Homepage Template
 */
?>

<!DOCTYPE html>
<html lang="en">
	<?php get_template_part('templates/head'); ?>
		<body id="page-top" <?php body_class();?>>
			<?php
				do_action('get_header');
				get_template_part('templates/header');
        	?>
			<!-- PAGE HERO -->
			<?php get_template_part('templates/02-partials/homepage-hero'); ?>
			<!-- ABOUT SECTION -->
			<?php get_template_part('templates/02-partials/about'); ?>
			<!-- SKILLS SECTION -->
			<?php get_template_part('templates/02-partials/skills'); ?>
			<!-- AWARDS -->
			<?php get_template_part('templates/02-partials/awards'); ?>
			<!-- PORTFOLIO -->
			<?php get_template_part('templates/02-partials/portfolio'); ?>
			<!-- TEAM -->
			<?php get_template_part('templates/02-partials/team'); ?>
			<!-- CONTACT -->
			<?php get_template_part('templates/02-partials/contact'); ?>
	</body>
</html>