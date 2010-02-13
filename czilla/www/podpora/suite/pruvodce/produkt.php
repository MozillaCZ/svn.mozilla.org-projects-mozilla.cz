<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Používáme Mozillu (Mozilla - balík aplikací)';
	$page->headline = array('Používáme Mozillu','Mozilla - balík aplikací');

	$page->includeHeader();
?>

<h2 id="index">Obsah</h2>

<ul>
<li><a href="#features">Jaké jsou nejzajímavější znaky Mozilly?</a></li>
<li><a href="#languages">Jaké jazyky Mozilla podporuje?</a></li>
<li><a href="#what-difference">Jaký je rozdíl mezi Mozillou pro koncové uživatele a programem Netscape 6/7?</a></li>
<li><a href="#how-compares">Jak dopadne Mozilla v porovnání s jinými prohlížeči?</a></li>
<li><a href="#standards">Jaké Internetové standardy Mozilla podporuje?</a></li>
<li><a href="#devices">Jaké druhy zařízení mohou být pro Mozillu použity?</a></li>
<li><a href="#more">Kde mohu nalézt více informací?</a></li>
</ul>

<ul>
<li><a href="index.html#index">Hlavní obsah</a></li>
</ul>

<p><br /></p>



<h3><a id="features">Jaké jsou nejzajímavější znaky Mozilly?</a></h3>

<ul>
<li><a href="../faq/prohlizec.html#2.10">Paralelní zpracování [Pipelining]</a> &#8211; zlepšuje výkon prohlížeče jak při použití vytáčeného připojení tak na širokopásmových připojeních.</li>
<li><a href="../faq/prohlizec.html#2.3">Panelové prohlížení [Tabbed browsing]</a> &#8211; umožňuje přepínat stránky bez nutnosti přepínat okna aplikace.</li>
<li><a href="../faq/prohlizec.html#2.4">Blokování vyskakovacích oken [Pop-up blocking]</a> &#8211; je potřeba říkat více?</li>
<li><a href="http://developer.netscape.com/evangelism/docs/articles/bookmarks/">Klíčová slova záložek [Bookmark Keywords]</a> &#8211; zjednodušené prohlížení a prohledávání.</li>
<li><a href="../faq/obecne.html#1.5">Uživatelská přizpůsobitelnost</a> &#8211; nastavte si předvolby Mozilly tak, aby vám vyhovovala</li>
<li>Prohlížení stránek, (<a href="http://www.mozilla.org/docs/end-user/moz_shortcuts.html#page_viewing">změna velikosti</a> a alternativní stylesheety) &#8211; přestaňte být oběťmi špatného designu stránek.</li>
<li><a href="../faq/vzhled.html">Témata vzhledu</a> &#8211; upravte si vzhled Mozilly podle svého vkusu a zvyků.</li>
<li><a href="../faq/chatzilla.html#6.1">Chat</a> &#8211; vestavěný klient pro chat vám umožní používat IRC.</li>
<li><a href="http://www.mozdev.org/">Rozšiřitelnost</a> &#8211; rozšíření (extension) znamenají, že Mozilla může být více než jen prohlížeč.</li>
<li><a href="http://www.mozilla.org/releases/">Podpora více platforem</a> &#8211; stejná Mozilla na různých počítačích (Mozilla je nyní každý den předpřipravena pro použití na mnoha systémech a na dalších je možno ji zkompilovat).</li>
</ul>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="languages">Jaké jazyky Mozilla podporuje?</a></h3>

<p>Mozilla má pevný základ pro podporu různých jazykových znakových sad (Unicode), proto je dostupná v <b>38 jazycích</b>. Pro nejnovější seznam se podívejte na: <tt><a href="http://www.mozilla.org/projects/l10n/mlp_status.html" title="Projekty lokalizací">http://www.mozilla.org/projects/l10n/mlp_status.html</a></tt>.</p>

