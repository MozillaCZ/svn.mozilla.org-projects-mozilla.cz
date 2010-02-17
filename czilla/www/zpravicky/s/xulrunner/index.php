<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky se štítkem XULRunner');
	$page->setHeadline('Zprávičky se štítkem XULRunner', 'Přehled toho nejžhavějšího ze světa Mozilly, štítek XULRunner');
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
						<a href="/zpravicky/s/vyvojari/">Vývojáři</a>

		|
						<a href="/zpravicky/s/webove-technologie/">Webové technologie</a>

		|
						<strong>XULRunner</strong>

		|
		<a href="/zpravicky/">Přehled zpráviček</a>
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
	<h3><a href="/zpravicky/songbird-0-2/">Songbird 0.2</a></h3>

	<div>Společnost <a href="http://www.songbirdnest.com/about" hreflang="en" title="About | Songbirdnest.com">Pioneers of the Inevitable</a> oznámila vydání <a href="http://www.songbirdnest.com/node/875" hreflang="en" title="Songbird 0.2 source and binaries available for Windows, Mac OS X and Linux | Songbirdnest.com">Songbirdu 0.2</a>, další testovací verze multimediálního přehrávače postaveného na platformě Mozilla. Vydaná verze je dostupná pro <a href="http://www.songbirdnest.com/download/get?sb_version=02&amp;platform=Win32">Windows</a>, <a href="http://www.songbirdnest.com/download/get?sb_version=02&amp;platform=linux-i686">Linux</a> (vč. <a href="http://www.songbirdnest.com/download/get?sb_version=02&amp;platform=linux-x86_64">64-bitové verze</a>) a <a href="http://www.songbirdnest.com/download/get?sb_version=02&amp;platform=MacPPC">Mac OS X</a> (vč. <a href="http://www.songbirdnest.com/download/get?sb_version=02&amp;platform=MacIntel">varianty pro Intel</a>). Součástí instalace je i česká lokalizace.</div>
	<div class="ft">
		<a href="/zpravicky/a/petrovicky/">Lukáš Petrovický</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/10/20/">20. 10. 06</a>
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
	<h3><a href="/zpravicky/xulrunner-predstaveni-a-tvorba-ukazkove-aplikace/">XULRunner: představení a tvorba ukázkové aplikace</a></h3>

	<div>O <a href="http://developer.mozilla.org/en/docs/XULRunner" hreflang="en" title="XULRunner - MDC">XULRunneru</a> jste se již na CZille mohli dočíst mnohokrát. Pokud přesto netušíte, o co se jedná, možná se vám bude hodit <a href="http://brian.kingsonline.net/talk/?page_id=182" hreflang="en" title="Pogovor &#187; XULRunner Application Development">článek Briana Kinga</a>, který XULRunner stručně představuje a obsahuje i postup vytvoření jednoduché aplikace nad ním. Článek je do angličtiny přeložen ze <a href="http://monitor.si/clanki.php?id=1379" title="Monitor - revija za računalništvo">slovinského originálu</a>, který byl napsán v březnu &ndash; autor <a href="http://brian.kingsonline.net/talk/?p=183" hreflang="en" title="Pogovor &#187; XULRunner Article in English">upozorňuje</a>, že vzhledem k rychlému vývoji již některé detaily nemusí být aktuální.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/07/04/">4. 7. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/nova-testovaci-verze-prehravace-songbird/">Nová testovací verze přehrávače Songbird</a></h3>

	<div>Společnost <a href="http://www.songbirdnest.com/about" hreflang="en" title="About | Songbirdnest.com">Pioneers of the Inevitable</a> oznámila tento týden <a href="http://www.songbirdnest.com/node/525" hreflang="en" title="Songbird not-yet-0.2 source and binaries available for Windows, Mac OS X and Linux | Songbirdnest.com">vydání nové testovací verze SongBirdu</a> &ndash; multimediálního přehrávače, založeného na technologii <a href="http://developer.mozilla.org/en/docs/XULRunner" hreflang="en" title="XULRunner - MDC">XULRunner</a>. Zároveň byl <a href="http://publicsvn.songbirdnest.com/" hreflang="en" title="Songbird - Trac">zpřístupněn zdrojový kód přehrávače</a> včetně <a href="http://subversion.tigris.org/" hreflang="en" title="subversion.tigris.org">Subversion</a> repository. Vydaná verze, označená jako not-yet-0.2, je kromě <a href="http://developer.songbirdnest.com/nightly/builds/win32/Songbird_20060626.exe">Windows</a> nově dostupná i pro <a href="http://developer.songbirdnest.com/nightly/builds/linux/Songbird_20060626_202750_FC5.tar.gz">Linux</a> a <a href="http://developer.songbirdnest.com/nightly/builds/mac/Songbird_20060626_PPC.dmg">Mac OS X</a> (včetně <a href="http://developer.songbirdnest.com/nightly/builds/mac/Songbird_20060626_Intel.dmg">varianty pro Intel</a>). Součástí instalace je i česká lokalizace (nepochází ovšem od CZilly a pokud tuto zprávičku její autor čte, budeme rádi, když se ozve).</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/06/30/">30. 6. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/podpora-odbc-v-mozille/">Podpora ODBC v Mozille</a></h3>

	<div>Aplikace založené na Mozille <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=254924" hreflang="en" title="Bug 254924 - ODBC support for SQL module">budou moci komunikovat s databázemi pomocí <abbr title="Open DataBase Connectivity" lang="en">ODBC</abbr></a> &ndash; příslušná úprava byla v pondělí zahrnuta do vývojového stromu. Podpora databázových rozhraní v Mozille není nic nového, již delší dobu se Mozilla domluví s <a href="http://www.mysql.com/" hreflang="en" title="MySQL AB :: The world&#039;s most popular open source database">MySQL</a>, <a href="http://www.postgresql.org/" hreflang="en" title="PostgreSQL: The world&#039;s most advanced open source database">PostgreSQL</a> a <a href="http://www.sqlite.org/" hreflang="en" title="SQLite home page">SQLite</a>. Podporu <abbr title="Open DataBase Connectivity" lang="en">ODBC</abbr> bude stejně jako u ostatních databázových rozhraní nutno zapnout při kompilaci aplikace.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/06/07/">7. 6. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/google-adwords-editor-vyuziva-xulrunner/">Google AdWords Editor využívá XULRunner</a></h3>

	<div><a href="http://services.google.com/adwordseditor/index.html" hreflang="en">AdWords Editor</a> je nová aplikace od <a href="http://www.google.com">Google</a> pro správu reklamních kampaní <a href="http://adwords.google.com/select/Login" title="AdWords: domovská stránka">AdWords</a>. Zajímavostí je, že aplikace pro svůj běh využívá <a href="http://developer.mozilla.org/en/docs/XULRunner" hreflang="en" title="XULRunner: domovská stránka"><abbr title="XML User Interface Language" lang="en">XUL</abbr>Runner</a>, který bude základem budoucích verzí <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> a <a href="/produkty/thunderbird/" title="Thunderbird: Stránka o produktu">Thunderbirdu</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/mik/">Michal Kec</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/06/06/">6. 6. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/czilla-na-linuxexpu-2006/">CZilla na LinuxExpu 2006</a></h3>

	<div>Ve dnech 10.-12. 4. 2006 se v pražském Hotelu Olympik koná výstava <a href="http://linuxexpo.cz/">LinuxExpo 2006</a>. Projekt <a href="/czilla/">CZilla</a>  bude mít opět na výstavě v rámci <strong>sekce Free &amp; Open Zone vlastní stánek</strong>. Kromě toho se ve středu 12. 4. v 14:00 uskuteční <a href="http://linuxexpo.cz/index.php?kategorie=283&amp;lang=CZ">přednáška</a> <a href="/czilla/lide.html#kdo-je-DM">Davida Majdy</a> na téma "Vývojová platforma Mozilla", která nabídne pohled na Mozillu jako na platformu pro vývoj aplikací, včetně informací o současnosti a budoucnosti XULRunneru. Všechny přátele a příznivce CZilly a Mozilly tímto srdečně zveme, těšíme se na setkání a připomínáme, že při <a href="http://linuxexpo.netsektor.net/">včasné registraci</a> je vstup na výstavu zdarma.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/03/28/">28. 3. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/ajax-toolkit-framework-pro-eclipse-vyuziva-xulrunner/">AJAX Toolkit Framework pro Eclipse využívá XULRunner</a></h3>

	<div>Společnost <abbr title="International Business Machines" lang="en">IBM</abbr> <a href="http://javier.pedemonte.us/blog/2006/03/02/ajax-toolkit-framework/" hreflang="en" title="unconditionally interesting &#187; AJAX Toolkit Framework released">vydala první verzi</a> nástroje <a href="http://www.alphaworks.ibm.com/tech/ajaxtk" hreflang="en" title="alphaWorks : AJAX Toolkit Framework : Overview">AJAX Toolkit Framework</a> pro známé vývojové prostředí <a href="http://www.eclipse.org/" hreflang="en" title="Eclipse.org home">Eclipse</a>. Toolkit by měl usnadnit vývoj především dynamických webových aplikací pomocí integrovaného <abbr title="Document Object Model" lang="en">DOM</abbr> Inspectoru, JavaScriptové konzole a možnosti ladění JavaScriptu přímo v prostředí Eclipse. Klíčovou součástí toolkitu je <a href="http://developer.mozilla.org/en/docs/XULRunner" hreflang="en" title="XULRunner - MDC"><abbr title="XML User Interface Language" lang="en">XUL</abbr>Runner</a>, který zajišťuje zobrazování stránek a slouží jako mezivrstva mezi stránkou a nástroji toolkitu.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/03/06/">6. 3. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/podpora-xul-v-eclipse/">Podpora XUL v Eclipse</a></h3>

	<div>9. února byla <a href="http://sourceforge.net/projects/eclipsexul" hreflang="en">uvolněna</a> verze 0.0.2 nástroje <a href="http://eclipsexul.sourceforge.net/" hreflang="en">Eclipse<abbr title="XML User Interface Language" lang="en">XUL</abbr></a>, který přidává do <a href="http://www.eclipse.org/" hreflang="en">Eclipse</a> podporu <a href="http://www.w3.org/TR/xslt" hreflang="en"><abbr title="XSL Transformations" lang="en">XSLT</abbr></a> a <a href="http://www.mozilla.org/projects/xul/" hreflang="en"><abbr title="XML User Interface Language" lang="en">XUL</abbr></a>. Eclipse<abbr title="XML User Interface Language" lang="en">XUL</abbr> také podporuje samotné aplikace v <abbr title="XML User Interface Language" lang="en">XUL</abbr> (postavené na <a href="http://wiki.mozilla.org/XUL:Xul_Runner" hreflang="en"><abbr title="XML User Interface Language" lang="en">XUL</abbr>Runneru</a>). Je postaven na Eclipse/WTP a licencován pod <a href="http://eclipse.org/legal/epl-v10.html" hreflang="en"><abbr title="Eclipse Public License" lang="en">EPL</abbr></a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/02/17/">17. 2. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/prehravac-songbird-0.1/">Přehrávač SongBird 0.1</a></h3>

	<div>Včera vyšla verze <a href="http://www.songbirdnest.com/home" hreflang="en" title="SongBird 0.1 - Proof Of Concept">SongBird 0.1 &ndash; Proof Of Concept</a>. Je to přehrávač médií podobný iTunes postavený na technologii XULRunner. V instalačním balíku je k dispozici i čeština. Malá vada na kráse této beta verze: má zatím problémy s českými znaky v tagu písniček &ndash; filmů.</div>
	<div class="ft">
		<a href="/zpravicky/a/merta/">Jan Merta</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/02/10/">10. 2. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/chatzilla-a-xulrunner/">Chatzilla a XULRunner</a></h3>

	<div>Jak jsme Vás již <a href="/archiv.html#news:36827d2f4b6d58fe58d4abc94ddbedc3" title="Vyšel XULRunner 1.8.0.1">informovali</a>, vyšla minulý týden první stabilní verze XULRunneru. Jako ukázku možností XULRunneru připravil vývojář <a href="http://thumper.kicks-ass.org/wordpress/" hreflang="en" title="Chrisův blog">Thumperward</a> <a href="http://thumper.kicks-ass.org/chatzilla-xulrunner-setup.exe" title="Instalátor XULRunneru a Chatzilly">windows verzi instalátoru</a> obsahující XULRunner a komunikační program ChatZilla, známý z balíku <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a>. Připomínáme, že stejnou formou &ndash; tj. ve formě XUL aplikací, běžících nad společným XULRunnerem &ndash; by se v budoucnu měly distribuovat i trojkové verze Mozilla <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> a <a href="/produkty/thunderbird/" title="Thunderbird: Stránka o produktu">Thunderbirdu</a> naplánované na příští rok na jaře.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/02/08/">8. 2. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/vysel-xulrunner-1.8.0.1/">Vyšel XULRunner 1.8.0.1</a></h3>

	<div>Jak informoval <a href="http://developer.mozilla.org/en/docs/User:Benjamin_Smedberg" hreflang="en">Benjamin Smedberg</a> na <a href="http://benjamin.smedbergs.us/blog/2006-02-03/xulrunner-1801-is-out/" hreflang="en">svém blogu</a>, vyšla včera po téměř dvou letech vývoje první stabilní (leč po stránce <abbr title="Application Programming Interface" lang="en">API</abbr> nekompletní) verze <a href="http://developer.mozilla.org/en/docs/XULRunner" hreflang="en">XULRunneru</a> 1.8.0.1, která je založená na stejném kódu Gecka jako <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefox</a> 1.5.0.1. První produkční verze 1.9 je pak plánována na první čtvrtletí 2007.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/02/04/">4. 2. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/prvni-stabilni-verze-xulrunneru-v-lednu,-produkcni-verze-az-za-rok/">První stabilní verze XULRunneru v lednu, produkční verze až za rok</a></h3>

	<div>Jak nedávno <a href="http://benjamin.smedbergs.us/" hreflang="en">Benjamin Smedberg</a> <a href="http://benjamin.smedbergs.us/blog/2005-12-20/new-xulrunner-docs/" hreflang="en">oznámil na svém blogu</a>, přepracoval <a href="http://wiki.mozilla.org/XULRunner:Roadmap" hreflang="en">dokumentaci <abbr title="XML User Interface Language" lang="en">XUL</abbr>Runneru</a>. Z té <a href="http://wiki.mozilla.org/XULRunner:Roadmap#The_XULRunner_1.8.0.x_series" hreflang="en">vyplývá</a>, že první stabilní (leč po stránce <abbr title="Application Programming Interface" lang="en">API</abbr> nekompletní) verze 1.8.0.1 by měla vyjít v polovině ledna 2006, současně s aktualizací <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a> 1.5.0.1. První produkční verze je pak plánována na první čtvrtletí 2007.</div>
	<div class="ft">
		<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/12/22/">22. 12. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/vydani-prehravace-songbird-odlozeno/">Vydání přehrávače Songbird odloženo</a></h3>

	<div>Jak včera na svém blogu <a href="http://www.songbirdnest.com/roblord/blog/user_preview_delayed" hreflang="en">oznámil</a> Rob Lord, bylo odloženo plánované dnešní vydání mediálního přehrávače <a href="http://www.songbirdnest.com/roblord/story/what_is_songbird" hreflang="en">Songbird</a>, vyvíjeného 5-členou firmou Pioneers of the Inevitable. Songbird, vyvíjený na platformě <a href="http://wiki.mozilla.org/XUL:Xul_Runner" hreflang="en"><abbr title="XML User Interface Language" lang="en">XUL</abbr>Runner</a> je určen k přehrávání digitální hudby prostřednictvím internetových služeb. <a href="/archiv-2005.html#news:6fcae301f3a135f0f0d49e6942ff52bd" title="Mediální přehrávač postavený na XULRunneru - testovací verze v prosinci">Psali jsme o něm</a> již v listopadu.</div>
	<div class="ft">
		<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/12/22/">22. 12. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/medialni-prehravac-postaveny-na-xulrunneru-testovaci-verze-v-prosinci/">Mediální přehrávač postavený na XULRunneru - testovací verze v prosinci</a></h3>

	<div>Společnost <em>Pioneers of the Inevitable</em> připravuje nový mediální přehrávač <a href="http://www.songbirdnest.com/roblord/story/what_is_songbird" hreflang="en" title="What is Songbird? | Songbirdnest.com">Songbird</a> (<a href="http://www.songbirdnest.com/roblord/blog/songbird_screenshots" hreflang="en" title="Songbird Screenshots | Songbirdnest.com">screenshoty</a>). V současnosti se intenzivně vyvíjí a během prosince by měla být k dispozici testovací verze pro Windows. Verze pro Linux a Mac OS X přijdou na řadu později. Celý přehrávač je postaven na technolgii <a href="http://wiki.mozilla.org/XUL:Xul_Runner" hreflang="en" title="XUL:Xul Runner - wiki.mozilla.org"><abbr title="XML User Interface Language" lang="en">XUL</abbr>Runner</a> od Mozilly a je tak důkazem flexibility <a href="http://www.mozilla.org/newlayout/" hreflang="en" title="Mozilla Layout Engine">Gecka</a>, <abbr title="XML User Interface Language" lang="en">XUL</abbr>, <abbr title="Cross Platform Component Object Model" lang="en">XPCOM</abbr> a dalších technolgií, které lze použít k vývojí mnoha různých druhů software. Zajímavý je i pohled vývojáře na to, jak <a href="http://www.songbirdnest.com/jkoshi/blog/xul_from_the_designers_perspective" hreflang="en" title="XUL from the Designer&#039;s Perspective | Songbirdnest.com"><abbr title="XML User Interface Language" lang="en">XUL</abbr> zjednodušuje spolupráci designerů a programátorů ve vývojovém týmu</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/11/25/">25. 11. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/dobra-zprava-pro-vyvojare-nocni-sestaveni-xulrunneru/">Dobrá zpráva pro vývojáře: noční sestavení XULRunneru</a></h3>

	<div><a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a> začala v rámci nočních sestavení <a href="http://www.mozillazine.org/talkback.html?article=6421" title="XULRunner Nightly Builds Now Available" hreflang="en">připravovat i buildy XULRunneru</a>, což je run-time prostředí pro spouštění aplikací založených na technologiích Mozilly, které by mělo usnadnit jejich vývoj a distribuci. První stabilní verze <a href="http://wiki.mozilla.org/index.php?title=XUL:Xul_Runner" hreflang="en">XULRunneru</a> by měla vyjít krátce po Firefoxu 1.1, tj. během letošního léta.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/17/">17. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/plany-firefox-1.1-thunderbird-1.1-a-xulrunner/">Plány: Firefox 1.1, Thunderbird 1.1 a XULRunner</a></h3>

	<div><a href="http://weblogs.mozillazine.org/asa/" title="adot's notblog* &quot;firefox, cats, mars, and more&quot;" hreflang="en">Asa Dotzler</a> upřesnil <a href="http://article.gmane.org/gmane.comp.mozilla.devel.seamonkey/5182" title="planning for upcoming releases" hreflang="en">plány vývoje produktů Mozilla Foundation</a> v následujících měsících. Stručně: V nejbližších dnech vyjde preview pro vývojáře, založené na Gecko 1.8 Beta 2, kde se poprvé představí <a href="http://wiki.mozilla.org/XUL:Xul_Runner" hreflang="en">XULRunner</a>. Po cca pěti týdnech bude následovat další preview, určené už i pro testery mezi uživateli a obsahující všechny plánované funkce produktové řady 1.1. Pak se bude ladit a vychytávat a po sérii release candidates by měly vyjít ostré verze Firefoxu 1.1 a Thunderbirdu 1.1 spolu s XULRunnerem.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/11/">11. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
