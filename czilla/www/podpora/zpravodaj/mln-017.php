<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zpravodaj Mozilla Links - 17. číslo');
	$page->setHeadline('Zpravodaj Mozilla Links','17. číslo (x.x.2004 / x.x.2004)');
	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');
	$page->includeTemplate('header'); 
?>

<pre>======================================================================
Mozilla Links - České vydání
17. číslo - 14.4.2004/16.4.2004
======================================================================

Již víte, že Mozilla vyniká v poskytování nejmodernějších
internetových produktů, kterými jsou balík aplikací Mozilla, vyvíjený
Firefox a Thunderbird, a velkého množství dalších aplikací jako je
např. ChatZilla a Mozilla Kalendář. Ale co takhle pastva pro oči?

V tomto čísle se naučíte, jak docílit pěkného vzhledu aplikací od
mozilla.org. Ukážeme si instalaci a použití různých motivů vzhledu
a úpravy zdrojového souboru.

Duben jsme věnovali lokalizaci Mozilly do několika jazyků. Minulý
čtvrtek jsme vydali první speciál. Ten oslavil naši mezinárodní
komunitu. Kromě pravidelných verzí (anglické, čínské, holandské,
německé, japonské, české, polské a ruské) jsme vydali ještě další
3 verze (běloruskou, estonskou a francouzskou). Stále hledáme další
překladatele. Chcete-li zpravodaj překládat do svého jazyka,
kontaktujte nás prosím.

Pracujeme na novém zpravodaji určeném vývojářům a na dalších
vícejazyčných speciálních vydáních.

Děkujeme Vám za přízeň. Své komentáře posílejte prosím na
<a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a> .

Percy Cabello
Mozilla Links

----------------------------------------------------------------------
V tomto čísle:

1. VYLEPŠENÍ MOZILLY
       - Motivy vzhledu
       - Změna Motivu vzhledu
       - Vylepšení rozhraní Mozilly pomocí CSS

2. KOMUNITA MOZILLY

3. NOVINKY
       - AOL se chystá počátkem léta vydat novou verzi Netscape
       - Mozilla 1.7 bude novou dlouhodobou stabilní větví
       - Mozilla se spoluprací s GNOME a dalšími open source projekty
         připravuje na Longhorn
       - Pinstripe - nový výchozí motiv vzhledu Mozilla Thunderbirdu
         pro Mac OS X
       - Mozilla prodává nová trička a plyšáky Firefox

4. MOZILLA POD POVRCHEM

5. PROJEKTY PRO MOZILLU
       - Projekt týdne: OneClick
       - Zprávy o samostatných projektech

6. ANKETA ZPRAVODAJE MOZILLA LINKS

7. KONTAKTNÍ INFORMACE


1. VYLEPŠENÍ MOZILLY
----------------------------------------------------------------------
Téma čísla: Motivy vzhledu

Motivy vzhledu jsou kolekce obrázkových souborů a souborů CSS
(Cascading Style Sheets), které definují vzhled celého, nebo jen
částečného (v závislosti na tom, kolik podrobností autor motivu
zahrnul) uživatelského rozhraní Mozilly. Balík aplikací Mozilla je
dodáván s motivem Classic, Mozilla Firefox a Thunderbird používají
motiv Qute.

Chcete-li používat jiný vzhled produktů Mozilly, můžete si na
následujícíh stránkách prohlédnout a stáhnout nové motivy:

* Motivy pro všechny produkty Mozilly:
<a href="http://themes.mozdev.org/">http://themes.mozdev.org</a>

* Pro balík aplikací Mozilla:
<a href="http://themes.freshmeat.net/browse/968/?topic_id=968">http://themes.freshmeat.net/browse/968/?topic_id=968</a>

* Pro Mozilla Firefox (více než 50 motivů):
<a href="https://addons.mozilla.org/themes/?application=firefox">https://addons.mozilla.org/themes/?application=firefox</a>

Vyvíjený motiv Caramel:
<a href="http://members.shaw.ca/lucx/">http://members.shaw.ca/lucx/</a>

Motivy dostupná jako .jar soubory místo samoinstalujícího XPI
(multiplatformní instalátor Mozilly pro všechny platformy) najdete na:
<a href="https://addons.mozilla.org/themes/?application=firefox">https://addons.mozilla.org/themes/?application=firefox</a>

