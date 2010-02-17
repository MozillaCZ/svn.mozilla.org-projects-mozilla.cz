<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky se štítkem Bugzilla');
	$page->setHeadline('Zprávičky se štítkem Bugzilla', 'Přehled toho nejžhavějšího ze světa Mozilly, štítek Bugzilla');
	$page->includeTemplate('header');
?>
<div id="navigation">
	Vybrat zprávičky se štítkem:
						<a href="/zpravicky/s/bezpecnost/">Bezpečnost</a>

		|
						<strong>Bugzilla</strong>

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
						<a href="/zpravicky/s/xulrunner/">XULRunner</a>

		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>

<div class="news">
	<h3><a href="/zpravicky/virtual-bugzilla-server/">Virtual Bugzilla Server</a></h3>

	<div>Pokud vám na <a href="/vyvojari/bugzilla/" title="Bugzilla: Stránka o produktu">Bugzille</a> vadila její komplikovaná instalace, možná vás zaujme projekt <a href="http://deskzilla.com/vbugzilla.html" hreflang="en">Virtual Bugzila Server</a>. Je to <a href="http://d1.deskzilla.com/.files/virtual-bugzilla-server-1_1.zip">image</a> (ZIP, 42&nbsp;MB) pro <a href="http://www.vmware.com/" hreflang="en" title="VMware - Virtualization Software">VMWare</a>, obsahující Linuxovou distribuci s nainstalovanou Bugzillou. Stačí si tedy stáhnout freewarový <a href="http://www.vmware.com/products/player/" hreflang="en">VMWare Player</a>, image v něm spustit a rázem máte Bugzillu plně funkční.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/03/01/">1. 3. 06</a>
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
<div class="news">
	<h3><a href="/zpravicky/vydana-deskzilla-1.0-desktopovy-klient-pro-bugzillu/">Vydána Deskzilla 1.0 - desktopový klient pro Bugzillu</a></h3>

	<div>Včera <a href="http://deskzilla.com/news/2005-10-05.html" hreflang="en" title="Deskzilla 1.0 Released">bylo oznámeno vydání Deskzilly 1.0</a> &ndash; první ostré verze desktopového klienta pro <a href="/vyvojari/bugzilla/" title="Bugzilla: Stránka o produktu">Bugzillu</a>. Kromě přehledného uživatelského rozhraní se <a href="http://deskzilla.com/" hreflang="en" title="Deskzilla">Deskzilla</a> pyšní funkcemi jako hierarchická struktura projektů, vnořené dotazy, nebo možností pracovat offline (data se ukládají v lokální databázi a jsou pravidelně synchronizována se serverem). Deskzilla je napsána v Javě a ke <a href="http://deskzilla.com/download.html" hreflang="en" title="Download Deskzilla">stažení</a> jsou nabízeny varianty pro Windows, Linux a Mac OS X; nicméně vše by mělo fungovat na libovolném <abbr title="Operační systém" lang="cs">OS</abbr> podporujícím <abbr title="Java Runtime Environment" lang="en">JRE</abbr> 1.4.2 nebo 5.0. Open source projekty smí Deskzillu používat zdarma, komerční použití stojí 99 USD. Ostrá verze Deskzilly přichází necelé tři měsíce po <a href="/archiv-2005.html#news:bae4d356e98a75a60e77977fd49afb33" title="DeskZilla - desktopový klient pro Bugzillu">vydání betaverze</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/10/06/">6. 10. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/vydana-bugzilla-2.20/">Vydána Bugzilla 2.20</a></h3>

	<div><a href="http://www.justdave.net/dave/article.php?story=20051001181523161" hreflang="en" title="Justdave&#039;s Blog - Bugzilla 2.20 is out">Byla vydána Bugzilla 2.20</a>. Mezi <a href="http://www.bugzilla.org/releases/2.20/new-features.html" hreflang="en" title="New Features in 2.20 :: Bugzilla :: bugzilla.org">novinkami</a> asi nejvíce zaujme nový vzhled (můžete se na něj podívat na <a href="http://bugzilla.czilla.cz/" title="Bugzilla CZilly">bugzilla.czilla.cz</a>) a experimentální podpora PostgreSQL. Kormě nové verze 2.20 byla vydána i udržovací verze 2.18.4 a vývojová verze 2.21.1.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/10/03/">3. 10. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/deskzilla-desktopovy-klient-pro-bugzillu/">DeskZilla - desktopový klient pro Bugzillu</a></h3>

	<div>Pokud vás od používání <a href="/vyvojari/bugzilla/">Bugzilly</a> odrazuje fakt, že je to webová aplikace, možná se vám bude líbit <a href="http://deskzilla.com/" hreflang="en">Deskzilla</a> &ndash; desktopový klient pro Bugzillu fungující pod Windows, Linuxem, Mac OS X, nebo kterýmkoliv jiným systémem podporujícím Javu. Deskzilla nabízí <a href="http://deskzilla.com/shots.html" hreflang="en" title="Deskzilla Screenshots">spoustu</a> <a href="http://deskzilla.com/features.html" hreflang="en" title="Deskzilla Features And Benefits">zajímavých</a> <a href="http://deskzilla.com/howitworks.html" hreflang="en" title="How Deskzilla Works">funkcí</a> a pro open source projekty by měla být k dispozici zdarma. Zatím je možno <a href="http://deskzilla.com/download.html" hreflang="en" title="Download Deskzilla">stáhnout si omezenou betaverzi</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/08/18/">18. 8. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/abclinuxu-pouziva-bugzillu/">AbcLinuxu používá Bugzillu</a></h3>

	<div><a href="http://www.abclinuxu.cz/blog/leos/2005/7/30/96069" title="Máme bugzillu">Linuxový portál AbcLinuxu začal používat Bugzillu</a>. Přidal se tak k několika organizacím a projektům, které u nás <a href="http://www.bugzilla.org/" hreflang="en">Bugzillu</a> již delší dobu úspěšně využívají. Pokud se o tomto systému pro sledování chyb, požadavků a dalších úkolů chcete dovědět více, navštivte <a href="http://www.czilla.cz/vyvojari/bugzilla/">naši stránku o Bugzille</a> v <a href="http://www.czilla.cz/vyvojari/">sekci pro vývojáře</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/08/01/">1. 8. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/300-000-bugu-v-bugzille/">300 000 bugů v Bugzille</a></h3>

	<div>Ve čtvrtek <a href="http://weblogs.mozillazine.org/gerv/archives/008471.html" title="Hacking for Christ: Bugzilla 300,000 Bug Sweepstake Results" hreflang="en">byl zadán jubilejní 300 000. bug</a> do <a href="https://bugzilla.mozilla.org/" hreflang="en">Bugzilly Mozilla.org</a>. S kulatým číslem je spojena tradiční soutěž organizovaná <a href="http://weblogs.mozillazine.org/gerv/" hreflang="en">Gervasem Markhamem</a>, spočívající v tipování, kdy okamžik zadání jubilejního bugu nastane. Tentokrát ji vyhrál Takeshi Nishimura, který před čtyřmi měsíci střelil jen o necelých 7 hodin vedle. Pro statistiky připravil Asa Dotzler ještě <a href="http://weblogs.mozillazine.org/qa/archives/2005/07/some_stats.html" title="Mozilla Quality: some stats" hreflang="en">malý dodatek</a>. Připomínáme, že číslo 300&nbsp;000 rozhodně neznamená počet chyb v produktech <a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a> &ndash; v Bugzille se evidují i požadavky na nové funkce, spousta položek je duplicitních a mnoho je také již vyřešených a uzavřených.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/09/">9. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/czilla-spousti-sekci-pro-vyvojare/">CZilla spouští sekci pro vývojáře</a></h3>

	<div>CZilla dnes spustila <a href="/vyvojari/">novou sekci pro vývojáře</a>. Rádi bychom v ní ukázali především výhody využití technologií a nástrojů produktů <a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a> při tvorbě webových i desktopových aplikací. Tomu odpovídá i rozdělení na část pro <a href="/vyvojari/web/">webové vývojáře</a>, <a href="/vyvojari/aplikace/">vývojáře aplikací</a> a <a href="/vyvojari/bugzilla/">představení Bugzilly</a>. Obsah tvoří v současné době zejména tříděné odkazy na externí zdroje, v plánu jsou vlastní články a tutoriály.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/02/">2. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/kdy-bude-zadan-bug-s-cislem-300-000/">Kdy bude zadán bug s číslem 300 000?</a></h3>

	<div>Protože počet bugů v <a href="https://bugzilla.mozilla.org/" hreflang="en">Bugzille na Mozilla.org</a> se blíží kulatému číslu 300&nbsp;000, <a href="http://weblogs.mozillazine.org/gerv/archives/007616.html" title="Hacking for Christ: Bugzilla 300,000 Bug Sweepstake" hreflang="en">vyhlásil Gervease Markham již tradiční soutěž</a> o co nejpřesnější odhad data, kdy bude bug s tímto ID do Bugzilly zadán. Autor nejpřesnějšího tipu dostane blíže neurčené propagační předměty, týkající se <a href="http://www.mozilla.org/">Mozilly</a> či <a href="/produkty/firefox/">Firefoxu</a>. Zbývá dodat, že číslo 300&nbsp;000 rozhodně neznamená počet chyb v produktech <a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a> - v Bugzille se evidují i požadavky na nové funkce, spousta položek je duplicitních a mnoho je také již vyřešených a uzavřených.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/03/17/">17. 3. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/vydany-tri-nove-verze-bugzilly/">Vydány tři nové verze Bugzilly</a></h3>

	<div>Po více než dvou letech vývoje byla <a href="http://www.bugzilla.org/releases/2.18/" hreflang="en" title="Bugzilla 2.18">vydána nová stabilní verze Bugzilly</a> - 2.18. Novinek je mnoho: flexibilní generování reportů a grafů, označování bugů vyžadujcích nějakou akci (např. review), sledování času stráveného nad problémem, vylepšená lokalizace a <a href="http://www.bugzilla.org/releases/2.18/new-features.html" hreflang="en" title="New Features in 2.18"> řada dalších vylepšení</a>. Zároveň byla vydána <a href="http://www.bugzilla.org/releases/2.16.8/" title="Bugzilla 2.16.8" hreflang="en">udržovací verze 2.16.8</a> pro uživatele, kteří chtějí zůstat u šestnáctkové řady, a <a href="http://www.bugzilla.org/download/#devel" hreflang="en">vývojová verze 2.19.2</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/17/">17. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/novy-design-bugzilla.org/">Nový design Bugzilla.org</a></h3>

	<div>Web <a href="http://www.bugzilla.org/">www.bugzilla.org</a> má nyní nový design podobný tomu, který znáte z <a href="http://www.mozilla.org/">www.mozilla.org</a>. Oznámení na <a href="http://www.mozillazine.org/talkback.html?article=4984" title="MozillaZine: Two New Bugzilla Releases, Bugzilla Website Redesigned">MozillaZine</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/07/12/">12. 7. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/bugzilla-ma-1-4-milionu/">Bugzilla má 1/4 miliónu</a></h3>

	<div>Kdo si porovná vlastnosti Mozilly dnes a před rokem, vidí, že Mozilla Foundation rozhodně nespí a Mozilla se stále bouřlivě vyvíjí. Systém pro sledování chyb a požadavků uživatelů <a href="https://bugzilla.mozilla.org/">Bugzilla</a> tak od včerejška obsahuje již 250 tisíc záznamů. (Pro vysvětlenou - to rozhodně neznamená 250 tisíc chyb! Řada záznamů obsahuje jen požadavek na zlepšení či novou vlastnost. Naopak záznamy o chybách jsou často omylem vloženy několika uživateli a odpovídá jim tak několik záznamů.) Zdroj: <a href="http://weblogs.mozillazine.org/gerv/archives/005922.html" title="A Quarter of a Million And Still Going">blog Gervase Markhama</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/07/07/">7. 7. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/dalsi-bugday/">Další Bugday</a></h3>

	<div>Dnes je další Bugday, den kdy vám na <a href="irc://irc.mozilla.org/mozillazine">IRC</a> poradí vývojáři Mozilly s reportováním nalezených chyb. Je to vhodné pro ty, kdo se nevyznají v <a href="https://bugzilla.mozilla.org/">Bugzille</a>, ale umí anglicky (v souvislosti s časovým posunem bychom mohli začátek očekávat okolo 18.00 h našeho času) - více oznámení na <a href="http://www.mozillazine.org/talkback.html?article=4172" title="BugDay Quality Assurance Event Tomorrow">MozillaZine</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/01/13/">13. 1. 04</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/reportovani-do-bugzilly/">Reportování do Bugzilly</a></h3>

	<div><a href="http://gemal.dk/">Henrik Gemal</a> píše ve svém blogu <a href="http://gemal.dk/archives/000310.html" title="A day in Bugzilla">několik rad</a>, jak můžete zkvalitnit své reporty do <a href="https://bugzilla.mozilla.org/">Bugzilly</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/10/09/">9. 10. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/hledani-v-bugzille/">Hledání v Bugzille</a></h3>

	<div>Hledáte často v Bugzille? Patříte stále mezi ty, kdo se nezorientovali v jejím složitém (ale mocném) <a href="https://bugzilla.mozilla.org/query.cgi" title="Horrible query form">hledacím formuláři</a>? Jesse Ruderman <a href="http://www.squarefree.com/2003/08/13/how-i-search-for-bugs" title="How I search for bugs">radí</a>, že jemu v 99% postačí jednoduché vyhledávání pomocí Bugzilla QuickSearch (to je to vyhledávací políčko s nápisem "Enter a bug # or some search terms:" na hlavní stránce každé <a href="https://bugzilla.mozilla.org/" title="Bugzilla ze všech Bugzill ta nejbugzillovatější">Bugzilly</a>). A rovnou napsal <a href="http://www.squarefree.com/bugzilla/quicksearch-help.html" title="Bugzilla QuickSearch">návod k jeho používání</a>. Když si ho přečtete, zjistíte, že hledání v QuickSearch není o moc složitější než třeba hledání na <a href="http://www.google.com/">Googlu</a>. (Pozn.: Doufejme, že po přečtení tohoto návodu, se přestane většina z vás Bugzilly bát :-)</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/08/15/">15. 8. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/tisice-chyb-v-bugzille/">Tisíce chyb v bugzille</a></h3>

	<div><a href="http://weblogs.mozillazine.org/asa/">Asa</a> <a href="http://weblogs.mozillazine.org/asa/archives/003616.html">potvrzuje</a>, že v Mozille 1.4 bylo opraveno neobvykle veliké množstí chyb reportovaných v <a href="https://bugzilla.mozilla.org/">Bugzille</a> (<a href="http://weblogs.mozillazine.org/asa/one-dot-four-changelog.html">cca 2000</a>). Úvahy o tom, co z toho plyne či neplyne najdete v komentářích.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/07/03/">3. 7. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/bugxula/">Bugxula</a></h3>

	<div>Hledáte často v <a href="http://www.bugzilla.org/">Bugzille</a>? Zkuste <a href="http://bugxula.mozdev.org/">Bugxulu</a> - rozšíření Mozilly pro hledání v Bugzille. Pokud chcete používat Bugxulu s vaší Bugzillou, přečtěte si jednoduchý návod '<a href="http://bugxula.mozdev.org/server.html">Server-Side How To</a>'. (Pozn.: <a href="http://bugzilla.czilla.cz/">bugzilla.czilla.cz</a> již lze Bugxulou prohledávat :-)</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/06/02/">2. 6. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/cas-leti-joke/">Čas letí (joke)</a></h3>

	<div>Už i v <a href="https://bugzilla.mozilla.org/">Bugzille</a> vědí, že "<a href="https://bugzilla.mozilla.org/attachment.cgi?id=59020&amp;action=view">čas je v pohybu</a>".</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/05/28/">28. 5. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/bugzilla-etiquette-guidelines/">Bugzilla etiquette guidelines</a></h3>

	<div>Pokud občas píšete něco do bugzilly, nebo se k tomu teprve chystáte, měli byste si přečíst nový dokument <a href="https://bugzilla.mozilla.org/page.cgi?id=etiquette.html">Bugzilla etiquette guidelines</a> shrnující pravidla "slušného chování" v Bugzille.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/03/21/">21. 3. 03</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/to-nejlepsi-z-bugzilly/">To nejlepší z bugzilly</a></h3>

	<div>V <a href="https://bugzilla.mozilla.org/">Bugzille</a> se dají nalézt ledasjaké zápisy, ty <a href="http://www.hmetzger.de/bob.html">nejvtipnější</a> vybral <a href="http://www.hmetzger.de/net6e.html">Holger Metzger</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/02/24/">24. 2. 03</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
