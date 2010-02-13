<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Nastavení Mozilla Firefoxu';
	$page->headline = array('Nastavení Mozilla Firefoxu','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>


<div>Tento dokument vysvětluje všechna nastavení dostupná v dialogu <span class="win">Možnosti</span><span                             class="unix">Předvolby</span> Mozilla Firefoxu.</div>

<div class="contentsBox">V této kapitole:
  <ul>
    <li><a href="#general_options">Obecné</a>
    <ul>
      <li><a href="#fonts_and_colors">Písma &amp; Barvy</a></li>
      <li><a href="#languages">Jazyky</a></li>
      <li><a href="#connection_settings">Spojení</a></li>
    </ul>
    </li>
    <li><a href="#privacy_options">Soukromí</a></li>
    <li><a href="#web_features_options">Webové stránky</a></li>
    <li><a href="#downloads_options">Stahování</a></li>
    <li><a href="#advanced_options">Rozšířené nastavení</a></li>
  </ul>
</div>

<h2 id="general_options">Obecné</h2>

  <p><img width="502" height="353" alt="Panel Obecné" src="../images/help-opt_general.png"/></p>
  <h3 id="home_page">Domovská stránka</h3>
  <p>Zde můžete určit webovou stránku nebo skupinu záložek, kterou Firefox zobrazí po spuštění či po klepnutí na tlačítko Domů.</p>

  <p>Klepněte na tlačítko <em>Použít aktuální stránku</em> pro výběr stránky, kterou právě prohlížíte.
		Je možno vybrat <strong>několik domácích stránek</strong>. Je-li otevřeno více panelů, toto tlačítko nastaví <strong>celou skupinu panelů</strong> jako startovací stránku.</p>

  <p>Pro určení domovské stránky pomocí záložek klepněte na tlačítko <em>Použít záložku...</em>. Je možné vybrat celý adresář záložek, který chcete použít!</p>

  <p>Pokud si nepřejete načítat domovskou stránku, klepněte na tlačítko <em>Použít prázdnou stránku</em>.</p>

  <h3 id="fonts_and_colors">Písma &amp; Barvy</h3>
  <p><img width="331" height="296" alt="Panel Písma a Barvy" src="../images/help-opt_fontsandcolors.png"/></p>
  <p>Klepněte na tlačítko <em>Písma &amp; Barvy...</em> pro změnu výchozích písem a barev užívaných prohlížečem Firefox.</p>

  <p><strong>Písma pro:</strong><br/>
    Standardně jsou webové stránky zobrazeny s použitím výchozí sady písem vašeho prohlížeče; nebo písmy zvolenými autorem webové stránky.</p>
  <p> Změnu výchozích písem proveďte následujícím způsobem:</p>
    <ol>
      <li>Z roletové nabídky <em>Znaková sada</em> zvolte znakovou sadu. Například, pro nastavení výchozích písem pro znakovou sadu Západní, zvolte z nabídky položku <em>Západní</em>.</li>
      <li>Určete, zda proporcionální text má být patkové (jako &quot;Times New Roman&quot;) nebo bezpatkové (jako &quot;Arial&quot;). Pak určete velikost písma pro proporcionální text.</li>
      <li>Určete písmo, které chcete použít pro patková, bezpatková a <em>neproporcionální</em> písma. Je možno změnit velikost <code>Neproporcionálního písma</code>.</li>
    </ol>
    <p>Můžete změnit rozlišení obrazovky, které je standardně 96dpi.</p>

    <p>Dále lze nastavit také minimální velikost fontů použitých na obrazovce. To může být užitečné na některých stránkách, kde jsou velmi malé fonty, které jsou stěží čitelné.</p>

    <p><strong>Text a pozadí</strong><br/>
    Zde můžete změnit výchozí barvy textu a pozadí, které se použijí pro webové stránky, které neposkytují informaci o barvách. Barvy zvolíte klepnutím na vzorky barev.</p>

    <p><em>Použít systémové barvy</em><br/>
      Vyberte tuto možnost, chcete-li použít barvy určené v nastavení OS namísto barev určených výše.</p>

    <p><strong>Barvy odkazů</strong><br/>
    Zde můžete změnit výchozí barvu pro odkazy. Barvy zvolíte klepnutím na vzorky barev.</p>

    <p><em>Podtrhávat odkazy</em><br/>
    Ve výchozím nastavení jsou odkaz na webových stránkách podtrhávány. Pro zakázání tohoto nastavení odškrtněte tuto volbu. Povšimněte si, že řada stránek určuje ve stylech vlastní pravidla a tato volba nemá žádný efekt na tyto stránky.</p>

    <p><strong>Vždy používat mé:</strong><br/>
    <em>Písma</em><br/>
      Podle výchozího nastavení Firefox používá písma určené autorem webové stránky. Po povolení této možnosti budou všechny zobrazené stránky používat vaše výchozí písma namísto písem definovaných autorem.</p>

    <p><em>Barvy</em><br/>
      Podle výchozího nastavení Firefox používá barvy určené autorem webové stránky. Po povolení této možnosti  budou všechny zobrazené webové stránky používat vaše výchozí barvy namísto barev definovaných autorem.</p>

    <h3 id="languages">Jazyky</h3>
    <p><img width="306" height="262" alt="Dialog s nastavením jazyků" src="../images/help-opt_languages.png"/></p>
    <p>Některé webové stránky jsou nabízeny ve více než jednom jazyce. Klepnete na tlačítko <em>Jazyky</em> pro určení preferovaných jazyků.</p>

    <p><strong>Volba jazyku</strong><br/>
      Pro přidání jazyku klepněte na <em>Zvolte jazyk, který chcete přidat...</em>, zvolte jazyk a klepněte na tlačítko <em>Přidat</em>. Odstranění jazyku provedete tak, že jej vyberete ze seznamu aktivních a klepnete na tlačítko <em>odebrat</em>.</p>

    <p>Můžete přeřadit jazyky pro určení priorit jejich použití tehdy, když je stránka dostupná ve dvou či více vámi vybraných jazycích. Učiníte tak použitím tlačítek <em>Přesunout výše</em> a <em>Přesunout níže</em>.
    </p>

    <p><strong>Znaková sada</strong><br/>
Znaková sada, která je zde vybrána, je použita k zobrazení webových stránek tehdy, když není určeno kódování, která má být použito.</p>

    <h3 class="noMac" id="default_browser">Výchozí prohlížeč</h3>
    <p class="noMac">V systému Windows můžete Firefox zvolit jako výchozí prohlížeč klepnutím na tlačítko <em>Zkontrolovat</em>. To zajistí, že Firefox bude používán jako aplikace, která bude zobrazovat webové stránky či otevře HTML soubor, když na něj dvojklepněte.</p>

    <h3 id="connection_settings">Nastavení spojení</h3>

    <p><img width="379" height="313" alt="Dialog s nastavením připojení" src="../images/help-opt_connection.png"/></p>

    <p>Vaše organizace či poskytovat připojení k Internetu vám může nabízet či vyžadovat použití proxy serveru. Proxy server pracuje jako prostředník mezi vaším počítačem a Internetem. Interpretuje všechny vaše požadavky na přístup k Internetu a zjišťuje, zda-li je nemůže obsloužit sama z vlastní diskové paměti. Proxy servery jou též použity k lepšímu výkonu, filtrování požadavků a skrývání vašeho počítače před prostředím Internetu. Tím získáváte vyšší bezpečnost. Proxy servery jsou často součástí firemních firewallů.</p>

    <strong>Nastavení proxy pro přístup na Internet</strong>

    <dl>
      <dt>Přímé připojení k síti</dt>
      <dd>Toto je výchozí nastavení. Zvolte jej, pokud nechcete používat proxy.</dd>

      <dt>Ruční konfigurace proxy serverů</dt>
      <dd>Zvolte tuto možnost pokud neznáte adresu proxy (URL). Informujte se u vašeho správce systému na jména a čísla portů proxy serverů pro jednotlivé sítě a vložte informace do příslušných polí.</dd>

      <dt>Automatická detekce nastavení</dt>
      <dd>Pokud na vaší síti existuje konfigurační soubor proxy, zeptejte se správce systému na jeho URL a zadejte ji sem. Pro načtení nastavení klepněte na tlačítko <em>Znovu načíst</em>.</dd>
    </dl>

<h2 id="privacy_options">Soukromí</h2>

  <p><img width="436" height="306" alt="Nastavení soukromí" src="../images/help-opt_privacy.png"/></p>

  <p>Panel soukromí obsahuje položky týkající se vašeho soukromí. Při prohlížení webů ukládá prohlížeč informace o tom, kde jste byli a další statistiky. Klepnutím na tlačítko <em>Vymazat</em> pro vymazání informací v jednotlivé sekci. Je možno vymazat všechny informace klepnutím na tlačítko <em>Vymazat vše</em>. Vymazání informací je nutno potvrdit v dialogovém okně.</p>

  <p>Podrobné možnosti každé sekce lze zobrazit klepnutím na malé tlačítko + nebo klepnutím na sekci.</p>

  <h3 id="history">Historie</h3>
  <p>Zde lze určit, jak dlouho si bude prohlížeč pamatovat stránky, které jste navštívili. Výchozí nastavení je 9 dní.</p>

  <h3 id="saved_form_information">Informace z formulářů</h3>
  <p><em>Ukládá informace vložené do vyhledávacích lišt a formulářů na webových stránkách.</em><br/>Vložíte-li text do webového formuláře, Firefox si zapamatuje, co jste napsali a automaticky nabízí dokončení při dalším vkládání informací. Pokud si toto doplňování nepřejete, zrušte zaškrtnutí položky Povolit ukládání informací zadaných do formulářů na stránkách a ve vyhledávací liště.</p>

  <h3 id="saved_passwords">Uložená hesla</h3>
  <p><em>Pamatovat si hesla</em><br/>Firefox nabízí možnost bezpečného ukládání hesel vkládaných do webových formulářů. Odškrtnutím této volby zabrázníte Firefoxu pamatovat si vaše hesla.</p>

  <p><em>Zobrazit uložená hesla...</em><br/>Klepnutím na toto tlačítko se zobrazí dialog, kde můžete spravovat uložená hesla či jednotlivé z nich vymazat.</p>

  <p id="set_change_master_password"><em>Nastavit hlavní heslo...</em>
    <br/>Firefox může ochránit citlivé informace jako jsou uložená hesla či certifikáty.  Pokud vytvoříte hlavní heslo, Firefox bude vyžadovat jeho vložení jednou za relaci jakmile to bude potřeba. Klepnutím na toto tlačítko můžete toto hlavní heslo nastavit, změnit či vymazat.
</p>

  <h3 id="download_manager_history">Historie správce stahování souborů</h3>
  <p>Správce stahování souborů (přístupný z nabídky <span class="menuPath">Nástroje</span> nebo stiskem kláves <span class="noUnix"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>++<kbd>J</kbd></span><span class="unix"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>++<kbd>Y</kbd></span>) udržuje seznam naposledy stažených souborů. Možnosti pro stahování jsou přístupné v panelu <strong>Stahování</strong>.</p>

  <h3 id="cookies">Cookies</h3>
  <p>Cookie je soubor vytvořený webovou stránkou. Ukládá na vašem počítači informace, například <span class="win">možnosti</span><span                             class="unix">předvolby</span> při návštěvě webové stránky.</p>

  <p>Více informací o cookies a jejich spravování (zejména stanovení webových stránek, které smějí nebo nesmějí cookie ukládat) najdete v kapitole <a href="cookies.html">Správa cookies</a>.</p>

  <p>Správce cookie zobrazíte klepnutím na tlačítko <em>Uložené cookie</em>.</p>

  <p><em>Povolit cookie soubory</em><br/>Podle výchozího nastavení jsou cookies povoleny. Zrušením zaškrtnutí této položky zakážete používání cookies. Nezapomeňte, že některé stránky nemusejí správně fungovat jsou-li cookies zakázány.</p>

  <dl>
    <dt>pouze pro zdrojový server</dt>
    <dd>Výběr této možnosti omezí použití cookies pouze pro zdrojový server, žádné cizí cookies nebudou ukládány. Více informací najdete v kapitole <a href="cookies.html">Správa cookies</a>.</dd>

    <dt>Přijmout soubory cookie normálně</dt>
    <dd>Toto je výchozí nastavení. Umožní webovým stránkám ukládat soubory cookie na váš počítač do té doby, dokud to konkrétní stránce nezakážete.</dd>

    <dt>Přijmout pouze pro tuto relaci</dt>
    <dd>Pokud je tato možnost vybrána, informace v souborech cookies bude odstraněna při restartu prohlížeče. Webové stránky, které vyžadují použití cookies zůstanou funkční, nicméně pokud restartujete prohlížeč budou vás považovat za nového návštěvníka.</dd>

    <dt>Upozornit před přijetím souboru cookie</dt>
    <dd>Je-li tato možnost povolena, při každém pokusu webové stránky uložit na vašem počítači soubor cookie se objeví potvrzovací dialog.</dd>
  </dl>

  <h3 id="cache">Vyrovnávací disková paměť</h3>
  <p>Navštívené stránky jsou ukládány do vyrovnávací paměti a při další návštěvě se tak zobrazí rychleji. Zde můžete určit, jak mnoho místa pro diskovou paměť vyhradíte.</p>

<h2 id="web_features_options">Webové stránky</h2>

  <p><img width="435" height="306" alt="Dialog webových stránek" src="../images/help-opt_webfeatures.png"/></p>

  <p><em>Blokovat vyskakovací okna</em><br/>Podle výchozího nastavení Firefox blokuje nepříjemná vyskakovací okna na webových stránkách. Zrušení zaškrtnutí této možnosti znemožní blokování vyskakovacích oken.</p>

  <p>Některé stránky mají dobré důvody pro použití vyskakovacích oken.  proto je dobré povolit těmto stránkám otevírat vyskakovací okna. V takovém případě klepněte na tlačítko <em>Důvěryhodné stránky</em>. V zobrazeném dialogu zadejte server pro který chcete vyskakovací okna povolit a klepněte na tlačítko <em>Povolit</em>.</p>

  <p>Pro odstranění serveru vyberte server ze seznamu a klepněte na tlačítko <em>Odebrat server</em>. Pro vyprázdnění celého seznamu klepněte na tlačítko <em>Odebrat všechny servery</em>. Klepnutím na tlačítko <em>OK</em> potvrdíte vaše změny. Pokud si je nepřejete potvrdit, klepněte na tlačítko <em>Zrušit</em>.</p>

 <p><em>Povolit stránkám instalovat software</em><br/>
Ve výchozím nastavení mohou webové stránky instalovat software jako jsou rozšíření či motivy vzhledu. Před každou instalací budete vždy dotázáni. Odškrtnutím této volby kompletně zakážete instalaci software.</p>

 <p>Povolení této volby je vhodné pro instalaci motivů vzhledu. Rozšíření jsou více mocná než motivy vzhledu. Webovému serveru musíte výslovně povolit instalaci rozšířeních. Aby to bylo možné, klepněte na tlačítko <em>Důvěryhodné servery</em>, zadejte adresu serveru a klepněte na tlačítko <em>Povolit</em>.</p>

<p><em>Načíst obrázky</em><br/> Ve výchozím nastavení jsou obrázky, které jsou na webových stránkách umístěny, načítány. Odškrtnutím této volby zakážete jejich načítání.</p>

  <ul>
    <li><em>pouze pro zdrojový server</em><br/> Povolením této volby zajistíte, že budou načítány pouze obrázky umístěné na aktuálním serveru.</li>
  </ul>

    <p><img width="247" height="291" alt="Dialog vyjímek pro načítání obrázků" src="../images/help-opt_imagemanager.png"/></p>

    <p>V závislosti na tom, zda máte povolené obrázky, můžete změnit servery, které jsou blokovány či povoleny. Klepnutím na tlačítko <em>Výjimky</em> zobrazíte dialog, kde můžete zadat server, pro který chcete povolit/zakázat obrázky. Klepnutím na tlačítko <em>Povolit</em> povolíte načítání obrázků, klepnutím na tlačítko <em>Blokovat</em> jejich načítání zakážete. Klepnutím na tlačítko <em>OK</em> potvrdíte vaše změny. Pokud si jejich potvrzení nepřejete, klepněte na tlačítko <em>Zrušit</em>.</p>

  <p><em>Povolit jazyk Java</em><br/>Java je populární programovací jazyk pro webové stránky vyvinutý společností Sun Microsystems. Program napsaný v jazyce Java funguje na mnoha různých druzích počítačů, není nutno vytvářet pro každý vlastní verzi. Zrušení zaškrtnutí této možnosti zakáže Java aplety v prohlížeči Firefox. Pro funkčnost Java apletů musí být nainstalován zásuvný modul Java.</p>

  <p><em>Povolit JavaScript</em><br/>JavaScript je skriptovací jazyk užívaný zejména pro tvorbu webových stránek. JavaScript je také často využíván pro dynamické ověřování formulářů a volbu tlačítek. JavaScript je často používán pro kontrolu formulářů a při stisku tlačítek. Zákaz JavaScriptu může způsobit nesprávnou funkci některých stránek.</p>

  <p>Přestože je obyčejně doporučeno nechat JavaScript povolen, existují některé funkce, které můžete chtít zakázat. Klepněte na tlačítko <em>Rozšířené...</em> pro zobrazení podrobnějších voleb.</p>

  <p><img width="260" height="170" alt="Nastavení JavaScriptu" src="../images/help-opt_javascript.png"/></p>

  <h3 id="allow_scripts_to">Umožnit skriptům:</h3>
  <dl>
    <dt>Přemisťovat nebo měnit velikost otevřených oken</dt>
    <dd>Odškrtněte tuto možnost, nechcete-li, aby skripty přesouvaly okna a měnily jejich velikost.</dd>

    <dt>Přenést okno do popředí nebo do pozadí</dt>
    <dd>Odškrtněte tuto možnost, nepřejete-li si, aby skripty přesouvaly okna do popředí/pozadí.</dd>

    <dt>Zakázat nebo nahradit kontextovou nabídku</dt>
    <dd>Odškrtněte tuto možnost, nechcete-li, aby webové stránky měli možnost zakázat či změnit místní nabídku Firefox.</dd>

    <dt>Skrýt stavovou lištu</dt>
    <dd>Odškrtněte tuto možnost, chcete-li zobrazovat stavovou lištu ve vyskakovacích oknech.</dd>

    <dt>Změnit text na stavové liště</dt>
    <dd>Odškrtněte tuto možnost, chcete-li odstranit nepříjemný pohyb textu ve stavové liště a skrývání webové adresy.</dd>

    <dt>Měnit obrázky</dt>
    <dd>Odškrtněte tuto možnost, chcete-li zakázat změny v obrázcích. V některých nabídkách se budete hůře orientovat.</dd>
  </dl>

<h2 id="downloads_options">Stahování</h2>

  <p><img src="../images/help-opt_downloads.png" width="502" height="353" alt="Dialog stahování"/></p>

  <p>Tento panel určuje, co má  Firefox udělat s různými typy souborů, například s aplikacemi a komprimovanými nebo multimediálními soubory.</p>

  <h3 id="download_folder">Složka pro stahování</h3>

  <p><em>Při ukládání souboru se vždy zeptat</em><br/>Toto je výchozí nastavení. Kdykoli stahujete soubor,  Firefox se ptá, kam si jej přejete uložit.</p>

  <p><em>Uložit všechny soubory do složky:</em><br/>Jinou možností je volba výchozího adresáře, do kterého se budou ukládat všechny stahované soubory, například složka &quot;Moje stažené soubory&quot; . Konkrétní adresář můžete vybrat volbou <em>Jiná...</em> z rozbalovací nabídky dostupných adresářů. Pro zobrazení obsahu adresáře použijte tlačítko <em>Zobrazit složku</em>. Složka se otevře ve výchozím správci souborů.</p>

  <h3 id="file_types">Typy souborů</h3>

  <p>Tento seznam obsahuje typy souborů, které jste stahovali. Můžete vybrat akci, kterou Firefox provede po klepnutí na soubor daného typu. Zvolte typ souboru, který chcete změnit a klepněte na tlačítko <em>Změnit akci...</em>.</p>

  <p>Otevře okno Změna akce, kde určíte, zda soubory daného typu budou otevírány v určené aplikaci nebo budou uloženy na disk. Například, navštěvujete-li často webové stránky s multimediálními soubory, uvítáte možnost prohlížeče Firefox otevírat tyto soubory v přehrávači multimédií místo ukládání souborů na disk.</p>

  <p><img width="293" height="236" alt="Dialog pro změnu akce" src="../images/help-opt_downloadaction.png"/></p>

  <ul>
    <li><em>Otevřít ve výchozí aplikaci:</em><br/>Zvolte tuto možnost, chcete-li otevírat daný typ souboru ve výchozí aplikaci pro tento typ souboru (určenou operačním systémem).</li>
    <li><em>Otevřít v této aplikaci:</em><br/>Zvolte tuto možnost, chcete-li otevírat daný typ souboru v jiné než výchozí aplikaci. Otevře se dialogové okno Volba programu.</li>
    <li><em>Uložit na disk</em><br/>Zvolte tuto možnost, chcete-li ukládat soubory tohoto typu na disk. Pokud jste si vybrali možnost <em>Uložit všechny soubory do složky</em>, soubory budou ukládány automaticky.</li>
  </ul>

  <p>K odstranění akce pro typ souboru tento typ souboru označte a klepněte na tlačítko <em>Odebrat</em>.</p>
  <p>Z panelu stahování je možné nastavovat zásuvné moduly pro Firefox. Po klepnutí na tlačítko <em>Zásuvné moduly...</em> se zobrazí okno Zásuvné moduly:</p>

  <p><img width="253" height="277" alt="Dialog zásuvných modulů" src="../images/help-opt_plugins.png"/></p>

  <p>V tomto okně můžete určit, které zásuvné moduly pro Firefox mohou být spuštěny. Například, nemáte-li obecně rádi Flash animace, ale potřebujete mít nainstalován příslušný zásuvný modul, můžete tento zásuvný modul zakázat zde. Flashové animace budou blokovány dokud zásuvný modul opět nepovolíte.</p>

<h2 id="advanced_options">Ostatní</h2>

  <p><img src="../images/help-opt_advanced.png" width="469" height="330" alt="Dialog s ostatním nastavením"/></p>

  <p>Panel Ostatní obsahuje mnoho možností, které nejspíše většina lidí nepoužije, nicméně jsou užitečné a pro některé uživatele velice důležité. Tento panel obsahuje mnoho voleb, které nejsou tak často využívány, ale pro
řadu lidí jsou stále velmi užitečné.</p>

  <h3 id="accessibility">Usnadnění</h3>
  <p><em>Při výběru textu nebo pozice zobrazovat textový kurzor</em><br/>Určuje, zda přesunout textový kurzor kdykoli se změní zaměření/výběr.</p>

  <p><em>Psaním vyhledávat text na stránce</em><br/>Najít přímo při psaní je velmi užitečná vlastnost v prohlížeči Firefox.
	  Jedná se o velmi rychlý způsob vyhledávání odkazů nebo textu na webové stránce bez nutnosti zobrazovat kompletní vyhledávací dialogová okna. Více informací najdete zde: 
<a href="http://www.mozilla.org/projects/ui/accessibility/typeaheadfind.html" target="_blank">mozilla.org</a>.</p>

  <h3 id="browsing">Prohlížení</h3>
 
  <p><em>Změnit velikost větších obrázků tak, aby se vešly do okna prohlížeče</em><br/>Tato vlastnost je podobná té, která se nachází v Internet Exploreru. Nevejde-li se obrázek na obrazovku, je zmenšen tak, aby byl vidět celý. Obrázek v původní velikosti se zobrazí klepnutím na něj.</p>

  <p><em>Použít automatické posunování</em><br/>Automatické posunování je užitečná vlastnost, která umožňuje posunovat stránku stiskem prostředního tlačítka myši (obvykle kolečko) a pohybem myši nahoru a dolů. Ne všem se však tato funkce zamlouvá, proto je možné tuto vlastnost nepoužívat.</p>

<p><em>Použít jemné posunování</em><br/>Funkce Jemné posunování je stále ve vývoji Firefox, nicméně může být velmi užitečná, pokud čtete větší množství dlouhých stránek. Standardně, pokud stisknete klávesu Page Down, pohled skočí přímo na spodní část strany. S použitím funkce Jemné posunování se stránka posunuje pomaleji, takže stále máte přehled o pozici v textu.</p>

  <h3 id="tabbed_browsing">Prohlížení v panelech</h3>

  <p><em>Odkazy z ostatních aplikací otevírat v:</em><br/> Když jiné aplikace na vašem počítači chtějí zobrazit webovou stránku, Firefox ji otevře v naposledy použitém panelu/okně. Změnou této volby můžete donutit Firefox otevřít stránku jinak.</p>

  <p><em>Odkazy otevírající nové okno otevírat v:</em><br/>Firefox otevírá nová okna, pokud to odkazy na webových stránkách chtějí. Pokud preferujete používání panelů, je pro vás tato volba užitečná. Můžete donutit Firefox otevírat odkazy, které by normálně byly otevírány v novém okně, jinde. Po zaškrtnutí této volby můžete určit kde.</p>  

  <p><em>Skrýt lištu s panely, pokud je otevřena pouze jedna stránka</em><br/>Pokud je v okně prohlížeče Firefox zobrazena pouze jedna stránka, lišta s panely není zobrazena. Chcete-li zobrazovat lištu s panely vždy, zrušte výběr této možnosti.</p>

  <p><em>Přepnout na nový panel otevřený z odkazu</em><br/>Klepnete-li na odkaz prostředním tlačítkem myši (nebo držíte klávesu <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd> a klepnete levým tlačítkem myši), odkazy se budou otevírat v nových panelech. Tyto panely nejsou přímo zobrazeny; načítají se v pozadí. Zrušíte-li výběr této možnosti, budou panely zobrazeny v popředí.</p>

  <p><em>Přepnout na nový panel otevřený ze záložek či historie</em><br/>Pokud otevíráte záložky či webové stránky z historie v novém panelu, Firefox automaticky vybere panel a zobrazí nově otevřenou webovou stránku. Odškrtnutím této volby donutíte Firefox otevírat tyto panely na pozadí.</p>

  <p><em>Varovat, je-li zavíráno více panelů najednou</em><br/>Pokud zavíráte okno s více otevřenými panely, Firefox se vás dotáže, zda si skutečně přejete okno zavřít. Jedná se o prevenci proti nechtěným zavřením celého okna, když si ve skutečnosti přejete zavřít pouze aktuální panel. Po odškrtnutí této volby již nebudete dotazování a Firefox automaticky zavře okno.</p>

  <h3 id="software_update">Aktualizace softwaru</h3>

  <p>Firefox může kontrolovat existenci nové verze instalovaných rozšíření nebo Firefoxe samotného.</p>

  <p><strong>Firefox</strong><br/>
    Ve výchozím nastavení Firefox pravidelně kontroluje existenci nových verzí a upozorňuje na ně. Odškrtnutím této volby zakážete pravidelnou kontrolu.</p>

  <p><strong>Má rozšíření</strong><br/>
    Ve výchozím nastavení Firefox pravidelně kontroluje existenci nových verzí instalovaných rozšíření a upozorňuje na ně. Odškrtnutím této volby zakážete pravidelnou kontrolu.</p>

  <p>Klepnutím na tlačítko <em>Zkontrolovat</em> můžete ihned zkontrolovat aktualizace Firefoxu a instalovaných rozšířeních.</p>

  <h3 id="security">Zabezpečení</h3>

  <p><em>Použít SSL 2.0</em><br/>Určuje, zda pro bezpečné přijímaní a odesílání informací použít SSL2 (Secured Sockets Layer Level 2) - standardní protokol pro zabezpečené přenosy. Všechny bezpečné webové stránky podporují tento protokol.</p>

  <p><em>Použít SSL 3.0</em><br/>Určuje, zda pro bezpečné přijímání a odesílání informací použít SSL3 (Secured Sockets Layer Level 3) - protokol, který je považován za bezpečnější než je SSL2. Některé webové stránky nemusejí tento protokol podporovat.</p>

  <p><em>Použít TLS 1.0</em><br/>Určuje, zda pro bezpečné přijímání a odesílání informací použít TLS (Transport Layer Security) - otevřený bezpečnostní standard podobný SSL3 (Secure Sockets Layer). Některé webové stránky nemusejí tento protokol podporovat.</p>

  <h3 id="certificates">Certifikáty</h3>

 <p>Certifikáty pomáhají provádět šifrování a dešifrování spojení k  
 <a href="glossary.html#secure_site">bezpečným serverům</a>.</p>

  <p><em>Výběr certifikátu pro klienta</em><br/>Když webový server požaduje bezpečné spojení, Firefox ve výchozím nastavení použije odpovídající certifikát. Pokud si přejete manuálně vybrat certifikát (například si přejete používat určitý typ šifrování místo tohot, který je automaticky vybrán), vyberte volbu "Pokaždé se dotázat" a budete mít kompletní kontrolu nad tím, jaké certifikáty budete používat během prohlížení webu.</p>

  <p><em>Správa certifikátů</em><br/> Klepnutím na tlačítko <em>Spravovat certifikáty...</em> se zobrazí dialog, kde můžete vidět uložené certifikáty, importovat nové, zálohovat či odstraňovat staré certifikáty.</p>

  <p><em>Správa bezpečnostních zařízení</em><br/> Bezpečnostní zařízení mohou šifrovat a dešifrovat spojení a skladovat certifikáty a hesly. Pokud potřebujete použít jiné bezpečnostní zařízení než to, které je používáno ve 
Firefoxu, klepněte na tlačítko <em>Spravovat bezpečnosntí zařízení...</em>.</p>

  <h3 id="validation">Ověřování</h3>

  <p>Ověřování zajišťuje, že certifikáty používané Firefoxem nejsou zastaralé.</p>

  <p><em>Seznam uložených certifikátů</em><br/>Firefox může použít CRL (též známý jako Certificate
    Revocation Lists) k ujištění, že vaše certifikáty jsou platné. Pokud potřebujete přidat CRL do Firefoxe či zobrazit informace o CRL, které máte nainstalovany, klepněte na tlačítko <em>Spravovat seznam CRL...</em>.</p>

  <p><em>Online ověření stavu certifikátů</em><br/>OCSP (Online Certificate Status Protocol) je cestou k ověřování vašich certifikátů pokaždé, když jsou zobrazovány či používány. Firefox ve výchozím nastavení nepoužívá OCSP, ale pokud jej chcete povolit, můžete tak učinit. Učiňte tak však pouze tehdy, když to vaše prostředí vyžaduje.</p>

<div class="contentsBox"><em>12. října 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>