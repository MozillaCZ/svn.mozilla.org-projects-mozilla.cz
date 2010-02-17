<?php
	require_once '../../inc/page.php';
	$page->setTitle('Robin');
	$page->setHeadline('Robin', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/robin/">Robin</a></h3>

	<div><a href="http://robin.sourceforge.net/">Robin</a> neboli "Remote Operating System Build in Netscape" je "správce oken" vytvořený pomocí DHTML, JavaScriptu a <abbr title="XML-based User Interface Language">XUL</abbr>. Nápaditým způsobem demonstuje známé na XUL založené hry z <a href="http://www.mozdev.org">mozdev.org</a>. Uvidíme, kam se vyvine. Třeba časem bude obsahovat i vlastní webový prohlížeč, ftp klienta a Office ;-) Update: Tak prohlížeč už je - Moxula, bohužel autor ho nestihl dokončit dříve, než si jeho projektu všimli lidé a začali na něj odkazovat (to jako třeba i my :-), takže <a href="http://www.mozillazine.org/talkback.html?article=3342&amp;message=11#11">zatím ještě nefunguje</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/06/30/">30. 6. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Další zprávičky:</dt>
				<dd><a href="../2003/06/30/">Ze stejného dne</a></dd>
				<dd><a href="../2003/06/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

