<ul class="teaser cf">
  <?php foreach(page('articles')->children()->visible() as $article): ?>
  <li class="article three-col">		
    	<h3 class="left"><?php echo $article->title()->html() ?></h3>
    	<p class="left"><?php echo $article->text()->excerpt(300) ?></p>
			<a class="articleLink" href="<?php echo $article->url() ?>"></a>
  </li>
  <?php endforeach ?>
</ul>
