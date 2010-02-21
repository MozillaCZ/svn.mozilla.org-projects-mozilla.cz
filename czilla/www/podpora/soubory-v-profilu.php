<?php
	require_once '../inc/page.php';
	$page->setTitle('Soubory v profilu aplikací Mozilla');
	$page->setHeadline('Soubory v profilu aplikací Mozilla','Význam jednotlivých souborů v profilech aplikací Mozilla');
	$page->setKeywords ('mozilla, firefox, thunderbird, profil, soubory, data');
	$page->setDescription ('Přehled souborů umístěných v profilech aplikací Mozilla.org.');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<p>V&nbsp;adresáři s&nbsp;profilem
<a href="/produkty/firefox/">Firefoxu</a>,
<a href="/produkty/thunderbird/">Thunderbirdu</a>,
<a href="/produkty/suite/">Mozilla Suite</a>,
<a href="/produkty/seamonkey/">SeaMonkey</a>,
<a href="/produkty/nvu/">Nvu</a>,
je celá řada souborů, které mají často nezvyklá jména. Na této stránce naleznete seznam souborů, které se nacházejí v&nbsp;adresáři
s&nbsp;profilem. Najdete zde též informace o&nbsp;tom, co dělají a&nbsp;k&nbsp;čemu jsou dobré.</p>

<p>Pokud neznáte cestu k profilu aplikace Mozilla.org, navštivte jeden z&nbsp;následujících odkazů podle aplikace, jejíž uložená data chcete najít.</p> 

<ul>
  <li><a href="http://firefox.mozilla.cz/otazky/#otazka-6" title="Kde je uložen profil Firefoxu">Mozilla Firefox</a> (obdobné u Mozilla Sunbird)</li>
  <li><a href="http://thunderbird.mozilla.cz/otazky/#otazka-prechod-kde-jsou-ulozena-data" title="Kde je uložen profil Thunderbirdu">Mozilla Thunderbird</a> (obdobné u Nvu)</li>
  <li><a href="/produkty/suite/poznamky-k-vydani/mozilla1.3/index.php#profileloc" title="Kde je uložen profil Mozilla Suite">Mozilla Suite </a> (obdobné u SeaMonkey)</li>
</ul>

<p><strong>Upozornění:</strong> Neupravujte prosím žádné
soubory v&nbsp;adresáři s&nbsp;profilem dříve, než ukončíte aplikaci Mozilla. Před
úpravou jakéhokoliv souboru tedy ukončete aplikaci Mozilla (včetně funkce
Rychlého spouštění). Chybná úprava souborů může zapříčinit odmítnutí dalšího spuštění
aplikace Mozilla.</p>

<p><strong>Legenda</strong> k použitým značkám v tabulce.</p>
<ul>
  <li><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> - Mozilla Suite.</li>
  <li><img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> - SeaMonkey.</li>
  <li><img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> - Mozilla Thunderbird.</li>
  <li><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> - Mozilla Firefox.</li>
  <li><img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> - Mozilla Sunbird.</li>
  <li><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /> - Rozšíření aplikací Mozilla.</li>
  <li><img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /> - Nvu.</li>
  <li>[výraz] - výraz zastupující konkrétní hodnotu v pojmenování souboru nebo adresáře.</li>
</ul>

<p>Informace k tomuto článku byly mimo jiné čerpány z <a href="http://kb.mozillazine.org/Profile#Files_and_folders_in_the_profile" title="KB MozillaZine: Profile folder" hreflang="en">KB MozillaZine: Profile folder</a> a <a href="http://gemal.dk/mozilla/files.html" title="Henrik Gemal: Files in your Mozilla profile directory" hreflang="en">Files in your Mozilla profile directory</a>.</p>

<h2 id="sp-adresare">Adresáře</h2>

<div class="tbl-1">
<table border="1">
<thead>
<tr>
	<th  width="15%" >Adresář</th>
	<th width="70%" >Popis</th>
  <th width="15%" >Součást</th>
