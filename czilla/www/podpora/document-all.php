<?php
	require_once '../inc/page.php';
	$page->setTitle('Document.all - omezená podpora v prohlížečích Mozilla');
	$page->setHeadline('Document.all - omezená podpora v Mozille','a proč je použití document.all na Internetu špatné');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<p>Mezi novinkami
<a href="http://www.mozilla.org/releases/mozilla1.8a3/"
	title="Mozilla.org: Mozilla 1.8 Alpha3" hreflang="en">Mozilla 1.8 alfa 3</a>
se objevila i nedetekovatelná podpora <code>document.all</code>. Jelikož i
částečná a zpětně kompatibilní podpora této technologie je kontroverzní,
nabízí tento dokument odpovědi na vaše otázky.</p>

<h2 class="nice">Co je document.all?</h2>

<p>Tzv. <code>document.all</code> je technologií společnosti Microsoft,
která byla představena v prohlížeči Internet Explorer&nbsp;4. Objekt
<strong><code><a href="http://www.w3.org/TR/DOM-Level-2-Core/core.html#i-Document"
	title="W3C: Document Object Model Core" hreflang="en">document</a></code></strong> rozšiřuje o
<a href="http://msdn.microsoft.com/workshop/author/dhtml/reference/collections/all.asp"
	title="MSDN: all Collection" hreflang="en">kolekci <strong>all</strong></a>,
která vrací odkaz na všechny prvky objektu, a poskytla tehdy vývojářům novou
možnost přístupu k jednotlivým elementům dokumentu. Více se o ní dozvíte na
<abbr title="Microsoft Developer Network" lang="en">MSDN</abbr> v dokumentu
<a href="http://msdn.microsoft.com/workshop/author/dhtml/reference/collections/all.asp"
	title="MSDN: all Collection" hreflang="en">all Collection</a>.</p>

<p>Je třeba poznamenat, že <code>document.all</code> vznikl v dobách
bouřlivého a překotného rozvoje Webu. Nikdy němel a ani dnes nemá oporu v
žádném veřejném standardu či všeobecně uznávané specifikaci.</p>


<h2 class="nice">Potřebuji používat document.all?</h2>

<p><strong>Ne, naštěstí ne.</strong> Podpora <code>document.all</code> je
omezena na prohlížeč MS&nbsp;Internet Explorer, v desítkách jiných druhů
prohlížečů není žádné <code>document.all</code> k dispozici, či jde jen o
jeho neúplnou podporu. Používání <code>document.all</code> v heterogenním
prostředí Internetu je špatné a škodlivé.</p>

<p><a href="http://www.w3.org/DOM/"
	title="W3C: Document Object Model (DOM)"
	hreflang="en"><abbr title="Document Object Model"
	lang="en">DOM</abbr></a>

nabízí autorům webových stránek srovnatelné standardní nástroje v podobě
metod
<strong><code><a href="http://www.w3.org/TR/DOM-Level-2-Core/core.html#ID-getElBId"
	title="W3C: Document Object Model Core" hreflang="en">getElementById</a></code></strong> a
<strong><code><a href="http://www.w3.org/TR/DOM-Level-2-Core/core.html#ID-A6C9094"
	title="W3C: Document Object Model Core" hreflang="en">getElementsByTagName</a></code></strong>.
Obrovskou výhodou těchto metod <strong>je podpora v naprosté většině
dnešních prohlížečů</strong>. Jsou dostupné např. v Mozille, Mozilla
Firefoxu, Netscape&nbsp;6 a vyšším, MS&nbsp;Internet Exploreru&nbsp;5 a
vyšším, Konqueroru, Safari či v Opeře.</p>


<h2 class="nice">Proč tedy Mozilla podporuje něco tak špatného?</h2>

<p>Projektu <a href="http://www.mozilla.org/projects/tech-evangelism/"
	title="Mozilla.org: Technology Evangelism" lang="en" hreflang="en">Technology Evangelism</a>,
na kterém se řadu let podíleli zaměstnanci
<a href="http://channels.netscape.com/ns/info/default.jsp"
	title="Netscape: About Netscape" hreflang="en">Nestcape</a>
společně s dobrovolníky projektu Mozilla,
se podařilo předsvědčit tisíce autorů webů k používání standardních
technologií. Přesto i dnes na Internetu nalezneme řadu stránek používajících
<code>document.all</code>, ať již jde o stařičké opuštěné stránky, které již
nikdo nikdy neopraví, či webové stránky začátečníků.</p>

<p>Protože problémy s takovými stránkami nejvíce pociťují koncoví uživatelé,
rozhodli se vývojáři
<a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a>
během vývoje nové Mozilly&nbsp;1.8 doplnit
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=248549"
	title="Bugzilla: bug 248549 - Add undetected document.all support"
	hreflang="en">základní nedetekovatelnou podporu <code>document.all</code></a>
