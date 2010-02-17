<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zajímavé novinky u Firefoxu');
	$page->setHeadline('Zajímavé novinky u Firefoxu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/zajimave-novinky-u-firefoxu/">Zajímavé novinky u Firefoxu</a></h3>

	<div>První novinkou je <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=252811" title="Bugzilla: bug 252811 - Do not allow hiding of statusbar by default">výchozí zakázání skrývání stavového řádku</a> prohlížeče, kde se zobrazuje jméno aktuálního serveru - např. <em>www.czilla.cz</em>. Úprava by měla ještě více omezit možnost zákeřných stránek vás zmást. Druhou novinkou je <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=253220" title="Bugzilla: bug 253220 - Proper Software Update">řádná softwarová aktualizece</a>, která umožňuje aktualizaci běžícího Firefoxu, aplikaci opravného balíčku či přidání komponenty. Obou novinek se dočkáme v Mozilla Firefoxu 1.0 Preview Release.</div>
	<div class="ft">
		<a href="/zpravicky/a/aha/">Adam Hauner</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/08/10/">10. 8. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/08/10/">Ze stejného dne</a></dd>
				<dd><a href="../2004/08/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
