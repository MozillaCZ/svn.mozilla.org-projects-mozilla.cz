<?php
	require_once '../../inc/page.php';
	$page->setTitle('Testování nového systému pro aktualizace');
	$page->setHeadline('Testování nového systému pro aktualizace', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/testovani-noveho-systemu-pro-aktualizace/">Testování nového systému pro aktualizace</a></h3>

	<div>Základ <a href="/archiv-2005.html#news:396e9cb2951095d26538d784dcf92427" title="Ben Goodger: Vylepšení systému rozšíření, Firefox 1.1 bude umět updaty pomocí patchů">nového systému pro aktualizace</a>, který bude plně funkční ve Firefoxu 1.1, byl zahrnut do nočních sestavení. Nyní je pomocí něj možné updatovat z jednoho nočního sestavení na druhé, což by mělo zjednodušit život testerům. Zatím ale nefunguje inkrementální update (binární patching), stahuje se vždy celý program. Odvážlivci si vše mohou vyzkoušet a pomoci s testováním &ndash; stačí postupovat dle <a href="http://weblogs.mozillazine.org/qa/archives/2005/07/deer_park_nighl.html" title="Mozilla Quality: deer park nightly build update system testing" hreflang="en">návodu na Mozilla Quality blogu</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/09/">9. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/07/09/">Ze stejného dne</a></dd>
				<dd><a href="../2005/07/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
