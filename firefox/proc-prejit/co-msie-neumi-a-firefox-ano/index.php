<?php
	require_once '../inc/page.php';
	$page->setTitle('Co MSIE neumí a Firefox ano');
	$page->setDescription('Seznam vlastností, které jsou zahrnuty v instalaci prohlížeče Mozilla Firefox a nejsou k dispozici v prohlížeči Internet Explorer.');
	$page->setKeywords('mozilla firefox internet explorer msie ie možnosti výhody');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Co
<abbr title="Microsoft Internet Explorer" lang="en">MSIE</abbr>
neumí a&nbsp;Firefox ano</h1>

<p>Seznam vlastností, které jsou zahrnuty v&nbsp;instalaci prohlížeče
<strong>Mozilla Firefox 1.0</strong> a&nbsp;nejsou k&nbsp;dispozici
v&nbsp;prohlížeči <strong>Internet Explorer</strong>. Nezahrnuli jsme do
seznamu vlastnosti, které lze získat změnou klíčů v&nbsp;registru, instalací
dalších programů či
<a href="https://addons.mozilla.org/extensions/?application=firefox"
	title="Mozilla Update: Firefox Extensions"
	hreflang="en" class="l-en">rozšíření</a>.</p>

<p>Tento seznam <em>není</em> seznamem důvodů, proč je Mozilla Firefox lepší
než Internet Explorer. Pouze vyjmenovává vlastnosti, které jsou obsaženy ve
výchozí instalaci prohlížeče Mozilla Firefox a&nbsp;nejsou v&nbsp;Internet
Exploreru.  Záleží jen na vás, zda budete danou vlastnost považovat za
důvod, proč používat raději Mozilla Firefox než Internet Explorer.</p>

