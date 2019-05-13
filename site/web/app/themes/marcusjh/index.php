<!-- Pulling in header -->
<?php get_header(); ?>

<!-- Test Post -->
<div class="container">
    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'templates/test_post', get_post_format() );
        endwhile; endif;
    ?>
</div>

<!-- Main Body of content -->
<?php get_template_part('body_content', get_post_format() ); ?>

<!-- Footer -->
<?php get_footer(); ?>