<?php
	error_reporting(0);

	$page_title		= "Mozilla Thunderbird";
	$page_desc		= "";
	$page_keywords	= "";
	$webstats		= true;
	$web_url		= "http://thunderbird.czilla.cz/";
	$web_name		= "Používejte Thunderbird";

	// used in templates to determine whether we are on t.c.c or not
	define ('IS_TCC', true);

	function setTitle($name) {
		global $page_title, $web_name;
		$page_title = $name." (".$web_name.")";
	}
