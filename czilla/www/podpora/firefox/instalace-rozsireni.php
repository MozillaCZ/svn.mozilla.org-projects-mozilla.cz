<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Instalace rozšíření do Firefoxu';
	$page->headline = array('Instalace rozšíření','Návod jak nainstalovat nové rozšíření do Firefoxu');

	$page->setKeywords('podpora, instalace, rozšíření, nápověda, pomoc, návod, mozilla, firefox, prohlížeč');
	$page->setDescription('Návod jak nainstalovat nové rozšíření do prohlížeč Mozilla Firefox');

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
	<a href="#odinstalace-update">Odinstalace a&nbsp;aktualizace</a>
	&middot;
	<a href="#problemy">Řešení problémů</a>
</div>

<p><a href="/produkty/firefox/">Mozilla Firefox</a>
je rychlý, bezpečný a&nbsp;spolehlivý prohlížeč, který
nabízí vše potřebné k&nbsp;jednoduchému a&nbsp;pohodlnému prohlížení
internetových stránek. Díky jeho flexibilní architektuře jej můžete snadno
rozšířit o&nbsp;mnoho dodatečných funkcí jako např.
<a href="/doplnky/rozsireni/fireftp/"><abbr title="File Transfer Protocol" lang="en">FTP</abbr>
	klient</a>
či předpověď
<a href="/doplnky/rozsireni/forecastfox/">počasí pro váš region</a>.
Za těmito funkcemi stojí tzv.
<a href="/doplnky/rozsireni/">rozšíření</a>
(<span lang="en">extensions</span>). Jak na to?</p>


<h2 id="zdroje">Kde sehnat rozšíření</h2>

<p>Nejprve je třeba najít webovou stránku, kde bychom rozšíření sehnali.
Velký archiv rozšíření nabízí server
<a href="https://addons.mozilla.org/firefox/extensions/"
	hreflang="en" lang="en">Firefox Addons</a>,
rozšíření v&nbsp;češtině najdeme
v&nbsp;<a href="/doplnky/rozsireni/">přehledu lokalizovaných rozšíření</a>.
My si vybereme první jmenovaný zdroj.</p>

<p>Chceme-li projít dostupná rozšíření a&nbsp;vybrat si, která
nainstalujeme, použijeme
<a href="https://addons.mozilla.org/firefox/extensions/"
	hreflang="en">přehled dostupných rozšíření</a>.

Pro hledání předem známého rozšíření můžeme použít vyhledávací formulář
v&nbsp;pravém horním rohu stránky. V&nbsp;roletce vybereme položku <span
lang="en">extensions</span>, do vyhledávacího políčka vložíme hledaný text
a&nbsp;stiskneme <span lang="en">Go</span>. Z&nbsp;výsledků vyhledávání vybereme
rozšíření, která potřebujeme. (Pokud je výsledků více, můžeme s&nbsp;výhodou
využít třeba
<a href="/podpora/firefox/prohlizeni-v-panelech.html">panely</a>.)</p>

<div class="img-center"><div class="img-c" style="width:275px">
	<img src="images/umo-formular.png"
		title="Vyhledávací formulář na Mozilla Update"
		alt="Vyhledávací formulář"
		height="92" width="275" />
</div></div>

<p>Ať už první, či druhou cestou, dostaneme se vždy nakonec na stránku
daného rozšíření. Na obrázku (viz výše) jsme hledali slovo
&quot;<abbr title="File Transfer Protocol" lang="en">ftp</abbr>&quot;
a&nbsp;dostali jsme se tak na stránku rozšíření
<a href="https://addons.mozilla.org/firefox/684/"
	hreflang="en" lang="en">FireFTP</a>.
Tato stránka obsahuje základní informace o&nbsp;rozšíření, od jeho popisu až
po komentáře uživatelů. Nás ale hlavně zajímá odkaz na instalaci rozšíření,
který se nachází ve žluto-zeleném rámečku a&nbsp;je označen slovy <span
lang="en">Install now</span>.</p>

<div class="img-center"><div class="img-c" style="width:289px"><img
	src="images/umo-installnow.png"
	title="Odkaz na instalaci rozšíření"
	alt="Odkaz na instalaci"
	height="95" width="289" />
</div></div>

<p>Zde si výklad rozdělíme na <a href="#z-webu">instalaci z&nbsp;webu</a>
a&nbsp;<a href="#lokalne">instalaci z&nbsp;lokálního umístění</a>. Instalace
z&nbsp;webu je jednodušší, neboť stačí klepnout na příslušný odkaz,
souhlasit s&nbsp;instalací a&nbsp;rozšíření se již instaluje. Pokud není
z&nbsp;jakéhokoliv důvodu tuto metodu možné použít, je třeba sáhnout po
metodě druhé.</p>


