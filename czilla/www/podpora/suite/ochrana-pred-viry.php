<?php
	require_once '../../inc/page.php';
	$page->setTitle('Ochrana před viry v Mozille');
	$page->setHeadline('Ochrana před viry v Mozille','Rady a doporučení, jak se v Mozille chránit pře viry');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Vývoj aplikace Mozilla Suite <strong>byl ukončen</strong>,
jejím nástupcem s řadou novinek je aplikace <strong><a href="/produkty/seamonkey/">Seamonkey</a></strong>.</div>

<h2>Souhrn</h2>
<p>
	<img src="./images/vr-disk.png"
	alt="Komický obrázek počítačového viru"
	title="Počítačový virus je zlá a ošklivá havěť"
	style="float:right;margin:0 0 .5em 1em;width:150px;height:197px" />
	Několik rad, jak se vyvarovat "e-mailových virů" na počítači
	s operačním systémem Microsoft Windows:
</p>

<ol>
	<li>Nainstalujte Mozilla Suite</a> (je zdarma).</li>
	<li>Přečtěte si tento článek (vyplatí se vám to).</li>
	<li>Nebojte se.</li>
	<li>Ale buďte opatrní, pokud jako e-mailovou přílohu obdržíte
	neznámý archiv (např. soubory <span class="soubor">.zip</span>).</li>
	<li>Dejte si pozor na dokumenty Microsoft Office
	přijaté e-mailem (mohou obsahovat viry).</li>
</ol>

<h2>Komu je určen tento článek</h2>

<p>My všichni máme rádi e-maily. Ale je tu problém. Je zde totiž "havěť",
která se e-maily šíří z&nbsp;jednoho počítače na druhý. Je to trochu jako
řetězový dopis, ale zautomatizovaný a&nbsp;šířící se ohromující rychlostí.
Toto "smetí" může napáchat těžké škody (např. obrovské účty za telefon,
náhlá zpomalení připojení, náhodné pády systému).</p>

<p>Tým vývojářů Mozilly odvádí záslužnou práci. Pomáhá vám:</p>

<ul>
	<li>spokojeně používat e-mail;</li>
	<li>udržet e-mailem šířené "smetí" mimo váš počítač;</li>
	<li>snížit potřebu antivirových programů.</li>
</ul>

<p>Tento článek je určen začínajícím uživatelům používajícím Mozilla Suite,
verzi&nbsp;1.7.x na operačním systému Microsoft Windows. Budeme
předpokládat, že máte Mozilla Suite již nainstalovanou a&nbsp;nastavenou
(možná od kamaráda nebo správce sítě). <a href="/produkty/suite/">Mozilla
Suite</a> obsahuje e-mailový klient (zvaný někdy <strong>Mozilla Pošťák</strong>).</p>

<h2>Jak vás Mozilla Pošťák chrání</h2>

<ul>
	<li>Je imunní proti virům, které se mohou automaticky spustit při
	prohlížení zprávy.</li>
	<li>Je imunní proti virům, které jsou schované v&nbsp;obrázcích.</li>
	<li>Pomáhá odhalit nebezpečné e-mailové přílohy tím, že vám poskytne
	podrobnosti o&nbsp;přílohách.</li>
	<li>Pomáhá předejít nehodám, když pracujete se svou poštou.</li>
</ul>

<h2 id="vr-poucka">Philova třířádková poučka odhalení e-mailových virů</h2>

<ul>
	<li><b>Je v&nbsp;e-mailu příloha se jménem končícím na ".zip"?
	<br />NEBO</b></li>
	<li><b>Když klepnete na přílohu, máte jen dvě volby
	místo obvyklých tří?</b></li>
</ul>

<h2>Příklady</h2>

<h3>Příloha ".zip"</h3>

<p>Zpráva dole na obrázku obsahuje přílohu se jménem končícím na <span
class="soubor">.zip</span>. Tečka a&nbsp;poslední tři písmena se nazývají
<em>přípona</em>. Přípona počítači sděluje, o&nbsp;jaký druh souboru se
jedná. Soubor <span class="soubor">.zip</span> je <em>komprimovaný</em>
soubor, který obsahuje více souborů. Pokud dostanete zprávu podobné této,
prostě ji smažte (pokud ji ovšem neočekáváte a&nbsp;nevíte předem, co
v&nbsp;ní je).</p>

<div class="img-center"><div class="img-c" style="width:340px">
	<a href="./images/vr-zip.png"
	title="Klepněte pro plnou velikost..."
	class="zoom"><img
	src="./images/vr-zip-m.png"
	style="width:340px;height:213px"
	alt="E-mail se ZIP přílohou" /></a>
</div></div>

<h3>Příloha ".exe"</h3>

