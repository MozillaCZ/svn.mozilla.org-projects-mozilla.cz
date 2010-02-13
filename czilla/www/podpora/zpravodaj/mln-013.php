<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Zpravodaj Mozilla Links - 13. číslo';
	$page->headline = array('Zpravodaj Mozilla Links','13. číslo (17. 2. 2004 / 2. 3. 2004)');

	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');

	$page->includeHeader(); 
?>

<h2 id="content" class="nice">Obsah</h2>
<ul>
	<li><a href="#ml.0">Úvod</a></li>
	<li><a href="#ml.1">Vylepšení Mozilly</a>

	<ul>
		<li><a href="#ml.11"><abbr title="Wireless Markup Language">WML</abbr> Browser</a></li>
		<li><a href="#ml.12">Tip zpravodaje Mozilla Links: Skryté triky se záložkami pomocí funkce "táhni a pusť"</a></li>
		<li><a href="#ml.13">Supertip zpravodaje Mozilla Links: Nastavte si překladač</a></li>
	</ul>
	</li>

	<li><a href="#ml.2">Novinky</a>

	<ul>
		<li><a href="#ml.21">Mozilla Firebird přejmenován na Firefox, vydána verze 0.8</a></li>
		<li><a href="#ml.22">Vydán Mozilla Thunderbird 0.5</a></li>
		<li><a href="#ml.23">Vydáno Nvu 0.1</a></li>
		<li><a href="#ml.24">MozillaZine zprovoznil Základnu vědomostí (Knowledge Base)</a></li>
		<li><a href="#ml.24">Představujeme Tým vizuální identity Mozilly (Mozilla Visual Identity Team)</a></li>
	</ul>
	</li>
	<li><a href="#ml.3">Mozilla pod povrchem</a></li>
	<li><a href="#ml.4">Projekty pro Mozillu</a>
	<ul>
		<li><a href="#ml.41">Projekt týdne: Dictionary Search</a></li>
		<li><a href="#ml.42">Samostatné zprávy o vývoji</a>
		<ul>

			<li><a href="#ml.421">MSDbar 0.6</a></li>
			<li><a href="#ml.422">DownloadWith 0.0.6</a></li>
			<li><a href="#ml.423">Mozilla-Delphi</a></li>
			<li><a href="#ml.424">MozManual Final 1.0</a></li>
			<li><a href="#ml.425">mozCC 0.7.7</a></li>
			<li><a href="#ml.426">Launchy 1.7.0</a></li>

			<li><a href="#ml.427">Reload Every 0.2</a></li>
			<li><a href="#ml.428">Dictionary Search 0.3</a></li>
		</ul>
		</li>
	</ul>
	</li>
	<li><a href="#ml.5">Anketa zpravodaje Mozilla Links</a>
	<ul>
		<li><a href="#ml.51">Vyhodnocení ankety z minulého čísla</a></li>
		<li><a href="#ml.52">Nová anketa: Plánujete nastavit Mozilla Firefox jako výchozí prohlížeč?</a></li>
	</ul>
	</li>
	<li><a href="#ml.6">Reklama</a></li>
	<li><a href="#ml.7">Kontaktní informace</a></li>
</ul>

