<?php
	require_once '../../inc/page.php';
	$page->setTitle('Připravuje se Mozilla 1.7.2');
	$page->setHeadline('Připravuje se Mozilla 1.7.2', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/pripravuje-se-mozilla-1.7.2/">Připravuje se Mozilla 1.7.2</a></h3>

	<div>V uplynulém týdnu byly v aplikacích Mozilla objeveny dvě chyby, které nesou označení bezpečnostní. První chyba se týká chybné <a href="http://secunia.com/advisories/12160/" title="Secunia.com: Odkaz na detailní informace o chyb. [Eng.]">manipulace s SSL certifikáty</a>, která dovoluje zlovolným stránkám předstírat, že mají bezpečnostní certifikát, i když jej ve skutečnosti nemají. Postižené produkty jsou Mozilla 1.7.x a Mozilla Firefox 0.x. Chyba byla označena jako středně závažná a byla již <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=253121" title="Bugzilla: bug 253121 - lock icon and certificates spoofable with onunload document.write">opravena</a>.<br /> Druhá chyba se objevila koncem týdne a týká se možného <a href="http://secunia.com/advisories/12188/" title="Securia.com: Odkaz na detailní informace o chyb. [Eng.]">napadnutí rozhraní <abbr title="XML User Interface Language" lang="en">XUL</abbr> vzdáleným XUL souborem</a>, který jej může pozměnit. Postižené produkty jsou Mozilla 1.x a Mozilla Firefox 0.x. Tato chyba byla již částečně <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=244965" title="Bugzilla: bug 244965 - Untrusted web content can display content using &quot;chrome&quot; flag in window.open">odstraněna</a> a na jejím <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=252198" title="Bugzilla: bug 252198 - weak XUL security allows chrome UI spoofing (phishing attack)">úplném odstranění</a> se pracuje.<br /> Aktualizací pro koncové uživatele bude pravděpodobně připravovaná Mozilla 1.7.2 a blížící se Mozilla Firefox 1.0 PR.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/07/31/">31. 7. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/07/31/">Ze stejného dne</a></dd>
				<dd><a href="../2004/07/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

