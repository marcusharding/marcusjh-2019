<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

$slides = array();
foreach($testimonials as $slide):
    $slides[] =  Utils\ob_load_template_part('templates/07-slides/slide-testimonial.php', [
        'slide' => $slide
    ]);
endforeach;
?>


<?= Utils\ob_load_template_part('templates/06-container/carousel/carousel.php', [
    'id' => 'testimonialCarousel',
    'overflow' => 'hidden',
    'pagination' => true,
    'liClassName' => 'testimonial-teaser-slide',
    'options' => [
        'perView' => 2,
        'startAt' => 1,
        'focusAt' => 'center',
        'peek' => [
            'before' => 100,
            'after' => 100
        ],
        'breakpoints' => [
          '640' => [
            'perView' => 1,
            'peek' => [
              'before' => 0,
              'after' => 50
          ],
          'focusAt' => 0,
        ],
        '768' => [
          'perView' => 1,
        ]
          ],
    ],
    'slides' => $slides
]);?>
