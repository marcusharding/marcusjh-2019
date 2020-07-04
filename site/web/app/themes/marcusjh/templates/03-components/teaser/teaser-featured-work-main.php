<?php
  $id = $project->ID;
  $content = get_field('content', $id);
  $siteLink = get_field('site_link', $id);
  $postLink = get_permalink($id);
  $tags = get_the_tags($id);
  $image = get_the_post_thumbnail($id);
  $main_image = get_field('main_image', $id);
?>

<!-- DESKTOP -->
<div data-aos="fade-up" data-aos-delay="<?= $index . '00';?>" data-index="<?= $index; ?>" class="hidden lg:flex py-8 small-project__container relative">
  <a href="<?= $postLink; ?>" class="aspect-ratio h-auto project-img__container overflow-hidden rounded-t featured-work__link">
    <img alt="" draggable="false" class="absolute top-0 left-0 w-full h-full rounded-t" src="<?= $main_image; ?>"> </img>
    <div class="project-post__overlay">
      <h2 class="uppercase text-white text-xl text-bold">View Project</h2>
      <hr class="text-white my-4">
      <div class="flex flex-wrap justify-center">
        <?php foreach($tags as $i => $tag): ?>
          <?php
            $len = count($tags);
          ?>
        <p class="text-white text-md pr-2 pb-2"><?= $tag->name; ?> <?= $i === $len - 1 ? null : '|' ?></p>
        <?php endforeach; ?>
      </div>
    </div>
  </a>
  <div class="flex flex-col caption__container">
    <h1 class="text-2xl text-primary text-bold w-2/3"><?= $project->post_title; ?></h1>
    <p class="w-2/3 text-lg"><?= $content; ?></p>
  </div>
</div>

<!-- MOBILE -->
<div data-aos="fade-up" data-aos-delay="<?= $index . '00';?>" data-index="<?= $index; ?>" class="lg:hidden py-8">
  <div class="aspect-ratio h-auto project-img__container overflow-hidden rounded-t">
    <a href="<?= $postLink; ?>">
      <img alt="" draggable="false" class="absolute top-0 left-0 w-full h-full rounded-t" src="<?= $main_image; ?>"> </img>
      <div class="project__overlay"></div>
    </a>
  </div>
  <div class="flex flex-col caption__container">
    <h1 class="text-xl text-primary text-bold"><?= $project->post_title; ?></h1>
    <p class="text-lg"><?= $content; ?></p>
  </div>
</div>