<p>Díky otevřené struktuře Mozilly, <b>kdokoli</b> může volně překládat Mozillu do jakéhokoli jazyku. Organizace Mozilla to podporuje, protože to umožňuje lidem prohlížet stránky v jejich jazyce nebo dialektu, který si vyberou a zaměřovat se na obsah s regionálním významem.</p>

<p>Hlad po lokalizovaných aplikacích a obsahu je pozorovatelný v enormním množství dobrovolných komunit, které se rozhodli vyvíjet lokalizované verze. Mozilla.org podporuje tyto snahy skrz <a href="http://www.mozilla.org/projects/l10n/mlp_howto.html" title="jak lokalizovat Mozillu">Mozilla - lokalizační projekt</a>, který poskytuje poradenství, komunity a kontatní informace pro mnoho lokalizačních projektů.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="what-difference">Jaký je rozdíl mezi Mozillou pro koncové uživatele a programem Netscape 6/7?</a></h3>

<p>Kód Mozilly tvoří jádro Netscape 6 a pozdějších produktových řad.</p>

<p>Protože Mozilla je projekt s otevřením kódem, <strong><i>kdokoli</i> může libovolně používat kód Mozilly</strong> a kombinovat ho s dalším kódem a vytvořit tak nový produkt. Netscape se účastní práce na produktu prostřednictvím týmu lidí podílejících se na projektu Mozilla. Práce na produktu je podpořena hostování dalších podílníků na kódu Mozilly.</p>

<p>Netscape používá většinu &#8211; ale né všechen &#8211; kód Mozilly a používá ho k vytvoření Netscape 6/7. Netscape přidává další rozšíření k základu Mozilly, jako např. AOL Instant Messenger, Java virtual machine, a sadu zásuvných modulů [plugin]; Netscape také přidává svoje logo, další značkové příslušenství a přidává URL, apod.</p>

<p>Netscape 6/7 je zákaznická úprava kódu Mozilly, určená pro zákazníka.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="how-compares">Jak dopadne Mozilla v porovnání s jinými prohlížeči?</a></h3>

<p>Mozilla poskytuje <strong>maximální konzistenci napříč širokým spektrem platforem</strong>. To se stává důležitým v případě, že oddělení IT potřebuje podporu pro využití více platforem nebo pokud např. uživatelé Windows chtějí zkusit Linux.</p>

<p>Pro tabulku porovnání vlastností zkuste: <tt><a href="http://www.vorstrasse91.com/moztips/browser_compare.html" title="Porovnání Mozilly a jiných prohlížečů">http://www.vorstrasse91.com/moztips/browser_compare.html</a></tt>. Nynější porovnání prohlížečů <a href="http://www.hut.fi/u/hsivonen/os-x-browsers.html" title="Porovnání prohlížečů pro Mac">pouze pro Mac</a> (chybí nový prohlížeč založený na Gecko pro Max OS X <a href="http://chimera.mozdev.org/" title="The Chimera project - domovská stránka">Chimera</a>) bylo také uděláno.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="standards">Jaké Internetové standardy Mozilla podporuje?</a></h3>

<p>Podpora pro uznané a vyvíjené standardy je jedním z hlavních prvků vytvoření Mozilly. Tyto standardy jsou vytvořeny důvěryhodnými světovými pilíři jako Wolrd Wide Web Consortium (<a href="http://www.w3.org/" title="W3C">W3C</a>), <a href="http://www.ecma.ch" title="ECMA">ECMA</a>, kteří vzali na svá bedra úkol standardizace ne jen JavaScriptu a ECMAScriptu, <a href="http://www.ietf.org/" title="IETF">IETF</a> a další.</p>

<p>Standardy které Mozilla podporuje již ve verzi 1.0:</p>

