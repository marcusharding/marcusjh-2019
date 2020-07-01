<!-- Logo -->

<?php
global $post;
$id = $post->ID;
$nav_colour_modifier = get_field('nav_colour_modifier', $id);

if ( empty($nav_colour_modifier) ) $modifier = null;
?>

<!-- PAGE ID'S

Homepage: 7
Featured work: 17
Blog: 19
Contact: 21

-->


<a id="logo" class="<?= $nav_colour_modifier === null ? null : 'text-' . $nav_colour_modifier; ?> logo navbar-brand uppercase text-lg lg:text-2xl tracking-wider z-10" href="/">
	<span class="text-extra-bold">marcusjh</span><span class="text-thin">dev</span>
</a>
