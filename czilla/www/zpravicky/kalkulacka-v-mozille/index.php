<?php
	require_once '../../inc/page.php';
	$page->setTitle('Kalkulačka v Mozille');
	$page->setHeadline('Kalkulačka v Mozille', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/kalkulacka-v-mozille/">Kalkulačka v Mozille</a></h3>

	<div>K čemu spouštět kalkulačku, když mám otevřenou Mozillu! Krásné spojení technologií <a href="http://www.mozilla.org/docs/end-user/keywords.html">Mozilla Internet Keywords</a> a <a href="http://bookmarklets.com/">bookmarklets</a> lze nalézt u <a href="http://www.squarefree.com/bookmarklets/keywords.html">Jesse Rudermana</a>. Pozor, začínáme čarovat! Klikněte pravou myší na tento <a href="javascript:try{alert(eval(unescape('%s')))}catch(er){alert(er)}">odkaz</a> a zvolte 'Přidat odkaz k záložkám'. Otevřete 'Správce záložek', zobrazte si vlastnosti právě vytvořené záložky a po položky 'Klíčové slovo' napište 'ja' (bez apostrofů) a potvrďte. Vraťte se do prohlížeče a zadejte místo URL 'ja 5+5' (bez apostrofů). Vidíte výsledek? 8-) (Hint: matematické funkce se vkládají přes object Math, takže např. 'ja Math.log(5) + Math.sin(Math.PI)')</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/05/26/">26. 5. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
