<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Používáme Správce stahování';
	$page->headline = array('Používáme Správce stahování','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>


<div class="contentsBox">V této kapitole:
  <ul>
    <li><a href="#what_is_download_manager">Co je Správce stahování?</a></li>
    <li><a href="#do_with_download_manager">Co vše s ním mohu dělat?</a></li>
    <li><a href="#download_manager_options"><span class="win">Možnosti</span><span                             class="unix">Předvolby</span> Správce stahování souborů</a></li>
  </ul>
</div>
<h2 id="what_is_download_manager">Co je Správce stahování?</h2>

<p><img src="../images/help-download_manager.png" width="310" height="222" alt="Dialog Správce stahování"/></p>

<p>Správce stahování je součást Firefoxu, která vám umožňuje sledovat a spravovat vaše stažené a právě stahované soubory. Jedná se o pohodlnou cestu pro odstranění nepřehledných stahovacích oken, která zachovává přehled o stavu stahovaných souborů.</p>

<p>Správce stahování se objeví tehdy, když jsou stahovány soubory. Můžete jej též vyvolat volbou v hlavní nabídce (<span class="menuPath">Nástroje &gt; Správce stahování</span>) či klávesovou zkratkou <span class="noUnix"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>J</kbd></span><span class="unix"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Y</kbd></span>.</p>


<h2 id="do_with_download_manager">Co vše s ním mohu dělat?</h2>

<p>
Hlavní předností Správce stahování je poskytování všech důležitých informací na jednom místě. V dialogu jsou 
k dispozici následující funkce:
</p>

<dl>

  <dt>Zastavit</dt>
  <dd>Klepnutím na <strong>Zastavit</strong> zastavíte stahování zvoleného souboru. To může být užitečné zejména tehdy, pokud potřebujete stáhnout některý soubor dříve než jiný, který je pro vás méně důležitý. Pozastavením stahovaného souboru umožníte stahování ostatních souborů rychleji. Pokud se rozhodnete ve stahování pokračovat, klepnete u zvoleného souboru na <strong>Pokračovat</strong>.</dd>

  <dt>Zrušit</dt>
  <dd>Pokud po začátku stahování zjistíte, že stahovaný soubor již nepotřebujete, můžete jeho stahování snadno zrušit klepnutím na <strong>Zrušit</strong>. Uvolníte tak přenosovou kapacitu pro ostatní soubory a webové stránky.</dd>

  <dt>Zobrazit</dt>
  <dd>Když je soubor úspěšně stažen, klepnutím na <strong>Zobrazit</strong> můžete otevřít složku, kam Firefox uložil zvolený soubor.</dd>

  <dt>Odebrat</dt>
  <dd>Pokud již nechcete uchovávat informace o stažení konkrétních souborů, můžete tyto informace jednoduše odstranit klepnutím na <strong>Odstranit</strong>.</dd>

  <dt>Opakovat</dt>
  <dd>Pokud nastala z nějakých důvodů situace, kdy nebyl soubor úspěšně stažen, můžete snadno jeho stahování opakovat. Pro opětovné stažení konkrétního souboru klepněte na <strong>Opakovat</strong>.</dd>
</dl>


<h2 id="download_manager_options">Nastavení Správce stahování</h2>

<p><img src="../images/help-opt_downloads.png"  width="502" height="353" alt="Nastavení Správce stahování"/></p>

<p>Nastavení Správce stahování souborů je dostupné pod tlačítkem <strong>Volby</strong> v dialogu Správce stahování. Po klepnutí na toto tlačítko se zobrazí dialog, kde můžete nastavit několik možností. Pro bližší informaci nahlédněte do kapitoly <a href="prefs.html#downloads_options"><span class="win">Možnosti</span><span                             class="unix">Předvolby</span></a>.</p>

<div class="contentsBox"><em>2. října 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>