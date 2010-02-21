<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zpravodaj Mozilla Links - 21.číslo');
	$page->setHeadline('Zpravodaj Mozilla Links','21.číslo (7.8.2004 / 14.8.2004)');
	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');
	$page->includeTemplate('header'); 
?>

<pre>

Podle navrženého plánu měl mít Firefox 0.9 všechny funkce verze 1.0
a čas do vydání verze 1.0 se měl využít k posledním úpravám, avšak
během posledních týdnů bylo přidáno několik vylepšení včetně trojice
nových funkcí:

- Livemarks (později přejmenované na Live Bookmarks  aktuální
záložky, pozn. překl.) jsou speciální záložky spojené se zdroji RSS či
Atom. Pokud navštívíte stránky s kanálem RSS, zobrazí Firefox na
stavovém řádku ikonu. Když na ni klepnete, přidá se k tomuto kanálu
aktuální záložka. Její obsah se automaticky začlení do Záložek
a aktualizuje se podle nastavení uživatele. Podobná podpora se vyvíjí
pro Thunderbird a samozřejmě se počítá se synchronizací s aktuálními
záložkami ve Firefoxu.
- Find toolbar (vyhledávací lišta) nahradí funkci rychlého vyhledávání
(Find as you type). To si nenechte ujít! Jde o lepší rozhraní k této
velmi šikovné funkci. K prohledávání textu a odkazů stačí stisknout
"/" nebo "'" a ve spodní části okna se objeví vyhledávací lišta
s praktickými tlačítky najít další, najít předchozí a nové
tlačítko zvýrazni, které označí všechny výskyty hledaného řetězce.
- Whitelist, seznam důvěryhodných webových stránek. Pouze stránky na
tomto seznamu jsou oprávněny instalovat rozšíření. Pokud byste na
stránce, jež není na tomto seznamu, klepli na odkaz na XPI, objeví se
pod nástrojovými lištami oznámení o blokování s nabídkou na přidání
stránky do bílého seznamu.

Mezi další vylepšení patří:
- Tlačítko ve Správci stahování pro rychlý přístup do složky se
staženými soubory.
- Správce záložek nyní obsahuje levý panel pro lepší orientaci
v záložkách.
- Kromě ikony zabezpečení na stavovém řádku lze nyní zabezpečené
stránky rozlišit i žlutou řádkou adres.
- Aktualizace výchozího tématu vzhledu Winstripe.
- Podpora přenosu profilů z prohlížečů Konqueror, Epiphany, Omniweb
a Camino.

Spustili jsme nové stránky zpravodaje Mozilla Links. Na nich se objeví
předchozí čísla zpravodaje, aby se na ně dalo odkazovat. Nyní je
k dispozici nová, portugalská (brazilská) edice. Přihlašte se na
<a href="http://newsletter.mozdev.org/home">http://newsletter.mozdev.org/home</a>

Děkujeme za přízeň a prosíme, abyste své připomínky zasílali na adresu
<a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org
</a>

Percy Cabello
Mozilla Links

----------------------------------------------------------------------
V tomto čísle:

1. VYLEPŠENÍ MOZILLY
     - Recenze: WebMail Compose 0.3.5
     - Tip: Použití vyhledávací lišty
     - Tip: Informace o nových rozšířeních a tématech vzhledů
     - Supertip: Obnova upozornění před zavřením okna s několika panely

2. KOMUNITA MOZILLY

3. NOVINKY

4. O MOZILLE
      - Zprávy o samostatných projektech

5. ANKETA

6. KONTAKTY


1. VYLEPŠENÍ MOZILLY
----------------------------------------------------------------------

Recenze: WebMailCompose  0.3.5
(vytvořil Jed Brown)

Je pravděpodobné, že máte pro e-mailovou adresu webové rozhraní a že
je to váš nejpoužívanější účet. Avšak kdykoliv klepnete na e-mailový
odkaz (mailto:), pokusí se váš operační systém spustit e-mailového
klienta.

