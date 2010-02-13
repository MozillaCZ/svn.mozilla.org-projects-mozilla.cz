<?php
	$rootPath = '../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Bezpečnost Mozilly a odvozených prohlížečů';
	$page->headline = array('Bezpečnost Mozilly a odvozených prohlížečů','Představení bezpečnostní politiky Mozilla.org');

	$page->includeHeader();
?>


<h2 class="nice">Na prohlížeči záleží</h2>

<p>Webové prohlížeče nabízejí lidem přístup k ohromnému množství dat a
počítačových programů umístěných na webových stránkách. Přitom potřebují
usnadnit interakci mezi těmito webovými stránkami
a počítačem uživatele. Prohlížeče proto musí implementovat
takové bezpečnostní mechanismy, aby škodlivý obsah na webu
nemohl mít k počítači uživatele přístup.</p>

<p>Důležitost kvalitního zabezpečení počítače ukazuje řada nedávných
bezpečnostních problémů (známých jako &quot;download.ject&quot; nebo
&quot;scob&quot;), kdy byla zranitelnost Internet Exploreru využita ke skrytým
instalacím a spouštění škodlivých programů na počítačích, kde se tento
prohlížeč používá.</p>

<p>Aby byla ochrana na nejvyšší možné úrovni, musí prohlížeč obsahovat jak
kvalitní návrh zabezpečení, tak kvalitní bezpečnostní postupy. Žádný
prohlížeč nemůže poskytnout 100% ochranu, zrovna tak jako nemůže být 100%
účinná žádná sada zámků a klíčů od našich domovů. Ale návrh a provedení
prohlížeče může vytvořit obrovský rozdíl v úrovni ochrany uživatelů. Kromě
toho způsob řízení řešení softwarových problémů může výrazně ovlivnit pohodlí zákazníka.</p>


<h2 class="nice">Nejsou to žádná &quot;kouzla&quot;</h2>

<p>Účinné zabezpečení vyžaduje mnoho úrovní ochrany. Mimo jiné:</p>

<ul>
	<li>Návrh produktu (&quot;bezpečnostní architektura&quot;)</li>

	<li>Kvalitní provedení produktu (výskyt či absence chyb)</li>

	<li>Mechanismy na rozpoznání možných problémů (nalezení možných problémů
	dříve, než budou využity k poškození uživatelů)</li>

	<li>Rychlé reakce poté, co jsou problémy potvrzeny (vyřešit možné
	problémy dříve, než budou využity k poškození uživatelů)</li>

	<li>Včasné vytvoření a distribuce aktualizací</li>
</ul>


<h2 class="nice">Bezpečnostní architektura Mozilly</h2>

<p>Nedávná bezpečnostní selhání Internet Exploreru způsobila, že
experti (včetně United States Department of Homeland Security's
Computer Emergency Readiness Team) doporučili uživatelům, ať přestanou používat
Internet Explorer a přejdou na jiné prohlížeče. Mozilla Firefox a další
prohlížeče založené na Mozille používají zcela odlišnou bezpečnostní
architekturu než Internet Explorer. Proto Mozilla a odvozené
prohlížeče nejsou poznamenané řadou bezpečnostních problémů,
které postihují Internet Explorer. Více o chybách, které vedly
k doporučení přejít na jiný prohližeč, najdete na
<a href="http://www.kb.cert.org/vuls/id/713878">http://www.kb.cert.org/vuls/id/713878</a>
a
<a href="http://secunia.com/advisories/12048/">http://secunia.com/advisories/12048/</a>.
</p>

<p>Mozilla obsahuje několik úrovní ochrany. Když
jeden ochranný mechanismus selže, tak další mechanismus (nebo dva či tři) fungují
jako záchranná síť a zlepšují tak schopnost systému zmařit útoky.</p>

<p>Bezpečnostní výhody Mozilly a odvozených prohlížečů zahrnují:</p>

