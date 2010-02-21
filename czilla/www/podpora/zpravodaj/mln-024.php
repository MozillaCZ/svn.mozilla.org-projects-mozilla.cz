<?php
	require_once '../../inc/page.php';
	$page->title = 'Zpravodaj Mozilla Links - 24.číslo');
	$page->setHeadline('Zpravodaj Mozilla Links','24. číslo (3.11.2004 / 13.11.2004)');
	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');
	$page->includeTemplate('header'); 
?>

<h2 id="content" class="nice">Obsah</h2>
<ul>
<li>Vylepšení Mozilly
	<ul>
	<li><a href="#better-mozilla-1">Recenze: Mozilla Archive Format</a></li>
   	<li><a href="#better-mozilla-2">Recenze: Firefox Ultrabar</a></li>
   	<li><a href="#better-mozilla-3">Tip: Zahlaďte své stopy</a></li>
   	<li><a href="#better-mozilla-4">Super tip: Zprovozněte rozšíření v nových verzích prohlížeče</a></li>
	</ul>
</li>
<li><a href="#community">Komunita: Pat MacDonald o Firefox Ultrabaru</a></li>
<li><a href="#news">Souhrn zpráv za uplynulý měsíc</a>
	<ul>
	<li><a href="#news-1">Spuštěn projekt nápovědy pro Mozilla Calendar a Sunbird</a></li>
	<li><a href="#news-2">Vydáno Nvu 0.5</a></li>
	<li><a href="#news-3">SFX</a></li>
	<li><a href="#news-4">Ze světa</a></li>
	<li><a href="#news-5">Mozilla.org nabízí lokalizované verze Firefoxu</a></li>
	<li><a href="#news-6">Méně závažné zranitelnosti v Mozille, Firefoxu, Thunderbirdu a Caminu</a></li>
	<li><a href="#news-7">Mezinárodní weby projektu Mozilla</a></li>
	<li><a href="#news-8">Na poslední chvíli: Nástrojová lišta A9.com nyní i pro Firefox</a></li>
	</ul>
</li>
<li><a href="#projects">Projekty</a></li>
<li><a href="#contact">Kontakty</a></li>
</ul>

<h2 class="nice">Anketa</h2>
<p>V minulém čísle jsem se vás ptali, zda používáte Aktuální záložky a zde jsou výsledky:</p>

<ul>
<li>17 % Ano, jsou úžasné!</li>
<li>17 % Ano, ale doufám, že se zlepší</li>
<li>7 % Ne, počkám na Firefox 1.0</li>
<li>5 % Ne, nemám rád RSS</li>
<li>7% Ne, dávám přednost Thunderbirdu</li>
<li>11 % Ne, dávám přednost jiné čtečce RSS kanálů</li>
<li>37 % Co jsou to Aktuální záložky?</li>
</ul>

<p>Anketa tohoto čísla: Chtěli byste navíc k pravidelnému odběru zpravodaje Mozilla Links dostávat také ohlášení nových vydání, bezpečnostních varování a oznámení o marketingových kampaních?</p>

<ul>
<li>Jistě, ať mi chodí.</li>
<li>Ano, ale omezte je max. na 1 týdně.</li>
<li>V žádném případě.</li>
</ul>

<p>(Pozn. překladatele: Původní anglické i lokalizované vydání tohoto zpravodaje se ještě věnuje testovacím verzím (RC) Firefoxu 1.0. <a href="/clanky/tiskove-zpravy/mozilla-firefox-1.0-cz.php">Firefox 1.0 vyšel 9.11.2004</a>.) Firefox 1.0 Release Candidate je tu. Od tzv. Preview Release se liší pouze v menších konečných úpravách, jako jsou vylepšení tisku a Aktuálních záložek a nové ikony na nástrojové liště. Příjemného vylepšení doznaly také ikony v nabídce předvolby. Díky nové položce v Předvolbách/Ostatní/Prohlížení v panelech můžete ve Firefoxu otevírat odkazy z jiných aplikací (např. z e-mailového klienta nebo chatovacího klienta) v novém okně, v novém panelu, anebo v již otevřeném panelu. Ještě důležitější vývoj proběhl v rámci oprav více než 250 chyb od vydání verze Preview Release. Pokud se více zajímáte o používání Firefoxu než o hlášení chyb, pak pro vás bude lepší počkat na finální verzi Firefoxu 1.0, která vyjde 9. listopadu, a vyhnete se tak nepříjemnostem, které jsou spojeny s častou aktualizací.</p>
<p>Pro ty z vás, kteří chtějí vědět více o Aktuálních záložkách, připravil server mozilla.org <a href="http://www.mozilla.org/products/firefox/live-bookmarks.html">dobrou stránku</a> s podrobnostmi o využití RSS a jiných publikačních formátů ve svém oblíbeném prohlížeči.</p>
<p>Vyhledávač Google tento měsíc uvolnil nástroj <a href="http://desktop.google.com/">Google Search Desktop</a> (betaverze, pouze pro Windows) k indexaci a prohledávání dokumentů v počítači, který je postaven na dnes již legendárním vyhledávači Google. Bohužel není možné prohledávat zprávy v aplikaci Thunderbird, ani historii navštívených stránek ve Firefoxu či Mozilla Suite. Toto můžete změnit, když pro tuto funkci budete <a href="http://desktop.google.com/support/bin/request.py?type=features&amp;submit=Continue">požadovat podporu</a>. Kromě toho má deník The Boston Globe <a href="http://www.boston.com/business/globe/globe_article/">zájem</a> o váš příběh o přechodu na Firefox.</p>
<p>Děkuji za přízeň. Své připomínky a komentáře zasílejte prosím na <a href="mailto:info@czilla.cz">info@czilla.cz</a>.</p>
<p>Percy Cabello - Mozilla Links</p>

