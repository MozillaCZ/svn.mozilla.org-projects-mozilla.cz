<?php
	require_once '../../inc/page.php';
	$page->setTitle('Řešení problemů s Firefoxem');
	$page->setHeadline('Řešení problemů s Firefoxem','Návod jak řešit problémy s&nbsp;Firefoxem');
	$page->setKeywords('firefox, problémy, řešení');
	$page->setDescription('Návod jak řešit problémy s Mozilla Firefoxem');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<h2>Obsah</h2>

<ul>
<li><a href="#uvod" title="Úvod">Úvod</a></li>
<li><a href="#opersystem" title="Operační systém">Problém operačního systému</a>
</li>
<li><a href="#vyrovnpamet" title="Vyrovnávací paměť">Vyrovnávací paměť</a></li>
<li><a href="#nouzovyrezim" title="Nouzový režim">Nouzový režim</a></li>
<li><a href="#novyprofil" title="Nový profil">Nový profil</a>
	<ul>
		<li><a href="#pokrocile" title="Pro pokročilé">Pro pokročilé uživatele</a>
		</li>
	</ul>
</li>
<li><a href="#novinstal" title="Nová instalace Firefoxu">Nová instalace</a></li>
</ul>


<h2 class="nice" id="uvod">Úvod</h2>

<p>Tento článek popisuje základní kroky, kterých by se měl uživatel prohlížeče 
<a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Mozilla Firefox
</a> držet v případě jeho nestandardního chování. Pod tímto pojmem se skrývá
 nesprávné zobrazení stránek, chybové hlášení aj. podivné chování prohlížeče.</p>

<h2 class="nice" id="opersystem">Problém operačního systému</h2>

<p>Zdrojem potíží může být problém v operačním systému. Nejprve
zkuste vypnout samotný prohlížeč a opětovně jej zapnout. Musíte si ale dát pozor
na to, zda se skutečně ukončil. To si jednoduše ověříte ve Správci úloh &ndash; 
ten spustíte klávesovou zkratkou <kbd>Ctrl</kbd>+<kbd>Alt</kbd>+<kbd>Del</kbd> 
případně <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>Esc</kbd>.</p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/reseni-1.png" class="zoom"><img src="images/reseni-1-m.png" 
 title="Firefox: spuštený proces" alt="Firefox: spuštený proces" height="157" 
 width="200" /></a></div></div>

<p>Jestliže problém v prohlížeči přetrvá, restartujte počítač poklepáním na 
tlačítko <span class="nabidka">START</span>, následně zvolte
<span class="nabidka">Vypnout počítač</span> a <span 
class="nabidka">Restartovat</span></p>


<h2 class="nice" id="vyrovnpamet">Vyrovnávací paměť</h2>

<p>Firefox si podobně jako jiné webové prohlížeče ukládá prohlížené stránky do
dočasné paměti &ndash; ta může být jedním z potenciálních problémů. Dalším 
krokem je její vyprázdnění &ndash; klepněte na <span 
 class="nabidka">Nástroje</span>&nbsp;>&nbsp;
<span class="nabidka">Vymazat důvěrná data</span>, zaškrtněte
<span class="nabidka">Vyrovnávací paměť</span> a klepněte na tlačítko
<span class="nabidka">Vymazat důvěrná data</span>. Můžete použít také klávesovou 
zkratku <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>Del</kbd>.</p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/reseni-2.png" class="zoom"><img src="images/reseni-2-m.png" 
 title="Dialog vymazání důvěrných dat" alt="Dialog vymazání důvěrných dat" 
 height="181" width="200" /></a></div></div>

<h2 class="nice" id="nouzovyrezim">Nouzový režim</h2>

<p>Ve většině případů problém způsobuje nainstalované <a href="/podpora/firefox/instalace-rozsireni.html">
rozšíření</a>, <a href="/podpora/firefox/instalace-motivu-vzhledu.html">motiv vzhledu</a> popř.
jejich aktualizace. Tyto produkty nejsou vyvíjeny <a 
 href="http://www.mozilla.org/" title="Mozilla Corporation: Domovská stránka"
hreflang="en">Mozilla Corporation</a>, tudíž není chyba v samotném Firefoxu. Může
 se stát, že kombinace takovýchto doplňků vyvolá v prohlížeči chybu. Proto 
 můžete Firefox spustit v takzvaném "Nouzovém režimu", kdy jsou všechny 
 tyto doplňky zakázány.</p>

<p>Ještě dříve než se o to pokusíte, si musíte uvědomit, kde je
<a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefox</a>
nainstalovaný. Nejčastěji to bývá ve složce <span 
 class="soubor">C:\Program Files\Mozilla Firefox\</span>.</p>

