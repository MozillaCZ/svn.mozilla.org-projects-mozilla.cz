<?php
	$rootPath = '../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Ukládání stránek v Mozille podle značky TITLE';
	$page->headline = array('Ukládání stránek v Mozille podle značky TITLE','Úprava chování prohlížečů Mozilla.org při ukládání webových stránek');

	$page->includeHeader();
?>

<p>Řadě uživatelů, kteří začali používat <a href="/produkty/suite/" 
title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a>, 
<a href="/produkty/seamonkey/" 
title="SeaMonkey: Stránka o produktu">SeaMonkey</a> či 
<a href="/produkty/firefox/" 
title="Firefox: Stránka o produktu">Firefox</a> místo webového prohlížeče 
Internet Explorer vadí, že Mozilla pojmenovává ukládané 
<abbr title="Hypertext Markup Language" lang="en">HTML</abbr> stránky poněkud 
prazvláštně. Jistě, můžete si samozřejmě zvolit pojmenování jaké chcete, ale 
já mám teď na mysli výchozí jméno ukládaného souboru. Řadě uživatelů se zkrátka 
nechce znovu a&nbsp;znovu popisovat jméno ukládaného souboru. Prohlížeč
Internet Explorer na to jde tak, že výchozí jméno ukládané stránky generuje
podle <abbr title="Hypertext Markup Language" lang="en">HTML</abbr> značky 
TITLE, což je docela rozumné, protože tato značka většinou popisuje to, co 
daná stránka obsahuje. Rozhodně je to lepší, než nic neříkající 
<span class="soubor">index.html</span>, 
<span class="soubor">default.html</span> apod.</p>

<p>Mezi uživatele, kterým nevyhovuje stávající systém pojmenovávání, se
řadím i&nbsp;já. Rozhodl jsem se s&nbsp;tím něco udělat. Tento článek popisuje mé
výsledky, postup, kterým jsem se ubíral a&nbsp;též výsledné řešení, které mě
uspokojilo. Následující postup je platný pro Mozilla Suite&nbsp;1.7.12,
SeaMonkey 1.0a a&nbsp;Mozilla Firefox 1.0.7. Měl by byt platný i&nbsp;pro 
předchozí verze. Pro pozdější verze ho nemohu zaručit, vývojáři totiž mohou 
změnit kód.</p>


<h2 class="czilla nice">Mozilla Suite/SeaMonkey</h2>

<p>Ukončete Mozillu. V adresáři s nainstalovaným balíkem se nachází
podadresář <span class="soubor">chrome</span> a v něm soubor <span class="soubor">comm.jar</span>. Jedná se o
obyčejný ZIP archiv. V něm naleznete v cestě <span class="soubor">content/communicator</span>
soubor <span class="soubor">contentAreaUtils.js</span>. Tento soubor obsahuje přesně to, co
potřebujeme. Rozbalte jej z archivu a otevřete v textovém editoru (např. Poznámkovém bloku).</p>

<p><strong>Poznámka</strong>: Stejně jako jinde, i v tomto případě platí zásada, že záloha se rozhodně
vyplatí. V tomto konkrétním případě sice nemůžete přijít o žádná data, ale
minimálně si tam můžete ušetřit jednu reinstalaci Mozilly, kdyby se náhodou
něco nezdařilo.</p>

<p>Ve zmíněném souboru naleznete funkci <tt>getDefaultFileName</tt>. Ta
slouží ke generování výchozího jména ukládané stránky. Struktura této funkce
je poměrně jednoduchá, takže její úprava je snadná. Z popisu funkce je
patrné, že Mozilla postupuje při vytváření výchozího jména podle
následujícího postupu (pokud nemůže daný bod vykonat, začne provádět
další):</p>

