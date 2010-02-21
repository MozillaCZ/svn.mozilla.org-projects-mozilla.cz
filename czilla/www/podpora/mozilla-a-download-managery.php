<?php
	require_once '../inc/page.php';
	$page->setTitle('Mozilla, Firefox a download managery');
	$page->setHeadline('Mozilla, Firefox a download managery','Nejčastěji používané download managery a jejich spolupráce s prohlížeči Mozilla.');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/">Mozilla.cz</a>.</div>

<p>V&nbsp;článku naleznete přehled nejčastěji používaných download managerů na
platformě Windows a&nbsp;jejich spolupráce
s&nbsp;<a href="/produkty/suite/"
	title="CZilla.cz: Mozilla Suite" hreflang="cs">Mozilla Suite</a>
a&nbsp;<a href="/produkty/firefox/"
	title="CZilla.cz: Mozilla Firefox" hreflang="cs">Mozilla Firefox</a>.</p>

<h2>Rychlý přehled</h2>

<div class="tbl-1">
<table border="1">
<thead>
	<tr>
		<td style="width: 200px"><strong>Jméno programu</strong></td>
		<td style="width: 100px"><strong>Licence</strong></td>
		<td style="width: 150px"><strong>Mozilla Suite</strong></td>

		<td style="width: 150px"><strong>Mozilla Firefox</strong></td>
	</tr>
</thead>
<tbody>
	<tr>
		<th><a href="#dm-dap">Download Accelerator Plus</a></th>
		<td>Shareware</td>
		<td>Ano</td>
		<td>Manuální zásah</td>
	</tr>
	<tr>
		<th><a href="#dm-de">Download Express</a></th>
		<td>Zdarma pro nekomerční užití</td>
		<td><a href="#dm-downloadwith">DownloadWith</a></td>
		<td><a href="#dm-downloadwith">DownloadWith</a></td>
	</tr>
	<tr>
		<th><a href="#dm-fg">FlashGet</a></th>
		<td>Shareware</td>
		<td>Ano</td>
		<td>Ano</td>
	</tr>
	<tr>
		<th><a href="#dm-fdm">Free Download Manager</a></th>
		<td>Freeware</td>
		<td>Manuální zásah</td>
		<td>Ano</td>
	</tr>
	 <tr>
		<th><a href="#dm-fd">Fresh Download</a></th>
		<td>Freeware</td>
		<td>Manuální zásah</td>
		<td>Ano</td>
	</tr>
	<tr>
		<th><a href="#dm-gr">GetRight</a></th>
		<td>Shareware</td>
		<td>Ano</td>
		<td>Ano</td>
	</tr>
	<tr>
		<th><a href="#dm-gf">Go!Zilla Free</a></th>
		<td>Shareware</td>
		<td>Ne</td>
		<td>Ne</td>
	</tr>
	<tr>
		<th><a href="#dm-idm">Internet Download Manager</a></th>
		<td>Shareware</td>
		<td>Ano</td>
		<td>Manuální zásah</td>
	</tr>
	<tr>
		<th><a href="#dm-lg">LeechGet</a></th>
		<td>Zdarma pro nekomerční užití</td>
		<td>Ano</td>
		<td>Ano</td>
	</tr>
	<tr>
		<th><a href="#dm-md">Mass Downloader</a></th>
		<td>Shareware</td>
		<td>Manuální zásah</td>
		<td>Ano</td>
	</tr>
	<tr>
		<th><a href="#dm-na">NetAnst</a></th>
		<td>Freeware</td>
		<td>Ne</td>
		<td>Ne</td>
	</tr>
	<tr>
		<th><a href="#dm-nt">Net Transport</a></th>
		<td>Shareware</td>
		<td><a href="#dm-downloadwith">DownloadWith</a></td>
		<td><a href="#dm-downloadwith">DownloadWith</a></td>
	</tr>
	<tr>
		<th><a href="#dm-netv">Net Vampire</a></th>
		<td>Shareware</td>
		<td>Ne</td>
		<td>Ne</td>
	</tr>
	<tr>
		<th><a href="#dm-rd">ReGet Deluxe</a></th>
		<td>Shareware</td>
		<td>Ano</td>
		<td>Ne</td>
	</tr>
	<tr>
		<th><a href="#dm-sdp">Star Downloader Pro</a></th>
		<td>Shareware</td>
		<td>Ano</td>
		<td>Manuální zásah</td>
	</tr>
	<tr>
		<th><a href="#dm-wg">WackGet</a></th>
		<td><abbr title="General Public Licence" lang="en">GPL</abbr></td>
		<td><a href="#dm-downloadwith">DownloadWith</a></td>
		<td><a href="#dm-downloadwith">DownloadWith</a></td>
	</tr>
	<tr>
		<th><a href="#dm-ww">WinWGet</a></th>
		<td><abbr title="General Public Licence" lang="en">GPL</abbr></td>
		<td><a href="#dm-downloadwith">DownloadWith</a></td>
		<td><a href="#dm-downloadwith">DownloadWith</a></td>
	</tr>