<p>Zpráva dole na obrázku obsahuje přílohu se jménem končícím na <span
class="soubor">.exe</span>. Přípona <span class="soubor">.exe</span> znamená
"executable" (spustitelný) nebo "program". Pokud dostanete zprávu podobné
této, prostě ji smažte.</p>

<div class="img-center"><div class="img-c" style="width:340px">
	<a href="./images/vr-exe.png"
	title="Klepněte pro plnou velikost..."
	class="zoom"><img
	src="./images/vr-exe-m.png"
	alt="E-mail s&nbsp;EXE přílohou"
	style="width:340px;height:213px" /></a>
</div></div>

<h3>Příloha ".pif"</h3>

<p>Zpráva dole na obrázku obsahuje přílohu s&nbsp;příponou <span
class="soubor">.pif</span>. Přípona <span class="soubor">.pif</span>
znamená, že je to program, stejně jako u&nbsp;přípony <span
class="soubor">.exe</span>". Pokud dostanete zprávu podobné této, smažte ji.
Další nejčastější přípona virů, na kterou byste si měli dávat pozor, je
<span class="soubor">.scr</span>, což znamená spořič obrazovky.</p>

<div class="img-center"><div class="img-c" style="width:340px">
	<a href="./images/vr-pif.png"
	title="Klepněte pro plnou velikost..."
	class="zoom"><img
	src="./images/vr-pif-m.png"
	alt="E-mail s&nbsp;PIF přílohou"
	style="width:340px;height:213px" /></a>
</div></div>


<h2 id="vr-otevirani-priloh">Otevírání příloh</h2>

<p>Když poklepete na přílohu, která je textový soubor, obrázek <span
class="soubor">JPG</span>, <span class="soubor">PNG</span> nebo <span
class="soubor">GIF</span>, Pošťák Mozilla Suite otevře přílohu přímo
v&nbsp;sobě. Jinak se vás zeptá, co chcete s&nbsp;přílohou udělat. Tak vám
sděluje, <em>"Hej, nemohu tuto přílohu otevřít, ale možná je na vašem
počítači jiný program, který by mohl."</em></p>

<p>Obvykle máte tři možnosti: první, <span class="nabidka">Otevřít
s&nbsp;výchozí aplikací (název aplikace)</span>. Teď dávejte pozor.
<strong>Když pracujete s&nbsp;potencionálně škodlivou přílohou, máte
možnosti pouze dvě</strong>: <span class="nabidka">Otevřít
v&nbsp;aplikaci</span> a&nbsp;<span class="nabidka">Uložit na disk</span>.
To vám pomáhá chránit se proti rizikům, protože to znamená, že musíte
přemýšlet o&nbsp;tom, co s neobvyklou přílohou uděláte.</p>

<div class="img-center"><div class="img-c" style="width:434px">
	<img src="./images/vr-open.png"
	alt="Dialog pro uložení souboru"
	style="width:434px;height:232px" />
</div></div>


<h2>Opakování</h2>

<p>Když poklepete na přílohu...</p>

<ul>
	<li>...a&nbsp;je to zip soubor, a&nbsp;vy nevíte, od koho je nebo co to je,
	klepněte na <span class="nabidka">Zrušit</span> a&nbsp;poté
	<strong>zprávu smažte</strong>.</li>

	<li>...a&nbsp;je to soubor jiného typu, a&nbsp;vy máte jen dvě volby
	místo obvyklých tří, klepněte na <span
	class="nabidka">Zrušit</span> a&nbsp;poté <strong>zprávu
	smažte</strong>.</li>
</ul>


<h2>Omezení</h2>

<p>Poštovní klient v&nbsp;Mozilla Suite ubírá antivirovým programům práci. Ale
pořád tu jsou problémy, o&nbsp;kterých byste měli vědět.</p>

<h3>Soubory aplikací Microsoft Word, Excel, Powerpoint a&nbsp;Access</h3>

<p>Pamatujete si doby, když jste ještě nemohli dostat virus ve formátovaném
textu? <a href="http://www.microsoft.com/" hreflang="en">Microsoft</a> nám
to umožnil. V Microsoft Office 97 a&nbsp;novějších <strong>mohou dokumenty
aplikací Word, Excel, Powerpoint a&nbsp;Access obsahovat viry</strong>.
Například pokud obdržíte infikovaný <span class="soubor">.doc</span> soubor
e-mailem, Mozilla Suite ho vesele předá Wordu a&nbsp;může následovat
pohroma. Účinná obrana je používání kancelářského balíku <a
href="http://oo.o.cz/">OpenOffice.org</a>, který je zdarma, místo Microsoft
Office.</p>

