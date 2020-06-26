<?php
 $content = get_field('content', $id);
 $tags = get_the_tags($id);
 $thumbnail = get_the_post_thumbnail($id);
 $siteLink = get_field('site_link', $id);
 $caption_a = get_field('caption_a', $id);
 $hero_image_b = get_field('hero_image_b', $id);
?>

<div class="wrapper py-24 flex w-full">
  <div class="w-1-2">
    <h1 class="w-1/2 text-bold text-lg"><?= $caption_a; ?></h1>
    <div class="flex w-1/2 h-full justify-between items-center">
      <div class="w-1/2 h-full relative bg-white">
        <img alt="" draggable="false" class="absolute inset-0 object-cover w-full h-full" src="<?= $thumbnail; ?>"> </img>
      </div>
      <a href="<?= $siteLink ?>" class="underline">Visit Site</a>
    </div>
  </div>
  <div class="w-1/2 flex flex-col items-end">
    <h1 class="text-bold text-lg">Location-Based Application</h1>
    <?php if(!empty($tags)): ?>
      <div class="flex flex-col">
        <?php foreach($tags as $i => $tag): ?>
          <p class="text-lg"><?= $tag->name; ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div class="featured-work-hero-project__container py-24">
  <div class="aspect-ratio w-full h-full">
    <img alt="" draggable="false" class="absolute inset-0 object-cover w-full h-full" src="<?= $hero_image_b; ?>"> </img>
  </div>
</div>
