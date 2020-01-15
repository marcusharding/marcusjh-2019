<?php
if ( empty($id) ) $id = 'carousel';
if ( empty($className) ) $className = '';
if ( empty($options) ) $options = '';
if ( empty($overflow) ) $overflow = 'hidden';
if ( empty($pagination) ) $pagination = '';
if ( empty($controls) ) $controls = '';
if ( empty($liClassName) ) $liClassName = '';
?>

<div
id="<?= $id; ?>"
class="glide w-full relative grabbable <?= $className; ?>"
data-module="slider"
<?php if(isset($options)): ?>
    data-options='<?= json_encode($options); ?>'
<?php endif; ?>
>

    <div class="glide__track overflow-hidden relative" data-glide-el="track">
        <ul class="glide__slides relative list-reset w-full flex flex-no-wrap whitespace-no-wrap overflow-hidden">
            <?php foreach($slides as $i => $slide): ?>
                <li class="glide__slide <?= $liClassName; ?>">
                    <?php echo $slide; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php if($controls == true): ?>
        <div class="relative" data-glide="controls">

        </div>
    <?php endif; ?>

    <!-- <?php if($pagination == true): ?> -->
        <div class="glide__bullets wrapper flex justify-center" data-glide-el="controls[nav]">
            <?php foreach($slides as $i => $slide): ?>
                <button class="glide__bullet text-white" data-glide-dir="=<?= $i; ?>"></button>
            <?php endforeach; ?>
        </div>
    <!-- <?php endif; ?> -->

</div>
