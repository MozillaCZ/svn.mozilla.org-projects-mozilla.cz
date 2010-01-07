<?php

	$inc_path		= "../../inc/";
	include($inc_path . "config.inc");

	setTitle("Klávesové zkratky ve Firefoxu");
	$page_desc		= "Seznam nejvíce používaných klávesových zkratek v prohlížeči Mozilla Firefox a porovnání s ekvivalenty Internet Exploreru.";
	$page_keywords	= "mozilla firefox microsoft internet explorer klávesové zkratky keyboard shortcuts horké klávesy hot keys ovládání klávesnice";

	include($inc_path . "h_head.inc");
	include($inc_path . "x_header.inc");

?>

<div class="main">

<h1>Klávesové zkratky ve Firefoxu</h1>

<p>Nabízíme vám seznam nejvíce používaných klávesových zkratek v&nbsp;prohlížeči
Mozilla Firefox a&nbsp;přidáváme porovnání s&nbsp;ekvivalentními akcemi v&nbsp;programu
Internet Explorer.</p>

<div class="tbl-1">
<table border="1">
<col width="30%" />
<col width="42%" />
<col width="28%" />
<thead>
	<tr>
		<th>Příkaz</th>
		<th>Mozilla Firefox</th>
		<th>Internet Explorer</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>Zpět</th>
		<td><kbd>Backspace</kbd> <a href="#notes-windows" class="note">Windows</a><br />
			<kbd>Alt</kbd>+<kbd>šipka vlevo</kbd></td>
		<td><kbd>Backspace</kbd><br />
			<kbd>Alt</kbd>+<kbd>šipka vlevo</kbd></td>
	</tr>
	<tr>
		<th>Vpřed</th>
		<td><kbd>Shift</kbd>+<kbd>Backspace</kbd> <a href="#notes-windows" class="note">Windows</a><br />
			<kbd>Alt</kbd>+<kbd>šipka vpravo</kbd></td>
		<td><kbd>Shift</kbd>+<kbd>Backspace</kbd><br />
			<kbd>Alt</kbd>+<kbd>šipka vpravo</kbd></td>
	</tr>
	<tr>
		<th>Domů</th>
		<td><kbd>Alt</kbd>+<kbd>Home</kbd></td>
		<td><kbd>Alt</kbd>+<kbd>Home</kbd></td>
	</tr>
	<tr>
		<th>Zastavit</th>
		<td><kbd>Esc</kbd></td>
		<td><kbd>Esc</kbd></td>
	</tr>
	<tr>
		<th>Obnovit</th>
		<td><kbd>F5</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>R</kbd></td>
		<td><kbd>F5</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>R</kbd></td>
	</tr>
	<tr>
		<th>Obnovit (potlačit vyrovnávací paměť)</th>
		<td><kbd>Ctrl</kbd>+<kbd>F5</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>R</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>F5</kbd></td>
	</tr>
</tbody>
<tbody>
	<tr>
		<th>Nový panel</th>
		<td><kbd>Ctrl</kbd>+<kbd>T</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Další panel</th>
		<td><kbd>Ctrl</kbd>+<kbd>Tab</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>PageDown</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Předchozí panel</th>
		<td><kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>Tab</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>PageUp</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Výběr panelu (1 až&nbsp;9)</th>
		<td><kbd>Ctrl</kbd>+(<kbd>1</kbd> až <kbd>9</kbd>) <a href="#notes-windows" class="note">Windows</a><br />
			<kbd>Alt</kbd>+(<kbd>1</kbd> až <kbd>9</kbd>) <a href="#notes-linux" class="note">Linux</a></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Zavřít panel</th>
		<td><kbd>Ctrl</kbd>+<kbd>W</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>F4</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Přesun panel doleva</th>
		<td><kbd>Ctrl</kbd>+<kbd>šipka doleva</kbd></td>
		<td>&nbsp;</td>
	</tr>	
	<tr>
		<th>Přesun panel doprava</th>
		<td><kbd>Ctrl</kbd>+<kbd>šipka doprava</kbd></td>
		<td>&nbsp;</td>
	</tr>	
	<tr>
		<th>Přesun panelu na začátek lišty</th>
		<td><kbd>Ctrl</kbd>+<kbd>Home</kbd></td>
		<td>&nbsp;</td>
	</tr>	
	<tr>
		<th>Přesun panelu na konec lišty</th>
		<td><kbd>Ctrl</kbd>+<kbd>End</kbd></td>
		<td>&nbsp;</td>
	</tr>		  	
	<tr>
		<th>Nové okno</th>
		<td><kbd>Ctrl</kbd>+<kbd>N</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>N</kbd></td>
	</tr>
	<tr>
		<th>Zavřít okno</th>
		<td><kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>W</kbd><br />
			<kbd>Alt</kbd>+<kbd>F4</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>W</kbd><br />
			<kbd>Alt</kbd>+<kbd>F4</kbd></td>
	</tr>
	<tr>
		<th>Otevřít soubor</th>
		<td><kbd>Ctrl</kbd>+<kbd>O</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>O</kbd></td>
	</tr>
