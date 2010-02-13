<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Poznámky k vydání verze 1.4');
	$page->setHeadline('Poznámky k vydání','Verze 1.4 - známé problémy');
	$page->setKeywords ('mozilla, suite, poznámky k vydání, verze, gecko, prohlížeč, poštovní klient, editor, chatzilla');
	$page->setDescription ('Poznámky k vydání historické verze 1.4');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>

<p>V této části <a href="index.php">poznámek k vydání verze Mozilly 1.4</a> naleznete popis známých chyb a problémů týkajících se používání Mozilly 1.4.</p>

<dl class="description">
<dt><a href="#general">Obecné</a></dt>
<dd>
<dl>
	<dd><a href="#focus">Dialogová okna a Windows</a></dd>
	<dd><a href="#java">Java</a></dd>
	<dd><a href="#scrollwheel">Posunování dokumentu kolečkem myši</a></dd>
	<dd><a href="#plugins">Pluginy (zásuvné moduly)</a></dd>
	<dd><a href="#prefs">Předvolby</a></dd>
	<dd><a href="#printing">Tisk</a></dd>
	<dd><a href="#profiles">Profily</a></dd>
	<dd><a href="#proxies">Proxy</a></dd>
	<dd><a href="#quicklaunch">Rychlé spouštění</a></dd>
	<dd><a href="#psm">Zabezpečení</a></dd>
</dl>
</dd>

<dt><a href="#browser">Prohlížeč (Navigátor)</a></dt>
<dd>
<dl>
	<dd><a href="#browser-general">Prohlížeč - obecné</a></dd>
	<dd><a href="#pages">Zobrazování webových stránek</a></dd>
	<dd><a href="#download">Stahování souborů</a></dd>
	<dd><a href="#view-source">Zobrazení zdrojového kódu</a></dd>
</dl>
</dd>

<dt><a href="#mail">Pošta a diskusní skupiny (Messenger)</a></dt>
<dd>
<dl>
	<dd><a href="#mail-general">Pošta - obecné</a></dd>
	<dd><a href="#smtp">SMTP</a></dd>
	<dd><a href="#aolmail">Poštovní účty AOL Mail a Netscape WebMail</a></dd>
	<dd><a href="#address">Databáze kontaktů</a></dd>
	<dd><a href="#PostOfficeProtocol">Pop a IMAP</a></dd>
	<dd><a href="#news">Diskusní skupiny</a></dd>
	<dd><a href="#ldap">LDAP</a></dd>
	<dd><a href="#offline-mail">Pošta offline</a></dd>
</dl>
</dd>

<dt><a href="#composer">Editor (Composer)</a></dt>
<dt><a href="#venkman">Ladicí program (Debugger) JavaScriptu</a></dt>
<dt><a href="known-issues-int.php">Problémy s lokalizací</a></dt>

</dl>


<h2 id="general">Obecné</h2>
<h3 id="focus">Dialogová okna a Windows</h3>
<p>Pokud Mozilla nereaguje, ale nezdá se, že by zamrzla, zkontrolujte, zda nemáte někde stále otevřeno dialogové okno. Minimalizujte všechna okna na vaší pracovní ploše a pokud odjevíte dialogové okno Mozilly, zavřete ho. Pokud používáte více pracovních ploch, bude nutné toto provést pro všechny používané pracovní plochy.</p>

<p>Tento problém se objevuje u uživatelů stahujících zásuvné moduly (pluginy). Pro řešení postupujte dle následujících  kroků:</p>

<ol>
	<li>Minimalizujte okno se stahovaným zásuvným modulem.</li>
	<li>Zrušte dialogové okno tlačítkem Zrušit (Cancel).</li>
	<li>Znovu otevřte okno a pokračujte ve stahování zásuvného modulu.</li>
</ol>


