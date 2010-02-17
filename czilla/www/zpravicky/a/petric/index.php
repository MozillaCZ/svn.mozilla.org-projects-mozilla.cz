<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky autora Pavel Petric');
	$page->setHeadline('Zprávičky autora Pavel Petric', 'Přehled toho nejžhavějšího ze světa Mozilly, autor Pavel Petric');
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
	<h3><a href="/zpravicky/dalsi-vzhled-pro-nvu-0.80-0.81/">Další vzhled pro Nvu 0.80-0.81</a></h3>

	<div>Máme tu další motiv vzhledu pro <a href="http://www.nvu.com/" hreflang="en">Nvu</a> - <a href="http://nvu.mozilla.ru/s-u/theme/0.1a/system-unknown.jar">system unknown</a> (814&nbsp;kB). Má připominat vzhled MS Office 2003 (viz <a href="http://nvu.mozilla.ru/s-u/images/scr1.png">screenshot</a>). K instalaci stačí uložit odkazovaný soubor na disk a ve Nvu zvolit nabídku Nástroje, Themes a motiv dále nainstalovat podobným způsobem jako třeba v <a href="/produkty/thunderbird/">Thunderbirdu</a>. Návod "krok po kroku" pro anglickou verzi <a href="http://www.glazman.org/weblog/dotclear/index.php?2005/02/05/860-first-additional-nvu-theme-now-available" hreflang="en" title="First additional Nvu theme now available - Glazblog">najdete u Dana Glazmana</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/petric/">Pavel Petric</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/22/">22. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
