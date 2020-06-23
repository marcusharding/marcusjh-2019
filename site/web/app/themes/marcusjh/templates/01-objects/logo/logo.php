<!-- Logo -->

<?php
global $post;
?>

<!-- PAGE ID'S IN RELATION TO OBJECT ID'S

Homepage: 7
Featured work: 17
Blog: 19
Contact: 21

-->

<a id="logo" class="<?= $post->ID === 7 ? 'text-white' : ''; ?> <?= $post->ID === 21 ? 'text-white' : ''; ?> logo navbar-brand uppercase text-lg lg:text-2xl tracking-wider z-10" href="/">
	<span class="text-extra-bold">marcusjh</span><span class="text-thin">dev</span>
</a>

<!-- <a class="w-1/5">
	<div class="responsive-img aspect-ratio">
		<img class="" src="/app/themes/marcusjh/assets/dist/img/me.jpg" />
	</div>
</a> -->
