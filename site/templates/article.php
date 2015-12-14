<?php snippet('header') ?>
  <main id="mainContent" class="main articleContent" role="main">
    <a href="/" class="homeBtn"></a>
		<header class="articleHeader">
			<h1><?php echo $page->title()->html() ?></h1>
		</header>
		<section class="articleBody">
			<div class="text">
				<?php echo $page->text()->kirbytext() ?>

				
			</div>
		</section>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; <paper-ripple fit></paper-ripple></a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">&rarr; <paper-ripple fit></paper-ripple></a>
      <?php endif ?>
    </nav>
  </main>
  <?php if(!$page->related()->empty()): ?>
  <section class="related">
    <div class="wrapper">
      <h2>Wat trekt jouw aandacht?</h2>
      <ul>
        <?php foreach($page->related()->pages() as $item): ?>
        <li>
          <a href="<?php echo $item->url() ?>">
            <?php echo $item->title()->html() ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </section>
  <?php endif ?>

<?php snippet('footer') ?>