<h3 id="java">Java</h3>
<p>Linuxové binárky distribuované mozilla.org jsou nyní kompilovány kompilátorem GCC 3.2. Pokud používáte takto kompilované binárky, budete potřebovat 3.2 verzi Java pluginu z <a href="http://java.sun.com/j2se/1.4.2/download.html">Sun J2SE v 1.4.2</a> (nebo Blackdown JDK 1.4.1 kompilovaný GCC 3.2). Sun Java Plugin je kompatibilní s verzemi Linuxu Red Hat 8 a novější a SuSE 8.1 a novější (plugin závisí na novější verzi libgcc_s.so instalované jako dodatek GCC pro Red Hat 7.3 - GCC 3.1 Compiler Suite pro Red Hat Linux 7.3 - tak lze spustit plugin i na starších verzích Red Hatu). Uživatelé starších verzí Linuxu mohou buď instalovat <a href="ftp://ftp.mozilla.org/pub/mozilla.org/mozilla/releases/mozilla1.4">egcs 1.1.2 build Mozilly</a> a JRE 1.4.1 nebo počkat na Mozillu zkompilovanou pro jejich distribuci Linuxu.</p>

<p>Při vstupu na server, který vyžaduje HTTP identifikaci ke stažení Java apletu, který rovněž vyžaduje identifikaci, je uživatel nucen se zalogovat dvakrát se stejným uživatelským jménem a heslem. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=60304" title="Bug 60304 - Basic Auth doesn't work for Java">60304</a>)</p>

<p>Verze Javy J2SE starší než 1.3.0_01 pod Mozillou nefungují. U JRE 1.3.1 byly oznámeny problémy. Doporučujeme proto JRE 1.4.1. Mozilla byla testována se všemi verzemi 1.3.0_* JRE a JRE 1.3.1 a beta verzemi JDK 1.4.</p>

<p>Spuštění J2SE v módu 256 barev může způsobit blikání.</p>

<p>JRE firmy Sun spadne při startu, pokud 'useragent' (identifikační řetězec prohlížeče) nezačíná 'Mozilla/5'. Může vypsat <code>Expected a version &gt; 5! Version = 4</code> Řešením je nesnažit se nastavovat 'useragent', jehož verze je menší než 5, pokud máte Sun JRE ve vašem adresáři s pluginy. Nastavení 'useragent' v souboru <tt>pref.js</tt> vypadá např. takto: <code>user_pref("general.useragent.override", "Mozilla/4.0 (compatible; MSIE 5.0; Windows 98;)");</code>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=83376" title="Bug 83376 - Crash when loading Java Plugin if UserAgent string as MSIE">83376</a>)</p>


<h3 id="scrollwheel">Posunování dokumentu kolečkem myši</h3>
<p>V Linuxu, musíte mít váš X server nakonfigurovaný pro používání kolečka myši. U XFree86 přidejte do sekce Pointer v souboru <tt>XF86Config</tt> "<tt>ZAxisMapping 4 5</tt>". Také zkontrolujte, zda máte správně nastavený protokol pro vaši myš.</p>

<p>Ve Windows posunování dokumentů kolečkem myši nepracuje dobře se všemi ovladači myši. Pokud narazíte na problém, upgradujte váš ovladač myši nebo zkuste vypnout pomocné programy, které vaše myš používá. Pokud vlastníte myš Logitech, můžete buď upgradovat ovladač (na alespoň v9.60) nebo zapnout nastavení "Microsoft Office compatible scrolling" v ovládacích panelech Myš/Tlačítka.</p>

<p>Starší ovladače pro Synaptic touchpad na Windows neumožňují scrollování. Nový ovladač získáte z <a href="http://www.synaptics.com/support/downloads.cfm">synaptics.com</a>.</p>

<p>Na Macintoshích nepracuje posunování dokumentů kolečkem myši dobře se všemi ovladači myši. Pokud narazíte na problém, aktualizujte váš ovladač myši nebo zkuste vypnout pomocné programy, které vaše myš používá.</p>


<h3 id="plugins">Pluginy (zásuvné moduly)</h3>
<p>Pluginy instalované pro Communicator 4.<em>x</em> nemusí být v Mozille dostupné. Řešení: instalujte tyto pluginy do adresáře pluginů Mozilly.</p>

