<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Používáme Mozillu (Mozilla - nástroje)';
	$page->headline = array('Používáme Mozillu','Mozilla - nástroje');

	$page->includeHeader();
?>

<h2><a id="index">Obsah</a></h2>

<ul>
<li><a href="#gecko">Co je Gecko?</a></li>
<li><a href="#xul">Co je XUL?</a></li>
<li><a href="#xpcom">Co je XPCOM?</a></li>
<li><a href="#necko">Co je Necko?</a></li>
<li><a href="#imagelib">Co je Imagelib?</a></li>
<li><a href="#javascript">Co je JavaScript (ECMAScript), tato velmi důležitá část nástrojů Mozilla?</a></li>
<li><a href="#benefits">Jaké jsou hlavní výhody použití nástrojů Mozilly?</a></li>
<li><a href="#developer-tools">Jaké vývojářské nástroje jsou zabudovány v Mozille?</a></li>
<li><a href="#security">Jaké zabezpečení nástroje obsahují?</a></li>
<li><a href="#contact">Koho mají další zájemci o využití zdrojových kódů Mozilly kontaktovat pro další informace?</a></li>
</ul>

<ul>
<li><a href="index.html#index">Hlavní obsah</a></li>
</ul>

<p><br /></p>

<h3><a id="gecko">Co je Gecko?</a></h3>

<p>Meziplatformní, renderovací stroj Gecko, který je možné využít i v jiných aplikacích, je srdcem Mozilly. Gecko nemá žádné uživatelské rozranní; pouze rozumí obsahu webu a dokáže ho zobrazovat. Tato schopnost je velmi ceněna ve velikém množství aplikací, z nichž mnohé mají s &#8220;prohlížečem&#8221; málo co společného. Např. Gecko (společně s XUL, viz níže) je používáno ke zobrazení rozhranní jednotlivých aplikací Mozilly.</p>

<p>Gecko se začalo vyvíjet v roce 1997 a vyvinulo se ve spolehlivý, rychlý a robustní stroj pro zobrazování, který je <strong>otevřený, přenositelný, rozšiřitelný a upravitelný</strong>. Gecko je vloženo v mnoha softwareových a hardwareových produktech třetích stran, a slouží např. jako konvertor HTML do PNG pro komerční IDE. Gecko slouží také jako zobrazovací stroj v posledních verzích CompuServe 7.0. Je také použito v Netscape 7.0 a betaverzích programů od AOL.</p>

<p>Další příklady, včetně některých, které jsou pouze prohlížeče:</p>

<ul>
<li><a href="http://galeon.sourceforge.net/">Galeon</a> (nepoužívá XUL; specifický pro GNOME desktop pro Unix/Linux; velmi populární v posledních letech),</li>
<li><a href="http://chimera.mozdev.org/">Chimera</a> (nepoužívá XUL; specifický pro MacOS X),</li>
<li><a href="http://kmeleon.sourceforge.net/">K-Meleon</a> (nepoužívá XUL; specifický pro Windows) a</li>
<li><a href="http://lxr.mozilla.org/mozilla/source/browser/">m/b</a> (používá XUL a je meziplatormní).</li>
</ul>

<p>Více technických informací o tom jak využít Gecko je dostupných na <a href="http://www.mozilla.org/projects/embedding/" title="Využití Gecka">mozilla.org</a> a <a href="http://www.codeguru.com/controls/iemozilla.html" title="Více o využití Gecka">codeguru.com</a>.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="xul">Co je XUL?</a></h3>

<p><a href="http://www.mozilla.org/projects/xul/">XUL</a> (rozšiřitelné uživatelské rozhranní [eXtensible User-interface Language]) je na <strong>XML založená, přenositelná technologie uživatelského rozhranní</strong>.</p>

<p>Tato technologie umožňuje vývojářům definovat systémově nezávislý grafický uživatelský interface, použitím směsi XML, HTML, CSS a ECMAScriptu (JavaScript). Uživatel může měnit kterýkoli aspekt rozhranní XUL v Mozilla aplikacích a aplikacích na Mozille založených, jednoduše modifikací souborů se syntaxí webové stránky.</p>

<p>XUL používá Gecko k implementaci uživatelského rozhranní. Kombinace Gecka a XUL je základem, který dělá z aplikací Mozilla více než jen jednoduchý prohlížeč webových stránek a dělá z nich kvalitní produkt jakým je např. Mozilla. Ta podporuje všechny <strong>základní elementy, které je možné najít v jiných grafických uživatelských rozhranních</strong>, včetně menu, ovládacích prvků, dialogů a stromů (jak je můžete vidět např. v dialogu předvoleb), klávesové zkratky atd.</p>

