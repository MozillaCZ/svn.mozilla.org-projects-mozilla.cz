<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Často kladené otázky k Thunderbirdu';
	$page->headline = array('Často kladené otázky','Na co se nás uživatelé často ptají');

	$page->setKeywords('podpora, otázky, nápověda, pomoc, návod, mozilla, thunderbird, pošťák');
	$page->setDescription('Stránka často kladených otázek ohledně pošťáka Mozilla Thunderbird');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links');
	$page->addSideBox('tips','thunderbird');

	$page->includeHeader();
	$page->includeFile('tips');
?>

<p id="top">Toto je neoficiální Thunderbird <abbr
title="Frequently Asked Questions" lang="en">FAQ</abbr>,
který obsahuje nejčastěji kladené dotazy o tomto poštovním klientovi.</p>

<div><strong><a href="#obecne">Obecné dotazy</a></strong>
	<ul>
		<li><a href="#q1.1">Co je Thunderbird?</a></li>
		<li><a href="#q1.2">Co je Mozilla?</a></li>
		<li><a href="#q1.3">Jaký je rozdíl mezi Mozilla Thunderbird a Mozilla Pošta &amp; Diskusní skupiny</a></li>
		<li><a href="#why">Proč bych měl používat Thunderbird místo ostatních poštovních klientů?</a></li>
		<li><a href="#free">Je Thunderbird zdarma?</a></li>
		<li><a href="#q1.4">Kde můžu stáhnout Thunderbird?</a></li>
		<li><a href="#q1.5">Jak mám nainstalovat Mozilla Thunderbird?</a></li>
		<li><a href="#uninstall">Jak mám odinstalovat Mozilla Thunderbird?</a></li>
		<li><a href="#q1.7">Jaký je rozdíl mezi stabilními a nočními verzemi?</a></li>
		<li><a href="#q1.8">Je Mozilla Thunderbird dostupný v češtině?</a></li>
		<li><a href="#profilemanager">Jak spustím Správce profilů?</a></li>
	</ul>
</div>

<div><strong><a href="#prechod">Přechod</a></strong>
	<ul>
		<li><a href="#q2.2">Jak přenesu svoji poštu a nastavení z Mozilly do Thunderbirdu?</a></li>
	 	<li><a href="#aol">Můžu přijímat a odesílat AOL e-maily s Thunderbirdem?</a></li>
		<li><a href="#q2.3">Můžu přistupovat k Nescape Webmail nebo Hotmail účtům pomocí Thunderbirdu?</a></li>
		<li><a href="#kmail">Jak mám importovat poštovní zprávy z aplikace Kmail (Linux)?</a></li>
		<li><a href="#mail.app">Jak mám importovat poštovní zprávy z mail.app (Mac OS X)?</a></li>
		<li><a href="#mac_ab">Jak mám importovat kontakty (Mac OS X)?</a></li>
		<li><a href="#q2.9">Jak mám importovat poštovní zprávy z jiného poštovního programu?</a></li>
		<li><a href="#q2.10">Jak mám exportovat poštovní zprávy do jiného poštovního programu nebo počítače?</a></li>
    </ul>
</div>

<div><strong><a href="#pouzivani">Používání</a></strong>
	<ul>
		<li><a href="#q2.1">Jak mám nastavit Thunderbird jako můj výchozí poštovní program?</a></li>
		<li><a href="#q2.5">Obsahuje Thunderbird kontrolu pravopisu?</a></li>
		<li><a href="#q2.6">Můžu použít různé motivy vzhledu pro Thunderbird?</a></li>
		<li><a href="#q2.7">Jaká je klávesová zkratka pro příkaz x?</a></li>
		<li><a href="#q2.8">Je Thunderbird náchylný na viry?</a></li>
		<li><a href="#q2.11">Je v Thunderbirdu oznamování pošty?</a></li>
		<li><a href="#q2.12">Jak mám používat S/MIME, PGP (GnuPG) k zasílání (příjímání) podepsaných nebo šifrovaných zpráv?</a></li>
		<li><a href="#q2.13">Změnil jsem mé IMAP heslo, jak mám odstranit zapamatované heslo?</a></li>
		<li><a href="#masterpassword">Jak můžu přistupovat/měnit hlavní heslo?</a></li>
    </ul>
