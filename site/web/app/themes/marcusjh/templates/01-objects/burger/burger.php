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

<a data-module="mobileMenu" id="mobileMenu" data-menu-button aria-controls='site-nav' aria-expanded='false' class="o-burger flex relative z-20 cursor-pointer lg:hidden">
	<span class="visuallyhidden">Open Menu</span>
	<button class="hamburger hamburger--slider" type="button">
  		<span class="hamburger-box">
    		<span class="hamburger-inner <?= $nav_colour_modifier === null ? 'hamburger-modifier-black' : 'hamburger-modifier-' . $nav_colour_modifier; ?>"></span>
  		</span>
	</button>
</a>
