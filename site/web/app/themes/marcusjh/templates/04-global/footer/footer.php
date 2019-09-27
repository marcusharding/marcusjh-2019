<!----------
FOOTER
------------>

<?php 
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

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
		<div class="flex justify-between pb-4 pt-12">
			<div>
				<?= Utils\ob_load_template_part('templates/03-components/social/social.php', [
					'theme' => 'light',
					'className' => 'w-6 h-6',
					'social' => [
						[
							'title' => 'twitter',
							'href' => '',
							'iconWidth' => '',
							'className' => 'self-end'
						],
						[
							'title' => 'linkedin',
							'href' => 'https://www.linkedin.com/in/marcusjh/',
							'iconWidth' => '',
							'className' => 'self-end'
						],
						[
							'title' => 'email',
							'href' => '',
							'iconWidth' => '',
							'className' => 'self-end'
						],
						[
							'title' => 'github',
							'href' => 'https://github.com/marcusharding',
							'iconWidth' => '',
							'className' => 'self-end'
						],
					]
				]); ?>
			</div>
			<div>
				<p class="text-white">Site by <a href="/"><span class="text-extra-bold uppercase">MarcusJH</span></a></p>
			</div>
		</div>
	</div>
</footer>
    

<?php wp_footer(); ?>