</tr>
</thead>
<tbody>
<tr>
  <td lang="en"><tt>adblockplus</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/1865">Adblock Plus</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
  <td lang="en"><tt>backupData</tt></td>
	<td>Soubory záloh kalendářů (rozšíření <a href="http://thunderbird.mozilla.cz/proc-pouzivat/kalendar/">Lightning</a>).</td>
  <td><img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>bookmarkbackups</tt></td>
	<td>Soubory s&nbsp;pravidelnými zálohami záložek.</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>Cache</tt></td>
	<td>Soubory diskové vyrovnávací paměti (dočasné soubory) [<tt>about:cache</tt>]	. Ve Windows 2000/XP je umístěn mimo uživatelský profil. Najdete ho v <span class="soubor">C:\Documents and Settings\[uživatel]\Local Settings\Data Aplikací\</span> a dále v podadresáři aplikace jako v klasickém umístění profilu.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> </td>
</tr>
<tr>
	<td lang="en"><tt>Cache.Trash</tt></td>
	<td>Dočasný adresář s&nbsp;diskovou vyrovnávací pamětí. Je používán pouze
	tehdy, když je vymazáván skutečný adresář s&nbsp;diskovou vyrovnávací
	pamětí.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>calendar</tt></td>
	<td>Soubory rozšíření Mozilla Kalendář (vývoj rozšíření byl pozastaven).</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td><tt>cert8.dir</tt></td>
	<td>Databáze certifikátů.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>colorzilla</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/271">ColorZilla</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>chatzilla</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/16">ChatZilla</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>chrome</tt></td>
	<td>Uživatelské styly, nainstalované motivy vzhledu a&nbsp;rozšíření.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td lang="en"><tt>extensions</tt></td>
	<td>Nainstalovaná rozšíření.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
  <td lang="en"><tt>forecastfox</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/398">ForecastFox</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>ImapMail</tt></td>
	<td><acronym title="Internet Message Access Protocol" lang="en">IMAP</acronym>	účty. </td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>Mail</tt></td>
	<td>Lokální složky a&nbsp;POP3 účty.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>News</tt></td>
	<td>Diskusní skupiny.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>searchplugins</tt></td>
	<td>Nainstalované vyhledávací moduly.</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>Security</tt></td>
	<td>Soubory zabezpečení (<strong>pouze Mac OS</strong>)<br />
		"Databáze bezpečnostních zařízení" ekvivalentní k&nbsp;<span class="soubor">secmod.db</span><br />
		"Certifikáty" ekvivalentní k&nbsp;<span class="soubor">cert7.db</span> a&nbsp;<span class="soubor">cert8.db</span><br />
		"Databáze klíčů" ekvivalentní k&nbsp;<span class="soubor">key3.db</span></td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
  <td lang="en"><tt>scrapbook</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/8186">ScrapBook</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
</tbody>
</table>
</div>

<h2 id="sp-soubory">Soubory</h2>

<div class="tbl-1">
<table border="1">
<thead>
<tr>
	<th  width="14%" >Adresář</th>
	<th width="70%" >Popis</th>
  <th width="16%" >Součást</th>
</tr>
</thead>
<tbody>
<tr>
	<td><tt>.autoreg</tt></td>
	<td>Soubor se vytváří při instalování, aktualizaci nebo odebírání rozšíření.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td><tt>.parentlock</tt></td>
	<td>"Blokovací" soubor, který označuje, že daný profil je používán (<strong>pouze MaC OS</strong>).</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td><tt>[náhodné číslo].s</tt></td>
	<td>Vyplněná hesla (Thunderbird do verze 1.0).</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td><tt>[náhodné číslo].w</tt></td>
	<td>Data automaticky doplňovaných formulářů. </td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /></td>
</tr>
<tr>
	<td><tt>abook.mab</tt></td>
	<td>Osobní kontakty.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td><tt>abook-[číslo].mab</tt></td>
	<td>Další uživatelské adresáře kontaktů.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td><tt>ac-weights.txt</tt></td>
	<td>Doplňování adres v adresním řádku.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /></td>
</tr>
<tr>
	<td lang="en"><tt>all.js</tt></td>
	<td>Další nastavení, která budou zapsána do souboru prefs.js po startu Mozilla aplikace.</td>
  <td><img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td><tt>appreg</tt> a <tt>registry</tt></td>
	<td>Registry aplikace. Mozilla
	<abbr title="Cross Platform Component Object Model" lang="en">XPCOM</abbr>
	registry. Soubory se seznamem nainstalovaných 	součástí (<strong>pouze Linux</strong>).</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /></td>
