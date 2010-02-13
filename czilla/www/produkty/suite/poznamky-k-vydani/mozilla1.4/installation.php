<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Poznámky k vydání verze 1.4');
	$page->setHeadline('Poznámky k vydání','Verze 1.4 - pokyny k instalaci');
	$page->setKeywords ('mozilla, suite, poznámky k vydání, verze, gecko, prohlížeč, poštovní klient, editor, chatzilla');
	$page->setDescription ('Poznámky k vydání historické verze 1.4');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
<p>V této části <a href="index.php">poznámek k vydání verze Mozilly 1.4</a> naleznete požadavky na systém, informace o kompatibilitě a poznámky k instalaci.</p>

<ul>
	<li><strong><a href="#linux">Linux</a></strong>
	<ul>
		<li><a href="#linux_require">Požadavky na systém</a></li>
		<li><a href="#linux_install">Pokyny k instalaci</a>

		<ul>
			<li><a href="#linux_install_installer">Instalace pomocí instalátoru</a></li>
			<li><a href="#linux_install_manual">Instalace z archivu .tar.gz</a></li>
			<li><a href="#linux_install_multiuser">Více-uživatelská instalace</a></li>
			<li><a href="#linux_install_gnome">Přidání Mozilly do panelu GNOME</a></li>
			<li><a href="#linux_install_rpm">Instalace z RPM balíčků</a></li>
		</ul>
		</li>

		<li><a href="#linux_uninstall">Odinstalace</a></li>
	</ul>
	</li>

	<li><strong><a href="#mac">Macintosh</a></strong> (Mac OS X)
	<ul>
		<li><a href="#mac_requirements">Požadavky na systém</a></li>
		<li><a href="#mac_install">Pokyny k instalaci</a></li>
		<li><a href="#mac_uninstall">Odinstalace</a></li>
	</ul>
	</li>

	<li><strong><a href="#win">Windows</a></strong>
	<ul>
		<li><a href="#win_requirements">Požadavky na systém</a></li>
		<li><a href="#win_install">Pokyny k instalaci</a>
		<ul>
			<li><a href="#win_install_installer">Instalace pomocí instalátoru</a></li>
			<li><a href="#win_install_manually">Ruční instalace ze .zip archivu</a></li>
		</ul>
		</li>
		<li><a href="#win_uninstall">Odinstalace</a></li>
	</ul>
	</li>

	<li><strong><a href="installation-ports.php">Porty (další operační systemy)</a></strong>
	<ul>
		<li><a href="installation-ports.php#ports_openvms">OpenVMS</a></li>
		<li><a href="installation-ports.php#ports_solaris">Solaris</a></li>
		<li><a href="installation-ports.php#ports_aix">AIX</a></li>
		<li><a href="installation-ports.php#ports_hpux">HP-UX</a></li>
		<li><a href="installation-ports.php#ports_irix">IRIX</a></li>
		<li><a href="installation-ports.php#ports_os2">OS/2</a></li>
	</ul>
	</li>

	<li><a href="#files">Vytvořené a používané soubory</a>
	<ul>
		<li><a href="#files_profiles">Umístění profilu</a></li>
	</ul>
	</li>

	<li><a href="installation-extras.php">Instalace Javy, Plug-inů, a doplňků</a></li>
</ul>

<h2 id="linux">Linux</h2>
<h3 id="linux_require">Požadavky na systém</h3>

<ul>
	<li>Jsou vyžadovány dále uvedené verze knihoven (nebo s nimi kompatibilní): glibc 2.<b>2.4</b>, XFree86 3.3.x, GTK 1.2.x, Glib 1.2.x, Libstdc++ 2.9.0. Red Hat Linux <b>7</b>.0, Debian <b>3.0</b>, a SuSE <b>7</b>.2 (nebo novějších) by měly být vyhovující.</li>
	<li>Procesor třídy Intel pentium (doporučujeme 233 MHz nebo rychlejší)</li>
	<li>64 MB RAM</li>
	<li>26 MB volného místa na disku</li>
</ul>

<h3 id="linux_install">Pokyny k instalaci</h3>
<p class="alert"><strong>Poznámka:</strong> Před instalací Mozilly 1.4 se doporučuje odinstalovat předchozí verzi Mozilly. Záložky, historie, soubory cookie, e-maily a další informace uložené ve vašem profilu budou zachovány.</p>