Použijte WebMailCompose, malé, ale silné rozšíření pro Firefox,
Mozillu a Netscape, které se vyvinulo z rozšíření GMailCompose. Pokud
je nainstalováno, klepnutím na odkaz e-mailu (mailto:) se otevře
webové rozhraní vaší oblíbené e-mailové služby v novém panelu.
WebMailCompose podporuje Yahoo! Mail, Hotmail, Gmail a Mail.com
a pomocí nastavení tohoto rozšíření můžete přidat odkaz i na webové
rozhraní své oblíbené e-mailové služby. Můžete používat jednu i více
e-mailových služeb s webovým rozhraním najednou a určit, která z nich
je výchozí. Pak klepnutím pravým tlačítkem na e-mailový odkaz vyberte
z kontextové nabídky tu, kterou chcete použít. Klepněte levým
tlačítkem myši a WebMailCompose otevře vaši výchozí e-mailovou službu.
Když klepnete prostředním tlačítkem, otevřete svého e-mailového klienta.

Pozor! Ne všechny e-mailové služby fungují. Bezúspěšně jsem například
vyzkoušel PRW.net, zřejmě protože při každém přihlášení generuje nové 
informace, takže při dalším přihlášení nefungují odkazy.

Další verze bude podporovat více e-mailových služeb s webovým
rozhraním (OperaMail, Netscape, atd.), odesílání stránky pomocí
nabídky a možnost posílání obrázků jako příloh.

Stránky WebMailCompose:
<a href="http://jedbrown.net/mozilla/extensions/">http://jedbrown.net/mozilla/extensions/</a>

Náhledy programu:
<a href="http://jedbrown.net/mozilla/extensions/WebMailCompose/Screenshots/">http://jedbrown.net/mozilla/extensions/WebMailCompose/Screenshots/</a>

Fórum na mozillaZine:
<a href="http://forums.mozillazine.org/viewtopic.php?t=98841">http://forums.mozillazine.org/viewtopic.php?t=98841</a>

----

Tip: Použití vyhledávací lišty
(přispěl Percy Cabello)

Vyhledávací lišta Firefoxu se stane mocnější, jakmile se naučíte
používat klávesové zkratky:

Akce                                    Klávesová zkratka
======================================  =============================
Přejít do vyhledávací lišty             Ctrl + K
Změna vyhledávače                       Ctrl + šipka nahoru, Ctrl +
                                         šipka dolů
