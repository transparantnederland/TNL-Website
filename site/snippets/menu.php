<nav role="navigation">

  <ul class="menu cf">
		<li>
			<a class="logo" href="<?php echo url() ?>"></a>
		</li>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

<!--
      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>
-->

    </li>
    <?php endforeach ?>
<!--
		<li>
			<form action="<?php echo page('search')->url() ?>" method="post" class="searchHeader">
				<input placeholder="Doorzoek database" name="q"><button type="submit" class="submitsearch"><span class="icon-loupe"></span></button>
		</form>
		</li>
-->
		<li><a href="#over" class="aboutBtn">Over ons</a></li>
  </ul>

</nav>
