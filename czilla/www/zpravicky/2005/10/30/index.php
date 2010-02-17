<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky, 30. říjen 2005');
	$page->setHeadline('Zprávičky, 30. říjen 2005', 'Přehled zpráviček ze světa Mozilly, 30. říjen 2005');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2005/10/">říjen 2005</a>: 	
		
						<a href="/zpravicky/2005/10/01/" title="Počet zpráviček: 1">1.</a>
		 
		|
						<a href="/zpravicky/2005/10/03/" title="Počet zpráviček: 1">3.</a>
		 
		|
						<a href="/zpravicky/2005/10/04/" title="Počet zpráviček: 3">4.</a>
		 
		|
						<a href="/zpravicky/2005/10/05/" title="Počet zpráviček: 1">5.</a>
		 
		|
						<a href="/zpravicky/2005/10/06/" title="Počet zpráviček: 3">6.</a>
		 
		|
						<a href="/zpravicky/2005/10/07/" title="Počet zpráviček: 2">7.</a>
		 
		|
						<a href="/zpravicky/2005/10/08/" title="Počet zpráviček: 1">8.</a>
		 
		|
						<a href="/zpravicky/2005/10/09/" title="Počet zpráviček: 2">9.</a>
		 
		|
						<a href="/zpravicky/2005/10/12/" title="Počet zpráviček: 3">12.</a>
		 
		|
						<a href="/zpravicky/2005/10/13/" title="Počet zpráviček: 3">13.</a>
		 
		|
						<a href="/zpravicky/2005/10/14/" title="Počet zpráviček: 3">14.</a>
		 
		|
						<a href="/zpravicky/2005/10/16/" title="Počet zpráviček: 2">16.</a>
		 
		|
						<a href="/zpravicky/2005/10/19/" title="Počet zpráviček: 2">19.</a>
		 
		|
						<a href="/zpravicky/2005/10/20/" title="Počet zpráviček: 3">20.</a>
		 
		|
						<a href="/zpravicky/2005/10/22/" title="Počet zpráviček: 1">22.</a>
		 
		|
						<a href="/zpravicky/2005/10/23/" title="Počet zpráviček: 2">23.</a>
		 
		|
						<a href="/zpravicky/2005/10/24/" title="Počet zpráviček: 3">24.</a>
		 
		|
						<a href="/zpravicky/2005/10/27/" title="Počet zpráviček: 2">27.</a>
		 
		|
						<strong>30.</strong>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/srovnavaci-testy-pro-cairo/">Srovnávací testy pro Cairo</a></h3>

	<div>Zatímco finišují práce na Firefoxu 1.5, vývojáři už zároveň pokročili v přípravách verze 2.0, jejímž důležitým bodem bude přechod na novou grafickou knihovnu <a href="http://cairographics.org/" hreflang="en">Cairo</a>. <a href="http://blog.vlad1.com/" hreflang="en" title="Vladimir Vukićević">Vladimir Vukićević</a> minulý týden <a href="http://blog.vlad1.com/archives/2005/10/28/74/" hreflang="en" title="Vladimir Vukićević &#187; Blog Archive &#187; Trender">zprovoznil sadu srovnávacích testů</a>, které by měly pomoci právě s optimalizací vykreslování pomocí Caira a zjistit případná slabá místa. Pokud máte některé z testovacích sestavení Firefoxu, můžete si i vyzkoušet <a href="javascript:c=21;skip=4;wh=1024;ww=1024;window.resizeTo(wh,ww); var wu = window.QueryInterface(Components.interfaces.nsIInterfaceRequestor).getInterface(Components.interfaces.nsIDOMWindowUtils); r = []; for (var i = 0; i &lt; c; i++) { var start = Date.now(); wu.redraw(); var end = Date.now(); r.push(end - start); } var t=0; (r.slice(skip)).forEach(function(v){t+=v;});alert('Average: ' + (t/(c-skip)).toFixed(3) + ' \nRaw: ' + r);">bookmarklet</a>, který změří čas potřebný k vykreslení právě zobrazené stránky.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/10/30/">30. 10. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-corporation-opet-rozsiruje-rady-zamestnancu/">Mozilla Corporation opět rozšiřuje řady zaměstnanců</a></h3>

	<div><a href="http://weblogs.mozillazine.org/asa/archives/2005/10/welcome_aboard_1.html" hreflang="en" title="Asa Dotzler - Firefox and more: welcome aboard, paul">Asa Dotzler oznámil</a>, že pro <a href="http://www.mozilla.org/" hreflang="en" title="Mozilla - Home of the Firefox web browser and Thunderbird e-mail client">Mozilla Corporation</a> nyní pracuje nový vedoucí produktového marketingu, <a href="http://www.numenity.org/blog/" hreflang="en" title="PKB">Paul Kim</a>. Na starosti bude mít propagaci <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> a dalších produktů Mozilly. Na Paulově blogu najdete <a href="http://www.numenity.org/blog/2005/10/28/beginnings/" hreflang="en" title="PKB &#187; beginnings">krátké představení</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/10/30/">30. 10. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/bugzilla-cesky/">Bugzilla česky</a></h3>

	<div>Ve firmě <a href="http://www.bata.cz/" title="Bata &gt; Úvodní stránka">Baťa</a>, kde již delší dobu používají <a href="/vyvojari/bugzilla/" title="Bugzilla: Stránka o produktu">Bugzillu</a>, se rozhodli tento užitečný nástroj počeštit. Výslednou českou lokalizaci pro řadu 2.18 najdete na <a href="http://bugzilla.bata.cz/">bugzilla.bata.cz</a> spolu s popisem instalace, omezeními a plány do budoucna. "Oficiálně" bude překlad <a href="http://www.linuxchange.org/index.php?show=program" title="LinuXchange 2005 - odborná konference svobodného a open-source software">představen v sobotu 5.11.</a> na konferenci <a href="http://www.linuxchange.org/index.php" title="LinuXchange 2005 - odborná konference svobodného a open-source software">LinuXchange 2005</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/10/30/">30. 10. 05</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
