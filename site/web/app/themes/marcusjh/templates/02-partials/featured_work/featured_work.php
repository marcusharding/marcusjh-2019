<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
global $post;
?>

<!-- PAGE ID'S

Homepage: 7
Featured work: 17
Blog: 19
Contact: 21

-->

    <?php if(isset($projects)): ?>
        <!-- Desktop -->
        <div data-module="featuredWorkLoop" class="hidden lg:flex <?= $post->ID === 7 ? null : 'lg:flex-wrap'; ?> justify-between">
          <?php foreach ($projects as $i => $project) : ?>

            <?php if($post->ID === 7): ?>
              <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-featured-work' , [
                'project' => $project,
                'index' => $i,
	            ]); ?>
            <?php endif; ?>

            <?php if($post->ID === 17): ?>
              <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-featured-work-main' , [
                'project' => $project,
                'index' => $i,
	            ]); ?>
            <?php endif; ?>

          <?php endforeach; ?>
        </div>

        <!-- mobile -->

    <?php endif; ?>
