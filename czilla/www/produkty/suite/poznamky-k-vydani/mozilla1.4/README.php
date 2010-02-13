<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Poznámky k vydání verze 1.4');
	$page->setHeadline('Poznámky k vydání','Verze 1.4 - co je nového?');
	$page->setKeywords ('mozilla, suite, poznámky k vydání, verze, gecko, prohlížeč, poštovní klient, editor, chatzilla');
	$page->setDescription ('Poznámky k vydání historické verze 1.4');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>

<h2>Co je nového?</h2>
<p>Tato část <a href="index.php">poznámek k vydání verze Mozilly 1.4</a> ukazuje na nové funkce implementované do Mozilly 1.4, na opravy závažných chyb a na nové problémy. Jedná se pouze o přehled, nikoliv o kompletní seznam všech nových vlastností, oprav či chyb.</p>

<h3 id="new">Opravy chyb a nové funkce</h3>
<ul>
	<li>Verze pro Windows nyní podporuje NTLM autentizaci, což Mozille umožňuje komunikovat s MS weby a proxy servery, které používají "windows integrated security".</li>
	<li>Záložky byly přeuspořádány: jsou nyní vnořeny v kořenové složce, uživatel nyní může mít dvě odlišně pojmenované záložky ukazující na stejnou adresu, v <tt>Správci záložek</tt> se zobrazují ikony webů a oddělovače nyní mohou obsahovat popisky.</li>
	<li>Editor nyní umožňuje dynamicky měnit velikost obrázků a tabulek pomocí myši. Pokud je vybrán obrázek nebo se textový kurzor nachází v tabulce, zobrazí se osm aktivních bodů, které umožňují upravit rozměry obrázku či tabulky tažením myší. V případě obrázku se změna velikosti zobrazuje souběžně s pohybem myši a výsledné rozměry jsou tak pozorovatelné přímo jako průhledný stín obrázku. Zároveň je zobrazována aktuální velikost v jednotkách pixelů a relativní změna v pixelech jako <acronym title="Tooltip">plovoucí tip</acronym>.</li>
	<li>Poštovní klient nyní obsahuje v kontextové nabídce položky <tt><acronym title="junk-mail">nevyžádaná pošta</acronym></tt> a <tt>odstranit nevyžádaný mail</tt> a další vylepšení týkající se práce s nevyžádanou poštou.</li>
	<li>Bylo vylepšeno blokování vyskakovacích (popup) oken.</li>
	<li>Uživatelé mohou zvolit, zda se první či každé nové okno prohlížeče nebo každý nový panel prohlížeče zobrazí prázdný nebo s domovskou či posledně navštívenou stránkou.</li>
	<li>Uživatelé si mohou vybrat výchozí písmo, velikost a barvu pro editaci <abbr title="Hypertext Markup Language">HTML</abbr> v Editoru.</li>
	<li>Blokování a nenačítání obrázků je nyní flexibilnější a uživatelé si mohou "<tt>zobrazit obrázek</tt>" i v případě, že je normálně blokován či nenačítán.</li>
	<li>Byla povolena možnost spustit <tt>.exe</tt> soubory po stažení.</li>
	<li>Mozillu lze pro Win32 kompilovat pomocí GCC - <a href="http://www.mozilla.org/build/win32.html">více informací</a>.</li>
	<li>Byla implementována autokonfigurace proxy (PAC).</li>
	<li>V Mozille 1.4 byly opraveny tisíce dalších chyb, které zahrnují snahy o její zrychlení, zvýšení stability, webové kompatibility a podpory standardů.</li>
</ul>

<h3 id="new-issues">Nové problémy</h3>
<p>Níže uvedené položky byly přidány do seznamu <a href="known-issues.php">známých problémů</a> po vydání této verze Mozilly. Samotné chyby mohly být známy již dříve.</p>
<ul>
	<li>Linuxové binárky distribuované mozilla.org jsou nyní kompilovány kompilátorem GCC 3.2. Pokud používáte takto kompilované binárky, budete potřebovat 3.2 verzi Java pluginu z <a href="http://java.sun.com/j2se/1.4.2/download.html">Sun J2SE v 1.4.2</a> (nebo Blackdown JDK 1.4.1 kompilovaný GCC 3.2). Sun Java Plugin je kompatibilní s verzemi Linuxu Red Hat 8 a novější a SuSE 8.1 a novější (plugin závisí na novější verzi libgcc_s.so instalované jako dodatek GCC pro Red Hat 7.3 - GCC 3.1 Compiler Suite for Red Hat Linux 7.3 - tak lze spustit plugin i na starších verzích Red Hatu). Uživatelé starších verzí Linuxu mohou buď instalovat <a href="ftp://ftp.mozilla.org/pub/mozilla.org/mozilla/releases/mozilla1.4/">egcs 1.1.2 build Mozilly</a> a JRE 1.4.1 nebo počkat na Mozillu zkompilovanou pro jejich distribuci Linuxu.</li>
	<li>Pokud používáte Linuxové binárky GCC 3.2 kompilované mozilla.org, nebude fungovat přístup k JavaScriptu z Flashe.</li>
	<li>Pokud pozorujete pády při startu xpcom.dll, je to pravděpodobně způsobeno nekopatibilitou s nějakým produktem třetí strany. Pro odstranění problému odinstalujte předchozí verzi Mozilly a kompletně smažte adresář Mozilly před instalací nové verze. Tím neztratíte data vašeho profilu (záložky, předvolby, cookie) ale odstraníte rozšíření a pluginy třetích stran.</li>
</ul>

<p><small>Tento dokument je překladem <a href="http://www.mozilla.org/releases/mozilla1.4/README.html" title="Originální dokument">dokumentu</a> z <a href="http://www.mozilla.org/" title="Web neziskové organizace Mozilla Foundation">mozilla.org</a>. Copyright &copy; 1998-2003 The Mozilla Organization</small></p>

<?php
	$page->includeTemplate('footer');
?>
