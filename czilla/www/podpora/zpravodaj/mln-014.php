<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zpravodaj Mozilla Links - 14. číslo');
	$page->setHeadline('Zpravodaj Mozilla Links','14. číslo (2. 3. 2004 / 9. 3. 2004)');
	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');
	$page->includeTemplate('header'); 
?>

<h2 id="content" class="nice">Obsah</h2>
<ul>
	<li><a href="#ml.0">Úvod</a></li>
	<li><a href="#ml.1">Vylepšení Mozilly</a>

	<ul>
		<li><a href="#ml.11">Rozšíření: Dictionary Search</a></li>
		<li><a href="#ml.12">Tip zpravodaje Mozilla Links: Importování a exportování záložek</a></li>
		<li><a href="#ml.13">Supertip zpravodaje Mozilla Links: Nastavení počtu používaných znakových sad</a></li>
	</ul>
	</li>

	<li><a href="#ml.2">Novinky</a>

	<ul>
		<li><a href="#ml.21">Vydána Mozilla 1.7 alfa</a></li>
		<li><a href="#ml.22">Založena nezisková organizace Mozilla Europe</a></li>
		<li><a href="#ml.23">Vydáno Minimo 0.1 - Mozilla pro malá zařízení</a></li>
		<li><a href="#ml.24">Online materiály z nedávné prezentace Mozilly</a></li>
	</ul>
	</li>
	<li><a href="#ml.3">Mozilla pod povrchem</a></li>
	<li><a href="#ml.4">Projekty pro Mozillu</a>
	<ul>
		<li><a href="#ml.41">Projekt týdne: Web Developer</a></li>
		<li><a href="#ml.42">Zprávy o samostatných projektech</a>
		<ul>

			<li><a href="#ml.421">Feed Parser 0.4.1</a></li>
			<li><a href="#ml.422">JRex 1.0a</a></li>
			<li><a href="#ml.423">Mycroft</a></li>
			<li><a href="#ml.424">HON 1.2</a></li>
			<li><a href="#ml.425">Forumzilla 0.4.7</a></li>
			<li><a href="#ml.426">IE View 0.7</a></li>
			<li><a href="#ml.427">cdn - Compact Menu 1.6</a></li>
			<li><a href="#ml.428">QuickNote 0.5.3</a></li>
			<li><a href="#ml.429">MozManual 1.0 - konečná verze</a></li>
			<li><a href="#ml.4210">MessageID-Finder 1.9.4</a></li>
			<li><a href="#ml.4211">Launchy 1.9.0</a></li>
		</ul>
		</li>
	</ul>
	</li>
	<li><a href="#ml.5">Anketa zpravodaje Mozilla Links</a>
	<ul>
		<li><a href="#ml.51">Vyhodnocení ankety z minulého čísla</a></li>
		<li><a href="#ml.52">Nová anketa: Používáte online záložky jako například Online Bookmarks?</a></li>
	</ul>
	</li>
	<li><a href="#ml.6">Reklama</a></li>
	<li><a href="#ml.7">Kontaktní informace</a></li>
</ul>