</tbody>
<tbody>
	<tr>
		<th>Výběr adresního řádku</th>
		<td><kbd>Alt</kbd>+<kbd>D</kbd><br />
			<kbd>F6</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>L</kbd></td>
		<td><kbd>Alt</kbd>+<kbd>D</kbd><br />
			<kbd>F6</kbd><br />
			<kbd>F4</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>Tab</kbd></td>
	</tr>
	<tr>
		<th>Otevřít adresu v&nbsp;novém panelu</th>
		<td><kbd>Alt</kbd>+<kbd>Enter</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Doplnění domény .com</th>
		<td><kbd>Ctrl</kbd>+<kbd>Enter</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>Enter</kbd></td>
	</tr>
	<tr>
		<th>Doplnění domény .net</th>
		<td><kbd>Shift</kbd>+<kbd>Enter</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Doplnění domény .org</th>
		<td><kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>Enter</kbd></td>
		<td>&nbsp;</td>
	</tr>
</tbody>
<tbody>
	<tr>
		<th>Prohlížení kurzorem</th>
		<td><kbd>F7</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Přejít na konec stránky</th>
		<td><kbd>End</kbd></td>
		<td><kbd>End</kbd></td>
	</tr>		
	<tr>
		<th>Přejít na začátek stránky</th>
		<td><kbd>Home</kbd></td>
		<td><kbd>Home</kbd></td>
	</tr>		
	<tr>
		<th>Přesun na následující rám</th>
		<td><kbd>F6</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Přesun na předchozí rám</th>
		<td><kbd>Shift</kbd>+<kbd>F6</kbd></td>
		<td>&nbsp;</td>
	</tr>
</tbody>
<tbody>
	<tr>
		<th>Najít na této stránce</th>
		<td><kbd>Ctrl</kbd>+<kbd>F</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>F</kbd></td>
	</tr>
	<tr>
		<th>Najít další</th>
		<td><kbd>F3</kbd><br/>
			<kbd>Ctrl</kbd>+<kbd>G</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Najít předchozí</th>
		<td><kbd>Shift</kbd>+<kbd>F3</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Hledat během psaní odkazy</th>
		<td><kbd>'</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Hledat během psaní text</th>
		<td><kbd>/</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Hledání na webu <a href="#notes-1" class="note">1</a></th>
		<td><kbd>Ctrl</kbd>+<kbd>K</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>E</kbd> <a href="#notes-windows" class="note">Windows</a><br />
			<kbd>Ctrl</kbd>+<kbd>J</kbd> <a href="#notes-linux" class="note">Linux</a></td>
		<td><kbd>Ctrl</kbd>+<kbd>E</kbd></td>
	</tr>
	<tr>
		<th>Výběr následujícího vyhledávacího modulu</th>
		<td><kbd>Ctrl</kbd>+<kbd>šipka dolů</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Výběr předchozího vyhledávacího modulu</th>
		<td><kbd>Ctrl</kbd>+<kbd>šipka nahoru</kbd></td>
		<td>&nbsp;</td>
	</tr>	
</tbody>
<tbody>
	<tr>
		<th>Zmenšit velikost textu</th>
		<td><kbd>Ctrl</kbd>+<kbd>-</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Zvětšit velikost textu</th>
		<td><kbd>Ctrl</kbd>+<kbd>+</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Původní velikost textu</th>
		<td><kbd>Ctrl</kbd>+<kbd>0</kbd></td>
		<td>&nbsp;</td>
	</tr>
</tbody>
<tbody>
	<tr>
		<th>Kopírovat</th>
		<td><kbd>Ctrl</kbd>+<kbd>C</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>C</kbd></td>
	</tr>
	<tr>
		<th>Vložit</th>
		<td><kbd>Ctrl</kbd>+<kbd>V</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>V</kbd></td>
	</tr>
	<tr>
		<th>Vyjmout</th>
		<td><kbd>Ctrl</kbd>+<kbd>X</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>X</kbd></td>
	</tr>
	<tr>
		<th>Vybrat vše</th>
		<td><kbd>Ctrl</kbd>+<kbd>A</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>A</kbd></td>
	</tr>
	<tr>
		<th>Smazat</th>
		<td><kbd>Delete</kbd></td>
		<td><kbd>Delete</kbd></td>
	</tr>
	<tr>
		<th>Vymazání vybrané položky zadané do formuláře</th>
		<td><kbd>Shift</kbd>+<kbd>Delete</kbd></td>
		<td><kbd>Delete</kbd></td>
	</tr>
	<tr>
		<th>Zpět (v&nbsp;editačním prvku)</th>
		<td><kbd>Ctrl</kbd>+<kbd>Z</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>Z</kbd></td>
	</tr>
	<tr>
		<th>Znovu</th>
		<td><kbd>Ctrl</kbd>+<kbd>Y</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>Z</kbd> <a href="#notes-linux" class="note">Linux</a></td>
		<td><kbd>Ctrl</kbd>+<kbd>Y</kbd></td>
	</tr>
