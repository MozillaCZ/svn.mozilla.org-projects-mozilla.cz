 <?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Windows Media Player ve Firefoxu';
	$page->headline = array('Windows Media Player ve Firefoxu','Návod jak řešit problémy s&nbsp;WMP ve Firefoxu');

	$page->setKeywords('firefox, windows media player, wmp, problémy, video, zvuk');
	$page->setDescription('Návod jak řešit problémy s&nbsp;WMP v&nbsp;Mozilla Firefoxu');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links');
	$page->addSideBox('tips','firefox');

	$page->includeHeader();
?>

<h2 class="nice">Obsah</h2>

<ul>
<li><a href="#wmpuvod" title="Úvod">Úvod</a></li>
<li><a href="#wmpplugin" title="Zásuvný modul WMP">Zásuvný modul Windows Media Player</a>
<ul>
<li><a href="#wmpcheck" title="Zkontrolování zásuvného modulu Window Media Player">Kontrola zásuvného modulu Windows Media Player</a></li>
<li><a href="#wmprestore" title="Obnovení zásuvného modulu WMP">Obnovení zásuvného modulu Windows Media Player</a></li>
<li><a href="#wmptrouble" title="Nastavení a&nbsp;řešení problémů se zásuvným modulem WMP">Nastavení a&nbsp;řešení problémů se zásuvným modulem Windows Media Player</a></li>
</ul></li>
<li><a href="#activex" title="Zásuvný modul ActiveX">Zásuvný modul ActiveX</a>

<ul>
<li><a href="#actxbefore" title="Než začnete">Než začnete</a></li>
<li><a href="#actxinstall" title="Instalace zásuvného modulu ActiveX">Instalace zásuvného modulu ActiveX</a></li>
<li><a href="#actxcheck" title="Kontrola instalace zásuvného modulu ActiveX">Kontrola zásuvného modulu ActiveX</a></li>
<li><a href="#actxuninst" title="Odinstalování zásuvného modulu ActiveX">Odinstalování zásuvného modulu ActiveX</a></li>
</ul></li>
<li><a href="#poznamky" title="Poznámky">Poznámky</a></li>
<li><a href="#problemy" title="Řešení problémů">Řešení problémů</a></li>
<li><a href="#zdroje" title="Použité zdroje">Použité zdroje</a></li>
</ul>

<h2 id="wmpuvod">Úvod</h2>

<p>Velmi často se můžete setkat s&nbsp;internetovými stránkami, které používají 
Windows Media Player (<abbr title="Windows Media Player">WMP</abbr>) k&nbsp;přehrávání 
hudby či videa přímo na stránce. Zásuvný modul <abbr 
 title="Windows Media Player">WMP</abbr> by měl být obsažen již 
v&nbsp;samotném přehrávači <abbr title="Windows Media Player">WMP</abbr>, bohužel 
tomu tak není vždy. Navíc mnoho stránek používá ke vkládání médií technologii 
ActiveX, což má za následek to, že jsou přístupná pouze v&nbsp;Internet Exploreru (IE).
V&nbsp;tomto článku si ukážeme řešení obou problémů.</p>

<p>Nutno podotknout, že <abbr title="Windows Media Player">WMP</abbr> nedokáže 
přehrát všechna média, která se na internetu používají, některá vyžadují zásuvný 
modul <a href="http://www.apple.com/quicktime/download/" 
 hreflang="en">Quicktime</a> nebo <a href="http://www.real.com/" 
 hreflang="en">Real</a>.</p>

<h2 id="wmpplugin">Zásuvný modul Windows Media Player</h2>
<p><abbr title="Windows Media Player">WMP</abbr> obsahuje <a 
 href="/doplnky/zasuvne-moduly/" title="CZilla: Zásuvné moduly (pluginy)">zásuvný 
modul</a> (anglicky plug-in), který umožňuje zobrazit vložené objekty Windows 
Media i&nbsp;v&nbsp;jiných prohlížečích než pouze v&nbsp;<abbr 
 title="Internet Explorer">IE</abbr>. Právě tento zásuvný modul Firefox využívá.</p>

<p>Přesto se někdy stává, že zásuvný modul nepracuje správně nebo chybí úplně. 
Tato sekce článku vám poradí, jak zkontrolovat funkčnost zásuvného modulu, jeho 
obnovení (pokud chybí) a&nbsp;nastavení, nepracuje-li správně.</p>

<p><strong>Důležité: </strong> Microsoft 14. února 2006 upozornil na bezpečnostní 
chybu zásuvného modulu <abbr title="Windows Media Player">WMP</abbr> vyskytující 
se v&nbsp;operačních systémech Windows 2000 a&nbsp;XP. Důsledkem této chyby může být vzdálené 
spuštění škodlivého kódu v&nbsp;případě, že uživatel používá jiný prohlížeč než 
Microsoft Internet Explorer. Uživatelům, kterých se to týká, je doporučeno 
nainstalovat bezpečnostní záplatu "Security Update for Windows Media Player 
Plug-in (KB911564)", která je dostupná prostřednictvím <a 
 href="http://windowsupdate.microsoft.com" hreflang="en">Windows Update</a>. Tato 
záplata také aktualizuje soubor zásuvného modulu <abbr 
 title="Windows Media Player">WMP</abbr> "npdsplay.dll" na verzi 3.0.2.629.
Více informací naleznete v&nbsp;<a 
 href="http://www.microsoft.com/technet/security/Bulletin/MS06-006.mspx" hreflang="en">Microsoft Security Bulletinu</a>.</p>

