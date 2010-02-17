<?php
	require_once '../../inc/page.php';
	$page->setTitle('Objeveny čtyři nové bezpečnostní problémy');
	$page->setHeadline('Objeveny čtyři nové bezpečnostní problémy', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/objeveny-ctyri-nove-bezpecnostni-problemy/">Objeveny čtyři nové bezpečnostní problémy</a></h3>

	<div><a href="http://secunia.com/" title="Secunia - Vulnerability and Virus Information" hreflang="en">Secunia</a> hlásí <a href="http://secunia.com/advisories/14163/" title="Secunia - Advisories - Mozilla / Firefox / Camino IDN Spoofing Security Issue" hreflang="en">možnost podvržení doménového jména</a> v adresovém či stavovém řádku a u <abbr title="Secure Sockets Layer">SSL</abbr> certifikátů v <a href="/produkty/suite/">Mozilla Suite</a>, <a href="/produkty/firefox/">Firefoxu</a> a <a href="http://www.caminobrowser.org/" hreflang="en">Camino</a>. Chyba zneužívá standard <abbr title="International Domain Names">IDN</abbr>, díky kterému mohou být v názvech domén mezinárodní znaky, z nichž některé jsou na pohled zaměnitelné s normálními latinskými písmeny. Oprava chyby zatím není k dispozici. Tímto problémem je postižena i většina ostatních prohlížečů kromě <abbr title="Internet Explorer">IE</abbr>, který <abbr title="International Domain Names">IDN</abbr> nepodporuje. <a href="http://secunia.com/advisories/14160/" title="Secunia - Advisories - Mozilla / Firefox Three Vulnerabilities" hreflang="en">Další problémy</a> jsou označeny jako méně závažné a týkají se zneužití přetahování souborů s obrázky, odkazů s JavaScripty a možnosti přimět uživatele nevědomky změnit nastavení v about:config.  Ve vývojových verzích postižených produktů (Mozilla Suite, Firefox) jsou již tyto problémy opraveny.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/08/">8. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/camino/">Camino</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/02/08/">Ze stejného dne</a></dd>
				<dd><a href="../2005/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