<p class="alert"><strong>Poznámka:</strong> Mozilla musí být alespoň jednou spuštěna, aby dokončila autoregistraci a zapsala soubor <tt>compreg.dat</tt> do instalačního adresáře. Pokud je před tím Mozilla spuštěna jiným uživatelem (než tím, kdo ji instaloval), program je ukončen za současného vytvoření core dump. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=49345" title="Bug 49345 - Document that admins must run product once after installation">49345</a>)
</p>
<p><strong>Poznámka:</strong> Následující pokyny používají interpret příkazů bash. Pokud jej nepoužíváte, upravte jednotlivé kroky pro váš interpret příkazů.</p>


<h4 id="linux_install_installer">Instalace pomocí instalátoru</h4>
<p>Při instalaci Mozilly prostřednictvím instalačního programu postupujte dle těchto kroků:</p>
<ol>
	<li>Vytvořte adresář mozilla1.4 (<code>mkdir mozilla1.4</code>) a přemístěte se do tohoto adresáře (<code>cd mozilla1.4</code>).</li>
	<li>Klikněte na odkaz na soubor s instalátorem (jmenuje se <tt>mozilla-i686-pc-linux-gnu-installer.tar.gz</tt>) a stáhněte jej do vytvořeného adresáře mozilla1.4.</li>
	<li>V adresáři mozilla1.4 rozbalte archiv následujícím příkazem: <code>gunzip -dc moz*.tar.gz | tar -xvf -<br /></code> (Tím se rozbalí instalátor do podadresáře <tt>mozilla-installer</tt>.)</li>
	<li>Přemístěte se do adresáře mozilla-installer (<code>cd mozilla-installer</code>) a spusťte instalátor příkazem <code>./mozilla-installer</code></li>
	<li>Řiďte se instrukcemi instalačního průvodce.</li>
	<li>Mozillu spustíte z adresáře, do kterého jste ji nainstalovali příkazem <code>./mozilla</code></li>
</ol>

<h4 id="linux_install_manual">Instalace z archivu .tar.gz</h4>
<p>Pokud instalujete Mozillu stažením archivu .tar.gz, postupujte dle následujících kroků:</p>
<ol>
	<li>Vytvořte adresář mozilla1.4 (<code>mkdir mozilla1.4</code>) a přemístěte se do tohoto adresáře (<code>cd mozilla1.4</code>).</li>
	<li>Klikněte na odkaz na soubor mozilla*.tar.gz, čímž stáhnete tento soubor na váš počítač.</li>
	<li>V Mozilla adresáři (<code>mozilla1.4</code>) rozbalte soubor následujícím příkazem: <code> gunzip -dc moz*.tar.gz | tar -xvf -</code> (Vytvoříte tím podadresář "mozilla" v adresáři mozilla1.4.)</li>
	<li>Přemístěte se do adresáře mozilla (<code>cd mozilla</code>).</li>
	<li>Spusťte Mozillu skriptem ./mozilla.</li>
</ol>

