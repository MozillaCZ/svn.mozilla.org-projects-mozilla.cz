<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Aktuální záložky (RSS) ve Firefoxu';
	$page->headline = array('Aktuální záložky (RSS) ve Firefoxu','K čemu slouží aktuální záložky v prohlížeči Mozilla Firefox?');

	$page->includeHeader();
?>

<p><strong>Firefox 1.0&nbsp;<abbr title="Preview Release"
lang="en">PR</abbr></strong> přináší novinku <strong>aktuální
záložky</strong>, která vám usnadní přehled v novinkách z různých webů.
Máte na Internetu své oblíbené weby? Často zjišťujete, co je na nich
nového? Zda nepřibyl nový článek, nový recept na vaření či nová verze
vašeho programu? Pak jsou aktuální záložky určené pro vás.</p>

<h2>K čemu slouží aktuální záložky</h2>

<p>Aktuální záložky vám umožní rychle a snadno zjistit, zda se na vašem
oblíbeném webu <strong>objevilo něco nového</strong>. To vše bez nutnosti
načítat všechny vaše oblíbené stránky a s nimi často i spoustu reklam, které
zpomalují vaše prohlížení. Rychle zjistíte, na kterých webech dnes najdete něco
nového, a návštěva kterých webů je pro dnešek zbytečná.</p>

<p>Navíc vás aktuální záložky nasměrují <strong>přímo na nový článek či
novinku</strong>, takže nemusíte zbytečně načítat titulní stránku webu a na ní
novinku hledat. Líbí se vám? Tak si práci s aktuálnímí záložkami
vyzkoušíme.</p>

<h2>Vytvoření aktuálních záložek</h2>

<p>Dejme tomu, že chcete mít přehled, co nového se děje na webu, který právě teď
čtete, tedy na <a href="/">www.czilla.cz</a>. Prohlížíte-li si tuto stránku
prohlížečem <a href="/produkty/firefox/">Mozilla Firefox</a> verze alespoň 1.0&nbsp;<abbr
title="Preview Release" lang="en">PR</abbr>, pak v pravém dolním rohu prohlížeče
byste měli vidět ikonku <img src="./images/az-rss-ikonka.png" alt="RSS ikonka"
width="14" height="14" />. Ta signalizuje, že tento web vám nabízí k odebírání
novinky pomocí formátu <abbr title="RDF Site Summary" lang="en">RSS</abbr>,
který aktuální záložky používají.</p>

<p>Klepněte na tuto ikonku a zvolte <strong>Přihlásit k odebírání
'RSS'</strong>. Zobrazí se dialog <strong>Přidat záložku</strong>, ve kterém
můžete upravit název a umístění vaší aktuální záložky. Klepnutím na <tt>OK</tt>
si vytvoříte aktuální záložku.</p>

<div class="mainsplash"><img src="./images/az-pridat-zalozku.png"
alt="Dialog Přidat záložku" width="289" height="142" /></div>

<h2>Jak prohlížet aktuální záložky</h2>

<p>Nyní si zobrazte postranní lištu <tt>Záložky</tt> (pomocí nabídky <tt>Zobrazit /
Postranní lišta / Záložky</tt> nebo klávesové zkratky <kbd>CTRL</kbd>+<kbd>I</kbd>) a
najděte právě vytvořenou aktuální záložku. Rozbalte jí a uvidíte seznam aktuálních
novinek webu <a href="/">www.czilla.cz</a>. Klepnutím na novinku otevřete její
plný text v okně prohlížeče. Obsah záložek se průběžně aktualizuje (aktualizaci
lze vyvolat i ručně) a tak zůstávají tyto záložky skutečně <strong>stále
aktuální</strong>.</p>

<div class="mainsplash"><a href="./images/az-novinky-czilla.png"><img
src="./images/az-novinky-czilla-m.png" width="339" height="242"
alt="Náhled " title="Klepnutím náhled zvětšíte" /></a></div>

<p>Pokud se vám myšlenka aktuálních záložek líbí, vytvořte si aktuální záložky
všech svých oblíbených webů. Aktuální záložku můžete <strong>přidat i ručně</strong>
ve <tt>Správci záložek</tt> pomocí nabídky <tt>Soubor / Nová aktuální
záložka</tt>. Pokud se ikonka <abbr title="RDF Site Summary" lang="en">RSS</abbr>
na vašem oblíbeném webu nezobrazí, tento pravděpodobně formát <abbr
title="RDF Site Summary" lang="en">RSS</abbr> nenabízí. Zkuste o něj požádat
jeho webmastera a pošlete mu odkaz na tento článek.</p>

<p>Pokud vám aktuální záložky nevyhovují, můžete vyzkoušet <a
href="http://sage.mozdev.org/" hreflang="en" title="Domovská stránka projektu Sage">
<abbr title="RDF Site Summary" lang="en">RSS</abbr> čtečku Sage</a>, či
poslední verzi programu <a href="/produkty/thunderbird/">Mozilla Thunderbid</a>,
které nabízejí pokročilejší práci s <abbr title="RDF Site Summary"
lang="en">RSS</abbr>.</p>

<h2><abbr title="RDF Site Summary" lang="en">RSS</abbr>
a&nbsp;<abbr title="Resource Description Framework" lang="en">RDF</abbr></h2>

<p>Aktuální záložky jsou založené na formátech <abbr title="RDF Site Summary"
lang="en">RSS</abbr> a <abbr title="Resource Description Framework" lang="en">
RDF</abbr>. Pokud se chcete o těchto formátech dozvědět více, přečtěte si
následující články:</p>

<ul>
	<li><a href="http://www.lupa.cz/clanek.php3?show=3155">Kdo nesyndikuje, ať není</a> (Lupa.cz)</li>
	<li><a href="http://www.lupa.cz/clanek.php3?show=2710">Sdílení obsahu: Web nad weby</a> (Lupa.cz)</li>
	<li><a href="http://www.root.cz/clanky/roztomile-specifikacni-schizma/">Roztomilé specifikační schizma</a> (Root.cz)</li>
	<li><a href="http://www.slunecnice.cz/product/RDF/">Resource Description Framework (RDF)</a> (Slunečnice.cz)</li>
</ul>

<p>Pokud vaše stránky již export do některého z výše uvedených formátů podporují a rádi byste na to Firefox upozornili, stačí přidáte-li
odpovídající prvek <code>&lt;link&gt;</code> do hlavičky vaší stránky. Více informací naleznete na těchto stránkách:</p>

<ul>
	<li><a href="http://interval.cz/clanek.asp?article=3411">Metadata a hlavička pro XHTML dokument</a> (Interval.cz)</li>
	<li><a href="http://www.w3.org/QA/Tips/use-links">Use <code>&lt;link&gt;</code>s in your document</a> (w3.org)</li>
	<li><a href="http://livemarks.aktualne.cz/">Aktuální záložky</a></li>
</ul>

<p><small>Aktualizováno: 16. 10. 2004, Tým CZilla</small></p>

<?php
	$page->includeFooter();
?>
