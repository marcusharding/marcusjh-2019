<?php
/**
 * Template Name:  Blog Template
 */
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;

if ( false === ( $quotes = get_transient( 'random_quote' ) ) ) {
  // It wasn't there, so regenerate the data and save the transient

$args = array(
  'post_type'   => 'quotes',
  'orderby'   => 'rand',
  'posts_per_page' => '1',
  'post_status' => 'publish',
);

$quotes = get_posts( $args );

 //Now we store the array for one day.
  $seconds_until_next_day = strtotime('tomorrow') - time();
  set_transient( 'random_quote', $quotes, $seconds_until_next_day );
}

$blogPosts = get_posts(array(
	'post_type'   => 'post',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	)
);
?>

<!-------------------------
PAGE HERO
--------------------------->
<section class="py-12 lg:py-24 h-auto flex flex-col justify-center items-center">
  <div class="py-24 lg:py-32 wrapper flex flex-col lg:flex-row justify-between">
    <p class="text-primary text-3xl lg:text-5xl text-SemiBold w-full pb-12 lg:pb-0">My Blog.</p>
    <div class="flex flex-col lg:items-end">
    <p class="text-primary pb-6 text-xl text-bold">Find Out</p>
    <p class="text-primary text-xl lg:text-right">Everything related to Web Development, Client and personal projects plus much more</p>
    </div>
  </div>
	<div class="wrapper-90">
		<?= Utils\ob_load_template_part('templates/02-partials/blog_posts/blog_posts' , [
      'blogPosts' => $blogPosts,
		]); ?>
	</div>
</section>

<!-------------------------
 QUOTE OF THE DAY
--------------------------->
<section class="hero-section__container bg-grey-700 h-screen flex flex-col justify-center mb-24">
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
