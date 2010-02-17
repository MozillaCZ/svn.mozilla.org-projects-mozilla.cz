<?php
	require_once '../../inc/page.php';
	$page->setTitle('Penzilla');
	$page->setHeadline('Penzilla', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/penzilla/">Penzilla</a></h3>

	<div>Dá se skřížit tučňák s Mozillou? Ano. Ptáte se, co vznikne? Přeci <a href="http://www.oeone.com/images/tux/tux.png">Penzilla</a>. Jedná se o <a href="http://www.oeone.com/developers/">součást</a> <a href="http://www.oeone.com/products/">HomeBase</a>, což je upravená RedHat distribuce Linuxu s desktopem na bázi Mozilly - <a href="http://www.oeone.com/products/demo.html" onclick="window.open('http://www.oeone.com/products/demo.html','demo','width=960,height=700'); return(false)">video</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/10/08/">8. 10. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Další zprávičky:</dt>
				<dd><a href="../2003/10/08/">Ze stejného dne</a></dd>
				<dd><a href="../2003/10/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

