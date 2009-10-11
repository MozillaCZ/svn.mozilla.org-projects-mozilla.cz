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


?>