<!-- BETTER MOZILLA -->
<h2 id="better-mozilla" class="nice">Vylepšení Mozilly</h2>

<h3 id="better-mozilla-1">Recenze: Mozilla Archive Format 0.4.2</h3>
<p><em>(Vytvořil Christopher Ottley)</em></p>
<p>Rozšíření <a href="http://maf.mozdev.org/">Mozilla Archive Format</a> (MAF) přináší do Firefoxu a Mozilly schopnost otevřít a vytvořit archivy webových stránek (MHTML) podobně jako ty generované v Internet Exploreru. Webové archivy zahrnují veškerý obsah stránky: text, obrázky, funkčnost a styl. Můžete tedy vytvořit webový archiv, odeslat ho kamarádovi a mít jistotu, že ho obdrží s veškerým obsahem na správném místě - pokud používá MAF nebo Internet Explorer.</p>
<p>Po nainstalování MAF se přidají dvě nové položky do nabídky <kbd>Soubor</kbd>: <kbd>Save Page In Archive</kbd> (Uložit stránku do archivu) a <kbd>Save All Tabs In Archive</kbd> (Uložit všechny panely do archivu). Pro vytvoření webového archivu (.MHT) vyberte <kbd>Save Page in Archive</kbd> v nabídce <kbd>Soubor</kbd>. V dialogovém okně Save MAF File (Ulož MAF soubor) vyberte jako typ souboru <kbd>MAF MHT File</kbd> a vyhledejte umístění, kam chcete archiv uložit.</p>
<p>Nyní může být soubor otevřen pomocí MAF nebo jakýmkoliv jiným programem, který pracuje se soubory MHT (např. Internet Explorer). Pokud jej chcete otevřít v MAF, vyberte v nabídce <kbd>Soubor</kbd> položku <kbd>Otevřít soubor...</kbd> V dialogovém okně <kbd>Otevřít soubor</kbd> vyberte <kbd>MAF MHT Archives</kbd> a vyhledejte soubor uložený s příponou MHT.</p>
<p>MAF dokáže vytvořit komprimovaný webový archiv pomocí vlastního nástroje pro tvorbu ZIP archivů. Při ukládání webového archivu vyberte <kbd>MAF Zip Archives (*.zip.maf)</kbd> nebo <kbd>MAF Zip Archives (*.maf.zip)</kbd> - není zde jiný rozdíl než v příponě - a zvolte umístění k uložení komprimovaného archivu. Výsledný soubor bude soubor typu ZIP, který můžete otevřít pomocí MAF nebo jakýmkoliv jiným programem pro práci s archivy typu ZIP.</p>
<p>MAF vám také umožní zkomprimovat webový archiv pomocí vašeho oblíbeného komprimačního nástroje (např. WinRAR nebo náš oblíbený <a href="http://www.7-zip.org/">7-zip</a>), pokud je nainstalován. Nejprve budete muset nastavit příslušný příkaz v možnostech MAF (nabídka <kbd>Nástroje/MAF/Preferences</kbd>). Nyní pro uložení webového archivu komprimovaného pomocí vašeho oblíbeného nástroje vyberte při ukládání archivu aktuální stránky nebo všech panelů typ souboru <kbd>MAF Archives (.MAFF)</kbd>.</p>

<h3 id="better-mozilla-2">Recenze: Firefox Ultrabar (Beta)</h3>
<p><em>(Vyvinula Vpop Technologies, Inc.)</em></p>
<p><a href="http://www.firefoxtoolbar.com/">Firefox Ultrabar</a>, jak jeho název napovídá, přináší novou vyhledávací lištu pro Firefox. Do jisté míry jde o rozšířenou verzi výchozí vyhledávací lišty, která je součástí Firefoxu. Umožňuje zvýrazňovat vyhledávané výrazy a obsahuje velké množství přednastavených vyhledávačů - Google, Yahoo!, MSN, Google news, Gmail, Technorati, Feedster, eBay, Vivisimo, Altavista a další, takže se zvyšuje šance, že nebudete potřebovat stahovat další.</p>
<p>Čím se ovšem Ultrabar odlišuje od ostatních, je schopnost přidání vyhledávacích strojů pomocí příkladu. Můžete vyhledávat pomocí svého oblíbeného vyhledávače a Ultrabar si zapamatuje, jak se má příště tohoto vyhledávače dotázat a přiřadí jej mezi dostupné vyhledávače.</p>
<p>Pokud chcete Ultrabar něco naučit, přejděte na stránku nějakého vyhledávače (testoval jsem na <a href="http://www.superpagespr.com/">Puerto Rico Yellow Pages</a>) a vyhledejte slovo "ubterms" (bez uvozovek). Po zobrazení nalezených výsledků se Ultrabar dotáže na přidání nového vyhledávače. Dokonce nalezne odpovídající ikonku vyhledávače, což vypadá skutečně nádherně. Omezením této funkce je, že vyhledávač musí zasílat hledané výrazy metodou GET. Ve stručnosti, pokud vyhledávač nezobrazuje při vracení nalezených odkazů dlouhou adresu s hledanými termíny uvnitř adresního řádku, nebude to fungovat.</p>
<p>Další hezká funkce je správce vyhledávačů, pomocí kterého můžete upravovat, organizovat, přidávat a odstraňovat vyhledávače. Pokud změníte vyhledávač a ve vyhledávacím políčku se nachází hledané termíny, spustí Ultrabar automatické hledání. Zda je to obtěžující, či užitečné, záleží na vás a na okolnostech, ale osobně bych to rád viděl jako možnost volby. Ultrabar si automaticky hlídá aktuálnost verze a také je dostupný v několika motivech vzhledu odpovídajících některým webům, jako jsou např. Netflix, Yahoo! a Google a pro některé z nich obsahuje zároveň několik odpovídajících odkazů na hlavní tlačítko a nástroje. Například pro Blogger přidá Ultrabar přidá tlačítko, které otevře vstupní formulář blogu s aktuální adresou.</p>
<p>Podle webových stránek projektu Firefox Ultrabar se do dalších verzí připravuje funkce "táhni a pusť" a možnost upravovat přídavné nabídky.</p>

