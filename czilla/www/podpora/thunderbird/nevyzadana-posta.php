<?php
	require_once '../../inc/page.php';
	$page->setTitle('Nevyžádaná pošta v Thunderbirdu');
	$page->setHeadline('Nevyžádaná pošta','Návod jak blokovat nevyžádanou poštu v Thunderbirdu');
	$page->setKeywords('nevyžádaná pošta, spam, junk, podpora, nápověda, pomoc, návod, mozilla, thunderbird, pošťák');
	$page->setDescription('Návod jak blokovat nevyžádanou poštu v Thunderbirdu');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<p>Hlavním problémem elektronické pošty dneška je velké množství nevyžádané
pošty (spamu), která zahlcuje vaši poštovní schránku a&nbsp;okrádá vás 
o&nbsp;čas.</p>

<h2>Nastavení filtru nevyžádané pošty</h2>

<p>Přejete-li si v&nbsp;Thunderbirdu používat filtry nevyžádané pošty, proveďte
 následující:</p>
<ol>
	<li>Zvolte <span class="nabidka">Nastavení nevyžádané pošty</span> 
	v&nbsp;nabídce <span class="nabidka">Nástroje</span>.</li>
	<li>V rozbalovacím seznamu vyberte poštovní účet, pro který chcete filtry 
	nevyžadané pošty nastavit. Všimněte si, že "poštovním účtem" nyní označujeme
	položku v&nbsp;panelu složek, do které se ukládají zprávy. Pokud tedy 
	používáte  <a href="globalni-dorucena-posta.php">Globální doručenou
	poštu</a>, zvolte jako účet Místní složky. Tím se liší od filtrů pro zprávy,
	kde vybíráte účet, který zprávu přijímá. 

	<div class="img-center"><div class="img-c" style="width: 250px;">
		<a href="images/nevyzadana-posta-01.png" title="Klepněte pro plnou velikost..." class="zoom"><img src="images/nevyzadana-posta-01-m.png" alt="Nastavení nevyžádané pošty" style="width: 250px; height: 217px;" /></a>
	</div></div>

	</li>
	<li>Klepněte na <span class="nabidka">Adaptivní filtry</span> 
	a&nbsp;přesvědčte se, že je políčko <span class="nabidka">Povolit kontrolu
	na nevyžádanou poštu</span> skutečně zaškrtnuté. Mějte zároveň na paměti, 
	že tlačítko <span class="nabidka">Vymazat data</span> vymaže tréninková 
	data všech účtů, protože se pro všechny účty aplikují stejná pravidla.</li>
	<li>Klepněte na záložku <span class="nabidka">Nastavení</span> 
	a&nbsp;upravte další vlastnosti filtru nevyžádaných zpráv. Mějte přitom na 
	paměti:
	<ul>
		<li>Můžete zvolit, aby se nevyžádané zprávy ukládaly do zvláštní složky. 
		Tato složka se ale může v panelu složek objevit až po jejím prvním 
		použití.</li>
		<li>Ošetřování nevyžádaných zpráv znamená, že zprávy označené jako 
		nevyžádané budou zbaveny všech obrázků a&nbsp;převedeny do prostého 
		textu.</li>
	</ul></li>
	<li>Pokud máte více než jeden poštovní účet, proveďte výše uvedené kroky pro
	každý z&nbsp;nich.</li>
	<li>Když jste s&nbsp;nastavením spokojeni, potvrďte změny klepnutím na tlačítko
	<span class="nabidka">OK</span>.</li>
</ol>

<h2>Jak naučit filtr třídit správně</h2>

<p>Filtr nevyžádané pošty se potřebuje "naučit", co je a&nbsp;co není nevyžádaná 
pošta. Zpočátku tedy musíte každou zprávu, kterou obdržíte, pečlivě označit 
jako vyžádanou či nevyžádanou. Máme mnoho způsobů, jak to udělat:</p>
<ul>
	<li>Klepněte pravým tlačítkem na zprávu a&nbsp;v&nbsp;místní nabídce zvolte 
	<span class="nabidka">Označit</span> &gt; 
	<span class="nabidka">Nevyžádaná</span>, resp. 
	<span class="nabidka">Není nevyžádaná</span>.</li>
	<li>Zvolte zprávu a&nbsp;v&nbsp;nabídce <span class="nabidka">Zpráva</span>
	&gt; <span class="nabidka">Označit</span> &gt; 
	<span class="nabidka">Nevyžádaná</span>, resp. 
	<span class="nabidka">Není nevyžádaná</span></li>
	<li>Zvolte zprávu a&nbsp;na liště pošty klepněte na tlačítko 
	<span class="nabidka">Nevyžádané</span>.</li>
	<li>Zvolte zprávu a&nbsp;klepněte do sloupce <span class="nabidka">Druh 
	zprávy</span> v&nbsp;panelu zpráv. (Na tom místě se poté objeví ikona 
	odpadkového koše.)</li>
	<li>Zvolte zprávu a&nbsp;stiskněte <kbd>J</kbd> pro označení za nevyžádanou
	nebo <kbd>Shift</kbd>+<kbd>J</kbd> pro označení za vyžádanou zprávu.</li>
</ul>

<p>Na začátku nemusí být filtr nevyžádané pošty příliš přesný, protože se ještě
mnoho nenaučil. Proto byste se měli pozorně dívat do složky s&nbsp;nevyžádanou 
poštou, zda neobsahuje nějak zprávy, mylně označené jako nevyžádané. Po nějaké 
době učení ale shledáte, že filtr nevyžádané pošty pracuje efektivně a&nbsp;že 
vás zbavuje právě té pošty, kterou nechcete číst.</p>

<h2>Další informace</h2>
<ul>
	<li>Soubor, který uchovává naučené údaje filtru nevyžádané pošty, se jmenuje 
	"training.dat" a&nbsp;je uložen v adresáři použitého profilu.</li>
	<li>Chcete-li si prohlédnout záznam o&nbsp;třídění nevyžádané pošty, najdete 
	jej v&nbsp;<span class="nabidka">Nástroje</span> &gt; 
	<span class="nabidka">Nastavení nevyžádané pošty</span>
	 &gt; <span class="nabidka">Log soubor nevyžádané pošty</span>.</li>
</ul>

<?php
	$page->includeTemplate('footer');
?>