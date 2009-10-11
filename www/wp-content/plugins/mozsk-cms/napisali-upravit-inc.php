<table cellpadding="2" cellspacing="2" border="0" style="text-align: left; width: 95%;">
<tbody>
	<tr>
		<td style="width:15%"><label for="nazov">Názov</label></td>
		<td><input type="text" id="nazov" name="nazov" size="75" value="<?php echo $nazov; ?>" /> </td>
	</tr>
	<tr>
		<td><label for="urlid">Odkaz</label></td>
		<td><input type="text" id="odkaz" name="odkaz" size="75" value="<?php echo $odkaz; ?>" /> </td>
	</tr>
	<tr>
		<td><label for="server">Server</label></td>
		<td><select class="filter" size="1" name="server" id="server">
				<option <?php if ('Zive.sk'==$server) echo 'selected="selected" '; ?> value="Zive.sk">Zive.sk</option>
				<option <?php if ('Zive.cz'==$server) echo 'selected="selected" '; ?> value="Zive.cz">Zive.cz</option>
				<option <?php if ('DSL.sk'==$server) echo 'selected="selected" '; ?> value="DSL.sk">DSL.sk</option>
				<option <?php if ('ITNews.sk'==$server) echo 'selected="selected" '; ?> value="ITNews.sk">ITNews.sk</option>
				<option <?php if ('SME.sk'==$server) echo 'selected="selected" '; ?> value="SME.sk">SME.sk</option>
				<option <?php if ('Inet.sk'==$server) echo 'selected="selected" '; ?> value="Inet.sk">Inet.sk</option>
				<option <?php if ('JasnaPaka'==$server) echo 'selected="selected" '; ?> value="JasnaPaka">JasnaPaka</option>
				<option <?php if ('Lupa.cz'==$server) echo 'selected="selected" '; ?> value="Lupa.cz">Lupa.cz</option>
				<option <?php if ('-'==$server) echo 'selected="selected" '; ?> value="-">-</option>
            </select>
            &nbsp;&nbsp; iný: <input id="server_iny" name="server_iny" type="text" value="<?php echo $server_iny; ?>" size="20"/> (berie sa do úvahy, ak vyplnené)
		</td>
	</tr>
	<tr>
		<td><label for="datum">Dátum</label></td>
		<td><input id="datum" name="datum" type="text" value="<?php echo $datum; ?>" size="10"/> (formát RRRR-MM-DD)</td>
	</tr>
	<tr>
		<td><label for="excerpt">Úryvok</label></td>
		<td><textarea id="excerpt" name="excerpt" cols="80" rows="6"><?php echo $excerpt; ?></textarea></td>
	</tr>
</tbody>
</table>
