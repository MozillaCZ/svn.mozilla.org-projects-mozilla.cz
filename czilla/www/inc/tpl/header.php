<?php	echo "<?xml version=\"1.0\" encoding=\"ISO-8859-2\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-language" content="cs" />
	<meta name="robots" content="index,follow" />
	<meta http-equiv="pics-label" content='(pics-1.1 "http://www.icra.org/ratingsv02.html" comment "ICRAonline v2.0" l gen true for "http://www.czilla.cz" r (nz 1 vz 1 lz 1 oz 1 cz 1) "http://www.rsac.org/ratingsv01.html" l gen true for "http://www.czilla.cz"	r (n 0 s 0 v 0 l 0))' />
<?php foreach ($this->getMeta() as $metaTag): ?>
	<meta name="<?php echo $metaTag['name']?>" content="<?php echo $metaTag['content']?>" lang="<?php echo $metaTag['lang']?>"/>
<?php endforeach; ?>
	<title><?php echo $this->getTitle()?></title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" media="screen" type="text/css" href="/css/czilla.css"/>
	<link rel="stylesheet" media="screen" type="text/css" href="/css/gallery.css"/>
	<link rel="stylesheet" media="print" type="text/css"  href="/css/print.css"/>
	<!--[if ie ]>
		<link rel="stylesheet" media="screen" type="text/css" title="Styl pro IE"  href="css/ie.css"/>
		<script src="js/hreflang.js" charset="iso-8859-2" type="text/javascript"></script>
	<![endif]-->
</head>
<body id="www-czilla-cz">
<div id="czilla-navigation-toolbar"></div>
<div id="obalka-bg">
<div id="top-bg">
	<a href="/">
		<div id="logo-cz"></div>
		<div id="logo-illa"></div>
	</a>
</div>
<?php if (!$this->isPanelHidden()):?>
<div id="lmenu-bg">
<div id="lmenu2-bg">
	<div id="m-czilla"><span class="oldstyle">CZilla</span></div>
	<?php $this->includeTemplate('menu-left')?>
</div>
</div>

<div id="pmenu-bg" class="menu">
<div id="pmenu2-bg" class="menu">
<?php
	$this->includeTemplate('menu-right');
?>
</div>
</div>
<?php
	endif; /* $page->hidePanels */
?>

<div id="stred-bg">
<div id="vitejte">
	<h1 id="v1"><?php echo $this->headline[0]?></h1>
	<div id="v2"><?php echo $this->headline[1]?></div>
</div>

<div id="obsah"><div id="obsah-bg">
