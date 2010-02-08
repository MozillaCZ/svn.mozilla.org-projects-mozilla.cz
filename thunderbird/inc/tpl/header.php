<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-language" content="cs" />
<title><?php echo $this->getTitle()?></title>
<link rel="stylesheet" href="/css/global.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="/css/global_print.css" type="text/css" media="print" />
<link rel="shortcut icon" href="/img/tb-ico.png" type="image/png" />
<link rel="Home" href="<?php echo $this->getWebUrl()?>" />
<?php
	foreach($this->getMeta() as $name => $content) {
		echo '<meta name="' . $name . '" content="' . $content . '" />' . "\n";
	}
?>
<meta name="copyright" content="Copyright (c) 2004-2006 Projekt CZilla, 2009-2010 Mozilla.cz" />
<meta name="author" content="HTML code: Adam Hauner; http://hauner.cz/" />
<meta name="robots" content="index,follow" />
</head>
<body id="thunderbird-mozilla-cz">
<div class="page">
<div class="head">
	<div class="head-logo"><a href="/" title="Zpět na titulní stranu"><span><?php echo $this->getWebName()?></span></a></div>
<?php
	$this->includeTemplate('search-box');
?>
	<div class="ulbox">
<?php
	$this->includeTemplate('menu');
?>
	<div class="cb"><!-- --></div>
	</div>
<hr />
</div>

<div class="cont">
