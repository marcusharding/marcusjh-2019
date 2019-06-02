<!-- HERO -->
<div class="hero">
	<div class="overlay">
		<video autoplay="autoplay" loop="loop" muted="muted" style="background-color: black; opacity: 0.5">
			<?php if($page_hero->get('background_video')->has()) : ?>
				<source src="<?= $page_hero->get('background_video')->get('url'); ?>" type="video/mp4">
			<?php endif; ?>
		</video>
		<div class="slider-container">
			<div class="intro-text">
				<div class="intro-lead-in">Welcome To Our Studio!</div>
				<div class="intro-heading">It's Nice To Meet You</div>
				<a href="#about" class="page-scroll btn btn-xl">Tell Me More</a>
			</div>
		</div>
	</div>
</div>

