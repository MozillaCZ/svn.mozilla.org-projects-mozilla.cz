<?php
	require_once '../../inc/page.php';
	$page->setTitle('Chyba při práci s historií ve Firefoxu');
	$page->setHeadline('Chyba při práci s historií ve Firefoxu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/chyba-pri-praci-s-historii-ve-firefoxu/">Chyba při práci s historií ve Firefoxu</a></h3>

	<div>Server <a href="http://secunia.com/" title="Secunia.com: Domovská stránka" hreflang="en">Secunia</a> dnes uveřejnil <a href="http://secunia.com/advisories/17934/" title="Mozilla Firefox History Information Denial of Service Weakness" hreflang="en">informaci o chybě</a> ve <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a>, která způsobuje zaplnění souboru s historií dlouhými nadpisy stránek (konkrétně se jedná o soubor history.dat), což při příštím spuštění vede k přetečení zásobníku a pádu Firefoxu. Na řešení chyby se již pracuje (viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=319004" title="overlong document.title setting can corrupt history data, causing non-responsive temporary hang (crash?) on subsequent startups" hreflang="en">bug 319004</a>). Chybě lze předejít doplněním řádku <tt>user_pref("capability.policy.default.HTMLDocument.title.set", "noAccess");</tt> do souboru <a href="/podpora/firefox/konfigurace.html#user">user.js</a>. Informace o řešení následků chyby naleznete <a href="http://www.mozilla.org/security/history-title.html" title="Long-title temporary startup unresponsiveness">v oficiálním oznámení chyby</a>, možností je také ruční smazání souboru history.dat z uživatelského profilu.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/12/09/">9. 12. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/12/09/">Ze stejného dne</a></dd>
				<dd><a href="../2005/12/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

