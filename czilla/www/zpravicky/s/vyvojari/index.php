<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky se štítkem Vývojáři');
	$page->setHeadline('Zprávičky se štítkem Vývojáři', 'Přehled toho nejžhavějšího ze světa Mozilly, štítek Vývojáři');
	$page->includeTemplate('header');
?>
<div id="navigation">
	Vybrat zprávičky se štítkem:
						<a href="/zpravicky/s/bezpecnost/">Bezpečnost</a>

		|
						<a href="/zpravicky/s/bugzilla/">Bugzilla</a>

		|
						<a href="/zpravicky/s/camino/">Camino</a>

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
						<strong>Vývojáři</strong>

		|
						<a href="/zpravicky/s/webove-technologie/">Webové technologie</a>

		|
						<a href="/zpravicky/s/xulrunner/">XULRunner</a>

		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>

<div class="news">
	<h3><a href="/zpravicky/knihovna-fuel-v-nocnich-verzich/">Knihovna FUEL v nočních verzích</a></h3>

	<div><a href="http://www.starkravingfinkle.org/blog/" title="Markův blog" hreflang="en">Mark Finkle</a>, jeden z vývojářů JavaScriptové <a hreflang="en" href="http://wiki.mozilla.org/FUEL">knihovny <acronym title="Firefox User Extension Library" lang="en">FUEL</acronym></a> dnes <a href="http://starkravingfinkle.org/blog/2007/04/fuel-project-status-01-lands/" hreflang="en" title="Markův příspěvek v blogu">oznámil</a> zařazení první verze této knihovny do nočních verzí prohlížeče <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefox</a>. Knihovna <acronym title="Firefox User Extension Library" lang="en">FUEL</acronym> si klade za úkol vytvořit základní objektový model aplikace zahrnující objekty jako Aplikace, Rozšíření či Předvolby, včetně často potřebných vlastností a metod, dostupných dříve pouze pomocí rozhraní <a href="http://developer.mozilla.org/cs/docs/XPCOM">XPCOM</a>, a tím poskytnout vývojářům rozšíření prohlížeče Firefox prostředky pro jejich rychlejší a snazší tvorbu. </div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/04/24/">24. 4. 07</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/vytvorte-si-listu-pro-firefox/">Vytvořte si lištu pro Firefox</a></h3>

	<div>Tak zní titulek <a href="http://computer.zive.cz/themes/computernew/pdfjpg.php?vydani=0708&stranka=86" title="Computer: Vytvořte si lištu pro Firefox">dvoustránkového návodu</a> v dnes vycházejícím časopisu Computer. Tato "vystřihovánka" v sekci Profi vás zasvětí do tajů tvorby nástrojové lišty pro Firefox. Nebudete k tomu potřebovat nic víc, než běžný textový editor a komprimační program pro tvorbu ZIP archivů.</div>
	<div class="ft">
		<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/04/19/">19. 4. 07</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/podpora-apng-v-mozille/">Podpora APNG v Mozille</a></h3>

	<div>Do vývojové větve Mozilly byla přidána podpora pro <abbr title="Animated Portable Network Graphics">APNG</abbr>, což je grafický formát rozšířující formát <abbr title="Portable Network Graphics" lang="en">PNG</abbr> o podporu animací, podobně jako to zvládá formát <abbr title="Graphics Interchange Format" lang="en">GIF</abbr>, a to včetně  zachování zpětné kompatibility s neanimovanými <abbr title="Portable Network Graphics" lang="en">PNG</abbr> soubory. Tento formát byl v roce 2004 <a href="http://wiki.mozilla.org/APNG_Specification" hreflang="en">navržen vývojáři Mozilly</a> Stuartem Parmenterem a Vladimirem Vukicevicem a v současnosti je v rámci <abbr title="Portable Network Graphics" lang="en">PNG</abbr> skupiny dokončována jeho standardizace. Andrew Smith, který jej do Mozilly implementoval, přidal jeho podporu i <a href="http://littlesvr.ca/apng/">do knihovny libpng</a>, takže ho mohou snadno začít používat i ostatní aplikace.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/03/21/">21. 3. 07</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/allpeers-uvolnen-jako-open-source/">AllPeers uvolněn jako Open Source</a></h3>

	<div>Autoři rozšíření <a href="http://www.allpeers.com/" hreflang="en">AllPeers</a> dnes <a href="http://www.allpeers.com/blog/2007/03/07/allpeers-goes-open-source/">uvolnili</a> jeho zdrojové kódy jako Open Source. AllPeers je rozšíření, které do Firefoxu přidává klienta výměnné sítě, která je založena na technologii BitTorrent. Tento krok bude podle autorů přínosem pro další vývojáře, kteří mohou nyní ve svých rozšířeních použít části jejich kódu. Dalším očekávaným přínosem má být spolupráce s vývojáři, kteří budou moci rozšíření opravovat a upravovat.<br/><br/>
