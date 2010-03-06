<form method="post" action=""><h2><?php echo __('Newer product version', MOZ_DOMAIN) ?></h2>
<?php
if (isset($_POST['param1'])) 
{
	$uprav_id = $_POST['param1'];
	$produkty = $wpdb->get_row("SELECT * FROM mozsk_produkty WHERE id='$uprav_id'");
	if($produkty)
	{
		$urlid = htmlspecialchars($produkty->urlid, ENT_QUOTES);
		$nazov = htmlspecialchars($produkty->nazov, ENT_QUOTES);
		$datum = date('Y-m-d');
		$verzia = htmlspecialchars($produkty->verzia, ENT_QUOTES);
		$changelog = htmlspecialchars($produkty->changelog, ENT_QUOTES);
		$download_win = htmlspecialchars($produkty->download_win, ENT_QUOTES);
		$velkwin = htmlspecialchars($produkty->velkwin, ENT_QUOTES);
		$download_lin = htmlspecialchars($produkty->download_lin, ENT_QUOTES);
		$velklin = htmlspecialchars($produkty->velklin, ENT_QUOTES);
		$download_mac = htmlspecialchars($produkty->download_mac, ENT_QUOTES);
		$velkmac = htmlspecialchars($produkty->velkmac, ENT_QUOTES);
		$download_port = htmlspecialchars($produkty->download_port, ENT_QUOTES);
		$velkport = htmlspecialchars($produkty->velkport, ENT_QUOTES);
		$poznamka = htmlspecialchars($produkty->poznamka, ENT_QUOTES);
		require_once("form-upravit-inc.php");
	}
	else die ( __('I don''t know this ID.', MOZ_DOMAIN));
}
?>
	<div class="submit">
		<input type="submit" name="ok-submit" value="<?php echo __('Confirm values', MOZ_DOMAIN) ?> &raquo;" />
	</div>
	<input id="todo" name="todo" type="hidden" value="pridat-ok"/>
	<input id="param1" name="param1" type="hidden" value="<?php echo $uprav_id ?>"/>
</form>