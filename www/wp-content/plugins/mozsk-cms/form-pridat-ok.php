<?php
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

$wpdb->query("INSERT INTO mozsk_produkty
(
urlid, nazov, datum, verzia, changelog,
download_win, velkwin, download_lin, velklin, download_mac, velkmac, download_port, velkport,
poznamka
) VALUES (
'$urlid', '$nazov', '$datum', '$verzia', '$changelog',
'$download_win', '$velkwin', '$download_lin', '$velklin', '$download_mac', '$velkmac', '$download_port', '$velkport', 
'$poznamka'
)");

?>
<div class="updated">
	<p><strong><?php echo __('Product was added.', MOZ_DOMAIN) ?> (ID=<?php echo $wpdb->insert_id ?>)</strong></p>
</div>
<?php
require_once("form-zoznam.php");
?>