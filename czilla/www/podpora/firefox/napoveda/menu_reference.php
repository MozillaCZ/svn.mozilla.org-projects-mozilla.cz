<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Hlavní nabídka Mozilla Firefoxu';
	$page->headline = array('Hlavní nabídka Mozilla Firefoxu','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>


  <div>Tato stránka popisuje volby, které naleznete v hlavní nabídce programu Firefox.</div>

  <div class="contentsBox">V této kapitole:
    <ul>
      <li><a href="#file">Soubor</a></li>
      <li><a href="#edit">Úpravy</a></li>
      <li><a href="#view">Zobrazit</a></li>
      <li><a href="#go">Přejít</a></li>
      <li><a href="#bookmarks">Záložky</a></li>
      <li><a href="#tools">Nástroje</a></li>
      <li><a href="#help">Nápověda</a></li>
    </ul>
  </div>

<h2 id="file">Soubor</h2>

  <h3 id="new_window">Nové okno</h3>
  <p>Otevře nové okno programu Firefox.</p>

  <h3 id="new_tab">Nový panel</h3>
  <p>Otevře nový panel v aktuálním okně programu Firefox.</p>

  <h3 id="open_file">Otevřít soubor...</h3>
  <p>
  Zobrazí dialog <em>Otevřít soubor</em>. V něm můžete zvolit soubor z lokálního disku či sítě, který chcete 
  v programu Firefox otevřít. Můžete zvolit řadu souborových formátů jako HTML/XML, soubory s obrázky, textové
  soubory apod.
  </p>

  <h3 id="close">Zavřít</h3>
  <p>Zavře aktuální okno programu.</p>
  
  <h3 id="close_window">Zavřít okno</h3>
  <p>Zavře aktuální okno prohlížeče včetně všech otevřených panelů.</p>  

  <h3 id="close_tab">Zavřít panel</h3>
  <p>
  Uzavře aktuální panel a aktivuje první panel vpravo.  
  </p>
  <p>
  Poznámka: Tato volba je v hlavní nabídce obsažena pouze tehdy, je-li otevřeno dva a více panelů. 
  </p>


  <h3 id="save_page_as">Uložit stránku jako...</h3>
  <p>
  Uloží stránku, která je zobrazena na aktuálním panelu. Stránku lze uložit v několika formátech.
  Máte možnost uložit celou stránku (včetně obrázků), pouze HTML stránku či pouze jako text.
  </p>

  <h3 id="send_page">Odeslat odkaz...</h3>
  <p> 
  Otevře okno nové zprávy vašeho výchozího e-mailového klienta ze kterého můžete odeslat e-mailovou zprávu s odkazem
  na aktuální stránku. Tato volba je dostupná pouze pod operačními systémy Windows, Mac OS X a OS/2.
  </p>

  <h3 id="page_setup">Vzhled stránky...</h3>
  <p>
  Zobrazí dialog <em>Vzhled stránky</em>, kde můžete nastavit volby tisku jako jsou okraje, hlavičky, orientace stránky apod.
  </p>

  <h3 id="print_preview">Náhled tisku</h3>
  <p>
  Zobrazí vzhled stránek tak, jak budou vypadat po vytištění.
  </p>

  <h3 id="print">Tisk...</h3>
  <p>
  Zobrazí dialog tisku, kde můžete zvolit počet kopií tištěných stránek, oblast tisku apod. Klepnutím na tlačítko 
  <em>OK</em> zahájíte tisk.
  </p>
  
  <h3 id="import">Importovat...</h3>
  <p>
  Otevře průvodce importem, který vám umožní snadno importovat <span class="win">možnosti</span><span                             class="unix">předvolby</span>, záložky, historii, hesla a další data z 
  prohlížečů jako Microsoft Internet Explorer, Netscape, Mozilla či Opera.</p>
  
  <h3 id="work_offline">Pracovat offline</h3>
  <p>
  Přepínač mezi online a offline módem. Offline mód umožňuje prohlížet webové stránky, které jste navštívil(-a) bez 
  potřeby aktuálního připojení k Internetu.
  </p>  

  <h3 id="exit">Ukončit</h3>
  <p>
  Zavře všechna otevřená okna programu Firefox včetně aktuálně stahovaných souborů a ukončí program.
  </p>

<h2 id="edit">Úpravy</h2>

  <h3 id="undo">Zpět</h3>
  <p>
  Vrátí zpět předchozí načtenou stránku. Pokud se později rozhodnete, že chcete tuto akci vrátit zpět, zvolte volbu 
  <em>Znovu</em>.
  </p>

  <h3 id="redo">Znovu</h3>
  <p>Znovu zobrazí naposledy vrácenou stránku.</p>

  <h3 id="cut">Vyjmout</h3>
  <p>
  Vyjme označený text webové stránky do schránky. Text pak lze kdekoliv vložit příkazem <em>Vložit</em>.
  </p>

  <h3 id="copy">Kopírovat</h3>
  <p>
  Zkopíruje označený text webové stránky do schránky. Text pak lze kdekoliv vložit příkazem <em>Vložit</em>.
  </p>
  
  <h3 id="paste">Vložit</h3>
  <p>Vloží text uložený ve schránce do textového pole.</p>

  <h3 id="delete">Vymazat</h3>
  <p>Vymaže vybraný text z textového pole.</p>

  <h3 id="select_all">Vybrat vše</h3>
  <p>Vybere všechen text na webové stránce.</p>

  <h3 id="find_in_this_page">Najít na této stránce...</h3>
  <p>Zobrazí lištu pro vyhledávání v dolní části okna prohlížeče. Zde můžete zadat text, který si přejete na stránce nalézt a postupně, jak jej zadáváte, Firefox automaticky prohledává stránku a hledá první výraz, který odpovídá vámi zadanému textu. Klepnutím na tlačítko <em>Najít další</em> či <em>Najít předchozí</em> naleznete odpovídající text na jiném místě stránky. Klepnutím na tlačítko <em>Zvýraznění</em> označíte všechny odpovídající texty na stránce.</p>

  <h3 id="find_again">Najít další</h3>
  <p>
  Najde další pozici textu, který jste zadali v dialogu <em>Nalézt na této stránce...</em>.
  </p>

  <h3 class="unix" id="prefs"><span class="win">možnosti</span><span                             class="unix">předvolby</span></h3>
  <p class="unix">Zobrazí se <a href="prefs.html">dialog <span class="win">Možnosti</span><span                             class="unix">Předvolby</span></a>, kde můžete změnit řadu nastavení Firefoxe.</p>


<h2 id="view">Zobrazit</h2>

  <h3 id="toolbars">Nástrojové lišty</h3>

    <h4 id="navigation_toolbar">Navigační lišta</h4>
    <p>
    Hlavní nástrojová lišta programu. Na této liště naleznete adresu zobrazené stránky, tlačítka 
    (Zpět, Vpřed, Zastavit...) apod.
    </p>

    <h4 id="bookmarks_toolbar">Lišta záložek</h4>
    <p>
    Nástrojová lišta, která obsahuje odkazy na vaše oblíbené stránky.
    </p>

    <h4 id="customize">Vlastní...</h4>
    <p>
    Zobrazí dialog, který vám umožní si podle svých potřeb upravit nástrojové lišty. Tuto volbu lze též zvolit 
    klepnutím pravým tlačítkem nad nástrojovými lištami a volbou položky <em>Vlastní...</em>.
    </p>

  <h3 id="status_bar">Stavový řádek</h3>
  <p>
  Zobrazí stavový řádek programu. Jedná se o úzký pruh v dolní části okna prohlížeče, který v průběhu práce s 
  prohlížečem zobrazuje řadu důležitých informací.
  </p>

  <h3 id="sidebar">Postranní lišta</h3>
  <p>
  Postranní panel, který zobrazuje stahované soubory, záložky či historii. Panel lze kdykoliv zavřít klepnutím na křížek v 
  pravém horním rohu.
  </p>

    <h4 id="bookmarks_sidebar">Záložky</h4>
    <p>
    Zobrazí postranní panel se záložkami. 
    </p>

    <h4 id="history_sidebar">Historie</h4>
    <p>
    Zobrazí postranní panel s historií navštívených webových stránek. Pokud chcete změnit počet dní, po které chcete
    tuto historii uchovávat, zvolte <span class="win menuPath">Nástroje &gt;                             Možnosti</span><span class="unix menuPath">Úpravy &gt;                             Předvolby</span> a panel <em>Soukromí</em>.</p>

  <h3 id="stop">Zastavit</h3>
  <p>
  Zastaví načítání aktuální webové stránky.
  Jedná se o stejnou funkci, která je dostupná pod tlačítkem <em>Zastavit</em> na liště.
  </p>
 
  <h3 id="reload">Obnovit</h3>
  <p>
  Obnoví aktuální stránku. Při této operaci je načten její aktuální obsah.
  Jedná se o stejnou funkci, která je dostupná pod tlačítkem <em>Obnovit</em> na liště.
  </p>
  
  <h3 id="text_size">Velikost textu</h3>
  <p>Pokud je text na webové stránce příliš malý či příliš velky, můžete provést změnu na vyhovující velikost.</p>

    <h4 id="increase_text_size">Zvětšit</h4>
    <p>Zobrazí text na webové stránce o jedno číslo větší. Tuto funkci můžete aktivovat též myší (pro více informací nahlédněte do kapitoly <a href="mouse_shortcuts.html">Ovládání myší</a>.)</p>

    <h4 id="decrease_text_size">Zmenšit</h4>
    <p>Zobrazí text na webové stránce o jedno číslo menší. Tuto funkci můžete aktivovat též myší (pro více informací nahlédněte do kapitoly <a href="mouse_shortcuts.html">Ovládání myší</a>.)</p>

    <h4 id="reset_text_size">Normální</h4>
    <p>Zobrazí text na webové stránce v jeho standardní velikosti.</p>  

  <h3 id="increase_text_size">Zvětšit velikost textu</h3>
  <p> 
  Zvětší velikost textu na webové stránce. Tuto volbu lze aktivovat též myší, a to tak, že
  stisknete klávesu <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd> a budete rolovat kolečkem na myši. 
  Pro obnovení výchozí velikosti textu zvolte klávesovou zkratku <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>0</kbd>.</p>

  <h3 id="decrease_text_size">Zmenšit velikost textu</h3>
  <p>
  Zmenší velikost textu na webové stránce. Tuto volbu lze aktivovat též myší (viz. <em>Zvětšit velikost textu</em>).
  Pro obnovení výchozí velikosti textu zvolte klávesovou zkratku <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>0</kbd>.</p>

  <h3 id="page_style">Styl stránky</h3>
  <p>Povolí vám vybrat jeden ze stylů webové stránky. Výchozí je zvolen &quot;Základní styl stránky&quot;. Ten je platný do té doby, dokud uživatel nezvolí jako výchozí jiný</p>

  <h4 id="no_style">Bez stylu</h4>
  <p>Zruší použití stylu na formátování webové stránky.</p>

  <h4 id="basic_page_style">Základní styl stránky</h4>
  <p>Použije výchozí styl pro formátování webové stránky.</p>   

  <h4 id="alternate_style"></h4>
  <p>Pokud autor nabízí další styly stránky, Firefox je zde zobrazí a uživatel si je může zvolit.</p>

  <h3 id="character_coding">Znaková sada</h3>
  <p>
  Umožňuje manuálně měnit znakovou sadu webové stránky. Program Firefox je obvykle schopen automatické
  detekce.</p>
  
  <h3 id="page_source">Zdrojový kód stránky</h3>
  <p>
  Zobrazí v novém okně zdrojový kód aktuální webové stránky.
  </p>

  <h3 id="full_screen">Celá obrazovka</h3>
  <p>
  Zobrazí okno prohlížeče na celou obrazovku. Aktivaci (resp. deaktivaci) této volby
  můžete provést též klávesovou zkratkou <kbd>F11</kbd>.</p>
    
  
  <h2 id="go">Přejít</h2>

  <p>Nabídka <em>Přejít</em> obsahuje seznam naposledy navštívených webových stránek.</p>

  <h3 id="back">Zpět</h3>
  <p>
  Realizuje posun v historii o jednu stránku zpět. Jedná se o stejnou funkci, která je dostupná pod 
  tlačítkem <em>Zpět</em> na liště.
  </p>

  <h3 id="forward">Vpřed</h3>
  <p>
  Realizuje posun v historii o jednu stránku dopředu. Jedná se o stejnou funkci, která je dostupná pod tlačítkem
  <em>Vpřed</em> na liště.</p>
   
  <h3 id="home">Domů</h3>
  <p>
  Zobrazí vaši domovskou stránky. Této funkci odpovídá tlačítko <em>Home</em>, které naleznete
  na <em>navigační liště</em>. Změnu domovské stránky provedete v hlavní nabídce pod <span class="win menuPath">Nástroje &gt;                             Možnosti</span><span class="unix menuPath">Úpravy &gt;                             Předvolby</span> na panelu <em>Obecné</em>. Zde můžete nastavit buď prázdnou stránky, aktuální stránku (nebo
  skupinu panelů), záložku či ručně zadat adresu webové stránky.
  </p> 


<h2 id="bookmarks">Záložky</h2>

  <p>Tato nabídka obsahuje všechny vaše uložené záložky.</p>

  <h3 id="add_to_bookmarks">Přidat k záložkám...</h3>
  <p>
  Přidá aktuální stránku do záložek. Při přidávání se zobrazí dialog,
  který umožní pojmenovat záložku a zvolit její umístění.
  </p>

  <h3 id="manage_bookmarks">Správce záložek...</h3>
  <p>
  Zobrazí okno <em>Správce záložek</em>. V něm můžete upravovat své záložky, třídit je,
  seřazovat, přejmenovávat, měnit jejich vlastnosti apod.
  </p>


<h2 id="tools">Nástroje</h2>

  <h3 id="web_search">Hledání na webu</h3>
  <p>Označí pole Hledání. Následně v tomto poli můžete zadat téma, které si přejete vyhledat na webu.</p>
  
  <h3 id="read_mail">Číst poštu (pouze pod Windows)</h3>
  <p>Otevře váš program na správu e-mailové pošty, kde můžete číst vaši poštu.</p>

  <h3 id="new_message">Nová zpráva... (pouze pod Windows)</h3>
  <p>Otevře okno pro editaci nové zprávy ve vašem výchozím e-mailovém klientu, kde můžete také poslat někomu e-mailovou zprávu.</p>
  

  <h3 id="downloads">Správce stahování</h3>
  <p>
  Otevře Správce stahování, kde můžete vidět aktuální a již skončené stahování souborů.</p>

  <h3 id="extensions">Správce rozšíření</h3>
  <p>Otevře Správce rozšíření, kde můžete vidět všechna rozšíření, které jsou nainstalována v této verzi Firefoxu. V tomto dialogu taktéž můžete odinstalovat jakéliv rozšíření. Pro více informací vyhledejte téma
<a href="customization.html#extensions">rozšíření</a> v příslušné části nápovědy.</p>

  <h3 id="themes">Správce motivů vzhledu</h3>
  <p>Otevře Správce motivů vzhledu. V tomto dialogu můžete měnit aktuální vhled, který Firefox používá. Můžete zde taktéž instalovat a odinstalovávat motivy vzhledu. Pro více informací vyhledejte téma
<a href="customization.html#themes">motivy vzhledu</a> v příslušné části nápovědy.</p>

  <h3 id="javascript_console">Konzola jazyka JavaScript</h3>
  <p>
  Otevře JavaScriptovou konzolu, kde můžete hledat příčinu problému s JavaScriptovým kódem. 
  JavaScript je scriptovací jazyk, který je často používán při tvorbě webových stránek.
  Programátoři používáním tohoto jazyka vytvářejí více interaktivní weby. JavaScript
  je často používán pro dynamickou kontrolu vyplněných formulářů či stisknutých tlačítek.
  </p>

  <h3 id="page_info">Informace o stránce</h3>
  <p>
  Dialog <em>Informace o stránce</em> zobrazuje rozšířené informace o aktuální 
  webové stránce. Jedná se o typ dokumentu, použitém kódování, velikosti či
  zabezpečení. V tomto dialogu též naleznete seznamy multimediálních souborů a
  odkazů, které aktuální stránka obsahuje.
  </p>

  <h3 class="noUnix"><span class="win">Možnosti</span><span                             class="unix">Předvolby</span>...</h3>
  <p class="noUnix">
  Zobrazí dialog <a href="prefs.html"><span class="win">Možnosti</span><span                             class="unix">Předvolby</span></a>. V tomto dialogu můžete
  nastavit jednotlivé volby programu Firefox. 
  </p>

<h2 id="help">Nápověda</h2>

  <h3 id="help_contents">Obsah nápovědy</h3>
  <p>
  Otevře okno s nápovědou. Ta obsahuje řadu užitečných informací, které vám usnadní prohlížení webu programem 
  Firefox.
  </p>

  <h3 id="for_ie_users">Pro uživatele aplikace Internet Explorer (pouze ve Windows a Mac)</h3>
  <p>
  Otevře okno nápovědy s informacemi, které uživateli pomohou při 
  přechodu z prohlížeče Internet Explorer na Firefox.
  </p>
  
  <!--h3 id="release_notes">Poznámky k verzi</h3>
  <p>
  Zobrazí poznámky k poslednímu vydání programu Firefox.
  </p-->  
  
  <h3 id="promote">Propagovat Firefox</h3>
  <p>
  Otevře webovou stránku, která vám poskytne informace o tom, jak podporovat Firefox.
  </p>  

  <h3 id="about_mozilla_firebird">O aplikaci Firefox</h3>
  <p>
   Zobrazí informaci o verzi prohlížeče Firefox.
  </p>

<div class="contentsBox"><em>25. října 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>