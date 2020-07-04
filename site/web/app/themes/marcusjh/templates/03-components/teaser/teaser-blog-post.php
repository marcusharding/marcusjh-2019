<?php
    $id = $post->ID;
    $content = get_field('content', $id);
    $postLink = get_permalink($id);
    $tags = get_the_tags($id);
    $thumbnail = get_the_post_thumbnail($id);
    $caption = get_field('caption', $id);
    $title = get_the_title($id);
?>

<div data-aos="fade-up" data-aos-delay="<?= $index . '00';?>" data-index="<?= $index; ?>" class="pb-12 lg:pb-0 small-project__container relative">
  <a href="<?= $postLink; ?>" class="blog-post__link">
    <div class="aspect-ratio h-auto project-img__container overflow-hidden rounded-t">
      <img alt="" draggable="false" class="absolute top-0 left-0 w-full h-full rounded-t" src="<?= $thumbnail; ?>"> </img>
      <div class="blog-post__overlay">
        <h1 class="text-bold text-white text-lg lg:text-xl"><?= $title; ?></h1>
        <p class="text-white lg:text-lg"><?= $caption; ?></p>
      </div>
    </div>
  </a>
</div>
