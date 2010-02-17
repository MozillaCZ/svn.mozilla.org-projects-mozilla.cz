<?php
	require_once '../../inc/page.php';
	$page->setTitle('Bezpečnostní problémy opravené ve Firefoxu 1.0.2');
	$page->setHeadline('Bezpečnostní problémy opravené ve Firefoxu 1.0.2', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/bezpecnostni-problemy-opravene-ve-firefoxu-1.0.2/">Bezpečnostní problémy opravené ve Firefoxu 1.0.2</a></h3>

	<div>Firefox 1.0.2 <a href="http://www.mozilla.org/projects/security/known-vulnerabilities.html#firefox1.0.2" title="Mozilla Foundation Security Advisories: Fixed in Firefox 1.0.2" hreflang="en">opravuje tři bezpečnostní problémy</a> předchozích verzí. <a href="http://www.mozilla.org/security/announce/mfsa2005-32.html" title="MFSA 2005-32: Drag and drop loading of privileged XUL" hreflang="en">První problém</a> (<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2005-0401" title="Common Vulnerabilities and Exposures: CAN-2005-0401" hreflang="en">CVE</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=285438" title="Bug 285438 - Drag and drop gestures can be hijacked to load priviliged xul" hreflang="en">bug</a>) není hodnocen jako závažný a umožňuje po aktivní spolupráci uživatele načíst privilegovaný XUL soubor. <a href="http://www.mozilla.org/security/announce/mfsa2005-31.html" title="MFSA 2005-31: Arbitrary code execution from Firefox sidebar panel" hreflang="en">Druhý problém</a> (<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2005-0402" title="Common Vulnerabilities and Exposures: CAN-2005-0402" hreflang="en">CVE</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=284627" title="Bug 284627 - arbitrary code execution via sidebar" hreflang="en">bug</a>) je hodnocen jako kritický a umožňuje stránce, kterou si uživatel přidá mezi záložky otvírající se do postranní lišty, spustit libovolný kód. <a href="http://www.mozilla.org/security/announce/mfsa2005-30.html" title="MFSA 2005-30: GIF heap overflow parsing Netscape extension 2" hreflang="en">Třetí problém</a> (<a href="http://www.cve.mitre.org/cgi-bin/cvename.cgi?name=CAN-2005-0399" title="Common Vulnerabilities and Exposures: CAN-2005-0399" hreflang="en">CVE</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=285595" hreflang="en">bug</a> - zatím uzavřen) je také hodnocen jako kritický a potenciálně umožňuje vykonávání libovolného kódu díky přetečení bufferu v kódu pro zpracování obrázků ve formátu GIF. O vyřešených problémech <a href="http://secunia.com/advisories/14654/" title="Secunia - Advisories - Mozilla Firefox Three Vulnerabilities" hreflang="en">informuje i Secunia</a>.
</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/03/27/">27. 3. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/03/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

