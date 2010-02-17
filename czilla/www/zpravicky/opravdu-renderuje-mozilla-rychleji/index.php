<?php
	require_once '../../inc/page.php';
	$page->setTitle('Opravdu renderuje Mozilla rychleji?');
	$page->setHeadline('Opravdu renderuje Mozilla rychleji?', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/opravdu-renderuje-mozilla-rychleji/">Opravdu renderuje Mozilla rychleji?</a></h3>

	<div>Častokrát slyšíme, že nová verze Mozilly je opět o něco rychlejší. <a href="http://weblogs.mozillazine.org/bz/" title="Borisův blog">Boris Zbarsky</a> pro nás <a href="http://weblogs.mozillazine.org/bz/archives/004668.html" title="Faster, further, better">připravil</a> graf, který <a href="http://axolotl.mozilla.org/graph/query.cgi?tbox=btek&amp;testname=pageload&amp;autoscale=1&amp;size=&amp;units=&amp;ltype=&amp;points=&amp;showpoint=2004%3A01%3A13%3A20%3A00%3A08%2C900&amp;avg=1&amp;days=365">ukazuje výsledky</a> testů rychlosti renderování stránek za poslední rok. Jaké je zrychlení? Téměř 20&nbsp;%. Tento test je součástí nekolika pravidelně <a href="http://www.mozilla.org/performance/tinderbox-tests.html" title="Tinderbox Tests">prováděných testů</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/01/14/">14. 1. 04</a>
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
