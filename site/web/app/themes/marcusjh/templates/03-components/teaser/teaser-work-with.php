<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
if ( empty($href) ) $href = '#0';
if ( empty($target) ) $target = '';
if ( empty($theme) ) $theme = 'white';
if ( empty($className) ) $className = '';
// if ( empty($flexModifier) ) $flexModifier = '';
if($index == 3){
    $modifier = 'w-1/2';
}else{
    $modifier = 'w-1/3';
}
?>

<div class="w-1/5">
  <div class="teaser-work-with__container">
    <div class="flex flex-wrap w-full justify-center items-center">
        <?php foreach($technologies as $item):?>

            <li class="<?php $modifier; ?> pb-4">
                <a
                    target=""
                    class="<?= $className; ?> flex items-center justify-center"
                >
                    <?= Utils\ob_load_template_part('templates/08-helpers/icon/icon', [
                        'name' => $item['title'],
                        'className' => 'w-24'
                    ]); ?>
                    <span class="visuallyhidden"><?= $item['title'];?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </div>
  </div>
    <p class="text-center text-medium text-lg">
      <span class="teaser-work-with__span"><?= $heading; ?></span>
    </p>
</div>

