<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Používáme Mozillu (Na rovinu...)';
	$page->headline = array('Používáme Mozillu','Na rovinu...');

	$page->includeHeader();
?>

<h2><a id="index">Obsah</a></h2>

<ul>
<li><a href="#why-bother">Nejsou již války browserů skončeny? Jak může Mozilla ovlivnit Internet?</a></li>
<li><a href="#completion">Proč trvalo tak dlouho než byla Mozilla 1.0 dokončena?</a></li>
<li><a href="#user-experience">Kdy se stane zkušenost uživatelů <i>skutečně</i> nová?</a></li>
<li><a href="#bug-count">Slyšel jsem, že počítadlo chyb stále roste? Je to pravda?</a></li>
<li><a href="#sponsoring-corps">Jaký je vztah mezi mozilla.org a sponzory jako jsou Netscape a AOL?</a></li>
<li><a href="#netscape">Udělal Netscape většinu práce (psaní zdrojových kódů, dokumentace, testování atd.)?</a></li>
<li><a href="#codebase">Jaké jsou licenční podmínky zakotvené v kódech Mozilly?</a></li>
<li><a href="#other-tech">Jaké jsou zde další technologie? Kdo je může využít?</a></li>
<li><a href="#mozilla-dot-org">Co se děje na mozilla.org, czilla.cz?</a></li>
</ul>

<ul>
<li><a href="index.html#index">Hlavní obsah</a></li>
</ul>

<p><br /></p>

<h3><a id="why-bother">Nejsou již války browserů skončeny? Jak může Mozilla ovlivnit Internet?</a></h3>

<p>Internet, digitální společenství Země, získává v životě každého z nás stále větší důležitost. <strong>Základním klíčem úspěchu je mezinárodní spolupráce</strong> &#8211; <b>otevřený vývoj</b>, <b>otevřené standardy</b> a <b>software s otevřeným zdrojovým kódem</b> - především to vše vedlo ke zrození Internetu, stejně jako další univerzální globální systémy jako adresování e-mailů a jejich doručování.</p>

<p>Pokračujíce v duchu otevřenosti, kód Mozilly a její vývojové nástroje, umožňují vývojářům svobodný přístup ke zdrojům a svobodné tvorbě a prezentovaní svých výsledků a dat na webu.</p>

<p>Hlavním cílem projektu Mozilla je podílet se na inovacích a tvorbě technologie klientů splňujících dohodnuté standardy tak, aby všechny zdroje webu zůstaly svobodně přístupné. S tím jak stále více společností přijímá technologie a strategii Mozilly za své, bude Mozilla stále více podporovat <strong>šíření a schvalování otevřeného a na standardech založeného software</strong> napříč celým Internetem, což se nakonec vrátí v životaschopnosti projektu Mozilla. </p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="completion">Proč trvalo tak dlouho než byla Mozilla 1.0 dokončena?</a></h3>

<p>Zaprvé se velmi dramaticky změnily cíle projektu. Počáteční snahy projektu směřovaly k vylepšení existujícího programu Nescape Communicator 4.<i>x</i> směrem k verzi 5.<i>x</i>. Po zahájení projektu se však ukázalo, že mnoho ze stanovených cílů není možné s tehdejším kódem dosáhnout.</p>

<p>Proto bylo učiněno rozhodnutí odstartovat projekt Mozilla znovu a <strong>vytvořit kód zcela nové generace</strong>. Toto rozhodnutí dramaticky rozšířilo záběr projektu.</p>

<p>Zadruhé, ne všechna rozhodnutí ohledně změn návrhu struktury pro nový kód byla učiněna najednou. Vývojový proces se změnil v cosi podobného přestavbě domu: Ideální by bylo mít vše předem precizně naplánováno .&nbsp;.&nbsp;. bohužel ve skutečnosti to je zřídkakdy možné.</p>

<p>Nakonec, pokud uvažujeme verzi 1.0, ta musela být schopna splňovat v době svého uvedení standardy odpovídající době uvedení, nikoli době vzniku myšlenky. Mozilla 1.0 musela být porovnatelná s nejnovější generací komerčních prohlížečů. Proto jsme věnovali část času také úvahám o načasování, protože Mozilla musela být připravena &#8220;<b>v pravý čas</b>.&#8221;</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="user-experience">Kdy se stane zkušenost uživatelů <i>skutečně</i> nová?</a></h3>

