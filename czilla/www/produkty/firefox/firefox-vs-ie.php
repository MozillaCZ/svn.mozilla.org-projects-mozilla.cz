<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla Firefox vs. IE');
	$page->setHeadline('Mozilla Firefox vs. IE','13 důvodů proč místo Internet Exploreru používat Mozilla Firefox');
	$page->setKeywords ('firefox, mozilla, prohlížeč, browser, webový, internetový, moderní, internet explorer, IE, gecko');
	$page->setDescription ('13 důvodů proč místo Internet Exploreru používat Mozilla Firefox');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>

<div class="mainsplash"><a href="/podpora/firefox/"><img src="images/scr-firefox-m2.png" width="200" height="180" alt="Mozilla Firefox 1.0" /></a></div>

<p>Nejdůležitějším faktorem, který mě inspiroval k tomu, abych začal používat jiný prohlížeč než <b>Internet Explorer</b>, byly stálé chyby a bezpečnostní opravy, které mi znepříjemňovaly práci s tímto produktem. A to nezmiňuju doslova tuny různých pluginů, které ovládnou váš prohlížeč a změní nastavení vaší domovské stránky na nějaké placené reklamy, nebo přidají nástrojovou lištu, která vám práci pranic neulehčuje, spíš naopak.</p>

<p>Většina takovýchto špehounských programů (<i>spyware</i>) a slabin se běžně programuje pro Internet Explorer vzhledem k faktu, že IE ovládá přes 70% trhu s internetovými prohlížeči. Existují i další prohlížeče, které s IE mohou soupeřit, ale <b>Mozilla Firefox</b> (původně známý jako Firebird) je hodnotný prohlížeč se spoustou vlastností, který navíc zůstává velmi štíhlým, co se objemu týče. Vestavěné blokování vyskakovacích (pop-up) oken, které funguje lépe než spousta komerčních blokátorů, a panelové prohlížení jsou, mezi jinými, dvě věci, které dělají z prohlížeče Firefox <b>internetový prohlížeč snů</b>.</p>

<ol>
	<li><a href="#blokovani-popups">Blokování vyskakovacích oken</a></li>
	<li><a href="#spravce-stahovani">Správce stahování</a></li>
	<li><a href="#prohlizeni-v-panelech">Surfování s panely</a></li>
	<li><a href="#vestavene-vyhledavani">Vestavěné vyhledávání</a></li>
	<li><a href="#moznosti">Možnosti</a></li>
	<li><a href="#informace-o-strance">Informace o stránce</a></li>
	<li><a href="#rychlejsi-odezva">Rychlejší odezva</a></li>
	<li><a href="#dodrzuje-formatovani">Dodržuje HTML formátování</a></li>
	<li><a href="#ff-bezpecnost">Bezpečnost</a></li>
	<li><a href="#ff-open-source">Výhoda Open Source</a></li>
	<li><a href="#ciste-prostredi">Čisté prostředí</a></li>
	<li><a href="#mala-velikost">Poloviční objem stahovaných dat</a></li>
	<li><a href="#blokovani-obrazku">Blokování obrázků</a></li>
</ol>

<h2 class="nice ff" id="blokovani-popups">Blokování vyskakovacích oken</h2>
<p>Mít v těchto dnech internetový prohlížeč bez blokování vyskakovacích oken je jako mít širokopásmové připojení bez firewallu. Podle serveru Mozilla.org má Firefox rychle zastavit všechna otravná vyskakovací okna a to také skutečně dělá. Když jsem navštívil webovou stránku na testování blokování vyskakovacích oken, vestavěné blokování prohlížeče Firefox dokázalo zastavit všechna vyskakovací okna, zatímco se stránka načítala.</p>
<p>Na testovací stránce <a href="http://www.popup-blocker.info" hreflang="en">http://www.popup-blocker.info</a> lze provést několik testů, abyste si zjistili, jakou silou vládne váš blokátor. Ten vestavěný ve Firefoxu byl schopen ustát i "zátěžový test", který, podle popup-blocker.info, "... se pokouší překonat váš blokovací systém tím, že zkouší zaslat mu velký počet oken tak rychle, jak je to možné." Blokování Firefoxu dokázalo zastavit všech 200 vyskakovacích oken, aniž by se jakkoliv zapotilo. Stejný pokus provedený na IE bez blokování by patrně srazil vaše PC na kolena. Jednoduše si také můžete vytvořit seznam stránek, ze kterých jsou okna blokována, a tento seznam měnit pouhým kliknutím myši.</p>

