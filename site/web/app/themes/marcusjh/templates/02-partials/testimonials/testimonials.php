<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

$slides = array();
foreach($testimonials as $slide):
    $slides[] =  Utils\ob_load_template_part('templates/03-components/slides/slide-testimonial.php', [
        'slide' => $slide
    ]);
endforeach;
?>


<?= Utils\ob_load_template_part('templates/container/carousel/carousel.php', [
    'id' => 'testimonialCarousel',
    'overflow' => 'hidden',
    'pagination' => true,
    'options' => [
        'perView' => 1
    ],
    'slides' => $slides
]);?>