<h3 id="better-mozilla-3">Tip: Zahlaďte své stopy</h3>
<p><em>(Přispěl Percy Cabello)</em></p>
<p>Pokud máte obavy o to, co se děje s údaji (co jste si prohlíželi a co jste psali) po připojení na Internet, naleznete zde některé způsoby, které zajistí, že vaše informace neuvidí nikdo jiný.</p>
<ul>
<li>Historie. Mozilla i Firefox ukládají historii navštívených webů, takže se k nim můžete později jednoduše vrátit, když zapomenete jejich adresu. Nastavte si Firefox tak, aby tyto adresy neukládal. V nabídce <kbd>Nástroje</kbd> vyberte <kbd>Možnosti...</kbd> Zvolte stránku <kbd>Soukromí</kbd>. Klepněte na <kbd>Historii</kbd> a stiskněte tlačítko Vymazat. Pokud si nepřejete, aby Firefox uchovával historii, vložte 0 do počtu dnů, po které si má Firefox stránky pamatovat.</li>
<li>Informace z formulářů. Firefox běžně ukládá informace, které vkládáte do webových formulářů, takže je můžete jednoduše znovu použít na tomtéž či podobném formuláři. Pro vymazání uložených informací z webových formulářů a vypnutí jejich dalšího ukládání vyberte na stránce Soukromí v nabídce Předvolby... položku <kbd>Informace z formulářů</kbd> a stiskněte <kbd>Vymazat</kbd>. Tím se vymažou všechny uložené formuláře. Ukládání dalších informací předejdete zrušením volby <kbd>Ukládat informace zadané do formulářů na stránkách a ve vyhledávací liště</kbd></li>
<li>Uložená hesla. Kdykoliv vložíte heslo na webové stránce (převážně na přihlašovacích stránkách), Firefox se automaticky zeptá, zda chcete toto heslo uložit. Takže jej automaticky vloží za vás, až jej budete opět potřebovat. Pokud chcete toto chování změnit, vyberte na stránce Soukromí v nabídce Možnosti položku Uložená hesla a stiskněte <kbd>Vymazat</kbd>, čímž se smažou uložená hesla. Stiskněte <kbd>Zobrazit uložená hesla</kbd>, abyste si prohlédli, která hesla máte uložena a jaká to jsou. Stiskněte <kbd>Změnit hlavní heslo</kbd> a nastavte si heslo, které budete potřebovat pouze jednou při každém spuštění Firefoxu, abyste odemkli všechna ostatní. Zrušte volbu <kbd>Pamatovat hesla</kbd>, čímž zabráníte Firefoxu dotazování na uložení hesla.</li>
<li>Historie hledávání. Výrazy, které jste vložili do vyhledávací lišty, jsou taktéž uloženy. Pro jejich odstranění stačí klepnout pravým tlačítkem myši na vyhledávací lištu a vybrat <kbd>Vymazat historii hledání</kbd>.</li>
<li>Cookies. Mnoho stránek, které obvykle navštěvujete, na váš počítač pravděpodobně uloží malý soubor - cookie. Uložené informace jsou využity při další návštěvě stránky. Ke správě těchto cookies, blokování a nastavování pravidel pro jejich chování přejděte na stránku Soukromí v nabídce Předvolby... a vyberte položku <kbd>Cookies</kbd>.</li>
<li>Vyrovnávací paměť (cache). Mozilla a Firefox uloží kopii každé stránky, kterou navštívíte, aby k ní zajistily rychlejší přístup při jejím opětovném navštívení. Pokud chcete všechny kopie navštívených stránek odstranit, vyberte na stránce Soukromí v nabídce Předvolby... položku <kbd>Vyrovnávací paměť</kbd> a stiskněte <kbd>Vymazat</kbd>. Můžete nastavit velikost paměti na pevném disku, které chcete vymezit pro ukládání stránek, nebo vložte 0, a pak se žádná stránka nebude ukládat.</li>
</ul>
<p>Pokud používáte Mozilla Suite nebo Firefox na počítači, na kterém pracuje několik lidí (např. ve škole nebo v internetové kavárně), ujistěte se, že jste tato nastavení provedli a před odchodem vymažte své informace.</p>

