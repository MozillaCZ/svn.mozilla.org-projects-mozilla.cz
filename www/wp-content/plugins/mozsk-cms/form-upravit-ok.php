<?php
$uprav_id = $_POST['param1'];
$urlid = $wpdb->escape($_POST['urlid']);
$nazov = $wpdb->escape($_POST['nazov']);
$datum = $wpdb->escape($_POST['datum']);
$verzia = $wpdb->escape($_POST['verzia']);
$changelog = $wpdb->escape($_POST['changelog']);
$download_win = $wpdb->escape($_POST['download_win']);
$velkwin = $wpdb->escape($_POST['velkwin']);
$download_lin = $wpdb->escape($_POST['download_lin']);
$velklin = $wpdb->escape($_POST['velklin']);
$download_mac = $wpdb->escape($_POST['download_mac']);
$velkmac = $wpdb->escape($_POST['velkmac']);
$download_port = $wpdb->escape($_POST['download_port']);
$velkport = $wpdb->escape($_POST['velkport']);
$poznamka = $_POST['poznamka'];

$wpdb->query("UPDATE mozsk_produkty SET
urlid = '$urlid',
nazov = '$nazov',
datum = '$datum',
verzia = '$verzia',
changelog = '$changelog',
download_win = '$download_win',
velkwin = '$velkwin',
download_lin = '$download_lin',
velklin = '$velklin',
download_mac = '$download_mac',
velkmac = '$velkmac',
download_port = '$download_port',
velkport = '$velkport',
poznamka = '$poznamka'
WHERE id = '$uprav_id'");

?>
<div class="updated">
	<p><strong><?php echo __('Product was updated.', MOZ_DOMAIN) ?> (ID=<?php echo $uprav_id ?>)</strong></p>
</div>
<?php
require_once("form-zoznam.php");
?>