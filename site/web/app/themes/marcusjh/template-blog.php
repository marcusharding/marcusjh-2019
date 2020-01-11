<?php
/**
 * Template Name:  Blog Template
 */
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

$quotes = get_posts(array(
    'post_type'   => 'quotes',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    )
);
?>

<!-------------------------
PAGE HERO
--------------------------->
<section class="relative bg-primary h-full">
  <div class="wrapper flex justify-center items-center flex-col h-full text-left lg:text-center">
    <h1 class="text-white text-2xl lg:text-4xl text-bold w-full">Coming Soon</h1>
    <p class="text-white text-xl lg:text-2xl text-light">Check back for blog posts in the near future</p>
  </div>
</section>

<!-------------------------
 QUOTE OF THE DAY
--------------------------->
<section class="bg-grey-700 h-screen flex flex-col justify-center">
	<div class="wrapper py-24">
		<p class="text-white uppercase py-12 text-xl text-bold">Quote of the day</p>
		<?= Utils\ob_load_template_part('templates/03-components/quote/quote' , [
			'quotes' => $quotes
		]); ?>
	</div>
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
