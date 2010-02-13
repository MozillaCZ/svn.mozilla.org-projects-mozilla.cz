<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Poznámky k vydání verze 1.4');
	$page->setHeadline('Poznámky k vydání','Verze 1.4 - problémy s lokalizací');
	$page->setKeywords ('mozilla, suite, poznámky k vydání, verze, gecko, prohlížeč, poštovní klient, editor, chatzilla');
	$page->setDescription ('Poznámky k vydání historické verze 1.4');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
<p>V této části <a href="index.php">poznámek k vydání verze Mozilly 1.4</a> naleznete popis problémů souvisejících s lokalizací.</p>

<ul>
	<li><a href="#general">Obecné</a></li>
	<li><a href="#display">Zobrazení</a></li>
	<li><a href="#nav">Prohlížeč a Editor</a></li>
	<li><a href="#mail">Pošta</a></li>
	<li><a href="#printing">Tisk</a></li>
	<li><a href="#java">Java</a></li>
</ul>

<h2 id="general">Obecné</h2>
<p>Mozilla byla navržena tak, aby mohla zobrazovat odlišné jazyky bez nutnosti dodatečného nastavení. Uživatel by měl být schopen prohlížet Internetové stránky, číst a psát e-maily aniž by musel něco komplikovaně nastavovat, pokud jsou dostupné příslušné fonty.</p>

<p>Mozillu lze používat s několika jazykovými balíčky, které změní jazyk používaný v nabídkách a dialozích a změní i s jazykem související Internetové adresy.</p>

<p>Obsah postranního panelu a záložek se nezmění, pokud zvolíte jinou oblast - jsou svázány s profilem. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=87939" title="Sidebar region does not change when non-default region is selected">87939</a>)</p>

<p>Pokud používáte Čínskou, Korejskou nebo Japonskou verzi Windows 9x/ME a Mozilla selže při startu, přečtěte si sekci o <a href="#java">Javě</a> kde jsou popsány možné příčiny.</p>

<p> Na platformách, které podporují názvy souborů v Unicode, je možné za pomoci skriptů vytvářet soubory a adresáře, které obsahují znaky nepatřící do systémového locale. Ostatní operace prohlížeče, které pracují s takovými adresáři nebo soubory nemusí uspět, např. pokud budou ukládat do takového adresáře, nebo otvírat soubor, jehož plný název obsahuje takové znaky. Problému se vyvarujete, pokud budete používat pouze znaky patřící do jazyka vašeho systému. (podrobnosti naleznete u chyb <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=58866" title="Files are not opened, if the path or file name contains some high-ascii or double-byte characters">58866</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=100243" title="Cannot install NS into directory with some double-byte characters name">100243</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=100344" title="Installation failed when creating directory with chars. outside the repertoire of the default system locale">100344</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=100364" title="Some double-byte characters are corrupted in Program Folder input box">100364</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=100396" title="Program Folder name with some double-byte characters is corrupted">100396</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=101573" title="Cannot choose some double-byte chars folder name to create user profile">101573</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=128380" title="Cannot create user profile names in Unicode when using DOS command">128380</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=104305" title="P option doesn't work with non-Native char profile names">104305</a>)
<br />Na Linuxu/Unixu s locale UTF-8 k většině z těchto problémů nedochází.</p>

<h2 id="display">Zobrazení</h2>
<p>Obsah titulku okna je závislý na používané platformě. Na platformách podporujících Unicode (Windows 2000/XP, Unix/Linux s locale UTF-8 a Mac OS X) může být v titulku zobrazen zakýkoliv znak z kódování Unicode, pokud nastavený font takový znak obsahuje. Na zbylých platformách (Windows 9x/ME, Unix/Linux s locale jiným než UTF-8 a Mac OS classic) jsou zobrazeny znaky odpovídající danému locale. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=9449" title="window titlebar does not render non-English [unicode] text properly">9449</a>. Jak obejít tento problém nastavením správce oken - viz chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=150131" title="how to make a WM render chars. outside the char repertoire of the locale  properly in Window title bar">150131</a>)</p>