<p>Adobe SVG plugin pro Mozillu na OS Windows padá. Řešení: nekopírujte jej (NPSVG3.dll NPSVG3.zip) do vašeho adresáře pluginů. Pokud chcete prohlížet SVG, lze sehnat speciální verze Mozilly se zabudovanou podporou SVG. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=133567" title="Bug 133567 - M1RC1; Crash because Adobe SVG plugin used an unfrozen inter">133567</a>)</p>

<p>Pod OS Windows nemusí soubory Microsoft Media Playeru na webových stránkách fungovat. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=66015" title="Bug 66015 - Windows Media Player broken on NT and 95 only">66015</a>)</p>

<p>Pokud používáte Linuxové binárky GCC 3.2 kompilované mozilla.org, nebude fungovat přístup k JavaScriptu z Flashe.</p>

<p>Na Linuxu může nastat problém s ESD Audio a Flashem. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=85772" title="Bug 85772 - [WORKAROUND] linux flash plugin can't find ESD socked (no so">85772</a>)</p>

<p>Mnoho problémů s Flashem na Linuxu vyřeší upgrade na Flash 6.</p>

<p>Na Mac OS X nefungují soubory Microsoft Media Playeru vložené do webových stránek. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=119045" title="Bug 119045 - OSX: Windows Media Plug-in fails on initialize">119045</a>)</p>


<h3 id="prefs">Předvolby</h3>
<p>Nesdílejte profily mezi Netscapem a <acronym title="nightly builds">nočními verzemi</acronym> Mozilly. Pokud to učiníte, může to vést k nepředpověditelným následkům. Např. ztráta nastavení hledání, předvoleb a růst souboru se záložkami (následkem čehož může zamrznout celý váš systém). Nejlepší je vytvořit zvláštní profily pro oba programy nebo manuálně zkopírovat (a přejmenovat) již existující profil. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=137164" title="Bug 137164 - Sharing the same profile with NS +Moz seems to cause RDF hor">137164</a>)</p>

<p>Pokud používáte téma vzhledu Classic, některé panely v předvolbách se nezobrazí správně, některé prvky těchto panelů mohou dokonce chybět. Pokud se přepnete do jiného panelu předvoleb a pak se vrátíte k původnímu, měl by se zobrazit správně. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=51241" title="Bug 51241 - [Classic] fixed-width font size menulist in prefs not displa">51241</a>)</p>

<p>Dialogové okno 'Předvolby' se někdy zobrazí s počáteční velikostí, která nepojme všechny prvky panelů. Změňte velikost okna, abyste je viděli všechny. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=53375" title="Bug 53375 - Sizing of Preferences menu gives no hints on all options ava">53375</a>)</p>


<h3 id="printing">Tisk</h3>
<p>Někteří uživatelé nebudou schopni tisknout na Windows 98 nebo Windows ME při výchozím nastavení tisku. Řešením je změnit nastavení tisku v Ovládacích panelech tisku. Ve vlastnostech tiskárny, na záložce 'Podrobnosti' vyberte 'Zařazování' (Spool settings) a vyberte 'Tisknout přímo na tiskárnu' (print directly to printer). (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=130083" title="Bug 130083 - unable to print on Win 98/ME with default spool setting">130083</a>)</p>

<p>Na Linuxu je funkce náhled tisku (lišty, tisk z náhledu tisku, vzhled stránky atd.) plně funkční pouze s nestandardním modulem Xprint. (seznam <a href="https://bugzilla.mozilla.org/buglist.cgi?bug_id=119491,126802,127810,129507">chyb</a>)</p>

<p>V náhledu tisku se nezobrazují pluginy. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=134002" title="Bug 134002 - Plugins/applets don't render in print preview">134002</a>)</p>

<p>Na Macintoshi a Linuxu je průhledné pozadí vytištěno černě. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=137114" title="Bug 137114 - Transparent backgrounds are printed as black on Mac">137114</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=137115" title="Bug 137115 - Transparent backgrounds are printed as black in PostScript">137115</a>)</p>

<p>Tisk zprávy diskusní skupiny, která obsahuje obrázky, může způsobit pád aplikace. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=92659" title="Bug 92659 - Doesn't print news msgs with images.">92659</a>)</p>