<h3>Obrázky Joint Picture Experts Group (<acronym
title="Joint Photographic Experts Group" lang="en">JPEG</acronym>)</h3>

<p>Pamatujete si doby, kdy jste ještě nemohli dostat virus při prohlížení
obrázku? I to nám Microsoft umožnil. Pouhé prohlížení obrázku <acronym
title="Joint Photographic Experts Group" lang="en">JPEG</acronym> může vést k&nbsp;virové nákaze. Bohužel je to
složitý problém. Nejlepší rada je podívat se na <a
href="http://www.microsoft.com/technet/security/bulletin/MS04-028.mspx"
hreflang="en">článek Microsoftu</a>. Naštěstí "jedovaté" <acronym
title="Joint Photographic Experts Group" lang="en">JPEG</acronym>
obrázky na Mozillu nepůsobí. Důvody:</p>

<ol>
	<li>Mozilla má lepší dekodér obrázků;</li>
	<li>Mozilla není tak provázána s&nbsp;operačním systémem Windows;</li>
	<li>Mozilla není hloupá. Škodlivé <acronym title="Joint Photographic Experts Group"
	lang="en">JPEG</acronym>
	obrázky nepůsobí ani na <a href="http://oo.o.cz/">OpenOffice.org</a>.</li>
</ol>

<p>Pro vyzkoušení (na vlastní nebezpečí) si stáhněte testovací <a
href="http://www.pjls16812.pwp.blueyonder.co.uk/mozilla/crashme.jpg">obrázek</a>
a&nbsp;soubor <a
href="http://www.pjls16812.pwp.blueyonder.co.uk/mozilla/crashme.doc">Wordu</a>;
pokud je otevřete bez jakékoli havárie, jste v&nbsp;bezpečí.</p>

<h3>Slabiny Mozilla Suite</h3>

<p>Mozilla Suite není dokonalá (je nám líto). Virus může (teoreticky)
využít <a href="http://www.mozilla.org/projects/security/known-vulnerabilities.html"
hreflang="en">známých zranitelných míst Mozilly</a> pro útok na uživatele
Mozilla Suite.</p>

<p>Hluboko uvnitř starého kódu Netscape, na němž je Mozilla založená, je
možná spousta "kostlivců", kteří mohou "vylézt ze skříně". Naše rada proto je:
<strong>čas od času zkontrolujte, zda nevyšla nová verze</strong>
a&nbsp;jděte s&nbsp;dobou. Mozilla Suite se dá snadno aktualizovat.
Odinstalujte starou verzi, stáhněte si
<a href="/podpora/suite/instalace.php">instalační balík Mozilly</a>
a&nbsp;spusťte ho. Nainstaluje se vám nová verze se zachováním všech vašich
nastavení, e-mailů a&nbsp;kontaktů.</p>

<hr />

<h2 id="vr-zvyseni-bezpecnosti">Další rady pro zvýšení bezpečnosti</h2>

<h3>Ovládejte zobrazení zpráv formátovaných v HTML</h3>

<p>Mozilla Suite vám umožňuje nastavit způsob zobrazení zpráv formátovaných
v&nbsp;<abbr title="Hypertext Markup Language" lang="en">HTML</abbr>.
Klepněte na nabídku <span class="nabidka">Zobrazit</span> -&gt; <span
class="nabidka">Tělo zprávy jako</span>. Najdete zde tři možnosti:</p>

<ul>
	<li><span class="nabidka">Původní HTML</span></li>
	<li><span class="nabidka">Jednoduché HTML</span></li>
	<li><span class="nabidka">Prostý text</span></li>
</ul>

<div class="img-center"><div class="img-c" style="width:323px">
	<img src="./images/vr-html.png"
	width="323" height="278"
	style="width:323px;height:278px"
	alt="Nabídka Zobrazit &gt; Tělo zprávy jako &gt; Jednoduché HTML" />
</div></div>

<p><span class="nabidka">Jednoduché HTML</span> zbavuje protivných prvků
jako barevné pozadí nebo blikající text. <span class="nabidka">Prostý
text</span> zbavuje veškerého <abbr title="Hypertext Markup Language"
lang="en">HTML</abbr> formátování včetně obrázků. V budoucnosti může být
objevena slabina Mozilly při zobrazení <abbr title="Hypertext Markup Language"
lang="en">HTML</abbr> zprávy. S <span class="nabidka">jednoduchým
HTML</span>, nebo <span class="nabidka">prostým textem</span> budou mít
jakékoliv budoucí slabiny v&nbsp;zobrazení menší šanci stát se
nebezpečnými.</p>

<h3>Vypněte vzdálené obrázky</h3>

