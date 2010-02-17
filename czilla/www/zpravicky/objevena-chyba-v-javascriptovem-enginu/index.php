<?php
	require_once '../../inc/page.php';
	$page->setTitle('Objevena chyba v JavaScriptovém enginu');
	$page->setHeadline('Objevena chyba v JavaScriptovém enginu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/objevena-chyba-v-javascriptovem-enginu/">Objevena chyba v JavaScriptovém enginu</a></h3>

	<div>Server <a href="http://secunia.com/" title="Secunia.com: Domovská stránka" hreflang="en">Secunia</a> včera informoval o <a href="http://secunia.com/advisories/14820/" title="Secunia.com: Mozilla Firefox JavaScript Engine Information Disclosure Vulnerability" hreflang="en">nově objevené bezpečnostní chybě</a>, která postihuje prohlížeč Mozilla Firefox 1.0.2 a prohlížeč z balíku Mozilla Suite 1.7.6. Chyba může útočníkovi zajistit výpis malé části paměti a serverem <a href="http://secunia.com/" title="Secunia.com: Domovská stránka" hreflang="en">Secunia</a> je hodnocena jako středně kritická. Řešením bude Mozilla Firefox 1.0.3, který bude k dispozici během několika dní.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/05/">5. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/04/05/">Ze stejného dne</a></dd>
				<dd><a href="../2005/04/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