<p>Důraz v Mozille 1.0 byl, v oblasti fukcionality a uživatelského rozhranní, kladen na to, aby mohl Netscape vytvořit důstojného nástupce Netscape Communicatoru 4.<i>x</i>. Na pozadí však byly učiněny změny, které dávají Mozille do budoucnsti možnost rychle a efektivně měnit prostředí a tedy pocit uživatelů při práci:</p>

<ul>
<li>veškeré funkce jsou mnohem více <b>modulární</b> a <b>rozšiřitelné</b> než tomu bylo v NS 4.<i>x</i>;</li>
<li>celé uživatelské rozhranní je definováno použitím XUL, které umožňuje každému použitím standardních technik tvorby grafických stránek vytvořit nový uživatelský vzhled Mozilly.</li>
</ul>

<p>Vezměme jako příklad panelové prohlížení. H. J. van Rantwijk využívá této vlastnosti v jiném prohlížeči. Během několik posledních let se on a někteří jeho přátelé rozhodli vytvořit projekt <a href="http://multizilla.mozdev.org/" title="Projekt Multizilla na MozDev">Multizilla</a>. David Hyatt shlédl tento projekt a vytvořil nové XUL prostředí, které implementuje všechny základní potřeby. Základní prostředky panelového prohlížení jsou dnes již běžnou součástí Mozilly a přesto práce na dalším vylepšení Multizilly pokračuje.</p>

<p>Projekt Mozilla a vývojová komunita kolem něho se snaží pracovat v týmu a vytvářet projekt schopný stále se zlepšovat a je si vědoma, že vývoj uživatelského rozhranní a implementace užitečných vlastností se urychlily právě vydáním Mozilly 1.0.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="bug-count">Slyšel jsem, že počítadlo chyb stále roste? Je to pravda?</a></h3>

<p>Nahlášení chyby může pomocí Bugzilly provést, pro jakýkoli problém spadající do oblasti Mozilly, kdokoli, pokud má pocit, že tento problém je dostatečně závažný, aby se mu věnovalo více lidí a veřejnost ho pomohla stopovat. Naše databáze chyb obsahuje <b>všechny</b> hlášení chyb od začátku projektu Mozilla, tedy číslo se musí nutně stále zvyšovat, protože i již vyřešené chyby zůstávají v databázi.</p>

<p>Neexistuje žádný jednoznačný ukazatel, který by spojoval počet nahlášených chyb s výslednou kvalitou produktu:</p>