<h3 id="better-mozilla-4">SuperTip: Zprovozněte rozšíření v nových verzích prohlížeče</h3>
<p><em>(Přispěl Percy Cabello)</em></p>
<p>Možná jste se již setkali s tím, že po nainstalování nové verze Firefoxu/Mozilla Suite přestane najednou fungovat několik rozšíření. V mnoha případech to není tím, že by byl problém s rozšířením nebo prohlížečem, ale prostě proto, že tvůrce rozšíření nadefinoval pro rozšíření příliš nízký limit pro verze prohlížeče, ve kterých toto rozšíření funguje. Tvůrci to dělají, protože si nejsou jisti v tomto stádiu (před oficiálním vydáním 1.0), zda ve Firefoxu nedojde ke změnám, které by mohly ovlivnit rozšíření. Proto definují konzervativní rozsah verzí. V některých případech, jako od 0.10 po 1.0, nejsou žádné změny, takže rozšíření s definovanou platností do verze 0.10 mohou dobře fungovat i ve verzi 1.0.</p>
<p>Toto omezení je uvedeno v souboru, který obsahují všechna rozšíření. Zahrnuje informace o názvu, verzi a autorovi včetně produktu a verze, kde rozšíření funguje. Pokud uvádí jako nejvyšší podporovanou verzi uvádí 0.10 (Preview Release), pak přestane fungovat v 1.0 (např. poslední Release Candidate).</p>
<p>Tento rozsah verzí můžete prodloužit editací souboru:</p>
<ul>
<li>Přejděte na stránky <a href="https://addons.mozilla.org/">Mozilla Update</a> a uložte rozšíření (soubor XPI) na svůj počítač (pravým tlačítkem myši klepněte na odkaz a vyberte <kbd>Uložit</kbd>).</li>
<li>Otevřete <abbr title="Cross Platform Installer">XPI</abbr> soubor v manažeru ZIP archivů (např. WinZip nebo 7-Zip). Extrahujte soubor <em>install.rdf</em>.</li>
<li>Otevřete soubor <em>install.rdf</em> v textovém editoru. Najděte řádek podobný tomuto <code>&lt;em:maxVersion&gt;0.9&lt;/em:maxVersion&gt;</code>. Jak se můžete dovtípit, toto rozšíření bude fungovat pouze do verze 0.9. Aby fungovalo i s 0.10 nebo 1.0, pouze změňte 0.9 na požadovanou verzi. Nyní uložte soubor a aktualizujte XPI ve stejném manažeru ZIP archivů.</li>
<li>Pro instalaci rozšíření přetáhněte XPI do Mozilla Suite nebo Firefoxu. Požádá vás o restart prohlížeče.</li>
</ul>
<p>Pokud se vyskytne nějaký problém při restartu Mozilla Suite/Firefoxu, restartujte v tzv. bezpečném režimu (safe mode) a vypněte či odinstalujte právě nainstalované rozšíření. Tak můžete zjistit, že se vyskytl skutečný zlom mezi verzemi a měli byste tedy počkat na odpovídající aktualizaci rozšíření od jejího autora.</p>

<!-- MOZILLA COMMUNITY -->
<h2 class="nice" id="community">Komunita: Pat MacDonald o Firefox Ultrabaru</h2>
<p>Jak se daří mezi firemními a domácími uživateli zvyšovat povědomí o schopnostech technologií projektu Mozilla a hnutí open source, rozšiřují technologické firmy svou podporou Firefoxu. Společnost WinPatrol (viz minulé číslo Mozilla Links), která nedávno ohlásila dostupnost nástroje na ochranu soukromí pro Firefox, a Vpop Technologies nyní nabízí <a href="http://www.firefoxtoolbar.com/">Firefox Ultrabar</a> (recenze v tomto čísle).</p>
<p>Vpop Technologies, Inc. existuje více jak 10 let a dodává Internetové nástroje jako Open SRS, Blogware, NewHub a Jots.com a spolupracuje také se společnostmi GE, Tucows, Cisco, InfoSpace a Yahoo. Proto jsme se tento měsíc zeptali Pata McDonalda, jednoho ze zakladatelů Vpop Technologies a zároveň manažera pro obchod, na celý průběh výroby produktu pro Firefox.</p>

<p><strong>ML: Jak dlouho jste už pracovali na Ultrabaru, když jste se rozhodli pro podporu Firefoxu?</strong></p>
<p>Původně jsme UltraBar spustili v r. 2001, krátce poté, co Google spustil Google Toolbar. Mysleli jsme si, že Google Toolbar je skvělý nástroj, který má pouze jedno omezení: cokoliv hledáte, musí být na Google. Rozhodli jsem se, že by se lidem mohou líbit i jiné vyhledávače stejně jako Google. Na to jsme mysleli, když jsme vyvářeli UltraBar.</p>

<p><strong>ML: Jak vznikl nápad podporovat Firefox?</strong></p>
<p>PM: Zatímco jsme byli pyšní na verzi pro IE, nemohli jsme vydržet práci v prostředí IE. Nestabilita, instalace za běhu a bezpečnostní problémy, to všechno nás vedlo k práci na mnohem lepším prohlížeči. Také jsme se podívali, jaké existují nástrojové lišty a zjistili jsme, že neexistuje jiná společnost, která by vyvíjela uživatelské nástrojové lišty pro Firefox. Skvělým přínosem práce v prostředí Firefoxu bylo, že můžete prohlásit, že lišta neobsahuje spyware, adware, nebo, co rád nazývám "bad guy stuff", neboť je to napsané v <abbr title="eXtensible User-interface Language">XUL</abbr>.</p>

