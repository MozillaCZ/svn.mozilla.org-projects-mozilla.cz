<?php
/*
Plugin Name: Mozilla.cz CMS
Plugin URI: http://www.mozilla.cz
Description: Všemožné utils pro WordPress pro Mozilla.cz
Version: 0.1
Author: Pavel Cvrček <pcvrcek@mozilla.cz>
Author URI: http://www.mozilla.cz
*/

/**
 * Vrací hodnotu custom fieldu u příspěvku / stránky. Volání funkce má smysl pouze tehdy,
 * pokud je na stránce jeden příspěvek.   
 */ 
function getCustomFieldValue($fieldName) {
	global $posts;
	
	if (count ($posts) > 1) {
		return "";
	}
	
	$value = "";
	foreach ($posts AS $post) {		
		$custom_field = get_post_custom_values($fieldName, $post->ID);
		if (count ($custom_field) > 0) {
			$value = $custom_field[0];
		}
	}

	return $value;
}

/**
 * Vrací true, pokud má zvolený "custom field" u příspěvku nějakou hodnout (existuje). 
 */ 
function getIsCustomFieldValue($fieldName) {
	return (strlen (getCustomFieldValue($fieldName)) > 0) ? true: false;
}

/**
 * Pro konkrétní příspěvek vrátí text pro jeho description.
 */ 
function getDescriptionForPost() {
	if (!have_posts() || !is_single()) {
		return "";
	}

	$content = "";
	while (have_posts()) : the_post();
		$content = strip_tags(get_the_content());
		$content = str_replace(array("\r\n", "\r", "\n"), "", $content);
		$content = htmlspecialchars(substr ($content, 0, 250)."..."); 
		
		
		break;
	endwhile;
	rewind_posts();

	return $content;
}

/**
 * Vrátí text pro odkaz na přidání zprávy na Twitter
 */ 
function getTextForTwitter($title, $url) {
	$text = urlencode ($title." ".$url." @MozillaCZ");
	$text = "http://jdem.cz/tw?text=".$text."&amp;redir=1";
	
	return $text;
}

?>