<h2 id="z-webu">Instalace z&nbsp;webu</h2>

<p>Instalaci z&nbsp;webu zahájíme tak, že klepneme levým tlačítkem myši na
odkaz pro instalaci rozšíření (viz výše). Objeví se dialogové okno <span
class="nabidka">Instalace software</span>, které se nás ptá, zda chceme
rozšíření skutečně nainstalovat. Toto okno nás má chránit před zákeřným
software třetích stran - proto pokračujeme pouze tehdy, pokud máme jistotu
o&nbsp;tom, co instalujeme a&nbsp;z jakého je to zdroje.</p>

<div class="img-center"><div class="img-c" style="width:250px">
	<a href="images/em-dotaz.png" class="zoom"><img
		src="images/em-dotaz-m.png"
		alt="Dotaz"
		width="250" height="205"
		title="Dotaz na instalaci rozšíření" /></a>
</div></div>

<p>Objeví-li se v&nbsp;horní části obrazovky žlutý informační proužek
oznamující zablokování instalace rozšíření, přečteme si co dělat, když je
<a href="#instalace-zakazana">instalace zakázána</a>. Ale nyní pokračujme podle
plánu.</p>

<p>Pro instalaci daného rozšíření musíme klepnout na tlačítko <span
class="nabidka">Instalovat nyní</span>. Když tak učiníme, tuto obrazovku
nahradí Správce rozšíření, který zobrazuje průběh instalace a&nbsp;po jejím
úspěšném skončení bude vypadat podobně jako zde:</p>

<div class="img-center"><div class="img-c" style="width:250px">
	<a href="images/em-restart.png" class="zoom"><img
		src="images/em-restart-m.png"
		alt="Před restartem"
		width="250" height="188"
		title="Správce rozšíření před restartem" /></a>
</div></div>

<p>Pro dokončení instalace rozšíření je třeba restartovat Firefox. Zavřeme
tedy všechna okna aplikace, včetně správce rozšíření, a&nbsp;spustíme ji
znovu. Když nyní otevřeme pomocí nabídky <span
class="nabidka">Nástroje</span> Správce rozšíření, měli bychom vidět
následující obrázek, ujišťující nás o&nbsp;tom, že instalace proběhla zcela
v&nbsp;pořádku. Pokud se instalace nepodařila, pokračujte k&nbsp;<a
href="#problemy">Řešení problémů</a>.</p>

<div class="img-center"><div class="img-c" style="width:250px">
	<a href="images/em-porestartu.png" class="zoom"><img
		src="images/em-porestartu-m.png"
		alt="Po restartu"
		width="250" height="188"
		title="Správce rozšíření po restartu" /></a>
</div></div>


<h2 id="lokalne">Instalace z&nbsp;lokálního umístění</h2>

<p>Instalace z&nbsp;lokálního umístění se provádí zcela stejně jako
instalace z&nbsp;webu, pouze jí navíc předchází ještě dva kroky. Prvním
krokem je stažení souboru rozšíření do nějakého adresáře, např. pevný disk.
Soubory rozšíření mají koncovku <em>XPI</em> a&nbsp;podle toho je také
poznáme.</p>

<p>Druhým krokem je výběr souboru k&nbsp;instalaci. To lze udělat dvojím
způsobem:</p>

<ul>
	<li>přetažením ikony souboru za pomoci myši do okna aplikace</li>

	<li>použitím nabídky <span class="nabidka">Soubor</span> &gt; <span
	class="nabidka">Otevřít Soubor</span>, kde v&nbsp;následujícím okně
	nalezneme soubor a&nbsp;potvrdíme jeho instalaci.</li>
</ul>

<p>Od tohoto bodu je instalace rozšíření identická s&nbsp;<a
href="#z-webu">instalací z&nbsp;webu</a>, a&nbsp;proto můžeme pokračovat
podle ní.</p>


<h2 id="odinstalace-update">Odinstalace a&nbsp;aktualizace</h2>

<p id="odinstalace">Rozšíření je samozřejmě možné z&nbsp;aplikace odebrat.
To se provádí klepnutím na tlačítko <span
class="nabidka">Odinstalovat</span> ve Správci rozšíření a&nbsp;pro její
dokončení je třeba restartovat aplikaci.</p>

<p id="aktualizace">Správce rozšíření lze použít i&nbsp;pro aktualizaci
rozšíření. Ve Správci rozšíření vyberte rozšíření ze seznamu, klepněte na
tlačítko <span class="nabidka">Aktualizovat</span> a&nbsp;Správce rozšíření
se pokusí najít novou verzi daného rozšíření. Pokud ji nalezne, zobrazí
následující okno, ve kterém vám nabídne instalaci.</p>

