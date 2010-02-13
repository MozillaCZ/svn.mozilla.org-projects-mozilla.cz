<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Firefox na cesty';
	$page->headline = array('Firefox na cesty','Jak na přenosný prohlížeč s&nbsp;vlastním nastavením');

	$page->includeHeader(); 
?>

<div id="navigation">
	<a href="#fnc-pp">Přenositelný prohlížeč</a>
	&middot;
	<a href="#fnc-pk">Připravujeme konfiguraci</a>
	&middot;
	<a href="#fnc-cnp">Co nejmenší prohlížeč</a>
</div>

<h2 id="fnc-pp">Přenositelný prohlížeč</h2>

<p>Pokud používáte Firefox, už vás asi taky napadlo: &quot;Co takhle
používat Firefox jako přenosný prohlížeč, s&nbsp;vlastním nastavením
a&nbsp;kdekoli na počítači s&nbsp;operačním systémem Windows mít možnost jej
spustit (např. z&nbsp;flashdisku) a&nbsp;bez nutnosti konfigurace ihned
začít brouzdat, stejně jako doma?&quot; Zní to jednoduše, nicméně řešení
není zcela triviální, a&nbsp;to hned z&nbsp;několika důvodů:</p>

<ul>
	<li>Firefox si nastavení implicitně neukládá k&nbsp;sobě, ale do
	systému.</li>

	<li>Totéž platí pro rozšíření (<span lang="en">extensions</span>),
	motivy vzhledu (<span lang="en">themes</span>) a&nbsp;moduly (<span
	lang="en">plugins</span>).</li>

	<li>Cesty jsou absolutní (stačí pouhá změna písmene jednotky, a&nbsp;už
	něco nefunguje).</li>

	<li>Prohlížeč je relativně velký (na flashdisk se 16&nbsp;MB se
	nevejde).</li>
</ul>

<p>Po několika dnech procházení různých diskusních fór, mučení Google
a&nbsp;zkoušení metodou pokus-omyl jsem si vytvořil <em>vlastní</em> kopii
Firefoxu, ve které jsou ošetřeny všechny výše zmíněné body. Samozřejmě se
o&nbsp;postup podělím, přepokládám, že to bude alespoň několik uživatelů
Firefoxu zajímat.</p>

<p>Ze všeho nejdříve budeme potřebovat několik nástrojů, já jsem použil
tyto:</p>

