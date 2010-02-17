<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla 1.7 Alpha');
	$page->setHeadline('Mozilla 1.7 Alpha', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/mozilla-1.7-alpha/">Mozilla 1.7 Alpha</a></h3>

	<div>Vyšla <a href="http://www.mozilla.org/releases/mozilla1.7a/">Mozilla 1.7a</a>. Vylepšeno bylo blokování pop-up oken, ukládání stahovaných souborů na disk, implementována je podpora více identit jednoho mailového účtu (bez uživatelského rozhraní), v nastavení je možno zapnout plynulé posouvání, v poštovním klientu přibyla podpora editace adres se jmény ve tvaru "Příjmení, Jméno". Vylepšena byla i Chatzilla (příkaz /ignore, změna písma), opět bylo zrychleno renderovací jádro Gecko a mnohem více (<a href="http://www.mozilla.org/releases/mozilla1.7a/README.html#new">kompletní novinky</a>, <a href="http://www.mozilla.org/releases/mozilla1.7a/changelog.html">changelog</a>, <a href="http://www.mozilla.org/releases/mozilla1.7a/">poznámky k verzi</a>). Upozorňujeme, že Mozilla 1.7a neumožňuje nastavit lokalizované prostředí pomocí preferencí (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=235058">bug 235058</a>). Mozilla 1.7a je ke stažení z <a href="http://ftp.mozilla.org/pub/mozilla.org/mozilla/releases/mozilla1.7a/">ftp.mozilla.org</a>, verze pro <a href="http://www.slunecnice.cz/product/Mozilla/">Linux, Mac i Windows</a> můžete stáhnout i ze <a href="http://www.slunecnice.cz/">Slunečnice</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/aha/">Adam Hauner</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/02/24/">24. 2. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

