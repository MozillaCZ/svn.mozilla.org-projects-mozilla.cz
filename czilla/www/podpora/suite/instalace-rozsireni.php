<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Instalace rozšíření do Mozilla Suite';
	$page->headline = array('Instalace rozšíření','Návod jak nainstalovat nové rozšíření do balíku Mozilla');

	$page->setKeywords('podpora, instalace, rozšíření, nápověda, pomoc, návod, mozilla, suite');
	$page->setDescription('Návod jak nainstalovat nové rozšíření do balíku aplikací Mozilla');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links');
	$page->addSideBox('tips','firefox');

	$page->includeHeader();
?>

<div id="navigation">
	<a href="#zdroje">Kde sehnat rozšíření</a>
	&middot;
	<a href="#z-webu">Instalace z&nbsp;webu</a>
	&middot;
	<a href="#lokalne">Instalace z&nbsp;lokálního umístění</a>
	&middot;
	<a href="#odinstalace">Odinstalace</a>
	&middot;
	<a href="#problemy">Řešení problémů</a>
</div>

<p><a href="/produkty/suite/" title="Základní informaceo&nbsp;Mozilla Suite">Mozilla
Suite</a> je balík webových aplikací, které poskytují komfort pro práci na Internetu.
Obsahuje webový prohlížeč, e-mailový klient, editor webových stránek a&nbsp;IRC
klient. Díky jeho flexibilní architektuře jej můžete snadno rozšířit o&nbsp;mnoho
dodatečných funkcí jako např.
<a href="/doplnky/rozsireni/sage/"
	title="Domovská stránka lokalizovaného rozšíření Sage">RSS čtečku</a>,
<a href="/doplnky/rozsireni/enigmail/"
	title="Domovská stránka lokalizovaného rozšíření Enigmail">šifrovanou e-mailovou komunikaci</a> či
<a href="/doplnky/rozsireni/mozimage/"
	title="Domovská stránka lokalizovaného rozšíření MozImage">prohlížeč obrázků</a>.
Za těmito funkcemi stojí tzv. <a href="/doplnky/rozsireni/"
	title="Přehled lokalizovaných rozšíření">rozšíření</a>
(<span lang="en">extensions</span>). Přiblížíme vám, kde rozšíření sehnat,
jak je nainstalovat a&nbsp;jak je odstranit, když už nejsou potřeba.</p>


<h2 id="zdroje">Kde sehnat rozšíření</h2>

<p>Velký archiv rozšíření nabízí server
<a href="https://addons.mozilla.org/extensions/?application=mozilla"
	hreflang="en" lang="en" title="Přehled rozšíření pro Mozilla suite">Mozilla
Update</a>, rozšíření v&nbsp;češtině najdeme v&nbsp;<a
	href="/doplnky/rozsireni/p/suite/"
	title="Přehled lokalizovaných rozšíření pro Mozilla Suite">přehledu
lokalizovaných rozšíření</a>. My si vybereme první jmenovaný zdroj.</p>

<p>Chceme-li projít dostupná rozšíření a&nbsp;vybrat si, která
nainstalujeme, použijeme
<a href="https://addons.mozilla.org/extensions/?application=mozilla"
	hreflang="en"
	title="Přehled rozšíření pro Mozilla suite">přehled dostupných rozšíření</a>.
Pro hledání předem známého rozšíření můžeme použít vyhledávací formulář
v&nbsp;pravém horním rohu stránky. V&nbsp;roletce vybereme položku <span
lang="en">extensions</span>, do vyhledávacího políčka vložíme hledaný text
a&nbsp;stiskneme <span lang="en">Go</span>. Z&nbsp;výsledků vyhledávání vybereme
rozšíření, která potřebujeme.</p>

<div class="img-center"><div class="img-c" style="width:275px">
	<img src="images/instalace-rozsireni-umo-formular.png"
		title="Vyhledávací formulář na Mozilla Update"
		alt="Vyhledávací formulář"
		height="92" width="275" />
</div></div>

<p>Ať už první, či druhou cestou, dostaneme se vždy nakonec na stránku
daného rozšíření. Na obrázku (viz výše) jsme hledali slovo
&quot;enigmail&quot; a&nbsp;dostali jsme se tak na stránku rozšíření
<a href="https://addons.mozilla.org/extensions/moreinfo.php?id=71"
	hreflang="en" lang="en" title="Informace o&nbsp;rozšíření Enigmail">Enigmail</a>.
Tato stránka obsahuje základní informace o&nbsp;rozšíření, od jeho popisu až
po komentáře uživatelů. Nás ale hlavně zajímá odkaz na instalaci rozšíření,
který se nachází ve žlutozeleném rámečku a&nbsp;je označen slovy <span
lang="en">Install now</span>.</p>