</tr>
<tr>
	<td lang="en"><tt>blocklist.xml</tt></td>
	<td>Seznam blokovaných / zakázaných rozšíření pro jejich možné nebezpečí.</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td><tt>bookmarks.html</tt></td>
	<td>Soubor záložek. </td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>bookmarks.bak</tt></td>
	<td>Záloha souboru se záložkami před posledními změnami. </td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>bookmarks-[číslo].html</tt></td>
	<td>Záložní soubor záložek vytvářený při přidávání nové záložky. </td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /></td>
</tr>
<tr>
	<td><tt>bookmarks-[datum].html</tt></td>
	<td>Pravidelné zálohy souboru záložek. Soubory jsou v podadresáři <span class="soubor">bookmarksbackup</span>. </td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>cert7.db</tt> a <tt>cert8.db</tt></td>
	<td>Databáze certifikátů. (<span class="soubor">cert7.db</span> 	je starý formát, <span class="soubor">cert8.db</span> je novým formátem).</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td><tt>compatibility.ini</tt></td>
	<td>Informace o aplikaci, která naposledy použila profil. Soubor je automaticky generován.</td>
  <td><img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td lang="en"><tt>components.ini</tt></td>
	<td>Seznam rozšíření používající <abbr title="Cross Platform Component Object Model" lang="en">XPCOM</abbr>. Soubor je automaticky generován. Od verze Firefox 1.5 a Thunderbird 1.5 nahrazen souborem <span class="soubor">extensions.ini</span>.</td>
  <td><img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td><tt>compreg.dat</tt></td>
	<td>Mozilla <abbr title="Cross Platform Component Object Model" lang="en">XPCOM</abbr>
	registry. Soubory, kde aplikace Mozilla udržuje seznam komponent.</td>
  <td> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td><tt>cookies.txt</tt></td>
	<td>Soubory cookies. U Thunderbirdu se jedná o cookies potřebná při přístupu k některým RSS kanálům.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>cookies.txt.moztmp</tt></td>
	<td>Dočasný soubor cookies. Vzniká v případě nemožnosti zápisu do cookies.txt.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>defaults.ini</tt></td>
	<td>Výchozí seznam rozšíření používající <abbr title="Cross Platform Component Object Model" lang="en">XPCOM</abbr>. Soubor je automaticky generován. Obdoba <span class="soubor">components.ini</span>.</td>
  <td><img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td lang="en"><tt>downloads.rdf</tt></td>
	<td>Historie Správce stahování.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>editor.js</tt></td>
	<td>Nastavení editoru, která budou zapsána do souboru prefs.js po startu Mozilla aplikace.</td>
  <td><img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td lang="en"><tt>extensions.cache</tt></td>
	<td>Data Správce rozšíření. Seznam instalovaných rozšíření (jejich ID, umístění a data modifikace). Automaticky registruje rozšíření nainstalované zkopírováním do určeného adresáře.  Soubor je automaticky generován (Thunderbird od verze 1.5).</td>
  <td><img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>extensions.ini</tt></td>
	<td>Data Správce rozšíření. Seznam adresářů s nainstalovanými rozšířeními a tématy. Soubor je automaticky generován (Thunderbird od verze 1.5).</td>
  <td><img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>extensions.rdf</tt></td>
	<td>Data Správce rozšíření.	</td>
  <td><img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>fireFTPprograms.dat</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/684">FireFTP</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>fireFTPsites.dat</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/684">FireFTP</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>FlashGot.exe</tt>, <tt>flashgot.log</tt> a <tt>flashgot.log.bak</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/220">FlashGot</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>formhistory.dat</tt></td>
	<td>Uložená data z&nbsp;formulářů.</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>formhistory.sqlite</tt></td>
	<td>Uložená data z&nbsp;formulářů (Firefox od verze 3.0).</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>history.dat</tt></td>
	<td>Historie navštívených adres <abbr title="Unified Resource Locator" lang="en">URL</abbr>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>history.mab</tt></td>
	<td>Adresář Sebrané kontakty.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>hostperm.1</tt></td>
	<td>Nový soubor s&nbsp;oprávněním pro cookie a obrázky.	Náhrada souboru <tt>cookperm.txt</tt>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
  <td><tt>hostinfo.dat</tt></td>
  <td>Seznam dostupných diskusních skupin na serveru. Soubor je v podadresáři <span class="soubor">News</span>. </td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> </td>
