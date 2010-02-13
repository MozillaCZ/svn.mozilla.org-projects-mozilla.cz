<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Poznámky k vydání verze 1.4');
	$page->setHeadline('Poznámky k vydání','Verze 1.4 - instalace doplňků');
	$page->setKeywords ('mozilla, suite, poznámky k vydání, verze, gecko, prohlížeč, poštovní klient, editor, chatzilla');
	$page->setDescription ('Poznámky k vydání historické verze 1.4');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
<p>Tato část <a href="index.php">poznámek k vydání verze Mozilly 1.4</a> popisuje instalaci Javy, pluginů a dalších doplňků. Další informace můžete najít v sekci <a href="/produkty/suite/">Používáme Mozilu</a> (česky) a v <a href="http://www.mozilla.org/catalog/end-user/">dokumetaci pro uživatele</a> (anglicky).</p>

<p class="alert">Více informací o pluginech naleznete na stránkách projektu <a href="http://plugindoc.mozdev.org">PluginDoc</a>.</p>
<ul>
	<li><a href="#extras_java">Java</a></li>
	<li><a href="#extras_palm">Podpora pro Palm (Windows)</a></li>
	<li><a href="#extras_fonts">Fonty v Linuxu</a></li>
	<li><a href="#extras_addons">Další rozšíření (extension)</a></li>
	<li><a href="#extras_talkback">Talkback</a></li>
</ul>


<h2 id="extras_java">Java</h2>
<p><strong>Windows a Linux:</strong> Pro spouštění Java apletů musíte mít nainstalován plug-in <a href="http://java.sun.com/j2se/downloads.html"> Java Run Time Environment (JRE)</a>.</p>

<p><strong>Windows:</strong> Pokud používáte verze Mozilly s instalátorem a již máte kompatibilní JRE na vašem systému, Mozilla by to měla automaticky poznat. Pokud jste však v předvolbách vypnuli automatiké hledání nových pluginů, tak Javu zprovozníte tímto postupem: Po instalaci Javy na váš počítač zkopírujte soubor <tt>NPOJI610.dll</tt> z instalačního adresáře (obvykle jako <tt>C:\Program Files\JavaSoft\JRE\&lt;verze&gt;\bin</tt>) do adresáře pluginů Mozilly (obvykle <tt>C:\Program Files\mozilla.org\bin\plugins</tt>).</p>

<p><strong>Linux:</strong> Vytvořte symbolický odkaz na <tt>/usr/java/jre&lt;verze&gt;/plugin/i386/ns610<strong>-gcc32</strong>/libjavaplugin_oji.so</tt> v podadresáři <tt>plugins/</tt>. (Pokud soubor pouze zkopírujete, způsobí to pád aplikace.)</p>

<p>U RPM verzí pro Linux je nutné instalovat Javu jako uživatel root.</p>


<h2 id="extras_palm">Instalace database kontaktů Palm Sync na Windows</h2>
<p>Pokud chcete synchronizovat data mezi databasí kontaktů Mozilly a vaším Palmem, vyberte <i>Address Book Palm Sync Install</i> (instalovat synchronizaci database kontaktů pro Palm) v skupině Mozilla v nabídce Start/Programy. Pokud nastavíte váš Palm, aby synchronizoval svoji databasi kontaktů s Mozillou, database kontaktů se přestane synchronizovat se systémem Palm Desktop.</p>

<p>Pokud jste toto učinili, můžete připojit váš Palm a stisknout tlačítko HotSync na vašem Palmu. To vyvolá dialog správce HotSync na vašem desktopu a mělo by spustit Mozillu. Po skončení synchronizace ukončete Mozillu, restartujte ji, otevřete databasi kontaktů Mozilly a zkontrolujte proběhlou synchronizaci.</p>

<p>Někteří uživatelé budou muset učinit ještě několik dalších kroků a manuálně přidat klíče do registru.</p>

