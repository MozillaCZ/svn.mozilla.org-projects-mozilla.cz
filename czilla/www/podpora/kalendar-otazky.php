<?php
	require_once '../inc/page.php';
	$page->setTitle('Mozilla Kalendář - Často kladené otázky');
	$page->setHeadline('Mozilla Kalendář','Často kladené otázky');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/">Mozilla.cz</a>.</div>

<div id="top"></div>
<div><strong>Hlavní</strong></div>

<ol>
	<li><a href="#a1">Jaký je rozdíl mezi Mozilla Kalendář a Mozilla Sunbird?</a></li>
	<li><a href="#a2">Co potřebuji mít nainstalováno před instalací Mozilla Kalendář?</a></li>
	<li><a href="#a3">Jak zjistím, která verze Mozilla Kalendář je nainstalována?</a></li>
	<li><a href="#a4">Jak mohu Mozillu Kalendář odinstalovat?</a></li>
</ol>

<div><strong>Používání</strong></div>

<ol>
	<li><a href="#a5">Je v nějaké formě k dispozici seznam svátků?</a></li>
	<li><a href="#a6">Jak mám docílit toho, aby se událost opakovala každý rok první pondělí v srpnu?</a></li>
	<li><a href="#a7">Jak mohu přenést seznam událostí na vzdálený server?</a></li>
	<li><a href="#a8">Jak mohu obsluhovat své sdílené kalendáře?</a></li>
</ol>

<div><strong>Import/Export</strong></div>

<ol>
	<li><a href="#a9">Do jakého formátu Kalendář ukládá události?</a></li>
	<li><a href="#a10">Umí spolupracovat s Microsoft Outlook?</a></li>
	<li><a href="#a11">Umí spolupracovat s kalendářním serverem Netscape?</a></li>
	<li><a href="#a12">Umí spolupracovat s Apple iCal?</a></li>
	<li><a href="#a13">Umí spolupracovat s Palm Pilot?</a></li>
	<li><a href="#a14">Proč se nezobrazí žádné události, když importuji soubor kalendáře?</a></li>
</ol>

<div><strong>Konfigurace/Nastavení</strong></div>

<ol>
	<li><a href="#a15">Jak mohu změnit formát data?</a></li>
	<li><a href="#a16">Jak mohu změnit upozorňovací zvuk Kalendáře?</a></li>
	<li><a href="#a17">Jak mohu barevně zvýraznit události?</a></li>
	<li><a href="#a18">Jak mohu přistupovat k lokálním kalendářům z jiné aplikace Mozilla?</a></li>
	<li><a href="#a19">Jak mohu spustit Kalendář po startu Mozilla Suite?</a></li>
	<li><a href="#a20">Jak mohu otevřít Kalendář bez nutnosti nejprve otevřít Mozillu/Firefox/Thunderbird?</a></li>
	<li><a href="#a21">Jak přidám tlačítko Kalendáře do lišty Firefoxe/Thunderbirdu?</a></li>
</ol>

<div><strong>Pomoc při vývoji Mozilly Kalendář/Sunbird</strong></div>

<ol>
	<li><a href="#a22">Jak mohu opravovat či měnit uživatelské rozhraní?</a></li>
	<li><a href="#a23">Kde mohu získat aktuální zdrojové kódy Mozilly Kalendář?</a></li>
	<li><a href="#a24">Jak si mohu zkompilovat vlastní verzi Mozilly Kalendář?</a></li>
	<li><a href="#a25">Jak mohu pomoci s opravou chyb?</a></li>
</ol>

<div><strong>Specifika české verze</strong></div>

<ol>
	<li><a href="#a26">Neukládají se mi události. Kde je problém?</a></li>
</ol>

<div><strong>Když si nevím rady/Pomoc</strong></div>

<ol>
	<li><a href="#a27">Na které diskusní skupiny či fóra se mohu obrátit s žádostí o pomoc?</a></li>
</ol>


<h2 id="hlavni" class="nice sb">Hlavní</h2>

<h3 id="a1">Jaký je rozdíl mezi Mozilla Kalendář a Mozilla Sunbird?</h3>