a jen pro režim zpětné kompatibility.
Automatizované testování i reakce mnoha uživatelů Mozilly&nbsp;1.8
alfa&nbsp;3 potvrzují, že se skutečně řada dříve nefunkčních stránek tak
stala použitelných.</p>

<p>Podpora <code>document.all</code> v Mozille je omezená a není určena pro
aktivní používání ze strany vývojářů. Má vyřešit jen problémy stránek,
jejichž autoři používají <code>document.all</code> &quot;slepě&quot;, tj.
bez otestování jeho podpory v prohlížeči.</p>


<h2 class="nice">Co znamená nedetekovatelná podpora?</h2>

<p>Při implementaci <code>document.all</code> bylo pro vývojáře Mozilly
velmi důležité zachování zpětné kompatibility: nechtěli omezit funkčnost ani
jediné z existující stránek, které testují dostupnost
<code>document.all</code> a dle výsledku poskytují kód buď pro MS Internet
Explorer, nebo standardní kód pro ostatní prohlížeče.</p>

<p><strong>V prohlížečích Mozilla i nadále nebude splněna obvyklá podmínka
testu <code>if(document.all)</code>. Mozilla bude pokračovat v
<code>else</code> větvi této podmínky, tj. podpora <code>document.all</code>
je nedetekovatelná.</strong></p>


<h2 class="nice">Jak se zbavit document.all na vlastních strankách?</h2>

<p>Náprava není složitá. Pokud používáte <code>document.all</code> k získání
odkazu na prvek se zadaným <code>id</code>, pak postačí, pokud místo
používaných konstrukcí <code>document.all.mojeid</code>,
<code>document.all[&quot;mojeid&quot;]</code> nebo
<code>document.all.item(&quot;mojeid&quot;)</code> použijete konstrukci
<code>document.getElementById(&quot;mojeid&quot;)</code>.</p>

<p>Pokud používáte <code>document.all</code> k získání seznamu prvků (např.
chcete získat seznam všech tabulek v dokumentu), postačí, když místo
<code>document.all.tags("table")</code> použijete
<code>document.getElementsByTagName("table")</code></p>

<h2 class="nice">V jakých verzích Mozilly se mohu na document.all spolehnout?</h2>

<p><strong>V&nbsp;žádné!</strong> Základní podpora
<code>document.all</code> se objevila
v&nbsp;<a href="http://www.mozilla.org/releases/mozilla1.8a3/"
	title="Mozilla.org: Mozilla 1.8 Alpha3"
	hreflang="en">Mozilla Suite 1.8&nbsp;Alpha 3</a>,
je obsažena ve finální verzi <a href="/produkty/firefox/">Firefoxu&nbsp;1.0</a>
a&nbsp;v&nbsp;<a href="/produkty/suite/">Mozilla Suite&nbsp;1.7.5</a>.
Uživatelé ale mohou tuto podporu velmi snadno vypnout a&nbsp;proto se na
libovolnou podporu <code>document.all</code> v&nbsp;prohlížečích Mozilla
nespoléhejte &ndash; jak jsme již psali, není určena pro aktivní používání
ze strany vývojářů.</p>

<p>Při prvém přístupu k prvku přes <code>document.all</code> se navíc v
JavaScriptové konzoli objeví tiché upozornění:</p>

<samp style="font-family:monospace;margin:1em 3em;display:block" lang="en">
Non-standard document.all property was used. Use W3C standard
document.getElementById() instead.
</samp>

<h2 class="nice">Document.all? Nikdy!</h2>

<p>Pro skalní odpůrce <code>document.all</code> nabízí Mozilla možnost
vypnutí i této základní omezené podpory. Zadejte v adresním řádku
<kbd>about:config</kbd>, přidejte novou booleanovou vlastnost
<code>browser.dom.document.all.disabled</code> a nastavte ji na hodnotu
<kbd>true</kbd>.</p>


<h2 class="nice">Další zdroje informací</h2>

<ul>
	<li><a href="http://www.mozillazine.org/talkback.html?article=5063"
			title="Mozillazine: Mozilla Adds Undetectable document.all Support..." hreflang="en">Oznámení podpory document.all na Mozillazine</a></li>
	<li><a href="http://www.jakpsatweb.cz/clanky/kousek-dom.html"
			title="Alespoň kousek DOMu" hreflang="cs">Jak snadno nahradit document.all modernějším DOMem</a></li>
	<li><a href="http://www.sweb.cz/pichlik/archive/2004_01_25_archive.html#107538922899916497"
			title="Dagblog: Poznáváme DOM IV. - Procházíme dokument" hreflang="cs">Popis použití getElement* funkcí pro práci s dokumentem</a></li>
</ul>

<hr />
<p><small>21. 8. 2004, Tým CZilla (aktualizováno 18. 12. 2004)</small></p>

<?php
	$page->includeTemplate('footer');
?>
