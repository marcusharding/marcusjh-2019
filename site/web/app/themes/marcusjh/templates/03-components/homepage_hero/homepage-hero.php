
<!-- HERO -->
<div class="section-video">
	<div class="overlay"></div>
	<?php if(!empty($video)): ?>
		<video autoplay="autoplay" loop="loop" muted="muted" class="opacity-50">
			<source src="<?= $video['url']; ?>" type="video/mp4">
		</video>
	<?php endif; ?>
	<div class="wrapper h-screen flex flex-col justify-center items-center relative text-center">
		<div class="pb-12">
			<h1 class="text-white text-3xl text-bold uppercase"><?= $heading; ?></h1>
			<h2 class="text-white text-2xl mb-8 text-light"><?= $subHeading; ?></h2>
			<!-- <a href="/about/" class="page-scroll btn btn--white text-white">Tell Me More</a> -->
		</div>
	</div>
</div>