</tr>  
<tr>
	<td lang="en"><tt>junklog.html</tt></td>
	<td>Logování filtru nevyžádané pošty. Nachází se v podadresáři <span class="soubor">ImapMail</span> nebo  <span class="soubor">Mail</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>key3.db</tt></td>
	<td>Databáze klíčů.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>kf.txt</tt></td>
	<td>Databáze klíčových výrazů ochrany proti podvrženým stránkám (phishing). Firefox od verze 2.0.</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>listing-downloaded.xml</tt> a&nbsp;<tt>listing-uploaded.xml</tt></td>
	<td>Soubory k synchronizaci cestovních profilů.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /></td>
</tr>
<tr>
	<td><tt>localstore.rdf</tt></td>
	<td>Definuje výchozí nastavení oken. Uložené hodnoty. Informace 
  o&nbsp;lištách, velikostech, pozicích&nbsp;apod.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td><tt>localstore-safe.rdf</tt></td>
	<td>Defaultní verze souboru <span class="soubor">localstore.rdf</span>, používáná při safe módu aplikace pro výchozí nastavení.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>lock</tt></td>
	<td>"Blokovací" soubor, který označuje, že daný profil je používán (<strong>pouze Linux</strong>).</td>
   <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>mailViews.dat</tt></td>
	<td>Definuje Pohledy na zprávy.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>mimeTypes.rdf</tt></td>
	<td>Definuje rozpoznané MIME typy souborů a&nbsp;pomocné aplikace, které jsou
	k&nbsp;nim přiřazeny.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>mousegestures.rdf</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/12">Mouse Gestures</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>msgFilterRules.dat</tt></td>
	<td>Nastavení filtrů zpráv. Nachází se v podadresáři <span class="soubor">ImapMail</span>, <span class="soubor">Mail</span> a <span class="soubor">News</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>nsmail.eml</tt> nebo  <tt>nsmail.tmp</tt> nebo <tt>nsmail.html</tt></td>
	<td>Dočasné soubory při odesílání zprávy.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td><tt>panacea.dat</tt></td>
	<td>Disková vyrovnávací paměť poštovní složky. Souhrn určitých polí ve všech databázích pošty a&nbsp;diskusních skupin. Jsou často používány pro
	zobrazení seznamu složek.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>panels.rdf</tt></td>
	<td>Informace o&nbsp;tom, jaké panely budou zobrazeny v&nbsp;postranní liště.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td lang="en"><tt>parent.lock</tt></td>
	<td>"Blokovací" soubor, který označuje, že daný profil je používán (<strong>pouze Windows</strong>).</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td lang="en"><tt>persdict.dat</tt></td>
	<td>Záznamy uživatelského slovníku - uživatelem doplněné výrazy. Soubor je používán kontrolou pravopisu (Firefox od verze 2.0).</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>places.sqlite</tt></td>
	<td>Záložky a historie prohlížeče (Firefox od verze 3.0).</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>popstate.dat</tt></td>
	<td>Označení již stažených zpráv z  <abbr title="Post Office Protocol Version 3" lang="en">POP3</abbr> serveru.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>prefs.js</tt></td>
	<td>Všechna nastavení [<tt>about:config</tt>].</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td lang="en"><tt>search.rdf</tt></td>
	<td>Informace o&nbsp;vyhledávacích modulech (Firefox od verze 1.5).</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>search.sqlite</tt></td>
	<td>Informace o&nbsp;vyhledávacích modulech (Firefox od verze 2.0).</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>sessionstore.js</tt> a <tt>sessionstore.bak</tt></td>
	<td>Uložená relace. Soubor <span class="soubor">sessionstore.bak</span> je záloha předchozího souboru <span class="soubor">sessionstore.js</span>.</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>secmod.db</tt></td>
	<td>Databáze bezpečnostních zařízení. </td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>signons.txt</tt></td>
	<td>Uložené přihlašovací údaje (Firefox do verze 2.0.0.1 / 1.5.0.9).</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>signons2.txt</tt></td>
	<td>Uložené přihlašovací údaje (Firefox od verze 2.0.0.2 / 1.5.0.10).</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>storage.sdb</tt></td>
	<td>Databáze SQLite, která je použita jako mozStorage db profilu. Uložená data kalendářů (rozšíření <a href="http://thunderbird.czilla.cz/proc-pouzivat/kalendar/">Lightning</a>).</td>
  <td><img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>tmprules.dat</tt></td>
	<td>Dočasný soubor, který se vytváří při editaci třídících filtrů pošty.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>tidy_base.html</tt>, <tt>tidy_cleanup.html</tt>, <tt>tidy_inner.html</tt></td>
	<td>Soubory rozšíření <a href="http://users.skynet.be/mgueury/mozilla/" hreflang="en">HTML Validator</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td lang="en"><tt>training.dat</tt></td>
	<td>Natrénovaná data antispamového <a href="http://mozilla.org/mailnews/spam.html"
	hreflang="en">filtru</a>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td><tt>URL.tbl</tt></td>
	<td>Seznam stránek, u&nbsp;kterých se prohlížeč nedotazuje před uložením
	formulářů. </td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>url-data.txt</tt></td>
	<td><abbr title="Unified Resource Locator" lang="en">URL</abbr> doplňování adres do adresního řádku.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>urlclassifier.sqlite</tt> nebo <tt>urlclassifier2.sqlite</tt></td>
	<td>Data antiphishingové ochrany (Firefox od verze 2.0).</td>
  <td> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td lang="en"><tt>user.js</tt></td>
	<td>Nastavení uživatele, která budou zapsána do souboru <span class="soubor">prefs.js</span> po
	startu Mozilla aplikace.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>userChrome.css</tt></td>
	<td>Uživatelské nastavení vzhledu aplikace pomocí <abbr title="Cascading Style Sheets" lang="en">CSS</abbr>. Soubor je umístěn v podadresáři <span class="soubor">chrome</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>userChrome-example.css</tt></td>
	<td>Ukázkový soubor k <span class="soubor">userChrome.css</span>. Soubor je umístěn v podadresáři <span class="soubor">chrome</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>userContent.css</tt></td>
	<td>Uživatelské nastavení vzhledu obsahu internetových stránek pomocí <abbr title="Cascading Style Sheets" lang="en">CSS</abbr>. Soubor je umístěn v podadresáři <span class="soubor">chrome</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>userContent-example.css</tt></td>
	<td>Ukázkový soubor k <span class="soubor">userContent.css</span>. Soubor je umístěn v podadresáři <span class="soubor">chrome</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td lang="en"><tt>virtualFolders.dat</tt></td>
	<td>Uložené filtry pro virtuální složky.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
	<td lang="en"><tt>webappsstore.sqlite</tt></td>
	<td>Data klientských relací (Firefox od verze 2.0).</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>xpti.dat</tt></td>
	<td>Seznam zaregistrovaných <abbr title="Cross Platform Component Object Model" lang="en">XPCOM</abbr> rozhraní. Soubor je automaticky generován.</td>
  <td><img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /></td>
