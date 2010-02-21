<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Prohlížení stránek v panelech');
	$page->setHeadline('Prohlížení stránek v panelech','Začínáme používat prohlížeč Firefox, 2. část');
	$page->setKeywords ('mozilla, firefox, prohlížeč, browser, začátečník, beginner, návod, tutorial, panely, prohlížení');
	$page->setDescription ('Návod jak ve Firefoxu pracovat s prohlížením v panelech');	
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./ovladani.php">Základní ovládání</a></li>
	<li>Předchozí:
		<a href="./instalace.php">Instalace a&nbsp;konfigurace</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>Funkce prohlížení v&nbsp;panelech je jedna z&nbsp;nejlepších vlastností prohlížeče 
Mozilla Firefox. Většinu času, který trávím on-line, totiž potřebuji mít 
otevřeno několik webových stránek současně, což může být mnohdy nepohodlné,
pokud musím mít otevřeno několik oken prohlížeče. Mozilla Firefox přidává
velmi užitečnou funkci prohlížení v&nbsp;panelech.</p>

<p>Spusťte prohlížeč Firefox a&nbsp;stiskněte klávesovou zkratku 
<kbd>CTRL</kbd>-<kbd>T</kbd>. Prohlížeč otevře nový panel a&nbsp;umožní 
tak otevřít další stránku v&nbsp;rámci jednoho okna.</p>

<div class="img-center"><div class="img-c" style="width:529px"><img
	src="../images/t2-obr01.png"
	alt="Prohlížení v panelech"
	style="height:283px;width:529px" />
</div></div>

<p>Jak vidíte, po stisknutí klávesové zkratky <kbd>CTRL</kbd>-<kbd>T</kbd> 
máte k&nbsp;dispozici 2&nbsp;prohlížeče v&nbsp;jednom okně :). Mezi těmito okny můžete 
přepínat pomocí klávesové zkratky <kbd>CTRL</kbd>-<kbd>Tab</kbd>. Pokud 
potřebujete více panelů, stiskněte znovu klávesovou zkratku 
<kbd>CTRL</kbd>-<kbd>T</kbd>.</p>

<p>Chcete při startu prohlížeče načíst více stránek? Ano, je to možné. Jděte
do nabídky <span class="nabidka">Nástroje ->Možnosti...</span> a&nbsp;uvidíte 
následující volbu v sekci <span class="nabidka">Obecné</span>:</p>

<div class="img-center"><div class="img-c" style="width:469px"><img
	src="../images/t2-obr02.png"
	alt="Nastavení domovské stránky"
	style="height:428px;width:469px" />
</div></div>

<p>Jak jste si všimli, v&nbsp;dialogu můžete zvolit:</p>

<ol>
	<li><span class="nabidka">Použít aktuální stránky</span></li>
	<li><span class="nabidka">Použít záložku...</span></li>
	<li><span class="nabidka">Použít prázdnou stránku</span></li>
</ol>

<p>Jak vidíte na obrázku, můžete též adresu stránky napsat manuálně a&nbsp;jednotlivé
položky oddělit znakem "|". Napište tolik stránek, kolik chcete :).</p>

<p>Je více způsobů, jak pracovat s&nbsp;panely. Pokud klepnete pravým
tlačítkem na panel, zobrazí se vám následující nabídka:</p>

<div class="img-center"><div class="img-c" style="width:528px"><img
	src="../images/t2-obr03.png"
	alt="Možnosti práce s panely"
	style="height:286px;width:528px" />
</div></div>

<p>V&nbsp;této nabídce můžete otevřít nové panely, obnovit aktuální panel 
(tuto funkci je též možno vyvolat klávesovou zkratkou 
<kbd>Ctrl</kbd>-<kbd>R</kbd>), obnovit všechny panely,
zavřít ostatní panely a&nbsp;konečně zavřít aktuální panel (můžete též použít
klávesovou zkratku <kbd>Ctrl</kbd>-<kbd>W</kbd>).</p>

<div class="img-center"><div class="img-c" style="width:613px"><img
	src="../images/t2-obr04.png"
	alt="Přesouvání panelů"
	style="height:141px;width:613px" />
</div></div>

<p>V&nbsp;poslední verzi Firefoxu můžete též volně měnit pořadí jednotlivých 
panelů. Pokud klepnete na hlavičku některého z&nbsp;nich, přidržíte stisknuté 
levé tlačítko myši, přesunete kurzor myši na jinou pozici v&nbsp;liště panelů 
a&nbsp;pustíte, panel se přesune na zvolené místo.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./ovladani.php">Základní ovládání</a></li>
	<li>Předchozí:
		<a href="./instalace.php">Instalace a&nbsp;konfigurace</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
