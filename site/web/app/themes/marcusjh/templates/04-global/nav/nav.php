<?php
$menu = wp_get_nav_menu_items( 'primary_menu');
global $post;

if ( empty($modifier) ) $modifier = '';
?>

<nav id="siteNav" class="g-nav mobile-menu overflow-hidden">
	<ul class="g-nav__list justify-center align-center overflow py-20 lg:py-0">
    <?php foreach($menu as $item): ?>

      <?php if(isset($post->ID)): ?>
        <?php if($post->ID == $item->object_id) {
            $modifier = 'page-active';
          } else{
            $modifier = '';
          }
        ?>
      <?php endif; ?>

			<li class="md:ml-4 lg:flex-auto pb-12 lg:pb-0">
				<a class="g-nav__link <?= $modifier; ?> text-thin" href="<?= $item->url;?>">
					<?= $item->title; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>
