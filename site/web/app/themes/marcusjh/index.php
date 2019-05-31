<?php 
 use Roots\Sage\Wrapper;
?>


<!DOCTYPE html>
<html lang="en">
    <!-- Pulling in head content -->
    <?php get_template_part('templates/head'); ?>
    <!-- BODY CONTENT -->
    <body id="page-top" <?php body_class();?>>
        <!-- PAGE CONTENT -->
            <!-- Grab the header -->
            <?php
					do_action('get_header');
					get_template_part('templates/header');
            ?>
            
            <main>
                <body id="page-top">
                    <?php include Wrapper\template_path(); ?>
                </body>
            </main>

            <p id="back-top">
                <a href="#top"><i class="fa fa-angle-up"></i></a>
            </p>

            <?php
					do_action('get_footer');
					get_template_part('templates/footer');
			?>
            </body>
</html>