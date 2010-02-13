<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Klávesové zkratky Mozilla Firefox';
	$page->headline = array('Klávesové zkratky Mozilla Firefox','On-line nápověda prohlížeče Mozilla Firefox');

	$page->includeHeader();
?>



<p>Toto je seznam nejvíce používaných klávesových zkratek v prohlížeči Mozilla Firefox. Jedná se zejména o porovnání s ekvivalentními akcemi v Internet Exploreru a Opeře. </p>

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
      <td>Celá obrazovka</td>
      <td><kbd>F11</kbd></td>
      <td><kbd>F11</kbd></td>
      <td><kbd>F11</kbd></td>
    </tr>  
    <tr>
      <td>Další panel</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Tab</kbd><br />
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>PageDown</kbd></td>
      <td>&nbsp;</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Tab</kbd><br/>
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Page Down</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>F6</kbd><br/>
        <kbd>2</kbd></td>
    </tr>    
    <tr>
      <td>Domů</td>
      <td><kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Home</kbd></td>
      <td><kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Home</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Space</kbd></td>
    </tr>  
    <tr>
      <td>Doplnění domény .com</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd class="noMac">Enter</kbd><kbd                             class="mac">Return</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd class="noMac">Enter</kbd><kbd                             class="mac">Return</kbd></td>
      <td><kbd class="noMac">Enter</kbd><kbd                             class="mac">Return</kbd></td>
    </tr>
    <tr>
      <td>Doplnění domény .net</td>
      <td><kbd>Shift</kbd>+<kbd class="noMac">Enter</kbd><kbd                             class="mac">Return</kbd></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Doplnění domény .org</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+<kbd class="noMac">Enter</kbd><kbd                             class="mac">Return</kbd></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>      
    <tr>
      <td>Historie</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>H</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>H</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>H</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>4</kbd></td>
    </tr>     
    <tr>
      <td>Hledat během psaní odkazy</td>
      <td><kbd>'</kbd></td>
      <td>&nbsp;</td>
      <td><kbd>,</kbd><br/>
        <kbd>Shift</kbd>+<kbd>/</kbd></td>
    </tr>    
    <tr>
      <td>Hledat během psaní text</td>
      <td><kbd>/</kbd></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>  
    <tr>
      <td>Hledání na webu</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>K</kbd>
        <span class="win"><br/><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>E</kbd></span>
        <span class="unix"><br/><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>J</kbd></span></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>E</kbd></td>
      <td><kbd>Shift</kbd>+<kbd>F8</kbd></td>
    </tr>      
    <tr class="noWin">
      <td>Informace o stránce</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>I</kbd></td>
      <td>&nbsp;</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>8</kbd></td>
    </tr>    
    <tr>
      <td>Kopírovat</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>C</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>C</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>C</kbd></td>
    </tr>    
    <tr>
      <td>Najít další</td>
      <td><kbd>F3</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>G</kbd></td>
      <td>&nbsp;</td>
      <td><kbd>F3</kbd></td>
    </tr>    
    <tr>
      <td>Najít na této stránce</td>
      <td><kbd><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+F</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>F</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>F</kbd></td>
    </tr>    
    <tr>
      <td>Najít předchozí</td>
      <td><kbd>Shift</kbd>+<kbd>F3</kbd></td>
      <td>&nbsp;</td>
      <td><kbd>Shift</kbd>+<kbd>F3</kbd></td>
    </tr>
    <tr class="win">
      <td>Nová zpráva</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>M</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>M</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>E</kbd></td>
    </tr>    
    <tr>
      <td>Nové okno</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>N</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>N</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>N</kbd></td>
    </tr>    
    <tr>
      <td>Nový panel</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>T</kbd></td>
      <td>&nbsp;</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>N</kbd></td>
    </tr>    
    <tr>
      <td>Obnovit</td>
      <td><kbd>F5<br/></kbd>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>R</kbd></td>
      <td><kbd>F5</kbd><br />
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>R</kbd></td>
      <td><kbd>F5</kbd><br />
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>R</kbd></td>
    </tr>
    <tr>
      <td>Obnovit (potlačit vyrovnávací paměť)</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>F5</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+<kbd>R</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>F5</kbd></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Obnovit velikost textu</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>0</kbd></td>
      <td>&nbsp;</td>
      <td><kbd>6</kbd></td>
    </tr>    
    <tr>
      <td>Otevřít adresu v novém panelu</td>
      <td><kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd class="noMac">Enter</kbd><kbd                             class="mac">Return</kbd></td>
      <td>&nbsp;</td>
      <td><kbd>Shift</kbd>+<kbd class="noMac">Enter</kbd><kbd                             class="mac">Return</kbd></td>
    </tr>    
    <tr>
      <td>Otevřít soubor</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>O</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>O</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>O</kbd></td>
    </tr>    
    <tr>
      <td>Prohlížení kurzorem</td>
      <td><kbd>F7</kbd></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr> 
    <tr>
      <td>Předchozí panel</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+<kbd>Tab</kbd><br />
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>PageUp</kbd></td>
      <td>&nbsp;</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+<kbd>Tab</kbd><br/>
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Page Up</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+<kbd>F6</kbd><br/>
        <kbd>I</kbd></td>
    </tr>    
    <tr>
      <td>Přejít na konec stránky</td>
      <td><kbd>End</kbd></td>
      <td><kbd>End</kbd></td>
      <td><kbd>End</kbd></td>
    </tr>
    <tr>
      <td>Přejít na začátek stránky</td>
      <td><kbd>Home</kbd></td>
      <td><kbd>Home</kbd></td>
      <td><kbd>Home</kbd></td>
    </tr>    
    <tr>
      <td>Přesun na následující rám</td>
      <td><kbd>F6</kbd></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Přesun na předchozí rám</td>
      <td><kbd>Shift</kbd>+<kbd>F6</kbd></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>    
    <tr>
      <td>Přidat k záložkám</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>D</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>D</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>T</kbd></td>
    </tr>
    <tr>
      <td>Smazat</td>
      <td><kbd>Delete</kbd></td>
      <td><kbd>Delete</kbd></td>
      <td><kbd>Delete</kbd></td>
    </tr>    
    <tr>
      <td>Správce stahování</td>
      <td><span class="noUnix"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>J</kbd></span>
        <span class="unix"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Y</kbd></span></td>
      <td>&nbsp;</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>T</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>5</kbd></td>
    </tr>    
    <tr>
      <td>Správce záložek</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>B</kbd>
        <span class="win"><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>I</kbd></span></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>I</kbd></td>
      <td><kbd>F4</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>B</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>1</kbd></td>
    </tr>   
    <tr>
      <td>Tisk</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>P</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>P</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>P</kbd></td>
    </tr>    
    <tr>
      <td>Uložit stránku jako</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>S</kbd></td>
      <td>&nbsp;</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>S</kbd></td>
    </tr>    
    <tr>
      <td>Vložit</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>V</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>V</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>V</kbd></td>
    </tr>    
    <tr>
      <td>Vybrat vše</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>A</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>A</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>A</kbd></td>
    </tr>    
    <tr>
      <td>Vyjmout</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>X</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>X</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>X</kbd></td>
    </tr>    
    <tr>
      <td>Vymazání vybrané položky zadané do formuláře</td>
      <td><kbd>Shift</kbd>+<kbd>Del</kbd></td>
      <td><kbd>Del</kbd></td>
      <td>&nbsp;</td>
    </tr>    
    <tr>
      <td>Výběr adresního řádku</td>
      <td><kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>D</kbd><br />
        <kbd>F6</kbd><br />
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>L</kbd></td>
      <td><kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>D</kbd><br />
        <kbd>F6</kbd><br />
        <kbd>F4</kbd><br />
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Tab</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>H</kbd><br />
        <kbd>F8</kbd></td>
    </tr>    
    <tr>
      <td>Výběr následujícího vyhledávacího modulu</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Šipka dolů</kbd></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>    
    <tr>
      <td>Výběr panelu (1 až 9)</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+(<kbd>1</kbd> až <kbd>9</kbd>)</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>    
    <tr>
      <td>Vpřed</td>
      <td><kbd>Shift</kbd>+<kbd>Backspace</kbd><br />
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Šipka doprava</kbd></td>
      <td><kbd>Shift</kbd>+<kbd>Backspace</kbd><br />
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Šipka doprava</kbd></td>
      <td><kbd>Shift</kbd>+<kbd>Backspace</kbd><br />
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Šipka doprava</kbd><br />
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Šipka doprava</kbd><br />
        <kbd>X</kbd></td>
    </tr>    
    <tr>
      <td>Zastavit</td>
      <td><kbd>Esc</kbd></td>
      <td><kbd>Esc</kbd></td>
      <td><kbd>Esc</kbd></td>
    </tr>    
    <tr>
      <td>Zavřít okno</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+<kbd>W</kbd><br/>
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>F4</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>W</kbd><br/>
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>F4</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>W</kbd><br/>
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>F4</kbd></td>
    </tr>    
    <tr>
      <td>Zavřít panel</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>W</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>F4</kbd></td>
      <td>&nbsp;</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>W</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>F4</kbd></td>      
    </tr>     
    <tr>
      <td>Zdrojový kód stránky</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>U</kbd></td>
      <td>&nbsp;</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>F3</kbd></td>
    </tr>    
    <tr>
      <td>Zmenšit velikost textu</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>-</kbd></td>
      <td>&nbsp;</td>
      <td><kbd>9</kbd></td>
    </tr>    
    <tr>
      <td>Znovu</td>
      <td><span class="win"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Y</kbd></span>
        <span class="noWin"><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+<kbd>Z</kbd></span></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Y</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Y</kbd><br/>
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Shift</kbd>+<kbd>Z</kbd></td>
    </tr>    
    <tr>
      <td>Zpět</td>
      <td><kbd>Backspace</kbd><br />
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Šipka doleva</kbd></td>
      <td><kbd>Backspace</kbd><br />
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Šipka doleva</kbd></td>
      <td><kbd>Backspace</kbd><br />
        <kbd class="noMac">Alt</kbd><kbd                             class="mac">Opt</kbd>+<kbd>Šipka doleva</kbd><br />
        <kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Šipka doleva</kbd><br />
        <kbd>Z</kbd></td>
    </tr>
    <tr>
      <td>Zpět (v editačním prvku)</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Z</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Z</kbd></td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>Z</kbd></td>
    </tr>    
    <tr>
      <td>Zvětšit velikost textu</td>
      <td><kbd class="noMac">Ctrl</kbd><kbd                             class="mac">Cmd</kbd>+<kbd>+</kbd></td>
      <td>&nbsp;</td>
      <td><kbd>0</kbd></td>
    </tr>
  </tbody>
</table>

<div class="contentsBox"><em>6. října 2004</em></div>
<p>Copyright &copy; 2003-2004 Spolupracovníci projektu Mozilla Help Viewer.</p>

<?php
	$page->includeFooter();
?>