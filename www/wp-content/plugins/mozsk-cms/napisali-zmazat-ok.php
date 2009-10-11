<?php
if (isset($_POST['param1'])) 
{
	$zmaz_id = $_POST['param1'];
	$wpdb->query("DELETE FROM mozsk_napisali WHERE id = '$zmaz_id'");
}
?>
<div class="updated">
	<p><strong>Článok zmazaný.</strong></p>
</div>
<?php
require_once("napisali.php");
?>