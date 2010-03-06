<?php
$nazov = $_POST['nazov'];
$datum = $wpdb->escape($_POST['datum']);
$server_iny = $wpdb->escape($_POST['server_iny']);
if ($server_iny == '') $server = $wpdb->escape($_POST['server']);
else $server = $server_iny;
$odkaz = $wpdb->escape($_POST['odkaz']);
$excerpt = $_POST['excerpt'];

$wpdb->query("INSERT INTO mozsk_napisali
(
nazov, datum, server, odkaz, excerpt
) VALUES (
'$nazov', '$datum', '$server', '$odkaz',
'$excerpt')");

?>
<div class="updated">
	<p><strong><?php echo __('Article was updated', MOZ_DOMAIN) ?> (ID=<?php echo $wpdb->insert_id ?>)</strong></p>
</div>
<?php
require_once("napisali.php");
?>
