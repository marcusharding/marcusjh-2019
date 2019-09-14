<div class="testimonial__container">
    <div class="flex justify-between mb-4">
        <div class="w-1/3">
            <div class="w-full relative aspect-ratio">
                <img draggable="false" class="absolute inset-0 object-cover w-2/3 h-auto rounded-full" src="https://picsum.photos/800/800?grayscale" />
            </div>
        </div>
        <div class="w-2/3">
            <p class="text-primary pb-2 text-bold"><?= $provider; ?></p>
            <p class="text-primary pb-2"><?= $position; ?></p>
            <p class="text-primary pb-2"><?= $company; ?></p>
        </div>  
    </div>
    <div>
        <p class="text-primary text-sm lg:text-md"><?= wp_trim_words($testimonialText, 25, '...') ?></p>
    </div>
</div>