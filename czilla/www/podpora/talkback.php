<?php
	$rootPath = '../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Talkback - pomocník při pádu Mozilly';
	$page->headline = array('Talkback - pomocník při pádu Mozilly','Jak na pády aplikací Mozilla.org');

	$page->includeHeader();
?>

<div id="navigation">
	<a href="#tb-co-je">Co je Talkback?</a>
	&middot;
	<a href="#tb-instalace">Instalace</a>
	&middot;
	<a href="#tb-nastaveni">Nastavení</a>
	&middot;
	<a href="#tb-odeslani">Odeslání hlášení</a>
	&middot;
	<a href="#tb-id">TalkBack ID</a>
	&middot;
	<a href="#tb-hledame">Hledáme příčinu</a>
</div>


<h2 id="tb-co-je">Co je Talkback?</h2>

<p>Pokud používáte aplikace Mozilla.org déle, možná jste se setkali
s&nbsp;jejich pádem &ndash; celá aplikace zmizela, objevilo se hlášení, že
aplikace vykonala chybnou operaci a&nbsp;musela být ukončena. Dokážete
popsat vývojářům aplikace, co se vlastně stalo a&nbsp;kde v&nbsp;kódu mají
hledat problém? Nejspíš ne. Ale existuje nástroj, který to umí úplně
báječně.</p>

<p><strong>Talkback</strong> nebo též <em lang="en">Mozilla Quality Feedback
Agent</em> je malý program přidaný k&nbsp;aplikacím Mozilla.org. Má jediný
úkol &ndash; sbírat informace o&nbsp;dění v&nbsp;aplikaci v&nbsp;okamžiku
pádu. Neděste se, nejde o&nbsp;žádný <span lang="en">spyware</span>,
neshromažďuje žádné citlivé informace. Sebrané informace pomáhají vývojářům
aplikací Mozilla.org rychle najít příčinu pádu a&nbsp;opravit ji. Odeslání
informací o&nbsp;pádu je jednou z&nbsp;mnoha cest, jak se i&nbsp;vy můžete
podílet na zlepšování kvality programů, které sami používáte.</p>


<h2 id="tb-instalace">Instalace</h2>

<p>Talkback je součastí všech hlavních programů, které dnes Mozilla.org
nabízí, naleznete jej tedy
v&nbsp;<a href="/produkty/suite/">Mozilla Suite</a>,
<a href="/produkty/firefox/">Firefoxu</a>
a&nbsp;<a href="/produkty/thunderbird/">Thunderbirdu</a>
pro Windows, GNU/Linux i&nbsp;Mac OS&nbsp;X. Pro potřeby tohoto článku jsme
zvolili Talkback u&nbsp;Firefoxu na Windows.</p>

<p>Chceme-li ve Firefoxu používat Talkback, musíme již při instalaci zvolit
<em>Vlastní</em> instalaci:</p>

<div class="img-center"><div class="img-c" style="width:352px">
	<a href="./images/tb-01-installer-1.png"
		title="Klepněte pro plnou velikost..."
		class="zoom"><img
		src="./images/tb-01-installer-1-m.png"
		style="width:352px;height:275px"
		alt="Výběr mezi Standardní a Vlastní instalací" /></a>
</div></div>

<p><em>Vlastní</em> instalace se od <em>Standardní</em> příliš neliší.
V&nbsp;následujícím kroku potvrďte složku pro instalaci, v&nbsp;kroku
<em>Výběr komponent</em> zaškrtnete položku <em>Agent pro oznamování
chyb</em>:</p>

<div class="img-center"><div class="img-c" style="width:352px">
	<a href="./images/tb-02-installer-2.png"
		title="Klepněte pro plnou velikost..."
		class="zoom"><img
		src="./images/tb-02-installer-2-m.png"
		style="width:352px;height:275px"
		alt="Volíme Agenta pro oznamování chyb" /></a>
</div></div>

<p>Zbylé kroky instalace potvrďte. Po skončení instalace máme nainstalovaný
Firefox i&nbsp;s&nbsp;Talkbackem.</p>


<h2 id="tb-nastaveni">Nastavení Talkbacku</h2>

