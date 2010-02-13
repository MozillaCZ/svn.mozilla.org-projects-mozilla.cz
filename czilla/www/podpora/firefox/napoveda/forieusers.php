<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Pro uživatele aplikace Internet Explorer';
	$page->headline = array('Pro uživatele aplikace Internet Explorer','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>


<div>Pokud jste dosud používali Microsoft&reg; Internet Explorer, brzy zjistíte, že je snadné začít používat Mozillu Firefox.</div>

<div><strong>Poznámka:</strong> Tyto informace jsou platné pro Mozillu Firefox na platformě Windows a Mac OS.</div>

<div class="contentsBox">V této kapitole:
  <ul>
    <li><a href="#firebird_and_internet_explorer_terminology_differences">
      Rozdíly v terminologii</a></li>
    <li><a href="#about_your_ie_settings">Vaše nastavení IE</a></li>
    <li><a href="#firebirds_features">Hlavní rysy Firefoxe</a></li>
    <li><a href="#keyboard_shortcuts">Klávesové zkratky</a></li>
  </ul>
</div>

<h2 id="firebird_and_internet_explorer_terminology_differences">Rozdíly v terminologii</h2>

<table width="95%" border="1">
 <thead>
  <tr>
    <th>Internet Explorer</th>
    <th>Firefox</th>
  </tr>
 </thead>
 <tbody>
  <tr class="noMac">
    <td>Možnosti Internetu</td>
    <td><span class="win">Možnosti</span><span                             class="unix">Předvolby</span></td>
  </tr>
  <tr>
    <td class="noMac">Dočasné soubory Internetu</td>
    <td>Vyrovnávací disková paměť</td>
  </tr>
  <tr>
    <td>Oblíbené</td>
    <td>Záložky</td>
  </tr>
  <tr>
    <td><span class="noMac">Panel adresa</span><span class="mac">Favorites Bar</span></td>
    <td>Navigační lišta</td>
  </tr>
  <tr>
    <td>Aktualizovat</td>
    <td>Obnovit</td>
  </tr>
  <tr>
    <td><span class="noMac">Odkazy</span><span class="mac">Copy Link to Clipbord</span></td>
    <td>Lišta záložek</td>
  </tr>
  <tr>
    <td><span class="noMac">Kopírovat zástupce</span><span class="mac">Download Link to Disk</span></td>
    <td>Kopírovat adresu odkazu</td>
  </tr>
 </tbody>
</table>

<h2 id="about_your_ie_settings">Vaše oblíbené položky a nastavení IE</h2>

<p>Firefox má novou funkci, která vám umožní importovat vaše existující nastavení z Internet Exploreru. Tato funkce se spustí jako první po instalaci Firefoxe (později je k dispozici v hlavní nabídce pod <span class="menuPath">Soubor &gt; Import</span>) a pokusí se importovat vaše oblíbené položky, soubory cookie, uložená hesla a další rozmanitá data. Tato možnost vám ušetří čas při nastavování Firefoxe tak, jak jej chcete mít.</p>

<h2 id="firebirds_features">Hlavní rysy Firefoxe</h2>
<div>
<ul>
  <li><strong>Prohlížení v panelech</strong>: Místo otevírání samostatných oken prohlížeče pro každou adresu můžete otevřít více adres v jednom okně a přepínat mezi nimi pomocí panelů. Jako domovskou stránku pak můžete mít více stránek.</li>
  <li><strong>Ovládání vyskakovacích oken</strong>: Povolení či zakázání vyskakovacích oken.</li>
  <li><strong>Správce souborů cookies</strong>: Dovoluje změnit chování Firefoxe při manipulaci se soubory cookies.</li>
  <li><strong>Správce stahování</strong>: Organizuje vaše stahování skladováním informací v jednom okně pro zvýšení přehlednosti. Máte tam přístup ke statistikám stahování bez nutnosti mít otevřeno samostatné okno pro každé stahování.</li>
  <li><strong>Správce obrázků</strong>: Dává možnost vypnout zobrazování obrázků z určených webových serverů či vypnout jejich zobrazování zcela. To je užitečné, pokud si přejete zkrátit čas potřebný pro nahrání stránky z webového serveru.</li>
</ul>
</div>

<h2 id="keyboard_shortcuts">Klávesové zkratky</h2>
<p>Jistě jste si povšimli, že Microsoft Internet Explorer a Firefox používají mnoho stejných klávesových zkratek. Pro celý seznam klávesových zkratek se podívejte na
  <a href="shortcuts.html">Seznam klávesových zkratek Firefoxe</a>.</p>

<div class="contentsBox"><em>26. října 2003</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>