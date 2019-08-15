<?php
$slides = array('yes', 'no', 'maybe', 'okay... fine');
?>

<div class="wrapper h-full" data-module="slider">
    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php foreach($slides as $slide): ?>
                    <li class="glide__slide">
                        <div class="">
                            <p class="text-white">HELLO</p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
    </div>
</div>