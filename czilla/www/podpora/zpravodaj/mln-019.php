<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Zpravodaj Mozilla Links - 19. číslo';
	$page->headline = array('Zpravodaj Mozilla Links','19. číslo (4.6.2004 / 7.6.2004)');

	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');

	$page->includeHeader(); 
?>

<pre>

Celá komunita Mozilly napjatě očekává zprávu o vydání Firefoxu 0.9.
Mnoho uživatelů se ptá, jak moc se projekt opozdí oproti původnímu
časovému harmonogramu.

Díky delší době na testování a inovace, by měl Firefox obsahovat méně
chyb než bychom obvykle od beta verze čekali. Ben Goodger navrhl nové
správce rozšíření a motivů vzhledů s takovými lahůdkami, jako je
automatická aktualizace a mnoho vychytávek pro vývojáře. Podrobnosti
hledejte v sekci Novinky.

Pokusme se na chvíli zapomenout na pozdní vydání Firefoxu a otestujme
poslední zkušební verze balíku aplikací Mozilla (dostupné na
stránce Mozilly <a href="http://mozilla.org/releases/">http://mozilla.org/releases/</a>).

Tento měsíc se také objeví velmi očekávaný zpravodaj DevLinks.
Nejnovější informace o tomto zpravodaji zaměřeném na vývojáře můžete
nalézt na stránkách projektu <a href="http://newsletter.mozdev.org/dev">http://newsletter.mozdev.org/dev</a> .

S blížící se verzí 1.0 Mozilla Thunderbirdu bychom chtěli, abyste se
nepřestávali zajímat o dění kolem tohoto výborného e-mailového
klienta. Toto vydání zpravodaje Mozilla Links je zaměřené na Mozilla
Thunderbird. Naleznete zde zajímavá rozšíření vyvinutá Mykem Melezem
z Mozilla Foundation, které do Thunderbirdu přidává funkce pro
publikování, i tipy a anketu o Vašem zájmu o Thunderbird.

Děkujeme Vám za přízeň. Své komentáře posílejte prosím na
<a href="mailto:newsletter-feedback@mozilla.org.">newsletter-feedback@mozilla.org.</a>

Percy Cabello &amp; Robin Monks
Mozilla Links

----------------------------------------------------------------------
V tomto čísle:

1. VYLEPŠENÍ MOZILLY
       - Forumzilla
       - Třidění pošty pomocí filtrů
       - Blokování okna s průběhem odesílání
       - Změna chování při přechodu na další nepřečtenou zprávu

2. KOMUNITA MOZILLY

3. NOVINKY
       - Přenášení profilů v Mozille 1.8
       - Podrobnosti o blížící se Mozille Firefox 0.9
       - Verze Mozilly vydané v uplynulém měsíci
       - Místní novinky

4. PROJEKTY PRO MOZILLU
       - Zprávy o samostatných projektech

5. ANKETA ZPRAVODAJE MOZILLA LINKS

6. KONTAKTY

1. VYLEPŠENÍ MOZILLY
----------------------------------------------------------------------

Rozšíření: Forumzilla
(vytvořil Myk Melez)

Forumzilla je rozšíření pro Mozilla Mail a Thunderbird na čtení
příspěvků v RSS (Really Simply Syndication) a Atomu. Umožní Vám číst
zdroje ve standardním třípanelovém uživatelském rozhraní, které možná
již dobře znáte.

Myk věří, že ve chvíli, kdy čtete tento zpravodaj, by měla být
dostupná nová Forumzilla 0.5.1 s následujícími vylepšeními:

- Dialog pro editaci Vašich zdrojů, takže již není nutné upravovat
textové soubory v adresáři s profilem
- Formát registračních souborů na bázi RDF, pokud jste se přesto
rozhodli modifikovat textové soubory
- Klikací odkaz pro čtení článku ve Vašem webovém prohlížeči pro
případ, že ho chcete číst postaru.
- Spousta oprav pro různé zdroje a vylepšená podpora pro mezinárodní
příspěvky v jiných znakových sadách než ASCII.

Plány pro budoucí verze zahrnují:
- Snadnější způsoby přihlášení do RSS kanálů a správu zdrojů
- Lepší integrace s Thunderbirdem, jako například ohlášení nové
zprávy, když Forumzilla obdrží nový článek.
- Řazení diskusí do vláken pro zdroje orientované na diskusi
- Možnost okomentování článků pro kanály jež to umožňují

Ke stažení z:
<a href="http://forumzilla.mozdev.org/">http://forumzilla.mozdev.org</a>

Dříve, než zašlete požadavek na novou funkci, nebo když chcete oznámit
chybu, navštivte:
<a href="http://mozdev.org/bugs/enter_bug.cgi?product=Forumzilla">http://mozdev.org/bugs/enter_bug.cgi?product=Forumzilla</a>

Sledujte vývoj Forumzilly na těchto e-mailových konferencích:
- Pro obecnou diskusi:
	<a href="http://www.mozdev.org/mailman/listinfo/forumzilla">http://www.mozdev.org/mailman/listinfo/forumzilla</a>

- Pro oznámení:
	<a href="http://www.mozdev.org/mailman/listinfo/forumzilla-announce">http://www.mozdev.org/mailman/listinfo/forumzilla-announce</a>

----

Tip: Třídění pošty pomocí filtrů
(přispěl Percy Cabello)

Pokud jste zaregistrováni k odběru několika zpravodajů nebo používáte
více účtů v Mozilla Thunderbirdu, můžete požadovat automatické třídění
zpráv do složek.

Pokud například chcete, aby všechna vydání zpravodaje Mozilla Links
byla doručena do konkrétní složky, postupujte následujícím způsobem:

- Vyberte nabídku "Nástroje (Tools)" a podnabídku "Poštovní filtry...
(Message filters...)"
- Stiskněte tlačítko "Nový (New)"
- Do pole "Název filtru (Filter name)" zadejte "Mozilla Links"
- Zaškrtněte "Pro příchozí zprávy, které odpovídají (Match any of the
following)"
- Vyberte "Odesílatel (Sender)", "obsahuje (contains)" a zadejte
"<a href="mailto:newsletter-cz@mozilla.org">newsletter-cz@mozilla.org</a>" (e-mailová adresa, ze které jsou posílána
jednotlivá čísla)
- V nastavení "Provést akci (Perform these actions)", zatrhněte
"Přesunout do složky (Move to folder)" a vyberte složku, nebo
stiskněte "Nová složka (New folder)" a vytvořte novou složku, např.
"Mozilla Links"
- Stiskněte "OK"
- Chcete-li nyní roztřídit složku s doručenou poštou (Inbox), vyberte
právě vytvořený filtr ("Mozilla Links") a stiskněte "Spustit nyní"
k přesunu všech obdržených e-mailových zpráv se zpravodajem do složky
"Mozilla Links". (Pozn. překl.: Filtry můžete spouštět i z nabídky
"Nástroje (Tools)" volbou "Spustit filtry na vybrané složce (Run
Filters on folder)")

