<?php
/**
*
* prime_captcha [English]
*
* @package language
* @version $Id: prime_captcha.php,v 1.0.4 2008/08/27 13:34:00 primehalo Exp $
* @copyright (c) 2007 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	// ACP
	'PRIME_CAPTCHA_POST'			=> 'Text verification for guest postings',
	'PRIME_CAPTCHA_POST_EXPLAIN'	=> 'Requires anonymous users to enter a correct response to a given question or instruction to help prevent mass postings.',
	'PRIME_CAPTCHA_REG'				=> 'Text verification for registrations',
	'PRIME_CAPTCHA_REG_EXPLAIN'		=> 'Requires new users to enter a correct response to a given question or instruction to help prevent mass registrations.',
	'PRIME_CAPTCHA_ENABLE'			=> 'Enable',
	'PRIME_CAPTCHA_TEMPLATE'		=> 'Separate page',
	'PRIME_CAPTCHA_DISABLE'			=> 'Disable',

	// General
	'PRIME_CAPTCHA_MOD_NAME'		=> 'Prime CAPTCHA',
	'PRIME_CAPTCHA_TITLE'   		=> 'Ochrana proti webovým robotům',
	'PRIME_CAPTCHA_DESCRIPTION' 	=> 'Odpovězte prosím na kontrolní otázku',
	'PRIME_CAPTCHA_INSTRUCTIONS' 	=> 'Kontrolní otázka',
	'PRIME_CAPTCHA_INCORRECT'  		=> 'Odpověď na kontrolní otázku byla chybná.',
	'PRIME_CAPTCHA_EMPTY'	  		=> 'Nezadal(a) jste odpověď na kontrolní otázku.',
	'PRIME_CAPTCHA_NO_KEY'	  		=> 'No human verification key exists, which indicates a robotic submission.',
	'PRIME_CAPTCHA_SUBMIT'  		=> 'Odeslat odpověď',
));

?>