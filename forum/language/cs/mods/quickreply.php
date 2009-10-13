<?php
/** 
*
* quickreply [Slovak]
*
* @package language
* @version $Id: quickreply Z3u5 Exp $
* @copyright (c) 2007 www.suportephpbb.org 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ATTACH_SIG'				=> 'Připojit podpis (podpis můžete změnit v Uživatelském panelu)',
	'MORE_SMILIES'				=> 'Další smajlíky',
	'NO_TEXT_SELECTED'			=> 'Označte text a zkuste to znovu.',
	'NOTIFY_REPLY'				=> 'Upozornit mě e-mailem na odpověď',
	'QUOTE_SELECTED'			=> 'Citovat označené',
	'QUOTE_LAST_POST'			=> 'Citovat poslední příspěvek',	
	'POST_REPLY'				=> 'Odeslat odpověď',
	'TOO_FEW_CHARS'				=> 'Vaše zpráva obsahuje příliš málo znaků.',	
	'SMILIES'					=> 'Smajlíci',
));

?>