<dl class="diff-list">
	<dt id="vl-panely">Prohlížení v&nbsp;panelech</dt>
	<dd>
		<p>Umožní vám prohlížet v&nbsp;jednom okně více než jednu stránku. Nový
		panel můžete otevřít pomocí položky &quot;Nový panel&quot;
		z&nbsp;hlavní nabídky Soubor nebo stiskem klávesové zkratky
		<kbd>CTRL</kbd>+<kbd>T</kbd>.</p>

		<p>Odkazy na stránce můžete otevřít v&nbsp;panelech klepnutím prostředním
		tlačítkem myši. Také v&nbsp;kontextové nabídce, která se zobrazí při
		klepnutí pravým tlačítkem nad odkazem, je k&nbsp;dizpozici volba
		&quot;Otevřít odkaz v&nbsp;novém panelu&quot;.</p>

		<p class="note"><em>Poznámka:</em>
		<a href="http://www.maxthon.com/en/index.htm"
			hreflang="en" class="l-en">Maxthon</a>
		či
		<a href="http://www.crazybrowser.com/"
			hreflang="en" class="l-en">CrazyBrowser</a>
		jsou rozdílné produkty než Internet Explorer. Pro prohlížeč Mozilla
		Firefox existuje několik rozšíření základních vlastností Prohlížení
		v panelech, např.
		<a href="http://www.extensionsmirror.nl/index.php?showtopic=2291"
			hreflang="en" class="l-en">Tab Mix</a>
		<a href="https://addons.mozilla.org/extensions/moreinfo.php?id=58&amp;application=firefox&amp;version=0.9"
			hreflang="en" class="l-en">Undoclosetab</a>
		nebo
		<a href="http://extensionroom.mozdev.org/more-info/sessionsaver"
			hreflang="en" class="l-en">Session Saver</a>.</p>
	</dd>


	<dt id="vl-kontrola-skriptu">Rozšířená kontrola skriptování</dt>
	<dd>
		<p>Můžete zabránit skriptům, aby automaticky pohybovaly
		okny a&nbsp;měnily jejich velikost nebo skrývaly stavovou lištu
		a&nbsp;měnily její text, zakazovaly kontextové nabídky nebo měnily obrázky.
		Pro změnu nastavení zvolte v&nbsp;Možnostech kategorii &quot;Webové
        stránky&quot; a&nbsp;nastavte odpovídající zatržení v&nbsp;dialogu
		rozšířených voleb JavaScriptu.</p>
	</dd>


	<dt id="vl-blokovani-popup">Blokování nevyžádaných vyskakovacích oken</dt>
	<dd>
		<p>Firefox automaticky blokuje otevírání veškerých nevyžádaných
		vyskakovacích <span lang="en">(pop-up)</span>
		oken, která jsou zpravidla otevírána automaticky při načtení stránky.
		Uživatel je tak chráněn při návštěvě webů, které by jinak
		otevřely desítky nevyžádaných oken, zpravidla obsahujících reklamu.</p>

		<p>Pro změnu nastavení zvolte v&nbsp;Možnostech kategorii &quot;Webové
		stránky&quot; a&nbsp;v&nbsp;ní zrušte &quot;Blokovat vyskakovací okna&quot;.</p>

		<p class="note"><em>Poznámka:</em> Blokování nevyžádaných
		vyskakovacích oken je v&nbsp;Internet Exploreru omezeno jen na
		Windows&nbsp;XP se Service Pack&nbsp;2. Prohlížeč Mozilla
		Firefox nabízí blokování oken na všech podporovaných platformách
		a&nbsp;operačních systémech.</p>
	</dd>


	<dt id="vl-postranni-lista">Postranní lišta a&nbsp;jednoduché zobrazení stránky v&nbsp;postranní liště</dt>
	<dd>
		<p>Postranní lišta slouží nejen k&nbsp;zobrazení záložek
		(<kbd>Ctrl</kbd>+<kbd>B</kbd>) a&nbsp;historie
		(<kbd>Ctrl</kbd>+<kbd>H</kbd>). Řada
		<a href="http://www.czilla.cz/doplnky/postranni-lista/">českých webů nabízí postranní lištu</a>,
		kterou si můžete ve Firefoxu zobrazit stručný obsah webu. Stačí takovou
		stránku přidat do záložek a&nbsp;ve vlastnostech záložky nastavit
		&quot;Nahrát tuto záložku v&nbsp;postranní liště&quot;.</p>
	</dd>


	<dt id="vl-velikost-textu">Větší kontrola nad velikostí textu na stránce</dt>
	<dd>
		<p>Text na stránce může být ve Firefoxu zvětšen nebo zmenšen na
		libovolnou velikost pomocí kláves <kbd>Ctrl</kbd>+<kbd>+</kbd>
		a&nbsp;<kbd>Ctrl</kbd>+<kbd>-</kbd> či volbou v&nbsp;nabídce. I&nbsp;když je velikost
		písma nastavena na pevný rozměr, Firefox ji mění proporcionálně vzhledem
		ke specifikovaným jednotkám. Uživatel má také možnost nastavit
		minimální velikost textu pro všechny stránky.</p>

		<p>Internet Explorer podporuje pět velikostí písma a&nbsp;pro tuto změnu
		nemá přiřazenu klávesovou zkratku. U&nbsp;stránek používajících malé
		písmo nemusí být takové ovládání dostatečné a&nbsp;to nejen pro
		slabozraké lidi.</p>

		<p class="note"><em>Poznámka:</em> Myš není možno považovat za
		klávesovou zkratku.</p>
	</dd>


	<dt id="vl-info-o-strance">Dialog Informace o&nbsp;stránce</dt>
	<dd>

		<p>V&nbsp;hlavní nabídce Nástroje naleznete položku &quot;Informace
		o&nbsp;stránce&quot;, která otevře dialog zobrazující detailní
		informace o&nbsp;stránce právě načtené v&nbsp;okně prohlížeče.
		Poskytuje informace o&nbsp;znakové sadě, typu
		<abbr title="Multipurpose Internet Mail Extension" lang="en">MIME</abbr>,
		o&nbsp;meta informacích, velikosti dokumentu, atd. Dialog
		&quot;Informace o&nbsp;stránce&quot; poskytuje dále řadu panelů
		s&nbsp;informacemi o&nbsp;zabezpečení, prvcích formulářů, souhrn
		odkazů na stránce a&nbsp;informace o&nbsp;multimediálních prvcích
		s&nbsp;možností snadného uložení daného prvku.</p>

		<p class="note"><em>Poznámka:</em> Některé základní informace lze
		zjistit i&nbsp;v&nbsp;Internet Exploreru z&nbsp;dialogu vlastnosti.</p>
	</dd>


	<dt id="vl-vyber-stylu">Možnost výběru stylu stránky</dt>
	<dd>
		<p>V&nbsp;případě, že stránka poskytuje několik stylů stránky
		(alternativní styly
		<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>),
		nabízí vám Firefox možnost výběru stylu z&nbsp;hlavní nabídky Zobrazit &ndash;
		&quot;Styl stránky&quot;. Druhou možností zvolení alternativního stylu je
		ikonka v&nbsp;pravé části stavové lišty (ve výchozím motivu vzhledu je
		ikonkou malířská paleta).</p>
	</dd>


	<dt id="vl-motiv-vzhledu">Motiv vzhledu</dt>
	<dd>
		<p>Prohlížeč Firefox nabízí ve výchozím nastavení základní
		stejnojmenný motiv <em>Firefox</em>. Na stránkách
		<a href="https://addons.mozilla.org/"
			hreflang="en" class="l-en" lang="en">Mozilla Update</a>
		si můžete vybrat z&nbsp;řady
		<a href="https://addons.mozilla.org/themes/?application=firefox"
			title="Mozilla Update: Firefox Themes"
			hreflang="en" class="l-en">motivů vzhledu</a>.</p>

		<p>Vzhled můžete měnit ve Správci motivů vzhledu, který vám také
		umožní motiv aktualizovat a&nbsp;případně i&nbsp;odinstalovat.</p>

		<p class="note"><em>Poznámka:</em> U&nbsp;IE ve Windows&nbsp;XP existuje
		možnost volby motivu vzhledu. Tato funkce však není podporována
		přímo firmou Microsoft a&nbsp;je součástí pouze jedné verze jejich
		<abbr title="Operační systém" lang="cs">OS</abbr>.
		Volba motivu vzhledu funguje ve Firefoxu na všech podporovaných
		platformách bez rozdílu.</p>
	</dd>


	<dt id="vl-zalozky">Správce záložek a&nbsp;práce se záložkami</dt>
	<dd>
		<p>Správce záložek umožňuje zobrazit řadu informací o&nbsp;záložkách.
		Každé záložce můžete přiřadit krátký popis, který vám v&nbsp;nich usnadní
		přehled.</p>

		<p>Záložce můžete přiřadit <strong>klíčové slovo</strong>. Pro přechod
		na stránku, pak stačí zadat toto klíčové slovo do adresního řádku.
		Výhodou tohoto postupu je možnost použití řetězce '<tt>%s</tt>'
		v&nbsp;adrese stránky, který je automaticky nahrazen řetězcem zadaným
		v&nbsp;adresním řádku klíčovým slovem. Pokud si takto označíte stránku
		svého oblíbeného vyhledávače, můžete vyhledávat přímo z&nbsp;adresního
		řádku
		(<a href="http://www.chomat.net/weboviny/internet-keywords"
			title="Chomat.net: Internet keywords a&nbsp;vyhledávání v&nbsp;Mozille">více
		informací</a>).</p>

		<p>Správce záložek vám umožňuje snadné <strong>vyhledání
		v&nbsp;záložkách</strong>. Při větším množství záložek vám tak odpadá
		starost pamatovat si, do jaké složky jste danou záložku
		uložili.</p>

		<p>Mezi záložky si můžete uložit celou skupinu právě otevřených
		panelů (volba &quot;Přidat všechny panely ve složce
		k&nbsp;záložkám&quot; při přidávání záložky).</p>
	</dd>


	<dt id="vl-rss">Aktuální záložky, načítání
		<abbr title="Really Simple Syndication" lang="en">RSS</abbr>
		zdrojů</dt>
	<dd>
		<p>Firefox umí formou aktuálních záložek načítat
		<abbr title="Really Simple Syndication" lang="en">RSS</abbr>
		soubory, pomocí kterých můžete snadno zjistit, co je na vašem
		oblíbeném serveru nového.</p>

		<p>Návod na použití naleznete v&nbsp;článku
		<a href="http://www.czilla.cz/podpora/firefox/aktualni-zalozky.html">Aktuální záložky
		(<abbr title="Really Simple Syndication" lang="en">RSS</abbr>) ve Firefoxu</a>.</p>
	</dd>


	<dt id="vl-domovska-stranka">Rozšířená domovská stránka</dt>
	<dd>
		<p>Domovská stránka ve Firefoxu není omezena pouze na jednu
		stránku. Pokud budete chtít, můžete si v&nbsp;Možnostech v&nbsp;kategorii
		&quot;Prohlížeč&quot; nastavit jako vaši domovskou stránku všechny
		právě otevřené panely prohlížeče. Tyto panely se automaticky otevřou
		při dalším spuštění prohlížeče nebo pokud z&nbsp;nabídky zvolíte
		&quot;Domů&quot; (<kbd>Alt</kbd>+<kbd>Home</kbd>).</p>
	</dd>


	<dt id="vl-cookies">Správce cookies</dt>
	<dd>
		<p>Cookies jsou krátké textové informace ukládané webovými servery
		na váš počítač. Obvykle slouží k&nbsp;zapamatování některých vašich
		nastavení stránek, či přihlášení na webový server.</p>

		<p>Správce cookies vám umožní prohlížet hodnoty cookies, dobu jejich
		platnosti, název rodičovského serveru a&nbsp;adresu rodičovské stránky.
		Správce cookies vám rovněž umožní smazat libovolné cookie a&nbsp;zakázat
		či povolit přijímání cookies z&nbsp;určitého webu.</p>

		<p>Správce cookies otevřete v&nbsp;Možnostech na panelu
		&quot;Soukromí&quot; po rozbalení skupiny &quot;Cookies&quot;
		klepnutím na tlačítko &quot;Správce cookies...&quot;.</p>

		<p class="note"><em>Poznámka:</em> V Internet Exploreru máte možnost
		přejít na disku do adresáře se soubory cookie a&nbsp;zde hledat manuálně.
		Které soubory cookie máte uloženy na disku můžete rovněž najít
		v jednom z&nbsp;dialogů &quot;Možnosti Internetu&quot;, ale už se o&nbsp;nich
		nic víc nedozvíte.</p>
	</dd>


	<dt id="vl-blokovani-obrazku">Blokování obrázků</dt>
	<dd>
		<p>Firefox vám umožní blokovat obrázky z&nbsp;vybraných serverů. To
		znamená, že můžete např. blokovat všechny obrázky přicházející
		z&nbsp;reklamních serverů.</p>

		<p>Obrázky ze serveru zablokujete, klepnete-li pravým tlačítkem myši
		na obrázek a&nbsp;z kontextové nabídky vyberete &quot;Blokovat obrázky
		z&nbsp;tohoto serveru&quot;. V&nbsp;možnostech &quot;Webové stránky&quot;
		můžete rovněž nastavit blokování všech obrázků nebo obrázků
		přicházejících mimo rodičovský server.</p>

		<p>Ve Firefoxu je k&nbsp;dispozici i&nbsp;opačná možnost: místo definice
		blokovaných serverů můžete zablokovat natahování obrazků zcela
		a&nbsp;následně nadefinovat výjimky.</p>

		<p class="note"><em>Poznámka:</em> Pro prohlížeč Mozilla Firefox
		existuje rozšíření
		<a href="https://addons.mozilla.org/extensions/moreinfo.php?id=10&amp;application=firefox&amp;version=1.0"
			title="Mozilla Update: Adblock"
			hreflang="en" class="l-en" lang="en">Adblock</a>
		rozšiřující možnosti blokování obrázků a&nbsp;umožňující pokročilé
		blokování reklamních proužků a&nbsp;ikon.</p>
	</dd>


	<dt id="vl-stahovani">Správce stahování</dt>
	<dd>
		<p>Prohlížeč Mozilla Firefox je vybaven správcem stahování,
		který zaznamenává všechny soubory, které jste stahovali. Umožní
		vám je otevřít nebo zobrazit v&nbsp;průzkumníkovi bez nutnosti
		procházet celý disk a&nbsp;soubor hledat. U&nbsp;každého právě
		stahovaného souboru zobrazuje průběh stahování. Toto stahování
		je možné dočasně pozastavit.</p>

		<p>Soubory jsou navíc na pozadí stahovány okamžitě po klepnutí
		na odkaz, na rozdíl od Internet Exploreru, který začne stahovat,
		až když zvolíte umístění souboru.</p>
	</dd>


	<dt id="vl-hledani-sit">Rozšířené možnosti hledání na Internetu</dt>
	<dd>
		<p>Firefox nabízí vyhledávací pole (rychle dostupné klávesovou
		zkratkou <kbd>Ctrl</kbd>+<kbd>K</kbd> nebo
		<kbd>Ctrl</kbd>+<kbd>E</kbd>), které vám umožní rychle
		vyhledávat na Internetu. Ve výchozím nastavení obsahuje
		vyhledávání na vyhledávači
		<a href="http://www.google.com/intl/cs/">Google</a>
		a&nbsp;několika dalších vyhledavačích (česká verze navíc obsahuje
		několik národních vyhledavačů). Můžete si snadno
		<a href="http://www.czilla.cz/doplnky/vyhledavani/">přidat další vyhledávací moduly</a>
		nebo si
		<a href="http://www.czilla.cz/doplnky/vyhledavani/vytvoreni.html">vytvořit vlastní</a>.
		Moduly jsou specifikovány ve formátu
		<a href="http://developer.apple.com/technotes/tn/tn1141.html"
			hreflang="en" class="l-en">Sherlock</a>
		od firmy
		<a href="http://www.apple.com/"
			hreflang="en" class="l-en">Apple</a>.</p>

		<p>Vyhledávat lze několika způsoby:</p>

		<ol>
			<li>Zadáním textu do vyhledávacího pole
			(<kbd>Ctrl</kbd>+<kbd>K</kbd>)</li>
			<li>Označením textu na stránce a&nbsp;volbou &quot;Hledat na
			webu&quot; z&nbsp;kontextové nabídky.</li>
		</ol>
	</dd>


	<dt id="vl-hesla">Správce hesel</dt>
	<dd>
		<p>Správce hesel si umí zapamatovat vámi zadávaná hesla
		a&nbsp;uživatelská jména a&nbsp;při další návštěvě předvyplnit
		formulář tak, abyste se mohli přímo přihlásit. Máte také možnost
		uložená hesla zobrazit.</p>

		<p class="note"><em>Poznámka:</em> Internet Explorer obsahuje také
		správce hesel, ale jeho funkčnost je omezena na uchování
		a&nbsp;jejich předvyplňování.</p>
	</dd>


	<dt id="vl-hlavni-heslo">Hlavní heslo a&nbsp;šifrování</dt>
	<dd>
		<p>Pokud budete chtít, můžete Mozilla Firefox nastavit tak, aby
		údaje, které o&nbsp;vás uchovává na disku, jako jsou třeba uložená
		hesla, šifroval a&nbsp;chránil je tzv. Hlavním heslem, které
		nastavíte v&nbsp;Možnostech v&nbsp;sekci &quot;Soukromí&quot;.</p>
	</dd>


	<dt id="vl-kurzor">Prohlížení kurzorem</dt>
	<dd>
		<p>Po stisku klávesy <kbd>F7</kbd> se vám na stránce objeví kurzor,
		který můžete použít k&nbsp;navigaci a&nbsp;výběru textu pouze pomocí šipek na
		klávesnici namísto používání myši.</p>

		<p>Více o&nbsp;<a href="/otazky/klavesove-zkratky/">ovládání pomocí
		klávesových zkratek</a> a&nbsp;<a href="/otazky/ovladani-mysi/">ovládání
		myší</a>...</p>

		<p class="note"><em>Poznámka:</em> Funkce není totožná s&nbsp;nastavením
		atributu <code>contenteditable=&quot;true&quot;</code> pro všechny elementy
		v&nbsp;Internet Exploreru, který rovněž zobrazí kurzor, ale narozdíl od
		navigace pomocí klávesnice slouží k&nbsp;editování textu.</p>
	</dd>


	<dt id="vl-fayt">Hledat text během psaní</dt>
	<dd>
		<p>Firexox vám umožňuje hledat text na stránce (hledání začnete
		klávesovu zkratkou <kbd>Ctrl</kbd>+<kbd>F</kbd> nebo klávesou
		<kbd>/</kbd>). Hned během psaní hledaného textu se jej Firefox
		snaží na stránce najít a&nbsp;označit.</p>

		<p>Více informací nabízí dokument
		<a href="http://www.mozilla.org/access/type-ahead/"
			title="Mozilla.org: Keyboard Feature &ndash; Find As You Type"
			hreflang="en" class="l-en" lang="en">Find As You Type</a>.</p>
	</dd>


	<dt id="vl-zvyrazneni">Zvýraznění hledaného textu</dt>
	<dd>
		<p>Prohlížeč Firefox vám umožňuje zvýraznit výskyty hledaného textu
		přímo na stránce. Zvýraznění hledaného textu na stránce se rychle
		stane vaším neocenitelným pomocníkem.</p>
	</dd>


	<dt id="vl-nastaveni-pisem">Rozšířená nastavení písem</dt>
	<dd>
		<p>Firefox poskytuje rozšířenou kontrolu nad písmy používanými na
		webových stránkách. Můžete si zvolit typ písma pro patkové,
		bezpatkové a&nbsp;neproporcionální písmo. Také si můžete nastavit
		minimální velikost písma, kterou je možné na stránce použít. Tyto
		nastavení provedete v&nbsp;Možnostec v&nbsp;kategorii
		&quot;Obecné&quot; &ndash; &quot;Písma &amp; Barvy&quot;</p>

		<p class="note"><em>Poznámka:</em> V&nbsp;Internet Exploreru máte možnost
		nastavit pouze jedno výchozí písmo pro webové stránky a&nbsp;jedno písmo
		pro textové dokumenty.</p>
	</dd>


	<dt id="vl-tisk">Rozšířené možnosti tisku</dt>
	<dd>
		<p>Při kontrole před tiskem v&nbsp;&quot;Náhledu tisku&quot;
		z&nbsp;nabídky &quot;Soubor&quot; můžete nastavit nejen okraje,
		záhlaví a&nbsp;zápatí, ale i&nbsp;nastavit měřítko tištěné webové
		stránky, což se hodí u&nbsp;širších stránek, které byste rádi
		vtěsnali na šířku jednoho listu papíru.</p>
	</dd>


	<dt id="vl-favicon">Rozšířená podpora ikonek webů (favicon)</dt>
	<dd>
		<p>Prohlížeč Firefox podporuje ikonky webů v&nbsp;řadě
		grafických formátů &ndash;
		<abbr title="Graphic Interchange Format" lang="en">GIF</abbr>,
		<abbr title="Joint Photographic Experts Group" lang="en">JPEG</abbr>,
		<abbr title="Portable Network Graphics" lang="en">PNG</abbr>,
		<abbr title="X BitMap" lang="en">XBM</abbr>,
		<span title="Windows BitMap">BMP</span>,
		ICO. To znamená, že tyto ikonky mohou být i&nbsp;animované. Firefox
		umí zobrazovat ikonky nejen v&nbsp;adresním řádku, u&nbsp;záložek
		ale i&nbsp;v&nbsp;záhlaví jednotlivých panelů.</p>

		<p class="note"><em>Poznámka:</em> Internet Explorer podporuje pouze
		formát BMP a&nbsp;ICO. Ikonka webu se navíc zobrazuje jen pokud máte web
		uložený mezi oblíbenými položkami.</p>
	</dd>


	<dt id="vl-instalace">Jednoduchá instalace a&nbsp;snadné odinstalování</dt>
	<dd>
		<p>Prohlížeč Mozilla Firefox můžete nainstalovat na jakýkoliv disk
		do jakéhokoliv adresáře. Můžete jej nainstalovat na síťový disk
		a&nbsp;spouštět vzdáleně. Na jeden počítač je možné nainstalovat více
		různých verzí Firefoxu. Nebo jej nemusíte instalovat vůbec a&nbsp;použít
		ZIP-archiv. Firefox můžete samozřejmě odinstalovat jako jakoukoliv
		bežnou aplikaci.</p>

		<p>Při instalaci není potřeba počítač restartovat.</p>
	</dd>


	<dt id="vl-predvolby">Rozšířené zacházení s&nbsp;předvolbami</dt>
	<dd>
		<p>Všechny předvolby Mozilla Firefox jsou uloženy v&nbsp;několika
		textových souborech (<tt>prefs.js</tt>, <tt>user.js</tt>), které se
		dají upravit v&nbsp;libovolném textovém editoru a&nbsp;tím
		modifikovat chování Firefoxu. Tyto předvolby, stejně jako soubor se
		záložkami a&nbsp;další, se dají jednoduše zazálohovat, překopírovat
		do jiného uživatelského profilu či na jiný počítač. Navíc jsou
		všechny předvolby přístupné jednoduše po napsání
		<strong>about:config</strong> do adresního řádku prohlížeče.</p>
	</dd>


	<dt id="vl-platformy">Podpora více platforem</dt>
	<dd>
		<p>Program Mozilla Firefox je dostupný pro řadu platforem.
		Na všech těchto platformách se používá stejně.</p>

		<p class="note"><em>Poznámka:</em> Internet Explorer podporuje pouze
		platformy MS&nbsp;Windows a&nbsp;Apple Macintosh a&nbsp;to s&nbsp;různými
		vlastnostmi. Microsoft také neplánuje
		<a href="http://news.com.com/2100-1045_3-1017126.html"
			title="CNET News: Microsoft: No new versions of IE for Mac"
			hreflang="en" class="l-en">vydání žádné nové verze IE</a>
		pro Apple Macintosh. Verze pro komerční UNIXy už
		<a href="http://www.microsoft.com/unix/ie/default.asp"
			title="Microsoft.com: Internet Explorer for UNIX"
			hreflang="en" class="l-en">není podporována</a>.</p>
	</dd>


	<dt id="vl-prubezne">Průběžné zobrazování</dt>
	<dd>
		<p>Díky kvalitnímu vykreslovacímu jádru Gecko může Firefox
		zobrazovat stránky již během jejich stahování a&nbsp;to
		i&nbsp;v&nbsp;případě rozsáhlých tabulek.</p>
	</dd>


	<dt id="vl-predstahovani">Předstahování odkazů</dt>
	<dd>
		<p>Prohlížeč Mozilla Firefox podporuje metodu předstahování odkazů
		(angl. <em lang="en">link prefetching</em>). Pokud autor webové
		stránky specifikuje pomocí značky <code>link</code> dokumenty nebo
		obrázky, na které bude chtít návštěvník stránky pravděpodobně přejít
		(tj. další stránka v&nbsp;pořadí nebo velký obrázek), začne Firefox po
		stažení hlavního dokumentu předstahovávat na pozadí i&nbsp;tyto. Při
		předstahování Firefox stahuje pouze odkazy autorem stránky k&nbsp;tomuto
		účelu označené. Více se o&nbsp;předstahování odkazů dozvíte v&nbsp;dokumentu
		Darina Fishera
		<a href="http://www.mozilla.org/projects/netlib/Link_Prefetching_FAQ.html"
			hreflang="en" class="l-en">Link Prefetching
			<abbr title="Frequently Asked Questions" lang="en">FAQ</abbr></a>.</p>
	</dd>


	<dt id="vl-napoveda">Zobrazování kontextové nápovědy</dt>
	<dd>
		<p>Firefox zobrazuje kontextovou nápovědu prostřednictvím
		plovoucích tipů u&nbsp;všech prvků webové stránky, které obsahují
		atribut <code>title</code>.</p>
	</dd>


	<dt id="vl-pluginy">Nastavení zásuvných modulů (pluginů)</dt>
	<dd>
		<p>Mozilla Firefox vám umožní nastavit, jak se bude zacházet
		s&nbsp;dokumenty jako
		<span lang="en">Adobe Acrobat</span>,
		<span lang="en">Macromedia Flash</span> či
		<span lang="en">QuickTime Movie</span>.
		V&nbsp;Možnostech v&nbsp;části &quot;Stahování&quot; si můžete pro každý typ
		dat nastavit, zda budou otevírána přímo v&nbsp;prohlížeči,
		v&nbsp;asociované aplikaci či uložena na disk.</p>
	</dd>


	<dt id="vl-idn">Doménová jména s&nbsp;národními znaky</dt>
	<dd>
		<p>Mozilla Firefox plně podporuje doménová jména s&nbsp;národními znaky
		<span class="dnpa">
		(Internationalizing Domain Names &ndash;
		<abbr title="Internationalizing Domain Names" lang="en">IDN</abbr>)
		</span>
		a&nbsp;tak vám umožňuje prohlížet webové stránky i&nbsp;z domén jako
		<a href="http://www.omvärlden.nu/"
			hreflang="sv" class="l-sv">omvärlden.nu</a> či
		<a href="http://www.bücher.de/"
			hreflang="de" class="l-de">bücher.de</a> či
		<a href="http://www.brüel.com/"
			hreflang="da" class="l-da">brüel.com</a>.</p>
	</dd>


	<dt id="vl-alpha-png">Podpora alpha průhlednosti
		u&nbsp;<abbr title="Portable Network Graphics" lang="en">PNG</abbr></dt>
	<dd>
		<p>Mozilla Firefox plně podporuje alpha průhlednost u&nbsp;formátu
		<abbr title="Portable Network Graphics" lang="en">PNG</abbr>
		&ndash; ukázku můžete vidět v&nbsp;
		<a href="http://www.libpng.org/pub/png/png-rgba32.html"
			title="libpng.org: 32-bit RGBA PNGs"
			hreflang="en" class="l-en">jednoduché demonstraci</a>.</p>
	</dd>


	<dt id="vl-abbr-acronym">Podpora značek ABBR a&nbsp;ACRONYM</dt>
	<dd>
		<p>Značky <code title="zkrácený tvar slova nebo fráze, který celý
		tvar nahrazuje">abbr</code> a&nbsp;<code title="slovo vzniklé z&nbsp;prvního
		písmene či písmen důležitých slov složeného termínu">acronym</code>
		jsou zobrazovány podtrženě tečkovaně a&nbsp;vysvětlení významu zkratky či
		akronymu se zobrazí pří najetí kurzoru nad zkratku jako kontextová
		nápověda (je-li vysvětlení definováno).</p>
	</dd>


	<dt id="vl-zdroj">Zdrojový kód stránky</dt>
	<dd>
		<p>Po stisku <kbd>CTRL</kbd>+<kbd>U</kbd> se vám otevře okno
		zobrazující zdrojový kód stránky barevně rozlišený dle syntaxe.
		Okno slouží pro snadnou a&nbsp;rychlou orientaci ve
		zdrojovém kódu stránky a&nbsp;je poskytováno přímo prohlížečem.</p>

		<p class="note"><em>Poznámka:</em> V&nbsp;Internet Exploreru máte možnost
		si prohlédnout zdrojový kód stránky vyvoláním externí aplikace
		Notepad. V případě, že tento kód obsahuje konce řádků systému UNIX
		nebo jiné kódování češtiny než Windows&nbsp;1250, zobrazí se vám
		zdrojový kód nečitelně a&nbsp;to v&nbsp;důsledku nedokonalosti programu Notepad.</p>
	</dd>


	<dt id="vl-zdroj-vyberu">Zdrojový kód výběru</dt>
	<dd>
		<p>Vyberete-li část textu na stránce a&nbsp;z kontextové nabídky zvolíte
		&quot;Zobrazit zdrojový kód výběru&quot;, otevře se vám okno se
		zdrojovým kódem vybraného textu. Zobrazený kód není identický
		s&nbsp;kódem obdrženým od webového serveru, ale je kódem po provedení
		transformací pomocí
		<abbr title="eXtensible Stylesheet Language Transformation" lang="en">XSLT</abbr>
		a skriptovacích jazyků.</p>
	</dd>


	<dt id="vl-prvky-stranky">Informace o&nbsp;jednotlivých prvcích webové stránky</dt>
	<dd>
		<p>Vyvoláte-li kontextovou nabídku nad některým z&nbsp;prvků webové
		stránky (např. obrázek, odkaz, atd.) a&nbsp;vyberete položku
		&quot;Vlastnosti&quot;, otevře se vám dialog zobrazující dostupné
		vlastnosti vybraného prvku stránky.</p>
	</dd>


	<dt id="vl-mime">Správné nakládání s&nbsp;typy
		<abbr title="Multipurpose Internet Mail Extension" lang="en">MIME</abbr>
		souborů</dt>
	<dd>
		<p>Mozilla Firefox vždy nakládá se soubory stahovanými z&nbsp;webového
		serveru podle typu
		<abbr title="Multipurpose Internet Mail Extension" lang="en">MIME</abbr>,
		který webový server posílá v&nbsp;hlavičce odpovědi spolu se stahovaným
		souborem.</p>

		<p>Důvodem tohoto postupu je vyšší míra bezpečnosti a&nbsp;fakt, že řada
		přípon souborů je totožná pro různé typy dokumentů. Např. přípona
		&quot;rpm&quot; se používá pro multimediální soubor typu Real
		Player, stejně jako pro instalační balíček systému Linux. Jistě by
		se vám jako uživatelům nelíbilo, kdyby se vám Firefox automaticky
		snažil přehrát instalační balíček v&nbsp;přehrávači Real. Více informací
		získáte na stránce
		<a href="http://ppewww.ph.gla.ac.uk/~flavell/www/content-type.html"
			hreflang="en" class="l-en" lang="en">The Content-type Saga</a>.</p>
	</dd>


	<dt id="vl-mime-xhtml">Podpora typů
		<abbr title="Multipurpose Internet Mail Extension" lang="en">MIME</abbr>
		pro dokumenty
		<abbr title="Xtensible HyperText Markup Language" lang="en">XHTML</abbr></dt>
	<dd>
		<p>Mozilla Firefox podporuje jeden z&nbsp;navrhovaných typů
		<abbr title="Multipurpose Internet Mail Extension" lang="en">MIME</abbr>
		pro dokumenty
		<abbr title="Extensible Hypertext Markup Language" lang="en">XHTML</abbr>
		&quot;application/xhtml+xml&quot;. Dokument v&nbsp;jazyce
		<abbr title="Extensible Hypertext Markup Language" lang="en">XHTML</abbr>
		obsahující správnou hlavičku můžete zaslat rovněž jako &quot;text/xml&quot;
		nebo &quot;text/html&quot;. V&nbsp;opačném případě se Firefox zachová dle
		specifikovaného typu &ndash; tj. např. chápe dokument jako by byl napsán
		pouze v&nbsp;jazyce
		<abbr title="Hypertext Markup Language" lang="en">HTML</abbr>.</p>
	</dd>


	<dt id="vl-proudove-http">Proudové zpracování
		<abbr title="HyperText Transfer Protocol" lang="en">HTTP</abbr></dt>
	<dd>
		<p>Proudové zpracování
		<abbr title="HyperText Transfer Protocol" lang="en">HTTP</abbr>
		požadavků umožňuje zkrátit dobu potřebnou ke stažení všech prvků
		webové stránky. Prohlížeč nezískává každý objekt stránky samostatným
		dotazem, ale naráz.</p>

		<p>Více informací naleznete v&nbsp;dokumentu
		<a href="http://www.mozilla.org/projects/netlib/http/pipelining-faq.html"
			hreflang="en" class="l-en" lang="en">
			<abbr title="HyperText Transfer Protocol" lang="en">HTTP</abbr>/1.1 Pipelining
			<abbr title="Frequently Asked Questions" lang="en">FAQ</abbr></a>.</p>
	</dd>


	<dt id="vl-js-konzola">Konzola jazyka JavaScript</dt>
	<dd>
		<p>Konzola jazyka JavaScript slouží především pro webové vývojáře.
		Zobrazuje všechna chybová hlášení prohlížeče při zpracování skriptu
		jazyka JavaScript. V&nbsp;seznamu si můžete zobrazit i&nbsp;varování při
		zpracovávání skriptů.</p>
	</dd>


	<dt id="vl-dom-inspektor"><acronym title="Document Object Model" lang="en">DOM</acronym> Inspektor</dt>
	<dd>
		<p>Při instalaci Firefoxu si můžete zvolit i&nbsp;instalaci nástrojů pro
		webové vývojáře a&nbsp;tak získat
		<acronym title="Document Object Model" lang="en">DOM</acronym>
		Inspektor. Zobrazuje strukturu dokumentu ve stromovém náhledu.
		Klepnutím na libovolný element se vám tento element označí
		v&nbsp;dolním okně. Inspektor rovněž zobrazuje atributy značek
		<abbr title="Hypertext Markup Language" lang="en">HTML</abbr>,
		vlastnosti JavaScriptových objektů,	rozměry jednotlivých boxů,
		okraje a&nbsp;další vlastnosti
		<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>,
		nabízí i&nbsp;detailní přehled pravidel předpisů stylů, které k&nbsp;aktuálním
		hodnotám vedly. Inspektor umožňuje upravovat strukturu dokumentu
		i&nbsp;hodnoty vlastností
		<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>.</p>
	</dd>


	<dt id="vl-podpora-css">Rozšířená podpora
		<abbr title="Cascading Style Sheets" lang="en">CSS</abbr></dt>
	<dd>
		<p>Gecko, zobrazovací jádro používané Mozilla Firefoxem, obsahuje
		vynikající podporu vlastností
		<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>.
		Z&nbsp;těch nejzajímavějších, které Internet Explorer stále neumí,
		vybíráme:</p>

		<dl>
			<dt><a href="http://www.w3.org/TR/REC-CSS2/visudet.html#min-max-widths"
				title="W3C: CSS 2 &ndash; Visual formatting model details"
				hreflang="en" class="l-en">min/max-width</a></dt>
			<dd>Nastavení minimální nebo maximální šířky prvku webové stránky.</dd>

			<dt><a href="http://www.w3.org/TR/REC-CSS2/visudet.html#min-max-heights"
				title="W3C: CSS 2 &ndash; Visual formatting model details"
				hreflang="en" class="l-en">min/max-height</a></dt>
			<dd>Nastavení minimální nebo maximální výšky prvku webové stránky.</dd>

			<dt><a href="http://www.w3.org/TR/REC-CSS2/visuren.html#fixed-positioning"
				title="W3C: CSS 2 &ndash; Visual formatting model"
				hreflang="en" class="l-en">position:fixed</a></dt>
			<dd>Umožňující fixovat pozici jednoho prvku k&nbsp;rodičovskému prvku
			webové stránky.</dd>

			<dt><a href="http://www.w3.org/TR/REC-CSS2/tables.html#q2"
				title="W3C: CSS 2 &ndash; Tables"
				hreflang="en" class="l-en">display:table</a></dt>
			<dd>Vytvoření uživatelské tabulky bez potřeby užití značek
				<abbr title="HyperText Markup Language" lang="en">HTML</abbr>
				pro tabulky.</dd>

			<dt><a href="http://www.w3.org/TR/REC-CSS2/generate.html"
				title="W3C: CSS 2 &ndash; Generated content, automatic numbering, and lists"
				hreflang="en" class="l-en">:before, :after</a></dt>
			<dd>Pseudotřídy sloužící k&nbsp;automatickému zařazování prvků webové
			stránky řízené pomocí
			<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>.</dd>

			<dt><a href="http://www.w3.org/TR/css3-color/#transparency"
				title="W3C: CSS 3 &ndash; Color Module"
				hreflang="en" class="l-en">opacity</a></dt>
			<dd>Nastavní úrovně průsvitnosti prvku.</dd>

			<dt>user-focus, user-select, border-radius</dt>
			<dd>... a&nbsp;mnoho dalších
			<a href="http://www.xulplanet.com/references/elemref/ref_StyleProperties.html"
				title="XULPlanet: Style Properties"
				hreflang="en" class="l-en">rozšiřujících vlastností</a>
				používaných především v&nbsp;motivech vzhledu.</dd>
		</dl>
	</dd>


	<dt id="vl-selektory">Podpora selektorů
		<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>&nbsp;2 a
		<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>&nbsp;3</dt>
	<dd>
		<p>Mozilla Firefox podporuje všechny
		<a href="http://www.w3.org/TR/REC-CSS2/selector.html"
			title="W3C: CSS 2 Selectors"
			hreflang="en" class="l-en">selektory
			<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>
			Level&nbsp;2</a>
		a&nbsp;některé selektory připravované specifikace
		<a href="http://www.w3.org/TR/2001/CR-css3-selectors-20011113/"
			title="W3C: CSS 3 Selectors"
			hreflang="en" class="l-en">
			<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>
			Level&nbsp;3</a>, čímž umožňuje autorům webových stránek
		efektivnější vyjádření jejich představ.</p>
	</dd>


	<dt id="vl-xml">Podpora standardů pro zobrazování a&nbsp;práci
		s&nbsp;<abbr title="Extensible Makup Language" lang="en">XML</abbr>
		dokumenty</dt>
	<dd>
		<p>Prohlížeč Mozilla Firefox umí zobrazovat dokumenty v&nbsp;jazyce
		<abbr title="eXtensible Markup Language" lang="en">XML</abbr>
		podle přidruženého souboru se styly
		<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>
		a&nbsp;<abbr title="Extensible Stylesheet Language Transformation" lang="en">XSLT</abbr>.
		Firefox rovněž podporuje specifikaci
		<a href="http://www.w3.org/TR/xmlbase/"
			title="W3C: XML Base"
			hreflang="en" class="l-en"><abbr
			title="Extensible Makup Language" lang="en">XML</abbr>
			Base</a>
		<abbr title="eXtensible Markup Language" lang="en">XML</abbr>
		dokumentu. Zahrnuta je i&nbsp;podpora
		<a href="http://lists.w3.org/Archives/Public/www-xml-linking-comments/2001AprJun/att-0074/01-NOTE-FIXptr-20010425.htm"
			title="W3C: Fragment Identifier for XML"
			hreflang="en" class="l-en">FIXPtr</a>
		a&nbsp;<a href="http://www.w3.org/TR/xlink/"
			title="W3C: XML Linking Language Version 1.0"
			hreflang="en" class="l-en">XLink</a>
		pro odkazování na jednotlivé části
		<abbr title="eXtensible Markup Language" lang="en">XML</abbr>
		dokumentu a&nbsp;mezi
		<abbr title="eXtensible Markup Language" lang="en">XML</abbr>
		dokumenty. Firefox má i&nbsp;podporu jednoduchého
		<abbr title="Application Program Interface" lang="en">API</abbr>
		pro protokol
		<a href="http://www.xmlrpc.com/spec"
			title="XML-RPC Specification"
			hreflang="en" class="l-en">
			<abbr title="eXtensible Markup Language" lang="en">XML</abbr>-<abbr
			title="Remote Procedure Calling" lang="en">RPC</abbr></a>.</p>
	</dd>


	<dt id="vl-soap">Vestavěné
		<abbr title="Simple Object Access Protocol" lang="en">SOAP</abbr>
		<abbr title="Application Program Interface" lang="en">API</abbr></dt>
	<dd>
		<p>Značně rozsáhlá množina
		<a href="http://www.andromeda.nl/WebEngineering/Soap_Scripts_in_Mozilla.html"
			title="SOAP Scripts in Mozilla"
			hreflang="en" class="l-en">funkcí
			<abbr title="Simple Object Access Protocol" lang="en">SOAP</abbr></a>
		je v&nbsp;Mozilla Firefoxu k&nbsp;dispozici bez nutnosti použití dalších knihoven.</p>
	</dd>


	<dt id="vl-dom">Rozšířená podpora pro
		<acronym title="Document Object Model" lang="en">DOM</acronym></dt>
	<dd>
		<p>Téměř ucelená podpora
		<a href="http://www.w3.org/TR/2000/REC-DOM-Level-2-Core-20001113/changes.html"
			title="W3C: DOM Level 2 Core &ndash; Appendix A: Changes"
			hreflang="en" class="l-en" lang="en">
			<acronym title="Document Object Model" lang="en">DOM</acronym>
			Level&nbsp;0/<acronym
			title="Document Object Model" lang="en">DOM</acronym> Level&nbsp;1 Core</a>.
		Podpora jmenných prostorů
		v&nbsp;<acronym title="Document Object Model" lang="en">DOM</acronym>
		Level&nbsp;2 a&nbsp;odpovídajících funkcí pro práci s&nbsp;nimi. Téměř ucelená
		podpora standardního
		<a href="http://www.w3.org/TR/2000/REC-DOM-Level-2-Style-20001113/"
			title="W3C: Document Object Model Level 2 Style Specification"
			hreflang="en" class="l-en">rozhraní
			<acronym title="Document Object Model" lang="en">DOM</acronym>
			Level&nbsp;2 Views pro vzhled</a>.
		Podpora
		<acronym title="Document Object Model" lang="en">DOM</acronym> Level&nbsp;2 rozhraní
		<a href="http://www.w3.org/TR/2000/REC-DOM-Level-2-Traversal-Range-20001113/traversal.html#TreeWalker"
			title="W3C: Document Object Model Traversal &ndash; TreeWalker"
			hreflang="en" class="l-en" lang="en">TreeWalker</a>
		určeného pro procházení stromem dokumentu. Podpora
		<acronym title="Document Object Model" lang="en">DOM</acronym>
		Level&nbsp;2 rozhraní
		<a href="http://www.w3.org/TR/2000/REC-DOM-Level-2-Traversal-Range-20001113/ranges.html"
			title="W3C: Document Object Model Range"
			hreflang="en" class="l-en" lang="en">Range</a>
		pro práci s&nbsp;bloky prvků. A&nbsp;podpora pro
		<acronym title="Document Object Model" lang="en">DOM</acronym>
		Level&nbsp;3 rozhraní
		<a href="http://www.w3.org/TR/2002/WD-DOM-Level-3-XPath-20020328/"
			title="W3C: Document Object Model Level 3 XPath Specification"
			hreflang="en" class="l-en" lang="en">XPath</a>
		spolu s&nbsp;podporou standardního
		<a href="http://www.w3.org/TR/2000/REC-DOM-Level-2-Events-20001113/"
			title="W3C: Document Object Model Level 2 Events Specification"
			hreflang="en" class="l-en">zpracování událostí</a>.</p>
	</dd>


	<dt id="vl-data-url">Podpora vkládání dat do
		<abbr title="Uniform Resource Locator" lang="en">URL</abbr></dt>
	<dd>
		<p>Firefox podporuje nový typ
		<abbr title="Uniform Resource Locator" lang="en">URL</abbr>
		&ndash; <code>data</code>, umožňující vkládání malých částí dat přímo do
		dokumentu stejným způsobem, jako by byly vkládány z&nbsp;externího
		umístění. Více&nbsp;v
		<a href="http://www.ietf.org/rfc/rfc2397.txt"
			hreflang="en" class="l-en"
			title="IETF.org: The &quot;data&quot; URL scheme">
			<abbr title="Request For Comment" lang="en">RFC</abbr>&nbsp;2397</a>.</p>
	</dd>