<h3 id="wmpcheck">Kontrola zásuvného modulu Windows Media Player</h3>
<p>Pro vyzkoušení funkčnosti musíte mít nainstalován Windows Media Player 9 
nebo vyšší. Pokud nemáte, instalace je možná prostřednictvím <a 
 href="http://windowsupdate.microsoft.com" title="Microsoft Windows Update">Windows 
Update</a> nebo z&nbsp;<a 
 href="http://www.microsoft.com/windows/windowsmedia/download/default.asp" title="Domovská stránka Windows Media Playeru">domovské 
stránky Windows Media Playeru</a>.</p>

<p>Funkčnost zásuvného modulu <abbr title="Windows Media Player">WMP</abbr> si 
můžete vyzkoušet na následujících odkazech:</p>

<ul>
	<li><a href="http://members.aol.com/jrzycrim01/mozilla/wmp/vidtest-HS.html" hreflang="en">Otestování 
Windows Media Playeru</a> (rychlé připojení)</li>
	<li><a href="http://members.aol.com/jrzycrim01/mozilla/wmp/vidtest-LS.html" hreflang="en">Otestování 
Windows Media Playeru</a> (pomalé připojení)</li>
</ul>

<p>Pokud se vám na výše zmíněných odkazech přehraje video, zásuvný modul 
<abbr title="Windows Media Player">WMP</abbr> je nainstalován. Pokud ne, je 
nutné zjistit, jestli byl Firefox schopen zásuvný modul nalézt - zadejte do 
adresního řádku <span class="nabidka">about:plugins</span> namísto adresy webové 
stránky - zobrazí se seznam všech nainstalovaných zásuvných modulů:</p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/wmp-plugins.png" class="zoom"><img src="images/wmp-plugins-m.png" 
 title="Výpis about:plugins" alt="Výpis about:plugins" height="143" 
 width="200" /></a></div></div>
 
<p>Pokud vidíte všechny položky stejně jako na obrázku níže, 
<abbr title="Windows Media Player">WMP</abbr> pracuje správně.</p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
 href="images/wmp-wmpplug.png" class="zoom"><img src="images/wmp-wmpplug-m.png" 
 title="Položky WMP v&nbsp;about:plugins" alt="Položky WMP v&nbsp;about:plugins" 
 height="150" width="200" /></a></div></div>
 
<p><em>Pozn.:</em> Položka "Microsoft&reg; DRM" s&nbsp;názvem souboru npwmsdrm.dll může být 
pojmenována také "Microsoft Corp. DRM Netscape Plugin".</p>


<h3 id="wmprestore">Obnovení zásuvného modulu Windows Media Player</h3>
<p>Pokud jakákoli z&nbsp;výše uvedených položek chybí, zásuvný modul 
<abbr title="Windows Media Player">WMP</abbr> není nainstalován správně. Zobrazte 
si soubory v&nbsp;adresáři s&nbsp;programem Windows Media Player (obvykle <span 
 class="soubor">C:\Program Files\Windows Media Player</span>) a&nbsp;zkopírujte 
potřebné soubory (<span class="soubor">npdsplay.dll</span>, 
<span class="soubor">npdrmv2.dll</span> a&nbsp;<span class="soubor">npwmsdrm.dll</span>) 
do adresáře se zásuvnými moduly Firefoxu (obvykle <span 
class="soubor">C:\Program Files\Mozilla Firefox\Plugins</span>).</p>

<p>Pokud některé položky stále chybí, ukončete Firefox a&nbsp;nainstalujte <a 
 href="http://www.microsoft.com/windows/windowsmedia/download/plugin.aspx" 
 title="Windows Media Player Plug-in for Netscape Navigator" hreflang="en">Windows 
 Media Player Plug-in for Netscape Navigator</a>, který některé z&nbsp;potřebných 
 souborů obsahuje.</p>

<p>Po instalaci zkontrolujte jsou-li všechny soubory ve výše uvedeném seznamu. 
Pokud se ani tímto postupem nepodařilo chybějící přidat, odinstalujte Windows 
Media Player, stáhněte a&nbsp;vyzkoušejte některý z&nbsp;těchto offline 
instalátorů:</p>

<ul>
	<li><a href="http://www.microsoft.com/downloads/details.aspx?FamilyID=b446ae53-3759-40cf-80d5-cde4bbe07999&amp;displaylang=en" hreflang="en">Windows Media Player 10 for Windows XP Offline Installer</a></li>
	<li><a href="http://www.oldversion.com/download.php?idlong=dc1b6ae1df73e676bbdb85c276488080" hreflang="en">Windows Media Player 9 for Windows XP Offline Installer (odkaz na www.oldversion.com)</a></li>
	<li><a href="http://www.microsoft.com/downloads/details.aspx?FamilyID=e0175119-9a5b-44c3-b1de-9b2a9aa6cff6&amp;displaylang=en" hreflang="en">Windows Media Player 9 for Windows 98SE/ME/2000 Offline Installer</a></li>
</ul>

<p>Microsoft již nenabízí Windows Media Player&nbsp;9 pro Windows XP ke stažení 
ze sekce Downloads na svých stránkách &ndash; odkaz na tuto verzi tedy vede na 
stránku mimo Microsoft &ndash; <a href="http://www.oldversion.com" 
 hreflang="en">Oldversion.com</a>. Jestliže nefunguje ani toto řešení, 
stáhněte si potřebné soubory z&nbsp;<a href="http://www.dlldump.com" 
 hreflang="en">dlldump.com</a> a&nbsp;uložte je do adresáře zásuvných modulů 
 Firefoxu (obvykle <span class="soubor">C:\Program Files\Mozilla Firefox\plugins</span>):</p>