<h2 id="ml.0" class="nice">Úvod</h2>
<p>Vítejte zpět u zpravodaje Mozilla Links!</p>
<p>Mozilla Firefox je konečný název samostatného prohlížeče. Touto změnou <a href="http://www.mozilla.org/">Mozilla Foundation</a> dodržela svůj závazek vůči <a href="http://www.firebirdsql.org/">Databázi Firebird</a>, aby zabránila nejasnostem mezi uživateli těchto otevřených projektů. Asi nejvítanější novinkou je instalátor pro Windows, usnadňující instalaci populárních pluginů Macromedia Flash a Java Runtime Environment (JRE).</p>
<p>Firefox 0.8 je tak očekávanou verzí, že weby <a href="http://www.mozdev.org/">mozdev.org</a>, <a href="http://www.mozillazine.org/">mozillazine.org</a> a <a href="http://www.mozilla.org/support/firefox/">Mozilla Firefox Help</a> měly problém zvládnout velký zájem uživatelů o poslední informace, rozšíření nebo účast v diskusních fórech především ohledně změny názvu.</p>
<p>Zveřejnili jsme také konečné logo, které zachycuje červenou pandu obklopující glóbus, slogan produktu "The browser, reloaded", marketingový slogan "Take back the web" a <a href="http://www.mozilla.org/products/firefox/buttons.html">ikonky</a>, kterými můžete dát vědět svým webovým návštěvníkům o tomto úžasném produktu.</p>
<p>Děkuji za přízeň. Vaše komentáře prosím posílejte na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>.</p>
<address>Percy Cabello, Mozilla Links</address>
<h2 id="ml.1" class="nice">Vylepšení Mozilly</h2>
<h3 id="ml.11"><abbr title="Wireless Markup Language">WML</abbr> Browser</h3>
<p><em>(vyvíjí Matthew Wilson)</em></p>
<p>Pokud jste někdy pochybovali o schopnostech svého webového prohlížeče,
protože jste ztratili drahocenné minuty nebo megabyty jen na to,
abyste zjistili, že jde o web pro mobilní zařízení, tak už
nepochybujte.</p>
<p><abbr title="Wireless Markup Language">WML</abbr> browser umožní Mozille a Mozilla Firefoxu (odlehčená verze)
prohlížet WML soubory (webové stránky pro mobilní zařízení).
Stačí nainstalovat toto malé rozšíření (13 kB), restartovat
svůj prohlížeč a napsat mobilní webovou adresu do adresního řádku.</p>
<p>Nové okno otevře zobrazovanou, obvykle malou, webovou stránku.</p>
<p>Pro začátek můžete zkusit navštívit <a href="http://www.google.com/wml">http://www.google.com/wml</a>.</p>
<p>Navštivte <a href="http://wmlbrowser.mozdev.org/">http://wmlbrowser.mozdev.org/</a>, stáhněte si a zkuste toto pěkné rozšíření.</p>
<h3 id="ml.12">Tip zpravodaje Mozilla Links: Skryté triky se záložkami pomocí funkce "táhni a pusť"</h3>
<p><em>(přispěl Daniel Wang)</em></p>
<p>Možná jste si všimli, že v balíku aplikací Mozilla nemůžete přetáhnout
složky záložek do záložek nebo do osobní lišty. Ve skutečnosti
to jde, držte <kbd>Alt</kbd> nebo <kbd>Shift</kbd> během přetahovaní a je to.</p>
<p>Ale pozor: Jestliže pustíte složku na tlačítko záložek a uvolníte
tlačítko myši před rozbalením nabídky záložek, obsah celé vaší složky
se ztratí. Abyste předešli tomuto problému, odstraňte tlačítko
<tt>Záložky</tt> (<tt>Bookmarks</tt>) z nástrojové lišty v menu <tt>Úpravy/Předvolby/Prohlížeč</tt> (<tt>Edit/Preferences/Navigator</tt>).</p>
<p>Podobné tipy se záložkami:</p>
<ul>
<li>Pro zkopírování složky nebo záložky držte <kbd>Ctrl</kbd> a přetáhněte je.</li>
<li>Pro nastavení nové domovské stránky přetáhněte záložku nebo ikonu
stránky v adresním řádku na tlačítko <tt>Domů</tt> (<tt>Home</tt>). (Tohle nemůžete provést
se složkou záložek.)</li>
<li>Pro rychlé přepínání mezi panely, přidejte skupinu panelů do své nástrojové lišty.</li>
</ul>
<h3 id="ml.13">Supertip zpravodaje Mozilla Links: Nastavte si překladač</h3>
<p>Navážeme na minulé vydání Supertipu a ukážeme vám, jak
později nastavit překladač Mozilly 1.6 podle vašich přání.</p>
<p>Prohlížeč Mozilla standardně zasílá aktuální webovou adresu (<abbr title="Uniform Resource Locator">URL</abbr>) na překladač
<a href="http://www.google.com/">Googlu</a> (Google Translation Tool), který vrátí přeloženou
webovou stránku. Trik spočívá v přenastavení Mozilly na adresu
požadovaného překladače namísto Googlového. Existuje mnoho důvodů
proč to udělat, např. protože Google nabízí omezený
počet jazyků, jiný překladač poskytuje kvalitnější překlad atd.</p>
<p>Pro tuto ukázku použijeme volně dostupný překladač Systran.</p>
<ul>
	<li>Napište <kbd>about:config</kbd> do řádky adres</li>
	<li>Vyhledejte parametr <var>browser.translation.service</var></li>
	<li>Změňte jeho hodnotu z
