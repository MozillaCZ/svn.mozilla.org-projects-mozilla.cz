<?php
	require_once '../../inc/page.php';
	$page->setTitle('Konfigurační soubory Firefoxu');
	$page->setHeadline('Konfigurační soubory','Návod kde najít konfigurační soubory Firefoxu');
	$page->setKeywords('podpora, tipy, triky, nápověda, pomoc, návod, mozilla, firefox, prohlížeč');
	$page->setDescription('Návod kde najít konfigurační soubory prohlížeče Mozilla Firefox');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<p>Prohlížeč Mozilla Firefox ukládá data patřící k uživateli do adresáře nazývaného uživatelský profil. Profil obsahuje
uložené předvolby, historii prohlížeče, cookies, a další důležitá data. Standardní uložení profilu na nejpoužívanějších
operačních systémech se dá vyčíst z následující tabulky.</p>

<table cellspacing="3" cellpadding="3">
<tbody>
	<tr>
		<td>Windows (obecně)</td>
		<td>%USERPROFILE%\Application Data\Mozilla\Firefox\Profiles\[Náhodný řetězec].[Název profilu]\</td>
	</tr>
	<tr>
		<td>Windows 2000/XP</td>
		<td>C:\Documents and Settings\[Název účtu Windows]\Data aplikací\Mozilla\Firefox\Profiles\[Náhodný řetězec].[Název profilu]\</td>
	</tr>
	<tr>
		<td>Windows 95/98/Me</td>
		<td>C:\Windows\Application Data\Mozilla\Firefox\Profiles\[Náhodný řetězec].[Název profilu]\</td>
	</tr>
	<tr>
		<td>Linux</td>
		<td>~/.mozilla/firefox/phoenix/[Náhodný řetězec].[Název profilu]/</td>
	</tr>
	<tr>
		<td>Mac OS X</td>
		<td>~/Library/Application Support/Firefox/[Náhodný řetězec].[Název profilu]/</td>
	</tr>
</tbody>
</table>

<p>Řada pokročilých <a href="tipy-a-triky.php">nastavení</a> se provádí úpravou některého z konfiguračních souborů v uživatelském
profilu.</p>

<ul class="disc">
	<li><a href="#user">user.js</a> - slouží pro nastavení různých předvoleb.</li>
	<li><a href="#css">userChrome.css</a> - slouží pro nastavení vzhledu prohlížeče.</li>
	<li><a href="#content">userContent.css</a> - slouží pro nastavení vzhledu webových stránek.</li>
</ul>

<p>Všechny tyto soubory jsou obyčejné textové soubory a dají se proto editovat libovolným textovým editorem, který
zvládá pracovat s čistým textem.</p>


<b><a name="user"></a>user.js</b>
<p>Tento soubor slouží pro nastavení různých předvoleb a nachází se přímo v uživatelském profilu. Pokud tento soubor
neexistuje je potřeba ho nejdříve vytvořit. Předvolby jsou z tohoto souboru pouze načítány při startu prohlížeče a
nehrozí tedy jejich přepsání; narozdíl od souboru prefs.js, který je generovaný při ukončení prohlížeče a zachycuje
aktuální stav předvoleb.</p>
<p>Předvolby je také možno nastavovat v konfiguračním okně prohlížeče - napište <tt>about:config</tt> do pole s adresou
a zmáčkněte <kbd>Enter.</kbd></p>

<b><a name="css"></a>userChrome.css</b>
<p>Tento soubor slouží pro nastavení vzhledu prohlížeče aplikováním uživatelských CSS pravidel a nachází se v adresáři
chrome v uživatelském profilu. Pokud tento soubor neexistuje je potřeba ho nejdříve vytvořit. Po instalaci prohlížeče Mozilla
Firefox se namísto tohoto souboru nachází soubor <q>userChrome-example.css,</q> který můžete jednoduše přejmenovat na
<q>userChrome.css.</q></p>


<b><a name="content"></a>userContent.css</b>
<p>Tento soubor slouží pro nastavení vzhledu webových stránek aplikováním uživatelských CSS pravidel a nachází se v adresáři
chrome v uživatelském profilu. Pokud tento soubor neexistuje je potřeba ho nejdříve vytvořit. Po instalaci prohlížeče Mozilla
Firefox se namísto tohoto souboru nachází soubor <q>userContent-example.css,</q> který můžete jednoduše přejmenovat na
<q>userContent.css.</q></p>

<?php
	$page->includeTemplate('footer');
?>
