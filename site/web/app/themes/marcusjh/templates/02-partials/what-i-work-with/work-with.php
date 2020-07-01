<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
?>

<div class="lg:flex lg:justify-between">
  <?php foreach($fakeArray as $i => $item): ?>
    <?php $technologies = ${'technologies'.$i}; ?>
    <?php $heading = ${'title'.$i}; ?>
    <?php $classNames = ${'classNames'.$i}; ?>

    <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-work-with.php', [
        'theme' => 'dark',
        'className' => $classNames,
        'heading' => $heading,
        'technologies' => $technologies,
        'index' => $i,
    ])?>
  <?php endforeach; ?>
</div>
