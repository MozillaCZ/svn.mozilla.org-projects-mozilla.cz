<?php
	require_once '../../inc/page.php';
	$page->setTitle('Spotřeba paměti ve Firefoxu 1.5');
	$page->setHeadline('Spotřeba paměti ve Firefoxu 1.5', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/spotreba-pameti-ve-firefoxu-1.5/">Spotřeba paměti ve Firefoxu 1.5</a></h3>

	<div>Jak už si i někteří naši uživatelé
<a title="Příspěvek ve fóru" href="http://forum.czilla.cz/viewtopic.php?t=12237">všimli</a>, <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefox 1.5</a> občas spotřebovává více paměti než je nutno, což je způsobeno neuvolněním některé nárokované paměti při některých operacích - ať již v samotném programu, v některém z nainstalovaných rozšíření, či spuštěné webové aplikaci - tzv. <a href="http://en.wikipedia.org/wiki/Memory_leak" hreflang="en" title="Wikipedia">memory leak</a>.
Ve Firefoxu 1.5.0.1, který <a href="/archiv.html#news:f5a199e5f22220d9d8cad1a41020486c" title="Firefox 1.5.0.1">vyšel tento týden</a>, byly dvě takovéto chyby (bug <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=316775"  hreflang="en" title="Bugzilla: bug 316775">316775</a>, bug <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=317478"  hreflang="en" title="Bugzilla: bug 317478">317478</a>) již opraveny. <a href="http://tinyurl.com/bcbts" hreflang="en" title="Bugzilla: opravené chyby s příznakem mlk">Další chyby v unikání paměti</a> jsou již opraveny ve vývojové větvi a řada z těchto oprav bude dostupná ve Firefoxu 1.5.0.2, který je plánován na březen. Pomocí nástroje <a href="http://www.squarefree.com/2006/01/13/memory-leak-detection-tool/" hreflang="en" title="Souhrný článek o nástroji leak-gauge">leak-gauge</a>  byly nalezeny podobné chyby i v některých populárních rozšíření jako jsou <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=324864" hreflang="en" title="Bugzilla: bug 324864">Session saver</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=324817" hreflang="en" title="Bugzilla: bug 324817">NoScript</a> a <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=324793" hreflang="en" title="Bugzilla: bug 324793">IE Tab</a>. Další informace o této tématice přináší článek <a href="http://www.squarefree.com/2006/02/04/memory-leak-progress/" hreflang="en">Jesse Rudermanana</a>.
</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/02/04/">4. 2. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/02/04/">Ze stejného dne</a></dd>
				<dd><a href="../2006/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