----

SuperTip: Blokování okna s průběhem odesílání
(upraveno ze stránek Mozilla Thunderbird Help na
<a href="http://texturizer.net/thunderbird">http://texturizer.net/thunderbird</a>

Když v Mozilla Thunderbirdu odesíláte e-mail, zobrazuje se okno
s informacemi o průběhu odesílání. Pokud zjistíte, že Vás okno
obtěžuje nebo jinak ruší, zakažte jej následujícím způsobem:

- Otevřete soubor user.js v adresáři s profilem. (Pro získání
informací o tom, kde najít Váš adresář s profilem, navštivte
<a href="http://www.gemal.dk/mozilla/profile.html">http://www.gemal.dk/mozilla/profile.html</a>)
- Přidejte následující kód:
      // Zakázat informativní okno při odesílání
     user_pref("mailnews.show_send_progress", false);

----

SuperTip: Změna chování při přechodu na další nepřečtenou zprávu
(upraveno ze stránek Mozilla Thunderbird Help na
<a href="http://texturizer.net/thunderbird">http://texturizer.net/thunderbird</a>

Když kliknete na tlačítko "Další (Next)" (nebo prostě stisknete "N"),
přesunete se na další nepřečtenou zprávu v aktuální složce. Pokud tam
již nejsou žádné nepřečtené zprávy, Thunderbird se Vás zeptá, zda
chcete přejít do další složky s nepřečtenými zprávami. Toto chování
můžete změnit přidáním následujícího kódu do souboru user.js
v adresáři s profilem (pro získání informací o tom, kde najít Váš
adresář s profilem, navštivte <a href="http://www.gemal.dk/mozilla/profile.html">http://www.gemal.dk/mozilla/profile.html</a>):

// Předvolba pro chování při přechodu na další nepřečetenou zprávu
// 0 - Vždy přejít na další složku bez vyzvání
// 1 - Zeptat se při přechodu (výchozí)
// 2 - Nikdy nepřecházet do další složky s nepřečtenými zprávami
user_pref("mailnews.nav_crosses_folders", 1);

----

Chcete více tipů? Vyzkoušejte rozšíření TipBar pro zobrazení tipu dne
v Mozilla Firefoxu. Stahujte z <a href="http://tipbar.mozdev.org/">http://tipbar.mozdev.org</a>

Další tipy pro svůj oblíbený prohlížeč najdete na:
<a href="http://www.mozillatips.com/">http://www.mozillatips.com</a>

Znáte nějaký tip nebo supertip? Dejte o něm vědět ostatním uživatelům na
<a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a> .

2. KOMUNITA MOZILLY
----------------------------------------------------------------------

Není žádný pochyb o tom, že mozdev.org je jedním z hlavních zázemí
projektů Mozilly zajišťující nejen hostování, ale také prostředí pro
vývojáře nadšené technologiemi Mozilly na tvorbu oblíbených rozšíření,
motivů vzhledů a manuálů.

Abychom se o nich a o mozdev.org dozvěděli trochu více, zeptali jsme
členů týmu: Davida Boswella, Peta Collinse, Briana Kinga a Chrise
Nealeho. Zde je výňatek z rozhovoru:

David Boswell: Web vznikl ke konci roku 2000 a byl připraven na
hostování některých projektů Mozilly, na kterých jsme v tu dobu
pracovali, včetně Script Editoru, Total Recallu a Theme Builderu. To
byly projekty, které vedl Pete, když jsme oba pracovali na místě
nazvaném Alphanumerica.

Když byl web spuštěn, otevřeli jsme tvorbu projektů každému v
komunitě, neboť jsme chtěli pomoci podpořit myšlenku použití Mozilly
jako platformy. Existují odkazy na staré verze:

[Chris Neale nám prozradil, že stará verze mozdev.org se nachází na:
<a href="http://web.archive.org/web/20001018075443/http://www.mozdev.org/%5D">http://web.archive.org/web/20001018075443/http://www.mozdev.org/]</a>


ML(Mozilla Links): Jaký je vztah k Mozdev Group, Inc.?

Brian King: Mozdev Group Inc. (MDG) je Mozilla Software Development
Company (Společnost pro vývoj softwaru v Mozille) založená Petem
Collinsem 24. ledna 2003. Nyní je na mozdev.org zcela nezávislá
a funguje jako firma zabývající se dodáváním vysoce kvalitních, na
Mozille postavených, softwarových řešení pro klienty.

<a href="http://www.mozdevgroup.com/solutions/">http://www.mozdevgroup.com/solutions/</a>

- Jakým dalším projektům se věnuješ? Jaký je stav projektu "Creating
Application with Mozilla" (Tvorba aplikací v Mozille) a tvé další plány?

DB: Rád bych aktualizoval obsah projektu "Creating Application with
Mozilla" a vytvořil jeho druhou verzi, ale nemyslím si, že je na to
čas. Mozilla se stále rychle vyvíjí a myslím, že bude snažší pracovat
na aktualizaci knihy v době, kdy se platforma ustálí.

BK: Druhé vydání by bylo dobré, ale nejprve ho musíme prosadit
u vydavatele (O'Reilly)!

Celý rozhovor naleznete na:
<a href="http://newsletter.mozdev.org/interview-mozdev.html">http://newsletter.mozdev.org/interview-mozdev.html</a>


3. NOVINKY
----------------------------------------------------------------------

Přenášení profilů v Mozille 1.8
-------------------------------
(původní reporáž MozillaNews)

Ben Bucksch, vývojář Beonex Communicatoru (na Mozille založený
internetový balík aplikací), dokončil přenášení profilů Mozilly. Tato
funkce umožňuje uživatelům, kteří používají několik počítačů uvnitř
sítě, aby měli svá nastavení (uložená v profilu) dostupná kdekoliv se
přihlásí a spustí Mozillu.

To bude vítaná novinka pro uživatele domácích a podnikových sítí.

Podrobnosti o blížícím se Mozilla Firefoxu 0.9
----------------------------------------------
(původní reportáž Neowin.net)

V nedávném rozhovovru s Neowin.net, Ben Goodger, vedoucí vývojář
Mozilly Firefox upřesnil některá vylepšení a nové funkce, které můžeme
očekávat v příští verzi:

- Nové systémy pro rozšíření a motivů vzhledů, včetně velmi
očekávaných správců pro jednoduché nalezení rozšíření a jejich
aktualizace, jakmile jsou vydány nové verze. To by také mělo znamenat
mnohem méně nefunkčních motivů vzhledu s každým vydáním nové verze
Firefoxu.
- Mnohem menší velikost ke stažení (pouze 4.6MB).
- Podpora nástrojů pro přechod z následujících prohlížečů (a dalšími
s příchodem verze 1.0):
   - Pro Windows: Internet Explorer, Opera, Netscape 7.x, Mozilla 1.x
a Netscape 4.x
   - Pro Mac a Linux: Netscape 7.x a Opera
   Uživatelé Internet Exploreru najdou všechna svá data (oblíbené
položky, hesla, cookies, data z formulářů, historii a klíčová slova
pro vyhledávání) v Mozilla Firfoxu.
- Vylepšené hledání a záložky.
- Možnost spuštění výchozího e-mailového klienta přímo z prohlížeče
- Mnoho oprav chyb

Verze Mozilly vydané za poslední měsíc
--------------------------------------
(původní reportáž mozillaZine.org)

Květen byl velmi aktivním měsícem pro produkty Mozilly:

- Mozilla 1.4.2 se stává dočasnou stabilní verzí Mozilly do vydání
verze 1.7 během příštích týdnů.

- Mozilla 1.7 RC2 - nová zkušební verze nadcházející stabilní verze
balíku aplikací Mozilla.

- Mozilla 1.8 alfa

- America Online oznámila, že vydá novou verzi starého dobrého
Netscapu (7.2) založeném na Mozille 1.7. Podle předchozích ohlášní
AOL, měla být opravdu poslední verze Netscape 7.1.

- Camino 0.8 beta, prohlížeč založený na Mozille s původním
uživatelským rozhraním Cocoa, přináší pole pro vyhledávání na Google
umístěné v nástrojové liště (obdobně jako u Firefoxu), kompaktnějšího
správce stahování, zcela přepsaný systém záložek se schopností
importovat záložky ze Safari, IE a Mozilly, spolu s integrací
Rendezvous a adresáře, podporu víceúrovňového vracení, velmi
vylepšenou správu cookies a mnoho dalších změn.

- Vydána verze 0.6 Mozilla Thunderbirdu obsahuje nový instalátor verze
pro Windows, nově motiv vzhledu Pinstripe pro MacOSX, vylepšenou
kontrolu nad nevyžádanou poštou, nové logo a mnoho dalších vylepšení.

Místní novinky
--------------
(přispěla CZilla, <a href="http://www.czilla.cz/">http://www.czilla.cz</a>)

Mozilla i na CD
Modemisty určitě potěší zpráva, že na CD, které je součástí
Softwarových novin (č. 6, červen 2004), najdou Mozillu 1.7rc2
a Mozilla Thunderbird 0.6 v anglických verzích.
- lokalizační balíčky: <a href="ftp://ftp.czilla.cz/mozilla/">ftp://ftp.czilla.cz/mozilla/</a>

Weby státní správy přístupné?
Na Lupě vyšel článek Jak budou vypadat pravidla přístupného webu pro
veřejnou správu?, kde se dozvíte o připravované novele zákona, která
by měla motivovat státní správu, aby její weby byl přístupné
i z alternativních prohlížečů.
- článek: <a href="http://www.lupa.cz/clanek.php3?show=3380">http://www.lupa.cz/clanek.php3?show=3380</a>

Lokalizace Mozilla Thunderbird 0.6
Byla vydána česká verze Mozilla Thunderbirdu 0.6.
- instalátor pro Windows (9 MB):
<a href="http://ftp.czilla.cz/mozilla/TB0.6/ThunderbirdSetup-0.6-csCZ.exe">http://ftp.czilla.cz/mozilla/TB0.6/ThunderbirdSetup-0.6-csCZ.exe</a>
- lokalizační balíček:
<a href="http://ftp.czilla.cz/mozilla/TB0.6/thunderbird-0.6-csCZ-langpack.zip">http://ftp.czilla.cz/mozilla/TB0.6/thunderbird-0.6-csCZ-langpack.zip</a>

Mozilla v rádiu
25. května proběhl v pořadu Terabajt na rádiu Akropolis rozhovor
o Mozille s Adamem Přibylem (člen týmu CZilla).
- záznam rozhovoru (asi 30. minuta):
<a href="http://ftp.sh.cvut.cz/Archiv-Radio_Strahov/">http://ftp.sh.cvut.cz/Archiv-Radio_Strahov/</a>
Archiv%20Radia%20Akropolis/Terabajt%20-%202004-05-25%20-%20Mozilla.ogg


4. PROJEKTY PRO MOZILLU
-----------------------------------------------------------

Zprávy o samostatných projektech
(přispěl Brian King)

Zprávy o samostatných projektech obsahují novinky a poslední informace
o Mozille a rozšířeních shromážděných na mozdev.org a jinde v rámci
komunity.

Poslední zpráva z 30. května 2004 obsahuje:

Checky 2.1,
rozšíření pro validaci (kontrola dodržení syntaxe) zdrojových kódů
a jejich rozbor pro Mozillu a Firefox.
Pro: Firefox a Mozillu
Platforma: všechny
Checky obsahuje jednoduché uživatelské rozhraní pro mnoho rozličných
volně dostupných a komerčních služeb pro validaci a rozbor. Kromě
dalších funkcí a vlastností poskytuje:
- Validaci rozbor HTML, XHTML, CSS, RDF, RSS, XML, WAI, Section 508,
P3P, odkazů, metadat a mnoha dalšího
- Validaci souborů na pevném disku
- Validaci souborů na intranetu
- Validaci dynamických souborů PHP, Perl, CGI, Java, ASP, ColdFusion,
a C# (např. *.jsp, *.php, *.cgi, *.do, *.pl)
- Jednoduchou konfiguraci
- Náhled na výsledek v okně či panelu
<a href="http://checky.sourceforge.net/">http://checky.sourceforge.net/</a>

MozillaBook 0.2.1,
uživatelský průvodce Mozillou
Pro: Mozillu a projekty od ní odvozené
Platformy: -
Změny od poslední verze:
- Opraveno pár drobných chyb a formátování
- Přidáno číslo verze na titulní stránku
- Přepracována sekce převodu profilů
<a href="http://userguide.mozdev.org/">http://userguide.mozdev.org/</a>

Mozilla Archive Format 0.2.18
umožňuje uložit kompletní webové stránky do jediného archivu
Pro: Firefox
Platformy: Windows, Linux
V této verzi bylo přidáno několik funkcí. V dalších verzích se plánuje
optimalizace dekódování MHT, schopnost aktualizace obsahu archivů,
ukládání obsahu dalších formátů do archivu, přepisování URL odkazů na
stránky v archivu a ukládání přídavných metadat, jako jsou historie
stránky, zvětšení fontu textu a pozice prohlížení.
Nejvýznamější novinky:
- podpora čtení MHT (odhadem 95% kompatibilita)
- Instalátor nyní instaluje také skripty a externí aplikace
- Uloženo může být několik kompletních stránek v jediném archivu
s původní URL adresou uloženou v metadatech
<a href="http://maf.mozdev.org/">http://maf.mozdev.org/</a>

Enigmail 0.84.0
šifrování e-mailů v OpenPGP.
Pro: Mozillu a Thunderbird
Platformy: Windows, Linux, Mac OSX, Solaris, FreeBSD, OpenBSD, NetBSD
7. května byl vydán Enigmail 0.84 pro Thunderbird 0.6 a Mozillu 1.7.
Nejvýznamnější novinky:
- Vylepšená pravidla pro nastavení primárního šifrování a
individuálního podpisu pro adresáta
- Nový editor pravidel pro adresáty
<a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>

MozManual 1.0 (finální verze), Webová verze 0.7, Holandská verze 0.5
seznámení s Mozillou - manuál pro začátečníky, krátký přehled a
průvodce vlastnostmi.
Pro: Mozillu
Platformy: Windows, Linux, Mac OSX
Nejvýznamnější novinky:
- Nyní je dostupná webová (HTML) verze manuálu. Může být použita jako
seznámení s Mozillou online.
- Obsah je úplný - nyní se kotrolují chyby a chybějící části
- Holandská verze (<a href="http://mozmanual.mozdev.org/nl/index.html">http://mozmanual.mozdev.org/nl/index.html</a> -
Nederlands), verze 0.5: nyní je dostupná aktualizovaná ukázka návrhu
Mozilla Manualu
<a href="http://mozmanual.mozdev.org/">http://mozmanual.mozdev.org/</a>

Více informací o každém projektu se dozvíte ve zprávě
<a href="http://www.mozdev.org/status/2004-05-30-status.html">http://www.mozdev.org/status/2004-05-30-status.html</a>

5. ANKETA
----------------------------------------------------------------------

V minulém čísle jsme se zeptali, který plugin považujete za
nejdůležitější. Zde jsou výsledky:

- Macromedia Flash  35% |]]]]]]]
- Adobe Reader      28% |]]]]]]
- Apple QuickTime    5% |]
- Real Player        1% |]
- Java              28% |]]]]]]
- Jiný               3% |]

