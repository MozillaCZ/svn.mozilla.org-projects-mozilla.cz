<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zpravodaj Mozilla Links - 23. číslo');
	$page->setHeadline('Zpravodaj Mozilla Links','23. číslo (11. 10. 2004 / 6. 11. 2004)');
	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');
	$page->includeTemplate('header');
?>

<h2 id="content" class="nice">Obsah</h2>
<ul>
	<li><a href="#ml.0">Úvod</a></li>
	<li><a href="#ml.1">Vylepšení Mozilly</a>
		<ul>
			<li><a href="#ml.11">Recenze: deskCut 0.4.1</a></li>
			<li><a href="#ml.12">Recenze: Menu Editor 1.0</a></li>
			<li><a href="#ml.13">Tip: Jak vytvořit aktuální záložku</a></li>
			<li><a href="#ml.14">SuperTip: Upravte si ovládání prohlížeče</a></li>
		</ul>
	</li>
	<li><a href="#ml.15">Komunita: Aaron Leventhal o přístupnosti Mozilly</a></li>

	<li><a href="#ml.2">Souhrn zpráv za uplynulý měsíc</a>
		<ul>
			<li><a href="#ml.21">Vystoupení Mitchell Baker</a></li>
			<li><a href="#ml.22">Vystoupení Stevena Garrityho</a></li>
			<li><a href="#ml.23">Vydán Thunderbird 0.8</a></li>
			<li><a href="#ml.24">Server mozdev.org žádá o dary</a></li>
			<li><a href="#ml.25">Zapojte se do projektu SpreadFirefox.com</a></li>
			<li><a href="#ml.26">První držitelé Mozilla Bounty</a></li>
			<li><a href="#ml.27">Vydána ChatZilla 0.9.65</a></li>
			<li><a href="#ml.28">Vydán Firefox 0.10.1</a></li>
		</ul>
	</li>
	<li><a href="#ml.3">Místní novinky</a></li>
	<li><a href="#ml.4">Projekty k Mozille</a></li>
	<li><a href="#ml.7">Kontaktní informace</a></li>
</ul>
<hr />


<h2 id="ml.0" class="nice">Úvod</h2>

<p>Firefox 1.0 PR (preview release - ukázková verze) je tu. Představuje
některé již dříve ohlášené nové funkce jako Aktuální záložky, informační
lištu (vypůjčenou z Internet Exploreru SP2), vyhledávací lištu, která
přináší lepší a méně rušivé rozhraní k prohledávání webových stránek; tzv.
whitelist - seznam důvěryhodných serverů, kterým chcete povolit instalaci
rozšíření, a menší úpravy výchozího motivu vzhledu Winstripe. Mezi další
vylepšení patří začlenění dalších čtyř vyhledávačů do vyhledávacího pole:
Amazon, Dictionary.com, eBay a Yahoo!. Nová položka <strong>Otevřít
adresu...</strong> v nabídce <strong>Soubor</strong> zpřístupňuje
<strong>adresní řádek</strong> pomocí nabídky. Do Firefoxu se vrátila funkce
<strong>práce offline</strong> dostupná přes nabídku
<strong>Soubor</strong>. Nové tlačítko na nástrojové liště ověřuje
dostupnost <strong>aktualizací</strong> Firefoxu. Stisknutí klávesy Esc nyní
zastavuje animaci obrázků a modifikátory odkazů nyní pracují na mnoha
místech uživatelského rozhraní prohlížeče. Například Ctrl + klepnutí na
tlačítko <strong>Domů</strong> otevře vaši domovskou stránku v novém
panelu.</p>

<p>Další novinkou je <strong>Hlavní heslo</strong>, které ochrání všechna
uložená hesla z webových formulářů. Firefox se na něj zeptá při prvním
navštívení uloženého formuláře v rámci jednoho spuštění prohlížeče. Vložte
své hlavní heslo a Firefox za vás vyplní stránky s údaji o přihlášení jako
obvykle. K nastavení hlavního hesla vyberte v nabídce Nástroje položku
<strong>Předvolby...</strong> Otevřete stránku <strong>Soukromí</strong>,
přejděte na položku <strong>Uložená hesla</strong> a stiskněte tlačítko
<strong>Změnit hlavní heslo...</strong> Kvůli ověření hesla ho budete muset
vložit dvakrát.</p>

<p>Adresní řádek je nyní přítomen v každém okně, bez ohledu na to, co webová
stránka požaduje, čímž se zabrání tzv. spoofingu (napodobení nějakého
populárního webu jako např. eBay, Amazon nebo PayPal za účelem získání
osobních informací oběti).</p>

<p>Na našich <a href="http://nostalsong.com/mozillalinks/">webových
stránkách</a> nyní informujeme o posledních deseti zranitelnostech
Mozilly/Firefoxu, takže o nich můžete být jednoduše a rychle informováni.
Poděkování patří serveru <a href="http://www.secunia.com/">Secunia</a> a
zvláště pak Jakobovi Balleovi za nastavení tohoto kanálu.</p>

<p>Děkujeme vám za přízeň. Své návrhy a komentáře zasílejte prosím na
<a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>
(resp. <a href="mailto:info@czilla.cz">info@czilla.cz</a>).</p>

<p><em>Percy Cabello - Mozilla Links</em></p>


<h2 id="ml.1" class="nice">Vylepšení Mozilly</h2>

<h3 id="ml.11">Recenze: deskCut 0.4.1</h3>
<p><em>Vytvořil Evan Eveland</em></p>

<p>Už vám nemusí chybět funkce Internet Exploreru, která umožňuje klepnout
pravým tlačítkem myši na stránku a přidat jejího zástupce na plochu.</p>

<p><a href="http://deskcut.mozdev.org/">DeskCut</a> je malé rozšíření, které
přidává položku <strong>Create Shortcut</strong> (vytvořit zástupce) do
místní nabídky v Mozilla Firefoxu.</p>

<p>V Linuxu nemusí deskCut nalézt umístění plochy, a proto autor přidal
možnost ručního nastavení speciálního adresáře, který systém identifikuje
jako plochu. Přejděte do <strong>Správce rozšíření</strong> (nabídka
<strong>Nástroje</strong>), vyberte deskCut a klepněte na tlačítko
<strong>Možnosti</strong>. Aktivací volby na téže stránce lze zakázat
zobrazování potvrzení o vytvoření zástupce.</p>


<h3 id="ml.12">Recenze: Menu Editor 1.0</h3>
<p><em>Vytvořili Devon Jensen a Nickolay Ponomarev</em></p>

<p>Jste již unaveni zobrazováním příliš mnoha položek v místní nabídce,
které nikdy nepoužíváte? Upravte ji!</p>

<p><a href="http://menueditor.mozdev.org/">Menu Editor</a> umožňuje schovat
jakoukoliv položku, kterou si nepřejete vidět v místní nabídce. Jakmile je
rozšíření nainstalováno, přejděte do okna možností Menu Editoru (nabídka
<strong>Nástroje</strong>, <strong>Správce rozšíření</strong>, vyberte Menu
Editor a klepněte na tlačítko <strong>Options</strong>). Pokud chcete
<strong>přidat/vyjmout</strong> položku, vyberte ji ze seznamu a stiskněte
Hide pro její schování, resp. Show pro její opětovné zobrazení. Položky
můžete také přeuspořádat pomocí tlačítek <strong>Move Up</strong> (posun
nahoru) a <strong>Move Down</strong> (posun dolů). Pokud jste po instalaci
Menu Editoru nainstalovali další rozšíření, které mohlo přidat nové položky
do kontextové nabídky, stiskněte Find New a tyto položky budou přidány do
seznamu. Pro obnovení původní podoby kontextové nabídky stiskněte tlačítko
<strong>Reset</strong>.</p>

