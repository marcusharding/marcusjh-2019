<?php
    $projects = get_posts(array(
        'post_type'   => 'featured Work',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        )
    );
?>

    <?php if(isset($projects)): ?>
        <div class="lg:flex">
            <?php foreach ($projects as $project) : ?>
                <?php include '03-components/teaser/teaser-featured-work.php'; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>