Zobrazit přechozí hledání               šipka dolů (automaticky také
                                         zobrazuje napsané znaky
Smazat záznam v historii hledání        Shift + Del
Otevřít výsledky v aktuálním panelu     Enter
Otevřít výsledky v novém panelu         Alt + Enter

Přidání nového vyhledávacího modulu je snadné: klepněte na ikonu
vyhledávače a vyberte Přidat moduly..., nebo jděte přímo na
<a href="http://mycroft.mozdev.org,/">http://mycroft.mozdev.org,</a> kde najdete více než 1200 vyhledávačů.

----

Tip: Informace o nových rozšířeních a tématech vzhledů
(přispěl Percy Cabello)

Pokud jste závislák na tématech vzhledů a rozšířeních, pak vám jistě
udělá radost, že Mozilla Update obsahuje několik RSS kanálů se seznamy
nejnovějších, nejpopulárnějších a nejoblíbenějších témat vzhledů pro
hlavní produkty projektu Mozilla: Firefox, Thunderbird a balík Mozilla.

Více se dozvíte na:
<a href="https://addons.mozilla.org/faq/">https://addons.mozilla.org/faq/</a>

Využijte rozšíření Sage (pro Firefox):
<a href="https://addons.mozilla.org/extensions/moreinfo.php?id=77">https://addons.mozilla.org/extensions/moreinfo.php?id=77</a>

nebo Forumzilla (pro Thunderbird):
<a href="https://addons.mozilla.org/extensions/moreinfo.php?id=133">https://addons.mozilla.org/extensions/moreinfo.php?id=133</a>

----

SuperTip: Obnova upozornění před zavřením okna s několika panely
(přispěl Percy Cabello)

Mozilla se vás ptala, jestli chcete zobrazovat upozornění před
zavřením okna s několika otevřenými panely. Pokud jste zobrazení
tohoto upozornění zakázali, mohli jste pak omylem přijít o několik
panelů např. včetně rozepsaného dvoustránkového e-mailu.

Varovnání můžete opět obnovit:

- Do řádky adres vložte "about:config"
- Vyhledejte nastavení "browser.tabs.warnOnClose"
- Klepněte na něj pravým tlačítkem a upravte hodnotu na TRUE

----

Další tipy pro svůj oblíbený prohlížeč najdete na
<a href="http://www.mozillatips.com/">http://www.mozillatips.com</a> .

Znáte nějaký tip nebo supertip? Podělte se o něj s ostatními uživateli
na
<a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org
</a> .

2. KOMUNITA MOZILLY
----------------------------------------------------------------------

Tento měsíc nám něco o sobě a svých zkušenostech s aktivním členstvím
v komunitě projektu Mozilla prozradí Jed Brown, autor rozšíření
QuickNote, WebMail Compose (představen v tomto čísle) a BBCode.

Mozilla Links: Řekni nám něco o sobě.

Jed Brown: Jsem původem z USA, ale nyní jsem již 10 let v Mexiku
a studuji Inženýrství elektrických a počítačových systémů.

ML: Jaký je tvůj vztah k projektu Mozilla?

Jsem dobrovolný přispěvatel. Začal jsem projektem Extension Room na
mozdev.org (<a href="http://extensionroom.mozdev.org/">http://extensionroom.mozdev.org</a>), což byla dlouhou dobu
jediná databáze rozšíření pro Mozillu na internetu.

Nyní vypomáhám s Mozilla Update (<a href="https://addons.mozilla.org/">https://addons.mozilla.org</a>)
v sestavování seznamu rozšíření. Také jsem vytvořil několik rozšíření
pro Mozillu a Firefox (<a href="http://jedbrown.net/mozilla/">http://jedbrown.net/mozilla/</a>) a několik pro
komerční použití (soukromé společnosti).

ML: Jak jsi se dozvěděl o technologiích Mozilly a naučil se vytvářet
rozšíření?

JB: Začal jsem sledovat projekt Mozilla, když se Netscape rozhodnul
uvolnit zdrojový kód svého Navigátoru (což měla být verze 5.0).
Otestoval jsem všechny milníkové verze a začal používat Mozillu jako
svůj hlavní prohlížeč někdy okolo M18 (milestone 18).
Jakmile Mozilla dosáhla verze 1.0, ponořil jsem se do kódu dalších
autorů (Tagzilla, Multizilla, atd.) a s pomocí XUL Planet
(<a href="http://www.xulplanet.com/">http://www.xulplanet.com</a>) jsem napsal své první rozšíření, QuickNote.

ML: Řekni nám o jiných rozšířeních, které jsi vytvořil, nebo na
kterých pracuješ.

JB: První rozšíření, které jsem napsal bylo QuickNote, což je
rozšíření na zaznamenávání poznámek pro Mozillu/Firefox/Thunderbird.
Nejprve bylo velmi jednoduché, ale hodně se vyvinulo díky příspěvkům
dalších autorů, např. Nickolaye Ponomareva. Zrovna nedávno jsem napsal
BBCode. Přidává běžné BBC kódy systému PHPBB do kontextové nabídky pro
jednoduché označování ve fórech postavených na phpBB jako je např.
mozillaZine. Také jsem vytvořil GmailCompose, z něhož vznikl
WebMailCompose.

ML: A plány do budoucna?

JB: Ještě nevím. Rád bych rozšířil Firefox na své škole a třeba
vytvořil rozšíření, které by bylo užitečné i pro ostatní studenty.

Potřebuji vylepšit WebMailCompose a doplnit některé požadované funkce
jako třeba posílání stránek a obrázků. Sám mám několik dobrých nápadů,
jak vylepšit BBCode a přidat podporu pro HTML/XHTML/apod.

Někdy bych rád zkusil vytvořit rozšíření podobné Kiosku, které by
umožňovalo navštěvovat pouze stránky uvedené v seznamu důvěryhodných
zdrojů. Jen čas ukáže, zda-li se to podaří.

Děkuji Jedovi za čas, který si pro nás udělal a sdělil nám své nápady.
Doufejme, že se mu tato skvělá rozšíření podaří uskutečnit.

3. NOVINKY
----------------------------------------------------------------------

WinPatrol přidá podporu pro Mozilla Firefox
-------------------------------------------
20. června společnost BillP Studios ohlásila, že připravovaný
WinPatrol 8.0 (plánovaný na konec tohoto měsíce) bude obsahovat
podporu pro Mozilla Firefox. Software WinPatrol monitoruje a detekuje
změny na počítačovém systému, jež mohou ukazovat na útoky nebezpečných
programů.

"Nikdy se mi nelíbilo být jako ovce, proto si myslím, že je důležité
podpořit alternativní technologie", řekl Bill Pytlovany, majitel BillP
Studios. "Hlavním důvodem, proč přidáváme podporu pro Firefox a možná
i další prohlížeče jsou žádosti uživatelů zaslané e-mailem a vložené
do fóra naší komunity."

WinPatrol rozšíří některé schopnosti Firefoxu jako je například správa
cookies. "Namísto blokování či povolování některých cookies či webů,
funkce WinPatrol Nuts zajišťuje filtrování definované pomocí
zástupných znaků. To umožní jednomu záznamu zablokovat velké množství
sledovaných cookies."

Protože mnoho uživatelů Firefoxu má také nainstalovaný Internet
Explorer (hlavní zdroj malware), Pytlovany varuje, že dokonce "pouhé
jediné spuštění IE by mohlo stáhnout kód, který vyhledá nastavení
Firefoxu a změní je."

Na dotaz ohledně balíku Mozilla Pytlovany řekl, že v tuto chvíli pro
něj neplánují rozšíření podpory.

Tisková zpráva BillP Studios:
<a href="http://www.winpatrol.com/winpatrol8pr.pdf">http://www.winpatrol.com/winpatrol8pr.pdf</a>

Nové verze opravují několik bezpečnostních problémů
---------------------------------------------------
4. srpna byly vydány Firefox 0.9.3, Thunderbird 0.7.3 a Mozilla 1.7.2.
  Obsahují (nová věta) opravy několika bezpečnostních problémů
objevených během minulého měsíce.

Mozilla Foundation oznámila spuštění Security Bug Bounty Programu na
peněžité odměny 500 $ pro uživatele, kteří objeví a ohlásí
bezpečnostní chyby v Mozille.

Bezpečnostní centrum:
<a href="http://www.mozilla.org/security/">http://www.mozilla.org/security/</a>

Ukázková verze Firefoxu 1.0 plánována na konec srpna
----------------------------------------------------
Ben Goodger, vedoucí inženýr projektu Firefox, v nedávném příspěvku do
svého blogu Inside Firefox oznámil, že vydání ukázkové verze (interně
nazvané 0.10) Firefoxu 1.0 se plánuje na druhý či třetí srpnový týden.

<a href="http://weblogs.mozillazine.org/ben/archives/006075.html">http://weblogs.mozillazine.org/ben/archives/006075.html</a>

V předchozím příspěvku Goodger oznámil, že Mozilla Foundation zamýšlí
vydat Firefox 1.0 14. září. Upozornil však také, že jde pouze
o plánované datum a s velkou pravděpodobností dojde ke zpoždění.

<a href="http://www.mozilla.org/projects/firefox/roadmap.html">http://www.mozilla.org/projects/firefox/roadmap.html</a>

Všechno nejlepší k narozeninám Mozilla Foundation
-------------------------------------------------
"Je to již rok, co vznikla Mozilla Foundation a byl to dobrý rok.
Mozilla Foundation prosperuje, naše produkty jsou příznivě přijímány
kritiky, zájem spotřebitelů a podniků o produkty projektu Mozilla je
na rekordní úrovni, po důležitosti volby prohlížeče narůstá a naše
komunita zůstává silná a energická."

Mitchell Baker o prvním výročí založení Mozilla Foundation:
<a href="http://weblogs.mozillazine.org/mitchell/archives/2004/07/time_flies_when_1.html">http://weblogs.mozillazine.org/mitchell/archives/2004/07/time_flies_when_1.html</a> 




Místní novinky
--------------
(přispěla CZilla - <a href="http://www.czilla.cz/">http://www.czilla.cz</a>)

Česká Mozilla 1.7.2, Firefox 0.9.3, Thunderbird 0.7.3
Lokalizovali jsme verze opravující nedávno objevené bezpečnostní
chyby: Mozillu 1.7.2, Firefox 0.9.3 a Thunderbird 0.7.3. Najdete je na
<a href="http://www.czilla.cz/stahnout/">http://www.czilla.cz/stahnout/.</a>
Mozilla Gecko, červenec 2004: 7,1 %
NAVRCHOLU.cz vydalo tiskovou zprávu Bezpečnostní rizika Internet
Exploreru způsobují odliv uživatelů. Kromě dlouhodobého poklesu
obliby MSIE (88,8 %) je zmíněn vzrůstající podíl Mozilly a odvozených
prohlížečů (7,1 %) a Opera (2,4 %) na českém Internetu. Tisková
zpráva:
<a href="http://www.iinfo.cz/tiskova_zprava/navrcholu_rizika_ie_zpusobuji_odliv_uzivatelu">http://www.iinfo.cz/tiskova_zprava/navrcholu_rizika_ie_zpusobuji_odliv_uzivatelu</a>

Lokalizovaný Googlebar 0.9 pro Firefox
Populární rozšíření Googlebar, které přidává do prohlížeče novou lištu
pro detailní vyhledávání ve vyhledávači Google, se dočkalo nové verze
určené pro Mozillu Firefox 0.9.x a vyšší. Lokalizovaný balíček:
<a href="http://ftp.czilla.cz/other/addons/googlebar/googlebar-0.9.0.25-firefox-csCZ.xpi">http://ftp.czilla.cz/other/addons/googlebar/googlebar-0.9.0.25-firefox-csCZ.xpi</a>

Nová lokalizace Mozilla Kalendář
Aplikace Mozilla Kalendář se dočkala lokalizace své poslední verze
určené pro Mozillu 1.7, Mozilla Firefox 0.9.x a Mozilla Thunderbird
0.6 - 0.7.x. Opravuje několik chyb, které se projevovaly v těchto
verzích Mozilla aplikací. Instalační balíčky:
<a href="http://ftp.czilla.cz/other/addons/calendar/">http://ftp.czilla.cz/other/addons/calendar/</a>

WHATWG
David Majda ve svém článku vysvětluje důvody vedoucí ke vzniku WHATWG
(Web Hypertext Application Technology Working Group). Více na
<a href="http://www.majda.cz/zapisnik/permalink.php?idart=138">http://www.majda.cz/zapisnik/permalink.php?idart=138</a>

4. PROJEKTY
----------------------------------------------------------------------

Zprávy o samostatných projektech
(přispěl Brian King)

Zprávy o samostatných projektech obsahují novinky a poslední informace
o Mozille a rozšířeních shromážděných na mozdev.org a jinde v rámci
komunity.

Používání a zavádění Mozilly narůstá
(<a href="http://www.mozillazine.org/talkback.html?article=5038">http://www.mozillazine.org/talkback.html?article=5038</a>). To může být
ovlivněno několika faktory, ale tím hlavním je, že jde
o technologickou špičku, kvalitní software. Proto si všimněte projektů
uvedených níže, vyzkoušejte si některé z nich, nainstalujte a podpořte
je. Na mozdev.org pozorujeme výrazný nárůst počtu nových projektů,
a to odůvodňuje čas a úsilí vložené do poskytování této služby
talentovaným vývojářům Mozilly a příbuzných projektů.

Poslední zpráva z 2. srpna 2004 obsahuje:

cuneAform - 0.2.7DE CC, HTML editor pro každého!
Pro: Mozilla 1.4 a vyšší, Firefox 0.7 a vyšší
Platformy: Všechny
cuneAform nyní vyšel pod licencí CC GNU GPL. Tím podporujeme úpravy
kódu. Také hledáme další vývojáře.
<a href="http://cuneaform.mozdev.org/">http://cuneAform.mozdev.org/</a>

Flipper - 2.5, Gallery Flipper.
Pro: Firefox
Platformy: Windows, Linux, Mac OSX
Nyní kompatibilní s Firefoxem 0.9 a vyšším.
<a href="http://www.aliquam.org/flipper.html">http://www.aliquam.org/flipper.html</a>

MAF - 0.2.20, Mozilla Archive Format.
Pro: Mozilla, Firefox
Platformy: Windows, Linux
MAF nyní může ukládat stránky ve formátu MHT kompatibilním s IE. Dále
byla vylepšena použitelnost včetně upozornění, když je dokončen archiv
jediné stránky. Na prohlížení místního archivu stránek se používají
upravené odkazy. Kompletní seznam změn najdete na instalačních stránkách.
Důležité změny: Vylepšeno dekódování MHT, přidáno kódování MHT
a vylepšen formát adres v archivu. Do MAF lze nyní uložit doplňková
Meta-data.
<a href="http://maf.mozdev.org/">http://maf.mozdev.org/</a>

MAB - 1.2.0, nástroj na prohledávání katalogů Amazonu v prohlížeči
Pro: Mozilla 1.7, Firefox 0.9
Platformy: Windows, Linux, Mac OSX
MAB 1.2 umožňuje uložit výsledky hledání na disk.
Další významné změny
- Ukazuje popis produktu, recenze, obrázky, ISBN/ASIN, počet prodaných
kusů a další užitečné informace o vybraném produktu
- Přidání vybraných produktů do nákupního košíku
- Značky na třídění výsledků
- Porovnává cenu v různých prodejnách Amazonu (com, co.uk, de, jp)
a ukazuje seznam výsledků
- Export výsledků do XML a HTML
<a href="http://mab.mozdev.org/">http://mab.mozdev.org/</a>

Mozilla Enterprise, informace a odkazy související s použitím Mozilly
v podnikovém prostředí.
Pro: Mozilla, Firefox, Thunderbird, Camino
Platformy: Windows, Linux, Mac OSX,
Toto je nový projekt zaměřený na poskytnutí informací lidem, kteří
potřebují instalovat nebo podporovat Mozillu v podnicích. Byly
vytvořeny počáteční webové stánky s mnoha odkazy na informace.
<a href="http://mozillaenterprise.mozdev.org/">http://mozillaenterprise.mozdev.org/</a>

MozManual - 1.1, Představujeme Mozillu - Příručka pro nové uživatele.
Pro: Mozilla
Platformy: Windows, Linux, Mac OSX
Verze 1.0 je nyní dostupná na webu. Zpřístupněna byla francouzská verze.
Připravují se holandské a španělské verze. Sháníme pomoc pro německý
překlad.
<a href="http://mozmanual.mozdev.org/">http://mozmanual.mozdev.org/</a>

HONcode Status / HONlookup - 1.3 / 1.2, rozšíření na podporu
Health On the Net Foundation (HON).
Pro: Firefox
Platformy: Windows, Linux, Mac OSX
Vydány HONcode Status 1.3 a HONlookup 1.2 kompatibilní s Firefoxem
0.9.x. Verze pro Mozillu by měly pracovat s verzí 1.7.
<a href="http://hon.mozdev.org/">http://hon.mozdev.org/</a>

Autofill - 0.1, přidává automatické vyplňování formulářů do Firefoxu.
Pro: Firefox
Platformy: Windows, Linux, Mac OSX
Nyní je dostupná první verze 0.1. Nejdůležitější funkce:
- Neomezený počet uživatelských profilů
- Automaticky vyznačí všechna pole aktuálního formuláře, která mohou
být vyplněna
- Tlačítko (ikona), které může být přidáno do nějaké již existující
(např. navigační) lišty a které slouží k uložení aktuálního stavu
obrazovky
- Na rozdíl od vyplňování na Google podporuje RFC3106
(<a href="http://www.ietf.org/rfc/rfc3106.txt">http://www.ietf.org/rfc/rfc3106.txt</a>).
<a href="http://autofill.mozdev.org/">http://autofill.mozdev.org/</a>

DerBrowserTimer - 0.3.1, doplněk s hodinami a alarmem pro Mozilla
Firefox.
Pro: Firefox 0.9 a vyšší
Platformy: všechny
DerBrowserTimer 0.3.1 byl vydán 22. července 2004. Jedná se o doplněk
s hodinami a alarmem pro Mozilla Firefox. Po pravé straně nabídek
prohlížeče zobrazuje aktuální čas, umožňuje nastavit alarm se zvukovým
i textovým upozorněním a také může signalizovat každou hodinu či
půlhodinu podobně jako hodiny s kukačkou. Tato alfa verze obsahuje
několik časových formátů, tři typy alarmů, automatické vypnutí,
automatické vynulování, vybrané zvuky alarmu včetně uživatelem
zvoleného souboru, funkci kukání a základní dokumentaci (nápovědu).
<a href="http://derbrowsertimer.mozdev.org/">http://derbrowsertimer.mozdev.org/</a>

Více informací o každém projektu se dozvíte ve zprávě na
<a href="http://www.mozdev.org/status/2004-08-02-status.html">http://www.mozdev.org/status/2004-08-02-status.html</a>

5. ANKETA
----------------------------------------------------------------------
V minulém čísle jsme se zeptali, jaký typ aplikací nejvíce používáte.
Zde jsou výsledky:

- Webový prohlížeč     74 %  |]]]]]]]]]]]]]]]
- E-mailový klient     14 %  |]]]
- Textový editor        0 %  |
- Tabulkový kalkulátor  2 %  |
- Vývojové nástroje     4 %  |]
- Ostatní aplikace      3 %  |]