* Pro Mozilla Thunderbird (více než 20 motivů):
<a href="https://addons.mozilla.org/themes/?application=thunderbird">https://addons.mozilla.org/themes/?application=thunderbird</a>

Populární motiv Pinstripe založené na Apple Max OS X Cocoa, nyní
výchozí motiv Firefoxu pro Mac OS a brzy i Thunderbirdu, se
implementuje do Firefoxu pro Windows a Linux:
<a href="http://forums.mozillazine.org/viewtopic.php?t=41625&amp;postdays=0&amp;postorder=asc&amp;postsperpage=15&amp;start=90">http://forums.mozillazine.org/viewtopic.php?t=41625&amp;postdays=0&amp;postorder=asc&amp;postsperpage=15&amp;start=90</a>

Jste-li připraveni na tvorbu vlastního vzhledu, prozkoumejte průvodce
Creating A Skin For Mozilla (Tvorba vzhledu Mozilly) od Neila Marshalla:
<a href="http://www.eightlines.com/neil/mozskin/index.html">http://www.eightlines.com/neil/mozskin/index.html</a>

Více informací o motivech a jejich vývoji získáte na fóru MozillaZine:
<a href="http://forums.mozillazine.org/viewforum.php?f=18">http://forums.mozillazine.org/viewforum.php?f=18</a>

****

Tip zpravodaje Mozilla Links: Změna motivu vzhledu

Procedura změny motivu je u jednotlivých aplikací mírně odlišná.

V Mozilla Firefoxu a Mozilla Thunderbirdu:
  - v nabídce "Nástroje (Tools)", vyberte "Předvolby (Options)"
  - v levém panelu klikněte na "Motivy (Themes)"
  - vyberte požadovaný motiv a stiskněte "OK".

V balíku aplikací Mozilla:
  - v nabídce "Vzhled (View)" vyberte "Použít motiv (Apply Theme)"
  - vyberte požadované motiv

****

