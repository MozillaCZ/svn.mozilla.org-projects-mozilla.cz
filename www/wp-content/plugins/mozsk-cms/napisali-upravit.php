<form method="post" action=""><h2><?php echo __('Edit article', MOZ_DOMAIN) ?></h2>
<?php
if (isset($_POST['param1'])) 
{
	$uprav_id = $_POST['param1'];
	$clanok = $wpdb->get_row("SELECT * FROM mozsk_napisali WHERE id='$uprav_id'");
	if($clanok)
	{
		$nazov = htmlspecialchars($clanok->nazov, ENT_QUOTES);
		$datum = $clanok->datum;
		$odkaz = htmlspecialchars($clanok->odkaz, ENT_QUOTES);
		$server = htmlspecialchars($clanok->server, ENT_QUOTES);
		$os = array("Zive.sk", "Zive.cz", "DSL.sk", "ITNews.sk", "SME.sk", "Pocitace.sme.sk", "Inet.sk", "JasnaPaka", "Lupa.cz");
		if (in_array($server, $os) == false) {
			$server_iny = $server; $server = "-";  
		}

		$excerpt = htmlspecialchars($clanok->excerpt, ENT_QUOTES);
		require_once("napisali-upravit-inc.php");
	}
	else die ( __('I don\'t know this ID.', MOZ_DOMAIN));
}
?>
	<div class="submit">
		<input type="submit" name="ok-submit" value="<?php echo __('Confirm', MOZ_DOMAIN) ?> &raquo;" />
	</div>
	<input id="todo" name="todo" type="hidden" value="upravit-ok"/>
	<input id="param1" name="param1" type="hidden" value="<?php echo $uprav_id ?>"/>
</form>
