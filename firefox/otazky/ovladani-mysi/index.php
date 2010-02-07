<?php
	require_once '../../inc/page.php';
	$page->setTitle('Ovládání Firefoxu myší');
	$page->setDescription('Seznam nejčastěji používaných funkcí, které lze v prohlížeči Mozilla Firefox ovládat myší a jejich ekvivalenty v Internet Exploreru.');
	$page->setKeywords('mozilla firefox internet explorer ovládání myší myš mouse shortcuts');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Ovládání Firefoxu myší</h1>

<p>Nabízíme vám seznam nejčastěji používaných funkcí, které lze
v&nbsp;prohlížeči Mozilla Firefox ovládat myší a&nbsp;jejich ekvivalenty
v&nbsp;Internet Exploreru. Klávesové zkratky jsou pro Windows, ale mnoho
z&nbsp;nich je funkční i&nbsp;pod Linuxem.</p>

<div class="tbl-1">
<table border="1">
<col width="33%" span="3" />
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
		<td><kbd>Shift</kbd>+Rolování dolů</td>
		<td><kbd>Shift</kbd>+Rolování dolů</td>
	</tr>
	<tr>
		<th>Zavřít panel</th>
		<td>Prostřední tlačítko na panelu</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Zmenšit velikost textu</th>
		<td><kbd>Ctrl</kbd>+Rolování nahoru</td>
		<td><kbd>Ctrl</kbd>+Rolování nahoru</td>
	</tr>
	<tr>
		<th>Vpřed</th>
		<td><kbd>Shift</kbd>+Rolování nahoru</td>
		<td><kbd>Shift</kbd>+Rolování nahoru</td>
	</tr>
	<tr>
		<th>Zvětšit velikost textu</th>
		<td><kbd>Ctrl</kbd>+Rolování dolů</td>
		<td><kbd>Ctrl</kbd>+Rolování dolů</td>
	</tr>
	<tr>
		<th>Nový panel</th>
		<td>Dvojklepnutí na liště s panely</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Otevřít odkaz v&nbsp;panelu na pozadí</th>
		<td><kbd>Ctrl</kbd>+Levé tlačítko myši<br />
			Prostřední tlačítko myši</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Otevřít odkaz v&nbsp;panelu na popředí</th>
		<td><kbd>Ctrl</kbd>+<kbd>Shift</kbd>+Levé tlačítko myši<br />
			<kbd>Shift</kbd>+Prostřední tlačítko myši</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Otevřít odkaz v&nbsp;novém okně</th>
		<td><kbd>Shift</kbd>+Levé tlačítko myši</td>
		<td><kbd>Shift</kbd>+Levé tlačítko myši</td>
	</tr>
	<tr>
		<th>Vložit URL a&nbsp;Přejít</th>
		<td>Prostřední tlačítko na panelu <a href="#notes-linux" class="note">Linux</a></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Obnovit (potlačit vyrovnávací paměť)</th>
		<td><kbd>Shift</kbd>+Tlačítko Obnovit</td>
		<td><kbd>Shift</kbd>+Tlačítko Obnovit</td>
	</tr>
	<tr>
		<th>Uložit stránku jako</th>
		<td><kbd>Alt</kbd>+Levé tlačítko myši</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th>Pomalé posunování stránky</th>
		<td><kbd>Alt</kbd>+Rolování</td>
		<td>&nbsp;</td>
	</tr>
</tbody>
</table>
</div>


<h2>Vysvětlivky</h2>

<dl>
	<dt id="notes-linux">Linux</dt>
	<dd>Uvedené ovládání funguje pouze pod Unixem/Linuxem</dd>
</dl>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující informace</h2>

	<h3 class="first">Více o&nbsp;ovládání</h3>

	<dl>
		<dt><a href="http://support.mozilla.com/cs/kb/Ovl%C3%A1d%C3%A1n%C3%AD%20Firefoxu%20my%C5%A1%C3%AD">Ovládání Firefoxu myší</a></dt>
		<dd>Kompletní přehled funkcí, které lze ve Firefoxu ovládát myší,
		a&nbsp;jejich obdoby v&nbsp;Internet Exploreru a&nbsp;Opeře.</dd>

		<dt><a href="../klavesove-zkratky/">Klávesové zkratky</a></dt>
		<dd>Přehled nejběžnějších klávesových zkratek ve Firefoxu
		a&nbsp;porovnání s&nbsp;ekvivalenty v&nbsp;Internet Exploreru.</dd>

		<dt><a href="https://addons.mozilla.org/cs/firefox/addon/12">All-in-One Gestures</a></dt>
		<dd>Oblíbené rozšíření pro ovládání Firefoxu pomocí gest myši.</dd>
	</dl>

</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<a href="../">Nejčastější otázky</a> &gt;
		<strong>Ovládání Firefoxu myší</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
