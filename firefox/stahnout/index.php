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
	$page->includeTemplate('download-box', array('type' => 'page'));
?>

<h2 class="separator">Portable Firefox</h2>
<p>Firefox je též dostupný v tzv. portable verzi tj. verzi, která se nemusí instalovat
a je uzpůsobená pro běh na Flash discích. Portable Firefox si lze
<a href="http://portableapps.com/apps/internet/firefox_portable" hreflang="en">
stáhnout z domovské stránky</a> v anglické verzi. Pro lokalizaci je potřeba
<a href="http://portableapps.com/apps/internet/firefox_portable/localization" hreflang="en">stáhnout
a nainstalovat jazykový balíček</a>. Detailnější postup si můžete
<a href="http://jasnapaka.bloguje.cz/515929-jak-pocestit-firefox-portable.php">přečíst v českém návodu.</a></p>

<h2 class="separator">Populární zásuvné moduly (pluginy)</h2>
<p>Některé webové stránky mohou ke svému zobrazení vyžadovat zásuvné moduly (pluginy).
Zde jsou odkazy ke stažení těch nejpopulárnějších:</p>
<ul>
	<li class="download-ico-flash"><a href="http://www.slunecnice.cz/sw/flash-player/">Stáhnout Adobe Flash</a></li>
	<li class="download-ico-reader"><a href="http://www.slunecnice.cz/sw/acrobat-reader/">Stáhnout Adobe Reader</a></li>
	<li class="download-ico-silverlight"><a href="http://www.slunecnice.cz/sw/microsoft-silverlight/">Stáhnout Silverlight</a></li>
	<li class="download-ico-java"><a href="http://www.slunecnice.cz/sw/java/">Stáhnout Javu</a></li>
</ul>
<p>Bližší informace týkající se zásuvných modulů naleznete na
<a href="http://www.mozilla.cz/doplnky/zasuvne-moduly/">stránce o zásuvných modulech</a>.</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Zajímavý software</h2>

	<h3 class="first">Rozšíření</h3>
	
	<p>Víte, že si můžete rozšířit funkce Firefoxu pomocí 
		<a href="http://www.mozilla.cz/doplnky/rozsireni/">rozšíření</a>? V nabídce jich je 
		několik tisíc.</p>
	
	<dl>
		<dt><a href="https://addons.mozilla.org/cs/firefox/addon/1865" lang="en">Adblock Plus</a></dt>
		<dd>Snadné blokování reklam ve stránkách.</dd>

		<dt><a href="https://addons.mozilla.org/cs/firefox/addon/398" lang="en">ForecastFox</a></dt>
		<dd>Předpověď počasí přímo ve stavovém řádku.</dd>

		<dt><a href="https://addons.mozilla.org/cs/firefox/addon/12" lang="en">All-in-One Gestures</a></dt>
		<dd>Ovládání prohlížeče pomocí gest myši.</dd>
	</dl>
	
	<p><strong><a href="https://addons.mozilla.org/cs/firefox/">Další rozšíření...</a></strong></p>

	<h3>Motivy vzhledu</h3>
	
	<p>Ozdobte si Firefox pomocí vzhledů <a href="https://addons.mozilla.org/cs/firefox/personas/">Personas</a>,
	  které dodají vašemu Firefoxu svěží vzhled.</p>
	  
  <p><a href="https://addons.mozilla.org/cs/firefox/addon/sunset-over-water/">
		<img src="/img/personas3.jpg" alt="Náhled vzhledu Personas" /></a></p>	  
	  
  <p><a href="https://addons.mozilla.org/cs/firefox/addon/japanese-tattoo/">
		<img src="/img/personas1.jpg" alt="Náhled vzhledu Personas" /></a></p>

  <p><a href="https://addons.mozilla.org/cs/firefox/addon/red-ladybug/">
		<img src="/img/personas2.jpg" alt="Náhled vzhledu Personas" /></a></p>
		
	<p><strong><a href="https://addons.mozilla.org/cs/firefox/personas/">Procházet galerii...</a></strong></p>
	
	<p>Chcete kompletní proměnu Firefoxu? Vyzkoušejte některý z 
		<a href="https://addons.mozilla.org/cs/firefox/themes/">motivů vzhledů</a>, který vás zaujme.
	</p>

	<h3>Další aplikace</h3>

	<dl>
		<dt><a href="http://thunderbird.mozilla.cz/"
			 lang="en">Mozilla Thunderbird</a></dt>
		<dd>Samostatný poštovní klient, skvělý doplněk Firefoxu.</dd>

		<dt><a href="http://www.mozilla.cz/produkty/seamonkey/"
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
