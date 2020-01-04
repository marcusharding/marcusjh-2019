<!----------
HEADER
------------>

<?php
use marcusjh\lib\Extras;
use marcusjh\lib\Utils;
?>

<header data-module="siteHeader" id="siteHeader" class="header">
	<div class="header-wrapper flex justify-between">
		<!-- Include logo -->
		<?= Utils\ob_load_template_part('templates/01-objects/logo/logo.php' , [
		]); ?>
		<!-- Include nav -->
		<?= Utils\ob_load_template_part('templates/04-global/nav/nav.php' , [
		]); ?>
		<!-- Include burger -->
		<?= Utils\ob_load_template_part('templates/01-objects/burger/burger.php' , [
		]); ?>
	</div>
	<!-- END Global navigation -->
</header>

