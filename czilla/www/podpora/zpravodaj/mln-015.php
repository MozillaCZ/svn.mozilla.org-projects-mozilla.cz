<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Zpravodaj Mozilla Links - 15. číslo';
	$page->headline = array('Zpravodaj Mozilla Links','15. číslo (16. 3. 2004 / 28. 3. 2004)');

	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');

	$page->includeHeader(); 
?>

<h2 id="content" class="nice">Obsah</h2>
<ul>
	<li><a href="#ml.0">Úvod</a></li>
	<li><a href="#ml.1">Vylepšení Mozilly</a>

	<ul>
		<li><a href="#ml.11">Rozšíření: Mozilla Kalendář</a></li>
		<li><a href="#ml.12">Tip zpravodaje Mozilla Links: Publikování a přihlašování do kalendářů (přes iCalX.com)</a></li>
		<li><a href="#ml.13">Supertip zpravodaje Mozilla Links: Změňte oznamovací zvuk Kalendáře</a></li>
	</ul>
	</li>

	<li><a href="#ml.2">Novinky</a>

	<ul>
		<li><a href="#ml.21">Mozilla Firefox přidává podporu pro přenos nastavení z jiných prohlížečů</a></li>
		<li><a href="#ml.22">Testovací verze Mozilla Thunderbirdu s instalátorem pro Windows</a></li>
		<li><a href="#ml.23">NewMobileComputing přináší rozhovor s vedoucími projektu Minimo</a></li>
		<li><a href="#ml.24">RUS-CERT kritizuje bezpečnostní politiku Mozilly</a></li>
		<li><a href="#ml.25">Americký úřad pro patenty a ochranné známky zrušil platnost patentu firmy Eolas na pluginy v prohlížečích</a></li>
	</ul>
	</li>
	<li><a href="#ml.3">Mozilla pod povrchem</a></li>
	<li><a href="#ml.4">Projekty pro Mozillu</a>
	<ul>
		<li><a href="#ml.41">Projekt týdne: CuteMenus</a></li>
		<li><a href="#ml.42">Zprávy o samostatných projektech</a>
		<ul>

			<li><a href="#ml.421">mozdev.org</a></li>
			<li><a href="#ml.422">Googlebar 0.8</a></li>
			<li><a href="#ml.423">Firebird Help 1.0.1</a></li>
			<li><a href="#ml.424">Dictionary Search 0.4</a></li>
			<li><a href="#ml.425">Mnenhy 0.5.1</a></li>
			<li><a href="#ml.426">Metagrams Toolbar pro Mozillu 0.8</a></li>
			<li><a href="#ml.427">cuneAform 0.2.6</a></li>
		</ul>
		</li>
	</ul>
	</li>
	<li><a href="#ml.5">Anketa zpravodaje Mozilla Links</a>
	<ul>
		<li><a href="#ml.51">Vyhodnocení ankety z minulého čísla</a></li>
		<li><a href="#ml.52">Nová anketa: Kterého správce osobních informací (PIM) používáte?</a></li>
	</ul>
	</li>
	<li><a href="#ml.6">Reklama</a></li>
	<li><a href="#ml.7">Kontaktní informace</a></li>
</ul>

