<!-- Grab fields needed first -->
<?php 
$video = get_field('homepage_video');
$heading = get_field('heading');
$subHeading = get_field('sub_heading');
 ?>

<!-- HERO -->
<div class="section-video">
	<div class="overlay"></div>
	<?php if(!empty($video)): ?>
		<video autoplay="autoplay" loop="loop" muted="muted" class="opacity-50">
			<source src="<?php echo $video['url']; ?>" type="video/mp4">
		</video>
	<?php endif; ?>
	<div class="wrapper h-screen flex flex-col justify-center items-center relative text-center">
		<div class="">
			<H1 class="text-white text-4xl text-bold uppercase"><?php echo $heading; ?></H1>
			<h2 class="text-white text-2xl mb-8 text-light"><?php echo $subHeading; ?></h2>
			<a href="/about/" class="page-scroll btn btn--white text-white">Tell Me More</a>
		</div>
	</div>
</div>

