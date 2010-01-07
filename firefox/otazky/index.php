<?php

	$inc_path		= "../inc/";
	include($inc_path . "config.inc");

	setTitle("Nejčastější otázky o přechodu na Firefox");
	$page_desc		= "Pokud přemýšlíte o přechodu z Internet Exploreru na Mozilla Firefox, máte určite řadu otázek. Nabízíme odpovědi na ty nejčastější.";
	$page_keywords	= "mozilla firefox přechod msie otázka odpověď faq oblíbené položky import záložek povolení vyskakovacích popup oken funkčnost stránek varování varovné dialogy nastavení čeština platformy pluginy zásuvný modul flash java shockwave acrobat";

	include($inc_path . "h_head.inc");
	include($inc_path . "x_header.inc");

?>

<div class="main">

<h1>Nejčastější otázky</h1>

<p>Pokud podobně jako většina lidí přemýšlíte o&nbsp;přechodu z&nbsp;Internet Exploreru
na Firefox, máte hodně otázek/dotazů. Nabízíme vám odpovědi na ty nejčastější,
máte-li další, navštivte stránku
s&nbsp;<a href="http://www.czilla.cz/podpora/firefox/faq.html"
	title="CZilla: Často kladené otázky o Firefoxu">často kladenými otázkami</a>
nebo se zeptejte ve webovém fóru
<a href="http://forum.czilla.cz/viewforum.php?f=19">podpory uživatelů Firefoxu</a>.</p>


<h2 id="otazka-1">Jak přenesu své oblíbené položky?</h2>

<p>Přenesení oblíbených položek do Firefoxu je velmi snadné. Firefox se po
prvním spuštění zeptá, odkud chcete data přenést. Vyberte &quot;Microsoft
Internet Explorer&quot; a&nbsp;je to! Všechny oblíbené položky jsou nyní
v&nbsp;záložkách Firefoxu. Můžete je spravovat pomocí <strong>Správce
záložek</strong> v&nbsp;nabídce <strong>Záložky</strong>.</p>


<h2 id="otazka-2">Mohu na některých stránkách povolit vyskakovací okna?</h2>

<div class="img-c img-right" style="width:89px">
	<img src="/img/ss-blokovane-okno.png" alt="" height="72" width="89" />
</div>

<p>Klepnuli jste na odkaz a&nbsp;nic se nestalo? Neobjevila se lišta s&nbsp;nápisem
&quot;Aplikace Firefox zabránila stránce otevřít vyskakovací okno&quot; nebo
ikonka škrtlého okna v&nbsp;pravém okně prohlížeče? Vidíte-li lištu nebo ikonku (viz
obrázek vpravo), znamená to, že Firefox zablokoval vyskakovací okno. Po klepnutí
na lištu nebo ikonku můžete povolit zobrazování dané stránce vyskakovací
okna.</p>

<p class="note"><em>Poznámka:</em> Když klepnutí na odkaz neotevře okno
napoprvé (kvůli blokaci), klepněte na něj znovu. Firefox někdy rozpozná, že
si přejete otevřít vyskakovací okno.</p>


<h2 id="otazka-3">Fungují ve Firefoxu všechny stránky?</h2>

<p>Ačkoliv většina uživatelů se při návštěvě webových stránek nikdy nesetká
s&nbsp;problémem, některé stránky bohužel ve Firefoxu nefungují. Naše první rada
je zjistit, zda je takovou stránku opravdu nutné navštívit. Některé stránky
znemožňují Firefoxu přístup, protože používají technologii IE zneužitelnou
ve škodlivých programech. Pokud jde o&nbsp;speciální stránku, kterou potřebujete
navštívit, musíte použít Internet Explorer nebo jiný prohlížeč kompatibilní
s&nbsp;vaším operačním systémem. Můžete využít
i&nbsp;<a href="https://addons.mozilla.org/extensions/moreinfo.php?id=35&amp;application=firefox&amp;version=1.0"
	hreflang="en" class="l-en">rozšíření IE View</a>,
které do kontextové nabídky Firefoxu přidá možnost otevřít danou stránku
v&nbsp;Internet Exploreru.</p>

<h2 id="otazka-4">Budu moci provozovat své internetové bankovnictví?</h2>

