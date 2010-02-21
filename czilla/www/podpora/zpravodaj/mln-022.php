<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zpravodaj Mozilla Links - 22. číslo');
	$page->setHeadline('Zpravodaj Mozilla Links','22. číslo (6. 9. 2004 / 23. 9. 2004)');
	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');
	$page->includeTemplate('header');
?>

<h2 id="content" class="nice">Obsah</h2>
<ul>
	<li><a href="#ml.0">Úvod</a></li>
	<li><a href="#ml.1">Vylepšení Mozilly</a>
		<ul>
			<li><a href="#ml.12">Recenze: SpellBound 0.3.3</a></li>
			<li><a href="#ml.13">Recenze: Scribe 0.2</a></li>
			<li><a href="#ml.14">Tip: Používání historie</a></li>
			<li><a href="#ml.15">Supertip: Uložení vyhledávacích modulů</a></li>
		</ul>
	</li>

	<li><a href="#ml.2">Novinky</a>
		<ul>
			<li><a href="#ml.21">Hachette Multimedia vydala encyklopedii založenou na Mozille</a></li>
			<li><a href="#ml.22">Vydáno Nvu 0.4.1</a></li>
			<li><a href="#ml.23">Mozilla Foundation, Novell a IBM použijí XForms 1.0 v Mozille</a></li>
			<li><a href="#ml.24">Kreslený vtip na User Friendly na téma odměny za bezpečnostní chybu v Mozille</a></li>
			<li><a href="#ml.25">AOL vydala Netscape 7.2</a></li>
			<li><a href="#ml.26">Vydáno Camino 0.8.1</a></li>
			<li><a href="#ml.27">Vydána Mozilla 1.8 alfa 3</a></li>
			<li><a href="#ml.28">Spuštěna Mozilla Japan</a></li>
			<li><a href="#ml.29">Mozilla Foundation a OpenOffice.org spojí síly</a></li>
			<li><a href="#ml.210">Firefox, Mozilla a Netscape pro MacOS náchylné k zranitelnosti v Javě</a></li>
		</ul>
	</li>
	<li><a href="#ml.3">Místní novinky</a></li>
	<li><a href="#ml.4">Projekty k Mozille</a></li>
	<li><a href="#ml.5">Anketa</a>
		<ul>
			<li><a href="#ml.51">Vyhodnocení ankety z minulého čísla</a></li>
			<li><a href="#ml.52">Anketa tohoto čísla: Zúčastnili jste se již nějaké marketingové akce?</a></li>
		</ul>
	</li>
	<li><a href="#ml.6">Reklama</a></li>
	<li><a href="#ml.7">Kontaktní informace</a></li>
</ul>

<h2 id="ml.0" class="nice">Úvod</h2>

<p>Tímto číslem slaví zpravodaj své první narozeniny. Chceme vám poděkovat
za zájem a podporu v uplynulém roce a rádi bychom vás požádali, abyste nám
dali vědět, co se vám na zpravodaji líbí, či nelíbí. Víme, že je zde mnoho
prostoru ke zlepšování a těšíme se, že vám v nadcházejících měsících budeme
moci nabídnout více.</p>

<p>S radostí oznamujeme dostupnost zcela nové, italské, edice zpravodaje. K
jejich odběru se můžete zaregistrovat na <a
href="http://nostalsong.com/mozillalinks/it/">nostalsong.com/mozillalinks/it/</a>.</p>

<p>Zatímco početná komunita Mozilly netrpělivě čeká na Firefox 1.0, byl
aktualizován
<a href="http://www.mozilla.org/projects/firefox/roadmap.html" hreflang="en">plán vývoje</a>.
Nový cílový termín vydání byl odsunut na 11. října
jak pro Linux tak i Windows, s přípravnými RC verzemi 20. září a 4. října.
Verze pro Mac OS X bude vydána později. Firefox 1.0 PR (ukázková verze) byl
ohlášen na 30. srpna a měl by být vydán každým okamžikem (Firefox 1.0 PR
vyšel 14. září - pozn. překladatele). Od naší recenze z posledního čísla se
v posledních vývojových verzích provedlo několik změn: byly představeny nové
ikony nástrojové lišty: "historie", "přejdi", "stáhni" a "nový panel". Kvůli
některým chybám, které by nebyly opraveny do očekávaného dne vydání, byla
odstraněna funkce "pracovat offline". Do nabídky Nápověda byla přidána nová
položka "Propagujte Firefox" a Livemarks byly přejmenovány na Live Bookmarks
(aktuální záložky).</p>

<p>Někteří čtenáři vyjádřili znepokojení nad upomínkami s heslem, které v
textové podobě rozesílá náš server první den v měsíci. Můžeme vám pouze
doporučit, abyste pro registraci zpravodaje nepoužívali svá významná hesla
(jako z internetového bankovnictví či emailového účtu). Víme o tomto
problému a hledáme řešení.</p>