<p>Poté v operačních systémech Windows otevřete příkazovou řádku pomocí
<span class="nabidka">START</span> &gt; <span class="nabidka">Spustit</span> 
a spustíte prohlížeč s parametrem <code>-Safe-Mode</code>. V našem případě tedy 
napíšete <span class="soubor">"C:\Program Files\Mozilla Firefox\firefox.exe" 
-Safe-Mode</span> a potvrdíte.</p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/reseni-3.png" class="zoom"><img src="images/reseni-3-m.png" 
 title="Příkazový řádek" alt="Příkazový řádek" 
 height="107" width="200" /></a></div></div>

<p>Ve verzích <a href="/produkty/firefox/" title="Firefox: Stránka o
produktu">Firefox</a> 1.5 a vyšších následuje dialog, ve kterém zvolte
možnost <span class="nabidka">Pokračovat v nouzovém režimu</span></p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/reseni-4.png" class="zoom"><img src="images/reseni-4-m.png" 
 title="Správce procesů" alt="Správce procesů" height="92" width="200" /></a>
 </div></div>

<p>Pokud problém přetrvává, pokračujte krokem <a href="#novyprofil" 
 title="Nový profil">Nový profil</a>. Neprojevuje-li se problém v nouzovém 
režimu, znamená to, že je na vině některé nainstalované <a 
 href="/podpora/firefox/instalace-rozsireni.html">rozšíření</a> nebo <a 
 href="/podpora/firefox/instalace-motivu-vzhledu.html">motiv vzhledu</a>. Je 
tedy třeba zjistit, které z doplňků problém způsobují.</p>

<p>Máte možnost doplněk zakázat nebo odinstalovat. Toto se provádí u rozšíření 
ve Správci rozšíření, kterého vyvoláte poklepáním na 
<span class="nabidka">Nástroje</span>&nbsp;>&nbsp;
<span class="nabidka">Správce rozšíření</span>. Obdobně postupujte u motivu 
vzhledu, kdy vyvoláte Správce motivů vzhledu poklepáním na <span 
class="nabidka">Nástroje</span>&nbsp;>&nbsp; <span 
class="nabidka">Správce motivů vzhledu</span>. (Obě tyto položky jsou
ve Firefoxu 2.0 sloučeny do <span class="nabidka">Správce doplňků</span>.)</p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/reseni-5.png" class="zoom"><img src="images/reseni-5-m.png" 
 title="Správce rozšíření" alt="Správce rozšíření" 
 height="108" width="200" /></a></div></div>

<p>Zakazováním jednotlivých doplňků a následným vyzkoušením Firefoxu v
normálním režimu problematický doplněk najděte a následně jej odinstalujte.
Poté se jej můžete pokusit znovu nainstalovat.</p>


<h2 class="nice" id="novyprofil">Nový profil</h2>

<p>Firefox, podobně jako např. některé operační systémy, umožňuje vytváření 
identit (profilů), které si pamatují nastavení každého uživatele. 
V některých případech jako např. výpadek elektrické energie, neodborný zásah do 
profilu, instalace chybového rozšíření může dojít k poškození profilu.</p>

<p>Veškeré tyto informace se tedy nacházejí v profilu. Profil se ukládá do
jiné složky, než samotný Firefox. Odinstalace Firefoxu na něj tedy nemá žádný
vliv a problém zůstává.</p>

<p>Informace, kde profil hledat, můžete nalézt mezi
<a href="http://firefox.mozilla.cz/otazky/#otazka-6" title="Často kladené
dotazy">často kladenými dotazy</a>. Jaké soubory profil obsahuje a jaké 
informace skrývá každý z nich naleznete v článku <a 
 href="/podpora/soubory-v-profilu.html"
title="Soubory v profilu prohlížeče Firefox">soubory v profilu</a>.</p>

<p>Podobně jako u <a href="#nouzovyrezim">Nouzového režimu</a>
spustíte Správce profilů pomocí příkazové řádky. Spouštěcí parametr je
<code>-ProfileManager</code>, nejčastěji tedy <span 
 class="soubor">"C:\Program Files\Mozilla Firefox\firefox.exe" -ProfileManager</span>.</p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/reseni-6.png" class="zoom"><img src="images/reseni-6-m.png" 
 title="Příkazový řádek" alt="Příkazový řádek" 
 height="107" width="200" /></a></div></div>

<p>Následně ve spuštěném Správci profilů zvolte možnost
<span class="nabidka">Vytvořit profil</span> a vytvořte nový profil.</p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/reseni-7.png" class="zoom"><img src="images/reseni-7-m.png" 
 title="Správce profilů" alt="Správce profilů" 
 height="154" width="200" /></a></div></div>

<p>V případě, že jste tímto způsobem problém odstranili, byl na vině poškozený 
profil. V opačném případě pokračujte krokem <a href="#novinstal" 
title="Nová instalace prohlížeče Firefox">Nová instalace</a>.</p>

