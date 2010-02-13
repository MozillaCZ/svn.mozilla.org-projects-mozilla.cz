<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Složky uloženého hledání';
	$page->headline = array('Složky uloženého hledání','Návod jak pouľívat v Thunderbirdu složky uloženého hledání');

	$page->setKeywords('virtuální složky, složky uloženého hledání, podpora, nápověda, pomoc, návod, mozilla, thunderbird, pošťák');
	$page->setDescription('Návod jak používat RSS čtečku v Thunderbirdu');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links'); 
	$page->addSideBox('tips','thunderbird');

	$page->includeHeader();
?>

<p>Thunderbird již od verze 0.9 nabízí Složky uloženého hledání. Taková složka
vypadá úplně stjně jako běžná složka s&nbsp;poštou, ale když ji otevřete, prohledá
vaše zprávy podle kritérií, která jste určili, a&nbsp;zobrazí seznam zpráv, které
jim odpovídají. Můžete například vytvořit Složku uloženého hledání, která bude
vždy obsahovat zprávy od konkrétní osoby za posledních 30 dní a&nbsp;to dokonce 
i&nbsp;tehdy, když jsou tyto uloženy v&nbsp;různých složkách.</p>

<p>Složka uloženého hledání je "virtuální složka" ve smyslu, že uchovává
zprávy, odpovídající zadaným kritériím, které jsou ale ve skutečnosti uloženy
někde úplně jinde. Pokud označíte a&nbsp;smažete zprávu uvnitř Složky uloženého 
hledání, zpráva bude skutečně vymazána, ale pokud smažete celou Složku
uloženého hledání, ke smazání zpráv v&nbsp;ní obsažených nedojde. Navíc, narozdíl
od běžné složky, pokud změníte kritéria pro hledání, obsah Složky uloženého
hledání se příslušně změní. Složky uloženého hledání zůstanou v Thunderbirdu
tak dlouho, dokud je sami nesmažete, a&nbsp;tak vám dávají rychlý přístup ke 
všem vašim nadefinovaným hledáním.</p>

<h2>Vytvoření Složky uloženého hledání</h2>

<p>Novou Složku uloženého hledání vytvoříte v&nbsp;dialogu 
<span class="nabidka">Nová složka uloženého hledání</span>, který můžete otevřít
hned několika způsoby.</p>

<ul>
	<li>V nabídce <span class="nabidka">Úpravy</span> zvolte 
	  <span class="nabidka">Najít</span> &gt; 
	  <span class="nabidka">Hledat ve zprávách</span>. Poté, co jste určili 
	  kritéria pro vyhledávání a&nbsp;klepli na tlačítko 
	  <span class="nabidka">Hleadet</span>, můžete si výsledky prohlédnout 
	  a&nbsp;za pomoci tlačítka 
	  <span class="nabidka">Uložit hledání jako složku...</span> hledání 
	  uložit.</li>
	<li>V nabídce <span class="nabidka">Soubor</span> zvolte 
	<span class="nabidka">Nový</span> &gt; 
	<span class="nabidka">Uložené hledání...</span>.</li>
	<li>Poté, co jste dokončili vyhledávání za pomoci Lišty vyhledávání,
	umístěné nad panelem zpráv, můžete v&nbsp;rozbalovacím seznamu zvolit 
	<span class="nabidka">Uložit hledání jako složku...</span>.</li>
	<li>Z&nbsp;rozbalovacího seznamu <span class="nabidka">Zobrazit</span>, 
	 umístěného nad panelem zpráv, zvolte 
</ul>