<h2 id="ml.0" class="nice">Úvod</h2>
<p>Vítejte zpět u zpravodaje Mozilla Links!</p>
<p>Používáte záložky? Pravděpodobně ano a znáte nepohodlí, když nemáte své záložky v každém počítači připojeném na internet.</p>
<p>Řešením je používání online záložek. Bookmarks Synchronizer je rozšíření pro Mozilla Firefox, které vás připojí k <abbr title="File Transfer Protocol">FTP</abbr> serveru a zesynchronizuje vaše záložky uložené v <abbr title="Extensible Markup Language">XML</abbr> souboru. Nastavení je jednoduché. Zadejte adresu, uživatelské jméno, heslo a název XML souboru (obvykle xbel.xml) na váš FTP server. Nahrajte soubor na server a nastavte, zda chcete soubor automaticky stahovat při startu prohlížeče nebo ukládat při zavírání prohlížeče.</p>
<ul><li><a href="http://cgi29.plala.or.jp/~mozzarel/addon/firefox/bookmarksftp/bookmarksftp.xpi">Stáhnout Bookmarks Synchronizer</a></li></ul>
<p>Jiné řešení založené na projektu Sitebar, open source aplikaci na vytváření účtů, uchová vaše záložky a navíc je ještě exportuje/importuje do/z souboru se záložkami v Mozille a sdílí je. Volně přístupné Online Bookmarks (online záložky) jsou založené na projektu Sitebar, který načítá záložky do postranní lišty Mozilly. Postranní lištu můžete <a title="SiteBar" href="javascript:sidebar.addPanel('SiteBar','http://www.onlinebookmarks.co.uk/sitebar.php','')">přidat přímo</a> do Mozilly nebo Mozilla Firefoxu.</p>
<p>Zpravodaj Mozilla Links se rozrůstá a s potěšením oznamujeme dostupnost ruské verze. K odběru této nebo jiné jazykové verze se můžete přihlásit na <a href="http://newsletter.mozdev.org">http://newsletter.mozdev.org</a>.</p>
<p>Zajímáte-li se o překlad zpravodaje do svého jazyka, navštivte prosím <a href="http://newsletter.mozdev.org/trans-guide.html">http://newsletter.mozdev.org/trans-guide.html</a>.</p>
<p>Děkujeme Vám za přízeň. Své komentáře posílejte prosím na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>.</p>
<address>Percy Cabello, Mozilla Links</address>
<h2 id="ml.1" class="nice">Vylepšení Mozilly</h2>
<h3 id="ml.11">Rozšíření: Dictionary Search</h3>
<p><em>(vyvíjí Jaap A. Haitsma)</em></p>
<p>Dictionary Search nabízí velice snadný způsob, jak vyhledat nebo přeložit
slovo na webové stránce pomocí online slovníku např. dictionary.com.
Jednoduše vyberte slovo, které chcete vyhledat, pak klikněte pravým
tlačítkem a vyberte <tt>Dictionary Search for ...</tt> Otevře se nový panel s překladem vybraného slova. Toto rozšíření funguje v Mozille i Mozilla Firefoxu.</p>
<p>Seznam dostupných slovníků najdete na stránkách projektu.</p>
<ul><li><a href="http://dictionarysearch.mozdev.org/">http://dictionarysearch.mozdev.org/</a></li></ul>
<h3 id="ml.12">Tip zpravodaje Mozilla Links: Importování a exportování záložek</h3>
<p><em>(přispěl <a href="http://mozillatips.com/">Mozilla Tips</a>)</em></p>
<p>V Mozille:</p>
<ul>
<li>Spusťte <tt>Správce záložek</tt> (<tt>Bookmark Manager</tt>) - stiskněte <kbd>Ctrl+B</kbd> nebo v menu <tt>Záložky</tt> (<tt>Bookmarks</tt>) vyberte <tt>Upravit záložky...</tt> (<tt>Manage Bookmarks...</tt>).</li>
<li>Pro importování záložek otevřete menu <tt>Nástroje</tt> (<tt>Tools</tt>), vyberte
<tt>Importovat...</tt> (<tt>Import...</tt>) a najděte soubor, ze kterého chcete záložky importovat.</li>
<li>Pro exportování záložek otevřete menu <tt>Nástroje</tt> (<tt>Tools</tt>), vyberte
<tt>Exportovat...</tt> (<tt>Export...</tt>) a zadejte jméno souboru, do kterého chcete záložky exportovat.</li>
</ul>
<p>V Mozilla Firefoxu:</p>
<ul>
<li>Spusťte <tt>Správce záložek</tt> (<tt>Bookmark Manager</tt>) - v menu <tt>Záložky</tt> (<tt>Bookmarks</tt>) vyberte <tt>Upravit záložky...</tt> (<tt>Manage Bookmarks...</tt>).</li>
<li>Pro importování záložek otevřete menu <tt>Soubor</tt> (<tt>File</tt>), vyberte
<tt>Importovat...</tt> (<tt>Import...</tt>) a najděte soubor, ze kterého chcete záložky importovat.</li>
<li>Pro exportování záložek otevřete menu <tt>Soubor</tt> (<tt>File</tt>), vyberte
<tt>Exportovat...</tt> (<tt>Export...</tt>) a zadejte jméno souboru, do kterého chcete záložky exportovat.</li>
</ul>
<p>Poznámka: Záložky jsou vždy importovány a exportovány jako soubor <abbr title="HyperText Markup Language">HTML</abbr>.
Importované záložky se objeví v nové skupině pod vašimi současnými záložkami.</p>
<p><strong>[<a href="http://www.mozillatips.com/modules.php?op=modload&amp;name=News&amp;file=article&amp;sid=167&amp;mode=thread&amp;order=0&amp;thold=0">Celý tip</a>]</strong></p>
<h3 id="ml.13">Supertip zpravodaje Mozilla Links: Nastavení počtu používaných znakových sad</h3>
<p>Počet používaných znakových sad v Mozille, které se zobrazují v menu <tt>Zobrazit/Znaková sada</tt> (<tt>View/Character Coding</tt>), nastavíte následovně:</p>
<ul>
	<li>Do řádky adres napište <kbd>about:config</kbd>.</li>
	<li>Vyhledejte položku <var>intl.charsetmenu.browser.cache.size</var>.</li>
	<li>Nastavte počet znakových sad, které si má Mozilla pamatovat.</li>
