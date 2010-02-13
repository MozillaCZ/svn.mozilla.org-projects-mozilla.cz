<?php
function writePhoto($index, $param)
{
	$title  = isset($param[1]) ? $param[1] : '';
	$type   = isset($param[2]) ? $param[2] : 'jpg';
	$typem = isset($param[3]) ? $param[3] : 'jpg';
	$name   = $param[0] . '.' . $type;
	$namem = $param[0] . '-m.' . $typem;
?>
		<td align="center" valign="top">
			<a href="images/<?php echo $name?>">
				<img src="images/<?php echo $namem?>" class="imgl" alt="Foto <?php echo $index + 1?>" title="<?php echo strip_tags($title)?>" />
			</a>
			<br /><?php echo $title ?>
		</td>
<?php
}

echo '<table border="0" class="fotozilla" cellpadding="10">';

/* Vypiseme fotky po dvojicich. */
for($i = 0; $i < floor(count($photos) / 2); $i++) {
	echo "<tr>\n";
	writePhoto(2 * $i, $photos[2 * $i]);
	writePhoto(2 * $i + 1, $photos[2 * $i + 1]);
	echo "</tr>\n";
}

/* Nakonec vypiseme pripadnou zbyvajici lichou. */
if (count($photos) % 2 != 0) {
	echo "<tr>\n";
	writePhoto(count($photos) - 1, $photos[count($photos) - 1]);
	echo "</tr>\n";
}
echo "</table>\n";
echo "<br /><br />";


