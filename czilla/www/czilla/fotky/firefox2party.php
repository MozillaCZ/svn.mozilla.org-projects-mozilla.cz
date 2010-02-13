<?php
	require_once '../../inc/page.php';
	$page->setTitle('Firefox 2.0 party');
	$page->setHeadline('Firefox 2.0 party','4. 11. 2006');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>
<?php
	$photos = array(
	array('061104-01',''),
  	array('061104-02',''),
	array('061104-03',''),
  	array('061104-04',''),
  	array('061104-05',''),
  	array('061104-06',''),
  	array('061104-07',''),
  	array('061104-08',''),
  	array('061104-09',''),
  	array('061104-10',''),
  	array('061104-11',''),
  	array('061104-12',''),
  	array('061104-13',''),
  	array('061104-14',''),
  	array('061104-15',''),
  	array('061104-16',''),
  	array('061104-17',''),
  	array('061104-18',''),
  	array('061104-19',''),
  	array('061104-20',''),
  	array('061104-21',''),
  	array('061104-22',''),
  	array('061104-23',''),
  	array('061104-24',''),
  	array('061104-25',''),
  	array('061104-26',''),
  	array('061104-27',''),
  	array('061104-28','')
	);
	$page->includeTemplate('photos', array('photos' => $photos));
?>

<?php
	$page->includeTemplate('footer');
?>