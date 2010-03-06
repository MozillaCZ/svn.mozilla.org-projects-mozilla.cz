<form method="post" action=""><h2><?php echo __('Add article', MOZ_DOMAIN) ?></h2>
<?php
$nazov = '';
$datum = date('Y-m-d');
$server = '';
$odkaz = '';
$excerpt = '';
require_once("napisali-upravit-inc.php");
?>
	<div class="submit">
		<input type="submit" name="ok-submit" value="<?php echo __('Add article', MOZ_DOMAIN) ?> &raquo;" />
	</div>
	<input id="todo" name="todo" type="hidden" value="pridat-ok"/>
	<input id="param1" name="param1" type="hidden" value=""/>
</form>