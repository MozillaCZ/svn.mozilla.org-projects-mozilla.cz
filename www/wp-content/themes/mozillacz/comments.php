<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
 
// aby se komentáře přesměrovávaly na správnou stránku
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
//

if (!isset($_GET['komentare'])) {
?>

<?php 
}

if ( post_password_required() ) : ?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>

<?php if ( have_comments() ) : ?>

<p class="comments-title"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
<?php if ( comments_open() ) : ?>
	<a href="#postcomment" title="<?php _e("Leave a comment"); ?>">&raquo;</a>
<?php endif; ?>
</p>

<ol id="commentlist"> 

<?php foreach ($comments as $comment) : ?>
	<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
			<div class="comment-block">				
				<div class="comment-avatar">
						<?php echo get_avatar( $comment->comment_author_email, $size = '50'); ?>
				</div>
				<div class="comment-text">
						<strong><?php comment_author_link() ?></strong>  
						<small>(<?php comment_date('j. n. Y'); ?>)</small>
						<?php if ($comment->comment_approved == '0') : ?>
						<em>Váš komentář čeká na schválení.</em>
						<?php endif; ?>
						
						<?php comment_text() ?>					
				</div>
			</div>	
	</li>

<?php endforeach; ?>

</ol>

<?php else : ?>

<?php if ($comments.sizeasd == 0) : ?>
		<p><em>K příspěvku prozatím není žádný komentář.</em></p>
<?php endif; ?>


<?php endif; ?>

<div id="comment-form">
<?php if ( comments_open() ) : ?>

<div id="comments-gravatar-help"><small><a href="http://www.asonance.cz/help/komentare-gravatar.html">Jak nastavit ikonku</a></small></div>
<p class="comments-title"><?php _e('Leave a comment'); ?></p>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() ) );?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>"><?php _e('Log out &raquo;'); ?></a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
<label for="author"><small>Jméno <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Website'); ?></small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php printf(__('You can use these tags: %s'), allowed_tags()); ?></small></p>-->

<?php if (function_exists('curPageURL')) { ?>
<input type="hidden" name="redirect_to" value="<?php echo curPageURL() ?>" />
<?php } ?>

<p><textarea name="comment" id="comment" cols="70" rows="10" tabindex="4"></textarea></p>

<div id="notification-area">
	<p>Komentáře na serveru Mozilla.cz jsou <strong>moderované</strong>. Budeme rádi, pokud původní příspěvek
	rozšíříte hodnotným komentářem. Aby byl schválen, dodržte prosím následující body:</p> 
	
	<ul>
		<li>Svůj komentář pište slušně a podepište se pod něj.</li>
		<li>Pokud se chcete na něco zeptat, použijte <a href="http://forum.mozilla.cz/">diskuzní fórum</a>.</li>
		<li>Komentář by se měl týkat podstaty příspěvku. </li>
	</ul>
</div>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Submit Comment'); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>
<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
</div>
<?php endif; ?>