</div>


<h2 id="obecne" class="nice thunderbird">Obecné dotazy</h2>


<h3 id="q1.1">Co je Thunderbird?</h3>

<p>Thunderbird je volně šiřitelný Open Source multiplatformní poštovní
klient dostupný pro řadu operačních systémů včetně Windows, Linuxu a Macintosh. Je
založen na kódu aplikace Mozilla. Je to robustní a snadno použitelný klient,
podobně jako konkurenční produkty (např. Outlook Express), ale obsahuje několik
hlavních výhod, např. filtrování nevyžádané pošty. Více informací o tomto
poštovním klientovi získáte na <a
href="http://www.mozilla.org/projects/thunderbird/index.html"
hreflang="en">stránkách projektu</a> [Eng].</p>


<h3 id="q1.2">Co je Mozilla?</h3>
<p>Mozilla Suite je balík internetových aplikací, které poskytují prvotřídní komfort pro práci s Internetem. Balík obsahuje webový prohlížeč, e-mailový klient, editor webových stránek a IRC klienta. Všechny aplikace kladou velký důraz na bezpečnost.</p>


<h3 id="q1.3">Jaký je rozdíl mezi Mozilla Thunderbird a Mozilla Pošta &amp; Diskusní skupiny?</h3>
<p>Mozilla je kompletní balík aplikací pro web, obsahující prohlížeč, poštovní
klient, chat klient a mnohem více. Thunderbird je <em>pouze poštovní
klient</em>, což může být vhodnější volbou, pokud již máte jiný prohlížeč,
například <a href="/produkty/firefox/">Firefox</a>.</p>

<p>Poznamenejme, že Thunderbird není pouze samostatný Mozilla poštovní klient.
Uživatelské rozhraní Thunderbirdu se odlišuje od Mozilly v mnoha ohledech -
například přizpůsobitelné panely nástrojů či vylepšený vzhled.
Jelikož je Thunderbird menší než celý balík Mozilla, je také rychlejší a snazší
k použití.</p>

<h3 id="why">Proč bych měl používat Thunderbird místo ostatních poštovních klientů?</h3>
<p>Přečtěte si dokument <a
href="http://www.mozilla.com/thunderbird/why/" hreflang="en">proč
používat Thunderbird</a> [Eng].</p>


<h3 id="free">Je Thunderbird zdarma?</h3>
<p>Ano, Thunderbird je software s otevřeným kódem, to znamená, že každý má
právo stáhnout a používat poštovního klienta zdarma, a prohlížet a upravovat
zdrojový kód podle ustanovení uvedených v <a
href="http://www.mozilla.org/MPL/" hreflang="en">licenci</a> [Eng].</p>


<h3 id="q1.4">Kde můžu stáhnout Thunderbird?</h3>
<p>Přejděte na stránku <a href="/produkty/thunderbird/stahnout.html">stažení Mozilla Thunderbird</a>,
kde naleznete další pokyny.</p>

<h3 id="q1.5">Jak mám nainstalovat Mozilla Thunderbird?</h3>
<p>Ve Windows rozbalte stažený soubor do složky dle vaší volby. Spusťte
<span class="soubor">thunderbird.exe</span>.</p>

<h3 id="uninstall">Jak mám odinstalovat Mozilla Thunderbird?</h3>

<p>Pokud jste nainstalovali Mozilla Thunderbird použitím oficiálního <a
href="/produkty/thunderbird/stahnout.html">instalátoru pro Windows</a>, odinstalujte jej
použitím panelu <span class="nabidka">Přidat nebo odebrat programy</span> v Ovládacích panelech
Windows.</p>

<p>Pokud jste nainstalovali Mozilla Thunderbird použitím neoficiálního
zabaleného archívu, pouze smažte složku, do které jste archiv rozbalili. Také
můžete smazat <a href="konfigurace.html#profile">složku s profilem</a>.
Tím ale smažete i všechny vaše poštovní zprávy uložené v této složce.</p>