<p><strong>ML: Jak byste porovnal průběh tvorby nástrojové lišty pro Internet Explorer a Firefox?</strong></p>
<p>PM: Nástrojová lišta pro IE zahrnovala jak psaní kódu, tak koncepci v oblasti, ve které jsem dosud nepracovali, takže to bylo obtížné. Firefox měl koncepci již definovanou, ale zase je tu to nové prostředí (pro nás) pro vývoj, takže je těžké oba srovnat. Jako ve všech jazycích, i v XUL jsme se museli nejprve naučit pravidla hry, ale jakmile jsem je ovládali, vývoj byl v provnání snazší.</p>

<p><strong>ML: Firefox UltraBar je jak produkt, který nabízíte zdarma, tak i služba. Nabízíte svým zákazníkům možnost spolehnout se na vyhledávací lištu upravenou k jejich potřebám. Co je na těchto verzích přizpůsobitelné?</strong></p>
<p>PM: Základ nástrojové lišty (obtížná část) je hotov a v tuto chvíli může být jakákoliv část lehce upravena.</p>

<p><strong>ML: Můžete se vyjádřit k některým svým zákazníkům? Netflix, Well Fargo a Cisco jsou v současné době uvedeny na vašem webu. Jsou všechny tyto společnosti vašimi zákazníky?</strong></p>
<p>PM: Mohu se k tomu vyjádřit jen částečně. Pracovali jsme s Cisco na vytvoření lišty pro Firefox pro jejich intranet. Lišta zpřístupňuje klíčové oblasti jejich intranetu a my jsem vestavěli asi šestnáct různých vyhledávačů. Lištu v současnosti testuje jejich intranetový bezpečnostní tým. Jeden zaměstnanec Cisca řekl "Toto je nejlepší nástroj, jaký v Ciscu máme". Vytvořili jsme nástrojovou lištu Netflix, protože jsem chtěl snadný a rychlý způsob přístupu ke svému účtu, mé frontě a k hledání na Netflixu. Netflix je naším druhým nejstahovanějším produktem hned po standardní liště. Netflix zatím není naším zákazníkem. Doufáme, že ocení hodnotu lišty a nabídne ji všem svým klientům.</p>

<p><strong>ML: Jaké plány máte s lištou pro Firefox? Připravujete nějaké nové funkce, verze pro platící zákazníky, či lokalizované verze? Nebo snad přechod na open source?</strong></p>
<p>PM: Máme významné plány, které přinejmenším zahrnují integraci lišty s naší záložkovou službou <a href="http://www.jots.com/">Jots.com</a>. Taktéž pracujeme na vlastním správci odkazů, který vám umožní spravovat odkazy/ položky nabídek/tlačítka na liště, podobně jako funguje správce vyhledávače. Poslední vylepšení, které v tuto chvíli mohu prozradit, je blogovací komponenta, která funguje s většinou blogovacích nástrojů/systémů. (Není zde žádná zaujatost, ale jots.com a integrace s blogy jsou dvě z nejskvělejších funkcí, které jsem kdy viděl v nástrojové liště.)</p>

<p><em>Děkuji Patovi za jeho čas pro rozhovor.</em></p>

<!-- NEWS -->
<h2 class="nice" id="news">Souhrn zpráv za minulý měsíc</h2>

<h3 id="news-1">Spuštěn projekt nápovědy pro Mozilla Calendar a Sunbird</h3>
<p>Rod Whiteley oznámil spuštění projektu <a href="http://calendarhelp.mozdev.org/">Calendar Help</a>, jenž má vytvořit systém nápovědy pro Mozilla Calendar (rozšíření pro Mozillu, Firefox a Thunderbird) a samostatnou aplikaci Sunbird. Projekt byl spuštěn pouze s prototypem Sunbirdu, ale míří k podpoře koncových uživatelů všech verzí Calendaru, platforem a jazyků.</p>
<p>Projekt v současné době hledá autory textů, recenzenty a překladatele, kteří mohou přispět. Pokud si myslíte, že byste mohli pomoci, dokonce i když jste nikdy do žádného projektu nepřispívali, prosím <a href="http://calendarhelp.mozdev.org/contribute.html">kontaktuje tento projekt</a>.</p>

<h3 id="news-2">Vydáno Nvu 0.5</h3>
<p><a href="http://www.disruptive-innovations.com/">Disruptive Innovations</a> a <a href="http://www.linspire.com/">Linspire, Inc.</a> <a href="http://www.mozillazine.org/talkback.html?article=5379">vydaly Nvu 0.5</a> - editor webových stránek založený na Mozille. Nová verze přináší několik důležitých vylepšení:</p>
<ul>
<li>Zvýraznění syntaxe</li>
<li>Vestavěná kontrola pravopisu</li>
<li>Vylepšená vodorovná a svislá pravítka</li>
<li>Možnost obousměrného textu</li>
<li>Menší velikost instalátoru pro Windows (6,5 MB)</li>
<li>Velmi žádané <a href="http://glazman.org/weblog/dotclear/index.php?2004/10/12/634-easter-egg">velikonoční vejce</a></li>
</ul>
<p>Společnost Disruptive Innovations také <a href="http://glazman.org/weblog/dotclear/index.php?2004/10/13/615-one-year">oslavila své první narozeniny</a>.</p>

