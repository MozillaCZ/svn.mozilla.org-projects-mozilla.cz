<?php
	$rootPath = '../../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Mozilla často kladené otázky';
	$page->headline = array('Často kladené otázky','Mozilla FAQ: 5. Adresář (databáze kontaktů)');

	$page->includeHeader();
?>

<ul><li><a href="#5.1">5.1. Jak přenesu adresář z nebo do jiného programu?</a></li></ul>


<dl class="faq">
<dt id="question-5.1"><a name="5.1">
5.1. Jak přenesu adresář z nebo do jiného programu?</a></dt>
<dd id="answer-5.1">
<p>Otevřete Adresář [Address Book] a jděte do Tools | Import nebo Tools | Export. Každý z nich
vyvolá dialog, který vás povede procesem přenosu adresáře.
Mozilla používá k ukládání formát LDIF.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
</dl>

<?php
	$page->includeFooter();
?>