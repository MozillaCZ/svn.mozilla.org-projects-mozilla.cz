<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Poznámky k vydání verze 1.4');
	$page->setHeadline('Poznámky k vydání','Popis změn a novinek ve verzi 1.4');
	$page->setKeywords ('mozilla, suite, poznámky k vydání, verze, gecko, prohlížeč, poštovní klient, editor, chatzilla');
	$page->setDescription ('Poznámky k vydání historické verze 1.4');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
<p>Tyto <a href="/produkty/suite/poznamky-k-vydani/">poznámky k verzi</a> popisují systémové požadavky, pokyny k instalaci a známé problémy týkající se Mozilly verze 1.4.</p>

<h2>Obsah</h2>
<dl>
<dt><a href="README.php">O Mozille 1.4</a></dt>
	<dd><a href="README.php#new">Co je nového</a></dd>
	<dd><a href="README.php#new-issues">Nové problémy</a></dd>

<dt><a href="installation.php">Pokyny k instalaci</a></dt>
	<dd><a href="installation.php#linux">Linux</a></dd>
	<dd><a href="installation.php#mac">Macintosh</a></dd>
	<dd><a href="installation.php#win">Windows</a></dd>
	<dd><a href="installation.php#files">Vytvořené a používané soubory</a></dd>
	<dd><a href="installation.php#files_profiles">Umístění profilu</a></dd>

<dt><a href="installation-ports.php">Pokyny k instalaci portů Mozilly</a></dt>
<dt><a href="installation-extras.php">Java, plug-iny, a další doplňky</a></dt>
<dt><a href="known-issues.php">Známé problémy</a></dt>
	<dd><a href="known-issues.php#general">Obecné</a></dd>
	<dd><a href="known-issues.php#browser">Prohlížeč (Navigator)</a></dd>
	<dd><a href="known-issues.php#mail">Pošta a diskusní skupiny (Messenger)</a></dd>
	<dd><a href="known-issues.php#composer">Editor (Composer)</a></dd>
	<dd><a href="known-issues.php#venkman">Ladicí program (Debugger) JavaScriptu</a></dd>
	<dd><a href="known-issues-int.php">Problémy s lokalizací</a></dd>
<dt><a href="http://www.mozilla.org/catalog/end-user/">Dokumentace pro uživatele</a></dt>
</dl>

<p><small>Tento dokument je překladem <a href="http://www.mozilla.org/releases/mozilla1.4/" title="Originální dokument">dokumentu</a> z <a href="http://www.mozilla.org/" title="Web neziskové organizace Mozilla Foundation">mozilla.org</a>. Copyright &copy; 1998-2003 The Mozilla Organization</small></p>

<?php
	$page->includeTemplate('footer');
?>
