<?php
	require_once '../../inc/page.php';
	$page->setTitle('Minotaur');
	$page->setHeadline('Minotaur', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/minotaur/">Minotaur</a></h3>

	<div>Projekt <a href="http://www.mozilla.org/mailnews/minotaur/">Minotaur</a> se snaží vytvořit poštovního klienta založeného na stávajícím poštovním klientovi Mozilly. Inspiruje se projektem <a href="http://www.mozilla.org/projects/phoenix/">Phoenix</a>, který úspěšně činí totéž pro webový prohlížeč. První verzi 0.1a lze nalézt na <a href="http://ftp.mozilla.org/pub/minotaur/">ftp.mozilla.org</a>. Zatím se jedná pouze o oddělení kódu z Mozilly 1.3.20030313.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/03/31/">31. 3. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/03/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

