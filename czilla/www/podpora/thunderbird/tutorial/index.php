<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Začínáme používat Mozilla Thunderbird';
	$page->headline = array('Začínáme používat Mozilla Thunderbird','Úvod a obsah');

	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial');
	$page->setDescription ('Průvodce Mozilla Thunderbirdem pro začátečníky');	

	$page->includeHeader();
?>

<table>
<tr>
<td>
	<img src="/images/thunderbird.png"
		alt="Obrázek Mozilla Firefoxu"
		height="160" width="200"
		 style="margin-left:5px;margin-right:10px" />
</td>
<td style="vertical-align: top;">
<a href="/produkty/thunderbird/">Mozilla Thunderbird</a> je poštovní klient, 
který vám nabízí příjemné uživatelské prostředí a&nbsp;řadu pokročilých funkcí. 
Klient vás překvapí zejména konfortními funkcemi, spolehlivostí a&nbsp;velkým 
důrazem na bezpečnost uživatele. Thunderbird je k&nbsp;dispozici pro každého
zdarma. V&nbsp;této sérii článků se vám pokusím e-mailový klient Mozilla
Thunderbird představit.
</td>
</tr>
</table>

<dl>
	<dt><a href="./instalace.html">Instalace</a></dt>
	<dd>Po stažení Thunderbirdu projdeme jednotlivé kroky instalace a&nbsp;ukážeme si,
	jak si založit nový účet a&nbsp;stáhnout poštu.</dd>
	
	<dt><a href="./prace-s-postou.html">Základy práce s&nbsp;poštou</a></dt>
	<dd>Základní práce s&nbsp;Thunderbirdem je snadná. Povíme si, jaké základní funkce
  nabízí a&nbsp;jak číst staženou poštu.</dd>
	
	<dt><a href="./prace-s-postou2.html">Vytváření a používání podpisu</a></dt>
	<dd>Pod psané e-mailové zprávy můžete nechávat vkládat podpis. Ukážeme vám,
  jak si takový podpis vytvořit a&nbsp;jak jej používat.</dd>	
	
	<dt><a href="./prilohy.html">Práce s přílohami a&nbsp;kontakty</a></dt>
	<dd>Thunderbird umožňuje snadnou manipulaci s&nbsp;přílohami a&nbsp;v&nbsp;tomto díle si
  ukážeme, jak snadno vkládat soubory do přílohy k&nbsp;e-mailovým zprávám.</dd>		
	
	<dt><a href="./antispamovy-filtr.html">Antispamový filtr</a></dt>
	<dd>S&nbsp;Thunderbirdem můžete snadno bojovat proti nevyžádané poště (spamu).
  Poradíme vám, jak nejsnadněji na to.</dd>
	
	<dt><a href="./import.html">Import elektronické pošty a&nbsp;kontaktů</a></dt>
	<dd>Pokud jste doposud používali jiného e-mailového klient, jistě budete
  chtít importovat svou poštu. Převod vaší pošty je snadný.</dd>
	
	<dt><a href="./filtry.html">Filtry</a></dt>
	<dd>Filtry jsou mocnou zbraní na třídění přijímané pošty. Ukážeme vám,
  jak je používat. Je to totiž snadné.</dd>
	
	<dt><a href="./diskusni-skupiny.html">Diskusní skupiny</a></dt>
	<dd>Pročítáte-li často diskusní skupiny, pak jistě oceníte krátký popis, 
  jak s&nbsp;nimi pracovat v Thunderbirdu.</dd>			
  
	<dt><a href="./motivy-vzhledu.html">Motivy vzhledu</a></dt>
	<dd>Pomocí motivů vzhledu si můžete změnit vzhled Thunderbirdu k&nbsp;nepoznání.</dd>  	
</dl>

<p>Tuto sérii článků o&nbsp;programu Mozilla Thunderbird sepsal Frode Petersen, 
kterého můžete kontaktovat (anglicky - nejedná se o&nbsp;Čecha) na 
e-mailové adrese <a href="mailto:kay@nidelven-it.no">kay@nidelven-it.no</a>.
Pokud máte nějaký dotaz ohledně klientu Mozilla Thunderbird, navštivte <a
href="http://forum.czilla.cz/viewforum.php?f=21">fórum na podporu 
uživatelů</a> a&nbsp;my vám rádi pomůžeme.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./instalace.html">Instalace</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeFooter();
?>
