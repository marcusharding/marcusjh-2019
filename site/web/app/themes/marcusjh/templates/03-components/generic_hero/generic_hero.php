<?php
global $post;

$id = $post->ID;
$nav_colour_modifier = get_field('nav_colour_modifier', $id);

if ( empty($nav_colour_modifier) ) $modifier = null;

?>

<div class="h-full lg:w-full flex items-center">
  <div class="wrapper-90 z-10">
    <h1 class="uppercase text-xl lg:text-2xl lg:w-1/2 <?= $nav_colour_modifier === null ? null : 'text-' . $nav_colour_modifier; ?>"><?= $captionHeading; ?></h1>
    <h2 class="text-2xl lg:text-3xl w-3/4 lg:w-1/2 text-bold <?= $nav_colour_modifier === null ? null : 'text-' . $nav_colour_modifier; ?>"><?= $captionContent; ?></h2>
  </div>
    <!-- hero image -->
    <img class="absolute inset-0 object-cover w-full h-full featured-work-hero__position" src="<?= $hero; ?>" />
</div>
