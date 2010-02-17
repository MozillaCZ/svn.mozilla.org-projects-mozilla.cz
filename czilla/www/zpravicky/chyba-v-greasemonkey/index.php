<?php
	require_once '../../inc/page.php';
	$page->setTitle('Chyba v Greasemonkey');
	$page->setHeadline('Chyba v Greasemonkey', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/chyba-v-greasemonkey/">Chyba v Greasemonkey</a></h3>

	<div><a href="http://greasemonkey.mozdev.org/" hreflang="en">Greasemonkey</a> umožňuje každé stránce, na které je spuštěn nějaký uživatelský skript, přečíst obsah lokálních souborů. Než bude chyba odstraněna, Greasemonkey se nedoporučuje používat. V opravné verzi <a href="http://atrus.org/hosted/greasemonkey-0.3.5.xpi">1.3.5</a> je bezpečnost vykoupena funkčností &ndash; složitější skripty v této verzi nebudou fungovat. Více informací v <a href="http://greaseblog.blogspot.com/2005/07/mandatory-greasemonkey-update.html" hreflang="en">oznámení</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/matousek/">Jan Matoušek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/19/">19. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/rozsireni/">Rozšíření</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/07/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

