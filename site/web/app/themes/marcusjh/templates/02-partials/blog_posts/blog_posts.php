<?php

use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
global $post;

$id = $post->ID;
?>

<?php if(isset($blogPosts)): ?>
  <!-- Desktop -->
  <div class="lg:flex lg:justify-between">
    <?php foreach ($blogPosts as $i => $post) : ?>
        <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-blog-post' , [
          'post' => $post,
          'index' => $i,
        ]); ?>
    <?php endforeach; ?>
  </div>

<?php endif; ?>
