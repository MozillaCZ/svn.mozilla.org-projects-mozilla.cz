<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky, 12. prosinec 2003');
	$page->setHeadline('Zprávičky, 12. prosinec 2003', 'Přehled zpráviček ze světa Mozilly, 12. prosinec 2003');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2003/12/">prosinec 2003</a>: 	
		
						<a href="/zpravicky/2003/12/02/" title="Počet zpráviček: 1">2.</a>
		 
		|
						<a href="/zpravicky/2003/12/03/" title="Počet zpráviček: 3">3.</a>
		 
		|
						<a href="/zpravicky/2003/12/04/" title="Počet zpráviček: 1">4.</a>
		 
		|
						<a href="/zpravicky/2003/12/06/" title="Počet zpráviček: 2">6.</a>
		 
		|
						<a href="/zpravicky/2003/12/08/" title="Počet zpráviček: 2">8.</a>
		 
		|
						<a href="/zpravicky/2003/12/09/" title="Počet zpráviček: 2">9.</a>
		 
		|
						<a href="/zpravicky/2003/12/10/" title="Počet zpráviček: 2">10.</a>
		 
		|
						<a href="/zpravicky/2003/12/11/" title="Počet zpráviček: 1">11.</a>
		 
		|
						<strong>12.</strong>
		 
		|
						<a href="/zpravicky/2003/12/13/" title="Počet zpráviček: 1">13.</a>
		 
		|
						<a href="/zpravicky/2003/12/14/" title="Počet zpráviček: 1">14.</a>
		 
		|
						<a href="/zpravicky/2003/12/15/" title="Počet zpráviček: 1">15.</a>
		 
		|
						<a href="/zpravicky/2003/12/16/" title="Počet zpráviček: 2">16.</a>
		 
		|
						<a href="/zpravicky/2003/12/17/" title="Počet zpráviček: 2">17.</a>
		 
		|
						<a href="/zpravicky/2003/12/19/" title="Počet zpráviček: 1">19.</a>
		 
		|
						<a href="/zpravicky/2003/12/22/" title="Počet zpráviček: 1">22.</a>
		 
		|
						<a href="/zpravicky/2003/12/23/" title="Počet zpráviček: 2">23.</a>
		 
		|
						<a href="/zpravicky/2003/12/30/" title="Počet zpráviček: 2">30.</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/lokalizace-rozsireni-tagzilla/">Lokalizace rozšíření TagZilla</a></h3>

	<div>Díky Janu Mertovi máme lokalizované nové rozšíření - <a href="http://tagzilla.mozdev.org/" title="Domovská stránka rozšíření TagZilla">TagZilla</a>. Toto rozšíření vám umožní vkládat přednastavené texty na pozici kurzoru. Lze jej tedy například úspěšně použít na vkládání signatur do e-mailů. Rozšíření je určeno pro balík Mozilla, Mozilla Firebird a Mozilla Thunderbird. Rozšíření si prozatím nedokáže poradit s diakritikou. Na odstranění tohoto problému se pracuje. Lokalizovaný balíček naleznete na <a href="http://ftp.czilla.cz/other/addons/tagzilla/" title="FTP CZilla">ftp.czilla.cz</a> či <a href="http://www.hardsys.net/" title="Hardsys.net">Hardsys.net</a>. Ke správné funkčnosti tohoto rozšíření je potřeba nainstalovaná knihovna <a href="http://jslib.mozdev.org/" title="Domovská stránka knihovny jslib">jslib</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/12/12/">12. 12. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/kontrola-pravopisu-pro-cestinu/">Kontrola pravopisu pro cestinu</a></h3>

	<div>Po balíčku s <a href="/archiv.html#news:a69c5d1658bb110e9ddedc43cc93d9c5">kontrolou pravopisu češtiny</a> tu máme balíček s kontrolou pravopisu cestiny (češtiny bez háčků a čárek ;-). Je určen pro všechny, kdo jsou zvyklí psát maily bez diakritiky. Jeho instalace je nezávislá na kontrole češtiny s diakritikou, takže vám nic nebrání mít nainstalované oba dva a bez problémů přepínat dle libosti - <a href="/doplnky/kontrola-pravopisu/" title="Kontrola pravopisu pro Mozillu">více informací</a>. Instalační balíček najdete na našem <a href="ftp://ftp.czilla.cz/other/dict/cs_ascii_spell.xpi" title="Instalační balíček kontroly pravopisu cestiny">FTP</a>. Nápad vznikl v <a href="http://forum.czilla.cz/viewtopic.php?t=917" title="kontrola pravopisu bez diakritiky">našem fóru</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/12/12/">12. 12. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/bezpecnostni-problem-v-mozille/">Bezpečnostní problém v Mozille?</a></h3>

	<div>Na každého jednou dojde. A tak i v Mozille byl včera objeven <a href="http://secunia.com/advisories/10419/" title="Mozilla Status Bar Manipulation Weakness" hreflang="en">menší bezpečnostní problém</a>. Nicméně se nejedná o nic kritického, jak si hned ukážeme. Vychází z problému, který byl již dříve pozorován u <a href="http://secunia.com/advisories/10395/" title="Internet Explorer URL Spoofing Vulnerability" hreflang="en">Internet Exploreru 6.0</a>, a který umožňoval "útočníkovi" přimět prohlížeč zobrazovat jiné <abbr title="Uniform Resource Locator">URL</abbr>, než o jaké se právě jedná. Problém si lze vyzkoušet na testovacích stránkách <a href="http://secunia.com/internet_explorer_address_bar_spoofing_test/" hreflang="en">Secunia.com</a> a <a href="http://www.zapthedingbat.com/security/ex01/vun1.htm" hreflang="en">zapthedingbat.com</a> (porovnejte si chování v různých prohlížečích). Včera bylo <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=228176" title="%00 in a URL causes incorrect display of hovered link in status bar" hreflang="en">nahlášeno</a>, že se problém částečně týká i Mozilly. Částečně znamená, že není ovlivněna zobrazovaná URL v adresním řádku prohlížeče, ale jen a pouze zobrazovaná adresa ve stavovém řádku při najetí na odkaz. Reálné zneužití je diskutabilní, ale jistě možné. Vývojáři problém již řeší a tak můžeme jen s napětím čekat, zda se potvrdí pravidlo, že bezpečnostní chyby v Open Source programech bývají řešeny velmi rychle (obvykle během několika dní). O dalším vývoji budeme samozřejmě informovat. Další informace najdete na <a href="http://www.mozillazine.org/talkback.html?article=4078" title="Mozilla Partially Vulnerable to Internet Explorer URL Spoofing Security Flaw" hreflang="en" lang="en">MozillaZine</a> a <a href="http://www.theage.com.au/articles/2003/12/12/1071125632006.html" title="URL spoofing flaw could be used in bank scams" hreflang="en" lang="en">TheAge.com</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/12/12/">12. 12. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/minimo-=-mini-mozilla/">Minimo = Mini Mozilla</a></h3>

	<div>Projekt <a href="http://www.mozilla.org/projects/minimo/" title="Minimo = Mini Mozilla">Minimo</a> (neplést s <a href="http://www.rodina.cz/" title="bříška, miminka, prťata">miminem</a> :) si klade za cíl běh Mozilly na PDA a podobných zařízeních. Pro zájemce tu máme screenshoty takové <a href="http://www.mozilla.org/projects/minimo/screenshots.html" title="Minimo on the iPAQ">minimkovské Mozilly</a> a pro ty, kteří by si chtěli své stránky v minimkovské Mozille vyzkoušet, tu je malé rozšíření <a href="http://disruptive-innovations.com/products/index.html#SSRXPI">Small Screen Rendering</a>, které simuluje zobrazení Minima v klasické Mozille či Mozilla Firebird.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/12/12/">12. 12. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/rozhovor-s-chrisem-hofmannem/">Rozhovor s Chrisem Hofmannem</a></h3>

	<div>Na NewsForge najdete <a href="http://www.newsforge.com/software/03/12/10/1812211.shtml" title="Q&amp;A with Mozilla engineering director Chris Hofmann">rozhovor</a> s bývalým zaměstnancem společnosti Netscape a současným členem Mozilla Foundation Chrisem Hofmannem. Rozhovor se jak jinak točí okolo budoucnosti Mozilly, vztahu k IE a padne v něm dokonce zmínka o Mozille 2.0 ;-)</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/12/12/">12. 12. 03</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
