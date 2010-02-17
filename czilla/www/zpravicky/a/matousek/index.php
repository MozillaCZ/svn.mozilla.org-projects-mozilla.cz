<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky autora Jan Matoušek');
	$page->setHeadline('Zprávičky autora Jan Matoušek', 'Přehled toho nejžhavějšího ze světa Mozilly, autor Jan Matoušek');
	$page->includeTemplate('header');
?>
<div id="navigation">
	Vybrat zprávičky aktivních autorů:
						<a href="/zpravicky/a/majda/">David Majda</a>

		|
						<a href="/zpravicky/a/hassman/">Martin Hassman</a>

		|
						<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>

		|
						<a href="/zpravicky/a/mik/">Michal Kec</a>

		|
						<a href="/zpravicky/a/petrovicky/">Lukáš Petrovický</a>

		|
						<a href="/zpravicky/a/aha/">Adam Hauner</a>

		|
						<a href="/zpravicky/a/franc/">Pavel Franc</a>

		|
						<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>

		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>

<div class="news">
	<h3><a href="/zpravicky/chyba-v-greasemonkey/">Chyba v Greasemonkey</a></h3>

	<div><a href="http://greasemonkey.mozdev.org/" hreflang="en">Greasemonkey</a> umožňuje každé stránce, na které je spuštěn nějaký uživatelský skript, přečíst obsah lokálních souborů. Než bude chyba odstraněna, Greasemonkey se nedoporučuje používat. V opravné verzi <a href="http://atrus.org/hosted/greasemonkey-0.3.5.xpi">1.3.5</a> je bezpečnost vykoupena funkčností &ndash; složitější skripty v této verzi nebudou fungovat. Více informací v <a href="http://greaseblog.blogspot.com/2005/07/mandatory-greasemonkey-update.html" hreflang="en">oznámení</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/matousek/">Jan Matoušek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/19/">19. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mouse-gestures-pro-mozillu-firefox-a-thunderbird/">Mouse Gestures pro Mozillu, Firefox a Thunderbird</a></h3>

	<div>Oblíbené rozšíření <a href="http://optimoz.mozdev.org/gestures/index.html" hreflang="en" lang="en">Mouse Gestures</a> umožňující snadné ovládání Mozilly, Firefoxu či Thunderbirdu pomocí gest myši dosáhlo verze 1.0. Přibylo definování vlastních gest, využítí kolečka myši, vyvolání záložky podle klíčového slova a možnost odinstalování i pro Mozilla Suite. Česká lokalizace je součástí <a href="http://downloads.mozdev.org/optimoz/mozgest_1_0.xpi">oficiálního balíčku</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/matousek/">Jan Matoušek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/09/29/">29. 9. 04</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
