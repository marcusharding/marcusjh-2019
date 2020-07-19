<?php
 $content = get_field('content', $id);
 $tags = get_the_tags($id);
 $thumbnail = get_the_post_thumbnail($id);
 $siteLink = get_field('site_link', $id);
 $caption_a = get_field('caption_a', $id);
 $hero_image_b = get_field('hero_image_b', $id);
 $block_colour = get_field('block_colour', $id);
 $project_type = get_field('project_type', $id);

 use marcusjh\lib\Extras;
 use marcusjh\lib\Utils;


$nav_colour_modifier = get_field('nav_colour_modifier', $id);
if ( empty($nav_colour_modifier) ) $modifier = null;

 $projects = get_posts(array(
	'post_type'   => 'featured Work',
  'post_status' => 'publish',
	'posts_per_page' => -1,
	)
);

$random_int = rand(0, sizeOf($projects));
$random_projects = $projects[$random_int];

$testimonials = get_posts(array(
  'post_type'   => 'testimonials',
  'post_status' => 'publish',
  'posts_per_page' => 1,
  )
);

foreach($testimonials as $i => $testimonial):
  $id = $testimonial->ID;
  $testimonialText = get_field('testimonial', $id);
  $provider = get_field('testimonial_provider', $id);
  $position = get_field('position', $id);
  $company = get_field('company', $id);
endforeach;

?>

<div class="wrapper py-12 lg:py-24">
  <div class="lg:w-1/2">
    <h1 class="text-bold text-2xl lg:text-3xl">The outcome</h1>
    <h1 class="text-xl lg:text-2xl"><?= $caption_a; ?></h1>
  </div>
</div>

<div class="hero-section__container">
  <div class="aspect-ratio w-full h-full">
    <img alt="" draggable="false" class="absolute inset-0 object-cover w-full h-full" src="<?= $hero_image_b; ?>"> </img>
  </div>
</div>

<div class="wrapper flex flex-col lg:flex-row lg:justify-between py-12 lg:py-24">
  <div class="flex items-end pb-8 lg:pb-0 visit-project-site">
    <a href="<?= $siteLink; ?>" target="_blank" class="text-2xl underline">Visit Site</a>
  </div>
  <div>
    <h1 class="text-bold text-2xl lg:text-3xl"><?= $project_type; ?></h1>
    <?php if(!empty($tags)): ?>
      <div class="flex flex-col">
        <?php foreach($tags as $i => $tag): ?>
          <p class="text-xl lg:text-2xl"><?= $tag->name; ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div class="h-auto py-24 hero-section__container" style="background-color:<?= $block_colour;?>;">
  <div class="wrapper relative">
    <blockquote class="pb-12 <?= $nav_colour_modifier === null ? null : 'blockquote--' . $nav_colour_modifier; ?>">
      <P class="<?= $nav_colour_modifier === null ? null : 'text-' . $nav_colour_modifier; ?> text-md lg:text-2xl"><?= wp_trim_words($testimonialText, 70, '...') ?></P>
    </blockquote>
    <p class="text-bold text-lg pb-2 <?= $nav_colour_modifier === null ? null : 'text-' . $nav_colour_modifier; ?>"><?= $provider; ?></p>
    <p class="text-md pb-2 <?= $nav_colour_modifier === null ? null : 'text-' . $nav_colour_modifier; ?>"><?= $position; ?></p>
    <p class="text-md pb-2 <?= $nav_colour_modifier === null ? null : 'text-' . $nav_colour_modifier; ?>"><?= $company; ?></p>
  </div>
</div>

<?php var_dump($random_projects); ?>

<div class="wrapper py-12 lg:py-24">
  <p class="text-xl text-semiBold">Related Projects</p>
  <?= Utils\ob_load_template_part('templates/02-partials/featured_work/featured_work' , [
    'projects' => $random_projects,
    'heroProjectModifier' => false
	]); ?>
</div>
