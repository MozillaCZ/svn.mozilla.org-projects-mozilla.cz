<?php
	require_once '../../inc/page.php';
	$page->setTitle('Přesun ftp.mozilla.org');
	$page->setHeadline('Přesun ftp.mozilla.org', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/presun-ftp.mozilla.org/">Přesun ftp.mozilla.org</a></h3>

	<div>V souvislosti s <a href="http://www.mozillazine.org/articles/article3763.html" title="ftp.mozilla.org Moving Servers Next Wednesday">nedávným přesunem</a> ftp.mozilla.org na nový server je zapotřebí změnit odkazy na nové verze Mozilly :-( Místo v <em>/pub/mozilla/releases/</em> se nyní nachází v <a href="ftp://ftp.mozilla.org/pub/mozilla.org/mozilla/releases/">/pub/mozilla.org/mozilla/releases/</a>. Nezapomeňte upravit odkazy na svých stránkách (tato změna postihuje i české mirrory). (Pozn.: Pokud se na ftp.mozilla.org odkazujete jako <a href="http://ftp.mozilla.org/">http://ftp.mozilla.org/</a>, tak nic měnit nemusíte :-)</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/10/13/">13. 10. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/10/13/">Ze stejného dne</a></dd>
				<dd><a href="../2003/10/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
