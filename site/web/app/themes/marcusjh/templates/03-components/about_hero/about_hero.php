<?php

use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
$heading = get_field('header_text');
$laptopImg = get_field('header_img');

?>

<div class="wrapper relative flex justify-between">
    <p class="text-white text-4xl text-bold w-full z-10"><?= $heading; ?></p>
    <img class="w-2/3 absolute right-0 laptop_img opacity-75" src="<?= $laptopImg; ?>"/>
</div>
