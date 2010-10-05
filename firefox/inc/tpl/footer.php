<hr />
</div>

<div class="links">
<?php
	$this->includeTemplate('menu');
?>
</div>

<div class="foot">
	<hr />
	<p>
		© 2004–2006 <a href="http://www.czilla.cz/czilla/lide.html">CZilla</a>
		© 2009–2010 <a href="http://www.mozilla.cz/o-nas/">Mozilla.cz</a>
		Obsah je dostupný pod licencí <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.cs" 
		title="Více informací o licenci" rel="license">Creative Commons Attribution-Share Alike 3.0</a>
	</p>
</div>
</div>
<?php
	if($this->isWebStat()):
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10350415-6']);
  _gaq.push(['_setDomainName', '.mozilla.cz']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php
	endif;
?>
</body>
</html>
