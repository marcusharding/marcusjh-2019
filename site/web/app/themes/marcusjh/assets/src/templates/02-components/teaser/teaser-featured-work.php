<?php

    $id = $project->ID;
    $content = get_field('content', $id); 
    // $excerpt = Extras\trim_text($content, 100, true, true);
    $siteLink = get_field('site_link', $id);
    $postLink = get_permalink($id);
?>

<a href="<?= $postLink; ?>">
    <div class="teaser-featured-work__container">
        <div class="">
            <h1 class="text-md text-white text-bold"><?= $project->post_title; ?></h1>
            <div class="text-white">
                <?= wp_trim_words($content, 50, '...'); ?>
            </div>
        </div>
    </div>
</a>