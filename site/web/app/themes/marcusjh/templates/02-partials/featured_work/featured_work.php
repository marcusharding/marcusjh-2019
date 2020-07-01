<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
global $post;

$heroProjectModifier === true ? $heroProject = "featuredWorkLoop" : $heroProject = null;

$slides = array();
foreach($projects as $i => $slide):
    $slides[] =  Utils\ob_load_template_part('templates/07-slides/slide-featured-work', [
        'slide' => $slide,
        'index' => $i
    ]);
endforeach;
?>

<!-- PAGE ID'S

Homepage: 7
Featured work: 17
Blog: 19
Contact: 21
-->

<?php if(isset($projects)): ?>
  <!-- Desktop -->
  <div <?php if(isset($heroProject)):?>
          data-module="<?= $heroProject; ?>"
        <?php endif; ?>
    class="lg:flex <?= $post->ID === 7 ? null : 'lg:flex-wrap'; ?> justify-between <?= $post->ID === 7 ? 'hidden' : null; ?>">

    <?php foreach ($projects as $i => $project) : ?>

      <?php if($post->ID === 7): ?>
        <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-featured-work' , [
          'project' => $project,
          'index' => $i,
        ]); ?>
      <?php endif; ?>

      <?php if(!isset($post->ID) || ($post->ID != 7)): ?>
        <?= Utils\ob_load_template_part('templates/03-components/teaser/teaser-featured-work-main' , [
          'project' => $project,
          'index' => $i,
        ]); ?>
      <?php endif; ?>

    <?php endforeach; ?>
  </div>

    <!-- mobile -->
  <div class="<?= $post->ID != 7 ? 'hidden' : null; ?> lg:hidden">
    <?= Utils\ob_load_template_part('templates/06-container/carousel/carousel' , [
        'id' => 'workCarousel',
        'overflow' => 'visible',
        'pagination' => true,
        'options' => [
            'perView' => 1,
            'peek' => [
                'before' => 0,
                'after' => 100
            ],
            'breakpoints' => [
              '640' => [
                'perView' => 1,
                'peek' => [
                  'before' => 0,
                  'after' => 50
              ],
              'focusAt' => 0,
            ],
            ],
        ],
        'slides' => $slides
    ]); ?>
  </div>
<?php endif; ?>
