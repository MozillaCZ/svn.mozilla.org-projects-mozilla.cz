<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla Suite také postižena cross-site scriptingem');
	$page->setHeadline('Mozilla Suite také postižena cross-site scriptingem', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/mozilla-suite-take-postizena-cross-site-scriptingem/">Mozilla Suite také postižena cross-site scriptingem</a></h3>

	<div><a href="http://secunia.com/advisories/15296/" title="Secunia - Advisories - Mozilla &quot;IFRAME&quot; JavaScript URL Cross-Site Scripting" hreflang="en">Secunia oznámila</a>, že chyba s cross-site scriptingem prostřednictvím elementu <code>&lt;iframe&gt;</code>, která byla nalezena u <a href="/produkty/firefox/">Firefoxu</a>, postihuje také <a href="/produkty/suite/">Mozilla Suite</a>. Více informací o chybě najdete v <a href="/bezpecnost-archiv.html#news:378a1d5546d9da5c27705f7bdf44647d" title="Objeveny vážné bezpečnostní chyby ve Firefoxu 1.0.3">dřívějších</a> <a href="/bezpecnost-archiv.html#news:ec6a70262abac35a73dcc039a852ad9d" title="Další informace o aktuálních bezpečnostních problémech Firefoxu">novinkách</a>. Jedinou známou ochranou proti možnému zneužití chyby je úplné vypnutí JavaScriptu. V brzké době se dá předpokládat vydání opravené Mozilla Suite 1.7.8.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/11/">11. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/05/11/">Ze stejného dne</a></dd>
				<dd><a href="../2005/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
