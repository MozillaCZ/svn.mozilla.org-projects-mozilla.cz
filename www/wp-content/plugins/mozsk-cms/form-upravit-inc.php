<table cellpadding="2" cellspacing="2" border="0" style="text-align: left; width: 95%;">
<tbody>
	<tr>
		<td style="width:15%"><label for="nazov"><?php echo __('Name', MOZ_DOMAIN) ?></label></td>
		<td><input type="text" id="nazov" name="nazov" size="50" value="<?php echo $nazov; ?>" /> </td>
	</tr>
	<tr>
		<td><label for="urlid"><?php echo __('Text ID', MOZ_DOMAIN) ?></label></td>
		<td><input type="text" id="urlid" name="urlid" size="50" value="<?php echo $urlid; ?>" />  (<?php echo __('just ASCII, numbers or minus', MOZ_DOMAIN) ?>)</td>
	</tr>
	<tr>
		<td><label for="datum"><?php echo __('Date', MOZ_DOMAIN) ?></label></td>
		<td><input id="datum" name="datum" type="text" value="<?php echo $datum; ?>" size="10"/> (<?php echo __('format RRRR-MM-DD', MOZ_DOMAIN) ?>)</td>
	</tr>
	<tr>
		<td><label for="verzia"><?php echo __('Version', MOZ_DOMAIN) ?></label></td>
		<td><input id="verzia" name="verzia" type="text" size="20" value="<?php echo $verzia; ?>" /></td>
	</tr>
	<tr>
		<td colspan="2"><h3><?php echo __('Download', MOZ_DOMAIN) ?></h3></td>
	</tr>
	<tr>
		<td><label for="changelog"><?php echo __('Changelog', MOZ_DOMAIN) ?></label></td>
		<td><input id="changelog" name="changelog" type="text" size="82" value="<?php echo $changelog; ?>" />&nbsp;<img onclick="document.getElementById('changelog').value=''" src="<?php echo WP_PLUGIN_URL ?>/mozsk-cms/clear.png" alt="<?php echo __('Clear', MOZ_DOMAIN) ?>" /></td>
	</tr>
	<tr>
		<td><label for="download_win"><?php echo __('Windows', MOZ_DOMAIN) ?></label></td>
		<td><input name="download_win" type="text" id="download_win" size="82" value="<?php echo $download_win; ?>" />&nbsp;<img onclick="document.getElementById('download_win').value=''" src="<?php echo WP_PLUGIN_URL ?>/mozsk-cms/clear.png" alt="<?php echo __('Clear', MOZ_DOMAIN) ?>" /> <input id="velkwin" name="velkwin" type="text" size="4" value="<?php echo $velkwin; ?>" /> MB</td>
	</tr>
	<tr>
		<td><label for="download_lin"><?php echo __('Linux', MOZ_DOMAIN) ?></label></td>
		<td><input name="download_lin" type="text" id="download_lin" size="82" value="<?php echo $download_lin; ?>" />&nbsp;<img onclick="document.getElementById('download_lin').value=''" src="<?php echo WP_PLUGIN_URL ?>/mozsk-cms/clear.png" alt="<?php echo __('Clear', MOZ_DOMAIN) ?>" /> <input id="velklin" name="velklin" type="text" size="4" value="<?php echo $velklin; ?>" /> MB</td>
	</tr>
	<tr>
		<td><label for="download_mac"><?php echo __('Mac OS X', MOZ_DOMAIN) ?></label></td>
		<td><input name="download_mac" type="text" id="download_mac" size="82" value="<?php echo $download_mac; ?>" />&nbsp;<img onclick="document.getElementById('download_mac').value=''" src="<?php echo WP_PLUGIN_URL ?>/mozsk-cms/clear.png" alt="<?php echo __('Clear', MOZ_DOMAIN) ?>" /> <input id="velkmac" name="velkmac" type="text" size="4" value="<?php echo $velkmac; ?>" /> MB</td>
	</tr>
	<tr>
		<td><label for="download_port"><?php echo __('Portable', MOZ_DOMAIN) ?></label></td>
		<td><input name="download_port" type="text" id="download_port" size="82" value="<?php echo $download_port; ?>" />&nbsp;<img onclick="document.getElementById('download_port').value=''" src="<?php echo WP_PLUGIN_URL ?>/mozsk-cms/clear.png" alt="<?php echo __('Clear', MOZ_DOMAIN) ?>" /> <input id="velkport" name="velkport" type="text" size="4" value="<?php echo $velkport; ?>" /> MB</td>
	</tr>
	<tr>

	<script type="text/javascript">
  /* <![CDATA[ */
    	function setReleaseNotesUrl() {
    		var productName = document.getElementById('urlid');
    		if (productName.value != 'seamonkey') {
					document.getElementById('changelog').value='http://www.mozilla.com/<?php echo MOZ_LANG ?>/'+document.getElementById('urlid').value+'/'+document.getElementById('verzia').value+'/releasenotes/';
				} else {
					document.getElementById('changelog').value='http://www.seamonkey-project.org/releases/seamonkey'+document.getElementById('verzia').value+'/';
				}
			}
  /* ]]> */
  </script>
		
		<td></td><td><input type="button" class="button" onclick="setReleaseNotesUrl();
													document.getElementById('download_win').value='http://download.mozilla.org/?product='+document.getElementById('urlid').value+'-'+document.getElementById('verzia').value+'&amp;os=win&amp;lang=<?php echo MOZ_LANG ?>';
													document.getElementById('download_lin').value='http://download.mozilla.org/?product='+document.getElementById('urlid').value+'-'+document.getElementById('verzia').value+'&amp;os=linux&amp;lang=<?php echo MOZ_LANG ?>';
													document.getElementById('download_mac').value='http://download.mozilla.org/?product='+document.getElementById('urlid').value+'-'+document.getElementById('verzia').value+'&amp;os=osx&amp;lang=<?php echo MOZ_LANG ?>';
													" value="<?php echo __('Autofill', MOZ_DOMAIN) ?>" /> (<?php echo __('You must fill a version!', MOZ_DOMAIN) ?>)  
	</tr>
	<tr>
		<td colspan="2"><h3><?php echo __('Others', MOZ_DOMAIN) ?></h3></td>
	</tr>
	<tr>
		<td><label for="poznamka"><?php echo __('Note', MOZ_DOMAIN) ?></label></td>
		<td><textarea id="poznamka" name="poznamka" cols="80" rows="4"><?php echo $poznamka; ?></textarea></td>
	</tr>
</tbody>
</table>