</tbody>
</table>
</div>


<h2>Jak download managery pracují</h2>

<p>Před samotným přehledem stojí jistě za zmínku, jak tyto programy vlastně
s&nbsp;Mozillou spolupracují. Existují v&nbsp;zásadě dva způsoby. Prvním
z&nbsp;nich je monitorování schránky. Tato metoda je založena na tom, že si
download manager hlídá obsah schránky a&nbsp;jakmile se v&nbsp;ní objeví
odkaz na známý typ souboru (např. koncovky zip, exe, mp3 apod.), nabídne
dialog ke stažení souboru. Na první pohled hezká metoda, ale ne vždy vám
nabídne soubor ke stažení, když to skutečně chcete.</p>

<p>Druhá, inteligentnější metoda, spočívá v&nbsp;přímé integraci do
prohlížeče. Ať již Mozilla Suite či Mozilla Firefox umožňují při startu
načítat zásuvné moduly (pluginy). Ty jsou umístěny v&nbsp;podadresáři
s&nbsp;instalací, který se jmenuje <em>plugins</em> a&nbsp;mají nejčastěji
podobu
<abbr title="Dynamic Link Library" lang="en">DLL</abbr> souboru.</p>

<p>Pokud do adresního řádku prohlížeče zadáte adresu <em>about:plugins</em>,
zobrazí se vám stránka se seznamem nainstalovaných zásuvných modulů. Ze
seznamu vyčtete všechny důležité informace jako například jméno modulu,
soubor, kde je umístěn či příponu souboru, která jej aktivuje.</p>

<h2>Z&nbsp;čeho jsme vycházeli</h2>

<p>Rádi bychom poznamenali, že tento článek není recenzí či porovnáním
jednotlivých download managerů z&nbsp;hlediska funkčnosti. Hodnocení
funkčnosti je vždy velice subjektivní a&nbsp;každému uživateli vyhovuje něco
jiného. Snažili jsme se vzít jednotlivé produkty z&nbsp;pohledu aplikací
Mozilla. Konečný výběr ponecháme na každém z&nbsp;vás.</p>

<p>Na testování jsme použili poslední verze produktů, které byly v&nbsp;době
vzniku článku k dispozici. Jednalo se o&nbsp;Mozilla Suite&nbsp;1.7.3&nbsp;CZ
a&nbsp;Mozilla Firefox&nbsp;1.0PR&nbsp;CZ. Jednotlivé download managery jsou
seřazeny abecedně a, není-li uvedeno jinak, jednalo se taktéž
o&nbsp;poslední verze, které byly v&nbsp;době psaní článku
k&nbsp;dispozici.</p>

<h2 id="dm-downloadwith">Rozšíření DownloadWith</h2>