<h3 id="q1.7">Jaký je rozdíl mezi stabilními a nočními verzemi?</h3>
<p>Stabilní verze Mozilla Thunderbirdu jsou testované verze určené pro běžné
uživatele. Noční verze jsou vydávány pro účely testování každou noc
a obsahují poslední změny, včetně nových funkcí a chyb. Neočekávejte, že
noční verze budou na 100&nbsp;% fungovat. (Nu, to někdy nemusí ani stabilní verze!)
</p>

<h3 id="q1.8">Je Mozilla Thunderbird dostupný v češtině?</h3>
<p>Ano, Mozilla Thunderbird je Open Source projekt; lokalizační týmy překládají
Mozilla Thunderbird do světových jazyků (do češtiny <a href="/">tým
CZilla</a>). Seznam všech lokalizovaných verzí najdete na <a
href="http://ftp.mozilla.org/pub/thunderbird/releases/0.2/contrib-localized/"
lang="en" hreflang="en">localized builds list</a> [Eng], české verze najdete na stránce
<a href="/produkty/thunderbird/stahnout.html">stažení Mozilla Thunderbird</a>.</p>

<h3 id="profilemanager">Jak spustím Správce profilů?</h3>
<p>Thunderbird uchovává vaše osobní nastavení a poštu ve <a
href="konfigurace.html#profile">složce profilu</a>. Správce profilů slouží
ke správě více profilů. Správce profilů zobrazíte tak, že spustíte
Thunderbird s přepínačem <var>-p</var>. Ve Windows následujte tyto kroky:</p>

<ol>
	<li>Kompletně ukončete Mozilla Thunderbird (zvolte v nabídce <span
	class="nabidka">Soubor -&gt; Ukončit</span>).</li>

	<li>Zvolte <span class="nabidka">Start -&gt; Spustit...</span> z Windows Start menu.</li>

	<li>Zadejte celou cestu k Thunderbirdu, uzavřenou do uvozovek, a pak
	připojte <var>-p</var> přepínač, tj.:<br />
	<span class="soubor">"C:\Program Files\Thunderbird\Thunderbird.exe" -p</span></li>
</ol>

<p>Po spuštění můžete přidávat, odebírat nebo přejmenovávat profily. Pokud máte více
než jeden profil, budete při každém startu Thunderbirdu dotázáni, který profil se má
použít.</p>

<p><a href="#top">Na začátek stránky</a></p>


<h2 id="prechod" class="nice thunderbird">Přechod</h2>

<h3 id="q2.2">Jak přenesu svoji poštu a nastavení z Mozilly do Thunderbirdu?</h3>

<p>Thunderbird nyní používá oddělené profily, takže se neovlivňuje
s Mozillou. Pokud chcete přenést vaši poštu a nastavení z Mozilly do
Thunderbirdu, postupujte takto:</p>

<ol>
	<li>Spusťte novou verzi Thunderbirdu a nechejte ji vytvořit výchozí
	Thunderbird profil pro vás. Když se objeví Průvodce vytvářením účtů,
	klepněte na <span class="nabidka">Zrušit</span> a ukončete aplikaci.</li>

	<li>Najděte Mozilla profil, který chcete přenést (<span class="soubor">...\Application
	Data\Mozilla\Profiles\\XXXXXXXX.slt</span>). Najděte umístění vašeho
	nového výchozího <a href="konfigurace.html#profile">profilu</a>. Nyní
	zkopírujte veškerý obsah první složky do druhé včetně podsložek.</li>

	<li>Ještě nejste hotovi, protože Mozilla používá absolutní cesty složek
	v <span class="soubor">prefs.js</span>. Otevřete Thunderbird <span
	class="soubor">prefs.js</span> soubor v
	textovém editoru. Vyhledejte a nahraďte všechny řetězce obsahující:
	<span class="soubor">...\<em>Mozilla</em>\Profiles\XXXX.slt</span> řetězcem
	<span class="soubor">...\<em>Thunderbird</em>\Profiles\XXXX.slt</span>. Uložte soubor a
	spusťte Thunderbird.</li>

