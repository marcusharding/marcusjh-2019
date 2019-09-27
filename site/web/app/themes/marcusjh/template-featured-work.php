<?php
/**
 * Template Name:  Featured work Template
 */
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

$projects = get_posts(array(
	'post_type'   => 'featured Work',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	)
);
?>

<!-------------------------
PAGE HERO
--------------------------->
<section class="relative h-screen">
    <?= Utils\ob_load_template_part('templates/03-components/generic_hero/generic_hero'); ?>
</section>

<!-------------------------
 ARHIVE FEATURED WORK
--------------------------->
<section class="bg-white py-12 lg:py-24">
	<div class="wrapper">
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