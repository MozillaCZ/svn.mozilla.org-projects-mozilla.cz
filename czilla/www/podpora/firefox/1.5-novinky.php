<?php
	require_once '../../inc/page.php';
	$page->setTitle('Co je nového v Mozilla Firefoxu 1.5');
	$page->setHeadline('Co je nového v Mozilla Firefoxu 1.5','Souhrn toho, co přináší nová verze populárního prohlížeče');
	$page->setKeywords('podpora, otázky, nápověda, pomoc, návod, mozilla, firefox, prohlížeč');
	$page->setDescription('Co je nového v Mozilla Firefoxu 1.5');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<p>Ke konci loňského roku zvířil stojaté vody webových prohlížečů nový 
prohlížeč <a href="/produkty/firefox/" 
title="Mozilla Firefox: Stránka o produktu">Mozilla Firefox</a>. Uživatelům
přinesl pokročilé funkce, jednoduché ovládání a&nbsp;bezpečné prohlížení internetových stránek.
Díky těmto a&nbsp;jiným vlastnostem se stal vůdčím prohlížečem v&nbsp;kategorii moderních 
prohlížečů a&nbsp;stal se oblíbeným u&nbsp;řady uživatelů.</p>

<p>Nová verze 1.5 s&nbsp;sebou přináší řadu příjemných novinek, které uvítají 
jak spokojení uživatelé <a href="/produkty/firefox/" 
title="Mozilla Firefox: Stránka o produktu">Mozilla Firefoxu</a>, 
tak weboví vývojáři.</p>

<h2 class="nice ff">Co je nového pro uživatele</h2>

<h3>Rychlejší a&nbsp;lepší zobrazování webových stránek</h3>

<p>Díky nové verzi vykreslovacího jádra
<a href="http://wiki.mozilla.org/Gecko:Home_Page" 
title="O vykreslovacím jádru Gecko" hreflang="en">Gecko</a> máte
k&nbsp;dispozici prohlížeč s&nbsp;kvalitnějším a&nbsp;rychlejším zobrazováním
webových stránek. V&nbsp;jeho nové verzi byla vylepšena podpora webových 
standardů, práce s&nbsp;<a href="http://www.macromedia.com/software/flash/" 
title="O Macromedia Flash" hreflang="en">Macromedia Flash</a> a&nbsp;byla 
přidána řada novinek, které uvítáte jak vy, tak weboví vývojáři. Více
informací naleznete v&nbsp;části <a href="#vyvojari">Co je nového pro vývojáře</a>.</p>

<h3>Funkce "Fast back" pro rychlé procházení již navštívených stránek</h3>

<p>Příjemnou novinkou je rychlé procházení historie posledních navštívených 
webových stránek. Pokud jste doposud v&nbsp;prohlížeči klepli na tlačítko 
<span class="nabidka">Zpět</span>, trvalo chvíli, než se předchozí 
stránka znovu načetla. Díky funkci "Fast back" je to již minulostí! 
Nová vyrovnávací paměť prohlížeče si bude pamatovat strukturu jíž 
navštívených stránek a&nbsp;ty pak bude prohlížeč schopen zobrazit výrazně 
rychleji.</p>

<h3>Přepracovaný systém aktualizací</h3>

<table><tr>
<td style="width: 170px">
<div class="img-c" style="width:161px">
	<a href="images/ff15-aktualizace.png" class="zoom"><img 
  src="images/ff15-aktualizace-m.png" 
  alt="Dialog s průběhem aktualizace" width="161" height="145" /></a>
</div>
</td>

<td style="vertical-align: top;">
<p style="margin-top: 0"><a href="/produkty/firefox/"
title="Mozilla Firefox: Stránka o produktu">Mozilla Firefox</a>&nbsp;1.5 
přichází s&nbsp;přepracovaným systémem aktualizací, který umožňuje 
inkrementální stahování aktualizací prohlížeče, což ve výsledku 
podstatně sníží množství dat, která jsou přenášena v&nbsp;souvislosti 
s&nbsp;aktualizací prohlížeče. Vylepšení se týká též aktualizací 
rozšíření a&nbsp;vyhledávacích modulů.</p>

