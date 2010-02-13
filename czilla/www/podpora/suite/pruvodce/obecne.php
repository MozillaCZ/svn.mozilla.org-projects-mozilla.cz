<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Používáme Mozillu: Všeobecné';
	$page->headline = array('Používáme Mozillu','Všeobecné');

	$page->includeHeader();
?>


<ul>
<li><a href="#what-is-moz-product">Co je balík aplikací Mozilla?</a></li>
<li><a href="#who-can-use">Kdo může Mozillu používat?</a></li>
<li><a href="#toolkit">Co jsou nástroje Mozilly?</a></li>
<li><a href="#what-else-can-be-built">Jaké další produkty mohou být na kódu Mozilly postaveny?</a></li>
<li><a href="#what-is-1.0">Co je Mozilla 1.0?</a></li>
<li><a href="#what-advantages">Jaké jsou výhody otevřeného software?</a></li>
</ul>

<ul>
<li><a href="index.html#index">Hlavní obsah</a></li>
</ul>

<p><br /></p>


<h3><a id="what-is-moz-product">Co je balík aplikací Mozilla?</a></h3>

<p>Balík aplikací Mozilla je kvalitní sada Internetového klientského software, který zahrnuje</p>

<ul>
<li>webový prohlížeč,</li>
<li>program pro čtení pošty a diskusních skupin a</li>
<li>klienta pro chat.</li>
</ul>

<p>Balík je navržen tak, aby <strong>pracoval stejně na mnoha operačních systémech</strong>, což je hlavní výhoda pro toho, kdo přichází do styku s programy a prostředím na různých systémech. Podporované platformy jsou: Win32 (Windows 9<i>x</i>, ME, NT, 2000 a XP), MacOS (8.5, 8.6, 9.<i>x</i> a OS X), Linux, BSD/OS, FreeBSD, HPUX, Caldera OpenUNIX8 a Unixware 7.1.1, OpenVMS, OS/2, Solaris a Tru64 Unix.</p>

<p>Základna programu je tvořena <strong>otevřenými zdrojovými kódy</strong>, které dávají uživatelům ohromné množství volby, kterého není nikdy možné dosáhnout s proprietárním software.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="who-can-use">Kdo může Mozillu používat?</a></h3>

<p>Balík je <strong>určen k použití distributory</strong>, ale v podstatě kdokoli může používat Mozillu v jeho produktu, pokud dodrží licence <a href="http://www.mozilla.org/MPL/" title="Main page for information about Mozilla&#8217;s licencing">MPL a NPL</a> (Mozilla a Netscape Public Licenses).</p>

<p>Mozillu lze <strong>libovolně distribuovat</strong> tak jak je, nebo v modifikované formě. Od třetích stran se pak očekává, že si samy změní balík podle svých potřeb. Třetí strany se také mohou rozhodnout dodávat další dokumentaci a/nebo podporu, aby uspokojily své zákazníky.</p>

<p>Dále uživatelé, kteří chtějí prohlížet internet, používat elektronickou poštu a diskusní skupiny, si mohou také <a href="http://www.mozilla.org/releases/" title="Milníky">stáhnout</a> balík přímo z <a href="http://www.mozilla.org/" title="mozilla.org - domovská stránka">mozilla.org</a> nebo z <a href="/stahnout/" title="czilla.cz - domovská stránka">czilla</a>. Podle množství stažených balíků lze soudit, že stále více lidí se rozhodlo využívat Mozillu.</p>

<p>Doufáme, že nejvíce uživatelů získá Mozillu jako část volné nebo placené distribuce třetích stran, jako např. <a href="http://channels.netscape.com/ns/browsers/7/download.jsp?x=96&amp;y=9" title="Netscape 7">Netscape</a>, <a href="http://www.redhat.com/" title="Red Hat Linux">Red Hat</a>, <a href="http://www-3.ibm.com/software/os/warp/browser/" title="OS/2 port Mozilly">IBM</a> nebo <a href="http://www.beonex.com/" title="The Beonex">Beonex</a>. Další aplikace, které se časem stanou také součástí Mozilly, jsou v současnosti ve vývoji.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="toolkit">Co jsou nástroje Mozilly?</a></h3>