<p>
Mozilla Kalendář (v originále Mozilla Calendar) je rozšíření pro produkty <a href="http://www.mozilla.org/products/mozilla1.x/">Mozilla</a>, <a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a> a <a href="http://www.mozilla.com/thunderbird/">Mozilla Thunderbird</a>. Mozilla Sunbird je samostatná aplikace podobně jako třeba Firefox či Thunderbird. Oba používají stejný zdrojový kód a také sdílejí stejné <a href="https://bugzilla.mozilla.org/buglist.cgi?bug_status=UNCONFIRMED&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED&amp;product=Calendar">chyby</a> a jejich opravy.
</p>

<h3 id="a2">Co potřebuji mít nainstalováno před instalací Mozilla Kalendář?</h3>

<p>
Pro správnou funkčnost potřebujete mít nainstalován Mozilla Suite, Mozilla Firefox či Thunderbird. Na <a href="ftp://ftp.czilla.cz/other/addons/calendar/">ftp.czilla.cz</a> naleznete řadu lokalizovaných verzí, které jsou určeny pro jednotlivé verze zmíněných aplikací. Pro bližší informace nahlédněte do souboru VERSION, který je umístěn ve stejném adresáři. Pokud máte s instalací Kalendáře potíže, zkuste jej instalovat dříve než jiná rozšíření.
</p>

<h3 id="a3">Jak zjistím, která verze Mozilla Kalendář je nainstalována?</h3>

<p>
Spusťte Kalendář a v hlavní nabídce zvolte "Nápověda -> O Kalendáři". Verze Kalendáře je ve formátu datum + hodina zakončená řetězcem "-cal". Například tedy "2004062218-cal".
</p>

<h3 id="a4">Jak mohu Mozillu Kalendář odinstalovat?</h3>

<p>
Odinstalace skrze uživatelské rozhraní není dosud k dispozici. Můžete však vymazat příslušné soubory Kalendáře pro docílení stejného efektu. Vymažte následující soubory:<br /><br />
- &lt;adresář s aplikací&gt;/chrome/calendar.jar <br />
- &lt;adresář s aplikací&gt;/chrome/chrome.rdf  <br />
- &lt;adresář s aplikací&gt;/components/xpical.dll (ve Windows)<br />
- &lt;adresář s aplikací&gt;/components/libxpical.so (v Linuxu) <br />
- &lt;adresář s aplikací&gt;/components/calendar.xpt
</p>

<p><a href="#top">Zpět na obsah</a></p>

<h2 id="pouzivani" class="nice sb">Používání</h2>

<h3 id="a5">Je v nějaké formě k dispozici seznam svátků?</h3>

<p>
Ano, můžete si jej <a href="http://www.mozilla.org/projects/calendar/holidays.html" title="Mozilla Calendar: Seznam svátků" lang="en">stáhnout</a>.
</p>


<h3 id="a6">Jak mám docílit toho, aby se událost opakovala každý rok první pondělí v srpnu?</h3>

<p>
Pro nastavení opakování události každých 12 měsíců: V dialogu pro vytvoření nové události nastavte první pondělí srpna tohoto roku, řekněme 2005-08-02. Klepněte na panel Opakování, nastavte opakování každých 12 měsíců a zvolte volbu První pondělí v měsíci.
</p>

<h3 id="a7">Jak mohu přenést seznam událostí na vzdálený server?</h3>

<p>
Události můžete přenést na FTP server či webový server s podporou webDAV. Tyto události následně můžete i odebírat.
</p>

<h3 id="a8">Jak mohu obsluhovat své sdílené kalendáře?</h3>

<p>
Pro sdílení vašich kalendářů potřebujete přístup k <a href="http://www.webdav.org/" title="Webdav.org: Domovská stránka" lang="en">webDAV serveru</a>. Pokud provozujete vlastní webový server, můžete si nainstalovat <a href="http://www.webdav.org/mod_dav" lang="en">mod_dav</a>. Jedná se o modul pro Apache, který přidá vašemu webovému serveru podporu webDAV. Informace o tom, jak jej nastavit, naleznete na stránce. Poté, co nastavíte webDAV server, budete moci přenést váš kalendář na server a následně jej odebrat z jiné instalace Mozilla Kalendář.<br /><br />
Další informace naleznete v článku <a href="http://www.twilight-systems.com/flacco/mozcal/" lang="en">Storing your Mozilla Calendar on a WebDAV server</a>.<br />
Obdobný obsah naleznete též ve <a href="http://www.vetula.com/blog-radio/stories/2002/11/19/publishingEventsInMozilla.html" lang="en">weblogu Chrise Kelleyho</a>.
</p>

<p><a href="#top">Zpět na obsah</a></p>

