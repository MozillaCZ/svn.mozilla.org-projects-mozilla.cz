<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky se štítkem Camino');
	$page->setHeadline('Zprávičky se štítkem Camino', 'Přehled toho nejžhavějšího ze světa Mozilly, štítek Camino');
	$page->includeTemplate('header');
?>

<div id="navigation">
	Vybrat zprávičky se štítkem:
						<a href="/zpravicky/s/bezpecnost/">Bezpečnost</a>

		|
						<a href="/zpravicky/s/bugzilla/">Bugzilla</a>

		|
						<strong>Camino</strong>

		|
						<a href="/zpravicky/s/czilla/">CZilla</a>

		|
						<a href="/zpravicky/s/firefox/">Firefox</a>

		|
						<a href="/zpravicky/s/gecko/">Gecko</a>

		|
						<a href="/zpravicky/s/humor/">Humor</a>

		|
						<a href="/zpravicky/s/internet-explorer/">Internet Explorer</a>

		|
						<a href="/zpravicky/s/lokalizace/">Lokalizace</a>

		|
						<a href="/zpravicky/s/minimo/">Minimo</a>

		|
						<a href="/zpravicky/s/motivy-vzhledu/">Motivy vzhledu</a>

		|
						<a href="/zpravicky/s/suite/">Mozilla Application Suite</a>

		|
						<a href="/zpravicky/s/mozilla-foundation-corporation/">Mozilla Foundation &amp; Corporation</a>

		|
						<a href="/zpravicky/s/mozilla-sk/">Mozilla.sk</a>

		|
						<a href="/zpravicky/s/netscape/">Netscape</a>

		|
						<a href="/zpravicky/s/nvu/">Nvu</a>

		|
						<a href="/zpravicky/s/odvozene-prohlizece/">Odvozené prohlížeče</a>

		|
						<a href="/zpravicky/s/opera/">Opera</a>

		|
						<a href="/zpravicky/s/rozsireni/">Rozšíření</a>

		|
						<a href="/zpravicky/s/safari/">Safari</a>

		|
						<a href="/zpravicky/s/seamonkey/">SeaMonkey</a>

		|
						<a href="/zpravicky/s/statistiky/">Statistiky</a>

		|
						<a href="/zpravicky/s/sunbird/">Sunbird</a>

		|
						<a href="/zpravicky/s/thunderbird/">Thunderbird</a>

		|
						<a href="/zpravicky/s/vyvojari/">Vývojáři</a>

		|
						<a href="/zpravicky/s/webove-technologie/">Webové technologie</a>

		|
						<a href="/zpravicky/s/xulrunner/">XULRunner</a>

		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>

