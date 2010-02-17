<?php
	require_once '../../inc/page.php';
	$page->setTitle('MozPython a MozPHP');
	$page->setHeadline('MozPython a MozPHP', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/mozpython-a-mozphp/">MozPython a MozPHP</a></h3>

	<div>Pokud plánujete vyvíjet aplikace pro Mozillu, neměli byste přehlédnout dva relativně nové projekty <a href="http://mozpython.mozdev.org/">MozPython</a> a <a href="http://mozphp.mozdev.org/">MozPHP</a>. Ty totiž umožňují zobrazovat výstupy programů napsaných v <a href="http://www.python.org/">Pythonu</a> či <a href="http://cz.php.net/">PHP</a> přímo v okně Mozilly. Vyzkoušel jsem jen MozPython a velmi mě nadchl, proto se o něm zmíním detailněji (oba projekty jsou od stejného autora, takže s MozPHP to bude podobné). <a href="http://www.thomas-schilz.de/MozPython/">MozPython</a> (k dispozici jsou <a href="http://www.thomas-schilz.de/MozPython/downloads/">zkompilované balíčky</a> určené pro Mozillu 1.5 a Python 2.3 - jinak si je musíte zkompilovat sami) si zaregistruje protokol <tt>cfh</tt>, pomocí kterého přistupujete k vašim Python skriptům (<a href="http://www.thomas-schilz.de/MozPython/test2.png">screenshot</a>). Standardní výstup skriptu se zobrazuje v okně prohlížeče jako HTML. Případné chybové hlášky se vypisují s JS-consoli. Jednoduché a příjemné a pokud vám to nestačí, můžete využít podpory <a href="http://www.thomas-schilz.de/MozPython/README.html#pyxpcom">PyXPCOM</a>, které umožňuje přístup ke všem komponentám Mozilly (k použití PyXPCOM ale narozdíl od samotného MozPython byste si museli zkompilovat Mozillu s podporou PyXPCOM). Je potřeba říci, že oba projekty navazují na ideu projektu <a href="http://linuxjournal.com/article.php?sid=4724&amp;mode=thread&amp;order=0">Protozilla</a>, jenž umožňoval uživatelsky definované protokoly a používal je ke spouštění lokálních skriptů.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/01/12/">12. 1. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/01/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

