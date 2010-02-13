<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Zpravodaj Mozilla Links - 18. číslo';
	$page->headline = array('Zpravodaj Mozilla Links','18. číslo (3.5.2004 / 19.5.2004)');

	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');

	$page->includeHeader(); 
?>

<pre>

Od vydání Mozilly 1.7 RC 1 minulý týden odpočítává komunita Mozilly
dny do nadcházejícího vydání Mozilly 1.7, Thunderbirdu 0.6 a hlavně
Firefoxu 0.9 s kódovým označením One Tree Hill.

Očekávání Firefoxu 0.9 jsou větší než obvykle, protože podle
vývojového plánu
(<a href="http://www.mozilla.org/projects/firefox/roadmap.html">http://www.mozilla.org/projects/firefox/roadmap.html</a>) budou dokončeny
všechny vlastnosti a funkce. To znamená, že jakákoliv funkce ve
Firefoxu 1.0, bude dostupná již od 0.9. Mezi dalšími ohromnými
vylepšeními, by měl nový Správce rozšíření konečně zaplnit mezeru mezi
Firefoxem a jeho rozšířeními a umožnit uživatelům přístup k dostupným
rozšířením a jejich aktualizacím.

Raný náhled této funkce najdete na obrázcích Bena Goodgera (hlavní
vývojář Firefoxu):
<a href="http://weblogs.mozillazine.org/ben/archives/005324.html">http://weblogs.mozillazine.org/ben/archives/005324.html</a>
<a href="http://weblogs.mozillazine.org/ben/archives/005338.html">http://weblogs.mozillazine.org/ben/archives/005338.html</a>

Další vylepšení přicházející s Firefoxem 0.9: změny v uživatelském
rozhraní pro nastavení bezpečnosti, nové tlačítko na otevření
výchozího e-mailového klienta a výběr z několika rozšíření prohlížeče,
jež si můžete vybrat během instalace, podobně jako v tomto návrhu:
<a href="http://www.mozilla.org/projects/firefox/ue/installer/">http://www.mozilla.org/projects/firefox/ue/installer/</a>

Od příštího čísla bude zpravodaj Mozilla Links vydáván měsíčně
a zaměří se více na uživatele. Část obsahu přesuneme do připravovaného
zpravodaje DevLinks. Příští Mozilla Links (19) vyjde 2. června.

Děkuji za pozornost. Své komentáře posílejte prosím na
<a href="mailto:newsletter-feedback@mozilla.org.">newsletter-feedback@mozilla.org.</a>

Percy Cabello
Mozilla Links

----------------------------------------------------------------------
V tomto čísle:

1. VYLEPŠENÍ MOZILLY
       - Rozšíření: PluginDoc
       - Nainstalované pluginy
       - Optimalizace načítání pluginu Adobe Reader

2. NOVINKY
       - Nové ikony Thunderbirdu
       - Mozilla Foundation hledá návrháře webu pro správu fondu
       - Mozilla Foundation projednává budoucí strategii s GNOME
Foundation
       - Komický proužek UserFriendly si utahuje z Mozilly

3. PROJEKTY PRO MOZILLU
       - Projekt týdne: OneClick
       - Zprávy o samostatných projektech

4. ANKETA ZPRAVODAJE MOZILLA LINKS

5. KONTAKTNÍ INFORMACE


1. VYLEPŠENÍ MOZILLY
----------------------------------------------------------------------
Rozšíření: PluginDoc
(<a href="http://plugindoc.mozdev.org/">http://plugindoc.mozdev.org</a>)

Pluginy pro Mozillu jsou malé aplikace, které umožňují pracovat
s dalšími typy souborů.

Dobře známým pluginem je Adobe Reader. Pokud ho nainstalujete, umožní
Mozille otevřít také PDF (Portable Document Format) soubory.

Totéž platí pro Real Player, Macromedia Flash, Java a Apple QuickTime.
Po instalaci pluginu může Mozilla pracovat s odpovídajícími typy souborů.

Jak nastavit tyto a jiné moduly zjistíte na stránkách projektu
PluginDoc na serveru mozdev.org, kde najdete informace o pluginech,
řešení problémů, často kladené dotazy a odkazy na stažení pluginů pro
všechny podporované platformy v několika jazycích.

<a href="http://plugindoc.mozdev.org/">http://plugindoc.mozdev.org</a>

****

Tip zpravodaje Mozilla Links: Nainstalované pluginy
(přispěl Percy Cabello)

Abyste věděli, jaké moduly máte a jaké typy souborů podporují, napište
v balíku aplikací Mozilla a Mozilla Firefoxu do řádky adres:
					about:plugins

a stiskněte Enter. Otevře se webová stránka zobrazující, které pluginy
máte nainstalované. U každého pluginu zjistíte soubor spojený
s modulem (ve Windows obvykle DLL) a jeho popis, seznam souvisejících
MIME typů včetně popisu a zda jsou aktivována související rozšíření.

****

Supertip zpravodaje Mozilla Links: Optimalizace načítání pluginu Adobe
Reader
(přispěl Percy Cabello)

Už jste si asi všimli, že při otevírání PDF dokumentu z webové stránky
ve Windows se Adobe Reader načítá pomalu. To je proto, že se při
startu načítá několik málo používaných pluginů. Start můžete zrychlit
zákazem načítání těchto pluginů, aniž by došlo ke ztrátě funkčnosti:

- Otevřete adresář, kde je nainstalován Adobe Reader (u Windows je to
obvykle C:\Program Files\Adobe\Acrobat5.x\Reader nebo C:\Program
Files\Adobe\Reader).
- Zde najdete podadresáře "plug-ins" a "optional".
- Otevřete podadresář "plug-ins" a přesuňte všechny podadresáře a .API
soubory do adresáře "Optional".

Až příště otevřete PDF dokument v Adobe Readeru nebo pomocí Mozilly,
mělo by to být až šestkrát rychlejší!

Když budete chtít, aby byly pluginy Readeru načteny již od spuštění,
přesuňte je zpět do adresáře "plug-ins".

Více informací o pluginech Adobe Reader najdete v nabídce "Help -
About Adobe Reader Plug-ins" této aplikace.

****

Chcete více tipů? Vyzkoušejte rozšíření TipBar pro zobrazení tipu dne
v Mozilla Firefoxu. Stahujte z <a href="http://tipbar.mozdev.org/">http://tipbar.mozdev.org</a>

Další tipy pro svůj oblíbený prohlížeč najdete na:
<a href="http://www.mozillatips.com/">http://www.mozillatips.com</a>

Znáte nějaký tip nebo supertip? Dejte o něm vědět ostatním uživatelům na
<a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a> .

2. NOVINKY
----------------------------------------------------------------------
(přispěl MozillaZine, zdroj novinek o Mozille.
<a href="http://www.mozillazine.org/">http://www.mozillazine.org</a> )

Nové ikony Thunderbirdu
-----------------------

Jon Hicks představil nové ikony Thunderbirdu. Dosahují vysoké úrovně
ikon Firefoxu a budou brzy dostupné ve verzích pro Windows. Ikony pro
verze na OS X budou následovat.

Celý článek: <a href="http://www.mozillazine.org/talkback.html?article=4645">http://www.mozillazine.org/talkback.html?article=4645</a>

Mozilla Foundation hledá návrháře webu pro správu fondu
-------------------------------------------------------

Mozilla Foundation hledá grafika pro návrh svých nových online
příspěvkových stránek, s cílem nastřádat 1 000 000 $ v příštím roce.
Dosud bylo darováno téměř 100 000 $ online a Mozilla Foundation je
odhodlána navázat na tento úspěch se svou kampaní Mozillion, kterou
převzala z nedávné internetové snahy o navýšení fondu několika
amerických prezidentských kandidátů. Designéři, kteří mají zájem, musí
zaslat logo pro Mozillion, skicu domovské stránky a návrh jedné
vnitřní stránky kampaně do půlnoci na pátek 7. května.

Celý článek: <a href="http://www.mozillazine.org/articles/article4677.html">http://www.mozillazine.org/articles/article4677.html</a>

Mozilla Foundation projednává budoucí strategii s GNOME Foundation
------------------------------------------------------------------

Mozilla Foundation se sešla s GNOME Foundation (projekt vytvářející
uživatelské rozhraní pro Linux), aby projednala budoucí spolupráci.
Zápisy ze schůzky, která se uskutečnila prostřednictvím telekonference
minulou středu, prozrazují, že diskuse se točila okolo integrace
Mozilly s GNOME, duplikace technologie mezi oběma projekty
a primárního linuxového prohlížeče. Schůzka navázala na dřívější
komentáře Brendana Eicha o tom, jak může projekt Mozilla pokročit díky
GNOME. Stále se diskutuje o tom, jak úzce budou oba projekty
spolupracovat. Mozilla Foundation je odhodlána vytvořit oficiální
spojenectví s GNOME, zatímco zakladatel projektů browserů Galeon
a Epiphany pro GNOME, Marco Pesenti Gritti, prosazuje úplné sloučení.

Celý článek: <a href="http://www.mozillazine.org/talkback.html?article=4671">http://www.mozillazine.org/talkback.html?article=4671</a>

Komický proužek UserFriendly si utahuje z Mozilly
-------------------------------------------------

Mozilla byla součástí komického proužku 22. - 24. dubna na serveru
UserFriendly. Kreslený vtip byl očividně vytvořen jako reakce na email
Alexe Vincenta (člena komunity), zaslaný tvůrci serveru UserFriendly
JD "Illiadu" Frazerovi, dotazující se, proč si ještě nevzal na mušku
Mozillu. Podle kresleného vtipu se zdá, že jediná podivná věc na
Mozille je, že je obtížné na ní najít nějaký nedostatek.

<a href="http://www.mozillazine.org/talkback.html?article=4655">http://www.mozillazine.org/talkback.html?article=4655</a>

3. PROJEKTY PRO MOZILLU
----------------------------------------------------------------------
(přispěl Brian King)

EasyGestures

EasyGestures je vyskakující "koláčková" nabídka, které umožňuje
jednoduše provádět myší gesta uvnitř kruhového UI. Je ohromně
přizpůsobitelné tím, že umožňuje umístit jakoukoliv akci do
libovolného směru, změnit velikost koláčové nabídky (malé ikony anebo
velké menu s více akcemi) a změnit parametry speciálních akcí jako
jsou hledání na webu, spuštění souboru na lokáním disku, nebo načtení
dané webové stránky (či skriptu). Na nabídku easyGestures si musíte
chvíli zvykat, avšak na oplátku poskytuje jak nováčkům, tak i zkušeným
uživatelům lepší pohodlí a skutečné zrychlení práce s Firefoxem. Jde
o originální a velice návykovou zkušenost.

<a href="http://www.mozdev.org/featured/index.html">http://www.mozdev.org/featured/index.html</a>

****

Zprávy o samostatných projektech

Zprávy o samostatných projektech obsahují novinky a poslední informace
o Mozille a rozšířeních shromážděných na mozdev.org a jinde v rámci
komunity.

Poslední zpráva z 13. dubna 2004 obsahuje:

LookAhead 0.1
využívá webové služby Google k natažení adres URL do několika panelů.
Tato první verze přidává Google Toolbar. S postupujícím vývojem
přibude kontextová nabídka obdobně jako v rozšířeních Dictionary
Search a Web Search, nastavení počtu nalezených stránek a práce
s obsahem pro dospělé.
<a href="http://lookahead.mozdev.org/">http://lookahead.mozdev.org/</a>

Dictionary Search 0.5.1
vyhledává či překládá slova na webové stránce nebo v e-mailu pomocí
online slovníku. Dictionary Search 0.5.1 byl vydán 17. března.
Odstraňuje chybu z verze 0.5, kde se nezobrazoval dialog nápovědy.

<a href="http://dictionarysearch.mozdev.org/">http://dictionarysearch.mozdev.org/</a>

OneClick Sidebar
"Mnoho aplikací v jedné" liště! Obsah této postranní lišty byl
aktualizován a odstranilo se několik chyb. V nové verzi vestavěného
HTML editoru se také očekávaná některé nové funkce. V liště je několik
různých programů. Funguje na jakémkoliv OS či prohlížeči Mozilla
a může být přístupný vzdáleně bez instalace. Očekáváme také články
o postranní liště. Pokud můžete přispět, máte zájem o překlad lišty
nebo máte projekt, který si zaslouží uznání, kontaktujte nás.

<a href="http://oneclick.mozdev.org/">http://oneclick.mozdev.org/</a>

Mouse Gestures 0.4p
ovládejte svůj prohlížeč myšími pohyby. Tým Optimoz zveřejnil novou
noční verzi populárního rozšíření Mouse Gestures pro Mozillu
1.x/Firefox. Novinky: vylepšená lišta "Gesture Guide" s kontextovou
nabídkou pro změnu pořadí či zobrazení historie vykonaných gest,
podpora pro Firefox (přetáhněte tlačítko MozGest na nástrojovu lištu,
nebo použijte Zobrazit-&gt;Postranní lišta (View-&gt;Sidebar)), gesta pro
horizontální posun stránky a nová gesta šípového tvaru pro vertikální
posun stránky. Seznam pohybů na našich stránekách se neustále
rozrůstá. Prohlédněte si stránky Gesture Exchange a naimportujte
mapování pohybů jiných uživatelů, nebo pošlete své vlastní funkce.

<a href="http://optimoz.mozdev.org/gestures/">http://optimoz.mozdev.org/gestures/</a>
<a href="http://optimoz.mozdev.org/gestures/redirect/gesture-exchange/">http://optimoz.mozdev.org/gestures/redirect/gesture-exchange/</a>

DownloadWith 0.0.7
stahujte soubory s externími programy. Podporuje 17 různých stahovačů
i několik najednou. Stáhněte si ukázková nastavení pro mnoho
populárních stahovacích manažerů (včetně Download Accelerator Plus,
Leechget, Getright, Star Downloader a mnoha dalších) nebo si ručně
nastavte nějaký stahovací manažer, který podporuje parametry příkazové
řádky. Ukázková nastavení neustále přibývají. Vyzkoušejte tyto a mnoho
dalších funkcí.

<a href="http://downloadwith.mozdev.org/">http://downloadwith.mozdev.org/</a>

QuickReply 0.5.3
rozšíření Thunderbirdu na rychlé odpovědi na zprávy. QuickReply znovu
žije! Nyní pracuje pro Thunderbird (verze od 20040322). Verze 0.5.3
byla vydána 11. dubna 2004. Novinky: měnitelná textového pole pro
vstup (s uchováním), nastavení "Ponechat otevřené", podpora šifrování,
zalamování řadků, stavový řádek (jako náhrada za číselnou indikaci).

<a href="http://quickreply.mozdev.org/">http://quickreply.mozdev.org/</a>

Launchy 2.3.0
otevírá odkazy (včetně e-mailových) v externí aplikaci. Byla přidána
podpora pro následující aplikace: Avant Browser, Crazy Browser,
GetRight, LeechGet, Mass Downloader, Star Downloader, Internet
Download Manager, ReGet Deluxe, BitTorrent, FlashGet, Total Commander,
UltraFXP, WS_FTP Pro, SmartFTP a BulletProof FTP.

<a href="http://gemal.dk/mozilla/launchy.html">http://gemal.dk/mozilla/launchy.html</a>

Více informací o každém projektu se dozvíte ve zprávě
<a href="http://www.mozdev.org/status/2004-04-23-status.html">http://www.mozdev.org/status/2004-04-23-status.html</a>

4. ANKETA ZPRAVODAJE MOZILLA LINKS
----------------------------------------------------------------------

V minulém čísle jsme se zeptali zda používáte motivů vzhledů. Zde jsou
výsledky:

Ne, používám výchozí motiv      44 % |]]]]]]]]]
vzhledu produktu/platformy
Ano, stále používám             38 % |]]]]]]]]
svůj oblíbený motiv vzhledu 
Ano a často je obměňuji         18 % |]]]]

