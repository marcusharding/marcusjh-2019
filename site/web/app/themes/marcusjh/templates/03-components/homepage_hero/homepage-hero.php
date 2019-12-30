<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
?>


<!-- HERO -->
<div class="section-video">
	<div class="overlay"></div>
	<?php if(!empty($video)): ?>
		<video autoplay="autoplay" loop="loop" muted="muted" class="opacity-25">
			<source src="<?= $video['url']; ?>" type="video/mp4">
		</video>
	<?php endif; ?>
	<div class="wrapper h-screen flex flex-col justify-center items-center relative text-center">
		<div class="pb-12">
			<h1 data-module="animatedHeadline" class="text-white text-bold uppercase cd-headline letters rotate-2">
				<span class="uppercase">Bespoke</span>
				<span class="cd-words-wrapper">
					<b class="is-visible uppercase">Websites</b>
					<b class="uppercase">Designs</b>
					<b class="uppercase">Applications</b>
				</span>
			</h1>
			<h2 class="text-white mb-8 text-light cd-subhead"><?= $subHeading; ?></h2>
    </div>
    <a data-scroll href="#aboutSection" class="btn btn--white">Find out more</a>
  </div>
  <div class="absolute right-0 bottom-0 mr-4 mb-4">
    <?= Utils\ob_load_template_part('templates/03-components/social/social.php', [
      'theme' => 'light',
      'className' => 'w-8 h-8',
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
</div>

