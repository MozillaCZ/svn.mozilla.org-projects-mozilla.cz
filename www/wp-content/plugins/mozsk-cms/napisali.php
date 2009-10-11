<form method="post" action="">
<h2>Zoznam článkov</h2>
	<div style="overflow:auto;height:450px;border:solid 1px #ccc;margin-bottom:10px">
	<table id="the-list-x" width="100%" cellpadding="3" cellspacing="3">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Server</th>
			<th scope="col" width="600">Názov</th>
			<th scope="col">Dátum</th>
			<th scope="col" colspan="2">-</th>
		</tr>
	</thead>
	<tbody>
<?php
	$r = 0;
	$napisali = $wpdb->get_results("SELECT nazov, id, odkaz, datum, server, excerpt FROM mozsk_napisali ORDER BY id DESC limit 20");
	if($napisali)
	{
		foreach ($napisali as $clanok) 
		{
			if($r % 2) echo '<tr>';
			else echo '<tr class="alternate">';
			
			$df = get_settings('date_format');
			$datum = mysql2date($df, $clanok->datum);

			echo '<th scope="row" rowspan="2">'.$clanok->id.'</th>';
			echo '<td>'.$clanok->server.'</td>';
			echo '<td><a href="'.htmlspecialchars($clanok->odkaz).'">'.$clanok->nazov.'</a></td>';
			echo "<td style=\"text-align:center\">$datum</td>";
			echo '<td><a href="#" class="edit" onclick="mskcms_Edit('.$clanok->id.')">Upraviť</a></td>';
			echo '<td><a href="#" class="delete" onclick="mskcms_AskDel('.$clanok->id.')">Zmazať</a></td>';
			echo '</tr>';
			if($r % 2) echo '<tr>';
			else echo '<tr class="alternate">';
			echo '<td colspan="5">'.$clanok->excerpt.'</td>';
			echo '</tr>';
			$r++;
		}
	}	
	else
	{
		echo '<tr><td colspan="6">V databáze nie sú žiadne články.</td></tr>';
	}
?>
	</tbody>
	</table>
	</div>
	<div class="submit">
		<input id="ok-submit" type="submit" name="ok-submit" value="Pridať článok &raquo;" />
	</div>
	<input id="todo" name="todo" type="hidden" value="pridat"/>
	<input id="param1" name="param1" type="hidden" value=""/>
</form>
