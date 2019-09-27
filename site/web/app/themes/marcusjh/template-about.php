<?php
/**
 * Template Name:  About Template
 */

use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
?>

<!-------------------------
PAGE HERO
--------------------------->
<section class="relative h-screen">
    <?= Utils\ob_load_template_part('templates/03-components/generic_hero/generic_hero'); ?>
</section>


<!-------------------------
LETS WORK TOGETHER
--------------------------->
<section class="bg-primary py-24">
	<div class="wrapper text-center">
		<p class="uppercase text-white text-xl text-bold pb-8">Lets work together</p>
		<p class="text-white pb-8">Have a potential project idea? Then lets talk.</p>
		<a href="/contact" class="btn btn--white">contact</a>
	</div>
</section>