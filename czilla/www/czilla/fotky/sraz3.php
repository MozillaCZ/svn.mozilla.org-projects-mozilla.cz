<?php
	require_once '../../inc/page.php';
	$page->setTitle('Malé letní Mozillí odpoledne');
	$page->setHeadline('Sraz (nejen) týmu CZilla','26. 6. 2004');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>
<p>Sraz (nejen) týmu CZilla byl nejdříve svoláván na parník, pak do ZOO
a nakonec jsme skončili v&nbsp;<a href="http://www.botanicka.cz/">Botanické zahradě</a>.
</p>

<?php
	$photos = array(
		array('040625-01','Zleva Lumpy, Mik a Pavel Chovančík.'),
		array('040625-02','Met zadumán.'),
		array('040625-03','David Majda v super tričku.'),
		array('040625-04','Aha fotí.'),
		array('040625-05','Zleva: Pavel Chovančík, Tomáš Marek, Lumpy a Aha.'),
		array('040625-06','V botanické zahradě je krásně.'),
		array('040625-07','Mik vysvětluje, jak funguje Enigmail.')
	);
	$page->includeTemplate('photos', array('photos' => $photos));
?>

<?php
	$page->includeTemplate('footer');
?>