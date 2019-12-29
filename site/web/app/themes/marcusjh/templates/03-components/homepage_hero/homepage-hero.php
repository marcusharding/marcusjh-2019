
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
</div>