Supertip zpravodaje Mozilla Links:
Vylepšení rozhraní Mozilly pomocí CSS
(přispěl web Mozilla Firefox, <a href="http://texturizer.net/firefox">http://texturizer.net/firefox</a>)

Úpravou souboru "userChrome.css" v podadresáři "chrome" svého profilu
můžete vylepšit velkou část rozhraní produktů Mozilly.

U Mozilla Firefoxu je to ve Windows 2000 a XP obvykle
C:\Documents and Settings\[Uživatelské jméno]\Application
Data\[Produkt Mozilly]\Profiles\default\[náhodný].slt
kde [náhodný] je náhodný řetězec 8 znaků a [Mozilla product] je název
produktu, který se snažíte přizpůsobit:

- Pro balík aplikací Mozilla je to "Mozilla"
- Pro Mozilla Firefox je to "Phoenix" (nebo "Firefox", používáte-li
aktuální noční verze).
- Pro Mozilla Thunderbird je to "Thunderbird".

Poté soubor zkopírujte do stejného adresáře a přejmenujte ho na
"userChrome.css".

Můžete také použít rozšíření chromEdit od Chrise Neale, na
snadnou úpravu souboru "userChrome.css" přímo z Mozilly, Firefoxu nebo
Thunderbirdu. Najdete ho na:
<a href="http://cdn.mozdev.org/chromedit/">http://cdn.mozdev.org/chromedit/</a>

Vlastní obázek na pozadí nástrojových lišt můžete nastavit přidáním
následujícího CSS kódu do souboru "userChrome.css":

/* Vlastní obrázek na pozadí nástrojových lišt:
    (náhrada souboru background.gif s obrázkem) */

  menubar, toolbox, toolbar, .tabbrowser-tabs {
    background-image: url("background.gif") !important;
    background-color: none !important;
  }

Aby se projevily změny, musíte restartovat prohlížeč.

Nejsnazší je umístit soubor s obrázkem do stejného adresáře, kde je
soubor "userChrome.css". Obrázek může být v jakémkoliv formátu
podporovaném Firefoxem: PNG, GIF nebo JPG.

Další příklady na přizpůsobení rozhraní pomocí souboru userChrome.css
najdete na:
<a href="http://texturizer.net/firefox/tips.html">http://texturizer.net/firefox/tips.html</a>

****

Chcete více tipů? Vyzkoušejte rozšíření TipBar pro zobrazení tipu dne
v Mozilla Firefoxu. Stahujte z <a href="http://tipbar.mozdev.org/">http://tipbar.mozdev.org</a>

Další tipy pro svůj oblíbený prohlížeč najdete na:
<a href="http://www.mozillatips.com/">http://www.mozillatips.com</a>

Znáte nějaký tip nebo supertip? Dejte o něm vědět ostatním čtenářům na
<a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a> .


2. KOMUNITA MOZILLY
----------------------------------------------------------------------

K lepšímu porozumění toho, co vyžaduje tvorba motivu vzhledu pro
Mozillu, jsme kontaktovali Aarona Spulera, jednoho z dobře známých
tvůrců motivů. Pozvání k rozhovoru srdečně přijal a zde je jeho výtah:

"Nejsem si jist, kdy přesně bylo zveřejněno mé první motiv, ale bylo to
někdy mezi vydáním Mozilly 1.0 (31.5.2002) a Mozilly 1.1 (26.8.2002).
Vím to, protože mám stále starou verzi motivu pro Mozillu na svém webu."

"Tvorba motivu se od dob, kdy jsem poprvé začal, významně zrychlila.
Nad prvními třemi motivy jsem strávil hodně času. Nejdéle trvalo
vytvoření prvního motivu "Blue". Neměl jsem vůbec tušení co dělám nebo
jak to provést. Bylo to náročné učení."

"Nyní, když už mám šablonu, nahradím pouze ikony ikonami nového
motivu. Řekl bych, že vytvoření motivu od začátku do konce nyní může
trvat v průměru dva týdny. Myslím, že největší část času se stráví
pohledem na sadu ikon pro nový motiv a rozhodováním o tom, které ikony
se použijí na tlačítka v motivu."

"Pro ostatní, kteří začínají na projektu motivu - nebojte se zeptat!
Fórum Themes na MozillaZine je neocenitelný zdroj a téměř každý
je ochoten pomoci komukoliv při tvorbě a udržbě motivů.
Nedoporučoval bych zkoušet psát motiv od začátku - ve struktuře
motivů je příliš mnoho souborů, které musí být na správném místě.
Vyberte si motiv, jehož chování se vám líbí (nedělejte si starosti
s ikonami - změníte je po vytvoření motivu) a používejte ho jako
základní motiv. Samozřejmě požádajte o souhlas autora ikon dříve, než
rozešlete jeho dílo - tak se to má dělat."

Celý zajímavý rozhovor najdete na:
<a href="http://newsletter.mozdev.org/interview-aspuler.html">http://newsletter.mozdev.org/interview-aspuler.html</a>

Práci Aatrona Spulera můžete nalézt na:
<a href="http://www.mozthemes.tk/">http://www.mozthemes.tk</a>

3. NOVINKY
----------------------------------------------------------------------
(přispěl MozillaZine, zdroj novinek o Mozille.
<a href="http://www.mozillazine.org/">http://www.mozillazine.org</a> )

AOL se chystá počátkem léta vydat novou verzi Netscape
------------------------------------------------------
Internetový deník Inquirer přinesl zprávu, že se America Online chystá
vydat novou verzi prohlížeče Netscape. Půjde o "menší aktualizaci
založenou na nejnovějším kódu Mozilly" a "bude vydána počátkem léta".
Spekulace o nové verzi se objevili již na začátku března, když
"Mercury News" (San Francisco) tlumočil mluvčí AOL, že "budou další
verze Netcape, v podstatě nově zabalené verze Mozilly".

Potvrzení nových verzí nenaznačuje, že AOL plánuje další vývoj nebo
podporu projektu Mozilla. AOL se zavázala poskytnout 2 miliony dolarů
během 2 let. Neuplynul ani rok a žádná změna nebyla ohlášena. Ve
skutečnosti AOL nezaměstnává žádné vývojáře Mozilly a můžeme očekávat,
že další verze budou ještě více podobné Mozille než ty předchozí.
Velmi zajímavou otázkou je, proč vlastně AOL změnila svůj postoj
k legendárnímu prohlížeči.

Článek na Inquireru: <a href="http://www.theinquirer.net/?article=15045">http://www.theinquirer.net/?article=15045</a>

Celý článek: <a href="http://www.mozillazine.org/talkback.html?article=4544">http://www.mozillazine.org/talkback.html?article=4544</a>

Mozilla 1.7 bude novou dlouhodobou stabilní větví
-------------------------------------------------
Asa Dotzler ve svém příspěvku do diskusní skupiny oznámil, že Mozilla
1.7 se stane novou dlouhodobou stabilní větví, která nahradí verzi
1.4. Stabilní větev je určená vývojářům odvozených produktů a kritické
chyby jsou opravovány jak v této, tak i v kmenových verzích.

Mozilla Firefox 1.0, nový milník Mozilla Thunderbirdu, nová verze
Camina a několik odvozených produktů třetích stran bude založeno na
Mozille 1.7, a tak se Mozilla Foundation snaží zajistit její vysokou
kvalitu. Proto bylo založení nové větve o týden posunuto a konečná
verze Mozilly 1.7 byla odložena na půlku května. Vydány budou
3 Release Candidate verze, více než pro Mozillu 1.4. Ty zajistí více
testování a ladění.

Zatímco většina lidí přivítala, že stárnoucí větev 1.4 bude nahrazena
novější, někteří vývojáři projevili obavy z toho, že rozhodnutí
o použití verze 1.7 bylo učiněno příliš pozdě ve vývojovém cyklu.

Příspěvek Asy Dotzlera do diskusní skupiny:
<a href="http://groups.google.com/groups?as_umsgid=c4iksn$3rc1@ripley.netscape.com">http://groups.google.com/groups?as_umsgid=c4iksn$3rc1@ripley.netscape.com</a>

Celý článek: <a href="http://www.mozillazine.org/talkback.html?article=4559">http://www.mozillazine.org/talkback.html?article=4559</a>

Mozilla se spoluprací s GNOME a dalšími open source projekty
připravuje na Longhorn
----------------------------------------------------------------------

Brendan Eich, vedoucí architekt Mozilly, nastínil plány pro spolupráci
s dalšími open source projekty (např. GNOME). To pomůže
zajistit, že Mozilla zůstane významným projektem i v budoucnosti
a bude tak moci soupeřit s technologiemi Microsoftu začleněnými do
připravovaného operačního systému Windows Longhorn.

Celý článek: <a href="http://www.mozillazine.org/talkback.html?article=4584">http://www.mozillazine.org/talkback.html?article=4584</a>

Pinstripe - nový výchozí motiv Mozilla Thunderbirdu pro Mac OS X
---------------------------------------------------------------
Pinstripe je nové výchozí motiv vzhledu Mozilla Thunderbirdu pro
Mac OS X. Stejné výchozí motiv používá i Mozilla Firefox pro Mac OS X.
Bylo navrženo ve spolupráci Kevina Gericha a Stephena Horlandera tak,
aby ladilo s grafickým stylem Aqua.

Celý článek: <a href="http://www.mozillazine.org/talkback.html?article=4555">http://www.mozillazine.org/talkback.html?article=4555</a>

Mozilla prodává nová trička a plyšáky Firefox
---------------------------------------------
Obchod Mozilly nabízí široký sortiment oblečení. Známé tričko
s T-Rexem nyní doplňují další trička a mikiny, některé s motivem
Mozilla Firefoxu. Trička stojí od 16,95 $ do 21,95 $. K dispozici je
i 23cm plyšová hračka Firefox (synonymum pro červenou pandu) za
15,95 $ + poštovné a balné.

Obchod Mozilly: <a href="http://store.mozsource.com/">http://store.mozsource.com/</a>

Celý článek: <a href="http://www.mozillazine.org/talkback.html?article=4546">http://www.mozillazine.org/talkback.html?article=4546</a>

4. MOZILLA POD POVRCHEM
----------------------------------------------------------------------
(přispěl Alex Bishop)

Když Mozilla spadne, mohou uživatelé použít Talkback (zprostředkovatel
zpětné vazby) a odeslat hlášení o pádu aplikace zpět Mozilla
Foundation. Údaje z těchto hlášení lze nyní získat z webového
rozhraní, a tak k nim mají vývojáři snazší přístup. Kvůli bezpečnosti
nejsou zveřejňovány všechny údaje.

Bayesovská detekce nevyžádané pošty v Mozille se nyní může učit
z filtrů na serverech, i když pro tuto funkci zatím není dokončené
uživatelské rozhraní (chyba 224318).
Kontrola pravopisu vylepšuje návrhy na opravu špatně zapsaných slov
(chyba 227214).

Mozilla Thunderbird nyní na Mac OS X používá motiv vzhledu Pinstripe ve
stylu Aqua a umožňuje otevírat soubory ve formátu .eml (uložené
e-mailové zprávy) (chyba 217149).

Talkback - rychlé hledání: <a href="http://talkback-public.mozilla.org/">http://talkback-public.mozilla.org/</a>

Chyba 224318: <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=224318">https://bugzilla.mozilla.org/show_bug.cgi?id=224318</a>

Chyba 227214: <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=227214">https://bugzilla.mozilla.org/show_bug.cgi?id=227214</a>

Chyba 217149: <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=217149">https://bugzilla.mozilla.org/show_bug.cgi?id=217149</a>

Celá zpráva: <a href="http://www.mozilla.org/status/2004-04-14.html">http://www.mozilla.org/status/2004-04-14.html</a>

5. PROJEKTY PRO MOZILLU
----------------------------------------------------------------------
(přispěl Brian King)

Projekt týdne: OneClick

OneClick je postranní lišta, která obsahuje několik různých aplikací.
Funkce, které dříve vyžadovaly různá rozšíření, jsou nyní přístupná
v jediném programu bez nutnosti instalace. Současné aplikace
v postranní liště obsahují kalkulátor a hry Battle Ship a Minesweeper.
Je možné také spustit online verzi HTML editoru cuneForm. V ostatních
panelech postranní lišty najdete novinky a užitečné tipy pro Mozillu
získané projektem TipBar. Domovskou stránku projektu OneClick stojí za
to navštívit nejen kvůli unikátnímu vzhledu, ale můžete si zde také
vyzkoušet ukázkovou verzi postranní lišty a přečíst sekci "Have you
Heard?" ("Už jste slyšeli?") o hodnotných rozšířeních Mozilly.
V současnosti je OneClick dostupný pouze pro prohlížeč Mozilla.

<a href="http://www.mozdev.org/featured/index.html">http://www.mozdev.org/featured/index.html</a>

****

Zprávy o samostatných projektech

Zprávy o samostatných projektech obsahují novinky a poslední informace
o Mozille a rozšířeních shromážděných na mozdev.org a jinde v rámci
komunity.

Poslední zpráva z 13. dubna 2004 obsahuje:

Dictionary Search 0.5
vyhledává či překládá slova na webové stránce nebo v e-mailu pomocí
online slovníku. Verze 0.5 přidává podporu pro Thunderbird a Mozilla
Mail. Pokud byste chtěli přeložit uživatelské rozhraní Dictionary
Search do svého jazyka, můžete mi zaslat e-mail (jaap zavináč haitsma
tečka org). Budete muset přeložit asi 25 vět.
<a href="http://dictionarysearch.mozdev.org/">http://dictionarysearch.mozdev.org/</a>

wmlbrowser 0.6
pro zobrazení WML (Wireless Markup Language) stránek v Mozille či
Firefoxu. Vverze 0.6 zobrazuje obrázky na WML stránkách a bezchybně
načítá dlouhé stránky. Funkce prohlížeče, jako Zpět, Vpřed a Zobrazit
zdrojový kód stránky nyní fungují správně ve všech případech.
<a href="http://wmlbrowser.mozdev.org/">http://wmlbrowser.mozdev.org/</a>

launchy 2.2.0
Vám umožní otevřít odkazy včetně těch pro email v externích aplikacích.

V aktuální verzi je mnoho nových funkcí, např.:
   - podpora pro Calypso
   - podpora pro Frameset
   - načítání RDF přesunuto do "namespace"
   - detekce, zda jsou dostupné "winhooks"
   - více možností logování
<a href="http://gemal.dk/mozilla/launchy.html">http://gemal.dk/mozilla/launchy.html</a>

MozManual 1.0 (konečná verze)
Úvod do Mozilly, manuál pro nové uživatele včetně průvodce. Byl vydán
aktualizovaný návrh ve verzi 0.5. Ten obsahuje kompletní revizi stylů
pomocí CSS. Dále byla vylepšena grafika a rozlišení snímků obrazovek.
<a href="http://mozmanual.mozdev.org/">http://mozmanual.mozdev.org/</a>

Projekt Mozilla-Delphi
materiál pro práci s Mozillou v Borland Delphi a Kylixu. Byla
zveřejněna nová verze tříd JavaScript Bridge. Tato verze přidává nové
třídy TJSScript, nové metody do TJSArray, ukázku aplikace a opravuje
některé chyby.
<a href="http://delphi.mozdev.org/">http://delphi.mozdev.org/</a>

Více informací o každém projektu se dozvíte ve zprávě
<a href="http://www.mozdev.org/status/2004-04-13-status.html">http://www.mozdev.org/status/2004-04-13-status.html</a>

6. ANKETA ZPRAVODAJE MOZILLA LINKS
----------------------------------------------------------------------

V minulém čísle jsme se ptali, zda používáte IRC. Zde jsou výsledky:

- Ano, Chatzillu                15 % |]]]
- Ano, mIRC			11 % |]]
- Ano, jinou IRC aplikaci	14 % |]]]
- Ne				59 % |]]]]]]]]]]]]