<p>V Mozille 1.4 se změnil výchozí stav pro <acronym title="numeric alteration">adaptaci číslování</acronym>. <a href="http://unicode.org/glossary/index.html#western_digits" title="Western digits">Západní číslice</a> v Arabských dokumentech nejsou nadále automaticky nahrazovány <a href="http://unicode.org/glossary/index.html#arabic_digits">Arabskými číslicemi</a>. Pokud chcete nahrazování zapnout, napište <kbd>about:config</kbd> do pole adresa a hodnotu <var>bidi.numeral</var> změňte na 1. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=181711" title="A pref to not convert Arabic Numerals to Hindi">181711</a>). Můžete též upravit <tt>user.js</tt> ve vašem profilu textovým editorem podporujícím kódování UTF-8.</p>

<p id="ctl"><strong>Renderování komplexních písem</strong> např. Devanagari, Tamil, Thai a Hangul Jamos je závislé na platformě (toolkitu). (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=140013" title="Incorrect Display of Character Encoding Unicode UTF-8 (Tamil)">140013</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=204286" title="support Devanagari rendering with existing hindi shaper on Xft build">204286</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=204039" title="write a converter for Tamil rendering with TSCII-encoded TTFs">204039</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=203052" title="write a simple wrapper over tis620-2 converter to use with Xft build for Thai shaping">203052</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=176315" title="need to have converters for rendering Old Korean text with Un series fonts">176315</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=177877" title="extending non-Unicode (custome-encoding) TTF support for multibyte converters">177877</a>)</p>

<ul>
	<li>Na Windows 2000/XP Devanagari, Tamil, Thai a pravděpodobě další písma jižní a jihovýchodní Ásie stejně jako Hangul Jamos jsou dobře renderována při použití API operačního sytému jakmile aktivujete podporu těchto písem. Všechny verze Windows 2000/XP obsahují tuto podporu a fonty pro tato písma bez ohledu na jazykovou verzi Windows.</li>
	<li>Na Windows 9x/ME je Thai renderován dobře jen v Thai jazykové verzi Windows. Renderování Tamil a Hangul Jamo je naopak podporováno všemi jazykovými verzemi Windows 9x/ME. Devanagari a další Indická písma (kromě Tamil) nejsou ale správně renderována. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=166520" title="Rendering of Devanagari (Hindi) charachters in Mozilla on Windows 98 Operating system on Mozilla 1.1b">166520</a>).</li>
	<li>Mozilla pro Linux/Unix renderuje Devanagari a Thai dobře pokud máte potřebné fonty a povolen CTL (Complex Text Layout). Ve standardních verzích to ale povoleno není. Povolení umožní Mozille renderovat Devanagari též na Windows 9x/ME. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=201746" title="RFE: Enable Complex Text Layout in the default build">201746</a>)</li>
	<li>Pro renderování komplexních písem budete potřebovat následující fonty:
	<ul>
		<li>Devanagari (Linux/Unix): font v sun.unicode.india-0 (truetype a BDF) dostupný na <a href="http://developer.sun.com/techtopics/global/index.html">developer.sun.com</a> a také obsažený v Solarisu 9.</li>
		<li>Korean Hangul Jamos (Linux/Unix a Windows): <a href="http://chem.skku.ac.kr/%7Ewkpark/project/font/GSUB/UnbatangOdal">UnBatang font</a>.</li>
		<li>Tamil (Linux/Unix a Windows):  TSCII (truetype) fonty dostupné na <a href="http://www.tamil.net/tscii">Tamil.net</a>. Více instrukce v chybě <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=204039" title="write a converter for Tamil rendering with TSCII-encoded TTFs">204039</a>.</li>
		<li>Thai (Linux/Unix): BDF fonty v <a href="http://linux.thai.net/%7Ethep/thaisupp/">tis620-2</a> kódování a truetype fonty používané v Thai jazykové verzi Windows jsou dostupné na Internetu a dodávané s většinou distribucí Linuxu. Více viz <a href="http://linux.thai.net/%7ethep/thaisupp/">linux.thai.net</a>.</li>
	</ul>
	</li>

	<li>Na Mac OS X se komplexní písma v současné době nerenderují správně. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=205476" title="Devanagari (Hindi) script support">205476</a>)</li>
	<li>ZWJ/ZWNJ v současné době nefunguje správně. O tomto a dalších problémech s renderováním Devanagari (a Indického písma) viz chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=202352" title="ZWJ, ZWNJ with devanagari characters does not display correct glyphs">202352</a>.</li>
	<li>Mozilla-Xft build nyní nerenderuje komplexní písma správně. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=176290" title="enabling custom font encoding support in Xft-enabled Mozilla (mathml on xft)">176290</a>) To bylo napraveno v buildech 1.5.</li>
	<li>Pohyb kurzoru a označování/zvýrazňování zatím nefunguje správně. Ke smazání či pohybu je třeba více stisků kláves než normálně, protože pracuje na bázi Unicode znaků místo <a href="http://www.unicode.org/reports/tr29">graphemes</a>. Ze stejného důvodu hranice označeného/zvýrazěného textu mohou končit mezi Unicode znaky vytvářející grapheme.</li>