</dl>
</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Přehled vlastností a&nbsp;související odkazy</h2>

	<h3 class="first">Přehled vlastností</h3>

	<ul>
		<li><a href="#vl-panely">Prohlížení v&nbsp;panelech</a></li>
		<li><a href="#vl-kontrola-skriptu">Rozšířená kontrola skriptování</a></li>
		<li><a href="#vl-blokovani-popup">Blokování nevyžádaných vyskakovacích oken</a></li>
		<li><a href="#vl-postranni-lista">Postranní lišta a&nbsp;jednoduché zobrazení stránky v&nbsp;postranní liště</a></li>
		<li><a href="#vl-velikost-textu">Větší kontrola nad velikostí textu na stránce</a></li>
		<li><a href="#vl-info-o-strance">Dialog Informace o&nbsp;stránce</a></li>
		<li><a href="#vl-vyber-stylu">Možnost výběru stylu stránky</a></li>
		<li><a href="#vl-motiv-vzhledu">Motiv vzhledu</a></li>
		<li><a href="#vl-zalozky">Správce záložek a&nbsp;práce se záložkami</a></li>
		<li><a href="#vl-rss">Aktuální záložky, načítání
			<abbr title="Really Simple Syndication" lang="en">RSS</abbr>
			zdrojů</a></li>
		<li><a href="#vl-domovska-stranka">Rozšířená domovská stránka</a></li>
		<li><a href="#vl-cookies">Správce cookies</a></li>
		<li><a href="#vl-blokovani-obrazku">Blokování obrázků</a></li>
		<li><a href="#vl-stahovani">Správce stahování</a></li>
		<li><a href="#vl-hledani-sit">Rozšířené možnosti hledání na Internetu</a></li>
		<li><a href="#vl-hesla">Správce hesel</a></li>
		<li><a href="#vl-hlavni-heslo">Hlavní heslo a&nbsp;šifrování</a></li>
		<li><a href="#vl-kurzor">Prohlížení kurzorem</a></li>
		<li><a href="#vl-fayt">Hledat text během psaní</a></li>
		<li><a href="#vl-zvyrazneni">Zvýraznění hledaného textu</a></li>
		<li><a href="#vl-nastaveni-pisem">Rozšířená nastavení písem</a></li>
		<li><a href="#vl-tisk">Rozšířené možnosti tisku</a></li>
		<li><a href="#vl-favicon">Rozšířená podpora ikonek webů (favicon)</a></li>
		<li><a href="#vl-instalace">Jednoduchá instalace a&nbsp;snadné odinstalování</a></li>
		<li><a href="#vl-predvolby">Rozšířené zacházení s&nbsp;předvolbami</a></li>
		<li><a href="#vl-platformy">Podpora více platforem</a></li>
		<li><a href="#vl-prubezne">Průběžné zobrazování</a></li>
		<li><a href="#vl-predstahovani">Předstahování odkazů</a></li>
		<li><a href="#vl-napoveda">Zobrazování kontextové nápovědy</a></li>
		<li><a href="#vl-pluginy">Nastavení zásuvných modulů (pluginů)</a></li>
		<li><a href="#vl-idn">Doménová jména s&nbsp;národními znaky</a></li>
		<li><a href="#vl-alpha-png">Podpora alpha průhlednosti
			u&nbsp;<abbr title="Portable Network Graphics" lang="en">PNG</abbr></a></li>
		<li><a href="#vl-abbr-acronym">Podpora značek ABBR a&nbsp;ACRONYM</a></li>
		<li><a href="#vl-zdroj">Zdrojový kód stránky</a></li>
		<li><a href="#vl-zdroj-vyberu">Zdrojový kód výběru</a></li>
		<li><a href="#vl-prvky-stranky">Informace o&nbsp;jednotlivých prvcích webové stránky</a></li>
		<li><a href="#vl-mime">Správné nakládání s&nbsp;typy
			<abbr title="Multipurpose Internet Mail Extension" lang="en">MIME</abbr>
			souborů</a></li>
		<li><a href="#vl-mime-xhtml">Podpora typů
			<abbr title="Multipurpose Internet Mail Extension" lang="en">MIME</abbr>
			pro dokumenty
			<abbr title="Xtensible HyperText Markup Language" lang="en">XHTML</abbr></a></li>
		<li><a href="#vl-proudove-http">Proudové zpracování
			<abbr title="HyperText Transfer Protocol" lang="en">HTTP</abbr></a></li>
		<li><a href="#vl-js-konzola">Konzola jazyka JavaScript</a></li>
		<li><a href="#vl-dom-inspektor"><acronym title="Document Object Model" lang="en">DOM</acronym>
			Inspektor</a></li>
		<li><a href="#vl-podpora-css">Rozšířená podpora
			<abbr title="Cascading Style Sheets" lang="en">CSS</abbr></a></li>
		<li><a href="#vl-selektory">Podpora selektorů
			<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>&nbsp;2
			a&nbsp;<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>&nbsp;3</a></li>
		<li><a href="#vl-xml">Podpora standardů pro zobrazování a&nbsp;práci
			s&nbsp;<abbr title="Extensible Makup Language" lang="en">XML</abbr>
			dokumenty</a></li>
		<li><a href="#vl-soap">Vestavěné
			<abbr title="Simple Object Access Protocol" lang="en">SOAP</abbr>
			<abbr title="Application Program Interface" lang="en">API</abbr></a></li>
		<li><a href="#vl-dom">Rozšířená podpora pro
			<acronym title="Document Object Model" lang="en">DOM</acronym></a></li>
		<li><a href="#vl-data-url">Podpora vkládání dat do
			<abbr title="Uniform Resource Locator" lang="en">URL</abbr></a></li>
	</ul>

	<h3 class="first">Více advokacie</h3>
	<dl>
		<dt><a href="../">Důvody pro změnu prohlížeče</a></dt>
		<dd>Několik dobrých důvodů, proč vyměnit starý prohlížeč za Mozilla
		Firefox.</dd>

		<dt><a href="http://www.czilla.cz/produkty/firefox/firefox-vs-ie.html">Mozilla Firefox vs. IE</a></dt>
		<dd>13 důvodů proč místo Internet Exploreru používat Mozilla Firefox.</dd>

		<dt><a href="http://www.czilla.cz/podpora/bezpecnost-mozilly-a-odvozenych-prohlizecu.html">Bezpečnost a&nbsp;prohlížeče Mozilla</a></dt>
		<dd>Prohlížeč Mozilla Firefox je z&nbsp;bezpečnostního hlediska správnou
		volbou.</dd>
	</dl>

</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $web_name; ?></a> &gt;
		<a href="../">Proč přejít?</a> &gt;
		<strong>Co MSIE neumí a&nbsp;Firefox ano</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
