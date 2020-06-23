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
 ARCHIVE FEATURED WORK
--------------------------->
<section class="py-12 lg:py-24 h-auto flex flex-col justify-center items-center">
  <div class="py-32 w-full wrapper flex justify-between">
    <p class="text-primary text-5xl text-SemiBold w-full">Top Notch.</p>
    <div>
    <p class="text-primary pb-6 text-2xl text-medium">Featured Work</p>
    <p class="text-primary text-lg">Find out what can be created with great code and seamless collaboration</p>
    </div>
  </div>
	<div class="header-wrapper">
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
