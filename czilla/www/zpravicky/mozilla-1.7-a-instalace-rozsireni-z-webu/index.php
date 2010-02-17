<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla 1.7 a instalace rozšíření z webu');
	$page->setHeadline('Mozilla 1.7 a instalace rozšíření z webu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/mozilla-1.7-a-instalace-rozsireni-z-webu/">Mozilla 1.7 a instalace rozšíření z webu</a></h3>

	<div>S přicházející novou verzí balíku Mozilla přichází i jedna změna pro uživatele, kteří byli zvyklí instalovat si řadu rozšíření. Jistě si řada z vás zvykla na možnost, že veškerá rozšíření (extensions) šla instalovat buď přímo z Internetu nebo po stažení z lokálního disku. První zmíněná možnost je však <a href="http://forum.czilla.cz/viewtopic.php?t=1690">potenciálně zneužitelná</a>. Z těchto důvodů bude dále instalace z Internetu ve výchozím nastavení povolena jen z "bezpečných webů". Znamená to, že instalace bude povolena pouze z webů jako <a href="http://www.mozilla.org/" title="Domovská stránka Mozilla.org">Mozilla.org</a>, <a href="http://www.mozdev.org/" title="Domovská stránka Mozdev.org">Mozdev.org</a> (u české verze i <a href="http://www.czilla.cz/">CZilla.cz</a>) apod. Z ostatních nebude přímá instalace povolena, pokud to výslovně nepovolíte v nastavení. Cílem je ochránit uživatele před rozšířeními, které by mohly vykonávat nežádoucí funkce.</div>
	<div class="ft">
		<a href="/zpravicky/a/cvrcek/">Pavel Cvrček</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/06/16/">16. 6. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/rozsireni/">Rozšíření</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/06/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