Anketa tohoto čísla: Přesvědčili jste nějaké lidi, aby přešli na
produkty projektu Mozilla?

- Ano, 20 a více
- Ano, 10 a více
- Ano, 5 a více
- Ano, méně než 5
- Ne, jsem sobecký a zlý
Hlasujte na <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org</a>

------------------------------- REKLAMA ------------------------------

Právě vydané: CD s Mozillou a knižním průvodcem, obsahující Mozillu
1.7, Firefox 0.9 a Thunderbird 0.7, můžete získat za 14,95 $. CD
s Mozillou: 5,95 $; průvodce Mozillou 1.7 za 12,95 $.
Trička a polokošile nabízíme od 16,95 $ a plyšáka Firefox za 15,95 $
(ano, konečně se s ním můžete pomazlit!).

Navštivte: <a href="http://store.mozilla.org/">http://store.mozilla.org</a>

****

Darujte svůj starý mobilní telefon společnosti Wireless Foundation.
Výtěžek z prodeje telefonů pomáhá podporovat agentury bojující proti
domácímu násilí. Ostatní telefony jsou renovovány a stávají se životní
oporou obětem domácího násilí.

<a href="http://www.wirelessfoundation.org/CalltoProtect/index.cfm">http://www.wirelessfoundation.org/CalltoProtect/index.cfm</a>

