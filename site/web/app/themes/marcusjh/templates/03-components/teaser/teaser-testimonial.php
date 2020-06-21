<?php
    if ( empty($className) ) $className = '';
?>

<div data-aos="fade-up" data-aos-delay="<?= $index . '00';?>" class="testimonial__container <?= $className; ?>">
    <div class="flex justify-between mb-8">
        <div class="w-1/3">
            <div class="w-full relative aspect-ratio">
                <img alt="" draggable="false" class="absolute inset-0 object-cover w-2/3 h-auto rounded-full" src="<?= $image["url"]; ?>"> </img>
            </div>
        </div>
        <div class="w-2/3">
            <p class="text-primary pb-2 text-bold"><?= $provider; ?></p>
            <p class="text-primary pb-2"><?= $position; ?></p>
            <p class="text-primary pb-2"><?= $company; ?></p>
        </div>
    </div>
    <div>
        <p class="text-primary text-sm lg:text-md"><?= wp_trim_words($testimonialText, 70, '...') ?></p>
    </div>
</div>
