<?php
	require_once '../../inc/page.php';
	$page->setTitle('Nové projekty na mozdev.org');
	$page->setHeadline('Nové projekty na mozdev.org', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/nove-projekty-na-mozdev.org/">Nové projekty na mozdev.org</a></h3>

	<div>Na <a href="http://www.mozdev.org">mozdev.org</a> se objevily zajímavé projekty. <a href="http://dailycomics.mozdev.org/">Dailycomics</a> je Delphi aplikace, která vám zobrazí "komix pro tento den". Pro zobrazení výstupu používá Mozillí Gecko. Zatím je jen verze pro Windows, Linux je v plánu. <a href="http://expatcom.mozdev.org/">eXPatCOM</a> je XPCOM komponenta, která vám umožní používat v javascriptu Mozilly XML parser Expat pomocí klasického callbackového rozhraní.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/04/09/">9. 4. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/04/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