<div class="img-center"><div class="img-c" style="width:289px"><img
	src="images/instalace-rozsireni-umo-installnow.png"
	title="Odkaz na instalaci rozšíření"
	alt="Odkaz na instalaci"
	height="95" width="289" />
</div></div>

<p>Zde si výklad rozdělíme na <a href="#z-webu">instalaci z&nbsp;webu</a>
a&nbsp;<a href="#lokalne">instalaci z&nbsp;lokálního umístění</a>. Instalace
z&nbsp;webu je jednodušší, neboť stačí klepnout na příslušný odkaz,
souhlasit s&nbsp;instalací a&nbsp;rozšíření se již instaluje. Pokud není
z&nbsp;jakéhokoliv důvodu možné tuto metodu použít, je třeba sáhnout po
metodě druhé.</p>


<h2 id="z-webu">Instalace z&nbsp;webu</h2>

<p>Instalaci z&nbsp;webu zahájíme tak, že klepneme levým tlačítkem myši na
odkaz pro instalaci rozšíření (viz výše). Objeví se dialogové okno <span
class="nabidka">Instalace vybavení</span>, které se nás ptá, zda chceme
rozšíření skutečně nainstalovat. Toto okno nás má chránit před zákeřným
softwarem třetích stran - proto pokračujeme pouze tehdy, máme-li jistotu,
co instalujeme a&nbsp;z jakého je to zdroje.</p>

<div class="img-center"><div class="img-c" style="width:250px">
	<a href="images/instalace-rozsireni-dotaz.png" class="zoom"><img
		src="images/instalace-rozsireni-dotaz-m.png"
		alt="Dotaz"
		width="250" height="76"
		title="Dotaz na instalaci rozšíření" /></a>
</div></div>

<p>Pro instalaci daného rozšíření musíme klepnout na tlačítko <span
class="nabidka">Instalovat</span> a&nbsp;rozšíření bude v&nbsp;mžiku nainstalováno.</p>

<p>Pro dokončení instalace rozšíření je potřeba Mozilla Suite restartovat. Zavřeme
tedy všechna okna aplikace a&nbsp;spustíme ji znovu. Pokud vše proběhlo v&nbsp;pořádku,
můžeme si užívat nových možností aplikace. Pokud se instalace nepodařila,
pokračujeme k&nbsp;<a href="#problemy">Řešení problémů</a>.</p>

<p><em>Pozn.: </em> Instalátor rozšíření se nás může zeptat, zda si přejeme
nainstalovat rozšíření do adresáře profilu či, do adresáře aplikace. První možnost
nainstaluje dané rozšíření pouze pro uživatele, který jej instaluje. Druhá možnost
toto rozšíření nainstaluje pro všechny uživatele, kteří Mozillu na daném počítači
používají. Při tom je však třeba počítat s&nbsp;tím, že nainstalované rozšíření může
mít jiná přístupová práva, než jaká má daný uživatel, a&nbsp;může tedy dojít k&nbsp;potížím.
S jejich řešením vám jistě rádi pomohou uživatelé v&nbsp;našem
<a href="http://forum.czilla.cz/viewforum.php?f=23">fóru</a>.</p>


<h2 id="lokalne">Instalace z&nbsp;lokálního umístění</h2>

<p>Instalace z&nbsp;lokálního umístění se provádí zcela stejně jako
instalace z&nbsp;webu, pouze jí navíc předchází ještě dva kroky. Prvním
krokem je stažení souboru rozšíření do nějakého adresáře, např. na pevném
diku. Soubory rozšíření mají koncovku <em>XPI</em> a&nbsp;podle toho je 
také poznáme.</p>

<p>Druhým krokem je výběr souboru k&nbsp;instalaci. To lze udělat dvojím
způsobem:</p>

<ul>
	<li>přetažením ikony souboru za pomoci myši do okna aplikace</li>

	<li>použitím nabídky <span class="nabidka">Soubor</span> &gt; <span
	class="nabidka">Otevřít soubor</span>, kde v&nbsp;následujícím okně
	nalezneme soubor a&nbsp;potvrdíme jeho instalaci.</li>
</ul>

<p>Od tohoto bodu je instalace rozšíření identická s&nbsp;<a
href="#z-webu">instalací z&nbsp;webu</a>, a&nbsp;proto můžeme pokračovat
podle ní.</p>


<h2 id="odinstalace">Odinstalace</h2>