<p>Ve chvíli, kdy se objeví dialog 
<span class="nabidka">Nová složka uloženého hledání</span>, jednoduše vložte
jméno nové Složky uloženého hledání, zvolte její umístění (za pomoci nabídky
<span class="nabidka">Vytvořit tuto novou podsložku ve složce:</span>,
upřesněte kritéria pro vyhledávání a&nbsp;pak potvrďte. Nová Složka uloženého 
hledání by se měla objevit v&nbsp;panelu složek.</p>
   
<p>Nejjednodušším způsobem, jak prohledávat i&nbsp;v&nbsp;podsložkách, je použít 
dialog  <span class="nabidka">Úpravy</span> zvolte 
<span class="nabidka">Najít</span>  &gt; <span class="nabidka">Hledat ve 
zprávách</span>, který obsahuje zaškrtávací políčko <span class="nabidka">Hledat 
v&nbsp;podsložkách</span>. Další tři způsoby, uvedené výše, vyhledávají pouze 
ve zvolené složce. Pokud si přejete i &nbsp;zde zahrnout podsložky do hledání, 
klepněte na tlačítko <span class="nabidka">Vybrat</span> a&nbsp;zvolte, které 
složky chcete do hledání zahrnout.</p>

<h2>Hledání online a&nbsp;offline</h2>
<p>Složky uloženého hledání je možné nastavit i&nbsp;pro IMAP účty a&nbsp;diskusní
skupiny, a&nbsp;to buď v&nbsp;režimu online či offline. Stačí zaškrtnou resp. 
odškrtnout tlačítko <span class="nabidka">Hledat online</span> v&nbsp;dialogu 
<span class="nabidka">Nová složka uloženého hledání</span>.</p>
 
<p>Vyhledávání online vám přinese přesnější výsledky, protože se hledání 
zopakuje pokaždé, kdy otevřete danou Složku uloženého hledání. Z tohoto důvodu
bude déle trvat takovou složku otevřít.</p>

<p>Vyhledávání offline naproti tomu načíta obsah Složky uloženého hledání
rychleji, ale její obsah nemusí vždy odpovídat obsahu složek, ve kterých
se hledá. Například pokud používáte IMAP účet, Složky uloženého hledání
v&nbsp;offline režimu nemusí obsahovat všechny vámi odeslané zprávy, dokud
neotevřete složku Odeslané zprávy.</p>

<h2>Změna kritérií vyhledávání pro existující Složku uloženého hledání</h2>

<p>Přejete-li si změnit kritéria vyhledávání pro nějakou Složku uloženého 
hledání, klepněte na ni pravým tlačítkem a&nbsp;zvolte 
<span class="nabidka">Vlastnosti</span> nebo v&nbsp;nabídce 
<span class="nabidka">Úpravy</span> zvolte 
<span class="nabidka">Vlastnosti složky</span>. Objeví se dialog
<span class="nabidka">Upravit vlastnosti uloženého hledání</span>, kde změníte
kritéria podle svých představ a&nbsp;potvrdíte.</p>

<p>Pokud se obsah Složky uloženého hledání ihned neaktualizuje, klepněte
na nějakou jinou složku a&nbsp;pak znovu na Složku uloženého hledání.</p>

<h2>Smazání Složky uloženého hledání</h2>
<p>Složku uloženého hledání můžete smazat stejně, jako byste mazali běžnou
složku. To můžete udělat buď klepnutím pravým tlačítkem na složku 
a&nbsp;zvolením <span class="nabidka">Smazat složku</span>, nebo zvolením 
složky a&nbsp;v&nbsp;nabídce <span class="nabidka">Úpravy</span> volbou 
položky <span class="nabidka">Smazat složku</span>.</p>

<p>Pokud Složku uloženého hledání smažete, nebudou vymazány žádné zprávy. 
Tato složka se zároveň neobjeví v&nbsp;Koši a&nbsp;není žádný způsob, jak ji 
obnovit.</p>

<h2>Další informace</h2>
<ul>
	<li>Prozatím není možné prohledávat složky a&nbsp;podsložky ve více než 
	jednom účtu najednou.</li>
	<li>V&nbsp;panelu zpráv můžete Složku uloženého hledání přetahovat 
	z&nbsp;jedné složky do druhé, není je však možné přethánout do Místních 
	složek.</li>
	<li>Složku uloženého hledáné obsahuje soubor "virtualFolders.dat" 
	v&nbsp;adresáři vašeho profilu. Pokud vám na Složkách uloženého hledání 
	opravdu záleží, měli byste tento soubor zálohovat - pád aplikace jej dokáže
	snadno poškodit.</li>
</ul>

<?php
	$page->includeFooter();
?>