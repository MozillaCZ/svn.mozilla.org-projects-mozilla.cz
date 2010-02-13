<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Poznámky k vydání verze 1.3b');
	$page->setHeadline('Poznámky k vydání','Popis změn a novinek ve verzi 1.3b');
	$page->setKeywords ('mozilla, suite, poznámky k vydání, verze, gecko, prohlížeč, poštovní klient, editor, chatzilla');
	$page->setDescription ('Poznámky k vydání historické verze 1.3b');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>

<p>Tyto <a href="/produkty/suite/poznamky-k-vydani/">poznámky k verzi</a> popisují systémové požadavky, pokyny k instalaci a známé problémy týkající se Mozilly verze 1.3b.</p>

<p><b>Poznámka:</b> Odkazy na jednotlivé chyby (označeny jejich číslem) jsou zde zahrnuty pro získání více informací o daném problému.</p>

<h2>Obsah</h2>
<dl>
	<dd><a href="#new">Co je nového</a></dd>
	<dd><a href="#new-issues">Nové dodatky k tomuto dokumentu</a></dd>
	<dd><a href="#require">Požadavky na systém</a></dd>
	<dd><a href="#compatible">Informace o kompatibilitě</a></dd>
	<dd><a href="#install">Poznámky k instalaci Mozilly</a></dd>
	<dd><a href="#uninstall">Odinstalování Mozilly</a></dd>
	<dd><a href="#files">Vytvořené a používané soubory</a></dd>
	<dd><dl>
		<dt><a href="#problems">Známé problémy</a></dt>
		<dd><a href="#general">Obecné</a></dd>
		<dd><a href="#profiles">Nastavení profilů</a></dd>
		<dd><a href="#browser">Prohlížeč (Navigátor)</a></dd>
		<dd><a href="#mail">Pošta a diskusní skupiny</a></dd>
		<dd><a href="#chatzilla">ChatZilla IRC klient</a></dd>
		<dd><a href="#venkman">Debugger (ladicí program) Javascriptu</a></dd>
		<dd><a href="#composer">Editor (Composer)</a></dd>
		<dd><a href="#psm">Zabezpečení</a></dd>
		<dd><a href="#prefs">Předvolby</a></dd>
		<dd><a href="#quicklaunch">Rychlé spouštění</a></dd>
		<dd><a href="#plugins">Pluginy (zásuvné moduly)</a></dd>
		<dd><a href="#printing">Tisk</a></dd>
		<dd><a href="#java">Java</a></dd>
	</dl></dd>
	<dd><a href="#international">Mezinárodní poznámky k verzi</a></dd>
	<dd><a href="#qfa">Quality Feedback Agent (automatické zasílání zpráv o chybách)</a></dd>
	<dd><a href="#devel">Poznámky pro webové vývojáře</a></dd>
	<dd><a href="#webdev">Jak se můžete zapojit do vývoje Mozilly</a></dd>
	<dd><a href="#otherbuilds">Kde nalézt další verze</a></dd>
</dl>

<h2 id="new">Co je nového v Mozille 1.3b</h2>
<ul>
	<li>Automatická změna velikosti obrázku dovoluje uživateli přepínat mezi původním zobrazením obrázku a zobrazením obrázku zmenšeného na velikost okna prohlížeče. Pokud to chcete vyzkoušet, nahrajte nějaký veliký obrázek do okna prohlížeče nebo zmenšete okno prohlížeče tak, aby se do něj obrázek nevešel. Kliknutím na obrázek se obrázek automaticky zmenší tak, aby se vešel do okna prohlížeče. Opětným kliknutím se zobrazí ve své původní velikosti. Tuto vlastnost můžete vypnout (a opět zapnout) v předvolbách v panelu 'Vzhled'.</li>
	<li>Rozlišování nevyžádaných e-mailů (junk-mail classification) je téměř dokončeno. Uživatelé nyní mohou automaticky přesouvat nevyžádanou poštu do pro ni určené složky.</li>
	<li>Uživatelé nyní mohou dynamicky (bez restartu Mozilly) měnit uživatelský profil. Pokud to chcete vyzkoušet, vyberte v nabídce 'Nástroje' položku 'Přepnout profil...'</li>
	<li>Funkce 'Najít přímo při psaní' (find as you type), dříve známá jako '<span class="HIDETODO">ahead find</span>' má nyní svůj panel v předvolbách. (Rozšířené nastavení -&gt; Navigace pomocí klávesnice)</li>
	<li>Chatzilla má nyní (pokud jste ji instalovali) svůj panel v předvolbách.</li>
	<li>Zobrazení všech dostupných předvoleb Mozilly <tt>about:config</tt> nyní umožňuje předvolby editovat. Pokročilejší uživatelé nyní mohou měnit jakékoliv nastavení bez nutnosti ruční editace souboru <tt>prefs.js</tt>. Upozornění: změnou některých předvoleb můžete poškodit vaši instalaci Mozilly. Všechny změny provádíte na své vlastní riziko.</li>
	<li>Touto verzí Mozilly byl zahájen výzkumný projekt použít <span class="HIDETODO">'machine learning'</span> <!-- samouceni? autouceni? --> pro vylepšení automatického doplňování adresy v prohlížeči. První fáze projektu potřebuje posbírat data od tolika uživatelů Mozilly, kolik jen bude možné. To jediné, co musíte udělat, abyste projektu pomohli, je zapnout sbírání dat v předvolbách, používat tuto verzi Mozilly po dobu několika týdnů, zkomprimovat výsledná data a odeslat je. Více podrobností získáte <a href="http://www.mozilla.org/projects/ml/autocomplete/">na stránce projektu</a>.</li>
</ul>

