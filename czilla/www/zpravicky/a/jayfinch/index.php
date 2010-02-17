<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky autora JayFinch');
	$page->setHeadline('Zprávičky autora JayFinch', 'Přehled toho nejžhavějšího ze světa Mozilly, autor JayFinch');
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
	<h3><a href="/zpravicky/rozsireni-prefbar-2.3/">Rozšíření Prefbar 2.3</a></h3>

	<div>Po dlouhé době vyšla nová verze rozšíření pro zkušenější uživatele <a href="http://prefbar.mozdev.org/">Prefbar</a>. Přidává lištu, pomocí které si snadno přepnete nastavení zobrazování obrázků, JavaScriptu, proxy serveru atd. Mezi <a href="http://prefbar.mozdev.org/help/newstuff.html#v2.3">novinkami verze 2.3</a> je plná podpora Firefoxu nebo možnost spouštět externí aplikace z lišty. Ke stažení nabízíme <a href="http://downloads.mozdev.org/prefbar/prefbar2.3.xpi">instalační XPI</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/jayfinch/">JayFinch</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/08/12/">12. 8. 04</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
