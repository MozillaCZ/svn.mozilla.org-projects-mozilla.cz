<form method="post" action=""><h2>Pridať produkt</h2>
<?php
$urlid = '';
$nazov = '';
$datum = date('Y-m-d');
$verzia = '';
$changelog = '';
$download_win = '';
$download_lin = '';
$download_mac = '';
$download_port = '';
$velkwin = '';
$velklin = '';
$velkmac = '';
$velkport = '';
$poznamka = '';
require_once("form-upravit-inc.php");
?>
	<div class="submit">
		<input type="submit" name="ok-submit" value="Pridať produkt &raquo;" />
	</div>
	<input id="todo" name="todo" type="hidden" value="pridat-ok"/>
	<input id="param1" name="param1" type="hidden" value=""/>
</form>