<ul>
	<li><a href="http://www.dlldump.com/download-dll-files_new.php/dllfiles/N/npdsplay.dll/3.0.2.628/download.html" hreflang="en">npdsplay.dll</a></li>
	<li><a href="http://www.dlldump.com/download-dll-files_new.php/dllfiles/N/npwmsdrm.dll/9.00.00.3250/download.html" hreflang="en">npwmsdrm.dll</a></li>
	<li><a href="http://www.dlldump.com/download-dll-files_new.php/dllfiles/N/npdrmv2.dll/9.00.00.32508/download.html" hreflang="en">npdrmv2.dll</a></li>
</ul>

<h3 id="wmptrouble">Nastavení a&nbsp;řešení problémů se zásuvným modulem Windows Media Player</h3>

<p>Známé problémy se zásuvným modulem 
<abbr title="Windows Media Player">WMP</abbr> a&nbsp;jejich řešení:</p>

	<ul>
		<li>Pokud není při přehrávání videa vidět obraz nebo zmizí při klepnutí na 
		ovládací prvek, je třeba změnit nastavení zásuvného modulu:
			<ul>
				<li>Je-li přehrávač spuštěn, klepněte na něj pravým tlačítkem myši 
				a&nbsp;zvolte položku <span class="nabidka">Možnosti</span>.</li>
				<li>V levé dolní části okna je volba <span class="nabidka">Akcelerace 
				videa</span>. Tažením umístěte jezdec posuvníku z&nbsp;<span 
				class="nabidka">Úplná</span> na polovinu rozsahu.</li>
		</ul>
	</li>
	<li>Pro uživatele Windows 2000: Stává-li se vám, že Firefox spadne při 
	ukončení, byl-li použit zásuvný modul 
	<abbr title="Windows Media Player">WMP</abbr>, zkuste nainstalovat nejnovější 
	verzi <a href="http://sun.java.com/" hreflang="en">Javy</a>:
		<ul>
			<li>Poklepejte na ikonu <span class="nabidka">Tento počítač</span> na
			pracovní ploše a&nbsp;vlevo poklepejte na <span class="nabidka">Ovládací 
			panely</span>.</li>
			<li>Poklepejte na ikonu Javy (Java plug-in) &ndash; zobrazí se ovládací 
			panel zásuvného modulu Java (Java Plug-in Control Panel).</li>
			<li>Klepněte na kartu <span class="nabidka">Update</span> a&nbsp;pak na 
			tlačítko <span class="nabidka">Update Now</span></li>
		</ul>
	</li>
	<li>Pokud ovládací prvky přehrávače vypadají stejně jako ze starší verze 
	Windows Media Playeru:
		<ul>
			<li>Klepněte pravým tlačítkem myši na následující odkaz 
			a&nbsp;prostřednictvím volby <span class="nabidka">Uložit odkaz 
			jako</span> jej uložte na plochu tento <a 
			 href="http://plugindoc.mozdev.org/resources/wmp9.reg">soubor registru</a>.</li>
			<li>Jakmile je stahování dokončeno, poklepejte na stažený soubor. Dialogové 
			okno se zeptá, jestli chcete přidat klíč do registru&nbsp;&ndash; zvolte <span 
			class="nabidka">Ano</span>.</li>
			<li>Tímto se vyřeší problém, že se Firefox snaží použít starší verzi 
			zásuvného modulu <abbr title="Windows Media Player">WMP</abbr> namísto 
			aktuální verze.</li>
		</ul>
	</li>
	<li>
		<p>Zobrazí se chybové hlášení 'Can not create DirectShow Player'. Nejdříve 
		vyzkoušejte tato dvě řešení:</p>
		<dl>
			<dt>První řešení</dt>
			<dd><ol>
				<li>Klepněte na tlačítko <span class="nabidka">Start</span> 
				a&nbsp;zvolte <span class="nabidka">Spustit</span></li>
				<li>Do textového pole napište <span class="soubor">regsvr32 jscript.dll</span> 
				a&nbsp;klepněte na tlačítko <span class="nabidka">OK</span></li>
				<li>Klepněte na tlačítko <span class="nabidka">OK</span></li>
				<li>Klepněte na tlačítko <span class="nabidka">Start</span> 
				a&nbsp;zvolte <span class="nabidka">Spustit</span></li>
				<li>Do textového pole napište <span class="soubor">regsvr32 vbscript.dll</span> 
				a&nbsp;klepněte na tlačítko <span class="nabidka">OK</span></li>
				<li>Klepněte na tlačítko <span class="nabidka">OK</span></li>
			</ol>
			<p>Pokud se ani jeden ze souborů nezaregistruje podle očekávání nebo se 
			zobrazí chybové hlášení, systémový soubor může být poškozen nebo chybět. 
			Pro obnovení souboru proveďte následující kroky (platí pro Windows XP) 
			a&nbsp;poté výše zmíněný postup opakujte:</p>
			<ol>
				<li>Klepněte na tlačítko <span class="nabidka">Start</span> 
				a&nbsp;zvolte <span class="nabidka">Spustit</span></li>
				<li>Do textového pole napište <span class="soubor">msconfig</span> 
				a&nbsp;klepněte na tlačítko <span class="nabidka">OK</span></li>
				<li>Vpravo dole klepněte na tlačítko 
				<span class="nabidka">Rozbalit soubor</span></li>
				<li>Do textového pole <span class="nabidka">Obnovit soubor</span> 
				napište jméno souboru, který chcete obnovit.</li>
				<li>Do textového pole <span class="nabidka">Zdroj obnovení</span> 
				napište cestu k&nbsp;souboru .cab systému Windows XP, ze kterého chcete 
				provést obnovení, nebo zvolte <span class="nabidka">Procházet</span> 
				a&nbsp;soubor vyberte. (Soubory .cab jsou uloženy v&nbsp;adresáři 
				<span class="soubor">I386</span> na CD Windows XP.)</li>
				<li>Do textového pole <span class="nabidka">Uložit soubor do</span> 
				napište cestu k&nbsp;adresáři, kam chcete obnovený soubor uložit, 
				nebo zvolte <span class="nabidka">Procházet</span> a&nbsp;adresář 
				vyberte.</li>
				<li>Klepněte na tlačítko <span class="nabidka">Rozbalit</span></li>
				<li>V hlavním okně Nástroje pro konfiguraci systému klepněte na tlačítko 
				<span class="nabidka">OK</span>. Jste-li vyzváni k&nbsp;restartování 
				počítače, klepněte na tlačítko <span class="nabidka">Restartovat</span></li>
		</ol></dd>
		<dt>Druhé řešení</dt>
		<dd>
			<p><strong>Upozornění:</strong> Při nesprávném použití Editoru registru 
			může dojít k&nbsp;problémům, které mohou vyžadovat přeinstalování 
			operačního systému. Veškeré úpravy provedené v&nbsp;registru děláte na 
			své vlastní riziko.</p>
		
			<ol>
				<li>Klepněte na tlačítko <span class="nabidka">Start</span> 
				a&nbsp;zvolte <span class="nabidka">Spustit</span></li>
				<li>Do textového pole napište <span class="soubor">regedit</span> 
				a&nbsp;klepněte na tlačítko <span class="nabidka">OK</span></li>
				<li>Vyhledejte klíč <span class="soubor">HKEY_LOCAL_MACHINE\SOFTWARE\CLASSES\CLSID\{f414c260-6ac0-11cf-b6d1-00aa00bbbb58}</span> 
				&nbsp; výchozí hodnota by měla obsahovat <span 
				 class="soubor">C:\WINDOWS\SYSTEM32\JSCRIPT.DLL</span>. Pokud ne, 
				 poklepejte na <span class="nabidka">Výchozí</span>, do pole 
				 <span class="nabidka">Údaj hodnoty</span> napište <span 
				 class="soubor">C:\WINDOWS\SYSTEM32\JSCRIPT.DLL</span> 
				a&nbsp;klepněte na tlačítko <span class="nabidka">OK</span>.</li>
				<li>Klíč s&nbsp;názvem "ThreadingModel" by měl obsahovat hodnotu "Both". 
				Pokud tomu tak není, poklepejte na něj a&nbsp;do pole <span 
				class="nabidka">Údaj hodnoty</span> napište "Both".</li>
				<li>Vyhledejte následující klíč registru: <span class="soubor">HKEY_LOCAL_MACHINE\SOFTWARE\CLASSES\CLSID\{f414c261-6ac0-11cf-b6d1-00aa00bbbb558}\InprocServer32</span>.</li>
				<li>Pro editaci tohoto klíče opakujte kroky 3 a&nbsp;4, pak přejděte na krok 7</li>
				<li>Vyhledejte následující klíč registru: <span class="soubor">HKEY_LOCAL_MACHINE\SOFTWARE\CLASSES\CLSID\{f414c262-6ac0-11cf-b6d1-00aa00bbbb558}\InprocServer32</span></li>
				<li>Pro editaci tohoto klíče opakujte kroky 3 a&nbsp;4, pak přejděte na krok 9</li>
				<li>Ukončete Editor registru</li>
			</ol>
			
			<p>Pokud váš problém nevyřešil ani jeden z&nbsp;výše uvedených postupů, 
			zkuste <a href="#wmprestore">přeinstalovat <abbr 
			title="Windows Media Player">WMP</abbr></a> a&nbsp;nainstalovat 
			<a href="http://www.microsoft.com/windows/directx/default.aspx" 
			hreflang="en">nejnovější verzi DirectX</a>. Používáte-li <abbr 
			title="Windows Media Player">WMP</abbr> 10, můžete také vyzkoušet 
			nainstalovat zpět starší verzi <abbr title="Windows Media Player">WMP</abbr> 
			9.</p>
		</dd>
	</dl>

	</li>
	<li>Přehrávače, které se zobrazí na <a href="#wmpcheck">testovacích 
	stránkách</a> zásuvného modulu <abbr title="Windows Media Player">WMP</abbr>, 
	mají stavový řádek, který vás informuje o&nbsp;aktuální činnosti přehrávače. 
	Stavový řádek se ale nemusí zobrazovat na každé stránce. Je možné, že 
	pokud klepnete na tlačítko Přehrát v&nbsp;přehrávači, který nemá stavový 
	řádek, může se zdát, jako by přehrávač nic nedělal, ovšem většinou si ukládá 
	potřebnou část souboru do vyrovnávací paměti, aby mohl začít soubor přehrávat, 
	a&nbsp;pokud chvíli počkáte, přehrávání se spustí.</li>
	<li><p>Zobrazuje se chyba 'V modulu došlo k&nbsp;neočekávané chybě. Důrazně 
	se doporučuje provést restart navigátoru':</p>

		<ul>
			<li>Tuto chybu může způsobovat vypnutý JavaScript</li>
			<li>Zkontrolujte v&nbsp;nabídce <span class="nabidka">Nástroje > Možnosti > 
			Webové stránky > Povolit JavaScript</span> je-li JavaScript povolen.</li>
			<li>Používáte-li rozšíření, která umožňují zakázat JavaScript, raději je 
			zakažte (nebo povolte skripty pro požadovanou stránku). Takovým 
			rozšířením je například <a href="/doplnky/rozsireni/noscript">NoScript</a>.</li>
		</ul>
	</li>
	<li>
		<p>Pro uživatele Windows XP Home N nebo Windows XP Professional N:</p>
		<p>Následkem úředního rozhodnutí <abbr title="Evropská Unie">EU</abbr>
		Microsoft uvedl na trh tyto nové evropské verze Windows XP 
		Home/Professional, ty však již neobsahují Windows Media Player (ani jeho 
		zásuvný modul).</p>
		<p>Microsoft vydal aktualizaci, která rozšiřuje Windows XP N na 
		plnohodnotná Windows XP. Pro uživatele Windows XP Home/Pro N je tedy 
		nezbytné tuto <a href="http://www.microsoft.com/downloads/details.aspx?FamilyID=2ab49f45-0f03-4736-9b11-fe4b5b3cb712&amp;DisplayLang=en" hreflang="en">aktualizaci nainstalovat</a>, 
		aby mohli používat zásuvný modul používat.</p>

		<p>Upozornění: Tato operace nemůže být vrácena zpět. Po nainstalování 
		uvedené aktualizace je jedinou cestou, jak se vrátit zpět 
		k&nbsp;Windows XP N, nová instalace Windows.</p>
	</li>
	<li>
		<p>Přehrávač se zobrazí, ve stavovém řádku je uvedeno 'Připraven', 
		nezobrazuje se žádné chybové hlášení, ale po klepnutí na tlačítko 'Přehrát' 
		se nic nestane.</p>
		<p>Z neznámého důvodu musí mít <abbr title="Internet Explorer">IE</abbr> 
		přístup k&nbsp;internetu, aby byl zásuvný modul <abbr 
		title="Windows Media Player">WMP</abbr> funkční. Tento problém většinou 
		nastane, pokud <abbr title="Internet Explorer">IE</abbr> pracuje 
		v&nbsp;režimu offline. Spusťte <abbr title="Internet Explorer">IE</abbr> 
		a&nbsp;přesvědčte se, že položka <span class="nabidka">Pracovat 
		offline</span> v&nbsp;menu <span class="nabidka">Soubor</span> není 
		zaškrtnutá.</p>
		<p>Při spuštění vám <abbr title="Internet Explorer">IE</abbr> může 
		nabídnout, jestli se chcete připojit k&nbsp;internetu &ndash; klepněte na 
		<span class="nabidka">Ano</span>.</p>
	</li>
	<li>
		<p>Firefox při pokus o&nbsp;přehrání <abbr 
		 title="Windows Media Video">WMV</abbr> souborů spadne nebo zamrzne.</p>
		<p>Tento problém může způsobovat nainstalovaný VLC Media Player, který 
		obsahuje svůj vlastní zásuvný modul pro prohlížeče, který může způsobovat 
		konflikty se zásuvným modulem <abbr title="Windows Media Player">WMP</abbr>, 
		takže pro korektní přehrávání <abbr title="Windows Media Video">WMV</abbr> 
		souborů je nutné odstranit zásuvný modul VLC.</p>
	</li>
	<li>
    <p>Přehrávač se nezobrazí, ale zvuk hraje a&nbsp;všechny soubory jsou v&nbsp;seznamu 
    <span class="nabidka">about:plugins</span>:</p>
    <ul>
			<li>Ve Firefoxu 1.5 se vyskytuje problém s&nbsp;rozšířením Adblock (viz
			<a href="http://forums.mozillazine.org/viewtopic.php?t=340239" hreflang="en">diskusní 
			fórum</a>) &ndash; je-li v&nbsp;Adblocku nastavena volba <span 
			class="nabidka">Zobrazovat ouška</span> v&nbsp;nabídce <span 
			class="nabidka">Nastavení</span> (v anglické verzi se položka nazývá <span 
			class="nabidka">OBJ-TABS</span> a&nbsp;je v&nbsp;nabídce <span 
			class="nabidka">Adblock Options</span>), je zásuvný modul <abbr 
			title="Windows Media Player">WMP</abbr> blokován. Pokud je toto váš 
			případ, zmíněnou volbu deaktivujte. Jestliže to nepomůže, zkuste znovu 
			stáhnout soubory zásuvného modulu z&nbsp;<a href="http://www.dlldump.com" 
			hreflang="en">dlldump.com</a> (postup byl již popsán v&nbsp;<a 
			href="#wmprestore">předchozí části</a>) a&nbsp;umístěte je do adresáře 
			zásuvných modulů Firefoxu (obvykle <span 
			class="soubor">C:\Program Files\Mozilla Firefox\plugins</span>).</li>
			<li>Je také známo, že tento problém může způsobovat zásuvný modul VLC 
			Media Playeru &nbsp; zkuste zásuvný modul VLC odstranit.</li>
		</ul>
	</li>
