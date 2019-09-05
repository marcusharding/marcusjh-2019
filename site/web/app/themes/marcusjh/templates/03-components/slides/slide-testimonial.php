<?php
$id = $slide->ID;
$testimonialText = get_field('testimonial', $id); 
$provider = get_field('testimonial_provider', $id); 
$position = get_field('position', $id); 
$company = get_field('company', $id); 
?>

<div class="flex flex-col justify-center items-baseline cursor-pointer wrapper">
    <p class="text-white text-2xl pb-12"><?= $testimonialText; ?></p>
    <p class="text-white pb-2"><?= $provider; ?></p>
    <p class="text-white pb-2"><?= $position; ?></p>
    <p class="text-white pb-2"><?= $company; ?></p>
</div>