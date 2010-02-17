<?php
	require_once '../../inc/page.php';
	$page->setTitle('Podvržení příslušnosti dialogového okna ke stránce');
	$page->setHeadline('Podvržení příslušnosti dialogového okna ke stránce', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/podvrzeni-prislusnosti-dialogoveho-okna-ke-strance/">Podvržení příslušnosti dialogového okna ke stránce</a></h3>

	<div><a href="http://secunia.com/advisories/15489/" title="Secunia - Advisories - Mozilla / Firefox / Camino Dialog Origin Spoofing Vulnerability" hreflang="en">Secunia objevila méně závažnou bezpečnostní chybu</a>, postihující prohlížeče Mozilla Suite 1.7.8, Firefox 1.0.4 a Camino 0.8.4 (pravděpodobně i starší verze). Díky tomu, že dialogy vyvolávané JavaScriptem nejsou identifikované příslušnou doménou, je možné, aby útočníkova stránka zobrazila dialog, který vypadá, jako by byl vyvolán důvěryhodnou stránkou. K vyvolání chyby je nutná aktivní účast uživatele (musí kliknout na odkaz na stránce útočníka). K dispozici je <a href="http://secunia.com/multiple_browsers_dialog_origin_vulnerability_test/" title="Secunia - Multiple Browsers Dialog Origin Vulnerability Test" hreflang="en">test na (ne)přítomnost chyby</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/06/21/">21. 6. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/camino/">Camino</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/06/21/">Ze stejného dne</a></dd>
				<dd><a href="../2005/06/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

