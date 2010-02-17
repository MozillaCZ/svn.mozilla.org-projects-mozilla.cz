<?php
	require_once '../../inc/page.php';
	$page->setTitle('Leak Monitor Extension');
	$page->setHeadline('Leak Monitor Extension', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/leak-monitor-extension/">Leak Monitor Extension</a></h3>

	<div><a href="http://jasnapaka.bloguje.cz/" title="JasnaPaka Blog">Pavel Cvrček</a> informuje <a href="http://jasnapaka.bloguje.cz/322296-jak-ve-firefoxu-hledat-memory-leaky-ii.html" title="Jak ve Firefoxu hledat memory leaky II">o vydání rozšíření</a> pro hledání nekorektně uvolňované paměti (tzv. memory leaků) ve <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a>, jeho rozšířeních i webových stránkách.
Rozšíření <a href="http://dbaron.org/mozilla/leak-monitor/" title="Leak Monitor Extension" hreflang="en">Leak Monitor Extension</a> od <a href="http://dbaron.org/" title="David Baron: Domovská stránka" hreflang="en">Davida Barona</a> si jednoduše <a href="https://addons.mozilla.org/firefox/2490/" hreflang="en" title="Mozilla Add-ons: Leak Monitor">nainstalujete</a> a případné nalezené úniky nahlásíte do <a href="http://bugzilla.mozilla.org/" title="Bugzilla: Domovská stránka" hreflang="en">Bugzilly</a>. Pavel Cvrček Vám při tom <a href="http://jasnapaka.bloguje.cz/322296-jak-ve-firefoxu-hledat-memory-leaky-ii.html" title="Jak ve Firefoxu hledat memory leaky II">nabízí pomocnou ruku</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/mik/">Michal Kec</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/05/09/">9. 5. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/rozsireni/">Rozšíření</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/05/09/">Ze stejného dne</a></dd>
				<dd><a href="../2006/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