<p>V&nbsp;okamžiku, kdy dojde k&nbsp;pádu aplikace Mozilla.org, objeví se
úvodní dialog Talkbacku. Při prvním pádu se v&nbsp;několika krátkých krocích
Talkback představí a&nbsp;zároveň budete mít možnost si jej nastavit.</p>

<div class="img-center"><div class="img-c" style="width:349px">
	<a href="./images/tb-03-talkback-1.png"
		title="Klepněte pro plnou velikost..."
		class="zoom"><img
		src="./images/tb-03-talkback-1-m.png"
		style="width:349px;height:294px"
		alt="Představení aplikace Talkback" /></a>
</div></div>

<p>První dialogové okno obsahuje jen představení Talkbacku a&nbsp;jelikož už víte,
k&nbsp;čemu Talkback slouží, zvolte tlačítko <em lang="en">Next</em>.</p>

<div class="img-center"><div class="img-c" style="width:349px">
	<a href="./images/tb-04-talkback-2.png"
		title="Klepněte pro plnou velikost..."
		class="zoom"><img
		src="./images/tb-04-talkback-2-m.png"
		style="width:349px;height:294px"
		alt="Ochrana soukromí" /></a>
</div></div>

<p>V&nbsp;druhém kroku se dozvíte o&nbsp;ochraně vašeho
soukromí: Talkback nesbírá bez vašeho vědomí e-mailové či jiné adresy, hesla
ani jiná data z&nbsp;profilů uživatelů. Všechny odeslané informace budou
použity pouze pro potřebu opravy chyb a&nbsp;zlepšení kvality aplikace,
rozhodně nebudou poskytnuty třetí straně. Pokračujte tlačítkem <em
lang="en">Next</em>.</p>

<div class="img-center"><div class="img-c" style="width:349px">
	<a href="./images/tb-05-talkback-3.png"
		title="Klepněte pro plnou velikost..."
		class="zoom"><img
		src="./images/tb-05-talkback-3-m.png"
		style="width:349px;height:294px"
		alt="Zapnutí či vypnutí aplikace Talkback" /></a>
</div></div>

<p>Ve třetím kroku máte možnost Talkback vypnout. Pokud si jej přejete
používat, nechte volbu <em lang="en">Turn Agent on</em> zaškrtnutou
a&nbsp;zvolte tlačítko <em lang="en">Finish</em>. Pokud máte přímé připojení
k&nbsp;Internetu bez proxy serveru, máte Talkback nastavený
a&nbsp;připravený hlásit problémy.</p>

<p>Jste-li k&nbsp;Internetu připojeni přes proxy, bude potřeba její adresu
v&nbsp;Talkbacku nastavit. Spusťte Talkback (v&nbsp;odstavci <a
href="#tb-id">Zjišťujeme Talkback incident ID</a> zjistíte jak)
a&nbsp;vyberte z&nbsp;nabídky <em lang="en">Setting</em> položku <em
lang="en">Options...</em></p>

<div class="img-center"><div class="img-c" style="width:274px">
	<a href="./images/tb-10-talkback-7.png"
		title="Klepněte pro plnou velikost..."
		class="zoom"><img
		src="./images/tb-10-talkback-7-m.png"
		style="width:274px;height:288px"
		alt="Nastavení proxy serveru pro aplikace Talkback" /></a>
</div></div>

<p>V&nbsp;otevřeném dialogu zvolte záložku <em lang="en">proxy Server</em>,
zaškrtněte typ své proxy (obvykle
<abbr title="HyperText Transfer Protocol" lang="en">HTTP</abbr>)
a&nbsp;vyplňte její
<abbr title="Internet Protocol" lang="en">IP</abbr>
adresu a&nbsp;port (oba údaje můžete zjistit z&nbsp;vašeho webového
prohlížeče nebo u&nbsp;administrátora). Po uložení tlačítkem <em>OK</em> je
Talkback správně nakonfigurován a&nbsp;může odeslat hlašení o&nbsp;pádu.</p>


<h2 id="tb-odeslani">Odeslání hlášení o&nbsp;pádu</h2>

