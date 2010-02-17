<?php
	require_once '../../inc/page.php';
	$page->setTitle('Brendan Eich: Firefox 1.1 a co přijde po něm');
	$page->setHeadline('Brendan Eich: Firefox 1.1 a co přijde po něm', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/brendan-eich-firefox-1.1-a-co-prijde-po-nem/">Brendan Eich: Firefox 1.1 a co přijde po něm</a></h3>

	<div><a href="http://weblogs.mozillazine.org/roadmap/" title="Brendan's Roadmap Updates" hreflang="en">Brendan Eich</a>, zodpovědný za architekturu a vedení <a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a> po technické stránce, <a href="http://weblogs.mozillazine.org/roadmap/archives/008240.html" title="Brendan's Roadmap Updates: New roadmap coming" hreflang="en">nastínil cestu od Deer Parku Alpha 1 k Firefoxu 1.1 a poodhalil i plány do budoucna</a>. Prioritou mezi úkoly pro verzi 1.1 je nyní binární patching (viz <a href="/archiv-2005.html#news:396e9cb2951095d26538d784dcf92427" title="Ben Goodger: Vylepšení systému rozšíření,  Firefox 1.1 bude umět updaty pomocí patchů">dřívější novinka</a>) a architekturální změny vedoucí k zajištění lepší bezpečnosti skriptů (většina odhalených bezpečnostní chyb s nimi souvisela). V dlouhodobém horizontu bude přepsán grafický subsystém, který bude využívat knihovnu <a href="http://cairographics.org/" hreflang="en">Cairo</a> a s ní i hardwarovou akceleraci při renderování (opět viz <a href="/archiv-2005.html#news:ce6322923339ac60708b58cfbf814be0" title="Gecko bude při vykreslování stránek využívat akceleraci grafické karty">dřívější novinka</a>).</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/06/02/">2. 6. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/06/02/">Ze stejného dne</a></dd>
				<dd><a href="../2005/06/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

