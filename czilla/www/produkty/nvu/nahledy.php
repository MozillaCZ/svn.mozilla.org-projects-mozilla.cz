<?php
	require_once '../../inc/page.php';
	$page->setTitle('Nvu - snadné vytváření webových stránek');
	$page->setHeadline('Nvu','Ukázky programu (screenshoty)');
	$page->setKeywords ('nvu, editor, screenshot, mozilla, HTML, XHTML, PHP, WYSIWYG, CSS, FrontPage, Dreamweaver, CaScadeS, Gecko');
	$page->setDescription ('Náhledy na editor webových stránek Nvu');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>
	<div class="obsolete">Vývoj editoru Nvu <strong>byl ukončen</strong>,
	jeho nástupcem s řadou novinek je aplikace <strong><a href="http://www.mozilla.cz/produkty/kompozer/">KompoZer</a></strong>.</div>
	<p>Ukázky vzhledu <a href="./">Nvu</a>:</p>
<?php
	$images = array(
		array('Nvu po spuštění', '', 'images/scr-po-spusteni.png', 'images/scr-po-spusteni-m.png', 200, 150),
		array('Normální režim editace', '', 'images/scr-editace-normalni.png', 'images/scr-editace-normalni-m.png', 200, 150),
		array('Editace zdrojového kódu', '', 'images/scr-zdrojovy-kod.png', 'images/scr-zdrojovy-kod-m.png', 200, 150),
		array('Komplexní CSS editor', '', 'images/scr-css-editor.png', 'images/scr-css-editor-m.png', 200, 150),
		array('Vytváření tabulky', '', 'images/scr-vytvareni-tabulky.png', 'images/scr-vytvareni-tabulky-m.png', 200, 150),
		array('Vlastnosti stránky', '', 'images/scr-vlastnosti-stranky.png', 'images/scr-vlastnosti-stranky-m.png', 200, 150),
		array('Vlastnosti obrázku', '', 'images/scr-vlastnosti-obrazku.png', 'images/scr-vlastnosti-obrazku-m.png', 200, 150),
		array('Vlastnosti odkazu', '', 'images/scr-vlastnosti-odkazu.png', 'images/scr-vlastnosti-odkazu-m.png', 200, 150),
		array('Vlastnosti formuláře', '', 'images/scr-vlastnosti-formulare.png', 'images/scr-vlastnosti-formulare-m.png', 200, 150),
		array('Nastavení publikování stránky', '', 'images/scr-publikovat.png', 'images/scr-publikovat-m.png', 200, 150),
		array('Nastavení programu', '', 'images/scr-moznosti.png', 'images/scr-moznosti-m.png', 200, 150),
		array('Nápověda programu', '', 'images/scr-napoveda.png', 'images/scr-napoveda-m.png', 200, 150)
	);
	$page->includeTemplate('gallery', array('images' => $images));
?>
	<p><a href="./">Zpět na stránku o Nvu</a></p>
<?php
	$page->includeTemplate('footer');
?>
