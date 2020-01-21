<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
?>


<!-- HERO -->
<div id="homepageHeader" class="section-video">
	<div class="overlay"></div>
	<?php if(!empty($video)): ?>
		<video autoplay loop muted playsinline id="headerVideo" class="opacity-25">
			<source src="<?= $video['url']; ?>" type="video/mp4">
		</video>
	<?php endif; ?>
	<div class="wrapper h-full flex flex-col justify-center items-center relative text-center">
		<div class="pb-12 text-left md:text-center">
			<h1 id="animatedHeadline" data-module="animatedHeadline" class="text-white text-bold uppercase cd-headline letters rotate-2">
				<span class="uppercase w-full block md:inline">Bespoke</span>
				<span class="cd-words-wrapper">
					<b class="is-visible uppercase">Websites</b>
					<b class="uppercase w-full">Designs</b>
					<b class="uppercase w-full">Applications</b>
				</span>
			</h1>
			<h2 class="text-white mb-8 text-light cd-subhead"><?= $subHeading; ?></h2>
    </div>
    <a data-scroll href="#aboutSection" class="btn btn--white mr-auto md:mx-auto">Find out more</a>
  </div>
  <div class="absolute right-0 bottom-0 mr-4 mb-4">
    <?= Utils\ob_load_template_part('templates/03-components/social/social.php', [
      'theme' => 'light',
      'className' => 'w-6 h-6 lg:w-8 lg:h-8',
      'social' => [
        [
          'title' => 'email',
          'href' => 'mailto:marcus@marcusjh.co.uk',
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