<h3 id="news-3">SFX</h3>
<p>Komunita se připravuje na Firefox 1.0, a tak se objevují party v rámci <a href="http://www.openforce.at/mozparty2/">MozParty2</a>, do nichž se můžete připojit nebo je organizovat kdekoliv na světě. Je to ohromná příležitost setkat se s ostatními nadšenci projektu Mozilla a hnutí open source z vašeho okolí. A kdo ví, možná i šance nastartovat lokální marketingovou komunitu.</p>
<p>Také byl zprovozněn nový kanál IRC, kam můžete přijít a podělit se o své nápady na šíření Firefoxu. <a href="https://addons.mozilla.org/extensions/moreinfo.php?id=16&amp;vid=735">Stáhněte si ChatZillu</a> a připojte se k <a href="irc://irc.mozilla.org/spreadfirefox">IRC projektu SFX</a>.</p>
<p>S tlačítky, tapetami a avatary, vytvářenými komunitou, se roztrhl pytel. V tuto chvíli je mým oblíbeným <a href="http://www.rakaz.nl/nucleus/index.php?itemid=10">Rakaz art</a>.</p>
<p>Bart Decrem, vedoucí marketingu projektu Mozilla, uspořádal od 22. do 28. října ve spolupráci s Mozilla Europe tiskovou cestu po Evropě. Provázeli ho Gervase Markham, Axel Hecht, Peterv a Tristan Nitot a společně navštívili Anglii, Holandsko, Belgii, Francii a Německo, kde se kontaktovali s jednotlivými médii.</p>
<p>V Evropě také <a href="http://standblog.org/blog/2004/10/26/93113748-spreading-firefox-in-europe-again">Tristan Nitot</a> oznámil, že se <a href="http://www.mozilla-europe.org/">Mozilla Europe</a> zúčastní veletrhu <a href="http://interop2004.com/">Interop 2004 v Paříži (3.11. - 5.11.)</a> se stánkem 54 m<sup>2</sup>, kde budou k dispozici počítače k otestování produktů projektu Mozilla a přednášky o Mozille, Nvu, webových standardech, otevřených formátech a možná také o <a href="http://www.openoffice.org/">OpenOffice.org</a> a <a href="http://www.bugzilla.org/">Bugzille</a>.</p>
<p>Pokud pomáháte šířit povědomí o Firefoxu, pak máte možnost pochlubit se svým obrázkem v <a href="http://www.spreadfirefox.com/?q=image/tid/31">galerii projektu SFX (Spread Firefox)</a>.</p>

<h3 id="news-4">Ze světa</h3>
<p><em>Přispěl Robin Monks</em></p>
<p>Uplynulý měsíc byl vzrušující. Servery <a href="http://news.com.com/2061-1032_3-5347491.html">c|Net</a> a <a href="http://www.qctimes.com/internal.php?story_id=1036599&amp;t=Nation+%2F+World&amp;c=26,1036599">QCtimes</a> naznačují, že <a href="http://www.google.com/">Google</a> plánuje vytvořit prohlížeč postavený na <a href="http://www.mozilla.org/">Mozilla</a> <a href="http://getfirefox.com/">Firefoxu</a> a <a href="http://www.mozilla.org/newlayout/">Gecko</a>. Budu bedlivě sledovat, jak se to vyvíjí.</p>
<p>Zpět na domácí scénu. SFX <a href="http://www.spreadfirefox.com/?q=node/view/4891">dosáhl</a> svého cíle 10 000 jmen pro inzerci v New York Times a množí se zvěsti o webu nov9.org. 19. října byla zahájena kampaň, kde měli dárci za 30 $ (studenti 10 $ a rodiny 45 $) možnost zařadit svá jména v inzerátu. Po deseti dnech signalizovalo 10 000 dárců a 250 000 $ signalizovalo úspěch akce. Podle Roba Davise, koordinátora tohoto projektu, půjde na samotný inzerát asi 50 000 $ a zbytek na jiné marketingové aktivity. Více podrobností naleznete v <a href="http://redherring.com/Article.aspx?a=10937">rozhovoru s Robem Davisem v magazínu Red Herring</a>.</p>
<p>Tristan Nitot z Mozilla Europe nedávno oznámil spuštění podobného projektu s cílem získat <a href="http://firefox-kommt.de/">celostránkovou reklamu v německých novinách</a>..</p>
<p>Stále jsou k dispozici <a href="http://moznews.sf.net/gmail/">volné účty na Gmailu </a> a objevují se projekty distribuovaných výpočtů - <a href="http://firefoxfah.sf.net/">Folding@Home</a>, <a href="http://moznews.sf.net/cp">CP.net</a> nebo <a href="http://lhcathome.cern.ch/">LHC</a>.</p>
<p>V tomto měsíci patří mezi skvělé nástroje <a href="http://www.squarefree.com/htmledit/">HTML Editor v reálném čase</a> a <a href="http://spellbound.sourceforge.net/">Spellbound Spellcheck</a> pro Firefox (podobný <a href="http://www.iespell.com/">IEspellu</a> pro IE).<br /><br />Robin Monks</p>

<h3 id="news-5">Mozilla.org nyní nabízí lokalizované verze Firefoxu</h3>
<p>Od 23. října jsou dostupné noční (vývojářské) verze Firefoxu v několika jazycích a pro různé regiony. Lokalizace jsou dostupné v albánštině, katalánštině, čínštině, češtině, španělštině, dánštině, holandštině, francouzštině, finštině, němčině, řečtině, maďarštině, italštině, japonštině, polštině, portugalštině, rumunštině, ruštině, sinhálštině, slovinštině a švédštině. <a href="http://weblogs.mozillazine.org/gerv/archives/006772.html">Gervase Markham</a> uvedl, že podle Global Search to pokrývá 88 % internetové populace.</p>
<p>Lokalizované verze produktů projektu Mozilla jsou dostupné již delší dobu díky několika nezávislým projektům. Avšak jejich začlenění mezi běžné verze určitě napomůže vnímání jejich oficiálnosti.</p>