<p>Binárky pro Unix/Linux obsahují alternativní tiskový modul <em>Xprint</em> podporující <a title="Common Unix Printing System" href="http://www.cups.org/">CUPS</a>, <a href="http://www.lprng.com/">LPRng</a>, <a title="Mathematical Markup Language" href="http://www.mozilla.org/projects/mathml/">MathML</a>, TrueType fonty a PostScript/<acronym title="Adobe Portable Document Format">PDF</acronym>/<acronym title="Printer Control Language">PCL</acronym> výstup. Více informací naleznete na <a href="http://xprint.mozdev.org/">xprint.mozdev.org</a>, podrobné informace naleznete na stránkách <a href="http://www.mozilla.org/projects/xprint/">projektu Xprint</a>.</p>


<h3 id="profiles">Profily</h3>
<p>Pokud ve správci profilů (profile manager) přejmenujete profil na již používaný název, všechny vaše předvolby mohou být ztraceny. Řešení: když přejmenováváte profil, použijte dosud neexistující název. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=113203" title="Bug 113203 - Data loss with renaming profiles">113203</a>)</p>

<p>Pokud nastane problém během instalace a profil pocházející z Netscape Comunicatoru nebyl zkopírován a zkonvertován, můžete takový profil stále použít. Spusťte Mozillu z příkazové řádky s parametrem "<tt>-installer</tt>" (napište "<tt>mozilla.exe -installer</tt>" do příkazové řádky), nebo reinstalujte Mozillu, aby se vám znovu objevil dialog správce profilů.</p>