<var><a href="http://translate.google.com/translate?prev=/language_tools&amp;u=">http://translate.google.com/translate?prev=/language_tools&amp;u=</a></var> na <var><a href="http://www.systranbox.com/systran/box?systran_id=SystranSoft-en&amp;systran_charset=utf-8&amp;systran_lp=en_es&amp;systran_url=">http://www.systranbox.com/systran/ box?systran_id=SystranSoft-en&amp;systran_charset=utf-8 &amp;systran_lp=en_es&amp;systran_url=</a></var></li>
</ul>
<p>Je důležité, aby byl parametr pro URL vždy jako poslední. Mozilla pak doplní aktuální URL do řetězce.</p>
<p>Možná jste si v našem příkladu všimli parametru <var>systran_lp</var> s hodnotou
<var>en_es</var>. Tato hodnota znamená pro Systran, že chcete překládat
z angličtiny ((<var>en</var>)glish) do španělštiny ((<var>es</var>)panol). Jméno a hodnota
tohoto parametru je individuální pro každý překladač.</p>
<p>Navštivte stránku překladače, který podporuje zadávání webové adresy
k přeložení a vyzkoušejte to. Na výsledné webové stránce si prohlédněte
zobrazené URL v řádce adres a už jste schopni pochopit význam jednotlivých parametrů a nastavit správnou hodnotu pro
<var>browser.translation.service</var> v <kbd>about:config</kbd> přesně podle svých potřeb.</p>
<p>Potřebujete najít překladač? Navštivte <a href="http://directory.google.com/Top/Science/Social_Sciences/Language_and_
Linguistics/Translation/Tools/Translation_Engines/">adresář Googlu</a>.</p>
<p>Chcete více tipů? Zkuste <a href="http://tipbar.mozdev.org/">rozšíření
TipBar</a> pro zobrazení Tipu dne v Mozilla Firefoxu.</p>
<p>Další tipy k vašemu oblíbenému prohlížeči najdete na <a
 href="http://www.mozillatips.com/">mozillatips.com</a>.</p>
