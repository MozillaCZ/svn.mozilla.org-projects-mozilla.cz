<?php
if (isset($_POST['param1'])) 
{
	$zmaz_id = $_POST['param1'];
	$wpdb->query("DELETE FROM mozsk_produkty WHERE id = '$zmaz_id'");
}
?>
<div class="updated">
	<p><strong><?php echo __('product deleted', MOZ_DOMAIN) ?>.</strong></p>
</div>
<?php
require_once("form-zoznam.php");
?>