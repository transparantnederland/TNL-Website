<ul class="teaser cf">
  <?php foreach(page('voorbeelden')->children()->visible() as $article): ?>
  <li class="article three-col left">
		
    	<h3 class="left"><?php echo $article->title()->html() ?></h3>
    	<p class="left"><?php echo $article->text()->excerpt(300) ?></p>
			<a class="articleLink" href="<?php echo $article->url() ?>"></a>
  </li>
  <?php endforeach ?>
</ul>