<p>Připravované verze přidají schopnost "táhni a pusť" a možnost úprav
přídavných nabídek.</p>


<h3 id="ml.13">Tip: Jak vytvořit aktuální záložku</h3>
<p><em>Přispěl Percy Cabello</em></p>

<p>Firefox 1.0 přináší <a href="/podpora/firefox/aktualni-zalozky.php">Aktuální
záložky</a>, novou funkci pro vyhledání, uložení a zobrazení webových kanálů
ve formátech
<abbr title="Really Simple Syndication">RSS</abbr>
a Atom. Aby to však fungovalo, musí webová stránka takový

<abbr title="Really Simple Syndication">RSS</abbr>
kanál řádně deklarovat, aby ho Firefox mohl rozpoznat a zobrazit ikonku na
stavové liště.</p>

<p>A co s ostatními kanály dostupnými na celém webu, avšak řádně
nedeklarovanými? Pokud si zobrazíte stránku a všimnete si na ní ikony
<img src="http://nostalsong.com/mozillalinks/html/rss.jpg" alt="RSS icon" /> či
<img src="http://nostalsong.com/mozillalinks/html/xml.gif" alt="XML icon" />,
s největší pravděpodobností odkazuje na kanál
<abbr title="Really Simple Syndication">RSS</abbr>
či Atom. Pokud jej chcete přidat jako Aktuální záložku, postupujte
následovně:</p>

<ul>
	<li>Klepněte na ikonu pravým tlačítkem a vyberte <strong>Kopírovat
	adresu odkazu</strong>.</li>

	<li>Vyberte <strong>Správce záložek</strong> z nabídky
	<strong>Záložky</strong>.</li>

	<li>Z nabídky <strong>Soubor</strong> vyberte <strong>Nová aktuální
	záložka...</strong>.</li>

	<li>Vložte název kanálu a do <strong>adresy kanálu</strong> vložte adresu
	odkazu, kterou jste zkopírovali v prvním kroku. Pokud chcete, přidejte
	komentář.</li>
</ul>

<p>Ručně jste vytvořili Aktuální záložku a ta se, stejně jako ostatní,
rozšíří v nabídce <strong>Záložky</strong> a postranní liště o obsah
kanálu.</p>

<p>Další způsob představuje stažení a instalaci nového rozšíření
<a href="http://philringnalda.com/blog/2004/09/rightclick_add_live_bookmark.php">LiveBookmarkThis</a>,
které značně zjednodušuje tvorbu Aktuálních záložek. Jakmile je toto
rozšíření nainstalováno, zapomeňte na kroky popsané výše a pouze klepněte na
ikonu RSS či XML pravým tlačítkem a vyberte <strong>Add Live
Bookmark</strong> (přidat aktuální záložku).</p>


<h3 id="ml.14">SuperTip: Upravte si ovládání prohlížeče</h3>
<p><em>Přispěl Preferential Project</em></p>

<p>Firefox a Mozilla Suite nabízejí několik předvoleb, které mohou být
užitečné zvláště pro lidi s postižením. K úpravě těchto nastavení zadejte do
<strong>adresního řádku</strong> "about:config", stiskněte klávesu Enter a
klepněte na požadovanou předvolbu, kterou chcete upravit.
<a href="http://preferential.mozdev.org/preferences.html">Preferential Project Home</a>
na svých webových stránkách zpřístupnil dokumentaci těchto předvoleb.</p>


<div class="tbl-1">
<table border="1">
<thead>
<tr>
	<th>Předvolba</th>
	<td>Popis a hodnoty</td>
</tr>
</thead>
<tbody>
<tr>
	<td>accessibility.accesskeycausesactivation</td>
	<td>Stisknutí přístupové klávesy přejde na odkaz, namísto jeho pouhého
	zvýraznění.</td>
</tr>
<tr>
	<td>accessibility.browsewithcaret</td>
	<td>Prohlížení webových stránek pomocí kurzoru klávesnice.</td>
</tr>
<tr>
	<td>accessibility.tabfocus</td>
	<td>Určuje, které elementy stránky mohou získat zaměření při stisknutí
	klávesy TAB:
	<ul>
		<li>1 : pouze textová pole</li>
		<li>2 : všechny prvky formuláře kromě textových polí</li>
		<li>3 : všechny prvky formuláře</li>
		<li>4 : hypertextové odkazy včetně obrázků</li>
		<li>7 : všechny prvky formuláře spolu s hypertextovými odkazy</li>
	</ul></td>
</tr>
<tr>
	<td>accessibility.typeaheadfind</td>
	<td>umožní vyhledávání na stránce pomocí zapisování znaků (rychlé
	vyhledávání)</td>
</tr>
<tr>
	<td>accessibility.typeaheadfind.autostart</td>
	<td>Spustí rychlé vyhledávání bez nutnosti stisknout nejprve klávesu /
	(najít text) nebo ' (najít odkaz)</td>
</tr>
<tr>
	<td>accessibility.typeaheadfind.enablesound</td>
	<td>povolí chybový zvukový signál pro rychlé vyhledávání (automaticky
	vypnuté pro Linux/Unix, automaticky zapnuté pro ostatní platformy)</td>
