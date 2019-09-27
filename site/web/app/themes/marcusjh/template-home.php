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
<section class="bg-primary h-screen flex flex-col justify-center">
	<div class="wrapper py-24">
		<p class="text-white uppercase py-12 text-xl text-bold">Quote of the day</p>
		<?= Utils\ob_load_template_part('templates/03-components/quote/quote' , [
			'quotes' => $quotes
		]); ?>
	</div>
</section>

<!-------------------------
 WHAT I WORK WITH
--------------------------->
<section class="bg-white overflow-hidden">
	<div class="py-12 lg:py-24">
		<p class="wrapper uppercase text-grey-900 text-xl text-bold pb-12">What I Work With</p>
		<div class="mx-12">
			<?= Utils\ob_load_template_part('templates/02-partials/what-i-work-with/what-i-work-with' , [
			]); ?>
		</div>
	</div>
</section>

<!-------------------------
TESTIMONIALS
--------------------------->
<section class="bg-primary py-12 lg:py-24">
	<div class="wrapper">
		<p class="uppercase text-white text-xl text-bold pb-12">What others have to say</p>
		<?= Utils\ob_load_template_part('templates/02-partials/testimonials/testimonials' , [
			'testimonials' => $testimonials
		]); ?>
	</div>
</section>

<!-------------------------
 FEATURED WORK
--------------------------->
<section class="bg-white py-12 lg:py-24">
	<div class="wrapper">
		<p class="uppercase text-grey-900 text-xl text-bold pb-12">Featured Work</p>
		<?= Utils\ob_load_template_part('templates/02-partials/featured_work/featured_work' , [
			'projects' => $projects
		]); ?>
	</div>
</section>

<!-------------------------
LETS WORK TOGETHER
--------------------------->
<section class="bg-primary py-24">
	<div class="wrapper text-center">
		<p class="uppercase text-white text-xl text-bold pb-8">Lets work together</p>
		<p class="text-white pb-8">Have a potential project idea? Then lets talk.</p>
		<a href="/contact" class="btn btn--white">contact</a>
	</div>
</section>