<p>Spolu s&nbsp;přehledem download managerů je také dobré zmínit zajímavé
rozšíření
<a href="http://downloadwith.mozdev.org/"
	hreflang="en"
	title="DownloadWith: Domovská stránka">DownloadWith</a>.
Toto rozšíření zajišťuje spolupráci s&nbsp;externími download managery.
Většina z&nbsp;nich si poradí s&nbsp;aplikacemi Mozilla sama, ale existují
případy, kdy vám toto rozšíření umožní korektní spolupráci s&nbsp;download
managerem, který aplikace Mozilla oficiálně nepodporuje.</p>


<h2>Přehled download managerů</h2>


<h3 id="dm-dap">Download Accelerator Plus 7.0.0.9</h3>

<p>Jeden z&nbsp;populárních download managerů. Již na jeho domovská stránce
si můžete přečíst informaci o&nbsp;tom, že je k&nbsp;dispozici i&nbsp;pro
Mozilla Suite. Tato podpora není ve výchozí instalaci zapnuta, a&nbsp;proto
musíte v&nbsp;programu zvolit v&nbsp;nabídce <em>Options</em> položku
<em>Preferences...</em>. Zobrazí se vám dialog a&nbsp;v&nbsp;něm hned na
úvodní kartě <em>General</em> zaškrtnete volbu <em>Integrate into Mozilla
browser (1.x)</em>. Mozilla Firefox program nenalezne, ale pro správnou
funkčnost postačí zkopírovat soubor <em>npdap.dll</em> z&nbsp;adresáře
<em>plugins</em> Mozilla Suite do stejného adresáře u&nbsp;Mozilla
Firefoxu.</p>

<p>
<strong>Výsledek</strong>:Bezproblémová podpora Mozilla Suite,
u&nbsp;Mozilla Firefoxu je potřeba manuální zásah.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.downloadaccelerator.com/"
		title="Download Accelerator Plus: Domovská stránka">http://www.downloadaccelerator.com</a><br />
<strong>Licence</strong>: Shareware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Download-Accelerator/"
		title="Slunečnice.cz: Stažení programu Download Accelerator Plus">Download Accelerator Plus na Slunečnice.cz</a>
</p>


<h3 id="dm-de">Download Express 1.6 SR1</h3>

<p>Žádná podpora pro Mozilla Suite či Mozilla Firefox. Podpora je možná jen
pomocí rozšíření <a href="#dm-downloadwith">DownloadWith</a>.</p>

<p>
<strong>Výsledek</strong>: Podpora jedině pomocí rozšíření DownloadWith.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.metaproducts.com/mp/mpProducts_Detail.asp?id=18"
		title="Download Express: Domovská stránka">http://www.metaproducts.com</a><br />
<strong>Licence</strong>: Zdarma pro nekomerční užití<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Download-Express/"
		title="Slunečnice.cz: Stažení programu Download Express">Download Express na Slunečnice.cz</a>
</p>


<h3 id="dm-fg">FlashGet 1.65</h3>

<p>Jeden z&nbsp;dnes nejvíce populárních download managerů. Podobně jako
u&nbsp;řady dalších je i&nbsp;u&nbsp;FlashGet potřeba pro správnou
funkčnost nainstalovat
<a href="http://www.amazesoft.com/npfg11.exe"
	title="Stažení zásuvného modulu">zásuvný modul</a>.

Zásuvný modul je funkční jak v&nbsp;Mozilla Suite tak v&nbsp;Mozilla
Firefoxu. Lepší integraci s&nbsp;aplikacemi Mozilla lze též docílit
nainstalováním rozšíření
<a href="http://software.informaction.com/catalog/index.php?product=flashgot"
	title="FlashGot: Domovská stránka">FlashGot</a>.</p>

<p>
<strong>Výsledek</strong>: Bezproblémová funkčnost v&nbsp;Mozilla Suite
i&nbsp;Mozilla Firefoxu.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.amazesoft.com/"
		title="FlashGet: Domovská stránka">http://www.amazesoft.com</a><br />