</tbody>

<tbody>
	<tr>
		<th>Přidat stránku do záložek</th>
		<td><kbd>Ctrl</kbd>+<kbd>D</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>D</kbd></td>
	</tr>
	<tr>
		<th>Přidat všechny panely do záložek</th>
		<td><kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>D</kbd></td>
		<td></td>
	</tr>	
	<tr>
		<th>Postranní lišta záložek</th>
		<td><kbd>Ctrl</kbd>+<kbd>B</kbd><br />
			<kbd>Ctrl</kbd>+<kbd>I</kbd> <a href="#notes-windows" class="note">Windows</a></td>
		<td><kbd>Ctrl</kbd>+<kbd>I</kbd></td>
	</tr>
	<tr>
		<th>Historie</th>
		<td><kbd>Ctrl</kbd>+<kbd>H</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>H</kbd></td>
	</tr>
</tbody>

<tbody>
	<tr>
		<th>Tisk</th>
		<td><kbd>Ctrl</kbd>+<kbd>P</kbd></td>
		<td><kbd>Ctrl</kbd>+<kbd>P</kbd></td>
	</tr>
	<tr>
		<th>Uložit stránku jako</th>
		<td><kbd>Ctrl</kbd>+<kbd>S</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Správce stahování</th>
		<td><kbd>Ctrl</kbd>+<kbd>J</kbd> <a href="#notes-windows" class="note">Windows</a><br />
			<kbd>Ctrl</kbd>+<kbd>Y</kbd> <a href="#notes-linux" class="note">Linux</a></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Celá obrazovka</th>
		<td><kbd>F11</kbd></td>
		<td><kbd>F11</kbd></td>
	</tr>
	<tr>
		<th>Informace o stránce</th>
		<td><kbd>Ctrl</kbd>+<kbd>I</kbd> <a href="#notes-linux" class="note">Linux</a></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Zdrojový kód stránky</th>
		<td><kbd>Ctrl</kbd>+<kbd>U</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Nová e-mailová zpráva</th>
		<td><kbd>Ctrl</kbd>+<kbd>M</kbd></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Vymazat důvěrná data</th>
		<td><kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>Del</kbd></td>
		<td>&nbsp;</td>
	</tr>		
	<tr>
		<th>Nápověda</th>
		<td><kbd>F1</kbd></td>
		<td><kbd>F1</kbd></td>
	</tr>	
</tbody>
</table>
</div>


<h2>Vysvětlivky</h2>

<dl>
	<dt id="notes-1">1</dt>
	<dd>Hledání na Webu přesune kurzor do vyhledávací lišty jen v&nbsp;případě,
	kdy je lišta viditelná. Pokud je vyhledávací lišta skrytá, tato
	klávesová zkratka nevykoná žádnou akci.</dd>

	<dt id="notes-windows">Windows</dt>
	<dd>Klávesová zkratka funguje pouze pod Microsoft Windows</dd>

	<dt id="notes-linux">Linux</dt>
	<dd>Klávesová zkratka funguje pouze pod Unixem/Linuxem</dd>
</dl>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující informace</h2>

	<h3 class="first">Více o&nbsp;ovládání</h3>

	<dl>
		<dt><a href="http://www.mozilla.org/support/firefox/keyboard.html"
				title="Firefox Help: Keyboard Shortcuts"
				hreflang="en" class="l-en" lang="en">Keyboard Shortcuts</a></dt>
		<dd>Kompletní přehled klávesových zkratek ve Firefoxu včetně
		porovnání s&nbsp;Internet Explorerem a&nbsp;Operou.</dd>

		<dt><a href="../ovladani-mysi/">Ovládání myší</a></dt>
		<dd>Nejčastěji používané funkce, které lze v&nbsp;prohlížeči Mozilla
		Firefox ovládat myší, a&nbsp;jejich ekvivalenty v&nbsp;Internet
		Exploreru.</dd>
	</dl>
	
</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $web_name; ?></a> &gt;
		<a href="../">Nejčastější otázky</a> &gt;
		<strong>Klávesové zkratky</strong>
	</p>
</div>
<?php

	include($inc_path . "x_footer.inc");

?>