</ol>

<p><strong>Poznámka:</strong> Tímto způsobem přenesete všechnu vaši poštu, nastavení účtů, databázi pro
rozpoznávání nevyžádané pošty a filtry. V případě, že
se chcete vrátit k <a href="/produkty/suite/">Mozilla Suite</a> a číst s ní
poštovní zprávy, ujistěte se, že vaše <acronym title="Post Office Protocol"
lang="en">POP</acronym> účty v Thunderbirdu jsou nastaveny tak, aby zanechávaly
všechny zprávy na serveru.</p>

<p>Zkopírování profilu Mozilla Suite přenese řadu nastavení a souborů, které nejsou
pro Thunderbird potřebné, protože je to jen poštovní klient. Odstraňování přebytečných
souborů provádíte na své vlastní riziko.</p>


<h3 id="aol">Můžu přijímat a odesílat AOL e-maily s Thunderbirdem?</h3>

<p>Ano, uživatelé AOL mohou číst svou AOL poštu Thunderbirdem. Postupujte
takto: založte nový poštovní účet (<span class="nabidka">Soubor -&gt; Nový
objekt -&gt; Účet...</span>), vyberte <acronym title="Internet Message Access Protocol"
lang="en">IMAP</acronym> jako typ serveru pro příchozí poštu
a zadejte <tt>imap.aol.com</tt> jako adresu. Zadejte svou přezdívku jako jméno
uživatele.</p>

<p>Musíte také nastavit server pro odchozí poštu (<abbr title="Simple Mail Transfer Protocol"
lang="en">SMTP</abbr>), pokud chcete odesílat
zprávy. Postupujte takto: zvolte <span class="nabidka">Nástroje -&gt; Nastavení
účtu...</span>, v panelu pak zvolte položku "Server odchozí pošty (<abbr
title="Simple Mail Transfer Protocol" lang="en">SMTP</abbr>)" a
klepněte na <span class="nabidka">Rozšířené...</span>. V okně Nastavení
odchozího serveru (<abbr title="Simple Mail Transfer Protocol"
lang="en">SMTP</abbr>), které se zobrazilo, klepněte na tlačítko <span
class="nabidka">Přidat...</span>. Zadejte <tt>smtp.aol.com</tt> jako Název
serveru, použijte port 587 a zadejte svoji AOL přezdívku jako <span
class="nabidka">Jméno uživatele</span>
(pro heslo budete dotázáni později). Klepněte na <span
class="nabidka">OK</span> a vraťte se do okna <span class="nabidka">Nastavení
účtu</span>. Nyní vyberte váš
nově vytvořený poštovní účet a zvolte "Nastavení serveru", klepněte na <span
class="nabidka">Rozšířené...</span> a vyberte Odchozí server (<abbr
title="Simple Mail Transfer Protocol" lang="en">SMTP</abbr>), který jste
vytvořili.</p>

<p>Poznamenejme, že nemůžete ručně přidávat zprávy do složek Doručená pošta
nebo Odeslaná pošta. Zprávy jsou přidány pouze, když byly přijaty nebo odeslány
přes AOL server. Proto se ujistěte, že používáte lokální složky pro Odeslanou
poštu, Koncepty a Šablony. Toto specifikujete tak, že otevřete Nastavení účtu a
vyberete pod AOL účtem <span class="nabidka">Kopie &amp; složky</span>.</p>

<p>Pro více informací si přečtěte <a href="http://help.channels.aol.com/article.adp?catId=1&amp;sCId=416&amp;sSCId=4093&amp;articleId=217449" title="AOL Help : Can I read and send AOL e-mail using other e-mail applications?" lang="en" hreflang="en">article on AOL Help</a> [Eng].</p>


