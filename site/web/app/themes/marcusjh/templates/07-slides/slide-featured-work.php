<?php
    $id = $slide->ID;
    $content = get_field('content', $id);
    $siteLink = get_field('site_link', $id);
    $postLink = get_permalink($id);
    $tags = get_the_tags($id);
    $image = get_the_post_thumbnail($id);
?>

<!-- <a href=""> -->
    <div class="teaser-featured-work__container flex flex-col">
        <div class="w-full relative aspect-ratio teaser-featured-work__img-container">
            <img alt="" draggable="false" class="absolute inset-0 object-cover w-full h-full rounded-t teaser-featured-work__img" src="<?=$image;?>"> </img>
        </div>
        <div class="p-8 flex-grow teaser-featured-work__content">
            <h1 class="text-md text-white text-bold"><?= $slide->post_title; ?></h1>
            <div class="text-white mb-4">
                <?= wp_trim_words($content, 20, '...'); ?>
            </div>
            <div class="flex justify-between items-end">
              <div class="flex flex-col">
                <?php foreach($tags as $i => $tag): ?>
                  <p class="text-white"><?= $tag->name; ?></p>
                <?php endforeach; ?>
              </div>
              <a class="text-white underline" href="<?= $siteLink; ?>" target="_blank">Visit Site</a>
            </div>
        </div>
    </div>
<!-- </a> -->
