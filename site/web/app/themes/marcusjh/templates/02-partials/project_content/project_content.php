<?php
 $content = get_field('content', $id);
 $tags = get_the_tags($id);
 $thumbnail = get_the_post_thumbnail($id);
 $siteLink = get_field('site_link', $id);
 $caption_a = get_field('caption_a', $id);
 $hero_image_b = get_field('hero_image_b', $id);
 $block_colour = get_field('block_colour', $id);

 use marcusjh\lib\Extras;
 use marcusjh\lib\Utils;

 $projects = get_posts(array(
	'post_type'   => 'featured Work',
  'post_status' => 'publish',
  'orderby' => 'rand',
	'posts_per_page' => 2,
	)
);
?>

<div class="wrapper py-12 lg:py-24">
  <div class="lg:w-1/2">
    <h1 class="text-bold text-2xl lg:text-3xl">The outcome</h1>
    <h1 class="text-xl lg:text-2xl"><?= $caption_a; ?></h1>
    <!-- <div class="flex w-1/2 h-full justify-between items-center">
      <div class="w-2/3 h-full relative bg-white">
        <img alt="" draggable="false" class="absolute inset-0 object-cover w-full h-full" src="<?= $thumbnail; ?>"> </img>
      </div>
      <a href="<?= $siteLink ?>" class="underline text-lg" target="_blank">Visit Site</a>
    </div> -->
  </div>
</div>

<div class="hero-section__container">
  <div class="aspect-ratio w-full h-full">
    <img alt="" draggable="false" class="absolute inset-0 object-cover w-full h-full" src="<?= $hero_image_b; ?>"> </img>
  </div>
</div>

<div class="wrapper flex flex-col lg:items-end py-12 lg:py-24">
    <h1 class="text-bold text-2xl lg:text-3xl">Location-Based Application</h1>
    <?php if(!empty($tags)): ?>
      <div class="flex flex-col">
        <?php foreach($tags as $i => $tag): ?>
          <p class="text-xl lg:text-2xl"><?= $tag->name; ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>

<div class="h-auto py-12 hero-section__container" style="background-color:<?= $block_colour;?>;">

</div>

<div class="py-12 lg:py-24">

  <p class="wrapper text-xl text-semiBold">Related Projects</p>

  <?= Utils\ob_load_template_part('templates/02-partials/featured_work/featured_work' , [
    'projects' => $projects,
    'heroProjectModifier' => false
	]); ?>
</div>
