<?php
use Roots\Sage;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>
    <body <?php body_class(); ?>>
        <!--[if IE]>
            <div class="alert alert-warning">
                <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
            </div>
        <![endif]-->
        <?php
            do_action('get_header');
            get_template_part('./assets/src/templates/04-global/header/header');
        ?>
        <div class="" role="document">
            <div class="">
                <main class="main">
                    <?php include Sage\template_path(); ?>
                </main><!-- /.main -->
                <?php if (false) : ?>
                    <aside class="sidebar">
                        <?php include Sage\sidebar_path(); ?>
                    </aside><!-- /.sidebar -->
                <?php endif; ?>
            </div><!-- /.content -->
        </div><!-- /.wrap -->
        <?php
            do_action('get_footer');
            get_template_part('./assets/src/templates/04-global/footer/footer');
            wp_footer();
        ?>
    </body>
</html>