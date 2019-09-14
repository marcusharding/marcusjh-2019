<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

$id = $slide->ID;
?>

<div class="">
    <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-testimonial' , [
        'testimonialText' => get_field('testimonial', $id),
        'provider' => get_field('testimonial_provider', $id),
        'position' => get_field('position', $id),
        'company' => get_field('company', $id)
    ]); ?>
</div>
