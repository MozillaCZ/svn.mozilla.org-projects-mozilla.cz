<?php
	require_once '../../inc/page.php';
	$page->setTitle('Virtual Bugzilla Server');
	$page->setHeadline('Virtual Bugzilla Server', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/virtual-bugzilla-server/">Virtual Bugzilla Server</a></h3>

	<div>Pokud vám na <a href="/vyvojari/bugzilla/" title="Bugzilla: Stránka o produktu">Bugzille</a> vadila její komplikovaná instalace, možná vás zaujme projekt <a href="http://deskzilla.com/vbugzilla.html" hreflang="en">Virtual Bugzila Server</a>. Je to <a href="http://d1.deskzilla.com/.files/virtual-bugzilla-server-1_1.zip">image</a> (ZIP, 42&nbsp;MB) pro <a href="http://www.vmware.com/" hreflang="en" title="VMware - Virtualization Software">VMWare</a>, obsahující Linuxovou distribuci s nainstalovanou Bugzillou. Stačí si tedy stáhnout freewarový <a href="http://www.vmware.com/products/player/" hreflang="en">VMWare Player</a>, image v něm spustit a rázem máte Bugzillu plně funkční.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/03/01/">1. 3. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/bugzilla/">Bugzilla</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/03/01/">Ze stejného dne</a></dd>
				<dd><a href="../2006/03/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

