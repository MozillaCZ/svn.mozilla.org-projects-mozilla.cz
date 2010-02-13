<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Mozilla často kladené otázky';
	$page->headline = array('Často kladené otázky','Mozilla FAQ: 7. Uživatelské profily');

	$page->includeHeader();
?>

<ul>
<li><a href="#7.1">7.1. Co je můj profil?</a></li>
<li><a href="#7.2">7.2. Jak nastavím více profilů?</a></li>
<li><a href="#7.3">7.3. Kde je uložen můj profil?</a></li>
<li><a href="#7.4">7.4. Jak přenesu svůj profil z Netscape 4.x do Mozilly?</a></li>
<li><a href="#7.5">7.5. Jak mohu zachránit data z poškozeného profilu?</a></li>
<li><a href="#7.6">7.6. Mohu sdílet profil se dřívějšími verzemi Netscape 6.x, nebo Mozilly?</a></li>
<li><a href="#7.7">7.7. Podporuje Mozilla putující profily?</a></li>
<li><a href="#7.8">7.8. Co je to za adresář @$%#@$%#.slt v mém profilu?</a></li>
<li><a href="#7.9">7.9. Jak zazálohuji data ze svého profilu?</a></li>
<li><a href="#7.10">7.10. Jak obnovím data svého profilu ze zálohy?</a></li>
<li><a href="#7.11">7.11. Jak přenesu profil na jiný počítač?</a></li>
<li><a href="#7.12">7.12. Jak mohu chránit data ve svém profilu?</a></li>
<li><a href="#7.13">7.13. Jak donutím Mozillu, aby se otevřela s daným profilem?</a></li>
</ul>

<dl class="faq">
<dt id="question-7.1"><a name="7.1">7.1. Co je můj profil?</a></dt>
<dd id="answer-7.1">
<p>Váš profil je vaše identita v Mozille. Profil obsahuje záložky, poštu/diskuse a nastavení účtů,
uložená hesla, kontakty, bezpečnostní certifikáty a předvolby.
Každý z více uživatelů jednoho systému tak může mít svůj vlastní profil.
</p>

<p>Jestliže je k dispozici více profilů, Mozilla po startu spustí
Správce Profilů, který vám nabídne všechny dostupné profily.
</p>

