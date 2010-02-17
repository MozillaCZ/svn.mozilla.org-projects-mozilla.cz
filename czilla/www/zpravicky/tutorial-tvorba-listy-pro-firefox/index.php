<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Tutoriál - tvorba lišty pro Firefox');
	<link rel="shortcut icon" href="../../images/cz-favicon.gif" type="image/gif" />
	<link rel="search" type="application/opensearchdescription+xml" title="CZilla: Vyhledávací modul pro Firefox" href="/doplnky/vyhledavani/moduly/czilla.mozsearch" />
	<link rel="stylesheet" media="screen" type="text/css" title="Styl CZilla.cz"  href="../../css/global.css"/>
	<!--[if ie ]> 	<link rel="stylesheet" media="screen" type="text/css" title="Styl pro IE"  href="../../css/ie.css"/> <![endif]-->
	<link rel="stylesheet" media="print" type="text/css"  href="../../css/global-print.css"/>
	<link rel="stylesheet" media="screen" type="text/css"  href="../../css/hide-panels.css"/>
	<link rel="alternate" type="application/rss+xml" title="CZilla RSS Zprávičky" href="/rss/zpravicky/"/>
	<script src="../../js/global.js" charset="iso-8859-2" type="text/javascript"></script>
	<!--[if ie ]> 	<script src="../../js/hreflang.js" charset="iso-8859-2" type="text/javascript"></script>	<![endif]-->
	<script src="../../js/hide-panels.js" charset="iso-8859-2" type="text/javascript"></script>
<body id="www-czilla-cz">
<div id="czilla-navigation-toolbar"></div>
<div id="obalka-bg">
<div id="top-bg">
	<div id="ltop-bg" onclick="goCZilla()"><div id="logo-cz" onmouseover="window.status='http://www.czilla.cz/'" onmouseout="window.status=''"></div></div>
	<div id="logo-illa" onclick="goCZilla()" onmouseover="window.status='http://www.czilla.cz/'" onmouseout="window.status=''">');
	$page->includeTemplate('header');


<div id="stred-bg">
	$page->setHeadline('Tutoriál - tvorba lišty pro Firefox', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/tutorial-tvorba-listy-pro-firefox/">Tutoriál - tvorba lišty pro Firefox</a></h3>

	<div>Na serveru <a href="http://www.borngeek.com/" hreflang="en">Born Geek</a> se objevil <a href="http://www.borngeek.com/firefox/tutorial/" title="Born Geek: Firefox Toolbar Tutorial" hreflang="en">pěkný tutoriál</a>, provázející čtenáře vývojem rozšíření - lišty pro <a href="/produkty/firefox/">Firefox</a>. Tutoriál u čtenáře nepředpokládá vůbec žádné předběžné znalosti o tvorbě rozšíření a ukazuje vše od prvních krůčků a potřebných nástrojů až po finální zabalení do distribučního souboru a otestování.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/03/21/">21. 3. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/rozsireni/">Rozšíření</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/03/21/">Ze stejného dne</a></dd>
				<dd><a href="../2005/03/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
