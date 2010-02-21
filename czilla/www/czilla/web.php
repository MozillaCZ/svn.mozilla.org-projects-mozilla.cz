<?php
	require_once '../inc/page.php';
	$page->setTitle('Webové stránky projektu');
	$page->setHeadline('Webové stránky projektu','Podpora a propagace projektu Mozilla');
	$page->setKeywords('czilla, web, stránky, rozcestník, autoři, tým, licence');
	$page->setDescription('Informace o webových stránkách projektu CZilla.cz');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>

<h2 id="rozcestnik">Rozcestník</h2>

<dl>
	<dt><a href="/">Hlavní web projektu</a> (www.czilla.cz)</dt>
	<dd>Novinky, návody a články ze světa Mozilly, představení produktů.</dd>

	<dt><a href="http://forum.czilla.cz/">CZilla fórum</a> (forum.czilla.cz)</dt>
	<dd>Fórum pro podporu uživatelů aplikací Mozilla.org.</dd>
</dl>

<h2 id="tvurci">Tvůrci</h2>

<p>Vzhled stránek <strong><a href="/">www.czilla.cz</a></strong> navrhl <a
href="http://megadesign.cz/">Megadesign</a>, původní kód vytvořili <a
href="prispevatele.php#kdo-je-PF">Pavel Franc</a> a <a href="prispevatele.php#kdo-je-AP">Adam
Přibyl</a>.</p>

<p>Kód a vzhled webu <strong><a href="http://firefox.czilla.cz">Přejděte na
Firefox</a></strong> vytvořil <a href="prispevatele.php#kdo-je-AHA">Adam Hauner</a>
inspirován stránkami projektu <a
href="http://www.mozilla.org/">Mozilla.org</a>.</p>

<p>Obsah stránek vytváří <a href="prispevatele.php#clenove">CZilla tým</a>, naši přátelé,
vývojáři a uživatelé, kteří se chtějí s ostatními podělit o své zkušenosti.</p>

<h2 id="co-pouzivame">Co používáme</h2>
<p>Na našich stránkách používáme:</p>
<ul>
	<li>fórum <a href="http://www.phpbb.com/">phpBB</a></li>
</ul>


<h2 id="copyright">&copy; 2003-2006 Tým CZilla</h2>

<p>Pokud není uvedeno jinak, jsou zveřejněné texty a ukázkové příklady
vlastněny <a href="prispevatele.php">týmem CZilla</a>, či jeho
jednotlivými členy. Bez předchozího <a href="kontakt.html">souhlasu týmu
CZilla</a> je zakázána
jakákoliv další publikace, přetištění nebo distribuce jakéhokoli materiálu nebo
části materiálu zveřejněného na serveru CZilla.cz. Obchodní známky, jména
produktů, názvy společností a loga na těchto stránkách jsou majetkem jejich
vlastníků.</p>

<?php
	$page->includeTemplate('footer');
?>
