<?php
    $id = $project->ID;
    $content = get_field('content', $id);
    $siteLink = get_field('site_link', $id);
    $postLink = get_permalink($id);
    $tags = get_the_tags($id);
    $image = get_the_post_thumbnail($id);
    $main_image = get_field('main_image', $id);

?>

<div data-index="<?= $index; ?>" class="w-full flex">
  <div class="aspect-ratio w-2/3 h-auto">
    <img alt="" draggable="false" class="absolute object-contain top-0 left-0 w-full h-full rounded-t" src="<?= $main_image; ?>"> </img>
  </div>
  <div class="flex flex-col justify-center items-center w-1/3">
    <h1 class="text-2xl text-primary text-bold w-2/3"><?= $project->post_title; ?></h1>
    <p class="w-2/3 text-lg"><?= $content; ?></p>
  </div>
</div>
