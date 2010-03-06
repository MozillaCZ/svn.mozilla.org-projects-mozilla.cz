<form method="post" action="">
<h2><?php echo __('List of applications', MOZ_DOMAIN) ?></h2>
	<div style="overflow:auto;height:450px;border:solid 1px #ccc;margin-bottom:10px">
	<table id="the-list-x" width="100%" cellpadding="3" cellspacing="3">
	<thead>
		<tr>
			<th scope="col"><?php echo __('ID', MOZ_DOMAIN) ?></th>
			<th scope="col"><?php echo __('Name', MOZ_DOMAIN) ?></th>
			<th scope="col"><?php echo __('Version', MOZ_DOMAIN) ?></th>
			<th scope="col"><?php echo __('Date', MOZ_DOMAIN) ?></th>
			<th scope="col" colspan="5"><?php echo __('Download', MOZ_DOMAIN) ?></th>
			<th scope="col" width="150"><?php echo __('Note', MOZ_DOMAIN) ?></th>
			<th scope="col" colspan="3">-</th>
		</tr>
	</thead>
	<tbody>
<?php
	$r = 0;
	$produkty = $wpdb->get_results("SELECT nazov, id, verzia, datum, poznamka, download_win, download_lin, download_mac, download_port, changelog FROM mozsk_produkty ORDER BY nazov ASC, id DESC");
	if($produkty)
	{
		foreach ($produkty as $produkt) 
		{
			if($r % 2) echo '<tr>';
			else echo '<tr class="alternate">';
			
			$df = get_settings('date_format');
			$datum = mysql2date($df, $produkt->datum);

			echo "<th scope=\"row\">{$produkt->id}</th>";
			echo "<td>{$produkt->nazov}</td>";
			echo "<td style=\"text-align:center\">{$produkt->verzia}</td>";
			echo "<td style=\"text-align:center\">$datum</td>";
			echo '<td width="20">'; if ($produkt->download_win) echo '<a href="'.htmlspecialchars($produkt->download_win).'"><img src="/wp-content/images/logo/win_small.png" alt="Windows" /></a>'; echo '</td>';
			echo '<td width="20">'; if ($produkt->download_lin) echo '<a href="'.htmlspecialchars($produkt->download_lin).'"><img src="/wp-content/images/logo/lin_small.png" alt="Linux" /></a>'; echo '</td>';
			echo '<td width="20">'; if ($produkt->download_mac) echo '<a href="'.htmlspecialchars($produkt->download_mac).'"><img src="/wp-content/images/logo/mac_small.png" alt="Mac OS" /></a>'; echo '</td>';
			echo '<td width="20">'; if ($produkt->download_port) echo '<a href="'.htmlspecialchars($produkt->download_port).'"><img src="/wp-content/plugins/mozsk-rozsirenia/portable.png" alt="'.__('Portable', MOZ_DOMAIN).'" /></a>'; echo '</td>';
			echo '<td width="20">'; if ($produkt->changelog) echo '<a href="'.$produkt->changelog.'"><img src="/mozilla-16.png" alt="'.__('Changelog', MOZ_DOMAIN).'" /></a>'; echo '</td>';
			echo '<td>'.$produkt->poznamka.'</td>';
			echo '<td><a href="#" class="edit" onclick="mskcms_Edit('.$produkt->id.')">'.__('Edit', MOZ_DOMAIN).'</a></td>';
			echo '<td><a href="#" class="edit" onclick="mskcms_NuVer('.$produkt->id.')">+'.__('Version', MOZ_DOMAIN).'</a></td>';
			echo '<td><a href="#" class="delete" onclick="mskcms_AskDel('.$produkt->id.')">'.__('Delete', MOZ_DOMAIN).'</a></td>';
			echo '</tr>';
			$r++;
		}
	}	
	else
	{
		echo '<tr><td colspan="6">'.__('There are no products in database.', MOZ_DOMAIN).'</td></tr>';
	}
?>
	</tbody>
	</table>
	</div>
	<div class="submit">
		<input id="ok-submit" type="submit" name="ok-submit" value="<?php echo __('Add product', MOZ_DOMAIN) ?> &raquo;" />
	</div>
	<input id="todo" name="todo" type="hidden" value="pridat"/>
	<input id="param1" name="param1" type="hidden" value=""/>
</form>