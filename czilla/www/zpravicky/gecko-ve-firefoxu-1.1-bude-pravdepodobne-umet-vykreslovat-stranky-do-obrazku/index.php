<?php
	require_once '../../inc/page.php';
	$page->setTitle('Gecko ve Firefoxu 1.1 bude pravděpodobně umět vykreslovat stránky do obrázků');
	$page->setHeadline('Gecko ve Firefoxu 1.1 bude pravděpodobně umět vykreslovat stránky do obrázků', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/gecko-ve-firefoxu-1.1-bude-pravdepodobne-umet-vykreslovat-stranky-do-obrazku/">Gecko ve Firefoxu 1.1 bude pravděpodobně umět vykreslovat stránky do obrázků</a></h3>

	<div>Chtěli jste si někdy vyrenderovanou stránku uložit jako obrázek? <a href="http://weblogs.mozillazine.org/roc/archives/2005/05/rendering_web_p.html" title="Well, I'm Back: Rendering Web Page To Images" hreflang="en">Díky Robertu O'Callahanovi to Gecko bude brzy umět</a>, pravděpodobně již ve Firefoxu 1.1. Technicky je vše založeno na <a href="/archiv-2005.html#news:03c111266fec3eb251c430c70172a9ac" title="V nočních sestaveních najdete podporu HTML canvasu">tagu <code>&lt;canvas&gt;</code></a> a funkce je dostupná pouze skriptům na úrovni chrome &ndash; běžné stránky by ji totiž mohly zneužívat. V Robertově příspěvku dokonce najdete zdrojový kód jednoduchého ukázkového rozšíření.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/05/14/">14. 5. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/gecko/">Gecko</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/05/14/">Ze stejného dne</a></dd>
				<dd><a href="../2005/05/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