Programátoři z AllPeers připravili <a href="http://developer.allpeers.com/" hreflang="en">stránku</a>, která je určena všem zájemcům o zdrojové kódy.</div>
	<div class="ft">
		<a href="/zpravicky/a/kurc/">Pavel Kurc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/03/07/">7. 3. 07</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/off-line-prace-ve-firefoxu-3/">Offline práce ve Firefoxu 3</a></h3>

	<div><a href="http://www.bluishcoder.co.nz/" title="Blog Chrise Double" hreflang="en">Chris Double</a> vytvořil <a href="http://www.bluishcoder.co.nz/offlinezimbra" hreflang="en" title="Podpora off-line režimu">demo</a>, které na sestavení <a href="http://www.mozilla.org/projects/firefox/3.0a2/releasenotes/" hreflang="en" title="Firefox 3">Gran Paradiso Alfa 2</a> (budoucí Firefox 3) ukazuje, jak by měla vypadat podpora online aplikací v režimu offline. Toto sestavení již totiž obsahuje veškerou potřebnou funkcionalitu:
<ul>
<li><a href="http://developer.mozilla.org/en/docs/DOM:Storage" hreflang="en">DomStorage</a> &mdash; mechanizmus pro lokální čtení/zápis pomocí páru klíč/hodnota definovaný ve specifikaci <a href="http://www.whatwg.org/specs/web-apps/current-work/" hreflang="en" title="WHATWG specifikace Web Applications 1.0">Web Applications 1.0</a>,</li>
<li>Offline cache &mdash; speciální vyrovnávací paměť pro offline režim, do které aplikace mohou přistupovat pomocí parametru rel="offline-resource" elementu &lt;link&gt;,</li>
<li><a href="http://www.whatwg.org/specs/web-apps/current-work/#offline" hreflang="en">Offline Event</a> &mdash; událost, která je spuštěna při přechodu do off-line režimu.</li>
</ul>
Ačkoliv je demo postavené na známé kancelářské online aplikaci <a href="http://www.zimbra.com/" hreflang="en">Zimbra</a>, jednou z prvních aplikací téže kategorie, umožňující práci v offline režimu, je <a href="http://iscrybe.com/main/index.php" hreflang="en">scrybe</a>, který ovšem používá technologii Flash.</div>
	<div class="ft">
		<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/02/14/">14. 2. 07</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/vyvojarske-centrum-mozilly-v-cestine/">Vývojářské centrum Mozilly v češtině</a></h3>

	<div>Projekt <a href="http://developer.mozilla.org/cs/docs/Hlavn%C3%AD_strana">Vývojářské centrum Mozilly</a>, jehož <a href="http://developer.mozilla.org/cs/docs/MDC" title="O MDC">cílem</a> je přinášet ucelenou a snadno použitelnou dokumentaci k technologiím webu a Mozilly, obsahuje od dnešního dne oficiálně i <a href="http://developer.mozilla.org/cs/docs/Hlavn%C3%AD_strana">českou lokalizaci</a>. Na tento web jsme rovněž převedli naši sekci pro vývojáře, kterou tímto rušíme. Jelikož je celý projekt postavený na nástroji <a href="http://wikipedia.sourceforge.net/" hreflang="en">MediaWiki</a>,  můžete se do něj snadno zapojit i vy a nějakou tu <a href="http://developer.mozilla.org/cs/docs/Kategorie:Pot%C5%99ebuje_p%C5%99elo%C5%BEit">stránku</a> či její kousek pro ostatní přeložit.