</ul>

<p>Výběr fontu je závislý na hodnotě <code>lang</code> (HTML) nebo <code>xml:lang</code> (XML) dokumentu. Zatím nelze nastavit jazyk Unicode documentů bez specifikovaného jazyka. Je nutné použít volbu <tt>"Zobrazit | Nastavit jazyk"</tt>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=121193" title="Need a way to let user specify language for unicode encoded webpages.">121193</a>) I v případě, že tato vlastnost bude implementována, jsou autoři HTML a XML dokumentů důrazně nabádáni, aby jazyk dokumentu explicitně specifikovali.</p>
<p><code>Content-Language</code> HTTP hlavičky není používán. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=122779" title="Use fonts according to Content-Language/lang attribute in Unicode page">122779</a>)</p>

<p>Nerozpoznané jazykové značky jsou považovány za x-western (Latin). Na některých platformách jsou předvolby pro Unicode ignorovány a předvolby pro dané locale jsou použity v Unicode dokumentech bez označení jazyka. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=91190" title="Locale font is used for Unicode, UI font pref is ignored.">91190</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=204586" title="unrecognized lang tag should be regarded as x-unicode instead of x-western">204586</a>,<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=206123" title="need a way to specify script-specific fonts for many other scripts">206123</a>)</p>

<p>Algoritmus pro zalamování řádek není založen na <a href="http://www.unicode.org/reports/tr14"><acronym title="Unicode Technical Report">UTR</acronym> 14 (Line breaking)</a>, ale na JIS X <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=4051" title="[PP]Increasing allocated memory to &gt;35 MB crashes on launch">4051</a>. Ten není jazykově závislý kromě <abbr title="Chinese, Japanese, and Korean">CJK</abbr> a Thai (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=206152" title="[meta] line breaking bugs">206152</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=203016" title="make line/word breaker lang-dependent">203016</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=164759" title="Line wrapping issues with some punctuations">164759</a>)</p>

<p>Neviditelné znaky je nutno renderovat neviditelně i v případě, že fonty na daném systému pro ně obsahují znaky. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=205387" title="need to exclude truly invisible default_ignorable_code_point's from draw_string">205387</a>)</p>


<h2 id="nav">Prohlížeč a Editor (Navigátor a Composer)</h2>
<p>Mozilla nepodporuje dynamické fonty. (Poznámka: Tyto fonty byly podporovány v Communicatoru 4.x)</p>

<p>Automatické rozpoznávání znakové sady Universal (všechno) může být neschopné detekovat kódování na některých stránkách, které neobsahují informace o použitém kódování. V takovém případě zvolte autodetekční modul s nižším rozsahem detekce, např. Zjednodušená Čínština.</p>

<p>U Windows 2000, <acronym title="Input Method Editor">IME</acronym>, většina nových japonských <acronym title="Input Method Editor">IME</acronym> vlastnosti (např. rekonverze), ale některé vlastnosti nemusí fungovat správně. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=18680" title="[IME 2000] Modifying characters in conversion mode does not work.">18680</a>)</p>

<p>Pokud otevřete soubor v adresáři, jehož název obsahuje více-bytové znaky, absolutní název souboru v titulku Editoru bude obsahovat escapované znaky. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=136221" title="In composer window title, url-unsafe characters(non-ASCII) are URL-escaped in the encoding of locale charset.">136221</a>)</p>

