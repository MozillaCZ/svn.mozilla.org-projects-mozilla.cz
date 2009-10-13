<?php
/**
*
* @package phpBB3
* @version $Id: prime_captcha.php,v 1.0.6 2009/05/10 16:03:00 primehalo Exp $
* @copyright (c) 2007-2008 Ken F. Innes IV
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* Include only once.
*/
global $prime_captcha;
if (!defined('INCLUDES_PRIME_CAPTCHA_PHP'))
{
	define('INCLUDES_PRIME_CAPTCHA_PHP', true);

	/**
	* Options
	*/
	define('PRIME_CAPTCHA_COOKIE_NAME', 'prime_captcha');
	define('PRIME_CAPTCHA_COOKIE_TIME', 0); // Number of days to keep the cookie

	/*
	* Constants
	*/
	define('PRIME_CAPTCHA_DISABLE', 0);
	define('PRIME_CAPTCHA_ENABLE', 1);
	define('PRIME_CAPTCHA_TEMPLATE', 2);

	/**
	*/
	function prime_captcha_make_options($key, $select_id = 0, $use_config = true)
	{
		global $user, $config;

		if (!isset($config[$key]) && ($key == 'prime_captcha_post' || $key == 'prime_captcha_reg'))
		{
			set_config($key, '1');
		}
		$options_array = array(
			PRIME_CAPTCHA_ENABLE	=> 'PRIME_CAPTCHA_ENABLE',
			PRIME_CAPTCHA_TEMPLATE	=> 'PRIME_CAPTCHA_TEMPLATE',
			PRIME_CAPTCHA_DISABLE	=> 'PRIME_CAPTCHA_DISABLE',
		);
		$select = '';
		foreach ($options_array as $idx => $title)
		{
			$selected = ($config[$key] == $idx) ? ' checked="checked"' : '';
			$name = ($use_config) ? 'config[' . $key . ']' : $key;
			$select .= '<label><input type="radio"' . ($idx == 1 ? ' id="' . $key . '"' : '') . ' name="' . $name . '" value="' . $idx . '"' . $selected . ' class="radio" /> ' . $user->lang[$title] . '</label>' . "\n";
		}
		return($select);
	}

/**
*/
	class prime_captcha
	{
		var $error = false;
		var $fields = array();

		/**
		* Constructor
		*/
		function prime_captcha()
		{
			$this->initialize_options();
		}


		/**
		* Set defaults for options that haven't been set.
		*/
		function initialize_options()
		{
			global $config;

			$defaults = array(
				'prime_captcha_reg'		=> PRIME_CAPTCHA_ENABLE,
				'prime_captcha_post'	=> PRIME_CAPTCHA_ENABLE,
			);
			foreach ($defaults as $option => $default)
			{
				if (!isset($config[$option]))
				{
					set_config($option, $default);
				}
			}
		}


		/**
		* Display the ACP options.
		*/
		function display_acp_options(&$display_vars, $mode)
		{
			global $config, $template, $user;

			$options = array(
				'prime_captcha_post'	=> array('lang' => 'PRIME_CAPTCHA_POST',	'validate' => 'int', 'type' => 'custom', 'function' => 'prime_captcha_make_options', 'params' => array('{KEY}', '{CONFIG_VALUE}'), 'explain' => true),
				'prime_captcha_reg'		=> array('lang' => 'PRIME_CAPTCHA_REG',		'validate' => 'int', 'type' => 'custom', 'function' => 'prime_captcha_make_options', 'params' => array('{KEY}', '{CONFIG_VALUE}'), 'explain' => true),
			);

			if ($mode == 'captcha')
			{
				$output = '';
				$user->add_lang('mods/prime_captcha');
				foreach ($options as $key => $val)
				{
					$output	.=	"<dl>\n"
							.	'<dt><label for="' . $key . '">' . $user->lang[$val['lang']] . ':</label><br /><span>' . ($val['explain'] ? $user->lang[$val['lang'] . '_EXPLAIN'] : '') . "</span></dt>\n"
							.	'	<dd>' . prime_captcha_make_options($key, $config[$key], false) . "</dd>\n"
							.	"</dl>\n"
					;
					$display_vars[$key] = $val['lang'];
				}
				$template->assign_var('PRIME_CAPTCHA_OPTIONS', $output);
			}
			else if ($mode == 'settings' || $mode == 'post' || $mode == 'registration')
			{
				$user->add_lang('mods/prime_captcha');
				$display_copy = $display_vars['vars'];
				$display_vars['vars'] = array();
				foreach ($display_copy as $key => $val)
				{
					$display_vars['vars'][$key] = $val;
					if (($mode == 'settings' && $key == 'override_user_style') || $mode == 'post' && $key == 'enable_post_confirm')	// Insert our option after this one
					{
						$display_vars['vars']['prime_captcha_post']	= array('lang' => 'PRIME_CAPTCHA_POST',	'validate' => 'int', 'type' => 'custom', 'function' => 'prime_captcha_make_options', 'params' => array('{KEY}', '{CONFIG_VALUE}'), 'explain' => true);
					}
					if (($mode == 'settings' && $key == 'override_user_style') || $mode == 'registration' && $key == 'enable_confirm')	// Insert our option after this one
					{
						$display_vars['vars']['prime_captcha_reg']	= array('lang' => 'PRIME_CAPTCHA_REG',	'validate' => 'int', 'type' => 'custom', 'function' => 'prime_captcha_make_options', 'params' => array('{KEY}', '{CONFIG_VALUE}'), 'explain' => true);
					}
				}
			}
		}

		/**
		*/
		function make_cookie_value()
		{
			// Lets make the cookie value so that it's unique to the user (and keeping in
			// mind that this script can be run on different forums). So lets use the
			// server of the forum, the user's IP address, and the user's browser. There
			// are better security techniques than md5, but that should be good enough.
			// $cookie_value = md5($_SERVER['SERVER_NAME'] . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
			// Bump up the encoding as robots are still getting through (update: this was not the hole, but since it's already done might as well keep it)

			global $config, $user;
			$cookie_value = '';
			$fowarded_for = $config['forwarded_for_check'] ? $user->forwarded_for : null;

			foreach (array($user->ip, $fowarded_for) as $value)
			{
				if (!empty($value) && (preg_match_all('/' . get_preg_expression('ipv4') . '/', $value, $ip_address) || preg_match_all('/' . get_preg_expression('ipv6') . '/', $value, $ip_address)))
				{
					$cookie_value .= ($cookie_value == '' ? '' : "\n") . implode("\n", $ip_address);
				}
			}
			foreach (array('SERVER_NAME', 'SERVER_ADMIN', 'HTTP_USER_AGENT') as $value)
			{
				$cookie_value .= ($cookie_value == '' ? '' : "\n") . (isset($_SERVER[$value]) ? $_SERVER[$value] : '');
			}
			return md5($cookie_value);
		}

		/**
		* Returns an "encoded" value.
		* @param:  string - the variable to be encoded
		* @return: string - the encoded variable (32-character hexadecimal number)
		*/
		function encode_me($variable)
		{
			global $cookie_value;

			// We can just use the cookie value as the md5 key since it's already md5
			// encoded and unique to the user and forum.
			return md5($variable . $cookie_value);
		}


		/**
		* Converts all passed-in variables to a string of hidden HTML form fields.
		* @param:  array - the array of variables to convert
		* @return: string - the string of hidden HTML form fields
		*/
		function make_form_fields($post_vars)
		{
			// In addition to our own form fields, we also need to make sure we keep
			// all of the form fields that came before us, and some of those could be
			// arrays, which is why we're doing this in a function (so we can recurse).
			$hidden_fields = '';
			foreach ($post_vars as $var_name => $var_value)				// Need to assign each and every post variable to a hidden form field
			{
				if (is_array($var_value)) 								// The value of this POST variable is another array!
				{
					foreach ($var_value as $this_name => $this_value)	// Go through each variable in this POST variable's array
					{
						$new_post_var = array("$var_name[$this_name]" => $this_value);	// Assign the new variable info to a new variable (confused yet?)
						$hidden_fields .= generate_hidden_form_fields($new_post_var);	// Yep, recursion time.
					}
				}
				else
				{
					$hidden_fields .= '<input type="hidden" name="' . $var_name . '" value="' . htmlspecialchars($var_value) . '" />';
				}
			}
			return $hidden_fields;
		}

		/**
		* Main
		*/
		function handle_captcha()
		{
			global $user, $template, $config, $phpbb_root_path, $phpEx;

			$mode = $user->page['page_name'] == "ucp.$phpEx" ? 'prime_captcha_reg' : 'prime_captcha_post';

			// Check to see if we actually need to do anything.
			if (empty($config[$mode]) || ($config[$mode] == PRIME_CAPTCHA_TEMPLATE && $_SERVER['REQUEST_METHOD'] != 'POST'))
			{
				return;
			}

			// Mmmmm, cookies....
			$cookie_name  = $config['cookie_name'] . '_' . PRIME_CAPTCHA_COOKIE_NAME;
			$cookie_value = $this->make_cookie_value();

			// If we can find our cookie and it has its correct value, then
			// we've already done a verification and we can just leave.
			if (isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] == $cookie_value)
			{
				return;
			}

			// Grab our language files
			$user->add_lang('mods/prime_captcha');
			$user->add_lang('mods/prime_captcha_keys');
			
			//  Check if this will be a separate page
			$separate_page = ($config[$mode] == PRIME_CAPTCHA_TEMPLATE) ? true : false;

			// Create the form field names for the key phrase and the key response. It was
			// suggested to me that they should be encoded. Doing so won't change anything
			// on this end except that when checking for the passkey phrase we'll have to
			// look for it instead of just directly accessing it.
			$field_key_phrase   = $cookie_name . $this->encode_me('field_key_phrase');
			$field_key_response = $cookie_name . $this->encode_me('field_key_response');

			// Our keys and responses can be found in our language file
			$key_list = $user->lang['PRIME_CAPTCHA_KEYS'];			// Store the keys and responses into a new array to make life easier

			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				// If we have a key phrase and a key response, then we need to see if the user
				// gave an appropriate response to the key phrase.
				if (isset($_POST[$field_key_phrase]) && isset($_POST[$field_key_response]))
				{
					$encoded_key_phrase = request_var($field_key_phrase, ''); 	// Grab the passkey phrase (remember, it was encoded)
					$user_response = request_var($field_key_response, '', true);	// Grab the user's response to the passkey phrase
					$user_response = utf8_clean_string($user_response);			// Ignore case and ditch any leading/trailing spaces
					if ($user_response !== '')									// Only do the work if the user actually entered something!
					{
						foreach ($key_list as $idx => $valid_responses)			// The passkey phrase was encoded, so we need to find it rather than just accessing it directly (bummer)
						{
							if ($this->encode_me($idx) == $encoded_key_phrase)	// Cool, we found the passkey phrase we were looking for
							{
								foreach ($valid_responses as $valid) 			// We can't use in_array() because we're doing a case-insensitive check (bummer)
								{
									$valid = utf8_clean_string($valid);			// We're ignoring case and ditch any leading/trailing spaces
									if ($user_response == $valid) 				// Did we actually find a valid response?!
									{
										$cookie_time = (PRIME_CAPTCHA_COOKIE_TIME == 0 ? 0 : time() + (86400 * PRIME_CAPTCHA_COOKIE_TIME));
										$user->set_cookie(PRIME_CAPTCHA_COOKIE_NAME, $cookie_value, $cookie_time);
										$this->error = false;

										// User has been validated, but they might not have cookies enabled,
										// so provide the correct key/response as a hidden form variables.
										$this->fields[$field_key_phrase]   = $encoded_key_phrase;
										$this->fields[$field_key_response] = $user_response;
										return;									// Human Verified! We're done!
									}
								}
								$this->error = 'PRIME_CAPTCHA_INCORRECT';
								break;											// We didn't find a valid response, so lets move on
							}
						}
						// If we made it here AND no error was assigned, then we did not find a passkey phrase, which shouldn't happen.
 						$this->error = ($this->error) ? $this->error : 'PRIME_CAPTCHA_NO_KEY';
					}
					else
					{
						$this->error = 'PRIME_CAPTCHA_EMPTY';
					}
				}
				else if (!$separate_page)
				{
					$this->error = !isset($_POST[$field_key_phrase]) ? 'PRIME_CAPTCHA_NO_KEY' : 'PRIME_CAPTCHA_EMPTY';
				}
			}

			$key_phrase = array_rand($key_list);							// Grab a random key phrase from the list
			$encoded_key_phrase = $this->encode_me($key_phrase);			// Encode the key phrase
			$post_vars = array();
			if ($separate_page)												// Grab ALL of the POST variables if we're using our own template
			{
				foreach($_POST as $key => $val)
				{
					$post_vars[$key] = request_var($key, $val);
				}
			}
			$post_vars[$field_key_phrase] = $this->encode_me($key_phrase);	// Add the key phrase we grabbed to the POST variables
			unset($post_vars[$field_key_response]);							// Make sure the response to the key is NOT included in the POST variables
			$hidden_form_fields = $this->make_form_fields($post_vars);		// Create all of the hidden form fields that need to be passed along

			$template->assign_vars(array(									// Assign all the template variables we'll need to use
				'PRIME_CAPTCHA_MODE'				=> $mode,
				'PRIME_CAPTCHA_TITLE'				=> $user->lang['PRIME_CAPTCHA_TITLE'],
				'PRIME_CAPTCHA_DESCRIPTION'			=> $user->lang['PRIME_CAPTCHA_DESCRIPTION'],
				'PRIME_CAPTCHA_INSTRUCTIONS'		=> $user->lang['PRIME_CAPTCHA_INSTRUCTIONS'],
				'PRIME_CAPTCHA_KEY_PHRASE'			=> $key_phrase,
				'PRIME_CAPTCHA_FIELD_KEY_RESPONSE'	=> $field_key_response,
				'PRIME_CAPTCHA_HIDDEN_FIELDS'		=> $hidden_form_fields,
			));

			if ($separate_page)
			{
				$template->assign_vars(array(									// Assign all the variables we'll need to use in the template
					'SUBMIT'				=> $user->lang['PRIME_CAPTCHA_SUBMIT'],
					'SITENAME'				=> $config['sitename'],
					'S_USER_LANG'			=> $user->lang['USER_LANG'],
					'S_CONTENT_DIRECTION'	=> $user->lang['DIRECTION'],
					'S_CONTENT_ENCODING'	=> 'UTF-8',
					'ACTION'				=> $_SERVER['REQUEST_URI'],

					'T_THEME_PATH'			=> "{$phpbb_root_path}styles/" . $user->theme['theme_path'] . '/theme',
					'T_TEMPLATE_PATH'		=> "{$phpbb_root_path}styles/" . $user->theme['template_path'] . '/template',
					'T_STYLESHEET_LINK'		=> (!$user->theme['theme_storedb']) ? "{$phpbb_root_path}styles/" . $user->theme['theme_path'] . '/theme/stylesheet.css' : "{$phpbb_root_path}style.$phpEx?sid=$user->session_id&amp;id=" . $user->theme['style_id'] . '&amp;lang=' . $user->data['user_lang'],

				));
				if ($this->error)
				{
					$template->assign_var('PRIME_CAPTCHA_ERROR', $user->lang[$this->error]);
				}
				// Specify our template file
				$template->set_filenames(array('body' => 'prime_captcha.html'));
				$template->display('body');		// Time to display our human verificaton page
				exit;							// Stop all further processing of whatever file called us!
			}
			return;
		}

		/**
		*/
		function update_error(&$error)
		{
			global $user;

			if ($this->error)
			{
				$error[] = $user->lang[$this->error];
			}
		}
	}
	// End class

	$prime_captcha = new prime_captcha();
}
?>