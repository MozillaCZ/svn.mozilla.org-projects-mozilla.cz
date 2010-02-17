<?php
	require_once '../../inc/page.php';
	$page->setTitle('Hledání v Bugzille');
	$page->setHeadline('Hledání v Bugzille', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/hledani-v-bugzille/">Hledání v Bugzille</a></h3>

	<div>Hledáte často v Bugzille? Patříte stále mezi ty, kdo se nezorientovali v jejím složitém (ale mocném) <a href="https://bugzilla.mozilla.org/query.cgi" title="Horrible query form">hledacím formuláři</a>? Jesse Ruderman <a href="http://www.squarefree.com/2003/08/13/how-i-search-for-bugs" title="How I search for bugs">radí</a>, že jemu v 99% postačí jednoduché vyhledávání pomocí Bugzilla QuickSearch (to je to vyhledávací políčko s nápisem "Enter a bug # or some search terms:" na hlavní stránce každé <a href="https://bugzilla.mozilla.org/" title="Bugzilla ze všech Bugzill ta nejbugzillovatější">Bugzilly</a>). A rovnou napsal <a href="http://www.squarefree.com/bugzilla/quicksearch-help.html" title="Bugzilla QuickSearch">návod k jeho používání</a>. Když si ho přečtete, zjistíte, že hledání v QuickSearch není o moc složitější než třeba hledání na <a href="http://www.google.com/">Googlu</a>. (Pozn.: Doufejme, že po přečtení tohoto návodu, se přestane většina z vás Bugzilly bát :-)</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/08/15/">15. 8. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bugzilla/">Bugzilla</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/08/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

