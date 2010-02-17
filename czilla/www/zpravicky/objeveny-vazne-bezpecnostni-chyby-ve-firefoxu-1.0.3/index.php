<?php
	require_once '../../inc/page.php';
	$page->setTitle('Objeveny vážné bezpečnostní chyby ve Firefoxu 1.0.3');
	$page->setHeadline('Objeveny vážné bezpečnostní chyby ve Firefoxu 1.0.3', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/objeveny-vazne-bezpecnostni-chyby-ve-firefoxu-1.0.3/">Objeveny vážné bezpečnostní chyby ve Firefoxu 1.0.3</a></h3>

	<div><a href="http://secunia.com/advisories/15292/" title="Secunia - Advisories - Mozilla Firefox Two Vulnerabilities" hreflang="en">Secunia informuje</a> o dvou vážných bezpečnostních chybách ve <a href="/produkty/firefox/">Firefoxu</a> 1.0.3, které v kombinaci umožňují spuštění libovolného kódu u uživatele. Na webu <a href="http://www.frsirt.com/english/" title="FrSIRT - Vulnerability and Cyber Threat Monitoring 24/7" hreflang="en">FrSIRT</a> je k dispozici <a href="http://www.frsirt.com/exploits/20050507.firefox0day.php" title="FrSIRT - Mozilla Firefox 1.0.3 Remote Arbitrary Code Execution Exploit" hreflang="en">ukázka zneužití</a>. První chyba umožňuje spuštění libovolného skriptu v kontextu cizí stránky; druhá chyba spočívá v nedostatečné kontrole parametrů funkce <code>InstallTrigger.install()</code>, která umožňuje obejít kontrolu práv při spuštění skriptu. Ke zneužití chyb je potřeba stránka, která má povoleno instalovat rozšíření. Zveřejněný exploit zneužíval web <a href="https://addons.mozilla.org/" hreflang="en">addons.mozilla.org</a>, ale ten už byl <a href="http://www.mozilla.org/" hreflang="en">Mozilla Foundation</a> rychle upraven tak, aby zneužití bránil a uživatelé byli ochráněni. Na kompletním odstranění problému se pracuje.</div>
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