<p>Po nastavení Talkbacku či při dalším pádu se objeví okno, které slouží
pro samotné hlášení pádu aplikace.</p>

<div class="img-center"><div class="img-c" style="width:348px">
	<a href="./images/tb-06-talkback-4.png"
		title="Klepněte pro plnou velikost..."
		class="zoom"><img
		src="./images/tb-06-talkback-4-m.png"
		style="width:348px;height:322px"
		alt="Formulář pro doplnění informací o pádu a pro odeslání" /></a>
</div></div>

<p>V&nbsp;prvém políčku můžete vyplnit svoji e-mailovou adresu, ale není
povinná. Pokud pád nastal při prohlížení webových stránek, vyplňte do
následujícího políčka
<abbr title="Uniform Resource Locator" lang="en">URL</abbr>
problematické stránky či alespoň adresu webu. V&nbsp;posledním, největším
poli anglicky popište, co jste dělali těsně před pádem. Neovládáte-li
angličtinu, můžete buď popis vynechat nebo napsat na začátku <em>czech:</em>
a&nbsp;popsat vše v&nbsp;češtině.</p>

<p>Zaškrtnutím volby <em lang="en">Automatically send incidents</em> můžete
nastavit Talkback na autopilota: bude hlášení odesílat sám, aniž by po vás
chtěl jakoukoliv akci. Doporučujeme ponechat volbu nezaškrtnutou, tj.
odesílat ručně.</p>

<p>Chcete-li mít jistotu o&nbsp;tom, jaké informace Talkback odesílá, můžete
si je pomocí tlačítka <em lang="en">Show Details</em> zobrazit.
Považujete-li některou z&nbsp;nich za důvěrnou (např. uživatelské jméno,
seznam běžících procesů, počet spuštění Firefoxu či jméno počítače), můžete
je z&nbsp;odesílaných informací vyřadit přepnutím zaškrtávátka. Zpět do
předchozího dialogu se vrátíte tlačítkem <em lang="en">Close</em>.</p>

<p>Nyní je vše připraveno pro odeslání: stiskněte tlačítko <em
lang="en">Send</em>. Talkback začne informace odesílat, stav odeslání vám
ukazuje v&nbsp;malém okénku:</p>

<div class="img-center"><div class="img-c" style="width:342px">
	<img src="./images/tb-07-talkback-5.png"
		style="width:342px;height:172px"
		alt="Průběh odesílání informací na server Talkbacku" />
</div></div>

<p>Pokud Talkback úspěšně odešle informace o&nbsp;vašem pádu, uloží se na
serveru Mozilla.org v&nbsp;Kalifornii k&nbsp;mnoha dalším. Hotovo, můžete
znovu spustit Firefox, Thunderbird či Mozilla Suite a&nbsp;vrátit ke své
práci nebo zábavě.</p>


<h2 id="tb-id">Zjišťujeme Talkback incident ID</h2>

<p>Jste-li zvídavá povaha, můžete se vypravit na dobrodružnou cestu za
hledáním příčiny vašeho pádu. K&nbsp;tomu budeme potřebovat zjistit
<strong>Talkback incident ID</strong>, identifikaci pádu vaší aplikace
přidělenou hlavním serverem Talkbacku. S&nbsp;požadavkem na Talkback incident ID
se také můžete setkat při nahlášení chyby pádu aplikace do <a
href="https://bugzilla.mozilla.org/"
	title="Bugzilla projektu Mozilla.org"
	hreflang="en">Bugzilly</a>.</p>

<p>V&nbsp;adresáři, do kterého jste Firefox nainstalovali, otevřete
podadresář <span class="soubor" lang="en">extensions\talkback@mozilla.org\components</span> 
a&nbsp;v&nbsp;něm spusťte program <span class="soubor">talkback.exe</span>. Otevře 
se vám následující okno Talkbacku:</p>

<div class="img-center"><div class="img-c" style="width:385px">
	<a href="./images/tb-08-talkback-6.png"
		title="Klepněte pro plnou velikost..."
		class="zoom"><img
		src="./images/tb-08-talkback-6-m.png"
		style="width:385px;height:137px"
		alt="Aplikace Talkback" /></a>
</div></div>

