<?php
	require_once '../../inc/page.php';
	$page->setTitle('Tipy a triky pro prohlížeč Firefox');
	$page->setHeadline('Tipy a triky','Jak si můžete upravit prohlížeč Firefox');
	$page->setKeywords('podpora, tipy, triky, nápověda, pomoc, návod, mozilla, firefox, prohlížeč');
	$page->setDescription('Stránka s různými tipy a triky pro prohlížeč Mozilla Firefox');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<p>Tato stránka obsahuje různé tipy a triky pro prohlížeč Mozilla Firefox. Mnoho těchto tipů je funkčních i pro
prohlížeč Mozilla z balíku Mozilla. Řada z nich vyžaduje úpravu textových souborů ve vašem <a href="konfigurace.php">uživatelském profilu</a>
a je nedoporučeno je provádět pokud nejste dostatečně seznámeni s používáním adresářů a editací souborů. Tipy jsou děleny
do čtyř kategorií a seřazeny podle důležitosti/popularity. </p>

<?php
$tips = $page->getTipBuilder('ff', 1);
$tips->addSection('Vzhled prohlížeče');
$tips->addTip('Použití vzhledu nabídky z Windows XP','

<p>Jestliže používáte Windows XP a chcete, aby se vzhled nabídky hodil k vašemu výchozímu tématu vzhledu (Luna),
přidejte následující kód do souboru <a href="konfigurace.php#css">userChrome.css.</a></p>
<code>/* Použití vzhledu nabídky z Windows XP */<br/>
menupopup, popup {<br/>
   border: 1px solid ThreeDShadow !important;<br/>
   -moz-border-left-colors: ThreeDShadow !important;<br/>
   -moz-border-top-colors: ThreeDShadow !important;<br/>
   -moz-border-right-colors: ThreeDShadow !important;<br/>
   -moz-border-bottom-colors: ThreeDShadow !important;<br/>
   padding: 1px !important;<br/>
   background-color: Menu !important;<br/>
}<br/>
menubar &gt; menu {<br/>
   border: 1px solid transparent !important;<br/>
   padding: 2px 5px 2px 7px !important;<br/>
   margin: 0 !important;<br/>
}<br/>
menubar &gt; menu[_moz-menuactive="true"] {<br/>
   background-color : Highlight !important;<br/>
   color: HighlightText !important;<br/>
}</code>
');

$tips->addTip('Použití vlastního pozadí pro nástrojové lišty','

<p>Mimo změny vzhledu za použití jiného tématu, si vzhled prohlížeče Mozilla Firefox můžete přizpůsobit použitím
vlastního pozadí pro nástrojové lišty a to přidáním následující kódu do souboru <a href="konfigurace.php#css">userChrome.css.</a></p>
<code>/* Použití vlastního pozadí pro nástrojové lišty <br/>
(Nahraďte soubor background.gif jménem souoru s obrázkem) */<br/><br/>

menubar, toolbox, toolbar, .tabbrowser-tabs {<br/>
   background-image: url("background.gif") !important;<br/>
   background-color: none !important;<br/>
 }</code>
<p>Soubor s obrázkem by měl být umístěn ve stejném adresáři jako soubor
<a href="konfigurace.php#css">userChrome.css.</a> Obrázek může být v jakémkoliv formátu, jenž je podporován prohlížečem
Mozilla Firefox.</p>
');

$tips->addTip('Použití vlastního fontu pro hlavní nabídku','

<p>Pokud se vám zdá písmo použité v hlavní nabídce moc malé, nebo chcete mít jen veselou hlavní nabídku, vložte
následující kód do souboru <a href="konfigurace.php#css">userChrome.css.</a></p>
<code>// Použití vlastního písma pro hlavní nabídku <br/>
menubar > menu {<br/>
  font-size: 18px !important;<br/>
  font-family: Comic Sans MS, sans-serif !important;<br/>
  font-weight: bold !important;<br/>
 }</code>
<p>Pokud chcete změnit písmo i pro podnabídky, zaměňte první řádek pravidla za řádek následující.</p>
<code>menubar > menu, menupopup > * {</code>
');


$tips->addTip('Snadnější rozlišení panelů prohlížeče','

<p>Za účelem snadnějšího rozlišení mezi otevřenými panely prohlížeče, si můžete změnit jejich barvy, a to přidáním
následujícího kódu do souboru <a href="konfigurace.php#css">userChrome.css.</a></p>

<code>/* Změnit barvu aktivního panelu */<br/>
    tab[selected="true"] {<br/>
       background-color: rgb(222,218,210) !important;<br/>
   color: black !important;<br/>
}<br/>
<br/>
/* Změnit barvu normálního panelu */<br/>
tab {<br/>
   background-color: rgb(200,196,188) !important;<br/>
   color: gray !important;<br/>
}</code>
');

$tips->addTip('Normální text v názvu aktivního panelu','

<p>Jestliže nechcete, aby název aktivního panelu byl tučný, přidejte následující kód do souboru
<a href="konfigurace.php#css">userChrome.css.</a></p>
<code>/* Normální text v názvu aktivního panelu */<br/>
tab[selected="true"] {<br/>
   font-weight: normal !important;<br/>
}</code>
');

$tips->addTip('Odstranění tlačítka "Zavřít" z lišty panelů prohlížení','

<p>Tlačítko Zavřít z lišty panelů prohlížení odstraníte přidáním následujícího kódu do souboru
<a href="konfigurace.php#css">userChrome.css.</a></p>
<code>/* Odstranění tlačítka "Zavřít" z lišty panelů prohlížení */<br/>
.tabs-closebutton {<br/>
   display: none !important;<br/>
}</code>
<p>Panely pak můžete stále zavírat kliknutím pravého tlačítka myši a vybráním <q>Zavřít Panel</q>, nebo pomocí <kbd>Ctrl</kbd>+<kbd>W.</kbd></p>
');

$tips->addTip('Odstranění některých položek z hlavní nabídky','

<p>Někteří lidé mají rádi všechna nástrojová tlačítka na stejném řádku jako hlavní nabídka. Pro ušetření místa
v řádku s nabídkou, můžete zrušit některé položky nabídky, jenž nepoužíváte, a to přidáním následujícího kódu do souboru
<a href="konfigurace.php#css">userChrome.css.</a></p>
<code>/* Odstranění nabídky Přejít a Nápověda (kódování UTF-8)*/<br/>
menu[label="NĂĽpovÄ?da"], menu[label="PĹ?ejĂ­t"] {
   display: none !important;
}</code>
');

$tips->addTip('Změna ikonky okna prohlížeče','

<p>O výchozí ikonce okna pro prohlížeč Mozilla Firefox není ještě rozhodnuto. Proto je místo ní použita červená
ikonka Mozilly. Tuto ikonu může změnit těmito jednoduchými kroky:</p>
<ol>
<li>Přemístěte se do adresáře s nainstalovaným prohlížečem Mozilla Firefox (např. <tt>&gt;C:\Program Files\Mozilla.org\Mozilla Firefox\</tt>) a potom do podadresáře <tt>chrome.</tt></li>
<li>V adresáři <tt>chrome</tt>, vytvořte nový podadresář nazvaný <tt>icons</tt>, potom se přemístěte do tohoto adresáře a vytvořte ještě další podadresář nazvaný <tt>default.</tt><br/>Plná cesta k tomuto adresáři může tedy být <tt>C:\Program Files\Mozilla.org\Mozilla Firefox\chrome\icons\default\</tt></li>
<li>Vyberte ikonku, již chcete používat (ve Windows použijte soubory s&nbsp;příponou <tt>.ico</tt>, v&nbsp;Linuxu použijte soubory s&nbsp;příponou <tt>.xpm</tt>), nahrajte ji do tohoto adresáře a&nbsp;přejmenujte ji na <tt>main-window.<i>[filetype]</i></tt>, např. <tt>main-window.ico</tt> ve Windows a&nbsp;<tt>main-window.xpm</tt> v&nbsp;Linuxu.</li>
</ol>
<p class="extrainfo">Mimo hlavního okna můžete také změnit ikonku Správce záložek a konzole JavaScriptu. Jména ikon jsou v pořadí <tt>bookmark-window.<i>[filetype]</i></tt> a <tt>jsconsoleWindow.<i>[filetype]</i></tt>.</p>
<p>Poté restartujte prohlížeč Mozilla Firefox. Nyní byste měli vidět zvolenou ikonu v záhlaví všech oken prohlížeče. Hezké ikonky vzhledu Qute pro Windows, vytvořené autorem výchozích ikonek prohlížeče Mozilla Firefox, můžete najít <a href="http://quadrone.org/icon/">zde.</a></p>
');

$tips->addTip('Postranní lišta na pravé straně okna','

<p>Pro zobrazení Postranní lišty na pravé straně okna, místo na levé, přidejte do souboru <a href="konfigurace.php#css">userChrome.css</a> následující kód.</p>
<code>/* Postranní lišta na pravé straně okna  */<br/>
window &gt; hbox {<br/>
   direction:rtl;<br/>
}<br/>
window &gt; hbox &gt; * {<br/>
   direction:ltr;<br/>
} </code>
');

$tips->addTip('Změna šířky pole pro vyhledávání','

<p>V základním nastavení je pole pro vyhledávání relativně malé. Pro nastavení vlastní šířky v pixelech, přidejte
následující kód do souboru <a href="konfigurace.php#css">userChrome.css.</a></p>
<code>/* Změna šířky pole pro vyhledávání */<br/>
#search-container {<br/>
   -moz-box-flex: 400px !important;<br/>
}</code>
');

$tips->addSection('Chování prohlížeče');
$tips->addTip('Zákaz používání aktivních oken','

<p>Pokud některý program chce zobrazit webovou stránku ve vašem výchozím prohlížeči, použije prohlížeč Mozilla Firefox
případné existující okno. Pro otvírání stránek v novém okně namísto existujícího, přidejte následující kód do souboru
<a href="konfigurace.php#user">user.js.</a></p>
<code>// Zákaz používání aktivních  oken<br/>
user_pref("advanced.system.supportDDEExec", false);</code>

<p>Pokud preferujete namísto okna otevření nového panelu, musíte si nainstalovat rozšíření <a href="/doplnky/rozsireni/">Tabbrowser Extensions</a>,
Po jeho instalaci a přidání kódu výše, postupujte podle tohoto návodu:</p>
<ol>
<li>Z nabídky zvolte <tt>Nástroje &gt; Možnosti... &gt; Rozšíření</tt>, vyberte <q>Tabbrowser Extensions</q> a klepněte na tlačítko <span class="button">Nastavení</span>.</li>
<li>Rozbalte seznam s kategoriemi a zvolte Advanced Tabbed Browsing.</li>
<li>V rolovacím seznamu <q>Window Mode</q> zvolte <q>Use multiple browsers only when I open them</q>.</li>
</ol>
');

$tips->addTip('Vždy zobrazovat lištu s panely','

<p>Ve výchozím nastavení je lišta s panely schovaná, pokud je otevřen pouze jeden panel. Pokud chcete mít lištu stále
zobrazenou, přidejte následující kód do souboru <a href="konfigurace.php#user">user.js.</a></p>
<code>// Vždy zobrazovat lištu s panely<br/>
user_pref("browser.tabs.autoHide", false);</code>
<p>Lištu pak můžete stále zavřít poklepáním na ikonku <span class="button">X</span> a to i v případě, že je zobrazen
pouze jeden panel.</p>
');

$tips->addTip('Zablokování použití target _blank"','

<p>Prohlížeč Mozilla Firefox umí blokovat vyskakovací okna. Ve výchozím nastavení však nezakazuje, aby se webová stránka
otevřela v nové okně, pokud je u ní uveden atribut <tt>target="_blank"</tt> nebo nepovolený <tt>target="_new".</tt>
Pro donucení k otevření ve stejném okně, přidejte do souboru <a href="konfigurace.php#user">user.js</a> následující kód.</p>
<code>// Zablokování použití target="_blank"<br/>
user_pref("browser.block.target_new_window", true);</code>
');

$tips->addTip('Vypnutí automatické změny velikosti obrázku','

<p>Je-li tato vlastnost zapnutá, prohlížeč automaticky zmenší některé obrázky, jenž jsou větší něž okno prohlížeče.
V tom případě se také změní kurzor nad obrázkem. Po klepnutí, se obrázek obnoví na původní velikost. Pro vypnutí této
vychytávky, přidejte následující kód do souboru <a href="konfigurace.php#user">user.js.</a></p>
<code>// Vypnutí automatické změny velikosti obrázku<br/>
user_pref("browser.enable_automatic_image_resizing", false);</code>
');

$tips->addTip('Použití chybové stránky namísto dialogové zprávy','

<p>Selže-li připojení, prohlížeč Mozilla Firefox zobrazí nepříjemnou chybovou zprávu, namísto úplného zobrazení chybové
informace v okně prohlížeče. Pro vypnutí dialogové zprávy a použití chybových stránek, přidejte následující kód do souboru
<a href="konfigurace.php#user">user.js.</a></p>
<code>// Použití chybové stránky namísto dialogové zprávy<br/>
user_pref("browser.xul.error_pages.enabled", true);</code>
<p>Poznámka: Tato funkce nefunguje zcela korektně, co se týká zacházení s historií stránek.</p>
');

$tips->addTip('Použití postranní lišty Stahování namísto jednotlivých oken','

<p>Standardně, Mozilla Firefox zobrazuje okno s postupem stahování souborů. Jestliže stahujete více souborů ve stejný čas,
může být množství těchto oken nepříjemné. Pro použití postranní lišty Stahování namísto okna, přidejte následující kód do
souboru <a href="konfigurace.php#user">user.js.</a></p>
<code>// Použití postranní lišty Stahování namísto jednotlivých oken<br/>
user_pref("browser.download.openSidebar", true);<br/>
user_pref("browser.download.useProgressDialogs", false);</code>
');

$tips->addTip('Nastavení vychytávky Hledat při psaní','

<p>Hledat při psaní je poměrně nová vychytávka představená v Mozille a má několik utajovaných předvoleb. Pro jejich
nastavení, přidejte do souboru <a href="konfigurace.php#user">user.js</a> některý z následujících kódů:</p>
<code>// Nastavení vychytávky Hledat při psaní<br/>
// Nastavte tuto předvolbu na false, pokud ji chcete vypnout<br/>
user_pref("accessibility.typeaheadfind", true);<br/>
// Nastavte tuto předvolbu na true, pokud chcete při psaní začít automaticky vyhledávat<br/>
// Jinak musíte napřed stisknout "/" (najdi text) nebo "\'" (najít odkaz).<br/>
user_pref("accessibility.typeaheadfind.autostart", true);<br/>
// Nastavte tuto předvolbu na false, pokud chcete rovněž vyhledávat normální text<br/>
user_pref("accessibility.typeaheadfind.linksonly", true);<br/>
// Nastavte tuto předvolbu na true, pokud chcete aby odkazy musely začínat vyhledávaným textem<br/>
user_pref("accessibility.typeaheadfind.startlinksonly", false);<br/>
// Nastavte čas v milisekundách, za který přestane prohlížeč čekat na stisk klávesy<br/>
user_pref("accessibility.typeaheadfind.timeout", 3000);
</code>
<p>Více informací o fungování vychytávky Hledat při psaní se dozvíte v <a href="http://www.mozilla.org/projects/ui/accessibility/typeaheadfind.html">dokumentaci</a>.</p>
');

$tips->addTip('Vypnutí jemného rolování','

<p>Prohlížeč Mozilla Firefox má vlastnost jemného rolování standardně zapnutou. Pro vypnutí přidejte do souboru <a href="konfigurace.php#user">user.js</a> následující kód.</p>
<code>// Vypnutí jemného rolování<br/>
user_pref("general.smoothScroll", false);</code>
');

$tips->addTip('Nastavení některých funkcí JavaScriptu','

<p>Prohlížeč Mozilla Firefox má několik předvoleb, jenž nastavují, co skripty mohou a nemohou provádět. Tyto předvolby
jsou dostupné z <tt>Nástroje &gt; Předvolby &gt; Webové stránky &gt; Rozšířené</tt>. Nicméně, tento seznam nezahrnuje
všechny možnosti. Některé další užitečné předvolby mohou být aplikovány prostřednictvím přidání následujícího kódu do
souboru <a href="konfigurace.php#user">user.js.</a></p>
<code>// Nastavení některých funkcí JavaScriptu<br/><br/>
// Pop-up okna mohou vždy měnit velikost<br/>
user_pref("dom.disable_window_open_feature.resizable", true);<br/><br/>
// Pop-up okna jsou vždy minimalizovatelná<br/>
user_pref("dom.disable_window_open_feature.minimizable", true);<br/><br/>
// Vždy ve vyskakovacím okně zobraz hlavní nabídku<br/>
user_pref("dom.disable_window_open_feature.menubar", true);<br/><br/>
// Vždy ve vyskakovacím okně zobraz navigační lištu<br/>
user_pref("dom.disable_window_open_feature.location", true);
</code>
');

$tips->addTip('Používání záložek z prohlížeče Mozilla','

<p>Jestliže používáte prohlížeč Mozillu, můžete sdílet její záložky i s prohlížečem Mozilla Firefox. Všechny
záložky jsou uloženy v souboru nazvaném <q>bookmarks.html,</q> který je v adresáři osobního profilu. Pro sdílení záložek
přidejte do souboru <a href="konfigurace.php#user">user.js</a> následující kód.</p>
<code>// Používání záložek z prohlížeče Mozilla<br/>
user_pref("browser.bookmarks.file", "C:\\\\cesta k vašemu profilu mozilly\\\\bookmarks.html");</code>
<p>Ve Windows nezapomeňte na použití dvou lomítek pro oddělení cesty.</p>
');

$tips->addTip('Změna režimu hledání v poli adresa','

<p>Standardně, jestliže vložíte hledaný termín do pole adresa a stisknete tlačítko Enter, spustí se Google s vlastností
"I\'m Feeling Lucky." Preferujete-li, ale zobrazovat výsledný seznam standardního hledání, přidejte do souboru
<a href="konfigurace.php#user">user.js</a> následující kód.</p>
<code>// Změna režimu hledání v poli adresa<br/>
user_pref("keyword.URL", "http://google.com/search?btnG=Google+Search&amp;q=");
</code>
<p>Můžete zde také nastavit cestu k zcela jiným vyhledávacím službám. Výchozí řetězec pro hledání je: <tt>"http://www.google.com/search?btnI=I%27m+Feeling+Lucky&amp;q="</tt>.</p>
');

$tips->addTip('Zablokování zobrazování ikonky stránek','

<p>Pokud se vám nelíbí zobrazování ikonky stránek, můžete ho zablokovat přidáním následujícího kódu do souboru
<a href="konfigurace.php#user">user.js.</a></p>
<code>// Zablokování zobrazování ikonky stránek<br/>
user_pref("browser.chrome.site_icons", false);<br/>
user_pref("browser.chrome.favicons", false);</code>
');


$tips->addTip('Změnit <abbr title="Uniform Resource Locator">URL</abbr> pulzéru [throbber]','

<p>Klepnete-li na pulzér, jste automaticky přesměrováni na www.mozilla.org. Tuto adresu můžete zaměnit za libovolné
URL přidáním následujícího kódu do souboru <a href="konfigurace.php#user">user.js.</a></p>
<code>// Změnit URL pulzéru [throbber]<br/>
user_pref("browser.throbber.url", "http://www.czilla.cz/");</code>
');

$tips->addTip('Zakáz uchovávání <abbr title="Uniform Resource Locator">URL</abbr> adres v poli a adresou','

<p>Prohlížeč Mozilla Firefox dovoluje zabránit uchovávání URL adres v roletovém menu pole s adresou. Toto omezení
pomáhá bránit soukromí uživatelů a nezkušeným uživatelům zabraňuje přístup ke stránkám, jenž měli předtím zobrazeny
ostatní uživatelé.</p> <p>Andrew Mutch má sepsanou <a href="http://tln.lib.mi.us/%7Eamutch/pro/phoenix/location.htm">stránku</a>
vysvětlující jak implementovat toto omezení.</p>
');

$tips->addSection('Vzhled webové stránky');
$tips->addTip('Zablokování reklam','

<p>Reklamy na webových stránkách jsou nepříjemné. Často přerušují samotný text a blikají, aby vás upoutaly.
Pro zákaz zobrazování některých reklam v Internetu, přidejte do souboru <a href="konfigurace.php#content">userContent.css</a>
následující kód.</p>
<code>// Zablokování reklam pomocí typických rozměrů<br/>
iframe[width="120"][height="600"], a img[width="120"][height="600"],<br/>
iframe[width="125"][height="600"], a img[width="125"][height="600"],<br/>
iframe[width="150"][height="100"], a img[width="150"][height="100"],<br/>
iframe[width="150"][height="600"], a img[width="150"][height="600"],<br/>
iframe[width="160"][height="600"], a img[width="160"][height="600"],<br/>
iframe[width="180"][height="150"], a img[width="180"][height="150"],<br/>
iframe[width="300"][height="250"], a img[width="300"][height="250"],<br/>
iframe[width="336"][height="280"], a img[width="336"][height="280"],<br/>
iframe[width="468"][height="60"],  a img[width="468"][height="60"],<br/>
iframe[width="470"][height="62"],  a img[width="470"][height="62"],<br/>
iframe[width="728"][height="90"],  a img[width="728"][height="90"],<br/>
iframe[width="730"][height="92"],  a img[width="730"][height="92"],<br/>
iframe[width="600"][height="120"], object[width="125"][height="300"],<br/>
*[type="application/x-shockwave-flash"][width="728"][height="90"],<br/>
*[type="application/x-shockwave-flash"][width="468"][height="60"],<br/><br/>

// Zablokování reklam pomocí typických adres<br/>
*[src*="/ad"], *[src*=".ad"], *[src*="/ads"], *[src*="/adx/"],<br/>
*[src*="/banner/"], *[src*="/banners/"], *[src*="?banner"],<br/>
*[src*="=click"], *[src*="/click"], *[src*="?click"],<br/>

*[href*="/ad"], *[href*=".ad"], *[href*="/ads"], *[href*="/adx/"],<br/>
*[href*="/banner/"], *[href*="/banners/"], *[href*="?banner"],<br/>
*[href*="=click"], *[href*="/click"], *[href*="?click"],<br/>

a:link[href*="/ad"], a:link[href*=".ad"], a:link[href*="redirect"] <br/>
*[type="application/x-shockwave-flash"][src*="/ad"],<br/>
*[type="application/x-shockwave-flash"][href*="/ad"],<br/>
*[type="application/x-shockwave-flash"][src*=".ad"],<br/>
*[type="application/x-shockwave-flash"][href*=".ad"] {<br/>
   visibility: hidden !important;<br/>
}<br/></code>
<p>V případě, že byste nechtěli reklamu pouze schovat, ale rovnou odstranit, vložte místo předposledního řádku
toto pravidlo.</p>
<code>
   display: none !important;<br/>
</code>
<p>Upozornění: Odstranění reklam může mít za následek rozhození struktury stránky.</p>
');

$tips->addTip('Upozornění na určité typy odkazů"','

<p>Prohlížeč Mozilla Firefox můžete nastavit, aby vám nějakou viditelnou změnou dával najevo typy odkazů
na webové stránce. Pokud tedy chcete upozornit změnou kurzoru, pozadí, či přeškrtnutím na některé specifické
odkazy, přidejte do souboru <a href="konfigurace.php#content">userContent.css</a> následující kód.</p>
<code>// Upozornění na odkazy s atributem target="_blank" změnou kurzoru<br/>
 :link[target="_blank"], :visited[target="_blank"],<br/>
 :link[target="_new"],   :visited[target="_new"] {cursor: crosshair !important; }<br/>
// Upozornění na odkazy s atributem target="_blank" pomocí červeného pozadí<br/>
a[target="_blank"] {background: red !important; }<br/>
a[target="_new"] {background: red !important; }<br/>
// Upozornění na odkazy s emailem pomocí ikonky dopisu<br/>
a[href^="mailto:"]:before { content: "\2709 " !important;}<br/>
// Upozornění na odkazy s JavaScriptem pomocí zeleného pozadí<br/>
a[href^="javascript:"] { color: green !important; }<br/>
// Zakázané adresy budou přeškrtnuté<br/>
a[href*="microsoft.com"]  { text-decoration: line-through ! important; }<br/>
</code>
');


$tips->addTip('Zablokování blikajících prvků','

<p>Pokud shledáte blikání textu obtěžující, přidejte do souboru <a href="konfigurace.php#user">user.js</a> následující kód.</p>
<code>// Zablokování blikajících prvků<br/>
user_pref("browser.blink_allowed", false);</code>
');

$tips->addTip('Zablokování rolujícího textu','

<p>Některé stránky používají rolující text vkládaný pomocí tagu marquee. Jestliže toto rolování neshledáváte užitečné,
přidejte do souboru <a href="konfigurace.php#content">userContent.css</a> následující kód.</p>
<code>/* Zablokování rolujícího textu */<br/>
marquee {<br/>
   -moz-binding                  : none !important;<br/>
   display                       : block;<br/>
   height                        : auto !important;<br/>
}</code>
');

$tips->addTip('Povolená změna velikosti rámů','

<p>Mnoho serverů používá k zobrazování obsahu rámy s pevnou velikostí. Chcete-li  mít možnost měnit velikost u všech rámů,
přidejte do souboru <a href="konfigurace.php#user">user.js</a> následující kód.</p>
<code>// Povolená změna velikosti rámů<br/>
   user_pref("layout.frames.force_resizability", true);
</code>
<p>Poznámka: Nyní budou mít všechny rámy posuvník, což bude občas vypadat dost směšně.</p>
');

$tips->addSection('Další tipy');
$tips->addTip('Změna jazyku webových stránek','

<p>Některé webové servery nabízejí obsah v několika jazycích. Můžete si nastavit pořadí jazyků,
v jakém je server požádán o webovou stránku, a to přidáním následujícího kódu do souboru <a href="konfigurace.php#user">user.js.</a></p>
<code>// Změna jazyku na češtinu (výchozí je "en, en-us")<br/>
user_pref("intl.accept_languages", "cs, en, en-us");</code>
');

$tips->addTip('Urychlení renderování stránky','

<p>Standardně se prohlížeč Mozilla Firefox nesnaží renderovat webovou stránku ihned, ale až za 250 milisekund,
protože čeká příchozí data od webového serveru. Přidáte-li následující kód do souboru <a href="konfigurace.php#user">user.js</a>,
prohlížeč se pokusí stránku renderovat okamžitě, a to dokonce bez kompletních dat. Nevýhodou je, že na některých
počítačích může být konečná doba renderování nakonec o hodně delší.</p>
<code>// Urychlení renderování stránky (výchozí je 250)<br/>
user_pref("nglayout.initialpaint.delay", 0);</code>
');

$tips->addTip('Zapnutí proudového zpracování [pipelining]','

<p>Pipelining je experimentální vlastnost, navržená pro zlepšení výkonnosti nahrávání stránek, která je ale bohužel
špatně podporovaná některými webovými servery, či proxy. Pro vyzkoušení přidejte do souboru <a href="konfigurace.php#user">user.js</a>
následující kód.</p>
<code>// Zapnutí proudového zpracování<br/>
user_pref("network.http.pipelining", true);<br/>
user_pref("network.http.proxy.pipelining", true);<br/>
user_pref("network.http.pipelining.maxrequests", 100);</code>
');

$tips->addTip('Určení uložení vyrovnávací paměti [cache]','

<p>Pro určení adresáře s vyrovnávací pamětí, přidejte do souboru <a href="konfigurace.php#user">user.js</a> následující kód.</p>
<code>// Určení uložení vyrovnávací paměti<br/>
user_pref("browser.cache.disk.parent_directory","C:\\\\cesta k vyrovnávací paměti");</code>
<p>Nezapomeňte na použití dvou lomítek pro oddělení cesty, používáte-li Windows.</p>
');

$tips->addTip('Nastavení velikosti vyrovnávací paměti','

<p>Ve výchozím nastavením určuje prohlížeč použití vyrovnávací paměti dynamicky, a to podle množství dostupné paměti.
Pro určení specifického množství vyrovnávací paměti, přidejte do souboru <a href="konfigurace.php#user">user.js</a> následující kód.</p>
<code>// Nastavení velikosti vyrovnávací paměti<br/>
// -1 = dynamicky (výchozí), 0 = žádná, n = velikost v KiB<br/>
user_pref("browser.cache.memory.capacity",4096);</code>

<p>Pro zablokování celé vyrovnávací paměti, přidejte následující kód:</p>
<code>// Zablokovat vyrovnávací paměť<br/>
user_pref("browser.cache.memory.enable", false);</code>
');

$tips->addTip('Přístup k více volbám','

<p>Mnoho voleb není v prohlížeči Mozilla Firefox stále (nebo nebude nikdy) dostupných pomocí okna Možnosti.
Vložíte-li do pole s adresou tento odkaz <b>chrome://communicator/content/pref/pref.xul</b>
a zmáčknete-li Enter, mělo by se vám zobrazit původní okno nastavení, odvozené z prohlížeče Mozilla. Mnoho voleb v tomto
okně bude neúčinných - např. volba Rychlé spouštění. Navíc bude toto okno výhledově zcela odstraněno.</p>
');
$tips->show();
?>

<?php
	$page->includeTemplate('footer');
?>