<h3 id="q2.3">Můžu přistupovat k Nescape Webmail nebo Hotmail účtům pomocí Thunderbirdu?</h3>
<p>Ne. Netscape Webmail a Hotmail používají proprietární protokoly. Přístup na Webmail
přímo pomocí poštovního klienta vyžaduje použití Netscape 6+ s AIM; podobně Hotmail
požaduje Microsoft Outlook nebo Outlook Express. Pro tento účel jsou dostupné
freewarové aplikace, jako například <a href="http://www.boolean.ca/hotpop/"
lang="en" hreflang="en">Hotmail Popper</a> [Eng].</p>

<p>Dalším příkladem je <a href="http://www.nongnu.org/gotmail/" lang="en"
hreflang="en">Gotmail</a>, utilita
pro neinteraktivní stahování pošty z Hotmail účtů. Dokáže stáhnout zprávy ze všech
složek, zprávy z vybraných složek nebo pouze nové zprávy. Umožňuje nastavit
mazání stažených zpráv nebo je označovat jako přečtené. Gotmail může přeposílat
zprávy na jiné e-mailové adresy nebo je ukládat do lokální složky ve stylu mbox.</p>

<p>Samozřejmě můžete přistupovat na Webmail účty přes web na <a
href="http://webmail.netscape.com/"
hreflang="en">http://webmail.netscape.com/</a> nebo Hotmail na <a
href="http://www.hotmail.com/" hreflang="en">http://www.hotmail.com/</a>.</p>

<h3 id="kmail">Jak mám importovat poštovní zprávy z aplikace KMail (Linux)?</h3>
<p>Vytvořte novou složku v Kmailu a nazvěte ji inboxmbox. Zobrazí se dialog,
ve kterém můžete složku uložit jako mbox složku. Zkopírujte všechny zprávy
doručené pošty Kmailu do nové složky inboxmbox, potom složku zkopírujte
nebo přesuňte do podsložky <span class="soubor">Mail/Local Folders</span>
ve vašem <a href="konfigurace.html#profile">složce s profilem</a>.
Když otevřete Thunderbird, složka inboxmbox se zobrazí pod Lokálními složkami.
Zkopírujte zprávy do složky Doručená pošta podle vašeho uvážení.</p>

<h3 id="mail.app">Jak mám importovat poštovní zprávy z mail.app (Mac OS X)?</h3>
<p>Přejděte do <span class="file">~/Library/Mail/</span> a nechejte vyhledat
<span class="soubor">.mbox</span> soubory. Zde jsou aktuálně OSX balíčky. Zvolte
<span class="nabidka">Zobrazit obsah balíčku</span> a otevře se nové okno obsahující
několik souborů včetně souboru pojmenovaného <span class="soubor">mbox</span>.
Zkopírujte tento soubor do podsložky nazvané <span class="soubor">Mail</span>
ve vaší <a href="konfigurace.html#profile">složce s profilem</a>
a přejmenujte ji na smysluplnější název. Tento proces opakujte pro každou vaši
poštovní složku. Nakonec spusťte Thunderbird a uvidíte nové poštovní složky.</p>

<h3 id="mac_ab">Jak mám importovat kontakty (Mac OS X)?</h3>
<p>K exportu kontaktů do prostého textu můžete použít aplikaci
<a href="http://www.gwenhiver.net/applications/addressbookexporter/" lang="en"
hreflang="en">Address Book Exporter</a>.
Následně v Thunderbirdu zvolte <span class="nabidka">Nástroje -&gt; Importovat...</span>,
vyberte Kontakty, klepněte na tlačítko <span class="nabidka">Další</span> a importujte textový soubor.</p>

<h3 id="q2.9">Jak mám importovat poštovní zprávy z jiného poštovního programu?</h3>
<p>Zvolte <span class="nabidka">Nástroje -&gt; Importovat</span>, zobrazí se dialog, který vás
provede zbytkem procesu.</p>

