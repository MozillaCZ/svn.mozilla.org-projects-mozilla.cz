<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky se štítkem Motivy vzhledu');
	$page->setHeadline('Zprávičky se štítkem Motivy vzhledu', 'Přehled toho nejžhavějšího ze světa Mozilly, štítek Motivy vzhledu');
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
						<strong>Motivy vzhledu</strong>

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
	<h3><a href="/zpravicky/mozilla-add-ons-v-novem/">Mozilla Add-ons v novém</a></h3>

	<div>Téměř <a href="/zpravicky/nova-verze-mozilla-add-ons/" title="CZilla: Nová verze Mozilla Add-ons">přesně po roce</a> spustila <a href="http://www.mozilla.com/" title="Mozilla Corporation: Domovská stránka" hreflang="en">Mozilla Corporation</a> novou verzi <a href="https://addons.mozilla.org/cs/" title="Mozilla Add-ons">stránek s doplňky</a>, která přináší <a href="http://blog.mozilla.com/basil/2008/03/26/availability-of-new-addons.mozilla.org-amo-site/" hreflang="en" title="Basil's Bodacious Blog: Availability of new addons.mozilla.org (AMO) site">spoustu vylepšení</a>. Přepracován byl nejen vzhled a umístění navigačních prvků, ale bylo také zjednodušeno jejich vyhledávání. Doplňky jsou nyní řazeny do několika kategorií, díky kterým snadno najdete doplněk i bez znalosti jeho názvu. Vylepšeno bylo i instalační tlačítko, které dokáže rozeznat váš operační systém a verzi vaší aplikace. Na první pohled je tak vidět, zda je možné doplněk nainstalovat. Příjemnou vlastností stránek je automatický výběr ze 24 jazyků, mezi kterými nechybí ani čeština. (Zaslal Luděk Janča)</div>
	<div class="ft">
		<a href="/zpravicky/a/mik/">Michal Kec</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2008/03/27/">27. 3. 08</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/firemonger-1.0.7/">FireMonger 1.0.7</a></h3>

	<div><a href="http://www.mozillazine.org/talkback.html?article=7492" hreflang="en" title="Firemonger 1.0.7 Released - MozillaZine Talkback">Vyšel nový FireMonger 1.0.7</a>. Projekt <a href="http://www.firemonger.org/en/" hreflang="en" title="The Firemonger Project">FireMonger</a> připravuje CD (v podobě ISO image nebo ZIP souboru) s nejnovějšími verzemi <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a>, <a href="/produkty/thunderbird/" title="Thunderbird: Stránka o produktu">Thunderbirdu</a> a výběrem nejlepších pluginů, rozšíření a motivů vzhledu. Vše je doplněno podrobnou uživatelskou příručkou a k dispozici v celkem 13 jazykových verzích. </div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/10/06/">6. 10. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/planuji-se-zmeny-v-tvorbe-motivu-vzhledu/">Plánují se změny v tvorbě motivů vzhledu</a></h3>

	<div><a href="http://benjamin.smedbergs.us/blog/" hreflang="en">Benjamin Smedberg</a> informuje o <a href="http://benjamin.smedbergs.us/blog/2005-08-23/xul-and-themes/" title="BSBlog &#187; Blog Archive &#187; XUL and Themes" hreflang="en">změnách ve tvorbě motivů vzhledu</a>, které se chystají do Gecka 1.9 (tj. Firefoxu 2.0). Stručně shrnuto: v současnosti musí autoři motivů specifikovat vzhled všech součástí programu, v budoucnu budou jen vyjmenovávat rozdíly oproti standardnímu motivu. To by jim mělo ušetřit práci a především zlepšit kompatibilitu motivů napříč verzemi aplikací.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/08/25/">25. 8. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/motivy-vzhledu-pro-firefox-propaguji-filmy-a-serialy/">Motivy vzhledu pro Firefox propagují filmy a seriály</a></h3>

	<div><a href="http://blakeross.com/" hreflang="en" title="Blake Ross - Firefox Blog">Blake Ross</a> píše o tom, že společnost <a href="http://www.hbo.com/" hreflang="en" title="HBO Online">HBO</a> se v USA rozhodla <a href="http://blakeross.com/index.php?p=165" hreflang="en" title="Rome was themed in a day"> doprovodit premiéru svého nového seriálu <em>Rome</em> tématickým motivem vzhledu pro Firefox</a>. Motiv by měl být představen ve středu a propagován reklamou v online verzi <a href="http://www.nytimes.com/" hreflang="en">New York Times</a> a jinde na webu. Motiv vzhledu jako metodu propagace zvolila i společnost <a href="http://www.warnerbros.com/" hreflang="en" title="Warner Bros. Online">Warner Bros.</a> u filmu <a href="http://www2.warnerbros.com/batmanbegins/index.html" hreflang="en"><em>Batman Begins</em></a> &ndash; v tomto případě si už lze dílko z webu filmu stáhnout. <a href="http://www.mozillazine.org/talkback.html?article=7164" hreflang="en" title="HBO 'Rome' Theme for Mozilla Firefox Coming">Více informací na MozillaZine</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/08/16/">16. 8. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/vybrane-projekty-pro-summer-of-code/">Vybrané projekty pro Summer of Code</a></h3>

	<div>O tom, že server <a href="http://www.mozdev.org/" title="mozdev.org - free project hosting for the Mozilla community" hreflang="en">MozDev.org</a> spolupracuje s Googlem na projektu <a href="http://code.google.com/summerofcode.html" title="Google Code: Summer of Code" hreflang="en">Summer of Code</a> jsme <a href="/archiv-2005.html#news:650e49647bcf52ca5ccee4cf1d9c9d36" title="MozDev spolupracuje s Googlem na Summer of Code">již informovali</a>. Nyní je k dispozici <a href="http://summer.mozdev.org/projects.html" hreflang="en">seznam projektů</a>, které byly do projektu vybrány. Obsahuje takové lahůdky jako grafický nástroj pro tvorbu motivů vzhledu pro Mozillu nebo BitTorrent klient v <abbr title="XML User Interface Language" lang="en">XUL</abbr>/<abbr title="Cross Platform Component Object Model" lang="en">XPCOM</abbr>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/09/">9. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/vylepseni-mozilla-update/">Vylepšení Mozilla Update</a></h3>

	<div>Služba <a href="https://addons.mozilla.org/" hreflang="en">Mozilla Update</a>, kde si uživatelé mohou stáhnout rozšíření, motivy vzhledu a pluginy pro produkty <a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a>, byla v uplynulých dnech podstatně vylepšena. Nejdůležitější změnou je nové spuštění <a href="https://addons.mozilla.org/developers/" hreflang="en">Developer Control Panelu</a>, který umožňuje autorům doplňků jejich pohodlnou správu a aktualizace. Další podrobnosti má <a href="http://www.mozillazine.org/talkback.html?article=6438" title="Mozilla Update Relaunches" hreflang="en">MozillaZine</a> a <a href="http://weblogs.mozillazine.org/asa/archives/007969.html" title="adot's notblog* &quot;firefox, cats, mars, and more&quot;: something for mitchell and the relaunch of mozilla update" hreflang="en">Asa Dotzler</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/04/18/">18. 4. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/dalsi-vzhled-pro-nvu-0.80-0.81/">Další vzhled pro Nvu 0.80-0.81</a></h3>

	<div>Máme tu další motiv vzhledu pro <a href="http://www.nvu.com/" hreflang="en">Nvu</a> - <a href="http://nvu.mozilla.ru/s-u/theme/0.1a/system-unknown.jar">system unknown</a> (814&nbsp;kB). Má připominat vzhled MS Office 2003 (viz <a href="http://nvu.mozilla.ru/s-u/images/scr1.png">screenshot</a>). K instalaci stačí uložit odkazovaný soubor na disk a ve Nvu zvolit nabídku Nástroje, Themes a motiv dále nainstalovat podobným způsobem jako třeba v <a href="/produkty/thunderbird/">Thunderbirdu</a>. Návod "krok po kroku" pro anglickou verzi <a href="http://www.glazman.org/weblog/dotclear/index.php?2005/02/05/860-first-additional-nvu-theme-now-available" hreflang="en" title="First additional Nvu theme now available - Glazblog">najdete u Dana Glazmana</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/petric/">Pavel Petric</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/22/">22. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/nova-lokalizovana-rozsireni-embuttons-image-zoomer-user-agent-switcher-a-themer/">Nová lokalizovaná rozšíření - EMButtons, Image Zoomer, User agent switcher a Themer</a></h3>

	<div>Správce rozšíření a Správce motivů vzhledu si díky <a href="/doplnky/rozsireni/embuttons/">EMButtons</a> můžete zobrazit třeba v postranní liště nebo nechat výpisy řadit podle abecedy. <a href="/doplnky/rozsireni/image-zoomer/">Image Zoomer</a> zase umí podle vašich přání zvětšovat či zmenšovat obrázky na stránkách. <a href="/doplnky/rozsireni/user-agent-switcher/">User agent switcher</a> umí dočasně pozměnit identifikátor vašeho prohlížeče a předstírat tak serverům, že používáte např. Internet Explorer, a <a href="/doplnky/rozsireni/themer/">Themer</a> umožňuje v Mozilla Suite instalaci motivu vzhledu ve formátu .jar z lokálního disku. Za první tři rozšíření děkujeme Josefu Kotvovi, poslední má na svědomí Pavel Cvrček.</div>
	<div class="ft">
		<a href="/zpravicky/a/petrovicky/">Lukáš Petrovický</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/14/">14. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/prvni-motiv-vzhledu-pro-nvu-0.8/">První motiv vzhledu pro Nvu 0.8</a></h3>

	<div>Máme tu první motiv vzhledu pro <a href="http://www.nvu.com/" hreflang="en">Nvu</a> - <a href="http://www.volny.cz/atari1/smoke.jar">Smoke 1.5b</a> (0.98 MB). Stačí uložit odkazovaný soubor na disk a ve Nvu zvolit nabídku Nástroje, Themes a motiv dále nainstalovat podobným způsobem jako třeba v <a href="/produkty/thunderbird/">Thunderbirdu</a>. Návod &quot;krok po kroku&quot; pro anglickou verzi <a href="http://www.glazman.org/weblog/dotclear/index.php?2005/02/05/860-first-additional-nvu-theme-now-available" title="First additional Nvu theme now available" hreflang="en">najdete u Dana Glazmana</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/02/08/">8. 2. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/the-extensions-mirror-rozsireni-a-motivy-pro-aplikace-mozilla/">The Extensions Mirror - rozšíření a motivy pro aplikace Mozilla</a></h3>

	<div>Uživatelé aplikací Mozilla si v hojné míře oblíbili instalování a používání různých <a href="/doplnky/rozsireni/">rozšíření</a> a <a href="/doplnky/motivy-vzhledu/">motivů vzhledů</a>. Mozilla Foundation jim v tomto směru vyšla vstříc a před nějakým časem zřídila server <a href="https://addons.mozilla.org/" title="Mozilla Update: Domovská stránka" hreflang="en">Mozilla Update</a>. Tento server ale není kupodivu největší, který by různé doplňky nabízel. Tím největším je server <a href="http://www.extensionsmirror.nl/" title="The Extensions Mirror: Domovská stránka" hreflang="en">The Extensions Mirror</a>. Tamní <a href="http://www.extensionsmirror.nl/index.php?act=idx" hreflang="en">fórum</a> ukrývá nejspíš největší databázi rozšíření a motivů vzhledu k aplikacím Mozilla, co dnes můžete nalézt. Na <a href="http://www.extensionsmirror.nl/" title="The Extensions Mirror: Domovská stránka" hreflang="en">domovské stránce</a> naleznete též pravidelně aktualizované informace o nových verzích rozšíření. Celkově se jedná o zajímavý server s rozsáhlou nabídkou a rozhodně stojí za návštěvu.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/31/">31. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/nova-sekce-doplnky-aplikaci-mozilla.org/">Nová sekce Doplňky aplikací Mozilla.org</a></h3>

	<div>S rostoucí oblíbeností doplňků Mozilla Suite, Firefoxu a Thunderbirdu zakládáme novou sekci <strong><a href="/doplnky/">Doplňky aplikací Mozilla.org</a></strong>. Začínající i pokročilí uživatelé v ní najdou přehled <a href="/doplnky/rozsireni/">lokalizovaných rozšíření</a>, <a href="/doplnky/motivy-vzhledu/">motivy vzhledu</a>, <a href="/doplnky/postranni-lista/">panely postranní lišty</a> a <a href="/doplnky/vyhledavani/">vyhledávací moduly</a>. V souvislosti s tím zaznamenáte drobné úpravy hlavního menu a přesun některých adres.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/29/">29. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/navod-na-instalaci-motivu-vzhledu-do-mozilla-firefoxu/">Návod na instalaci motivu vzhledu do Mozilla Firefoxu</a></h3>

	<div>Chcete ve Firefoxu použít <a href="/doplnky/motivy-vzhledu/" title="Zdroje motivů vzhledu">nový motiv vzhledu</a> a nevíte jak na to? Tak právě pro vás jsme připravili <a href="/podpora/firefox/instalace-motivu-vzhledu.html" title="Návod na instalaci motivů vzhledu do Firefoxu">návod na instalaci nového motivu vzhledu</a> do Firefoxu. Dozvíte se v něm, jak motiv vzhledu nainstalovat <a href="/podpora/firefox/instalace-motivu-vzhledu.html#z-internetu">z Internetu</a> a <a href="/podpora/firefox/instalace-motivu-vzhledu.html#z-disku">z pevného disku</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/26/">26. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/navod-na-instalaci-motivu-vzhledu-do-mozilla-suite/">Návod na instalaci motivů vzhledu do Mozilla Suite</a></h3>

	<div>Často se nás ve <a href="http://forum.czilla.cz/" title="Fórum na podporu uživatelů aplikací Mozilla.org">fóru na podporu uživatelů</a> ptáte, jakým způsobem nainstalovat nové <a href="/doplnky/motivy-vzhledu/" title="Přehled stránek nabízející motivy vzhledu">motivy vzhledu</a> do aplikace <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a>. Pro ty z vás, kteří nevědí, jakým způsobem instalaci provést, jsme připravili <a href="/podpora/suite/instalace-motivu-vzhledu.html" title="Návod na instalaci motivů vzhledu do Mozilla Suite">přehledný návod</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/22/">22. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/lokalizace-local-install-pro-mozilla-firefox/">Lokalizace Local Install pro Mozilla Firefox</a></h3>

	<div><a href="http://www.mrtech.com/extensions/" title="Rozšíření Local Install: Domovská stránka" hreflang="en" lang="en">Rozšíření Local Install</a>, které vám umožní instalovat stažené motivy vzhledu v aplikaci Mozilla Firefox přímo z lokálního disku, je nyní <a href="http://ftp.czilla.cz/other/addons/localinstall/" title="Odkaz na FTP CZilla">k dispozici i v češtině</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/17/">17. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/lokalizace-rozsireni-theme-installer-pro-mozilla-suite/">Lokalizace rozšíření Theme Installer pro Mozilla Suite</a></h3>

	<div>Rozšíření <a href="http://mozdev.elliptic.fr/cdn/themer/">Theme Installer</a> se dočkalo české lokalizace. Rozšíření slouží k instalaci stažených motivů vzhledu v Mozilla Suite. Lokalizovaný balíček naleznete na <a href="ftp://ftp.czilla.cz/other/addons/themer/">našem FTP</a> (<a href="http://ftp.czilla.cz/other/addons/themer/">HTTP rozhraní</a>).</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/03/">3. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/local-install-1.2.4-pro-mozilla-firefox/">Local Install 1.2.4 pro Mozilla Firefox</a></h3>

	<div>Pokud používáte prohlížeč <a href="/produkty/firefox/" title="Mozilla Firefox: Stránka o produktu">Mozilla Firefox</a>, jistě víte, že umožňuje měnit svůj vzhled pomocí <a href="https://addons.mozilla.org/themes/?os=Windows&amp;application=firefox" hreflang="en">přídavných motivů vzhledu</a>. Jejich instalaci většina uživatelů provádí přímo z Internetu, protože instalace stažených motivů z disku není uživatelsky příjemná. Tento nedostatek naštěstí řeší rozšíření <a href="http://www.mrtech.com/extensions/" title="Stránka o rozšíření Local Install">Local Install</a>, které do nabídky Soubor přidá nové položky pro instalaci motivů. Rozšíření lze stáhnout na <a href="http://www.mrtech.com/extensions/" hreflang="en" title="Stránka o rozšíření Local Install">domovské stránce</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/12/31/">31. 12. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/thunderbird-1.0-rc1/">Thunderbird 1.0 RC1</a></h3>

	<div>Scott MacGregor na <a href="http://www.mozillazine.org/" hreflang="en">MozillaZine</a> oznámil <a href="http://www.mozillazine.org/talkback.html?article=5695" title="MozillaZine: Mozilla Thunderbird 1.0 Release Candidate 1 Available" hreflang="en">prvního kandidáta</a> pošťáka <a href="/produkty/thunderbird/">Thunderbirdu</a>. Obsahuje <a href="http://forums.mozillazine.org/viewtopic.php?p=1020843" title="MozillaZine Forums: Thunderbird 1.0 Release Candidate 1 Is Now Available! - What's New In 1.0" hreflang="en">řadu oprav a vylepšení funkcí</a> jako je virtuální složky, čtečka RSS, seskupování zpráv; vylepšen byl i přechod z jiných poštovních klientů či výchozí motiv vzhledu. Stáhněte si z <a href="http://ftp.mozilla.org/pub/mozilla.org/thunderbird/releases/1.0rc/">ftp.mozilla.org</a>, testujte a <a href="http://forum.czilla.cz/viewforum.php?f=20">dejte nám vědět o libovolném problému</a>, na který narazíte. Pokud vše půjde dobře, měli bychom se dočkat finální anglické verze ještě před Vánoci. Nelze však očekávat současné vydání s dalšími lokalizovanými verzemi jako v případě <a href="/produkty/firefox/">Firefoxu 1.0</a>, vydání verze 1.0 bude ve skromném duchu jako v případě předchozích verzí Thunderbirdu.</div>
	<div class="ft">
		<a href="/zpravicky/a/aha/">Adam Hauner</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/12/02/">2. 12. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/netscape-browser-prototype/">Netscape Browser Prototype</a></h3>

	<div><abbr title="America OnLine" lang="en">AOL</abbr> včera  zveřejnila <a href="http://community.netscape.com/nscpbrowser/" hreflang="en">prototyp nové verze prohlížeče Netscape</a> pro registrované testery. Prototyp vycházející z Firefoxu 0.9.3 nabízí rozšířené uživatelské rozhraní, vlastní motiv vzhledu či prvky, které si uživatelé často instalují jako rozšíření. Kontroverzní, ale zajímavou funkcí je možnost přepnutí zobrazování stránky mezi Geckem a <abbr title="Microsoft Internet Explorer" lang="en">MSIE</abbr>, díky kterému v prototypu funguje i služba Windows Update. Komunita uživatelů Mozilly byla dopředu skeptická k úpravám uživatelského rozhraní a ač má nový Netscape některá světlá místa, celkový výsledek potvrdil očekávání - na jedničku není. Detailní seznámení s prototypem nabízí Alex Bishop v článku <a href="http://www.mozillazine.org/articles/article5691.html" hreflang="en" lang="en">First Look at Firefox-Based Netscape</a>. Finální verze, kterou chce <abbr title="America OnLine" lang="en">AOL</abbr> v roce 2005 oslovit pokročilejší uživatele Internetu, by měla být založena na <a href="/produkty/firefox/">Firefoxu</a> 1.0, bude zřejmě obsahovat upravený motiv vzhledu a podle ohlasů uživatelů upravené rozhraní.</div>
	<div class="ft">
		<a href="/zpravicky/a/aha/">Adam Hauner</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/12/01/">1. 12. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-firefox-0.9/">Mozilla Firefox 0.9</a></h3>

	<div>Webový prohlížeč <a href="http://www.mozilla.com/firefox/" title="Domovská stránka Mozilla Firefox">Mozilla Firefox</a> byl dnes vydán v dlouho očekávané verzi 0.9. Novinek je skutečně požehnaně. První, co asi každého zaujme, je nový vzhled. Další zajímavou novinkou je možnost převodu (migrace) dat z jiných prohlížečů jako MSIE, Opera či z <a href="http://forum.czilla.cz/viewtopic.php?t=1927" title="forum.czilla.cz: Změna adresáře s profilem u Firefoxu 0.9">předchozích profilů</a>. Mezi novinky se též řadí noví správci motivů vzhledu a rozšíření, které umožňují bezpečnou odinstalaci již nepoužívaných součástí včetně aktualizací. Pro začátečníky byla integrována nápověda, která jim usnadní prvotní práci s tímto prohlížečem.<br />Důvodů proč stahovat je skutečně hodně. Detailnější informace naleznete v <a href="http://www.mozilla.org/products/firefox/releases/0.9.html" title="Odkaz na poznámky k vydání">poznámkách k vydání</a>. Stahovat můžete z <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/releases/0.9/" title="Odkaz na ftp.mozilla.org">ftp.mozilla.org</a> nebo ze <a href="http://www.slunecnice.cz/product/Mozilla-Firefox/">Slunečnice</a>. Lokalizace bude k dispozici v dohledné době. Více na <a href="http://www.mozillazine.org/talkback.html?article=4843" title="Mozilla Firefox 0.9 Released">MozillaZine</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/06/15/">15. 6. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/novy-vzhled-misto-qute/">Nový vzhled místo Qute?</a></h3>

	<div>Dle diskuse na <a href="http://forums.mozillazine.org/viewtopic.php?t=82385" title="MozillaZine: Another default theme coming">MozillaZine fóru</a> to vypadá, že vzhled <a href="http://www.zoopraha.cz/lexikon.php?i=53" title="Lexikon zvířat: Panda červená">Firefoxu</a> se před příchodem verze 1.0 ještě změní. Důvodem jsou licenční podmínky autora Qute vzhledu - <a href="http://forums.mozillazine.org/viewtopic.php?t=82385&amp;postdays=0&amp;postorder=asc&amp;postsperpage=15&amp;start=49">odpověď</a> Bena Goodgera. Nu, nezbývá než čekat. <b>Update:</b> objevila se první vlaštovka popisující, jak by nový Firefox <a href="http://kmgerich.com/archive/000062.html" title="The fox is out of the bag">mohl vypadat</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/06/07/">7. 6. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/spravce-motivu-vzhledu/">Správce motivů vzhledu</a></h3>

	<div>Vypadá to, že se v nové verzi Firefoxu dočkáme nového <a href="http://weblogs.mozillazine.org/ben/archives/005456.html" title="Firefox theme Manager">správce motivů vzhledu</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/05/11/">11. 5. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/vlastni-motiv-vzhledu/">Vlastní motiv vzhledu</a></h3>

	<div>Krátký úvod pro ty, kdož chtějí vytvořit pro Firefox své <a href="http://members.shaw.ca/lucx/theme.htm" title="Chraramel: Creating a theme">vlastní motiv vzhledu</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/05/10/">10. 5. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-thunderbird-0.6/">Mozilla Thunderbird 0.6</a></h3>

	<div>Nová verze pošťáka <a href="http://www.mozilla.com/thunderbird/">Mozilla Thunderbird</a> obsahuje nový instalátor pro Windows, nový motiv vzhledu a upozornění na příchozí poštu pro Mac OS, vylepšenou detekci nevyžádané pošty a <a href="http://www.mozilla.com/thunderbird/releases/0.6.html" title="Release Notes - Poznámky k verzi">řadu dalších vylepšení.</a> Verze pro <a href="http://ftp.mozilla.org/pub/mozilla.org/thunderbird/releases/0.6/ThunderbirdSetup-0.6.exe">Windows</a>, <a href="http://ftp.mozilla.org/pub/mozilla.org/thunderbird/releases/0.6/thunderbird-0.6-i686-linux-gtk2+xft.tar.gz">Linux</a> a <a href="http://ftp.mozilla.org/pub/mozilla.org/thunderbird/releases/0.6/thunderbird-0.6-macosx.dmg.gz">MacOS.</a></div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/05/03/">3. 5. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-firefox-ve-stylu-office-2003/">Mozilla Firefox ve stylu Office 2003</a></h3>

	<div>Rádi byste měli prohlížeč Mozilla Firefox v podobném vzhledu jako Office 2003? Je to možné. <a href="http://danielryan.org/" title="Daniel Ryan: Domovská stránka">Daniel Ryan</a> modifikoval <a href="http://users.bigpond.net.au/nexx1/oxpmenu/" title="Domovská stránka vzhledu Office XP">vzhled Office XP</a>, který byl taktéž k dispozici a přetvořil jej do nového vzhledu ala Office 2003. Jak se mu to povedlo můžete posoudit na následujících ukázkách: <a href="http://danielryan.org/files/office2003look3.jpg">1</a>, <a href="http://danielryan.org/files/office2003look6.jpg">2</a> a <a href="http://danielryan.org/files/office2003look2.jpg">3</a>. Pro tento vzhled vám postačí <a href="http://danielryan.org/files/Office2003FirefoxMod.zip">stáhnout</a> upravený soubor userChrome.css, který umístíte do podadresáře chrome svého uživatelského profilu.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/03/25/">25. 3. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/motivy-vzhledu-pro-mozilla-firefox-0.8/">Motivy vzhledu pro Mozilla Firefox 0.8</a></h3>

	<div>Řada z vás si jistě oblíbila možnost měnit motiv vzhledu u prohlížeče Mozilla Firefox. Před nějakým časem vyšla jeho poslední verze a my jsme pro vás v <a href="http://forum.czilla.cz/viewtopic.php?t=1335" title="Diskuzní fórum CZilla">diskuzním fóru</a> připravili <a href="http://forum.czilla.cz/viewtopic.php?t=1335" title="Fórum CZilla: Přehled motivů vzhledu pro MF 0.8">přehled dostupných motivů</a> pro tuto verzi.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/02/29/">29. 2. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-firefox-ve-stylu-office-xp/">Mozilla Firefox ve stylu Office XP</a></h3>

	<div>Pokud máte pocit, že by vzhled Mozilla Firefox ještě něco potřeboval, zkuste upravit jeho nabídky do <a href="http://users.bigpond.net.au/nexx1/oxpmenu/" title="Office XP Menus: domovská stránka">stylu Office XP</a>. Krom vzhledu nabídek můžete též nainstalovat sadu ikon, které vám výsledný vzhled opět o něco vylepší.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/02/11/">11. 2. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-firefox-0.8/">Mozilla Firefox 0.8</a></h3>

	<div>Mozilla Firebird byl s novou verzí definitivně přejmenován na <a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a>. Otázky týkající se přejmenování zodpovídá stránka <a href="http://www.mozilla.org/projects/firefox/firefox-name-faq.html">Mozilla Firefox - Brand Name FAQ</a>. A co je v Mozilla Firefox 0.8 nového? Uživatelé Windows se dočkali oficiální instalátoru, nový je i Download Manager, instalace rozšíření a motivů vzhledu se dočkala rozsáhlého vylepšení, přibyl i off-line mód procházení stránek a <a href="http://www.mozilla.org/products/firefox/releases/" title="Release Notes - Poznámky k verzi">mnoho dalšího.</a> Verze pro <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/releases/0.8/FirefoxSetup-0.8.exe" title="6.2 MB">Windows</a> (též na <a href="http://www.slunecnice.cz/product/Mozilla-Firefox/" title="stránka Mozilla Firefox">Slunečnici</a>), <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/releases/0.8/firefox-0.8-i686-linux-gtk2+xft.tar.gz" title="7.3 MB, Gtk2, XFT">Linux</a> a <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/releases/0.8/firefox-0.8-mac.dmg.gz" title="9.5 MB">MacOS</a>.<br /><strong>Update:</strong> Firefox není žádná <em>ohnivá liška</em>, ale anglické synonymum pro <a href="http://www.wellingtonzoo.com/animals/animals/mammals/panda.html" title="Wellington ZOO: Red panda">červenou pandu</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/aha/">Adam Hauner</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/02/09/">9. 2. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/skin-pro-winamp/">Skin pro Winamp</a></h3>

	<div>Ze serveru <a href="http://www.slunecnice.cz/">Slunečnice</a> si můžete stáhnout <a href="http://www.slunecnice.cz/product/MozAmp3/" title="MozAmp3 na serveru Slunečnice">skin pro Winamp</a> napodobující Mozillu s motivem vzhledu Modern.</div>
	<div class="ft">
		<a href="/zpravicky/a/novotny/">Lukáš Novotný</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/12/09/">9. 12. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-thunderbird-0.4/">Mozilla Thunderbird 0.4</a></h3>

	<div>Vyšla nová verze e-mailového klienta <a href="http://www.mozilla.org/projects/thunderbird/">Mozilla Thunderbird</a>. Nová verze sebou přináší nový motiv vzhledu, lepší integraci s operačním systémem a mnoho dalších vylepšení. Bližší informace naleznete v <a href="http://www.mozilla.org/projects/thunderbird/release-notes.html">poznámkách k vydání</a>. Prozatím jsou k dispozici verze pro <a href="http://ftp.mozilla.org/pub/thunderbird/releases/0.4/thunderbird-0.4-win32.zip">Windows</a>, <a href="http://ftp.mozilla.org/pub/thunderbird/releases/0.4/thunderbird-0.4-i686-pc-linux-gtk2-gnu.tar.bz2">Linux</a> a <a href="http://ftp.mozilla.org/pub/thunderbird/releases/0.4/thunderbird-0.4-macosx.dmg.gz">Mac OS X</a>. Lokalizované balíčky budou k dispozici v dohledné době.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/12/06/">6. 12. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/snadna-instalace-s-quickmanagerem/">Snadná instalace s QuickManagerem</a></h3>

	<div>Tuhle situaci určitě znáte: Stáhnu si novou Mozillu, nainstaluji, protáhnu se radostně na židli a teď abych začal hledat všechna má oblíbená rozšíření třeba <a href="http://googlebar.mozdev.org/screenshots.html" title="GoogleBar">tohle</a> a <a href="http://games.mozdev.org/" title="Super hry">tamto</a> a stahoval je <a href="ftp://ftp.czilla.cz/other/addons/" title="z FPT CZilly">odsud</a> a <a href="http://downloads.mozdev.org/" title="Download mirrory mozdev.org">odtamtud</a>. Občas si určitě řeknete, zda to máte zapotřebí a zda by to nešlo snáz. Autor nového projektu <a href="http://quickmanager.mozdev.org/">QuickManager</a> si myslí, že šlo a hned se nám to pokusil dokázat. Rozšíření je určené pro Mozilla Thunderbird a obsahuje dialogy pro jednoduchou a rychlou instalaci rozšíření a motivů vzhledu (<a href="http://quickmanager.mozdev.org/screenshots.html">screenshoty</a>). Obsluha je opravdu jednoduchá :-) Informace a odkazy na jednotlivá rozšíření zůstávají aktuální, protože se <a href="http://extensionroom.mozdev.org/extensions.js.php/thunderbird">stahují</a> z projektu <a href="http://extensionroom.mozdev.org/">Extensionroom</a>. Tento přístup by mohl do budoucna velmi usnadnit instalaci rozšíření pro začínající uživatele (a když by časem u každého byla i možnost odinstalace...). Projekt přávě poprvé vylezl z pelíšku, takže trpí ještě dětskými chorobami např. při pokusu o instalaci libovolného rozšíření mi vždy zároveň otevřel Mozillu a nabídl instalovat rozšíření i do ní, data exportovaná projektem Extensionroom zatím nemají žádnou kontrolu verzí, takže vám dovolí nainstalovat i verzi rozšíření, která není kompatibilní s vaší verzí Mozilla Thunderbird. Ale přesto si myslím, že se jedná o revoluční nápad a fandům Mozilla Thunderbird doporučuji k vyzkoušení a doufám, že se problémy brzy vyřeší.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/10/07/">7. 10. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/ptak-bourlivak-0.2/">Pták Bouřlivák 0.2</a></h3>

	<div>Vyšla druhá stabilní verze poštovního klienta <a href="http://www.mozilla.org/projects/thunderbird/">Mozilla ThunderBird</a> 0.2 - <a href="http://www.mozilla.org/projects/thunderbird/release-notes.html">poznámky k verzi</a> (EN). K dispozici pro stažení jsou verze pro <a href="http://ftp.mozilla.org/pub/thunderbird/releases/0.2/thunderbird-0.2-win32.zip">Windows</a>, <a href="http://ftp.mozilla.org/pub/thunderbird/releases/0.2/thunderbird-0.2-i686-pc-linux-gtk2-gnu.tar.bz2">Linux</a> a <a href="http://ftp.mozilla.org/pub/thunderbird/releases/0.2/thunderbird-0.2-macosx.dmg.gz">Mac OS X</a>. ThunderBird lze provozovat bez problémů i s Mozillou či Mozilla Firebirdem - své profily si ukládá do zvláštního adresáře. Vývojářům se podařilo zeštíhlit celou aplikaci (stahovaný soubor má o 1.5MiB méně), vylepšit výchozí motiv vzhledu a opravit některé závažné chyby.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/09/04/">4. 9. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/mozilla-firebird-0.6/">Mozilla Firebird 0.6</a></h3>

	<div>Dnes byl vydán <a href="http://www.mozilla.org/projects/firebird/release-notes.html">Mozilla Firebird 0.6</a>, obsahující nový výchozí motiv vzhledu, změny v dialogu předvoleb a řadu vylepšení převzatých z Mozilly 1.3 a 1.4. Stahovat můžete z <a href="http://ftp.mozilla.org/pub/firebird/releases/0.6/">ftp.mozilla.org</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/05/17/">17. 5. 03</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
