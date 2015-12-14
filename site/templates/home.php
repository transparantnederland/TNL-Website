<?php snippet('header') ?>
  <main id="mainContent" class="main homePage left" role="main">
    
  
<!--	<div class="logoOverlay"></div>-->
		<header>
			<section class="headerIntro">
				<h2><?php echo $page->slogan()->text() ?></h2>
        		<p><?php echo $page->tagline()->text() ?></p>
        		<a href="search" class="btn btn-2 btn-2a">ontdek de netwerken <span class="icon-loupe"></span></a>
<!--
				<form action="<?php echo page('search')->url() ?>" method="post" class="searchHeader">
					<input placeholder="Doorzoek database" name="q"><button type="submit" class="submitsearch"><span class="icon-loupe"></span></button>
				</form>
-->
			</section>
			<p class="copy"><span class="icon-cc"></span> <span class="icon-cc-zero"></span> photo: Gerrit Vermeulen</p>
		</header>
		<?php snippet('articles') ?>
  </main>
<?php snippet('nieuwsbriefform') ?>   
<?php snippet('footer') ?>