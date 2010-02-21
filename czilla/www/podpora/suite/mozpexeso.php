<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozpexeso');
	$page->setHeadline('Mozpexeso','Kdo si hraje nezlobí');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div align="center">
	<object type="application/x-shockwave-flash" data="http://ftp.czilla.cz/other/propagation/mozilla_pexeso.swf" width="500"
	codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" height="330">
		<param name="movie" value="http://ftp.czilla.cz/other/propagation/mozilla_pexeso.swf" />
	</object>
</div>

<?php
	$page->includeTemplate('footer');
?>