</ul>

<h2 id="activex">Zásuvný modul ActiveX (Firefox 1.0 &ndash; 1.0.8, 1.5 &ndash; 1.5.0.4)</h2>
<p>Některá vložená nebo streamovaná média (jako např. na <a 
 href="http://launch.com" hreflang="en">launch.com</a>) používají k&nbsp;vložení
 Windows Media do stránky technologii ActiveX. ActiveX je technologie, kterou 
 používá Internet Explorer namísto systému zásuvných modulů se kterým přišel 
 Netscape. Zásuvné moduly jsou samostatnými "podprogramy", které běží 
 v&nbsp;rámci prohlížeče (díky tomu jsou jejich možnosti omezené prohlížečem). 
 ActiveX jsou programem Windows a&nbsp;nikde není vymezeno, co je pro ně 
 povoleno vykonat a&nbsp;co ne, což jim poskytuje velký potenciál moci nad vaším 
 systémem, zejména vezmeme-li v&nbsp;potaz fakt, že <abbr 
 title="Internet Explorer">IE</abbr> může ActiveX stáhnout a&nbsp;nainstalovat 
 automaticky.</p>

<p>Původním záměrem bylo vytvořit lepší podmínky pro stránky co se týče jejich 
obsahu, ale ActiveX představuje také poměrně velké bezpečnostní riziko&nbsp;&ndash; 
je možné jej zneužít k&nbsp;instalaci virů, adware, spyware apod. a&nbsp;je 
jedním z&nbsp;nejvíce zranitelných míst v&nbsp;<abbr 
title="Internet Explorer">IE</abbr>.</p>

