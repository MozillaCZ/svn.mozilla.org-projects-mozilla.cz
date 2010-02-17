<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky, 12. leden 2004');
	$page->setHeadline('Zprávičky, 12. leden 2004', 'Přehled zpráviček ze světa Mozilly, 12. leden 2004');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2004/01/">leden 2004</a>: 	
		
						<a href="/zpravicky/2004/01/02/" title="Počet zpráviček: 1">2.</a>
		 
		|
						<a href="/zpravicky/2004/01/03/" title="Počet zpráviček: 2">3.</a>
		 
		|
						<a href="/zpravicky/2004/01/05/" title="Počet zpráviček: 3">5.</a>
		 
		|
						<a href="/zpravicky/2004/01/07/" title="Počet zpráviček: 3">7.</a>
		 
		|
						<a href="/zpravicky/2004/01/08/" title="Počet zpráviček: 2">8.</a>
		 
		|
						<a href="/zpravicky/2004/01/09/" title="Počet zpráviček: 1">9.</a>
		 
		|
						<strong>12.</strong>
		 
		|
						<a href="/zpravicky/2004/01/13/" title="Počet zpráviček: 2">13.</a>
		 
		|
						<a href="/zpravicky/2004/01/14/" title="Počet zpráviček: 1">14.</a>
		 
		|
						<a href="/zpravicky/2004/01/15/" title="Počet zpráviček: 1">15.</a>
		 
		|
						<a href="/zpravicky/2004/01/16/" title="Počet zpráviček: 2">16.</a>
		 
		|
						<a href="/zpravicky/2004/01/19/" title="Počet zpráviček: 1">19.</a>
		 
		|
						<a href="/zpravicky/2004/01/27/" title="Počet zpráviček: 1">27.</a>
		 
		|
						<a href="/zpravicky/2004/01/28/" title="Počet zpráviček: 2">28.</a>
		 
		|
						<a href="/zpravicky/2004/01/30/" title="Počet zpráviček: 1">30.</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/mozpython-a-mozphp/">MozPython a MozPHP</a></h3>

	<div>Pokud plánujete vyvíjet aplikace pro Mozillu, neměli byste přehlédnout dva relativně nové projekty <a href="http://mozpython.mozdev.org/">MozPython</a> a <a href="http://mozphp.mozdev.org/">MozPHP</a>. Ty totiž umožňují zobrazovat výstupy programů napsaných v <a href="http://www.python.org/">Pythonu</a> či <a href="http://cz.php.net/">PHP</a> přímo v okně Mozilly. Vyzkoušel jsem jen MozPython a velmi mě nadchl, proto se o něm zmíním detailněji (oba projekty jsou od stejného autora, takže s MozPHP to bude podobné). <a href="http://www.thomas-schilz.de/MozPython/">MozPython</a> (k dispozici jsou <a href="http://www.thomas-schilz.de/MozPython/downloads/">zkompilované balíčky</a> určené pro Mozillu 1.5 a Python 2.3 - jinak si je musíte zkompilovat sami) si zaregistruje protokol <tt>cfh</tt>, pomocí kterého přistupujete k vašim Python skriptům (<a href="http://www.thomas-schilz.de/MozPython/test2.png">screenshot</a>). Standardní výstup skriptu se zobrazuje v okně prohlížeče jako HTML. Případné chybové hlášky se vypisují s JS-consoli. Jednoduché a příjemné a pokud vám to nestačí, můžete využít podpory <a href="http://www.thomas-schilz.de/MozPython/README.html#pyxpcom">PyXPCOM</a>, které umožňuje přístup ke všem komponentám Mozilly (k použití PyXPCOM ale narozdíl od samotného MozPython byste si museli zkompilovat Mozillu s podporou PyXPCOM). Je potřeba říci, že oba projekty navazují na ideu projektu <a href="http://linuxjournal.com/article.php?sid=4724&amp;mode=thread&amp;order=0">Protozilla</a>, jenž umožňoval uživatelsky definované protokoly a používal je ke spouštění lokálních skriptů.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/01/12/">12. 1. 04</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
