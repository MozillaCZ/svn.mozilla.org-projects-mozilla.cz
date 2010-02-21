<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Začínáme používat prohlížeč Firefox');
	$page->setHeadline('Začínáme používat prohlížeč Firefox','Úvod a obsah');
	$page->setKeywords ('mozilla, firefox, prohlížeč, browser, začátečník, beginner, návod, tutorial');
	$page->setDescription ('Průvodce Mozilla Firefoxem pro začátečníky');	
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<table>
<tr>
<td>
	<img src="../images/firefox-shot.png" alt="Obrázek Mozilla Firefoxu"
		height="161" width="200" style="margin-left:5px;margin-right:10px" />
</td>
<td style="vertical-align: top;">
<a href="/produkty/firefox/">Mozilla Firefox</a> je jedním z&nbsp;nejlepších
webových prohlížečů současnosti. Podobně jako jiné prohlížeče je k&nbsp;dispozici
zdarma. Díky unikátnímu vývoji založeném na Open Source dosahuje výsledný
produkt vynikající rychlosti a&nbsp;obsahuje méně chyb než programy vyvíjené
tradičními metodami. Mozilla Firefox obsahuje řadu nadstandardních funkcí, které
v&nbsp;konečném celku tvoří výjimečný produkt. V&nbsp;této sérii článků se vám pokusím
prohlížeč Firefox představit.
</td>
</tr>
</table>

<dl>
	<dt><a href="./instalace.php">Instalace a&nbsp;konfigurace</a></dt>
	<dd>Po stažení Firefoxu projdeme jednotlivé kroky instalace a&nbsp;ukážeme si,
	jak naimportovat nastavení, oblíbené stránky a&nbsp;cookies z&nbsp;jiných
	prohlížečů.</dd>

	<dt><a href="./prohlizeni-v-panelech.php">Prohlížení v panelech</a></dt>
	<dd>Prohlížení v&nbsp;panelech zrychlí vaše procházení webu a zároveň
	zpřehlední vaši pracovní plochu.</dd>

	<dt><a href="./ovladani.php">Základní ovládání</a></dt>
	<dd>Poznáte základní ovládání navigace po webu, dozvíte se o&nbsp;ovládání
	Firefoxu pomocí myši a&nbsp;klávesových zkratek, seznámíte se s&nbsp;funkcí
	blokování vyskakovacích oken.</dd>

	<dt><a href="./rozsireni.php">Rozšíření</a></dt>
	<dd>Funkčnost Firefoxu lze upravit podle vašeho přání pomocí rozšíření 
  a&nbsp;doplňkových programů. Ukážeme si, jak si rozšíření vybrat 
  a&nbsp;nainstalovat.</dd>

	<dt><a href="./historie.php">Procházení historií</a></dt>
	<dd>Firefox si pro vás pamatuje každou stránku, kterou navštívíte. Díky
	této historii je schopný nejen označovat navštívené odkazy, ale
	nabídnout vám i&nbsp;možnost se snadno k některé ze stránek vrátit.</dd>

	<dt><a href="./stahovani-souboru.php">Stahování souborů</a></dt>
	<dd>Správce stahování vám umožní lepší přehled nad probíhajících 
  i&nbsp;dokončených stahování.</dd>

	<dt><a href="./tisk-stranek.php">Tisk stránek</a></dt>
	<dd>Webové stránky je někdy potřeba vytisknout, a&nbsp;tak Firefox nabízí
	vynikající nástroje pro přizpůsobení tisku vašim potřebám.</dd>

	<dt><a href="./zalozky.php">Záložky</a></dt>
	<dd>Navštěvujete-li některé webové stránky často, určitě oceníte jejich
	rychlé vyvolání. Záložky vám také dávají silný nástroj pro utřídění
	zajímavých stránek.</dd>
	
</dl>

<p>Tuto sérii článků o&nbsp;programu Mozilla Firefox sepsal Frode Petersen, 
kterého můžete kontaktovat (anglicky - nejedná se o&nbsp;Čecha) na 
e-mailové adrese <a href="mailto:kay@nidelven-it.no">kay@nidelven-it.no</a>.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./instalace.php">Instalace a konfigurace</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