<p style="margin-bottom: 0">Nové možnosti konfigurace systému aktualizací naleznete
v&nbsp;dialogu <span class="nabidka">Možnosti</span>, v&nbsp;sekci 
<span class="nabidka">Rozšířené</span> a&nbsp;na panelu 
<span class="nabidka">Aktualizace</span>. Aktualizace jsou ve 
výchozím nastavení prováděny automaticky. Pokud si automatické 
aktualizace nepřejete, můžete je snadno vypnout a&nbsp;provádět 
aktualizace ručně pomocí volby <span class="nabidka">Zkontrolovat 
aktualizace</span> v&nbsp;nabídce <span class="nabidka">Nápověda</span>.</p>
</td></tr></table>

<h3 class="clear">Nová podoba dialogu nastavení programu</h3>

<table><tr>

<td style="vertical-align: top;">
Mozilla Firefox&nbsp;1.5&nbsp;s sebou přináší nový dialog pro pohodlné
nastavení prohlížeče. Celé nastavení bylo přepracováno, zpřehledněno 
a&nbsp;doplněno o&nbsp;některé nové možnosti. Mezi novinky též patří možnost 
přímého přechodu na odpovídající část nápovědy, která se týká 
konkrétní oblasti nastavení prohlížeče. Inovovaný dialog 
<span class="nabidka">Možnosti</span> naleznete v&nbsp;nabídce 
<span class="nabidka">Nástroje</span>.
</td>

<td>
<div class="img-c" style="width:188px">
	<a href="images/ff15-moznosti.png" class="zoom">
  <img src="images/ff15-moznosti-m.png" alt="Dialog Možnosti" 
  width="188" height="171" /></a>
</div>
</td>

</tr></table>

<h3 class="clear">Vylepšené prohlížení v&nbsp;panelech</h3>

<table><tr>

<td style="vertical-align: top;">
Jedna ze základních funkcí Firefoxu, prohlížení v panelech,
byla vylepšena. Ve <a href="/produkty/firefox/"
title="Mozilla Firefox: Stránka o produktu">Firefoxu</a>&nbsp;1.5 
máte nyní možnost volně přesouvat jednotlivé panely a&nbsp;měnit 
tak jejich pořadí na liště. Na základě přání mnoha
uživatelů nyní <a href="/produkty/firefox/" 
title="Mozilla Firefox: Stránka o produktu">Firefoxu</a> umožňuje 
blokovat stránky otevírané do nového okna a&nbsp;otevírat je v&nbsp;rámci 
aktuálního okna či do nového panelu jednoduchou předvolbou 
v&nbsp;dialogu <span class="nabidka">Možnosti</span>.
</td>

<td>
<div class="img-c" style="width:292px">
	<a href="images/ff15-panely.png" class="zoom"><img 
  src="images/ff15-panely-m.png" alt="Přesouvání panelů" 
  width="292" height="70" /></a>
</div>
</td>

</tr></table>

<h3 class="clear">Funkce na rychlé promazání soukromých dat</h3>

<table><tr>

<td style="width: 140px">
<div class="img-c" style="width:135px">
	<a href="images/ff15-duver.png" class="zoom">
  <img src="images/ff15-duver-m.png" 
  alt="Dialog s nástrojem na promazání důvěrných informací" 
  width="135" height="122" /></a>
</div>
</td>

<td style="vertical-align: top;">
<p style="margin-top: 0">V&nbsp;nabídce <span class="nabidka">Nástroje</span> přibyla
nová volba <span class="nabidka">Vymazat důvěrná data</span>, 
která vám umožní rychle vymazat historii navštívených stránek, 
formulářů, zadaná hesla či třeba cookies. Tato funkce se hodí 
zejména tehdy, pokud čas od času pracujete s&nbsp;počítačem, který sdílí
více lidí, a vy si nepřejete, aby si kdokoliv mohl prohlédnout,
co jste na Internetu dělali.</p>

<p style="margin-bottom: 0">Tip: Pro rychlejší přístup můžete též využít klávesovou
zkratku <kbd>Ctrl+Shift+Del</kbd>.</p>
</td>

</tr></table>
 
<h3 class="clear">Nástroj na reportování chybně zobrazovaných 
stránek</h3>

<table><tr>

<td style="width: 195px">
<div class="img-c" style="width:189px">
	<a href="images/ff15-reporter.png" class="zoom">
  <img src="images/ff15-reporter-m.png" 
  alt="Reportování chybné stránky" width="189" height="166" /></a>
</div>
</td>

