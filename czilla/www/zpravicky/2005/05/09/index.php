<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky,  9. květen 2005');
	$page->setHeadline('Zprávičky,  9. květen 2005', 'Přehled zpráviček ze světa Mozilly,  9. květen 2005');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2005/05/">květen 2005</a>: 	
		
						<a href="/zpravicky/2005/05/01/" title="Počet zpráviček: 1">1.</a>
		 
		|
						<a href="/zpravicky/2005/05/02/" title="Počet zpráviček: 3">2.</a>
		 
		|
						<a href="/zpravicky/2005/05/03/" title="Počet zpráviček: 5">3.</a>
		 
		|
						<a href="/zpravicky/2005/05/04/" title="Počet zpráviček: 3">4.</a>
		 
		|
						<a href="/zpravicky/2005/05/05/" title="Počet zpráviček: 5">5.</a>
		 
		|
						<a href="/zpravicky/2005/05/06/" title="Počet zpráviček: 2">6.</a>
		 
		|
						<strong>9.</strong>
		 
		|
						<a href="/zpravicky/2005/05/10/" title="Počet zpráviček: 1">10.</a>
		 
		|
						<a href="/zpravicky/2005/05/11/" title="Počet zpráviček: 4">11.</a>
		 
		|
						<a href="/zpravicky/2005/05/12/" title="Počet zpráviček: 1">12.</a>
		 
		|
						<a href="/zpravicky/2005/05/13/" title="Počet zpráviček: 4">13.</a>
		 
		|
						<a href="/zpravicky/2005/05/14/" title="Počet zpráviček: 3">14.</a>
		 
		|
						<a href="/zpravicky/2005/05/15/" title="Počet zpráviček: 2">15.</a>
		 
		|
						<a href="/zpravicky/2005/05/16/" title="Počet zpráviček: 1">16.</a>
		 
		|
						<a href="/zpravicky/2005/05/17/" title="Počet zpráviček: 3">17.</a>
		 
		|
						<a href="/zpravicky/2005/05/18/" title="Počet zpráviček: 2">18.</a>
		 
		|
						<a href="/zpravicky/2005/05/19/" title="Počet zpráviček: 3">19.</a>
		 
		|
						<a href="/zpravicky/2005/05/23/" title="Počet zpráviček: 3">23.</a>
		 
		|
						<a href="/zpravicky/2005/05/24/" title="Počet zpráviček: 1">24.</a>
		 
		|
						<a href="/zpravicky/2005/05/25/" title="Počet zpráviček: 3">25.</a>
		 
		|
						<a href="/zpravicky/2005/05/27/" title="Počet zpráviček: 4">27.</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/dalsi-informace-o-aktualnich-bezpecnostnich-problemech-firefoxu/">Další informace o aktuálních bezpečnostních problémech Firefoxu</a></h3>

	<div>Celou situaci shrnuje <a href="http://www.mozillazine.org/talkback.html?article=6582" title="Mozilla Arbitrary Code Execution Security Flaw" hreflang="en">článek na MozillaZine</a>, kde najdete i odkazy na další materiály. Z nich vybíráme <a href="http://www.greyhatsecurity.org/firefox.htm" title="Firefox Remote Compromise Technical Details - greyhatsecurity.org" hreflang="en">podrobný technický popis chyby</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=292691" hreflang="en">bug 292691</a> (zatím uzavřený), <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=293302" title="Bug 293302 - Firefox 1.0.3 Critical Vulnerability" hreflang="en">bug 293302</a> a <a href="http://www.mozilla.org/security/announce/mfsa2005-42.html" title="MFSA 2005-42: Code execution via javascript: IconURL" hreflang="en">security advisory</a>. Jedinou známou ochranou proti možnému zneužití chyb je úplné vypnutí JavaScriptu. V brzké době se očekává vydání opraveného Firefoxu 1.0.4.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/09/">9. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/objeveny-vazne-bezpecnostni-chyby-ve-firefoxu-1.0.3/">Objeveny vážné bezpečnostní chyby ve Firefoxu 1.0.3</a></h3>

	<div><a href="http://secunia.com/advisories/15292/" title="Secunia - Advisories - Mozilla Firefox Two Vulnerabilities" hreflang="en">Secunia informuje</a> o dvou vážných bezpečnostních chybách ve <a href="/produkty/firefox/">Firefoxu</a> 1.0.3, které v kombinaci umožňují spuštění libovolného kódu u uživatele. Na webu <a href="http://www.frsirt.com/english/" title="FrSIRT - Vulnerability and Cyber Threat Monitoring 24/7" hreflang="en">FrSIRT</a> je k dispozici <a href="http://www.frsirt.com/exploits/20050507.firefox0day.php" title="FrSIRT - Mozilla Firefox 1.0.3 Remote Arbitrary Code Execution Exploit" hreflang="en">ukázka zneužití</a>. První chyba umožňuje spuštění libovolného skriptu v kontextu cizí stránky; druhá chyba spočívá v nedostatečné kontrole parametrů funkce <code>InstallTrigger.install()</code>, která umožňuje obejít kontrolu práv při spuštění skriptu. Ke zneužití chyb je potřeba stránka, která má povoleno instalovat rozšíření. Zveřejněný exploit zneužíval web <a href="https://addons.mozilla.org/" hreflang="en">addons.mozilla.org</a>, ale ten už byl <a href="http://www.mozilla.org/" hreflang="en">Mozilla Foundation</a> rychle upraven tak, aby zneužití bránil a uživatelé byli ochráněni. Na kompletním odstranění problému se pracuje.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/09/">9. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/rozhovor-s-janem-urbankem-na-linuxexpresu/">Rozhovor s Janem Urbánkem na LinuxEXPRESu</a></h3>

	<div>Krátký <a href="http://www.linuxexpres.cz/index.php?show=001053008002">rozhovor s Janem Urbánkem</a>, čestným členem týmu CZilly, vyšel dnes na stránkách portálu <a href="http://www.linuxexpres.cz/">LinuxEXPRES</a>. Rozhovor se točí především okolo historie zastoupení Mozilly v ČR a několika dalších témat.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/09/">9. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/lokalizovana-rozsireni-stale-pribyvaji-pomozte-nam-at-je-jich-jeste-vic/">Lokalizovaná rozšíření stále přibývají - pomozte nám, ať je jich ještě víc</a></h3>

	<div>Jak jste si možná v posledních týdnech všimli, s novými <a href="/doplnky/rozsireni/">lokalizovanými rozšířeními</a> se na CZille doslova roztrhl pytel - máme jich už celkem 81. Podobně hojně se objevují i články o rozšířeních - třeba dnešní <a href="http://www.abclinuxu.cz/clanky/show/86421">Rozšířte si Firefox!</a> nebo <a href="http://interval.cz/serial.asp?serial=222">seriál na Intervalu</a>. Pokud máte chvilku a chtěli byste nám s překladem rozšíření pomoci, přečtěte si náš článek <a href="/clanky/prekladame-rozsireni.html">Překládáme rozšíření</a> a neváhejte kontaktovat <a href="/czilla/lide.html#kdo-je-LP">Lukáše Petrovického</a>, který má lokalizovaná rozšíření na starost. Třeba právě s vaší pomocí brzo dosáhneme symbolické stovky.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/09/">9. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-community-awards/">Mozilla Community Awards</a></h3>

	<div><a href="http://www.mozilla.org/" hreflang="en">Mozilla Foundation</a> včera <a href="http://www.mozillazine.org/talkback.html?article=6578" title="Mozilla Community Awards" hreflang="en">odstartovala program Mozilla Community Awards</a>. Jeho cílem je upozornit na důležité příspěvky členů komunity Mozilly a odměnit je. Protože oblastí, kde bylo možné ke společnému dílu přispět, je mnoho, budou ceny uděleny v několika kategoriích - návrhy na to, v jakých, můžete posílat do komentářů pod <a href="http://www.mozillazine.org/talkback.html?article=6578" title="Mozilla Community Awards" hreflang="en">článkem na MozillaZine</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/09/">9. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/nove-funkce-objektu-array/">Nové funkce objektu Array</a></h3>

	<div>Nejen příznivce programovacího jazyka Lisp jistě potěší, že ve vývojové verzi <a href="http://www.mozilla.org/js/spidermonkey/" title="SpiderMonkey (JavaScript-C) Engine" hreflang="en">JavaScript enginu</a> byly ke standardnímu objektu <code>Array</code> doplněny metody <code>indexOf</code>, <code>lastIndexOf</code>, <code>forEach</code>, <code>map</code>, <code>filer</code>, <code>some</code> a <code>every</code>. JavaScript tak se tak opět o kousek přiblížil funkcionálnímu programovacímu jazyku. Více informací viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=290592" title="Bug 290592 - Array extras: forEach, indexOf, filter, map, some, every" hreflang="en">příslušný bug</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/09/">9. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/recenze-nvu-na-newsforge/">Recenze Nvu na NewsForge</a></h3>

	<div>Na <a href="http://www.newsforge.com/" title="NewsForge: The Online Newspaper for Linux and Open Source" hreflang="en">NewsForge</a> se objevila <a href="http://programming.newsforge.com/article.pl?sid=05/04/28/1915249">recenze <abbr title="What You See Is What You Get" lang="en">WYSIWYG</abbr> <abbr title="HyperText Markup Language" lang="en">HTML</abbr> editoru Nvu 1.0 Preview Release</a>. Autor článku má sice ke Nvu několik menších výtek, ale celkově se mu editor líbí a přisuzuje mu slibnou budoucnost.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/09/">9. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
