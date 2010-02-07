<?php
	require_once '../../inc/page.php';
	$page->setTitle('Naďa Malkovská: Spokojená uživatelka Firefoxu');
	$page->setDescription('Nejdříve Naďa zjistila, že není jediný prohlížeč, pak zkusila Mozillu a nakonec je spokojená s Firefoxem.');
	$page->setKeywords('uživatel internet prohlížeč firefox bezpečnost ie explorer změna vzhledu rychlost spuštění panely filtrování reklam adblock');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Spokojená uživatelka Firefoxu</h1>

<p>Ahoj,</p>

<p>jmenuji se Naďa a&nbsp;jsem architektka. Dalo by se tedy říci, že patřím spíše
mezi běžné uživatele internetu, kteří jej často &#8222;používají&#8220;, ale
málokdy vlastně vědí CO a&nbsp;JAK. Před pár lety jsem neměla ani nejmenší
tušení, že to, co používám k&nbsp;prohlížení internetových stránek, je nějaký
&#8222;browser&#8220; (což může být naprostou samozřejmostí, ale zdaleka ne
pro každého).</p>

<p>Zásadním průlomem pro mě bylo, když jsem se začala orientovat v&nbsp;odborném
názvosloví (to vše díky kolejní strahovské komunitě). Podstatnou informací
bylo, že není jen jeden prohlížeč, ale je jich hned několik. Zapůsobily na
mě tehdy i&nbsp;zprávy kolem špatné bezpečnosti IE. Náhoda tenkrát přála Mozille.
Jak již jsem psala výše, jelikož nejsem žádný programátor, zalíbila se mi
především možnost libovolně měnit vzhled prohlížeče. Později jsem se sama
přesvědčila též o&nbsp;lepší bezpečnosti (již dva roky můj počítač neměl v&nbsp;sobě
vir ani jinou podobnou havěť). Netrvalo dlouho a&nbsp;Mozillu začala používat
i&nbsp;má spolubydlící a obě jsme se naučily, přizpůsobovat si ji k&nbsp;&#8222;obrazu
svému&#8220;.</p>

<p>Odtud už vede velice krátká cesta k&nbsp;Firefoxu. U&nbsp;něj považuji za velice
příjemné oddělení prohlížeče od pošty (na kterou používám výhradně Holuba
&ndash; Thunderbird) na dvě aplikace. Díky tomu je již rychlost, se kterou
se prohlížeč spouští, celkem slušná. Za VELKÝ KLAD též považuji možnost
prohlížení internetových stránek v&nbsp;panelech, aniž bych musela neustále
otvírat nová okna; nastavení filtrování nevyžádaných reklam pomocí Adblocku
a&nbsp;lištu s&nbsp;výběrem vyhledávačů. Tak to je asi z&nbsp;mé strany vše, a&nbsp;pokud mi do
toho nic nevleze, tak jej budu používat spokojeně i&nbsp;nadále :o)</p>

<p class="sig">
	Naďa Malkovská
</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující odkazy</h2>
<?php
	$page->includeTemplate('stories');
?>
</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<a href="../">Zkušenosti</a> &gt;
		<strong>Naďa Malkovská</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