<p>Děkuji vám za přízeň. Své připomínky zasílejte prosím na adresu
<a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>.</p>

<p>Percy Cabello</p>



<h2 id="ml.1" class="nice">Vylepšení Mozilly</h2>
<h3 id="ml.12">Recenze: SpellBound 0.6</h3>
<p><em>(Vytvořil Robert Strong)</em></p>

<p>SpellBound je rozšíření založené na kontrole pravopisu v Mozilla
Editoru, jež přidává kontrolu pravopisu do webových formulářů (např.
do webových e-mailových rozhraní nebo formulářů pro psaní diskusních
příspěvků) pro Mozillu a Firefox.</p>

<p>Pro instalaci přejděte na <a
href="http://spellbound.sourceforge.net/#installation">spellbound.sourceforge.net</a>,
vyberte operační systém (Windows, Linux, Mac&nbsp;OS), jazyk slovníku a
(volitelně) jazykový balíček<sup>*</sup> a pak klepněte na Install
SpellBound. Ve Správci rozšíření Firefoxu se zobrazí seznam tří rozšíření,
které je možné nainstalovat. Klepněte na "Ano" a po instalaci pokračujte
restartem Firefoxu.</p>

<p>Uživatelé Linuxu musí provést instalaci ve dvou krocích, jež jsou popsány
na instalační stránce.</p>

<p>Kdykoliv budete potřebovat zkontrolovat pravopis (zejména) dlouhých
zpráv, klepněte pravým tlačítkem myši v místě textu a zvolte "Check
Spelling". Otevře se okno kontroly pravopisu. Funguje obdobně jako kontrola
pravopisu v textovém editoru OpenOffice.org Writer či Microsoft Word.</p>

<p>V horní části uvidíte svůj text s červeně podtrženými slovy, která nebyla
rozpoznána. Nerozpoznaná slova můžete nahradit slovy navrženými či ručně
vloženými, ignorovat je, anebo je přidat do uživatelského
slovníku<sup>**</sup>. Ten můžete upravovat klepnutím na tlačítko
"Edit...".</p>

<p>Můžete také přidat další slovník. Klepněte na rozbalovací nabídku
"Language" a vyberte "Download More". Budete přesměrováni na
<a href="http://dictionaries.mozdev.org/">dictionaries.mozdev.org</a>, kde si můžete vybrat slovník pro asi
50&nbsp;jazyků a regionů. Klepněte na jazyk, který chcete nainstalovat.
Není nutné restartovat Firefox. Pouze zavřete a znovu otevřete okno
Check Spelling, aby se nový slovník přidal do seznamu variant.</p>

<p>Webové stránky projektu SpellBound:
<a href="http://spellbound.sourceforge.net/">spellbound.sourceforge.net</a></p>

<p>* Jazykový balíček je komponenta, která uživatelské rozhraní zpřístupňuje
ve vybraném jazyce.</p>

<p>** Uživatelský slovník je uložen v adresáři s profilem jako soubor
"persdict.dat".</p>

<p>Jak nalézt adresář s profilem zjistíte na stránkách Psyched Site
Henrika Gemala:
<a href="http://gemal.dk/mozilla/profile.html">gemal.dk/mozilla/profile.html</a>.</p>


<h3 id="ml.13">Recenze: Scribe 0.2</h3>

<p><em>(Vytvořil Jeremiah Golden)</em></p>

<p>"Proč někdo nevytvoří rozšíření tak, aby ukládalo vaše příspěvky," zeptal
se Jeremiah Golden. Hovořil o několika lidech, o nichž věděl, že přišli o
příspěvky v dlouhých fórech, blozích či web mailu. "Dobrá, a proč to
neuděláš ty?" odpověděla jeho žena. A tak si sedl a vytvořil Scribe.</p>

<p>Scribe je rozšíření, které umožňuje uložit webový formulář do XHTML
souboru a později ho opět načíst. Pokud je Scribe nainstalovaný, stačí
formulář uložit tak, že klepnete na nabídku "File", vyberete "Save entry
as..." a vložíte název pro ukládaný soubor. To je vše.</p>

<p>Když se opět dostanete k formuláři, otevřete nabídku "File", vyberte
"Open Entry...", vyhledejte uložený soubor a všechny informace budou opět
načteny do formuláře. Toto rozšíření se osvědčuje při pomoci s vyplňováním
webového formuláře. Můžete vyplnit "obtížná" políčka (jako v žádosti o
úvěr), uložit formulář a zaslat ho mailem nešťastnému příteli, aby mohl
vynechaná políčka doplnit.</p>

<p>Četl jsem již některé zprávy o problémech při manipulaci s dlouhými
soubory, v mých testech však Scribe s položkami většími než 100&nbsp;KB
pracovalo bez chyb.</p>