<p>To je jeden z&nbsp;důvodů, proč Firefox nepodporuje ActiveX, ale existují zásuvné 
moduly, které ActiveX zprovozní i&nbsp;pod Firefoxem. Tato část článku vás 
provede jejich instalací a&nbsp;testováním. Bezpečnostní problémy jsou 
překlenuty díky tomu, že zásuvné moduly pro Firefox jsou přednastaveny tak, 
aby sloužily pouze ke spouštění ovládacích prvků Windows Media Playeru 
a&nbsp;jednoduše odmítnou požadavek na spuštění čehokoliv jiného&nbsp;&ndash; 
ať už dobrého či špatného.</p>

<p>Toto vám umožní prohlížení mnoha stránek, které používají ke vkládání médií 
pouze ActiveX.</p>

<p>Alternativou k&nbsp;zásuvnému modulu ActiveX je skript <a 
 href="http://homepage.ntlworld.com/vectorspace/greasemonkey/#mimic" 
 hreflang="en">IE Media Mimic</a> do rozšíření <a 
 href="/doplnky/rozsireni/greasemonkey/">Greasemonkey</a>. Podpora médií 
vložených pomocí ActiveX však není úplná, protože skript funguje tak, že 
převádí objekt ActiveX na objekt WMP. V&nbsp;současné době jej autor skriptu IE 
Media Mimic nepovažuje za dostatečně přívětivý pro běžné uživatele, proto si 
raději důkladně pročtěte informace na domovské stránce skriptu, než se 
rozhodnete jej používat.</p>

