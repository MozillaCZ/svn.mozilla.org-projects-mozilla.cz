<?php
	require_once '../../inc/page.php';
	$page->setTitle('Předávání cen produkt roku 2004');
	$page->setHeadline('Předávání cen produkt roku 2004','27. 1. 2005');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>
<p>Časopis <a href="http://www.softnov.cz/">Softwarové noviny</a> již potřinácté vyhlásil a předal výroční ceny Produkt roku. Tyto ceny jsou určeny
nejlepším světovým i domácím výrobkům v oblasti počítačové techniky, uvedeným na trh v loňském roce dostupným na českém trhu, bez jakýchkoli dalších
omezení. Další informace naleznete v <a href="http://www.softnov.cz/index.php?ID=20413">tiskové zprávě</a> společnosti Softwarové noviny.</p>

<?php
	$photos = array(
		array('050127-01','Polo-skupinové foto účastníků.'),
		array('050127-02','Společenská konverzace.'),
		array('050127-03','Jitka Součková ze Soft. novin a zástupce Canonu.'),
		array('050127-04','Zleva: Pavel Franc a redaktor Soft. novin Petr Nachtmann a zástupkyně Eurotelu.'),
		array('050127-05','Zástupci Asusu a paní z vydavatelství Soft. novin.'),
		array('050127-06','Šéfredaktor Soft. novin Ivo Minařík.'),
		array('050127-07','Ivo Minařík předává cenu.'),
		array('050127-08','Cena pro firmu Asus.'),
		array('050127-09','Cena pro firmu Eurotel.'),
		array('050127-10','Naše cena za Firefox 1.0.'),
		array('050127-11','Jitka Součková předává cenu.'),
		array('050127-12','Do síně slávy byl letos uveden pan Ondřej Felix.'),
		array('050127-13','A pak se pilo a jedlo ...'),
		array('050127-14','... a navazovaly obchodní kontakty.')
	);
	$page->includeTemplate('photos', array('photos' => $photos));
?>

<?php
	$page->includeTemplate('footer');
?>