<h2 class="nice ff" id="spravce-stahovani">Správce stahování souborů</h2>
<p>Vlastnost, která, myslím, měla být implementována do Internet Exploreru 6, byla správce stahování souborů. Správci stahování souborů vám dovolí kontrolovat a upravovat stahované soubory. Správce stahování souborů v Mozilla Firefox obsahuje právě ty nejdůležitější funkce. Můžete stahování pozastavit a pokračovat v něm později, což rozhodně není možné ve správci stahování souborů v IE. Kromě pěkného vzhledu ukládá správce stahování souborů informace jako například velikost a umístění staženého souboru. Když se stahování ukončí, je tento stav indikován malým upozorněním v pravé spodní části obrazovky.</p>

<div class="img-center"><div class="img-c" style="width: 200px;">
	<a href="images/duvod-downloadmanager-m.png"><img src="images/duvod-downloadmanager-m.png" width="200" height="208" alt="Firefox -správce stahování souborů" /></a>
</div></div>
<div class="mainsplash"><img src="images/duvod-downloadend.png" width="246" height="88" alt="Firefox - ukončení stahování" /></div>


<h2 class="nice ff" id="prohlizeni-v-panelech">Surfování s panely</h2>
<p>Mít otevřeno spoustu oken naráz může být trochu otravné, nemluvě o ztrátě spousty času a tak Firefox nabízí <a href="/podpora/firefox/prohlizeni-v-panelech.html">prohlížení v panelech</a>. Více o tomto ze stránek Mozilly: "...surfování s panely mění způsob jakým používáte internet, protože vás nechá otevírat odkazy v panelech na pozadí a přečíst si je, až budete mít čas. Žádná matoucí nová okna, žádná potřeba kontextového menu. Pouze podržte Ctrl, když klikáte na odkaz, nebo použijte prostřední tlačítko myši (máte-li ho)."</p>

<div class="mainsplash"><img src="images/duvod-tabs.png" width="488" height="38" alt="Firefox - surfování s panely" /></div>


<h2 class="nice ff" id="vestavene-vyhledavani">Vestavěné vyhledávání</h2>
<p>Proč na to nepomysleli programátoři IE? Mozilla Firefox přichází s vestavěným vyhledáváním. Výchozí je Google, ale samozřejmě lze <a href="/doplnky/vyhledavani/" title="CZilla: Vyhledávací moduly">přidat další</a>. Místo pro zadávání dotazu zabírá pouze malý prostor, což je plus ve srovnání s obrovskými lištami jinde.</p>

<div class="mainsplash"><img src="images/duvod-search.png" width="391" height="34" alt="Firefox - vestavěné vyhledávání" /></div>


<h2 class="nice ff" id="moznosti">Možnosti</h2>
<p>Další vlastností Mozilla Firefox je, že položka Možnosti je méně matoucí a roztříštěná než v IE. Lehce se pohybujete mezi nastaveními. Vymazat uložená hesla a celou historii je hračkou. V sekci "Stahování" si uživatel může nastavit, které programy se budou používat pro otevření stažených souborů.</p>

<div class="img-center"><div class="img-c" style="width: 335px;">
	<a href="images/duvod-settings.png"><img src="images/duvod-settings-m.png" width="335" height="236" alt="Firefox - Možnosti" /></a>
</div></div>
<div class="img-center"><div class="img-c" style="width: 325px;">
	<a href="images/duvod-settingsdownload.png"><img src="images/duvod-settingsdownload-m.png" width="325" height="228" alt="Firefox -předvolby stahování" /></a>
</div></div>

<h2 class="nice ff" id="informace-o-strance">Informace o stránce</h2>
<p>Kliknete-li na stránku pravým tlačítkem (Uživatelé PC) a pak vyberete "Informace a stránce", otevře se okno, ve kterém najdete množství informací o otevřené stránce. Zobrazí se jak obecné informace, tak také panel odkazů, ve kterém se zobrazují všechny odkazy obsažené ve stránce.</p>

