<?php
	require_once '../../inc/page.php';
	$page->setTitle('Nový plán vývoje Mozilly');
	$page->setHeadline('Nový plán vývoje Mozilly', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/novy-plan-vyvoje-mozilly/">Nový plán vývoje Mozilly</a></h3>

	<div>Dnes byl zveřejněn nový <a href="http://www.mozilla.org/roadmap.html">plán vývoje Mozilly.</a> Mozilla 1.4 bude poslední verzí založenou na původní monolitické architektuře zděděné po Netscapu. Pro další verze je plánováno použití GRE (prostředí pro běh GECKO-aplikací) a samostaně instalovatelných aplikací Phoenix a Minotaur spolu s řadou rozšiřujících modulů, které dnes tvoří nedílnou součást balíku Mozilly.</div>
	<div class="ft">
		<a href="/zpravicky/a/franc/">Pavel Franc</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/04/02/">2. 4. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dd><a href="/zpravicky/s/thunderbird/">Thunderbird</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/04/02/">Ze stejného dne</a></dd>
				<dd><a href="../2003/04/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