Opět jsme se ptali, kterého správce osobních informací (PIM)
používáte. Zde jsou výsledky:

- Kalendář Mozilla		16 % |]]]
- Microsoft Outlook		15 % |]]]
- Ximian Evolution		 4 % |]
- Jiný				18 % |]]]]
- Žádný, ale sháním nějaký	20 % |]]]]
- Žádný nepotřebuji.		28 % |]]]]]]

(*) Kvůli zaokrouhlování nemusí být součet roven 100 %.

Anketa: Používáte jiné motivy vzhledu?

- Ne, používám výchozí motiv vzhledu produktu/platformy
- Ano, stále používám své oblíbené motivy vzhledu
- Ano a často je obměňuji

Hlasujte na <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org</a>

--------------------------- REKLAMA ---------------------------------
Získejte CD s posledními verzemi produktů Mozilly od 5,95 $. Trička
a trička s límcem nabízíme od 16,95 $ a plyšáka Firefox za 15.95 $.

Vyberte si ještě dnes! Navštivte:
                    <a href="http://store.mozilla.org/">http://store.mozilla.org</a>

****

Darujte krev. Zachraňte život. Staňte se dárci krve nebo kostní dřeně
ještě dnes. Navštivte <a href="http://www.ifrc.org/address/directory.asp">http://www.ifrc.org/address/directory.asp</a>
kde naleznete nejbližší stanici Červeného kříže nebo Červeného
půlměsice a poznejte radost z darování.