<p>S&nbsp;největší pravděpodobností ano. Firefox obsahuje vše potřebné pro 
podporu moderních internetových bankovnictví. V&nbsp;současné době podporují 
Firefox všechny bankovní ústavy u&nbsp;nás s&nbsp;výjimkou 
<a href="http://www.mojebanka.cz" 
title="MojeBanka.cz: Domovská stránka">Komerční banky</a>. Více informací 
naleznete v&nbsp;přehledovém článku 
<a href="http://www.czilla.cz/podpora/internetova-bankovnictvi-v-mozille.html" 
title="Internetová bankovnictví v Mozille">Internetová bankovnictví v&nbsp;Mozille</a>.</p>


<h2 id="otazka-5">Je k dispozici o&nbsp;Firefoxu kniha v češtině?</h2>

<p>Ano. Nakladatelství <a href="http://knihy.cpress.cz/" 
title="CP Books: Domovská stránka">CP Books</a> vydalo knihu 
<a href="http://knihy.cpress.cz/pocitac/Book.asp?ID=1759" 
title="Mozilla Firefox: Kompletní uživatelská příručka">Mozilla 
Firefox: Kompletní uživatelská příručka</a>. Autorem knihy je 
Václav Kadlec a&nbsp;kniha je určena převážně pro začátečníky. Bližší 
informace o&nbsp;knize se <a 
href="http://www.czilla.cz/podpora/firefox/recenze-kompletni-prirucka.html" 
title="Recenze knihy o Mozilla Firefoxu">dočtete v naší recenzi</a>.</p>



<h2 id="otazka-6">Kde jsou uloženy záložky a&nbsp;nastavení?</h2>

<p>Firefox ukládá všechna nastavení na disk do složky s&nbsp;profilem.</p>

<p>Ve <strong>Windows Vista</strong> je složka umístěna v&nbsp;<span
class="file">C:\Users\[Uživatelské jméno]\AppData\Roaming\Mozilla\Firefox\Profiles\default\</span>.</p>

<p>Ve <strong>Windows XP/2000</strong> je složka umístěna v&nbsp;<span
class="file">%AppData%\Mozilla\Firefox\Profiles\<em>[Náhodné znaky]</em>.default\</span>.
Prohlédněte si <span class="file">C:\Documents and Settings\
<em>[Uživatelské jméno]</em>\Data aplikací\Mozilla\Firefox\Profiles\</span> 
a&nbsp;zbytek by vám měl být jasný.</p>

<p>Ve <strong>Windows 95/98/ME</strong> je složka umístěna v&nbsp;<span
class="file">C:\WINDOWS\Application
Data\Mozilla\Firefox\Profiles\<em>[Náhodné znaky]</em>.default\</span></p>

<p>V&nbsp;<strong>Linuxu</strong> je složka umístěna v&nbsp;<span
class="file">~/.mozilla/firefox/<em>[Náhodné znaky]</em>.default/.</span></p>

<p>V&nbsp;systému <strong>Mac OS&nbsp;X</strong> je složka umístěna v&nbsp;<span
class="file">~/Library/Application
Support/Firefox/Profiles/<em>[Náhodné znaky]</em>.default/.</span></p>

<p class="note">%AppData% je zkratka pro složku Data aplikací ve Windows
2000/XP. K&nbsp;jejímu použití klepněte na nabídku Start &gt; Spustit..., vložte
<em>%AppData%</em> a stiskněte klávesu <kbd>Enter</kbd>. Budete přemístěni
do skutečné složky, která se běžně nachází v&nbsp;<span class="file">C:\Documents
and Settings\[Uživatelské jméno]\Data aplikací.</span></p>


<h2 id="otazka-7">Jaké jsou klávesové zkratky?</h2>

<p>Nabízíme vám přehled
<a href="./klavesove-zkratky/">nejběžnějších klávesových zkratek Firefoxu</a>,
které vám v prohlížeči pomohou zrychlit opakující se akce. Kromě toho David
Tenser sestavil vynikající
<a href="http://www.mozilla.org/support/firefox/keyboard.html"
	title="Firefox Help: Keyboard Shortcuts"
	hreflang="en" class="l-en">porovnání klávesových zkratek</a>
Firefoxu, Internet Exploreru a&nbsp;Opery v&nbsp;angličtině.</p>


<h2 id="otazka-8">Je Firefox dostupný v&nbsp;češtině?</h2>