</tr>
<tr>
	<td>accessibility.typeaheadfind.enabletimeout</td>
	<td>povolí chybový zvukový signál pro rychlé vyhledávání (automaticky
	vypnuto pro Linux/Unix, automaticky zapnuto pro ostatní platformy</td>
</tr>
<tr>
	<td>accessibility.typeaheadfind.linksonly</td>
	<td>povolí rychlé vyhledávání pouze pro odkazy</td>
</tr>
<tr>
	<td>accessibility.typeaheadfind.soundURL</td>
	<td>určuje název souboru (.wav) pro varovný signál, pro přednastavený
	zvukový signál lze použít "default", pro výchozí signál systému
	"beep"</td>
</tr>
<tr>
	<td>accessibility.typeaheadfind.startlinksonly</td>
	<td>vyhledává pouze od počátku odkazů</td>
</tr>
<tr>
	<td>accessibility.typeaheadfind.timeout</td>
	<td>čas (v ms) před automatickým ukončením rychlého vyhledávání</td>
</tr>
<tr>
	<td>accessibility.usebrailledisplay</td>
	<td>vložení příkazu pro volání programu pro brailleův displej z Mozilly
	(nečinné, pokud se vynechá)</td>
</tr>
<tr>
	<td>accessibility.usetexttospeech</td>
	<td>Vložení příkazu pro volání programu pro převod textu na řeč z
	Mozilly (nečinné, pokud se vynechá).</td>
</tr>
<tr>
	<td>accessibility.warn_on_browsewithcaret</td>
	<td>Varuje před zapnutím prohlížení stránek pomocí kurzoru
	klávesnice.</td>
</tr>
</tbody>
</table>
</div>


<h2 id="ml.15" class="nice">Komunita: Aaron Leventhal o přístupnosti Mozilly</h2>

<p>Jak se mohou zrakově postižené osoby nebo osoby bez končetin účinně
pohybovat na webu? Jak může někdo s poznávacími problémy zvládnout takový
komplexní úkol, jako je e-mail? Většinu uživatelů skvělých produktů, jakými
jsou Firefox, Thunderbird či balík Mozilla, si tyto otázky nikdy nemusí
pokládat. To je ale přesně ten typ otázek, který se uvnitř projektu Mozilla
Accessibility pokládá každý den.</p>

<p>V projektu OSN
<a href="http://www.un.org/esa/socdev/enable/index.html">enable</a>
je definováno: "Přístupnost znamená zajištění flexibility pro uspokojení
potřeb a voleb každého uživatele. Díky Internetu se stává přístupnost
počítačové technologie a zdrojů dostupných na Internetu užitečnou pro více
lidí, než by tomu obvykle bylo." Ve stručnosti: nechme prostě všechny
připojit se a používat Internet.</p>

<p>Aaron Leventhal, vedoucí projektu Mozilla Accessibility, nám poskytl
pohled do zákulisí, abychom se dozvěděli, co může Mozilla nabídnout
postiženým lidem a jakým směrem se Mozilla jako projekt ubírá. Následuje
výtah z rozhovoru. Celý článek můžete nalézt na stránkách
<a href="http://www.nostalsong.com/mozillalinks/html/links23_full.html#community">Mozilla Links</a>.</p>

<p><strong>ML: Co jste dělal v minulosti a jak jste se dostal k projektu
přístupnosti?</strong></p>

<p>AL: V roce 1989, kdy jsem studoval základní studium na University of
Madison ve Wisconsinu, jsem se byl nespokojený s přístupem předmětu Computer
Science (Počítačová věda). Více jsem se zajímal o nalézání řešení nových a
zajímavých problémů pomocí počítačů - speciálně ty myšlenky, které pomáhají
společnosti. Byl jsem idealista a nezajímala mne kariéra programátora
produktů, které mi nic neříkaly. To bylo v době, kdy jsem na nějaké staré
budově univerzity viděl znak, na kterém bylo napsáno, že <a
href="http://chpi.org">Počítače mají pomáhat lidem</a>. Zašel jsem dovnitř a
nalezl jsem hluchého a slepého muže, který se jmenoval John a seděl u svého
počítače připraveného ke konverzaci se mnou. Jak to udělal? No, měl dva
počítače vedle sebe. Jakmile jsem na jeden začal psát, zobrazoval se text na
jeho <a href="http://www.mozilla.org/access/powerbraille.jpg">Brailleově
displeji</a>. Četl rychle, občas stiskl tlačítko, aby si mohl přečíst
dalších 40 znaků textu. Pozorně jsem poslouchal, když odpovídal na mé otázky
o fascinujícím světě přístupnosti. Byl jsem ohromen, jak dramaticky
technologie změnila této osobě život a byl jsem zvědav, kolik dalších životů
by mohla tak mocně změnit. Bez technologie by byl John úplně odkázán na
překlady jiných lidí. S ní si však může zachovat soukromí, vydělávat peníze
jako softwarový inženýr, vést neziskovou organizaci a udržet si zaměstnance.
Později jsem zjistil, že John je velmi dobrý v programování v C++ - napsal
program, který jsem později potřeboval pro překlad vyšší matematiky do
Braillova písma a obráceně, což je obtížný úkol.</p>

<p>Jak už to bývá, byla mi záhy nabídnuta práce na druhé straně Madisonu v
neobvyklém byznysu zvaném Raised Dot Computing. Každý byl velmi rozrušený
myšlenkou, že produkujeme brailleový software, který může změnit svět.
Ačkoliv jsme podle měřítek softwarového inženýrství nebyli placeni moc
dobře, nevadilo to. Pro nás to byla záležitost toho, že nevidomí lidé mají
stejné právo na tytéž informace jako každý jiný. Byla to pro mne skvělá
příležitost. Protože společnost byla tak malá, zapojil jsem se téměř do
všeho... prodeje, marketingu, dokumentace, podpory, plánování, styku s
veřejností, jednání a dalších věcí. Bylo také skvělé učit se od zakladatelů
firmy něco o technologii a kultuře na poli přístupnosti. Zákazníci byli
naším výrobkem MegaDots, pro který jsem napsal většinu kódu, opravdu
nadšeni. Pokud si myslíte, že se Braillovo písmo skládá ze šesti bodů,
rozmyslete si to. Na poli publikování v Braillově písmu se řeší mnoho
obtížných výpočetních problémů.</p>

<p>V podstatě si myslím, že jsem se dostal k řešení přístupnosti ze stejného
důvodu jako mnoho lidí k open source - byl jsem mladý, idealistický a plný
energie.</p>

<p><strong>ML: Do jakého projektu jste zapojen a jakou v něm hrajete
roli?</strong></p>

<p>AL: Především propaguji přístupnost a pomáhám vzdělávat jakékoliv
zájemce. Například spravuji <a href="http://www.mozilla.org/access/">webové
stránky</a>, k nimž dostávám pozitivní reakce. Nabízím mnoho návodů a
informací ostatním vývojářům (jako
<a href="http://www.mozilla.org/access/xul-guidelines">Accessible XUL Authoring
Guidelines</a> - Jak vytvářet přístupné aplikace v XUL, což by si měli
přečíst všichni vývojáři XUL aplikací). Mé zaměstnání je výzva, neboť
přístupnost není vyučována ve škole a lidé nevidí postižené uživatele
aktivně používat Mozillu (klasický problém vejce a slepice), takže se mnoho
vývojářů neobtěžuje dozvědět něco o přístupnosti a psát přístupná
uživatelská rozhraní. Také existují jisté předsudky o přístupnosti, neboť se
na ni lidé dívají jako na omezení toho, co mohou dělat, což je typická
státní přeregulovanost. Ve skutečnosti neplatí, že jsou přístupné webové
stránky méně atraktivní. Stále můžete používat barvy a obrázky, avšak
nemůžete se spolehnout na každou barvu, či zapomenout přidat alternativní
popis k obrázku.</p>

<p>Technologie přístupnosti se snaží být více užitečná pro všechny
uživatele. Například funkce vyhledávání na stránce pomocí zapisování znaků
(rychlé vyhledávání) by nebyla implementována, kdyby projekt pro přístupnost
neexistoval. Dálková ovládání navržená s intuitivně tvarovanými tlačítky
jsou snadněji použitelná pro všechny, především ve tmě. Mnoho významných
objevů spatřilo světlo světa díky práci na přístupnosti; tak jako dálnopis
(vymyšlený proto, aby slepá hraběnka mohla psát osobní milostné dopisy),
kondenzátorový mikrofon, páskový magnetofon, e-mail, <abbr title="Optical
Character Recognition">OCR</abbr> (strojové rozpoznávání písma), syntéza
řeči, rozpoznávání hlasu, skryté titulky, pager ... a seznam pokračuje dál a
dál.</p>

<p>Po technické stránce jsem zapojen téměř do všeho, co souvisí s
přístupností produktů projektu Mozilla a vlastním modul pro podporu
přístupnosti v aplikačním rozhraní, ovládání pomocí kláves a rychlé
vyhledávání. Navrhuji a píšu kód pro většinu věcí souvisejících s
přístupností Mozilly. Ale protože toho je pro jednu osobu příliš mnoho,
musel jsem si určit priority. Dříve to znamenalo zpřístupnit "widgety" jádra
Mozilly přes klávesnici a pomocné technologie. Dalším klíčovým prvkem byl
prohlížeč Seamonkey navržený Netscapem. Až do teď jsem musel ignorovat mnoho
zajímavých věcí - MathML, <abbr title="Scalable Vector Graphics">SVG</abbr>,
poštovního klienta a pluginy.</p>

<p>Po třech letech práce jsme konečně dokončili většinu prací na
přístupnosti prohlížeče Mozilla a začalo být jasné, že potřebujeme udělat
něco podobného u Firefoxu, který má jinou množinu problémů. Dobrá zpráva je,
že ne všechno potřebuje předělat - většinou jen věci z prohlížeče
Mozilla.</p>

<p><strong>ML: Jaká je role IBM v přístupnosti produktů projektu
Mozilla?</strong></p>

<p>AL: Nejprve bych měl zmínit, že IBM má <a
href="http://www.ibm.com/able/access_ibm/history.html">bohatou historii</a>
inovací na poli <a href="http://www.ibm.com/able">přístupnosti</a>. Najali
prvního postiženého zaměstnance v roce 1920 a dělají to tak stále. Vždy byli
na technologické špičce. Již v roce 1960 vyvinuli mluvicí dálnopis. Dnes je
IBM pevně zavázána k dodržování vysoké úrovně přístupnosti v celé
společnosti.</p>

<p>IBM má zájem, aby byla Mozilla přístupná jak na Linuxu tak na Windows. V
krátkém výhledu se stále soustředíme na Windows a Seamonkey (kódové označení
pro Mozilla Suite), avšak příští rok budeme mít mnoho práce s Mozilla
Firefoxem na obou platformách. To znamená, že se musíme zaměřit na chyby v
klientském rozhraní, stejně tak jako na chyby v přístupnosti aplikačního
rozhraní, jež brání tomu, aby Mozilla správně fungovala s pomocnými
technologiemi jako jsou <a href="http://www.gwmicro.com/">Window-Eyes</a>,
<a href="http://www.aisquared.com/index.htm">ZoomText</a> a
<a href="http://www.gok.ca/">GOK</a> (Gnome Onscreen Keyboard - klávesnice na
monitoru v prostředí Gnome).</p>

<p>Ve Windows se musíme zaměřit na jádro Mozilly a doufat, že výrobci
pomocných technologií odvedou svůj díl práce. Avšak pro ně je obtížné to
odůvodnit, pokud nemohou prodat více výrobků z důvodu absence podpory ze
strany Mozilly. Nejde o extrémně velký trh a všichni výrobci již podporují
jeden prohlížeč - Internet Explorer. Takže pokud je někdo nedočkavý a nemůže
se dočkat, až bude Mozilla fungovat lépe s jejich oblíbenou čtečkou
obrazovky či jinou pomocnou technologií, prosím kontaktujte výrobce. Také je
dobré spojit se s námi. Aktualizuji stránky
<a href="http://www.mozilla.org/access/features">Access Mozilla</a>, kde jsou
nejnovější informace o kompatibilitě.</p>

<p>V Linuxu je to jiné. Výrobci pomocných technologií tam nechtějí vstoupit,
protože v open source nevidí podpůrný obchodní model. Sun Microsystems
udělal mnoho významného jak na straně aplikací tak založením mnoha různých
projektů pomocných technologií. Přesto zbývá udělat mnoho věcí, zvláště s
ohledem na přístupnost Mozilly. Dobrovolníci jsou určitě vítáni na všech
frontách přístupnosti open source. Snad nějaký podnikatel nalezne způsob jak
prodat hardware s přednastaveným a přístupným linuxovým prostředím.</p>

<p>Také existuje mnoho zajímavých věcí, které se odehrávají u Applu. Ale
zřejmě nikdo nebude pracovat na přístupnosti Mozilly v OS X. Jedno je jisté,
Mozilla využívá prostředí Cocoa, i když by raději měla používat Carbon.
Apple v současnosti pracuje na tom, aby byl Safari přístupným prohlížečem
pro OS X, dosud však nikdo netlačí na přístupnost Mozilly v OS X. Bylo by to
celkem nákladné implementovat.</p>

<p><strong>ML: Po zhlédnutí webových stránek projektu přístupnosti se zdá,
že se momentálně zaměřuje spíše na balík aplikací než na samostatné
aplikace. Je to kvůli požadavkům IBM?</strong></p>

<p>AL: Dříve každý používal balík aplikací Seamonkey. Popularita Firefoxu je
poměrně nový fenomén. IBM to vidí jako trend odvětví a plánuje posun svého
inženýrského úsilí také tímto směrem.</p>

<p><strong>ML: Jaký je výhled pro přístupnost v jiných projektech/produktech
jako Thunderbird, Firefox, Camino, Sunbird a Chatzilla?</strong></p>

<p>AL: Jak jsem se již zmínil, Firefox je v plánu. Na ničem jiném inženýři
nepracují. Oznamujte konkrétní problémy. Záplaty jsou rovněž vítány :)</p>

