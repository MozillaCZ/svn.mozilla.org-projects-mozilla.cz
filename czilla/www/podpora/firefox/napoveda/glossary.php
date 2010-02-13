<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Slovník';
	$page->headline = array('Slovník','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>

<p>
Obsah tohoto slovníku je pro vaši informaci. To znamená, že si nečiní nárok být kompletním či směrodatným popisem 
termínů popsaných níže.
</p>
<hr />

<h1 id="glossary">Slovník</h1>

<dl>

<dt id="location_bar">Adresní řádek</dt>
<dd>
Pole (a přidružená tlačítka) blízko horního okraje okna Firefox, kam můžete
zadat <a href="#Uniform_Resource_Locator">URL</a> nebo výrazy k vyhledání.
</dd>

<dt id="live_bookmark">Aktuální záložka</dt>
<dd>
Speciální typ záložky, která vystupuje jako složka obsahující odkazy. Aktuální záložku můžete vytvořit tak, že navštívíte stránku, která nabízí RSS formát. U ní se ve pravém dolním řádku stavové lišty zobrazí ikonka. Na ni klepnete a vyberete formát, který si přejete používat.
</dd>

<dt id="authentication">Autorizace</dt>
<dd>
  Použití hesla, certifikátu, osobního identifikačního čísla (PIN) nebo jiných informací pro ověření identity přes
  počítačovou síť.
</dd>

<dt id="secure_site">Bezpečná stránka</dt>
<dd>Stránka, která používá <a href="#encryption">šifrování</a> při spojeních s Firefoxem. Jedná se o prevenci před zákeřnými uživateli Internetu, kteří si chtějí prohlížet přenášená data. Když navštívíte bezpečnou stránku, Firefox zobrazí ikonu zámku ve <a href="#Status_Bar">stavovém řádku</a> a v <a href="#location_bar">adresním řádku</a>. Firefox také zobrazí doménové jméno stránky ve stavovém řádku (prevence proti zlomyslným stránkám kradoucích vaše data) a přepne pozadí adresního řádku na žlutou barvu.
</dd>

<dt id="cache">Cache</dt>
<dd>
  Skupina kopií webových stránek uložená na vašem pevném disku nebo v operační paměti (RAM). Firefox 
  shromažďuje tyto webové stránky během vašeho prohlížení webu. Pokud klepnete na odkaz nebo zadáte 
  <a href="#Uniform_Resource_Locator">URL</a> pro zobrazení příslušné webové stránky a webová stránka je již v
  cache obsažena, provede se porovnání s originálem. Pokud se na stránce nevyskytují změny, Firefox použije
  uloženou webovou stránku. Urychlí tím zobrazení webové stránky a ušetří přenosovou kapacitu linky.
</dd>

<dt id="certificate">Certifikát</dt>
<dd>
  Digitální ekvivalent identifikační karty. Certifikát obsahuje jméno jednotlivce, podniku nebo jiné společnosti a ověřuje, zda veřejný klíč, obsažený v certifikátu, přísluší této společnosti. Když digitálně podepisujete zprávu nebo jiná data, digitální podpis pro tuto zprávu je vytvořen pomocí soukromého klíče, který odpovídá veřejnému klíči ve vašem certifikátu.</dd>

<dt id="cookie">Cookie</dt>
<dd> 
Malá informace ukládaná na vašem počítači některými webovými stránkami. Když takovou stránku navštívíte, stránka požádá Firefox o umístění jedné nebo více cookies na váš pevný disk. Při další návštěvě stránky jí Firefox odešle příslušnou cookie. Cookies pomáhají webovým stránkám sledovat informace o vaší aktivitě. Můžete nastavit možnosti pro cookies tak, abyste mohli kontrolovat jejich použití a určovat množství informací přístupných webovým stránkám.
</dd>

<dt id="decryption">Dešifrování</dt>
<dd>
Proces dešifrování dat, která jsou zašifrována.Další informace naleznete u <a href="#encryption">šifrování</a>.</dd>

<dt id="digital_ID">Digitální ID</dt>
<dd>Viz. <a href="#certificate">certifikát</a>.</dd>

<dt id="home_page">Domovská stránka</dt>
<dd>Stránka, kterou Firefox zobrazí při spuštění nebo po klepnutí na tlačítko <em>Domů</em>. Také může odkazovat na hlavní stránku webového serveru, ze které prohlížíte ostatní stránky, které obsahuje.</dd>

<dt id="XML">Extensible Markup Language (XML)</dt>
<dd>
Otevřený standard pro popis dat. Na rozdíl do HTML, XML dovoluje vývojářům webových
stránek definovat speciální tagy. Pro více informací se podívejte do on-line dokumentu
 <a href="http://www.w3.org/XML/">Extensible Markup Language (XML)</a>.</dd>

<dt id="File_Transfer_Protocol">File Transfer Protocol (FTP)</dt>
<dd>Standard, který umožňuje uživatelům přenos souborů z jednoho počítače do jiného prostřednictvím sítě. K přenosu souborů pomocí protokolu FTP je možno použít Firefox .</dd>

<dt id="FIPS_PUBS_140-1">FIPS PUBS 140-1</dt>
<dd>Federal Information Processing Standards Publications (FIPS PUBS) 140-1 je standardem vlády USA pro implementaci šifrovacích modulů &ndash; - hardware či software, který šifruje a dešifruje data nebo provádí jiné šifrovací operace (například vytváření nebo ověřování digitálních podpisů). Velmi mnoho produktů dodávaných vládě USA musí splňovat jeden či více FIPS standardů.</dd>

<dt id="master_password">Hlavní heslo</dt>
<dd>
Heslo použité k ochraně uložených hesel a jiných soukromých dat. Firefox se bude dotazovat na hlavní heslo, když budete přistupovat k těmto datům. Pokud máte více bezpečnostních zařízení, každé bezpečnostní zařízení bude vyžadovat vlastní hlavní heslo.</dd>

<dt id="Hypertext_Markup_Language">Hypertext Markup Language (HTML)</dt>
<dd>Formát dokumentu užívaný pro webové stránky. Standard HTML definuje tagy a kódy použité pro určení uspořádání textu, fontů, stylů, obrázků a dalších prvků, které tvoří vzhled webové stránky.</dd>

<dt id="Internet">Internet</dt>
<dd>
Celosvětová síť miliónů počítačů, které mezi sebou komunikují standardními protokoly jako
<a href="#Transmission_Control_Protocol_Internet_Protocol">TCP/IP</a>. Původně (v roce 1969) 
byla tato síť vyvíjena pro armádu USA. Internet původně vznikl jako vzdělávací a výzkumné prostředí. 
V 90. letech se k němu připojila řada obchodníků, organizací a jednotlivých zájemců. Dnes
je Internet používán na e-mailovou poštu, procházení <a href="#World_Wide_Web">World Wide Web</a>,
posílání krátkých zpráv, prohlížení diskusních skupin a řadu dalších věcí.
</dd>

<dt id="Internet_protocol_address">Internet protocol address (IP address)</dt>
<dd>Adresa počítač na síti <a href="#Transmission_Control_Protocol_Internet_Protocol">TCP/IP</a> .
  Každý počítač na internetu má IP adresu. <a href="#client">Klienti</a>
  mají buď pevnou IP adresu nebo je jim dynamicky přidělována při každém připojení k síti.</dd>

<dt id="Java">Java</dt>
<dd>
Programovací jazyk vyvíjený firmou Sun Microsystems. Jednou napsaný program v Javě může
být spustitelný na řadě počítačů s odlišným operačním systémem. Není tedy nutné vytvářet
pro každý z nich speciální verzi. Po instalaci Javy může Firefox automaticky
stahovat a spouštět Java programy (též zvané aplety).
</dd>

<dt id="JavaScript">JavaScript</dt>
<dd>
Skriptovací jazyk, který je používán při vytváření webových stránek. Programátoři 
používají JavaScript na vytváření webových stránek, které jsou tak více interaktivní. 
JavaScript může být použit s Javou, ale jedná se o technicky jiné jazyky. Java
není pro správnou funkci JavaScriptu nutná.
</dd>

<dt id="client">Klient</dt>
<dd>
  Software (například webový prohlížeč) zasílá požadavky pro získání informací ze <a href="#server">serveru</a>,
  který je spuštěn na jiném počítači. Počítač, na kterým je klientský software spuštěn, je často popisován jako
  klient.
</dd>

<dt id="cryptography">Kryptografie</dt>
<dd>Umění a postupy šifrování a dešifrování informací. Například, tyto šifrovací techniky jsou použity při šifrování a dešifrování informací vyměňovaných mezi komerčními webovými stránkami a Firefox.</dd>

<dt id="Bookmarks_Toolbar">Lišta záložek</dt>
<dd>
  Nastavitelná lišta, která je standardně umístěna hned pod navigační lištou Firefox. Obsahuje tlačítka 
  reprezentující vaše oblíbené záložky (nebo složky obsahující skupiny záložek), které můžete přidávat či odebírat.
</dd>

<dt id="navigation_toolbar">Navigační lišta</dt>
<dd>
Lišta, která je umístěna v horní části okna Firefox. Obsahuje
tlačítka jako <em>Zpět</em> či <em>Vpřed</em>
</dd>

<dt id="PKCS_11">PKCS #11</dt>
<dd>Šifrovací standard veřejných klíčů, který převládá u bezpečnostních zařízení, např. smart cards.</dd>

<dt id="helper_application">Pomocné aplikace</dt>
<dd>Jakákoli aplikace použitá pro otevření nebo prohlédnutí souboru staženého Firefox.
 <a href="#plug-in">Zásuvný modul</a> je speciálním typem pomocné aplikace, která se instaluje do adresáře Plugins hlavního instalačního adresáře Firefox a obvykle může být otevřena uvnitř samotné Firefox . Microsoft Word, Adobe Photoshop a ostatní vnější aplikace jsou považovány za pomocné aplikace, nikoli za zásuvné moduly, protože se neinstalují přímo do prohlížeče, ale mohou být otevírány pomocí dialogového okna při stahování souboru.</dd>

<dt id="proxy">Proxy</dt>
<dd>
Prostředník či &quot;zprostředkovatelský&quot; program, který zprostředkovává komunikaci mezi 
<a href="#server">serverem</a> a <a href="#client">klientem</a>.</dd>

<dt id="SSL">Secure Sockets Layer (SSL)</dt>
<dd>Protokol, který umožňuje oboustrannou autorizaci mezi <a href="#client">klientem</a> a <a href="#server">serverem</a> pro účel vytvoření ověřeného a šifrovaného spojení. SSL běží nad protokolem TCP/IP a pod protokoly HTTP, LDAP, IMAP, NNTP a dalšími vyššími síťovými protokoly. Nový standard  Internet Engineering
Task Force (IETF) zvaný Transport Layer Security (TLS) je založen na SSL. Více informací je zde: <a href="#authentication">Autorizace</a>,
  <a href="#encryption">Šifrování</a>.</dd>

<dt id="server">Server</dt>
<dd>
Software (jako software, který poskytuje webové stránky), který přijímá
požadavky a odesílá informace <a href="#client">klientům</a>, kteří
jsou obvykle spuštění na jiných počítačích. Počítač, na kterém software
serveru běží, se obvykle nazývá server.
</dd>

<dt id="Cookie_Manager">Správce cookie</dt>
<dd>Část Firefox, která spravuje soubory <a href="#cookie">cookie</a>.</dd>

<dt id="Password_Manager">Správce hesel</dt>
<dd>
Část Firefox, která spravuje uložené přihlašovací údaje webových formulářů.
Tyto údaje jsou ukládany na pevný disk. Při opětovné návštěvě stránky s přihlašovacím formulářem
bude tento formulář automaticky vyplněn.
</dd>

<dt id="Status_Bar">Stavový řádek</dt>
<dd>
Stavový řádek, který je umístěn v dolní části okna Firefox. Obsahuje
ikonku stavu v pravé části.
</dd>

<dt id="private_key">Soukromý klíč</dt>
<dd>
Jeden ze dvou klíčů používaný a asymetrickém šifrování. Soukromý klíč je 
tajný a je používán k dešifrování zpráv, které byly zašifrovány veřejným klíčem.
</dd>

<dt id="encryption">Šifrování</dt>
<dd>Proces změny informace takovým způsobem, který skryje její význam. Například, šifrovaná spojení mezi počítači velice snižují možnost úspěšného odposlechnutí nebo <em>dešifrování</em> vyměňovaných informací třetí osobou. Šifrované informace mohou být dešifrovány pouze vlastníkem příslušného klíče.</dd>
  
 <dt id="TCP_IP">Transmission Control Protocol/Internet Protocol (TCP/IP)</dt>
<dd>Unixový protokol používaný pro spojení počítačů s různými operačními systémy. TCP/IP je nepostradatelným protokolem sítě internet a stal se obecně uznávaným standardem.</dd> 

<dt id="TLS">TLS</dt>
<dd>Viz. <a href="#Secure_Sockets_Layer">Secure Sockets Layer (SSL)</a>.</dd>

<dt id="Uniform_Resource_Locator">Uniform Resource Locator (URL)</dt>
<dd>Standardizovaná adresa, která říká prohlížeči Firefox, jak přistupovat k souboru nebo k jinému zdroji na webu (například, <tt>http://www.mozilla.org</tt>). Pro přístup k webové stránce uveďte její URL na řádku adres Firefox. URL jsou také používány v odkazech webových stránek na jiné webové stránky. Jsou také známy jako internetové či webové adresy.</dd>

<dt id="search_engine">Vyhledávač</dt>
<dd>Program, který umožňuje uživatelům vyhledávat a získávat konkrétní informace na síti Internet. Vyhledávač může prohledávat text webových dokumentů nebo seznam klíčových slov; může také využívat knihovnické služby, které procházejí dokumenty a ručně je indexují. Obvykle uživatel uvádí slovo nebo frázi do okna vyhledávání a vyhledávač zobrazí odkazy na odpovídající webové stránky.</dd>
 
<dt id="web_page">Webová stránka</dt>
<dd>
Jeden dokument na World Wide Web, který je reprezentován unikátní webovou adresou (URL).
Webová stránka obsahuje text, odkazy a grafiku.
</dd> 

<dt id="web_site">Webový server</dt>
<dd>
Skupina příbuzných webových stránek spojená webovými odkazy a spravovaná společností, organizací či konkrétním jedincem.
Webové stránky mohou obsahovat text, grafiku, audio či video soubor a odkazy na jiné webové stránky.
</dd>
 
<dt id="World_Wide_Web">World Wide Web</dt>
<dd>
Též nazývaný web. Část Internetu, která byla vytvořena na prezentování 
webových stránek na <a href="#server">serverech</a> a jejich zobrazování 
<a href="#client">klienty</a>, kteří se nazývají webové prohlížeče (jako
například Firefox).
</dd>

<dt id="bookmark">Záložka</dt>
<dd>
  Uložená webová adresa (<a href="#Uniform_Resource_Locator">URL</a>), kterou můžete snadno navštívit klepnutím na
  ikonku v liště záložek či volbou z nabídce Záložky.
</dd>

<dt id="plug-in">Zásuvné moduly</dt>
<dd>Druh <a href="#helper_application">pomocných aplikací</a> , které přidávají nové možnosti prohlížeči Firefox, například možnost přehrávat zvuky nebo videoklipy. Narozdíl od jiných druhů pomocných aplikací se zásuvné moduly instalují do adresáře Plugins v hlavním instalačním adresáři Firefox a jsou otevírání přímo uvnitř prohlížeče Firefox . Například, zásuvný modul pro přehrávání zvuku vám umožní přehrávat zvukové soubory na webových stránkách nebo v e-mailových zprávách. Macromedia Flash Player a Java jsou příklady zásuvných modulů.</dd>


</dl>

<p>
[&nbsp;<a href="#glossary">Návrat na začátek Slovníku</a>&nbsp;]
</p>

<div class="contentsBox"><em>28. září 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>