<strong>Licence</strong>: Shareware, starší verze adware.<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/FlashGet/"
		title="Slunečnice.cz: Stažení programu FlashGet">FlashGet na Slunečnice.cz</a>
</p>


<h3 id="dm-fdm">Free Download Manager 1.1</h3>

<p>Jeden z&nbsp;řady download managerů, které jsou k&nbsp;dispozici zdarma.
Free Download Manager umožňuje bezproblémovou integraci do Mozilla Firefoxu.
Ve spuštěném programu v&nbsp;hlavní nabídce <em>Options</em> vyberte položku
<em>Download options</em> a&nbsp;na kartě <em>Monitoring</em> zaškrtněte
zaškrtávací políčko <em>Mozilla Firefox</em>. Pokud chcete tento download
manager používat v&nbsp;Mozilla Suite, postačí překopírovat soubor
<em>npfdm.dll</em> z&nbsp;podadresáře <em>Plugins</em> do ekvivalentního
podadresáře v&nbsp;Mozilla Suite.</p>

<p>
<strong>Výsledek</strong>: Bezproblémová funkčnost v&nbsp;Mozilla Firefoxu,
v&nbsp;Mozilla Suite je potřeba manuální zásah.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.freedownloadmanager.org/"
		title="Free Download Manager: Domovská stránka">http://www.freedownloadmanager.org</a><br />
<strong>Licence</strong>: Freeware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Free-Download-Manager/"
		title="Slunečnice.cz: Stažení programu Free Download Manager">Free Download Manager na Slunečnice.cz</a>
</p>


<h3 id="dm-fd">Fresh Download 7.14</h3>

<p>Narozdíl od ostatních download managerů je situace u&nbsp;Fresh Download
trochu jiná. Zatímco starší verze podporovaly pouze Mozilla Suite, výše
zmíněná verze podporuje pouze Mozilla Firefox. Podpora není po instalaci
aktivní. Musíte zvolit v&nbsp;nabídce <em>View</em> položku
<em>FreshDownload Options...</em>. V&nbsp;zobrazeném dialogu přejděte na
kartu <em>Integration</em> a&nbsp;zaškrtněte volbu <em>Integrate to
Mozilla</em>. Pro úspěšnou integraci do Mozilla Suite je potřeba zásuvný
modul (<em>npfd.dll</em>) překopírovat z&nbsp;Mozilla Firefoxu do stejného
adresáře u&nbsp;Mozilla Suite.</p>

<p>
<strong>Výsledek</strong>: Bezproblémová podpora Mozilla Firefoxu,
u&nbsp;Mozilly Suite je potřeba manuální zásah<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.freshdevices.com/"
		title="Fresh Download: Domovská stránka">http://www.freshdevices.com</a><br />
<strong>Licence</strong>: Freeware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Fresh-Download/"
		title="Slunečnice.cz: Stažení programu Fresh Download">Fresh Download na Slunečnice.cz</a>
</p>


<h3 id="dm-gr">GetRight 5.1</h3>

<p>V&nbsp;současné době asi nejpopulárnější download manager. Kromě základního
instalačního balíčku potřebuje pro integraci do&nbsp;aplikací Mozilla speciální
zásuvný modul, který seženete na
<a href="http://www.getright.com/opera.html#file">domovské stránce</a>.
Instalace probíhá podobně jako instalace jakéhokoliv jiného programu.
V&nbsp;průběhu instalace je pouze potřeba nastavit cestu k&nbsp;adresáři
s&nbsp;nainstalovanou aplikací Mozilla (Firefox). Pokud máte nainstalovanou
Mozillu ve výchozím adresáři, nemusíte nic měnit. U Mozilla Firefoxu je
potřeba nastavit cestu vždy.</p>

