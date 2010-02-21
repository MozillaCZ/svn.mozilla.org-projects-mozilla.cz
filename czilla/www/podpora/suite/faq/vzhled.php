<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Mozilla často kladené otázky');
	$page->setHeadline('Často kladené otázky','Mozilla FAQ: 8. Změna vzhledu Mozilly');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<h3>8. Změna vzhledu Mozilly</h3>
<ul>
<li><a href="#8.1">8.1. Je možné měnit vzhled Mozilly?</a></li>
<li><a href="#8.2">8.2. Jak mohu používat rozdílné ikony pro jednotlivé části Mozilly?</a></li>
<li><a href="#8.3">8.3. Jak mohu změnit úvodní obrázek?</a></li>
<li><a href="#8.4">8.4. Netscape 4 dovoloval vypnout zobrazování obrázků tlačítkem na liště, jde to i v Mozille?</a></li>
<li><a href="#8.5">8.5. Mohu pohybovat lištami nástrojů?</a></li>
</ul>


<dl class="faq">
<dt id="question-8.1"><a name="8.1">
8.1. Je možné měnit vzhled Mozilly?</a></dt>
<dd id="answer-8.1">
<p>Protože celé uživatelské rozhranní je napsáno v <a href="http://www.mozilla.org/projects/xul/">XUL</a> jako textový soubor,
Mozilla může používat nejrůznější témata vzhledu [skins]. Dvě základní - Classik a Modern - jsou součástí Mozilly.
Přepínat mezi nimi můžete ve View | Apply Theme a získat další nové můžete pomocí View | Apply Theme | Get New Themes.</p>

<p>Instalace a používání nového tématu je zpravidla zcela bez problémů.
Ovšem pokud přesto pozorujete nějaké divné chování (<i>např.</i>
v uživatelském rozhranní), vyzkoušejte u témat třetích stran zda:</p>

<ol>
<li>Vyskytuje se stejný problém u vestavěných témat (Classic a Modern)?</li>

<li>Jestliže ano, fungují Classic a Modern po odstranění všech ostatních témat?</li>

<li>Jestliže ano, fungují Classic a Modern v nově vytvořeném profilu?</li>
</ol>

<p>Pokud stále pozorujete divné chování, může to být chyba. Podívejte se do <a href="jak-se-zapojit.php">jak se zpojit</a>, kde se můžete dozvědět jak hlásit chyby.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-8.2"><a name="8.2">8.2. Jak mohu používat rozdílné ikony pro jednotlivé části Mozilly?
<i></i></a></dt>
<dd id="answer-8.2">
<p>Celý balík ikon pro Windows (ikony Giovanni/Grayrest) je dostupný z
<a href="http://www.mozdev.org/redirect/plugindoc/icons.html">PluginDoc</a> a
Grayrest má ještě <a href="http://grayrest.com/moz/resources/tutorials/iconstutorial.shtml">výukový seriál o ikonách</a>,
pro ty kteří by si přáli vytvořit své vlastní ikony.  Povdívejte se také do <a href="http://www.deskmod.com/core.mod?show=showcat&amp;cat_name=mozicons">sekce ikon pro Mozillu</a> na serveru DeskMod.</p>

<p>Unix/Linux nemůže zatím používat jiné ikony. Mozilla v součastnosti totiž neposkytuje manažeru oken dostatek informací, aby mohl vybrat správné ikony. Tato možnost je však připravována v novějších verzích.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-8.3"><a name="8.3" href="#8.3">8.3. Jak mohu změnit úvodní obrázek?</a></dt>
<dd id="answer-8.3">
<p>Na Windows je úvodní obrázek [splash screen] bitmapa (Windows <tt>.bmp</tt>
format). Abyste používali jiný obrázek, uložte ho jako <tt>mozilla.bmp</tt>
do stejného adresáře jako <tt>mozilla.exe</tt>.
Můžete použít obrázek libovolné velikosti.</p>

<p>Změnit úvodní obrázek na Macintoshy nebo Unixu/Linuxu v součastnosti vyžaduje
překompilování Mozilly.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-8.4"><a name="8.4">8.4. Netscape 4 dovoloval vypnout zobrazování obrázků tlačítkem na liště, jde to i v Mozille?</a></dt>
<dd id="answer-8.4">
<p>Je to možné dosáhnout použitím jiných témat. Vestavěná témata Classic a Modern
nemají možnost zobrazení tlačítek bez ikon, ale jistě existuje téma, které to umožňuje.
Některá jiná témata pak naopak používají pouze ikony, čím dosahují velké redukce
celé nástrojové lišty.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-8.5"><a name="8.5">8.5. Mohu pohybovat lištami nástrojů?</a></dt>
<dd id="answer-8.5">
<p>Je to plánováno. Zatím je však možné použít pouze
 View | Show/Hide pro zapínání a vypínání lišt. Lišty lze zapínat a vypínat také kliknutím na
jejich okraje.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
</dl>

<?php
	$page->includeTemplate('footer');
?>
