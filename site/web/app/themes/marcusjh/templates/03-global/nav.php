<?php 
$menu = wp_get_nav_menu_items( 'primary_menu');
?>

<div class="container md:flex md:items-center md:justify-between p-4 pb-0 md:pb-4">
	<!-- Logo -->
	<a class="navbar-brand uppercase text-white text-4xl" href="<?php echo get_bloginfo( 'wpurl' );?>">
	<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/src/images/logo.png" alt="Lattes theme logo"> -->marcusjh
	</a>
	<!-- Global navigation -->
	<nav>
		<ul class="list-reset md:flex md:items-center">
			<?php foreach($menu as $item): ?>
				<li class="md:ml-4">
					<a class="text-xl block no-underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0 text-white" href="<?= $item->url;?>">
						<?= $item->title; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</nav>
</div>