</ul>
<p>Chcete více tipů? Zkuste <a href="http://tipbar.mozdev.org/">rozšíření
TipBar</a> pro zobrazení Tipu dne v Mozilla Firefoxu.</p>
<p>Další tipy k vašemu oblíbenému prohlížeči najdete na webu <a href="http://www.mozillatips.com/">Mozilla Tips</a>.</p>
<p>Máte nějaký tip nebo supertip? Dejte o něm vědět ostatním čtenářům na <a href="mailto:newsletter-feedback@mozilla.org">newsletter-feedback@mozilla.org</a>.</p>
<h2 id="ml.2" class="nice">Novinky</h2>
<p><em>(přispěl <a href="http://www.mozillazine.org/">MozillaZine</a>, zdroj novinek o Mozille)</em></p>
<h3 id="ml.21">Vydána Mozilla 1.7 alfa</h3>
<p><a href="http://www.mozilla.org/">Mozilla Foundation</a> vydala Mozillu 1.7 alfa. Nová verze mj. vylepšuje blokování vyskakovacích oken (lepší detekce, zastavení a možnost otevřít blokovaná okna) a přidává podporu pro událost onBeforeUnload. Mozilla Mail nyní <a href="http://www.mozilla.org/projects/thunderbird/identities.html">podporuje několik identit u jednoho účtu</a>
(zatím pro to není uživatelské rozhraní) a obsahuje také několik uživatelských vylepšení. V ChatZille lze využít příkaz <kbd>/ignore</kbd>. Oproti minulé verzi je Mozilla 1.7 alfa menší a při načítání stránek rychlejší.</p>
<ul>
<li><a href="http://www.mozilla.org/releases/#1.7a">Stáhnout Mozillu 1.7 alfa</a></li>
<li><a href="http://www.mozilla.org/releases/mozilla1.7a/">Poznámky k Mozille 1.7 alfa</a></li>
</ul>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4365">Celý článek</a>]</strong></p>
<h3 id="ml.22">Založena nezisková organizace Mozilla Europe</h3>
<p>Byla založena nová nezisková organizace na podporu Mozilly v Evropě. <a href="http://www.mozilla-europe.org/">Mozilla Europe</a> se snaží propagovat Mozillu, podporovat její přispěvovatele a poskytovat služby podnikové sféře při zavádění Mozilly. Skupina plánuje spolupráci s existujícími komunitami na celém kontinentu a má plnou podporu Mozilla
Foundation, která vznikající organizaci označila jako svého prvního mezinárodního člena.</p>
<p>Mozilla Europe sídlí v Paříži a má tři hlavní cíle:</p>
<ul>
<li>Propagovat Mozillu a odvozené produkty v Evropě za spolupráce s místními skupinami.</li>
<li>Přesvědčit vývojáře, společnosti a organizace pro podporu projektu - příspíváním do kódu nebo financováním.</li>
<li>Podpořit přijetí Mozilly v podnicích poskytováním technické podpory, asistence při nasazování, vývojem a dalších služeb.</li>
</ul>
<p>Mozilla Europe založili bývalý zaměstnanci Netscapu Tristan Nitot
a Peter Van der Beken společně s Pascalem Chevrelem, Axelem Hechtem, Olivierem
Meunierem a Jánem Vargou. Sponzorována bude jednotlivci, korporacemi a vzdělávacími institucemi. Členy se za poplatek mohou stát i jednotlivci, akčoli zatím není zprovozněn online platební systém.</p>

