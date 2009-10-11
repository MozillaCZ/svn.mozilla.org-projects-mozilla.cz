<?php
$uprav_id = $_POST['param1'];
$nazov = $_POST['nazov'];
$datum = $wpdb->escape($_POST['datum']);
$server_iny = $wpdb->escape($_POST['server_iny']);
if ($server_iny == '') $server = $wpdb->escape($_POST['server']);
else $server = $server_iny;
$odkaz = $wpdb->escape($_POST['odkaz']);
$excerpt = $_POST['excerpt'];

$wpdb->query("UPDATE mozsk_napisali SET
nazov = '$nazov',
datum = '$datum',
server = '$server',
odkaz = '$odkaz',
excerpt = '$excerpt'
WHERE id = '$uprav_id'");

?>
<div class="updated">
	<p><strong>Článok upravený. (ID=<?php echo $uprav_id ?>)</strong></p>
</div>
<?php
require_once("napisali.php");
?>