<p>Hlavní plocha aplikace obsahuje přehled všech pádů, které Talkback
zaznamenal, chronologicky řazený od nejnovějších po nejstarší incidenty.
V&nbsp;každém řádku naleznete nejprve <strong>stav odeslání</strong>
(informace o&nbsp;pádu ještě mohou čekat na odeslání), za ním následuje
<strong>incident ID</strong> (řetězec jako <em>TB15251987Q</em>), čas
zachycení pádu, typ pádu a&nbsp;<strong>komentář</strong>, který jste
k&nbsp;pádu sami připsali.</p>

<p>Klepněte myší na první řádek, který odpovídá poslednímu pádu Firefoxu,
a&nbsp;zkopírujte incident ID do schránky pomocí klávesové zkratky
<kbd>Ctrl</kbd>+<kbd>C</kbd>.</p>


<h2 id="tb-hledame">Hledáme příčinu</h2>

<p>Mozilla.org provozuje
<a href="http://talkback-public.mozilla.org/talkback/fastfind.jsp"
	hreflang="en">veřejný Talkback server</a>,
který vám umožní zobrazit informace o&nbsp;libovolném zaznamenaném pádu.
Protože jde ale o&nbsp;službu dostupnou komukoliv, nezobrazuje žádné
informace, které by bylo možné považovat za důvěrné.</p>

<div class="img-center"><div class="img-c" style="width:377px">
	<a href="./images/tb-09-tps-1.png"
		title="Klepněte pro plnou velikost..."
		class="zoom"><img
		src="./images/tb-09-tps-1-m.png"
		style="width:377px;height:214px"
		alt="Titulní stránka veřejného Talkback serveru" /></a>
</div></div>

<p>Na titulní straně serveru najdeme několik boxíků:</p>

<dl>
	<dt lang="en">FastFind</dt>
	<dd>Modrý formulář slouží k&nbsp;zobrazení informací o&nbsp;konkrétním
	pádu, zadává se do něj Talkback incident ID.</dd>

	<dt lang="en">QuickSearch</dt>
	<dd>Červený formulář slouží k&nbsp;opačnému postupu: na základě obecné
	charakteristiky umožňuje vyhledávat odpovídající skupiny zaznamenaných
	pádů.</dd>

	<dt lang="en">Talkback Reports</dt>
	<dd>Modrý boxík obsahuje odkazy na souhrnné statistiky pádů podle
	jednotlivých aplikací a&nbsp;dále podle verzí.</dd>
</dl>

<p>Protože chceme vědět více o&nbsp;našem pádu, zvolíme <em
lang="en">FastFind</em>, do jehož políčka vložíme incident ID
<strong>TB1944342K</strong> našeho pádu Firefoxu a&nbsp;formulář odešleme
klávesou <kbd>Enter</kbd> nebo tlačítkem <em lang="en">Go</em>.</p>

<p>Server Talkbacku najde informace o&nbsp;našem pádu a&nbsp;zobrazí je
v&nbsp;<a href="http://talkback-public.mozilla.org/talkback/fastfind.jsp?search=2&amp;type=iid&amp;id=TB1944342K#idtitle"
	title="Talkback Public Server: Detail incidentu TB1944342K"
	hreflang="en">přehledné tabulce</a>.
Věnovat se budeme především řádce se signaturou zásobníku (<span
lang="en">Stack Signature</span>), podle které vývojáři různé pády aplikací
rozlišují. Signatura odpovídá obvykle jménu zdrojového souboru a&nbsp;jménu
funkce, kde pád nastal.</p>

<p>V&nbsp;našem případě má signatura hodnotu
<strong>nsFrameManager::GetPropertyListFor</strong>. Hodnota signatury je
odkazem na všechna hlášení chyb v&nbsp;Bugzille, která mají v&nbsp;názvu či
v&nbsp;některém z&nbsp;komentářů uvedenou naši signaturu.
<a href="https://bugzilla.mozilla.org/"
	title="Bugzilla projektu Mozilla.org"
	hreflang="en">Bugzilla</a>
nám vrací seznam čtyř chyb, které by mohly s&nbsp;pádem souviset:</p>

