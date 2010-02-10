<?php
	require_once '../../inc/page.php';
	$page->setTitle('Lightning &ndash; jednoduchá organizace vašeho času');
	$page->setDescription('Lightning &ndash; jednoduchý organizátor vašeho času pro Mozilla Thunderbird.');
	$page->setKeywords('mozilla calendar kalendář lightning úkoly správa čas organizace');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Lightning</h1>

<div class="img-c img-right" style="width:250px">
	<img src="/img/r-kalendar.png" width="250" height="225" alt="" />
	<p class="comment">Dialog pro zadání nové události.</p>
</div>

<p>Lightning je rozšíření, které do Thunderbirdu doinstaluje
nejrůznější kalendářové funkce. Díky němu budete moci plánovat svůj denní rozvrh
a&nbsp;úkoly. Získáte tím plnou kontrolu nad svým časem.</p>

<p>Lightning <strong>je vhodným doplňkem</strong> poštovního klientu Mozilla
Thunderbird. Jeho instalací rozšíříte nabízené funkce pro práci
s&nbsp;poštou o&nbsp;možnost jednoduché organizace času a&nbsp;úkolů
podobně, jako je nabízí Microsoft&nbsp;Outlook.</p>

<p>Své kalendáře můžete též <strong>snadno sdílet</strong>. Tato funkce je
vhodná zvláště tehdy, pokud pracujete na více PC a&nbsp;potřebujete mít na
každém přístup k&nbsp;plánovacímu kalendáři.</p>


<h2 id="co-umi">Co umí?</h2>

<ul>
	<li>Jednoduchým a&nbsp;přehledným způsobem <strong>organizovat váš
	čas</strong>.</li>

	<li><strong>Vést přehled úkolů</strong>, které máte provést,
	a&nbsp;kontrolovat termíny plnění.</li>

	<li><strong>Sdílet kalendáře</strong> prostřednictvím webového
	serveru.</li>

	<li><strong>Zobrazovat více kalendářů</strong> v&nbsp;jednom okně.</li>
</ul>


<h2 id="proc-pouzivat">Proč používat?</h2>

<p>Rozšíření je <strong>k&nbsp;dispozici v&nbsp;češtině</strong>.</p>

<p>Lightning je založen na standardech a&nbsp;díky své otevřené architektuře
lze své kalendáře snadno <strong>sdílet s&nbsp;kolegy, kteří používají jiné
programy</strong>. V&nbsp;současné době umožňuje Lightning ukládat svá data
do souborů

<abbr title="iCalendar Standart" lang="en">ics</abbr>
(standard
<a href="http://www.ietf.org/rfc/rfc2445.txt"
	title="IETF: Specifikace formátu iCalendar"
	hreflang="en" class="l-en">iCalendar</a>
<a href="http://developer.apple.com/internet/appleapplications/icalendarfiles.html"
	title="Apple: Stránka o formátu iCalendar"
	hreflang="en" class="l-en">definovaný</a>
firmou
<a href="http://www.apple.com/"
	title="Apple: Stránka o formátu iCalendar"
	hreflang="en" class="l-en">Apple</a>), databáze <a
	href="http://www.sqlite.org/"
	title="Apache: Domovská stránka databáze SQLite"
	hreflang="en" class="l-en">SQLite</a>
a&nbsp;na internet za pomoci protokolu
<a href="http://ietf.webdav.org/caldav/home.html"
	title="Domovská stránka protokolu CalDAV"
	hreflang="en" class="l-en">CalDAV</a>.</p>

<p>Samozřejmostí je <strong>import a&nbsp;export souborů ve formátu
iCalendar a&nbsp;vCalendar</strong>. Své události a&nbsp;úkoly si můžete
rovněž vyexportovat do souboru typu
<abbr title="Rich Text Format" lang="en">RTF</abbr>
či
<abbr title="Hypertext Markup Language" lang="en">HTML</abbr>.
Kalendář je řešen multiplatformně. Je tedy jedno, zda používáte Windows či
GNU/Linux, Kalendář je k&nbsp;dispozici pro oba systémy.</p>

<p>Data lze snadno sdílet. Pokud provozujete webový server
<a href="http://httpd.apache.org/"
	title="Apache: Domovská stránka webového serveru"
	hreflang="en" class="l-en">Apache</a>,
stačí si do něj doinstalovat podporu pro
<a href="http://www.webdav.org/"
	title="Webový server o webDAV"
	hreflang="en" class="l-en">webDAV</a>,
které vám umožní vaše soubory kalendáře sdílet v&nbsp;rámci intranetu či
Internetu. Pokud takový server nemáte, a&nbsp;rádi byste svá data
přesto sdíleli, či k&nbsp;nim rovnou přistupovali pomocí webového rozhraní,
pak stačí využít služeb serveru
<a href="http://www.icalx.com/"
	title="Domovská stránka serveru iCal Exchange"
	hreflang="en" class="l-en">iCal Exchange</a>.</p>

<p>V&nbsp;okně Lightningu lze mít současně zobrazena barevně odlišená data
z&nbsp;několika kalendářů. Události osobního kalendáře umístěného na
lokálním disku můžete mít zobrazeny modře, červeně pak události
z&nbsp;firemního kalendáře načítaného z&nbsp;firemního serveru a&nbsp;např.
zeleně pak české
<a href="http://www.mozilla.org/projects/calendar/caldata/CzechHolidays.ics">státní svátky</a>.</p>


<h2 id="jak-ziskat">Jak získat?</h2>

<p>Lightning si můžete stáhnout ze serveru
<a href="https://addons.mozilla.org/cs/thunderbird/addon/2313">Doplňky Mozilly</a>.
Instalaci provedete obdobně, jako u&nbsp;jakékoliv jiného rozšíření. Pokud
nevíte, jak se rozšíření instaluje, přečtěte si náš
<a href="http://www.czilla.cz/podpora/thunderbird/instalace-rozsireni.html">návod na instalaci</a>.</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Další informace</h2>

	<h3 class="first">O Lightningu</h3>

	<ul>
		<li><a href="#co-umi">Co umí?</a></li>
		<li><a href="#proc-pouzivat">Proč používat?</a></li>
		<li><a href="#jak-ziskat">Jak získat?</a></li>
	</ul>

	<h3>Důležité odkazy</h3>
	<dl>
		<dt><a href="http://www.mozilla.org/projects/calendar/lightning/"
				hreflang="en" class="l-en">Stránka projektu</a></dt>
		<dd>Oficiální stránka projektu <span lang="en">Lightning</span>.</dd>
		<dt><a href="http://forum.mozilla.cz/viewforum.php?f=4"
				hreflang="cs">Diskusní fórum</a></dt>
		<dd>Fórum, kam se můžete obracet se svými dotazy.</dd>
	</dl>

</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<a href="../">Proč používat?</a> &gt;
		<strong>Lightning</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
