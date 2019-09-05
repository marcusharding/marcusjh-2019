<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

$slides = array();
foreach($projects as $slide):
    $slides[] =  Utils\ob_load_template_part('templates/03-components/slides/slide-featured-work.php', [
        'slide' => $slide
    ]);
endforeach;
?>

    <?php if(isset($projects)): ?>
        <!-- Desktop -->
        <div class="hidden lg:flex">
            <?php foreach ($projects as $project) : ?>
                <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-featured-work.php' , [
                    'project' => $project
	            ]); ?>
            <?php endforeach; ?>
        </div>

        <!-- mobile -->
        <div class="lg:hidden">
            <?= Utils\ob_load_template_part('templates/container/carousel/carousel.php' , [
                'id' => 'workCarousel',
                'overflow' => 'visible',
                'pagination' => true,
                'options' => [
                    'perView' => 1,
                    'peek' => [
                        'before' => 0,
                        'after' => 100
                    ],
                ],
                'slides' => $slides
	        ]); ?>
        </div>
    <?php endif; ?>