<p><strong>ML: Byla již posouzena přístupnost samostatných aplikací
(Firefox, Thunderbird, Sunbird)? Mohl byste přiblížit, jak jsou nyní
přístupné?</strong></p>

<p>AL: Existuje málo pochybností, že pokud srovnáme Firefox 0.9.3 a Mozillu
1.7 s IE 5 a novějším, nedají se pro kohokoliv s velkým postižením téměř
srovnat. Ale to by se pro některé skupiny uživatelů mělo změnit, neboť letos
proběhne testování a dolaďování. Máme některé významné přednosti, které by
měly nakonec zajistit velký náskok: prohlížení v panelech, blokování
vyskakovacích oken, adekvátně nastavené chování JavaScriptu, vyhledávání na
stránce pomocí přímého zápisu znaků, ovládání kurzorem přes klávesnici a
lepší bezpečnost, to vše má velký přínos pro lepší přístupnost. Také některá
rozšíření by mohla mít velký užitek pro přístupnost. Například AdBlock by
mohl přispět uživatelům s rozpoznávacími problémy, vizuálními a fyzickými
vadami, protože odstraňuje nežádoucí a matoucí obsah stránek.</p> <p> V tuto
chvíli potřebujeme pouze opravit své největší chyby a získat skutečnou
podporu od pomocných technologií dříve, než se budeme moci pochlubit svým
řešením. Například nemožnost přistupovat k pluginům (zásuvným modulům)
pomocí klávesnice je hlavním problémem, který se musí vyřešit jak v našem
kódu tak na straně výrobců. To by mělo být možné, jakmile bude
implementována nová architektura pluginů. Flash představuje další problém.
Plugin Mozilly pro Flash nepodporuje <abbr title="Microsoft Active
Accessibility">MSAA</abbr>, přestože ji podporuje verze pro ActiveX.</p>

<p><strong>ML: Nějaké doplňující poznámky?</strong></p>

<p>AL: Nejprve bych chtěl poděkovat za rozhovor a za zájem.</p>

<p>Někdy se mne lidé ptají, jak mohou pomoci. Existuje mnoho zajímavých
oblastí, na kterých lze pracovat a vyžaduje to jen málo práce okolo. Z mého
pohledu jeden z nejlepších způsobů je zapojit se do open source projektů
přístupnosti mimo Mozillu, konkrétně pro linuxové prostředí. Například
existuje experimentální projekt čtečky obrazovky napsaný pro Linux desktop v
Pythonu, nazvaný <a href="http://cvs.gnome.org/viewcvs/orca/">Orca</a>.
Stále jde o malý projekt, takže by mělo být docela snadné se zapojit.
<a href="http://accessibility.kde.org/">Přístupnost KDE</a> je také nová a
zajímavá oblast, která potřebuje mnoho podpory ze strany dobrovolníků.</p>