</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2007/01/06/">6. 1. 07</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/ceske-xul-cms/">České XUL CMS</a></h3>

	<div>Existuje mnoho systémů pro správu obsahu (<abbr title="Content Management System" lang="en">CMS</abbr>). Jeden takový systém, postavený na <abbr title="XML User Interface Language" lang="en">XUL</abbr> a zdarma ke <a href="http://download.webdevelopers.cz/elixon-2.0a-rev2236.tar.gz">stažení</a>, vyvíjí česká firma <a href="http://www.webdevelopers.cz/">elixon</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/12/10/">10. 12. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/xul-v-benatkach/">XUL v Benátkách</a></h3>

	<div>Dlouho připravovaný a tajemný projekt internetové TV, <a href="http://www.theveniceproject.com/" hreflang="en" title="The Venice Project">The Venice Project</a>, nabízí několik <a href="https://www.theveniceproject.com/screenshots/" hreflang="en">screenshotů</a> chystaného klienta. Ten je postaven na technologiích <abbr title="XML User Interface Language" lang="en">XUL</abbr>+<a href="http://www.croczilla.com/zap/zmk" hreflang="en">zmk</a>+<abbr title="Scalable Vector Graphics" lang="en">SVG</abbr>+&lt;xul:sprite&gt;+mnoho dalších. Na jeho vývoji se podílí německý vývojář <a href="http://www.croczilla.com/personal/bio" hreflang="en" title="O Alexu Fritzovi">Alex Fritze</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/12/10/">10. 12. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/adobe-podpori-mozillu/">Adobe podpoří Mozillu</a></h3>

	<div>Jak dnes <a href="http://news.com.com/2100-7344_3-6133052.html?part=rss&amp;tag=6133052&amp;subj=news" hreflang="en" title="Adobe to donate script code to Mozilla">informuje</a> server <a href="http://news.com.com/" hreflang="en">news.com</a>, společnost Adobe, vlastník technologie Flash, oznámí dnes na konferenci <a href="http://www.web2con.com/?tag=nl" hreflang="en">Web 2.0</a>, že věnuje svůj <abbr title="Virtual Machine" lang="en">VM</abbr> pro běh ActiveScriptu nadaci Mozilla. To v budoucnu umožní rychlejší implementaci 4. edice <abbr title="European Computer Manufacturers Association" lang="en">ECMA</abbr>Scriptu (aka JavaScriptu), jak již <a href="http://weblogs.mozillazine.org/roadmap/archives/2006/10/mozilla_2.html" hreflang="en" title="Mozilla 2">nastínil</a> hlavní vývojář pro implementaci Javascriptu, Brendan Eich. Výsledkem této spolupráce je open-source projekt <a href="http://www.mozilla.org/projects/tamarin/" hreflang="en">Tamarin</a>, spravovaný oběma společnostmi. Více než 130 tisíc řádků kódu Tamarinu si již můžete stáhnout z <a href="http://lxr.mozilla.org/mozilla/source/js/tamarin/" hreflang="en" title="Mozilla Cross-reference">vývojářského <abbr title="Concurrent Versions System" lang="en">CVS</abbr></a>.
