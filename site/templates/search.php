<?php snippet('header') ?>
<main id="mainContent" class="main homePage" role="main">
	<ul class="teaser cf">
		<?php foreach($results as $result): ?>
		<li class="article three-col left">
				<h3><?php echo $result->title()->html() ?></h3>
				<p class="left"><?php echo $result->text()->excerpt(300) ?></p>
				<a class="articleLink" href="<?php echo $result->url() ?>"></a>
		</li>
		<?php endforeach ?>
	</ul>
</main>
<?php snippet('footer') ?>