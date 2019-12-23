<?php
/**
 * Template Name:  Homepage Template
 */

use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

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
 ABOUT 
--------------------------->
<section class="bg-primary py-12 lg:py-24 relative about-svg__container">
	<div class="wrapper">
		<p class="text-white text-2xl text-bold pb-12">What do I do</p>
		<?= Utils\ob_load_template_part('templates/02-partials/what-i-do/what-i-do', [
			'heading' => get_field('caption_text'),
			'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultricies ornare tristique. Sed ac orci ligula. Duis fermentum quam facilisis congue molestie. Morbi id tempus tortor, quis vestibulum risus. Cras iaculis sagittis ultrices. Vestibulum vel auctor urna, ac vulputate risus. Suspendisse maximus metus erat, id accumsan est convallis non.'
		]); ?>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="-450 150 900 800">
		<g fill="#FFFFFF">
			<path fill="#ffffff" d="M81.9 240.9l59.9-59.1c14.6-14.4 15.6-37 2.2-50.2-13.4-13.2-36.2-12.2-50.8 2.1l-81.7 80.4c-2.4 2.2-4.2 4.9-5.9 7.5-3.5 5-5.4 10.7-5.6 16.7v2.5c0 .7 0 1.5.1 2.4.4 6 2.1 11.9 5.6 16.9 1.6 2.6 3.5 5.1 5.9 7.5L93.3 348c14.6 14.4 37.5 15.4 50.8 2.1 13.4-13.2 12.4-35.7-2.4-50.2l-59.8-59zM499.9 238.5c-.4-6-2.1-11.9-5.6-16.7-1.6-2.6-3.5-5.1-5.9-7.5l-81.7-80.4c-14.6-14.4-37.5-15.4-50.8-2.1-13.4 13.2-12.4 35.7 2.2 50.2l59.9 59.1-59.9 59.1c-14.6 14.4-15.6 37-2.4 50.2 13.4 13.2 36.2 12.2 50.8-2.1l81.7-80.4c2.4-2.2 4.1-4.9 5.9-7.5 3.5-5 5.4-10.7 5.6-16.9 0-.7.1-1.6.1-2.4.2-1 .1-1.7.1-2.6zM287.6 96.3c-18.5-3.4-37.1 10.2-41.5 30.2L194.9 361c-4.4 20.1 7.1 39.2 25.6 42.7s37.1-10.1 41.5-30.2L313.2 139c4.4-20.1-7.1-39.2-25.6-42.7z"/>
		</g>
	</svg>
</section>

<!-------------------------
 WHAT I WORK WITH
--------------------------->
<section class="bg-white overflow-hidden relative">
	<div class="bg-grey-300 absolute right-0 top-0 bottom-0 w-3/5 h-full"></div>
	<div class="py-12 lg:py-24 relative">
		<p class="wrapper text-grey-900 text-2xl text-bold pb-12">What I work with</p>
		<div class="wrapper">
			<?= Utils\ob_load_template_part('templates/02-partials/what-i-work-with/work-with.php', [
			
			])?>
		</div>
	</div>
</section>


<!-------------------------
TESTIMONIALS
--------------------------->
<section class="bg-primary py-12 lg:py-24">
	<div class="wrapper">
		<p class=" text-white text-2xl text-bold pb-12">What others have to say</p>
		<?= Utils\ob_load_template_part('templates/02-partials/testimonials/testimonials' , [
			'testimonials' => $testimonials
		]); ?>
	</div>
</section>

<!-------------------------
 FEATURED WORK
--------------------------->
<section class="bg-white py-12 lg:py-24 relative">
	<div class="bg-grey-300 absolute right-0 top-0 bottom-0 w-3/5 h-full"></div>
	<div class="wrapper relative">
		<p class="text-grey-900 text-2xl text-bold pb-12">Featured Work</p>
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
		<p class="uppercase text-white text-2xl text-bold pb-8">Lets work together</p>
		<p class="text-white pb-8 text-lg">Have a potential project idea? Then lets talk.</p>
		<a href="/contact" class="btn btn--white">contact</a>
	</div>
</section>
