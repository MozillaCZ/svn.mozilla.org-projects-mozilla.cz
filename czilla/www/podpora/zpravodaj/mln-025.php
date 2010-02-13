<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Zpravodaj Mozilla Links - 25. číslo';
	$page->headline = array('Zpravodaj Mozilla Links','25. číslo (24.1.2005 / 28.1.2005)');

	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');

	$page->includeHeader();
?>

<pre>

9. listopadu přišel na svět velmi očekávaný Firefox 1.0. Pokud jste
používali Firefox Preview Release nebo Release Candidate, neobjevíte
žádné nové funkce, protože většina změn byly opravy chyb nebo skrytá
vylepšení.

A 6. prosince, po rychlém sledu nových a candidate verzí, spatřil světlo
světa Thunderbird 1.0 a připojil se k rostoucímu úspěchu, který Firefox
odstartoval o měsíc dříve. 17. prosince dosáhl prvního milionu stažení.
Nyní se Firefox pyšní 19 miliony (poznámka překladatele: již 21 milionů)
stažení.

Co bude následovat? Ben Goodger, hlavní vývojář Firefoxu, před několika
dny oznámil některé změny okna s možnostmi nastavení
(<a href="http://www.bengoodger.com/software/mb/options/prefwindowv/prefs.html">http://www.bengoodger.com/software/mb/options/prefwindowv/prefs.html</a>)
a Kevin Gerich, člen týmu Vizuálního rozvržení Mozilly také oznámil
vylepšení tohoto okna (<a href="http://kmgerich.com/archive/000083.html">http://kmgerich.com/archive/000083.html</a>). Firefox
1.1 je naplánován na březen 2005 a měl by přinést hlavně vnitřní
vylepšení. Nedávno byl také aktualizován plán vývoje
(<a href="http://www.mozilla.org/projects/firefox/roadmap.html">http://www.mozilla.org/projects/firefox/roadmap.html</a>).

Server MozillaZine informoval o tom, že vývojáři Thunderbirdu testují
automatickou kontrolu pravopisu
(<a href="http://www.mozillazine.org/talkback.html?article=5922">http://www.mozillazine.org/talkback.html?article=5922</a>). Díky této
vlastnosti Thunderbird při tvorbě zprávy zkontroluje pravopis
v preferovaném jazyce. Ukázka je dostupná na
<a href="https://bugzilla.mozilla.org/attachment.cgi?id=171212">https://bugzilla.mozilla.org/attachment.cgi?id=171212</a>

Děkujeme za přízeň. Své připomínky a komentáře zasílejte prosím
prostřednictvím <a href="http://newsletter.mozdev.org/contact.php">http://newsletter.mozdev.org/contact.php</a> .

Percy Cabello
Mozilla Links

__________________________________


V tomto čísle:

1. VYLEPŠENÍ
       - Recenze: fireFTP
       - SuperTip: Upravení zvuku pro funkci "Najít na této stránce"
       - SuperTip: Schování ikon stránky (tzv. favicons)

2. NEWS
       - Vydána Mozilla 1.7.5
       - Vydáno Nvu 0.70
       - Nová verze Adobe Readeru
       - Aktualizace stránek Mozilla Update
       - Podpora produktů projektu Mozilla je nyní dostupná
         prostřednictvím elektronické pošty
       - Nový návrh Netscape: hybrid
       - Místní novinky

3. PROJEKTY

4. ANKETA

5. KONTAKTNÍ INFOMRACE

________________________________

1. VYLEPŠENÍ
________________________________


Recenze: fireFTP 0.86.1
_______________________

Vytvořil Mime Cuvalo

FireFTP (<a href="http://fireftp.mozdev.org/">http://fireftp.mozdev.org</a>) je užitečné a mocné rozšíření, které
přináší plnohodnotnou podporu FTP (File Transfer Protokol) do Firefoxu.
FTP je výkonný a široce rozšířený protokol pro přenos souborů po
Internetu. Původní podpora FTP ve Firefoxu je omezena na pouhé stahování
souborů z FTP serverů (adresy v Navigační liště, které začínají ftp:).
FireFTP dovoluje přihlásit se k FTP serveru a procházet lokální
i vzdálené složky. Pak můžete vybrat soubor v jakékoliv lokaci
a přetáhnout ho do cíle uploadu nebo downloadu. Také lze nastavit práva
souborům na vzdálených serverech (tedy podobně jako v systému Unix -
číst, psát, spouštět pro vlastníka, skupinu a světové uživatele).

FireFTP lze spustit jak v novém okně tak v novém panelu. Podporuje mnoho
pokročilých funkcí, mezi nimiž nechybí ani podpora proxy serverů, výběr
zvláštních FTP portů, automatické přepojení nebo automatická aktualizace
vzdálených složek.

V budoucích verzích se očekává automatické zacházení s FTP odkazy na
webových stránkách, přidání tlačítka do nástrojové lišty, funkce "táhni
a pusť" z plochy, zobrazení stavu uploadu (přenosu) a mnoho dalších
vylepšení. FireFTP pracuje na Windows, Mac OS a Linuxu a je dostupné
zdarma ke stažení. Balíček je velký 55 kB a na výběr je přibližně deset
jazyků.


SuperTip: Upravení zvuku pro funkci "Najít na této stránce"
___________________________________________________________

Přispěl Percy Cabello

Když hledáte text na stránce s použitím funkce Najít na této stránce,
ale žádný není nalezen, přehraje se zvuk. Pro deaktivaci zadejte do
adresního řádku about:config . Zobrazí se vám veškerá nastavení. Najděte
položku "accessibility.typeaheadfind.enablesound". Rychleji ji
naleznete, když vepíšete několik písmen do políčka Filtr, například
"sound". Poklepejte na položku "accessibility.typeaheadfind.enablesound"
a její hodnota se změní na "false".

Pro změnu zvuku na vlastní přejděte opět do about:config a vyhledejte
položku "accessibility.typeaheadfind.soundURL". Opět na ní poklepejte
a do nově otevřeného okna vepište cestu ke zvukovému souboru. Například
když je cesta k souboru "c:\mybeep.wav", napište "<a href="file:///c:/mybeep.wav">file:///c:/mybeep.wav".</a>

Aby se změny projevily, spušťě Firefox znovu.


SuperTip: Schování ikon stránky (tzv. favicons)
______________________________________________

Přispěl Percy Cabello

Tzv. favicons jsou malé ikony, které identifikují webovou stránku
v panelech a záložkách. Pokud chcete zabránit jejich používání za účelem
čistšího a méně barevného vzhledu, zadejte do adresního řádku adresu
about:config. Zobrazí se seznam všech nastavení. Najděte položku
browser.chrome.favicons" a poklepáním změňte její hodnotu na false. Od
této chvíle nebudou ikony stránek v záložkách a panelech zobrazovány.

________________________________

2. NOVINKY
________________________________

Vydána Mozilla 1.7.5
____________________

Dne 18. prosince byl aktualizován balík Mozilla Application Suite na
nejnovější verzi renderovacího jádra Gecko. Znamená to, že nyní
podporuje více webových stránek optimalizovaných pro IE a nová rozšíření
rozhraní Netscape Plugin API, která byla vyvinuta skupinou vývojářů
a výrobců prohlížečů a zásuvných modulů - Opera, Adobe, Apple,
Macromedia, Sun Microsystems a Mozilla Foundation.

Aktuální verzi můžete získat zde:
<a href="http://www.mozilla.org/products/mozilla1.x/">http://www.mozilla.org/products/mozilla1.x/</a>


Vydáno Nvu 0.70
_______________

6. ledna společnosti Disruptive Innovations a Linspire vydaly editor
webových stránek Nvu 0.70 založený na kódu Firefoxu. V nové verzi jsou
vylepšena vodorovná a svislá pravítka, správce webových stránek
podporuje více stránek najednou, funkce drag&amp;drop podporuje externí
soubory v Linuxu, vylepšena podpora PHP aplikací a několik dalších
vylepšení.

Stáhnout Nvu 0.70: <a href="http://www.nvu.com/download.html">http://www.nvu.com/download.html</a>


Nová verze Adobe Readeru
________________________

Společnost Adobe vydala Adobe Reader 7.0, aktualizaci své populární
aplikace na čtení elektronických dokumentů. Asa Dotzler z Mozilla
Foundation sepsal pěkný přehled vylepšení této verze a tipů pro
zrychlení aplikace. Naleznete jej zde:
<a href="http://weblogs.mozillazine.org/asa/archives/007183.html">http://weblogs.mozillazine.org/asa/archives/007183.html</a>

Stáhnout Adobe Reader: <a href="http://www.adobe.com/products/acrobat/readstep2.html">http://www.adobe.com/products/acrobat/readstep2.html</a>

Aktualizace stránek Mozilla Update
__________________________________

Aktualizace stránek Mozilla Update přinesla lepší vzhled a jasnější
organizaci obsahu, která usnadňuje hledání požadovaných rozšíření,
motivů vzhledu nebo nově také zásuvných modulů, které můžete potřebovat.

Mozilla Update: <a href="https://addons.mozilla.org/">https://addons.mozilla.org</a>


Podpora produktů projektu Mozilla je nyní dostupná prostřednictvím
elektronické pošty
__________________________________________________________________

MozSource, provozovatel obchodu Mozilla Store, oznámil okamžitou
dostupnost podpory prostřednictvím elektronické pošty pro produkty
Firefox 1.0, Thunderbird 0.9, Mozilla Application Suite 1.7.x a Camino
0.8, a to v rámci jejich příslušných minimálních systémových požadavků.
Rozšíření, motivy vzhledu a zásuvné moduly do této podpory nespadají.
Jak se uvádí v podmínkách poskytování služeb, řešení není garantováno
a je omezeno na specifické schopnosti a funkce aplikací. Během
zaváděcího zkušebního období bude v jednotlivých případech účtována
nízká cena 4,99 $ se zárukou odpovědi do 48 hodin.

Podpora MozSource je dostupná zde: <a href="http://support.mozsource.com/">http://support.mozsource.com/</a>


Nový návrh Netscape: hybrid
___________________________

30. listopadu společnost Netscape poodhalila prototyp, který by se měl
stát příští verzí prohlížeče Netscape Navigator. Po Internetu se již
několik dnů před tímto oznámením šířily fámy o tom, že nová verze bude
založena na prohlížeči Firefox. O to větším překvapením bylo zjištění,
že tato verze nebude založena pouze na prohlížeči Firefox, ale také na
prohlížeči Microsoft Internet Explorer. Uživatelé, kteří budou
potřebovat pracovat se stránkami optimalizovanými pro IE, nyní budou mít
možnost v rámci stejného rozhraní přepnout na zobrazovací technologii
IE. 17. ledna byl vydán aktualizovaný prototyp. Je vybaven novým
rozhraním a založen na stejném kódu jako Firefox 1.0.

Náhledy prototypu je možné zhlédnout zde:
<a href="http://www.mozillazine.org/clanky/article5691.html">http://www.mozillazine.org/clanky/article5691.html</a>


Místní novinky
______________

Přispěla CZilla (<a href="http://www.czilla.cz/">http://www.czilla.cz</a>)

Lokalizace Nvu 0.7
Editor webových stránek Nvu je díky Pavlu Petricovi nyní k dispozici
i v češtině. NVU je WYSIWYG editor webových stránek založený na editoru
z Mozilla Suite, jehož možnosti byly dále rozšířeny. Celý produkt je
v současně době ve vývoji a finální verze na sebe nenechá dlouho čekat.
Plnou verzi tohoto editoru si můžete stáhnout ze serveru Slunečnice
(<a href="http://www.slunecnice.cz/product/Nvu/">http://www.slunecnice.cz/product/Nvu/</a>) a počeštit ji jazykovým balíčkem
(ZIP, 200 KB -
<a href="http://ftp.czilla.cz/other/nvu/0.7/lang/nvu-0.7.cs-CZ.langpack.zip">http://ftp.czilla.cz/other/nvu/0.7/lang/nvu-0.7.cs-CZ.langpack.zip</a>).

Návod na instalaci motivu vzhledu do Mozilla Firefoxu
Chcete ve Firefoxu použít nový motiv vzhledu, a nevíte jak na to? Tak
právě pro vás jsme připravili návod na instalaci nového motivu vzhledu
do Firefoxu
(<a href="/podpora/firefox/instalace-motivu-vzhledu.html">http://www.czilla.cz/podpora/firefox/instalace-motivu-vzhledu.html</a>).
Dozvíte se v něm, jak motiv vzhledu nainstalovat z Internetu a jak
z pevného disku.

Ptejte se Pavla Folprechta na bankovnictví GE Money Bank
Na serveru Měšec.cz se v těchto dnech můžete ptát Pavla Folprechta
(<a href="http://www.mesec.cz/poradna/internetove-bankovnictvi-leden-2005/">http://www.mesec.cz/poradna/internetove-bankovnictvi-leden-2005/</a>),
ředitele přímého bankovnictví GE Money, na jejich budoucí plány ohledně
internetového bankovnictví, podpory moderních prohlížečů
(<a href="/podpora/internetova-bankovnictvi-v-mozille.html">http://www.czilla.cz/clanky/internetova-bankovnictvi-v-mozille.html</a>)
apod.

Návod na instalaci motivů vzhledu do Mozilla Suite
Připravili jsme přehledný návod na instalaci motivů vzhledu do Mozilla
Suite (<a href="/podpora/suite/instalace-motivu-vzhledu.html">http://www.czilla.cz/podpora/suite/instalace-motivu-vzhledu.html</a>).

Lokalizační balíček Firefoxu pro Mandrakelinux
Konečně se zrodil i lokalizační balíček Firefoxu pro Mandrakelinux. Na
rpm.pbone.net hledejte "mozilla-firefox-cs".

Seriál o programech projektu Mozilla na ABCLinuxu
Na portálu ABCLinuxu v minulých týdnech proběhlo představení mladších
programů projektu Mozilla.org: Firefox
(<a href="http://www.abclinuxu.cz/clanky/show/71163">http://www.abclinuxu.cz/clanky/show/71163</a>), Thunderbird
(<a href="http://www.abclinuxu.cz/clanky/show/71392">http://www.abclinuxu.cz/clanky/show/71392</a>) (Thunderbird - druhý díl:
<a href="http://www.abclinuxu.cz/clanky/show/72308">http://www.abclinuxu.cz/clanky/show/72308</a>) a připravovaný Sunbird
(<a href="http://www.abclinuxu.cz/clanky/show/72756">http://www.abclinuxu.cz/clanky/show/72756</a>). Obsahují úvod do používání
programů, tipy a triky pro uživatele Linuxu. Za zmínku stojí i Liber
Mozillae aneb Tajemná Kniha Mozilly
(<a href="http://www.abclinuxu.cz/clanky/show/67892">http://www.abclinuxu.cz/clanky/show/67892</a>).

Česká lokalizace Firefoxu oficiální součástí Debianu
Už i uživatelé Debianu si budou moci vychutnat Mozillu Firefox
v češtině. Balíček s českou lokalizací
(<a href="http://packages.debian.org/unstable/web/mozilla-firefox-locale-cs-cz">http://packages.debian.org/unstable/web/mozilla-firefox-locale-cs-cz</a>)
se totiž stal oficiální součástí této celosvětově oblíbené distribuce.

Prohlížíme si svět v panelech
Prohlížení v panelech se stalo nepostradatelnou součástí moderních
prohlížečů. Denně jeho sílu objevují další a další uživatelé. Článek
Mozilla Firefox a prohlížení v panelech
(<a href="http://www.czilla.cz/clanky/firefox-prohlizeni-v-panelech.html">http://www.czilla.cz/clanky/firefox-prohlizeni-v-panelech.html</a>)
pomůže začínajícím uživatelům naučit se tuto funkci naplno využívat.
Vysvětluje, co je prohlížení v panelech, popisuje ovládání panelů
a nastiňuje jeho praktické využití.

Sbírka na Firefoxe předčila očekávání
Příspěvky od komunity Mozilly překonaly všechna naše očekávání. Za
vybrané peníze lze adoptovat nejen jednu pandu, což bylo původním cílem
akce (<a href="/clanky/tiskove-zpravy/adoptujte-pandu.html">http://www.czilla.cz/clanky/tz-adoptujte-pandu.html</a>), ale obě
dvě pandy! Dle Fóra dárců (<a href="http://www.donorsforum.cz/">http://www.donorsforum.cz/</a>) přišlo totiž více
než 800 DMSek. S velkým napětím nyní očekáváme obdržení konečného součtu
sbírky (dosud chybí údaj o částkách převedených přímo na účet pražské
ZOO), ale již teď je jisté, že obě pandy se budou mít dobře minimálně
rok. Všem lidem, kteří přispěli, děkujeme.

Návod jak překládat rozšíření
Rozšíření pro aplikace Mozilla.org přibývá jako hub po dešti. Řada
z nich byla lokalizována do češtiny (<a href="http://www.czilla.cz/doplnky/rozsireni/">http://www.czilla.cz/doplnky/rozsireni/</a>)
a množství na lokalizaci ještě čeká. S návodem Překládáme rozšíření
(<a href="/czilla/jak-pomoci/preklad-rozsireni.html">http://www.czilla.cz/clanky/prekladame-rozsireni.html</a>) se můžete
připojit k řadě lidí, kteří pomáhají přinášet Firefox uživatelům.
Dozvíte se, z čeho je složen balíček rozšíření, řešení případných
problémů a jak postupovat, pokud chcete lokalizované rozšíření otestovat
a zveřejnit.

Interval píše o Spread Firefox
Interval.cz přinesl článek o marketingové iniciativě Spread Firefox
(<a href="http://interval.cz/clanek.asp?article=3728">http://interval.cz/clanek.asp?article=3728</a>), úspěšném příkladu
virálního marketingu. Autor článku, Zdeněk Hrazdila, pak dále popisuje
způsoby, jakými propagační kampaň dosáhla svých úspěchů. Zajímavá je
i informace, že software, na kterém Spread Firefox běží, byl dříve
využíván i během americké prezidentské kampaně.

Jak spouštět Mozillu s parametry
Vlasta Hopjan přeložil přehled základních parametrů příkazové řádky
Mozilly (<a href="/podpora/suite/mozilla-s-parametry.html">http://www.czilla.cz/podpora/suite/mozilla-s-parametry.html</a>). Přivítají
je zejména pokročilejší uživatelé. Dozvíte se, jak pomocí parametrů (ať
již připravených v zástupci na ploše nebo jako alias vašeho shellu)
spouštět Mozillu se specifikovaným profilem, zadanou aplikací, určitou
velkostí okna a další triky.

Lokalizace rozšíření Theme Installer pro Mozilla Suite
Rozšíření Theme Installer se dočkalo české lokalizace. Rozšíření slouží
k instalaci stažených motivů vzhledu v Mozilla Suite. Lokalizovaný
balíček naleznete na našem FTP (<a href="http://ftp.czilla.cz/other/addons/themer/">http://ftp.czilla.cz/other/addons/themer/</a>).

MozBackup 1.4 CZ Final
Program MozBackup, který slouží k zálohování uživatelských profilů
aplikací Mozilla.org, se dočkal finální verze 1.4. Nová verze s sebou
přináší možnost zálohování nainstalovaných rozšíření v aplikacích
Mozilla Firefox &amp; Thunderbird, zálohování virtuálních složek a RSS
kanálu. Bylo též opraveno několik chyb. Stahovat můžete instalační
program (<a href="http://mozbackup.jasnapaka.com/soubory/14/MozBackup-1.4-CZ.exe">http://mozbackup.jasnapaka.com/soubory/14/MozBackup-1.4-CZ.exe</a>)
či ZIP verzi
(<a href="http://mozbackup.jasnapaka.com/soubory/14/MozBackup-1.4-CZ.zip">http://mozbackup.jasnapaka.com/soubory/14/MozBackup-1.4-CZ.zip</a>).

Šťastný nový rok všem!
Jaký byl rok 2004? Byl úspěšný pro CZillu a pro Mozilla.org? Byl úspěšný
pro uživatele? Zavzpomínejme společně, co vše se v něm událo, co se
během něj změnilo, co jsme v něm udělali a na co nechceme zapomenout:
(<a href="/czilla/jaky-byl-rok-2004.html">http://www.czilla.cz/czilla/jaky-byl-rok-2004.html</a>)

________________________________

3. PROJEKTY
________________________________

Přispěl Brian King

Zprávy o samostatných projektech obsahují novinky a poslední informace
o Mozille a rozšířeních shromážděných na Mozdev.org a jinde v rámci
komunity.

Před námi je znovu konec roku a to je jako vždy čas k ohlédnutí. Čas
zhodnotit úspěchy a neúspěchy komunity Mozilla. Byl to rok samostatného
prohlížeče a e-mailového klientu, Firefox a Thunderbird, které dospěly
a byly vydány ve svých 1.0 verzích. Byl to rok, kdy si jiné projekty
Mozilla, jako Sunbird [1], Camino [2] a Nvu [3], konečně přišly na své.
Byl to rok, kdy se Mozilla začala více profilovat jako komerční
aplikační platforma [4]. Teď hlavně nesmíme usnout na vavřínech.
Organizace Mozilla a široká komunita se musí přizpůsobit, aby obstály ve
zkouškách, které je čekají. Jeden nový, zajímavý projekt ohlašující tuto
novou éru, je projekt Minimo [5], prohlížeč založený na Mozille pro
mobilní zařízení. Šťastné Vánoce přeje tým mozdev.org!

[1] <a href="http://www.mozilla.org/projects/calendar/sunbird.html">http://www.mozilla.org/projects/calendar/sunbird.html</a>
[2] <a href="http://www.caminobrowser.org/">http://www.caminobrowser.org/</a>
[3] <a href="http://www.nvu.com/">http://www.nvu.com</a>
[4]
<a href="http://news.com.com/Firefox+fortune+hunters/2100-1032_3-5455173.html?tag=st.num">http://news.com.com/Firefox+fortune+hunters/2100-1032_3-5455173.html?tag=st.num</a>
[5]
<a href="http://news.com.com/Mozilla+aims+for+mobile+browser+market/2100-1032_3-5483683.html">http://news.com.com/Mozilla+aims+for+mobile+browser+market/2100-1032_3-5483683.html</a>

HTTP serverpost - 0.6, spojuje vlastnosti HTML formulářů a XUL rozhraní.
Programy: Mozilla, Firefox, jiné XUL aplikace
Platformy: Všechny
Právě byla vydána verze 0.6. Ovládací prvky samotné jsou poměrně
stabilní, ale povětšinou nejsou detailněji prozkoumány [Jan:
prozkoumány] komunitou. Jakékoli připomínky od návštěvníků k tomuto
tématu jsou vítány.
<a href="http://serverpost.mozdev.org/">http://serverpost.mozdev.org/</a>

Add N Edit Cookie - 0.2, přidává a edituje sezení a uložené cookies.
Programy: Firefox 0.9.x-1.0, Mozilla 1.7.x/1.8a4
Platformy: Windows, Linux, Mac OS X
Verze 0.2. obsahuje všechny slíbené vlastnosti a navíc velmi snadno
použitelný ovládací prvek pro výběr času a data u editace doby platnosti.
Výrazné změny:
- Přidávání cookies
- Editování hodnot cookies a období jejich platnosti
- Jednoduše použitelný ovládací prvek pro výběr data a času při úpravě
data skončení platnosti
- Filtrovací funkce pro nalezení správné položky cookies
<a href="http://addneditcookies.mozdev.org/">http://addneditcookies.mozdev.org/</a>

HONcode Status 1.5 - HONlookup 1.4, kolekce zásuvných modulů pro
aplikace Mozilla / Netscape na podporu HON.
Program: Firefox
Platformy: Windows, Linux, Mac OS X
Rozšíření bylo aktualizováno, aby bylo kompatibilní s Firefoxem 1.0.
<a href="http://hon.mozdev.org/">http://hon.mozdev.org/</a>

Launchy - 3.6.0, vylepšuje možnosti provázání s dalšími aplikacemi.
Programy: Mozilla, Firefox, Thunderbird, Camino
Platformy: Všechny
Výrazné změny:
- Opraveno prohlížení zdroje URL se znaky # a ?. Více informací na
<a href="http://bugzilla.mozdev.org/show_bug.cgi?id=7766">http://bugzilla.mozdev.org/show_bug.cgi?id=7766</a>
- Opravena chyba při pravém kliknutí na obrázek, který je odkazem. Více
informací na <a href="http://bugzilla.mozdev.org/show_bug.cgi?id=7803">http://bugzilla.mozdev.org/show_bug.cgi?id=7803</a>
- Aktualizována JSLib na aktuální verzi
- Přidán IrfanView
- Na panel nástrojů přidána položka Nastavení
- Opravené místní nastavení pomocí typu aplikace
- Přidána polská lokalizace
- Přidán generátor launchy.xml
(<a href="http://gemal.dk/mozilla/launchy-xmlfile.html">http://gemal.dk/mozilla/launchy-xmlfile.html</a>)
<a href="http://gemal.dk/mozilla/launchy.html">http://gemal.dk/mozilla/launchy.html</a>

Calendar Help - 0.1, nápověda pro Kalendář a Sunbird.
Programy: Mozilla Suite, Firefox, Thunderbird, Sunbird
Platformy: Windows, Linux, Mac OS X
Nová verze vydaná 6. prosince zdokumentovala větší část uživatelského
prostředí aplikací Calendar/Sunbird a pracuje v aplikacích Sunbird,
Firefox, Thunderbird a Mozilla Suite. Je to první, kompletní návrh
anglické nápovědy s dvanácti kapitolami a třemi dodatky.
Výrazné změny:
- Aktivní odkazy z uživatelského rozhraní aplikací Calendar/Sunbird na
příslušná témata nápovědy.
- Obsah, index a glosář
- Referenční informace k nabídce, panelu nástrojů a klávesnici
<a href="http://calendarhelp.mozdev.org/">http://calendarhelp.mozdev.org/</a>

Habari Xenu - 0.9.3, zajímavý agregátor novinek napsaný v kódu XUL
Programy: Mozilla, Firefox
Platformy: Windows, Linux
Několik vylepšení agregátoru včetně lepší analýzy syntaxe, podpory OPML
a podpory prohlížeče Firefox.
Výrazné změny:
- Import/export formátu OPML
- Snadné příhlášení k odběru jednotlivých kanálů
- Zlepšeno parsování kanálů
- Vlastní šablony vzhledu prostřednictvím userContent.css
- Podpora funkcí Aktualizovat vše a Sledování vybraných novinek
- Zlepšena stabilita
<a href="http://habarixenu.mozdev.org/">http://habarixenu.mozdev.org/</a>

MAF - 0.4.3, Mozilla Archive Format.
Programy: Mozilla, Firefox
Platformy: Windows, Linux
Opraveno několik chyb a přidáno pár lokalizací.
Výrazné změny:
- Nyní mají vbs skripty ve Windows správnou asociaci typu souborů
- Přidána ruská a polská lokalizace
- Přidána možnost ukládat označené panely
<a href="http://maf.mozdev.org/">http://maf.mozdev.org/</a>

jsLib - 0.1.235, knihovna funkcí JavaScriptu pro Mozillu.
Programy: Mozilla, Firefox, Thunderbird
Platformy: Všechny
Upravený instalační kód pro řádnou instalaci s EM i XPInstall. Četné
aktualizace knihovny, dodatky k protokolu jsLib (pro více informací
napište jslib:help), aktualizovná dokumentace, dodatek do složky chrome
jsLiblive pro snazší testování a spouštění XUL souborů, přidána DOM
objekt vrchní úrovně knihovny jslib. Také pracuji na článku, který
pomůže novým vývojářům aplikací založených na Mozille nainstalovat
a rychle používat jsLib.
Výrazné změny:
- Vyčištění knihovny
- Vylepšení protokolu
- Vrchní úroveň jsLib DOM objektu pro snazší inicializaci
- Práce na potencionálních kolizích deklaracích globálních jmenných prostorů
- opraveno mnoho chyb
<a href="http://jslib.mozdev.org/">http://jslib.mozdev.org/</a>

purgecontrol - 0.2c, chrání důležité e-maily před náhodným
odstraněním.deleted.
Program: Thunderbird
Platformy: nezávislé na platformě
Aktualizováno pro Thunderbird 1.0.
<a href="http://purgecontrol.mozdev.org/">http://purgecontrol.mozdev.org/</a>

cuneAform - 0.3.1, komunitou vyvíjený editor pro každého.
Programy: Mozilla 1.4 a novější, Firefox 0.4 a novější
Platformy: všechny
CuneAform 0.3.1 nyní spolupracuje s prohlížečem Firefox 1.0. Také byly
odstraněny některé vnitřní problémy. Pokud používáte verzi 0.3,
aktualizujte prosím na tuto verzi. CuneAform 0.3 měl závažné problémy
s instalátorem.
Nové vlastnosti ve verzi 0.3.1:
- Opravena chyba v xpi balíčku, která bránila instalaci (skrytá aktualizace)
- Vylepšen dialog o rozšíření
- Přidána podpora nočních verzí
- Aktualizovány soubory ve formátu RDF
- Připravené pro Firefox 1.0
<a href="http://cuneaform.mozdev.org/">http://cuneaform.mozdev.org/</a>

View Background Plus - 0.9, otevírá všechny druhy obrázků na pozadí,
nejen pouze ty deklarované v tagu BODY
Programy: Mozilla, Firefox
Platformy: Windows, Linux, Mac OS X
Hlavní funkce pracují tak, jak by měly, ale definice CSS jsou rozeznány,
pouze pokud jsou vloženy přímo do HTML elementu.
Výrazné změny:
- Přejděte na &lt;a href=<a href="http://www.imdb.xn--com-9o0a/">http://www.imdb.com</a>&gt;IMDB&lt;/a&gt; a zkuste uložit
některou galerii obrázků. Pokud vás to obtěžuje, potřebujete View
Background Plus ;-)
- Rychlé ukládání obrázků na pozadí a normálních obrázků (poněkud
experimentální)
<a href="http://viewbgplus.mozdev.org/">http://viewbgplus.mozdev.org/</a>

ThunderFilter - 0.1, rozšíření pro vkládání souborů OpenOffice.org, RTF
a Word do e-mailu.
Program: Thunderbird
Platforma: Linux
Rozšíření pro vkládání souborů programů
OpenOffice.org/StarOffice/RTF/Microsoft Word do poštovního klientu
(Thunderbird). ThunderFilter nepřipojuje soubory. Jedná se o první
verzi. <a href="http://thunderfilter.mozdev.org/">http://thunderfilter.mozdev.org/</a>
<a href="http://thunderfilter.mozdev.org/">http://thunderfilter.mozdev.org/</a>

Mnenhy - 0.7, rozšíření pro Mozillu se zvláštním zaměřením na e-mail
a novinky.
Programy: Mozilla, Thunderbird a dokonce Firefox
Platformy: všechny
Mnenhy nyní zobrazuje X-Faces! Ukládá předvolby v závislosti na složce!
Co je Mnenhy? Mnenhy poskytuje několik nástrojů a rozšíření k použití
s Mozillou, Thunderbirdem a dokonce i Firefoxem:
- Nastavitelné zobrazení hlaviček u e-mailů a novinek
- Funkce Folderstorage pro ukládání rozložení panelů s vlákny
v závislosti na nastavení složky
- Textové kodeky, např. ROT-13, Kenny, Base64 a mnoho dalších
- Postranní] panel v e-mailovém klientu Mozilla Suite
- Chrome Manager, nástroj pro práci s registry chrome jednotlivých aplikací
- Registry Viewer, prohlížeč pro soubor aplikace Mozilla registry.dat
- Nástroje pro práci s nevyžádanou poštou se statistikami filtrů
a zobrazením neurčeného stavu nevyžádané pošty
<a href="http://mnenhy.mozdev.org/">http://mnenhy.mozdev.org/</a>

QuoteCollapse - 0.4, sbalování a rozbalování citací.
Programy: Mozilla, Thunderbird
Platformy: všechny
QuoteCollapse sbaluje a rozbaluje citace (jak jste asi tipovali!). Tato
funkce znovu zpřístupňuje kompletní přehledy nejnovějších zpráv
a zpřístupňuje také odpovědi od těch lidí, kteří nevědí, že používáte
fcc. Verze 0.4 přidává podporu pro Thunderbird 1.0 a Mozillu 1.8a5.
Výrazné změny:
- Pracuje s TB 1.0 a Mozilla 1.8a5
- Kompletně nastavitelné
- Sbaluje/rozbaluje jednotlivé citace, všechny podcitace nebo citace
podle jejich úrovně vnoření
<a href="http://quotecollapse.mozdev.org/">http://quotecollapse.mozdev.org/</a>

AboutConfig - 0.4, about:config pro Thunderbird.
Program: Mozilla Thunderbird
Platformy: všechny
Rozšíření AboutConfig přidává do Mozilla Thunderbirdu vlastnosti, které
v Mozilla Firefoxu a v Mozilla Suite poskytuje příkaz about:config.
Můžete jej použít k editaci všech nastavení. Ujistěte se, že víte, co
děláte! Pokud o volbě about:config nic nevíte, pravděpodobně nebudete
chtít AboutConfig používat. Aktualizováno pro Thunderbird 1.0.
Výrazné změny:
- Některé části rozhraní stejné jako u about:config v prohlížeči
   Firefox.
- Jednoduché procházení předvolbami.
- Přebírá lokalizaci z Thunderbirdu.
<a href="http://aboutconfig.mozdev.org/">http://aboutconfig.mozdev.org/</a>

Více informací o každém projektu najdete v úplné zprávě na
<a href="http://www.mozdev.org/status/2004-12-20-status.html">http://www.mozdev.org/status/2004-12-20-status.html</a>

________________________________

4. ANKETA
________________________________

V minulém čísle jsem se ptali, zda byste chtěli k pravidelnému odběru
zpravodaje Mozilla Links navíc dostávat také ohlášení nových vydání,
bezpečnostních varování a oznámení o marketingových kampaních. Zde jsou
výsledky:

    Jistě, ať mi chodí.	   47 %
    Ano, ale omezte je      44 %
    max. na 1 týdně.
    V žádném případě.        9 %

Anketa tohoto čísla: Jaký krok by měl následovat po vydání Firefoxu 1.0?
    Zaměřit se na šíření zpráv a zaujmout více podílu na trhu
    Vylepšit podporu Aktuálních záložek / RSS
    Vylepšit prohlížení v panelech
    Vylepšit současný motiv vzhledu
    Pracovat na zmenšení a zrychlení, jak je to jen možné
    Soustavně vylepšovat
    Jsem v internetové nirváně - nezasahujte do toho

Hlasujte na <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org</a>

________________________________

            REKLAMA
________________________________

Získejte kopii reklamního inzerátu na Firefox v New York Times. Plakáty
s rozměry 21 x 26 palců jsou dostupné v Mozilla Store za pouhých 6,95 $.

Navštivte: <a href="http://www.mozillastore.com/">http://www.mozillastore.com/</a>

****

Pomozte obětem tsunami v Asii. Jednejte ihned!

<a href="http://www.icrc.org/web/eng/siteeng0.nsf/iwpList2/Help_the_ICRC?OpenDocument">http://www.icrc.org/web/eng/siteeng0.nsf/iwpList2/Help_the_ICRC?OpenDocument</a>

****

Vyzkoušejte OpenOffice.org, open-source kancelářský balík aplikací
dostupný na <a href="http://www.openoffice.org/">http://www.openoffice.org</a> (české stránky
<a href="http://www.openoffice.cz/">http://www.openoffice.cz</a> , nebo <a href="http://oo.o.cz/">http://oo.o.cz</a> ).
Prozkoumejte i zpravodaj OpenOffice.org dostupný na
<a href="http://www.openoffice.org/editorial/spotlightindex.html">http://www.openoffice.org/editorial/spotlightindex.html</a> (český zpravodaj
na <a href="http://www.openoffice.cz/zpravodaj">http://www.openoffice.cz/zpravodaj</a> ). Open source se prostě zlepšuje!

****

Zde může být vaše reklama! Více podrobností o tom, jak se dostat k více
než 8 000 čtenářů na celém světě, najdete na
<a href="http://newsletter.mozdev.org/mlsp.html">http://newsletter.mozdev.org/mlsp.html</a>

________________________________

5. KONTAKTNÍ INFORMACE
________________________________

Mozilla Links(TM) je měsíční elektronický zpravodaj vydávaný projektem
Mozilla Links Newsletter.

Pro přihlášení, odhlášení nebo změnu nastavení odběru navštivte
<a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org</a> .

VAŠE SOUKROMÍ: K přijímání tohoto zpravodaje je vyžadována pouze platná
e-mailová adresa. Adresa nebude využita k jiným účelům, než je nastavení
a administrace zpravodaje.

KOMENTÁŘE A SPOLUPRÁCE: <a href="http://newsletter.mozdev.org/contact.php">http://newsletter.mozdev.org/contact.php</a>

Mozilla Links je překladán do češtiny, němčiny, italštiny, japonštiny,
portugalštiny, ruštiny, španělštiny a tradiční čínštiny.

Copyright: přispěvatelé zpravodaje Mozilla Links, 2005. Zpravodaj
Mozilla Links je vydáván pod licencí Creative Commons
Attribution-NonCommercial-ShareAlike 2.0:
<a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">http://creativecommons.org/licenses/by-nc-sa/2.0/</a>

České vydání
- autoři: Petr Tomeš, Tomáš Marek, Ondřej Doněk, Pavel Kurc, Jan Bína,
   Jiří Burda, Vlastimil Ott
- e-mail: <a href="mailto:info@czilla.cz">info@czilla.cz
</a>
- web: <a href="http://www.czilla.cz/podpora/zpravodaj/">http://www.czilla.cz/podpora/zpravodaj/</a>

</pre>

<?php
	$page->includeFooter();
?>
