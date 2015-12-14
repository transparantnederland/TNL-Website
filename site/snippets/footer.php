
<section class="colophon one-col left">
  <p>&copy; Transparant Nederland 2015 - Download de stijlgids <a href="styleguide.pdf" target="_blank">hier</a></p>
</section>
<script>
	function setMenuMargin(){
		var headerHeight = document.getElementById('header').offsetHeight;
		document.querySelector(".homePage header").style.marginTop = headerHeight - 1 +  'px';
		document.getElementById("about").style.top = headerHeight - 1 + 'px';
		console.log(headerHeight);
	}
  setMenuMargin();
  window.addEventListener("resize", setMenuMargin);
	$('.aboutBtn').click(function(){
		$('.about').toggleClass('active');
		$('.main').toggleClass('unactive');
    	$('body').toggleClass('unactive');
	});

	$('.closePanel').click(function(){
		$('.about').toggleClass('active');
		$('.main').toggleClass('unactive');
    $('body').toggleClass('unactive');
	});
</script>
<!-- Piwik -->
<script type="text/javascript">
 var _paq = _paq || [];
 _paq.push(['trackPageView']);
 _paq.push(['enableLinkTracking']);
 (function() {
   var u="//stats.waag.org/";
   _paq.push(['setTrackerUrl', u+'piwik.php']);
   _paq.push(['setSiteId', 5]);
   var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
   g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
 })();
</script>
<noscript><p><img src="//stats.waag.org/piwik.php?idsite=5" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>
</html>