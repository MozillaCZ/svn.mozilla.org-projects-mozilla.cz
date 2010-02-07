<?php
	$downloadData = $this->getDownloadData();
	$platform = $this->getPlatform();
	$key = 'download_' . $platform;
	$url = empty($downloadData[$key]) ? '/stahnout/' : htmlspecialchars($downloadData[$key], ENT_QUOTES);
	$ver = empty($downloadData['verzia']) ? '' : $downloadData['verzia'];
	$platformName = $platform == 'lin' ? 'Linux' : ( $platform == 'mac' ? 'Mac OS' : 'Windows' );
?>
<div class="side-dl"><div class="side-dl-in">
	<a href="<?php echo $url?>" class="side-dl-link">Stáhnout!</a>
	<span>Mozilla Firefox <?php echo $ver?> pro <?php echo $platformName?>, česká verze</span>
	<a href="/stahnout/" class="side-dl-oth">Další platformy&nbsp;...</a>
</div></div>