<h3 id="actxbefore">Než začnete</h3>

<p><strong>Důležité:</strong> Pokud používáte rozšíření Adblock, nejdříve se 
ujistěte v&nbsp;jeho nastavení, že je položka <span 
 class="nabidka">Zobrazovat ouška</span> v&nbsp;nabídce <span 
 class="nabidka">Nastavení</span> vypnutá (v anglické verzi se položka nazývá 
 <span class="nabidka">OBJ-TABS</span> a&nbsp;je v&nbsp;nabídce <span 
 class="nabidka">Adblock Options</span>). v&nbsp;opačném případě je totiž ActiveX 
 umožněn přístup k&nbsp;libovolnému prvku systému, viz <a 
 href="#poznamky">poznámka č. 4</a>.</p>
 
<p>Před instalací zásuvného modulu ActiveX si prosím přečtěte následující:</p>

<ul>
	<li>Uvedený postup je použitelný pro oficiální verze Firefoxu 1.0 až 1.0.8 a&nbsp;1.5 
	až 1.5.0.4 pro Windows.</li>
	<li>Neexistuje zásuvný modul ActiveX pro Firefox 1.0.5, nicméně zásuvný modul 
	pro Firefox 1.0.4 se v&nbsp;této verzi zdá být funkční.</li>
  <li>Neexistuje zásuvný modul ActiveX pro Firefox 1.0.8, nicméně zásuvný modul 
  pro Firefox 1.0.7 se v&nbsp;této verzi zdá být funkční.</li>
  <li>Neexistuje zásuvný modul ActiveX pro Firefox 1.5.0.1 až 1.5.0.4, nicméně 
  zásuvný modul pro Firefox 1.5 se v&nbsp;této verzi zdá být funkční.</li>
	<li>Zásuvný modul ActiveX není kompatibilní se sestaveními Moox. Kompatibilita 
	s ostatními sestaveními třetích stran není známa.</li>
	<li>Zásuvný modul ActiveX pro Firefox 1.5 je označen jako testovací verze - tzn. že se mohou vyskytnout určité problémy.</li>
	<li>Většina metod aktualizace Firefoxu na novou verzi neodstraňuje zásuvný modul ActiveX a&nbsp;nelze zaručit, že daná verze zásuvného modulu bude funkční s&nbsp;novou verzí Firefoxu. Doporučujeme odinstalovat zásuvný modul ActiveX před aktualizací Firefoxu. Pokud máte nainstalovanou špatnou verzi zásuvného modulu ActiveX, může se stát, že nebudou fungovat některé další zásuvné moduly (nejčastěji bývá problém s&nbsp;Flashem).</li>
</ul>

