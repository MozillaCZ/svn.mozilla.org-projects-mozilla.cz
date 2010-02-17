<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Zprávičky autora Jan Urbanek');
	$page->setHeadline('Zprávičky autora Jan Urbanek', 'Přehled toho nejžhavějšího ze světa Mozilly, autor Jan Urbanek');
	$page->includeTemplate('header');
?>
<div id="navigation">
	Vybrat zprávičky aktivních autorů:
						<a href="/zpravicky/a/majda/">David Majda</a>

		|
						<a href="/zpravicky/a/hassman/">Martin Hassman</a>

		|
						<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>

		|
						<a href="/zpravicky/a/mik/">Michal Kec</a>

		|
						<a href="/zpravicky/a/petrovicky/">Lukáš Petrovický</a>

		|
						<a href="/zpravicky/a/aha/">Adam Hauner</a>

		|
						<a href="/zpravicky/a/franc/">Pavel Franc</a>

		|
						<a href="/zpravicky/a/funtomas/">Tomáš Marek</a>

		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>

<div class="news">
	<h3><a href="/zpravicky/forum-na-czilla.org-zamcene/">Fórum na CZilla.org zamčené</a></h3>

	<div>Ode dneška je fórum na CZilla.org zamčené a nelze do něj vkládat příspěvky. Pracuje se na přenesení dat z fóra CZilla.org do fóra <a href="http://forum.czilla.cz/">CZilla.cz</a>, které je vám nyní plně k dispozici.</div>
	<div class="ft">
		<a href="/zpravicky/a/urbanek/">Jan Urbanek</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/03/05/">5. 3. 03</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
