<?php
use Roots\Sage\Wrapper;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>
    <body data-module="smoothScroll" class="bodyNav" <?php body_class(); ?>>
        <div style="display: none">
            <?php include 'assets/dist/svg/spritesheet.svg' ?>
        </div>
        <!--[if IE]>
            <div class="alert alert-warning">
                <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
            </div>
        <![endif]-->
        <?php
            do_action('get_header');
            get_template_part('templates/04-global/header/header');
        ?>
        <div class="h-full" role="document">
          <main class="main h-full">
              <?php include Wrapper\template_path(); ?>
              <?php
                do_action('get_footer');
                get_template_part('templates/04-global/footer/footer');
                wp_footer();
              ?>
          </main><!-- /.main -->
        </div><!-- /.wrap -->
    </body>
</html>
