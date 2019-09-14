<?php
    $id = $project->ID;
    $content = get_field('content', $id); 
    $siteLink = get_field('site_link', $id);
    $postLink = get_permalink($id);
?>

<a href="<?= $postLink; ?>">
    <div class="teaser-featured-work__container">
        <div class="w-full relative aspect-ratio">
            <img draggable="false" class="absolute inset-0 object-cover w-full h-full rounded-t" src="https://picsum.photos/800/800?grayscale" />
        </div>
        <div class="p-8 pt-4">
            <h1 class="text-md text-white text-bold"><?= $project->post_title; ?></h1>
            <div class="text-white">
                <?= wp_trim_words($content, 20, '...'); ?>
            </div>
        </div>
    </div>
</a>