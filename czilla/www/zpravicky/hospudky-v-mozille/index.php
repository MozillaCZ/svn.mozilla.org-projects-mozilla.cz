<?php
	require_once '../../inc/page.php';
	$page->setTitle('Hospůdky v Mozille');
	$page->setHeadline('Hospůdky v Mozille', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/hospudky-v-mozille/">Hospůdky v Mozille</a></h3>

	<div>Do naší <a href="/doplnky/postranni-lista/" title="Seznam panelů postranní lišty">sbírky sidebarů</a> (postranních lišt) pro Mozillu a Mozilla Firebird přibyl pěkný kousek <a href="http://www.ceske-hospudky.cz/" title="České hospůdky - rozsáhlá databáze hospůdek a restaurací z celé ČR">České hospůdky</a> (<a onclick="return previewSidebar('\u010Cesk\u00E9 hosp\u016Fdky','http://www.ceske-hospudky.cz/sidebar.php')" href="http://www.ceske-hospudky.cz/sidebar.php">náhled</a>, <a href="javascript:addSidebar('\u010Cesk\u00E9 hosp\u016Fdky ','http://www.ceske-hospudky.cz/sidebar.php')">přidat</a>). Takže až budete přemýšlet, kam půjdete dnes večer, stačí spustit Mozillu a...</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2004/01/05/">5. 1. 04</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2004/01/05/">Ze stejného dne</a></dd>
				<dd><a href="../2004/01/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