<h3 id="actxinstall">Instalace zásuvného modulu ActiveX</h3>
<ul>
	<li>Pro správnou funkčnost zásuvného modulu ActiveX musí být nainstalován také 
	zásuvný modul Windows Media Player. Než budete pokračovat, ujistěte se, že je 
	nainstalován &ndash; viz <a href="#wmpcheck" title="Zkontrolování zásuvného 
	modulu Window Media Player">Kontrola zásuvného modulu Windows Media Player</a>.</li>

	<li><p>Podle verze Firefoxu, kterou používáte, klepněte pravým tlačítkem myši na 
	požadovaný odkaz a&nbsp;uložte si jej na disk:</p>
		<ul>
			<li><a href="http://www.iol.ie/~locka/mozilla/mozactivex-ff-10.xpi">Firefox 
			1.0, 1.0.1 a&nbsp;1.0.2</a></li>
			<li><a href="http://www.iol.ie/~locka/mozilla/mozactivex-ff-103-2.xpi">Firefox 
			1.0.3</a></li>
			<li><a href="http://www.iol.ie/~locka/mozilla/mozactivex-ff-104.xpi">Firefox 
			1.0.4, 1.0.5</a></li>
			<li><a href="http://www.iol.ie/~locka/mozilla/mozactivex-ff-106.xpi">Firefox 
			1.0.6</a></li>
			<li><a href="http://www.iol.ie/~locka/mozilla/mozactivex-ff-107.xpi">Firefox 
			1.0.7, 1.0.8</a></li>
			<li><a href="http://www.iol.ie/~locka/mozilla/mozactivex-ff-15.xpi">Firefox 
			1.5 až 1.5.0.4</a> (modul zatím pouze v&nbsp;testovací verzi)</li>
		</ul>
		<p>Toto jsou zásuvné moduly pro Firefox od Adama Locka. Nejsou známy žádné 
		verze zásuvných modulů, které by fungovaly v&nbsp;nočních sestaveních 
		Firefoxu.</p>
	</li>

	<li>Spusťte Firefox a&nbsp;pomocí drag&amp;drop přetáhněte stažený <span 
	 class="soubor">.xpi</span> soubor do okna Firefoxu (viz také <a 
 		href="http://www.czilla.cz/podpora/firefox/instalace-rozsireni.html#lokalne">článek 
 		o&nbsp;instalaci rozšíření</a>).</li>

	<li>Během instalace se zásuvný modul objeví v&nbsp;okně Správce rozšíření, po 
		chvíli však zmizí, protože i&nbsp;když se zásuvný modul instaluje stejným 
		způsobem, o&nbsp;rozšíření se nejedná.</li>

	<li>Jakmile je instalace dokončena, restartujte Firefox.</li>
</ul>

<h3 id="actxcheck">Kontrola zásuvného modulu ActiveX</h3>
<p>Funkčnost zásuvného modulu ActiveX můžete vyzkoušet na této stránce: <a 
 href="http://members.aol.com/jrzycrim01/mozilla/wmp/wmpaxtest.html">ActiveX 
Test&nbsp;&ndash; Windows Media Player</a>.</p>

<p>Pokud máte se zobrazením výše uvedené stránky problémy, zadejte do adresního 
řádku <span class="nabidka">about:plugins</span>. Pokud je v&nbsp;seznamu 
následující položka, zásuvný modul ActiveX je nainstalován správně:</p>

<div class="img-center"><div class="img-c" style="width:200px"><a 
href="images/wmp-mozax.png" class="zoom"><img src="images/wmp-mozax-m.png" 
title="Výpis about:plugins" alt="Položka ActiveX v&nbsp;seznamu about:plugins" 
height="38" width="200" /></a></div></div>

<p>Pokud v&nbsp;seznamu položka není, zkuste zásuvný modul nainstalovat znovu.</p>

<h3>Přehrávání vkládaných médií stále nefunguje</h3>

<p>Pokud jste nezaznamenali žádné problémy na výše uvedené testovací stránce, 
zásuvný modul ActiveX je funkční. Zkuste tedy následující:</p>

<ul>
	<li>Ujistěte se, že média nevyžadují jiný zásuvný modul (např. QuickTime nebo Real).</li>
	<li>Zkuste "oklamat" stránku&nbsp;&ndash; nainstalujte si rozšíření <a 
	 href="http://www.czilla.cz/doplnky/rozsireni/user-agent-switcher">User Agent Switcher</a> 
	 a&nbsp;změňte (dočasně) identifikaci prohlížeče na Internet Explorer.</li>
	<li>Mnoho stránek používá ke vkládání médií i&nbsp;jiné techniky než ActiveX, 
	které fungují pouze v&nbsp;Internet Exploreru. Je-li na stránce použit kód, 
	který je napsán pouze pro <abbr title="Internet Explorer">IE</abbr>, Firefox 
	pak nebude schopen média přehrát ani s&nbsp;nainstalovaným zásuvným modulem 
	ActiveX.</li>
</ul>

<h3 id="actxuninst">Odinstalování zásuvného modulu ActiveX</h3>
<p>Přejete-li si odinstalovat zásuvný modul ActiveX, stačí se držet tohoto 
postupu:</p>

<ul>
	<li>Ukončete všechny běžící instance Firefoxu.</li>
	<li>Najděte adresář, kde je nainstalován Firefox&nbsp;&ndash; ve Windows je výchozí 
	umístění <span class="soubor">C:\Program Files\Mozilla Firefox</span>.</li>
	<li>V adresáři Plugins smažte soubor <span class="soubor">npmozax.dll</span>.</li>
	<li>V adresáři Components smažte soubory <span class="soubor">nsIMozAxPlugin.xpt</span> 
	a&nbsp;<span class="soubor">nsAxSecurityPolicy.js</span>.</li>
	<li>V adresáři Defaults najděte podadresář <span class="soubor">Pref</span> a&nbsp;v něm smažte soubor 
	<span class="soubor">activex.js</span>.</li>
