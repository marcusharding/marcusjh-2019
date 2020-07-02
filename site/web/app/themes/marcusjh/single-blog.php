<?php
/**
 * Template Name:  Blog Single Template
 * Template Post Type:  post
 */

use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
global $post;

$id = $post->ID;

$caption = get_field('caption', $id);
$thumbnail = get_the_post_thumbnail($id);
?>

<div class="py-12 lg:py-32 wrapper-90">
  <h1 class="text-bold text-primary text-xl lg:text-3xl lg:w-1/2"><?= $caption; ?></h1>
</div>

<div class="hero-section__container">
  <div class="aspect-ratio w-full h-full">
    <img alt="" draggable="false" class="absolute inset-0 object-cover w-full h-full" src="<?= $thumbnail; ?>"> </img>
  </div>
</div>

<div class="py-24 wrapper blog-post__content">
  <?= $content = get_field('content', $id); ?>
</div>
