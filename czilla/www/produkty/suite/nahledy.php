<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla Suite - Populární balík webových aplikací');
	$page->setHeadline('Mozilla Suite','Ukázky balíku (screenshoty)');
	$page->setKeywords ('mozilla, suite, gecko, prohlížeč, poštovní klient, e-mail, email, editor, IRC, chatzilla');
	$page->setDescription ('Náhledy na balík Internetových aplikací Mozilla Suite');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
	<p>Ukázky vzhledu <a href="./">Mozilla Suite</a>:</p>
<?php
	$images = array(
		array('Prohlížeč po spuštení', '', 'images/scr-po-spusteni.png', 'images/scr-po-spusteni-m.png', 200, 150),
		array('Postranní lišta historie', '', 'images/scr-postranni-lista.png', 'images/scr-postranni-lista-m.png', 200, 150),
		array('Správce cookies', '', 'images/scr-spravce-cookies.png', 'images/scr-spravce-cookies-m.png', 200, 150),
		array('Okno nastavení programu', '', 'images/scr-moznosti.png', 'images/scr-moznosti-m.png', 200, 150),
		array('Alternativní motiv vzhledu', '', 'images/scr-modern.png', 'images/scr-modern-m.png', 200, 150),
		array('Pošťák po spuštění', '', 'images/scr-postak.png', 'images/scr-postak-m.png', 200, 150),
		array('Pošťák, okno zprávy', '', 'images/scr-okno-zpravy.png', 'images/scr-okno-zpravy-m.png', 200, 150),
		array('Kontakty', '', 'images/scr-kontakty.png', 'images/scr-kontakty-m.png', 200, 150),
		array('Nový kontakt do adresáře', '', 'images/scr-novy-kontakt.png', 'images/scr-novy-kontakt-m.png', 200, 150),
		array('Editor po spuštění', '', 'images/scr-editor.png', 'images/scr-editor-m.png', 200, 150),
		array('Editor se zobrazením značek', '', 'images/scr-editor-znacky.png', 'images/scr-editor-znacky-m.png', 200, 150),
		array('ChatZilla, IRC klient', '', 'images/scr-chatzilla.png', 'images/scr-chatzilla-m.png', 200, 150)
	);
	$page->includeTemplate('gallery', array('images' => $images));
?>
	<p><a href="./">Zpět na stránku o Mozilla Suite</a></p>
<?php
	$page->includeTemplate('footer');
?>