<p>Text formátovaný v <abbr title="Hypertext Markup Language" lang="en">HTML</abbr>
může obsahovat obrázky nahrávané z&nbsp;webové stránky. Říká se jim
<em>vzdálené obrázky</em>. Proč obrázky vypínat? Zaprvé, je zde ohrožení
vašeho soukromí. A ještě důležitější je, že v&nbsp;budoucnosti může být
zjištěna slabina v&nbsp;nahrávání obrázků Mozillou. Vypnutím vzdálených
obrázků se chráníte proti možným budoucím bezpečnostním problémům. Pro
vypnutí vzdálených obrázků zobrazte nabídku <span
class="nabidka">Úpravy</span>
-&gt; <span class="nabidka">Předvolby</span> -&gt; <span
class="nabidka">Soukromí a&nbsp;Zabezpečení</span> -&gt; <span
class="nabidka">Obrázky</span> a&nbsp;zaškrtněte volbu <span
class="nabidka">Nenačítat v&nbsp;poště obrázky ze vzdálených serverů</span>,
potom klepněte na <span class="nabidka">OK</span>.</p>

<div class="img-center"><div class="img-c" style="width:340px">
	<a href="./images/vr-obrazky.png"
	title="Klepněte pro plnou velikost..."
	class="zoom"><img src="./images/vr-obrazky-m.png"
	alt="Předvolby &gt; Soukromí &amp; Zabezpečení &gt; Obrázky"
	style="width:340px;height:228px" /></a>
</div></div>

<h3>Vypněte náhledy zpráv</h3>

<p><em>Panel zpráv</em> vám umožňuje prohlížení zpráv jediným kliknutím.
V&nbsp;budoucnosti může být zjištěna slabina Mozilla Suite v&nbsp;načítání
náhledů zpráv. Pro vypnutí panelu zpráv klepněte na nabídku <span
class="nabidka">Zobrazení</span> -&gt; <span class="nabidka">Zobrazit/Skrýt</span>
-&gt; <span class="nabidka">Panel zpráv</span>. Může to snížit
pravděpodobnost bezpečnostním děr a&nbsp;nechá vás to smazat zprávy bez
jejich prohlížení.</p>

<h3>Podívejte se na zdrojový kód zprávy</h3>

<p>Pokud si nejste jisti zprávou, kterou jste obdrželi, klepněte na nabídku
<span class="nabidka">Zobrazení</span> -&gt; <span class="nabidka">Zdrojový
kód zprávy</span> (<kbd>Ctrl</kbd>+<kbd>U</kbd>). Zobrazí se zdrojový kód
zprávy, včetně všech hlaviček.</p>


<h2 id="vr-pro-zvidave">Pro zvídavé</h2>

<p>Tato část je pro pokročilé uživatele a&nbsp;správce systému. Binární
přílohy (jako třeba <span class="soubor">.exe</span> soubory) si můžete
prohlédnout pomocí Poznámkového bloku. Musíte specifikovat celou cestu
k&nbsp;Poznámkovému bloku. Například pokud používáte Windows&nbsp;98,
napište <span class="soubor">c:\windows\notepad.exe</span> do políčka <span
class="nabidka">Otevřít pomocí</span>, potom klepněte na <span
class="nabidka">OK</span>. Mozilla Pošťák uloží kopii souboru do dočasné
složky (např. <span class="soubor">c:\windows\temp</span>).</p>

<p>Na obrázku dole najdete virus "Beagle" otevřený v&nbsp;Poznámkovém bloku.
Všimněte si neúmyslného prozrazení "<span class="en">This program cannot be
run in DOS mode</span>" (Tento program nemůže běžet v&nbsp;DOSu) hned
nahoře. Také si povšimněte slova "beagle" na pravé straně, podle kterého byl
virus pojmenován. Někdy virus objevíte právě při prohlížení
v&nbsp;Poznámkovém bloku.</p>

<div class="img-center"><div class="img-c" style="width:340px">
	<a href="./images/vr-notepad.png"
	title="Klepněte pro plnou velikost..."
	class="zoom"><img src="./images/vr-notepad-m.png"
	style="width:340px;height:206px"
	alt="Program otevřený v&nbsp;Poznámkovém bloku" /></a>
</div></div>

<hr />

<p><small>Dokument je překladem článků <strong>Phila Jonese</strong>
a&nbsp;<strong>Vidara Brauta Haarra</strong> <a
href="http://www.pjls16812.pwp.blueyonder.co.uk/mozilla/"
hreflang="en">Avoiding Windows email viruses with Mozilla Mail</a> a&nbsp;<a
href="http://www.pjls16812.pwp.blueyonder.co.uk/mozilla/part2.html"
hreflang="en">Other things you can do to improve security</a>. Přeložil David
Koudela.</small></p>

<?php
	$page->includeTemplate('footer');
?>