<ol>
	<li>Firefox a jiné prohlížeče založené na Mozille nedovolují webovým
	stránkám stahovat, instalovat nebo spouštět kód na počítači uživatele
	bez jeho souhlasu.</li>

	<li>Firefox a jiné prohlížeče založené na Mozille neoznačují obsah jako
	&quot;místní&quot;. Architektura s koncepcí &quot;místního&quot; obsahu
	dává takovému obsahu zvýšená bezpečnostní povolení a umožňuje
	lepší přístup do počítače uživatele. To znamená, že obsah, který je
	chybně označen jako lokální, má mnohem více možností škodit. Tento
	problém jsme viděli u nedávných bezpečnostních chyb Internet Exploreru, kdy
	byl na počítače uživatelů skrytě poslán škodlivý obsah, který se podvodně
	označil jako &quot;místní&quot; obsah pro Internet Explorer.
	Škodlivému obsahu byl poté přidělen rozšířený přístup k počítačům s Internet
	Explorerem. To bylo následně zneužito k instalaci programu, který
	zaznamenával stisky kláves včetně třeba čísel kreditních karet. Uživatelé
	Mozilly nebyli ohroženi. Podrobnosti najdete na <a
	href="http://www.kb.cert.org/vuls/id/713878">http://www.kb.cert.org/vuls/id/713878</a>.<br/>

	Je třeba upozornit na to, že takovýto přístup k bezpečnosti může
	vést k menšímu pohodlí uživatele. Všichni děláme podobná rozhodnutí v
	mnoha oblastech života. Například to, že potřebujeme klíče k otevření
	dveří našich domovů znamená, že všichni musíme mít klíče, ráno je najít
	a v průběhu dne se ujišťovat, že jsme je neztratili. Což není tak pohodlné,
	jako když dveře nezamkneme. Většina z nás kvůli bezpečnosti volí menší
	pohodlí a dveře zamyká. Mozilla a odvozené prohlížeče jsou správnou volbou
	pro uživatele, kteří chtějí lepší zabezpečení.</li>

	<li>Internet Explorer používá technologii známou jako ActiveX. Ta je,
	zejména v kombinaci s &quot;místní&quot; koncepcí popsanou výše, úrodnou
	půdou pro bezpečnostní chyby. Magazín Slate shrnuje problém s
	ActiveX	takto (celý článek najdete na adrese
	<a href="http://slate.msn.com/id/2103152">http://slate.msn.com/id/2103152</a>):

	<blockquote><p><em>
		Problém je, že hackeři pokračují v objevování a zneužívání
		bezpečnostních děr Exploreru. Mnoho z nich využívá systém ActiveX
		v Exploreru, který webovým stránkám dovoluje stahovat a instalovat
		software na počítače návštěvníků, někdy dokonce bez jejich vědomí. ActiveX byl
		určen pro zjednodušení vkládání nejnovějších interaktivních
		multimédií a dalších funkcí stránek, ale místo toho se stal
		nástrojem pro vkrádání spywaru do nic netušících počítačů.
	</em></p></blockquote>
	</li>

	<li>Mozilla a odvozené prohlížeče zachovávají oddělení aplikace od
	operačního systému. Prohlížecí funkce IE se stále více integrují do
	Windows; bezpečnostní problém prohlížeče proto může postihnout sdílené
	služby, nebo spoléhat na jiné části operačního systému. To komplikuje vytvoření
	efektivní vícevrstevné obranné strategie. Sbližování Internet Exploreru a operačního
	systému Windows poskytuje úrodnou půdu zlomyslným programátorům.</li>
</ol>


<h2 class="nice">Vedení projektu pro bezpečnost uživatele</h2>

<p>Jak je uvedeno výše, je prakticky nemožné poskytnout webový prohlížeč,
který je zcela zabezpečen proti všem možným útokům. Účinné zabezpečení
vyžaduje také úzce zaměřenou pozornost na včasnou identifikaci a účinné
řešení potenciálních problémů. Samolibost nebo &quot;běžný&quot; přístup
k bezpečnostním problémům nepřinášejí uživatelům užitek.</p>

<p>Objevování potenciálních bezpečnostních děr je složité a vyžaduje odborně zdatné
a pozorné lidi. Projekt Mozilla vybudoval komunitu lidí, kteří usilují o
počítačovou bezpečnost, a staví ochranu zákazníků a jejich dat nad
obchodní zájmy. Velmi si této komunity vážíme a aktivně podporujeme její účast.
Abychom povzbudili bezpečnostní experty k vylepšení produktů projektu Mozilla, poskytujeme
<a href="http://www.mozilla.org/press/mozilla-2004-08-02.html">finanční odměnu</a>
těm, kteří najdou a nahlásí potenciálně závažné bezpečnostní chyby. Tato
komunita napomáhá identifikaci možných problémů dříve, než mohou
být zneužity a poškodit uživatele.</p>

<p>Když je bezpečnostní díra identifikována a ověřena, bývá často možné u
produktů projektu Mozilla velmi rychle připravit řešení. Oprava problému v Mozille
 a odvozených prohlížečích bývá často snazší než jeho vlastní objevení. Pro prohlížeče,
které jsou silně integrované do systému, s nímž sdílí služby, může být vývoj oprav
složitější, protože oprava problému může ovlivnit aspekty operačního systému
závislé na prohlížeči. Řešení je třeba po jeho vytvoření otestovat. Poté musí být
zveřejněna nová verze programu a veřejnost povzbuzována k upgradu.</p>

<p>Tyto činnosti mohou být pro vývojáře softwaru velmi nepraktické. Jsou
časově náročné a rušivé. Vyžadují, aby byla ochrana uživatele nadřazena
pohodlnosti podnikání a předurčenému vydávání verzí.</p>

<p>V tomto ohledu ukázal projekt Mozilla svou sílu. Například nedávno jsme
dokončili celý proces do 36&nbsp;hodin, abychom se ujistili, že máme
připravenou opravu a aktualizované produkty, jakmile bude chyba zveřejněna.
Aktivně jsme o problému informovali uživatele a motivovali je k
okamžité aktualizaci.</p>

<p>Děláme to, protože nevěříme, že &quot;běžný&quot; přístup k
bezpečnosti je ten správný. Také jsme vytvořili
<a href="http://www.mozilla.org/projects/security/security-bugs-policy.html">systém kontrol</a> jako ochranu před samolibostí.</p>

<p>Skupinu expertů, kteří se starají o bezpečnost, netvoří pouze zaměstnanci
Mozilla Foundation. Na otevřeném projektu Mozilla se podílejí i experti
usilující o bezpečnost z hloubi srdce, protože chtějí mít prohlížeč, který
vyhovuje jejich bezpečnostním požadavkům. Příliš se neznepokojují
nepříjemnostmi a problémy týkajícími se vydávání opraveného softwaru, ale
naopak reprezentují názor uživatelů a pomáhají zajistit, že pro projekt
Mozilla zůstává ochrana uživatelů velkou prioritou.</p>


<h2 class="nice">Na prohlížeči opravdu záleží</h2>

<p>Nedávné bezpečnostní problémy postihující Internet Explorer objasňují,
jak jsou kvalitní bezpečnostní postupy na ochranu uživatelů rozhodující.</p>

<p><i>Jsou produkty projektu Mozilla perfektní?</i> Ne.</p>

<p><i>Usilujeme o bezpečnost?</i> Ano.</p>

<p><i>Jsou uživatelé Mozilly a odvozených prohlížečů vyvarováni řadě
bezpečnostních problémů, které postihují uživatele IE?</i> Ano, přečtěte si třeba
odkazy uvedené výše.</p>


<h2 class="nice">Chcete přejít?</h2>

<p>Zkuste <a href="/produkty/firefox/">Mozilla Firefox</a>
&ndash; náš nejnovější webový prohlížeč. Nachází se v závěrečných fázích betaverze a
již je používán miliony lidí.</p>

<p>Nebo vyzkoušejte <a href="/produkty/suite/">Mozillu</a> &ndash;
léty vyzkoušený produkt obsahující webový prohlížeč a e-mailový klient.</p>

<p>Užitečné rady pro přechod z Internet Exploreru na Mozilla Firefox najdete
na:<br />
<a href="http://www.mozilla.org/products/firefox/switch.html">http://www.mozilla.org/products/firefox/switch.html</a>
</p>

<hr />

<p><small>Dokument je překladem
<a href="http://www.mozilla.org/security/security-announcement.html">Security and Mozilla browsers</a>
(Mozilla.org, verze z 8. srpna 2004). Dokument do češtiny přeložil
<a href="/czilla/lide.html#kdo-je-PT">Petr Tomeš</a> a je na tomto serveru uveden se souhlasem autorů.
</small></p>

<p><small>17. 8. 2004</small></p>

<?php
	$page->includeFooter();
?>
