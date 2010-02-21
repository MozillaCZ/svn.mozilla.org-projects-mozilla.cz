<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla Firefox - rychlý a bezpečný webový prohlížeč');
	$page->setHeadline('Mozilla Firefox','Ukázky programu (screenshoty)');
	$page->setKeywords ('firefox, mozilla, prohlížeč, browser, webový, internetový, moderní, internet explorer, IE, gecko');
	$page->setDescription ('Náhledy na prohlížeč Firefox');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
	<div class="obsolete">Některé informace na stránkách produktu mohou být zastaralé. Aktuální informace naleznete na serveru
	<a href="http://www.mozilla.cz/produkty/firefox/">Mozilla.cz</a>.</div>
	<p>Ukázky vzhledu <a href="./">Mozilla Firefoxu</a>:</p>
<?php
	$images = array(
		array('Mozilla Firefox po spuštení', '', 'images/scr-po-spusteni.png', 'images/scr-po-spusteni-m.png', 200, 150),
		array('Okno nastavení programu', '', 'images/scr-moznosti.png', 'images/scr-moznosti-m.png', 200, 150),
		array('Správce motivů vzhledu', '', 'images/scr-spravce-motivu-vzhledu.png', 'images/scr-spravce-motivu-vzhledu-m.png', 200, 150),
		array('Správce záložek', '', 'images/scr-spravce-zalozek.png', 'images/scr-spravce-zalozek-m.png', 200, 150),
		array('Prohlížení v panelech', '', 'images/scr-panely.png', 'images/scr-panely-m.png', 200, 150),
		array('Okno nápovědy programu', '', 'images/scr-napoveda.png', 'images/scr-napoveda-m.png', 200, 150),
		array('Správce stahování', '', 'images/scr-spravce-stahovani.png', 'images/scr-spravce-stahovani-m.png', 200, 150),
		array('Informace o stránce', '', 'images/scr-info-o-strance.png', 'images/scr-info-o-strance-m.png', 200, 150),
		array('Přidání nové záložky', '', 'images/scr-nova-zalozka.png', 'images/scr-nova-zalozka-m.png', 200, 150),
		array('Instalace rozšíření', '', 'images/scr-instalace-rozsireni.png', 'images/scr-instalace-rozsireni-m.png', 200, 150),
		array('Správce rozšíření', '', 'images/scr-spravce-rozsireni.png', 'images/scr-spravce-rozsireni-m.png', 200, 150),
		array('Vyhledávání psaním ve stránce', '', 'images/scr-vyhledavani.png', 'images/scr-vyhledavani-m.png', 200, 150),
	);
	$page->includeTemplate('gallery', array('images' => $images));
?>
	<p><a href="./">Zpět na stránku o Mozilla Firefoxu</a></p>
<?php
	$page->includeTemplate('footer');
?>