<ol>
	<li>Stáhněte tento <a href="http://ftp.mozilla.org/pub/mozilla/contrib/palm/AddPalmABSyncRegistryKey.reg">soubor registru</a> na váš harddisk.</li>
	<li>Pokud máte váš program pro obsluhu Palmu nainstalován v jiném adresáři než <tt>C:\Palm</tt>, budete muset soubor registru upravit a zapsat do něj správnou cestu. Zkontrolujte, aby zapsaná cesta byla v uvozovkách a každý oddělovač adresářů (zpětné lomítko) zdvojen (použijte \\ místo \).</li>
	<li>V programu <acronym title="Windows Explorer">Průzkumník</acronym> dvojklikněte na tento soubor. Měla by se objevit zpráva "<acronym title="Information in this file has been successfully entered into the registry">Do registru byla úspěšně uložena informace...</acronym>"".</li>
	<li>Pro spuštění synchronizace znovu dvojklikněte na <i>Address Book Palm Sync Install</i> v nabídce Start/Programy.</li>
</ol>


<h2 id="extras_fonts">Fonty</h2>
<p>Mnoho distribucí Linuxu (zej. Red Hat) má špatný font Arial. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=46415" title="Bug 46415 - Arial looks much smaller than Helvetica at same size, and is">46415</a>) Pokud shledáte, že mnoho webových stránek, zejména těch, které tento font používají, vypadá nepřehledně, hrubě a jsou těžko čitelné, podívejte se na následující odkazy, které vysvětlují dva způsoby, jak změnit nastavení vašeho font serveru, aby používal lepší font Arial:</p>

<p><a href="http://www.mozilla.org/docs/end-user/dark-mozilla-fonts.html#ttf"> http://home.online.no/~rut-aane/linux.html#ttf</a><br />
  <a href="http://www.mozilla.org/docs/end-user/dark-mozilla-fonts.html#fuzzy"> http://home.online.no/~rut-aane/linux.html#fuzzy</a></p>

<p>Pokud to nepomůže, můžete problém vyřešit přejmenováním nebo smazáním <tt>/usr/share/fonts/ISO8859-2</tt> např. následujícím příkazem:</p>

<p><code>mv /usr/share/fonts/ISO8859-2 /usr/share/fonts.ISO8859-2</code></p>

<p>odlogujte se a znovu zalogujte. Tento krok lze snadno vrátit zpět např. příkazem:</p>

<p><code>mv /usr/share/fonts.ISO8859-2 /usr/share/fonts/ISO8859-2</code></p>


<h2 id="extras_addons">Rozšíření (extensions)</h2>
<p>Na serveru <a href="http://www.mozdev.org/">mozdev.org</a> je dostupná řada rozšíření (extensions) např. <a href="http://mycroft.mozdev.org/">další vyhledávací moduly</a>, <a href="http://protozilla.mozdev.org/">podpora telnet:// adres</a> v Linuxu (a dalších UNIXech), <a href="http://multizilla.mozdev.org/">vylepšení práce s panely</a>, <a href="http://spellchecker.mozdev.org/">korektor překlepů</a> a mnohé další. Tato rozšíření nejsou oficiálně podporována od mozilla.org, ale mohou být zajímavá pro uživatele snažící se rozšířit možnosti nainstalované Mozilly.</p>


<h2 id="extras_talkback">Quality Feedback Agent (automatické zasílání zpráv o chybách)</h2>
<p>Pokud dojde k pádu Mozilly, <a href="http://www.mozilla.org/quality/qfa.html">Quality Feedback Agent</a> shromáždí data, která popisují příčinu jejího pádu. To může pomoci vývojářům Mozilly rychle lokalizovat a opravit problém, který tento pád způsobil. Program neshromažďuje citlivé informace jako, které stránky uživatel navštěvuje či hesla. Odeslání informací o pádu Mozilly je jednou z <a href="http://www.mozilla.org/quality/">možností</a>, jak může uživatel přispět k vývoji Mozilly. Tato pomoc není vyžadována, ale je velmi doporučována.</p>

<p>Pokud na OS Windows používáte automatickou konfiguraci proxy, budete muset <a href="http://www.mozilla.org/quality/qfa.html#proxy">upravit</a> váš soubor <tt>talkback.ini</tt>, aby mohl Quality Feedback Agent odeslat shromážděná data.</p>


<p><small>Tento dokument je překladem <a href="http://www.mozilla.org/releases/mozilla1.4/installation-extras.html" title="Originální dokument">dokumentu</a> z <a href="http://www.mozilla.org/" title="Web neziskové organizace Mozilla Foundation">mozilla.org</a>. Copyright &copy; 1998-2003 The Mozilla Organization</small></p>

<?php
	$page->includeTemplate('footer');
?>