<h2 id="ml.0" class="nice">Úvod</h2>
<p>Vítejte zpět u zpravodaje Mozilla Links!</p>
<p>Jistě znáte balík aplikací Mozilla i samostatné aplikace Mozilla Firefox (prohlížeč), Mozilla Thunderbird (poštovní klient).</p>
<p>Dalšími významnými aplikacemi jsou Editor (Composer), Kalendář (Calendar), Chatzilla a prohlížeče využívající Gecko (součást Mozilly, která převádí <abbr title="HyperText Markup Language">HTML</abbr> soubory na grafické dokumenty) - Camino (s rozhraním MacOS), K-Meleon (s rozhraním Windows) a Galeon (s Linuxovým rozhraním Gnome).</p>
<p>V tomto čísle se zabýváme Mozilla Kalendářem (Mozilla Calendar). Tento plně vybavený správce osobních informací (<abbr title="Personal Information Manager">PIM</abbr>) je založen na stejné technologii a kvalitě očekávané od produktů Mozilly.</p>
<p>Děkujeme Vám za přízeň. Své komentáře posílejte prosím na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>.</p>
<address>Percy Cabello, Mozilla Links</address>
<h2 id="ml.1" class="nice">Vylepšení Mozilly</h2>
<h3 id="ml.11">Rozšíření: Mozilla Kalendář</h3>
<p><em>(vyvíjí Mostafah Hosseini a další)</em></p>
<p>Mozilla Kalendář dotahuje své doplňky do extrémů. Kalendář je kompletní program pro správu osobních informací (<abbr title="Personal Information Manager">PIM</abbr>),
který umožňuje jednoduchou správu a plánování schůzek a úkolů.</p>
<p>Schůzky (nazývané události) jsou organizovány v kalendáři, takže mohou být zobrazeny podle dnů, týdnů a měsíců. Pro každou událost
zadáváte jméno, místo konání, začátek, konec, čas, upozornění, důležitost (předběžné, nutné, zrušené), kategorii a soubor, do kterého chcete schůzku zálohovat.</p>
<p>S Kalendářem můžete ovládat několik kalendářů najednou, což se rychle projeví ve vaší výkonnosti. Uživatelé mohou mít jeden osobní kalendář, další pro obchodní nebo pracovní schůzky, jiný pro plánování dovolené a pro mnohé další. Přihlašte se do kalendářů svých přátel nebo příbuzných, sdílejte je s nimi a publikujte.</p>
<p>Několik webových stránek provozuje uživatelské kalendáře (např. <a href="http://icalshare.com/">icalshare.com</a>, <a href="http://apple.com/">apple.com</a> a <a href="http://www.mozilla.org/">mozilla.org</a>). Nabídka je široká: od epizod seriálu South Park přes politické události na Kubě až po dovolenou v Singapuru.
Máte velkou šanci, že kalendář, který potřebujete, už existuje a je připraven na příspěvky.</p>

<p>Kalendář umí importovat soubory programů iCal (OS X), Outlook (oddělené
čárkou) a vCalendar a exportovat je do těchto formátů a navíc do
<abbr title="HyperText Markup Language">HTML</abbr>.</p>

<p>Kalendář je dostupný jako
<a href="http://www.mozilla.org/projects/calendar/download.html">rozšíření</a>
pro balík aplikací Mozilla, Firefox a Thunderbird.</p>

<p>Sunbird, samostatná verze Kalendáře, funguje také v prostředí OEone.</p>

