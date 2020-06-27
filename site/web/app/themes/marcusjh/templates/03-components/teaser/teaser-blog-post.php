<?php
    $id = $post->ID;
    $content = get_field('content', $id);
    $postLink = get_permalink($id);
    $tags = get_the_tags($id);
    $thumbnail = get_the_post_thumbnail($id);
    $caption = get_field('caption', $id);
    $title = get_the_title($id);
?>

<div data-index="<?= $index; ?>" class="small-project__container relative">
  <a href="<?= $postLink; ?>" class="blog-post__link">
    <div class="aspect-ratio h-auto project-img__container overflow-hidden rounded-t">
      <img alt="" draggable="false" class="absolute top-0 left-0 w-full h-full rounded-t" src="<?= $thumbnail; ?>"> </img>
      <div class="blog-post__overlay">
        <h1 class="text-bold text-white text-xl"><?= $title; ?></h1>
        <p class="text-white text-lg"><?= $caption; ?></p>
      </div>
    </div>
  </a>
</div>
