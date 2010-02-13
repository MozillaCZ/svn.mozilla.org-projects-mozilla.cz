<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Instalace rozšíření do Thunderbirdu';
	$page->headline = array('Instalace rozšíření','Návod jak nainstalovat nové rozšíření do Thunderbirdu');

	$page->setKeywords('podpora, instalace, rozšíření, nápověda, pomoc, návod, mozilla, thunderbird, pošťák');
	$page->setDescription('Návod jak nainstalovat nové rozšíření do pošťáka Mozilla Thunderbird');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links'); 
	$page->addSideBox('tips','thunderbird');

	$page->includeHeader();
	$page->includeFile('tips');
?>

	<div id="navigation">
		<a href="#zdroje">Kde sehnat rozšíření</a> &middot;
		<a href="#instalace">Instalace</a> &middot;
		<a href="#odinstalace-update">Odinstalace a&nbsp;aktualizace</a> &middot;
		<a href="#problemy">Řešení problémů</a>
	</div>
	<p>
		Mozilla Thunderbird je bezpečný a&nbsp;spolehlivý e-mailový klient, který
		nabízí vše potřebné k&nbsp;pohodlnému a&nbsp;bezstarostnému vyřizování vaší
		e-mailové komunikace a&nbsp;čtení <acronym title=
		"Really Simple Syndication">RSS</acronym>. Díky jeho flexibilní
		architektuře jej můžete snadno rozšířit o&nbsp;mnoho dodatečných funkcí jako
		např. <a href="/doplnky/rozsireni/enigmail/">podpora šifrovaných
		zpráv</a> či <a href="/doplnky/rozsireni/mozilla-kalendar/">kalendář</a>.
		Za těmito funkcemi stojí tzv. <a href="/doplnky/rozsireni/">rozšíření</a>
		(<span lang="en" xml:lang="en">extensions</span>).
	</p>
	<h2 id="zdroje">
		Kde sehnat rozšíření
	</h2>
	<p>
		Nejprve je třeba najít webovou stránku, kde bychom rozšíření sehnali.
		Velký archiv rozšíření nabízí server
		<a href="https://addons.mozilla.org/extensions/?application=thunderbird">Mozilla
		Update</a>, rozšíření v&nbsp;češtině najdeme v&nbsp;<a
		href="/doplnky/rozsireni/">přehledu lokalizovaných rozšíření</a>. My si
		vybereme první jmenovaný zdroj.
	</p>
	<p>
		Chceme-li projít dostupná rozšíření a&nbsp;vybrat si, která nainstalujeme,
		použijeme
		<a href="https://addons.mozilla.org/extensions/?application=thunderbird">přehled
		dostupných rozšíření</a>. Pro hledání předem známého rozšíření můžeme
		použít vyhledávací formulář v&nbsp;pravém horním rohu stránky. V&nbsp;roletce
		vybereme položku <span lang="en" xml:lang="en">extensions</span>, do
		vyhledávacího políčka vložíme hledaný text a&nbsp;stiskneme <span lang="en"
		xml:lang="en">Go</span>. Z&nbsp;výsledků vyhledávání vybereme rozšíření, která
		potřebujeme. (Pokud je výsledků více, můžeme v&nbsp;moderních prohlížečích
		s&nbsp;výhodou využít třeba
		<a href="/podpora/firefox/prohlizeni-v-panelech.html">panely</a>.)
	</p>
	<div class="img-center"><div class="img-c" style="width:275px">
		<img src="images/tb-umo-formular.png"
		title="Vyhledávací formulář na Mozilla Update" alt="Vyhledávací formulář"
		height="92" width="275" />
	</div></div>
	<p>
		Ať už první, či druhou cestou, dostaneme se vždy nakonec na stránku
		daného rozšíření. Na obrázku (viz výše) jsme hledali slovo
		"enigmail" a&nbsp;dostali
		jsme se tak na stránku rozšíření <a
		href="https://addons.mozilla.org/extensions/moreinfo.php?application=thunderbird&amp;version=1.0&amp;id=71">
		Enigmail</a>. Tato stránka obsahuje základní informace o&nbsp;rozšíření, od
		jeho popisu až po komentáře uživatelů. Nás ale hlavně zajímá odkaz na
		instalaci rozšíření, který se nachází ve žluto-zeleném rámečku a&nbsp;je
		označen slovy <span lang="en" xml:lang="en">Install now</span>.
	</p>
	<div class="img-center"><div class="img-c" style="width:289px">
		<img src="images/tb-umo-installnow.png"
		title="Odkaz na instalaci rozšíření" alt="Odkaz na instalaci" height="95"
			 width="289" />
	</div></div>
	<p>
		Na výše uvedený odkaz klepneme pravým tlačítkem a&nbsp;zvolíme <span class=
		"nabidka">Uložit odkaz jako...</span> V&nbsp;následující dialogové obrazovce
		zvolíme, kam chceme rozšíření uložit, potvrdíme a&nbsp;začneme stahování. To
		může trvat i&nbsp;pár minut v&nbsp;závislosti na rychlosti připojení. Když máme
		soubor stažený a&nbsp;uložený, můžeme přejít k&nbsp;instalaci.
	</p>
	<h2 id="instalace">
		Instalace
	</h2>
	<p>
		Thunderbirdu musíme nejprve říci, jaké rozšíření chceme nainstalovat. To
		uděláme tak, že klepneme v&nbsp;hlavní nabídce na položku <span
		class="nabidka">Nástroje</span> &gt; <span class="nabidka">Správce
		rozšíření</span> a&nbsp;v následujícím okně klepneme na tlačítko
		 <span class="nabidka">Instalovat</span>. Thunderbird se nás poté
		 zeptá, jaké rozšíření chceme nainstalovat. My vyhledáme příslušný
		 stažený soubor a&nbsp;potvrdíme zadání.
	</p>
	<p>
		Objeví se dialogové okno <span class="nabidka">Instalace software</span>,
		které se nás ptá, zda chceme rozšíření skutečně nainstalovat. Toto okno
		má za účel chránit nás před zákeřným software třetích stran - proto
		pokračujeme pouze tehdy, pokud máme jistotu o&nbsp;tom, co instalujeme a&nbsp;z
		jakého je to zdroje.
	</p>
	<div class="img-center"><div class="img-c" style="width:203px">
		<a href="images/tb-em-dotaz.png" class="zoom"><img
		src="images/tb-em-dotaz-m.png" alt="Dotaz" width="203" height="169"
			 title="Dotaz na instalaci rozšíření" /></a>
	</div></div>
	<p>
		Pro instalaci daného rozšíření musíme klepnout na tlačítko
		 <span class="nabidka">Instalovat nyní</span>. Když tak učiníme, tuto
		 obrazovku nahradí Správce rozšíření, který zobrazuje průběh instalace
		 a&nbsp;po jejím úspěšném skončení bude vypadat podobně jako zde:
	</p>
	<div class="img-center"><div class="img-c" style="width:260px">
		<a href="images/tb-restart.png" class="zoom"><img
		src="images/tb-restart-m.png" alt="Před restartem" width="260" height="180"
		title="Správce rozšíření před restartem" /></a>
	</div></div>
	<p>
		Pro dokončení instalace rozšíření je třeba restartovat Thunderbird.
		Zavřeme tedy všechna okna aplikace, včetně správce rozšíření, a&nbsp;spustíme
		jej znovu. Když nyní otevřeme pomocí nabídky <span
		class="nabidka">Nástroje</span> Správce rozšíření, měli bychom vidět
		následující obrázek, ujišťující nás o&nbsp;tom, že instalace proběhla zcela
		v&nbsp;pořádku. Pokud se instalace nepodařila, pokračujte
		k&nbsp;<a href="#problemy">Řešení problémů</a>.
	</p>
	<div class="img-center"><div class="img-c" style="width:260px">
		<a href="images/tb-porestartu.png" class="zoom"><img
		src="images/tb-porestartu-m.png" alt="Po restartu" width="260" height="181"
		title="Správce rozšíření po restartu" /></a>
	</div></div>
	<h2 id="odinstalace-update">
		Odinstalace a&nbsp;aktualizace
	</h2>
	<p id="odinstalace">
		Rozšíření je samozřejmě možné z&nbsp;aplikace odebrat. To se provádí klepnutím
		na tlačítko <span class="nabidka">Odinstalovat</span> ve Správci
		rozšíření a&nbsp;pro dokončení je třeba restartovat aplikaci.
	</p>
	<p id="aktualizace">
		Správce rozšíření lze použít i&nbsp;pro aktualizaci rozšíření. Ve Správci
		rozšíření vyberte rozšíření ze seznamu, klepněte na tlačítko
		 <span class="nabidka">Aktualizovat</span> a&nbsp;Správce rozšíření se
		 pokusí najít novou verzi daného rozšíření. Pokud ji nalezne, zobrazí
		 dialogové okno, ve kterém vám nabídne instalaci. Vyberte <span
		 class="nabidka">Instalovat nyní</span> a&nbsp;nezapomeňte, že rozšíření bude
		 aktualizováno až po restartu aplikace.
	</p>
	<h2 id="problemy">
		Řešení problémů
	</h2>
	<p>
		Ačkoliv to není časté, také při instalaci rozšíření se můžeme setkat
		s&nbsp;problémy. Následující řádky se pokusí nastínit řešení těch
		nejčastějších.
	</p>
	<h3 id="instalace-zakazana">
		Nekompatibilní rozšíření
	</h3>
	<p>
		Pokud vám Mozilla Thunderbird při pokusu o&nbsp;instalaci rozšíření hlásí, že
		rozšíření není kompatibilní s&nbsp;vaší verzí aplikace, nezoufejte. Existují
		dvě příčiny a&nbsp;také dvě jednoduchá řešení.
	</p>
	<dl>
		<dt>
		Vaše verze aplikace již není podporována.
		</dt>
		<dd>
		Řešením je aktualizace aplikace na novější verzi. Tento postup můžeme
		jedině doporučit, neboť u&nbsp;produktů Mozilla Foundation více než kde
		jinde platí, že nový = lepší.
		</dd>
		<dt>
		Vaše verze aplikace ještě není podporována.
		</dt>
		<dd>
		Řešením je vyčkání, než autor své rozšíření vaší aplikaci přizpůsobí -
		většinou se nejedná o&nbsp;příliš dlouhou dobu.
		</dd>
	</dl>
	<h3>
		Chyby po restartu aplikace
	</h3>
	<p>
		Je možné, že se do některých rozšíření vloudila chyba, se kterou se vaše
		aplikace nebude umět vypořádat. V&nbsp;takovém případě může po restartu
		aplikace dojít k&nbsp;porušení jejího uživatelského rozhraní. Pokud k&nbsp;tomu
		dojde, doporučujeme rozšíření nejprve
		<a href="#odinstalace">odinstalovat</a>. Pokud bude chyba přetrvávat, vyhledejte
		pomoc <a href="http://forum.czilla.cz/viewforum.php?f=21">ve fóru</a>.
	</p>
	<p>
		Pokud by se stalo, že se aplikace ani nespustí, budete ji muset spustit
		v&nbsp;nouzovém režimu (<span lang="en" xml:lang="en">safe mode</span>). Tento
		najdete buď jako ikonku v&nbsp;nabídce <span class="nabidka">Start</span> &gt;
		<span class="nabidka">Programy</span> &gt; <span class="nabidka">Mozilla
		Thunderbird</span>, nebo jej spustíte tak, že se v&nbsp;příkazové řádce
		přepnete do adresáře, kde máte Firefox nainstalován, a&nbsp;napíšete
		<code>thunderbird -safe-mode</code>. Nezapomeňte všechna okna Thunderbirdu 
		před spouštěním v&nbsp;nouzovém režimu zavřít.
	</p>
	<p>
		V&nbsp;případě, kdy si nebudete vědět rady, se můžete zeptat ve <a
		href="http://forum.czilla.cz/viewforum.php?f=21">fóru CZilla</a> a&nbsp;jistě se
		vám brzy dostane uspokojivé pomoci.
	</p>

<?php
	$page->includeFooter();
?>