<p>
<strong>Výsledek</strong>: Bezproblémová podpora Mozilla Suite
i&nbsp;Mozilla Firefoxu.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.getright.com/"
		title="GetRight: Domovská stránka">http://www.getright.com</a><br />
<strong>Licence</strong>: Shareware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/GetRight/"
		title="Slunečnice.cz: Stažení programu GetRight">GetRight na Slunečnice.cz</a>
</p>


<h3 id="dm-gf">Go!Zilla Free 4.51 (shareware)</h3>

<p>Neobsahuje žádnou podporu pro programy Mozilla. Tvůrci na stránkách
slibují přidání podpory již hodně dlouho.</p>

<p>
<strong>Výsledek</strong>: Žádná podpora pro Mozilla Suite či Mozilla
Firefox.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.gozilla.com/"
		title="Go!Zilla: Domovská stránka">http://www.gozilla.com</a><br />
<strong>Licence</strong>: Shareware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/GoZilla-Free/"
		title="Slunečnice.cz: Stažení programu Go!Zilla">Go!Zilla Free na Slunečnice.cz</a>
</p>


<h3 id="dm-idm">Internet Download Manager v. 4.02</h3>

<p>Zajímavý download manager s&nbsp;rozsáhlou podporou různých prohlížečů.
Pro podporu Mozilla Suite v&nbsp;programu zvolte v&nbsp;nabídce
<em>Downloads</em> položku <em>Options</em>. V&nbsp;zobrazeném dialogovém okně
klepněte na tlačítko v&nbsp;dolní části na zaškrtávací pole <em>Integrate
into Mozilla</em>. Ač se na domovské stránce dozvíte, že je podporován
i&nbsp;prohlížeč Mozilla Firefox, nám se automatická integrace nezdařila.
Řešením je tedy zkopírování souborů NPIDMan1.dll a&nbsp;NPIDMan2.dll
z&nbsp;podadresáře <em>Plugins</em> Mozilla Suite do ekvivalentního
podadresáře v&nbsp;Mozilla Firefoxu.</p>

<p>
<strong>Výsledek</strong>: Bezproblémová podpora Mozilla Suite,
u&nbsp;Mozilla Firefoxu je potřeba manuální zásah.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.internetdownloadmanager.com/"
		title="LeechGet: Domovská stránka">http://www.internetdownloadmanager.com</a><br />
<strong>Licence</strong>: Shareware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Internet-Download-Manager/"
		title="Slunečnice.cz: Stažení programu Internet Download Manager">Internet Download Manager na Slunečnice.cz</a>
</p>


<h3 id="dm-lg">LeechGet 2004</h3>

<p>Poměrně neznámý download manager. Nainstalovaný program v&nbsp;sobě nativně
nemá podporu Mozilla Suite ani Mozilla Firefoxu. K&nbsp;dispozici je
<a href="http://www.leechget.net/en/phpBB2/get.php?filename=Plug-in"
	title="Odkaz na stažení zásuvného modulu" hreflang="en">zásuvný modul</a>,
který je funkční jak v&nbsp;Mozilla Suite tak v&nbsp;Mozilla Firefoxu.
Existuje též zajímavé rozšíření pro Mozilla Suite jménem
<a href="http://home.arcor.de/chrassig/leechget.html"
	title="LeechGet Mozilla Menu: Domovská stránka">LeechGet Mozilla Menu</a>,
které vám umožní lepší integraci tohoto download manageru přímo do Mozilla
Suite.</p>

<p>
<strong>Výsledek</strong>: Bezproblémová podpora Mozilla Suite
i&nbsp;Mozilla Firefoxu.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.leechget.net/"
		title="LeechGet: Domovská stránka">http://www.leechget.net</a><br />
<strong>Licence</strong>: Zdarma pro nekomerční užití<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/LeechGet/"
		title="Slunečnice.cz: Stažení programu LeechGet">LeechGet na Slunečnice.cz</a>
</p>


<h3 id="dm-md">Mass Downloader 2.7 SR2</h3>