<p>V okně bez nabídky a lišty není možné změnit kódování znaků. Podobně to není možné u (právě vybraných) rámů. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=63054" title="Character Coding menu should affect currently focussed frame">63054</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=70830" title="Can't change page encoding in the windows without menu &amp; toolbar">70830</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=98395" title="Need the separate character coding menu in the different frame">98395</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=26353" title="Can't turn chrome back on in chromeless window">26353</a>)</p>

<p>Postranní lišta "Hledání" pracuje dobře se všemi jazyky bez ohledu na aktuální locale. Ale vinou problému serveru pro klíčová slova hledání klíčových slov s ne-ASCII znaky v adresním řádku pro většinu jazyků nefunguje. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=119825" title="URL (location) bar Search Feature ignores national encoding (google)">119825</a>)</p>

<p>Názvy souborů s ne-ASCII znaky ve "Správci stahování souborů" jsou renderovány nesmyslně a nemohou být označeny, odstraněny ani spuštěny. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=208903" title="download manager doesn't work with non-ASCII file names.">208903</a>) Opraveno ve verzi 1.5.</p>

<p>"Uložit jako" a "Uložit obrázek jako" nefungují u souborů s ne-ASCII znaky. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=162765" title="RFC2231 filename support for nsExternalAppHandler">162765</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=158006" title="save as, save link target as, save image as : non-ASCII filename/title/URL handling">158006</a>) Opraveno ve verzi 1.5.</p>

<p>Pokud je webová stránka uložena s volbou "Webová stránka, kompletní", obrázky s ne-ASCII znaky v názvu nejsou uloženy. Podobně není možné otevřít obrázek s ne-ASCII znaky v názvu volbou "Zobrazit obrázek" v kontextové nabídce - vyskytne se chyba 'soubor nenalezen'. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=205682" title="Save page as (complete) : URLs referred to are turned to/sent back in UTF-8">205682</a>)</p>

<p>Samostatné obrázky a dokumenty (např. PDF či Flash) s ne-ASCII znaky v názvu mohou být uloženy pod původním názvem. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=198598" title="standalone image/plugin: title/save/save as handling (inc. non-ASCII cases)">198598</a>) Zatím to nefunguje pokud jsou otevřeny v novém panelu či okně. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=199237" title="non-textual docs(image/media) opened in a new win/tab have url-escaped names in title/tab">199237</a>)</p>

<p>V Editoru nefunguje ukládání v Korejském (ISO-2022-KR) a Hebrejském (ISO-8859-8) kódování. Ta nejsou používána pro tvorbu dokumentů a zpráv. Tyto položky by měly být odstraněny z nabídky 'Uložit v kódování ...'. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=132070" title="Fail to save an existing Doc erases the data">132070</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=133615" title="Need to remove &quot;ISO-2022-KR&quot; from SaveAs dlgbox">133615</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=152151" title="Remove Hebrew Visual from the Save As Charset menu">152151</a>)</p>


<p><strong>Linux: </strong>Volby tučně a kurzíva nemusí fungovat u ASCII znaků, pokud editujete <abbr title="Chinese, Japanese, and Korean">CJK</abbr> stránky. To nastává nejčastěji na <abbr title="Chinese, Japanese, and Korean">CJK</abbr> locales bez dobrých ASCII fontů. Např. pokud používáte open-source <abbr title="Chinese, Japanese, and Korean">CJK</abbr> locale podporující soubory. Komerční distribuce Linuxu, zejména novější, obsahují lepší <abbr title="Chinese, Japanese, and Korean">CJK</abbr> fonty a k tomuto problému dochází jen zřídka. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=91145" title="bold and italics do not work on ASCII strings when editing a CJK page">91145</a>)</p>

