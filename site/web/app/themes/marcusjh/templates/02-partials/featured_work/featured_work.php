<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

?>

    <?php if(isset($projects)): ?>
        <!-- Desktop -->
        <div data-module="featuredWorkLoop" class="hidden lg:flex lg:flex-wrap">
            <?php foreach ($projects as $i => $project) : ?>
                <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-featured-work-main' , [
                    'project' => $project,
                    'index' => $i,
	            ]); ?>
            <?php endforeach; ?>
        </div>

        <!-- mobile -->

    <?php endif; ?>
