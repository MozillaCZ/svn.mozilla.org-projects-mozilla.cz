<?php
	require_once '../../inc/page.php';
	$page->setTitle('Bezpečnostní aktulizace pro Firefox');
	$page->setHeadline('Bezpečnostní aktulizace pro Firefox', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/bezpecnostni-aktulizace-pro-firefox/">Bezpečnostní aktulizace pro Firefox</a></h3>

	<div>Mozilla Foundation vydala <a href="http://www.mozilla.org/press/mozilla-2004-10-01-02.html" hreflang="en" title="Mozilla.org: Important Security Update for Firefox Available">důležitou bezpečnostní aktualizaci</a> pro Firefox. Závažnost: pokud by podařilo útočníkovi přemluvit uživatele k uložení souboru, mohlo by využití zranitelnosti vést ke smazaní souborů v tomto adresáři; útočník nezíská žádná data z uživatelova počítače. Uživatelé předchozích verzí by měli přejít na <a href="ftp://ftp.mozilla.org/pub/mozilla.org/firefox/releases/0.10.1/" title="FTP adresář s aktualizovanou Firefox 1.0 PR">poslední verzi Firefoxu</a>. Uživatelé Firefoxu 1.0&nbsp;PR by měli kliknout na ikonku signalizující aktualizaci (červené kolečko se šipkou mířící vzhůru) anebo stáhnout <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/releases/0.10.1/patches/259708.xpi">opravu</a>.  Rychlé vydání bezpečnostní aktualizace je další důkaz toho, že Mozilla.org <a href="/clanky/bezpecnost-mozilly-a-odvozenych-prohlizecu.html">řeší bezpečnostní chyby dříve</a>, než mohou být zneužity.</div>
	<div class="ft">
		<a href="/zpravicky/a/aha/">Adam Hauner</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/10/02/">2. 10. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/10/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