<p>Podle Goldena je vydání nové verze 0.3 velmi blízko. Novinkou bude
lepší podpora pro <a href="https://gmail.google.com/" hreflang="en">Gmail</a>
a mezinárodní znakové sady. Do dalších verzí je plánováno automatické
ukládání a ukládání při uzavření.</p>

<p>Scribe můžete vyzkoušet na
<a href="http://prismicspiral.com/scribe/" hreflang="en">prismicspiral.com/scribe/</a>.</p>


<h3 id="ml.14">Tip: Používání historie</h3>

<p><em>(Přispěl Percy Cabello)</em></p>

<p>Jak s největší pravděpodobností víte, historie v prohlížeči uchovává
seznam všech stránek, které jste navštívili. To bývá velmi užitečné
například tehdy, když jste neměli možnost vytvořit si záložku navštívené
strany. Postačí, když stisknete <kbd>Ctrl</kbd>+<kbd>H</kbd> a zobrazí se
postranní panel s historií.</p>

<p>Navštívené stránky budou automaticky tříděny podle data a budou
seskupené ve složkách Dnes, Včera, Poslední týden, atd. Jsou ale
i jiné možnosti třídění, které mohou být užitečné:</p>

<ul>

	<li>podle data a serveru, jako dodatek se k seskupení podle dne
	navštívení provede ještě řazení položek podle domény (část webové adresy
	po http:// a před "/")</li>

	<li>podle serveru, seskupení pouze podle domény</li>

	<li>podle četnosti návštěv</li>

	<li>podle poslední návštěv (to je nejužitečnější, když například omylem
	zavřete panel s právě objevenou stránkou)</li>

</ul>

<p>Změny mezi jednotlivými možnostmi třídění provedete stiskem tlačítka
"Zobrazit" a výběrem jedné z možností.</p>

<p>Navíc můžete prohledávat názvy navštívených stránek a hledat určitý
výraz. Napište nějaká slova do textového pole "Hledat" a stiskněte
<kbd>Enter</kbd>.</p>

<p>Firefox si automaticky "pamatuje" stránky, které jste navštívíli v
posledních devíti dnech. Pokud takové chování chcete změnit, jděte do
nabídky "Nástroje", vyberte "Předvolby..." a pak stránku "Soukromí".
Klepněte na "Historie" a vložte požadovaný počet dnů.</p>


<h3 id="ml.15">SuperTip: Uložení vyhledávacích modulů</h3>

<p><em>(Přispěl Percy Cabello)</em></p>

<p>Pokud máte velký počet vyhledávacích modulů, můžete je chtít před
instalací nové verze Mozilly či Firefoxu uložit a vyhnout se tak jejich
opětovné instalaci.</p>

<p>To provedete tak, že přejdete do adresáře "searchplugins" v adresáři s
programem (ve Windows typicky C:\Program Files\Mozilla
Firefox\searchplugins). Pro každý nainstalovaný modul najdete několik
souborů se stejným názvem. Jeden s příponou SRC (textový soubor s
požadovanou definicí pro vyhledávač), druhý je obrázkové logo s příponami
PNG, GIF nebo JPG.</p>

<p>Překopírujte všechny soubory do záložního adresáře mimo adresář "Mozilla
Firefox". Pro pozdější obnovení modulů je pouze nakopírujte zpět ze zálohy
do adresáře "searchplugins".</p>

<hr />

<p>Další tipy pro svůj oblíbený prohlížeč najdete na
<a href="http://www.mozillatips.com/" hreflang="en">www.mozillatips.com</a>.</p>


<h2 class="nice" id="ml.2">Novinky</h2>

<h3 id="ml.21">Hachette Multimedia vydala encyklopedii založenou na Mozille</h3>

<p>26. července oznámila firma Hachette Multimedia (přes francouzskou
asociaci video her, AFJV) dostupnost Hachette Mutimedia Encyclopedia 2005.
Ta byla vytvořena firmou <a href="http://www.idm.fr/">IDM</a> a vydána
společností Hachette Multimedia. Elektronická encyklopedie je samostatná
aplikace založená na Mozille 1.2.1. "Je to velmi stará verze, ale museli
jsme ji použít, abychom mohli použít skriptovatelný modul pro Flash na
Mac&nbsp;OS&nbsp;X, a také z historických důvodů," komentoval to Damien
Krotkine, vedoucí produktu v IDM. "IDM má určité zkušenosti s produkty
založenými na Mozille. S těmito zkušenostmi nám trvalo vytvoření celého
produktu šest měsíců od okamžiku, kdy byl vytvořen návrh a napsány
specifikace," dodal.</p>

<p>V současné době je produkt dostupný pouze ve francouzštině, avšak Eric
Kalasz z Hachette Multimedia nám dal vědět, že jsou připravení spolupracovat
se zahraničními vydavateli na anglickém vydání.</p>

<p><a href="http://www.afjv.com/press0407/040722_encyclopedie_hachette_multimedia.htm">Tisková
	zpráva Hachette Multimedia</a> (ve francouzštině, s několika
ukázkami aplikace)</p>


<h3 id="ml.22">Vydáno Nvu 0.4.1</h3>

<p>10. srpna vydala Disruptive Innovations a Linspire, Inc. novou verzi Nvu
0.4 - nástroje pro tvorbu stránek, který je založený na technologii Gecko a
Mozille 1.7. Obsahuje nová horizontální a vertikální pravítka ke změně
velikosti všech elementů (včetně sloupců a řádků tabulek) pomocí myši.</p>

<p>Verze 0.4.1 je drobné vydání, jež opravuje problém v nastavení
publikování a přidává panel pro nastavení fontů.</p>

<p>Nvu 0.4.1 si stáhněte na
<a href="http://www.nvu.com/download.html">www.nvu.com/download.html</a>.</p>


<h3 id="ml.23">Mozilla Foundation, Novell a IBM použijí XForms 1.0 v Mozille</h3>

<p>10. srpna oznámila Mozilla Foundation vytvoření projektu pro implementaci
W3C standardu XForms 1.0. W3C (World Wide Web Consortium) tvoří okolo 350
organizací z celého světa s cílem ohodnotit, schválit a prosazovat společné
protokoly pro vývoj webu. XForms realizují daleko výkonnější webové
formuláře se schopnostmi validace (ověření vstupů) a napojením na webové
služby, které mohou například znamenat výměnu menšího množství dat se
serverem a přesnější údaje formulářů.</p>

<p><a href="http://www.mozilla.org/press/mozilla-2004-08-10.html">Tisková zpráva Mozilla Foundation</a></p>


<h3 id="ml.24">Kreslený vtip na User Friendly na téma odměny za bezpečnostní
chybu v Mozille</h3>

<p>11. srpna vydal technicky orientovaný server User Friendly od J. D.
"Illiad" Frazera <a href="http://ars.userfriendly.org/cartoons/?id=20040811">další proužek o Mozille</a>. Tentokrát na téma odměny za
objevení bezpečnostní chyby v Mozille. Podívejte se a zasmějte se.</p>


<h3 id="ml.25">AOL vydala Netscape 7.2</h3>

<p>Netscape 7.2 byl vydán 17. srpna s vylepšenou kontrolou nad vyskakovacími
okny (nyní blokuje i okna vyskakující při pohybu myší nad určitými objekty
webových stránek), podporou pro elektronické vizitky (vCard), vylepšenou
synchronizací s Palmem a rychlejším startem a zobrazováním, protože je
založen na Mozille 1.7.</p>

<p>Stahujte na:
<a href="http://channels.netscape.com/ns/browsers/default.jsp">channels.netscape.com/ns/browsers/default.jsp</a>.</p>


<h3 id="ml.26">Vydáno Camino 0.8.1</h3>

<p>15. srpna byla vydána bezpečnostní aktualizace pro Camino, prohlížeč
Mozilla s původním uživatelským rozhraním Mac&nbsp;OS. Kromě oprav těchto
zranitelností je nyní založen na Mozille 1.7.2 a nabízí lepší možnosti
lokalizace.</p>

<p>Camino 0.8.1 stahujte na stránkách
<a href="http://www.mozilla.org/products/camino/">www.mozilla.org/products/camino/</a>.</p>


<h3 id="ml.27">Vydána Mozilla 1.8 alfa 3</h3>

<p>Nová verze vydaná 18. srpna obsahuje vylepšení přenosu dat z Eudory,
podporu pro otevření nového panelu pomocí <kbd>Ctrl</kbd> + klepnutí myši
nebo klepnutím prostředním tlačítkem myši, možnost zakázat definici stylů
(CSS) a několik dalších drobných vylepšení.</p>

<p><a href="http://www.mozilla.org/releases/mozilla1.8a3/">Poznámky k vydání Mozilla 1.8a3</a></p>


<h3 id="ml.28">Spuštěna Mozilla Japan</h3>

<p>18. sprna 2004 oznámila Mozilla Foundation spuštění Mozilla Japan, druhé
mezinárodní pobočky po Mozilla Europe (která byla spuštěna na počátku
letošního roku). Její zahajující řídící výbor vedl pan Hideo Aiso (prezident
technické univerzity Tokyo University of Technology) a další členové, jako
jsou Nobuo Kita (výkonný manažer v Ten Art-ni Corporation), Satoka Takita
(dříve pracoval pro AOL/Netscape Japan) a Motohiro Egota (z Ten Art-ni). Ten
Art-ni je v Japonsku veřeně obchodovatelný dodavatel řešení postavených na
otevřených technologiích.</p>

<p><a href="http://www.mozilla.org/press/mozilla-2004-08-18.html">Tisková zpráva</a></p>


<h3 id="ml.29">Mozilla Foundation a OpenOffice.org spojí síly</h3>

<p>26. srpna Daniel Carrera z OpenOffice.org oznámil, že Ryan Singer z
marketingového oddělení OpenOffice.org již s Mozilla Foundation vyjednává
posílení spojenectví mezi těmito dvěma projekty. Pro začátek budou nová CD s
Mozillou obsahovat také software od OpenOffice.org.</p>

<p>OpenOffice.org je úspěšný otevřený projekt kancelářského balíku aplikací
zahrnující Writer (textový procesor), Calc (tabulkový procesor) a Impress
(prezentace). Tuto zprávu sice nemohli představitelé projektu Mozilla
potvrdit, ale mohlo by se jednat o nejžádanější strategický tah na poli
otevřeného softwaru.</p>

<p><a href="http://www.openoffice.org/servlets/ReadMsg?list=discuss&amp;msgNo=40842">Zpráva od Daniela Carrery</a> v diskusním fóru discuss@openoffice.org.</p>


<h3 id="ml.210">Firefox, Mozilla a Netscape pro MacOS náchylné k zranitelnosti v Javě</h3>

<p>27. srpna vydal server Secunia bezpečnostní upozornění týkající se
Mac&nbsp;OS verze Firefoxu, balíku Mozilla a Netscapu. "Problém způsobují
chyby v zobrazování Java appletů v okně při použití více panelů.
Bezpečnostní věstník uvádí, že to může být zneužito k podvržení obsahu HTML
dokumentu z jiného HTML dokumentu v jiném panelu."</p>

<p>A dodává: "Bylo již oznámeno, že tento problém souvisí se známým chováním
implementace Javy na platformě Apple. Proto jsou tedy k této chybě náchylné
pouze aplikace používající zásuvný modul Apple Java."</p>

<p>Postiženy jsou Netscape 7.2, Firefox 0.9.3, balík Mozilla 1.7.2 a
Thunderbird 0.7.3 na platformě Mac&nbsp;OS&nbsp;X 10.3.5. Jako dočasné
řešení můžete buď zakázat podporu pro Javu, anebo otevřít nedůvěryhodné
stránky v novém okně namísto v novém panelu.</p>

<ul>
	<li><a href="http://secunia.com/advisories/12392/">Netscape Security Bulletin</a></li>
	<li><a href="http://secunia.com/advisories/12403/">Mozilla Suite and Firefox Security Bulletin</a></li>
</ul>


<h3 id="ml.211">Nové webové stránky Mozilla.org</h3>

<p>31. srpna byl spuštěn nový vzhled webu Mozilla.org. Vytvořil ho tým
vizuální identity projektu Mozilla. Nazývá se Cavendish. Je tmavě modrý a
lépe zvýrazňuje všechny produkty Mozilla a zkušebně i příspěvky do blogů
členů Mozilla týmu.</p>

<p>Tým vizuální identity projektu Mozilla je z velké části tvořen lidmi z
kanadské designerské firmy silverorange. Již dříve se tento tým zapsal
významnými designerskými pracemi - loga Firefoxu a Thunderbirdu a také
základním motivem vzhledu Winstripe v prohlížeči Firefox.</p>

<ul>
	<li><a href="http://actsofvolition.com/archives/2004/august/newmozillaorg">Oznámení Stevena Garrityho</a></li>
	<li><a href="http://www.mozilla.org/">Nový vzhled Mozilla.org</a></li>
</ul>


<h2 id="ml.3" class="nice">Místní novinky</h2>

<p><em>(Přispěla <a href="http://www.czilla.cz/">CZilla</a>)</em></p>

<h3 id="ml.31">Mozilla Suite 1.7.3 CZ</h3>

<p>Máme tu českou verzi Mozilla Suite 1.7.3. Tato verze opravuje několik
bezpečnostních chyb a uživatelům je doporučen ugrade. K dispozici je
instalátor pro Windows, Linux a lokalizační balíček. Více najdete
<a href="http://www.czilla.cz/stahnout/">v sekci download</a>.</p>


<h3 id="ml.32">Aktuální záložky ve Firefoxu</h3>

<p>Jednou z novinek Firefoxu 1.0 PR jsou aktuální záložky (Live Bookmarks),
které prostřednictvím RSS umožnují uživatelům sledovat novinky na jejich
oblíbených webech. Připravili jsme pro vás návod
<a href="/podpora/firefox/aktualni-zalozky.php">Aktuální záložky (RSS) ve Firefoxu</a>.</p>


<h3 id="ml.33">Mozilla Suite, Firefox, Thunderbird. Co zvolit?</h3>

<p>Pokud patříte k těm, kteří zvažují, zda zvolit celý balík Mozilla,
nebo kombinaci Mozilla Firefox a Mozilla Thunderbird, snad vám při
rozhodování pomůže dokument
<a href="/produkty/ktery-zvolit.php">Který produkt projektu Mozilla si vybrat?</a></p>


<h3 id="ml.34">Instalace Mozilly</h3>

<p>Připravili jsme
<a href="/podpora/suite/instalace.php">návod k instalaci Mozilly</a>
pro začínající uživatele. Pokud doporučujete Mozillu svým přátelům a nejste
si jistí, zda si s instalací budou vědět rady, odkažte je na náš návod.</p>


<h3 id="ml.35">Jak pomoci CZille</h3>

<p>Čas od času se nás ptáte, zda byste mohli CZille a prosazování Mozilly u
nás nějak pomoci. Proto jsme pro vás sepsali dokument
<a href="/czilla/jak-pomoci/">Zapojte se</a>.
Výběr je veliký. Pomoci můžete s překlady, testováním, podporou uživatelů
nebo třeba s Technickou evangelizací.</p>


<h3 id="ml.36">Mozilla na CD-ROM</h3>

<p>Modemisté nás neustále bombardují žádostmi, zda nezačneme vydávat
Mozillu, Firefox a Thunderbird na CD-ROM. My jsme se rozhlédli a zjistili
jsme, že dnes je Mozilla (i česká) k dispozici v CD-přílohách velké řady
časopisů. Na stránce Mozilla na CD-ROM
budeme zveřejňovat seznam CD, na kterých Mozilla vyšla. Pokud víte o CD,
které nemáme v seznamu, dejte nám vědět.</p>

<h3 id="ml.37">Kniha Mozilly aneb historie velikonočního vajíčka</h3>

<p>Slavné velikonoční vajíčko v podobě úryvků z The Book of Mozilla provází
na adrese about:mozilla většinu verzí prohlížeče Netscape i Mozilla. Na
stránkách české Wikipedie si můžete přečíst celou
<a href="http://cs.wikipedia.org/wiki/Kniha_Mozilly">historii Knihy Mozilly</a>.</p>

<h2 class="nice" id="ml.4">Projekty k Mozille</h2>

<p><em>(Přispěl Brian King)</em></p>

<p>Zprávy o samostatných projektech obsahují novinky a poslední informace o
Mozille a rozšířeních shromážděných na Mozdev.org a jinde v rámci
komunity.</p>

<p>V tuto chvíli existuje obrovský tlak na zvýšení počtu stažených kopií
Firefoxu a Thunderbirdu a na přechod lidí z jiných prohlížečů a mailových
klientů. Tato akce zahrnuje
<a href="http://www.download.com/Mozilla-Firefox/3000-2356-10299359.html?tag=lst-0-1">tisíc komentářů k Firefoxu na dowload.com</a>,
sestavení seznamu 2000 webů, které by měly mít na svých stránkách umístěné
propagační tlačítko "Get Firefox" a projekt
<a href="http://www.blakeross.com/archives/000234.html">For The Record</a>
 - pokus získat pomoc uživatelů při zviditelnění projektu Mozilla v médiích.</p>

<p>Některé servery pohotově vyrazily s výzvami uživatelů k přechodu. Ne
všechny se zaměřují výhradně na přechod na klienty Mozilly, ale také se jim
věnují. Viz
<a href="http://studer.tv/zillivisation/">zillavisation</a>
<a href="http://browsehappy.com/">Browse Happy</a>
<a href="http://www.switch2firefox.com/">Switch2Firefox</a>
a
<a href="http://firefoxie.net/">FirefoxIE</a>.
A samozřejmě, jeden z nejlepších důvodů k přechodu je ohromný výběr a
kvalita dostupných rozšíření. Užijte si tyto poslední novinky o některých
projektech!</p>

<h3 id="ml.41"><a href="http://lookahead.mozdev.org/">LookAhead 0.7</a></h3>

<p>Rozšíření používá webovou službu Google k načtení webových adres do
několika panelů.</p>
<p>
	pro: Firefox<br />
	platformy: Windows, Linux, Mac&nbsp;OS&nbsp;X
</p>

<p>Významné novinky:</p>
<ul>
	<li>přidán dialog pro konfiguraci</li>
	<li>přidána kontextová nabídka pro vyhledávání textu</li>
	<li>přidán dialog pro vložení klíčového slova na Google</li>
	<li>opravena interakce s tlačítkem vyhledávání</li>
</ul>

<p>Chystá se oprava interakce s "WebSearch" a tvorba "aplikace" pro
identifikaci nových výsledků hledání pro vyhledávání řetězce.</p>


<h3 id="ml.42"><a href="http://autofill.mozdev.org/">Autofill 0.2</a></h3>

<p>Rozšíření pro Firefox pro automatické vyplňování formulářů.</p>
<p>
	pro: Mozilla, Firefox<br />
	platformy: Windows, Linux, Mac&nbsp;OS&nbsp;X
</p>

<p>24. srpna byla vydána verze 0.2. Nové funkce zahrnují podporu pro údaje
kreditních karet, ověření čísel kreditních karet na prefix, délku a
algoritmus LUHN, dále podpora pro rozpoznávání políček formulářů na základě
jejích popisek. Bezpočet oprav, včetně:</p>

<ul>
	<li>stále aktivní políčka nastavení profilu po neúspěšném přidání nového profilu</li>
	<li>opraveno chování výběru panelů k řádnému aktivování/deaktivování tlačítka automatického vyplňování při "čarování" s panely</li>
	<li>oprava umístění okna s nastavením - nyní uprostřed otevřeného okna</li>
	<li>oprava práce přidání profilu - více intuitivní a méně náchylné k chybám</li>
</ul>


<h3 id="ml.43"><a href="http://3iempost.mozdev.org/">3iempost 0.3</a></h3>

<p>Rozšíření pro Firefox pro zasílání webové stránky na 3iem.net</p>
<p>
	pro: Firefox 0.9+<br />
	platformy: nezávislé na platformě
</p>

<p>Vydána verze 0.3. Přidány nové možnosti a automatické zasílání URL do
fóra.</p>

<p>Významné novinky:</p>
<ul>
	<li>zaslání webové stránky na 3iem.net jediným klepnutím myši</li>
	<li>možnosti nastavení zasílaného příspěvku</li>
</ul>


<h3 id="ml.44"><a href="http://biofox.mozdev.org/">bioFOX 0.2</a></h3>

<p>Nástroj pro bioinformatiky.</p>
<p>
	pro: Mozilla, Firefox<br />
	platformy: Windows, Linux, Mac&nbsp;OS&nbsp;X
</p>

<p>Významné novinky:</p>
<ul>
	<li>opraveny blastn, blastp pro URL</li>
	<li>opravena chyba s rámci</li>
</ul>


<h3 id="ml.45"><a href="http://biobar.mozdev.org/">biobar 1.2</a></h3>

<p>Nástrojová lišta pro bioinformatiky k prohledávání databází.</p>
<p>
	pro: Mozilla, Firefox<br />
	platformy: Windows, Linux, Mac&nbsp;OS&nbsp;X
</p>

<p>Nástrojová lišta pro všechny platformy pro biology a bioinformatiky.
Verze 1.2 umožňuje vyhledávání informací v 26 různých biologických
databázích EBI, NCBI, rostlin, zvířat, vědecké literatury a genomových
sbírek.</p>

<p>Významné novinky:</p>
<ul>
	<li>nová nabídka předvoleb</li>
	<li>možnost nastavení primární databáze</li>
	<li>možnost dynamické kontroly seznamu prohledávaných databází</li>
	<li>NCBI Library Linkout pro přizpůsobení vyhledávání literatury</li>
	<li>možnost výběru ze zrcadel ExPASy, OCA, Flybase a RCSB databází</li>
	<li>seznam databází prohledávatelný s použitím biobaru</li>
</ul>


<h3 id="ml.46"><a href="http://mozmanual.mozdev.org/">MozManual 1+</a></h3>

<p>Představení Mozilly</p>
<p>
	pro: Mozilla<br/>
	platformy: Windows, Linux, Mac&nbsp;OS&nbsp;X
</p>

<p>Významné novinky:</p>
<ul>
	<li>holandská verze 1.0 dostupná</li>
	<li>francouzská verze 1.35 (menší upřesnění)</li>
	<li>webová verze 1.1 (menší upřesnění)</li>
</ul>


<h3 id="ml.47"><a href="http://habarixenu.mozdev.org/">Habari Xenu 0.8</a></h3>

<p>Skvělý agregátor zpráv ve formátu XUL.</p>
<p>
	pro: Mozilla<br />
	platformy: Windows, Linux, Mac&nbsp;OS&nbsp;X<br />
	Pracuje s většinou kanálů se správnou syntaxí.
</p>

<p>Významné novinky:</p>
<ul>
	<li>vylepšené parsování kanálů</li>
	<li>podporuje RSS, RDF a Atom kanály</li>
	<li>vylepšené UI</li>
</ul>


<h3 id="ml.48"><a href="http://conquery.mozdev.org/">ConQuery 1.1</a></h3>

<p>Kontextové rozšíření pro webové dotazy.</p>
<p>
	pro: Mozilla, Firefox, Thunderbird<br />
	platformy: všechny
</p>

<p>Významné novinky:</p>
<ul>
	<li>kompatibilní s Firefoxem 0.9 - 1.0, podpora pro online aktualizaci</li>
	<li>kompatibilní s Thunderbirdem 0.6 - 0.7+ (moduly pouze s GET metodou zasílání)</li>
</ul>

<hr />

<p>Více informací o každém projektu se dozvíte ve zprávě na
<a href="http://www.mozdev.org/status/2004-08-30-status.html">www.mozdev.org/status/2004-08-30-status.html</a>.</p>

<h2 class="nice" id="ml.5">Anketa</h2>

<h3 id="ml.51">Vyhodnocení ankety z minulého čísla</h3>

<p>V minulém čísle jsme se zeptali, zda jste někoho přesvědčili, aby
přešel na produkty projektu Mozilla. Zde jsou výsledky:</p>

<table>
<col align="left" />
<col align="right" />
<tbody>
	<tr><td>Ano, 20 a více</td><td>8,85 %</td></tr>
	<tr><td>Ano, 10 a více</td><td>10,03 %</td></tr>
	<tr><td>Ano, 5 a více</td><td>27,43 %</td></tr>
	<tr><td>Ano, méně než 5</td><td>43,66 %</td></tr>
	<tr><td>Ne, jsem sobecký a zlý</td><td>10,03 %</td></tr>
</tbody>
</table>

<h3 id="ml.52">Anketa tohoto čísla: Zúčastnili jste se již nějaké marketingové akce?</h3>

<ul>
	<li>Ano, všech</li>
	<li>Ano, některých</li>
	<li>Ne, říkal jsem, že jsem sobecký a zlý</li>
</ul>

<p>Hlasujte na <a href="http://newsletter.mozdev.org/">newsletter.mozdev.org</a>.</p>


<h2 class="nice" id="ml.6">Reklama</h2>

<p>Právě vydáno: CD s Mozillou a knižním průvodcem obsahující Mozillu
1.7, Firefox 0.9 a Thunderbird 0.7, můžete získat za 14,95 $. CD
s Mozillou: 5,95 $; průvodce Mozillou 1.7 za 12,95 $.
Trička a polokošile nabízíme od 16,95 $ a plyšáka Firefox za 15,95 $
(ano, konečně se s ním můžete pomazlit!).</p>

<p>Navštivte <a href="http://store.mozilla.org/">store.mozilla.org</a>.</p>

<hr />

<p>Darujte svůj starý mobilní telefon společnosti Wireless Foundation.
Výtěžek z prodeje telefonů pomáhá podporovat agentury bojující proti
domácímu násilí. Ostatní telefony jsou renovovány a stávají se životní
oporou obětem domácího násilí.</p>

<p><a href="http://www.wirelessfoundation.org/CalltoProtect/index.cfm">http://www.wirelessfoundation.org/CalltoProtect/index.cfm</a></p>

<hr />

<p>Připadáte si technicky zdatní? Sledujte
<a href="http://newsletter.mozdev.org/devlinks">DevLinks</a>, zpravodaj pro
vývojáře pracující s Mozillou a odvozenými produkty.</p>

<hr />

<p>Zde může být vaše reklama!
<a href="http://newsletter.mozdev.org/mlsp.html">Více podrobností</a>
o tom jak se dostat k více než 8 000 čtenářům na celém světě.</p>


<h2 class="nice" id="ml.7">Kontaktní informace</h2>

<p>Mozilla Links<sup>TM</sup> je měsíční elektronický zpravodaj vydávaný
projektem <a href="http://newsletter.mozdev.org">Mozilla Links Newsletter.</a></p>

<p><strong>Správa odběru:</strong> Pro přihlášení, odhlášení nebo změnu nastavení
navštivte prosím <a href="http://newsletter.mozdev.org/">newsletter.mozdev.org</a>.</p>

<p><strong>Ochrana soukromí</strong> K přijímání tohoto zpravodaje je vyžadována pouze
platná e-mailová adresa. Ta nebude využita k jiným účelům než
k těm, které souvisí s tímto zpravodajem (doručení, podpora, odhlášení
apod.).</p>

<p><strong>Komentáře</strong> Vítány na
<a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a></p>

<p>Zpravodaj Mozilla Links je překládán do
<a href="http://www.csie.ntu.edu.tw/%7Er91034/mozilla/forum/viewforum.php?f=15">tradiční čínštiny</a>,
<a href="http://www.czilla.cz/podpora/zpravodaj/">češtiny</a>,
 <a href="http://www.mysunrise.ch/users/alabor">němčiny</a>,
italštiny,
<a href="http://ryuzi.dyndns.org/mozillazine/html/modules/newbb/viewforum.php?forum=6">japonštiny</a>,
<a href="http://www.vivamozilla.prv.pl/">polštiny</a>,
portugalštiny,
španělštiny,
a
<a href="http://www.mozilla.ru/">ruštiny</a>.</p>

<p><strong>Copyright:</strong> přispěvatelé zpravodaje Mozilla Links, 2004
Zpravodaj Mozilla Links je vydáván pod licencí
<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode">Creative Commons
Attribution-NonCommercial-ShareAlike 1.0</a>.</p>

<p><strong>České vydání připravili:</strong> Petr Tomeš, Tomáš Marek a Vlastimil Ott;
<a href="mailto:info@czilla.cz">info@czilla.cz</a>,
<a href="http://www.czilla.cz/podpora/zpravodaj/">http://www.czilla.cz/podpora/zpravodaj/</a>.</p>

<?php
	$page->includeTemplate('footer');
?>