<p>Rozšíření je samozřejmě možné z&nbsp;aplikace odebrat, ale
není to tak jednoduché jako např. u&nbsp;<a href="/produkty/firefox/"
	title="Základní informace o&nbsp;prohlížeči Mozilla Firefox">Firefoxu</a>.
Mozilla Suite nenabízí žádného správce rozšíření, a&nbsp;tak si musí autoři
rozšíření vypomáhat sami.</p>

<p>Pokud byl autor daného rozšíření zodpovědný, jistě nám umožnil své rozšíření
z&nbsp;Mozilla Suite odinstalovat. V&nbsp;tom případě hledejte položku pro odinstalaci
v&nbsp;nabídce <span class="nabidka">Nástroje</span> či v&nbsp;nastavení daného
rozšíření.</p>

<p>Pokud však autor odinstalování rozšíření neumožnil, nezoufejme. Pomůže nám
rozšíření <a href="http://www.roundtwo.com/product/extensionuninstaller"
	hreflang="en" lang="en"
	title="Domovská stránka rozšíření Extension uninstaller">Extension Uninstaller</a>,
které odinstalaci rozšíření umožňuje. Po jeho instalaci se v&nbsp;nabídce
<span class="nabidka">Nástroje</span> objeví položka <span class="nabidka"
	lang="en">Extension Uninstaller</span> a&nbsp;když na ni klepnete, otevře se
dialog se seznamem všech nainstalovaných rozšíření. Nyní stačí jen označit
rozšíření k&nbsp;odinstalaci a&nbsp;klepnout na <span class="nabidka"
	lang="en">Uninstall</span>.</p>

<div class="img-center"><div class="img-c" style="width:250px">
	<a href="images/instalace-rozsireni-uninstall.png" class="zoom"><img
		src="images/instalace-rozsireni-uninstall-m.png"
		alt="Odinstalace rozšíření"
		width="250" height="248"
		title="Okno rozšíření Extension uninstaller" /></a>
</div></div>

<p>Rozšíření Extension Uninstaller špatně zvládá odinstalaci rozšíření, pokud se
v&nbsp;cestě k&nbsp;jejich místu uložení nacházejí znaky s&nbsp;diakritikou. Je
tedy možné, že se v&nbsp;českém prostředí při odinstalaci rozšíření setkáte
s&nbsp;chybovými hlášeními.</p>


<h2 id="problemy">Řešení problémů</h2>

<p>Ačkoliv to není časté, také při instalaci rozšíření se můžeme setkat
s&nbsp;problémy. Následující řádky se pokusí nastínit řešení těch
nejčastějších.</p>

<h3>Nekompatibilní rozšíření</h3>

<p>Pokud vám Mozilla Suite při pokusu o&nbsp;instalaci rozšíření hlásí, že
rozšíření není kompatibilní s&nbsp;vaší verzí aplikace nebo že neobsahuje
potřebné instalační skripty, nezoufejte. Existují dvě příčiny a&nbsp;také dvě
jednoduchá řešení.</p>

<dl>
	<dt>Vaše verze aplikace již není podporována.</dt>

	<dd>Řešením je aktualizace aplikace na novější verzi. Tento postup
	můžeme jedině doporučit, neboť u&nbsp;produktů Mozilla Foundation více
	než kde jinde platí, že nový =&nbsp;lepší.</dd>

	<dt>Vaše verze aplikace ještě není podporována.</dt>

	<dd>Řešením je vyčkat, než autor své rozšíření vaší aplikaci přizpůsobí
	&ndash; většinou se nejedná o&nbsp;příliš dlouhou dobu.</dd>
</dl>


<h3>Chyby po restartu aplikace </h3>

<p>Je možné, že se do některých rozšíření vloudila chyba, se kterou se vaše
aplikace nebude umět vypořádat. V&nbsp;takovém případě může po restartu aplikace
dojít k&nbsp;porušení jejího uživatelského rozhraní. Pokud k&nbsp;tomu
dojde, doporučujeme rozšíření nejprve
<a href="#odinstalace">odinstalovat</a>. Pokud bude chyba přetrvávat,
vyhledejte pomoc <a href="http://forum.czilla.cz/viewforum.php?f=23"
	title="Diskusní fórum pro podporu uživatelů Mozilla suite">ve fóru</a>.</p>

<p>V&nbsp;případě, kdy si nebudete vědět rady, se můžete zeptat ve
<a href="http://forum.czilla.cz/viewforum.php?f=23"
	title="Diskusní fórum pro podporu uživatelů Mozilla suite">fóru CZilla</a>
a&nbsp;jistě se vám brzy dostane uspokojivé pomoci.</p>

<?php
	$page->includeFooter();
?>