<h3 id="proxies">Proxy</h3>
<p>Pro ruční nastavení proxy Mozilla akceptuje pouze jména počítačů (hostname). Pokud váš profil vznikl migrací z Netscape Comunicatoru 4, budete muset tato nastavení změnit ručně. Comunicator 4 povoluje URL v ručním nastavení, ale Mozilla nikoliv. Pokud používáte profil vzniklý touto migrací, musíte změnit URL na jméno počítače a číslo portu. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=30387" title="Bug 30387 - Proxy: manual config does not support URLs (http://)">30387</a>)</p>


<h3 id="quicklaunch">Rychlé spouštění</h3>
<p>Po uzavření posledního okna se Mozilla dočasně uvolní z paměti a opět nahraje, což jistou dobu trvá. To pravděpodobně vyvolá značnou aktivitu pevného disku. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=143764" title="Bug 143764 - Quick Launch doesn't work with multiple profiles">143764</a>)</p>

<p>Po uzavření posledního okna ikona v systray zmizí a znovu se objeví na jeho konci. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=146340" title="Bug 146340 - quick launch icon disappears for a second after closing last window">146340</a>)</p>


<h3 id="psm">Zabezpečení</h3>
<p>Nejsou dostupné žádné zpětné informace při obnovování certifikátu k zařízení 'smart card', což může trvat dlouho, protože zařízení 'smart card' jsou pomalá zařízení. Ve výsledku se může zdát, že k vlastnímu obnovení nedošlo. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=52321" title="Bug 52321 - need watch cursor when restoring certs">52321</a>)</p>

<p>Z bezpečnostních důvodů Mozilla nepovoluje připojení k některým portům. Pokud to chcete změnit, přidejte čárkou oddělený seznam portů do souboru <tt>defaults/all.js</tt> v adresáři, do kterého byla Mozilla nainstalována. Tato možnost funguje pouze v souboru <tt>all.js</tt> v instalačním adresáři Mozilly a dotkne se všech uživatelů. Nefunguje, pokud ji přidáte do souboru <tt>prefs.js</tt> nebo <tt>user.js</tt> v <a href="#profileloc">uživatelském profilu</a>. Např. pokud chcete zpřístupnit porty 1, 3 a 7, použijte tento zápis:</p>

<p><code>pref("network.security.ports.banned.override", "1,3,7");</code></p>

<p>Z bezpečnostních důvodů Mozilla nedovolí odkazovat se webovým stránkám na lokální soubory. V takovém případě se objeví v konzoli JavaScriptu chybová hláška: <b>Chyba v zabezpečení: Obsah na stránce <i>url</i> nemůže načíst data nebo odkaz z <i>file:///cestaksouboru</i></b> Pokud potřebujete takové linky provozovat, přetáhněte link myší do 'Pole adresa'. Pokud nemáte rádi zabezpečovací kontroly a risknete dostupnost souborů vašeho systému, můžete toho docílit přidáním následující řádky do souboru user.js ve <a href="#profileloc">vašem profilu</a>. <code>user_pref("security.checkloaduri", false);</code> (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=84128" title="Bug 84128 - Need user-visible message when CheckLoadURI fails (eg, for links to file: urls)">84128</a>)</p>

<p>Na OS Windows mohou některé firewally blokovat Mozille přístup k internetu. Pokud Mozilla nefunguje správně, zkontrolujte, zda jste ji ve vašem firewallu povolili přístup k internetu. Pokud vás ZoneAlarm upozorní, že se Mozilla chová jako lokální server, měli byste ji toto chování povolit. Týká se komunikace s Osobním správcem zabezpečení (<acronym title="Personal Security Manager">PSM</acronym>), který je potřebný pro přístup k zabezpečeným stránkám a poštovním serverům.</p>


<h2 id="browser">Prohlížeč (Navigátor)</h2>
<h3 id="browser-general">Prohlížeč - obecné</h3>
<p>Pokud máte otevřeno mnoho panelů (tabs) - (více než 25), některé panely mohou přestat reagovat. Řešení: Místo používání mnoha panelů v jednom okně prohlížeče použijte více oken prohlížeče.</p>

<p>Pokud je do adresy URL vloženo uživatelské jméno a heslo ve formě <tt>http://jmenouzivatele:heslo@nazevserveru.com</tt>, Mozilla nevaruje uživatele před použitím takových odkazů. Adresa URL s příliš dlouhým uživatelským jménem např. <tt>http://www.mozilla.org%2084230482304982304329048230948@fraudsite.com</tt> u uživatele vzbuzuje dojem, že míří na mozilla.org, ale ve skutečnosti směřuje na fraudsite.com. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=122445" title="Bug 122445 - Warn user if username/password encoded in link">122445</a>)</p>

<h3 id="pages">Zobrazování webových stránek</h3>
<p>Pokud se některé webové stránky zobrazují nesprávně, může to být způsobeno tím, že nevyhovují webovým standardům. Pro více informací si přečtěte <a href="http://devedge.netscape.com/">Netscape DevEdge</a> a <a href="http://www.mozilla.org/projects/tech-evangelism/">Mozilla Evangelism</a>.</p>

<p>Při používání Windows 98 s některými grafickými kartami ATI příležitostně dochází k poškození obrázků zobrazovaných na webových stránkách. Toto je chyba ovladače grafické karty ATI. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=104992" title="Bug 104992 - Rendering problems on win98 with older ATI vidcards">104992</a>)</p>

<p>Ačkoliv povolení 'proudového zpracování HTTP' (HTTP pipeling) může výrazně zrychlit nahrávání stránek, způsobí to, že stránky z některých serverů se nebudou nahrávat správně. Pokud narazíte na problém při nahrávání stránek, zkotrolujte, zda je vypnuto proudové zpracování (Předvolby | Rozšířené nastavení | HTTP spojení) a zkuste znovu nahrát danou stránku. Standardně je proudové zpracování vypnuto. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=144607" title="Bug 144607 - OCSP validation failure, -8073, -5961">144607</a>)</p>

<p>Mozilla nemusí být schopná se připojit k některým IBM Web serverům používajícím zabezpečené spojení HTTPS. Toto není způsobeno chybou Mozilly, ale samotného serveru. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=54031" title="Bug 54031 - uboc.com - Can't bring up UBOC bank at home login form.">54031</a>)</p>

<p>Přístup na stránky s Uniform Naming Convention (UNC) vyžaduje 5 lomítek (file://///). (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=66194" title="Bug 66194 - file:// Correct URLs w/ UNC have *5* slashes">66194</a>)</p>


<h3 id="download">Stahování souborů</h3>
<p>Pokud uživatel stahuje soubor na pozadí a ukončí Mozillu z menu <tt>Soubor</tt>, stahování bude ukončeno bez jakéhokoliv varování. Řešení: Ukončujte Mozillu až po dokončení stahování. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=28385" title="Bug 28385 - Alert user before Mozilla exit if files are still downloadinh">28385</a>)</p>


<h3 id="view-source">Zobrazení zdrojového kódu</h3>
<p>Na Macintoshi se v okně se zdrojovým kódem někdy neobjeví vodorovný posuvník. Aby se posuvník objevil, změňte velikost okna. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=56488" title="Bug 56488 - Resize widget (growbox) hides bottom arrow in scrollbar">56488</a>)</p>


<h2 id="mail">Pošta a diskusní skupiny (Messenger)</h2>
<h3 id="mail-general">Pošta - obecné</h3>
<p>Přemístění nebo zkopírování pojmenované zprávy (labeled message) nezachovává pojmenování, pokud probíhá mezi poštovními účty:</p>

<ol>
	<li>Z IMAP na jakýkoliv jiný účet (včetně lokální složky): pojmenování je ztraceno.</li>
	<li>Z POP na POP (včetně lokální složky) proběhne v pořádku.</li>
	<li>Z POP na IMAP: pojmenování je ztraceno.</li>
	<li>Z Diskusních skupin do kteréhokoliv účtu: pojmenování je ztraceno. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=133795" title="Bug 133795 - Mozilla 1.0 Release Notes Tracking Bug">133795</a>)</li>
</ol>

<p>V nastavení účtu: v dialogovém okně 'Nastavení Serveru' se změny provedené v nastavení 'lokálního adresáře' projeví až po restartu Mozilly. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=2654" title="Bug 2654 - localPath does not take effect until restart">2654</a>)
</p>

<p>Mozilla nevaruje uživatele, když začne docházet volné místo na pevném disku. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=32443" title="Bug 32443 - GetMsg currently does NOT detect out of disk space condition">32443</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=56565" title="Bug 56565 - No alert appears if low on disk space">56565</a>) Příznaky, podle kterých si můžete tohoto problému všimnout, jsou:</p>

<ul>
	<li>Kopírování zprávy do složky 'Odeslaná pošta' selže nebo se zkopíruje jenom část zprávy.</li>
	<li>POP: Mozilla hlásí, že našla nové zprávy, které stahuje, ale v složce 'Doručená pošta' se žádné nové zprávy neobjevily. Uzavřete Mozillu, uvolněte místo na disku, spusťte Mozillu a pokuste se stáhnout poštu znovu.</li>
	<li>IMAP: Mozilla hlásí, že našla nové zprávy, které stahuje, ale v složce 'Doručená pošta' se žádné nové zprávy neobjeví. Uzavřete Mozillu, uvolněte místo na disku, spusťte Mozillu a pokuste se stáhnout poštu znovu..</li>
</ul>

<p>Identita poštovního účtu se u neodeslaných zpráv neukládá. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=59548" title="Bug 59548 - Need to store Identity:  Send Unsent Msg case with webmail">59548</a>)</p>

<p>Pokud na Linuxu instalujete Mozillu jako root a po té ji spustíte jako normální uživatel, může se objevit problém zahrnující ukládání složek 'odeslaná pošta', 'koncepty', 'šablony' nebo obecné autentizační problémy. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=49397" title="Bug 49397 - Linux ONLY: Users run application from other directory encou">49397</a>)</p>
<p>Dialogové okno 'Nastavení účtu' se nezobrazí správně na monitorech s nízkým rozlišením (800x600 nebo 640x480). Pokud to je možné, zvyšte rozlišení vašeho monitoru na větší než 800x600. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=82122" title="Bug 82122 - Fix Account Manager window size">82122</a>)</p>

<h3 id="smtp">SMTP</h3>
<p>SMTP používané s SSL často nefunguje na portu 465 (standardní port pro zabezpečené SMTP spojení) ani na jakémkoliv jiném portu než 25. Je to způsobeno špatným zacházením protokolu se STARTTLS. Řešení: Použijte port 25. Pokud zvolíte nastavení "Použít zabezpečené spojení vždy" nebo "Použít zabezpečené spojení pokud je dostupné", bude spojení přesto zabezpečeno. Jinak Mozilla zamrzne. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=98399" title="Bug 98399 - SMTP over SSL broken except on port 25">98399</a>)</p>

<h3 id="aolmail">Poštovní účty AOL Mail a Netscape WebMail</h3>
<p>Mozilla narozdíl od Netscape 6/7 není integrována se službamy AOL Mail a Netscape WebMail. Pokud sdílíte váš profil Netscapu 6/7 s Mozillou a vytvořili jste si jeden z výše zmíněných účtů, budete moci vidět hlavičky zpráv ve složce 'doručená pošta', ale nebudete schopni s těmito zprávami pracovat. Pro přístup k AOL Mailu, WebMailu nebo službě Netscape Instant Messenger budete potřebovat program Netscape 6/7.</p>

<h3 id="address">Databáze kontaktů</h3>
<p>Mozilla neimportuje databasi kontaktů s Netscape Communicator 4.x. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=35509" title="Bug 35509 - Hooking up automatic 4.x address book import in the mozilla code base">35509</a>)</p>

<p>Abyste mohli importovat databázi kontaktů z programu Outlook, musíte mít v programu MS Internet Explorer nastaven poštovní klient "Microsoft Outlook". (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=90206" title="Bug 90206 - Outlook Import sometimes unable to find">90206</a>)</p>

<h3 id="PostOfficeProtocol">Pop a IMAP</h3>
<p>Pokud změníte nastavení 'Zobrazit všechny IMAP složky' nebo 'Zobrazit pouze přihlášené IMAP složky' v nastavení serveru 'Rozšířené', musíte restartovat Mozillu, aby se změna projevila. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=38943" title="Bug 38943 - Need to restart to see result of check/uncheck 'show only su">38943</a>)</p>

<h3 id="news">Diskusní skupiny</h3>
<p>Dialog 'Přihlásit' nemusí fungovat u diskusních serverů, které vyžadují autentizaci. Pokud budete prohlížet diskusní skupinu, jež je chráněna heslem, budete dotazováni několikrát po sobě na vaše uživatelské jméno a heslo.</p>

<h3 id="ldap">LDAP</h3>
<p>Po migraci profilu z Comunicatoru 4.x se mohou objevit LDAP adresáře s rozšířením <tt><a title="LDAP Data Interchange Format" href="http://developer.netscape.com/docs/manuals/directory/admin30/ldif.htm">ldif</a></tt>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=94645" title="Bug 94645 - LDAP directory with ldif extention appeared after migration">94645</a>)</p>

<p>Při doplňování (autocomplete) LDAP může Mozilla dočasně zatuhnout, pokud je síťové spojení přerušeno. Konkrétně, pokud je LDAP server <acronym title="unreachable">nedostupný</acronym> (problémy se síťovým spojením), aplikace při snaze kontaktovat server zatuhne. Aplikace opět začne reagovat na podněty uživatele cca za 10 sekund (doba vypršení časového limitu TCP). (chyba  <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=79509" title="Bug 79509 - avoid stalling out if ldap C SDK hangs during connect() (LDA">79509</a>)</p>


<h3 id="offline-mail">Pošta offline</h3>
<p>Přesouvání a kopírování stažené pošty (pokud jste offline) způsobí, že nebudete schopni číst zprávy v nové složce dokud zůstanete offline. Řešení: Přejděte do stavu online, abyste je mohli přečíst, po té znovu stáhněte zprávy, abyste je měli přístupné i ve stavu offline. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=78809" title="Bug 78809 - Offline:Offline copy of an imap message moved offline is los">78809</a>)</p>

<p>Pokud máte vytvořen jen jeden profil, tak po startu Mozilly nefungují předvolby <acronym title="Ask me if I want online or offline mode">Zeptat se zda-li přepnout do módu online/offline</acronym> a <acronym title="Use my previous online/offline state">Použít předchozí stav online/offline</acronym>. Pro přepnutí do offline vyberte v nabídce Soubor 'Pracovat offline'. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=82487" title="Bug 82487 - offline: Startup mode doesn't work - 'remember my prev mode' o">82487</a>)</p>

<h2 id="composer">Editor (Composer)</h2>
<p>Pokud při publikování obsahuje 'Adresa pro zveřejnění', název souboru, uživatelské jméno nebo heslo speciální znaky (např. "@"), Editor vytvoří duplicitní položku 'sídla pro zveřejnění' vždy, když budete publikovat váš dokument. Tento problém lze obejít, pokud vyberete původní 'Název sídla' ze seznamu 'Sídel pro zveřejnění' v dialogovém okně 'Nastavení pro publikování' před každým dalším publikováním dokumentu. Příklad: někteří uživatelé mají svá uživatelské jména stejná se svými e-mailovými adresami, např. 'janedoe@ispname.net'. Po publikování se při příštím zobrazení dialogového okna 'Nastavení pro publikování' zobrazí uživatelské jméno jako 'janedoe%40ispname.net' (znak '@' byl nahrazen escape sekvencí). Protože Editor nenalezne tuto položku, vytvoří kopii. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=141819" title="Bug 141819 - Publish URL, filename, username, and password need to be une">141819</a>)</p>

<p>Není možné zároveň editovat dokument v Editoru (Composeru) a externím editoru. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=27820" title="Bug 27820 - When the editor gets focus check for changes">27820</a>)</p>

<p>Některé stránky (např. takové, které obsahují definici rámů) nemohou být editovány. Ačkoliv i u těchto stránek můžete vybrat v nabídce prohlížeče 'Soubor -&gt; Upravit stránku', po otevření Editoru nebudete schopni takovou stránku editovat.</p>

<p>Funkce Upravit | <acronym title="Paste as">Vložit jako</acronym> nefunguje. (chyby <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=73286" title="Bug 73286 - Paste Special feature have clipboard 'flavors'">73286</a>, <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=41547" title="Bug 41547 - Paste Special submenu needed - paste cells as Rows or Column">41547</a>)</p>

<p>Nelze tisknout zdrojový kód HTML. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=82239" title="Bug 82239 - can't print HTML source">82239</a>)</p>

<p>Některé klávesové zkratky nefungují správně. (seznam <a href="https://bugzilla.mozilla.org/buglist.cgi?bug_id=48375,67142,57700,26264,48951,76925,57805,70630,70630,26269,53505">chyb</a>)</p>

<p>Ukazatel myši s přesýpacími hodinami se nezobrazí, když je aplikace zaneprázdněna. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=83300" title="Bug 83300 - show busy cursor when pasting and other slow actions">83300</a>)</p>

<p>Ikony některých HTML značek se nezobrazí v módu 'Zobrazit všechny značky'. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=88036" title="Bug 88036 - Make AllTags mode in Composer use generated content instead">88036</a>)</p>

<p>Při úpravě seznamů dochází k přesunutí položek vnořeného seznamu do rodičovského. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=98547" title="Bug 98547 - sublists can get pulled up into parent list when changing li">98547</a>)</p>


<h2 id="venkman">Ladicí program (Debugger) JavaScriptu</h2>
<p>Pokud učiníte plovoucími všechna podokna, není možnost, jak je jednoduše vrátit zpět do původního zobrazení (ve kterém byla na obrazovce rozdělena do více sekcí). Pokud máte zapnutu volbu 'Uložit rozložení při ukončení programu' (Save Default Layout On Exit), tak tento nepříjemný stav potrvá stále. Řešení: pomocí nabídky View -&gt; Show/Hide zobrazte podokno 'Interactive Session' a do jeho editačního řádku napište "<tt>/restore-layout factory</tt>". (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=151785" title="Bug 151785 - Once all the views are floated, no way to put them back">151785</a>)</p>


<p><small>Tento dokument je překladem <a href="http://www.mozilla.org/releases/mozilla1.4/known-issues.html" title="Originální dokument">dokumentu</a> z <a href="http://www.mozilla.org/" title="Web neziskové organizace Mozilla Foundation">mozilla.org</a>. Copyright &copy; 1998-2003 The Mozilla Organization</small></p>

<?php
	$page->includeTemplate('footer');
?>