<p>Pokud se chce někdo zapojit konkrétně do přístupnosti produktů projektu
Mozilla, může si přečíst <a
href="http://www.mozilla.org/access/">http://www.mozilla.org/access/</a> a
<a href="mailto:aaronleventhal@moonset.net">pošlete mi e-mail</a>. Existuje
také zajímavý projekt <a href="http://mozbraille.mozdev.org/">MozBraille</a>
na serveru mozdev.org, který by potřeboval nějaké dobrovolníky.</p>

<p><em>Děkuji Aaronovi za jeho čas věnovaný tomuto rozhovoru a za zasvěcení
do problémů softwarové přístupnosti. Doporučujeme také
<a href="http://www.mozilla.org/access/slideshow/">tuto prezentaci</a> -
krátký, avšak podrobný, přehled o tom, co je to přístupnost.</em></p>


<h2 id="ml.2" class="nice">Souhrn zpráv za uplynulý měsíc</h2>

<h3 id="ml.21">Vystoupení Mitchell Baker</h3>

<p>Tento měsíc se
<a href="http://weblogs.mozillazine.org/mitchell/">Mitchell Baker</a>,
prezidentka Mozilla Foundation, objevila v několika rozhlasových pořadech o
technologiích. Nejprve 11. září, kdy se zúčastnila relace
<a href="http://www.webtalkguys.com/">Web Talk Radio Show</a>
spolu s průvodci pořadu Robem a Danou Greenlee. Můžete si přečíst
<a href="http://webtalkguys.com/091104.shtml">celý přepis</a>
rozhovoru, anebo si ho poslechnout ve zvukovém formátu
<a href="http://www.webtalkguys.com/mp3/webtalk-8-21-2004.mp3">MP3</a> nebo
<a href="http://www.webtalkguys.com/msm/webtalk-8-21-2004-mozilla.asx">WMA</a>.</p>

<p>Později, 24. září poskytla rozhovor Jonu Gordonovi, průvodci
technologického pořadu
<a href="http://www.publicradio.org/columns/futuretense/">Future Tense</a>
v rozhlasové stanici Minesota Public Radio. Rozhovor si můžete poslechnout ve
formátu
<a href="http://news.mpr.org/play/audio.php?media=/futuretense/daily/20040924">Real Audio</a>.</p>


<h3 id="ml.22">Vystoupení Stevena Garrityho</h3>

<p>Také Steven Garrity měl aktivní měsíc a několik médií požadovalo, aby jim
sdělil něco o svých příspěvcích a obecně o projektu Firefox. Poslechnout si
a zhlédnout ho můžete na:</p>

