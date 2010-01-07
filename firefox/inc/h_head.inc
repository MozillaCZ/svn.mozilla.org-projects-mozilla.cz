<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-language" content="cs" />
<title><?php echo $page_title; ?></title>
<link rel="stylesheet" href="/css/global.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="/css/global_print.css" type="text/css" media="print" />
<link rel="shortcut icon" href="/img/ff-ico.png" type="image/png" />
<link rel="Home" href="<?php echo $web_url; ?>" />
<?php
	if(($page_desc != "") && ($page_desc != "XXX")) {
		echo "<meta name=\"description\" content=\"$page_desc\" />\n";
	}
	if(($page_keywords != "") && ($page_keywords != "XXX")) {
		echo "<meta name=\"keywords\" content=\"$page_keywords\" />\n";
	}
?>
<meta name="copyright" content="Copyright (c) 2004-2006 Projekt CZilla, 2009 Mozilla.cz" />
<meta name="author" content="HTML code: Adam Hauner; http://hauner.cz/" />
<meta name="robots" content="index,follow" />
</head>
