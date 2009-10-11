<form method="post" action=""><h2>Pridať článok</h2>
<?php
$nazov = '';
$datum = date('Y-m-d');
$server = '';
$odkaz = '';
$excerpt = '';
require_once("napisali-upravit-inc.php");
?>
	<div class="submit">
		<input type="submit" name="ok-submit" value="Pridať článok &raquo;" />
	</div>
	<input id="todo" name="todo" type="hidden" value="pridat-ok"/>
	<input id="param1" name="param1" type="hidden" value=""/>
</form>