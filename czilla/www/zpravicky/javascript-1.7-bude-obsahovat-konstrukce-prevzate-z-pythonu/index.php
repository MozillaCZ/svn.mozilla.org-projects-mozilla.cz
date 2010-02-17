<?php
	require_once '../../inc/page.php';
	$page->setTitle('JavaScript 1.7 bude obsahovat konstrukce převzaté z Pythonu');
	$page->setHeadline('JavaScript 1.7 bude obsahovat konstrukce převzaté z Pythonu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/javascript-1.7-bude-obsahovat-konstrukce-prevzate-z-pythonu/">JavaScript 1.7 bude obsahovat konstrukce převzaté z Pythonu</a></h3>

	<div>Zatímco <a href="/vyvojari/aplikace/javascript/" title="CZilla: JavaScript v Mozille">JavaScript 1.6</a> si <a href="/archiv-2005.html#news:b150bbef4c5577cbaeed6a182e452c25" title="Nové funkce objektu Array">vypůjčil několik idejí z Lispu a dalších funkcionálních jazyků</a>, JavaScript 1.7 <a href="http://weblogs.mozillazine.org/roadmap/archives/2006/02/js_and_python_news.html" hreflang="en" title="Brendan&#039;s Roadmap Updates: Python and JavaScript">bude obsahovat některé konstrukce známé z Pythonu</a>. Autor JavaScriptu Brendan Eich v současnosti implementuje podporu iterátorů a generátorů (klíčové slovo <code><a href="http://docs.python.org/ref/yield.html" hreflang="en" title="6.8 The yield statement">yield</a></code>) včetně <em><a href="http://www.python.org/doc/tut/node7.html#SECTION007140000000000000000" hreflang="en" title="5. Data Structures">list comprehensions</a></em> (v JavaScriptu <em>array comprehensions</em>). Průběh prací můžete sledovat v <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=326466" hreflang="en" title="Bug 326466 - Implement Pythonic generators and iteration protocol support for JS1.7">příslušném bugu</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/02/23/">23. 2. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/02/23/">Ze stejného dne</a></dd>
				<dd><a href="../2006/02/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

