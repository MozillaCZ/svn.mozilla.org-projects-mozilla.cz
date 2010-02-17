<?php
	require_once '../../inc/page.php';
	$page->setTitle('Podpora ODBC v Mozille');
	$page->setHeadline('Podpora ODBC v Mozille', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/podpora-odbc-v-mozille/">Podpora ODBC v Mozille</a></h3>

	<div>Aplikace založené na Mozille <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=254924" hreflang="en" title="Bug 254924 - ODBC support for SQL module">budou moci komunikovat s databázemi pomocí <abbr title="Open DataBase Connectivity" lang="en">ODBC</abbr></a> &ndash; příslušná úprava byla v pondělí zahrnuta do vývojového stromu. Podpora databázových rozhraní v Mozille není nic nového, již delší dobu se Mozilla domluví s <a href="http://www.mysql.com/" hreflang="en" title="MySQL AB :: The world&#039;s most popular open source database">MySQL</a>, <a href="http://www.postgresql.org/" hreflang="en" title="PostgreSQL: The world&#039;s most advanced open source database">PostgreSQL</a> a <a href="http://www.sqlite.org/" hreflang="en" title="SQLite home page">SQLite</a>. Podporu <abbr title="Open DataBase Connectivity" lang="en">ODBC</abbr> bude stejně jako u ostatních databázových rozhraní nutno zapnout při kompilaci aplikace.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/06/07/">7. 6. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dd><a href="/zpravicky/s/xulrunner/">XULRunner</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/06/07/">Ze stejného dne</a></dd>
				<dd><a href="../2006/06/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