<td style="vertical-align: top;">
<p style="margin-top: 0">Možná jste se již setkali s&nbsp;webovou stránkou, která se
v&nbsp;<a href="/produkty/firefox/" 
title="Mozilla Firefox: Stránka o produktu">Mozilla Firefoxu</a> 
nezobrazila korektně. V&nbsp;drtivé většině případů je to způsobeno tím, 
že webová stránka je chybně napsána. <a href="/produkty/firefox/" 
title="Mozilla Firefox: Stránka o produktu">Mozilla Firefox</a> obsahuje 
nový nástroj pro upozornění na chybnou stránku. </p>

<p style="margin-bottom: 0">Tento nástroj naleznete v&nbsp;nabídce <span class="nabidka">Nápověda</span>
pod položkou <span class="nabidka">Upozornit na chybnou stránku...</span>. 
Nahlášené reporty zpracují spolupracovníci projektu Technická evangelizace
a&nbsp;pokusí se s&nbsp;příslušným webmasterem sjednat nápravu.</p>
</td>

</tr></table>

<h3 class="clear">Chybové dialogy byly nahrazeny informačními stránkami</h3>

<table><tr>

<td style="width: 245px">
<div class="img-c" style="width:240px">
	<a href="images/ff15-chybstr.png" class="zoom">
  <img src="images/ff15-chybstr-m.png" alt="Stránka nenalezena" 
  width="240" height="180" /></a>
</div>
</td>

<td style="vertical-align: top;">
<p style="margin-top: 0">Pokud jste v&nbsp;<a href="/produkty/firefox/"
title="Mozilla Firefox: Stránka o produktu">Mozilla Firefoxu</a>&nbsp;1.0 
zadali chybnou adresu webové stránky či webová stránka byla nedostupná, 
zobrazil se vám informační dialog, který vás informoval, že zadaná stránka 
nebyla nalezena. Pro opravu či zadání jiné adresy jste museli dialog
potvrdit a&nbsp;až teprve následovně provádět další činnost.</p>

<p style="margin-bottom: 0">Ve verzi 1.5 byla tato chybová hlášení nahrazena webovou stránkou,
která vás bude informovat o&nbsp;tom, co nastalo za problém, ale přitom nebude 
blokovat jakoukoliv vaši činnost.</p>
</td>

</tr></table>

<h3 class="clear">... a&nbsp;řada dalších novinek</h3>

<ul>
  <li>doplňování domény&nbsp;.cz do adresního řádku, pokud je to potřeba</li>
  <li>Mac OS X: import z&nbsp;webových prohlížečů <a href="http://www.apple.com/safari/"
  title="Safari: O webovém prohlížeči">Safari</a> a MacIE</li>
  <li>vylepšená forma nápovědy</li>
  <li>instalované vyhledávací moduly se instalují do složky
  <span class="soubor">searchplugins</span> v&nbsp;profilu místo 
  do složky s&nbsp;aplikací</li>
  <li>záložky jsou v&nbsp;profilu pravidelně zálohovány do adresáře
  <span class="soubor">bookmarkbackups</span></li>
  <li>vylepšené blokování vyskakovacích oken</li>
  <li>vylepšena přístupnost (accessibility) prohlížeče
  pomocí klávesnice</li>
  <li>snížení paměťových nároků</li>
  <li>lepší integrace s&nbsp;Mac OS X</li>
</ul>

<div class="cleaner">&nbsp;</div>

<h2 id="vyvojari" class="nice ff">Co je nového pro vývojáře</h2>

<h3>Vylepšena konzola JavaScriptu</h3>

<p>Konzola JavaScriptu byla rozšířena a&nbsp;nyní umí zobrazovat i&nbsp;chyby 
v&nbsp;<abbr title="Cascading Style Sheets" lang="en">CSS</abbr> stylech připojených
k&nbsp;prohlíženým stránkám.</p>

<h3>Přidána značka <tt>&lt;canvas&gt;</tt></h3>

