<?php
$menu = wp_get_nav_menu_items( 'primary_menu');
global $post;

if ( empty($modifier) ) $modifier = '';
?>

<!-- PAGE ID'S IN RELATION TO OBJECT ID'S

Homepage: 7
Featured work: 17
Blog: 19
Contact: 21

-->

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
        <a class="g-nav__link <?= $post->ID === 7 ? 'text-white' : ''; ?> <?= $post->ID === 21 ? 'text-white' : ''; ?> <?= $modifier; ?> text-light" href="<?= $item->url;?>">
					<?= $item->title; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>
