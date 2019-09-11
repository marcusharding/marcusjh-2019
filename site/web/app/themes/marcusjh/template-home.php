<?php
/**
 * Template Name:  Homepage Template
 */

use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

$quotes = get_posts(array(
    'post_type'   => 'quotes',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    )
);

$projects = get_posts(array(
	'post_type'   => 'featured Work',
	'post_status' => 'publish',
	'posts_per_page' => 3,
	)
);

$testimonials = get_posts(array(
    'post_type'   => 'testimonials',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    )
);
?>

<!-------------------------
 HOMEPAGE HERO
--------------------------->
<section>
	<?= Utils\ob_load_template_part('templates/03-components/homepage_hero/homepage-hero', [
		'video' => get_field('homepage_video'),
		'heading' => get_field('heading'),
		'subHeading' => get_field('sub_heading'),
	]); ?>
</section>

<!-------------------------
 QUOTE OF THE DAY 
--------------------------->
<section class="bg-primary h-screen">
	<?= Utils\ob_load_template_part('templates/03-components/quote/quote' , [
		'quotes' => $quotes
	]); ?>
</section>

<!-------------------------
 What I WORK WITH
--------------------------->
<section class="bg-white h-screen">
	<div class="wrapper py-12 lg:py-24">
		<p class="uppercase text-grey-900 text-lg text-bold pb-12">What I Work With</p>
		
	</div>
</section>

<!-------------------------
TESTIMONIALS
--------------------------->
<section class="bg-primary py-12 lg:py-24">
	<?= Utils\ob_load_template_part('templates/02-partials/testimonials/testimonials' , [
		'testimonials' => $testimonials
	]); ?>
</section>

<!-------------------------
 FEATURED WORK
--------------------------->
<section class="bg-white py-12 lg:py-24">
	<div class="wrapper">
		<p class="uppercase text-grey-900 text-lg text-bold pb-12">Featured Work</p>
		<?= Utils\ob_load_template_part('templates/02-partials/featured_work/featured_work' , [
			'projects' => $projects
		]); ?>
	</div>
</section>

<!-------------------------
CONTACT 
--------------------------->
<section class="bg-primary py-24">
	<div class="wrapper">
		<p class="uppercase text-white text-lg text-bold pb-12">Lets work together</p>
		<?= Utils\ob_load_template_part('templates/03-components/contact_form/contact_form'); ?>
	</div>
</section>
