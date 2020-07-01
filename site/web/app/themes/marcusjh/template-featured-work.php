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

global $post;

$id = $post->ID;

$caption = get_field('caption', $id);
$heading = get_field('heading', $id);
?>



<!-------------------------
 ARCHIVE FEATURED WORK
--------------------------->
<section class="py-12 lg:py-24 h-auto flex flex-col justify-center items-center">
  <div class="py-24 lg:py-32 wrapper flex flex-col lg:flex-row justify-between">
    <p class="text-primary text-5xl text-SemiBold w-full pb-12 lg:pb-0"><?= $heading; ?></p>
    <div>
      <p class="text-primary pb-6 text-2xl text-medium">Featured Work</p>
      <p class="text-primary text-lg"><?= $caption; ?></p>
    </div>
  </div>
	<div class="wrapper-90">
		<?= Utils\ob_load_template_part('templates/02-partials/featured_work/featured_work' , [
      'projects' => $projects,
      'heroProjectModifier' => true
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
