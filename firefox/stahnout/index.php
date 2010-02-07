<?php
	require_once '../inc/page.php';
	$page->setTitle('Stáhnout Firefox');
	$page->setDescription('Stažení prohlížeče Mozilla Firefox pro Windows, Linux a Mac OS X, zásuvných modulů, oblíbených rozšíření a motivů vzhledu.');
	$page->setKeywords('mozilla firefox download stažení stahování stáhnutí zásuvný modul plugin rozšíření extenze téma motiv vzhledu');
	$page->includeTemplate('header');
?>
<div class="main download">

<h1>Stáhněte si Firefox</h1>

<p>Je pravý čas pro změnu, odkazy ke stažení následují:</p>

<?php
  // include("../../cas/includes-fcc.inc.php");
  // $template = new Templates('web/');
  // $module = new FCCModule();
  // $module->writeDownloadPage();
?>

</div>


<div class="side"><div class="side-in">
	<hr />
	<h2>Zajímavý software</h2>

	<h3 class="first">Tapety s Firefoxem</h3>

	<p><img src="/img/w/w-1-tbtw-prev.jpg" id="wallpromo" alt="" />
	Pokud se vám logo Firefoxu líbí tak jako nám, můžete si vybrat
	<a href="./tapety/">tapetu na svoji plochu</a>.</p>

	<h3>Oblíbená rozšíření</h3>

	<dl>
		<dt><a
    href="http://www.czilla.cz/doplnky/rozsireni/adblock-plus/">Adblock Plus</a></dt>
		<dd>Snadné blokování reklam ve stránkách.</dd>

		<dt><a
    href="http://www.czilla.cz/doplnky/rozsireni/forecastfox/">ForecastFox</a></dt>
		<dd>Předpověď počasí přímo ve stavovém řádku.</dd>

		<dt><a
    href="http://www.czilla.cz/doplnky/rozsireni/mouse-gestures/">Mouse Gestures</a></dt>
		<dd>Ovládání prohlížeče pomocí gest myši.</dd>

		<dt><a href="http://www.czilla.cz/doplnky/rozsireni/sage/">Sage</a></dt>
		<dd>Jednoduchá čtečka
			<abbr title="Really Simple Syndication" lang="en">RSS</abbr>
			a&nbsp;ATOM dokumentů.</dd>

		<dt><a href="http://www.czilla.cz/doplnky/rozsireni/web-developer-toolbar/"
			lang="en">Web Developer Toolbar</a></dt>
		<dd>Lišta s&nbsp;pomocnými nástroji pro tvorbu webu.</dd>
	</dl>

	<p><strong>Další zdroje rozšíření:</strong></p>

	<ul>
		<li><a href="http://www.czilla.cz/doplnky/rozsireni/p/firefox/"
				title="Katalog rozšíření pro Firefox lokalizovaných do
				českého jazyka">Lokalizovaná rozšíření</a></li>

		<li><a href="https://addons.mozilla.org/extensions/?application=firefox"
				title="Velký katalog rozšíření serveru Mozilla Update"
				hreflang="en" class="l-en" lang="en">Mozilla Update</a></li>

		<li><a href="http://www.czilla.cz/podpora/firefox/instalace-rozsireni.html"
				title="Návod, jak nainstalovat rozšíření pro Firefox">Instalace rozšíření do Firefoxu</a></li>
	</ul>


	<h3>Motivy vzhledu</h3>

	<dl>
		<dt><a href="https://addons.mozilla.org/themes/moreinfo.php?id=1070&amp;application=firefox"
			hreflang="en" class="l-en" lang="en">Aquatint</a></dt>
		<dd>Hezký motiv kombinující šedivou barvu s&nbsp;modrou.</dd>

		<dt><a href="https://addons.mozilla.org/themes/moreinfo.php?id=1106&amp;application=firefox"
			hreflang="en" class="l-en" lang="en">iFox</a></dt>
		<dd>Elegantní styl v&nbsp;šedých barvách.</dd>

		<dt><a href="https://addons.mozilla.org/themes/moreinfo.php?id=72&amp;application=firefox"
			hreflang="en" class="l-en" lang="en">Noia 2.0 (eXtreme)</a></dt>
		<dd>Pestrý motiv založený na ikonách Noia.</dd>

		<dt><a href="https://addons.mozilla.org/themes/moreinfo.php?id=890&amp;application=firefox"
			hreflang="en" class="l-en" lang="en">Outlook 2003 Blue</a></dt>
		<dd>Motiv ve stylu Outlook 2003.</dd>

		<dt><a href="https://addons.mozilla.org/themes/moreinfo.php?id=1406&amp;application=firefox"
			hreflang="en" class="l-en" lang="en">Phoenity</a></dt>
		<dd>Hezky barevný motiv s&nbsp;možností nastavování.</dd>
	</dl>

	<p><strong>Další zdroje motivů:</strong></p>

	<ul>
    <li><a href="https://addons.mozilla.org/themes/?application=firefox"
		hreflang="en" class="l-en">Mozilla Update</a></li>

    <li><a href="http://www.extensionsmirror.nl/index.php?showforum=24"
    title="Přehled motivů vzhledu pro Firefox na serveru Extensions Mirror"
		hreflang="en" class="l-en">The Extensions Mirror</a></li>

 		<li><a href="http://www.czilla.cz/podpora/firefox/instalace-motivu-vzhledu.html"
				title="Návod, jak nainstalovat motiv vzhledu do Firefoxu">Instalace
        motivu vzhledu do Firefoxu</a></li>

  </ul>

	<h3>Další aplikace</h3>

	<dl>
		<dt><a href="http://thunderbird.czilla.cz/"
			 lang="en">Mozilla Thunderbird</a></dt>
		<dd>Samostatný poštovní klient, skvělý doplněk Firefoxu.</dd>

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
		<a href="/"><?php echo $web_name; ?></a> &gt;
		<strong>Stáhnout</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
