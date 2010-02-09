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
		Obsah je dostupný pod licencí <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.cs" title="Více informací o licenci">Creative Commons Attribution-Share Alike 3.0</a>
	</p>
</div>
</div>
<?php
	if($this->isWebStat()):
?>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
		var pageTracker = _gat._getTracker("UA-10350415-1");
		pageTracker._setDomainName(".mozilla.cz");
		pageTracker._trackPageview();
	} catch(err) {}
</script>
<?php
	endif;
?>
</body>
</html>