<p>Tento download manager se, podobně jako ostatní, ihned neintegruje. Po
úspěšné instalaci jej spusťte a&nbsp;v&nbsp;nabídce <em>Zobrazit</em>
vyberte položku <em>Volby</em>. V&nbsp;zobrazeném dialogu pod <em>Integrace
-> Prohlížeče</em> naleznete zaškrtávací políčko, které vám umožní program
integrovat do Mozilla Firefoxu. Integrace do Mozilla Suite neproběhne. Je
tedy nutné zkopírovat z&nbsp;podadresáře <em>plugins</em> Mozilla Firefoxu
soubor <em>npmassdn.dll</em> do ekvivalentního podadresáře instalace Mozilla
Suite.</p>

<p>
<strong>Výsledek</strong>: Bezproblémová podpora Mozilla Firefoxu,
u&nbsp;Mozilla Suite je potřeba manuální zásah.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.metaproducts.com/mp/mpProducts_Detail.asp?id=3"
		title="Mass Downloader: Domovská stránka">http://www.metaproducts.com</a><br />
<strong>Licence</strong>: Shareware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Mass-Downloader/"
		title="Slunečnice.cz: Stažení programu Mass Downloader">Mass Downloader na Slunečnice.cz</a>
</p>


<h3 id="dm-na">NetAnts 1.25</h3>

<p>U&nbsp;tohoto download manageru není žádná podpora aplikací Mozilla. Jedinou
možností je přesunout odkaz ke stažení na zobrazený čtverčík programu.</p>

<p>
<strong>Výsledek</strong>: Žádná podpora pro Mozilla Suite či Mozilla Firefox.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.netants.com/"
		title="NetAnts: Domovská stránka">http://www.netants.com</a><br />
<strong>Licence</strong>: Freeware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/NetAnts/"
		title="Slunečnice.cz: Stažení programu NetAnts">NetAnts na Slunečnice.cz</a>
</p>


<h3 id="dm-nt">Net Transport 1.92</h3>

<p>Žádná podpora pro Mozilla Suite či Mozilla Firefoxu. Podpora je možná jen
pomocí rozšíření <a href="#dm-downloadwith">DownloadWith</a>.</p>

<p>
<strong>Výsledek</strong>: Podpora jedině pomocí rozšíření DownloadWith.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.xi-soft.com/"
		title="Net Transport: Domovská stránka">http://www.xi-soft.com</a><br />
<strong>Licence</strong>: Shareware, starší verze freeware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Net-Transport/"
		title="Slunečnice.cz: Stažení programu Net Transport">Net Transport na Slunečnice.cz</a>
</p>


<h3 id="dm-netv">Net Vampire 4.0</h3>

<p>Žádná podpora pro Mozilla Suite či Mozilla Firefox.</p>

<p>
<strong>Výsledek</strong>: Žádná podpora pro Mozilla Suite či Mozilla Firefox.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.netvampire.com/"
		title="Net Vampire: Domovská stránka">http://www.netvampire.com</a><br />
<strong>Licence</strong>: Shareware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Net-Vampire/"
		title="Slunečnice.cz: Stažení programu Net Vampire">Net Vampire na Slunečnice.cz</a>
</p>


<h3 id="dm-rd">ReGet Deluxe 4.1</h3>

<p>Download manager se integruje přímo do místní nabídky v&nbsp;Mozilla
Suite. Mozilla Firefox však podporován není a&nbsp;jedinou možností tak je
přetáhnout odkaz na zobrazený čtverčík manageru, čímž zahájíte
stahování.</p>

<p>
<strong>Výsledek</strong>: Funkční v&nbsp;Mozilla Suite. V&nbsp;Mozilla
Firefoxu téměř nefunkční.<br />
<strong>Domovská stránka</strong>:
	<a href="http://deluxe.reget.com/en/"
		title="ReGet Deluxe: Domovská stránka">http://deluxe.reget.com/en/</a><br />
