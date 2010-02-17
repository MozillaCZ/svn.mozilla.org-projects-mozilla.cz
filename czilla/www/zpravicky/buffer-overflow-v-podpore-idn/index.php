<?php
	require_once '../../inc/page.php';
	$page->setTitle('Buffer overflow v podpoře IDN');
	$page->setHeadline('Buffer overflow v podpoře IDN', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/buffer-overflow-v-podpore-idn/">Buffer overflow v podpoře IDN</a></h3>

	<div>V produktech <a href="http://www.mozilla.org" hreflang="en">Mozilla.org</a> byla objevena chyba, která zneužívá podporu <abbr title="Internationalized Domain Names" lang="en">IDN</abbr> a umožňuje pomocí dlouhých URL obsahujících znak &quot;soft hypen&quot; potencionální spuštění libovolného kódu. Postiženy jsou <a href="/produkty/firefox/">Firefox</a>, <a href="/produkty/thunderbird/">Thunderbird</a> i <a href="/produkty/suite/">Mozilla Suite</a> v aktuálních a pravděpodobně i starších verzích. K vyvolání chyby je nutná spolupráce uživatele a lze jí předejít vypnutím podpory <abbr title="Internationalized Domain Names" lang="en">IDN</abbr>. Mozilla.org vydala <a href="http://www.mozilla.org/security/idn.html" hreflang="en">dokument vysvětlující chybu a její nápravu</a> a připravuje vydání opravného patche; dá se očekávat i vydání opravných verzí postižených produktů. Podrobnosti lze najít také <a href="http://www.mozillazine.org/talkback.html?article=7307" hreflang="en" title="Mozilla Firefox Link Buffer Overflow Allows Arbitrary Code Execution - MozillaZine Talkback">na serveru MozillaZine</a>.<br /> <strong>Aktualizace</strong>: Oprava je nyní <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/releases/1.0.6/patches/" title="Oprava ke stažení">k dispozici ke stažení</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/09/10/">10. 9. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/seamonkey/">SeaMonkey</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dd><a href="/zpravicky/s/thunderbird/">Thunderbird</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/09/10/">Ze stejného dne</a></dd>
				<dd><a href="../2005/09/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

