<?php
    $id = $project->ID;
    $content = get_field('content', $id); 
    $siteLink = get_field('site_link', $id);
    $postLink = get_permalink($id);
    $tags = get_tags($id);
    $image = get_the_post_thumbnail($id);
?>

<a href="<?= $postLink; ?>">
    <div class="teaser-featured-work__container">
        <div class="w-full relative aspect-ratio">
            <img draggable="false" class="absolute inset-0 object-cover w-full h-full rounded-t" src="<?=$image;?>" />
        </div>
        <div class="p-8 pt-4">
            <h1 class="text-md text-white text-bold"><?= $project->post_title; ?></h1>
            <div class="text-white mb-4">
                <?= wp_trim_words($content, 20, '...'); ?>
            </div>
            <div class="flex justify-between items-end">
                <?php foreach($tags as $i => $tag): ?>
                <p class="text-white"><?= $tag->name; ?></p>
                <?php endforeach; ?>
                <a class="text-white underline" href="<?= $siteLink; ?>">Visit Site</a>
            </div>
        </div>
    </div>
</a>