<p>Na RedHat Linuxu 8 uživatelé nemusí být schopni vkládat Japonské znaky s výchozím Kinput2 <acronym title="X Input Method">XIM</acronym> serverem bez obtížností pokud používají výchozí "on-the-spot" vkládací styl. To je způsobeno známou chybou správce oken Metacity v RedHat 8. RedHat 9 používa novější verzi Metacity, kde je tento problém odstraněn. Řešení: upgradujte Metacity nebo používejte "over-the-spot" vkládací styl. (Více viz chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=210134" title="JA-IME: can not commit the non-first candidate un-commit character by hit enter on linux RH8.0">210134</a>.)</p>

<p>Uživatelé používajíci on-the-spot" <acronym title="X Input Method">XIM</acronym> vkládací styl s Kinput2 mohou zaznamenat pády aplikace při vkládání jednobytového znaku za jiným znakem kódování Latin. Řešení 1) vkládat jednobytové znaky před aktivací Kinput2 2) vkládat Japonské znaky před vložením jednobytových znaků, nebo 3) nastavit <acronym title="X Input Method">XIM</acronym>  vkládací styl na "over-the-spot". (Více viz chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=208095" title="Crash when I input space with kinput [@ nsEditor::InsertTextIntoTextNodeImpl]">208095</a>.)</p>

<p>Mozilla spadne při <abbr title="Chinese, Japanese and Korean">CJK</abbr> UTF-8 locale pokud je jeden z <abbr title="Chinese, Japanese, and Korean">CJK</abbr> <acronym title="X Input Method">XIM</acronym> použit - chyba XFree86 až do verze 4.2.0. Řešení: používat over-the-spot vkládací styl místo on-the-spot. XFree86 4.2.0 a novější již nemají tyto problémy. (Více viz chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=128875" title="Mozilla crashes when invoking IME in UTF-8 locale">128875</a>.)</p>

<p><strong>Mac OS:</strong> Informace v non-ASCII non-Latin 1 uložené v konfiguraci Internetu se nezobrazí správně v automaticky vyplňovaných polích jako je třeba pole "Vaše jméno" v dialogovém okně 'Nastavení poštovního účtu'. Pokud k tomu dojde, opravte ručně automaticky doplněné položky. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=5721" title="Need more Mac Internet Config support">5721</a>)</p>


<h2 id="mail">Pošta</h2>
<p>Filtrování pomocí slov v těle dopisu není dosud implementováno.</p>
<p>Nabídka 'Znaková sada' nemůže správně zobrazit hlavičky bez MIME informace o kódování v okně se seznamem poštovních zpráv (viz <a href="http://www.faqs.org/rfcs/rfc2047">RFC 2047</a>). Pokud zobrazovaná zpráva neobsahuje informaci MIME o použitém kódování, okno se seznamem poštovních zpráv zobrazí zprávu v kódování nastaveném ve vlastnostech složky pomocí nabídky <span class="mozmenu">"Úpravy -&gt; Vlastnosti složky..."</span>). Pokud nastavíte toto kódování na kódování, které se v poště vyskytuje nejčastěji, vyhnete se obvykle tomuto problému.</p>