<div class="img-center"><div class="img-c" style="width: 210px;">
	<a href="images/duvod-pageinfo.png"><img src="images/duvod-pageinfo-m.png" width="210" height="232" alt="Firefox - informace o stránce" /></a>
</div></div>


<h2 class="nice ff" id="rychlejsi-odezva">Rychlejší odezva</h2>
<p>Typická webová stránka se načte rychleji v Mozilla Firefox než v Internet Exploreru.</p>


<h2 class="nice ff" id="dodrzuje-formatovani">Dodržuje HTML formátování</h2>
<p>Mozilla Firefox dokáže dodržet formát html, když kopírujete webovou stránku do textového souboru. Například kopírujete-li text ve formátu html z webové stránky do Poznámkového bloku, text zkopírovaný v Mozilla Firefox je zachován v původním formátu, zatímco text zkopírovaný z IE není.</p>

<div class="mainsplash"><img src="images/duvod-textcopy.png" width="376" height="110" alt="Firefox - označený text" /></div>
<div class="mainsplash"><img src="images/duvod-textresults.png" width="333" height="272" alt="Zkopířovaný text z Firefoxu a IE" /></div>


<h2 class="nice ff" id="ff-bezpecnost">Bezpečnost</h2>
<p>Protože většina těch zlomyslných pluginů, které vás při každodenním surfování málem dostanou do blázince, se programuje pro Internet Explorer, používání Mozilla Firefox vám ušetří spoustu aspirinů proti bolení hlavy.</p>


<h2 class="nice ff" id="ff-open-source">Výhoda Open Source</h2>
<p>Projekt Mozilla je projektem Open Source, na kterém mohou pracovat tisíce nezávislých programátorů, aby našli bezpečnostní díry dříve, než mohou být zneužity.</p>


<h2 class="nice ff" id="ciste-prostredi">Čisté prostředí</h2>
<p>Firefox není přeplněn zbytečnostmi, např. tlačítkem historie či jinými tlačítky, která v Internet Exploreru zabírají většinu prostoru. Firefox nabízí o 2% více prostoru pro zobrazení stránek než Mozilla, o 4% více než Internet Explorer a o celých 10% více než Opera.</p>


<h2 class="nice ff" id="mala-velikost">Poloviční objem stahovaných dat</h2>
<p>Pomineme-li fakt, že Internet Explorer je obsažen ve Windows, Firefox má pouze poloviční velikost, což vám při stahování ušetří polovinu času.</p>


<h2 class="nice ff" id="blokovani-obrazku">Blokování obrázků</h2>
<p>Po kliknutí pravým tlačítkem na obrázek je uživateli nabídnuta volba blokovat obrázky z příslušné stránky. Toto se hodí, když navštěvujete stránky, které obsahují spoustu obrázků, hlavně reklam. Ty mohou být vypnuty, čímž se zvýší rychlost prohlížení.</p>

<div class="mainsplash"><img src="images/duvod-imageblock.png" width="234" height="290" alt="Firefox - blokování obrázků" /></div>


<p>Mozilla Firefox je alternativou k Internet Exploreru s vlastnostmi, které, jak věřím, odsunují IE do pozadí. Firefox definitivně připravil půdu pro válku prohlížečů. Vím, že je mnoho těch, co si myslí něco jiného a nikdy se nerozhodnou pro jiný prohlížeč než IE. Ale přemýšlejte o tom takto: Kdyby se Mozilla Firefox dodával s Windows spolu s Internet Explorerem, používali byste ho pak?</p>

<p>Získat další informace o Mozilla Firefox a stáhnout program <a href="http://www.mozilla.cz/produkty/firefox/" title="Mozilla Firefox: Stránka o produktu">můžete zde</a>.</p>

<hr />
<p><small>Toto je překlad článku <a href="http://www.flexbeta.net/main/articles.php?action=show&amp;id=32" hreflang="en">13 Reasons To Use Firefox Over IE</a> (Team Flexbeta, 11. února 2004) z <a href="http://www.flexbeta.net/" hreflang="en">flexbeta.net</a>. Článek do češtiny přeložil <?php $page->writeEmailAddress('LukasR@dtp-freelancers.com', 'Lukáš Růžička')?> a je zde uveden se souhlasem autorů.</small></p>

<?php
	$page->includeTemplate('footer');
?>