<ul>
	<li><a href="http://www.archive.org/download/formosa/2004-09-16-Formosa.mp3">Live from the formosa (MP3, 12 MB, 31')</a></li>
	<li><a href="http://actsofvolition.com/include/mainstreet-sept21-2004.mp3">CBC Radio (MP3, 6.5 MB, 14')</a></li>
	<li><a href="http://www.actsofvolition.com/include/firefox-canadanow.avi">Canada Now TV (DivX, 33 MB, 5')</a></li>
</ul>


<h3 id="ml.23">Vydán Thunderbird 0.8</h3>

<p>14. září byl vydán
<a href="http://www.mozilla.com/thunderbird/">Thunderbird 0.8</a>.
Obsahuje některé nové funkce, jako je Globální schránka, která umožňuje mít
všechny e-maily, přijaté na všech účtech, soustředěny v jediné schránce,
podpora importu z Eudory, Mozilla Mailu, Outlooku a Outlook Expressu,
vestavěná čtečka RSS kanálů, blokování pro obrázky na vzdáleném serveru od
neznámého odesílatele, hlavní heslo pro všechny uložené účty a opravy
několika chyb.</p>


<h3 id="ml.24">Server mozdev.org žádá o dary</h3>

<p>Server <a href="http://www.mozdev.org">mozdev.org</a>, poskytovatel
hostingu pro většinu projektů Mozilla (včetně Mozilla Links), <a
href="http://www.mozdev.org/donation.html">žádá o dary</a> na poplatky za
hostování a současné snahy stát se neziskovou organizací. Mozdev.org je
hlavním aktérem od počátku projektu Mozilla, který podporuje technologie
Mozilly a pomáhá komunitě s projekty pro rozšíření, motivy vzhledů,
dokumentaci, lokalizaci a dalšími druhy projektů.</p>

<p>Svůj finanční příspěvek můžete zaslat prostřednictvím PayPal, Kagi nebo
šekem na adresu:</p>

<p>
	Mozdev Community Organization<br />
	35 South Portland Ave #3<br />
	Brooklyn, NY 11217
</p>


<h3 id="ml.25">Zapojte se do projektu SpreadFirefox.com</h3>

<p>Spolu s vydáním Firefoxu 1.0 PR byly spuštěny nové stránky věnované
komunitou spravovanému marketingu Firefoxu. <a
href="http://www.spreadfirefox.com/">Spread Firefox</a> jsou webové stránky,
kde se mohou zaregistrovat všichni jednotlivci podporující Firefox a
soustředit pozornost na to, aby potenciální uživatelé zavítali na stránky
Firefoxu. Uživatelé také dostanou blog, který můžou hodnotit ostatní
uživatelé a jehož příspěvky se mohou objevit na hlavní stránce. Kampaň "1
milión stažení za 10 dní" začala se spuštěním serveru a jejího cíle bylo
dosaženo za pouhé čtyři dny. Po 10 dnech, jak bylo původně požadováno, byl
počet stažení dvojnásobný.</p>

<p>Další úspěšná iniciativa je rozdávání emailových účtů Gmail. Projekt
vedený Robinem Monksem sbírá pozvánky beta verze služby Gmail od členů
komunity a rozdává je ostatním členům, kteří spolupracují na šíření
informací o Firefoxu.</p>

<p>Původní příslib darovat 500 účtů Gmailu byl opět mnohanásobně překonán
více než 2000 darováními.
<a href="http://www.spreadfirefox.com/?q=user/register&amp;r=7283">Přidejte
se!</a></p>


<h3 id="ml.26">První držitelé Mozilla Bounty</h3>

<p>14. září Mozilla Foundation oznámila, že první Mozilla Security Bounties
(cena za objevení bezpečnostního problému v produktech Mozilla.org) získali
Marcelovi Boesch, Gael Delalleau, Georgi Guninski a Mats Palmgren, kteří
objevili a oznámili oprávněné zranitelnosti. Firefox 1.0 PR všechny tyto
chyby opravuje.</p>

<p>Přečtěte si
<a href="http://www.mozilla.org/press/mozilla-2004-09-14-01.html">tiskovou
zprávu Mozilla Foundation</a>.</p>


<h3 id="ml.27">Vydána ChatZilla 0.9.65</h3>

<p>16. září oznámil projekt ChatZilla dostupnost ChatZilly 0.9.65 (IRC
klient pro Mozillu). Opravuje 32 chyb a mimo jiná vylepšení přidává "barevné
vyznačení přítomnosti uživatele v seznamu, podporu pro SSL, nové uživatelské
příkazy a oživení výběru emotikonů," řekl Justin Turner. Také byla vylepšena
podpora pro DCC a znaky Unicode (pro podporu ostatních jazyků) nyní fungují
v přezdívkách, jménech kanálů a URL pro IRC. ChatZilla 0.9.65 bude obsažena
v balíku aplikací Mozilla 1.8. Je také dostupná jako rozšíření (<abbr
title="Cross-platform Package Installer">XPI</abbr>) pro Firefox i Mozilla
Suite. Nainstalovat si ji můžete z <a
href="http://www.hacksrus.com/~ginda/chatzilla/">oficiálních stránek
ChatZilly</a>.</p>

<p>Také byl oznámen projekt <a href="http://czplugins.mozdev.org/">ChatZilla
Plugins Project</a>. Bude spravovat a distribuovat skripty pro pluginy
ChatZilly.</p>


<h3 id="ml.28">Vydán Firefox 0.10.1</h3>

<p>1. října byla vydána aktualizace pro Firefox 1.0 PR. Opravuje <a
href="http://www.mozilla.org/press/mozilla-2004-10-01-02.html">bezpečnostní
chybu</a>, jež může způsobit smazání souborů v adresáři, kam se ukládají
stažené soubory.</p>

<p>Objevitel této chyby Alex Vincent poskytl neobvyklý pohled na <a
href="http://weblogs.mozillazine.org/weirdal/archives/006636.html">průběh
odhalení a opravení bezpečnostní díry v projektu Mozilla</a>.</p>


<h2 id="ml.3">Místní novinky</h2>
<p><em>Přispěla <a href="http://www.czilla.cz/">CZilla</a></em></p>

<h3 id="ml.31">Vyšel český i anglický Firefox 1.0 RC2</h3>

<p><a href="http://www.mozilla.org/">Mozilla.org</a> vydala další testovací
verzi <a href="/produkty/firefox/">prohlížeče Mozilla
Firefox 1.0 RC2</a>. Ke stažení jsou <a
href="http://ftp.mozilla.org/pub/mozilla.org/firefox/releases/1.0rc2/">anglické</a>
i <strong><a href="http://ftp.czilla.cz/mozilla.org/firefox/1.0rc2/">české
verze</a></strong>. Oproti pedchozí testovací verzi (RC1) bylo opraveno
několik chyb. Tato verze je určena pro testery, běžní uživatelé by měli
počkat na oficiální finální verzi 1.0.</p>

<h3 id="ml.32">Mozilla Thunderbird 0.9</h3>

<p>Vyšel <a href="http://www.mozilla.com/thunderbird/releases/">Mozilla
Thunderbird 0.9</a>. Mezi
<a href="http://www.mozilla.com/thunderbird/releases/">novinkami</a>
najdete seskupování zpráv ve složce a vylepšení offline režimu. Pokročilejší
uživatelé uvítají podporu
<a href="http://kb.mozillazine.org/index.phtml?title=Thunderbird_:_FAQs_:_Saved_Search">virtuálních složek obsahujících uložená hledání</a>.
Anglické verze ke stažení najdete na
<a href="http://ftp.mozilla.org/pub/mozilla.org/thunderbird/releases/0.9/">Mozilla.org</a>
a na
<a href="http://www.slunecnice.cz/product/Mozilla-Thunderbird/">Slunečnici</a>.</p>


<h3 id="ml.33">Lokalizace Outbox 0.1</h3>

<p><a href="http://outbox.mozdev.org/" title="Outbox: Domovská
stránka">Outbox</a> je jednoduché rozšíření, které do hlavní lišty Mozilla
Thunderbirdu přidává možnost přidání dalších tlačítek - Odeslat později a
Pijmout/Odeslat. Tato tlačítka využijí zejména uživatelé migrující z
e-mailového klienta Outlook Express, kde jsou tato tlačítka k dispozici.
Díky <a href="http://www.martingrames.net/" title="Martin Grames: Domovská
stránka" hreflang="cs">Martinu Gramesovi</a> je toto rozšíření k dispozici v
češtině. Naleznete jej na <a href="ftp://ftp.czilla.cz/other/addons/outbox/"
title="Odkaz na FTP CZilla">našem FTP</a> (<a
href="http://ftp.czilla.cz/other/addons/outbox/" title="Odkaz skrze HTTP
rozhraní">HTTP rozhraní</a>).</p>


<h3 id="ml.33a">Lokalizace Googlebar 0.9.0.30</h3>

<p>Připravili jsme lokalizaci poslední verze rozšíření <a
href="http://googlebar.mozdev.org/" title="Googlebar: Domovská stránka"
hreflang="en">Googlebar</a>. Tato verze je určena pro Mozilla Firefox 1.0PR
a novější. K dispozici je na <a
href="ftp://ftp.czilla.cz/other/addons/googlebar/googlebar-0.9.0.30.cs-CZ-firefox.xpi"
title="Odkaz na Googlebar pro Firefox">našem FTP</a> (<a
href="http://ftp.czilla.cz/other/addons/googlebar/googlebar-0.9.0.30.cs-CZ-firefox.xpi"
title="Odkaz na Googlebar pro Firefox">HTTP rozhraní</a>).</p>


<h3 id="ml.34">Mozilla, Firefox a download managery</h3>

<p>Používáte pro stahování <a
href="/podpora/mozilla-a-download-managery.php">download managery</a>?
Zajímá vás, které managery můžete používat spolu s <a
href="/produkty/suite/">Mozillou</a> a <a
href="/produkty/firefox/">Firefoxem</a>? Přečtěte si článek <a
href="/podpora/mozilla-a-download-managery.php">Mozilla, Firefox a
download managery</a>, kde najdete přehled těch nejčastěji používaných spolu
s popisem, jak který z nich spolupracuje s Mozillou a Firefoxem.</p>

<h3 id="ml.35">Lokalizace fireFTP 0.84.3</h3>

<p>Díky <a href="http://home.tiscali.cz/errorek/" title="Ladislav Vykukal:
Domovská stráka" hreflang="cs">Ladislavu Vykukalovi</a> si můžete používat
českou verzi rozšíření <a href="http://fireftp.mozdev.org/" title="fireFTP -
Domovská stráka" hreflang="en">fireFTP</a>. K dispozici je na <a
href="ftp://ftp.czilla.cz/other/addons/fireftp/" title="Odkaz na FTP
CZilla">FTP CZilla</a> (<a href="http://ftp.czilla.cz/other/addons/fireftp/"
title="Odkaz na FTP CZilla (HTTP rozhraní)">HTTP rozhraní</a>).</p>

<h3 id="ml.36">Lokalizace Web Developer Extension</h3>

<p>Toto rozšíření využijí zejména vývojáři webových stránek. Umožňuje
rychlou kontrolu webu ve validátorech, ladění jednotlivch prvků stránky,
zvýraznění definovaných objektů apod. <a
href="http://sorry.vse.cz/%7Exkecm01/" title="Michal Kec: Domovská stránka"
hreflang="cs">Michal Kec (Mik)</a> připravil lokalizované balíčky, které
naleznete na <a href="ftp://ftp.czilla.cz/other/addons/webdeveloper/"
title="CZilla.cz: Odkaz na ftp" hreflang="cs">našem FTP</a> (<a
href="http://ftp.czilla.cz/other/addons/webdeveloper/" title="CZilla.cz:
webov.rozhran.ftp" hreflang="cs">http rozhraní</a>). Rozšíření je k
dispozici jak pro Mozilla Suite, tak Mozilla Firefox.</p>


<h3 id="ml.37">Firefox 1.0 Party</h3>

<p>Vydání oficiálních finálních verzí Firefoxu a Thunderbirdu 1.0 se chystá
komunita Mozilly, stejně jako <a
href="http://www.mozilla.org/start/1.0/parties.html" hreflang="en">při
vydání Mozilly 1.0</a>, pořádně oslavit. Datum oslav, které budou probíhat
<a href="http://www.openforce.at/mozparty2/" hreflang="en">po celém
světě</a> o víkendu 19. - 21.&nbsp;11.&nbsp;2004, bylo pro <a
href="http://www.openforce.at/mozparty2/?party=65">party v Praze</a>
stanoveno na sobotu 20.&nbsp;listopadu. Přidejte se k ostaním uživatelům
Firefoxu a Thunderbirdu a pořádně to s nimi oslavte. Více informací a
diskuzi najdete v našem <a
href="http://forum.czilla.cz/viewtopic.php?t=3251">fóru</a>.</p>

<h3 id="ml.38">Ikonky Miluju Firefox a zkušenost A. Hausenblasové</h3>

<p>Na webu <a href="http://firefox.mozilla.cz/">Přejděte na Firefox</a> se o
svou zkušenost se podělila <a
href="http://firefox.mozilla.cz/zkusenosti/anna-hausenblasova/" title="Anna
Hausenblasová">Anna Hausenblasová</a> a pro opravdové fanoušky Firefoxu
nabízí nové ikonky "<a
href="http://firefox.mozilla.cz/propagace/srdicka/">Miluju Firefox</a>".</p>


<h3 id="ml.39">Lokalizace Mozilla Thunderbird 0.8</h3>

<p>Připravili jsme českou lokalizaci <a href="/produkty/thunderbird/">Mozilla
Thunderbirdu</a> 0.8. V <a
href="http://www.czilla.cz/produkty/thunderbird/stahnout.html">sekci download</a>
najdete <a
href="http://ftp.czilla.cz/mozilla.org/thunderbird/0.8/thunderbird-0.8.cs-CZ.win32.installer.exe">instalátor
pro Windows</a> (6.1&nbsp;MB) a <a
href="http://ftp.czilla.cz/mozilla.org/thunderbird/0.8/thunderbird-0.8.cs-CZ.linux-i686.tar.gz">tarball
pro Linux</a> (10.8&nbsp;MB). Samostatný lokalizační balíček (<a
href="http://ftp.czilla.cz/mozilla.org/thunderbird/0.8/lang/thunderbird-0.8-csCZ-langpack.zip"
title="Mozilla Thunderbird 0.8: Samostatným instalačním balíčkem">http</a>,
<a
href="ftp://ftp.czilla.cz/mozilla.org/thunderbird/0.8/lang/thunderbird-0.8-csCZ-langpack.zip"
title="Mozilla Thunderbird 0.8: Samostatn instalační balíček">ftp</a>),
můžete počeštit anglickou verzi. Lokalizovaná ZIP verze (<a
href="http://ftp.czilla.cz/mozilla.org/thunderbird/0.8/thunderbird-0.8.cs-CZ.win32.zip"
title="Mozilla Thunderbird 0.8: Stažení ZIP verze">http</a>, <a
href="ftp://ftp.czilla.cz/mozilla.org/thunderbird/0.8/thunderbird-0.8.cs-CZ.win32.zip"
title="Mozilla Thunderbird 0.8: Stažení ZIP verze">ftp</a>).</p>

<h3 id="ml.310">Aktuální záložky snadno a rychle</h3>

<p>Pokud ve <a href="http://firefox.mozilla.cz/">Firefoxu</a> používáte <a
href="/podpora/firefox/aktualni-zalozky.php">aktuální
záložky</a> a narážíte na stránky, které je neumožňují snadno přidat,
vytvořil pro vás Michal Vyskočil <a
href="http://livemarks.aktualne.cz/">stráku</a>, která to usnadňuje.</p>


<h3 id="ml.311">Nový web CZilly: Přejděte na Firefox</h3>

<p>Chcete doporučit <a href="/produkty/firefox/">Firefox</a> svým přátelům,
kolegům a návštěvníkům svých stránek? Pak je odkažte na nový web <a
href="http://firefox.mozilla.cz/">Přejděte na Firefox</a>. Na webu naleznou
dostatek důvodů, <a href="http://firefox.mozilla.cz/proc-prejit/">proč by
měli přejít na nový prohlížeč</a>. Mohou si přečíst <a
href="http://firefox.mozilla.cz/zkusenosti/">zkušenosti uživatelů
Firefoxu</a>, odpovědi na <a
href="http://firefox.mozilla.cz/otazky/">nejčastější otázky</a> a mnoho
dalšího. Pro stránkyy nadšených uživatelů Firefoxu web nabízí <a
href="http://firefox.mozilla.cz/propagace/">sadu propagačních ikonek a
proužků</a>. Pro ostatní <a
href="http://firefox.mozilla.cz/stahnout/tapety/">tapetu</a> na pracovní
plochu s logem Firefoxu.</p>


<h3 id="ml.312">Firefox vítězem velkého testu časopisu Computer</h3>

<p>Časopis Computer ve svém 18. čísle testoval webové prohlížeče a
jednoznačným vítězem testu zaměřeného na kvalitu zobrazení, blokování
reklam, bezpečost, uivatelské rozhraní rychlost se stal Mozilla Firefox.
Internet Explorer obsadil předposlední místo.</p>


<h2 id="ml.4" class="nice">Projekty</h2>
<p><em>Přispěl Brian King</em></p>

<p>Zprávy o samostatných projektech obsahují novinky a poslední informace o
Mozille a rozšířeních shromážděných na Mozdev.org a jinde v rámci
komunity.</p>

<p>Neustále se objevují nová rozšíření - jak na mozdev.org tak i na jiných
místech. Výběr je obrovský - od vývojářských nástrojů přes FTP klienty až po
informace o čase a o počasí. Vybere si téměř každý. Ale pokud máte skvělý
nápad, který ještě nebyl realizován, může vám pomoci spousta zdrojů.</p>

<p>Pro začátek je vhodné použít rozšíření Jeda Browna k <a
href="http://jedbrown.net/mozilla/EM/">převodu starších rozšíření na novou
verzi</a>. Tím získáte přehled o všech souborech, které mají být zahrnuty do
vašeho rozšíření &ndash; od souboru install.rdf v balíčku XPI až po soubor
update.rdf na serveru pro Správce rozšíření ke zjišťování novějších verzí
rozšíření. Užitečné je také přečíst si stránky o <a
href="http://www.mozilla.org/projects/firefox/extensions/">rozšířeních</a>
pro Firefox na mozilla.org. Tam jsou nezbytné informace o číslování verzí,
aktualizaci a kompatibilitě rozšíření. Tyto dokumenty vysvětlují zvláštnosti
tvorby rozšíření pro Mozillu a odvozené produkty. A nezapomeňte navštívit <a
href="https://addons.mozilla.org/">Mozilla Update</a> a stáhnout si ta
nejnovější a nejlepší rozšíření pro každodenní používání.</p>


<h3 id="ml.41"><a href="http://cuneaform.mozdev.org/">cuneAform 0.3</a></h3>

<p>Komunitou vytvořený editor pro každého.<br />
Programy: Mozilla, Firefox<br />
Platformy: Windows, Linux, Mac OS X</p>

<p>CuneAform má nyní instalátor kompatibilní s Firefoxem 0.9 a novějším.
Stává se z něj komunitou vyvíjený projekt, který hledá vývojáře a
přispěvatele.</p>

<p>Významné novinky:</p>

<ul>
	<li>Nový design webových stránek projektu.</li>
	<li>Nová e-mailová konference.</li>
	<li>Nové fórum komunity.</li>
	<li>Pracuje se Správcem rozšíření.</li>
</ul>


<h3 id="ml.42"><a href="http://gnusto.mozdev.org/">Gnusto 0.7</a></h3>

<p>Překladač her pro Z-machine.<br />
Program: Firefox<br />
Platformy: Windows, Linux, Mac OS X</p>

<p>Verze 0.7.0 byla vydána po delší době, takže přináší spoustu novinek.</p>

<p>Významné novinky:</p>

<ul>
	<li>Podpora 3. a 4. verze specifikace Z-machine.</li>
	<li>Možnost ukládání a načítání her.</li>
	<li>Načítání her jediným klepnutím myši na stránkách zobrazených ve Firefoxu.</li>
	<li>Opraveno mnoho drobných chyb.</li>
</ul>


<h3 id="ml.43"><a href="http://purgecontrol.mozdev.org/">PurgeControl 0.2b</a></h3>

<p>Protect important emails from being accidentally deleted.<br />
Program: Thunderbird<br />
Platformy: Windows, Linux, Mac OS X</p>

<p>PurgeControl je rozšíření pro TB, které umožňuje nastavit chování
klávesové zkratky Shift-Delete. Nyní lze stáhnout verzi 0.2b, která opravuje
drobnou chybu.</p>


<h3 id="ml.44"><a href="http://caminol10n.mozdev.org/">Caminol10n</a></h3>

<p>Lokalizace Camina: prohlížeč pro Mac OS X založený na technologii Gecko<br />
Program: Camino<br />
Platforma: Mac OS X<br /></p>

<p>Vydali jsme Camino 0.8.1 v mnoha jazycích. Jde o první verzi s provizorní
praxí ověřování kvality (QA - Quality Assurance). Také se snažíme zapojit
více lokalizačních týmů: pracujeme na české, portugalské a polské verzi. Také jsme
obnovili španělskou/katalánskou verzi, která u verze 0.8.1 chyběla a je nyní
šířena jako samostatný instalátor.</p>

<p>Významné novinky:</p>

<ul>
	<li>Lepší ověřování kvality překladu.</li>
	<li>Připravuje se lokalizace do dalších jazyků.</li>
</ul>


<h3 id="ml.45"><a href="http://maf.mozdev.org/">Mozilla Archive Format 0.4.2</a></h3>

<p>Programy: Mozilla, Firefox<br />
Platformy: Windows, Linux</p>

<p>Nyní je založen především na složkách jednotlivých služeb a obsahuje více
lokalizací. MHT kódování/dekódování nyní podporuje standardy z 99,99 %.</p>

<p>Významné novinky:</p>

<ul>
	<li>Aktualizován pro kompatibilitu s Firefoxem PR.</li>
	<li>Přidán protokol MAF.</li>
	<li>Výchozí přípona pro ukládání je *.maff, aby se předešlo konfliktům s MS Accessem.</li>
	<li>Přidána položka Save in Archive (Uložit do archivu) do kontextové nabídky.</li>
	<li>Opravena chyba při konverzi znaků v UTF, která postihovala sady s jinými než anglickými znaky.</li>
</ul>


<h3 id="ml.46"><a href="http://outsidebar.mozdev.org/">OutSidebar 0.8</a></h3>

<p>Otevře všechny postranní panely nalevo od okna prohlížeče, čímž zabrání
změně velikosti plochy pro zobrazování webových stránek.<br />
Program: Firefox<br />
Platformy: Windows, Linux<br />
Vydána první verze!</p>

<p>Významné fuknce:</p>

<ul>
	<li>OutSidebar umožňuje používat postranní panely Firefoxu, aniž by se
	pokaždé měnila jejich velikost.</li>
	<li>Podporuje Firefox 0.9 &ndash; 1.0RC.</li>
	<li>Pracuje na Windows a Linuxu. (Zatím nepodporuje Mac OS X.)</li>
</ul>


<h3 id="ml.47"><a href="http://hon.mozdev.org/">HONcode Status 1.4, HONlookup 1.3</a></h3>

<p>Sada pluginů Mozilly / Netscapu pro HON<br />
Program: Mozilla Firefox<br />
Platformy: Windows, Linux, Mac OS X<br />
Aktualizována rozšíření pro kompatibilitu s Firefoxem 1.0PR.</p>


<h3 id="ml.48"><a href="http://mailredirect.mozdev.org/">Mail Redirect 0.1.7</a></h3>

<p>Umožňuje přesměrovávat zprávy dalším příjemcům.<br />
Programy: Thunderbird, Mozilla Mail<br />
Platformy: všechny</p>

<p>MailRedirect se snaží potlačit <a
href="https://bugzilla.mozilla.org/show_bug.cgi?id=12916">chybu 12916</a>.
MailRedirect nyní vypadá stejně v Mozilla Mailu i v Thunderbirdu. Byla
přidána tlačítka do nástrojových lišt (pro motiv vzhledu Classic a Modern) a
vylepšena podpora CSS.</p>

<p>Další významné novinky:</p>

<ul>
	<li>Přidán odinstalátor pro Mozillu.</li>
	<li>Možnost přesměrování zpráv ve složkách Koncepty a Lokální složky.</li>
	<li>Quoted-printable kódování adresy příjemce.</li>
	<li>Mezi připravovanými novinkami je možnost přesměrování pomocí kopie
	(CC) nebo skryté kopie (BCC) a integrace přesměrování do
	filtrů.</li>
</ul>

<p>Více informací o každém projektu se dozvíte <a
href="http://www.mozdev.org/status/2004-08-30-status.html">ve zprávě</a>.</p>


<h2 class="nice" id="ml.7">Kontaktní informace</h2>

<p>
	<a href="http://mail.mozilla.org/listinfo/newsletter"
		title="Odhlásit nebo změnit heslo">Správa odběru</a> -
	<a href="mailto:newsletter-feedback@mozilla.org">Komentáře a návrhy</a> -
	<a href="http://www.nostalsong.com/mozillalinks/modules.php?name=Content&amp;pa=showpage&amp;pid=2"
		title="About the Mozilla Links Sponsorship Program">Sponzorování</a>
</p>

<p>Ochrana soukromí: K přijímání tohoto zpravodaje je vyžadována pouze
platná e-mailová adresa. Ta nebude využita k jiným účelům než k těm, které
souvisí s tímto zpravodajem (doručení, podpora, odhlášení apod.).</p>

<p>Copyright 2004 přispěvatelé zpravodaje Mozilla Links. Mozilla Links(TM)
je měsíční elektronický zpravodaj vydávaný projektem <a
href="http://newsletter.mozdev.org">Mozilla Newsletter</a> pod licencí <a
href="http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode">Creative
Commons Attribution-NonCommercial-ShareAlike 1.0</a>. Je překládán do
tradiční čínštiny, češtiny, němčiny, italštiny, japonštiny, polštiny,
portugalštiny, ruštiny a španělštiny.</p>

<p>Projekt Mozilla Links Newsletter hostuje na <a
href="http://www.mozdev.org/" title="mozdev.org - bezplatný hosting projektů
komunity projektu Mozilla">Mozdev.org</a></p>

<p>České vydání připravili: Petr Tomeš, Tomáš Marek a Vlastimil Ott<br />
e-mail: <a href="mailto:info@czilla.cz">info@czilla.cz</a><br />
web: <a href="http://www.czilla.cz/podpora/zpravodaj/">http://www.czilla.cz/podpora/zpravodaj/</a><br />
Uvítáme další překladatele, kteří by v rámci svých možností pomohli zkrátit
časové prodlevy při vydávání českých verzí tohoto zpravodaje!</p>

<?php
	$page->includeTemplate('footer');
?>