<p>Tutorilál o XUL můžete najít na <a href="http://www.xulplanet.com/tutorials/xultu/index.shtml" title="XUL Planet - seriál o XUL">XUL Planet</a>. Zde pak můžete najít balík prospektů o <a href="http://www.hacksrus.com/%7Eginda/devday2001/contents.html">stavění aplikací pomocí XUL a JavaScriptu [Building Applications with XUL and JavaScript]</a>, společně s dalšími detailnějšími technickými informacemi (<a href="http://www.hacksrus.com/%7Eginda/xulkit/doc/README-new-from-template.html" title="Jak generovat kód ze vzorníků a dfinice proměnných">1</a>; <a href="http://www.hacksrus.com/%7Eginda/xulkit/doc/README-makexpi.html" title="Generovaní souborů XPI ze zdrojového stromu XUL.">2</a>). Více informací též na <a href="http://www.mozilla.org/projects/xul/joy-of-xul.html" title="Joy XUL">mozilla.org</a>.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="xpcom">Co je XPCOM?</a></h3>

<p>Komponenty Mozilly jsou komponenty XPCOM. <a href="http://www.mozilla.org/projects/xpcom/">XPCOM</a> (meziplatformní komponentní objektový model) byl poprvé vytvořen jako součást projektu Mozilla a je nyní používám v mnoha dalších projektech. XPCOM je <strong>odlehčenou, přenositelnou variantou</strong> dobře známého komponentového objektového modelu (COM). <a href="http://www.ibm.com/developerworks/webservices/library/co-xpcom.html">Článek</a> na stránkách IBM se tím pak zabývá více.</p>

<p>Všechny objekty XPCOM automaticky získávají přístup k ECMAScriptovému (JavaScriptovému) wrapperu, takže většina vývojářů Mozilly využíva všech výhod, které XPCOM poskytuje bez obav o chování na různých platformách.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="necko">Co je Necko?</a></h3>