<div class="tbl-1">
<table lang="en">
<thead>
<tr>
	<td>ID</td>
	<td title="Severity">Sev</td>
	<td title="Priority">Pri</td>
	<td title="Platform">Plt</td>
	<td>Assignee</td>
	<td>Status</td>
	<td>Resolution</td>
	<td>Summary</td>
</tr>
</thead>
<tbody>
<tr>
	<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=232356"
			title="Bugzilla: bug 232356 - entering parent.close in the console crashes mozilla [@ nsFrameManager::GetPropertyListFor ]"
			hreflang="en">232356</a></td>
	<td>cri</td>
	<td>--</td>
	<td>All</td>
	<td>general@dom.bugs</td>
	<td>NEW</td>
	<td></td>
	<td title="entering parent.close in the console crashes mozilla [@ nsFrameManager::GetPropertyListFor ]">entering parent.close in the console crashes mozilla [@ n...</td>
</tr>
<tr>
	<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=242213"
			title="Bugzilla: bug 242213 - Random crash that doesn't make much sense [@ nsFrameManager::GetPropertyListFor ]"
			hreflang="en">242213</a></td>
	<td>min</td>
	<td>--</td>
	<td>PC</td>
	<td>timeless@bemail.org</td>
	<td>RESO</td>
	<td>DUPL</td>
	<td title="Random crash that doesn't make much sense [@ nsFrameManager::GetPropertyListFor ]">Random crash that doesn't make much sense [@ nsFrameManage...</td>
</tr>
<tr>
	<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=244305"
			title="Bugzilla: bug 244305 - top.close() crashes JS console [@ nsFrameManager::GetPropertyListFor ]"
			hreflang="en">244305</a></td>
	<td>cri</td>
	<td>--</td>
	<td>PC</td>
	<td>nobody@mozilla.org</td>
	<td>NEW</td>
	<td></td>
	<td title="top.close() crashes JS console [@ nsFrameManager::GetPropertyListFor ]">top.close() crashes JS console [@ nsFrameManager::GetProp...</td>
</tr>
<tr>
	<td><a href="https://bugzilla.mozilla.org/show_bug.cgi?id=265790"
			title="Bugzilla: bug 265790 - &quot;Force links ... to open in a new tab&quot; can let a tab close the whole browser window - FF10PR1 [@ nsFrameManager::GetPropertyListFor ]"
			hreflang="en">265790</a></td>
	<td>cri</td>
	<td>--</td>
	<td>PC</td>
	<td>danm.moz@gmail.com</td>
	<td>NEW</td>
	<td></td>
	<td title="&quot;Force links ... to open in a new tab&quot; can let a tab close the whole browser window - FF10PR1 [@ nsFrameManager::GetPropertyListFor ]">"Force links ... to open in a&nbsp;new tab" can let a&nbsp;tab clos...</td>
</tr>
</tbody>
</table>
</div>

<p>Hned první z&nbsp;nalezených chyb má svůj popis velmi podobný situaci,
která způsobila náš pád. Po dalším prostudování detailů z&nbsp;jejího
chybového hlášení můžeme prohlásit, že pád Firefoxu způsobila
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=232356"
	title="Bugzilla: bug 232356 - entering parent.close in the console crashes mozilla [@ nsFrameManager::GetPropertyListFor ]"
	hreflang="en">chyba 232356</a>.
Zároveň víme, že není potřeba zadávat do Bugzilly vlastní hlášení o&nbsp;této
chybě, protože by šlo o&nbsp;duplicitní hlášení.</p>

<p>Máte-li pocit, že hledání v&nbsp;Bugzille či na veřejném serveru
Talkbacku je pro vás ještě tak trochu <em>vyšší dívčí</em> a&nbsp;zároveň
vás některý pád příliš trápí, obraťte se na nás
<a href="http://forum.czilla.cz/"
	title="Fórum podpory uživatelů aplikací Mozilla.org">v&nbsp;našem fóru</a>.
Nezapomeňte ale uvést Talkback incident ID.</p>

<hr />
<p><small>16. 11. 2004, CZilla Tým</small></p>

<?php
	$page->includeFooter();
?>