<ul>
<li><acronym><a href="http://www.w3.org/TR/html401/">HTML 4.01</a></acronym> a <acronym><a href="http://www.w3.org/TR/xhtml1/">XHTML 1.0/1.1</a></acronym>,</li>
<li><acronym><a href="http://www.w3.org/TR/REC-CSS1">CSS1</a></acronym>, <acronym><a href="http://www.w3.org/TR/REC-CSS2/">CSS2</a></acronym> a část <acronym><a href="http://www.w3.org/Style/CSS/current-work.html">CSS3</a></acronym>,</li>
<li><acronym><a href="http://www.w3.org/TR/2000/WD-DOM-Level-1-20000929/">DOM1</a></acronym>, <acronym><a href="http://www.w3.org/DOM/DOMTR#dom2">DOM2</a></acronym> a část <acronym><a href="http://www.w3.org/DOM/DOMTR#dom3">DOM3</a></acronym> (<abbr>baseURI</abbr>, load, a některé metody zacházení s namespace),</li>
<li><abbr><a href="http://www.w3.org/Math/">MathML</a></abbr>,</li>
<li><acronym><a href="http://www.w3.org/TR/P3P/">P3P</a></acronym>,</li>
<li><acronym><a href="http://www.w3.org/TR/REC-xml/">XML 1.0</a></acronym>,</li>
<li><acronym><a href="http://www.w3.org/TR/xslt">XSLT</a></acronym>,</li>
<li><a href="http://www.w3.org/TR/REC-xml-names/">Namespaces v <acronym>XML</acronym></a>,</li>
<li><a href="http://www.w3.org/TR/xmlbase/"><acronym>XML</acronym> Base</a> (nyní pouze pro odkazy; není používáno pro <tt>:navštívené</tt>, apod. CSS nastavení),</li>
<li><abbr><a href="http://www.w3.org/TR/xlink/">XLink</a></abbr> (pouze jednoduché XLinky),</li>
<li><a href="http://www.w3.org/TR/xml-stylesheet/">Asociace Style Sheetů s <acronym>XML</acronym> Dokumenty</a>,</li>
<li><abbr><a href="http://www.w3.org/TR/xpath">XPath 1.0</a></abbr>,</li>
<li><abbr><a href="http://lists.w3.org/Archives/Public/www-xml-linking-comments/2001AprJun/att-0074/01-NOTE-FIXptr-20010425.htm">FIXptr</a></abbr>,</li>
<li><acronym><a href="http://www.w3.org/RDF/">RDF</a></acronym> a</li>
<li><acronym><a href="http://www.w3.org/TR/soap/">SOAP</a></acronym>.</li>
</ul>

<p>Navíc, některé další standardy a funkce od dalších výrobců; např. <acronym><a href="http://www.xmlrpc.com/spec">XML-RPC</a></acronym>, <abbr>XMLHTTPRequest</abbr>, a <tt>document.load()</tt>.</p>

<p>Pokud se chcete dozvědět o těchto technologiích více odkazujeme vás na <a href="http://www.mozilla.org/newlayout/xml/" title="Mozilla a XML podpora">XML v Mozille</a>.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="devices">Jaké druhy zařízení mohou být pro Mozillu použity?</a></h3>

<p>Standardizovaný renderovací stroj Gecko, který je srdcem Mozilly je rychlý a efektivní. Může být použit i na tak malých zařízeních jako jsou handheldy a může sloužit i jako základ pro celé pracovní prostředí .&nbsp;.&nbsp;. a pro vše mezi tím.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="more">Kde mohu nalézt více informací?</a></h3>

<p>Jedno z dobrých míst jsou <a href="../faq/index.html" title="Mozilla FAQ">Mozilla - Často kladené otázky [FAQ]</a>.</p>

<p>Můžete se také podívat na recenzentskou stránku produktů založených na Mozille, jako <a href="http://channels.netscape.com/ns/browsers/7/learnmore/NS70pr1_reviewersguide.pdf">Netscape 7</a> (prosím vezměte na vědomí, že se jedná o PDF dokument velikosti 2.9 Mb).</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>

<?php
	$page->includeFooter();
?>