<p>Ne-ASCII názvy poštovních příloh nejsou zakódovány v souladu s <a href="http://www.faqs.org/rfcs/rfc2231">RFC 2231</a> (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=193439" title="RFC 2231 style encoding should be used for filename parameter of attachment (instead of RFC 2047 style)">193439</a>).</p>

<p>Pokud je obrázek otevřen volbou "Poslat Obrázek" kontextové nabídky, ne-Latin 1 názvy nejsou správně zakódovány. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=206252" title="images with non-iso-8859-1 filename attached via 'send image' are always treated at ISO-8859-1">206252</a>)</p>

<h2 id="printing">Tisk</h2>
<p><strong>Windows:</strong> Nelze tisknout Japonské znaky na Win98-J s ovladači HP LaserJet (japonských verzí). Řešení: Nainstalujte ovladač, který se nachází na instalačním CD japonských Windows98. Nebo ve vlastnostech tiskárny v panelu "Podrobnosti" nastavte "print directly to printer". (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=86989" title="Unable to print out Japanese characters from Win98-J with HP Laser Jet driver (Japanese version)">86989</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=130083" title="unable to print on Win 98/ME with default spool setting">130083</a>)</p>

<p><strong>Windows:</strong> Pokud máte WinME-Ja, je možné, že nebudete moci tisknout na HP LaserJet 5Si/5Si MX s ovladačem HP LaserJet 5Si/5Si MX PS. V takovém případě zkuste vyměnit ovladač za HP LaserJet 5Si/MX. Nebo ve vlastnostech tiskárny v panelu "Podrobnosti" nastavte "print directly to printer". (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=86989" title="Unable to print out Japanese characters from Win98-J with HP Laser Jet driver (Japanese version)">86989</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=130083" title="unable to print on Win 98/ME with default spool setting">130083</a>)</p>

<p><strong>Linux/Unix:</strong> Používají se dvě odlišné tiskové metody: <a href="#postscript">PostScript</a> a <a href="#xprint">Xprint</a>:</p>

<dl>
<dt id="postscript"><strong>PostScript</strong></dt>
<dd>Metoda přímeho PostScriptu nabízí:

	<dl><dt id="postscript_normal">Normální mód</dt>
	<dd><em>(Vyžaduje tiskárnu PostScript Level 2 a/nebo <a href="http://www.cs.wisc.edu/%7Eghost">Ghostscript</a>)</em><br />
	Pro používání PostScriptového modulu s non-Latin 1 jazyky musíte nastavit <var>print.postscript.nativefont.x-cyrillic</var> na Cyrillic PostScriptový font na vašem systému (Kde <var>x-cyrillic</var> znamená Cyrillic. Pro jiná písma použijte příslušnou jazykovou skupinu. Např. <var>zh-CN</var> je pro zjedndušenou čínštinu a <var>el</var> pro řečtinu.) buď zapsáním <kbd>about:config</kbd> do adresního řádku nebo úpravou <tt>user.js</tt>. Pro <abbr title="Chinese, Japanese and Korean">CJK</abbr> může být též nutné nastavit <var>print.postscript.nativecode.ja</var> (nebo zh-TW, zh-CN a ko) na kódování znaků používané vaším PostScriptovým (composite nebo CID-keyed) fontem. (EUC-JP, EUC-KR, Big5, gb18030, UTF-8). Protože může být nastaven pouze jeden font  pro každý jazyk, jsou nastavení různých rodin písma, tloušťky a stylu v tiskovém výstupu ztraceny.<br />
	Poznamenejme, že používání <var>print.postscript.nativefont.*</var> předpokládá, že uvedené fonty ovládá tiskárna nebo jsou stažitelné/vložitelné externím filtrem např. <a href="http://www.cs.wisc.edu/%7Eghost">Ghostscriptem</a> či <a href="http://ttt.esperanto.org.uy/programoj/angle/wprint.html">WPrintem</a>.</dd>

	<dt id="postscript_freetype2">FreeType2 mód</dt>
	<dd><em>(Vyžaduje tiskárnu s PostScript Level 3 a/nebo <a href="http://www.cs.wisc.edu/%7Eghost">Ghostscript</a> + <a href="http://www.freetype.org/">FreeType2</a> sdílenou knihovnu a non-Xft build Mozilly)</em><br />
	Obvyklé Linuxové binárky jsou zkompilovány s podporou freetype2. To výrazně zlepší tisk dokumentů s ne-Latin-1 znaky (Cyrillic, Greek, <abbr title="Chinese, Japanese, and Korean">CJK</abbr>). Navíc rodiny a styly fontů v tiskovém výstupu jsou více podobné tomu, co vidíte na obrazovce než tomu co je v normálním módu. Více viz stránka projektu <a href="http://www.mozilla.org/projects/fonts/unix/enabling_truetype.html">Mozilla freetype</a>. (Chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=144668" title="Code Mozilla TrueType Printing Code">144668</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=144669" title="Code subsetted PostScript Font Code">144669</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=185935" title="improve Type8 subset management">185935</a>).<br />
	Poznamenejme, že PostScriptové soubory generované v tomto módu musí být filtrovány <a href="http://www.cs.wisc.edu/%7Eghost">Ghostscriptem</a> i v případě, že máte  <acronym title="PostScript">PS</acronym> tiskárnu. Pokud používáte Linux distribuci nedávného data, není zde nutno mnoho, pokud vůbec něco, řešit, ale na jiných Unixech, můžete shledat užitečnými <a href="http://www.cups.org/">www.cups.org</a> a <a href="http://www.linuxprinting.org/">www.linuxprinting.org</a>. Poznamenejme ještě, že freetype2 nefunguje v Xft-buildech. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=190031" title="use xft for font lookups with new postscript/freetype code">190031</a>)</dd>
	</dl>
</dd>

<dt id="xprint"><strong>Xprint</strong></dt>
<dd><em>(Vyžaduje Xprint server)</em><br />
Dostupné binárky pro Unix/Linux obsahují alternativní tiskový modul <em>Xprint</em> s podporou <a title="Common Unix Printing System" href="http://www.cups.org/">CUPS</a>, <a href="http://www.lprng.com/">LPRng</a>, <a title="Mathematical Markup Language" href="http://www.mozilla.org/projects/mathml/">MathML</a>, TrueType fonty a PostScriptem/<acronym title="Adobe Portable Document Format">PDF</acronym>/<acronym title="Printer Control Language">PCL</acronym>.<br /> Více informací naleznete na <a href="http://xprint.mozdev.org/">xprint.mozdev.org</a>, velmi detailní návod naleznete na stránce projektu <a href="http://www.mozilla.org/projects/xprint/">Xprint</a>.</dd>
</dl>

<h2 id="java">Java</h2>
<p> Byly oznámeny případy o problémech uživatelů japonské verze Windows 9<span class="variable">x</span>/ME se startem Mozilly, pokud měli instalovánu starší verzi JDK nebo JRE. Verze JRE 130_02 (nebo novější), kterou si uživatelé Mozilly mohou stáhnout z ftp serveru firmy Netscape, obsahuje mnoho opravených chyb oproti oficiální verzi JRE 1.3. Pokud používáte strarší verzi JRE 1.3 nebo americkou verzi JRE 1.3 s Japonskými/Čínskými/Korejskými Windows, může vás postihnout tento problém a Mozilla se nespustí.</p>
<p>Zda je problém se spouštěním Mozilly způsoben instalací Javy poznáte, pokud provedete následující kroky:</p>
<ol>
  <li>Otevřte si adresář pluginů Mozilly (nachází se ve stejném adresáři jako Mozilla).</li>
  <li>Odstraňte soubory Javy z tohoto adresáře, tzn. všechny soubory začínající "npjava...". Odstraňte rovněž soubor NPOJI610.dll, pokud se v tomto adresáři vyskytuje. Tyto soubory zálohujte, abyste je v budoucnu mohli opět vrátit.</li>
  <li>Restartujte Mozillu. Pokud se nyní Mozilla spustí, pak se jednalo o problém s Javou.</li>
</ol>
<p> Pokud máte výše popsaný problém s Javou nebo si přejete instalovat updatovanou verzi JRE 130_02 (nebo novější), kterou můžete získat z ftp serveru firmy Netscape, postupujte dle následujících kroků (Poznámka: Tento problém nebyl dosud oznámen u Windows NT4/2000, ale pokud se vyskytne i na těchto platformách, postupujte podle stejného návodu):</p>

<ol>
	<li>Klikněte na tlačítko Start, zvolte Nastavení a Ovládací panely.</li>
	<li>Dvojklikněte na ikonu 'Přidat nebo odebrat programy' a vyberte záložku 'Instalovat či odinstalovat'.</li>
	<li>Najděte starou instalaci JRE (Java Runtime Environment) a odstraňte ji.</li>
	<li>Po odstranění staré instalace JRE spusťte Mozillu a zobrazte si jakoukoliv stránku, která pro své zobrazení vyžaduje Javu. Uvidíte plug-in ikonu, která vás vybízí, abyste na ni klikli a stáhli si Java Plugin (zásuvný modul).</li>
	<li>Po kliknutí na ikonu 'Získat Java Plugin' budete přemístěni na stránku firmy Netscape určené pro stažení zásuvných modulů (pluginů) pro Mozillu.</li>
	<li>Stáhněte "Mezinárodní" verzi, pokud chcete zobrazovat znaky neobsažené v základním kódování (to se týká i českých uživatelů!).</li>
	<li>Nechte se vést instrukcemi instalačního programu a dokončete instalaci Javy 2.</li>
</ol>

<p><small>Tento dokument je překladem <a href="http://www.mozilla.org/releases/mozilla1.4/known-issues-int.html" title="Originální dokument">dokumentu</a> z <a href="http://www.mozilla.org/" title="Web neziskové organizace Mozilla Foundation">mozilla.org</a>. Copyright &copy; 1998-2003 The Mozilla Organization</small></p>

<?php
	$page->includeTemplate('footer');
?>
