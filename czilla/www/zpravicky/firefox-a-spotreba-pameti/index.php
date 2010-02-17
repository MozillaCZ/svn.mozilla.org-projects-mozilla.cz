<?php
	require_once '../../inc/page.php';
	$page->setTitle('Firefox a spotřeba paměti');
	$page->setHeadline('Firefox a spotřeba paměti', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/firefox-a-spotreba-pameti/">Firefox a spotřeba paměti</a></h3>

	<div>Pokud se vám zdá, že <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefox</a> spotřebovává příliš paměti, přečtěte si <a href="http://weblogs.mozillazine.org/ben/archives/009749.html" hreflang="en" title="Inside Firefox - The Inside Track on Firefox Development">vysvětlující článek Bena Goodgera</a>. Spotřeba paměti je daní za rychlý pohyb zpět a vpřed po navštívených stránkách &ndash; Firefox si totiž pamatuje jejich předzpracovanou podobu, aby je nemusel znovu načítat. Chování prohlížeče lze upravit volbou <tt><a href="http://kb.mozillazine.org/Browser.sessionhistory.max_total_viewers" hreflang="en" title="Browser.sessionhistory.max total viewers - MozillaZine Knowledge Base">browser.sessionhistory.max_total_viewers</a></tt> v <tt><a href="http://kb.mozillazine.org/Firefox_:_FAQs_:_About:config_Entries" hreflang="en" title="About:config entries - MozillaZine Knowledge Base">about:config</a></tt>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/02/16/">16. 2. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/02/16/">Ze stejného dne</a></dd>
				<dd><a href="../2006/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

