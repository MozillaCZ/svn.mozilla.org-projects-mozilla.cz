<?php
	require_once '../../inc/page.php';
	$page->setTitle('Další informace o aktuálních bezpečnostních problémech Firefoxu');
	$page->setHeadline('Další informace o aktuálních bezpečnostních problémech Firefoxu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/dalsi-informace-o-aktualnich-bezpecnostnich-problemech-firefoxu/">Další informace o aktuálních bezpečnostních problémech Firefoxu</a></h3>

	<div>Celou situaci shrnuje <a href="http://www.mozillazine.org/talkback.html?article=6582" title="Mozilla Arbitrary Code Execution Security Flaw" hreflang="en">článek na MozillaZine</a>, kde najdete i odkazy na další materiály. Z nich vybíráme <a href="http://www.greyhatsecurity.org/firefox.htm" title="Firefox Remote Compromise Technical Details - greyhatsecurity.org" hreflang="en">podrobný technický popis chyby</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=292691" hreflang="en">bug 292691</a> (zatím uzavřený), <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=293302" title="Bug 293302 - Firefox 1.0.3 Critical Vulnerability" hreflang="en">bug 293302</a> a <a href="http://www.mozilla.org/security/announce/mfsa2005-42.html" title="MFSA 2005-42: Code execution via javascript: IconURL" hreflang="en">security advisory</a>. Jedinou známou ochranou proti možnému zneužití chyb je úplné vypnutí JavaScriptu. V brzké době se očekává vydání opraveného Firefoxu 1.0.4.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/09/">9. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/05/09/">Ze stejného dne</a></dd>
				<dd><a href="../2005/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
 