<dl>
	<dt>Výchozí jméno je dáno
 	<abbr title="HyperText Transfer Protocol" lang="en">HTTP</abbr>
	hlavičkou</dt>

	<dd>Tento bod nastává jen zřídka (což je možná škoda). Jedná se o to, že
	autor stránky může
	<abbr title="HyperText Transfer Protocol" lang="en">HTTP</abbr>
	hlavičkou určit výchozí jméno pro uložení. Pokud se
	<abbr title="HyperText Transfer Protocol" lang="en">HTTP</abbr>
	hlavička vyskytuje, je použita.</dd>


	<dt>Výchozí jméno podle jména souboru na webu</dt>

	<dd>Zde nejlépe napoví příklad. Dejme tomu, že aktuální
  	<abbr title="Uniform Resource Locator" lang="en">URL</abbr>
	je <tt>http://www.jasnapaka.com/index.php</tt>. V tomto případě bude
	vzato jméno aktuálního dokumentu u kterého bude ještě změněna přípona na
	*.html. Výsledné jméno tudíž bude <span class="soubor">index.html</span>.Pokud je aktuální
	<abbr title="Uniform Resource Locator" lang="en">URL</abbr>
	pouze <tt>http://www.jasnapaka.com</tt>, tento bod nenastane.</dd>

	<dt>Výchozí jméno podle
	<abbr title="Hypertext Markup Language" lang="en">HTML</abbr>
	zančky TITLE</dt>

	<dd>V tomto případě není moc co dodávat. Značka TITLE většinou vystihuje (lépe řečeno,
	měla by) obsah dokumentu. Jedná se prakticky o poslední volbu, která
	reálně nastává.</dd>
</dl>

<p>Dalších 5 možností nastává jen ojediněle, a proto je nebudu zmiňovat.
Z výše uvedeného výpisu je patrné, že to, oč nám jde, je vlastně prohození
druhé a třetí možnosti. Přesuneme tedy kód:</p>

<pre class="codearea"><code>if (aDocument) {
  var docTitle = validateFileName(aDocument.title).replace(/^\s+|\s+$/g, "");

  if (docTitle != "") {
    // 3) Use the document title
    return docTitle;
  }
}</code></pre>

<p>před</p>

<pre class="codearea"><code>try {
  var url = aDocumentURI.QueryInterface(Components.interfaces.nsIURL);
  if (url.fileName != "") {
    // 2) Use the actual file name, if present
    return validateFileName(decodeURIComponent(url.fileName));
  }
} catch (e) {
  try {
    // the file name might be non ASCII
    // try unescape again with a characterSet
    var textToSubURI = Components.classes["@mozilla.org/intl/texttosuburi;1"]
                                 .getService(Components.interfaces.nsITextToSubURI);
    var charset = getCharsetforSave(aDocument);
    return validateFileName(textToSubURI.unEscapeURIForUI(charset, url.fileName));
  } catch (e) {
    // This is something like a wyciwyg:, data:, and so forth
    // URI... no usable filename here.
  }
}</code></pre>

<p>Tímto docílíme ukládání podle tagu TITLE s jedním vedlejším efektem. Podle "tagu" TITLE jsou ukládány všechny typy dokumentů tj. i obrázky, což nechceme. Řešením je tedy ukládat dokumenty podle tagu TITLE jen v případě, že se jedná o <abbr title="Hypertext Markup Language" lang="en">HTML</abbr> dokument. Na začátek funkce tedy přidejte kód:</p>

<pre class="codearea"><code>try {
  fileType = aDocument.contentType;
} catch (e) { }</code></pre>

<p>Následně nahradíme řádek:</p>

<pre class="codearea"><code>if (aDocument) {</code></pre>

<p>vylepšenou podmínkou</p>

<pre class="codearea"><code>if (aDocument &amp;&amp; (fileType == "text/html" || fileType == "application/xhtml+xml")) {</code></pre>

<p>Nyní přesuneme soubor zpět do archivu a přepíšeme tak původní. Spustíme
Mozillu a zkontrolujeme výsledek.</p>


<h2 class="czilla nice">Mozilla Firefox</h2>

<p>Pro Mozilla Firefox existuje jednodušší řešení v podobě instalace
<a href="http://www.jasnapaka.com/mozilla/filetitle/"
title="Rozšíření File Title: Domovská stránka" hreflang="en">rozšíření File Title</a>,
které vám zajistí stejnou funkčnost bez nutnosti manuálně editovat zdrojové kódy.
Pokud nevíte, jak rozšíření nainstalovat, přečtěte si <a href="/podpora/firefox/instalace-rozsireni.html" title="Návod na instalaci rozšíření do Firefoxu">návod na instalaci</a>.
</p>

<hr />
<p><small>Sepsal: <a href="/czilla/lide.html#kdo-je-PC">Pavel Cvrček</a> (CZilla),
Poslední aktualizace: 14. října 2005</small></p>

<?php
	$page->includeFooter();
?>