<ul><li>Knihovny kalendářů<ul><li><a href="http://www.mozilla.org/projects/calendar/holidays.html">http://www.mozilla.org/projects/calendar/holidays.html</a></li><li><a href="http://www.icalshare.com/">http://www.icalshare.com/</a></li><li><a href="http://www.apple.com/ical/library/">http://www.apple.com/ical/library/</a></li></ul></li><li><a href="http://www.mozilla.org/projects/calendar/skins.html">Témata vzhledu</a></li><li><a href="http://www.mozilla.org/projects/calendar/translations.html">Lokalizace Kalendáře Mozilla</a></li></ul>
<h3 id="ml.12">Tip zpravodaje Mozilla Links: Publikování a přihlašování do kalendářů (přes iCalX.com)</h3>
<p><em>(přispěl Percy Cabello)</em></p>
<p>Tento tip předpokládá, že máte vytvořený účet na
<a href="http://www.icalx.com/">iCalX.com</a>. Postup je stejný i u podobných <abbr title="Web Distributed Authoring and Versioning">WebDAV</abbr> serverů.</p>
<p><strong>Sdílení kalendáře:</strong></p>
<ul>
<li>Spusťte Kalendář. V prohlížeči Firefox jej najdete v nabídce <tt>Nástroje (Tools)</tt>,
v balíku aplikací Mozilla je v nabídce <tt>Okno (Window)</tt>.</li>
<li>V nabídce <tt>Úpravy (Edit)</tt> vyberte <tt>Předvolby... (Preferences...)</tt>.</li>
<li>Na stránce <tt>Publikování (Publishing)</tt> zadejte <tt>Jméno výchozího vzdáleného souboru (Default Remote Filename)</tt>: <kbd>http://icalx.com/private/ &#060;uzivatelske_jmeno&#062;/&#060;nazev_souboru&#062;.ics</kbd></li>
<li>Chcete-li kalendář sdílet, zadejte: <kbd>http://icalx.com/public/ &#060;uzivatelske_jmeno&#062;/&#060;nazev_souboru&#062;.ics</kbd></li>
<li>Zadejte své přihlašovací údaje (přihlašovací jméno a heslo) k účtu na iCalX.com.</li>
<li>Zavřete okno <tt>Volby Kalendáře (Calendar Options)</tt>.</li>
<li>Pro publikování určité události vyberte <tt>Publikovat vybrané události (Publish Selected Events)</tt> v nabídce <tt>Nástroje (Tools)</tt>. Pro publikování celého kalendáře se přepněte do panelu <tt>Kalendáře (Calendars)</tt>
v hlavním okně, klikněte pravým tlačítkem na kalendář, který chcete publikovat
a vyberte <tt>Publikovat celý kalendář (Publish Entire Calendar)</tt>.</li>
<li>Po publikování Kalendář nezobrazí žádné chybové nebo potvrzující okno,
takže bude třeba zkontrolovat váš účet na iCalX.com, abyste se ujistili,
že váš kalendář byl publikován.</li>
</ul>
<p><strong>Přihlášení do kalendáře:</strong></p>
<ul>
<li>V nabídce <tt>Nástroje (Tools)</tt> vyberte <tt>Přihlásit se ke vzdálenému kalendáři... (Subscribe to Remote Calendar...)</tt>.</li>
<li>Zadejte název nového kalendáře</li>
<li>Zadejte umístění sdíleného kalendáře. Například pro přihlášení do kalendáře vytvořeného v předchozím kroku, zadejte: <kbd>http://icalx.com/private/&#060;uzivatelske_jmeno&#062;/&#060;nazev_souboru&#062;.ics</kbd></li>
<li>Pokud byl soubor vytvořen v soukromé (Private) a chráněné sekci, zadejte: <kbd>http://icalx.com/private/&#060;uzivatelske_jmeno&#062;/&#060;nazev_souboru&#062;.ics</kbd> V tomto případě budete muset rovněž zadat přihlašovací údaje (uživatelské jméno a heslo).</li>
<li>Stejným způsobem lze přidávat další kalendáře.</li>
</ul>
<p>Nyní se můžete přihlásit ke svému kalendáři, ať jste kdekoli.</p>
<p>Ale pozor, všimněte si, že na počítači, ze kterého jste poprvé publikovali
svůj kalendář (pokud přispíváte do již publikovaného kalendáře), uvidíte duplicitní údaje:
jeden ze svého počítače a další ze vzdáleného kalendáře. Doporučujeme
smazat lokální kalendář pro jistotu, že všechny změny, které jste provedli
ve svém kalendáři se projeví na vzdáleném a ne na lokálním kalendáři.</p>
<p>Pro smazání svého lokálního kalendáře vyberte <tt>Kalendáře (Calendars)</tt> v hlavním okně, klikněte pravým tlačítkem na požadovaný kalendář (<tt>Můj kalendář (My Calendar)</tt> je Váš výchozí kalendář) a vyberte <tt>Smazat (Delete)</tt>.</p>
<ul>
<li><a href="http://www.icalx.com/">iCalX.com</a></li>
</ul>
<h3 id="ml.13">Supertip zpravodaje Mozilla Links: Změňte oznamovací zvuk Kalendáře</h3>
<p><em>(přispěl Percy Cabello)</em></p>
<p>Kalendář Mozilla můžete nastavit tak, aby zahrál nějaký zvuk, když se blíží
začátek nějaké události. Jestliže Vám stávající zvuk nepřipadá dostatečně
zajímavý nebo Vám zkrátka nesedí, můžete ho vyměnit za svůj oblíbený zvuk.</p>
<p>Najděte adresář, kde máte nainstalován balík aplikací Mozilla, prohlížeč Firefox
nebo Thunderbird (standardně <var>C:\Program Files\Mozilla</var>; <var>C:\Program Files\Mozilla Firefox</var> a vyhledejte soubor <var>\chrome\calendar\content\sound.wav</var></p>
<p>Vyměňte ho za svůj zvukový soubor (ve formátu WAV). Příště, až se přiblíží nějaká událost, zahraje se vaše melodie.</p>
<p>Používáte-li Sunbird, soubor hledejte <var>/chrome/calendar.jar</var> v jeho instalačním adresáři. Soubor <var>.jar</var> je kompatibilní se souborem <var>.zip</var>. Otevřete ho ve svém oblíbeném nástroji pro práci se ZIP archivy a nahraďte soubor <var>sound.wav</var>.</p>
<p>Chcete více tipů? Zkuste <a href="http://tipbar.mozdev.org/">rozšíření
TipBar</a> pro zobrazení Tipu dne v Mozilla Firefoxu.</p>
<p>Další tipy k oblíbenému prohlížeči najdete na webu <a href="http://www.mozillatips.com/">Mozilla Tips</a>.</p>
<p>Máte nějaký tip nebo supertip? Dejte o něm vědět ostatním čtenářům na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>.</p>
<h2 id="ml.2" class="nice">Novinky</h2>
<p><em>(přispěl <a href="http://www.mozillazine.org/">MozillaZine</a>, zdroj novinek o Mozille)</em></p>
<h3 id="ml.21">Mozilla Firefox přidává podporu pro přenos nastavení z jiných prohlížečů</h3>
<p>Poslední noční verze Mozilla Firefoxu umožňují přenést nastavení z mnoha jiných prohlížečů včetně Internet Exploreru,
balíku aplikací Mozilla, Netscape a Opery. V přípravě je podpora pro další prohlížeče jako jsou Safari, Konqueror, Galeon a Epiphany. Nastavení lze přenést nastavením <tt>Import...</tt> z nabídky <tt>Soubor (File)</tt>. Také se změnilo umístění profilu Firefoxu.</p>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4429">Celý článek</a>]</strong></p>
<h3 id="ml.22">Testovací verze Mozilla Thunderbirdu s instalátorem pro Windows</h3>
<p>Byla vydána nová testovací verze Mozilla Thunderbirdu s instalátorem pro Windows. Kromě snadnější instalace umožňuje aktivovat Offline rozšíření, které se tak nemusí stahovat. Instalátor navíc nastaví Thunderbird v registrech jako poštovního a diskusního klienta.</p>
<p>Nová verze s instalátorem je založena na stejném kódu jako poslední týdenní testovací verze, která vylepšuje detekci nevyžádané pošty a podporu IDLE pro IMAP.</p>
<ul><li><a href="http://forums.mozillazine.org/viewtopic.php?t=61337">Více informací o verzi s instalátorem pro Windows</a></li>
<li><a href="http://forums.mozillazine.org/viewtopic.php?t=61223">Více informací o poslední týdenní testovací verzi</a></li></ul>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4475">Celý článek</a>]</strong></p>
<h3 id="ml.23">NewMobileComputing přináší rozhovor s vedoucími projektu Minimo</h3>
<p><a href="http://www.nmcx.com/">NewMobileComputing</a> zveřejnil <a href="http://www.nmcx.com/story.php?news_id=3761">rozhovor s Dougem Turnerem a Chrisem Hofmannem</a>, vedoucími projektu Minimo. Minimo je prohlížeč <a href="http://www.mozilla.org/">Mozilla Foundation</a> pro malá zařízení, který minulý měsíc dosáhl verze 0.1.</p>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=3761">Celý článek</a>]</strong></p>
<h3 id="ml.24">RUS-CERT kritizuje bezpečnostní politiku Mozilly</h3>
<p><a href="http://cert.uni-stuttgart.de/"><abbr title="Computer Emergency Response Team of the University of Stuttgart">RUS-CERT</abbr></a> <a href="http://cert.uni-stuttgart.de/ticker/article.php?mid=1183">kritizuje bezpečnostní politiku Mozilly</a>. Skupina objevila nepublikované problémy opravené v novějších verzích.</p>
<strong>[<a href="http://www.mozillazine.org/talkback.html?article=4460">Celý článek</a>]</strong>

<h3 id="ml.25">Americký úřad pro patenty a ochranné známky zrušil platnost
patentu firmy Eolas na pluginy v prohlížečích</h3>

<p><a href="http://www.reuters.com/newsArticle.jhtml?type=topNews&amp;storyID=4509756">Americký
úřad pro patenty a ochranné známky zrušil platnost patentu na pluginy v
prohlížečích</a>. Patent držený firmou <a href="http://www.eolas.com/">Eolas
Technologies Inc.</a> a
<a href="http://www.universityofcalifornia.edu/">Kalifornskou universitou</a>,
byl předběžně zrušen. Eolas má 60-ti denní lhůtu na odpověď. Eolas v minulém
roce podal žalobu na Microsoft pro porušení patentu a přinutil softwarového
velikána navrhnout zásadní změny v Internet Exploreru, které by měly vážný
dopad na uživatele webu.</p>

<p>Postiženy mohly být všechny moderní prohlížeče včetně Mozilly a Mozilla Firefoxu, které využívají technologii pluginů na interaktivní obsah jako jsou například animace v Macromedia Flashi nebo Java applety.</p>
<strong>[<a href="http://www.mozillazine.org/talkback.html?article=4436">Celý článek</a>]</strong>
<h2 id="ml.3" class="nice">Mozilla pod povrchem</h2>
<p><em>(přispěl Alex Bishop)</em></p>
<p>
Mozilla Firefox 0.9, první verze s dokončenými funkcemi, bude založena na Mozille 1.7. Po vydání verze 0.9 bude vytvořena větev pro finální verzi 1.0. To znamená, že změny provedené na vývojové větvi po vydání Mozilly 1.7 se projeví až v dalších verzích Firefoxu. Tím chceme zajistit stabilní a dobře otestovanou verzi 1.0.</p>
<p>Po mnohých debatách byly do vývojových verzí přidány nové grafické prvky Mozilla Firefoxu. Pro jejich začlenění v neoficiálních verzích je ale zapotřebí získat povolení.
Pomocí nového parametru <tt>--enable-official-branding</tt> můžete sestavit verzi obsahující oficiální loga, pokud k tomu máte svolení (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=237596">chyba #237596</a>). Omezení chrání ochranné známky Mozilla Foundation a uživatelům slouží jako ukazatel oficiálních verzí.</p>
<p>Další novinkou Mozilly je nová předvolba na zákaz blokování standardní kontextové nabídky na webových stránkách (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=86193">chyba #86193</a> a <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=117532">chyba #117532</a>) a změny v uživatelském rozhraní cookies (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=233339">chyba #233339</a>). Poštovní klient nyní podporuje IDLE v rozhraní IMAP (umožňuje serverům informovat poštovní klienty o nové poště) (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=141369">chyba #141369</a>) a ochranu před skrytými úseky zpráv (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=11080">chyba #11080</a>).</p>
<p><strong>[<a href="http://www.mozilla.org/status/2004-03-16.html">Celá zpráva</a>]</strong></p>
<h2 id="ml.4" class="nice">Projekty pro Mozillu</h2>
<p><em>(přispěl Brian King)</em></p>
<h3 id="ml.41">Projekt týdne: CuteMenus</h3>
<p>CuteMenus potřebujete, když chcete oživit nabídky v balíku aplikací
Mozilla nebo prohlížeči Mozilla Firefox. Po instalaci a restartu najdete ikony ve všech
hlavních a kontextových nabídkách stránky. Ne všechny položky mají ikonu, avšak ty běžné
jako jsou <tt>Najít (Find)</tt>, <tt>Obnovit (Reload)</tt>, <tt>Domů (Home)</tt>, <tt>Tisk (Print)</tt> a další je mají. Možná jste zvyklí na ikony v nabídce <tt>Záložky (Bookmarks)</tt>
(tzv. favicony stránek), v nabídce <tt>Okno (Window)</tt> a <tt>Osobní nástrojové liště (Personal Toolbar)</tt>. CuteMenus rozšiřuje a oživuje vaše zkušenosti s prohlížečem Mozilla. V poslední verzi, která je stále
ve vývoji, je možné změnit sadu ikon a výběr rozdílných témat pro menu. Témata v
současné době zahrnují vzhled Office XP a přednastavené téma Firefox Qute. K těmto
předvolbám se dostanete přes kontextovou nabídku a podržením klávesy <kbd>SHIFT</kbd> a
posunem myši.</p>
<ul><li><a href="http://www.mozdev.org/featured/index.html">http://www.mozdev.org/featured/index.html</a></li></ul>
<h3 id="ml.42">Zprávy o samostatných projektech</h3>
<p><em>Zprávy o samostatných projektech obsahují novinky a poslední informace o Mozille a rozšířeních shromážděných na <a href="http://www.mozdev.org/">mozdev.org</a> a jinde v rámci komunity.</em></p>
<p>Poslední zpráva z 14. března 2004 obsahuje:</p>
<h4 id="ml.421">mozdev.org</h4>

<p>Web mozdev.org zveřejnil novou <a href="http://www.mozdev.org/community/logos.html">stránku obsahující
loga</a>.</p>

<p>Pokud hostujete projekt na serveru mozdev a již jste upustili od
původního označení projektů, prosím umístěte logo někde na vašich stránkách
s odkazem na <a href="http://www.mozdev.org/">mozdev.org</a>. Loga mohou být
použita také třetími stranami k odkazu na web mozdev.org. Web je momentálně
v rekonstrukci a uvítáme jakoukoli pomoc v této oblasti.</p>

<ul>
<li><a href="http://www.mozdev.org/">http://www.mozdev.org/</a></li>
</ul>

<h4 id="ml.422">Googlebar 0.8</h4>
<p>Panel Google známý z Internet Exploreru v Mozille/Firefoxu. Byla vydána verze 0.8
pro Mozillu a Firefox, obsahující mnoho nových vlastností a oprav. Za pozornost
stojí podpora pro mezinárodní zprávy Google (International Google News), flexibilnější modifikátory kláves, které určují, co se hledá a kde se zobrazí výsledky, a kliknutí prostředním tlačítkem myši na panel Google otevře
výsledek do nového panelu.</p>
<ul>
<li><a href="http://googlebar.mozdev.org/">http://googlebar.mozdev.org/</a></li>
</ul>
<h4 id="ml.423">Firebird Help 1.0.1</h4>
<p>Zobrazovač nápovědy pro Firefox a Thunderbird. Projekt <abbr title="Help Content Extension">HCE</abbr> má nyní své <a href="http://firebirdhelp.mozdev.org/hce/">webové stránky</a>. Tento projekt bude rozšiřovat nápovědy v příslušné nabídce. V současnosti je v seznamu pouze jedno rozšíření - plná verze knihy Vytváření aplikací v Mozille (Creating Application With Mozilla) včetně glosáře, částečným rejstříkem a vyhledáváním.</p>
<ul>
<li><a href="http://firebirdhelp.mozdev.org/">http://firebirdhelp.mozdev.org/</a></li>
</ul>
<h4 id="ml.424">Dictionary Search 0.4</h4>
<p>Vyhledávání či překládání slov na webových stránkách s použitím online slovníku vydalo 6. března verzi 0.4. Tato verze přidává možnost použití až čtyř různých slovníků.</p>
<ul>
<li><a href="http://dictionarysearch.mozdev.org/">http://dictionarysearch.mozdev.org/</a></li>
</ul>
<h4 id="ml.425">Mnenhy 0.5.1</h4>
<p>Vylepšení poštovního klienta a dalších prvků pro Mozillu, Thunderbird a Firefox. Nyní lze většinu částí projektu použít v Mozille, Thunderbirdu a Firefoxu. Obsaženo je vlastní nastavení hlavičky zpráv a příspěvků pro Mozillu a Thunderbird, textové kódovače a dekódovače (např. ROT-13), konvertory pro znakovou sadu Unicode nebo Kenny. Chrome Manager může deaktivovat nebo odinstalovat doplňky a rozšíření! Registry Viewer zobrazuje obsah registrových souborů Mozilly jako jsou například mozver.dat nebo registry.dat.</p>
<ul>
<li><a href="http://mnenhy.mozdev.org/">http://mnenhy.mozdev.org/</a></li>
</ul>
<h4 id="ml.426">Metagrams Toolbar pro Mozillu 0.8</h4>
<p>Nástrojová lišta pro fanoušky slovních her. Verze 0.8 je téměř funkčně shodná s
<a href="http://toolbar.versimedia.com/metagrams/">Metagrams Toolbar pro Win/IE</a> a implementuje téměř všechna rozhraní z Win/IE verze. Podporuje Netscape 7.1, Mozillu 1.6 a Firefox 0.8.</p>
<ul><li><a href="http://words.mozdev.org/">http://words.mozdev.org/</a></li>
</ul>
<h4 id="ml.427">cuneAform 0.2.6</h4>
<p><abbr title="HyperText Markup Language">HTML</abbr> editor pro každého. Počet funkcí neustále narůstá a zahrnuje <acronym title="What You See Is What You Get">WYSIWIG</acronym> prostředí, podporu tabulek, <abbr title="Cascading Style Sheets">CSS</abbr>, podporu pro dočasné projekty a funkce pro ukládání a tisk.</p>
<ul>
<li><a href="http://cuneaform.mozdev.org/">http://cuneaform.mozdev.org/</a></li>
</ul>
<p>Více informací o každém projektu se dozvíte <a href="http://www.mozdev.org/status/2004-03-14-status.html">ve zprávě</a>.</p>
<h2 id="ml.5" class="nice">Anketa zpravodaje Mozilla Links</h2>
<h3 id="ml.51">Vyhodnocení ankety z minulého čísla</h3>
<p>V posledním čísle jsme se ptali, zda používáte online záložky jako například Online Bookmarks. Zde jsou výsledky:</p>
<ul>
<li>Ano. 8 %</li>
<li>Ne. Žádná mi nevyhovuje. 32 %</li>
<li>Ne. Nevím, že existují. 60 %</li>
</ul>
<p>(*) Kvůli zaokrouhlování nemusí být součet roven 100 %.</p>
<h3 id="ml.52">Nová anketa: Kterého správce osobních informací (<abbr title="Personal Information Manager">PIM</abbr>) používáte?</h3>
<ul>
<li>Kalendář Mozilla</li>
<li>Microsoft Outlook</li>
<li>Ximian Evolution</li>
<li>Jiný</li>
<li>Zatím žádný</li>
<li>Žádný nepotřebuji</li>
</ul>
<p>Hlasujte na <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org/</a>.</p>
<h2 id="ml.6" class="nice">Reklama</h2>
<p>Získejte Mozilla CD s posledními verzemi produktů Mozilly. Jednotlivá CD prodáváme za 5,95 $, sadu 5 CD za 18,95 $ a celoroční předplatné za 17,95 $. Trička s Mozillou nabízíme za 16,95 $.</p>
<p>Navštivte <a href="http://store.mozilla.org/">http://store.mozilla.org/</a>!</p>
<p>Pomozte dětem z celého světa! <a href="http://www.missionfish.org/cgt/nonprofit/np.show.home.do?NP_ID=1443">MissionFish</a> umožňuje zahájit dražbu na eBay a výtěžek darovat fondu Unicef. O dalších možnostech přispívání se dozvíte navštívením webu <a href="http://www.unicef.org">Unicef</a>. Děkujeme!</p>
<p>Zde může být i Vaše reklama! Pro více podrobností o tom, jak se dostat k 6000 čtenářů na celém světě, navštivte <a href="http://newsletter.mozdev.org/mlsp.html">Mozilla Links Sponsorship Program</a>.</p>
<h2 id="ml.7" class="nice">Kontaktní informace</h2>
<p>Mozilla Links<sup>TM</sup> je čtrnáctidenní elektronický zpravodaj vydávaný projektem <a href="http://newsletter.mozdev.org/">Mozilla Links Newsletter</a>.</p>
<p><strong>Správa odběru:</strong> Pro přihlášení, odhlášení nebo změnu nastavení navštivte prosím <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org/</a>.</p>
<p><strong>Vaše soukromí:</strong> K přijímání tohoto zpravodaje je
vyžadována pouze platná e-mailová adresa. Ta nebude využita k jiným
účelům než těm souvisejícím s tímto zpravodajem (doručení, podpora,
odhlášení apod.).</p>
<p><strong>Komentáře:</strong> Vítány na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>.</p>
<p>Zpravodaj Mozilla Links je překládán do <a href="http://www.csie.ntu.edu.tw/%7Er91034/mozilla/forum/viewforum.php?f=15">čínštiny</a>, <a href="http://www.czilla.cz/podpora/zpravodaj/">češtiny</a>, <a href="http://www.mozbrowser.nl/nieuwsbrief">holandštiny</a>, <a href="http://www.mysunrise.ch/users/alabor">němčiny</a>, <a href="http://ryuzi.dyndns.org/mozillazine/html/modules/newbb/viewforum.php?forum=6">japonštiny</a>, <a href="http://www.vivamozilla.prv.pl/">polštiny</a> a <a href="http://www.mozilla.ru/">ruštiny</a>.</p>
<p>Copyright 2004 přispěvatelé zpravodaje Mozilla Links. Zpravodaj Mozilla Links je vydáván pod licencí <a href="http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode/">Creative Commons Attribution-NonCommercial-ShareAlike 1.0</a>.</p>
<p><strong>Česká verze:</strong>
<a href="/czilla/lide.html#kdo-je-PT">Petr Tomeš</a>, Pavel Kácha a Tomáš Marek; <a href="mailto:info@czilla.cz">info@czilla.cz</a></p>

<?php
	$page->includeFooter();
?>