<p>Ano. Firefox je kompletně lokalizován do češtiny týmem
<a href="http://www.czilla.cz/">CZilla</a> a&nbsp;je k&nbsp;dispozici i&nbsp;v&nbsp;celé řadě
<a href="http://www.mozilla.com/firefox/all.html"
	title="Mozilla.com: Download Firefox"
	hreflang="en" class="l-en">dalších jazyků</a>.
Firefox patří mezi tzv. <span lang="en">open-source</span> programy
(programy s&nbsp;otevřeným zdrojovým kódem) a&nbsp;je nabízen zcela
zdarma. Vybrat si můžete také z&nbsp;celé řady
<a href="http://www.czilla.cz/doplnky/rozsireni/p/firefox/"
	title="CZilla: Lokalizovaná rozšíření pro Mozilla Firefox">lokalizovaných rozšíření</a>.</p>


<h2 id="otazka-9">Pro jaké platformy je Firefox dostupný?</h2>

<p>Firefox je dostupný pro Windows, Macintosh OS&nbsp;X a&nbsp;Linux.</p>

<p><strong>Obecné požadavky na PC</strong></p>

<ul>
	<li>Pentium 233&nbsp;MHz (doporučeno Pentium 500&nbsp;MHz a&nbsp;novější)</li>
	<li>64&nbsp;MB RAM (doporučeno 128&nbsp;MB RAM a&nbsp;více)</li>
	<li>52&nbsp;MB volného místa na disku</li>
</ul>

<p><strong>Požadavky pro Windows:</strong> 98/98SE/ME/NT 4.0/2000/XP (doporučeno)</p>

<p><strong>Požadavky pro Linux:</strong></p>

<ul>
	<li>Jádro&nbsp;2.2.14 a&nbsp;novější s&nbsp;minimálně následujícími
	verzemi knihoven a&nbsp;balíčků:
		<ul>
			<li>glibc 2.3.2</li>
			<li>gtk+2</li>
			<li>XFree86-3.3.6</li>
		</ul>
	</li>
	<li>Firefox byl testován na Red Hat Linuxu&nbsp;8.0 a&nbsp;novějším</li>
</ul>

<p><strong>Požadavky pro Macintosh:</strong></p>

<ul>
	<li>PowerPC 604e 266&nbsp;MHz (doporučeno PowerPC G4 667&nbsp;MHz a&nbsp;novější)</li>
	<li>G3, G4, 64&nbsp;MB RAM (doporučeno 256&nbsp;MB RAM a&nbsp;více)</li>
	<li>72&nbsp;MB volného místa na disku</li>
	<li>OS&nbsp;X&nbsp;10.1.x nebo 10.2.x a&nbsp;novější</li>
</ul>


<h2 id="otazka-14">Co jsou rozšíření a jak je nainstalovat?</h2>

<p>Rozšíření je balíček, který může do Firefoxu přidat další funkce jako např.
blokování reklamy či sledování informací o&nbsp;počasí.</p>
<p>Rozšíření se do Firefoxu přidávají jednoduchou instalací, kterou popisuje návod
<a href="http://www.czilla.cz/podpora/firefox/instalace-rozsireni.html"
	title="Návod, jak instalovat rozšíření ve Firefoxu">Jak instalovat rozšíření
ve Firefoxu</a>.</p>
<p>Mnoho rozšíření naleznete na serveru <a
	href="https://addons.mozilla.org/extensions/?application=firefox"
	title="Rozšíření pro Firefox" hreflang="en" class="l-en">Mozilla Update</a>,
vybírat také můžete z&nbsp;řady <a
	title="Přehled rozšíření v češtině pro Firefox"
	href="http://www.czilla.cz/doplnky/rozsireni/p/firefox/">rozšíření
lokalizovaných do češtiny</a>.</p>


<h2 id="otazka-10">Jak nainstalovat zásuvné moduly (pluginy)?</h2>

