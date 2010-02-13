<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Prohlížení v panelech';
	$page->headline = array('Prohlížení v panelech','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>


<p>Prohlížení v panelech je funkce, která dělá prohlížení webu více pohodlné. Tato kapitola popisuje, jak používat prohlížení v panelech a jak tuto funkci nastavit tak, aby bylo prohlížení webu ještě rychlejší.</p>

<div class="contentsBox">V této kapitole:
  <ul>
    <li><a href="#using_tabbed_browsing">Používáme prohlížení v panelech</a></li>
    <li><a href="#creating_loading_tabs">Vytváříme a načítáme panely</a></li>
    <li><a href="#customizing">Nastavujeme prohlížení v panelech</a></li>
  </ul>
</div>

<h2 id="using_tabbed_browsing">Používáme prohlížení v panelech</h2>

<p>Prohlížení v panelech vám umožňuje otevřít několik panelů (každý zobrazuje webovou stránku) v rámci jednoho okna Firefoxu. To vám ušetří místo na vaší ploše.</p>

<p>S funkcí prohlížení v panelech můžete také použít přednačítání stránek. Pokud pročítáte rozsáhlou webovou stránku, můžete si mezitím načítat další odkazy v nových panelech. </p>

  <h3 id="creating_loading_tabs">Vytváříme a načítáme panely</h3>

  <p>Pro otevření nového panelu stiskněte klávesovou zkratku <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>T</kbd>, v hlavní nabídce zvolte <span
    class="menuPath">Soubor &gt; Nový panel</span> nebo dvojklepněte na prázdné místo v liště s panely.</p>

  <p>Pro načítání odkazu v novém panelu můžete použít jedno z následujících:</p>

  <ul>
    <li>Klepněte prostředním tlačítkem nad odkazem. (Pokud má vaše myš kolečko, klepnutí na kolečko je ekvivalentní ke klepnutí na prostřední tlačítko myši.)</li>
    <li>Přetáhněte odkaz na prázdné místo v liště s panely. (Pokud máte otevřenu pouze jednu webovou stránku, lišta s panely může být skryta. Více informaci naleznete v sekci <a href="#customizing">Nastavujeme prohlížení v panelech</a>.)</li>
    <li>Přetáhněte odkaz na jiný otevřený panel. Odkaz bude otevřen v něm.</li>
    <li><span class="noMac">Klepněte pravým tlačítkem myši</span><span
      class="mac"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+klepnutí</span> nad odkazem a z místní nabídky zvolte <span
      class="menuPath">Otevřít v novém panelu</span>.</li>
  </ul>

  <h3 id="closing_tabs">Zavíráme panely</h3>

  <p>Zavření aktuálního panelu provedete stisknutím klávesové zkratky <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>W</kbd>, klepnutím na tlačítko Zavřít panel, klepnutím prostředním tlačítkem myši na panelu či volbou <span class="menuPath">Soubor &gt;
    Zavřít panel</span> z hlavní nabídky.</p>

  <p>Pro zavření všech panelů kromě aktuálního <span class="noMac">klepněte pravým tlačítkem na panelu</span><span class="mac"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd> + klepnutí na panelu</span> a zvolte <span class="menuPath">Zavřít ostatní panely</span>.</p>

  <h3 id="keyboard_shortcuts">Klávesové zkratky</h3>

  <p>Je snadné vybírat panelu s použitím myši. Můžete ale také snadno přepínat mezi jednotlivými panelu pomocí klávesnice použitím klávesových zkratek <kbd>Ctrl</kbd>+<kbd>PageUp</kbd> (nebo <kbd>Ctrl</kbd>+<kbd>Tab</kbd>) a <kbd>Ctrl</kbd>+<kbd>PageDown</kbd> (nebo <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>Tab</kbd>). Můžete také vybrat první panel stisknutím <span class="noUnix"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd></span><span class="unix"><kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd></span>+<kbd>1</kbd> až po 9 panel pomocí <span class="noUnix"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd></span><span class="unix"><kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd></span>+<kbd>9</kbd>.</p>

  <h3 id="bookmarking_tabbed_browsing">Záložky a prohlížení v panelech</h3>

  <p>Záložka skupiny panelů:</p>

  <ol>
    <li>Stiskněte klávesovou zkratku <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>D</kbd> nebo zvolte z hlavní nabídky <span class="menuPath">
Záložky &gt; Přidat k záložkám...</span>.</li>
    <li>Zaškrtněte volbu <em>Přidat všechny panely ve složce k záložkám</em> pro uložení všech panelů otevřených v aktuálním okně do složky v záložkách.</li>
    <li>Pro otevření záložek v panelech otevřete složku v záložkách a zvolte 
<span class="menuPath">Otevřít v panelech</span>. Můžete také klepnutou prostředním tlačítkem na složce a tím otevřít obsah složky v panelech. Záložky budou otevřeny v existujících panelech, ne v nových.</li>
  </ol>

  <h3 id="home_page_as_tabs">Domovská stránka jako panely</h3>
<p>Místo používání pouze jedné webové stránky jako domovskou stránku, můžete mít domovskou stránku jako skupinu panelů. Vyberte vaše oblíbené webové stránky a otevřete je v panelech v rámci jednoho okna. Zvolte <span class="win menuPath">Nástroje &gt;                             Možnosti</span><span class="unix menuPath">Úpravy &gt;                             Předvolby</span> a zvolte panel <em>Hlavní</em>. Pod kategorií <em>Domovská stránka</em> klepněte na tlačítko <em>Použít aktuální stránky</em>. Nyní když klepnete na tlačítko Domů, vaše oblíbené webové stránky budou načteny pouze jedním klepnutím.</p>

<h2 id="customizing">Nastavujeme prohlížení v panelech</h2>

<p>Pro nastavení funkce prohlížení v panelech v hlavní nabídce zvolte <span class="win menuPath">Nástroje &gt;                             Možnosti</span><span class="unix menuPath">Úpravy &gt;                             Předvolby</span> a klepněte na panel <em>Ostatní</em>. Volby pro prohlížení v panelech můžete nalézt pod  <a href="prefs.html#tabbed_browsing">Prohlížení v panelech</a>.</p>

  <h3 id="tips">Užitečné rady</h3>

  <ul>
    <li>Můžete přidat tlačítko Nový panel do lišty pro snadnější otevírání nových panelů pomocí 
<a href="customization.html#rearranging_toolbar_items">přizpůsobení nástrojových lišt</a>.</li>
    <li>Ačkoliv Firefox poskytuje nejčastěji používané funkce pro prohlížení v panelech, můžete si přát rozšířit prohlížení v panelech o další funkce. To učiníte tak, že si nainstalujete některé z <a 
      href="customization.html#extensions">rozšířeních</a>.</li>
  </ul>

<div class="contentsBox"><em>12. října 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>