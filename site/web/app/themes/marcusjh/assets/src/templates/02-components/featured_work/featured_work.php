<?php
    $projects = get_posts(array(
        'post_type'   => 'Featured Work',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        )
    );
?>



<div class="wrapper">
    <p class="uppercase text-grey-900 text-lg text-medium py-12">Featured Work</p>
    <?php if($projects): ?>
        <div class="flex">
            <?php foreach ($projects as $project) : ?>
                <?php include($_SERVER['DOCUMENT_ROOT'].'/app/themes/marcusjh/assets/src/templates/02-components/teaser/teaser-featured-work.php'); ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>