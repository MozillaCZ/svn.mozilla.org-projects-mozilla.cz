<?php
/** 
 * Advanced quick reply
 * 
 * @package		phpBB3
 * @version		1.0
 * @copyright	(c) 2008 Z3u5 - www.suportephpbb.org
 * @license		http://opensource.org/licenses/gpl-license.php GNU Public License 
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class QuickReply
{
	//SETTINGS		
	//true to Enable
	//false to Disable
	var $active					= true;		//Enable/Disable Quick Reply box
	var $color_nick				= true;		//Enable/Disable Colorize nicknames in Quick Reply box
	var $quote_last_post_cative	= true;		//Enable/Disable Quote the last post function
	var $enable_bbcode_box		= false;	//Enable/Disable BBCODE  buttons in Quick Reply
	var $user_alter_subject		= false;	//Enable/Disable Allow users changes subjects of yours reply
	
	/**
	 * Constructor
	 *
	 * @param int $topic_id
	 * @param int $forum_id
	 * @param array $topic_data
	 */
	function QuickReply($topic_id, $forum_id, &$topic_data, $last_post)
	{
		global $db, $template, $user, $config, $auth, $phpbb_root_path, $phpEx;
		
		//Check of this user can post reply
		if (!$auth->acl_get('f_reply', $forum_id) || !$this->active)
		{
			$this->active = false;
			return;
		}

		//Add Language fle
		$user->add_lang('mods/quickreply');

		// Hidden fields
		$s_hidden_fields = array(
			't'			=> $topic_id,
			'f'			=> $forum_id,
			'mode'		=> 'reply',
			'lastclick'	=> time(),
			'icon'		=> 0,
		);

		// Set preferences such as allow smilies, bbcode, attachsig
		if(!$config['allow_bbcode'] && !$user->optionget('bbcode'))
		{
			$s_hidden_fields['disable_bbcode'] = false;
		}
		if(!$config['allow_smilies'] && !$user->optionget('smilies'))
		{
			$s_hidden_fields['disable_smilies'] = false;
		}
		
		//Set last post data
		//Removing BBCODE uid
		$bbcode_uid = $last_post['bbcode_uid'];
		$last_poster = $last_post['username'];
        $last_msg = str_replace(":1:$bbcode_uid", '', $last_post['post_text']);
        $last_msg = str_replace(":$bbcode_uid", '', $last_msg);        
        $last_msg = str_replace("'", '&#39;', $last_msg);
        $last_msg = str_replace("[/list:u]", '[/list]', $last_msg);		
        $last_msg = str_replace('[/*:m]', '[/*]', $last_msg);
		$last_msg = '[quote="' . $last_poster . '"]' . $last_msg . '[/quote]';
		//Remove smilies code
		$last_msg = preg_replace('#<!\-\- s(.*?) \-\-><img src="\{SMILIES_PATH\}\/.*? \/><!\-\- s\1 \-\->#', '\1', $last_msg);
	
		unset($last_post);
				
		$subject = ((strpos($topic_data['topic_title'], 'Re: ') !== 0) ? 'Re: ' : '') . censor_text($topic_data['topic_title']);
		
		// Confirmation code handling (stolen from posting.php)
		if ($config['enable_post_confirm'] && !$user->data['is_registered'])
		{
			// Show confirm image
			$sql = 'DELETE FROM ' . CONFIRM_TABLE . "
				WHERE session_id = '" . $db->sql_escape($user->session_id) . "'
					AND confirm_type = " . CONFIRM_POST;
			$db->sql_query($sql);
		
			// Generate code
			$code = gen_rand_string(mt_rand(5, 8));
			$confirm_id = md5(unique_id($user->ip));
			$seed = hexdec(substr(unique_id(), 4, 10));
		
			// compute $seed % 0x7fffffff
			$seed -= 0x7fffffff * floor($seed / 0x7fffffff);
		
			$sql = 'INSERT INTO ' . CONFIRM_TABLE . ' ' . $db->sql_build_array('INSERT', array(
				'confirm_id'	=> (string) $confirm_id,
				'session_id'	=> (string) $user->session_id,
				'confirm_type'	=> (int) CONFIRM_POST,
				'code'			=> (string) $code,
				'seed'			=> (int) $seed)
			);
			$db->sql_query($sql);
		
			$template->assign_vars(array(
				'S_CONFIRM_CODE'			=> true,
				'CONFIRM_ID'				=> $confirm_id,
				'CONFIRM_IMAGE'				=> '<img src="' . append_sid("{$phpbb_root_path}ucp.$phpEx", 'mode=confirm&amp;id=' . $confirm_id . '&amp;type=' . CONFIRM_POST) . '" alt="" title="" />',
			));
		}
		
		// Page title & action URL, include session_id for security purpose
		$s_action = append_sid("{$phpbb_root_path}posting.$phpEx", false, true, $user->session_id);
		add_form_key('posting');
		
		// Generate smiley listing
		include $phpbb_root_path . 'includes/functions_posting.' . $phpEx;
		generate_smilies('inline', $forum_id);

		// Build bbcodes
		// HTML, BBCode, Smilies, Images and Flash status
		$bbcode_status	= ($config['allow_bbcode'] && $auth->acl_get('f_bbcode', $forum_id)) ? true : false;
		$smilies_status	= ($bbcode_status && $config['allow_smilies'] && $auth->acl_get('f_smilies', $forum_id)) ? true : false;
		$img_status		= ($bbcode_status && $auth->acl_get('f_img', $forum_id)) ? true : false;
		$url_status		= ($config['allow_post_links']) ? true : false;
		$flash_status	= ($bbcode_status && $auth->acl_get('f_flash', $forum_id)) ? true : false;
		$quote_status	= ($auth->acl_get('f_reply', $forum_id)) ? true : false;

		if($this->enable_bbcode_box)
		{
			display_custom_bbcodes();
			$user->add_lang('posting');
		}
		
		// Assign template variables
		$template->assign_vars(array(
			'QR_SUBJECT'			=> $subject,
			
			'S_QR_HIDDEN_FIELDS'	=> build_hidden_fields($s_hidden_fields),
			'S_QR_LAST_POST'		=> $last_msg,
			'S_QR_POST_ACTION'		=> $s_action,

			'S_QR_BBCODE_BOX_ACTIVE'	=> $this->enable_bbcode_box,		
			'S_BBCODE_ALLOWED'			=> $bbcode_status,
			'S_BBCODE_IMG'				=> $img_status,
			'S_BBCODE_URL'				=> $url_status,
			'S_BBCODE_FLASH'			=> $flash_status,
			'S_BBCODE_QUOTE'			=> $quote_status,
			
			'S_EDIT_DRAFT'				=> true,
			
			'S_QR_SUBJECT'		=> $this->user_alter_subject,
			
			'S_QR_COLOR_NICK'			=> $this->color_nick,
			'S_QR_ACTIVE'				=> $this->active,
			'S_QR_QUOTE_LAST'			=> $this->quote_last_post_cative,
			
			'S_QR_NOTIFY_CHECKED'		=> ($user->data['user_notify']) ? ' checked="checked"' : '',
			'S_QR_SIGNATURE_CHECKED'	=> ($user->optionget('attachsig')) ? ' checked="checked"' : '',
			
			'S_QR_ATTACH_SIG'	=> ($auth->acl_get('f_sigs', $forum_id) && $config['allow_sig'] && $user->data['is_registered']) ? true : false,
			'S_QR_NOTIFY'		=> ($config['allow_topic_notify'] && $user->data['is_registered']) ? true : false			
		));

		return;	
	}

}
?>