(*) Kvůli zaokrouhlování nemusí být součet roven 100 %.

Anketa: Který plugin považujete za nejdůležitější?

- Macromedia Flash
- Adobe Reader
- Apple QuickTime
- Real Player
- Java
- Jiný plug-in

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

5. KONTAKTNÍ INFORMACE
----------------------------------------------------------------------

Mozilla Links(TM) je čtrnáctidenní elektronický zpravodaj vydávaný
projektem Mozilla Links Newsletter.

SPRÁVA ODBĚRU: Pro přihlášení, odhlášení nebo změnu nastavení
navštivte prosím <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org/</a> .

VAŠE SOUKROMÍ: K přijímání tohoto zpravodaje je vyžadována pouze
platná e-mailová adresa. Ta nebude využita k jiným účelům než k těm
souvisejícím s tímto zpravodajem (doručení, podpora, odhlášení apod.).

KOMENTÁŘE: Vítány na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org
</a>

Mozilla Links je překládán do tradiční čínštiny, češtiny, němčiny,
japonštiny, polštiny a ruštiny.

Copyright 2004 přispěvatelé zpravodaje Mozilla Links.
Zpravodaj Mozilla Links je vydáván pod licencí Creative Commons
Attribution-NonCommercial-ShareAlike 1.0:
<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode">http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode</a>

----------------------------------------------------------------------
České vydání
- autoři: Petr Tomeš a Tomáš Marek
- e-mail: <a href="mailto:info@czilla.cz">info@czilla.cz
</a>
- web: <a href="http://www.czilla.cz/podpora/zpravodaj/">http://www.czilla.cz/podpora/zpravodaj/</a>

Omlouváme se za nedávný problém s nevyžádaným příspěvkem
a se zveřejněním pracovní verze tohoto čísla. K tomu by již nemělo
docházet.

Hledáme další překladatele na urychlení vydávání českých verzí!


</pre>

<?php
	$page->includeFooter();
?>
