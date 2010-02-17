<?php
	require_once '../../inc/page.php';
	$page->setTitle('Tutoriál "Mozilla jako GUI toolkit"');
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
	$page->setHeadline('Tutoriál "Mozilla jako GUI toolkit"', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/tutorial-mozilla-jako-gui-toolkit/">Tutoriál &quot;Mozilla jako GUI toolkit&quot;</a></h3>

	<div>Jan Ditrich se ve své semestrální práci věnoval <a href="/produkty/suite/">Mozille</a>. S laskavým dovolením autora ji zveřejňujeme formou tutoriálu <a href="/vyvojari/aplikace/mozilla-jako-gui-toolkit/">Mozilla jako GUI toolkit</a>. Uvítají jej vývojáři, kteří uvažují o postavení své aplikace na Mozille co by platformě. Součástí tutoriálu je <a href="/vyvojari/aplikace/mozilla-jako-gui-toolkit/zaver.html#download">ukázková XPCOM komponenta</a> se zdrojovými kódy. Pokud by vás tutoriál přiměl zajímat se o tuto oblast hlouběji, určitě sáhněte po zdarma dostupné knize <a href="http://www.slunecnice.cz/product/Creating-XPCOM-Components/">Creating XPCOM Components</a> nebo dalších <a href="/mozcestnik/?sect=38">knihách pro vývojáře</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/12/01/">1. 12. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Další zprávičky:</dt>
				<dd><a href="../2004/12/01/">Ze stejného dne</a></dd>
				<dd><a href="../2004/12/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