<p>Jestliže nejsou nastaveny žádné profily, Mozilla automaticky vytvoří jeden profil
(nazvaný &#8216;default&#8217;) a nebude spouštět Správce Pofilů.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-7.2"><a name="7.2">7.2. Jak nastavím více profilů?</a></dt>
<dd id="answer-7.2">
<ul>
<li><p>
<b>Windows:</b> Jestliže jste instalovali Mozillu z instalačního programu, jděte do
Start | Programs | Mozilla | Profile Manager.
Jestiže ne, spusťte příkazový řádek (Start | Run a vložte <kbd>command</kbd> nebo <kbd>cmd</kbd>),
přejděte do adresáře s programem Mozilla a napište <kbd>mozilla -profilemanager</kbd> .</p></li>

<li><p>
<b>Unix/Linux:</b> Otevřete shell prompt, <kbd>cd</kbd> do Mozilla
adresářem s programem Mozilla a napište <kbd>mozilla -profilemanager</kbd> .</p></li>

<li><p>
<b>MacOS 8/9, MacOS X CFM build:</b> Dvojkliknutím na Správce Profilů Mozlly ho spusťte.</p></li>

<li>
<p>
<b>MacOS X Mach-O build:</b> Otevřete terminal, <tt>cd</tt> do adresáře obsahujícího
<tt>Mozilla.app</tt> a napište:</p>
</li>

</ul>

<pre>
Mozilla.app/Contents/MacOS/mozilla -profilemanager
</pre>

<p>Jestliže máte nějaký starší profil, který správce nezobrazuje, pak je profil buď poškozený
nebo ho Mozilla není schopna ve verzi, kterou právě používáte rozeznat.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-7.3"><a name="7.3">7.3. Kde je uložen můj profil?</a></dt>
<dd id="answer-7.3">
<p>Umístění profilů je pro všechny operační systémy popsáno v
<a href="http://www.czilla.cz/produkty/suite/poznamky-k-vydani/mozilla1.3/#profileloc">poznámkách k vydání</a>.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-7.4"><a name="7.4">7.4. Jak přenesu svůj profil z Netscape 4.x do Mozilly?</a></dt>
<dd id="answer-7.4">
<p>Správce Profilů by měl detekovat a importovat profil z Netscape 4.5 a novějších automaticky při instalaci. Co není schopna rozeznat a importovat je kontakty a bezpečnostní certifikáty.
</p>

<p>Záložky můžete také importovat ručně pomocí Bookmarks | Manage Bookmarks |
Tools | Import. Protože záložky jsou v podstatě HTML soubor, můžete ho také snadno ručně editovat.
</p>

<p>Abyste přenesli adresář vašich kontatků, vyexportujte je nejdříve z Netscape 4.<i>x</i>
jako text (<tt>.ldif</tt>) a naimportujte je to do Mozilly jako LDIF.</p>

<p>Soubory s poštou (ty bez přípon) mohou být zkopírovány přímo z profilu Netscape 4 do adresáře
<tt>Mail</tt> v profilu Mozilly.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-7.5"><a name="7.5">7.5. Jak mohu zachránit data z poškozeného profilu?</a></dt>
<dd id="answer-7.5">
<ol>
<li>
<p>Najděte starý profil na disku. Poznamenejte si jméno adresáře se starým profilem.</p>
</li>

<li>
<p>Spusťte Správce Profilů a vytvořte profil nový. Ukončete Mozillu (včetně rychlého spouštění).
</p>
</li>

<li>
<p>Jděte do adresáře s profily. Zkopírujte (raději než přesuňte) všechny soubory ze starého profilu do nového. Dovolte již existujícím souborů v novém profilu být přepsány.
</p>
</li>

<li>
<p>Jestliže chcete zkopírovat uložená data z formulářů a hesla:
Uložte nějaký náhodný formulář a hesla do nového profilu. V novém profilu najděte
dva soubory s číselnými názvy a příponami <tt>*.w</tt> a <tt>*.s</tt>.
Poté najděte soubory se stejnými příponami ve starém profilu, zkopírujte je a
změnte jejich jména tak, aby odpovídala jménům v novém profilu.
Přesuňte je do nového profilu.
</p>
</li>

<li>
<p>Restartujte Správce Profilů. Vyberte nový profil a kliněte na
&#8216;start&#8217;. Obsah vašeho starého profilu by měl být nyní úspěšně přenesen do nového.
</p>
</li>

<li>
<p>Zkontrolujte, že vaše záložky, nastavení správce hesel, poštovní a diskusní účty atd. jsou
správně obnoveny. Přetrvávající problémy spravte ručně editováním souborů.
<a href="http://www.hmetzger.de/pdl.html">Všechny soubory profilu</a> jsou popsány v  <a href="http://www.hmetzger.de/net6e.html">tipech pro Netscape 6/7</a> Hlogera Metzgera.</p>
</li>
</ol>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-7.6"><a name="7.6">7.6. Mohu sdílet profil se dřívějšími verzemi Netscape 6.x, nebo Mozilly?</a></dt>
<dd id="answer-7.6">
<p><b>Nesdílejte</b> profily s Netscape 6+. Sdílení profilů mezi různými verzemi
Mozilly může vést k jeho poškození. To platí i pro Netscape založené na odlišných verzích Mozilly.
</p>

<p>Netscape 6.1 je založen na Mozille 0.9.2 a Netscape 6.2.x je založen na Mozille 0.9.4.
Netscape 7.0 je založen na Mozille 1.0, přesto ale nelze sdílení profilu s Mozillou 1.0 doporučit.
</p>

<p>
<b>Pozn.:</b> i když odinstalujete předešlou verzi Mozilly nebo Netscape, starý profil zůstane na svém místě dokud ho nesmažete. Ujistěte se, že jste si vytvořili nový profil, pokud instalujete novou verzi Mozilly.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-7.7"><a name="7.7">7.7. Podporuje Mozilla putující profily?</a></dt>
<dd id="answer-7.7">
<p>Mozilla zatím nepodporuje putující profily. Tato funkce je však ve vývoji.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>


<dt id="question-7.8"><a name="7.8">7.8. Co je to za adresář @$%#@$%#.slt v mém profilu?</a></dt>
<dd id="answer-7.8">
<p>Nazívá se "salting". Data profilu jsou uložena v náhodně pojmenovaném adresáři, aby bylo pro některé nežádoucí programy (např. viry)
obtížnější nalézt data profilu.
</p>
</dd>

<dt id="question-7.9"><a name="7.9">7.9. Jak zazálohuji data ze svého profilu?</a></dt>
<dd id="answer-7.9">
<p>Může se stát, že na vašem počítači dojde k chybě a důležitá data z profilu mohou být stracena. Proto doporučujeme dělat pravidelně
záložní kopie vašeho profilu.
</p>
<p>Všechna data profilu jsou uložena v adresáři jak je to popsáno v <a href="#7.3">7.3. Kde je uložen můj profil?</a>. Jestliže si nejste
jisti co chcete zálohovat, nebo prostě chcete zazálohovat všechno, uložte si celý adresář profilu. Obnova a transport profilu bude
jednodužší jestliže ponecháte jeho strukturu tak jak je.
</p>
<p>
Následující sekce popisují jak selektivně ukládat jen některá data:
</p>

<p><b>Pošta</b></p>

<p>
Poštovní zprávy jsou uloženy v <tt>Mail</tt> (nebo <tt>ImapMail</tt>)
podadresáři (např. <tt>/Mail/pop.mail.yahoo.com/</tt>).
Abyste zazálovahly vaši poštu zkopírujte všechny soubory bez přípon jako např.

<tt>INBOX</tt>. Abyste zazálohovali i nastavení filtrů uložte soubor <tt>rules.dat</tt>.
Soubory <tt>*.msf</tt> jsou pouze indexy které se automaticky generují.
Uložte cely adresář <tt>Mail</tt>
jestliže si nejste jisti co uložit.
</p>
<p><b>Dikuse</b></p>

<p>
Nastavení dikusí a zpravy z diskusních skupin jsou v podadresáři <tt>News</tt>

(např. <tt>/News/news.mozilla.org/</tt>).
Nastavení skupin je v souborech <tt>*.rc</tt> (např.
<tt>news.mozilla.org.rc</tt>). Kompletní seznam diskusních skupin je v <tt>hostinfo.dat</tt>

(tedy např. <tt>/News/news.mozilla.org/hostinfo.dat</tt>). <tt>*.msf</tt>
jsou pouze obsahy skupin.
Pro zazálohování diskusí uložte <tt>*.rc</tt>, <tt>*.dat</tt>,
and <tt>*.msf</tt> files.

</p>

<p><b>Kontakty</b></p>

<p>
Z profilu uložte <tt>abook.mab</tt> (osobní kontakty)
a <tt>history.mab</tt> (kontaky sebrané).
</p>

<p><b>Záložky</b></p>

<p>
Uložte soubor <tt>bookmarks.html</tt>.
</p>

<p><b>Hesla</b></p>

<p>
Jména a hesla jsou ložena v <tt>12345678.s</tt>
(číselná část je náhodná). Uložte tento soubor
</p>

<p><b>Data z formulářů</b></p>

<p>
Data z formulářů jsou v <tt>12345678.w</tt>
(číselná část je náhodná). Uložte tento soubor.
</p>

<p><b>Filtry nevyžádané pošty</b></p>

<p>
Uložte soubor <tt>training.dat</tt>
který obsahuje informace inteligentního filtrovacího systému.
</p>

<p><b>Cookies</b></p>

<p>
Uložte soubor <tt>cookies.txt</tt>.
</p>

<p><b>Uživatelská nastavení</b></p>

<p>
Hlavní konfigurační soubor Mozilly je <tt>prefs.js</tt>. Uložte tento soubor.
</p>

<p><b>Další nastavení</b></p>

<p>
Uložte <tt>user.js</tt>, <tt>chrome/userContent.css</tt>, a
<tt>chrome/userChrome.css</tt> jestliže je používáte k dalšímu uzpůsobení Mozilly.
</p>

<p>
CZilla vám doporučuje používat pro zálohování program <a href="http://www.slunecnice.cz/product/MozBackup/">MozBackup</a>, který všechna důležitá data uloží za vás.
</p>
</dd>

<dt id="question-7.10"><a name="7.10">7.10. Jak obnovím data svého profilu ze zálohy?</a></dt>
<dd id="answer-7.10">
<p>Obvykle všechno co potřebujete je obnovit data ze zálohy.
</p>
<p>
Ukončete všechny běžící aplikace Mozilly a nahraďte odpovídající soubory ve vašem profilu kopiemi ze zálohy.
Pokud se i po restartu zdá, že data nejsou obnovena, máte možná poškozen soubor chrome cache. V tomto případě ukončete
Mozillu a smažte soubory <tt>xul.mfl</tt> a <tt>xul.mfasl</tt> neboli soubory XUL FastLoad File ve vašem profilu. Poté
opět restartujte Mozillu.
</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>


<dt id="question-7.11"><a name="7.11">7.11. Jak přenesu profil na jiný počítač?</a></dt>
<dd id="answer-7.11">

<p>
Většina souborů profilu Mozilly má na všech platformách stejný formát, takže je možné
přenášet profily mezi dvěma různými operačními systémy.
</p>

<ol>
<li>
Nejdříve profil zazálohujte, jak bylo uvedeno dříve.
</li>

<li>Přeneste soubory profilu na cílový stroj. Umístění profilu by mělo zůstat stejné.
Jinak budete muset editovat některé soubory profilu ručně.
</li>

<li>Na cílovém stroji otevřete Správce Profilů.</li>

<li>Zvolte vytvořit profil a pokračujte dále.</li>

<li>Vložte jméno profilu.</li>

<li>Zvolte vybrání adresáře s profilem a ukažte na něj
(BASE+NAME, kromě SALT).</li>

<li>Dokončete.</li>
</ol>

<p>
Tip pro administrátory: jestliže chcete používat vždy stejný profil
na mnoha systémech s ČISTOU instalací Mozilly, je zbytečné procházet
tuto proceduru a můžete jednoduše zkopírovat celý obsah profilu
včetně <tt>Registry.dat</tt>.
</p>

<p>
Znovu se objeví obrazovka Správce Profilů, tentokrát již s novým profilem.
Jestliže je umístění profilu stejné
(BASE+NAME+SALT) na původním i novém systému stačí nyní pouze nastartovat Mozillu.
Jestliže ne, je potřeba editovat několik souborů:
</p>

<p id="copypref"><strong>Editace konfiguračních souborů</strong></p>

<ol>
<li>Ukončete Správce Profilů.</li>

<li>
<p>V adresáři profilu najděte soubor <tt>prefs.js</tt> a otevřete ho v nějakém
textovém editoru jako Notepad nebo SimpleText. Konfigurační soubor je seznam asi takovýchto
záznamů:</p>

<pre>
user_pref("&lt;setting&gt;", &lt;value&gt;);
</pre>
</li>

<li><p>Najděte záznamy pro
   <tt>browser.cache.disk.parent_directory</tt>,
   <tt>mail.directory</tt>,
   <tt>mail.root.imap</tt>,
      <tt>mail.root.nntp</tt>,
         <tt>mail.root.none</tt>,
	    <tt>mail.root.pop3</tt>,
	       <tt>mail.newsrc_root</tt>, a
	          <tt>news.directory</tt>

		     (možná nebudete mít všechny). Smažte tyto řádky.</p></li>

		     <li><p>Uložte soubor a otevřte Mozillu s novým profilem.</p></li>

		     <li><p>Otevřte poštovních klienta (zjistíte, že v tomto okamžiku ješte není naimportována vaše pošta)
		     Oteřte menu Edit a vyberte
		     &#8220;Mail &amp; Newsgroups Account Settings...&#8221;</p></li>

		     <li><p>V seznamu účtů (Accounts) nalevo najděte Local Folders.
		     V pravém panelu změte Local Directory tak aby odpovídala umístění
		     vašeho nového profilu.</p></li>

		     <li><p>V seznamu účtů projděte všechny mailové účty a v nastaveních
		     serveru (Server Settings) a Local Directory upravte cestu tak aby odpovídala
		     novému profilu.</p></li>

		     <li><p>Jestliže jste zapsáni i do diskusních skupin upravte i
		     <q>Server Settings</q>
		     pro tyto ůčty. Změnte soubor <q>newsrc</q> and
		     <q>Local Directory</q> aby ukazovaly na nový profil.</p></li>

		     <li><p>Stiskněte OK.</p></li>

		     <li><p>Ukončete Mozillu a nastartujte ji znovu. Všechna pošta by měla být na místě.</p></li>

		     </ol>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>

</dd>

<dt id="question-7.12"><a name="7.12">7.12. Jak mohu chránit data ve svém profilu?</a></dt>
<dd id="answer-7.12">
V součastné době Mozilla nepodporuje kryptování (kódovaní) dat profilu. Pro chranu dat používejte bezpečností prostředky
vašeho systému (např. omezení přístupvých práv apod.).
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>


<dt id="question-7.13"><a name="7.13">7.13. Jak donutím Mozillu, aby se otevřela s daným profilem?</a></dt>
<dd id="answer-7.13">

<p>
Na Windows, Linuxu a Unixovývh systémech můžete jednoduše oteřít Mozillu
s požadovaným profilem použitím příkazu:
</p>

<pre>
mozilla.exe -p &lt;profile_name&gt;
</pre>

<p>
kde <tt>&lt;profile_name&gt;</tt> je jméno profilu tak jak ho vidíte ve Správci Profilů.
</p>

<p>
Pro otevření Mozilly v Quick Launch módu s vybraným profilem použijte:
</p>

<pre>mozilla.exe -turbo -p &lt;profile_name&gt;</pre>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>

</dd>
</dl>

<?php
	$page->includeFooter();
?>