<ul>
<li><a href="http://www.mozilla-europe.org/">Mozilla Europe</a></li>
</ul>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4338">Celý článek</a>]</strong></p>
<h3 id="ml.23">Vydáno Minimo 0.1 - Mozilla pro malá zařízení</h3>
<p>Byl vydán prohlížeč Mozilla pro malá zařízení - <a href="http://www.mozilla.org/projects/minimo/">Minimo</a> 0.1. Kromě vytvoření zeštíhlené verze Mozilly pro <abbr title="Personal Digital Assistant">PDA</abbr> a podobná zařízení se projekt také snaží umožnit zprovoznění Mozilly v systémech s omezenými zdroji.</p>
<p>Mnoho sil se soustředilo na zmenšení kódu a paměťových nároků, aby bylo možné zprovoznit Mozillu v prostředí, kde velikost programu hraje podstatnou roli. Bylo provedeno několik optimalizací včetně renderovacího režimu pro malé displeje (existuje <a href="http://disruptive-innovations.com/products/index.html#SSRXPI">rozšíření pro maloobrazovkové vykreslování v Mozille a Mozilla Firefoxu</a>) a zeštíhlené uživatelské rozhraní (zatím nedokončené). Některé (velmi staré) <a href="http://www.mozilla.org/projects/minimo/screenshots.html">obrázky Minima</a>.</p>
<p><a href="http://www.mozilla.org/projects/minimo/releases/arm/0.1/">Minimo 0.1</a> je dostupné pro ARM zařízení s Linuxem a <abbr title="The GIMP Toolkit">GTK</abbr>. Program byl testován na iPAQ 5555 a iPAQ 38xx s <a href="http://familiar.handhelds.org/">Familiar Linuxem</a> 0.7.2 a spuštěným <acronym title="GPE Palmtop Environment"><a href="http://gpe.handhelds.org/">GPE</a></acronym>.</p>
<ul>
<li><a href="http://www.mozilla.org/projects/minimo/releases/arm/0.1/">Stáhnout Minimo 0.1</a></li>
</ul>
<p><strong>[<a href="http://www.mozillazine.org/talkback.html?article=4353">Celý článek</a>]</strong></p>
<h3 id="ml.24">Online materiály z nedávné prezentace Mozilly</h3>
<p>Nedávno se uskutečnily dvě vývojářské akce. Na <a href="http://www.fosdem.org/"><acronym title="Free and Open Source Developers' European Meeting">FOSDEM</acronym> 2004</a> v Bruselu proběhlo <a href="http://www.fosdem.org/2004/index/dev_room_mozilla/schedule/">Setkání vývojářů Mozilly v Evropě (Mozilla Developers Meeting in Europe) 4.0</a>. Další Den vývojářů Mozilly (Mozilla
Developer Day) byl uspořádán v prostorách Mozilla Foundation v kalifornském Mountain
View. Na těchto setkáních bylo uvedeno několik prezentací a některé materiály byly zpřístupněny online.</p>
<ul>
<li><a href="http://www.mozilla.org/events/dev-day-feb-2004/mozilla-futures/">Brendan Eich o budoucnosti Mozilly</a> <strong>[<a href="http://www.mozillazine.org/talkback.html?article=4414">Celý článek</a>]</strong></li>
<li><a href="http://www.gerv.net/presentations/fosdem2004/slide00.html">Gervase Markham o Mozilla Foundation</a></li>
<li><a href="http://webperso.easyconnect.fr/danielglazman/weblog/slidesFOSDEM2004.html">Daniel Glazman o Nvu</a> <strong>[<a href="http://www.mozillazine.org/talkback.html?article=4361">Celý článek</a>]</strong></li>
<li><a href="http://www.croczilla.com/%7Ealex/fosdem2004/">Alex Fritze o vývoji aplikací v Mozille</a></li>
<li><a href="http://www.mozilla.org/newlayout/doc/fosdem2004/slide1.html">Bernd Mielke o ladění layoutu a určování priorit</a></li>
</ul>
<strong>[<a href="http://www.mozillazine.org/talkback.html?article=4362">Celý článek</a>]</strong>
<h2 id="ml.3" class="nice">Mozilla pod povrchem</h2>
<p><em>(přispěl Alex Bishop)</em></p>
<p>Implementace řetězců doznala výrazných změn. I když je s předchozí z velké části kompatibilní, což ocení vývojáři (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=231995">chyba #231995</a>).
Darin Fisher změny popisuje v dlouhé <a href="http://groups.google.com/groups?as_umsgid=c0v0sv$p954@ripley.netscape.com">technické zprávě</a>.</p>
<p>V posledních týdnech bylo publikováno více dokumentací, mj. od Christiana Biesingera a Davida Barona. Christian napsal <a href="http://stud4.tuwien.ac.at/%7Ee0225227/tree_structure.txt">dokument</a>, ve kterém vysvětluje, co lze najít v každém adresáři stromu se zdrojovým kódem Mozilly. Vývojář layoutu David přichází s <a href="http://groups.google.com/groups?as_umsgid=mailman.1077088981.17680.mozilla-layout@mozilla.org">návrhy</a> na zjednodušení překreslování.</p>
<p>Uživatelé nočních verzí, kteří často stahují velké soubory, uvítají, že ukládání souborů větších než 64MB nepostihne diskovou paměť (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=229984">chyba #229984</a>). Majitelé klávesnic od Sunu, nyní mohou v Mozille využívat klávesy pro hledání a nápovědu (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=229438">chyba #229438</a>).</p>
<p><strong>[<a href="http://www.mozilla.org/status/2004-03-01.html">Celá zpráva</a>]</strong></p>
<h2 id="ml.4" class="nice">Projekty pro Mozillu</h2>
<p><em>(přispěl Brian King)</em></p>
<h3 id="ml.41">Projekt týdne: Web Developer</h3>
<p>Rozšíření pro Mozilla Firefox a Mozillu přidá do prohlížeče menu a nástrojovou lištu s různými nástroji pro webové vývojáře. Současné nástroje umožňují konverzi formulářů z typu POST na GET, schování obrázků, zobrazení blokových elementů, zakázání stylů a mnoho dalších věcí. Poskytuje rychlý přístup k validátorům a vývojovým nástrojům, například konzoli jazyka JavaScript. Funkce jako mazání a zakázání cookies, schování obrázků a změna velikosti oken, jsou zajímavé nejen pro vývojáře, ale i pro uživatele.</p>
<h3 id="ml.42">Zprávy o samostatných projektech</h3>
<p><em>Zprávy o samostatných projektech obsahují novinky a poslední informace o Mozille a rozšířeních shromážděných na <a href="http://www.mozdev.org/">mozdev.org</a> a jinde v rámci komunity.</em></p>
<p>Poslední zpráva z 29. února 2004 obsahuje:</p>
<h4 id="ml.421">Feed Parser 0.4.1</h4>
<p>Veřejné zpřístupnění JavaScriptového nástroje pro parsování <abbr title="RDF Site Summary">RSS</abbr>. Významnými novinkami jsou úplná podpora RSS 0.9x a 2.0, logická a na používání snadná syntaxe a podpora Gecka od verze 1.4.</p>
<ul>
<li><a href="http://feedparser.mozdev.org/">http://feedparser.mozdev.org/</a></li>
</ul>
<h4 id="ml.422">JRex 1.0a</h4>
<p>Java Browser Component se sadou <abbr title="Application Program Interface">API</abbr> pro začlenění prohlížeče Mozilla do aplikací v Javě. Renderování webových stránek, navigace, historie, profily a nastavení a mnoho dalších prvků je již dokončeno.</p>
<ul>
<li><a href="http://jrex.mozdev.org/">http://jrex.mozdev.org/</a></li>
</ul>
<h4 id="ml.423">Mycroft</h4>
<p>1000 vyhledávacích modulů pro Mozillu a Mozilla Firefox. Od poslední aktualizace před měsícem jsme přidali více jak 200 nových vyhledávacích modulů a jejich počet tak dosáhl 1000. Od zveřejnění prohlížeče Mozilla Firefox se návštěvnost našich stránek ztrojnásobila. Těší nás úspěch projektu Mycroft, ale další pracovní zátěž nemůžeme zvládnout. Byli bychom opravdu rádi, kdybyste se přidali k našemu týmu.</p>
<ul>
<li><a href="http://mycroft.mozdev.org/">http://mycroft.mozdev.org/</a></li>
</ul>
<h4 id="ml.424">HON 1.2</h4>
<p>Toto rozšíření vám sdělí, zda stránka, na které se nacházíte, je akreditována nadací Health On Net (HON). HONcode Status 1.2 byl vydán 25 února. Nyní používá nový formát pro seznam akreditovaných webů (<abbr title="Uniform Resource Locator">URL</abbr> jsou nyní namísto prostého textu kódovány v MD5). Prosím aktualizujte.</p>
<ul>
<li><a href="http://hon.mozdev.org/">http://hon.mozdev.org/</a></li>
</ul>
<h4 id="ml.425">Forumzilla 0.4.7</h4>
<p>Rozšíření pro Mozilla Mail a Mozilla Thunderbird na čtení <abbr title="RDF Site Summary">RSS</abbr> dokumentů zahrnuje další opravu problému s duplikovanými zprávami a také nyní ignoruje mezery okolo URL v souboru subscribtion.txt. Na řadě jsou plány pro registrační dialog pro správu registrací, takže již nebudete muset upravovat subscription.txt.</p>
<ul>
<li><a href="http://forumzilla.mozdev.org/">http://forumzilla.mozdev.org/</a></li>
</ul>
<h4 id="ml.426">IE View 0.7</h4>
<p>Rozšíření, které vám umožní prohlížet stránky/odkazy v Internet Exploreru, přidalo nejžádanější vylepšení: předvolbu na určení cesty k prohlížeči. Někdy IE View nemůže nalézt Internet Explorer (z důvodu nestandardní instalace, různých mezinárodních verzí atd.) a někteří lidé upřednostňují jiný prohlížeč (Operu a další).</p>
<ul><li><a href="http://ieview.mozdev.org/">http://ieview.mozdev.org/</a></li>
</ul>
<h4 id="ml.427">cdn - Compact Menu 1.6</h4>
<p>Rozšíření reorganizující nabídku dle vašich potřeb a za účelem úspory místa prošlo důkladnou revizí - přepsáním kódu. Výsledkem je menší velikost balíčku. Oprava chyby 5844 ve verzi pro Mozilla Firefox, kdy menu <tt>Go</tt> neumožnilo zobrazit seznam navštívených stránek.</p>
<ul>
<li><a href="http://cdn.mozdev.org/compact/">http://cdn.mozdev.org/compact/</a></li>
</ul>
<h4 id="ml.428">QuickNote 0.5.3</h4>
<p>Rozšíření na pořizování poznámek přichází s novou stabilní verzí opravující řadu chyb. Uživatelé z různých částí světa ocení podporu mezinárodních znaků. Nyní jsou poznámky v kódování UTF-8. Byly také odstraněny vícenásobné instance plovoucích oken.</p>
<ul>
<li><a href="http://quicknote.mozdev.org/">http://quicknote.mozdev.org/</a></li>
</ul>
<h4 id="ml.429">MozManual 1.0 - konečná verze</h4>
<p>Manuál pro začínající uživatele, krátký průvodce Mozillou, předkládá návrh holandské verze. Práce pokračuje na vytvoření <abbr title="HyperText Markup Language">HTML</abbr> verze manuálu, která může být použita jako online představení Mozilly.</p>
<ul>
<li><a href="http://mozmanual.mozdev.org/">http://mozmanual.mozdev.org/</a></li>
</ul>
<h4 id="ml.4210">MessageID-Finder 1.9.4</h4>
<p>Rozšíření Mozilla Mailu/Thunderbirdu, které pro dané id zprávy najde odpovídající zprávu. Do poslední verze bylo přidáno mnoho malých oprav. Chcete-li MessageID-Finder přeložit do vlastního jazyka, kontaktujte prosím vlastníka projektu.</p>
<ul>
<li><a href="http://messagefinder.mozdev.org/">http://messagefinder.mozdev.org/</a></li>
</ul>
<h4 id="ml.4211">Launchy 1.9.0</h4>
<p>Toto rozšíření otevírá webové a emailové odkazy v externích aplikacích. Byla přidána podpora pro The Bat! a umožňuje instalaci na jedno kliknutí.</p>
<ul>
<li><a href="http://gemal.dk/mozilla/launchy.html">http://gemal.dk/mozilla/launchy.html</a></li>
</ul>
<p>Více informací o každém projektu se dovíte <a href="http://mozillazine.org/articles/article4406.html">ve zprávě</a>.</p>
<h2 id="ml.5" class="nice">Anketa zpravodaje Mozilla Links</h2>
<h3 id="ml.51">Vyhodnocení ankety z minulého čísla</h3>
<p>V posledním čísle jsme se ptali, zda plánujete nastavit Mozilla Firefox jako výchozí prohlížeč. Zde jsou výsledky:</p>
<ul>
	<li>Už ho tak mám nastavený: 57 %</li>
	<li>Ano, jakmile získá nějakou vlastnost, kterou dosud postrádám: 7 %</li>
	<li>Ano, jakmile dosáhne verze 1.0: 11 %</li>
	<li>Ano, pokud se stane součástí balíku aplikací Mozilla: 6 %</li>
	<li>Ne, jsem spokojen s balíkem aplikací Mozilla: 18 %</li>
	<li>Ne, jsem spokojen se svým současným prohlížečem: 1 %</li>
</ul>
<p>(*) Kvůli zaokrouhlování nemusí být součet roven 100 %.</p>
<h3 id="ml.52">Nová anketa: Používáte online záložky jako například Online Bookmarks?</h3>
<ul>
	<li>Ano.</li>
	<li>Ne. žádná mi nevyhovuje.</li>
	<li>Ne. Nevím, že existují.</li>
</ul>
<p>Hlasujte na <a href="http://newsletter.mozdev.org/">http://newsletter.mozdev.org/</a>.</p>
<h2 id="ml.6" class="nice">Reklama</h2>
<p>Právě teď jsou dostupná CD s Mozillou za pouhých 5.95 $ včetně
poštovného a balného. To je vhodná příležitost, jak přispět nadaci
Mozilla a mít užitečnou kopii vašich nejoblíbenějších internetových
aplikací na sdílení s vašimi přáteli.</p>
<p>Můžete si také předplatit CD s Mozillou za 17.95 $ a celý rok dostávat nové verze Mozilly.</p>
<p>Trička s Mozillou prodáváme od 15.95 $.</p>
<p>Navštivte <a href="http://store.mozilla.org/">http://store.mozilla.org/</a>!</p>
<p>Zde může být vaše reklama! Pro více podrobností o tom, jak se dostat k 6000 čtenářů na celém světě, navštivte <a href="http://newsletter.mozdev.org/mlsp.html">Mozilla Links Sponsorship Program</a>.</p>
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
<a href="/czilla/prispevatele.php#kdo-je-PT">Petr Tomeš</a>, Pavel Kácha a Tomáš Marek; <a href="mailto:info@czilla.cz">info@czilla.cz</a></p>

<?php
	$page->includeTemplate('footer');
?>
