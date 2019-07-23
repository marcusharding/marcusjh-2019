<?php 
$menu = wp_get_nav_menu_items( 'primary_menu');
?>

<nav id="site-nav" class="g-nav mobile-menu lg:pt-4">
	<ul class="g-nav__list">
		<?php foreach($menu as $item): ?>
			<li class="md:ml-4">
				<a class="text-xl block no-underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0 text-white" href="<?= $item->url;?>">
					<?= $item->title; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>