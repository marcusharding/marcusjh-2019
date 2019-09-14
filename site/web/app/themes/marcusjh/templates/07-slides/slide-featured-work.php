<?php
    $id = $slide->ID;
    $content = get_field('content', $id); 
    // $excerpt = Extras\trim_text($content, 100, true, true);
    $siteLink = get_field('site_link', $id);
    $postLink = get_permalink($id);
?>

<a href="<?= $postLink; ?>">
    <div class="teaser-featured-work__container">
        <div class="w-full relative aspect-ratio">
            <img class="absolute inset-0 object-cover w-full h-full rounded-t" src="https://picsum.photos/800/800?grayscale" />
        </div>
        <div class="p-8">
            <h1 class="text-md text-white text-bold"><?= $slide->post_title; ?></h1>
            <div class="text-white">
                <?= wp_trim_words($content, 25, '...'); ?>
            </div>
        </div>
    </div>
</a>