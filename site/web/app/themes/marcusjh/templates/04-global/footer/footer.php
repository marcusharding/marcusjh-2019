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
		<ul class="lg:flex justify-center lg:pb-12">
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
							'title' => 'email',
							'href' => '',
							'iconWidth' => 'mailto:marcus@marcusjh.co.uk',
							'className' => 'self-end'
            ],
            [
							'title' => 'linkedin',
							'href' => 'https://www.linkedin.com/in/marcusjh/',
							'iconWidth' => '',
							'className' => 'self-end'
            ],
            [
							'title' => 'github',
							'href' => 'https://github.com/marcusharding',
							'iconWidth' => '',
							'className' => 'self-end'
            ],
            [
              'title' => 'instagram',
              'href' => 'https://www.instagram.com/marcusjhdev/',
              'iconWidth' => '',
              'className' => 'self-end'
            ],
						[
							'title' => 'twitter',
							'href' => 'https://twitter.com/marcusjhdev',
							'iconWidth' => '',
							'className' => 'self-end'
						],
					]
				]); ?>
			</div>
			<div class="text-right">
				<p class="text-white">Site by <a href="/" class="uppercase">	<span class="text-extra-bold">marcusjh</span><span class="text-thin">dev</span></a></p>
			</div>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>