<p>Firefox podporuje všechny současné verze běžných zásuvných modulů
(pluginů) jako jsou <strong lang="en">Macromedia Shockwave</strong>, <strong
lang="en">Flash</strong>, <strong lang="en">Java
<abbr title="Java Runtime Environment" lang="en">JRE</abbr></strong>
od Sunu a&nbsp;<strong lang="en">Adobe Acrobat Reader</strong>. Když
navštívíte stránku vyžadující zásuvný modul, který nemáte nainstalován,
objeví se v&nbsp;horní části prohlížeče lišta symbolizující možnost jeho
doinstalování. Kliknete-li na tlačítko <em>Instalovat chybějící zásuvný
modul...</em>, Firefox se pokusí nalézt instalaci požadovaného modulu. Pokud
se mu to nepodaří, můžete se zkusit ruční instalaci nebo nalézt modul na
<a href="http://www.czilla.cz/doplnky/zasuvne-moduly/"
  title="Stránka o zásuvných modulech">stránce o&nbsp;zásuvných modulech</a>
nebo na webu
<a href="http://plugindoc.mozdev.org/" hreflang="en" class="l-en"
	title="Projekt PluginDoc">Dokumentace pluginů pro Mozillu</a>.</p>


<h2 id="otazka-11">Jak používat rychlé hledání?</h2>

<p>S&nbsp;Firefoxem můžete vyhledávat ve vašich oblíbených vyhledávačích
(např. <a href="http://www.google.com/intl/cs/">Google</a>)
pomocí rychlého hledání. Při rychlém hledání napíšete do adresního řádku
prohlížeče tzv. <em>klíčové slovo</em>, kterým určíte, na kterém vyhledávači
chcete hledat a&nbsp;za ně připíšete hledaný termín. Napíšete-li <tt>gg
CZilla</tt>, budete na vyhledávači Google hledat slovo &quot;CZilla&quot;.
Seznam všech klíčových slov obsahuje &quot;<strong>Složka rychlého
hledání</strong>&quot;, kterou najdete ve vašich záložkách. Příšlušné klíčové
slovo zjistíte, pokud si zobrazíte vlastnosti záložek v&nbsp;této
složce.</p>

<p class="note"><em>Poznámka:</em> Chcete-li přiřadit klíčové slovo
vyhledávači, který dosud není zařazen, postačí, když na stránce vyhledavače
klepnete pravým tlačítkem myši na vyhledávací políčko a&nbsp;zvolíte
&quot;<strong>K&nbsp;vyhledávání přiřadit klíčové slovo</strong>&quot;. Pak
již jen nastavíte název záložky a&nbsp;vámi vybrané klíčove slovo.</p>


<h2 id="otazka-12">Mohu používat své oblíbené download managery?</h2>

<p>Prohlížeč Mozilla Firefox dnes přímo podporuje řada moderních download managerů
(správců stahování). Připravili jsme pro vás
<a href="http://www.czilla.cz/podpora/mozilla-a-download-managery.html"
	title="CZilla: Mozilla, Firefox a download managery">podrobný přehled podporovaných download managerů</a>.
Managery, které Firefox nepodporují přímo, lze používat za pomoci
<a href="http://www.czilla.cz/doplnky/rozsireni/flashgot/"
	title="CZilla: Rozšíření FlashGot">rozšíření FlashGot</a>.</p>


<h2 id="otazka-13">Musím odinstalovat Internet Explorer?</h2>

<p>Ne, nemusíte. Nejen, že můžete mít nainstalovaný Internet Explorer
a&nbsp;Mozilla Firefox zároveň, ale můžete mít oba prohlížeče spuštěné
současně.</p>

<h2 id="otazka-15">Existuje pro Firefox překladač webových stránek?</h2>