<p>Nástroje Mozilly kombinují několik komponent (jako Gecko, JavaScript, knihovny síťových funkcí a vrstvu pro přenositelnost) a <a href="../start/webovi-vyvojari.html" title="Více informací o Mozille a programovacích nástrojích">programovací nástroje</a> (JavaScript debugger, DOM inspector, atd.) s technologiemi jako XML, CSS a ECMAScript (JavaScript).</p>

<p>S touto <strong>jednoduchou základnou</strong> je možné <strong>vytvořit aplikace</strong> od jednoduchých (jako jsou webové stránky) až po velmi složité, jako je Mozilla.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="what-else-can-be-built">Jaké další produkty mohou být na kódu Mozilly postaveny?</a></h3>

<p>Kromě Mozilly produkují mnozí OEM (original equipment manufacturers - dodavatelé originálního vybavení) širokou škálu svých produktů za použití <strong>modulární struktury kódu Mozilly</strong>. Některé z těchto produktů jsou další prohlížeče, jako <a href="http://galeon.sourceforge.net/">Galeon</a> a <a href="http://chimera.mozdev.org/">Chimera</a> (prohlížeč postavený na Gecko pro Mac OS X).</p>

<p>Některé produkty usadily renderovací stroj Mozilly (známý jako &#8220;Gecko&#8221;) do jiných aplikací, aby umožnily těmto aplikacím rozumět a zobrazovat HTML. Jako příklad lze uvést <a href="http://www.intel.com/internetappliances/webappliance/dotstation.htm">Dot.Station</a> firmy Intel a přístroj od <a href="http://www.wgate.com/home.html">Worldgate</a>.</p>

<p>Jiné produkty vyžívají komponent jako je ECMAScript (JavaScript) a kryptografické schopnosti Mozilly pro produkty, které mají jen málo co společného s prohlížeči. Například ActiveStates používají technologii Mozilly k postavení jejich <a href="http://www.activestate.com/Products/Komodo/">Komodo</a> - IDE nástroje pro vývojáře, zatímco OEone používá částí Mozilly k vytvoření <a href="http://www.oeone.com/products/3.html">celého ovládacího prostředí</a> pro uživatele osobních počítačů.</p>

<p><b>Přes 70 projektů</b>, které používají Mozillu můžete najít na <tt><a href="http://www.mozdev.org" title="MozDev: přídavné moduly a rozšíření Mozilly">www.mozdev.org</a></tt>.</p>

<p>Mozilla je založená na otevřeném software, což znamená, že může být použita, měněna a/nebo distribuována beze změny. <b>Licence, pod kterou je kód vydáván, byla počlivě sestavena</b> tak, aby umožňovala ostatním kombinovat kód Mozilly s dalším proprietárním kódem a vytvářet tak komerční produkty, za které se platí. Samozřejmě může být použita k vytvoření dalšího ne-proprietárního software.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="what-is-1.0">Co je Mozilla 1.0?</a></h3>

<p>Mozilla 1.0 byla prvním významným uvolněním verzí:</p>

<ul>
<li>Mozilla - <strong>balík aplikací</strong> a</li>
<li>Mozilla - <strong>nástroje</strong> - pro vytváření mezi-platformních, Internetově orientovaných GUI aplikací.</li>
</ul>

<p>Mozilla 1.0 také označovala úroveň <strong>stability a zralosti API</strong>. Nejdůležitější podmínky dosažení vypuštění Mozilly 1.0 byly dány dokončením API (application programming interface - aplikační programovací rozhraní), které musí poskytovat stabilní základnu pro ty, jež hodlají na Mozille stavět další aplikace.</p>

<p>Skupina API byla označena jako &#8220;@FROZEN.&#8221; (ustálená) a Mozilla.org garantuje kompatibilitu API nejméně do vypuštění Mozilly 2.0. Seznam API, která jsou pro Mozillu 1.0 určena jako neměnná <a href="http://www.mozilla.org/projects/embedding/EmbedInterfaceFreeze.html" title="API Mozilla 1.0">lze nalézt zde</a>.</p>

<p>Mozilla 1.0 také označuje první bod, od kterého mozilla.org bude <strong>udržovat dvě verze - stabilní a vývojovou část kódu</strong>.</p>

<p>Znatelný vývoj bude prováděn na hlavním kmeni, zatímco větev (1.0) bude udržována pouze za účelem zlepšení stability a výkonnosti. Touto cestou se mohou společnosti přející si postavit jejich produkty na Mozille spolehnout na přístup ke kódu s dlouhou životností a nemusí se obávat denních nebo týdenních změn, které budou probíhat ve vývojové části.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="what-advantages">Jaké jsou výhody otevřeného software?</a></h3>

<p>Zdrojové kódy <a href="http://www.opensource.org/docs/definition.html" title="Definice &#8220;open source&#8221;">software s otevřeným zdrojovým kódem</a> jsou vždy dostupné, <strong>bez poplatku</strong>, pro <strong>jakékoli použití</strong>. Tím získáte následující výhody:</p>

<ul>
<li>vždy dosažitelný zdrojový kód;</li>
<li>nic vás nestojí používat, modifikovat nebo distribuovat software;</li>
<li>příjemci &#8211; uživatelé i OEM &#8211; mohou modifikovat software, pokud chtějí uspokojit některé další potřeby;</li>
<li>příjemci si mohou opravit chyby, které jsou pro ně důležité;</li>
<li>&#8220;konec životnosti&#8221; nemůže být vnucen příjemci;</li>
<li>rozhodnutí techniků nebo obchodníků nemůže být vnuceno přijemci; a</li>
<li>zdroje zkušeností a vedení se mohou rozvíjet.</li>
</ul>

<p>Výhody otevřeného software v procesu vývoje a řízení byly mnohokrát diskutovány např. na <i><a href="http://www.catb.org/~esr/writings/cathedral-bazaar/" title="Kde je The Cathedral and the Bazaar">The Cathedral and the Bazaar</a></i>. Otevřený software ovšem nabízí mnoho výhod i příjemci.</p>

<p>Např. mnohdy existují chyby, které výrobce software nepovažuje za důležité, ale jsou kritické pro uživatele nebo OEM. S otevřeným software příjemce není omezen na vyvíjení nátlaku na výrobce nebo nucen platit výrobci za opravu jeho chyb. Příjemcům <a href="http://www.opensource.org/advocacy/case_for_customers.html" title="Proč je otevřený software dobrý pro zákazníky">je umožněno chyby opravit</a>.</p>

<p>Pokud příjemce není dostatečně zkušený a preferuje nepracovat s otevřeným software, může uzavřít kontrakt, nebo požádat o podporu jiné &#8211; <b>ne pouze původní</b> &#8211; společnosti, aby mu chybu opravili.</p>

<p>Ukončení podpory a vývoje je také důležité, protože uživatelé a OEM jsou často negativně ovlivněni výrobcem a mohou tak být nuceni aktualizovat nebo změnit produkt, přestože nechtějí.</p>

<p>S otevřeným software <b>si nikdo nemůže <i>vynutit</i> ukončení používání produktu.</b> Lidé mohou přestat pracovat na projektu, ovšem jiní se mohou rozhodnout pokračovat v údržbě a vývoji kódu. Uživatelé a OEM mají možnost, kterou nelze dosáhnout s proprietárním software: mohou si vybrat jiný produkt, jestliže jim připadá, že bude lepším řešením &#8211; ale mohou se <b>také</b> rozhodnout podílet sami nebo s ostatními na vývoji.</p>

<p>Stejná situace může nastat pokud se vývoj produktu začne orientovat směrem, který uživateli nebo OEM nevyhovuje: příjemce si může vybrat změnu produktu, nebo se může věnovat vývoji a údržbě sám nebo společně s dalšími.</p>

<p>Jednou z pozitivních vlastností takovéto údržby a vývoje software je vznik distribuovaného <b>zdroje zkušeností a vedení</b>. S proprietárním software jsou zkušenosti a znalosti obvykle koncentrovány a omezeny na zaměstnance společnosti. Naproti tomu u otevřených projektů <b>kdokoli</b> se zkušenostmi a zájmem může pomoci projektu a rozšířit tak celkové znalosti.</p>

<p>Společnosti používající kód Mozilly v jejich produktech mohou vyvinout vnitřní zkušenosti na mnoha úrovních. Mohou se koncentrovat na speciální funkce jedinečného významu jejich produktu nebo pomáhat svými zkušenostmi při vývoji základních komponent. Se zkušenostmi přichází i možnost vedení a vedoucí pozice vždy znamená velký vliv na budoucnost vývoje software.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>


<?php
	$page->includeFooter();
?>
