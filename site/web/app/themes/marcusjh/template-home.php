<?php
/**
 * Template Name:  Homepage Template
 */
?>

<!-------------------------
 HOMEPAGE HERO
--------------------------->
<section>
	<?php get_template_part('../marcusjh/assets/src/templates/02-components/homepage_hero/homepage-hero'); ?>
</section>

<!-------------------------
 QUOTE OF THE DAY 
--------------------------->
<section class="bg-black h-screen">
	<?php get_template_part('../marcusjh/assets/src/templates/02-components/quote/quote'); ?>
</section>

<!-------------------------
 FEATURED WORK
--------------------------->
<section class="bg-white h-screen">
	<?php get_template_part('../marcusjh/assets/src/templates/02-components/featured_work/featured_work'); ?>
</section>

<!-------------------------
TESTIMONIALS
--------------------------->
<section class="bg-black h-screen">
	<?php get_template_part('../marcusjh/assets/src/templates/02-components/testimonial/testimonial'); ?>	
</section>