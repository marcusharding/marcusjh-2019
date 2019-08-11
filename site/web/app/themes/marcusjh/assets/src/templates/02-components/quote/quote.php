<?php
$quotes = get_posts(array(
    'post_type'   => 'quotes',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    )
);
?>

<?php if( $quotes ): ?>
    <div class="wrapper h-screen flex flex-col justify-center">
        <?php foreach($quotes as $quote): ?> 

            <?php 
            $id = $quote->ID;
            $quoteText = get_field('quote', $id); 
            $quoter = get_field('quoter', $id); 
            ?>

            <p class="text-white uppercase py-12 text-lg text-medium">Quote of the day</p>
            <p class="text-white text-4xl py-12 quote text-bold"><?= $quoteText; ?></p>
            <p class="text-white py-12"><?= $quoter; ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>