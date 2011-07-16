<?php
	require_once '../../inc/page.php';
	$page->setTitle('Rozdíly v terminologii Thunderbirdu a Outlook Expressu');
	$page->setDescription('Základní slovníček rozdílně pojmenovaných prvků a funkcí v Thunderbirdu a Outlook Expressu.');
	$page->setKeywords('mozilla Thunderbird Outlook Express slovník slovníček rozdíly funkce pojmenování terminologie');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Rozdíly v&nbsp;terminologii Thunderbirdu a&nbsp;Outlook Expressu</h1>

<p>Při používání poštovního klienta Thunderbird se setkáte s&nbsp;některými
rozdílně pojmenovanými prvky a&nbsp;funkcemi. Připravili jsme pro vás
základní slovníček těchto rozdílů.</p>

<div class="tbl-1">
<table border="1">
<col width="50%" span="2" />
<thead>
	<tr>
		<th>Outlook Express</th>
		<th>Mozilla Thunderbird</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>Konverzace</td>
		<td>Vlákna</td>
	</tr>
	<tr>
		<td>Odstraněná pošta</td>
		<td>Koš</td>
	</tr>
	<tr>
		<td>Panel nástrojů</td>
		<td>Nástrojové lišty</td>
	</tr>
	<tr>
		<td>Pravidla pro zprávy</td>
		<td>Třídící filtry zpráv</td>
	</tr>
	<tr>
		<td>Přijmout</td>
		<td>Vyzvednout</td>
	</tr>
	<tr>
		<td>Příznak</td>
		<td>Praporek</td>
	</tr>
	<tr>
		<td>Účty</td>
		<td>Nastavení účtu</td>
	</tr>
	<tr>
		<td>Zkomprimovat všechny složky</td>
		<td>Provést údržbu složek</td>
	</tr>
</tbody>
</table>
</div>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující informace</h2>

	<h3 class="first">Čtěte dále</h3>

	<dl>
		<dt><a href="../">Nejčastější otázky</a></dt>
		<dd>Nabízíme odpovědi na otázky, které vás při úvahách
		o&nbsp;přechodu nejčastěji napadají.</dd>

		<dt><a href="https://support.mozillamessaging.com/cs/kb/klavesove-zkratky">Klávesové zkratky</a></dt>
		<dd>Přehled nejběžnějších klávesových zkratek v&nbsp;Thunderbirdu
		a&nbsp;porovnání s&nbsp;ekvivalenty v&nbsp;Outlook Expressu.</dd>
	</dl>
</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<a href="../">Nejčastější otázky</a> &gt;
		<strong>Rozdíly v&nbsp;terminologii</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
