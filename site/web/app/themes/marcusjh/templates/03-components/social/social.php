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
  <?php foreach($social as $item):?>
  <?php
    if($theme == 'dark'){
        $themeModifier = 'text-black';
    }
    else{
        $themeModifier = 'text-white';
    }
  ?>
  <li class="mr-2">
      <a  data-module="emailClipboard"
          href="<?= $item['href']; ?>"
          target=""
          class="<?= $className; ?> flex items-center justify-center <?= $themeModifier; ?> icons"
      >
          <?= Utils\ob_load_template_part('templates/08-helpers/icon/icon.php', [
              'name' => $item['title'],
              'className' => 'w-12'
          ]); ?>
          <span class="visuallyhidden"><?= $item['title'];?></span>
      </a>
  </li>
  <?php endforeach; ?>
</ul>
