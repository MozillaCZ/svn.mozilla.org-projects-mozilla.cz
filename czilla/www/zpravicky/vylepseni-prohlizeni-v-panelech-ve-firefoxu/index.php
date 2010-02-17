<?php
	require_once '../../inc/page.php';
	$page->setTitle('Vylepšení prohlížení v panelech ve Firefoxu');
	$page->setHeadline('Vylepšení prohlížení v panelech ve Firefoxu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/vylepseni-prohlizeni-v-panelech-ve-firefoxu/">Vylepšení prohlížení v panelech ve Firefoxu</a></h3>

	<div><a href="http://weblogs.mozillazine.org/ben/archives/009210.html" hreflang="en" title="Inside Firefox - The Inside Track on Firefox Development">Google provedl studii použitelnosti prohlížení v panelech</a> ve <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> a zjistil při tom zajímavé výsledky. Uživatele nejvíce mátlo nefunkční tlačítko "Zpět" v nově otevřeném panelu, dále nemohli přijít na způsob, jak panel zavřít a také byli překvapeni tím, jaký panel se po zavření právě prohlíženého panelu aktivoval. Zjištěné výsledky vedly ke zkušební implementaci zavíracích tlačítek u panelů, změně ve výběru panelu aktivovaném po zavření jiného panelu a byla provedena i měnší úprava v nastavení. Změny si můžete vyzkoušet ve <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/nightly/experimental/tabs/" hreflang="en" title="ftp.osuosl.org :: Oregon State University Open Source Lab">speciálních testovacích sestaveních</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/11/05/">5. 11. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/11/05/">Ze stejného dne</a></dd>
				<dd><a href="../2005/11/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