<h2 id="import" class="nice sb">Import/Export</h2>

<h3 id="a9">Do jakého formátu Kalendář ukládá události?</h3>

<p>
Kalendář používá pro ukládání dat <a href="http://www.ietf.org/rfc/rfc2445.txt" title="Odkaz na RFC" lang="en">iCal standard</a>. Výchozí umístění tohoto souboru je v podadresáři Calendar uživatelského profilu.
</p>

<h3 id="a10">Umí spolupracovat s Microsoft Outlook?</h3>

<p>
Outlook neukládá data do standardizovaného formátu (volně dostupného). Proto jej Mozilla Kalendář nyní nepodporuje přímo. Nicméně můžete své události v Outlooku exportovat do *.ics souboru, a následně jej importovat v Kalendáři. Uživatelé Linuxu mohou nalézt několik rad na <a href="http://outport.sourceforge.net/" lang="en">následující stránce</a>. (Pro více informací o podpoře pro Outlook nahlédněte do <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=167102" title="Bugzilla.org: Bug 167102" lang="en">bugu 167102</a>.)
</p>

<h3 id="a11">Umí spolupracovat s kalendářním serverem Netscape?</h3>

<p>
Kalendář s kalendářním serverem Netscape přímo nepracuje. Pro přijmutí vzdáleného kalendáře zvolte v hlavní nabídce Nástroje -> Přijmout vzdálený kalendář. Kalendář publikujete zpět na server s povoleným webDAV volbou Nástroje -> Publikovat.
</p>

<h3 id="a12">Umí spolupracovat s Apple iCal?</h3>

<p>
iCal a Mozilla Kalendář používají stejný formát. To znamená, že události uložené v jednom z těchto programů můžete bez problémů otevřít ve druhém. Můžete si také předplatit <a href="http://www.apple.com/ical/library/" lang="en">seznam událostí na stránkách Apple</a>.
</p>

<h3 id="a13">Umí spolupracovat s Palm Pilot?</h3>

<p>
Kalendář dosud nepodporuje synchronizaci s Palm Pilot.
</p>

<h3 id="a14">Proč se nezobrazí žádné události, když importuji soubor kalendáře?</h3>

<p>Vypadá to, že váš výchozí kalendář je nastaven jako neviditelný (panel
Kalendáře). Jedná se o
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=237311"
	title="Bugzilla.org: Bug 237311" lang="en">bug 237311</a>,
který nastaví neviditelný kalendář na viditelný po krátkou dobu při
přidávání nové události do kalendáře. Během tohoto času jsou události
vykresleny v okně, ale když na některou z nich klepnete, událost kalendáře
není dostupná a výsledkem je pád aplikace.<br />
Ve zkratce: zkontrolujte, zda-li je váš výchozí kalendář viditelný.</p>

<p><a href="#top">Zpět na obsah</a></p>

<h2 id="konfigurace_nastaveni" class="nice sb">Konfigurace/Nastavení</h2>

<h3 id="a15">Jak mohu změnit formát data?</h3>

<p>
Formát data je definován operačním systémem. Tím je zaručena konzistentnost formátu data ve všech oknech. Formát data nastavíte:
</p>
<ul>
  <li>Start -> Nastavení -> Ovládací panely -> Místní a jazykové nastavení -> Místní nastavení -> Vlastní nastavení -> Datum</li>
</ul>
<p>
V předvolbách Kalendáře můžete nastavit, zda-li si přejete krátký, či dlouhý formát data. Takto nastavené datum bude zobrazené v tabulkách a exportovaných textech.
</p>

<h3 id="a16">Jak mohu změnit upozorňovací zvuk Kalendáře?</h3>

<p>
V balíčku, který naleznete v cestě &lt;adresář s aplikací&gt;/chrome/calendar.jar, naleznete soubor sound.wav. Pro změnu zvuku stačí tento soubor nahradit odpovídajícím zvukem.
</p>

<h3 id="a17">Jak mohu barevně zvýraznit události?</h3>

<p>
Můžete vytvořit více souborů kalendáře. Každý z nich pro jiný druh událostí a každému přiřadit jinou barvu.
</p>

<h3 id="a18">Jak mohu přistupovat k lokálním kalendářům z jiné aplikace Mozilla?</h3>

<p>
Předpokládejme, že základní aplikací je Kalendář ve Firefoxu. V Kalendáři se přepněte na panel Kalendáře. Pomocí kontextové nabídky dejte vytvořit nový soubor kalendáře. Zvolte jeho jméno a umístění. Cvičně do něj přidejte jednu událost a pohledem do souboru se ujistěte, že tam ta událost skutečně je. Spusťte Thunderbird a tam v nainstalovaném Kalendáři opakujte stejný postup (stejné jméno a umístění). Po potvrzení se vám zobrazí dialog, zda-li chcete daný dialog přepsat. Zvolte Ano. Po obnovení okna Kalendáře by měla být vidět událost, která byla přidána ve Firefoxu. Uvedený postup je stejný i u Mozilly Sunbird.
</p>

<h3 id="a19">Jak mohu spustit Kalendář po startu Mozilla Suite?</h3>

<p>
"Úpravy -> Předvolby -> Vzhled -> Po spuštění se otevře". Zde zaškrtněte Kalendář.
</p>

<h3 id="a20">Jak mohu otevřít Kalendář bez nutnosti nejprve otevřít Mozillu/Firefox/Thunderbird?</h3>

<p>
Postačí vytvořit na ploše zástupce, který bude spouštět Mozilla aplikaci s parametrem "-calendar". Tento zástupce bude spouštět přímo Kalendář.
</p>

<ul>
  <li>Ve Windows stačí zkopírovat zástupce Mozilla aplikace a ve Vlastnostech nového zástupce (kontextová nabídka) u pole Cíl přidat "-calendar". Výsledek v tomto poli může tedy vypadat následovně:
  <br /><br />
  "C:\Program Files\Mozilla Thunderbird\thunderbird.exe" -calendar
  <br /><br />
  </li>
  <li>
  V Mac OS vytvořte textový soubor s následující syntaxí:<br /><br />

  type:TEXT<br />
  creator:MOZZ<br />
  containing:ARGS: -calendar<br /><br />
  </li>
  <li>
  V jakémkoliv OS s příkazovou řádkou zadejte jako parametr za spouštěcím souborem aplikace Mozilla. Například:<br /><br />
  firefox -calendar
  </li>
</ul>

<h3 id="a21">Jak přidám tlačítko Kalendáře do lišty Firefoxe/Thunderbirdu?</h3>

<p>
Z hlavní nabídky zvolte "Zobrazit -> Nástrojové lišty -> Vlastní". Ze zobrazené nabídky přesuňte tlačítko Kalendáře do lišty.
</p>

<p><a href="#top">Zpět na obsah</a></p>

<h2 id="vyvoj" class="nice sb">Jak pomoci při vývoji Mozilly Kalendář/Sunbird</h2>

<h3 id="a22">Jak mohu opravovat či měnit uživatelské rozhraní?</h3>

<p>
GUI je napsáno v XUL, JavaScriptu a CSS s lokalizačními řetězci umístěnými v souborech *.dtd a *.properties. Vše zmíněné je umístěno v chrome/calendar.jar.
</p>
<ul>
  <li>V Linuxu je cesta pravděpodobně něco jako /usr/local/mozilla/chrome/calendar.jar</li>
  <li>V Windows je cesta pravděpodobně něco jako c:\Program Files\Mozilla\chrome\calendar.jar</li>
</ul>
Rozbalte soubor calendar.jar. Obsahuje tři adresáře: content, locale a skin.
<ul>
  <li>content: XUL a JS, obsahují komponenty a reakce na události. XBL soubory obsahují obojí (jak XUL, tak JS)</li>
  <li>locale: DTD a properties, obsahují text pro každý jazyk</li>
  <li>skin: CSS a obrázky, definují vzhled pro každé výchozí téma vzhledu</li>
</ul>
<p>
Pro provedení změny:
</p>
<ol>
  <li>rozbalte soubor calendar.jar,</li>
  <li>zeditujte soubory,</li>
  <li>zabalte je zpět do souboru calendar.jar,</li>
  <li>restartujte aplikaci Mozilla a otestujte</li>
</ol>
<p>
Testem s nastavenou volbou javascript.options.strict na true získáte do JavaScriptové konzole hlášení o běžných problémech (volby získáte zadáním about:config do adresního řádku).
<br /><br />
Pro opravování chyb je lepší získat soubory přímo z CVS než z posledního XPI instalátoru, tyto soubory zeditovat a zabalit do jar souboru.
</p>

<h3 id="a23">Kde mohu získat aktuální zdrojové kódy Mozilly Kalendář?</h3>

<p>
Zdrojové kódy kalendáře naleznete v Mozilla CVS pod mozilla/calendar. Přečtěte si <a href="http://www.mozilla.org/source.html" title="Mozilla.org: Jak získat zdrojové kódy">instrukce</a>, jak získat zdrojové kódy.
<br /><br />
Ty můžete také <a href="http://lxr.mozilla.org/mozilla/source/calendar/" lang="en">prohlížet</a> nebo v nich <a href="http://lxr.mozilla.org/mozilla/" lang="en">vyhledávat</a>. Je zde též možnost vyhledávat, co bylo v adresáři /mozilla/calendar pouze <a href="http://bonsai.mozilla.org/cvsqueryform.cgi" lang="en">změněno</a>.

</p>

<h3 id="a24">Jak si mohu zkompilovat vlastní verzi Mozilly Kalendář?</h3>

<p>
Nahlédněte na <a href="http://www.mozilla.org/projects/calendar/installation.html" lang="en">příslušnou stránku</a>.
</p>

<h3 id="a25">Jak mohu pomoci s opravou chyb?</h3>

<ol>
	<li>Bugzilla: Podívejte se na  <a href="http://www.mozilla.org/projects/calendar/bugs.html">seznam chyb</a>.</li>
	<li>Bugzilla: Přiřaďte si nějakou chybu (pokud můžete, není to vyžadováno)</li>
	<li>Opravte chybu.</li>
	<li>Otestujte opravu.</li>
	<li>Aktualizujte komentáře.</li>
	<li>Vytvořte patch (použijte [cvs] diff, jednotný kontext, rozložte tabulátory na mezery).</li>
	<li>Bugzilla: Připojte patch jako přílohu s komentářem</li>
	<li>
		<ol>
			<li>jak vaše oprava opravuje chybu (jak pracuje)</li>
			<li>jak byla testována, na jaké verzi Mozilla/Firefox/Thunderbird/Sunbird a jakém OS/platformě, pokud to souvisí</li>
		</ol>
	</li>
	<li>Ujistěte se, že na e-mailovou adresu mostafah@oeone.com dorazila informace.</li>
	<li>mostafah@oeone.com patch po vyzkoušení zařadí do CVS.</li>
</ol>

<p><a href="#top">Zpět na obsah</a></p>

<h2 id="specifika" class="nice sb">Specifika české verze</h2>

<h3 id="a26">Neukládají se mi události. Kde je problém?</h3>

<p>
Váš kalendář je uložen v cestě, která obsahuje diakritiku. Tato chyba byla autorovi nahlášena, ale nebyla dosud opravena. Řešením je ukládat kalendář do cesty, která neobsahuje diakritiku.
</p>

<p><a href="#top">Zpět na obsah</a></p>

<h2 id="pomoc" class="nice sb">Když si nevím rady/Pomoc</h2>

<h3 id="a27">Na které diskusní skupiny či fóra se mohu obrátit s žádostí o pomoc?</h3>

<p>
Pokud se vyskytla věc, se kterou si nevíte rady, navštivte fórum na podporu uživatelů na adrese <a href="http://forum.mozilla.cz/viewforum.php?f=8" title="Mozilla.cz: Fórum na podporu uživatelů" lang="cs">forum.mozilla.cz</a>. Další možností je <a href="http://forums.mozillazine.org/viewforum.php?f=34" title="Diskusní fórum na Mozillazine">diskusní fórum</a> na <a href="http://www.mozillazine.org/" title="Mozillazine.org: Hlavní stránka" lang="en">Mozillazine.org</a>. K dispozici je též diskusní skupina <a href="news://news.mozilla.org/netscape.public.mozilla.calendar" lang="en">netscape.public.mozilla.calendar</a>.
</p>

<p><a href="#top">Zpět na obsah</a></p>

<hr />

<p>
Tento dokument vznikl překladem <a href="http://www.mozilla.org/projects/calendar/faq.html" title="Mozilla Calendar: FAQ" lang="en">oficiálního FAQ</a>, který je umístěno na <a href="http://www.mozilla.org/projects/calendar/" title="Mozilla Calendar: Domovská stránka" lang="en">oficiálních stránkách</a>. Dokument byl navíc doplněn o sekci věnovanou specifikům lokalizované verze.
</p>

<?php
	$page->includeTemplate('footer');
?> 