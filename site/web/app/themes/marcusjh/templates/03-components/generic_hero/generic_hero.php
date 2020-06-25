<?php
global $post;

$id = $post->ID;
$nav_colour_modifier = get_field('nav_colour_modifier', $id);

if ( empty($nav_colour_modifier) ) $modifier = null;

?>

<div class="h-full w-full flex items-center">
  <div class="header-wrapper z-10">
    <h1 class="uppercase text-2xl w-1/2 <?= $nav_colour_modifier === null ? null : 'text-' . $nav_colour_modifier; ?>"><?= $captionHeading; ?></h1>
    <h2 class="text-3xl w-1/2 text-bold <?= $nav_colour_modifier === null ? null : 'text-' . $nav_colour_modifier; ?>"><?= $captionContent; ?></h2>
  </div>
    <!-- hero image -->
    <img class="absolute inset-0 object-cover w-full h-full" src="<?= $hero; ?>" />
</div>