<p><b>Aktualizace:</b> Mozilla Corporation vydala k této události <a href="http://www.mozilla.com/en-US/press/mozilla-2006-11-07.html" hreflang="en" title="Adobe and Mozilla Foundation to Open Source Flash Player Scripting Engine">tiskové prohlášení</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/11/07/">7. 11. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/test-podpory-css3-selektoru-v-prohlizecich/">Test podpory CSS3 selektorů v prohlížečích</a></h3>

	<div>Na serveru <a href="http://www.css3.info/" hreflang="en" title="Everything you should know about CSS3 - CSS3 . info">CSS3.info</a> se objevily <a href="http://www.css3.info/selectors-test/" hreflang="en" title="CSS Selectors testsuite - CSS3 . info">testy podpory CSS3 selektorů v prohlížeči</a>. Můžete si je <a href="http://www.css3.info/selectors-test/test.html" hreflang="en" title="CSS Selectors testsuite - CSS3 . info">sami spustit</a> nebo si přečíst o <a href="http://rakaz.nl/item/how_well_do_browsers_support_css_selectors" hreflang="en" title="rakaz - How well do browsers support CSS Selectors?">výsledcích nejznámějších prohlížečů</a>. V testech trochu překvapivě zvítězil Konqueror, Firefox obsadil třetí místo (druhé, pokud by se počítaly jen vydané verze). Autor srovnání nicméně poznamenal, že implementace ve Firefoxu byla jediná, ve které nenašel žádné chyby.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/10/10/">10. 10. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/analyzu-kodu-firefoxu-vetsina-problemu-je-plany-poplach/">Analýzu kódu Firefoxu - většina problémů je planý poplach</a></h3>

	<div>Před několika dny prolétla internetem zpráva o <a href="http://www.czilla.cz/zpravicky/kod-firefoxu-pod-lupou/" title="CZilla: Kód Firefoxu pod lupou">analýze zdrojového kódu Firefoxu nástrojem Klocwork K7</a>, která údajně našla 655 potenciálních chyb a 71 bezpečnostních problémů. Na výsledky analýzy se <a href="http://weblogs.mozillazine.org/roc/archives/2006/09/static_analysis_and_scary_head.html" hreflang="en" title="Well, I&#039;m Back: Static Analysis And Scary Headlines">podrobně podíval vývojář Mozilly Robert O'Callahan</a> a spolu s dalšími vývojáři zjistil, že naprostá většina hlášených problémů je planý poplach. V článku pak uvažuje nad tím, proč většinu  bezpečnostních problémů nástroje na automatickou analýzu kódu těžko odhalí. Váhu O'Callahanovým slovům dodává i fakt, že s těmito nástroji pracoval v rámci doktorského studia.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/09/16/">16. 9. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/pripravuje-se-novy-system-pro-hlaseni-padu-aplikaci/">Připravuje se nový systém pro hlášení pádů aplikací</a></h3>

	<div>Pokud používáte produkty Mozilly, možná znáte <a href="http://www.czilla.cz/podpora/talkback.html" title="CZilla: Talkback - pomocník při pádu Mozilly">Talkback</a> (též <em>Mozilla Quality Feedback Agent</em>) &ndash; program, který při pádu aplikace pošle informace vývojářům Mozilly, aby mohli vyšetřit jeho příčinu. Talkback pochází ještě z doby Netscapu, je poněkud nepohodlný na ovládání a vývojářům nedává všechny informace, které potřebují. Proto se Mozilla ve spolupráci s Googlem rozhodla vyvinout náhradu &ndash; <a href="http://code.google.com/p/airbag/" hreflang="en" title="airbag - Google Code">Airbag</a>. Nový program je mulitplatformní, open source (a tedy využitelný nejen pro projekty <a href="http://www.mozilla.org/" hreflang="en" title="Mozilla.org - Home of the Mozilla Project">Mozilla.org</a>) a během několika týdnů by měl být začleněn do nočních sestavení. Podrobnosti <a href="http://benjamin.smedbergs.us/blog/2006-09-12/deploying-the-airbag/" hreflang="en" title="BSBlog &#187; Blog Archive &#187; Deploying the Airbag">najdete u Benjamina Smedberga</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/09/16/">16. 9. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/microsoft-chce-pomoci-vyvojarum-mozilly-s-prechodem-na-windows-vista/">Microsoft chce pomoci vývojářům Mozilly s přechodem na Windows Vista</a></h3>

	<div>Microsoft má zájem, aby na blížících se Windows Vista bezproblémově běželo co nejvíce aplikací &ndash; včetně těch od Mozilly. Ředitel open source laboratoře Microsoftu Sam Ramji proto <a href="http://groups.google.com/group/mozilla.dev.planning/browse_frm/thread/622906b52581628e/a303e61ccb5c8149#a303e61ccb5c8149" hreflang="en" title="Google Groups : mozilla.dev.planning">pozval vývojáře Firefoxu a Thunderbirdu do Redmondu</a>, kde jim pracovníci Microsoftu pomůžou vyřešit případné problémy při integraci s novým systémem. Zda vývojáři pozvání přijali není v tuto chvíli známo. Pozvání je první takovou nabídkou pro vývojáře open source aplikací &ndash; Microsoft na podobné akce doposud zval jen tvůrce komerčního software.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/08/24/">24. 8. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-developer-center-statistiky/">Mozilla Developer Center - statistiky</a></h3>

	<div><a href="http://www.dria.org/wordpress/" hreflang="en" title="dria.org">Deb Richardson</a>, která se stará o sekci <a href="http://developer.mozilla.org/" hreflang="en" title="Main Page - MDC">Mozilla Developer Center</a>, oznámila, že anglická verze wiki na tomto webu v minulém týdnu <a href="http://www.dria.org/wordpress/archives/2006/08/02/435/" hreflang="en" title="dria.org &#187; Blog Archive &#187; 20,000,000">oslavila 20 milionů zobrazených stránek</a>, což znamená denní průměr cca 40 tisíc. Ze <a href="http://developer.mozilla.org/en/docs/Special:Statistics" hreflang="en" title="Statistics - MDC">statistik</a> dále vyplývá, že uživatelé ve wiki v půměru denně provedou 70 editací a založí 5 nových stránek. Je tedy zřejmé, že Mozilla Developer Center je živý web a vývojářům nabízí zvětšující se množství dokumentace popisující platformu Mozilla a související technologie.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/08/05/">5. 8. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/novinky-firefoxu-2-0-pro-vyvojare/">Novinky Firefoxu 2.0 pro vývojáře</a></h3>

	<div>Na <a href="http://developer.mozilla.org/" hreflang="en">Mozilla Developer Center</a> v posledních dnech <a href="http://developer.mozilla.org/webwatch/?p=198" hreflang="en" title="MDC Webwatch &#187; Blog Archive &#187; Mozilla Developer Center update">přibylo několik dokumentů popisujících novinky připravovaného Firefoxu 2.0 pro vývojáře</a>. Jde především o <a href="http://developer.mozilla.org/en/docs/New_in_JavaScript_1.7" hreflang="en" title="New in JavaScript 1.7 - MDC">JavaScript 1.7</a>, nové rozhraní k ukládání dat <a href="http://developer.mozilla.org/en/docs/Storage" hreflang="en" title="Storage - MDC">Storage</a> (založené na databázovém enginu <a href="http://www.sqlite.org/" hreflang="en">SQLite</a>), tvorbu vyhledávacích modulů v <a href="http://developer.mozilla.org/en/docs/Creating_MozSearch_plugins" hreflang="en" title="Creating MozSearch plugins - MDC">novém formátu MozSearch</a>, jejich <a href="http://developer.mozilla.org/en/docs/Adding_search_engines_from_web_pages" hreflang="en" title="Adding search engines from web pages - MDC">instalaci z webových stránek</a> a <a href="http://developer.mozilla.org/en/docs/index.php?title=Supporting_search_suggestions_in_search_plugins" hreflang="en" title="Supporting search suggestions in search plugins - MDC">podporu "našeptávání"</a>. Podrobnější přehled s odkazy na další dokumenty najdete v <a href="http://developer.mozilla.org/en/docs/Firefox_2_for_developers" hreflang="en" title="Firefox 2 for developers - MDC">rozpracovaném rozcestníku</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/06/19/">19. 6. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/budoucnost-xul-v-cms/">Budoucnost XUL v CMS?</a></h3>

	<div>Zda se v nejbližší době ve větší míře uplatní <acronym title="XML-based User Interface Language">XUL</acronym> na webu je otázkou (o budoucnosti aplikačního webu nedávno <a href="http://www.sweb.cz/pichlik/archive/2003_12_28_archive.html#107305992219011857" title="Internetové prohlížeče a budoucnost">psal</a> v <a href="http://www.sweb.cz/pichlik/" title="Dagblog - blog nejen pro kodery">Dablogu</a> Roman Pichlík). Nicméně už teď se používá víc, než je na první pohled vidět a to zejména na místech, kde omezení na jednu kategorii prohlížečů nevadí - v administrativních rozhraních, <abbr title="Content management system">CMS</abbr> systémech apod. Bohužel ta častokrát nespatří světlo světa, ví o nich jen autor a jejich uživatelé, a veřejně se o nich moc neví. O tom, že takové <abbr title="Content management system">CMS</abbr> <a href="http://mab.mozdev.org/#why_xul">vytvořil</a> Faser (Fabio Serra, autor <a href="/archiv.html#news:b685b8c0f422b3df23d33f861fbf88c3">Mozilla Amazon Browseru</a>), jsem již věděl - <a href="http://www.cfmentor.com/~faser/xulex/images/faser_one_list_news.png" title="CMS in XUL">screenshot</a>, ale dnes jsem objevil <a href="http://www.fcms.de/">fCMS</a> - Freepoint Content Management System. Bohužel se jedná o proprietární software, takže si nic nevyzkoušíme.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/01/07/">7. 1. 04</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