<ol>
<li>Některá hlášení se vztahují k organizaci projektu, né ke kódu.</li>
<li>Nezanedbatelné množství chyb vztažených ke kódu jsou buď duplikáty nebo špatně formulovaná hlášení; některé jsou pouze názory, zkušenosti nebo návrhy na vylepšení.</li>
<li>Požadavky na nové vlastnosti (RFE neboli &#8220;request for enhancements&#8221;) jsou sledovány jako hlášení chyb.</li>
<li>Máme také série &#8220;meta-chyb&#8221;, které jsou pro managery projektu. Např. je zde metachyba pro každou vydávanou verzi &#8220;milník&#8221; [milestone], ve které sledujeme důležitá rozhodnutí pro uvolnění verze.</li>
<li>Počet chyb je ovlivněn také množstvím lidí podílejících se na projektu: čím více jich je, tím více chyb bude vyplňováno v Bugzille.</li>
<li>Existence záznamu chyby, říká velmi málo ne-li nic o vlivu chyby na uživatele. Jediná chyba může pokrývat závažnou chybu, která postihne mnoho uživatelů zcela zřetelně, nebo také může popisovat velmi specifickou chybu, která ostatní uživatele nijak nepostihne. Díky tomu, že bude třeba se vypořádávat se stále méně běžnými chybami je možné, že i počet chyb se bude dále, s narůstající kvalitou produktu, zvyšovat.</li>
</ol>

<p>Protože, jak vidno, číslo chyb neudává skutečnou chybovost, <b>provádíme</b> jiná sledováni a měření chybovosti a to sice pomocí <b>střední doby mezi chybami</b> [MTBF - Meant Time Between Failures] a dalších standardních postupů (můžete se podívat do <a href="http://ftp34.newaol.com/pub/data/crash-data/M1RC2-smart-analysis-all.txt">této analýzy</a> poslední verze).</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="sponsoring-corps">Jaký je vztah mezi mozilla.org a sponzory jako jsou Netscape a AOL?</a></h3>

<p>Mozilla.org existuje proto, aby vytvořila Mozillu <strong>úspěšným projektem otevřeného software</strong>. Podporuje celou komunitu kolem Mozilly a poskytuje jí centrální bod pro kontakty na ty, kteří se zajímají o vylepšování Mozilly.</p>

<p>Mozilla.org zajišťuje absolutní nezávislost rozhodování. Všechna rozhodnutí jsou dělána pro maximální a dlouhodobé zdraví kódu a celé komunity vůbec. Mozilla.org dostává sponzorské dary ve formě poskytování prostředků (servery, atd.), ovšem přijímá jen ty, které umožňují nejlepší spolupráci celé komunity. Dále udržuje bližší spolupráci s dalšími distributory.</p>

<p>Někteří pracovnící mozilla.org jsou dobrovolníci, včetně vedoucího celého projektu, kterým je Lizard Wrandler. Jiní členové jsou sponzorováni svými zaměstnavateli. Ve všech případech je preferována přímá účast na projektu, než podílnictví na některém produktu vycházejího z projektu. Mozilla.org má dlouhotrvající závazek <strong>plné transparentnosti</strong>.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="netscape">Udělal Netscape většinu práce (psaní zdrojových kódů, dokumentace, testování atd.)?</a></h3>

<p>Netscape je největší samostatný podílník v projektu Mozilla, který má silnou komunitu zaměstnanců a dobrovolníků, kterým umožňuje, aby na plný úvazek pracovali na projektu.</p>

<p>Pracovníci Netscape byli úzce spojeni s téměř všemi částmi kódu, většinou v kombinaci s dobrovolníky a stále se zvyšujícím počtem dalších zaměstnanců jiných společností, které využívají kód Mozilly. Do data psaní tohoto textu se přímo na projektu podílelo asi 300 lidí, kteří nepatřili k Netscape.</p>

<p>Počet lidí, kteří se na projektu jakkoli podíleli je však mnohem vyšší. Především počet lidí podílejících se na testování a hlášení chyb je enormní. Poslední verze Mozilly byly staženy mezi 300,000 až 400,000 lidmi každá, což dává projektu velké množství potřebných testovacích dat.</p>

<p>Jsou zde také stovky lidí, kteří pomáhají přímo vývojářům, kteří píší kód. Ti jim svou prací pomáhají být daleko efektivnější.</p>

<p>Taktéž je vytvářeno velké množství dokumentace, včetně různých tutoriálů, která přichází od dobrovolníků.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>


<h3><a id="codebase">Jaké jsou licenční podmínky zakotvené v kódech Mozilly?</a></h3>

<p>Kód Mozilly je <strong>vyvíjen a licencován</strong> jako <strong>otevřený/svobodný software</strong>. To znamená, že příjemce kódu má zajištěna některá <strong>základní práva</strong>.</p>

<p>Převážná část kódu Mozilly je vydávána pod <a href="http://www.mozilla.org/MPL/">Mozilla Public License</a> a Netscape Public License. Můžou se však objevit i soubory s jinými licencemi, které jsou slučitelné s licencemi otevřeného software (jako např. BSD a MIT licence).</p>

<p>To znamená, že kód Mozilly může být legálně:</p>

<ul>
<li>prohlížen (<tt><a href="http://lxr.mozilla.org/seamonkey/">http://lxr.mozilla.org/</a></tt>),</li>
<li>měněn (<tt><a href="http://www.mozilla.org/cvs.html">http://www.mozilla.org/cvs.html</a></tt>),</li>
<li>využíván (<tt><a href="http://www.mozilla.org/build/">http://www.mozilla.org/build/</a></tt>) a</li>
<li>distribuován (<tt><a href="http://www.mozilla.org/MPL/">http://www.mozilla.org/MPL/</a></tt>)</li>
</ul>

<p>jakoukoli osobou nebo organizací za jakýmkoli účelem.</p>

<p>Více informací o otevřených kódech a svobodném software můžete nalézt na <tt><a href="http://opensource.org">http://opensource.org</a></tt> a <tt><a href="http://www.fsf.org">http://www.fsf.org</a></tt>.</p>

<p>U kódové základny je v součastnosti měněna licence tak, aby umožnila kombinovat kód Mozilly s dalším kódem z jiných projektů, které jsou také svobodné, ale mají zatím <a href="http://www.mozilla.org/MPL/relicensing-faq.html">neslučitelné licence</a> (GNU GPL a LGPL). Ke změně licente je však potřeba nalézt několik <a href="http://www.mozilla.org/MPL/missing.html">"chybějících" přispěvatelů</a>.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="other-tech">Jaké jsou zde další technologie? Kdo je může využít?</a></h3>

<p>Kód Mozilly obsahuje <strong>široké spektrum relativně modulárních, standardizovaných funkcí</strong>. Vývojáři, speciálně OEM, mohou zjistit, že kód je atraktivní &#8220;plug and play-hřiště&#8221;, stávající se zdrojem kvalitního software pro rozšíření základny přenositelného, standardy splňujícího webově a síťově orientovaného software.</p>

<p>Většina těchto vymožeností je v Mozille použita, jsou však i takové, které nejsou.</p>

<p>Jsou zde např. vývojářské nástroje jako Bugzilla, které jsou ukázkou technologií Mozilly, úspěšnou v oblasti velmi vzdálené od Mozilly. Po světě se nyní používá <b>několik tisíc instalací Bugzilly</b> ke sledování informací v mnoha otevřených i proprietárních projektech, které nemají nic společného s Mozillou.</p>

<p>Navíc jsou zde další rozličné projekty, jako např. <a href="http://www.mozilla.org/rhino/">Rhino</a>, což je implementace JavaScriptu v Javě (umožňuje těm, kteří vyvíjejí řešení založená na Javě, využívat schopnosti skriptovat).</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="mozilla-dot-org">Co se děje na mozilla.org, czilla.cz?</a></h3>

<p>Cokoli to je, je to <strong>zcela zřejmě otevřené</strong>. Jak je vidět z prvního návrhu &#8220;<a href="http://www.mozilla.org/roadmap/roadmap-26-Oct-1998.html" title="Dokument o budoucím vývoji Mozilly">budoucího vývoje</a>&#8221; (z října 1998), dotkl se tento dokument i tohoto problému (ostatní návrhy se týkali především technických záležitostí).</p>

<p>Webové stránky mozilla.org byly sami psány především vývojáři pro vývojáře, dnes je situace již o poznání jiná. Pokud máte dostatek technické zručnosti, můžete zde získat zajímavý nástroj pro publikování na webu, stejně tak jako archivační nástroj a nástroj pro vytváření jednoduchého grafického výstupu sledujícího reálný vývoj jakéhokoli produktu na různých platformách (<i>včetně.</i>, <a href="http://tinderbox.mozilla.org/showbuilds.cgi?tree=SeaMonkey">tohoto obrázku</a> posledního vývoje větví Mozilly.).</p>

<p>Vývoj Mozilly sleduje cestu definovanou v periodicky obnovovaném &#8220;<a href="http://www.mozilla.org/roadmap.html" title="Současný plán vývoje">plánu vývoje</a>&#8221;. Priority a cíle jsou definovány v &#8220;manifestu&#8221;, dokumentu jako <a href="http://www.mozilla.org/roadmap/mozilla-1.0.html">manifest Mozilla 1.0</a>.</p>

<p>Pokud jde o dění na czilla.cz - zde se shromažďují lidé zainteresovaní na přiblížení projektu Mozilla a jeho produktu prohlížeče Mozilla, široké české veřejnosti. Zároveň se snaží shromáždit kolem sebe všechny projekty a lidi zainteresované na všech činnostech, které nespadají přímo do působnosti mozilla.org, ale váží se k Mozille prostřednictvím českého národního prostředí.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>

<?php
	$page->includeFooter();
?>