<h3 id="q2.10">Jak mám exportovat poštovní zprávy do jiného poštovního programu nebo počítače?</h3>
<p>Poštovní soubory Thunderbirdu jsou standardní obyčejné textové soubory ve
formátu "mbox", který většina poštovních programů dokáže použít nebo importovat.
Mnoho proprietárních poštovních programů má funkci Importovat z Eudora, což
je také "mbox" formát; tato funkce může správně načíst vaše poštovní soubory.</p>

<p><a href="#top">Na začátek stránky</a></p>

<h2 id="pouzivani" class="nice thunderbird">Používání</h2>

<h3 id="q2.1">Jak mám nastavit Thunderbird jako můj výchozí poštovní program?</h3>

<p>Když poprvé spustíte Thunderbird, zobrazí se dotaz, zda jej chcete nastavit
jako výchozí poštovní program. Pokud jste odpověděli <span
class="nabidka">Ne</span> a později jste
změnili rozhodnutí, můžete jej nastavit jako výchozí poštovní program
takto:</p>

<ul>
	<li><strong>Windows, Mac:</strong> zvolte z nabídky <span
	class="nabidka">Nástroje -&gt; Předvolby...</span>, klepněte na
	<q>Obecné</q> a zatrhněte <span class="nabidka">Použít Mozilla
	Thunderbird jako výchozí aplikaci pro poštu</span>. Pokud stále máte
	problémy při použití <tt>mailto:</tt> odkazů ve Windows, zvolte <span
	class="nabidka">Start -&gt; Nastavení -&gt; Ovládací panely</span> a
	otevřete <span class="nabidka">Možnosti Internetu</span>. Na kartě
	<span class="nabidka">Programy</span> vyberte
	Mozilla Thunderbird z rozbalovacího seznamu vedle <span
	class="nabidka">E-mail:</span>.</li>

	<li><strong>GNOME</strong> (Unix/Linux): Otevřete Ovládací centrum
	GNOME. Zvolte <span class="nabidka" lang="en">Document Handlers | URL
	Handlers</span>. Vložte
	<tt>mailto</tt> do levého textového pole a <tt>gnome-moz-remote
	"%s"</tt> do pravého. Potom vložte následující text do souboru
	<span class="soubor">~/.gnome/gnome-moz-remote</span> (vytvořte nový
	pokud neexistuje): <code>[Mozilla] filename=<em>absolutní cesta k instalační
	složce Thunderbirdu</em>/mozilla</code></li>

	<li><strong>KDE 3</strong> (Unix/Linux): Otevřete Ovládací centrum a
	přejděte do <span class="nabidka">Síť -&gt; Pošta</span>. Pod
	Preferovaný poštovní klient zadejte: <tt><em>absolutní cesta k instalační
	složce Thunderbirdu</em>/mozilla --mail</tt></li>

</ul>

<h3 id="q2.5">Obsahuje Thunderbird kontrolu pravopisu?</h3>
<p>Ano, na stránce <a href="http://www.czilla.cz/doplnky/kontrola-pravopisu/">kontrola pravopisu</a> najdete podrobnosti o&nbsp;instalaci a&nbsp;přidávání dalších jazykových slovníků.</p>

<h3 id="q2.6">Můžu použít různé motivy vzhledu pro Thunderbird?</h3>
<p>Ano, navštivte stránku <a href="https://addons.mozilla.org/"
lang="en" hreflang="en">Mozilla Update</a>,
kde najdete přehled dostupných motivů vzhledu.</p>

<h3 id="q2.7">Jaká je klávesová zkratka pro příkaz x?</h3>
<p>Nejčastěji používané klávesové zkratky naleznete na adrese <a
href="http://www.mozilla.org/support/thunderbird/keyboard" lang="en"
hreflang="en">Keyboard Shortcuts</a> [Eng].</p>

<h3 id="q2.8">Je Thunderbird náchylný na viry?</h3>
<p>
Thunderbird <em>neumožňuje</em> vykonávání jakéhokoliv kódu po přijetí pošty, což
e-mailovým virům znemožňuje jejich aktivaci bez souhlasu uživatele.
</p>

<p>JavaScript je pro poštu a diskusní skupiny implicitně vypnutý, takže e-mail nemůže
spustit kód skriptu pouhým otevřením zprávy.</p>