<p>Máte nějaký tip nebo supertip? Dejte o něm vědět ostatním čtenářům zasláním na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>.</p>
<h2 id="ml.2" class="nice">Novinky</h2>
<p><em>(přispěl <a href="http://www.mozillazine.org/">MozillaZine</a>, váš zdroj novinek o Mozille)</em></p>
<h3 id="ml.21">Mozilla Firebird přejmenován na Firefox, vydána verze 0.8</h3>
<p>Samostatný prohlížeč Mozilla Firebird <a href="http://www.mozilla.org/projects/firefox/firefox-name-faq.html">se přejmenoval na Firefox</a>
a dosáhl verze 0.8. Nová verze přináší nového správce stahování, vylepšení záložek a podpory rozšíření a několik tisíc dalších vylepšení. Uživatelé Windows mohou využít nový instalátor, zatímco uživatelé Mac OS X se dočkají nového vzhledu <a href="http://kmgerich.com/archive/000049.html">Pinstripe</a> od Kevina Gericha a Stephena Horlandera ve stylu Aqua.</p>
<p>Firefox je třetí název prohlížeče. Předešlé jméno Firebird, oznámené loni v dubnu, vyvolalo silné protesty od <a href="http://www.firebirdsql.org/">komunity databáze Firebird</a>. Než mozilla.org oznámila, že Firebird bude používán jen jako kódové jméno, čelila velké kampani ze strany komunity databáze Firebird a jejích obchodních partnerů. Firefox je zamýšlen jako trvalý název produktu, ze kterého vznikne silná obchodní značka. Byl vybrán po rozsáhlém mezinárodním zkoumání a konzultací s právníky. Proces <a href="http://tarr.uspto.gov/servlet/tarr?regser=serial&amp;entry=78344043">registrace obchodní známky Firefox</a> na <a href="http://www.uspto.gov/">úřadě patentů a obchodních značek v USA</a> začal loni v prosinci.</p>
<ul>
<li><a href="http://www.mozilla.org/products/firefox/download.html">Stáhnout Mozilla Firefox 0.8</a></li>
<li><a href="http://www.mozilla.org/products/firefox/releases/0.8.html">Poznámky k Mozilla Firefoxu 0.8</a></li>
</ul>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4278">Celý článek</a>]</strong></p>
<h3 id="ml.22">Vydán Mozilla Thunderbird 0.5</h3>
<p><a href="http://www.mozilla.org/">Mozilla Foundation</a> vydala novou verzi aplikace pro elektronickou poštu a diskusní skupiny - <a href="http://www.mozilla.com/thunderbird/">Mozilla Thunderbird</a>. Nová verze vylepšuje <acronym title="Internet Message Access Protocol">IMAP</acronym>, podporu <abbr title="Lightweight Directory Access Protocol">LDAP</abbr>, přechod z Netscapu 4.x,
kontrolu pravopisu, umožňuje synchronizaci adresáře s Palmem a přináší mnoho dalších oprav a menších vylepšení.</p>
<ul>
<li><a href="http://www.mozilla.com/thunderbird/">Stáhnout Mozilla Thunderbird 0.5</a></li>
<li><a href="http://www.mozilla.org/projects/thunderbird/release-notes.html">Poznámky k Mozilla Thunderbirdu 0.5</a></li>
</ul>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4277">Celý článek</a>]</strong></p>
<h3 id="ml.23">Vydání Nvu 0.1</h3>
<p>Byl vydán <a href="http://nvu.com/">Nvu</a> 0.1, otevřený vývojový nástroj pro web založený na Mozilla Editoru. Aplikace vyvinutá Danielem Glazmanem z <a href="http://www.disruptive-innovations.com/">Disruptive Innovations</a> pro linuxového distributora
<a href="http://www.lindows.com/">Lindows.com</a> je <a href="http://nvu.com/download.html">dostupná</a> pro LindowsOS, další linuxové distribuce a Microsoft Windows.</p>
<ul>
<li><a href="http://nvu.com/download.html">Stáhnout Nvu 0.1</a></li>
</ul>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4254">Celý článek</a>]</strong></p>
<h3 id="ml.24">MozillaZine zprovoznil Základnu vědomostí (Knowledge Base)</h3>
<p>Zpravodajský a komunitní server MozillaZine oficiálně spustil Základnu vědomostí (Knowledge Base). Ta využívá stejný software jako populární otevřená encyklopedie Wikipedia. Umožňuje zobrazovat, přidávat, upravovat a odebírat informace. MozillaZine věří, že se v následujících měsících zapojí dostatek lidí a že budou moci využít obsah pro tvorbu podnikové verze, která pomůže Mozilla Foundation získat nové obchodní partnery a zajistit tak další financování projektu Mozilla.</p>
<ul><li><a href="http://kb.mozillazine.org/">MozillaZine Knowledge Base</a></li></ul>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4279">Celý článek</a>]</strong></p>
<h3 id="ml.25">Představujeme Tým vizuální identity Mozilly (Mozilla Visual Identity Team)</h3>
<p>Jednou z nejnápadnějších změn <a href="http://mozillazine.org/talkback.html?article=4278">Mozilla Firefoxu 0.8</a> je nové logo. To vytvořil Mozilla Visual Identity Team (Tým vizuální identity Mozilly), součást <a href="http://www.mozilla.org/projects/marketing/"> Mozilla Marketing Project (Marketingový projekt Mozilly)</a>. Tým vizuální identity vede <a href="http://www.actsofvolition.com/">Steven Garrity</a> ze společnosti <a href="http://www.silverorange.com/">Silverorange</a>, kterého loni po sepsání <a href="http://actsofvolition.com/steven/mozillabranding/">návrhu označování Mozilly</a> kontaktoval vedoucí marketingu Mozilly <a href="http://www.decrem.com/bart/">Bart Decrem</a>. Steven začal sestavovat skupinu návrhářů (včetně jeho spolupracovníků <a href="http://www.deltatangobravo.com/">Daniela Burky</a> a <a href="http://www.newrecruit.org/">Stephena
DesRochese</a>), aby vylepšila kvalitu a stálost vizuálních prvků produktů Mozilly. V týmu jsou i tvůrci výchozího vzhledu Firefoxu na Mac OS X <a href="http://kmgerich.com/">Kevin Gerich</a> a Stephen Horlander.</p>
<p>Současné logo Firefoxu vytvořil <a href="http://www.hicksdesign.co.uk/journal/">Jon Hicks</a> ze společnosti
<a href="http://www.hicksdesign.co.uk/">Hicksdesign</a>, kterého po dokončení <a href="http://www.hicksdesign.co.uk/downloads/camino/">sady ikonek prohlížeče Camino</a> najal Steven Garrity. Logo navrhl Daniel Burka a finální obrázek je založen na nákresu Stephena DesRochese.</p>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4319">Celý článek</a>]</strong></p>
<h2 id="ml.3" class="nice">Mozilla pod povrchem</h2>
<p><em>(přispěl Alex Bishop)</em></p>
<p>Přestože poslední verze Mozilla Firefoxu a Mozilla Thunderbirdu byly vydány před několika dny, vývoj pokračuje v plném proudu. <a href="http://forums.mozillazine.org/viewtopic.php?t=53709">Nová testovací verze</a> Thunderbirdu má vylepšený antispamový algoritmus a je dostupná pro uživatele Windows, kteří chtějí nejmodernější a nejpokročilejší verzi (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=181534">#181534</a>). Firefox brzy získá významné migrační schopnosti. Ty usnadní uživatelům balíku aplikací Mozilla, Netscape Communicatoru 4.x, Internet Exploreru (pro Win i Mac), Opery, Safari a OmniWebu automaticky přenést svá nastavení a data, a usnadní tak přechod k Firefoxu.</p>
<p>Mezitím bylo vylepšeno blokování vyskakovacích oken (popup). Vyskakovací okna nyní aktivuje méně událostí (např. pohyb ukazatele myši nebo stisk klávesy). K ochraně uživatelů by měl přispět i limit pro počet současně otevřených oken (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=197919">#197919</a>).</p>
<p>Přiblížili jsme se plné podpoře <abbr title="Scalable Vector Graphics">SVG</abbr>, ačkoli ještě není v pravidelných verzích (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=182533">#182533</a>).</p>
<p><strong>[<a href="http://www.mozilla.org/status/2004-02-16.html">Celá zpráva</a>]</strong></p>
<h2 id="ml.4" class="nice">Projekty pro Mozillu</h2>
<p><em>(přispěl Brian King)</em></p>
<h3 id="ml.41">Projekt týdne: Dictionary Search</h3>
<p>Dictionary Search poskytuje velmi snadný způsob jak najít nebo přeložit slovo na webové stránce ve vámi vybraném online slovníku jako např. <a href="http://dictionary.com/">dictionary.com</a>. Jednoduše označte slovo, vyvolejte kontextovou nabídku a vyberte <tt>Dictionary Search for ...</tt> Otevře se nový panel s vyhledaným slovem. Rozšíření funguje v balíku aplikací Mozilla i Mozilla Firefoxu.</p>
<ul><li><a href="http://www.mozdev.org/featured/index.html">Více informací</a></li></ul>
<h3 id="ml.42">Samostatné zprávy o vývoji</h3>
<p><em>Samostatné zprávy o vývoji obsahují novinky a poslední informace o Mozille a jejích rozšířeních shromážděných na <a href="http://www.mozdev.org/">mozdev.org</a> a jinde v rámci komunity.</em></p>
<p>Poslední zpráva z 15. února 2004 obsahuje:</p>
<p>Počátkem týdne byly vydány Firefox 0.8 a Thunderbird 0.5. I přes změnu názvu získává Firefox pozitivní recenze a určuje standard pro moderní prohlížení webu. Změna názvu může narušit některá rozšíření. Pokud máte podezření, že se vám to stalo, kontaktujte vlastníka projektu nebo nahlaste chybu. Vaše zapojení pomůže Mozille zvětšit uživatelské zázemí.</p>
<h4 id="ml.421">MSDbar 0.6</h4>
<p>Bioinformatický panel nástrojů pro hledání v Databázi proteinů (Protein Data
Bank) (<abbr title="Worldwide Protein Data Bank">wwPDB</abbr>) je nyní možné odinstalovat přes jslib. Nová verze přináší hledání klíčových slov a další vlastnosti, mj. lépe uspořádaného menu Options.</p>
<ul>
<li><a href="http://msdbar.mozdev.org/">http://msdbar.mozdev.org/</a></li>
</ul>
<h4 id="ml.422">DownloadWith 0.0.6</h4>
<p>DownloadWith je rozšíření pro Mozillu/Firefox na stahování souborů externími programy wget, prozilla, Downloader for X, Download
Accelerator Plus a GetRight. Je dostupný pro Windows,
Linux a Unix. Můžete si stáhnout ukázkové nastavení a začít.</p>
<ul>
<li><a href="http://downloadwith.mozdev.org/">http://downloadwith.mozdev.org/</a></li>
</ul>
<h4 id="ml.423">Mozilla-Delphi</h4>
<p>Projekt se zdroji pro práci s Mozillou v Borland Delphi a Kylixu zpřístupnil online JavaScriptové třídy "Bridge"! Tyto třídy umožňují použít engine JavaScriptu v Mozille na skriptování aplikací vytvořených v Delphi a Kylixu. Nový článek "Delphi 4 Lizard Taming" řeší některé aktuální problémy a předělané rozhraní prohlížeče pro Delphi 4.</p>
<ul>
<li><a href="http://delphi.mozdev.org/">http://delphi.mozdev.org/</a></li>
</ul>
<h4 id="ml.424">MozManual Final 1.0</h4>
<p>V ukázkové pracovní verzi byla zpřístupněna <abbr title="HyperText Markup Language">HTML</abbr> verze Manuálu pro nové uživatele s krátkým přehledem a průvodcem vlastnostmi.</p>
<ul>
<li><a href="http://mozmanual.mozdev.org/">http://mozmanual.mozdev.org/</a></li>
</ul>
<h4 id="ml.425">mozCC 0.7.7</h4>
<p>Rozšíření pro snadné zobrazení metadat webových stránek o licencích Creative Commons. Tento týden byla vydána verze 0.7.7 s důležitými opravami. Přidává podporu dalších formátů včetně <acronym title="Synchronized Multimedia Integration Language">SMIL</acronym> a <abbr title="Scalable Vector Graphics">SVG</abbr> (for SVG-enabled builds only).</p>
<ul>
<li><a href="http://yergler.net/projects/mozcc/">http://yergler.net/projects/mozcc/</a></li>
</ul>
<h4 id="ml.426">Launchy 1.7.0</h4>
<p>Launchy umožňuje otevření odkazů externími aplikacemi. Přidána byla podpora dalších aplikací včetně Mozilla Firefoxu, MyIE2 a Eudory.</p>
<ul><li><a href="http://gemal.dk/mozilla/launchy.html">http://gemal.dk/mozilla/launchy.html</a></li>
</ul>
<h4 id="ml.427">Reload Every 0.2</h4>
<p>14. února byla vydána nová verze rozšíření, které automaticky obnovuje webové stránky v určitém časovém intervalu. Tato verze umožňuje zapnout/vypnout obnovu všech panelů najednou a nastavit libovolný časový interval.</p>
<ul>
<li><a href="http://reloadevery.mozdev.org/">http://reloadevery.mozdev.org/</a></li>
</ul>
<h4 id="ml.428">Dictionary Search 0.3</h4>
<p>Položka v kontextovém menu pro hledání slov na webových stránkách v online slovníku. Nová verze opravuje chybu možného zatuhnutí Mozilly a Firefoxu a umožňuje hledání frází, např. "webový prohlížeč".</p>
<ul>
<li><a href="http://dictionarysearch.mozdev.org/">http://dictionarysearch.mozdev.org/</a></li>
</ul>
<p>Více informací o každém projektu se můžete dovědět <a href="http://www.mozdev.org/status/2004-02-15-status.html">ve zprávě</a>.</p>
<h2 id="ml.5" class="nice">Anketa zpravodaje Mozilla Links</h2>
<h3 id="ml.51">Vyhodnocení ankety z minulého čísla</h3>
<p>V minulém čísle jsme se ptali, co byste si nejraději koupili,
kdyby to propagovala Mozilla. Zde jsou výsledky:</p>
<ul>
	<li>Oblečení - 29 %</li>
	<li>Doplňky - 6 %</li>
	<li>Hrnečky, sklenice, tácky atd. - 27 %</li>
	<li>Papírové doplňky - 10 %</li>
	<li>Technické doplňky - 21 %</li>
	<li>Nástroje - 2 %</li>
	<li>Tašky/brašny - 5 %</li>
	<li>Nářadí do auta - 1 %</li>
</ul>
<p>(*) Kvůli zaokrouhlování nemusí být součet roven 100 %.</p>
<h3 id="ml.52">Nová anketa: Plánujete nastavit Mozilla Firefox jako výchozí prohlížeč?</h3>
<ul>
	<li>Už ho tak mám nastavený.</li>
	<li>Ano, jakmile získá nějakou vlastnost, kterou dosud postrádám.</li>
	<li>Ano, jakmile dosáhne verze 1.0.</li>
	<li>Ano, pokud se stane součástí balíku aplikací Mozilla.</li>
	<li>Ne, jsem spokojen s balíkem aplikací Mozilla.</li>
	<li>Ne, jsem spokojen se svým současným prohlížečem.</li>
</ul>
<p>Hlasujte na <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org/</a>.</p>
<h2 id="ml.6" class="nice">Reklama</h2>
<p>Právě teď jsou dostupná CD s Mozillou za pouhých 5.95 $ včetně poštovného a balného. To je vhodná příležitost, jak přispět nadaci Mozilla a mít užitečnou kopii vašich nejoblíbenějších internetových aplikací na sdílení s vašimi přáteli.</p>
<p>Můžete si také předplatit CD s Mozillou za 17.95 $ a dostávat nové verze Mozilly po celý rok.</p>
<p>Trička s Mozillou prodáváme od 15.95 $.</p>
<p>Navštivte <a href="http://store.mozilla.org/">http://store.mozilla.org/</a>!</p>
<p>Zde může být vaše reklama! <a href="http://newsletter.mozdev.org/mlsp.html">Více informací</a>.</p>
<h2 id="ml.7" class="nice">Kontaktní informace</h2>
<p>Mozilla Links<sup>TM</sup> je čtrnáctidenní elektronický zpravodaj vydávaný projektem <a href="http://newsletter.mozdev.org/">Mozilla Links Newsletter</a>.</p>
<p>Copyright 2004 přispěvatelé zpravodaje Mozilla Links. Zpravodaj Mozilla Links je vydáván pod licencí <a href="http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode/">Creative Commons Attribution-NonCommercial-ShareAlike 1.0</a>.</p>
<p><strong>Správa odběru:</strong> Pro přihlášení, odhlášení nebo změnu nastavení navštivte prosím <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org/</a>.</p>
<p><strong>Vaše soukromí:</strong> K přijímání tohoto zpravodaje je vyžadována pouze platná e-mailová adresa. Ta nebude využita k jiným účelům než těm souvisejícím s tímto zpravodajem (doručení, podpora, odhlášení apod.).</p>
<p><strong>Komentáře:</strong> Vítány na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>.</p>
<p>Zpravodaj Mozilla Links je překládán do čínštiny, <a href="/podpora/zpravodaj/">češtiny</a>, holandštiny, němčiny, japonštiny a polštiny.</p>

<p><strong>Česká verze:</strong> <a href="/czilla/lide.html#kdo-je-PT">Petr Tomeš</a> a Pavel Kácha.</p>

<?php
	$page->includeFooter();
?>