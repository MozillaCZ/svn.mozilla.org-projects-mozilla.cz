<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Ochrana soukromí v Thunderbirdu';
	$page->headline = array('Ochrana soukromí','Návod, jak si v Thunderbirdu chránit své soukromí');

	$page->setKeywords('soukromí, bezpečnost, viry, podpora, nápověda, pomoc, návod, mozilla, thunderbird, poąťák');
	$page->setDescription('Návod, jak si v Thunderbirdu chránit své soukromí');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links'); 
	$page->addSideBox('tips','thunderbird');

	$page->includeHeader();
?>

<p>My všichni máme rádi e-maily. Je tu ale problém, a&nbsp;to "havěť", která se 
e-maily šíří z&nbsp;jednoho počítače na druhý. Je to trochu jako řetězový 
dopis, ale zautomatizovaný a&nbsp;šířící se ohromující rychlostí. Toto "smetí"
může napáchat velké škody (např. obrovské účty za telefon, náhlá zpomalení 
připojení, náhodné pády systému).</p>

<h2>Jak vás pošťák Mozilla Thunderbird chrání</h2>
<ul>
	<li>Je imunní proti virům, které se mohou automaticky spustit při
	prohlížení zprávy.</li>
	<li>Je imunní proti virům, které jsou schované v&nbsp;obrázcích.</li>
	<li>Pomáhá odhalit nebezpečné e-mailové přílohy tím, že vám poskytne
	podrobnosti o&nbsp;přílohách.</li>
	<li>Pomáhá předejít nehodám, když pracujete se svou poštou.</li>
</ul>

<h3>Vypnutí vzdálených obrázků a&nbsp;JavaScriptu</h3>

<p>Text formátovaný v&nbsp;<abbr title="Hypertext Markup Language" 
 lang="en">HTML</abbr> může obsahovat obrázky nahrávané z&nbsp;webové stránky. 
Říká se jim <em>vzdálené obrázky</em>. Proč je vypínat? Existuje zde totiž 
velká možnost ohrožení vašeho soukromí, neboť spammeři (rozesílači nevyžádané 
pošty) používají vzdálené obrázky ke zjištění, zda jejich e-mail došel a&nbsp;zda
jste si ho přečetli. V&nbsp;tom případě vám pak začnou posílat ještě více 
nevyžádané pošty. To samé platí i&nbsp;pro vzáleně načítané skripty 
v&nbsp;jazyce JavaScript</p>

<p>Ve chvíli, kdy obdržíte zprávu se vzdálenými obrázky, Thunderbird zobrazí
upozornění o&nbsp;tom, že vzdálené obrázky byly zablokovány a&nbsp;v&nbsp;těle
zprávy nahrazeny jednoduchými zástupnými symboly. Pokud si zablokované obrázky
přejete vidět, například ve zprávě, kterou vám poslal kamarád, klepněte na
tlačítko <span class="nabidka">Zobrazit obrázky</span> v&nbsp;pravé části 
upozornění.</p>

<div class="img-center"><div class="img-c" style="width: 354px;">
	<a href="images/ochrana-soukromi-01.png" title="Klepněte pro plnou velikost..." class="zoom"><img src="images/ochrana-soukromi-01-m.png" alt="Pošta se zablokovanými obraázky" style="width: 354px; height: 266px;" /></a>
</div></div>

<p>Thunderbird ve výchozím nastavení povoluje zobrazovat výchozí obrázky ve
zprávách od lidí, které máte v&nbsp;Osobních kontaktech. Pokud si toto chování 
přejete změnit nebo pokud máte zájem o&nbsp;načítání všech vzdálených obrázků,
v&nbsp;nabídce <span class="nabidka">Nástroje</span> zvolte 
<span class="nabidka">Možnosti</span> a&nbsp;pak vyberte panel 
<span class="nabidka">Soukromí</span>.</p>

<?php
	$page->includeFooter();
?>