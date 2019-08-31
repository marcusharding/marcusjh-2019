<?php
/**
 * Template Name:  Homepage Template
 */
?>

<!-------------------------
 HOMEPAGE HERO
--------------------------->
<section>
	<?php get_template_part('../marcusjh/assets/src/templates/03-components/homepage_hero/homepage-hero'); ?>
</section>

<!-------------------------
 QUOTE OF THE DAY 
--------------------------->
<section class="bg-black h-screen">
	<?php get_template_part('../marcusjh/assets/src/templates/03-components/quote/quote'); ?>
</section>

<!-------------------------
 FEATURED WORK
--------------------------->
<section class="bg-white py-12 lg:py-24">
	<div class="wrapper">
		<p class="uppercase text-grey-900 text-lg text-bold pb-12">Featured Work</p>
		<?php get_template_part('../marcusjh/assets/src/templates/02-partials/featured_work/featured_work'); ?>
	</div>
</section>

<!-------------------------
TESTIMONIALS
--------------------------->
<section class="bg-black py-24">
	<?php get_template_part('../marcusjh/assets/src/templates/02-partials/testimonials/testimonials'); ?>	
</section>

<!-------------------------
CONTACT 
--------------------------->
<section class="bg-white py-24">
	<div class="wrapper">
		<p class="uppercase text-grey-900 text-lg text-bold pb-12">Lets work together</p>
		<?php get_template_part('../marcusjh/assets/src/templates/02-components/contact_form/contact_form.php'); ?>	
	</div>
</section>