(*) Kvůli zaokrouhlování nemusí být součet roven 100 %.

Anketa tohoto čísla: Plánujete přechod na Mozilla Thunderbird?

- Již jsem přešel
- Až po vydání verze 1.0
- Až bude obsahovat určitou funkci z plánu vývoje
- Jsem spokojen s Mozilla Mailem a přechod neplánuji
- Jsem spokojen s jiným e-mailovým klientem
- Nemohu změnit svého současného e-mailového klienta

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

Zde můžete být Vaše reklama! Více podrobností o tom, jak se dostat
k 6 500 čtenářů na celém světě, získáte návštěvou
<a href="http://newsletter.mozdev.org/mlsp.html">http://newsletter.mozdev.org/mlsp.html</a>

5. KONTAKTNÍ INFORMACE
----------------------------------------------------------------------

Mozilla Links(TM) je čtrnáctidenní elektronický zpravodaj vydávaný
projektem Mozilla Links Newsletter.

SPRÁVA ODBĚRU: Pro přihlášení, odhlášení nebo změnu nastavení
navštivte prosím <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org/</a> .

VAŠE SOUKROMÍ: K přijímání tohoto zpravodaje je vyžadována pouze
platná e-mailová adresa. Ta nebude využita k jiným účelům než k těm
souvisejícím s tímto zpravodajem (doručení, podpora, odhlášení apod.).

KOMENTÁŘE: Vítány na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>

Mozilla Links je překládán do tradiční čínštiny, češtiny, němčiny,
japonštiny, polštiny a ruštiny.

Copyright 2004 přispěvatelé zpravodaje Mozilla Links.
Zpravodaj Mozilla Links je vydáván pod licencí Creative Commons
Attribution-NonCommercial-ShareAlike 1.0:
<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode">http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode</a>

České vydání
- autoři: Petr Tomeš a Tomáš Marek
- e-mail: <a href="mailto:info@czilla.cz">info@czilla.cz</a>
- web: <a href="http://www.czilla.cz/podpora/zpravodaj/">http://www.czilla.cz/podpora/zpravodaj/</a>


</pre>

<?php
	$page->includeFooter();
?>