<div class="img-center"><div class="img-c" style="width:250px">
	<a href="images/em-update.png" class="zoom"><img
		src="images/em-update-m.png"
		alt="Aktualizace rozšíření"
		width="250" height="199"
		title="Okno aktualizace rozšíření" /></a>
</div></div>

<p>Vyberte <span class="nabidka">Instalovat nyní</span> a&nbsp;nezapomeňte,
že rozšíření bude aktualizováno až po restartu aplikace.</p>


<h2 id="problemy">Řešení problémů</h2>

<p>Ačkoliv to není časté, také při instalaci rozšíření se můžeme setkat
s&nbsp;problémy. Následující řádky se pokusí nastínit řešení těch
nejčastějších.</p>

<h3 id="instalace-zakazana">Instalace není povolena</h3>

<p>Mozilla Firefox z&nbsp;důvodu bezpečnosti ve výchozím nastavení
nedovoluje instalaci z&nbsp;jiných serverů než z&nbsp;těch, které Mozilla
Foundation sama provozuje a&nbsp;tudíž jsou důvěryhodné. Pokud tedy někdy
uvidíte v&nbsp;horní části webové stránky následující informační lištu, pak
se pokoušíte o&nbsp;instalaci z&nbsp;nedůvěryhodného zdroje.</p>

<div class="img-center"><div class="img-c" style="width:350px">
	<a href="images/lista.png" class="zoom"><img
		src="images/lista-m.png"
		alt="Informační lišta"
		width="350" height="15"
		title="Informační lišta, oznamující zakázanou instalaci" /></a>
</div></div>

<p>Takto vás Mozilla Firefox chrání před zákeřným software třetích stran,
který by mohl váš počítač například zavirovat nebo o&nbsp;vás odesílat
nežádoucí informace.</p>

<p>Pokud chcete instalaci z&nbsp;daného serveru přesto povolit, klepněte na
<span class="nabidka">Upravit nastavení</span> a&nbsp;v následujícím okně
zvolte <span class="nabidka">Povolit</span>. Nyní spusťte instalaci znovu
a&nbsp;rozšíření nainstalujte.</p>


<h3>Nekompatibilní rozšíření</h3>

<p>Pokud vám Mozilla Firefox při pokusu o&nbsp;instalaci rozšíření hlásí, že
rozšíření není kompatibilní s&nbsp;vaší verzí aplikace, nezoufejte. Existují
dvě příčiny a&nbsp;také dvě jednoduchá řešení.</p>

<dl>
	<dt>Vaše verze aplikace již není podporována.</dt>

	<dd>Řešením je aktualizace aplikace na novější verzi. Tento postup
	můžeme jedině doporučit, neboť u&nbsp;produktů Mozilla Foundation více
	než kde jinde platí, že nový =&nbsp;lepší.</dd>

	<dt>Vaše verze aplikace ještě není podporována.</dt>

	<dd>Řešením je vyčkání, než autor své rozšíření vaší aplikaci přizpůsobí
	&ndash; většinou se nejedná o&nbsp;příliš dlouhou dobu.</dd>
</dl>


<h3>Chyby po restartu aplikace </h3>

<p>Je možné, že se do některých rozšíření vloudila chyba, se kterou se vaše
aplikace nebude umět vypořádat. V takovém případě může po restartu aplikace
dojít k&nbsp;porušení jejího uživatelského rozhraní. Pokud k&nbsp;tomu
dojde, doporučujeme rozšíření nejprve
<a href="#odinstalace">odinstalovat</a>. Pokud bude chyba přetrvávat,
vyhledejte pomoc <a href="http://forum.czilla.cz/viewforum.php?f=19">ve
fóru</a>.</p>

<p>Pokud by se stalo, že se aplikace ani nespustí, budete ji muset spustit
v&nbsp;nouzovém režimu (<span lang="en">safe mode</span>). Tento najdete buď
jako ikonku v&nbsp;nabídce <span class="nabidka">Start</span> &gt; <span
class="nabidka">Programy</span> &gt; <span class="nabidka">Mozilla
Firefox</span>, nebo jej spustíte tak, že se v&nbsp;příkazové řádce přepnete
do adresáře, kde máte Firefox nainstalován, a&nbsp;napíšete <code>firefox
-safe-mode</code>. Nezapomeňte všechna okna Firefoxu před spouštěním 
v&nbsp;nouzovém režimu zavřít.</p>

<p>V&nbsp;případě, kdy si nebudete vědět rady, se můžete zeptat ve
<a href="http://forum.czilla.cz/viewforum.php?f=19">fóru CZilla</a>
a&nbsp;jistě se vám brzy dostane uspokojivé pomoci.</p>

<?php
	$page->includeFooter();
?>
