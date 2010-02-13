<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Průvodce Mozillou (Obsah)';
	$page->headline = array('Průvodce Mozillou','Obsah');

	$page->includeHeader();
?>

<h2>Úvod</h2>

<p>Mozilla 1.0 byla první oficiální verze Mozilly - plně vybaveného prohlížeče, založeného na nejnovějších standardech Internetu, stejně jako meziplatformní balík nástrojů. Mozilla 1.0 byla určena především vývojářům a umožnila započít vývoj nových Internetových aplikací. Mozilla byla vyvinuta v prostředí svobodného software a vznikla díky obětavosti a kreativitě tisíců programátorů z Internetu, kteří do ní vložili nejlepší co mohli.</p>

<p>Celý balík komponent, které mohou být použity v širokém rozsahu aplikací, je nabízen včetně všech zdrojových kódů zdarma a je určen k otestování jako Mozilla 1.0 v uživatelských aplikacích. Mozilla 1.0 umožnila vývojářům postavit aplikace pro meziplatformní, síťově-centralizovaný svět.</p>

<p>Mozilla 1.0 také rozšířila okruh vývojářů. Ti mohou nyní psát komplexní aplikace také díky tomu, že architektura Mozilly umožňuje používat všude stejné technologie, zaměřené především na vytváření webových aplikací.</p>

<p>Tyto stránky jsou vytvořeny jako první úvod do použití Mozilly pro uživatele, pro recenzenty a další, kteří mají zájem dozvědět se více. Společně s <a href="../faq/index.html" title="FAQs index">FAQ stránkami</a> tvoří základní soubor informací o Mozille v tak zhuštěné podobě jak je to jen možné.<!--  A more detailed &#8220;<a href="">Reviewer&#8217;s Guide</a>&#8221; is also available</a>. --></p>

<p>Novináři a recenzenti, kteří by měli zájem o další informace o Mozille mohou použít e-mail <a href="mailto:%20Catherine%20Corre%20%3Ccorre@mozilla.org%3E">Catherine Corre</a> z týmu Mozilla.org, nebo <?php show_mail('CZilla info', 'info') ?> pro získání dalších informací.<!--  Comments, questions, suggestions and concerns <b>specifically</b> about these pages and their content should be directed to <a href="mailto:%20Brian%20Heinrich%20%3Cwordsmyth@myrealbox.com%3E">Brian Heinrich</a>. --></p>

<p>Dnes je na světě již několik dalších verzí Mozilly, z nichž verze 1.0.x je určena všem zájemcům o nejstabilnější větev balíku.
Další verze jako 1.2.x a 1.3.x jsou určeny především pro testování a pro vývojáře připravující své aplikace pro generaci dalších technologických novinek Internetu, které jsou v Mozille obsaženy, případně nadšeným zájemcům o jejich používání v praxi.</p>

<h2 id="index">Obsah</h2>

<h3><a id="general" href="obecne.html">Všeobecné</a></h3>

<ul>
<li><a href="obecne.html#what-is-moz-product">Co je balík aplikací Mozilla?</a></li>
<li><a href="obecne.html#who-can-use">Kdo může Mozillu používat?</a></li>
<li><a href="obecne.html#toolkit">Co jsou nástroje Mozilly?</a></li>
<li><a href="obecne.html#what-else-can-be-built">Jaké další produkty mohou být na kódu Mozilly postaveny?</a></li>
<li><a href="obecne.html#what-is-1.0">Co je Mozilla 1.0?</a></li>
<li><a href="obecne.html#what-advantages">Jaké jsou výhody otevřeného software?</a></li>
</ul>

<h3><a id="product" href="produkt.html">Mozilla - balík aplikací</a></h3>

<ul>
<li><a href="produkt.html#features">Jaké jsou nejzajímavější znaky Mozilly?</a></li>
<li><a href="produkt.html#languages">Jaké jazyky Mozilla podporuje?</a></li>
<li><a href="produkt.html#what-difference">Jaký je rozdíl mezi Mozillou pro koncové uživatele a programem Netscape 6/7?</a></li>
<li><a href="produkt.html#how-compares">Jak dopadne Mozilla v porovnání s jinými prohlížeči?</a></li>
<li><a href="produkt.html#standards">Jaké Internetové standardy Mozilla podporuje?</a></li>
<li><a href="produkt.html#devices">Jaké druhy zařízení mohou být pro Mozillu použity?</a></li>
<li><a href="produkt.html#more">Kde mohu nalézt více informací?</a></li>
</ul>

<h3><a id="toolkit" href="vyvoj.html">Mozilla - nástroje</a></h3>

<ul>
<li><a href="vyvoj.html#gecko">Co je Gecko?</a></li>
<li><a href="vyvoj.html#xul">Co je XUL?</a></li>
<li><a href="vyvoj.html#xpcom">Co je XPCOM?</a></li>
<li><a href="vyvoj.html#necko">Co je Necko?</a></li>
<li><a href="vyvoj.html#imagelib">Co je Imagelib?</a></li>
<li><a href="vyvoj.html#javascript">Co je JavaScript (ECMAScript), tato velmi důležitá část nástrojů Mozilla?</a></li>
<li><a href="vyvoj.html#benefits">Jaké jsou hlavní výhody použití nástrojů Mozilly?</a></li>
<li><a href="vyvoj.html#developer-tools">Jaké vývojářské nástroje jsou zabudovány v Mozille?</a></li>
<li><a href="vyvoj.html#security">Jaké zabezpečení nástroje obsahují?</a></li>
<li><a href="vyvoj.html#contact">Koho mají další zájemci o využití zdrojových kódů Mozilly kontaktovat pro další informace?</a></li>
</ul>

<h3><a id="record" href="na-rovinu.html">Na rovinu...</a></h3>

<ul>
<li><a href="na-rovinu.html#why-bother">Nejsou již války browserů skončeny? Jak může Mozilla ovlivnit Internet?</a></li>
<li><a href="na-rovinu.html#completion">Proč trvalo tak dlouho než byla Mozilla 1.0 dokončena?</a></li>
<li><a href="na-rovinu.html#user-experience">Kdy se stane zkušenost uživatelů <i>skutečně</i> nová?</a></li>
<li><a href="na-rovinu.html#bug-count">Slyšel jsem, že počítadlo chyb stále roste? Je to pravda?</a></li>
<li><a href="na-rovinu.html#sponsoring-corps">Jaký je vztah mezi mozilla.org a sponzory jako jsou Netscape a AOL?</a></li>
<li><a href="na-rovinu.html#netscape">Udělal Netscape většinu práce (psaní zdrojových kódů, dokumentace, testování atd.)?</a></li>
<li><a href="na-rovinu.html#aol">Bude AOL používat Mozillu?</a></li>
<li><a href="na-rovinu.html#codebase">Jaké jsou licenční podmínky zakotvené v kódech Mozilly?</a></li>
<li><a href="na-rovinu.html#other-tech">Jaké jsou zde další technologie? Kdo je může využít?</a></li>
<li><a href="na-rovinu.html#mozilla-dot-org">Co se děje na mozilla.org, czilla.cz?</a></li>
</ul>

<?php
	$page->includeFooter();
?>