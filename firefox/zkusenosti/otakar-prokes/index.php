<?php
	require_once '../../inc/page.php';
	$page->setTitle('Otakar Prokeš: Odteď jsem novým uživatelem Firefoxu');
	$page->setDescription('Otakar Prokeš se s Firefoxem zkamarádil až na druhý pokus, když si dokázal přizpůsobit Firefox natolik, že v ovládání nepoznal rozdíl oproti předchozímu MyIE.');
	$page->setKeywords('mozilla firefox instalace přizpůsobení myie myie2 maxthon plugin zásuvný modul instalace');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Od teď jsem novým uživatelem Firefoxu</h1>

<p>Jmenuji se Otakar Prokeš, zabývám se správou databází, sítí
a&nbsp;okrajově programuji. Jsem velice častým uživatelem Internetu
a&nbsp;asi rok jsem zarytým fanouškem MyIE (tehdy jsem se o&nbsp;něm dočetl
v&nbsp;jednom ze&nbsp;svých oblíbených PC časopisů).</p>

<p>Na popud svého bratra jsem asi před měsícem vyzkoušel nainstalovat
Firefox. Nezkoušel jsem to z&nbsp;důvodů, že by mi v&nbsp;MyIE něco chybělo,
spíše ze zvědavosti a&nbsp;částečně i&nbsp;bezpečnostních důvodů. Upřímně
&ndash; byl jsem zklamán. Nechtěl jsem si zvykat na nic moc nového, a
v&nbsp;základní verzi Firefox nešlo téměř nic nastavit. Důraz jsem kladl
hlavně na práci se záložkami (nechtěl jsem je mít nahoře, ale dole; byly
zbytečně široké; pro otevření odkazu v&nbsp;novém okně jsem zvyklý používat
<kbd>Shift</kbd> a&nbsp;ne <kbd>Control</kbd>, takže se mi stále otvírala
nová okna na liště, atd.). Výsledkem bylo, že jsem Firefox asi za dvě hodiny
odinstaloval.</p>

<p>Včera mně však nešla načíst jedna stránka využívající nějaké Java prvky
a&nbsp;MyIE ji prostě nezobrazil správně &ndash; neměl jsem nainstalovaný
plugin. Bratr mi opět doporučil Firefox, který v&nbsp;takovém případě sám
automaticky nabídne, co je potřeba doinstalovat. Tato funkce mě zaujala,
a&nbsp;proto jsem se rozhodl to ještě jednou s&nbsp;Firefoxem zkusit. Asi po
dvou hodinách studia webu CZilla.cz a&nbsp;diskusního fóra a&nbsp;testování
možných rozšíření (o&nbsp;kterých jsem předtím vůbec nevěděl), jsem se dostal
do stavu, kdy se Firefox chová a&nbsp;vypadá jako MyIE. Hurá! Odteď jsem
novým uživatelem Firefoxu.</p>

<p class="sig">
	Otakar Prokeš
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
		<strong>Otakar Prokeš</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
