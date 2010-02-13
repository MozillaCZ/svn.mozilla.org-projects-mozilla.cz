<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Ovládání Mozilla Firefox myší';
	$page->headline = array('Ovládání Mozilla Firefox myší','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>



<p class="noMargin">Toto je seznam nejčastěji používaných funkcí, které lze v prohlížeči Mozilla Firefox ovládat myší a jejich ekvivalenty v Internet Exploreru a Opeře. Klávesové zkratky jsou pro Windows, ale mnoho z nich je funkční i pod Linuxem.</p>

<table border="1" width="100%">
  <thead>
    <tr>
      <th>Příkaz</th>
      <th>Firefox</th>
      <th>Internet Explorer</th>
      <th>Opera</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nový panel</td>
      <td>Dvojklepnutí na liště s panely</td>
      <td>&nbsp;</td>
      <td>Dvojklepnutí na liště s panely</td>
    </tr>  
    <tr>
      <td>Obnovit (potlačit vyrovnávací paměť)</td>
      <td><kbd>Shift</kbd>+Tlačítko Obnovit</td>
      <td><kbd>Shift</kbd>+Tlačítko Obnovit</td>
      <td>&nbsp;</td>
    </tr>    
    <tr>
      <td>Otevřít odkaz v novém okně</td>
      <td><kbd>Shift</kbd>+Left-click</td>
      <td><kbd>Shift</kbd>+Left-click</td>
      <td>&nbsp;</td>
    </tr>    
    <tr>
      <td>Otevřít odkaz v panelu na popředí</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+Levé tlačítko myši<br/><kbd>Shift</kbd>+
        Prostřední tlačítko myši</td>
      <td>&nbsp;</td>
      <td><kbd>Shift</kbd>+Levé tlačítko myši</td>
    </tr>        
    <tr>
      <td>Otevřít odkaz v panelu na pozadí</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+Levé tlačítko myši<br/>Prostřední tlačítko myši</td>
      <td>&nbsp;</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+Levé tlačítko myši<br/>Prostřední tlačítko myši</td>
    </tr>
    <tr>
      <td>Pomalé posunování stránky</td>
      <td><kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+Rolování</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>    
    <tr>
      <td>Uložit stránku jako</td>
      <td><kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+Levé tlačítko myši</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>    
    <tr class="unix">
      <td>Vložit URL a Přejít</td>
      <td>Prostřední tlačítko na panelu</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>    
    <tr>
      <td>Vpřed</td>
      <td><kbd>Shift</kbd>+Rolování nahoru</td>
      <td><kbd>Shift</kbd>+Rolování nahoru</td>
      <td><kbd>Shift</kbd>+Rolování nahoru</td>
    </tr> 
    <tr>
      <td>Zavřít panel</td>
      <td>Prostřední tlačítko na panelu</td>
      <td>&nbsp;</td>
      <td><kbd>Shift</kbd>+Levé tlačítko myši</td>
    </tr>  
    <tr>
      <td>Zmenšit velikost textu</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+Rolování nahoru</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+Rolování nahoru</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+Rolování nahoru</td>
    </tr>    
    <tr>
      <td>Zpět</td>
      <td><kbd>Shift</kbd>+Rolování dolů</td>
      <td><kbd>Shift</kbd>+Rolování dolů</td>
      <td><kbd>Shift</kbd>+Rolování dolů</td>
    </tr>
    <tr>
      <td>Zvětšit velikost textu</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+Rolování dolů</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+Rolování dolů</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+Rolování dolů</td>
    </tr>    
  </tbody>
</table>

<div class="contentsBox"><em>6. října 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>