<p>Ano. Pro Firefox jsou k&nbsp;dispozici překladače <a 
href="http://www.langsoft.cz/translat.htm" 
title="PC Translator: Domovská stránka">PC Translator</a> 
a&nbsp;<a href="http://www.eurotran.cz/" 
title="Eurotran XP: Domovská stránka">Eurotran&nbsp;XP</a>.</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující informace</h2>

	<h3 class="first">Otázky</h3>

	<ol>
		<li><a href="#otazka-1">Jak přenesu své oblíbené položky?</a></li>
		<li><a href="#otazka-2">Mohu na některých stránkách povolit vyskakovací okna?</a></li>
		<li><a href="#otazka-3">Fungují ve Firefoxu všechny stránky?</a></li>
		<li><a href="#otazka-4">Budu moci provozovat své internetové bankovnictví?</a></li>
		<li><a href="#otazka-5">Je k dispozici o Firefoxu kniha v&nbsp;češtině?</a></li>
		<li><a href="#otazka-6">Kde jsou uloženy záložky a&nbsp;nastavení?</a></li>
		<li><a href="#otazka-7">Jaké jsou klávesové zkratky?</a></li>
		<li><a href="#otazka-8">Je Firefox dostupný v&nbsp;češtině?</a></li>
		<li><a href="#otazka-9">Pro jaké platformy je Firefox dostupný?</a></li>
		<li><a href="#otazka-14">Co jsou rozšíření a jak je nainstalovat?</a></li>
		<li><a href="#otazka-10">Jak nainstalovat zásuvné moduly (pluginy)?</a></li>
		<li><a href="#otazka-11">Jak používat rychlé hledání?</a></li>
		<li><a href="#otazka-12">Mohu používat své oblíbené download managery?</a></li>
		<li><a href="#otazka-13">Musím odinstalovat Internet Explorer?</a></li>
		<li><a href="#otazka-15">Existuje pro Firefox překladač webových stránek?</a></li>		
	</ol>

	<h3>Chci více odpovědí!</h3>

	<dl>
		<dt><a href="http://www.czilla.cz/podpora/firefox/faq.html">Často kladené otázky</a></dt>
		<dd>Kromě všeobecných otázek a&nbsp;odpovědí také na téma zásuvných
		modulů, rozšíření a&nbsp;způsobu použití.</dd>

		<dt><a href="./klavesove-zkratky/">Klávesové zkratky</a></dt>
		<dd>Přehled nejběžnějších klávesových zkratek ve Firefoxu
		a&nbsp;porovnání s&nbsp;ekvivalenty v&nbsp;Internet Exploreru.</dd>

		<dt><a href="./ovladani-mysi/">Ovládání myší</a></dt>
		<dd>Nejčastěji používané funkce, které lze v&nbsp;prohlížeči Mozilla
		Firefox ovládat myší a&nbsp;jejich ekvivalenty v&nbsp;Internet Exploreru.</dd>

		<dt><a href="./rozdily-terminologie/">Rozdíly v terminologii</a></dt>
		<dd>Základní slovníček rozdílně pojmenovaných prvků a&nbsp;funkcí.</dd>

		<dt><a href="http://www.mozilla.org/support/firefox/faq.html"
				title="Firefox Help: Firefox FAQ"
				hreflang="en" class="l-en">Firefox
			<abbr title="Frequently Asked Questions" lang="en">FAQ</abbr></a></dt>
		<dd>Rozsáhlé často zodpovídané otázky o&nbsp;prohlížeči Firefox
		v&nbsp;angličtině.</dd>
	</dl>

	<h3 id="podpora">Podpora uživatelů</h3>

	<p>Firefox u&nbsp;nás používají desítky tisíc uživatelů a&nbsp;řada
	z&nbsp;nich vám bude ochotna poradit, narazíte-li na problém. Naleznete
	je ve webovém fóru
	<a href="http://forum.czilla.cz/viewforum.php?f=19">podpory uživatelů Firefoxu</a>.</p>

	<h3 id="cervena-panda">Co znamená Firefox?</h3>

	<p><img src="/img/redpanda-m.jpg" id="rpm" alt="" />
	Slovo <strong>Firefox</strong> je anglickým překladem čínského jména pro
	<strong>pandu červenou</strong> <em lang="la">(Ailurus fulgens)</em>.
	Tento převážně vegetariánský medvídek žije v&nbsp;Himalájích
	v&nbsp;Číně, Bhutánu, Nepálu a&nbsp;Laosu. Většinu roku tráví osamoceně,
	výjimkou jsou matky s&nbsp;mláďaty. Panda se dožívá obvykle 13&nbsp;let, váží od
	4&nbsp;do 6&nbsp;kilogramů a&nbsp;je průměrně 55&nbsp;cm dlouhá.</p>

	<p>Červená panda patří dle
	<abbr title="International Union for Conservation of Nature and Natural Resources" lang="en">IUCN</abbr>
	mezi ohrožené druhy. Můžete se s&nbsp;ní setkat
	v&nbsp;<a href="http://www.zoopraha.cz/lexikon.php?i=53"
		title="ZOO Praha: Lexikon zvířat - panda červená">pražské ZOO</a>,
	ZOO Ústí nad Labem a ZOO Liberec.</p>

</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $web_name; ?></a> &gt;
		<strong>Nejčastější otázky</strong>
	</p>
</div>
<?php

	include($inc_path . "x_footer.inc");

?>
