<?php
	require_once '../../inc/page.php';
	$page->setTitle('Novinky vývojové verze Firefoxu: začleněn Reporter, rozšíření jdou instalovat přes klíč v registrech');
	$page->setHeadline('Novinky vývojové verze Firefoxu: začleněn Reporter, rozšíření jdou instalovat přes klíč v registrech', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/novinky-vyvojove-verze-firefoxu-zaclenen-reporter-rozsireni-jdou-instalovat-pres-klic-v-registrech/">Novinky vývojové verze Firefoxu: začleněn Reporter, rozšíření jdou instalovat přes klíč v registrech</a></h3>

	<div>Do vývojové verze <a href="/produkty/firefox/">Firefoxu</a> byl <a href="http://weblogs.mozillazine.org/asa/archives/008161.html" title="Asa Dotzler on firefox, cats, mars, and more: report a broken website" hreflang="en">začleněn nástroj Reporter</a>, sloužící k hlášení stránek, které se uživatelům v prohlížeči nezobrazují správně. V současnosti je jeho instalace volitelná (podobně jako u DOM Inspectoru nebo Talkbacku), ale to se může do vydání Firefoxu 1.1 změnit. Také byla doplněna funkce, umožňující jednoduchou instalaci rozšíření ve Windows pouhým <a href="http://wiki.mozilla.org/Extension_Manager:Win32_Registry_Location" hreflang="en">přidáním položky do registru, která ukazuje na umístění rozšíření</a> (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=293548" title="Bug 293548 - Provide windows registry install location for extensions" hreflang="en">příslušný bug</a>). Tato možnost byla velmi žádána externími vývojáři.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/17/">17. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/05/17/">Ze stejného dne</a></dd>
				<dd><a href="../2005/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

