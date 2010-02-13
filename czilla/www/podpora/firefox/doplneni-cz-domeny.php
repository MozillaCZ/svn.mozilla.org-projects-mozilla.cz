<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Jak na doplňování CZ domény ve Firefoxu 1.0';
	$page->headline = array('Jak na doplňování CZ domény ve Firefoxu 1.0','Upravte si doplňování domén podle svých potřeb');

	$page->includeHeader();
?>

<p>V&nbsp;prohlížeči <a href="/produkty/firefox/">Mozilla Firefox 1.0</a>
existuje užitečná funkce, která umožňuje doplňovat doménové jméno (např.
<tt>.com</tt>) do
<abbr title="Uniform Resource Locator" lang="en">URL</abbr>
adresy zadané do adresního řádku. Pokud například do adresního řádku
napíšete <tt>www.linux</tt> a&nbsp;už neuvedete <tt>.cz</tt>, Firefox po
stisku klávesy <kbd>Enter</kbd> adresu nenalezne a&nbsp;pokusí se provést
nalezení přidáním předdefinovaného doménového jména, tj. <tt>.com</tt>. Řada
českých uživatelů by ale spíš uvítala, kdyby se namísto <tt>.com</tt>
doplňovalo <tt>.cz</tt>. Naštěstí je poměrně snadné chování Firefoxu
upravit.</p>

<p><strong>Poznámka:</strong> Existuje též možnost potvrdit vyhledávání
klávesovou zkratkou <kbd>Ctrl</kbd>+<kbd>Enter</kbd>, která se od pouhého
stisknutí klávesy <kbd>Enter</kbd> liší tím, že neprovádí hledání tvaru
zadané webové stránky, ale automaticky doplní doménové jméno a&nbsp;provede
vyhledávání.</p>

<h2>Možnost č. 1 - Rozšíření Canonical URL</h2>

<p>Nejsnazší možností úpravy je instalace rozšíření
<a href="http://www.extensionsmirror.nl/index.php?showtopic=357"
title="Informace o rozšíření Canonical URL" hreflang="en">Canonical URL</a>,
které vám umožní dosáhnout požadované funkce pomocí přehledného dialogu.
Pokud nevíte, jak se rozšíření instaluje, přečtěte si
<a href="/podpora/firefox/instalace-rozsireni.html"
title="Návod na instalaci rozšíření do Mozilla Firefoxu">návod na instalaci</a>.
Nastavení rozšíření provedete v dialogu, který otevřete dvojklepnutím na
rozšíření ve <span class="nabidka">Správci rozšíření</span>.
</p>

<div class="img-center">
<img src="images/cz-03.png" alt="Dialog s nastavením" width="299" height="239" />
</div>

<h2>Možnost č. 2  - Manuální změna nastavení</h2>

<p>Spusťte Firefox a&nbsp;do adresního řádku zadejte místo adresy webové
stránky <tt>about:config</tt> a&nbsp;stiskněte klávesu <kbd>Enter</kbd>.
Zobrazí se vám okno s&nbsp;detailní konfigurací Firefoxu. Zdánlivě
nepřehledné okno umožňuje nastavit i&nbsp;ty vlastnosti, které nejdou
nastavit v&nbsp;dialogu <em>Možnosti</em>.</p>

<div class="img-center"><div class="img-c" style="width:339px">
	<a href="./images/cz-01.png" class="zoom"
		title="Klepněte pro plnou velikost..."><img
		src="./images/cz-01-m.png"
		style="width:339px;height:179px"
		alt="Okno s&nbsp;předvolbami" /></a>
</div></div>

<p>Do pole vedle popisku <tt>Filtr:</tt> zadejte <tt>keyword.enabled</tt>.
Z celého seznamu předvoleb zůstane vybraná jediná předvolba, označte ji
a&nbsp;klepněte pravým tlačítkem myši. Ze zobrazené místní nabídky vyberte
volbu <tt>Přepnout</tt>. Tím nastavíte tuto předvolbu na hodnotu
<tt>false</tt>, čímž ji zakážete. Odteď bude jako doména doplňována
<tt>.cz</tt>. Zadáte-li <tt>www.seznam</tt>, naběhnou vám webové stránky
<tt>www.seznam.cz</tt>.</p>

<div class="img-center"><div class="img-c" style="width:339px">
	<a href="./images/cz-02.png" class="zoom"
		title="Klepněte pro plnou velikost..."><img
		src="./images/cz-02-m.png"
		style="width:339px;height:177px"
		alt="Nastavení předvolby" /></a>
</div></div>

<p><strong>Poznámka:</strong> Pokud jste instalovali anglickou verzi
Firefoxu a&nbsp;až následně jste prováděli lokalizaci pomocí samostatného
lokalizačního balíčku, musíte ještě na stránce předvoleb
(<tt>about:config</tt>) změnit klíč <tt>browser.fixup.alternate.suffix</tt>
z&nbsp;hodnoty <tt>.com</tt> na <tt>.cz</tt>.</p>


<h2>Možnost č. 3 - Editace zdrojového kódu</h2>

<p>Jak si možná zkušenější uživatelé všimli, uvedenou předvolbou docílíte
jednoho &quot;vedlejšího&quot; efektu - zakážete <em lang="en">keywords</em>
(klíčová slova). Pokud tato slova využíváte, a&nbsp;nechcete o&nbsp;jejich
používání přijít, jistě využijete druhý způsob jak docílit stejného
chování. Jedná se o&nbsp;přímou editaci souboru <span class="soubor">browser.js</span>.
V&nbsp;adresáři s&nbsp;nainstalovaným Firefoxem naleznete podadresář
<span class="soubor">chrome</span>, ve&nbsp;kterém je umístěn archiv <span class="soubor">browser.jar</span>
a&nbsp;který rozbalíte v&nbsp;libovolném programu, jenž umí pracovat se ZIP soubory.
V&nbsp;něm je v&nbsp;cestě <tt>content/browser</tt> umístěn již zmíněný
soubor, který z&nbsp;něj vybalíte. V&nbsp;něm okolo řádku 1700 naleznete
následující kód:</p>

<pre class="codearea"><code>else if (aTriggeringEvent &amp;&amp; 'ctrlKey' in aTriggeringEvent &amp;&amp;
     aTriggeringEvent.ctrlKey)
     suffix = ".com/";</code></pre>

<p>Postačí, když řádek <tt>suffix = ".com/"</tt> zaměníte za <tt>suffix =
".cz/"</tt>, soubor uložíte a&nbsp;nahrajete jej zpět do archivu. Firefox
bude následně korektně doplňovat <tt>.cz</tt>.</p>

<hr />
<p><small>Poslední úprava: 14. 3. 2005, Tým CZilla</small></p>

<?php
	$page->includeFooter();
?>
