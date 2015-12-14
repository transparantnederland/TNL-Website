<?php snippet('header') ?>
  <main id="mainContent" class="main articleContent" role="main">
    <a href="/" class="homeBtn"></a>
    <section class="service">
      <iframe src="<?php echo $page->iframe()->html() ?>" width="100%" height="100%"></iframe>
    </section>
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