<!----------
FOOTER
------------>

<?php 
$menu = wp_get_nav_menu_items( 'primary_menu');
?>

<footer class="bg-black h-100 pt-8">
	<div class="wrapper">
		<ul class="lg:flex justify-center pb-12">
			<?php foreach($menu as $item): ?>
				<li class="">
					<a class="footer__menu text-white uppercase m-4" data-hover="<?= $item->title; ?>" href="<?= $item->url;?>">
					<span>
						<?= $item->title; ?>
					</span>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<div class="text-right pb-4 pt-12">
			<p class="text-white">Site by <span class="text-extra-bold uppercase">MarcusJH</span></a></p>
		</div>
	</div>
</footer>
    

<?php wp_footer(); ?>