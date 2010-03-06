<form method="post" action=""><h2><?php echo __('Edit product', MOZ_DOMAIN)?></h2>
<?php
if (isset($_POST['param1'])) 
{
	$uprav_id = $_POST['param1'];
	$produkt = $wpdb->get_row("SELECT * FROM mozsk_produkty WHERE id='$uprav_id'");
	if($produkt)
	{
		$urlid = htmlspecialchars($produkt->urlid, ENT_QUOTES);
		$nazov = htmlspecialchars($produkt->nazov, ENT_QUOTES);
		$datum = $produkt->datum;
		$verzia = htmlspecialchars($produkt->verzia, ENT_QUOTES);
		$changelog = htmlspecialchars($produkt->changelog, ENT_QUOTES);
		$download_win = htmlspecialchars($produkt->download_win, ENT_QUOTES);
		$velkwin = $produkt->velkwin;
		$download_lin = htmlspecialchars($produkt->download_lin, ENT_QUOTES);
		$velklin = $produkt->velklin;
		$download_mac = htmlspecialchars($produkt->download_mac, ENT_QUOTES);
		$velkmac = $produkt->velkmac;
		$download_port = htmlspecialchars($produkt->download_port, ENT_QUOTES);
		$velkport = $produkt->velkport;
		$poznamka = htmlspecialchars($produkt->poznamka, ENT_QUOTES);
		require_once("form-upravit-inc.php");
	}
	else die ( __('I don\'t know this ID.', MOZ_DOMAIN) );
}
?>
	<div class="submit">
		<input type="submit" name="ok-submit" value="<?php echo __('Confirm changes', MOZ_DOMAIN) ?> &raquo;" />
	</div>
	<input id="todo" name="todo" type="hidden" value="upravit-ok"/>
	<input id="param1" name="param1" type="hidden" value="<?php echo $uprav_id ?>"/>
</form>