</ul>

<h2 id="poznamky">Poznámky</h2>
<ol>
	<li>S&nbsp;určitými verzemi zásuvného modulu ActiveX se někdy může stát, že se 
	někdy není funkční zásuvný modul Flash pokud nebyl dříve načten. Obejít se to 
	dá tím, že hned po spuštění Firefoxu zadáte do adresního řádku <span 
	 class="nabidka">about:plugins</span>, čímž se načtou všechny zásuvné moduly 
	 &ndash; za těchto podmínek pak vše funguje bez problémů.</li>
	<li>Uvedené postupy instalace ActiveX byly testovány na mnoha stránkách bez 
	jakýchkoliv problémů. Nicméně nelze zaručit, že díky tomuto zásuvnému modulu 
	bude Firefox schopen zobrazit všechna vkládaná média, protože některé stránky 
	používají ke vkládání médií techniky, které jsou funkční výhradně pouze pro 
	Internet Explorer.</li>
	<li>Bylo testováno i&nbsp;Yahoo/Launch Radio, které však ve Firefoxu bohužel 
	není funkční.</li>
	<li>Z&nbsp;nějakého důvodu dochází ke konfliktům zásuvného modulu ActiveX 
	a&nbsp;volbou <span class="nabidka">Zobrazovat ouška</span> v&nbsp;rozšíření 
	<a href="/doplnky/rozsireni/adblock/">Adblock</a> (<span class="nabidka">OBJ-TABS</span> v&nbsp;anglické verzi). Soubor 
	<span class="soubor">activex.js</span>, který se nainstaluje spolu se ActiveX, 
	vymezuje prvky, ke kterým má zásuvný modul přístup. Pokud je výše zmíněná 
	volba v&nbsp;Adblocku zapnuta, soubor <span class="soubor">activex.js</span> 
	je ignorován a&nbsp;zásuvný modul má přístup ke všem prvkům systému.</li>
	<li><abbr title="Internet Explorer">IE</abbr> se chová tak, že pokud chcete 
	zobrazit vkládaný soubor, spustí se Windows Media Player a&nbsp;začne daný 
	soubor rovnou přehrávat bez nutnosti předchozího stažení na disk. I&nbsp;toho 
	je možné ve Firefoxu docílit &ndash; pomocí rozšíření <a 
	 href="http://www.czilla.cz/doplnky/rozsireni/downloadwith">DownloadWith</a> 
	 nebo <a href="http://www.czilla.cz/doplnky/rozsireni/launchy">Launchy</a>.</li>
	<li>Pokud nemůžete nalézt některé z&nbsp;potřebných souborů ve vašem počítači, 
	ujistěte se, že máte povoleno zobrazení skrytých souborů a&nbsp;složek.</li>
	<li>Pokud máte problémy s&nbsp;přehráváním médií na určitých stránkách, zkuste 
	vymazat všechny cookies uložených danou stránkou a&nbsp;pokus opakujte. Také 
	se ujistěte, že cookies nejsou pro danou stránku blokovány (myslete i&nbsp;na 
	rozšíření).</li>
</ol>
<h2 id="problemy">Řešení problémů</h2>

<p>Pokud vám přehrávání vkládaných médií stále nefunguje korektně, přesvědčte se, 
že jsou správně nainstalovány zásuvné moduly <a href="#wmpcheck">Windows Media 
Player</a> a&nbsp;<a href="#actxcheck">ActiveX</a>. Stejně tak se ujistěte, že 
daný problém nebyl popsán v&nbsp;sekci <a href="#wmptrouble">Nastavení a&nbsp;řešení 
problémů se zásuvným modulem Windows Media Player</a>.</p>

<p>Jestliže se vám ani s&nbsp;pomocí tohoto článku nepovedlo zprovoznit spouštení 
vkládaných médií ve Firefoxu, obraťte se na <a 
 href="http://forum.czilla.cz/viewforum.php?f=19" title="CZilla fórum: Firefox - Dotazy uživatelů">fórum 
 na podporu uživatelů</a>.</p>

<h2 id="zdroje">Použité zdroje</h2>
<ul>
	<li><a href="http://www.czilla.cz/doplnky/zasuvne-moduly">CZilla: Zásuvné moduly (pluginy)</a></li>
	<li><a href="http://support.microsoft.com/?kbid=831430" hreflang="en">Microsoft.com: Several Dialog Boxes Are Blank</a></li>
	<li><a href="http://plugindoc.mozdev.org" hreflang="en">Mozdev.org: PluginDoc</a></li>
	<li><a href="http://forums.mozillazine.org/viewtopic.php?t=206216" hreflang="en">MozillaZine Forums: Complete Embedded &amp; Streaming Quicktime/Real/Windows Media Player Guide for Windows Users.</a></li>
	<li><a href="http://forums.mozillazine.org/viewtopic.php?t=206213" hreflang="en">MozillaZine Forums: Step-By-Step Guide: Embedded Windows Media in Firefox 1.0.x</a></li>
</ul>

<hr />
<p><small>21. 7. 2006, <a href="/czilla/prispevatele.html#kdo-je-PJ">Petr Jirsa</a></small></p>

<?php
	$page->includeFooter();
?>
