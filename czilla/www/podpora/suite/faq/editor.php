<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Mozilla často kladené otázky';
	$page->headline = array('Často kladené otázky','Mozilla FAQ: 4. Editor (Composer)');

	$page->includeHeader();
?>


<ul><li><a href="#4.1">4.1. Mohu v editoru vytvářet Kaskádové styly (CSS)?</a></li></ul>


<dl class="faq">
<dt id="question-4.1"><a name="4.1">4.1. Mohu v editoru vytvářet Kaskádové styly (CSS)?</a></dt>
<dd id="answer-4.1">
<p>Editor je určen pouze k editování základních webových stránek.
CSS editor je vyvíjen na <a href="http://cascades.mozdev.org/">CaScadeS</a>.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
</dl>

<?php
	$page->includeFooter();
?>