<p>Necko (rýmuje se s &#8220;Gecko&#8221;) je síťová knihovna Mozilly. Ta poskytuje <strong>platformně nezávislé API</strong> pro několik síťových vrstev od transportní až po presentační. Komponenty v knihovně obsahují standardní implementace ovladačů (HTTP, FTP, atd.) a některé další části základních síťových funkcí, včetně DNS, autentizace, připojování k proxy a cache.</p>

<p>API je také používáno v Mozille a je využitelné i k napsání jiných síťových klientů. Více informací o Necko - síťových knihovnách na <tt><a href="http://www.mozilla.org/projects/netlib/">http://www.mozilla.org/projects/netlib/</a></tt>.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="imagelib">Co je Imagelib?</a></h3>

<p>Knihovna pro zobrazování obrázků (Imagelib) umí dekódovat nejrůznější formáty obrázků, které tak mohou být zobrazeny v Mozille. Je <strong>zcela modulární</strong> a standardizovaná. Zahrnuje podporu pro populární formáty obrázků jako JPEG, PNG, GIF a PPM (přenositelná bodová mapa [Portable Pixel Map]).</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="javascript">Co je JavaScript (ECMAScript), tato velmi důležitá část nástrojů Mozilla?</a></h3>

<p><a href="http://www.slunecnice.cz/product/JavaScript/">JavaScript</a> je široce používaný skriptovací jazyk původně vyvinutý Netscape; ten byl nyní standardizován <a href="http://www.ecma.ch/ecma1/STAND/ECMA-262.HTM" title="Informace o JavaScriptovém standardu ECMA.">ECMA-262 committee</a> jako <a href="http://www.slunecnice.cz/product/ECMAScript/">ECMAScript.</a> Je vhodný ne jen pro webové stránky, ale také pro serverové aplikace.</p>

<p>Mozilla nabízí dvě implementace JavaScriptu: původní a nejrozšířenější implementace je napsána v C a je součástí prohlížeče Mozilla, zatímco druhá implementace je napsána v Javě. Informace o implementacích, standardech, testování, tutoriálech a diskusních skupinách je možné nalézt na <tt><a href="http://www.mozilla.org/js/">http://www.mozilla.org/js/</a></tt>.</p>

<p>Pokud se podíváme více na nástroje Mozilly, je tu nástroj pro <strong>ladění JavaScriptu</strong> - Venkman, který nabízí velmi silné <b>ladící prostředí</b> pro JavaScript pro prohlížeče založené na Mozille (nepočítejme v to však prohlížeče využívající pouze Gecko).</p>

<p>Tak jak bylo toto prostředí vyvíjeno do dneška, umožňuje vývojářům:</p>

<ul>
<li>nastavovat a mazat přerušení běhu [breakpoints];</li>
<li>krokování po kroku, s přeskokem a odskokem;</li>
<li>vypisovat obsah zásobníkových rámců;</li>
<li>zastavit a trasovat pokud dojde k vyjímce;</li>
<li>zastavit a trasovat pokud dojde k neočekávané chybě;</li>
<li>prohlížet lokální proměnné v jakémkoli rámci;</li>
<li>vyčíslovat vlastnosti objektů, včetně nečíselných vlastností;</li>
<li>prohlížet zbývající JavaScript v kterémkoli rámci;</li>
<li>nastavovat zobrazování obsahu [watches];</li>
<li>profilovat JavaScript (sběr a hlášení informací v době volání);</li>
<li>&#8220;pěkný výstup&#8221; JavaScriptu (&#8220;upravuje&#8221; bílá místa a nové řádky); a</li>
<li>lokalizovat vytvoření [constructor and creation site] cizích objektů;</li>
</ul>

<p>Další informace o prostředí Venkman, včetně <a href="http://www.mozilla.org/projects/venkman/venkman-walkthrough.html">průvodce</a>, můžete nalézt na <tt><a href="http://www.mozilla.org/projects/venkman/">http://www.mozilla.org/projects/venkman/</a></tt>.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="benefits">Jaké jsou hlavní výhody použití nástrojů Mozilly?</a></h3>

<p>Aplikace Mozilla <strong>funguje nezměněna a plně funkční na <i>kterékoli</i> platformě, kterou Mozilla podporuje</strong>.</p>

<p>Mozilla je kompletně otevřený/svobodný software, který nabízí mnoho dalších výhod pro vývojáře. Např. mnoho široce používaných otevřených zdrojových kódů je <a href="http://www.gnu.org/software/reliability.html" title="proč je svobovný software důvšryhodný">mnohem robustnější a bezpečnější</a> než proprietární software.</p>

<p>Pokud zde <b>je</b> chyba, vývojář je schopen prohlédnout kód a případně opravit problém (a nejlépe pak opravu nabídnout ostatním podle hesla: &#8220;co dáš kódu, vždycky se ti vrátí&#8221;).</p>

<p>Mozilla jako celek odstraňuje rozdíly mezi desktopovou aplikací a webovými stránkami, což vede k několika dalším výhodám. Vývojář, který v součastnosti pracuje na desktopových apliacích, s jejich trvající závislostí na elementech jako jsou komponeny, API, objekty, události, metody, nastavení a všelijaká grafická uživatelská rozhraní, najde příjemné programovací prostředí. Stále více aplikací bude využívat technologie založené na dohodnutých standardech a plná síla webového návrhu tak bude přímo dostupná pro obohacení zkušenosti uživatele a aplikace budou přenositelné.</p>

<p>Navíc mnozí designeři webu zjistí, že mohou rozvinout své schopnosti pro vývoj celých aplikací bez potřeby opustit jim dobře známé domácí teritorium.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="developer-tools">Jaké vývojářské nástroje jsou zabudovány v Mozille?</a></h3>

<p>Mozilla obsahuje DOM inspector (pro který je také možné nalézt <a href="http://grayrest.com/moz/evangelism/tutorials/dominspectortutorial.shtml" title="seriál o DOM Inspectoru">tutorial</a>), <a href="http://www.mozilla.org/projects/venkman/" title="Venkman JavaScript debugger">ladící nástroj pro JavaScript</a>, Javu a JavaScriptovou konsoli, a prohlížeč zdrojových kódů se zvýrazněním syntaxe.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="security">Jaké zabezpečení nástroje obsahují?</a></h3>

<p>Bezpečnost Mozilly začíná s <a href="http://www.mozilla.org/projects/security/pki/nss/">NSS</a>, bezpečnostní síťovou knihovnou (Network Security Services) napsanou inženýry z Netscape. Tato knihovna, které předcházela kampaň &#8220;Free the Lizard&#8221; v roce 1998 těží z:</p>

<ul>
<li><b>otevřené inspekce</b>: Bezpečnostní experti se shodují, že obecně <a href="http://www-106.ibm.com/developerworks/linux/library/l-oss.html" title="Bezpečnost vyplívající z otevřeného kódu">lepší bezpečnosti</a> je lépe dosahováno u otevřeného kódu.</li>
<li><b>zkušenosti</b>: Netscape vyvinul bezpečnostní vrstvu SSL - protokol, který je nyní standardem pro kryptování komunikace založené na socketech a pro autentizaci na webu a jako první implementoval dnes široce používanou technologii veřejných klíčů X.509 v3.</li>
</ul>

<p>Na vrchu NSS je položena vrstva <a href="http://www.mozilla.org/projects/security/pki/psm/" title="Informace o PSM">bezpečnostního manageru [Personal Security Manager]</a> (PSM). PSM obstarává všechny kryptografické operace na požádání klienta jako je Mozilla a je přístupný jako komponenta přes ECMAScript (JavaScript).</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>



<h3><a id="contact">Koho mají další zájemci o využití zdrojových kódů Mozilly kontaktovat pro další informace?</a></h3>

<p>OEM zajímající se o využití kódů Mozilly mohou kontaktovat <a href="mailto:%20Mitchell%20Baker%20%3Cmitchell@mozilla.org%3E">Mitchell Baker</a>, prezidentku Mozilla Foundation.</p>

<p style="text-align: right;">[ <a href="index.html#index">Zpět na obsah</a> ]&nbsp;[ <a href="#index">Zpět na začátek</a> ]</p>

<?php
	$page->includeFooter();
?>