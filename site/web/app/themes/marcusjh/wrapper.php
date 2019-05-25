
<!DOCTYPE html>
<html lang="en">
    <!-- Pulling in head content -->
    <?php get_template_part('head'); ?>
    <!-- BODY CONTENT -->
    <body id="page-top" <?php body_class();?>>
        <!-- PAGE CONTENT -->
        <div>
            <!-- Grab the header -->
            <?php
                do_action('get_header');
                get_template_part('templates/header');
            ?>

            <main>
                <div data-route>
                    <?php include Wrapper\template_path(); ?>
                </div>
            </main>

            <p id="back-top">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </p>

            <?php
                do_action('get_footer');
                get_template_part('templates/footer');
            ?>
        </div>
    </body>
</html>