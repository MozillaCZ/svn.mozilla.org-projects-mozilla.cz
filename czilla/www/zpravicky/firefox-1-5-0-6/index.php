<?php
	require_once '../../inc/page.php';
	$page->setTitle('Firefox 1.5.0.6');
	$page->setHeadline('Firefox 1.5.0.6', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/firefox-1-5-0-6/">Firefox 1.5.0.6</a></h3>

	<div>Jak jsme vás již <a href="/zpravicky/vydan-firefox-1-5-0-5/" title="CZilla: Vydán Firefox 1.5.0.5">informovali</a>, nedávno zveřejněný Firefox 1.5.0.5 opravoval několik bezpečnostních chyb a to včetně chyby 
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=181860" hreflang="en" title="Mozilla interprets mailto: and other malformed URLs in IMG SRC tag">181860</a> umožňující volání nestandardních protokolů (např. pro poslání e-mailu) z míst, kde by se to správně nemělo (např. v adrese obrázku). Při opravě této chyby zvolili vývojáři příliš restriktivní model opravy, který ve svém důsledku blokoval i protokol Microsoft Media Services (MMS) využívaný některými stránkami pro vkládání streamovaného videa ve formátu Windows Media - více viz chyba 
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=346167" hreflang="en" title="Windows MediaPlayer plugin stopped working on specific website with FF 1.5.0.5 (mms)">346167</a>.<br/><br/>

Přestože se <b>nejedná o zranitelnost produktu,</b> vývojáři <a href="http://www.mozilla.com/" title="Mozilla Corporation - Home of the Firefox web browser and Thunderbird email client" hreflang="en">Mozilla Corporation</a> rozhodli o okamžité opravě a <a href="http://www.mozilla.com/firefox/releases/1.5.0.6.html" hreflang="en" title="Mozilla Firefox 1.5.0.6 Release Notes">vydání nové verze</a>. Firefox 1.5.0.6 můžete <a href="http://www.czilla.cz/produkty/firefox/stahnout.html" title="CZilla: Stáhnout Firefox (download)">stahovat samostatně</a> nebo v rámci automatických aktualizací.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/08/03/">3. 8. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bezpecnost/">Bezpečnost</a></dd>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/08/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

