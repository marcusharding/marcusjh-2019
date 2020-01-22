<?php
/**
 * Template Name:  Contact Template
 */
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
?>


<!-------------------------
CONTACT FORM
--------------------------->
<section class="bg-primary h-full flex justify-center items-center relative">
    <div class="wrapper pt-24 pb-12 lg:py-24 relative">
        <p class="hidden md:block uppercase text-white text-xl text-bold pb-8">Contact me</p>
        <?= Utils\ob_load_template_part('templates/05-forms/lets-work-together/lets-work-together', [
            'shortcode' => get_field('form_shortcode')
        ]); ?>
    </div>
</section>

