<?php
	require_once '../../inc/page.php';
	$page->setTitle('Téměř výroční sraz týmu CZilla');
	$page->setHeadline('Téměř výroční sraz týmu CZilla','9.7.2003');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>
<p>Sraz pražských členů týmu CZilla byl svolán velmi narychlo,
mezi dovolenými jednotlivých účastníků, do restaurace
<a href="http://www.mapy.cz/handler.py?action=detail&amp;mapwidth=552&amp;mapheight=420&amp;tablename=resta&amp;objecttype=0&amp;key=9625">"U kavalíra"</a>
v Dejvicích na 18.00 hod, dne 9.7.2003.</p>

<?php
	$photos = array(
		array('030709-01','Z leva: Met, Aha, Covex a Radek.'),
		array('030709-02','To samé v bledě modrém...'),
		array('030709-03','To samé, jen si přisedl Pawell.'),
		array('030709-04','To samé, jen si přisedl Jirka.'),
		array('030709-05','Pawell je hloubavý typ.'),
		array('030709-06','Svoji přítelkyni posadil Pawell neuváženě vedle Meta :-)'),
		array('030709-07','Aha'),
		array('030709-08','Radek zaujatě vysvětluje.'),
		array('030709-09','Bezchybný "ánfas".'),
		array('030709-10','Jirkův autoportrét.'),
		array('030709-11','Debata je v plném proudu.'),
		array('030709-12','Interiér restarurace "U kavalíra", bar.'),
		array('030709-13','Interiér restarurace "U kavalíra", zátiší.'),
		array('030709-14','Interiér restarurace "U kavalíra", trakař pod stropem.'),
		array('030709-15','Kuřecí panenka... cca 99 Kč + příloha.'),
		array('030709-16','Špíz, Pawell se olizoval.'),
		array('030709-17','Kuřecí rolka.'),
		array('030709-18','Torteliny? Prostě nudle se špenátem.'),
		array('030709-19','Kdo jedl tohle ?'),
		array('030709-20','Metovo kuřecí maso a sýr.'),
		array('030709-21','Met válčí a asi úspěšně.'),
		array('030709-22','Ale ta okurčička pánové...'),
		array('030709-23','Zmoženi jídlem.'),
		array('030709-24','Met rád víno.'),
		array('030709-25','Ostatní pivo, nekteří v kombinaci s kávou.')
	);
	$page->includeTemplate('photos', array('photos' => $photos));
?>

<?php
	$page->includeTemplate('footer');
?>