<h4 id="linux_install_multiuser">Více-uživatelská instalace</h4>
<p>Při instalaci pro více uživatelů na Unixu, postupujte stejně jako při instalaci pro jednoho a vytvořte následující skript v adresáři s nainstalovanou Mozillou, nastavte atributy spouštění <tt>chmod u+x &lt;scriptname&gt;</tt>), a spusťte jej jako root. <b>Nespouštějte tento program jako su[do] root.</b> (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=52653" title="Bug 52653 - regxpcom creates .mozilla in Real User's home">52653</a>)</p>
<pre>#!/bin/sh
dist_bin=`dirname $0`
MOZILLA_FIVE_HOME=$dist_bin
LD_LIBRARY_PATH=$dist_bin
export MOZILLA_FIVE_HOME LD_LIBRARY_PATH
$dist_bin/regxpcom
$dist_bin/regchrome
touch $dist_bin/chrome/user-skins.rdf $dist_bin/chrome/user-locales.rdf
</pre>
<p>Takto instalovanou Mozillu byste měli být shopni spustit jako jakýkoliv uživatel, který k tomu má přístupová práva.</p>


<h4 id="linux_install_gnome">Přidání Mozilly do panelu GNOME</h4>
<ol>
	<li>Klikněte na tlačítko hlavní nabídky GNOME, otevřete nabídku panelu, otevřete podmenu 'Add to Panel' a vyberte <acronym title="Launcher">Spouštěč</acronym>.</li>
	<li>Klikněte pravým tlačítkem na ikonu Mozilly na panelu a zadejte následující příkaz:<br /><br /><tt><em>directory_name</em>/mozilla</tt><br /><br />
    přičemž místo directory_name napište jméno adresáře, do kterého jste umístili Mozillu. Obvykle <tt>/usr/local/mozilla</tt>.</li>
	<li>Napište jméno pro ikonu, pokud chcete, můžete připsat i komentář.</li>
	<li>Klikněte na tlačítko ikona a napište následující cestu:<br /><br />
	<tt>directory_name/icons/mozicon50.xpm</tt><br /><br />místo <em>directory_name</em> napište adresář, do kterého jste umístili Mozillu. Obvykle <tt>/usr/local/mozilla/icons/mozicon50.xpm</tt>.</li>
</ol>

<h4 id="linux_install_rpm">Instalace z RPM balíčků</h4>
<p>Balíčky RPM vytváříme tak, aby běhaly na standardních instalacích Red Hat 7.x a Red Hat 8.x. Použití těchto balíčku na SuSE vyžaduje instalaci balíčku <a href="http://rpmfind.net/linux/rpm2html/search.php?query=gdk-pixbuf">
  gdk-pixbuf</a>. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=85218" title="Bug 85218 - mozilla-0.9.1-rpm libgdk_pixbuf.so.2 missing">85218</a>)
</p>


<h3 id="linux_uninstall">Odinstalace</h3>
<ul>
  <li>Smažte adresář <code> mozilla1.4</code> do kterého jste nainstalovali Mozillu</li>
  <li>Smažte adresář <tt>~/.mozilla</tt>, který obsahuje <a href="#files_profiles">informace vašeho profilu</a> (pozor, tím odstraníte všechny informace uložené ve vašem profilu jako záložky, e-maily atd.)</li>
</ul>

<h2 id="mac">Macintosh</h2>
<h3 id="mac_requirements">Požadavky na systém</h3>
<ul>
  <li>Mac OS X nebo novější</li>
  <li>Procesor PowerPC (doporučujeme 266 MHz nebo rychlejší)</li>
  <li>64 MB RAM </li>
  <li>36 MB volného místa na disku</li>
</ul>

<p class="alert">Některé grafické ovladače ATI nejsou s Mozillou kompatibilní a jejich použití může vést k pádu aplikace. Pokud často zaznamenáváte pád aplikace a používáte ATI ovladač, můžete problém obejít nastavením obrazovky na 'Thousands of colors' místo 'Millions' (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=101055" title="Bug 101055 - Scrolling vertically crashes system - ATI Video Driver Problem">101055</a>).</p>


<h3 id="mac_install">Pokyny k instalaci (Mac OS X)</h3>
<p>Při instalování Mozilly ze staženého '<span class="HIDETODO">disk image</span>' doporučujeme postupovat podle následujících kroků:</p>
<ol>
	<li>Klikněte na odkaz na soubor <tt>mozilla-mac-MachO.dmg.gz</tt> čímž stáhnete tento soubor na váš počítač. Standardně se soubor nahraje na váš desktop. </li>
	<li>Stáhnutý soubor <tt>.dmg.gz</tt> přetáhněte na Stuffit Expander (Stuffit Expander se může spustit a rozbalit soubor automaticky). Pokud se '<span class="HIDETODO">disk image</span>' nepřipojí automaticky, dvojklikněte pro jeho připojení na soubor <tt>.dmg</tt>. Pokud k připojení přesto nedojde a soubor nevypadá jako '<span class="HIDETODO">disk image</span>', spusťte u tohoto souboru funkci 'Show Info' a v kategorii 'Open with application' vyberte 'Disk Copy'. Na Mac OS 10.2 můžete použít položku 'Open with' kontextové nabídky.</li>
	<li>Jakmile je 'disk image' připojen, otevřete jej a přetáhněte ikonu Mozilly na váš pevný disk.</li>
	<li>Doporučujeme ji zkopírovat do složky aplikací (Application folder).</li>
	<li>Odpojte (eject) 'disk image'.</li>
	<li>Pokud chcete, můžete Mozillu přetáhnout do vašeho '<span class="HIDETODO">docku</span>', abyste ji měli vždy po ruce. Možná budete chtít nastavit Mozillu jako váš výchozí Internetový prohlížeč v panelu 'Internet preferences' (pod položkou Web).</li>
</ol>


<h3 id="mac_uninstall">Odinstalace</h3>
<ol>
	<li>Smažte adresář "Mozilla" z <tt>/Users/uživatelské jméno/Library</tt></li>
	<li>Smažte soubor "Mozilla Registry" z <tt>/Users/uživatelské jméno/Library/Preferences</tt></li>
	<li>Odstraňte Mozillu z nainstalovaného adresáře (např. <tt>/Applications</tt>)</li>
</ol>


<h2 id="win">Windows</h2>
<h3 id="win_requirements">Požadavky na systém</h3>
<ul>
	<li>Windows 95, 98, 98SE, Windows Me, Windows NT 4.0, Windows 2000, nebo Windows XP </li>
	<li>Procesor třídy Intel pentium (doporučujeme 233 MHz nebo rychlejší)</li>
	<li>64 MB RAM</li>
	<li>26 MB volného místa na disku</li>
</ul>

<p class="alert">Některé ATI ovladače nejsou s Mozillou kompatibilní a jejich používání může mít za následek pád aplikace. V takovém případě upgradujte na nejnovější verzi ATI ovladače. (chyba <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=101055" title="Bug 101055 - Scrolling vertically crashes system - ATI Video Driver Problem">101055</a>)</p>

<h3 id="win_install">Pokyny k instalaci</h3>
<p class="alert"><strong>Poznámka:</strong> Důrazně doporučujeme ukončit všechny programy před spuštěním instalačního programu. Také byste měli dočasně vypnout antivirovou ochranu.</p>

<h4 id="win_install_installer">Instalace pomocí instalátoru</h4>
<p>Při instalaci Mozilly ze staženého instalátoru postupujte dle následujících kroků:</p>
<ol>
	<li>Klikněte na odkaz na <tt>Mozilla-win32-installer.exe</tt> čímž stáhnete soubor s instalačním programem na váš počítač.</li>
	<li>Nalezněte adresář, do kterého jste nahráli soubor, a dvojklikněte na soubor (je označený ikonou Mozilly). Tím se spustí instalační program.</li>
	<li>Řiďte se instrukcemi instalačního programu na obrazovce. Mozilla bude po skončení instalace automaticky spuštěna.</li>
</ol>

<h4 id="win_install_manually">Ruční instalace ze .zip archivu</h4>
<p>Při instalaci ze staženého .zip souboru (ruční instalace) postupujte dle následujících kroků:</p>
<ol>
	<li>Klikněte na odkaz na soubor mozilla-win32-talkback.zip nebo na odkaz mozilla-win32.zip, čímž stáhnete soubor na váš počítač.</li>
	<li>Najděte adresář, do kterého jste soubor nahráli, a dvojklikněte na něj. Poznámka: Předpokládáme, že máte instalovánu aktuální verzi programu WinZip a umíte s tímto programem zacházet. Pokud ne, program WinZip a informace o tomto programu získáte na <a href="http://www.winzip.com">www.winzip.com</a>.</li>
	<li>Extrahujte soubory z archivu do adresáře např. <tt>C:\Program Files\Mozilla 1.4</tt> .</li>
	<li>Mozillu spustíte dvojklikem na soubor Mozilla.exe v adresáři, do kterého jste extrahovali soubory z archivu.</li>
</ol>

<h3 id="win_uninstall">Odinstalace</h3>
<ul>
	<li>Pokud jste instalovali Mozillu pomocí instalátoru, vyberte v <tt>Nastavení / Ovládací panely / Přidat nebo odebrat programy</tt> Mozilla 1.4</li>
	<li>Pokud jste instalovali Mozillu ručně ze .zip archivu, smažte adresář mozilla1.4 do kterého jste Mozillu extrahovali a odstraňte <a href="#files_profiles">adresář s profily</a> (pozor, tím odstraníte všechny informace uložené ve vašem profilu jako záložky, e-maily atd.).</li>
</ul>


<h2 id="files">Vytvořené a používané soubory</h2>
<p>Mozilla ukládá data patřící k uživateli do adresáře nazývaného (uživatelský) <a href="known-issues.php#profiles">profil</a>. Profil obsahuje uložené předvolby, složky s poštou, historii prohlížeče, cookies, databasi kontaktů a další důležitá data. Následuje seznam souborů profilu.</p>

<table cellspacing="3" cellpadding="3">
<tbody>
<tr>
	<td></td>
	<td class="deftable-head">Adresáře</td>
</tr>
<tr>
	<td class="deftable-item"><tt>Cache</tt></td>
	<td class="deftable-def"> Disková vyrovnávací paměť (obsahuje dočasné soubory z Internetu). Pro získání více informací o aktuálním stavu vyrovnávací paměti zadejte <tt>about:cache</tt> do adresního řádku Mozilly.</td>
</tr>
<tr>
	<td class="deftable-item"><tt>chrome</tt></td>
	<td class="deftable-def"> Uživatelem definované styly, uživatelem instalovaná témata vzhledu, uživatelem instalované rozšíření (extensions)</td>
</tr>
<tr>
	<td class="deftable-item"><tt>ImapMail</tt></td>
	<td class="deftable-def">IMAP poštovní zprávy</td>
</tr>
<tr>
	<td class="deftable-item"><tt>Mail</tt></td>
	<td class="deftable-def">Lokální složky a POP3 poštovní zprávy</td>
</tr>
<tr>
	<td class="deftable-item"><tt>News</tt></td>
	<td class="deftable-def">Diskusní skupiny</td>
</tr>
<tr>
	<td></td>
	<td class="deftable-head">Soubory</td>
</tr>
<tr>
	<td class="deftable-item"><tt><i>číslo</i>.s</tt></td>
	<td class="deftable-def"><a title="Nástroje -&gt; Soukromí &amp; Zabezpečení -&gt; Správce hesel -&gt; Zobrazit uložená hesla">Hesla</a> </td>
</tr>
<tr>
	<td class="deftable-item"><tt><i>číslo</i>.w</tt></td>
	<td class="deftable-def"><a title="Úpravy -&gt; Zobrazit uložené položky">Data pro předvyplňování formulářů</a></td>
</tr>
<tr>
	<td class="deftable-item"> <div><tt>.autoreg</tt></div></td>
	<td class="deftable-def">XPCOM autoregistrační soubor. Říká Mozille, aby při příštím startu zkontrolovala, zda nejsou instalované nové komponenty. </td>
</tr>
<tr>
	<td class="deftable-item"> <div><tt>appreg</tt></div>
      <div><tt>registry.dat</tt></div>
      <div><tt>registry</tt></div></td>
	<td class="deftable-def">Registr Mozilly. Soubory, ve kterých Mozilla ukládá záznamy o vašich profilech. </td>
</tr>
<tr>
	<td class="deftable-item"><tt>abook.mab</tt></td>
	<td class="deftable-def"><a title="Okno -&gt; Databáze kontaktů -&gt; Osobní databáze kontaktů">Osobní databáze kontaktů</a></td>
</tr>
<tr>
	<td class="deftable-item"><tt>bookmarks.html</tt></td>
	<td class="deftable-def"><a title="Záložky -&gt; Upravit záložky">Záložky prohlížeče</a></td>
</tr>
<tr>
	<td class="deftable-item"><tt>cert7.db</tt></td>
	<td class="deftable-def"><a title="Úpravy -&gt; Předvolby -&gt; Soukromí &amp; Zabezpečení -&gt; Certifikáty -&gt; Spravovat certifikáty">Database klientských certifikátů</a></td>
</tr>
<tr>
	<td class="deftable-item"> <div><tt>compreg.dat</tt></div></td>
	<td class="deftable-def">XPCOM registr Mozilly. Soubory, ve kterých Mozilla uchovává informaci o svých komponentách.</td>
</tr>
<tr>
	<td class="deftable-item"><tt>cookies.txt</tt></td>
	<td class="deftable-def"><a title="Nástroje -&gt; Správce souborů Cookie -&gt; Spravovat uložené Cookie">Cookies</a></td>
</tr>
<tr>
	<td class="deftable-item"><tt>cookperm.txt</tt></td>
	<td class="deftable-def">Oprávnění k zasílání <a title="Nástroje -&gt; Správce souborů Cookie -&gt; Spravovat uožené Cookie">Cookie</a> a načítání <a title="Nástroje -&gt; Správce obrázků -&gt; Spravovat přístup k obrázkům">obrázků</a> </td>
</tr>
<tr>
	<td class="deftable-item"><tt>history.dat</tt></td>
	<td class="deftable-def"><a title="Okno -&gt; Přejít -&gt; Historie">Historie navštívených stránek</a>
	</td>
</tr>
<tr>
	<td class="deftable-item"><tt>history.mab</tt></td>
	<td class="deftable-def"><a title="Okno -&gt; Databáze kontaktů -&gt; Posbírané adresy">Databáze posbíraných adres</a></td>
</tr>
<tr>
	<td class="deftable-item"><tt>key3.db</tt></td>
	<td class="deftable-def"><a title="Úpravy -&gt; Předvolby -&gt; Soukromí &amp; Zabezpečení -&gt; Certifikáty -&gt; Spravovat certifikáty">Databáze certifikátů</a></td>
</tr>
<tr>
	<td class="deftable-item"><tt>localstore.rdf</tt></td>
	<td class="deftable-def">Obsahuje výchozí nastavení oken. Ukládají se do něj "stálá" (persistent) nastavení (nastavení, která nejsou zapomenuta po ukončení programu), např. informace o zobrazených lištách, poloha a velikost oken aj. </td>
</tr>
<tr>
	<td class="deftable-item"><tt>downloads.rdf</tt></td>
	<td class="deftable-def">Správce stahování souborů</td>
</tr>
<tr>
	<td class="deftable-item"><tt>training.dat</tt></td>
	<td class="deftable-def">Data k rozeznávání <a href="http://www.mozilla.org/mailnews/spam.html">nevyžádané pošty</a></td>
</tr>
<tr>
	<td class="deftable-item"><tt>mimeTypes.rdf</tt></td>
	<td class="deftable-def">Obsahuje známé MIME typy pro <a title="Úpravy -&gt; Předvolby -&gt; Prohlížeč -&gt; Pomocné aplikace"> pomocné aplikace</a></td>
</tr>
<tr>
	<td class="deftable-item"><tt>panacea.dat</tt></td>
	<td class="deftable-def">Vyrovnávací paměť poštovních složek. Souhrn vybraných polí z celé databáze pošty a diskusních skupin, nejčastěji používaných při zobrazování složek</td>
</tr>
<tr>
	<td class="deftable-item"><tt>panels.rdf</tt></td>
	<td class="deftable-def">Informace o panelech zobrazovaných v postranní liště</td>
</tr>
<tr>
	<td class="deftable-item"><tt>prefs.js</tt></td>
	<td class="deftable-def">Předvolby uživatele. Zobrazí se po zadání <tt>about:config</tt> do adresního řádku prohlížeče.</td>
</tr>
<tr>
	<td class="deftable-item"><tt>pluginreg.dat</tt></td>
	<td class="deftable-def">Všechny registrované pluginy. Pro více informací zadejte <tt>about:plugins</tt> do adresního řádku prohlížeče.</td>
</tr>
<tr>
	<td class="deftable-item"><tt>search.rdf</tt></td>
	<td class="deftable-def">Informace o vyhledávacích pluginech v postranním panelu.</td>
</tr>
<tr>
	<td class="deftable-item"><tt>secmod.db</tt></td>
	<td class="deftable-def"><a title="Úpravy -&gt; Předvolby -&gt; Soukromí &amp; Zabezpečení -&gt; Certifikáty -&gt; Spravovat bezpečnostní zařízení"> Databáze bezpečnostních modulů.</a></td>
</tr>
<tr>
	<td class="deftable-item"><tt>URL.tbl</tt></td>
	<td class="deftable-def"><a title="Nástroje -&gt; Správce formulářů -&gt; Správa formulářů">Webové adresy, ze kterých se nebudou data z formulářů ukládat.</a></td>
</tr>
<tr>
	<td class="deftable-item"><tt>user.js</tt></td>
	<td class="deftable-def"> Předvolby uživatele, které budou zapsány do prefs.js při příštím startu Mozilly.</td>
</tr>
<tr>
	<td class="deftable-item"><tt>xpti.dat</tt></td>
	<td class="deftable-def"> Informační katalog XPCOM typelib.</td>
</tr>
<tr>
	<td class="deftable-item"> <div><tt>XUL.mfl</tt></div>
		<div><tt>XUL FastLoad File</tt></div>
		<div><tt>XUL.mfasl</tt></div></td>
	<td class="deftable-def"> Soubor rychlého spouštění XUL. Obsahuje předkompilované chrome a soubory s JavaScriptem.</td>
</tr>
<tr>
	<td class="deftable-item"> <div><tt>Invalid.mfasl</tt></div>
		<div><tt>Aborted.mfasl</tt></div></td>
	<td class="deftable-def">Čas od času Mozilla zruší váš soubor rychlého spouštění XUL. Výsledkem jsou tyto soubory. Můžete je smazat, pokud je nechcete použít k ladění.</td>
</tr>
<tr>
	<td class="deftable-item"> <div><tt>mozver.dat</tt></div></td>
	<td class="deftable-def">(Windows) Pro uložení verze komponent.</td>
</tr>
<tr>
	<td class="deftable-item"> <div><tt>MozillaUninstall.exe</tt></div></td>
	<td class="deftable-def">(Windows) Odinstalátor Mozilly.</td>
</tr>
<tr>
	<td></td>
	<td class="deftable-head">Další soubory</td></tr>
<tr>
	<td class="deftable-item"><tt><i>*</i>.msf</tt></td>
	<td class="deftable-def">Souhrn pošty. Obsahují souhrny poštovních složek. Nacházejí se v adresářích ImapMail a Mail.</td>
</tr>
<tr>
	<td class="deftable-item"><tt>msgFilterRules.dat</tt></td>
	<td class="deftable-def">Obsahuje <a title="Nástroje -&gt; Poštovní filtry">filtry pošty</a> pro daný server. Nachází se v adresářích ImapMail a Mail.</td>
</tr>
<tr>
	<td class="deftable-item"><tt><i>*</i>.rc</tt></td>
	<td class="deftable-def">Obsahuje seznam diskusních skupin z daného serveru, do kterých je uživatel přihlášen. Nachází se v adresáři News.</td>
</tr>
<tr>
	<td class="deftable-item"><tt>hostinfo.dat</tt></td>
	<td class="deftable-def">Obsahuje seznam všech diskusních skupin z daného serveru. Nachází se v adresáři News.</td>
</tr>
</tbody>
</table>

<h3 id="files_profiles">Umístění profilu</h3>
<p>Obvyklé umístění uživatelských profilů:</p>

<dl class="description">
<dt>Windows</dt>
<dd>
	<p>Na Windows 95, Windows 98 nebo Windows ME bez víceuživatelského nastavení se uživatelský profil obvykle nachází v:</p>
	<pre>C:\Windows\Application Data\Mozilla\Profiles\[náhodný řetězec].slt\</pre>

	<p>Na Windows 95, Windows 98 nebo Windows ME s víceuživatelským nastavením se uživatelský profil obvykle nachází v:</p>
	<pre>C:\Windows\Profiles\[váš login]\Application Data\Mozilla\<br />Profiles\[náhodný řetězec].slt\</pre>

	<p>Na Windows 2000 a Windows XP se uživatelský profil obvykle nachází v:</p>
	<pre>C:\Documents and Settings\[váš login]\Application Data\Mozilla\<br />Profiles\[náhodný řetězec].slt\</pre>

	<p>Pozn.: Na Windows 2000 a Windows XP je adresář <tt>Document and Settings</tt> schován. Pokud jej chcete zobrazit, nastavte v aplikaci Windows Explorer zobrazování skrytých souborů a adresářů.</p>
</dd>

<dt>Mac OS X</dt>
<dd>
	<p>Uživatelský profil se obvykle nachází v:</p>
	<pre>~/Library/Mozilla/Profiles/[jméno profilu]/[náhodný řetězec].slt/</pre>
</dd>

<dt>Linux</dt>
<dd>
	<p>Uživatelský profil se obvykle nachází v:</p>
	<pre>~/.mozilla/[jméno profilu]/[náhodný řetězec].slt/</pre>
</dd>
</dl>

<p><small>Tento dokument je překladem <a href="http://www.mozilla.org/releases/mozilla1.4/installation.html" title="Originální dokument">dokumentu</a> z <a href="http://www.mozilla.org/" title="Web neziskové organizace Mozilla Foundation">mozilla.org</a>. Copyright &copy; 1998-2003 The Mozilla Organization</small></p>

<?php
	$page->includeTemplate('footer');
?>