<p>Váš nový profil bude ochuzen o všechno původní nastavení, rozšíření,
oblíbené záložky aj. Ty můžete posléze získat ze starého profilu přímým
přenosem <a href="/podpora/soubory-v-profilu.html" title="Soubory v profilu
prohlížeče Firefox">souborů</a> nebo pomocí programu MozBackup. Tímto způsobem se
nedoporučuje obnovovat <a 
 href="/podpora/firefox/instalace-rozsireni.html">rozšíření</a>,
<a href="/podpora/firefox/instalace-motivu-vzhledu.html">motivy vzhledu</a> a 
Firefoxem generované soubory, je lepší je znovu nainstalovat.</p>

<h3 class="nice" id="pokrocile">Pro pokročilé</h3>

<p>Předtím, než se do něčeho pustíte, zálohujte
<a href="http://firefox.mozilla.cz/otazky/#otazka-6" title="Umístění profilu">
profil</a>. Firefox vypněte a zkontrolujte tento stav také ve
<a href="#opersystem" title="Správce procesů MS Windows">Správci procesů</a>.
Otevřete adresář s profilem a zrušte u všech souborů atribut "Jen pro
čtení", obzvláště u souborů s koncovkou <span class="soubor">.moztmp</span> 
(např. <span class="soubor">bookmarks.html.moztmp</span>, <span 
 class="soubor">prefs.js.moztmp</span>, <span 
 class="soubor">cookies.txt.moztmp</span>). Přetrvá-li problém, opět vypněte 
Firefox a smažte soubor:</p>

<div class="tbl-1">
<table border="1">

<thead>
<tr>
<th>Operační systém</th>
<th>Název souboru</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Windows</strong></td>
<td><tt><i>XUL.mfl</i></tt></td>
</tr>
<tr>
<td><strong>Linux</strong></td>

<td><tt><i>xul.mfasl</i></tt></td>
</tr>
<tr>
<td><strong>Mac OS X</strong></td>
<td><tt><i>XUL FastLoad File</i></tt></td>
</tr>
</table>
</div>

<p>V operačním systému MS Windows XP je tento soubor umístěn ve složce
<span class="soubor">C:\Documents and Settings\[název účtu]\Local Settings\Data
aplikací\Mozilla\Firefox\Profiles\[název profilu]</span>.</p>

<p>Přetrvává-li problém i nadále, smažte následující soubory: <span class="soubor">
downloads.rdf</span> (historie stahování), <span class="soubor">history.dat</span> 
(historie prohlížených stránek), <span class="soubor">mimetypes.rdf</span> 
(akce pro stahování) a <span class="soubor">localstore.rdf</span> (nastavení 
rozmístění a velikosti oken).</p>

<p>Nepomohl-li ani předešlý úkon, smažte soubory <span 
 class="soubor">prefs.js</span> a <span class="soubor">user.js</span>
 (nemusí existovat) a adresáře <span class="soubor">extensions</span> a 
 <span class="soubor">chrome</span>. Pokud ani teď problém neustoupil, 
 pokračujte krokem <a href="#novinstal" 
title="Nová instalace prohlížeče Firefox">Nová instalace</a>.</p>

<h2 class="nice" id="novinstal">Nová instalace</h2>

<p>Nejprve odinstalujte prohlížeč Firefox z operačního systému. Smažte nebo 
přesuňte <a href="http://firefox.mozilla.cz/otazky/#otazka-6" title="Často kladené
dotazy">profil</a> do jiného umístění. Následně <a 
href="http://www.mozilla.cz/stahnout/firefox/"
title="Mozilla.cz: Stažení Firefoxu">stáhněte</a> a spusťte instalátor prohížeče
Mozilla Firefox.</p>
 
 <div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/reseni-8.png" class="zoom"><img src="images/reseni-8-m.png" 
 title="Instalace Firefoxu" alt="Instalace Firefoxu" 
 height="156" width="200" /></a></div></div>
 
 <p>Nezmizí-li problém ani teď, opět <a href="#opersystem" title="Správce 
 procesů">ukončete Firefox</a> a přejmenujte spouštěcí soubor 
 <span class="soubor">firefox.exe</span> na <span class="soubor">firefox1.exe
 </span>.</p>
 
 <p>Tento článek byl inspirován článkem 
 <a href="http://www.mozilla.sk/325/standardna-diagnostika-firefoxu/">Standardná
  diagnostika Firefoxu</a> ze serveru <a href="http://www.mozilla.sk/" 
  title="Slovenská lokalizační komunita produktů Mozilla">mozilla.sk</a>. Tímto 
  bych chtěl poděkovat za inspiraci slovenským kolegům.</p>

<hr />
<p><small>2. 8. 2006, <a href="/czilla/prispevatele.php#kdo-je-ST">Štěpán Tračík</a></small></p>

<?php
	$page->includeTemplate('footer');
?>