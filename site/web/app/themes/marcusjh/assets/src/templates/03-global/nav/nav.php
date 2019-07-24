<?php 
$menu = wp_get_nav_menu_items( 'primary_menu');
?>

<nav id="site-nav" class="g-nav mobile-menu">
	<ul class="g-nav__list">
		<?php foreach($menu as $item): ?>
			<li class="md:ml-4">
				<a class="g-nav__link text-thin" href="<?= $item->url;?>">
					<?= $item->title; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>