</tr>
<tr>
	<td><tt>XUL.mfl</tt>, <tt>XUL FastLoad File</tt> nebo <tt>XUL.mfasl</tt></td>
	<td><acronym title="XML User Interface Language" lang="en">XUL</acronym> soubor
	pro rychlé načítání. Obsahuje předkompilované chrome a&nbsp;JavaScript.	 Soubory jsou v podadresáři <span class="soubor">cache</span>. Na systémech Windows byla změna v umístění tohoto adresáře (viz seznam adresářů v profilu).</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td lang="en"><tt>xyzproxy.rdf</tt></td>
	<td>Soubory rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/1273">xyzproxy</a>.</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
</tbody>
</table>
</div>

<h2 id="sp-o-soubory">Ostatní soubory</h2>

<div class="tbl-1">
<table border="1">
<thead>
<tr>
	<th  width="14%">Adresář</th>
	<th width="70%">Popis</th>
  <th width="16%">Součást</th>
</tr>
</thead>
<tbody>
<tr>
  <td><tt>*.</tt></td>
  <td>Složky s poštou. Soubory jsou v podadresářích <span class="soubor">ImapMail</span>, <span class="soubor">Mail</span> či <span class="soubor">News</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>   
<tr>
	<td><tt>*.ics</tt></td>
	<td>Staré soubory rozšíření
	<a href="http://thunderbird.czilla.cz/proc-pouzivat/kalendar/" title="Mozilla Kalendář - diář do aplikací Mozilla">Kalendář</a>.
	Nové soubory jsou umístěny v adresáři "calendar".</td>
  <td><img src="/images/rozsireni.gif" title="Rozšíření (addons) aplikací Mozilla" alt="XPI" /></td>
