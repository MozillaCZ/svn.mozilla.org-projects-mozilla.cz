<?php
error_reporting(0);
ini_set('display_errors', 0);

require 'inc/lastRSS.php';
require 'inc/common.php';

$rss = new lastRSS;
$rss->cache_dir = './cache';
$rss->cache_time = 1200;
$rss->cp = "";
$rss->default_cp = "UTF-8";

define('RSS_HEADER_LENGTH', 80);
define('NEWS_ITEMS', 6);
define('MOZILLA_ITEMS', 7);
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-language" content="cs" />
<title>Mozilla Start</title>
<link rel="stylesheet" href="/start.css" type="text/css" />
<link rel="shortcut icon" href="http://www.mozilla.cz/wp-content/themes/mozillacz/favicon.ico" />
<meta name="copyright" content="Copyright (c) 2009 Mozilla.cz" />
<meta name="author" content="HTML code: Adam Hauner; e-mail: aha@pinknet.cz" />
<meta name="robots" content="index,follow" />
<script type="text/javascript">
<!--
function sf(){document.google.q.focus();}
function setCookie(name, value, days){
	var expiration=new Date();
	expiration.setTime(expiration.getTime()+(days*24*3600*1000));
	document.cookie=name+"="+escape(value)+"; expires="+expiration.toGMTString();
}
-->
</script>
</head>
<body id="start-mozilla-cz" onload="sf();">
<div id="page">
	<div id="head">
		<h1><span>Mozilla Start</span></h1>
		<ul>
			<li><a href="http://www.mozilla.cz/">Mozilla.cz</a></li>
			<li><a href="http://www.mozilla.cz/stahnout/">Stáhnout</a></li>
			<li><a href="http://forum.mozilla.cz/">Fórum</a></li>
			<li><a href="http://www.mozilla-europe.org/cs/firefox/">Firefox</a></li>
			<li><a href="http://www.mozilla-europe.org/cs/products/thunderbird/">Thunderbird</a></li>
		</ul>
	</div>

	<div id="search" class="box">
		<h2><a href="http://www.google.com/webhp?hl=cs&amp;tab=iw&amp;client=firefox-a&amp;rls=org.mozilla:cs-CZ:official_s">Google</a></h2>
		<?php

		require "inc/google-adsense-search.php";

		?>
		<div id="links">
			<a href="http://www.google.com/imghp?hl=cs&amp;tab=wi&amp;client=firefox-a&amp;rls=org.mozilla:cs-CZ:official_s">Obrázky</a>
			&nbsp;
			<a href="http://www.google.com/grphp?hl=cs&amp;tab=wg&amp;client=firefox-a&amp;rls=org.mozilla:cs-CZ:official_s">Skupiny</a>
			&nbsp;
			<a href="http://www.google.com/dirhp?hl=cs&amp;tab=wd&amp;client=firefox-a&amp;rls=org.mozilla:cs-CZ:official_s">Adresář</a>&nbsp;
		</div>
	</div>
<?php
	if (isMozillaSuite() && !ignoreMozillaSuiteUpdate()) {
?>
		<div id="sm-update" class="box">
			<h2><a href="http://www.mozilla.cz/stahnout/#seamonkey">Aktualizujte na SeaMonkey</a></h2>
			<p>
				Vývoj aplikace Mozilla Suite byl ukončen. Doporučujeme vám aplikaci
				<a href="http://www.seamonkey-project.org/">SeaMonkey</a>,
				která nabízí stejný rozsah funkcí, totožné uživatelské rozhraní,
				větší rychlost a&nbsp;navíc řadu zajímavých novinek</a>.
			</p>
			<div>
				<a href="http://www.mozilla.cz/stahnout/#seamonkey">stáhnout SeaMonkey</a> &middot;
				<span onclick="setCookie('ignoreMS17Update',1,300);document.getElementById('sm-update').style.display='none'">již neupozorňovat</span>
			</div>
		</div>
<?php
	}
	if (isOldFirefox() && !ignoreFirefoxUpdate()) {
?>
		<div id="sm-update" class="box">
			<h2><a href="http://www.mozilla.cz/stahnout/#firefox">Aktualizujte na nový Firefox</a></h2>
			<p>
				Používáte starou verzi prohlížeče <a href="http://www.mozilla-europe.org/cs/firefox/">Mozilla Firefox</a>.
				Nová verze aplikace Mozilla Firefox opravuje některé bezpečnostní chyby
				a&nbsp;nabízí nové uživatelské funkce.
			</p>
			<div>
				<a href="http://www.mozilla.cz/stahnout/#firefox">stáhnout Firefox</a> &middot;
				<span onclick="setCookie('ignoreFFUpdate',1,300);document.getElementById('sm-update').style.display='none'">již neupozorňovat</span>
			</div>
		</div>
<?php
	}
?>
	<div id="news" class="box">
		<h2>Novinky</h2>
		<div id="kratce">
			<h3><a href="http://www.ceskenoviny.cz/">České noviny</a></h3>
			<?php
			getRSSHeaders('http://firefox-rss.ceskenoviny.cz/', NEWS_ITEMS);
			?>
		</div>
		<div id="mozilla">
			<h3><a href="http://www.mozilla.cz/">Mozilla.cz</a></h3>
			<?php
			getRSSHeaders('http://www.mozilla.cz/feed/', MOZILLA_ITEMS);
			?>
		</div>
		<div class="cb"><!-- --></div>
	</div>
</div>

<div id="foot">
	<hr />
	<p>
		Copyright &copy; 2009 <a href="http://www.mozilla.cz/">Mozilla.cz</a>.
		&nbsp;Zpravodajství: <a href="http://www.ceskenoviny.cz/">ČeskéNoviny.cz</a>
	</p>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10350415-3");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