<div class="news">
	<h3><a href="/zpravicky/novy-flash-player-9/">Nový Flash Player 9</a></h3>

	<div>Společnost <a href="http://www.adobe.com" title="Oficiální stránky společnosti Adobe" hreflang="en">Adobe</a> vydala tento týden novou verzi přehrávače <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" title="Stránka ke stažení přehrávače" hreflang="en">Flash Player 9</a> pro operační systémy Windows a MacOS X. Díky použití technologií Action Script 3 dochází k jeho podstatnému zrychlení. Dále by mělo dojít k odstranění problémů se správou paměti a tím k omezení úniků paměti (tzv. memory leaky), ke kterým ve <a href="http://www.czilla.cz/produkty/firefox/" title="Firefox: stránka o produktu">Firefoxu</a> docházelo. Uživatelům starších verzí je proto doporučen upgrade. (Zaslal Miroslav Suchý.)</div>
	<div class="ft">
		<a href="/zpravicky/a/petrovicky/">Lukáš Petrovický</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/06/29/">29. 6. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-1-0-1/">Camino 1.0.1</a></h3>

	<div>V pátek byla vydána nová verze 1.0.1 prohlížeče <a href="http://www.caminobrowser.org/" hreflang="en">Camino</a>, určeného pro počítače s operačním systémem Mac OS X. Toto vydání obsahuje opravy bezpečnostních chyb a zlepšuje stabilitu produktu. Camino 1.0.1 je založeno na jádru <a href="http://www.mozilla.org/newlayout/" title="Gecko - vykreslovací jádro Mozilly" hreflang="en">Gecko</a> ve verzi 1.8.0.3, která je  použita i ve <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> 1.5.0.3.</div>
	<div class="ft">
		<a href="/zpravicky/a/petru/">Štěpán Petrů</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/05/15/">15. 5. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/relicencovani-mozilly-dokonceno/">Relicencování Mozilly dokončeno</a></h3>

	<div><a href="http://www.gerv.net/" title="Domovské stránky Gervase Markhama" hreflang="en">Gervase Markham</a> dnes, při příležitosti osmého výročí <a href="http://wp.netscape.com/newsref/pr/newsrelease591.html">uvolnění Mozilly jako Open Source</a>, na <a href="http://weblogs.mozillazine.org/gerv/archives/2006/03/relicensing_complete.html" title="Weblog Gervase Markhama" hreflang="en">svém blogu oznámil</a>, že po čtyř-a-půl-letém úsilí se podařilo se souhlasem všech 445 přispěvovatelů dokončit <a href="http://www.czilla.cz/clanky/relicencovani-mozilly.html" title="CZilla:Relicencování kódu Mozilly">relicencování</a> všech 28522 zdrojových souborů v Mozilla repozitáři, ze kterých se sestavují jednotlivé produkty jako např. <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefox</a>, <a href="/produkty/thunderbird/" title="Thunderbird: Stránka o produktu">Thunderbird</a>, <a href="/produkty/seamonkey/" title="SeaMonkey: Stránka o produktu">SeaMonkey</a> a <a href="http://www.mozilla-europe.org/cs/products/camino/" title="Camino: Stránka o produktu">Camino</a>. </div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/04/01/">1. 4. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-1.0/">Camino 1.0</a></h3>

	<div>Vedoucí vývojář <a href="http://weblogs.mozillazine.org/pinkerton/" hreflang="en" title="Sucking less, on a budget">Mike Pinkerton</a> dnes <a href="http://weblogs.mozillazine.org/pinkerton/archives/009747.html" hreflang="en" title="Sucking less, on a budget: 1.0 Has Arrived!">oznámil vydání finální verze Camino 1.0</a>. Výčet novinek najdete v <a href="http://www.caminobrowser.org/releases/1.0.php" hreflang="en" title="Camino : Release Notes : Camino 1.0">poznámkách k vydání</a> (<a href="http://www.caminobrowser.org/releases/1.0-complete.php" hreflang="en" title="Camino : Release Notes : Camino 1.0 Complete Release Notes">podrobná verze</a>), novou verzi provází i <a href="http://home.businesswire.com/portal/site/google/index.jsp?ndmViewId=news_view&amp;newsId=20060214005597&amp;newsLang=en" hreflang="en" title="Camino 1.0 Browser Released; New Open Source Web Browser Combines the Power of Mozilla Technology and the Mac OS X Operating System">tisková zpráva</a>. <a href="http://www.caminobrowser.org/download/releases/1.0/" hreflang="en">Stahovat</a> můžete z <a href="http://www.caminobrowser.org/" hreflang="en" title="Camino - Mozilla power, Mac style.">CaminoBrowser.org</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/02/14/">14. 2. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-1.0-beta-2/">Camino 1.0 Beta 2</a></h3>

	<div><a href="http://caminoupdate.blogspot.com/2005/12/camino-10b2-released.html" hreflang="en" title="Camino Update: Camino 1.0b2 Released">Byla vydána druhá betaverze Camino 1.0</a>. Všem uživatelům používajícím <a href="http://www.mozilla-europe.org/cs/products/camino/" title="Camino: Stránka o produktu">Camino</a> na systémech Max <abbr title="Operační systém" lang="cs">OS</abbr> X verze 10.2 a vyšší je doporučeno upgradovat (především z bezpečnostních důvodů). Největšími změnami od první betaverze je podpora značky <code>&lt;canvas&gt;</code> a <abbr title="Scalable Vector Graphics" lang="en">SVG</abbr>. Podrobný výčet všech změn najdete jako obvykle  v <a href="http://www.caminobrowser.org/releases/1.0b2.php" hreflang="en" title="Camino : Release Notes : Camino 1.0 beta 2">poznámkách k vydání</a>, <a href="http://www.caminobrowser.org/download/releases/1.0b2/">stahovat</a> můžete z <a href="http://www.caminobrowser.org/" hreflang="en" title="Camino - Mozilla power, Mac style.">CaminoBrowser.org</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/01/01/">1. 1. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-1.0-beta-1/">Camino 1.0 Beta 1</a></h3>

	<div><a href="http://weblogs.mozillazine.org/pinkerton/" hreflang="en" title="Sucking less, on a budget">Mike Pinkerton</a> oznámil <a href="http://weblogs.mozillazine.org/pinkerton/archives/009238.html" hreflang="en" title="Sucking less, on a budget: 1.0 Beta 1 Released">vydání Camino 1.0 Beta 1</a>. Vylepšení od <a href="/archiv-2005.html#news:e0ab92617338e6c8d81526b0760406d2" title="Camino 1.0 Alpha 1">nedávno vydané alfaverze</a> je mnoho a jejich podrobný výčet najdete v <a href="http://www.caminobrowser.org/releases/10b1.html" hreflang="en" title="Camino : Support : v1.0b1 Release Notes">poznámkách k vydání</a>. Betaverze byla označena za dostatečně stabilní, aby ji mohli uživatelé používat namísto zatím poslední stabilní verze 0.8.4, která je už cca rok stará. <a href="http://www.caminobrowser.org/download/releases/1b1/" hreflang="en">Stahovat</a> můžete z <a href="http://www.caminobrowser.org/" hreflang="en" title="Camino - Mozilla power, Mac style.">CaminoBrowser.org</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/11/08/">8. 11. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-1.0-alpha-1/">Camino 1.0 Alpha 1</a></h3>

	<div>Webový prohlížeče pro Mac OS <a href="http://www.mozilla-europe.org/cs/products/camino/" title="Camino: Stránka o produktu">Camino</a> se dočkal své první alpha verze. Uživatelé se mohou těšit na vylepšenou podporu Javy, záložek, tisku, správce stahování a dalších součástí prohlížeče. Bližší informace naleznete v <a href="http://www.caminobrowser.org/releases/10a1.html" title="Poznámky k verzi" hreflang="en">poznámkách k verzi</a>. <a href="http://www.caminobrowser.org/download/releases/1a1/" hreflang="en">Stahovat</a> můžete ze stránek <a href="http://www.caminobrowser.org/" title="Camino: Domovská stránka" hreflang="en">CaminoBrowser.org</a></div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/09/16/">16. 9. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/opet-dalsi-vyvojar-mozilly-u-googlu/">Opět další vývojář Mozilly u Googlu</a></h3>

	<div>Vedoucí vývojář <a href="http://www.mozilla-europe.org/cs/products/camino/" title="Camino: Stránka o produktu">Camina</a>, <a href="http://weblogs.mozillazine.org/pinkerton/" hreflang="en" title="Sucking less, on a budget">Mike Pinkerton</a>, <a href="http://weblogs.mozillazine.org/pinkerton/archives/008843.html" hreflang="en" title="Sucking less, on a budget: Time for a change">oznámil, že odchází pracovat ke Googlu</a>. Jeho hlavní pracovní náplň se zřejmě bude týkat především <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a>, ale příznivci Camina nemusí mít strach &ndash; Google totiž umožňuje svým zaměstancům trávit 20&nbsp;% pracovní doby nad svými projekty a Mike už deklaroval, že značnou část tohoto času hodlá Caminu věnovat. Mike Pinkerton je už čtvrtým vývojářem Mozilly, kterého Google přetáhl k sobě &ndash; před ním to byli Ben Goodger, Darin Fisher a Brian Ryner.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/09/08/">8. 9. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/firefox-a-camino-budou-na-mac-os-x-podporovat-nejnovejsi-javu/">Firefox a Camino budou na Mac OS X podporovat nejnovější Javu</a></h3>

	<div>Jablíčkáře jistě potěší, že <a href="http://www.mozillazine.org/talkback.html?article=7230" hreflang="en" title="Java Embedding Plugin Included in Mac Mozilla Firefox and Camino - MozillaZine Talkback">všechny budoucí verze Firefoxu a Camino budou obsahovat Java Embedding Plugin</a>. Díky tomu půjde v těchto prohlížečích na platformě Mac OS X využívat i Javu ve verzích 1.4.x a 5.0 (1.5). Z technických důvodů (změna rozhraní na straně Apple) můžou nyní pracovat nejvýše s Javou 1.3.1.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/09/02/">2. 9. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/zahajen-vyvoj-gecka-1.9/">Zahájen vývoj Gecka 1.9</a></h3>

	<div>Z oficiálního vývojového stromu produktů Mozilly <a href="http://www.mozillazine.org/talkback.html?article=7146" hreflang="en" title="1.8 Branch Created, Trunk Opens for 1.9 Development">byla oddělena větev 1.8</a>, kde bude nyní pokračovat vývoj a stabilizace <a href="/produkty/firefox/">Firefoxu</a> 1.5, <a href="/produkty/thunderbird/">Thunderbirdu</a> 1.5 a Camino 1.0, které budou brzy vydány. Oddělení znamená, že v hlavní části stromu (tzv. <em>trunk</em>) může současně začít vývoj nové verze jádra <a href="http://www.mozilla.org/newlayout/" hreflang="en" title="Mozilla Layout Engine">Gecko</a> 1.9 a produktové řady 2.0 se <a href="/archiv-2005.html#news:8cf7bbbf088a09cd63e1b3741c58e4e6" title="Co nás čeká ve Firefoxu 2.0?">spoustou plánovaných inovací</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/08/15/">15. 8. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-ve-verzi-1.0-na-podzim/">Camino ve verzi 1.0 na podzim</a></h3>

	<div>Webový prohlížeč <a href="http://www.mozilla-europe.org/cs/products/camino/" title="Camino: Stránka o produktu">Camino</a> se dočkal <a href="http://weblogs.mozillazine.org/pinkerton/archives/008596.html" title="New Camino Roadmap" hreflang="en">nového plánu vývoje</a>. Můžete se v něm dočíst, že do dvou týdnů se tento prohlížeč pro Mac OS dočká verze 0.9 beta, která bude předzvěstí verze 1.0. Ta je očekávána na podzim tohoto roku a podobně jako <a href="/produkty/firefox/" title="Mozilla Firefox: Stránka o produktu">Firefox</a> 1.5 bude založena na renderovacím jádru Gecko 1.8.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/27/">27. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/podvrzeni-prislusnosti-dialogoveho-okna-ke-strance/">Podvržení příslušnosti dialogového okna ke stránce</a></h3>

	<div><a href="http://secunia.com/advisories/15489/" title="Secunia - Advisories - Mozilla / Firefox / Camino Dialog Origin Spoofing Vulnerability" hreflang="en">Secunia objevila méně závažnou bezpečnostní chybu</a>, postihující prohlížeče Mozilla Suite 1.7.8, Firefox 1.0.4 a Camino 0.8.4 (pravděpodobně i starší verze). Díky tomu, že dialogy vyvolávané JavaScriptem nejsou identifikované příslušnou doménou, je možné, aby útočníkova stránka zobrazila dialog, který vypadá, jako by byl vyvolán důvěryhodnou stránkou. K vyvolání chyby je nutná aktivní účast uživatele (musí kliknout na odkaz na stránce útočníka). K dispozici je <a href="http://secunia.com/multiple_browsers_dialog_origin_vulnerability_test/" title="Secunia - Multiple Browsers Dialog Origin Vulnerability Test" hreflang="en">test na (ne)přítomnost chyby</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/06/21/">21. 6. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/k-meleon-camino-a-kazehakase-nativni-prohlizece-zalozene-na-gecku/">K-Meleon, Camino a Kazehakase - nativní prohlížeče založené na Gecku</a></h3>

	<div>Jednou z výhod modularity kódu Mozilly je, že pokud vám jako programátorovi vadí její multiplatformní rozhraní, není problém zahrnout do své aplikace jen <a href="http://www.mozilla.org/newlayout/" title="Mozilla Layout Engine" hreflang="en">její jádro</a> a obalit ho nativním uživatelským rozhraním. <a href="http://www.newsforge.com/" title="NewsForge: The Online Newspaper for Linux and Open Source" hreflang="en">NewsForge</a> přináší <a href="http://internet.newsforge.com/article.pl?sid=05/05/03/1649210" title="NewsForge | Platform-specific Gecko-based browsers" hreflang="en">přehled a zhodnocení třech takto vzniklých prohlížečů</a> - <a href="http://kmeleon.sourceforge.net/" hreflang="en">K-Meleonu</a>, <a href="http://www.caminobrowser.org/" hreflang="en">Camina</a> a <a href="http://kazehakase.sourceforge.jp/" hreflang="en">Kazehakase</a>. Jak je vidět, uživatelé, kterým nevyhovuje <a href="/produkty/suite/">Mozilla Suite</a> ani <a href="/produkty/firefox/">Firefox</a>, mají z čeho vybírat.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/13/">13. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-0.8.4/">Camino 0.8.4</a></h3>

	<div><a href="http://www.mozillazine.org/talkback.html?article=6537" title="Camino 0.8.4 Released" hreflang="en">Bylo vydáno Camino 0.8.4</a>. Nová verze nepřináší žádné novinky, pouze opravuje bezpečností chyby a zajišťuje kompatibilitu s Mac OS X 10.4 Tiger. Můžete si stáhnout <a href="http://www.caminobrowser.org/download/releases/084/">obyčejnou</a> (dmg.gz, 7,2&nbsp;MB) či <a href="http://www.caminobrowser.org/download/releases/084-MultiLang/">vícejazyčnou</a> (dmg.gz, 7,4&nbsp;MB) verzi a také si přečíst <a href="http://www.mozilla.org/products/camino/releases/0.8.4.html" title="Camino 0.8.4 Release Notes" hreflang="en">poznámky k vydání</a>. Vzhledem k opraveným bezpečnostním problémům doporučujeme upgradovat.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/29/">29. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/jak-vznikal-web-caminobrowser.org/">Jak vznikal web CaminoBrowser.org</a></h3>

	<div><a href="http://www.samuelsidler.com/2005/03/making-of-caminobrowserorg.html" title="SamuelSidler.com: The Making of CaminoBrowser.org" hreflang="en">Zajímavý pohled do zákulisí</a> toho, jak vznikal web <a href="http://www.caminobrowser.org/" title="Camino - Mozilla power, Mac style." hreflang="en">CaminoBrowser.org</a> nabízí na svém weblogu <a href="http://www.samuelsidler.com/" hreflang="en">Samuel Sidler</a>, jeden z jeho spolutvůrců.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/23/">23. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-0.8.3-multilanguage/">Camino 0.8.3 Multilanguage</a></h3>

	<div><a href="http://www.mozillazine.org/talkback.html?article=6337" title="Camino 0.8.3 Multilanguage Released" hreflang="en">Byla vydána vícejazyčná verze Camino 0.8.3</a>. Obsahuje celkem 14 jazykových variant včetně češtiny (ta nicméně není výsledkem práce CZilly). Stahovat můžete z <a href="http://www.caminobrowser.org/download/releases/083-MultiLang/">caminobrowser.org</a> nebo <a href="http://ftp.czilla.cz/mozilla.org/camino/0.8.3/Camino-0.8.3-MultiLang.dmg.gz">od nás</a> (dmg.gz, 9,4&nbsp;MB).</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/06/">6. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-0.8.3/">Camino 0.8.3</a></h3>

	<div><a href="http://weblogs.mozillazine.org/pinkerton/archives/007859.html" title="Sucking less, on a budget: 083 Released" hreflang="en">Mike Pinkerton oznámil vydání Camino 0.8.3</a>. Nová verze nepřináší žádné větší novinky a především opravuje chyby verzí předchozích. Můžete <a href="http://ftp.mozilla.org/pub/mozilla.org/camino/releases/Camino-0.8.3.dmg.gz">jít stahovat</a> (dmg.gz, 7,2&nbsp;MB) nebo si přečíst <a href="http://www.mozilla.org/products/camino/releases/0.8.3.html" title="Camino 0.8.3 Release Notes" hreflang="en">poznámky k vydání</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/01/">1. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-0.8.3-release-candidate/">Camino 0.8.3 Release Candidate</a></h3>

	<div>Přínznivce platformy Mac OS X jistě potěší zpráva o <a href="http://weblogs.mozillazine.org/pinkerton/archives/007802.html" title="Sucking less, on a budget: 083 Release Candidate" hreflang="en">uvolnění release candidate Camina 0.8.3</a> s tím, že ostrá verze tu prý bude co nevidět. Ještě důležitější událostí ale nejspíš je, že hlavní vývojář Camina, <a href="http://weblogs.mozillazine.org/pinkerton/" title="Sucking less, on a budget" hreflang="en">Mike Pinkerton</a>, nastínil <a href="http://weblogs.mozillazine.org/pinkerton/archives/007794.html" title="Sucking less, on a budget: 083 Coming Soon and 0.9 Roadmap" hreflang="en">plán dašího vývoje</a> směrem k verzím 0.9 a 1.0.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/03/24/">24. 3. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/nove-stranky-prohlizece-camino/">Nové stránky prohlížeče Camino</a></h3>

	<div><a href="http://www.mozilla.org/" hreflang="en">Mozilla Foundation</a> spustila nový web věnovaný projektu prohlížeče Camino - <a href="http://www.caminobrowser.org/" title="Camino - Mozilla power, Mac style." hreflang="en">CaminoBrowser.org</a>. Práce na tomto webu probíhaly několik měsíců. Najdete zde zejména informace o Caminu, přehled jeho funkcí, screenshoty a sekci se spoustou materiálů pro uživatele. Za zmínku stojí i velmi čistá a vkusná grafická stránka.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/03/21/">21. 3. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/co-planuje-josh-aas/">Co plánuje Josh Aas?</a></h3>

	<div>Již jsme psali o tom, že <a href="/archiv-2005.html#news:07b30c5f4d608c65bcd05610885ac9b2" title="Mozilla Foundation má nového zaměstnance">Mozilla Foundation zaměstnala Joshe Aase</a> a že zde bude pracovat na věcech týkajících se Mac&nbsp;OS&nbsp;X. Josh nyní <a href="http://weblogs.mozillazine.org/josh/archives/2005/02/camino_firefox.html" title="Boom Swagger Boom: Camino, Firefox on Mac&nbsp;OS&nbsp;X, and My MF Employment" hreflang="en">vyjasnil, co konkrétně má v plánu</a> - chce především upravit ovládací prvky formulářů, aby byly chováním podobnější těm nativním, a také zrychlit renderování využitím API <a href="http://developer.apple.com/graphicsimaging/quartz/" hreflang="en">Quartz</a> (<a href="http://www.mozilla.org/newlayout/" title="Mozilla Layout Engine" hreflang="en">Gecko</a> dosud na Mac&nbsp;OS&nbsp;X používá starší technologii <a href="http://developer.apple.com/macos/quickdraw.html" hreflang="en">QuickDraw</a>). Tyto a další úpravy by měly prospět jak <a href="/produkty/firefox/">Firefoxu</a> a <a href="http://www.caminobrowser.org/" hreflang="en">Caminu</a>, tak i dalším aplikacím založeným na Gecku.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/03/05/">5. 3. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/porovnani-rychlosti-prohlizecu/">Porovnání rychlosti prohlížečů</a></h3>

	<div>Každý druhý prohlížeč o sobě tvrdí, že je ten nejrychlejší. Pokud ale chcete místo slov vidět čísla ("důkaz místo slibů" :-), podívejte se na <a href="http://www.howtocreate.co.uk/browserSpeed.html" title="Browser speed comparisons" hreflang="en">toto podrobné srovnání rychlostí prohlížečů</a>. Na několika různorodých testovacích sadách jsou zde srovnány nejrozšířenější prohlížeče na třech nejdůležitějších platformách (Windows, Linux, Mac OS X).</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/17/">17. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/objeveny-ctyri-nove-bezpecnostni-problemy/">Objeveny čtyři nové bezpečnostní problémy</a></h3>

	<div><a href="http://secunia.com/" title="Secunia - Vulnerability and Virus Information" hreflang="en">Secunia</a> hlásí <a href="http://secunia.com/advisories/14163/" title="Secunia - Advisories - Mozilla / Firefox / Camino IDN Spoofing Security Issue" hreflang="en">možnost podvržení doménového jména</a> v adresovém či stavovém řádku a u <abbr title="Secure Sockets Layer">SSL</abbr> certifikátů v <a href="/produkty/suite/">Mozilla Suite</a>, <a href="/produkty/firefox/">Firefoxu</a> a <a href="http://www.caminobrowser.org/" hreflang="en">Camino</a>. Chyba zneužívá standard <abbr title="International Domain Names">IDN</abbr>, díky kterému mohou být v názvech domén mezinárodní znaky, z nichž některé jsou na pohled zaměnitelné s normálními latinskými písmeny. Oprava chyby zatím není k dispozici. Tímto problémem je postižena i většina ostatních prohlížečů kromě <abbr title="Internet Explorer">IE</abbr>, který <abbr title="International Domain Names">IDN</abbr> nepodporuje. <a href="http://secunia.com/advisories/14160/" title="Secunia - Advisories - Mozilla / Firefox Three Vulnerabilities" hreflang="en">Další problémy</a> jsou označeny jako méně závažné a týkají se zneužití přetahování souborů s obrázky, odkazů s JavaScripty a možnosti přimět uživatele nevědomky změnit nastavení v about:config.  Ve vývojových verzích postižených produktů (Mozilla Suite, Firefox) jsou již tyto problémy opraveny.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/08/">8. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-ma-placenou-technickou-podporu/">Mozilla má placenou technickou podporu</a></h3>

	<div>Mozilla má nyní <a href="http://support.mozsource.com/a/news" hreflang="en">placenou e-mailovou technickou podporu</a>. Za 5 dolarů (přesněji 4.99 :-) se můžete <a href="http://support.mozsource.com/" hreflang="en">obrátit</a> na společnost <a href="http://www.mozsource.com/" hreflang="en">MozSource</a> (která mimochodem provozuje i <a href="http://www.mozillastore.com/" hreflang="en">Mozilla Store</a>) a dostane se vám pomoci s problémy vzniklými při instalaci, konfiguraci či používání <a href="/produkty/suite/">Mozilla Suite</a>, <a href="/produkty/firefox/">Firefoxu</a>, <a href="/produkty/thunderbird/">Thunderbirdu</a> a Camina. Českým uživatelům ale v jejich vlastním zájmu doporučujeme zkusit se nejdříve zeptat v <a href="http://forum.czilla.cz/">našem fóru</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/12/14/">14. 12. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/nove-lokalizace-na-mozilla.sk/">Nové lokalizace na Mozilla.sk</a></h3>

	<div>Na <a href="http://www.mozilla.sk/" hreflang="sk">Mozilla.sk</a> najdete slovenské lokalizační balíčky pro <a href="http://www.mozilla.sk/l10n/packs_tb_sk.html" hreflang="sk">Thunderbird 1.0</a>, <a href="http://www.mozilla.sk/l10n/packs_camino_sk.html" hreflang="sk">Camino 0.8.2</a> a <a href="http://www.mozilla.sk/l10n/" hreflang="sk">lokalizaci některých rozšíření</a> (GoogleBar, Enigmail, Kalendar...). Pokud potřebujete pomoci s instalací lokalizačního balíčku, určitě si prohlédněte se Hi-Tech <a href="http://www.mozilla.sk/l10n/tb-navod-09.swf" title="Animace ve Flashi">ukázkovou animaci</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/12/10/">10. 12. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-0.8.2-prohlizec-pro-jablicka/">Camino 0.8.2 - prohlížeč pro jablíčka</a></h3>

	<div><span lang="en">Mike Pinkerton</span> oznámil <a href="http://www.mozilla.org/products/camino/releases/0.8.2.html" title="Mozilla.org: Camino 0.8.2 Release Notes" hreflang="en">verzi 0.8.2</a> samostatného prohlížeče <a href="http://www.mozilla-europe.org/cs/products/camino/">Camino</a> určeného pro Mac OS X. Verze obsahuje několik oprav záložek, zlepšenou stabilitu a řadu dalších vylepšení, podrobně v <a href="http://www.mozilla.org/products/camino/releases/0.8.2.html" title="Mozilla.org: Camino 0.8.2 Release Notes" hreflang="en">poznámkách k vydání</a>. Ke stažení je zatím <a href="http://ftp.mozilla.org/pub/mozilla.org/camino/releases/Camino-0.8.2.dmg.gz" title="Camino-0.8.2.dmg.gz - 7,2 MB">anglická verze</a>, ale během několika dnů se očekává i mnohojazyčná verze včetně <strong>české lokalizace</strong>.</div>
	<div class="ft">
		<a href="/zpravicky/a/aha/">Adam Hauner</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/12/06/">6. 12. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/novinky-na-mozilla.sk-3/">Novinky na Mozilla.sk</a></h3>

	<div>Na <a href="http://www.mozilla.sk/">mozilla.sk</a> najdete slovenské lokalizační balíčky pro <a href="http://www.mozilla.sk/l10n/packs_camino_sk.html">Camino 0.8.1</a>, <a href="http://www.mozilla.sk/l10n/packs_18_sk.html">Mozillu 1.8a3</a> a <a href="http://www.mozilla.sk/l10n/packs_70_sk.html">Nestcape 7.2</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/08/30/">30. 8. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/novinky-na-mozilla.sk/">Novinky na Mozilla.sk</a></h3>

	<div>Na <a href="http://www.mozilla.sk/" title="Domovská stránka Mozilla.sk">Mozilla.sk</a> najdete slovenské lokalizační balíčky pro <a href="http://www.mozilla.sk/l10n/packs_15_sk.html">Mozillu 1.7</a>, <a href="http://www.mozilla.sk/l10n/packs_ff_sk.html">Firefox 0.9</a> a <a href="http://www.mozilla.sk/l10n/packs_camino_sk.html">Camino 0.8</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/06/28/">28. 6. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/camino-0.8-beta/">Camino 0.8 beta</a></h3>

	<div>Beta verze <a href="http://www.mozilla.org/products/camino/">Camina</a>, prohlížeče s nativním rozhraním pro Mac OS X, používá Gecko z Mozilly 1.7 (předchozí verze byla založena na Mozille 1.0). Mezi <a href="http://www.mozilla.org/products/camino/releases/0.8b.html">řadou vylepšení</a> nalezneme nový správce záložek, lištu pro vyhledávání na Google či přepracovaný download manager. Stahovat můžete z <a href="http://ftp.mozilla.org/pub/mozilla.org/camino/releases/Camino-0.8b.dmg.gz">Mozilla.org</a> (7&nbsp;MB). Finální verze Camina 0.8 bude vydána zhruba do měsíce.</div>
	<div class="ft">
		<a href="/zpravicky/a/aha/">Adam Hauner</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/05/18/">18. 5. 04</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