<p>Používání grafiky na webových stránkách bylo doteď omezeno na pouhé
zobrazování statických bitmapových obrázků, případně jednoduchých animací.
S&nbsp;novou značkou
<tt><a href="http://developer.mozilla.org/en/docs/Category:HTML:Canvas" 
hreflang="en" title="Category:HTML:Canvas - Devmo">&lt;canvas&gt;</a></tt>
je možné na stránce vytvořit &quot;kreslící plátno&quot;, do kterého lze pomocí
JavaScriptu interaktivně nakreslit téměř libovolné obrazce. K&nbsp;dispozici jsou
všechny obvyklé funkce vykreslovacích
<abbr title="Application Programming Interface" lang="en">API</abbr>
&ndash; vykreslování bodů, čar, ploch&nbsp;atd.
Ostatně, podívejte se na působivou ukázku:
<a href="http://www.abrahamjoffe.com.au/ben/canvascape/"
hreflang="en" title="Canvascape - 3D walker">jednoduchá procházka 3D prostředím</a>.
Značka <tt>&lt;canvas&gt;</tt> je součástí připravované specifikace
<a href="http://www.whatwg.org/specs/web-apps/current-work/" hreflang="en" 
title="Web Applications 1.0">Web Applications&nbsp;1.0</a>
od
<a href="http://whatwg.org/" hreflang="en" 
title="Web Hypertext Application Technology Working Group">
<abbr title="Web Hypertext Application Technology Working Group" 
lang="en">WHATWG</abbr></a>.</p>

<h3>Podpora <abbr title="Scalable Vector Graphics" lang="en">SVG</abbr></h3>

<p>Webu dlouho chyběla možnost používat na stránkách obrázky ve vektorovém
grafickém formátu. Nová verze Gecka
<a href="http://www.mozilla.org/projects/svg/status.html" hreflang="en" 
title="Mozilla SVG Status">podporuje 
<abbr title="Scalable Vector Graphics" lang="en">SVG</abbr></a>
&ndash; vektorový formát standardizovaný
<a href="http://www.w3.org/" hreflang="en" 
title="World Wide Web Consortium"><abbr 
title="World Wide Web Consortium" lang="en">W3C</abbr></a>
a <a href="http://www.w3.org/Graphics/SVG/SVG-Implementations.htm8#edit" 
hreflang="en" title="SVG Implementations">podporovaný mnohými grafickými 
editory</a>.</p>

<h3>Snadná manipulace s&nbsp;<abbr title="Document Object Model" 
lang="en">DOM</abbr> pomocí <abbr title="ECMAScript for XML" lang="en">E4X</abbr></h3>

<p>Standard <abbr title="ECMAScript for XML" lang="en">E4X</abbr>
(<a href="http://www.ecma-international.org/publications/standards/Ecma-357.htm" 
hreflang="en"><abbr title="European Computer Manufacturers Association" 
lang="en">ECMA</abbr> 357</a>)
rozšiřuje JavaScript o&nbsp;syntaxi pro práci práci
s&nbsp;<abbr title="Extensible Markup Language" lang="en">XML</abbr>
dokumenty &ndash;
<abbr title="Extensible Markup Language" lang="en">XML</abbr>
lierály, přístup k&nbsp;elementům, atributům apod. Věci, které byly doposud
řešitelné jen pomocí
<abbr title="Document Object Model" lang="en">DOM</abbr>
(často velmi neohrabaně), jsou nyní záležitostí několika málo řádků. Podpora
tohoto standardu velmi zjednodušuje a&nbsp;zefektivňuje vývoj komplexních webových
aplikací, kde je manipulace se stromem dokumentu a s daty ve formátu
<abbr title="Extensible Markup Language" lang="en">XML</abbr>
na denním pořádku.</p>

<h3>JavaScript&nbsp;1.6 a&nbsp;nové metody objektu Array</h3>

<p>V Gecku&nbsp;1.8 je začleněna nová verze JavaScriptu 1.6. V&nbsp;ní mimo jiné přibyly
u&nbsp;objektu <tt>Array</tt> nové užitečné metody:
<tt><a href="http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Objects:Array:map" hreflang="en">map</a></tt>,
<tt><a href="http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Objects:Array:filter" hreflang="en">filter</a></tt>,
<tt><a href="http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Objects:Array:some" hreflang="en">some</a></tt>,
<tt><a href="http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Objects:Array:every" hreflang="en">every</a></tt>,
<tt><a href="http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Objects:Array:forEach" hreflang="en">forEach</a></tt>,
<tt><a href="http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Objects:Array:indexOf" hreflang="en">indexOf</a></tt> a
<tt><a href="http://developer.mozilla.org/en/docs/Core_JavaScript_1.5_Reference:Objects:Array:lastIndexOf" hreflang="en">lastIndexOf</a></tt>.</p>

<hr />
<p><small><a href="/czilla/prispevatele.php#kdo-je-PC">Pavel Cvrček</a> &amp; <a href="/czilla/prispevatele.php#kdo-je-DM">David Majda</a>, Tým CZilla</small></p>

<?php
	$page->includeTemplate('footer');
?>
