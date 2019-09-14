<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
if ( empty($href) ) $href = '#0';
if ( empty($target) ) $target = '';
if ( empty($theme) ) $theme = 'white';
if ( empty($className) ) $className = '';
if ( empty($flexModifier) ) $flexModifier = '';
?>

<ul class="flex items-center <?= $flexModifier; ?>">
    <?php foreach($technologies as $item):?>

    <li class="mr-8">
        <a
            target=""
            class="<?= $className; ?> flex items-center justify-center"
        >
            <?= Utils\ob_load_template_part('templates/08-helpers/icon/icon', [
                'name' => $item['title'],
                'className' => 'w-56'
            ]); ?>
            <span class="visuallyhidden"><?= $item['title'];?></span>
        </a>
    </li>
    <?php endforeach; ?>
</ul>