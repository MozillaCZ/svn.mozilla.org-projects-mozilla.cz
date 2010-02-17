<?php
	require_once '../../inc/page.php';
	$page->setTitle('Firefox bude podstatně rychleji načítat již zobrazené stránky díky DOM cache');
	$page->setHeadline('Firefox bude podstatně rychleji načítat již zobrazené stránky díky DOM cache', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/firefox-bude-podstatne-rychleji-nacitat-jiz-zobrazene-stranky-diky-dom-cache/">Firefox bude podstatně rychleji načítat již zobrazené stránky díky DOM cache</a></h3>

	<div>Vývojáři <a href="http://www.mozilla.org/newlayout/" title="Mozilla Layout Engine" hreflang="en">Gecka</a> dnes <a href="http://weblogs.mozillazine.org/chase/archives/008085.html" title="chase's blog - Fastback Inside!" hreflang="en">začlenili do vývojového stromu patch</a>, který umožňuje kešování informací o <abbr title="Document Object Model" lang="en">DOM</abbr> zobrazené stránky. Pro uživatele to znamená, že v budoucích verzích <a href="/produkty/firefox/">Firefoxu</a> bude načtení předešlé stránky pomocí tlačítka Zpět mnohem rychlejší. Celá funkce není ještě zdaleka odladěná, nicméně případní nedočkaví odvážlivci si můžou <em>na vlastní nebezpečí</em> stáhnout noční sestavení Firefoxu a po zapnutí příslušné předvolby v <tt>about:cofig</tt> si začít hrát.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/05/">5. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/05/05/">Ze stejného dne</a></dd>
				<dd><a href="../2005/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