</tr>
<tr>
	<td><tt>*.msf</tt></td>
	<td>Souhrnné soubory složek pošty, diskusních skupin nebo RSS kanálů. <br />Soubor je umístěný v adresářích <span class="soubor">ImapMail</span>, <span class="soubor">Mail</span>, <span class="soubor">News</span> a <span class="soubor">RSS Kanály</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
  <td><tt>*.src</tt></td>
  <td>Vyhledávací moduly. Soubory jsou v podadresáři <span class="soubor">searchplugins</span>.</td>
  <td><img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> </td>
</tr>   
<tr>
	<td><tt>*.rc</tt></td>
	<td>Obsahuje přihlášené diskusní skupiny z&nbsp;aktuálního serveru.<br />
	Soubor je umístěn v&nbsp;adresáři <span class="soubor">News</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
<tr>
  <td><tt>*.xml</tt></td>
  <td>Pokud je soubor v podadresáři <span class="soubor">searchplugins</span>, jedná se o vyhledávací modul ve formátu MozSearch.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>[jméno_diskusní_skupiny].dat</tt></td>
	<td>Obsahuje filtr informací o&nbsp;aktuální diskusní skupině.<br />Soubor je umístěn v&nbsp;adresáři <span class="soubor">News</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /></td>
</tr>
</tbody>
</table>
</div>

<h2 id="sp-vne-profilu">Soubory mimo adresář s profilem</h2>

<div class="tbl-1">
<table border="1">
<thead>
<tr>
	<th  width="14%">Adresář</th>
	<th width="70%">Popis</th>
  <th width="16%">Součást</th>
</tr>
</thead>
<tbody>
<tr>
	<td><tt>pluginreg.dat</tt></td>
	<td>Obsahuje informace o&nbsp;zásuvných modulech.<br />Soubor je
	umístěn v&nbsp;adresáři <span class="soubor">%APPDATA%\Mozilla</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>profiles.ini</tt></td>
	<td>Obsahuje umístění vašich profilů.<br />Soubor je umístěn 
  v&nbsp;adresáři <span class="soubor">%APPDATA%\Mozilla\[konkrétní aplikace]</span>.</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /> <img src="/images/icon-sunbird.gif" title="Mozilla Sunbird" alt="SN" /> <img src="/images/icon-nvu.gif" title="Nvu" alt="NVU" /></td>
</tr>
<tr>
	<td><tt>registry.dat</tt></td>
	<td>Obsahuje umístění vašich profilů.<br />Soubor je umístěn 
  v&nbsp;adresáři <span class="soubor">%APPDATA%\Mozilla</span> (Firefox a Thunderbird starších verzí).</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /> <img src="/images/icon-thunderbird.gif" title="Mozilla Thunderbird" alt="TB" /> <img src="/images/icon-firefox.gif" title="Mozilla Firefox" alt="FF" /></td>
</tr>
<tr>
	<td><tt>mozver.dat</tt></td>
	<td>Uložené verze komponent.<br />Soubor je v&nbsp;adresáři
	<span class="soubor">%WINDIR</span> (např.&nbsp;<span class="soubor">C:\WinNT</span>).</td>
  <td><img src="/images/mzl.gif" title="Mozilla Suite" alt="MAS" /> <img src="/images/icon-seamonkey.gif" title="SeaMonkey" alt="SM" /></td>
</tr>
</tbody>
</table>
</div>

<hr />
<p><small><a href="http://gemal.dk/mozilla/files.html" hreflang="en" title="Henrik Gemal: Files in your Mozilla profile directory">Původní článek</a>
přeložil se souhlasem autora <a href="/czilla/prispevatele.php#kdo-je-PC">Pavel Cvrček</a>.
Aktualizoval <a href="/czilla/prispevatele.php#kdo-je-SS">Stanislav Štěpánek</a>.
Poslední aktualizace: 27. srpna 2007.</small></p>

<?php
	$page->includeTemplate('footer');
?>