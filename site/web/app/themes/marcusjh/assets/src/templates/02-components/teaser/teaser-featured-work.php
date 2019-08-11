<?php
    use marcusjh\lib\Extras;

    $id = $project->ID;
    $content = get_field('content', $id); 
    $excerpt = Extras\trim_text($content, 100, true, true);
    $siteLink = get_field('site_link', $id);
?>

<div class="teaser-featured-work__container bg-white">
    <div class="">
    <h1 class="text-md text-bold"><?= $project->post_title; ?></h1>
        <?= $excerpt; ?>
    </div>
</div>