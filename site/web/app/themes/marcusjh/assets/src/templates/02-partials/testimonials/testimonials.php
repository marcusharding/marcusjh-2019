<?php
$testimonials = get_posts(array(
    'post_type'   => 'testimonials',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    )
);
?>

<div id="carousel" class="glide w-full relative" data-module="slider">
    <div class="glide__track overflow-hidden relative" data-glide-el="track">
        <ul class="glide__slides relative list-reset w-full flex flex-no-wrap whitespace-no-wrap overflow-hidden">
            <?php foreach($testimonials as $testimonial): ?>
                <li class="glide__slide">
                <?php include($_SERVER['DOCUMENT_ROOT'].'/app/themes/marcusjh/assets/src/templates/03-components/testimonial/testimonial.php'); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="glide__bullets wrapper flex justify-center" data-glide-el="controls[nav]">
        <?php foreach($testimonials as $i => $testimonial): ?>
            <button class="glide__bullet text-white" data-glide-dir="=<?= $i; ?>"></button>
        <?php endforeach; ?>
    </div>
</div>d