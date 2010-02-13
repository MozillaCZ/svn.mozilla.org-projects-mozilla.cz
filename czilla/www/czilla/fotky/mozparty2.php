<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozparty2');
	$page->setHeadline('Sraz příznivců Mozilly','25. 6. 2004');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>
<p>Část týmu CZilla a řada našich kamarádů si nemohla nechat ujít Mozparty2, kterou uspořádal
<a href="/czilla/lide.php#kdo-je-LP">Lukáš Petrovický (Triceo)</a> v restauraci <a href="http://rozmaryn.cz/">Rozmarýn</a>.</p>
<p>Více informací o akci samotné, spolu s originály fotografií, najdete v článcích </p>
<ul>
	<li><a href="http://dreamsign.cz/weblog/clanek/panda_a_pivo/">Panda a pivo</a></li>
	<li><a href="http://www.linuxsoft.cz/article.php?id_article=533">MozParty2</a></li>
	<li><a href="http://www.root.cz/clanky/mozparty-2-jak-to-bylo/">Mozparty 2 - jak to bylo</a></li>
</ul>

<?php
	$photos = array(
		array('041120-01','Ming a Mary Carmen.'),
		array('041120-02','Spící panda červená.'),
		array('041120-03','AHA zepředu.'),
		array('041120-04','AHA zezezadu.'),
		array('041120-05','Tomáš Marek studuje jak hackovat.'),
		array('041120-06','Čekání na překvapení I.'),
		array('041120-07','Čekání na překvapení II.'),
		array('041120-08','Čekání na překvapení III.'),
		array('041120-09','Opravdu umělecký kousek.'),
		array('041120-10','AHA krájí dort.'),
		array('041120-11','Triceo, který tudle akci spískal.'),
		array('041120-12','Plathel a Triceo.'),
		array('041120-13','Lumpy bojuje s dortem.'),
		array('041120-14','Také Mozillka dostala kousek dortu.'),
		array('041120-15','Anička ze živě.cz.'),
		array('041120-16','Bojová porada.'),
		array('041120-17','Vybíráme na pandu.'),
		array('041120-18','Lumpy študuje, co to je ten Firefox.')
	);
	$page->includeTemplate('photos', array('photos' => $photos));
?>

<?php
	$page->includeTemplate('footer');
?>