<ul>
	<li><strong>Firefox</strong>, verzi bez instalátoru
		(<a href="http://firefox.czilla.cz/stahnout/">http://firefox.czilla.cz/stahnout/</a>)</li>
	<li><strong lang="en">Total Commander</strong>
		(<a href="http://www.ghisler.com/download.htm"
			hreflang="en">http://www.ghisler.com/download.htm</a>)</li>
	<li><strong><abbr title="Ultimate Packer for eXecutables" lang="en">UPX</abbr></strong>
		(<a href="http://upx.sourceforge.net/#download"
			hreflang="en">http://upx.sourceforge.net/#download</a>)</li>
	<li><strong lang="en">PowerArchiver</strong>
		(<a href="http://www.powerarchiver.com/download/"
			hreflang="en">http://www.powerarchiver.com/download/</a>)</li>
	<li><strong lang="en">Portable Firefox Launcher</strong>
		(<a href="http://johnhaller.com/jh/mozilla/portable_firefox/"
			hreflang="en">http://johnhaller.com/jh/mozilla/portable_firefox/</a>)</li>
</ul>

<p>Nejprve vyřešíme první problém. Rozbalte pomocí <span lang="en">Total
Commanderu</span> archiv Firefoxu do libovolné složky. V&nbsp;ní (tzn. tam,
kde je <span class="soubor">firefox.exe</span>) vytvořte složku <span
class="soubor">profile</span> (ale může se klidně jmenovat i&nbsp;jinak)
a&nbsp;ještě vytvořte v&nbsp;Poznámkovém bloku soubor <span
class="soubor">start.bat</span> a&nbsp;vložte do něho:</p>

<pre class="codearea"><code>@start firefox.exe -Profile &quot;profile/&quot;</code></pre>

<p>Uložte soubor a&nbsp;ukončete Poznámkový blok. Spusťte <span
class="soubor">start.bat</span> (v&nbsp;budoucnu spouštějte Firefox už jen
přes <span class="soubor">start.bat</span>, jinak se vám opět vytvoří profil
v&nbsp;systému) a&nbsp;problém s&nbsp; ukládáním nastavení je vyřešen.</p>


<h2 id="fnc-pk">Připravujeme konfiguraci</h2>

<p>Nejdelší částí je vlastní konfigurace (i&nbsp;když nastavit
to můžete klidně až nakonec) a&nbsp;hlavně instalace rozšíření, motivů
vzhledu a&nbsp;modulů. Využijte přitom
<a href="https://addons.mozilla.org/"
	hreflang="en" lang="en">Mozilla Update</a>
a&nbsp;<a href="http://extensionroom.mozdev.org/"
	hreflang="en" lang="en">Extension Room</a>
a&nbsp;nezapomeňte si povolit instalování rozšíření z&nbsp;těchto adres.
Samozřejmě se snažte šetřit, nezapomínejte, že cílem je především malá
a&nbsp;přenosná instalace. Až skončíte, zavřete prohlížeč.</p>

<p>Problém absolutních cest: rozbalte Portable Firefox Launcher do složky
prohlížeče a&nbsp;upravte soubor <span
class="soubor">PortableFirefox.ini</span> (opět postačí Poznámkový blok) do
této podoby:</p>

<pre class="codearea"><code>[PortableFirefox]
firefoxpath=.\
profiledirectory=profile</code></pre>

<p>Uložit, zavřít. Nastartujte Firefox přes <span
class="soubor">PortableFirefox.exe</span>, chvilku počkejte a&nbsp;hned
prohlížeč ukončete. A&nbsp;z&nbsp;absolutních cest jsou rázem relativní!
Nyní je již prohlížeč plně přenosný, stačí jej spouštět přes <span
class="soubor">start.bat</span>. Mějte ale na paměti, že pokud nainstalujete
nějaké další rozšíření, vzhled, nebo modul, musíte znovu alespoň jednou
spustit Firefox pomocí <span class="soubor">PortableFirefox.exe</span>. Po
aktualizaci současných rozšíření nemusíte většinou <span
class="soubor">PortableFirefox.exe</span> spouštět &ndash; i&nbsp;když se najdou
výjimky. Můžete klidně také <span class="soubor">PortableFirefox.exe</span>
používat při každém spuštění, ale je to zbytečné a&nbsp;připravíte se tím
o&nbsp;možnost instalovat rozšíření a&nbsp;motivy vzhledu přímo ze stránky
&ndash; při instalaci dojde k&nbsp;chybě, za kterou může právě <span
class="soubor">PortableFirefox.exe</span>. Pokud tedy nepředpokládáte
instalaci dalších rozšíření, vzhledů, nebo modulů, můžete celý Portable
Firefox Launcher smazat. V nejhorším případě jej znovu stáhnete a&nbsp;jeho
úpravu si zopakujete.</p>


<h2 id="fnc-cnp">Co nejmenší prohlížeč</h2>

<p>V&nbsp;tomto stavu už bychom mohli Firefox ponechat a&nbsp;používat, ale
my jej chceme mít co nejmenší. Pozitivním vedlejším efektem bude také
o&nbsp;trochu rychlejší spouštění. Menší velikosti dosáhneme kompresí
spustitelných souborů a&nbsp;zmenšením JAR archivů. Vrhneme se nejdříve na
spustitelné soubory. Rozbalte archiv
s&nbsp;<abbr title="Ultimate Packer for eXecutables" lang="en">UPX</abbr>

&ndash; zkuste klidně i&nbsp;betaverzi, ale pro jistotu si Firefox zazálohujte
a&nbsp;zkopírujte <span class="soubor">upx.exe</span> do složky prohlížeče.
Dále zde vytvořte soubor <span class="soubor">upx.bat</span> a&nbsp;vložte
do něho toto:</p>

<pre class="codearea"><code>upx.exe --best --crp-ms=999999 *.*
cd &quot;components&quot;
..\upx.exe --best --crp-ms=999999 *.*
cd &quot;..\plugins&quot;
..\upx.exe --best --crp-ms=999999 *.*</code></pre>

<p>Uložit, zavřít, spustit <span class="soubor">upx.bat</span>
a&nbsp;čekat&#8230; Vyzkoušejte, jestli je Firefox funkční 
(někdy se stane, že po kompresi UPX nefunguje <span class="soubor">PortableFirefox.exe</span>
, v&nbsp;tom případě obnovte původní verzi tohoto souboru z&nbsp;archivu Portable Firefox Launcheru).
 Pokud ano,
jedeme dál (a&nbsp;vše od
<abbr title="Ultimate Packer for eXecutables" lang="en">UPX</abbr>
můžete z&nbsp;Firefoxu smazat). Pokud ne, zkuste místo betaverze
<abbr title="Ultimate Packer for eXecutables" lang="en">UPX</abbr>
nějakou starší stabilní verzi, nebo můžete kompresi
<abbr title="Ultimate Packer for eXecutables" lang="en">UPX</abbr>
úplně vynechat (resp. obnovit zálohu). Předpokládejme tedy, že Firefox
funguje.</p>

<p>Jedeme dál: zmenšení JAR archivů. Princip spočívá v&nbsp;tom, že všechny
archivy rozbalíme a&nbsp;opětovně zabalíme na nejvyšší možnou úroveň, kterou
nám archivační program nabízí. Když máme <span
lang="en">PowerArchiver</span> a&nbsp;<span lang="en">Total
Commander</span>, bude to hračka. Spusťte integrované vyhledávání Windows
a&nbsp;nechte vyhledat <span class="soubor">*.jar</span> ve složce
prohlížeče a&nbsp;všech jeho podsložkách. Označte všechny nalezené soubory
a&nbsp;vyvolejte kontextovou nabídku. Pokud máte nainstalován <span
lang="en">PowerArchiver</span>, je v&nbsp;nabídce příkaz <span
class="nabidka" lang="en">Convert...</span>; zvolte jej. Objeví se okno se
seznamem souborů: jako cílovou složku zvolte <span class="nabidka"
lang="en">File's Current Folder</span> (aktuální), cílový formát <span
class="nabidka">ZIP</span> a&nbsp;úroveň komprese <span class="nabidka"
lang="en">Maximum</span> (ale nikoliv <span class="nabidka"
lang="en">Deflate64</span>!). Potvrďte a&nbsp;čekejte; po dokončení konverze
<span lang="en">PowerArchiver</span> zavřete.</p>

<p>Otevřete <span lang="en">Total Commander</span>, stiskněte
<kbd>Alt</kbd>+<kbd>F7</kbd> a&nbsp;vyhledejte soubory <span
class="soubor">*.zip</span> ve složce Firefoxu a&nbsp;podsložkách).
Tlačítkem <span class="nabidka">Feed to listbox</span> přeneste výsledky
hledání do okna. V&nbsp;něm vše označte a&nbsp;stiskněte <kbd>F6</kbd> pro
přejmenování souborů a&nbsp;do pole zadejte <code>*.jar</code>
a&nbsp;potvrďte; pokud se vás <span lang="en">Total Commander</span> zeptá
na přepsání souborů, zvolte <span class="nabidka" lang="en">Owerwrite
all</span>.</p>

<p>Hotovo, Firefox se zmenšil. Pokud můžete, provádějte
&quot;přebalení&quot; archivů po každé aktualizaci nebo přidání rozšíření
(samozřejmě jen pokud se skutečně něco aktualizovalo) &ndash; ať je Firefox
co možná nejmenší.</p>

<p>A&nbsp;teď už konečně můžeme Firefox zkopírovat na flashdisk &ndash;
v&nbsp;tom případě není od věci vypnout např. cookies, historii
a&nbsp;diskovou cache (a&nbsp;používat pouze paměťovou). Sice se lehce sníží
komfort brouzdání s&nbsp;Firefoxem, ale na druhou stranu nebude pořád
zapisovat, což se pozitivně projeví na životnosti flashdisku. Ale to už jsou
pouhé detaily.</p>

<p>Zkontrolujme tedy v prohlížeči v <span class="nabidka" lang="en">Nástroje
&gt; Možnosti...</span>, sekci <span class="nabidka"
lang="en">Soukromí</span>. Zde vypneme cookies, ukládání hesel a formulářů.
Cache nastavíme nulovou velikost, nulu použijeme také pro nastavení
historie navštívených stránek a zavřeme dialog. To ovšem nestačí (ani pro
cache, ani pro historii), a tak do adresního řádku zadáme
<code>about:config</code>, vyhledáme si proměnnou
<code>browser.cache.disk.enable</code> a nastavíme ji hodnotu
<code>false</code>. Tím jsme definitivně vypnuli diskovou cache, odteď se
bude cache vytvářet pouze v operační paměti (pokud má
<code>browser.cache.memory.enable</code> hodnotu <code>true</code>, což je
výchozí nastavení Firefoxu). A pro úplné vypnutí historie postačí prohlížeč
ukončit, otevřit složku <code>profile</code> a v ní vymazat soubor <span
class="soubor">history.dat</span>, vytvořit nový, prázdný soubor <span
class="soubor">history.dat</span> a nastavit mu atribut <code>jen pro
čtení</code>. Uvidíte, že se flashdisku uleví...</p>

<hr />
<p><small>30. 11. 2004, <a href="http://pmatous.net/">Petr Matouš</a></small></p>

<?php
	$page->includeFooter();
?>
