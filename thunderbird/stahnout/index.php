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
  // include("../../cas/includes-tcc.inc.php");
  // $template = new Templates('web/');
  // $module = new TCCModule();
  // $module->writeDownloadPage();
?>

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

		<dt><a href="http://www.czilla.cz/doplnky/rozsireni/enigmail/">Enigmail</a></dt>
		<dd>Šifrování a&nbsp;dešifrování zpráv pomocí <a
    href="http://www.gnupg.org/" title="GnuPG: Domovská stránka"
    hreflang="en" class="l-en" lang="en">GnuPG</a>.</dd>

		<dt><a href="http://www.czilla.cz/doplnky/rozsireni/minimizetotray/">MinimizeToTray</a></dt>
		<dd>Minimalizace Thunderbirdu do systémového panelu.</dd>

		<dt><a href="http://www.czilla.cz/doplnky/rozsireni/mouse-gestures/"
			>Mouse Gestures</a></dt>
		<dd>Ovládání pošťáka pomocí gest myši.</dd>

		<dt><a href="http://www.czilla.cz/doplnky/rozsireni/profilepassword-tb/"
			>ProfilePassword</a></dt>
		<dd>Zaheslování přístupu ke stažené poště.</dd>

	</dl>

	<p><strong>Další zdroje rozšíření:</strong></p>

	<ul>
		<li><a href="http://www.czilla.cz/doplnky/rozsireni/p/thunderbird/"
			title="Katalog rozšíření pro Thunderbird lokalizovaných do českého jazyka">Lokalizovaná rozšíření</a></li>

		<li><a href="https://addons.mozilla.org/extensions/?application=thunderbird"
			title="Velký katalog rozšíření serveru Mozilla Update"
			hreflang="en" class="l-en" lang="en">Mozilla Update</a></li>

		<li><a href="http://www.czilla.cz/podpora/thunderbird/instalace-rozsireni.html"
			title="Návod, jak nainstalovat rozšíření do Thunderbirdu">Instalace rozšíření do Thunderbirdu</a></li>
	</ul>

	<h3>Motivy vzhledu</h3>

	<dl>

		<dt><a href="https://addons.mozilla.org/themes/moreinfo.php?id=1241&amp;application=thunderbird"
			hreflang="en" class="l-en" lang="en">Aquabird</a></dt>
		<dd>Hezký motiv kombinující šedivou barvu s&nbsp;modrou.</dd>

		<dt><a href="https://addons.mozilla.org/themes/moreinfo.php?id=891&amp;application=thunderbird"
			hreflang="en" class="l-en" lang="en">Outlook 2003 BlueTB </a></dt>
		<dd>Motiv ve stylu Microsoft Outlook 2003.</dd>

		<dt><a href="https://addons.mozilla.org/themes/moreinfo.php?id=1344&amp;application=thunderbird"
			hreflang="en" class="l-en" lang="en">Phoenity</a></dt>
		<dd>Hezky barevný motiv s&nbsp;možností nastavování.</dd>

		<dt><a href="https://addons.mozilla.org/themes/moreinfo.php?id=1425&amp;application=thunderbird"
			hreflang="en" class="l-en" lang="en">Walnut</a></dt>
		<dd>Hezký motiv založený na ikonkách z Gnome.</dd>

	</dl>

	<p><strong>Další zdroje motivů:</strong></p>

  <ul>
	  <li><a href="https://addons.mozilla.org/cs/thunderbird/browse/type:2/cat:all?sort=popular"
			title="Přehled dostupných motivů vzhledu pro Thunderbird">Mozilla Doplňky</a></li>

 		<li><a href="http://www.czilla.cz/podpora/thunderbird/tutorial/motivy-vzhledu.html"
				title="Návod, jak nainstalovat motiv vzhledu do Thunderbirdu">Instalace
        motivu vzhledu do Thunderbirdu</a></li>
	</ul>

	<h3>Další aplikace</h3>

	<dl>
		<dt><a href="http://firefox.czilla.cz/"
			 lang="en">Mozilla Firefox</a></dt>
		<dd>Samostatný webový prohlížeč, skvělý doplněk Thunderbirdu.</dd>

		<dt><a href="http://www.czilla.cz/produkty/nvu/"
			 lang="en">Nvu</a></dt>
		<dd>Samostatný editor webových stránek.</dd>

		<dt><a href="http://www.czilla.cz/produkty/seamonkey/"
			 lang="en">SeaMonkey</a></dt>
		<dd>Internetový balík zahrnující prohlížeč, poštovní
			klient, editor webových stránek a&nbsp;klient pro komunikaci po
			<abbr title="Internet Relay Chat" lang="en">IRC</abbr>.</dd>

		<dt><a href="http://www.slunecnice.cz/product/MozBackup/"
			 lang="en">MozBackup</a></dt>
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
