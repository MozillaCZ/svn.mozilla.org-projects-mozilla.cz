<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla Thunderbird - chytrý a bezpečný poštovní klient');
	$page->setHeadline('Mozilla Thunderbird','Ukázky programu (screenshoty)');
	$page->setKeywords ('thunderbird, mozilla, e-mail, email, outlook express, outlook pošta, poštovní klient, pošťák, internetový, moderní, gecko');
	$page->setDescription ('Náhledy (screenshoty) na postovního klienta Mozilla Thunderbird');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
	<p>Ukázky vzhledu <a href="./">Mozilla Thunderbirdu</a>:</p>
<?php
	$images = array(
		array('Mozilla Thunderbird po spuštení', '', 'images/scr-po-spusteni.png', 'images/scr-po-spusteni-m.png', 200, 150),
		array('Okno zprávy', '', 'images/scr-okno-zpravy.png', 'images/scr-okno-zpravy-m.png', 200, 150),
		array('Okno nastavení programu', '', 'images/scr-moznosti.png', 'images/scr-moznosti-m.png', 200, 150),
		array('Okno nastavení e-mailového účtu', '', 'images/scr-nastaveni-uctu.png', 'images/scr-nastaveni-uctu-m.png', 200, 150),
		array('Nastavení třídícího filtru', '', 'images/scr-tridici-filtry.png', 'images/scr-tridici-filtry-m.png', 200, 150),
		array('Nový kontakt do adresáře', '', 'images/scr-novy-kontakt.png', 'images/scr-novy-kontakt-m.png', 200, 150),
		array('Označená nevyžádaná pošta', '', 'images/scr-nevyzadana-posta.png', 'images/scr-nevyzadana-posta-m.png', 200, 150),
		array('Přihlášené RSS kanály', '', 'images/scr-rss-kanaly.png', 'images/scr-rss-kanaly-m.png', 200, 150),
		array('Import pošty a nastavení', '', 'images/scr-import.png', 'images/scr-import-m.png', 200, 150),
		array('Správce rozšíření', '', 'images/scr-spravce-rozsireni.png', 'images/scr-spravce-rozsireni-m.png', 200, 150),
		array('Správce motivů vzhledu', '', 'images/scr-spravce-motivu-vzhledu.png', 'images/scr-spravce-motivu-vzhledu-m.png', 200, 150),
		array('Úprava vzhledu', '', 'images/scr-uprava-vzhledu.png', 'images/scr-uprava-vzhledu-m.png', 200, 150)
	);
	$page->includeTemplate('gallery', array('images' => $images));
?>
	<p><a href="./">Zpět na stránku o Mozilla Thunderbirdu</a></p>
<?php
	$page->includeTemplate('footer');
?>