****

Zde můžete být Váš inzerát! Více podrobností o tom, jak se dostat
k 6 500 čtenářů na celém světě, získáte návštěvou
<a href="http://newsletter.mozdev.org/mlsp.html">http://newsletter.mozdev.org/mlsp.html</a>

7. KONTAKTNÍ INFORMACE
----------------------------------------------------------------------

Mozilla Links(TM) je čtrnáctidenní elektronický zpravodaj vydávaný
projektem Mozilla Links Newsletter.

SPRÁVA ODBĚRU: Pro přihlášení, odhlášení nebo změnu nastavení
navštivte prosím <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org/</a> .

VAŠE SOUKROMÍ: K přijímání tohoto zpravodaje je vyžadována pouze
platná e-mailová adresa. Ta nebude využita k jiným účelům než k těm
souvisejícím s tímto zpravodajem (doručení, podpora, odhlášení apod.).

KOMENTÁŘE: Vítány na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>

Mozilla Links je překládán do tradiční čínštiny, češtiny, holandštiny,
němčiny, japonštiny, polštiny a ruštiny.

Copyright 2004 přispěvatelé zpravodaje Mozilla Links.
Zpravodaj Mozilla Links je vydáván pod licencí Creative Commons
Attribution-NonCommercial-ShareAlike 1.0:
<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode">http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode</a>

----------------------------------------------------------------------
České vydání
- autoři: Petr Tomeš a Tomáš Marek
- e-mail: <a href="mailto:info@czilla.cz">info@czilla.cz</a>
- web: <a href="http://www.czilla.cz/podpora/zpravodaj/">http://www.czilla.cz/podpora/zpravodaj/</a>


</pre>

<?php
	$page->includeTemplate('footer');
?>
>