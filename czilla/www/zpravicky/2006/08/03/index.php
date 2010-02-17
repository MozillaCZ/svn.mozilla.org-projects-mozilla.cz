<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky,  3. srpen 2006');
	$page->setHeadline('Zprávičky,  3. srpen 2006', 'Přehled zpráviček ze světa Mozilly,  3. srpen 2006');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2006/08/">srpen 2006</a>: 	
		
						<a href="/zpravicky/2006/08/01/" title="Počet zpráviček: 2">1.</a>
		 
		|
						<strong>3.</strong>
		 
		|
						<a href="/zpravicky/2006/08/04/" title="Počet zpráviček: 1">4.</a>
		 
		|
						<a href="/zpravicky/2006/08/05/" title="Počet zpráviček: 1">5.</a>
		 
		|
						<a href="/zpravicky/2006/08/14/" title="Počet zpráviček: 1">14.</a>
		 
		|
						<a href="/zpravicky/2006/08/15/" title="Počet zpráviček: 1">15.</a>
		 
		|
						<a href="/zpravicky/2006/08/16/" title="Počet zpráviček: 1">16.</a>
		 
		|
						<a href="/zpravicky/2006/08/17/" title="Počet zpráviček: 1">17.</a>
		 
		|
						<a href="/zpravicky/2006/08/20/" title="Počet zpráviček: 1">20.</a>
		 
		|
						<a href="/zpravicky/2006/08/24/" title="Počet zpráviček: 1">24.</a>
		 
		|
						<a href="/zpravicky/2006/08/25/" title="Počet zpráviček: 1">25.</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

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
<?php
	$page->includeTemplate('footer');
?>
