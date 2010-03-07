<?php
	$download = $this->getDownload('thunderbird');
	switch($type):
		case 'page':
?>

<p><strong>Thunderbird <?php echo $download->getVersion()?></strong> je oficiálně dostupný pro Windows 2000 a vyšší, Linux a Mac OS X.
Bližší informace jsou dostupné na stránce <a href="http://www.mozillamessaging.com/en-US/thunderbird/system-requirements/">systémové požadavky</a>.</p>
<div>
	<ul>
		<li class="download-ico-win"><a href="<?php echo $download->getDownloadLink('win')?>">Stáhnout český Thunderbird <?php echo $download->getVersion()?> pro Windows</a></li>
		<li class="download-ico-linux"><a href="<?php echo $download->getDownloadLink('lin')?>">Stáhnout český Thunderbird <?php echo $download->getVersion()?> pro Linux</a></li>
		<li class="download-ico-mac"><a href="<?php echo $download->getDownloadLink('mac')?>">Stáhnout český Thunderbird <?php echo $download->getVersion()?> pro Mac OS X</a></li>
	</ul>
</div>

<p>Bližší informace o aktuální verzi naleznete v <a href="<?php echo $download->getChangelogLink()?>">poznámkách k vydání</a>.</p>
<p>Pokud máte zájem o starší, anglickou či jinou jazykovou verzi, můžete si ji
<a href="http://releases.mozilla.org/pub/mozilla.org/thunderbird/releases/" hreflang="en">stáhnout z webu Mozilla.org</a>.</p>


<h2 class="separator">Samostatný jazykový balíček</h2>
<p>Pro případ, kdy potřebujete počeštit anglickou verzi Thunderbirdu, si můžete stáhnout samostatný lokalizační balíček. Pro snadné přepínání lokalizací si nainstalujte rozšíření <a href="https://addons.mozilla.org/cs/firefox/addon/356">Locale Switcher</a>.</p>
<div>
<ul>
	<li class="download-ico-addon"><a href="<?php echo $download->getDownloadLink('port')?>">Stáhnout lokalizační balíček pro Thunderbird <?php echo $download->getVersion()?></a></li>
</ul>
</div>

<?php
		break;

		case 'sidebar':
		default:
?>

<div class="side-dl"><div class="side-dl-in">
	<a href="<?php echo $download->getDownloadLink()?>" class="side-dl-link">Stáhnout!</a>
	<span>Mozilla Thunderbird <?php echo $download->getVersion()?> pro <?php echo $download->getPlatformName()?>, česká verze</span>
	<a href="/stahnout/" class="side-dl-oth">Další platformy&nbsp;...</a>
</div></div>

<?php
		break;
	endswitch;
?>