<h3 id="news-6">Méně závažné zranitelnosti v Mozille, Firefoxu, Thunderbirdu a Caminu</h3>
<p>20. října <a href="http://secunia.com/advisories/12712/">vydal server Secunia zprávu</a> o dvou nových zranitelnostech v Mozille, Firefoxu a Caminu, souvisejících s podvržením webu. <a href="http://secunia.com/multiple_browsers_dialog_box_spoofing_test/">V jednom případě</a> může webová stránka během načítání zobrazit dialogové okno v jiném panelu. Takže uživatelé by mohli být oklamáni, kdyby se domnívali, že tyto informace v dialogovém okně vyžaduje aktuálně zobrazená stránka. <a href="http://secunia.com/multiple_browsers_form_field_focus_test/">Podobný případ</a> souvisí s webovými formuláři, kdy může zlomyslná webová stránka zachytit znaky zapsané v jiném panelu.</p>
<p>Druhá chyba bude odstraněna v další verzi prohlížeče (viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=124750">chyba 124750</a>). Server Secunia doporučuje vyhýbat se návštěvám důvěryhodných webů (jako jsou např. banky nebo webová rozhraní e-mailových služeb) při současném navštívení nedůvěryhodných (nových) webových stránek anebo zakázat JavaScript.</p>
<p>25. října oznámila Secunia <a href="http://secunia.com/advisories/12956/">další zranitelnost</a>, ovlivňující pouze linuxové verze Mozilla Suite (1.7.x), Firefoxu (0.9 a novější) a Thunderbirdu (0.6 - 0.8). Kvůli nedokonalým oprávněním ke staženým souborům otevřených v externích aplikacích může uživatel číst soubory jiného uživatele, které jsou právě otevřeny přes dialogové okno stahování v externích aplikacích.</p>
<p>Již byly <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=251297">vydány opravy</a> a měly by být zahrnuty v příštích verzích Firefoxu.</p>
<p>Přečtěte si posledních 10 doporučení k bezpečnosti produktů Mozilly na <a href="http://nostalsong.com/mozillalinks/">stránkách Mozilla Links</a>, které poskytuje <a href="http://www.secunia.com/">Secunia</a>.</p>

<h3 id="news-7">Mezinárodní weby projektu Mozilla</h3>
<p>Během posledních týdnů jsme spustili několik webů souvisejících s projektem Mozilla. Před časem spustil španělský lokalizační tým web <a href="http://www.mozillaes.org/">MozillaES</a>, který nabízí zprávy, motivy vzhledu a lokalizované verze produktů Mozilly. Mozilla Taiwan poskytuje totéž v tradiční čínštině. Tristan Nitot, prezident <a href="http://www.mozilla-europe.org">Mozilla Europe</a>, nedávno oznámil spuštění <a href="http://www.mozilla-europe.org/el/">řecké</a> a <a href="http://www.mozilla-europe.org/el/">italské</a> verze webu Mozilla Europe, které se připojují k anglické, španělské, finské, francouzské, německé a norské verzi.</p>

<h3 id="news-8">Na poslední chvíli: Nástrojová lišta A9.com nyní i pro Firefox</h3>
<p>Jako pokračování toho, co je již trendem mezi vývojáři nástrojů pro prohlížeče, nabízí nyní A9.com (vyhledávací web serveru Amazon) svou <a href="http://toolbar.a9.com/">nástrojovou lištu</a> pro uživatele Firefoxu. Lišta obsahuje zvýrazňování hledaných slov, informace a hodnocení navštívené stránky (podobné jako pro výrobky na Amazonu) i doporučení od serveru Alexa. Pokud máte účet u amazon.com, můžete se přihlásit a vytvořit si historii vyhledávání, ukládat záložky a vytvářet si poznámky k navštíveným stránkám.</p>

<!-- PROJECTS -->
<h3 id="projects">Projekty</h3>
<p><em>{Přispěl Brian King)</em></p>
<p>Zprávy o samostatných projektech obsahují novinky a poslední informace o Mozille a rozšířeních shromážděných na Mozdev.org a jinde v rámci komunity.</p>
<p>Projekt mozdev.org je úsilím mezinárodní komunity. Mohl vzniknout v US, avšak dva z klíčových administrátorů pocházejí z Evropy. Požadavky na projekty přicházejí ze všech kontinentů. Vlastníci projektů hovoří mnoha jazyky. To je svět, ve kterém žijeme. Aby software mohl uspět, musí mít schopnost globálního dosahu. Projekt Mozilla si to uvědomuje již dlouhou dobu a nedávné úsilí uchovávat lokalizované verze Firefoxu v CVS a vydávat <a href="http://www.mozilla.org/projects/firefox/l10n/">oficiální lokalizované verze</a> Firefoxu 1.0 je pouze dalším krokem projektu Mozilla a jeho technologií udělat díru do světa.</p>

<h3><a href="http://mozimage.mozdev.org/">mozImage 0.10</a></h3>
<p>
Jednoduchý prohlížeč obrázků.<br />
Programy: Mozilla Firefox a prohlížeč Mozilla<br />
Platformy: Windows, Linux, Mac OS X<br />
Cílem mozImagu je vytvořit jednoduchý prohlížeč obrázků postavený na platformě projektu Mozilla. Disponuje rychlým a jednoduchým uživatelským rozhraním, na které se můžete podívat na této stránce se <a href="http://mozimage.mozdev.org/screenshots.html">screenshoty</a>.<br />
Zde jsou některé nejdůležitější funkce:
</p>
<ul>
<li>Automatický přechod na další obrázek (slide show)</li>
<li>Zvětšení obrázků do celého okna</li>
<li>Jednoklávesové zkratky</li>
<li>Náhledy</li>
<li>Náhled v režimu celé obrazovky</li>
<li>Otevření a úprava obrázku v externích aplikacích</li>
</ul>

<h3><a href="http://biobar.mozdev.org/">Biobar 1.2.1</a></h3>
<p>
Nástrojová lišta pro bioinformatiky.<br />
Programy: Mozilla, Firefox<br />
Platformy: Windows, Linux, + všechny platformy, kde může být Mozilla přeložena.<br />
Byl vylepšen zdrojový kód, a tím se zvýšila efektivita. Byly opraveny některé chyby.<br />
Významné novinky:</p>
<ul>
<li>Podporuje prohledávání BioCyc</li>
<li>Povoleno prohledávání PDBsum</li>
<li>Možnost prohledávat alternativní databáze (ASD)</li>
<li>Seznam všech podporovaných databází můžete nalézt na <a href="http://biobar.mozdev.org/Databases.html">http://biobar.mozdev.org/Databases.html</a></li>
</ul>

<h3><a href="http://fireftp.mozdev.org/">fireFTP 0.83.3</a></h3>
<p>
FTP klient pro Firefox.<br />
Program: Firefox<br />
Platformy: Windows, Linux, Mac OS X<br />
Vynikající prohlížeč Firefox má nyní zcela nový nástroj - multiplatformní klient fireFTP, který zajišťuje jednoduchý a intuitivní přístup k FTP serverům. Na rozdíl od mnohých FTP klientů je úplně zdarma!<br />
Významné vlastnosti:</p>
<ul>
<li>Klient pro více platforem</li>
<li>Možnost obnovení</li>
<li>Podpora mnoha FTP serverů</li>
</ul>

<h3><a href="http://habarixenu.mozdev.org/">Habari Xenu 0.9.0</a></h3>
<p>
Skvělá čtečka zpráv vytvořená v XUL.<br />
Programy: Mozilla, Firefox<br />
Platformy: Windows, Linux, Mac OS X<br />
HX směřuje k plné stabilitě. Nyní funguje ve Firefoxu i v Mozille.<br />
Významné novinky:</p>
<ul>
<li>Funguje ve Firefoxu i v Mozille</li>
<li>Průvodce nastavením editoru</li>
<li>Mnohem lepší parsování</li>
<li>Rychlejší, neboť ukládá HTML soubor parsovaného kanálu, který používá během jeho platnosti</li>
<li>Odebrána funkce LastVisitDate (datum poslední návštěvy)</li>
</ul>

<h3><a href="http://checky.sourceforge.net/">Checky 2.4</a></h3>
<p>Rozšíření pro validaci a analýzu zdrojů.<br />
Programy: Mozilla, Firefox, Netscape<br />
Platformy: Windows, Linux, Mac OS X<br />
Změny od verze 2.3:</p>
<ul>
<li>Oprava chyby pro validaci souboru na disku ve Firefoxu na Mac OS X. Díky <a href="http://sourceforge.net/mailarchive/forum.php?thread_id=5525697&amp;forum_id=42174">C. P. Lime</a>! Možná se tím také vyřeší chyba 993433.</li>
<li>Odebráno ověřování místa na disku během instalace.</li>
</ul>

<h3><a href="http://citations.mozdev.org/">citations 0.1.10</a></h3>
<p>
Nástroj pro vytváření záložek k citacím a dalším prvkům.<br />
Programy: Mozilla, Firefox<br />
Platformy: Windows, Linux, Mac OS X<br />
Významné novinky:</p>
<ul>
<li>URL citací jsou otevírány v odděleném okně s možností prohledávání a zvýrazňování citací</li>
<li>Rozšíření Citations může být nainstalováno do Firefoxu 0.9 a novějšího pomocí Správce rozšíření</li>
<li>Z instalace byl odstraněn soubor citedb.rdf. Tento soubor je nyní vytvářen za běhu, jakmile je vyžadován poprvé.</li>
</ul>

<h3><a href="http://linkvisitor.mozdev.org/">Linkvisitor 1.0.20041021</a></h3>
<p>Označuje odkazy jako navštívené nebo jako nenavštívené.<br />
Programy: Mozilla, Firefox<br />
Platformy: všechny<br />
Nyní funguje ve Firefoxu 1.0 PR (0.10.1) a v Mozille od noční verze 20040707 a novějších (Mozilla 1.7+ -&gt; Mozilla 1.8a4)</p>

<p>České vydání připravili: Petr Tomeš, Tomáš Marek a Vlastimil Ott<br />
e-mail: <a href="mailto:info@czilla.cz">info@czilla.cz</a><br />
web: <a href="http://www.czilla.cz/podpora/zpravodaj/">http://www.czilla.cz/podpora/zpravodaj/</a></p>
<p>Uvítáme další překladatele, kteří by v rámci svých možností pomohli zkrátit časové prodlevy při vydávání českých verzí tohoto zpravodaje!</p>

<?php
	$page->includeTemplate('footer');
?>
>
