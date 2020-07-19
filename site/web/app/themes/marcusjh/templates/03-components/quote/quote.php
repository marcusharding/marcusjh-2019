
<?php if( $quote ): ?>
    <?php
    $id = $quote->ID;
    $quoteText = get_field('quote', $id);
    $quoter = get_field('quoter', $id);
    ?>

    <p class="text-white text-2xl lg:text-4xl py-12 quote text-bold"><?= $quoteText; ?></p>
    <p class="text-white py-12"><?= $quoter; ?></p>
<?php endif; ?>
