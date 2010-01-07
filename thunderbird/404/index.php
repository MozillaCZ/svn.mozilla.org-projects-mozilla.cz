<?php

	$inc_path		= "../inc/";
	include($inc_path . "config.inc");

	$webstats = false;

	function send_404_mail() {
		global $bad_url;

		$mail = "aha@czilla.cz";
		$subject = "t.c.c - stranka 404";
		$extraheader = "From: webmaster@czilla.cz\r\n";

		if(array_key_exists("HTTP_REFERER", $_SERVER)) {
			$refer = $_SERVER["HTTP_REFERER"];
		} else {
			$refer = "-";
		}
		if(array_key_exists("HTTP_USER_AGENT", $_SERVER)) {
			$ua = $_SERVER["HTTP_USER_AGENT"];
		} else {
			$ua = "-";
		}

		$msg = "t.c.c - pozadavek na neexistujici URL\n";
		$msg .= "URL: $bad_url\n";	
		$msg .= "Referer: $refer\n";
		$msg .= "UA: $ua\n";

		$rv = @mail($mail, $subject, $msg, $extraheader);
	}

	$bad_url = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	$redirect_to_url = "";

	// zde se zaridi pripadna presmerovani na spravne stranky

	// /
	if (($bad_url == $web_url . "default.htm")
		|| ($bad_url == $web_url . ",")
		|| ($bad_url == $web_url . "%5D")
		|| ($bad_url == $web_url . "%5C%22"))
		$redirect_to_url = $web_url;

	// /otazky/klavesove-zkratky/	
	if ($bad_url == $web_url . "otazky/klavesove-zkratky/zkratky")
		$redirect_to_url = $web_url."otazky/klavesove-zkratky/";

	// /stahnout
	if ($bad_url == $web_url . "download/thunderbird.html")
		$redirect_to_url = $web_url."stahnout/";

	// /css/
	if ($bad_url == $web_url . "media/css/global.css")
		$redirect_to_url = $web_url."css/global.css";


	// Outside - CZilla
	if (($bad_url == $web_url . "rozsireni")
		|| ($bad_url == $web_url . "doplnky/rozsireni."))
		$redirect_to_url = "http://www.czilla.cz/doplnky/rozsireni/";

	if ($bad_url == $web_url . "help/thunderbird/tutorial5.html")
		$redirect_to_url = "http://www.czilla.cz/podpora/thunderbird/tutorial/antispamovy-filtr.html";
	if ($bad_url == $web_url . "help/thunderbird/tutorial6.html")
		$redirect_to_url = "http://www.czilla.cz/podpora/thunderbird/tutorial/import.html";

	if ($redirect_to_url != "")
	{
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".$redirect_to_url);
		header("Connection: close");
		exit;
	}

	// nepresmerovali jsme, je treba poslat mail upozornujici na problem
	// ale ne ve vsech pripadech chceme byt otravovani
	$ignore_404 = false;

	// dotazy, ktere chci ignorovat
	if (preg_match("/\/_vti_bin\//", $bad_url))
		$ignore_404 = true;

	if (!$ignore_404) {
		// dej mi vedet, co jsme zatim neosefovali
	    send_404_mail();
	}


	setTitle("Dokument nenalezen / Document not found");
	$page_desc		= "";
	$page_keywords	= "";
	$inc_path		= "../inc/";

	include($inc_path . "h_head.inc");
	include($inc_path . "x_header.inc");

?>
<div class="main">

	<h1>Dokument nenalezen (404)</h1>

	<p>Tento dokument nebyl na serveru 
	<a href="/"><?php echo $web_name; ?></a> projektu 
	<a href="http://www.czilla.cz/">CZilla</a>
	nalezen. Zkontrolujte prosím její adresu, je-li zadaná správně. Pokud
	jste se na tuto adresu dostali klepnutím na odkaz na stránkách serveru
	CZilla, či jinde, informujte prosím o&nbsp;tom našeho
	<?php echo "<a href=\"mailto:webmaster@czilla.cz?subject=404 $bad_url\">webmastera</a>.</p>"; ?>

	<p>Domovská stránka serveru <a href="/"><?php echo $web_name; ?></a>.</p>

	<hr />

	<p lang="en">This document was not found on
	<a href="/" hreflang="cs">Use Thunderbird</a>
	website. Please check its location if it has been typed correctly. If
	you have reached this URL via a linkfrom another page on CZilla site or
	elsewhere, please inform our
	<?php echo "<a href=\"mailto:webmaster@czilla.cz?subject=404 $bad_url\">webmaster</a>.</p>"; ?>

	<p lang="en">Homepage of <a href="/" hreflang="cs">Use Thunderbird</a> site.</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující informace</h2>

	<h3 class="first">Doporučené servery</h3>

	<ul>
		<li><a href="http://www.czilla.cz/">CZilla</a></li>
		<li><a href="http://www.mozilla-europe.org/cs/"
			hreflang="cs" lang="en">Mozilla Europe</a></li>
		<li><a href="http://www.mozilla.org/"
			hreflang="en" class="l-en" lang="en">Mozilla.org</a></li>
		<li><a href="http://www.mozillazine.org/"
			hreflang="en" class="l-en" lang="en">MozillaZine</a></li>
		<li><a href="http://planet.mozilla.org/"
			hreflang="en" class="l-en" lang="en">Planet Mozilla</a></li>
	</ul>

</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $web_name; ?></a> &gt;
		<strong>Dokument nenalezen</strong>
	</p>
</div>
<?php

	include($inc_path . "x_footer.inc");

?>