****

DevLinks, zpravodaj pro vývojáře pracující s Mozillou a odvozenými
produkty:
<a href="http://newsletter.mozdev.org/devlinks">http://newsletter.mozdev.org/devlinks</a>

****

Zde může být Vaše reklama! Více podrobností o tom, jak se dostat
k více než 7 000 čtenářů na celém světě, získáte návštěvou
<a href="http://newsletter.mozdev.org/mlsp.html">http://newsletter.mozdev.org/mlsp.html</a>

6. KONTAKTNÍ INFORMACE
----------------------------------------------------------------------

Mozilla Links(TM) je měsíční elektronický zpravodaj vydávaný
projektem Mozilla Links Newsletter.

SPRÁVA ODBĚRU: Pro přihlášení, odhlášení nebo změnu nastavení
navštivte prosím  <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org</a>

OCHRANA SOUKROMÍ: K přijímání tohoto zpravodaje je vyžadována pouze
platná e-mailová adresa. Ta nebude využita k jiným účelům než
k těm,které souvisí s tímto zpravodajem (doručení, podpora, odhlášení
apod.).

KOMENTÁŘE: Vítány na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org
</a>

Mozilla Links je překládán do tradiční čínštiny, češtiny, němčiny,
japonštiny, portugalštiny, ruštiny a španělštiny.

Copyright: přispěvatelé zpravodaje Mozilla Links, 2004
Zpravodaj Mozilla Links je vydáván pod licencí Creative Commons
Attribution-NonCommercial-ShareAlike 1.0:
<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode">http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode</a>

České vydání
- autoři: Petr Tomeš, Tomáš Marek a Jiří Burda
- e-mail: <a href="mailto:info@czilla.cz">info@czilla.cz
</a>
- web: <a href="http://www.czilla.cz/podpora/zpravodaj/">http://www.czilla.cz/podpora/zpravodaj/</a>

</pre>

<?php
	$page->includeTemplate('footer');
?>
