<?php snippet('header') ?>

	<?php snippet('menu') ?>
	<?php snippet('submenu') ?>

	<section class="page">

		<article>
			<h1><?php echo html($page->title()) ?></h1>
			<div class="content"><?php echo kirbytext($page->text()) ?></div>
		</article>

	</section>

<?php snippet('footer') ?>
