<?php
/**
 * Template Name:  Project Single Template
 * Template Post Type: featured Work
 */

use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

$id = $post->ID;
$content = get_field('content', $id);
$siteLink = get_field('site_link', $id);
$image = get_the_post_thumbnail($id);
$main_image = get_field('main_image', $id);
$hero_image = get_field('hero_image', $id);
$hero_caption_heading = get_field('hero_caption_heading', $id);
$hero_caption_content = get_field('hero_caption_content', $id);
?>

<!-------------------------
PAGE HERO
--------------------------->
<section class="relative h-screen">
    <?= Utils\ob_load_template_part('templates/03-components/generic_hero/generic_hero', [
      'hero' => $hero_image,
      'captionModifier' => true,
      'captionHeading' => $hero_caption_heading,
      'captionContent' => $hero_caption_content
    ]); ?>
</section>

<!-------------------------
PROJECT
--------------------------->
<section>
	<?= Utils\ob_load_template_part('templates/02-partials/project_content/project_content', [
		'id' => $id
	]); ?>
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
