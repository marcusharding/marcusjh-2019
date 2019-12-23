<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

$fakeArray = array(1, 1, 1, 1);
?>

<div class="flex justify-between">
    <?php foreach($fakeArray as $i => $item): ?>
        <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-work-with.php', [
            'theme' => 'dark',
            'className' => 'w-32 h-32',
            'technologies' => [
                [
                    'title' => 'twig',
                    'href' => '',
                    'iconWidth' => ''
                ]
            ]
        ])?>
    <?php endforeach; ?>
</div>