<strong>Licence</strong>: Shareware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/ReGet-Deluxe/"
		title="Slunečnice.cz: Stažení programu ReGet Deluxe">ReGet Deluxe na Slunečnice.cz</a>
</p>


<h3 id="dm-sdp">Star Downloader Pro 1.51</h3>

<p>Donedávna download manager, který byl k&nbsp;dispozici zdarma. Nyní se
jedná shareware. Po jeho instalaci byla automaticky zapnuta podpora pro
balík Mozilla a&nbsp;vše fungovalo bez problémů. Mozillu Firefox program
nenalezl, a&nbsp;proto je potřeba překopírovat nainstalovaný plugin
z&nbsp;balíku Mozilla (npstar.dll) manuálně. Poté je funkčnost bezproblémová
i&nbsp;v&nbsp;Mozilla Firefoxu. Vzhledem k&nbsp;tomu, že poslední verze
tohoto download manageru je "pouze" opravou chyb, měl by uvedený postup
fungovat i&nbsp;na starší verzi&nbsp;1.4, která je k&nbsp;dispozici
zdarma.</p>

<p>
<strong>Výsledek</strong>: Bezproblémová podpora Mozilla Suite,
v&nbsp;Mozilla Firefoxu je potřeba manuální zásah.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.stardownloader.com/"
		hreflang="en" title="Star Downloader: Domovská stránka">http://www.stardownloader.com</a><br />
<strong>Licence</strong>: Shareware<br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Star-Downloader/"
		title="Slunečnice.cz: Stažení programu Star Downloader">Star Downloader Pro na Slunečnice.cz</a>
</p>


<h3 id="dm-wg">WackGet</h3>

<p><abbr title="Graphical User Interface" lang="en">GUI</abbr>
pro populární download manager
<a href="http://wget.sunsite.dk/"
	hreflang="en" title="Wget: Domovská stránka">WGet</a>,
který je znám zejména z&nbsp;GNU/Linuxu. Podpora je možná jen pomocí rozšíření
<a href="#dm-downloadwith">DownloadWith</a>.</p>

<p>
<strong>Výsledek</strong>: Podpora jedině pomocí rozšíření DownloadWith.<br />

<strong>Domovská stránka</strong>:
	<a href="http://millweed.com/projects/wackget/"
		title="WackGet: Domovská stránka">http://millweed.com/projects/wackget/</a><br />
<strong>Licence</strong>:
	<abbr title="General Public Licence" lang="en">GPL</abbr><br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/Wackget/"
		title="Slunečnice.cz: Stažení programu Wackget">WackGet na Slunečnice.cz</a>
</p>


<h3 id="dm-ww">WinWGet</h3>

<p><abbr title="Graphical User Interface" lang="en">GUI</abbr>
pro populární download manager
<a href="http://wget.sunsite.dk/"
	hreflang="en" title="Wget: Domovská stránka">WGet</a>,
který je znám zejména z&nbsp;GNU/Linuxu. Podpora je možná jen pomocí
rozšíření
<a href="#dm-downloadwith">DownloadWith</a>.</p>

<p>
<strong>Výsledek</strong>: Podpora jedině pomocí rozšíření DownloadWith.<br />
<strong>Domovská stránka</strong>:
	<a href="http://www.cybershade.us/winwget/"
		title="WinWGet: Domovská stránka">http://www.cybershade.us/winwget/</a><br />
<strong>Licence</strong>:
	<abbr title="General Public Licence" lang="en">GPL</abbr><br />
<strong>Ke stažení</strong>:
	<a href="http://www.slunecnice.cz/product/WinWGet/"
		title="Slunečnice.cz: Stažení programu Star WinWGet">WinWGet na Slunečnice.cz</a>
</p>

<hr />
<p><small>1. 11. 2004, Tým CZilla</small></p>

<?php
	$page->includeTemplate('footer');
?>