<p>Jako s jakýmkoliv poštovním programem, dbejte náležité opatrnosti při spouštění
jakéhokoliv souboru, který jste přijali v poště. Vhodný antivirový program vám
pomůže zvýšit vaši bezpečnost.</p>

<p>Vaše soubory pošty jsou uvnitř <a href="konfigurace.html#profile">vašeho profilu</a>,
ve složkách <span class="soubor">Mail</span> a (pokud používáte <acronym
title="Internet Message Access Protocol" lang="en">IMAP</acronym>)
<span class="soubor">ImapMail</span>. Každá poštovní složka
(Doručená pošta, Odeslaná pošta atd.) je uložena jako dva soubory &ndash; jeden bez
přípony (tj. <span class="soubor">INBOX</span>), což je poštovní soubor samotný
(ve formátu "mbox"), a jeden s <span class="soubor">.msf</span> příponou (tj.
<span class="soubor">INBOX.msf</span>), což je index (<span lang="en">Mail
Summary File</span>) poštovního souboru. Pokud importujete poštu do jiných
programů, použijte soubor bez přípony.</p>

<p>Pokud chcete přenést soubor s poštovní složkou do jiného profilu
nebo jiné instalace Mozilly, jednoduše umístěte soubor do
složky <span class="soubor">Mail</span> této instalace Mozilly.</p>

<h3 id="q2.11">Je v Thunderbirdu oznamování pošty?</h3>
<p>Ano, Windows verze Thunderbirdu obsahuje oznamování nové pošty v systémové liště, když je Thunderbird spuštěný.</p>

<h3 id="q2.12">Jak mám používat S/MIME <abbr title="Pretty Good Privacy"
lang="en">PGP</abbr> (GnuPG) k zasílání (příjímání) podepsaných nebo
šifrovaných zpráv?</h3>
<p>K používání S/<acronym title="Multipurpose Internet Mail Extension"
lang="en">MIME</acronym>, zvolte z nabídky <span class="nabidka">Nástroje -&gt;
Nastavení účtu...</span>. V levé části panelu vyberte pod příslušným účtem
<span class="nabidka">Zabezpečení</span>. Můžete pro každý účet nastavit, které
certifikáty se použijí pro digitální podpis nebo šifrování.</p>

<p><abbr title="Pretty Good Privacy" lang="en">PGP</abbr> nebo GnuPG není
zahrnuto v Thunderbirdu, ale je ve vývoji, viz <a
href="http://enigmail.mozdev.org/" hreflang="en">Enigmail</a> [Eng].</p>

<h3 id="q2.13">Změnil jsem mé <acronym title="Internet Message Access Protocol"
lang="en">IMAP</acronym> heslo, jak mám odstranit zapamatované heslo?</h3>
<p>Vyberte v nabídce <span class="nabidka">Nástroje -&gt; Předvolby...</span>,
klepněte na <span class="nabidka">Ostatní</span>, rozbalte položku <span
class="nabidka">Uložená hesla</span> a klepněte na tlačítko <span
class="nabidka">Uložená hesla...</span>. Vyberte řádek server/jméno uživatele,
který chcete smazat a klepněte na <span class="nabidka">Odebrat</span>. Po
skončení klepněte na <span class="nabidka">Zavřít</span> a restartujte Mozilla
Thunderbird.</p>

<h3 id="masterpassword">Jak můžu přistupovat/měnit hlavní heslo?</h3>

<p>Vyberte v nabídce <span class="nabidka">Nástroje -&gt; Nastavení
účtu...</span>, vyberte libovolný účet a klepněte na Zabezpečení v panelu
vlevo. Klepněte na tlačítko <span class="nabidka">Spravovat bezpečnostní
zařízení...</span>, ze seznamu zvolte Softwarové bezpečnostní zařízení, a
nakonec klepněte na <span class="nabidka">Změnit heslo</span>.</p>

<p><a href="#top">Na začátek stránky</a></p>


<?php
	$page->includeFooter();
?>
