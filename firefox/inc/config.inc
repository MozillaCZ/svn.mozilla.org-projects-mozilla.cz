<?php
	error_reporting(0);

	$page_title		= "Mozilla Firefox";
	$page_desc		= "";
	$page_keywords	= "";
	$webstats		= true;
	$web_name		= "Přejděte na Firefox";
	$web_url		= "http://firefox.czilla.cz/";
	
	// used in templates to determine whether we are on f.c.c or not
	define ('IS_FCC', true);

	function setTitle($name) {
		global $page_title, $web_name;
		$page_title = $name." (".$web_name.")";
	}