<h2 id="new-issues">Nové dodatky k tomuto dokumentu</h2>
<p>Zde se nachází dodatky, které byly přidány do tohoto dokumentu po vydání poslední "milníkové" verze Mozilly, samotné chyby však mohly být známy již dříve.</p>
<ul>
	<li>Uživatelé Windows 95, 98 a ME se setkávají s pravidelným zamrzáním programu. To se nestává pod Windows NT, 2K a XP. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=192294">192294</a>)</li>
	<li>Uživatel Mac OS X se může dostat do situace, kdy je okno prohlížeče vyplněno šedou barvou. Obvykle k tomu dochází, když předešlým vybraným prvkem byl <span class="HIDETODO">obrysový grafický prvek</span><!-- outliner widget, jak to prelozit lepe? --> (např. okno historie nebo okno vláken v poště a diskusních skupinách). (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=181293">181293</a>)</li>
	<li>Za některých okolností nepůjde Mozilla spustit s některými uživatelskými profily.
	<ul>
		<li>Pokud jste používali téma vzhledu jiné nežli "Classic" nebo "Modern", tak to může být způsobeno špatným záznamem v souboru <tt>chrome/chrome.rdf</tt> v uživatelském profilu. Zkuste nalézt v souboru <tt>&lt;<a href="#profileloc">adresarprofilu</a>&gt;/chrome/chrome.rdf</tt> řádky podobné těmto:<br />
<tt>
&lt;RDF:Description about="urn:mozilla:package:chatzilla"&gt;<br />
&lt;c:selectedSkin resource="urn:mozilla:skin:modern/1.0:chatzilla"/&gt;<br />
&lt;/RDF:Description&gt;</tt>
<br />Pokud '<tt>selectedSkin</tt>' obsahuje něco jiného než '<tt>...skin:modern/1.0:...</tt>' a Mozilla nelze spustit, upravte tento soubor, pokud Mozilla právě neběží a změňte tuto položku tak, aby obsahovala '<tt>modern/1.0</tt>'.</li>
		<li>Může to být způsobeno "pokažením" souboru pro rychlé spouštění. Zkuste tento soubor smazat, pokud právě Mozilla neběží. Najděte ve svém uživatelském profilu soubor jmenující se na win32 "XUL.mfl", na unixu "XUL.mfasl" a na systému Macintosh "XUL Fastload File". [Jak zjistit, kde je umístěn váš uživatelský adresář v závislosti na operačním systému je <a href="#profileloc">popsáno níže</a> v tomto dokumentu.]</li>
	</ul></li>
</ul>

<h2 id="require">Požadavky na systém</h2>
<h3>Macintosh</h3>
<ul>
	<li>Mac OS X nebo novější</li>
	<li>Procesor PowerPC (doporučujeme 266 MHz nebo rychlejší)</li>
	<li>64 MB RAM</li>
	<li>36 MB volného místa na disku</li>
</ul>

<h3>Windows</h3>
<ul>
	<li>Windows 95, 98 nebo 98SE, Windows ME, Windows NT 4.0, Windows 2000 nebo Windows XP</li>
	<li>Procesor třídy Intel pentium (doporučujeme 233 MHz nebo rychlejší)</li>
	<li>64 MB RAM</li>
	<li>26 MB volného místa na disku</li>
</ul>

<h3>Linux</h3>
<ul>
	<li>Jsou vyžadovány dále uvedené verze knihoven (nebo s nimi kompatibilní): glibc 2.1, XFree86 3.3.x, GTK 1.2.x, Glib 1.2.x, Libstdc++ 2.9.0. Instalace Red Hat Linuxu 6.0, Debianu 2.1 a SuSE 6.2 (nebo novějších) by měly být vyhovující.</li>
	<li>Uživatelé Red Hat Linuxu 6.x, kteří chtějí instalovat Mozillu z RPM, musí mít instalovánu verzi RPM přinejmenším 4.0.2. Zde naleznete <a href="http://www.redhat.com/support/errata/RHEA-2001-016.html">oficiální update</a> firmy Red Hat.</li>
	<li>Procesor třídy Intel pentium (doporučujeme 233 MHz nebo rychlejší)</li>
	<li>64 MB RAM</li>
	<li>26 MB volného místa na disku</li>
</ul>

<h3>OpenVMS</h3>
<ul>
	<li>OpenVMS Alpha V7.1 nebo novější</li>
	<li>DECwindows MOTIF V1.2-4 nebo novější</li>
	<li>Compaq TCP/IP Services verze 5.0 pro OpenVMS a vyšší, MultiNet V4.3A a vyšší nebo TCPware V5.4-3 a vyšší.</li>
	<li>65 MB volného místa na disku</li>
</ul>
<p>Pro více informací si prečtěte <i>Mozilla for OpenVMS Installation Guide and Release Notes</i> na <a href="http://www.openvms.compaq.com/openvms/products/ips/mozilla_relnotes.html">www.openvms.compaq.com</a>.</p>

<h3>Solaris 8</h3>
<ul>
	<li>Pro spuštění Mozilly na Solarisu 8 je nutné instalovat alespoň tyto záplaty 109147-09, 108434-02, a 108435-02 z <a href="http://sunsolve.sun.com/">sunsolve.sun.com</a>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=88205" title="Bug 88205 - build will not start on Solaris 8 04/01">88205</a>)</li>
</ul>

<h3>AIX</h3>
<ul>
	<li>AIX 4.3.3 nebo novější</li>
	<li>Vyžaduje gtk+, glib, libiconv &amp; gettext (kompatibilní verze můžete nalézt na <a href="http://www-1.ibm.com/servers/aix/products/aixos/linux/download.html">serveru IBM</a>)</li>
</ul>

<h3>HP-UX</h3>
<ul>
	<li>Verze Mozilly pro HP-UX vyžaduje gtk+, glib, libiconv &amp; gettext z uvedených adres
	<ul>
		<li>HP-UX 11.20 <a href="http://www.hp.com/workstations/support/software/hpux/">GTK (b6848ba) ze stránek HP pro 11i V 1.6</a></li>
		<li>HP-UX 11.00 (&amp; 11.11) buď <a href="http://www.hp.com/workstations/support/software/hpux/">GTK (b6848ba) ze stránek HP 11.0/11i v 1.0</a> nebo z <a href="http://hpux.connect.org.uk/hppd/hpux/Gtk/Development/gtk+-1.2.10/">The HP-UX Porting centra</a></li>
		<li>HP-UX 10.20 <a href="http://hpux.connect.org.uk/hppd/hpux/Gtk/Development/gtk+-1.2.10/">The HP-UX Porting centrum</a></li>
	</ul></li>
</ul>

<h2 id="compatible">Informace o kompatibilitě</h2>
<p>Pokud používáte McAfee's WebSanX, můžete zažívat pád aplikace při startu. Zkuste vypnout tento program a zkontrolujte, zda se tím řeší váš problém. Pokud ano, kontaktujte McAfree s žádostí o řešení. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=107882" title="Bug 107882 - N622 crash [@ WBHOOK32.DLL ]">107882</a>)</p>
<p>Pokud chcete v Mozille používat MathML, musíte nainstalovat patřičné fonty TeXu. Na adrese <a href="http://www.mozilla.org/projects/mathml/fonts/">http://www.mozilla.org/projects/mathml/fonts/</a> naleznete rady k instalaci těchto fontů. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=134849" title="Bug 134849 - remove Font-Message">134849</a>)</p>

<h3>Windows</h3>
Pokud používáte plug-in Crescendo 5.01, budete jej muset aktualizovat na jeho poslední verzi. Jinak Mozilla může při startu spadnout. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=48110" title="Bug 48110 - Browser crashes on startup in plc4.dll due to Crescendo 5.01">48110</a>)

<h3>Mac OS</h3>
<p>Spustíte-li Mozillu na Mac OS s 'Jazykovým balíčkem' (např. japonským jazykovým balíčkem) a 'Lokalizovaným obsahem', všechny položky menu budou špatně zobrazeny. Abyste tento problém vyřešili, registrujte Mozillu za pomocí Language Register. Například pokud používáte japonský jazykový balíček a japonský lokalizovaný obsah, registrujte Mozillu jako JA aplikaci.</p>

<h3>Linux</h3>
<p>Mozilla vyžaduje glibc 2.1 a vyšší. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=44787" title="Bug 44787 - run-mozilla.sh does not start mozilla">44787</a>)</p>
<p>Pokud používáte Red Hat Linux 6.0, nebudete schopni Mozillu spustit, jestliže máte instalovánu Javu 2. K problému nedochází u Red Hatu 6.1 a vyšších verzí. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=58259" title="Bug 58259 - JRE load failure renders browser unusable for RH 6.0 users">58259</a>)</p>
<p>U Red Hatu 7 musíte mít instalovány standardní C++ knihovny pro kompatibilitu s Red Hatem 6.x. Balíček získáte z instalačního CD Red Hat 7 nebo jej stáhněte z <a href="http://www.redhat.com/swr/i386/compat-libstdc++-6.2-2.9.0.16.i386.html">Red Hat</a>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=59012" title="Bug 59012 - Redhat 7 users must install compat-libstdc++6.2-2.9.0.9">59012</a>)</p>
<p>Ke spuštění Mozilly na SuSE Linuxu 6.2 musíte instalovat libjpeg.so.62 dostupný z <a href="ftp://ftp.uu.net/graphics/jpeg/jpegsrc.v6b.tar.gz">uu.net</a>.</p>

<h3>Solaris</h3>
<p>Abyste mohli instalovat Mozillu na Solaris 8 (64 bit), musíte nejprve instalovat libstdc++. Stáhněte <a href="http://www.sun.com/solaris/netscape">Sun Netscape 6 instalační balíček</a> a instalujte libstdc++ z tohoto balíčku ještě před instalací a spuštěním Mozilly. Dále je nutné instalovat následující záplaty z <a href="http://sunsolve.sun.com">http://sunsolve.sun.com</a> 109147-09, 108434-02 108435-02. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=68604" title="Bug 68604 - Solaris installer should statically link against libstdc++ o">68604</a>)</p>

<h3>IRIX</h3>
<p>Při používání správce oken z twm rodiny bez nastavení DecorateTransients, nebudou fungovat pop-up okna Hledání, Uložit, Předvolby apod. Nastavte předvolbu DecorateTransients do rc souboru vašeho správce oken. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=78928" title="Bug 78928 - twm or no wm: Cannot type into dialog text fields">78928</a>)</p>

<h2 id="install">Poznámky k instalaci Mozilly</h2>
<p>Instalujte do nového prázdného adresáře. Instalace přes předchozí verzi může způsobit problémy.</p>
<p>Uživatelům Windows: Pokud obdržíte zprávu "<tt>uninstall.exe file is linked to missing export shell32.dll</tt>", smažte <tt>%TEMP%\ns_temp</tt>.</p>
<p><strong>Více-uživatelské instalace:</strong> Při instalaci pro více uživatelů na Unixu, postupujte stejně jako při instalaci pro jednoho a vytvořte následující skript v adresáři s nainstalovanou Mozillou, nastavte atributy spouštění <tt>chmod u+x &lt;scriptname&gt;</tt>), a spusťte jej jako root. <b>Nespouštějte tento program jako su[do] root.</b> (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=52653" title="Bug 52653 - regxpcom creates .mozilla in Real User's home">52653</a>)</p>

<pre>#!/bin/sh
dist_bin=`dirname $0`
MOZILLA_FIVE_HOME=$dist_bin
LD_LIBRARY_PATH=$dist_bin
export MOZILLA_FIVE_HOME LD_LIBRARY_PATH
$dist_bin/regxpcom
$dist_bin/regchrome
touch $dist_bin/chrome/user-skins.rdf
touch $dist_bin/chrome/user-locales.rdf
</pre>
<p>Takto instalovanou Mozillu byste měli být shopni spustit jako jakýkoliv uživatel, který k tomu má přístupová práva.</p>
<p>Pokud instalujete jazykové balíčky nebo jiné .xpi soubory, stahování se přeruší <span class="HIDETODO">pokud kliknete na tlačítko <i>Stop</i> prohlížeče.</span><!-- v originalu je until = az dokud uzivatel neklikne na Stop a to je divne --></p>
<p>Pokud obdržíte zprávu 'The program must close to allow a previous installation to complete' při spuštění, znamená to, že úklid po instalaci nebyl dokončen.</p>
<p>Jak na to reagovat:</p>
<ol>
	<li>V mnoha případech pomůže počkat několik vteřin po skončení programu. To umožní dokončit uklízecí činnosti a následně spustit program.</li>
	<li>Někdy se stane, že instalační proces čeká na jiný program, až ten "uvolní" soubor potřebný k úklidovým procesům. Může být nutné ukončit ostatní programy nebo restartovat počítač, aby byla instalace dokončena.</li>
</ol>
<p><strong>Windows:</strong> Důrazně doporučujeme ukončit všechny programy před spuštěním instalačního programu. Také byste měli dočasně vypnout antivirovou ochranu.</p>
<p><strong>Mac OS X:</strong> Mozilla nepůjde spustit, pokud byla instalována na diskový oddíl UFS. Řešením je přesunout adresář s programem na HFS+ diskový oddíl, odkud půjde v pořádku spustit.</p>

<h3>Java</h3>
<p><strong>Windows a Linux:</strong> Pro spouštění Java apletů musíte mít nainstalován plug-in <a href="http://home.netscape.com/plugins/jvm.html">Java Run Time Environment(JRE)</a>.<br />
<i>Windows:</i> Při použití instalační verze by mělo vše rovnou fungovat.</p>
<p>O kompatibilitě verzí Javy se více dočtete v sekci <a href="#java">Java</a>.</p>

<p><strong>Windows:</strong> Pokud používáte verze Mozilly s instalátorem a již máte JRE 1.3.0_01 na vašem systému, Mozilla by to měla automaticky poznat. Pokud jste ručně nastavili zákaz automatického hledání pluginů, tak pro zprovoznění Javy učiňte následující krok. Po instalaci Javy na váš počítač zkopírujte soubor <tt>NPOJI610.dll</tt> z instalačního adresáře (obvykle něco jako <tt>C:\Program Files\JavaSoft\JRE\1.3.0_01\bin</tt>) do adresáře pluginů Mozilly (obvykle <tt>C:\Program Files\Mozilla 1.3b\plugins</tt>).</p>

<p><strong>Linux:</strong> Mozilla z tar.gz verze - po instalaci JRE vytvořte symbolický odkaz na <tt>java2/plugin/i386/ns610/libjava.oji.so</tt> v podadresáři Mozilly <tt>plugins/</tt>.</p>
<p>U RPM verzí pro Linux je nutné instalovat Javu jako uživatel root.</p>

<h3>Zabezpečení</h3>
<p>Odvolané certifikáty používající OCSP se mohou ještě objevit v Manažeru certifikátů s verifikací "True". (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=91530" title="Bug 91530 - Invalid certificate status">91530</a>)</p>
<p><strong>Windows, Mac OS a Linux:</strong> <acronym title ="Personal Security Manager">Osobní manažer zabezpečení</acronym> (PSM) poskytuje zabezpečující (kryptografické) vlastnosti Mozilly.</p>

<h3>Instalace na Windows</h3>
<p>Při instalaci Mozilly ze staženého instalátoru postupujte dle následujících kroků:</p>
<ol>
	<li>Klikněte na link na Mozilla-win32-installer.exe, čímž stáhnete soubor s instalačním programem na váš počítač.</li>
	<li>Nalezněte adresář, do kterého jste nahráli soubor, a dvojklikněte na soubor (je označený ikonou Mozilly). Tím se spustí instalační program.</li>
	<li>Řiďte se instrukcemi instalačního programu na obrazovce. Mozilla bude po skončení instalace automaticky spuštěna.</li>
</ol>

<p>Při instalaci ze staženého .zip souboru (ruční instalace) postupujte dle následujících kroků:</p>
<ol>
	<li>Klikněte na link na soubor mozilla-win32-talkback.zip nebo na link mozilla-win32.zip, čímž stáhnete soubor na váš počítač.</li>
	<li>Najděte adresář, do kterého jste soubor nahráli, a dvojklikněte na něj. Poznámka: Tento krok předpokládá, že máte instalovánu aktuální verzi programu WinZip a umíte s tímto programem zacházet. Pokud ne, program WinZip a informace o tomto programu získáte na <a href="http://www.winzip.com">www.winzip.com</a>.</li>
	<li>Extrahujte soubory z archivu do adresáře např. <tt>C:\Program Files\Mozilla 1.3b</tt> .</li>
	<li>Mozillu spustíte dvojklikem na soubor Mozilla.exe v aresáři, do kterého jste extrahovali soubory z archivu.</li>
</ol>

<h3 id="macinstall">Instalace na Mac OS X</h3>
<p>Při instalování Mozilly ze staženého '<span class="HIDETODO">disk image</span>' doporučujeme postupovat podle následujících kroků:</p>
<ol>
	<li>Klikněte na odkaz na soubor <tt>mozilla-mac-MachO.dmg.gz</tt>, čímž stáhnete tento soubor na váš počítač. Standardně se soubor nahraje na váš desktop.</li>
	<li>Stáhnutý soubor <tt>.dmg.gz</tt> přetáhněte na Stuffit Expander, čímž jej dekomprimujete. Pokud se '<span class="HIDETODO">disk image</span>' nepřipojí automaticky, dvojklikněte pro jeho připojení na soubor <tt>.dmg</tt>. Pokud k připojení přesto nedojde a soubor nevypadá jako '<span class="HIDETODO">disk image</span>', spusťte u tohoto souboru funkci 'Show Info' a v kategorii 'Open with application' vyberte 'Disk Copy'. Na Mac OS 10.2 můžete použít položku 'Open with' kontextové nabídky.</li>
	<li>Jakmile je 'disk image' připojen, otevřete jej a přetáhněte ikonu Mozilly na váš pevný disk.</li>
	<li>Doporučujeme ji zkopírovat do složky aplikací (Application folder).</li>
	<li>Odpojte (eject) disk image.</li>
	<li>Pokud chcete, můžete Mozillu přetáhnout do vašeho '<span class="HIDETODO">docku</span>', abyste ji měli vždy po ruce. Možná budete chtít nastavit Mozillu jako váš výchozí Internetový prohlížeč v panelu 'Internet preferences' (pod položkou Web).</li>
</ol>

<h3 id="linuxinstall">Instalace na Linuxu</h3>
<p>Mozilla musí být alespoň jednou spuštěna, aby dokončila autoregistraci a zapsala soubor <tt>compreg.dat</tt> do instalačního adresáře. Pokud je před tím Mozilla spuštěna jiným uživatelem (než tím, kdo ji instaloval), program je ukončen za současného vytvoření core dump. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=49345" title="Bug 49345 - Document that admins must run product once after installation">49345</a>)</p>
<p><strong>Poznámka:</strong> Pro spouštění Java apletů musíte instalovat plug-in <a href="http://home.netscape.com/plugins/jvm.html">Java Run Time Environment (JRE) v1.3</a>.</p>
<p><strong>Poznámka:</strong> Následující pokyny používají bash shell. Pokud jej nepoužíváte, upravte jednotlivé kroky pro váš shell.</p>
<p>Při instalaci Mozilly prostřednictvím instalačního programu postupujte dle těchto kroků:</p>
<ol>
	<li>Vytvořte adresář mozilla1.3b (<code>mkdir mozilla1.3b</code>) a přemístěte se do tohoto adresáře (<code>cd mozilla1.3b</code>).</li>
	<li>Klikněte na odkaz na soubor s instalátorem (jmenuje se <tt>Mozilla-i686-pc-linux-gnu-installer.tar.gz</tt>) a stáhněte jej do vytvořeného adresáře mozilla1.3b.</li>
	<li>V adresáři mozilla1.3b rozbalte archiv následujícím příkazem: <code> gunzip -dc moz*.tar.gz | tar -xvf -<br /></code> (Ten rozbalí instalátor do podadresáře <tt>mozilla-installer</tt>.)</li>
	<li>Přemístěte se do adresáře mozilla-installer (<code>cd mozilla-installer</code>) a spusťte instalátor příkazem <code>./mozilla-installer</code></li>
	<li>Řiďte se instrukcemi instalačního průvodce.<br />
<strong>Poznámka:</strong> Na pomalejších počítačích počítejte s tím, že instalace nějaký ten čas trvá a ačkoliv se může zdát, že instalace "zamrzla", tak může stále provádět svou instalační činnost.</li>
	<li>Mozillu spustíte z adresáře, do kterého jste ji nainstalovali příkazem <code>./mozilla</code></li>
</ol>

<p>Pokud instalujete Mozillu stažením adrchivu .tar.gz, postupujte dle následujících kroků:</p>
<ol>
	<li>Vytvořte adresář mozilla1.3b (<code>mkdir mozilla1.3b</code>) a přemístěte se do tohoto adresáře (<code>cd mozilla1.3b</code>).</li>
	<li>Klikněte na odkaz na soubor mozilla*.tar.gz, čímž stáhnete tento soubor na váš počítač.</li>
	<li>V Mozilla adresáři (<code>mozilla1.3b</code>) rozbalte soubor následujícím příkazem: <code> gunzip -dc moz*.tar.gz | tar -xvf -</code> (Vytvoříte tím podadresář "mozilla" v adresáři mozilla1.3b.)</li>
	<li>Přemístěte se do adresáře mozilla (<code>cd mozilla</code>).</li>
	<li>Spusťte Mozillu skriptem ./mozilla.</li>
</ol>
<p>Pokud chcete přidat Mozillu do GNOME panelu, postupujte dle následujícího návodu:</p>
<ol>
	<li>Klikněte na tlačítko hlavní nabídky GNOME, otevřete nabídku panelu, otevřete podmenu 'Add to Panel' a vyberte <acronym title="Launcher">Spouštěč</acronym>.</li>
	<li>Klikněte pravým tlačítkem na ikonu Mozilly na panelu a zadejte následující příkaz:<br /><tt><em>directory_name</em>/mozilla</tt>,<br /> přičemž místo directory_name napište jméno adresáře, do kterého jste umístili Mozillu. Např. obvyklý adresář je <tt>/usr/local/mozilla</tt>.</li>
	<li>Napište jméno pro ikonu, pokud chcete, můžete připsat i komentář.</li>
	<li>Klikněte na tlačítko ikona a napište následující cestu:<br />
<!-- mozicon50.xpm was shipped in n7pr1.
     So this note appears to apply to netscape too,
     at least for the time being. -->
	<tt>directory_name/icons/mozicon50.xpm</tt>,<br /> místo <em>directory_name</em> napište adresář, do kterého jste umístili Mozillu. Např. obvyklý adresář je <tt>/usr/local/mozilla/icons/mozicon50.xpm</tt>.</li>
</ol>

<p><strong>Instalace z RPM balíčků:</strong> Balíčky RPM vytváříme tak, aby běhaly na standardních instalacích Red Hat 6.x a Red Hat 7.x. Použití těchto balíčku na SuSE vyžaduje instalaci balíčku <a href="http://rpmfind.net/linux/rpm2html/search.php?query=gdk-pixbuf">gdk-pixbuf</a>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=85218" title="Bug 85218 - mozilla-0.9.1-rpm libgdk_pixbuf.so.2 missing">85218</a>)</p>

<h3 id="palminstall">Instalace <acronym title="address book">database kontaktů</acronym> Palm Sync na Windows</h3>
<p>Pokud chcete synchronizovat data mezi databasí kontaktů Mozilly a vaším Palmem, vyberte <i>Address Book Palm Sync Install</i> (instalovat synchronizaci database kontaktů pro Palm) v skupině Mozilla v nabídce Start/Programy. Pokud nastavíte váš Palm, aby synchronizoval svoji databasi kontaktů s Mozillou, database kontaktů se přestane synchronizovat se systémem Palm Desktop.</p>
<p>Pokud jste toto učinili, můžete připojit váš Palm a stisknout tlačítko HotSync na vašem Palmu. To vyvolá dialog správce HotSync na vašem desktopu a mělo by spustit Mozillu. Po skončení synchronizace ukončete Mozillu, restartujte ji, otevřete databasi kontaktů Mozilly a zkontrolujte proběhlou synchronizaci.</p>
<p>Někteří uživatelé budou muset učinit ještě několik dalších kroků a manuálně přidat klíče do registru.</p>
<ol>
	<li>Stáhněte tento <a href="http://ftp.mozilla.org/pub/mozilla/contrib/palm/AddPalmABSyncRegistryKey.reg">soubor registru</a> na váš harddisk.</li>
	<li>Pokud máte váš program pro obsluhu Palmu nainstalován v jiném adresáři než <tt>C:\Palm</tt>, budete muset soubor registru upravit a zapsat do něj správnou cestu. Zkontrolujte, aby zapsaná cesta byla v uvozovkách a každý oddělovač adresářů (zpětné lomítko) zdvojen (použijte \\ místo \).</li>
	<li>V programu <acronym title="Windows Explorer">Průzkumník</acronym> dvojklikněte na tento soubor. Měla by se objevit zpráva "<acronym title="Information in this file has been successfully entered into the registry">Do registru byla úspěšně uložena informace...</acronym>"</li>
	<li>Pro spuštění synchronizace znovu dvojklikněte na <i>Address Book Palm Sync Install</i> v nabídce Start/Programy.</li>
</ol>

<h2 id="uninstall">Odinstalování Mozilly</h2>
<h3>Linux</h3>
<ul>
	<li>Smažte adresář <tt>mozilla1.3b</tt>, do kterého jste nainstalovali Mozillu</li>
	<li>Smažte adresář <tt>~/.mozilla</tt>, který obsahuje infomace vašeho profilu</li>
</ul>

<h3>Windows</h3>
<ul>
	<li>V "Nastavení/Ovládací panely/Přidat nebo odebrat programy" zvolte "Mozilla 1.3b"</li>
</ul>

<h3>Mac OS X</h3>
<ul>
	<li>Smažte adresář Mozilla z adresáře Library ve vašem domovském adresáři</li>
	<li>Smažte soubor "Mozilla Registry" z <tt>/Users/vaše uživatelské jméno/Library/Preferences</tt></li>
	<li>Smažte soubor "Mozilla Versions" z <tt>/Users/vaše uživatelské jméno/Library/Preferences</tt></li>
	<li>Smažte adresář, do kterého jste nainstalovali Mozillu</li>
</ul>

<h2 id="files">Vytvořené a používané soubory</h2>
<p>Mozilla ukládá data patřící k uživateli do adresáře nazývaného (uživatelský) <a href="#profiles">profil</a>. Profil obsahuje uložené předvolby, složky s poštou, historii prohlížeče, cookies, databasi kontaktů a další důležitá data. Následuje seznam souborů profilu.</p>

<table cellspacing="3" cellpadding="3">
<tbody>
<tr><td></td><td class="deftable-head">Adresáře</td></tr>
<tr><td class="deftable-item">Cache</td><td class="deftable-def">Disková vyrovnávací pamět (obsahuje dočasné soubory z Internetu). Pro získání více informací o aktuálním stavu vyrovnávací paměti zadejte <tt>about:cache</tt> do adresního řádku Mozilly.</td></tr>
<tr><td class="deftable-item">chrome</td><td class="deftable-def">Uživatelem definované styly, uživatelem instalovaná témata vzhledu, uživatelem instalované rozšíření (extensions)</td></tr>
<tr><td class="deftable-item">ImapMail</td><td class="deftable-def">IMAP poštovní zprávy</td></tr>
<tr><td class="deftable-item">Mail</td><td class="deftable-def">Lokální složky a POP3 poštovní zprávy</td></tr>
<tr><td class="deftable-item">News</td><td class="deftable-def">Diskusní skupiny</td></tr>

<tr><td></td><td class="deftable-head">Soubory</td></tr>
<tr><td class="deftable-item"><i>číslo</i>.s</td><td class="deftable-def"><acronym title="Nástroje -&gt; Správce hesel -&gt; Zobrazit uložená hesla">Hesla</acronym></td></tr>
<tr><td class="deftable-item"><i>číslo</i>.w</td><td class="deftable-def"><acronym title="Předvolby -&gt; Soukromí &amp; Zabezpečení -&gt; Formuláře - &gt; Zobrazit uložené položky formuláře">Data pro předvyplňování formulářů</acronym></td></tr>
<tr><td class="deftable-item">.autoreg</td><td class="deftable-def">XPCOM autoregistrační soubor. Říká Mozille, aby při příštím startu zkontrolovala, zda nejsou instalované nové komponenty.</td></tr>
<tr><td class="deftable-item"><div>appreg</div><div>registry.dat</div><div>registry</div></td><td class="deftable-def">Registr Mozilly. Soubory, ve kterých Mozilla ukládá záznamy o vašich profilech.</td></tr>
<tr><td class="deftable-item">abook.map</td><td class="deftable-def"><acronym title="Okno -&gt; Databáze kontaktů -&gt; Osobní databáze kontaktů">Osobní databáze kontaktů</acronym></td></tr>
<tr><td class="deftable-item">bookmarks.html</td><td class="deftable-def"><acronym title="Záložky -&gt; Upravit záložky">Záložky prohlížeče</acronym></td></tr>
<tr><td class="deftable-item">cert7.db</td><td class="deftable-def"><acronym title="Předvolby -&gt; Soukromí &amp; Zabezpečení -&gt; Certifikáty -&gt; Spravovat certifikáty">Database klientských certifikátů</acronym></td></tr>
<tr><td class="deftable-item">compreg.dat</td><td class="deftable-def">XPCOM registr Mozilly. Soubory, ve kterých Mozilla uchovává informaci o svých komponentách.</td></tr>
<tr><td class="deftable-item">cookies.txt</td><td class="deftable-def"><acronym title="Nástroje -&gt; Správce souborů Cookie -&gt; Spravovat uložené Cookie">Cookies</acronym></td></tr>
<tr><td class="deftable-item">cookperm.txt</td><td class="deftable-def"><acronym title="Nástroje -&gt; Správce souborů Cookie -&gt; Spravovat uložené Cookie -&gt; Nastavení webových serverů">Nastavení webových serverů - povolit/odmítnout cookie a obrázky.</acronym></td></tr>
<tr><td class="deftable-item">history.dat</td><td class="deftable-def"><acronym title="Přejít -&gt; Historie">Historie navštívených stránek</acronym></td></tr>
<tr><td class="deftable-item">history.mab</td><td class="deftable-def"><acronym title="Okno -&gt; Databáze kontaktů -&gt; Posbírané adresy">Databáze posbíraných adres</acronym></td></tr>
<tr><td class="deftable-item">key3.db</td><td class="deftable-def"><acronym title="Předvolby -&gt; Soukromí &amp; Zabezpečení -&gt; Certifikáty -&gt; Spravovat certifikáty">Databáze certifikátů</acronym></td></tr>
<tr><td class="deftable-item">localstore.rdf</td><td class="deftable-def">Obsahuje výchozí nastavení oken. Ukládají se do něj "stálá" (persistent) nastavení (nastavení, která nejsou zapomenuta po ukončení programu), např. informace o zobrazených lištách, poloha a velikost oken aj.</td></tr>
<tr><td class="deftable-item">mimeTypes.rdf</td><td class="deftable-def"><acronym title="Předvolby -&gt; Prohlížeč -&gt; Pomocné aplikace">Obsahuje známé MIME typy pro pomocné aplikace.</acronym></td></tr>
<tr><td class="deftable-item">panacea.dat</td><td class="deftable-def">Vyrovnávací paměť poštovních složek. Souhrn vybraných polí z celé databáze pošty a diskusních skupin, nejčastěji používaných při zobrazování složek.</td></tr>
<tr><td class="deftable-item">panels.rdf</td><td class="deftable-def">Informace o panelech zobrazovaných v postranní liště.</td></tr>
<tr><td class="deftable-item">prefs.js</td><td class="deftable-def">Předvolby uživatele. Zobrazí se po zadání <tt>about:config</tt> do adresního řádku prohlížeče.</td></tr>
<tr><td class="deftable-item">pluginreg.dat</td><td class="deftable-def">Všechny registrované pluginy. Pro více informací zadejte <tt>about:plugins</tt> do adresního řádku prohlížeče.</td></tr>
<tr><td class="deftable-item">search.rdf</td><td class="deftable-def">Informace o vyhledávacích pluginech v postranním panelu.</td></tr>
<tr><td class="deftable-item">secmod.db</td><td class="deftable-def"><acronym title="Předvolby -&gt; Soukromí &amp; Zabezpečení -&gt; Certifikáty -&gt; Spravovat bezpečnostní zařízení">Databáze bezpečnostních modulů.</acronym></td></tr>
<tr><td class="deftable-item">URL.tbl</td><td class="deftable-def"><acronym title="Okno -&gt; Správce fomulářů -&gt; Správa formulářů -&gt; Neuložené formuláře">Webové adresy, ze kterých se nebudou data z formulářů ukládat</acronym></td></tr>
<tr><td class="deftable-item">user.js</td><td class="deftable-def">Předvolby uživatele, které budou zapsány do prefs.js při příštím startu Mozilly</td></tr>
<tr><td class="deftable-item">xpti.dat</td><td class="deftable-def">informační katalog XPCOM typelib</td></tr>
<tr><td class="deftable-item"><div>XUL.mfl</div><div>XUL FastLoad File</div><div>XUL.mfasl</div></td><td class="deftable-def">Soubor rychlého spouštění XUL. Obsahuje předkompilované chrome a soubory s JavaScriptem.</td></tr>
<tr><td class="deftable-item"><div>Invalid.mfasl</div><div>Aborted.mfasl</div></td><td class="deftable-def">Čas od času Mozilla zruší váš soubor rychlého spouštění XUL. Výsledkem jsou tyto soubory. Můžete je smazat, pokud je nechcete použít k ladění.</td></tr>
<tr><td class="deftable-item">mozver.dat</td><td class="deftable-def">(Windows) Pro uložení verze komponent</td></tr>
<tr><td class="deftable-item">MozillaUninstall.exe</td><td class="deftable-def">(Windows) Odinstalátor Mozilly</td></tr>


<tr><td></td><td class="deftable-head">Další soubory</td></tr>
<tr><td class="deftable-item">*.msf</td><td class="deftable-def">Souhrn pošty. Obsahují souhrny poštovních složek. Nacházejí se v adresářích ImapMail a Mail.</td></tr>
<tr><td class="deftable-item">rules.dat</td><td class="deftable-def"><acronym title="Nástroje -&gt; Poštovní filtry">Obsahuje filtry pošty pro daný server. Nachází se v adresářích ImapMail a Mail.</acronym></td></tr>
<tr><td class="deftable-item">*.rc</td><td class="deftable-def">Obsahuje seznam diskusních skupin z daného serveru, do kterých je uživatel přihlášen. Nachází se v adresáři News.</td></tr>
<tr><td class="deftable-item">hostinfo.dat</td><td class="deftable-def">Obsahuje seznam všech diskusních skupin z daného serveru. Nachází se v adresáři News.</td></tr>
</tbody>
</table>

<h2 id="profileloc">Umístění profilu</h2>
<table cellspacing="3" cellpadding="3">
<tbody>
<tr><td class="deftable-item">Windows</td><td class="deftable-def">%USERPROFILE%\Application Data\Mozilla\Profiles\[Název profilu]\[náhodný řetězec].slt\</td></tr>
<tr><td class="deftable-item">Windows 2000</td><td class="deftable-def">C:\Documents and Settings\[Název účtu Windows]\Application Data\Mozilla\Profiles\[Název profilu]\[náhodný řetězec].slt\</td></tr>
<tr><td class="deftable-item">Windows 95 &amp; Windows 98</td><td class="deftable-def">C:\Windows\Application Data\Mozilla\Profiles\[Název profilu]\[náhodný řetězec].slt\</td></tr>
<tr><td class="deftable-item">Mac OS X</td><td class="deftable-def">~/Library/Mozilla/Profiles/[Název profilu]/[náhodný řetězec].slt/</td></tr>
<tr><td class="deftable-item">Linux</td><td class="deftable-def">~/.mozilla/[Název profilu]/[náhodný řetězec].slt/</td></tr>
</tbody>
</table>

<h2 id="problems">Známé problémy</h2>
<h3 id="general">Obecné</h3>
<p><strong>Mac OS a Windows:</strong> Používání ATI video ovladačů vede k náhodným spadnutím programu na mnoha web serverech. Týká se to Mac OS ATI ovladačů všech verzí a Windows ATI ovladačů verze 5.13.1.6118. (Mac OS) Řešení: nastavte vaši obrazovku na "Tisíc barev" spíše než na "Milion". (Windows) Možné řešení: vraťte se ke starší verzi ovladače (6094?) - netestováno. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=101055" title="Bug 101055 - Scrolling vertically crashes system - ATI Video Driver Problem">101055</a>) </p>

<h4>Klávesnice a myš</h4>
<p>Dvojkliknutí na stránku může zablokovat klávesnici. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=70812" title="Bug 70812 - [meta] mozilla stops accepting keyboard input">70812</a>)</p>

<p><strong>Linux:</strong> Klávesové zkratky na Linuxu nyní používají Ctrl místo Alt jako klávesový modifikátor. Klávesa Alt je používána pro rychlý přístup k položkám nabídky. Pokud si přejete klávesové zkratky upravit, přidejte následují řádky do předvoleb Mozilly (jak to udělat neleznete <a href="#prefs">zde</a>):</p>

<p><code>user_pref("ui.key.accelKey", 18);</code><br />(Změní akcelerátorovou klávesu z Ctrl (17) na Alt (18).)<br /><br />
<code>user_pref("ui.key.menuAccessKey", 0);</code><br />(Změní klávesu pro přístup k nabídce z Alt (18) na žádnou.)</p>

<p><strong>Linux:</strong> Kliknutí prostředním tlačítkem myši na místo, kde se nenachází žádný odkaz vede k objevení upozorňovací výzvy. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=96972" title="Bug 96972 - I get an alert message with web contents in it!">96972</a>)</p>

<h4>Obsluha událostí</h4>
<p>Element FILE špatně zachytává události. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=4033" title="Bug 4033 - onBlur &amp; onFocus are not on file object.">4033</a>)</p>

<h4>Posunování dokumentu kolečkem myši</h4>
<p><strong>Linux:</strong> Musíte mít váš X server nakonfigurovaný pro používání kolečka myši. U XFree86 přidejte do sekce Pointer v souboru <tt>XF86Config</tt> "<tt>ZAxisMapping 4 5</tt>". Také zkontrolujte, zda máte správně nastavený Protocol pro vaši myš.</p>
<p><strong>Windows:</strong> Posunování dokumentů kolečkem myši nepracuje dobře se všemi ovladači myši. Pokud narazíte na problém, upgradujte váš ovladač myši nebo zkuste vypnout pomocné programy, které vaše myš používá. Pokud vlastníte myš Logitech, mužete buď upgradovat ovladač (na alespoň v9.60) nebo zapnout nastavení "Microsoft Office compatible scrolling" v ovládacích panelech Myš/Tlačítka. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=33732" title="Bug 33732 - [MW]Mousewheel scrolling scrolls listbox, not page">33732</a>)</p>
<p><strong>Mac OS:</strong> Posunování dokumentů kolečkem myši nepracuje dobře se všemi ovladači myši. Pokud narazíte na problém, aktualizujte váš ovladač myši nebo zkuste vypnout pomocné programy, které vaše myš používá.</p>

<h4>Dialogová okna</h4>
<p>Pokud Mozilla nereaguje, ale nezdá se, že by zamrzla, zkontrolujte, zda nemáte někde stále otevřeno dialogové okno. Minimalizujte všechna okna na vaší pracovní ploše a pokud odjevíte dialogové okno Mozilly, zavřete ho. Pokud používáte více pracovních ploch, bude nutné toto provést pro všechny používané pracovní plochy.</p>
<p>Tento problém se objevuje u uživatelů stahujících zásuvné moduly (pluginy). Pro řešení postupujte dle následujících  kroků:</p>
<ol>
	<li>Minimalizujte okno se stahovaným zásuvným modulem.</li>
	<li>Zrušte dialogové okno tlačítkem Zrušit (Cancel).</li>
	<li>Znovu otevřte okno a pokračujte ve stahování zásuvného modulu.</li>
</ol>

<h4>Správce formulářů</h4>
<p>Správce formulářů ještě není zcela funkční v Japonské verzi Mozilly.</p>

<h4>Fonty</h4>
<p>Mnoho distribucí Linuxu (zej. Red Hat) má špatný font Arial. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=46415" title="Bug 46415 - Arial looks much smaller than Helvetica at same size, and is">46415</a>) Pokud shledáte, že mnoho webových stránek, zejména těch, které tento font používají, vypadá nepřehledně, hrubě a jsou těžko čitelné, podívejte se na následující odkazy, které vysvětlují dva způsoby, jak změnit nastavení vašeho font serveru, aby používal lepší font Arial:</p>
<p><a href="http://home.online.no/%7Erut-aane/linux.html#ttf"> http://home.online.no/~rut-aane/linux.html#ttf</a><br />
  <a href="http://home.online.no/%7Erut-aane/linux.html#fuzzy"> http://home.online.no/~rut-aane/linux.html#fuzzy</a></p>
<p>Pokud to nepomůže, mužete problém vyřešit přejmenováním nebo smazáním <tt>/usr/share/fonts/ISO8859-2</tt> např. následujícím příkazem:</p>
<code>mv /usr/share/fonts/ISO8859-2 /usr/share/fonts.ISO8859-2</code>
<p>odlogujte se a znovu zalogujte. Tento krok lze snadno vrátit zpět např. příkazem:</p>
<code>mv /usr/share/fonts.ISO8859-2 /usr/share/fonts/ISO8859-2</code>

<h4>Proxy</h4>
<p>Mozilla musí být nakonfigurována, aby správně pracovala s proxy jako je Junkbuster, která nepodporuje nejnovější vlastnosti HTTP. Standardně se Mozilla snaží používat HTTP 1.1. Pokud používáte Mozillu s proxy, která podporuje pouze HTTP 1.0, budete muset nastavit verzi používaného HTTP na 1.0 v Úpravy | Předvolby  | Rozšířené nastavení | HTTP spojení | Volby pro spojení přes proxy. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=38488" title="Bug 38488 - Proxy:junkbuster is broken - use http/1.0 to get arround this">38488</a>)</p>
<p>Pro ruční nastavení proxy Mozilla akceptuje pouze jména počítačů (hostname). Pokud váš profil vznikl migrací z Netscape Comunicatoru 4, budete muset tato nastavení změnit ručně. Comunicator 4 povoluje URL v ručním nastavení, ale Mozilla nikoliv. Pokud používáte profil vzniklý touto migrací, musíte změnit URL na jméno počítače a číslo portu. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=30387" title="Bug 30387 - Proxy: manual config does not support URLs (http://)">30387</a>)</p>

<h3 id="profiles">Nastavení profilů</h3>
<p>Pokud ve správci profilů (profile manager) přejmenujete profil na již používaný název, všechny vaše předvolby mohou být ztraceny. Řešení: když přejmenováváte profil, použijte dosud neexistující název. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=113203" title="Bug 113203 - Data loss with renaming profiles">113203</a>)</p>
<p>Pokud chcete provést ruční změny v předvolbách, needitujte soubor prefs.js. Raději v tomtéž adresáři, ve kterém se nachází soubor prefs.js, vytvořte textový soubor user.js. Záznamy, které zapíšete do user.js přepíší nastavení uložené v souboru prefs.js. (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=142590" title="Bug 142590 - Add 'Do Not Edit' warning to prefs.js">142590</a>)</p>
<p>Pokud máte jeden profil pocházejíci z Comunicatoru verze 4.5 nebo novějšího, bude automaticky zkopírován a zkonvertován k použití v Mozille. Profily ze starších verzí Netscape Comunicatoru nemohou být zkonvertovány.</p>
<p>Pokud máte vytvořeno více profilů, které potřebují zkopírovat a zkonvertovat, zobrazí se dialog správce profilů. Klikněte na profil, který chcete používat a klikněte na tlačítko Start.</p>
<p>Pokud nastane problém během instalace a profil pocházející z Netscape Comunicatoru nebyl zkopírován a zkonvertován, můžete takový profil stále použít. Spusťte Mozillu z příkazové řádky s parametrem "<tt>-installer</tt>" (napište "<tt>mozilla.exe -installer</tt>" do příkazové řádky přepnuté do adresáře, ve kterém se nachází soubor mozilla.exe; pokud se tento adresář nachází v proměnné PATH, nemusíte se přepínat do tohoto adresáře). Další možností je reinstalovat Mozillu, aby se vám znovu objevil dialog správce profilů.</p>

<h3 id="browser">Prohlížeč (Navigátor)</h3>
<p>Pokud 'pole adresa' (location bar) nereaguje na klávesu Enter/Return, můžete použít dočasné řešení - vložit adresu pomocí funkce Soubor/Otevřít. Problém odstraníte, pokud zavřete Mozillu a smažete soubory <tt>history.dat</tt> a <tt>localstore.dat</tt> ve vašem <a href="#profileloc">profilu</a>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=90337" title="Bug 90337 - URL bar not responsive to the 'Enter/Return' key.">90337</a>)</p>
<p>Při používání Windows 98 s některými grafickými kartami ATI příležitostně dochází k poškození obrázků zobrazovaných na webových stránkách. Toto je chyba ovladače grafické karty ATI. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=104992" title="Bug 104992 - Rendering problems on win98 with older ATI vidcards">104992</a>)</p>
<p>Pokud je do adresy URL vloženo uživatelské jméno a heslo ve formě <tt>http://jmenouzivatele:heslo@nazevserveru.com</tt>, Mozilla nevaruje uživatele před použitím takových odkazů. Adresa URL s příliš dlouhým uživatelským jménem např. <tt>http://www.mozilla.org%2084230482304982304329048230948@fraudsite.com</tt> u uživatele vzbuzuje dojem, že míří na mozilla.org, ale ve skutečnosti směřuje na fraudsite.com. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=122445" title="Bug 122445 - Warn user if username/password encoded in link">122445</a>)</p>
<p>Pokud uživatel stahuje soubor na pozadí a ukončí Mozillu prostřednictvím nabídky 'Soubor', stahování souboru bude bez varování přerušeno. Řešení: ukončujte Mozillu až po stažení všech souborů. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=28385" title="Bug 28385 - Alert user before Mozilla exit if files are still downloading">28385</a>)</p>
<p>Adresy URL začínající telnet:// nefungují na Linuxu (a pravděpodobně ani dalších UNIXech). Adresy URL s telnet:// fungují na Win32 a MacOS. Řešení nainstalujte si protozillu z <a href="http://protozilla.mozdev.org">http://protozilla.mozdev.org/</a>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=33282" title="Bug 33282 - URL: telnet:// unregistered in Linux">33282</a>)</p>
<p>Pokud máte otevřeno mnoho panelů (tabs) - více než 25, některé panely mohou přestat reagovat. Řešení: Místo používání mnoha panelů v jednom okně prohlížeče použijte více oken prohlížeče.</p>
<p>Pokud chcete pomocí Mozilly vyhledávat na dalších Internetových vyhledávačích, než které jsou dostupné v postranní liště Hledání, podívejte se na <a href="http://mycroft.mozdev.org/">http://mycroft.mozdev.org/</a> - obsahuje vyhledávací moduly pro mnoho známých vyhledávačů.</p>
<p>Funkce "Zobrazit zdrojový kód rámu" není dostupná v nabídce Zobrazit, ale je dostupná pouze v kontextové nabídce. Kontextovou nabídku vyvoláte kliknutím levého tlačítka myši na příslušný rám a po té kliknutím pravého tlačítka myši (na Mac OS kliknutí s klávesou Control). (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=47139" title="Bug 47139 - View &gt; Frame Source, Frame Info not yet implemented in menub">47139</a>)</p>

<p>Pokud se některé webové stránky zobrazují nesprávně, může to být způsobeno tím, že nevyhovují webovým standardům. Pro více informací si přečtěte <a href="http://developer.netscape.com/evangelism/">Netscape Evangelism</a> a <a href="http://mozilla-evangelism.bclary.com/">Mozilla Evangelism</a>.</p>

<h4>Dostupnost stránek</h4>
<p>Ačkoliv povolení 'proudového zpracování HTTP' (HTTP pipeling) může výrazně zrychlit nahrávání stránek, způsobí to, že stránky z některých serverů se nebudou nahrávat správně. Pokud narazíte na problém při nahrávání stránek, zkotrolujte, zda je vypnuto proudové zpracování (Předvolby | Rozšířené nastavení | HTTP spojení) a zkuste znovu nahrát danou stránku. Standardně je proudové zpracování vypnuto. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=144607" title="Bug 144607 - OCSP validation failure, -8073, -5961">144607</a>)</p>
<p>Mozilla nemusí být schopná se připojit k některým IBM Web serverům používajícím zabezpečené spojení HTTPS. Toto není způsobeno chybou Mozilly, ale samotného serveru. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=54031" title="Bug 54031 - uboc.com - Can't bring up UBOC bank at home login form.">54031</a>)</p>
<p>Pokud si jako startovní stránku Mozilly zvolíte možnost "Naposledy navštívená stránka", tak pokud tato stránka bude obsahovat rámy (frames), nemusí být po příštím startu Mozilly zobrazena správně. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=58613" title="Bug 58613 - 'last page visited' cannot handle framed pages properly">58613</a>)</p>
<p>Přístup na stránky s Uniform Naming Convention (UNC) vyžaduje 5 lomítek (file://///). (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=66194" title="Bug 66194 - file:// Correct URLs w/ UNC have *5* slashes">66194</a>)</p>
<p><strong>Linux:</strong> Na Linuxu mohou nastat problémy s ESC Audio a Flashem. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=85772" title="Bug 85772 - [WORKAROUND] linux flash plugin can't find ESD socked (no so">85772</a>)</p>

<h4>Stahování souborů</h4>
<p>Kurzor ve tvaru hodin, ukazatel průběhu (progress meter) a throbber nesignalizují konec stažení souboru. Stavový řádek zobrazuje "Přenáším data z..." ačkoliv je stránka již nahrána. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=39310" title="Bug 39310 - [meta] progressmeter and throbber do not stop spinning">39310</a>)</p>
<p>Pokud nejste schopni odstranit uživatelem definovanou pomocnou aplikaci (helper application), zkuste následující postup:</p>
<ol>
	<li>V dialogovém okně Předvolby vyberte Prohlížeč | Pomocné aplikace.</li>
	<li>Vyberte MIME type patřící příslušnému programu a klikněte na Odebrat.</li>
	<li>Potvrďte akci - OK.</li>
	<li>Uzavřete dialogové okno Předvolby kliknutím na OK.</li>
	<li>Restartujte Mozillu.</li>
</ol>

<h4>Záložky</h4>
<p>Záložky nemohou být přeuspořádány, pokud je máte seřazené. Abyste je mohli přeuspořádat, vyberte možnost 'Neřadit' v nabídce 'Zobrazit' nebo klikněte několikrát na záhlaví sloupce 'Název' až z něj zmizí šipka signalizující směr řazení. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=64768" title="Bug 64768 - [RFE] Drag &amp; Drop in Sorted Bookmarks list">64768</a>)</p>
<p>Není možno uložit dvě jinak se jmenující záložky pro stejnou adresu. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=51683" title="Bug 51683 - Unable to have 2 differently named bookmarks for the same ur">51683</a>)</p>

<h4>Zobrazení zdrojového kódu</h4>
<p><strong>Mac OS:</strong> Vodorovný posuvník v okně se zdrojovým kódem se někdy neobjeví. Aby se posuvník objevil, změňte velikost okna. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=56488" title="Bug 56488 - Resize widget (growbox) hides bottom arrow in scrollbar">56488</a>)</p>

<h3 id="mail">Pošta a diskusní skupiny</h3>
<p>Přemístění nebo zkopírování pojmenované zprávy (labeled message) nezachovává pojmenování, pokud probíhá mezi poštovními účty:</p>
<ol>
	<li>Z IMAP na jakýkoliv jiný účet (včetně lokální složky): pojmenování je ztraceno.</li>
	<li>Z POP na POP (včetně lokální složky) proběhne v pořádku.</li>
	<li>Z POP na IMAP: pojmenování je ztraceno.</li>
	<li>Z Diskusních skupin do kteréhokoliv účtu: pojmenování je ztraceno. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=133795" title="Bug 133795 - Mozilla 1.0 Release Notes Tracking Bug">133795</a>)</li>
</ol>
<p>V nastavení účtu: v dialogovém okně 'Nastavení Serveru' se změny provedené v nastavení 'lokálního adresáře' projeví až po restartu Mozilly. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=2654" title="Bug 2654 - localPath does not take effect until restart">2654</a>)</p>

<p>Mozilla nevaruje uživatele, když začne docházet volné místo na pevném disku. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=32443" title="Bug 32443 - GetMsg currently does NOT detect out of disk space condition">32443</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=56565" title="Bug 56565 - No alert appears if low on disk space">56565</a>). Příznaky, podle kterých si můžete tohoto problému všimnout, jsou:</p>
<ul>
	<li>Kopírování zprávy do složky 'Odeslaná pošta' selže nebo se zkopíruje jenom část zprávy.</li>
	<li>POP: Mozilla hlásí, že našla nové zprávy, které stahuje, ale v složce 'Doručená pošta' se žádné nové zprávy neobjevily. Uzavřete Mozillu, uvolněte místo na disku, spusťte Mozillu a pokuste se stáhnout poštu znovu.</li>
	<li>IMAP: Mozilla hlásí, že našla nové zprávy, které stahuje, ale v složce 'Doručená pošta' se žádné nové zprávy neobjeví. Uzavřete Mozillu, uvolněte místo na disku, spusťte Mozillu a pokuste se stáhnout poštu znovu.</li>
</ul>
<p>Identita poštovního účtu se neuloží do neodeslané zprávy. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=59548" title="Bug 59548 - Need to store Identity:  Send Unsent Msg case with webmail">59548</a>)</p>
<p><strong>Linux:</strong> Pokud instalujete Mozillu jako root a po té ji spustíte jako normální uživatel, může se objevit problém zahrnující ukládání složek 'odeslaná pošta', 'koncepty', 'šablony' nebo obecné autentifikační problémy. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=49397" title="Bug 49397 - Linux ONLY: Users run application from other directory encou">49397</a>)</p>
<p>Dialogové okno 'Nastavení účtu' se nezobrazí správně na monitorech s nízkým rozlišením (800x600 nebo 640x480). Pokud to je možné, zvyšte rozlišení vašeho monitoru na větší než 800x600. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=82122" title="Bug 82122 - Fix Account Manager window size">82122</a>)</p>

<h4>SMTP</h4>
<p>SMTP používané s SSL často nefunguje na portu 465 (standardní port pro zabezpečené SMTP spojení) ani na jakémkoliv jiném portu než 25. Je to způsobeno špatným zacházením protokolu se STARTTLS. Řešení: Použijte port 25. Pokud zvolíte nastavení "Použít zabezpečené spojení vždy" nebo "Použít zabezpečené spojení pokud je dostupné", bude spojení přesto zabezpečeno. Jinak Mozilla zamrzne. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=98399" title="Bug 98399 - SMTP over SSL broken except on port 25">98399</a>)</p>

<h4>Poštovní účty AOL Mail a Netscape WebMail</h4>
<p>Mozilla narozdíl od Netscape 6/7 není integrována se službamy AOL Mail a Netscape WebMail. Pokud sdílíte váš profil Netscapu 6/7 s Mozillou a vytvořili jste si jeden z výše zmíněných účtů, budete moci vidět hlavičky zpráv ve složce 'doručená pošta', ale nebudete schopni s těmito zprávami pracovat. Pro přístup k AOL Mailu, WebMailu nebo službě Netscape Instant Messenger budete potřebovat program Netscape 6/7.</p>

<h4>Vyzvedávání a čtení zpráv</h4>
<p>Při čtení zprávy nevidíte hlavičku zprávy (Od:, Předmět:, Datum:, Komu:, Kopie: aj.). Tento problém nastává když přepnete poštovní složku nebo složku diskusních skupin. Abyste viděli hlavičku, upravte velikost okna. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=39655" title="Bug 39655 - Switch folder after resize msg pane hides header envelope until another resize">39655</a>)</p>

<h4>Přílohy</h4>
<p>V některých případech není možné vidět více jak jednu HTML poštovní přílohu. Přílohy se nezobrazí všechny nebo může Mozilla spadnout při snaze zobrazit je. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=38398" title="Bug 38398 - Switch folder after resize msg pane hides header envelope un">38398</a>)</p>

<h4>Databáze kontaktů</h4>
<p>Databáze kontaktů importované z Netscape Communicatoru se v Mozille objeví ve zvláštní složce. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=41590" title="Bug 41590 - Moz Can't import from 4.7 Personal Address Book">41590</a>)</p>
<p><strong>Windows:</strong> Abyste mohli importovat databázi kontaktů z programu Outlook, musíte mít v programu MS Internet Explorer nastaven poštovní klient "Microsoft Outlook". Jak to provést radí následující postup:</p>
<ol>
	<li>Spusťte Internet Explorer.</li>
	<li>Vyberte v nabídce 'Nástroje' položku 'Možnosti sítě Internet'. Objeví se dialogové okno 'Možnosti sítě Internet'.</li>
	<li>Vyberte záložku 'Programy'. Jako klienta elektronické pošty zvolte 'Microsoft Outlook'.</li>
	<li>Potvrďte OK a ukončete program 'Internet Explorer'. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=90206" title="Bug 90206 - Outlook Import sometimes unable to find">90206</a>)</li>
</ol>

<p><strong>Windows:</strong> Někdy je třeba zkoušet importovat databázi kontaktů z Program Outlook Express několikrát za sebou, než se vám to podaří. (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=90206" title="Bug 90206 - Outlook Import sometimes unable to find">90206</a>)</p>

<h4>Filtry</h4>
<p>Pokud jste pro svůj poštovní účet definovali více filtrovacích pravidel, doručená pošta bude porovnána s každým pravidlem (v tom pořadí, v jakém jsou zobrazována v dialogu 'Třídící filtry zpráv') až do té doby než se provede akce 'Přesunou do složky' nebo 'Smazat'. Tento mechanismus je odlišný od Communicatoru 4.x, kde jakákoliv provedená filtrovací akce zastaví zpracování dalších filtrů. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=30081" title="Bug 30081 - execution doesn't stop - incompatible with 4.5">30081</a>)</p>

<h4>Pop a IMAP</h4>
<p>Pokud změníte nastavení 'Zobrazit všechny IMAP složky' nebo 'Zobrazit pouze přihlášené IMAP složky' v nastavení serveru 'Rozšířené', musíte restartovat Mozillu, aby se změna projevil. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=38943" title="Bug 38943 - Need to restart to see result of check/uncheck 'show only su">38943</a>)</p>

<h4>Diskusní skupiny</h4>
<p>Dialog 'Přihlásit' nemusí fungovat u diskusních serverů, které vyžadují autentifikaci. Pokud budete prohlížet diskusní skupinu, jež je chráněna heslem, budete dotazováni několikrát po sobě na vaše uživatelské jméno a heslo.</p>

<h4>LDAP</h4>
<p>Po migraci profilu z Comunicatoru 4.x se mohou objevit LDAP adresáře v rozšířením <tt><a title="LDAP Data Interchange Format" href="http://developer.netscape.com/docs/manuals/directory/admin30/ldif.htm">ldif</a></tt>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=94645" title="Bug 94645 - LDAP directory with ldif extention appeared after migration">94645</a>)</p>
<p>Při doplňování (autocomplete) LDAP může Mozilla dočasně zatuhnout, pokud je síťové spojení přerušeno. Konkrétně, pokud je LDAP server <acronym title="unreachable">nedostupný</acronym> (problémy se síťovým spojením), aplikace při snaze kontaktovat server zatuhne. Aplikace opět začne reagovat na podněty uživatele cca za 10 sekund (doba vypršení časového limitu TCP). (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=79509" title="Bug 79509 - avoid stalling out if ldap C SDK hangs during connect() (LDA">79509</a>)</p>

<h4>Pošta offline</h4>
<p>Přesouvání a kopírování stažené pošty (pokud jste offline) zbůsobí, že nebudete schopni číst zprávy v nové složce dokud zůstanete offline. Řešení: Přejděte do stavu online, abyste je mohli přečíst, po té znovu stáhněte zprávy, abyste je měli přístupné i ve stavu offline. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=78809" title="Bug 78809 - Offline:Offline copy of an imap message moved offline is los">78809</a>)</p>
<p>Pokud máte vytvořen jen jeden profil, tak po startu Mozilly nefungují předvolby <acronym title="Ask me if I want online or offline mode">Zeptat se zda-li přepnout do módu online/offline</acronym> a <acronym title="Use my previous online/offline state">Použít předchozí stav online/offline</acronym>. Pro přepnutí do offline vyberte v nabídce Soubor 'Pracovat offline'. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=82487" title="Bug 82487 - offline: Startup mode doesn't work - 'remember my prev mode' o">82487</a>)</p>
<p>Pokud spouštíte Mozillu v offline módu (kliknutím na zaškrtávací políčko offline ve Správci profilů) a budete se snažit odpovědět na poštovní zprávu i přesto, že se nacházíte v offline módu nebo dvojkliknete na zprávu (což ji otevře z samostatném okně), Mozilla může v některých případech spadnout. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=92368" title="Bug 92368 - when offline, viewing message in stand alone message window">92368</a>)</p>

<h3 id="chatzilla">ChatZilla IRC klient</h3>
<h4>Obecné</h4>
<p>ChatZilla zatím ještě není zcela dokončený produkt. Je použitelná, pokud jste ochotní přijmout, že obsahuje pouze podmnožinu z příkazů, které jsou dostupné v IRC klientech. Velké množstí uživatelů ChatZilly se setkává s padáním programu, divným chováním, nedomyšlenostmi a naléhají na řešení chyb. Pokud jste ochotni pomoci, prosím, sdělte nám to v <a href="news://news.mozilla.org/netscape.public.mozilla.rt-messaging">netscape.public.mozilla.rt-messaging</a> diskusní skupině, nebo pošlete e-mail na adresu <a href="mailto:rginda@netscape.com">rginda@netscape.com</a>.</p>
<p>Pokud ještě nejste obeznámeni s používáním IRC, přečtěte si FAQ (často kladené dotazy) na <a href="http://www.irchelp.org">www.irchelp.org</a>.</p>

<h4>Spuštění ChatZilly</h4>
<p>Pro spuštění ChatZilly spusťte Mozillu s parametrem -chat nebo pomocí nabídky Okno | IRC Chat.</p>

<h4>Více informací a ChatZille</h4>
<p>Více informací o ChatZille naleznete v <a href="http://www.mozilla.org/projects/rt-messaging/chatzilla/user-guide.html">uživatelské příručce ChatZilly</a>. Informace o tom, jak zkompilovat ChatZillu naleznete <a href="http://www.mozilla.org/projects/rt-messaging/chatzilla/">zde</a>. (ChatZilla je součástí verzí Mozilly pro Windows a Mac OS).</p>

<h3 id="venkman">Debugger (ladicí program) Javascriptu</h3>
<p>Pokud učiníte plovoucími všechna podokna, není možnost, jak je jednoduše vrátit zpět do původního zobrazení (ve kterém byla na obrazovce rozdělena do více sekcí). Pokud máte zapnutu volbu 'Uložit rozložení při ukončení programu' (Save Default Layout On Exit), tak tento nepříjemný stav potrvá stále. Řešení: pomocí nabídky View -&gt; Show/Hide zobrazte podokno 'Interactive Session' a do jeho editačního řádku napište "/restore-layout factory". (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=151785" title="Once all the views are floated, no way to put them back">151785</a>)</p>

<h3 id="composer">Editor (Composer)</h3>
<p>Pokud při publikování obsahuje 'Adresa pro zveřejnění', název souboru, uživatelské jméno nebo heslo speciální znaky (např. "@"), Editor vytvoří duplicitní položku 'sídla pro zveřejnení' vždy, když budete publikovat váš dokument. Tento problém lze obejít, pokud vyberete původní 'Název sídla' ze seznamu 'Sídel pro zveřejnění' v dialogovém okně 'Nastavení pro publikování' před každým dalším publikováním dokumentu. Příklad: někteří uživatelé mají svá uživatelské jména stejná se svými e-mailovými adresami, např. 'janedoe@ispname.net'. Po publikování se při příštím zobrazení dialogového okna 'Nastavení pro publikování' zobrazí uživatelské jméno jako 'janedoe%40ispname.net' (znak '@' byl nahrazen escape sekvencí). Protože Editor nenalezne tuto položku, vytvoří kopii. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=141819" title="Bug 141819 - Publish URL, filename, username, and password need to be une">141819</a>)</p>
<p>Není možné zároveň editovat dokument v Editoru (Composeru) a externím editoru. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=37089" title="Bug 37089 - Support external editing in composer (conflict dialog)">37089</a>)</p>
<p>Nemůžete změnit styl fontu přes odstavce a obrázky. Změny fontu mohou být provedeny v každém odstavci zvlášť.</p>
<p>Změna stylu fontu na několika slovech povede k mnoha značkám 'font' v HTML kódu.</p>
<p>Když je nastavena barva pozadí stránky, pouze rámečky mezi řádky označeného textu jsou zbarveny. Změna velikosti okna vyvolá správné překreslení.</p>
<p>Po aplikování barvy na text se text může zdát být částečně zvýrazněný.</p>
<p>Některé stránky (např. takové, které obsahují definici rámů) nemohou být editovány. Ačkoliv i u těchto stránek můžete vybrat v nabídce prohlížeče 'Soubor -&gt; Upravit stránku', po otevření Editoru nebudete schopni takovou stránku editovat.</p>
<p>Funkce Upravit | <acronym title="Paste as">Vložit jako</acronym> nefunguje. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=73286" title="Bug 73286 - Paste Special feature have clipboard 'flavors'">73286</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=41547" title="Bug 41547 - Paste Special submenu needed - paste cells as Rows or Column">41547</a>)</p>
<p>Pokud u funkce 'Soubor -&gt; Otevřít' zvolíte zobrazení v 'Novém okně editoru', dokument se neotevře v Editoru. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=71426" title="Bug 71426 - Editing http://www.mozilla.org in composer no longer works.">71426</a>)</p>
<p>Nelze tisknout zdrojový kód HTML. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=82239" title="Bug 82239 - can't print HTML source">82239</a>)</p>
<p>Mnoho klávesových zkratek nefunguje správně. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=26264" title="Bug 26264 - gtk: need to generate KeyPress for control and shift">26264</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=48951" title="Bug 48951 - Need to use VK_ keyCode constants in .js files">48951</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=57805" title="Bug 57805 - front end for remapping keyboard shortcuts (user-defined key">57805</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=70630" title="Bug 70630 - reduce keybindings by allowing modifiers to be ignored">70630</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=26269" title="Bug 26269 - Mac: need to generate events for modifier key events">26269</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=53505" title="Bug 53505 - [Mac] Option+Tab to switch between windows">53505</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=76925" title="Bug 76925 - Format|Properties should have an accelerator (alt+enter...)">76925</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=57700" title="Bug 57700 - changing event.keycode has no effect">57700</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=67142" title="Bug 67142 - [rfe] ctrl+shift+c to 'copy text' (force plain-text copy)">67142</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=48375" title="Bug 48375 - Left arrow doesn't scroll text area up properly">48375</a>)</p>
<p>Ukazatel myši s přesýpacími hodinami se nezobrazí, když je aplikace zaneprázdněna. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=83300" title="Bug 83300 - show busy cursor when pasting and other slow actions">83300</a>)</p>
<p>Ikony některých HTML značek se nezobrazí v módu 'Zobrazit všechny značky'. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=88036" title="Bug 88036 - Make AllTags mode in Composer use generated content instead">88036</a>)</p>
<p>Při úpravě seznamů dochází k přesunutí položek vnořeného seznamu do rodičovského. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=98547" title="Bug 98547 - sublists can get pulled up into parent list when changing li">98547</a>)</p>
<p>U osobního slovníku překlepů nefunguje možnost 'Odebrat'. (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=43348" title="Bug 43348 - Using 'Remove' button to delete from personal dictionary doe">43348</a>)</p>
<p>Pokud máte v předvolbách v sekci 'Rozšířené nastavení -&gt; Vyrovnávací paměť' nastaveno obnovovat 'Při každém zhlédnutí stránky' a vytváříte nový dokument, ikony na liště mohou být nedostupné a textový kurzor se nezobrazí. Řešení: nenastavujte v předvolbách vyrovnávací paměti 'Při každém zhlédnutí stránky'. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=97663" title="Bug 97663 - editor toolbars/menus are disabled and no focus/caret if cac">97633</a>)</p>

<h3 id="psm">Zabezpečení</h3>
<p>Při návštěvě stránek s SSL zabezpečením se ikona zámku zobrazuje na žlutém pozadí a nezobrazuje tak sílu SSL kódování, zda je 40-, 56- nebo 128-bitové. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=74320" title="Bug 74320 - [Classic and Modern] add 'weak crypto' lock icon">74320</a>)</p>
<p>Obnovení certifikátu k zařízení 'smart card' trvá velice dlouho. Nejsou dostupné žádné zpětné informace při obnovování certifikátu k zařízení 'smart card', což může trvat dlouho, protože zařízení 'smart card' jsou pomalá zařízení. Ve výsledku se může zdát, že k vlastnímu obnovení nedošlo. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=52321" title="Bug 52321 - need watch cursor when restoring certs">52321</a>)</p>
<p>Z bezpečnostních důvodů Mozilla nepovoluje připojení k některým portům. Pokud to chcete změnit, přidejte čárkou oddělený seznam portů do souboru <tt>defaults/all.js</tt> v adresáři, do kterého byla Mozilla nainstalována. Tato možnost funguje pouze v souboru <tt>all.js</tt> v instalačním adresáři Mozilly a dotkne se všech uživatelů. Nefunguje, pokud ji přidáte do souboru <tt>prefs.js</tt> nebo <tt>user.js</tt> v <a href="#profileloc">uživatelském profilu</a>. Např. pokud chcete zpřístupnit porty 1, 3 a 7, použijte tento zápis:</p>
<p><code>pref("network.security.ports.banned.override", "1,3,7");</code></p>
<p>Z bezpečnostních důvodů Mozilla nedovolí odkazovat se webovým stránkám na lokální soubory. V takovém případě se objeví v konzoli JavaScriptu chybová hláška: 'Chyba v zabezpečení: Obsah na stránce http://adresa nemůže načíst data z file:///cestaksouboru'. Pokud potřebujete takové linky provozovat, přetáhněte link myší do 'Pole adresa'. Pokud nemáte rádi zabezpečovací kontroly a risknete dostupnost souborů vašeho systému, můžete toho docílit přidáním následující řádky do souboru <tt>user.js</tt> ve <a href="#profileloc">vašem profilu</a>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=84128" title="Bug 84128 - Need user-visible message when CheckLoadURI fails (eg, for links to file: urls)">84128</a>)</p>
<p><code>user_pref("security.checkloaduri", false);</code></p>

<h3 id="prefs">Předvolby</h3>
<p>Nesdílejte profily mezi Netscapem a <acronym title="nightly builds">nočními verzemi</acronym> Mozilly. Pokud to učiníte, může to vést k nepředpověditelným následkům. Např. ztráta nastavení hledání, předvoleb a růst souboru se záložkami (tak moc až může celý váš systém zamrznout). Nejlepší je vytvořit zvláštní profily pro oba programy nebo manuálně zkopírovat (a přejmenovat) již existující profil. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=137164" title="Bug 137164 - Sharing the same profile with NS +Moz seems to cause RDF hor">137164</a>)</p>
<p>Pokud používáte téma vzhledu Classic, některé panely v předvolbách se nezobrazí správně, některé prvky těchto panelů mohou dokonce chybět. Pokud se přepnete do jiného panelu předvoleb a pak se vrátíte k původnímu, měl by se zobrazit správně. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=51241" title="Bug 51241 - [Classic] fixed-width font size menulist in prefs not displa">51241</a>)</p>
<p>Dialogové okno 'Předvolby' se někdy zobrazí s počáteční velikostí, která nepojme všechny prvky panelů. Změňte velikost okna, abyste je viděli všechny. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=53375" title="Bug 53375 - Sizing of Preferences menu gives no hints on all options ava">53375</a>)</p>

<h3 id="quicklaunch"><acronym title="QuickLaunch">Rychlé spouštění</acronym></h3>
<p>Po uzavření posledního okna se Mozilla dočasně uvolní z paměti a opět nahraje, což jistou dobu trvá. To pravděpodobně způsobí značné vrčení pevného disku. (chybu <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=143764" title="Bug 143764 - Quick Launch doesn't work with multiple profiles">143764</a>)</p>
<p>Po uzavření posledního okna ikona v systray zmizí a znovu se objeví na jeho konci. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=146340" title="Bug 146340 - quick launch icon disappears for a second after closing last window">146340</a>)</p>

<h3 id="plugins">Pluginy (zásuvné moduly)</h3>
<p><strong>Windows:</strong> Adobe SVG plugin padá. Řešení: nekopírujte jej (NPSVG3.dll NPSVG3.zip) do vašeho adresáře pluginů. Pokud chcete prohlížet SVG, lze sehnat speciální verze Mozilly se zabudovanou podporou SVG. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=133567" title="Bug 133567 - M1RC1; Crash because Adobe SVG plugin used an unfrozen inter">133567</a>)</p>
<p><strong>Linux:</strong> Kontextová nabídka pluginu Flash nezmizí, když kliknete mimo oblast Flash pluginu, abyste ji zavřeli. Řešení: pro schování kontextové nabídky Flashe klikněte do oblasti pluginu. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=63182" title="Bug 63182 - Flash plugin context menu doesn't disappear on click, like o">63182</a>)</p>
<p><strong>Linux:</strong> Mozilla spadne pokud přehrává obsah Flash pluginu na vzdáleném X displeji. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=58397" title="Bug 58397 - POST submission sends extra \n when submitting data to other">58397</a>)</p>
<p><strong>Linux:</strong> Nahrávání stránky s Flash pluginem může způsobit zatuhnutí Mozilly, pokud používáte jinou audio aplikaci. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=58937" title="Bug 58937 - Flash crashes with exported X display">58937</a>)</p>
<p>Pluginy instalované pro Communicator 4.x nemusí být Mozille dostupné. Řešení: instalujte tyto pluginy do adresáře pluginů Mozilly.</p>
<p><strong>Windows:</strong> Soubory Microsoft Media Playeru na webových stránkách nemusí fungovat. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=66015" title="Bug 66015 - Windows Media Player broken on NT and 95 only">66015</a>)</p>
<p><strong>Mac OS:</strong> Nyní Mozilla hledá pluginy nejdříve v systémovém adresáři 'Internet Plugins Folder'.</p>

<h3 id="printing">Tisk</h3>
<p>Někteří uživatelé nebudou schopni tisknout na Windows 98 nebo Windows ME při výchozím nastavení tisku. Řešením je změnit nastavení tisku v Ovládacích panelech tisku. Ve vlastnostech tiskárny, na záložce 'Podrobnosti' vyberte 'Zařazování' (Spool settings) a vyberte 'Tisknout přímo na tiskárnu' (print directly to printer). (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=130083" title="Bug 130083 - unable to print on Win 98/ME with default spool setting">130083</a>)</p>
<p>V náhledu tisku se nezobrazují pluginy. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=134002" title="Bug 134002 - Plugins/applets don't render in print preview">134002</a>)</p>
<p id="xprint"><strong>Linux:</strong> Mozilla obsahuje druhý tiskový modul nazývaný <i>Xprint</i>, který podporuje <a href="http://www.cups.org/">CUPS</a>, <a href="http://www.lprng.com/">LPRng</a>, <a href="http://www.mozilla.org/projects/mathml/">MathML</a> a TrueType fonty a umožňuje Mozille tisknout texty v jazycích jako jsou Arabština, Čínština, Azbuka, Řečtina, Hebrejština, Indické jazyky (Devanagari, Tamil aj.), Japonština, Korejština, Polština aj.</p>
<p>Jak instalovat <i>Xprint</i> se dozvíte na <a href="http://www.mozilla.org/projects/xprint/">stránkách zabývajících se Xprint modulem Mozilly</a> a <a href="http://xprint.mozdev.org/">http://xprint.mozdev.org/</a>.</p>
<p><small>Poznamenejme, že <a href="http://www.mozilla.org/projects/xprint/">Xprint modul</a> je standardně vyloučen z RPM verzí pro RedHat (viz chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=133534" title="bug 133534 - Xprint support not available in RedHat RPM builds">133534</a>).</small></p>
<p><small>Řešení:</small></p>
<ul>
	<li><small>Použijte <a href="http://rpmfind.net/linux/rpm2html/search.php?query=mozilla&amp;submit=Search+...&amp;system=mandrake&amp;arch=">RPM z distribuce Mandrake</a></small></li>
	<li><small>Použijte tarballovou verzi z <a href="http://www.mozilla.org/releases/">mozilla.org</a></small></li>
	<li><small><a href="http://www.mozilla.org/build/unix.html">Zkompilujte si Mozillu sami</a></small></li>
</ul>

<p><strong>Mac OS a Linux:</strong> průhledné pozadí je vytištěno černě. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=137114" title="Bug 137114 - Transparent backgrounds are printed as black on Mac">137114</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=137115" title="Bug 137115 - Transparent backgrounds are printed as black in PostScript">137115</a>)</p>
<p>Tisk zpráv z diskusních skupin, které obsahují obrázky, vede k pádu Mozilly. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=92659" title="Bug 92659 - Doesn't print news msgs with images.">92659</a>)</p>

<p><strong>Linux:</strong> V Postskriptovém modulu se nachází několik chyb, které se nevyskytují v <a href="#xprint">modulu Xprint</a>. (chyby
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=6810" title="bug   6810 - [ps] UNIX printing should set the correct title (e.g. -T option)">6810</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=24824" title="bug  24824 - [ps] Hebrew text prints as gibberish">24824</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=28088" title="bug  28088 - Printing MathML">28088</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=31356" title="bug  31356 - [ps] PostScript Printing of CJK content need font inserter/filter">31356</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=52058" title="bug  52058 - [ps] Overline prints to low">52058</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=52420" title="bug  52420 - [ps] RFE: Multiple font setting for CJK PS printing">52420</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=63737" title="bug  63737 - [ps] trouble printing latin2 (iso8859-2) characters">63737</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=65784" title="bug  65784 - [ps] All Chinese characters are printed as little squares">65784</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=67338" title="bug  67338 - [ps] Windows quote characters not translated at print time">67338</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=68373" title="bug  68373 - [ps] Mozilla uses only built-in AFM metrics">68373</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=80190" title="bug  80190 - [ps] Poor Postscript Rendering">80190</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=82982" title="bug  82982 - [ps] printing iso-8859-2 fails">82982</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=85207" title="bug  85207 - [ps] postscript module too big due to inefficient static ...">85207</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=107756" title="bug 107756 - [ps] RFE: print option to output in Postscript Level 2.">107756</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=119263" title="bug 119263 - [ps] printed page prints images in different sizes">119263</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=119265" title="bug 119265 - [ps] improve GetWidth by using unicode width data">119265</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=123144" title="bug 123144 - [ps] big ugly gaps before hrefs in printout">123144</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=123408" title="bug 123408 - [ps] No standard Postscript characters outside ISO 8859-1...">123408</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=125006" title="bug 125006 - [ps] Cyrillic characters not printing">125006</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=126602" title="bug 126602 - [ps] Mozilla PS printing for UTF-8 mail and SJIS attachme...">126602</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=127422" title="bug 127422 - [ps] Need to get correctly scaled fonts for Print Preview">127422</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=131071" title="bug 131071 - [ps] Japanese subject is corrupted on printout">131071</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=131088" title="bug 131088 - [ps] japanese printing ignores defined sans serif font an...">131088</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=135695" title="bug 135695 - [ps] Use /etc/printcap to set default printer names and c...">135695</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=137115" title="bug 137115 - Transparent backgrounds are printed as black in PostScript">137115</a>)
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=144376" title="bug 144376 - [ps] inaccurate postion when printing with Bold or Italic">144376</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=144418" title="bug 144418 - [ps] German characters overlayed in PS printout">144418</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=150897" title="bug 150897 - [ps] Postscript contains 'NO FONT WAS FOUND' which causes...">150897</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=152882" title="bug 152882 - [ps] html character entities print as blanks or incorrectly">152882</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=154027" title="bug 154027 - [ps] 'print' produces un-printable postscript">154027</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=157132" title="bug 157132 - [ps] nsRenderingContextPS::SetClipRect mishandles nsClipC...">157132</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=158025" title="bug 158025 - [ps] bad header if print from different locale">158025</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=161827" title="bug 161827 - [ps] GetWidth optimizations need to be implemented for th...">161827</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=166780" title="bug 166780 - [ps] Printing to file does not work">166780</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=168614" title="bug 168614 - [ps] TMP, TMPDIR, TEMP not honored">168614</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=172525" title="bug 172525 - [ps] print legal size page fails to set '&lt;&lt; /PageSize [61...">172525</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=175879" title="bug 175879 - [ps] Default page sizes all in inches (bad)">175879</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=176319" title="bug 176319 - [ps] Does not print">176319</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=176938" title="bug 176938 - [ps] Printing does not work with some Postscript printers">176938</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=177211" title="bug 177211 - [ps] No euro currency on paper">177211</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=177494" title="bug 177494 - [ps] problem while printing to ps file">177494</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=179448" title="bug 179448 - [ps] must specify lpr as /usr/bin/lpr">179448</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=179538" title="bug 179538 - [ps] lpr is not guaranteed to exist on SunOS 5.x systems,...">179538</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=182324" title="bug 182324 - [ps] mozilla generates level 3 postscript that will not p...">182324</a>,
<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=183688" title="bug 183688 - [ps] Printing justified ISO-8859-2 text - big spaces insi...">183688</a>)
</p>

<h3 id="java">Java</h3>
<p>Při vstupu na server, který vyžaduje HTTP identifikaci ke stažení Java apletu, který rovněž vyžaduje identifikaci, je uživatel nucen se zalogovat dvakrát se stejným uživatelským jménem a heslem. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=60304" title="Bug 60304 - Basic Auth doesn't work for Java">60304</a>)</p>
<p>Verze Javy J2SE starší než 1.3.0_01 pod Mozillou nefungují. U JRE 1.3.1 byly oznámeny problémy. Doporučujeme proto JRE 1.4.1. Mozilla byla testována se všemi verzemi 1.3.0_* JRE a JRE 1.3.1 a beta verzemi JRE 1.4 J2SE. J2SE starší 1.3.0_01 pod Mozillou nefungují.</p>
<p>Spuštění J2SE v módu 256 barev může způsobit blikání.</p>
<p><strong>Linux:</strong> LiveConnet nyní funguje, pokud používáte Mozillu 1.3b s JRE 1.3.1. U verze JDK 1.4 se vyskytly problémy zmiňované výše.</p>
<p>JRE firmy Sun spadne při startu, pokud 'useragent' (identifikační řetězec prohlížeče) nezačíná 'Mozilla/5'. Může vypsat <code>Expected a version &gt; 5! Version = 4</code></p>
<p>Řešením je nesnažit se nastavovat 'useragent', jehož verze je menší než 5, pokud máte Sun JRE ve vašem adresáři s pluginy. Nastavení 'useragent' v souboru <tt>pref.js</tt> vypadá např. takto: (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=83376" title="Bug 83376 - Crash when loading Java Plugin if UserAgent string as MSIE">83376</a>)</p>
<p><code>user_pref("general.useragent.override", "Mozilla/4.0 (compatible; MSIE 5.0; Windows 98;)");</code></p>
<p>Pokud Java nefunguje, ujistěte se, že:</p>
<ul>
	<li>Na Windows: je zkopírován soubor <tt>NPOJI610.DLL</tt> z <tt>C:\JDK*\jre\bin</tt> do podadresáře <tt>\plugins</tt> v adresáři s nainstalovanou Mozillou.</li>
	<li>Na&nbsp;Unixu: je vytvořen symbolický odkaz na <tt>/usr/java/j*/jre/plugins/i386/ns610/libjavaplugin_oji.so</tt> z podadresáře <tt>plugins/</tt> v adresáři s nainstalovanou mozillou&nbsp;1.3b. Nekopírujte soubor, pouze vytvořte symbolický odkaz.</li>
</ul>


<h3 id="international">Mezinárodní poznámky k verzi</h3>
<h4>Obecné</h4>
<p>Mozilla byla navržena tak, aby mohla zobrazovat odlišné jazyky bez zbytečných kroků. Uživatel by měl být schopen prohlížet Internetové stránky, číst a psát e-maily aniž by musel něco komplikovaně nastavovat, pokud jsou příslušné fonty dostupné.</p>
<p>Mozillu lze používat s několika jazykovými balíčky, které změní jazyk používaný v nabídkách a dialozích a změní s jazykem související Internetové adresy.</p>
<p>Obsah postranního panelu a záložek se nezmění, pokud zvolíte jinou oblast - jsou svázány s profilem. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=87939" title="Bug 87939 - Sidebar region does not change when non-default region is se">87939</a>)</p>
<p>Pokud používáte Činskou, Korejskou nebo Japonskou verzi Windows 9x/ME a Mozilla selže při startu, přečtěte si sekci o Javě níže, kde jsou popsány možné příčiny.</p>
<p>Nelze tisknout Japonské znaky na Win98-J s ovladači HP Laser Jet (japonských verzí). Řešení: Nainstalujte ovladač, který se nachází na instalačním CD japonských Windows98. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=86989" title="Bug 86989 - Unable to print out Japanese characters from Win98-J with HP">86989</a>)</p>
<p>Pokud máte WinME-Ja, je možné, že nebudete moci tisknout na HP LaserJet 5Si/5Si MX s ovladačem HP LaserJet 5Si/5Si MX PS. V takovém případě zkuste vyměnit ovladač za HP LaserJet 5Si/MX. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=86989" title="Bug 86989 - Unable to print out Japanese characters from Win98-J with HP">86989</a>)</p>
<p>Nové: Na platformách, které podporují názvy souborů v Unicode, je možné za pomoci skriptů vytvářet soubory a adresáře, které obsahují znaky nepatřící do systémového locale. Operace prohlížeče, které pracují s takovými adresáři nebo soubory nemusí uspět, např. pokud budou ukládat do takového adresáře, nebo otvírat soubor, jehož plný název obsahuje takové znaky. Problému se vyvarujete, pokud budete používat pouze znaky patřící do jazyka vašeho systému.
(chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=58866" title="Bug 58866 - Files are not opened, if the path or file name contains some">58866</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=100243" title="Bug 100243 - Cannot install NS into directory with some double-byte character">100243</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=100344" title="Bug 100344 - Installation failed when creating directory with some double">100344</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=100364" title="Bug 100364 - Some double-byte characters are corrupted in Program Folder">100364</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=100396" title="Bug 100396 - Program Folder name with some double-byte characters is corr">100396</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=101573" title="Bug 101573 - Cannot choose some double-byte chars folder name to create u">101573</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=128380" title="Bug 128380 - Cannot create user profile names in unicode when using DOS c">128380</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=104305" title="Bug 104305 - P option doesn't work with double-byte char profile names">104305</a>)</p>

<h4>Správce profilů</h4>
<p>V Japonských verzích Windows XP, ikona Mozilly na ploše a adresář Mozilla ve start menu nejsou odstraněny při odinstalaci Mozilly prostřednictvím Ovládacích panelů. Můžete je odstranit ručně. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=125104" title="Bug 125104 - A WinXP and Win2K: Cannot uninstall Mozilla completely">125104</a>)</p>

<h4>Prohlížeč a Editor (Navigátor a Composer)</h4>
<p>Mozilla nepodporuje dynamické fonty. (Poznámka: Tyto fonty byly podporovány v Communicatoru 4.x)</p>
<p>Automatické rozpoznávání znakové sady Všechno/Universal může být neschopné detegovat kódování na stránkách, které neobsahují informace o použitém kódování. Přesnost detekce můžete zvýšit, pokud vyberete autodetekční modul s nižším rozsahem detekce, např. Čínština, Zjednodušená Čínština, Východní Asie.</p>
<p>U Windows 2000 IME jsou podporovány mnohé nové vlastnosti IME (např. rekonverze), ale některé vlastnosti nemusí fungovat správně. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=18680" title="Bug 18680 - [IME 2000] Modifying characters in conversion mode does not">18680</a>)</p>
<p>Podpora pro Unicode '<span class="HIDETODO">surrogate range</span>' není dostupná pod Linuxem. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=127713" title="Bug 127713 - support Surrogate display on Linux by using FreeType">127713</a>)</p>
<p>Editor nemůže uložit stránky v kódování ISO-2022-KR pomocí nabídky 'Uložit jako...', protože není dostupný převodník z Unicode do ISO-2022-KR. ISO-2022-KR bude případně schována v nabídce 'Uložit jako...'. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=132070" title="Bug 132070 - Fail to save an existing Doc erases the data">132070</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=133615" title="Bug 133615 - Need to remove 'ISO-2022-KR' from SaveAs dlgbox">133615</a>)</p>
<p>Pokud otevřete soubor v adresáři, jehož název obsahuje více-bytové znaky, absolutní název souboru v titulku Editoru bude obsahovat escapované znaky. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=136221" title="Bug 136221 - In composer window title, DBCS characters are in escaped cha">136221</a>)</p>
<p><strong>Linux:</strong> Volby tučně a kurzíva nemusí fungovat u ASCII znaků pokud editujete CJK stránky. Toto nastává nejčastěji na CJK locales bez dobrých ASCII fontů. Např. pokud používáte jazykové soubory open-source CJK locale. Komerční distribuce Linuxu, zejména novější, obsahují lepší CJK fonty a k tomuto problému dochází jen zřídka.</p>
<p><strong>Mac OS:</strong> Informace v non-ASCII non-Latin 1 uložené v konfiguraci Internetu se nezobrazí správně v automaticky vyplňovaných polích jako je třeba pole "Vaše jméno" v dialogovém okně 'Nastavení poštovního účtu'. Pokud k tomu dojde, opravte ručně automaticky doplněné položky. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=5721" title="Bug 5721 - Need more Mac Internet Config support">5721</a>)</p>

<h4>Pošta</h4>
<p>Filtrování pomocí slov v těle dopisu není dosud implementováno.</p>
<p>Nabídka 'Znaková sada' nemůže správně zobrazit hlavičky bez MIME informace o kódování v okně se seznamem poštovních zpráv. To je způsobeno vlastním návrhem. Pokud zobrazovaná zpráva neobsahuje informaci MIME o použitém kódování, okno se seznamem poštovních zpráv zobrazí zprávu v kódování nastaveném ve vlastnostech složky (pomocí nabídky Úpravy -&gt; Vlastnosti složky...). Pokud nastavíte toto kódování na kódování, které se v poště vyskytuje nejčastěji, vyhnete se obvykle tomuto problému.</p>

<h4>Java</h4>
<p>Byly oznámeny případy o problémech uživatelů japonské verze Windows9x/ME se startem Mozilly, pokud měli instalovánu starší verzi JDK nebo JRE. Verze JRE 130_02 (nebo novější), kterou si uživatelé Mozilly mohou stáhnout z ftp serveru firmy Netscape, obsahuje mnoho opravených chyb oproti oficiální verzi JRE 1.3. Pokud používáte strarší verzi JRE 1.3 nebo americkou verzi JRE 1.3 s Japonskými/Čínskými/Korejskými Windows, může vás postihnout tento problém a Mozilla se nespustí.</p>
<p>Zda je problém se spouštěním Mozilly způsoben instalací Javy poznáte, pokud provedete následující kroky:</p>
<ol>
	<li>Otevřte si adresář pluginů Mozilly (nachází se ve stejném adresáři jako Mozilla).</li>
	<li>Odstraňte soubory Javy z tohoto adresáře, tzn. všechny soubory začínající "npjava...". Odstraňte rovněž soubor NPOJI610.DLL, pokud se v tomto adresáři vyskytuje. Tyto soubory zálohujte, abyste je v budoucnu mohli opět vrátit.</li>
	<li>Restartujte Mozillu. Pokud se nyní Mozilla spustí, pak se jednalo o problém s Javou.</li>
</ol>

<p>Pokud máte výše popsaný problém s Javou nebo si přejete instalovat updatovanou verzi JRE 130_02 (nebo novější), kterou můžete získat z ftp serveru firmy Netscape, postupujte dle následujících kroků (Poznámka: Tento problém nebyl dosud oznámen u Windows NT4/2000, ale pokud se vyskytne i na těchto platformách, postupujte podle stejného návodu):</p>
<ol>
	<li>Klikněte na tlačítko Start, zvolte Nastavení a Ovládací panely.</li>
	<li>Dvojklikněte na ikonu 'Přidat nebo odebrat programy' a vyberte záložku 'Instalovat či odinstalovat'.</li>
	<li>Najděte starou instalaci JRE (Java Runtime Environment) a odstraňte ji.</li>
	<li>Po odstranění staré instalace JRE spusťte Mozillu a zobrazte si jakoukoliv stránku, která pro své zobrazení vyžaduje Javu. Uvidíte plug-in ikonu, která vás vybízí, abyste na ni klikli a stáhli si Java Plugin (zásuvný modul).</li>
	<li>Po kliknutí na ikonu 'Získat Java Plugin' budete přemístěni na stránku firmy Netscape určené pro stažení zásuvných modulů (pluginů) pro Mozillu.</li>
	<li>Stáhněte "Mezinárodní" verzi, pokud chcete zobrazovat znaky neobsažené v základním kódování (to se týká i českých uživatelů!).</li>
	<li>Nechte se vést instrukcemi instalačního programu a dokončete instalaci Javy 2.</li>
</ol>

<p><strong>Mac OS a Linux:</strong> Zobrazování ne-ASCII znaků (zej. čínských, korejských a japonských) v Java apletech nemusí fungovat bez správného nastavení souborů <tt>font.properties</tt>. Verze pro Windows jsou dodávány s modifikovanými soubory <tt>font.properties</tt>. Uživatelům Macu a Linuxu poradí <a href="http://home.netscape.com/eng/intl/ns6-jrefontinfo.html">tento document</a>.</p>

<h3 id="qfa">Quality Feedback Agent (automatické zasílání zpráv o chybách) a automatická konfigurace proxy</h3>
<p><strong>Windows:</strong> Pokud používáte automatickou konfiguraci proxy a chcete používat 'Full Circle Talkback Quality Feedback Agenta" (Agenta zasílání zpráv o chybách) pro zaslání zpráv na mozilla.org, musíte přepsat soubor <tt>talkback.ini</tt>. Tento soubor obsahuje konfiguraci proxy. Postupujte dle těchto kroků:</p>
<ol>
	<li>Pokud používáte HTTP proxy nebo jak HTTP tak SOCKS proxy, vytvořte soubor <tt>talkback.ini</tt> s těmito třemi řádkami, do kterých napíšete jméno vašeho proxy serveru, doménu a port:
	<p><code>UseUserHTTPProxyInfo=1<br /> UserHTTPProxyHost="nazevproxy.nazevdomeny.com"<br /> UserHTTPProxyPort=xxxx</code></p>
	kde <tt>xxx</tt> je číslo portu vaší proxy.
	<p>Pokud používáte SOCKS proxy, vytvořte soubor o následujících třech řádkách:</p>
	<p><code>UseUserSOCKSInfo=1<br />UserSOCKSHost="nazevproxy.nazevdomeny.com"<br />UserSOCKSPort=xxxx</code></p>
	kde <tt>xxx</tt> je číslo portu vašeho SOCKS.
	</li>
	<li>Nahraďte původní soubor <tt>talkback.ini</tt> vaším právě vytvořeným souborem.</li>
</ol>
<p>Na Windows 95 a Windows NT zkopírujte soubor <tt>talkback.ini</tt> do následujícího podadresáře v adresáři s Mozillou : <span class="HIDETODO"><tt>\Fullsoft\data\talkback.ini</tt></span><!-- spatna cesta --></p>

<h2 id="setprefs">Nastavování předvoleb pomocí user.js</h2>
<p>Mozilla je velice konfigurovatelný program a není prostor pro zahrnutí všech možností její konfigurace do uživatelského rozhraní. Pokud potřebujete nastavit nějakou předvolbu, která nelze nastavit prostřednictvím grafického uživatelského rozhraní, budete muset editovat soubor <tt>user.js</tt>. Jak to udělat radí následující návod.</p>
<p>Soubor <tt>user.js</tt> je Mozillou načítán při každém nahrávání vašeho profilu, proto, pokud tento soubor změníte během práce s Mozillou, změny se projeví až při příštím spuštění Mozilly. Pokud se ve <a href="#profileloc">vašem profilu</a> tento soubor nevyskytuje, vytvořte jej a vložte do něj řádky s vaším nastavením, které by měly mít formu podobnou následujícímu zápisu:</p>
<p><code>user_pref("foo.bar.baz", "nejakahodnota");</code><br />nebo
<code>user_pref("foo.bar.baz", true);</code></p>
<p>pro zapnutí či vypnutí dané volby. Po dokončení editace tohoto souboru restartujte Mozillu.</p>

<h2 id="devel">Poznámky pro webové vývojáře</h2>
<p>Seznam známých problémů s podporou webových standardů (<acronym title="HyperText Markup Language">HTML</acronym> 4.01, <acronym title="Cascading Style Sheets">CSS</acronym><a title="CSS1 Technical Report" href="http://www.w3.org/TR/REC-CSS1">1</a>/<a title="CSS2 Technical Report" href="http://www.w3.org/TR/REC-CSS2/">2</a>, <acronym title="Document Object Model">DOM</acronym><a title="DOM1 Technical Report" href="http://www.w3.org/TR/REC-DOM-Level-1/">1</a>/<a title="DOM2Technical Report" href="http://www.w3.org/TR/1999/CR-DOM-Level-2-19991210/">2</a>, <a title="ExtensibleMarkupLanguage" href="http://www.w3.org/XML/">XML</a>, <a title="ResourceDescriptionFramework" href="http://www.mozilla.org/rdf/doc/">RDF</a>), JavaScriptu, <a title="Java Language Specification" href="http://java.sun.com/docs/books/jls/index.html">Javy</a>, and pluginů (zásuvných modulů) naleznete v následujících dokumentech:</p>

<ul>
	<li><a href="http://www.mozilla.org/docs/web-developer/bugspecs/REC-CSS1.html">http://www.mozilla.org/docs/web-developer/bugspecs/REC-CSS1.html</a></li>
	<li><a href="http://developer.netscape.com/docs/technote/gecko/n6release.html">http://developer.netscape.com/docs/technote/gecko/n6release.html</a></li>
</ul>
<p>Pokud stránka používá deklaraci typu dokumentu strict (např. HTML 4.01 Strict), odkazy na externí kaskádové styly (prostřednictvím &lt;link&gt;, @import atd.), Mozilla styl nahraje pouze, pokud je nabízen s MIME typem "text/css". Kaskádové styly nabízené s jiným MIME typem jako jsou <tt>text/plain</tt>, <tt>application/x-pointplus</tt> aj. nebudou nahrány. Správný MIME typ do web serveru Apache přidáte řádkem "<tt>text/css css</tt>" do souboru <tt>mime.types</tt>. Nebo, pokud můžete, přidejte řádek "<tt>AddType text/css .css</tt>" do vašeho souboru <tt>.htaccess</tt>.</p>
<!-- Its not a bug, its a feature.  Commented out because this is marked
     fixed and don't want this item to be deleted
(Bug <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=46225" title="Bug 46225 - Mozilla ignores the HTTP mimetype of stylesheets.">46225</a>)
-->

<h2 id="webdev">Jak se můžete zapojit do vývoje Mozilly</h2>
<ul>
	<li>Připojte se k nám na <a href="http://www.mozillazine.org/articles/article2151.html">Dnu chyb (Bug Day)</a>. Pokud chcete pomoci s testováním Mozilly, ale nevíte kde začít, připojte se k nám každý čtvtek nebo pátek na <a href="irc://irc.mozilla.org/%23mozillazine">#mozillazine</a> (<a href="http://www.mozillazine.org/chat/">Java IRC klient</a>) <a href="http://www.irchelp.org">IRC</a> komunikačním kanálu na irc.mozilla.org. Můžete zde potkat přátelské Mozillidi, Mozillány a Mozillanky, kteří vám pomohou ve vašich začátcích.</li>
	<li>Připojte se k <a href="http://www.mozilla.org/newlayout/bugathon.html">Bug-A-Thon</a>. <span class="HIDETODO">Pokud umíte skriptovat , můžete zjednodušit testy.</span><!-- vubec nerozumim --></li>
	<li>Připojte se k projektu <a href="http://mozilla-evangelism.bclary.com">mozilla evangelism</a> (<a href="irc://irc.mozilla.org/%23evangelism">#evangelism</a>), jedná se o projekt organizace Mozilla, který se snaží zajišťovat, aby webové stránky byly kompatibilní s platnými standardy.</li>
	<li>A jestli vám toto nestačí, podívejte se na <a href="http://www.mozilla.org/get-involved.html">doporučení pro všechny, kdo se chtějí zapojit do vývoje Mozilly</a>.</li>
</ul>

<h2 id="otherbuilds">Kde nalézt další verze</h2>
<ul>
	<li>Poslední verzi Mozilly si stáhněte z <a href="http://www.czilla.cz/stahnout/">czilla.cz</a> nebo <a href="http://www.mozilla.org/releases/">mozilla.org</a></li>
	<li>Pokud chcete (pouze pro testovací účely) vyzkoušet dnes zkompilovanou Mozillu, získáte ji přes ftp z <a href="http://ftp.mozilla.org/pub/mozilla/nightly/">mozilla.org</a></li>
	<li>V případě potřeby si můžete zkompilovat Mozillu sami. Jak na to se dozvíte <a href="http://www.mozilla.org/source.html">v tomto návodu</a>.</li>
</ul>


<p><small>Tento dokument je překladem <a href="http://www.mozilla.org/releases/mozilla1.3b/">dokumentu z mozilla.org</a>. Copyright &copy; 1998-2003 The Mozilla Organization</small></p>

<?php
	$page->includeTemplate('footer');
?>
