<?php

	$inc_path		= "../inc/";
	include($inc_path . "config.inc");

	$webstats = false;

	function send_404_mail() {
		global $bad_url;

		$mail = "aha@czilla.cz";
		$subject = "f.c.c - stranka 404";
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

		$msg = "f.c.c - pozadavek na neexistujici URL\n";
		$msg .= "URL: $bad_url\n";
		$msg .= "Referer: $refer\n";
		$msg .= "UA: $ua\n";

		$rv = @mail($mail, $subject, $msg, $extraheader);
	}

	$bad_url = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	$redirect_to_url = "";

	// zde se zaridi pripadna presmerovani na spravne stranky

	// /
	if (($bad_url == $web_url . "prejdete")
		|| ($bad_url == $web_url . "!")
		|| ($bad_url == $web_url . "/index.html")
		|| ($bad_url == $web_url . "index.html")
		|| ($bad_url == $web_url . "index.htm")
		|| ($bad_url == $web_url . "index.swf")
		|| ($bad_url == $web_url . "-----------------kokni")
		|| ($bad_url == $web_url . "http://firefox.czilla.cz/")
		|| ($bad_url == $web_url . ",")
		|| ($bad_url == $web_url . "*")
		|| ($bad_url == $web_url . "%22")
		|| ($bad_url == $web_url . "%5C%22")
		|| ($bad_url == $web_url . "\"><img")
		|| ($bad_url == $web_url . "\\\"><img")
		|| ($bad_url == $web_url . "%5D")
		|| ($bad_url == $web_url . "default.htm")
		|| ($bad_url == $web_url . "Default.htm")
		|| ($bad_url == $web_url . "start/")
		|| ($bad_url == $web_url . "start")
		|| ($bad_url == $web_url . "]sem[/A]")
		|| ($bad_url == $web_url . "\"><img")
		|| ($bad_url == $web_url . ")")
		|| ($bad_url == $web_url . ",ale")
		|| ($bad_url == $web_url . ")?")
		|| ($bad_url == $web_url . "firefox/")
		|| ($bad_url == $web_url . ">")
		|| ($bad_url == $web_url . "&e=9813")
		|| ($bad_url == $web_url . "&e=747")
		|| ($bad_url == $web_url . "%20target="))
		$redirect_to_url = $web_url;

	// /css/global.css
	if (($bad_url == $web_url . "propagace/css/global.css")
		|| ($bad_url == $web_url . "stahnout/css/global.css1")
		|| ($bad_url == $web_url . "proc-prejit/css/global.css1")
		|| ($bad_url == $web_url . "stahnout/css/global.css")
		|| ($bad_url == $web_url . "propagace//css/global.css")
		|| ($bad_url == $web_url . "css/gobal.css")
		|| ($bad_url == $web_url . "css-global.css")
		|| ($bad_url == $web_url . "global.css")
		|| ($bad_url == $web_url . "css/global")
		|| ($bad_url == $web_url . "media/css/global.css"))
		$redirect_to_url = $web_url."css/global.css";

	// /img/*
	if ($bad_url == $web_url . "img/back.png")
		$redirect_to_url = $web_url."img/back.gif";
	if ($bad_url == $web_url . "\"/img/bullet.gif\"")
		$redirect_to_url = $web_url."/img/bullet.gif";
	if (($bad_url == $web_url . "\"/img/h-butt.gif\"")
		|| ($bad_url == $web_url . "\\\"/img/h-butt.gif\\\""))
		$redirect_to_url = $web_url."img/h-butt.gif";
	if ($bad_url == $web_url . "\"/img/h-logo.png\"")
		$redirect_to_url = $web_url."img/h-logo.png";
	if (($bad_url == $web_url . "img/p/cz-ff-120x60-objevte.gif")
		|| ($bad_url == $web_url . "img/p/cz-ff-120x60-objevt"))
		$redirect_to_url = $web_url."img/p/cz-ff-120x60-objevte.png";
	if ($bad_url == $web_url . "img/p/cz-ff-174x72-objevte.png%3Cbr%20/%3Ealt=")
		$redirect_to_url = $web_url."img/p/cz-ff-174x72-objevte.png";
	if ($bad_url == $web_url . "img/p/cz-ff-180x60-zpatky.gif%22")
		$redirect_to_url = $web_url."img/p/cz-ff-180x60-zpatky.gif";
	if (($bad_url == $web_url . "img/p/cz-ff-468x60-w-verit.gif")
		|| ($bad_url == $web_url . "img/p/cz-ff-468x60-w-verit%20<hr%20style=")
		|| ($bad_url == $web_url . "img/p/cz-ff-468x60-w-verit%20%3Chr%20style="))
		$redirect_to_url = $web_url."img/p/cz-ff-468x60-w-verit.png";
	if ($bad_url == $web_url . "img/p/cz-ff-88x31.gif/")
		$redirect_to_url = $web_url."img/p/cz-ff-88x31.gif";
	if ($bad_url == $web_url . "img/p/cz-ff-88x31-kontrola.png")
		$redirect_to_url = $web_url."img/p/cz-ff-88x31-kontrola.gif";
	if (($bad_url == $web_url . "img/p/cz-ff-88x31-objevte.png")
		|| ($bad_url == $web_url . "img/p/cz-ff-88x31"))
		$redirect_to_url = $web_url."img/p/cz-ff-88x31-objevte.gif";
	if (($bad_url == $web_url . "img/p/cz-ff-88x31-trans.gif")
		|| ($bad_url == $web_url . "img/p/cz-ff-88x31-trans.png/"))
		$redirect_to_url = $web_url."img/p/cz-ff-88x31-trans.png";
	if (($bad_url == $web_url . "img/p/cz-ff-88x30-zkuste.gif")
		|| ($bad_url == $web_url . "img/p/cz-ff-88x31-zkuste.jpg")
		|| ($bad_url == $web_url . "img/p/cz-ff-88x31-zkuste.gif/"))
		$redirect_to_url = $web_url."img/p/cz-ff-88x31-zkuste.gif";
	if ($bad_url == $web_url . "img/p/cz-jaff-125x125.gif%22")
		$redirect_to_url = $web_url."img/p/cz-jaff-125x125.gif";
	if ($bad_url == $web_url . "img/p/sfx-ff-80x15-white.gif%3Ca%20href=")
		$redirect_to_url = $web_url."img/p/sfx-ff-80x15-white.gif";
	if ($bad_url == $web_url . "img/p/sfx-iff-90x90.gif%20alt=")
		$redirect_to_url = $web_url."img/p/sfx-iff-90x90.gif";
	if ($bad_url == $web_url . "img/w/w-1-tbtw-174x130.jpgtitle=Tapeta")
		$redirect_to_url = $web_url."img/w/w-1-tbtw-174x130.jpg";
	if ($bad_url == $web_url . "img/w/w-1-tbtw-1024x768.jpg.ed2k")
		$redirect_to_url = $web_url."img/w/w-1-tbtw-1024x768.jpg";
	if ($bad_url == $web_url . "img/w/w-2-rtw-navylight-174x130.jpgtitle=Tapeta")
		$redirect_to_url = $web_url."img/w/w-2-rtw-navylight-174x130.jpg";
	if ($bad_url == $web_url . "img/w/w-2-rtw-navylight-1024x768.jpg.ed2k")
		$redirect_to_url = $web_url."img/w/w-2-rtw-navylight-1024x768.jpg";
	if ($bad_url == $web_url . "img/w/w-3-sfb-hot-1024x768.jpg.ed2k")
		$redirect_to_url = $web_url."img/w/w-3-sfb-hot-1024x768.jpg";
	if ($bad_url == $web_url . "img/w/w-3-sfb-hot-174x130.jpgtitle=Tapeta")
		$redirect_to_url = $web_url."img/w/w-3-sfb-hot-174x130.jpg";
	if ($bad_url == $web_url . "img/w/w-4-rtw-ice-174x130.jpgtitle=Tapeta")
		$redirect_to_url = $web_url."img/w/w-4-rtw-ice-174x130.jpg";
	if ($bad_url == $web_url . "img/w/w-5-tbtw-strings-1024x768.jpg.ed2k")
		$redirect_to_url = $web_url."img/w/w-5-tbtw-strings-1024x768.jpg.ed2k";
	if ($bad_url == $web_url . "img/w/whttp://firefox.czilla.cz/stahnout/-5-tbtw-strings-1280x1024.jpg")
		$redirect_to_url = $web_url."img/w/w-5-tbtw-strings-1280x1024.jpg";
	if ($bad_url == $web_url . "img/w/w-5-tbtw-strings-174x130.jpgtitle=Tapeta")
		$redirect_to_url = $web_url."img/w/w-5-tbtw-strings-174x130.jpg";
	if ($bad_url == $web_url . "img/w/wep-5.j%20pg")
		$redirect_to_url = $web_url."img/w/wep-5.jpg";

	// /media/
	if (($bad_url == $web_url . "madia")
		|| ($bad_url == $web_url . "proc-prejit/media/")
		|| ($bad_url == $web_url . "%20media/")
		|| ($bad_url == $web_url . "mediahh")
		|| ($bad_url == $web_url . "%20media"))
		$redirect_to_url = $web_url."media/";

	// /otazky/
	if (($bad_url == $web_url . "otazky%bf")
		|| ($bad_url == $web_url . "otazky%b7")
		|| ($bad_url == $web_url . "otazky/default.htm")
		|| ($bad_url == $web_url . "to.cs/otazkyx")
		|| ($bad_url == $web_url . "proc-prejit/otazky/")
		|| ($bad_url == $web_url . "to.cs/otazkyo"))
		$redirect_to_url = $web_url."otazky/";

	// /otazky/klavesove-zkratky/
	if (($bad_url == $web_url . "otazky/klavesove-zkratky/zkratky")
		|| ($bad_url == $web_url . "otazky%bfklavesove-zkratky/")
		|| ($bad_url == $web_url . "klavesove_zkratky")
		|| ($bad_url == $web_url . "otazky%b7klavesove-zkratky/")
		|| ($bad_url == $web_url . "otazkyklavesove-zkratky/")
		|| ($bad_url == $web_url . "otazky/klavesove-zkratky%22")
		|| ($bad_url == $web_url . "jak-prejit/otazky/klavesove-zkratky/")
		|| ($bad_url == $web_url . "klavesove-zkratky/"))
		$redirect_to_url = $web_url."otazky/klavesove-zkratky/";

	// /otazky/ovladani-mysi/
	if (($bad_url == $web_url . "to.cs/otazkyoovladani-mysi/")
		|| ($bad_url == $web_url . "ovladani-mysi/")
		|| ($bad_url == $web_url . "otazky%b7ovladani-mysi/")
		|| ($bad_url == $web_url . "otazky%bfovladani-mysi/")
		|| ($bad_url == $web_url . "otazkyovladani-mysi/"))
		$redirect_to_url = $web_url."otazky/ovladani-mysi/";

	// /otazky/rozdily-terminologie/
	if ($bad_url == $web_url . "rozdily-terminologie/")
		$redirect_to_url = $web_url."otazky/rozdily-terminologie/";

	// /proc-prejit/
	if (($bad_url == $web_url . "to.cs/proc-prejito")
		|| ($bad_url == $web_url . "proc-prejitH")
		|| ($bad_url == $web_url . "proc-prejit/\"")
		|| ($bad_url == $web_url . "proc-prejit/\\\"")
		|| ($bad_url == $web_url . "proc-pouzivat/")
		|| ($bad_url == $web_url . "%20proc-prejit/")
		|| ($bad_url == $web_url . "proc-prejith")
		|| ($bad_url == $web_url . "/proc-prejitn")
		|| ($bad_url == $web_url . "proc-prejit/,")
		|| ($bad_url == $web_url . "proc-prejitX")
		|| ($bad_url == $web_url . "proc-prejit/default.htm")
		|| ($bad_url == $web_url . "proc-prejit%a4")
		|| ($bad_url == $web_url . "jak-prejit/proc-prejit/")
		|| ($bad_url == $web_url . "/proc-prejit/%20ahojky")
		|| ($bad_url == $web_url . "prejit,"))
		$redirect_to_url = $web_url."proc-prejit/";

	// /proc-prejit/co-msie-neumi-a-firefox-ano/
	if ($bad_url == $web_url . "co-msie-neumi-a-firefox-ano/")
		$redirect_to_url = $web_url."proc-prejit/co-msie-neumi-a-firefox-ano/";

	// /propagace/
	if (($bad_url == $web_url . "propagace/cz@firefox.czilla.cz")
		|| ($bad_url == $web_url . "propagace/sb")
		|| ($bad_url == $web_url . "propagace/\"")
		|| ($bad_url == $web_url . "propagace/&quot")
		|| ($bad_url == $web_url . "propagace/\\\"")
		|| ($bad_url == $web_url . "propagace%ff"))
		$redirect_to_url = $web_url."propagace/";

	// /propagace/srdicka/
	if (($bad_url == $web_url . "propagace/srdick")
		|| ($bad_url == $web_url . "propagace./srdicka/"))
		$redirect_to_url = $web_url."propagace/srdicka/";

	// /robots.txt
	if ($bad_url == $web_url . "robotsxx.txt")
		$redirect_to_url = $web_url."robots.txt";

	// /stahnout/
	if (($bad_url == $web_url . "stahnout/sb")
		|| ($bad_url == $web_url . "download/mozilla.html")
		|| ($bad_url == $web_url . "proc-prejit/stahnout/")
		|| ($bad_url == $web_url . "stahnute")
		|| ($bad_url == $web_url . "st%C3%A1hnout/")
		|| ($bad_url == $web_url . "download/")
		|| ($bad_url == $web_url . "download")
		|| ($bad_url == $web_url . "stahuj/")
		|| ($bad_url == $web_url . "stahuj")
		|| ($bad_url == $web_url . "stahnou")
		|| ($bad_url == $web_url . "stahnout.")
		|| ($bad_url == $web_url . "stahnout,")
		|| ($bad_url == $web_url . "stahnout%ee")
		|| ($bad_url == $web_url . "stahnout%2F")
		|| ($bad_url == $web_url . "STAHNOUT")
		|| ($bad_url == $web_url . "stahnout/,")
		|| ($bad_url == $web_url . "STAHUJ")
 		|| ($bad_url == $web_url . "Stahuj")
 		|| ($bad_url == $web_url . "sthuj")
		|| ($bad_url == $web_url . "STAHUJ/")
		|| ($bad_url == $web_url . "statnout/")
		|| ($bad_url == $web_url . "stahuj/")
		|| ($bad_url == $web_url . "stahnout/-getrightdownload")
		|| ($bad_url == $web_url . "stahnout/\"")
		|| ($bad_url == $web_url . "stahnout/\\\\")
		|| ($bad_url == $web_url . "stahnout.cz")
		|| ($bad_url == $web_url . "stahniut"))
		$redirect_to_url = $web_url."stahnout/";

	// /stahnout/tapety/
	if (($bad_url == $web_url . "walpers")
		|| ($bad_url == $web_url . "pozadi")
		|| ($bad_url == $web_url . "propagace/tapety/")
		|| ($bad_url == $web_url . "stahnout/tapety/,")
		|| ($bad_url == $web_url . "stahnout./tapety/")
		|| ($bad_url == $web_url . "stahnout/tapeta/"))
		$redirect_to_url = $web_url."stahnout/tapety/";

	// /zkusenosti/
	if (($bad_url == $web_url . "zkusenosti%bf")
		|| ($bad_url == $web_url . "%20zkusenosti/")
		|| ($bad_url == $web_url . "zkusenosti%b7")
		|| ($bad_url == $web_url . "zkusenosti/\"")
		|| ($bad_url == $web_url . "zkusenosti/\\\"")
		|| ($bad_url == $web_url . "zkusenosti@"))
		$redirect_to_url = $web_url."zkusenosti/";

	// /zkusenosti/robert-madaj/
	if ($bad_url == $web_url . 'zkusenosti/robert-madaj/\"')
		$redirect_to_url = $web_url."zkusenosti/robert-madaj/";

	// Outside CZilla
	if ($bad_url == $web_url . "aktualni-zalozky.html")
		$redirect_to_url = "http://www.czilla.cz/podpora/firefox/aktualni-zalozky.html";
	if ($bad_url == $web_url . "viewforum.php?f=18")
		$redirect_to_url = "http://forum.czilla.cz/viewforum.php?f=18";
	if ($bad_url == $web_url . "forum")
		$redirect_to_url = "http://forum.czilla.cz/";
	if (($bad_url == $web_url . "doplnky")
		|| ($bad_url == $web_url . "doplnky/"))
		$redirect_to_url = "http://www.czilla.cz/doplnky/";
	if (($bad_url == $web_url . "rozsireni")
		|| ($bad_url == $web_url . "doplnky/rozsireni.")
		|| ($bad_url == $web_url . "doplnky/rozsireni")
		|| ($bad_url == $web_url . "doplnky/rozsireni/")
		|| ($bad_url == $web_url . "/doplnky%2Frozsireni%2Ffirefox.html"))
		$redirect_to_url = "http://www.czilla.cz/doplnky/rozsireni/";
	if ($bad_url == $web_url . "zkusenosti/jaroslav-maly/www.czilla.cz")
		$redirect_to_url = "http://www.czilla.cz/";

	// Outside
	if (($bad_url == $web_url . "www.seznam.cz")
		|| ($bad_url == $web_url . "seznam.cz"))
		$redirect_to_url = "http://www.seznam.cz/";
	if (($bad_url == $web_url . "googlecom")
		|| ($bad_url == $web_url . "%20www.google.com.")
		|| ($bad_url == $web_url . "www.google.com")
		|| ($bad_url == $web_url . "www.google.com.")
		|| ($bad_url == $web_url . "google"))
		$redirect_to_url = "http://www.google.com/";
	if ($bad_url == $web_url . "www.atlas.cz")
		$redirect_to_url = "http://www.atlas.cz/";
	if ($bad_url == $web_url . "slunecnice")
		$redirect_to_url = "http://www.slunecnice.cz/";
	if (($bad_url == $web_url . "www.centrum.cz/")
		|| ($bad_url == $web_url . "centrum")
		|| ($bad_url == $web_url . "www.centrum.cz"))
		$redirect_to_url = "http://www.centrum.cz/";
	if ($bad_url == $web_url . "www.vyvoleny.sk.")
		$redirect_to_url = "http://www.vyvoleny.sk/";
	if ($bad_url == $web_url . "NAVRCHOLU.cz")
		$redirect_to_url = "http://navrcholu.cz/";
	if ($bad_url == $web_url . "www.idnes.cz")
		$redirect_to_url = "http://www.idnes.cz/";
	if ($bad_url == $web_url . "stahnout/tapety/takebacktheweb.org")
		$redirect_to_url = "http://takebacktheweb.org/";

/*
	if ($bad_url == $web_url . "")
		$redirect_to_url = $web_url."";

	if ($bad_url == $web_url . "")
		$redirect_to_url = $web_url."";

	if ($bad_url == $web_url . "")
		$redirect_to_url = $web_url."";

	if ($bad_url == $web_url . "")
		$redirect_to_url = $web_url."";

	if ($bad_url == $web_url . "")
		$redirect_to_url = $web_url."";
*/

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
	<a href="/" hreflang="cs">Switch To Firefox</a>
	website. Please check its location if it has been typed correctly. If
	you have reached this URL via a linkfrom another page on CZilla site or
	elsewhere, please inform our
	<?php echo "<a href=\"mailto:webmaster@czilla.cz?subject=404 $bad_url\">webmaster</a>.</p>"; ?>

	<p lang="en">Homepage of <a href="/" hreflang="cs">Switch To Firefox</a> site.</p>

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
		<li><a href="http://www.spreadfirefox.com/"
			hreflang="en" class="l-en" lang="en">Spread Firefox</a></li>
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