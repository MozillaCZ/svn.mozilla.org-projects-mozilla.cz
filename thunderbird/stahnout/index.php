<?php
	require_once '../inc/page.php';
	$page->setTitle('Stáhnout Thunderbird');
	$page->setDescription('Stažení pošťáka Mozilla Thunderbird pro Windows, Linux a Mac OS X, oblíbených rozšíření a motivů vzhledu.');
	$page->setKeywords('mozilla thunderbird download stažení stahování stáhnutí zásuvný modul plugin rozšíření extenze téma motiv vzhledu');
	$page->includeTemplate('header');
?>
<div class="main download">

<h1>Stáhněte si Thunderbird</h1>

<p>Je pravý čas pro změnu, odkazy ke stažení následují:</p>

<?php
	$page->includeTemplate('download-box', array('type' => 'page'));
?>

<h2>Český slovník na kontrolu pravopisu</h2>

<p>Součástí Thunderbirdu není z licenčních důvodů slovník na kontrolu pravopisu,
ale máte možnost si jej snadno doinstalovat. Navštivte server Doplňky Mozilly a 
<a href="https://addons.mozilla.org/cs/thunderbird/addon/3394">nainstalujte si jej</a>.</p>

<h2>Portable Thunderbird</h2>

<p>Thunderbird je též dostupný v tzv. portable verzi tj. verzi, která se nemusí instalovat 
a je uzpůsobená pro běh na Flash discích. Portable Thunderbird si lze 
<a href="http://portableapps.com/apps/internet/thunderbird_portable" hreflang="en">stáhnout 
z domovské stránky</a> v anglické verzi. Pro lokalizaci je potřeba 
<a href="http://portableapps.com/apps/internet/thunderbird_portable/localization/" 
hreflang="en">stáhnout a nainstalovat jazykový balíček</a>. Detailnější postup si 
můžete <a href="http://jasnapaka.bloguje.cz/515929-jak-pocestit-firefox-portable.php">přečíst 
v českém návodu</a> (pro Firefox, ale u Thunderbirdu je postup obdobný).</p>

</div>


<div class="side"><div class="side-in">

	<hr />

	<h2>Zajímavý software</h2>

	<h3 class="first">Tapety s Thunderbirdem</h3>

	<p><img src="/img/w/w-1-blue-prev.jpg" id="wallpromo" alt="" />
	Pokud se vám Thunderbird líbí tak jako nám, můžete si vybrat
	<a href="./tapety/">tapetu na svoji plochu</a>.</p>


	<h3 class="first">Oblíbená rozšíření</h3>

	<dl>
		<dt><a href="https://addons.mozilla.org/cs/thunderbird/addon/2313">Lightning</a></dt>
		<dd>Kalendářové funkce do Thunderbirdu</dd>

		<dt><a href="https://addons.mozilla.org/cs/thunderbird/addon/71">Enigmail</a></dt>
		<dd>Šifrování a&nbsp;dešifrování zpráv pomocí
			<a href="http://www.gnupg.org/" title="GnuPG: Domovská stránka" hreflang="en" class="l-en" lang="en">GnuPG</a>.</dd>

		<dt><a href="https://addons.mozilla.org/cs/thunderbird/addon/2831">MinimizeToTray Plus</a></dt>
		<dd>Minimalizace Thunderbirdu do systémového panelu.</dd>

		<dt><a href="http://nic-nac-project.de/~kaosmos/profilepassword-en.html"  hreflang="en" class="l-en" lang="en">ProfilePassword</a></dt>
		<dd>Zaheslování přístupu ke stažené poště.</dd>

	</dl>

	<p><strong>Další zdroje rozšíření:</strong></p>

	<ul>
		<li><a href="https://addons.mozilla.org/cs/thunderbird/">Doplňky Mozilly</a></li>
	</ul>

	<h3>Motivy vzhledu</h3>

	<dl>
		<dt><a href="https://addons.mozilla.org/cs/thunderbird/addon/1241" lang="en">Aquabird</a></dt>
		<dd>Hezký motiv kombinující šedivou barvu s&nbsp;modrou.</dd>

		<dt><a href="https://addons.mozilla.org/cs/thunderbird/addon/891" lang="en">Outlook 2003 BlueTB </a></dt>
		<dd>Motiv ve stylu Microsoft Outlook 2003.</dd>

		<dt><a href="https://addons.mozilla.org/cs/thunderbird/addon/1344" lang="en">Phoenity</a></dt>
		<dd>Hezky barevný motiv s&nbsp;možností nastavování.</dd>

		<dt><a href="https://addons.mozilla.org/cs/thunderbird/addon/1495" lang="en">Walnut</a></dt>
		<dd>Hezký motiv založený na ikonkách z Gnome.</dd>
	</dl>

	<p><strong>Další zdroje motivů:</strong></p>

	<ul>
	  <li><a href="https://addons.mozilla.org/cs/thunderbird/browse/type:2/cat:all?sort=popular"
			title="Přehled dostupných motivů vzhledu pro Thunderbird">Mozilla Doplňky</a></li>
	</ul>

	<h3>Další aplikace</h3>

	<dl>
		<dt><a href="http://firefox.mozilla.cz/">Mozilla Firefox</a></dt>
		<dd>Samostatný webový prohlížeč, skvělý doplněk Thunderbirdu.</dd>

		<dt><a href="http://www.mozilla.cz/produkty/kompozer/">KompoZer</a></dt>
		<dd>Samostatný editor webových stránek.</dd>

		<dt><a href="http://www.mozilla.cz/produkty/seamonkey/">SeaMonkey</a></dt>
		<dd>Internetový balík zahrnující prohlížeč, poštovní klient, editor webových stránek a&nbsp;klient
		pro komunikaci po <abbr title="Internet Relay Chat" lang="en">IRC</abbr>.</dd>

		<dt><a href="http://www.slunecnice.cz/product/MozBackup/" lang="en">MozBackup</a></dt>
		<dd>Zálohování profilů aplikací Mozilla.org.</dd>
	</dl>

</div></div>

<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<strong>Stáhnout</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
