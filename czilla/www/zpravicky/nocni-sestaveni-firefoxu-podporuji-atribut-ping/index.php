<?php
	require_once '../../inc/page.php';
	$page->setTitle('Noční sestavení Firefoxu podporují atribut ping');
	$page->setHeadline('Noční sestavení Firefoxu podporují atribut ping', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/nocni-sestaveni-firefoxu-podporuji-atribut-ping/">Noční sestavení Firefoxu podporují atribut ping</a></h3>

	<div>Do <a href="http://ftp.mozilla.org/pub/mozilla.org/firefox/nightly/latest-trunk/" hreflang="en" title="Index of /pub/mozilla.org/firefox/nightly/latest-trunk">nočních sestavení Firefoxu</a> byla zahrnuta podpora atributu <a href="http://whatwg.org/specs/web-apps/current-work/#ping" hreflang="en" title="Web Applications 1.0"><code>ping</code></a> z <a href="http://whatwg.org/specs/web-apps/current-work/" hreflang="en" title="Web Applications 1.0">pracovního návrhu specifikace Web Applications 1.0</a> od <a href="http://www.whatwg.org/" hreflang="en" title="Web Hypertext Application Technology Working Group"><abbr title="Web Hypertext Application Technology Working Group" lang="en">WHATWG</abbr></a>. Tento atribut smí být uveden v tagu <code>&lt;a&gt;</code> a jsou v něm vypsána <abbr title="Uniform Resource Locator" lang="en">URL</abbr>, na které má být poslán <abbr title="HyperText Transfer Protocol" lang="en">HTTP</abbr> POST požadavek v případě, že uživatel odkaz bude následovat. Funkce umožní zjednodušit a sjednotit systémy zaznamenávající pohyb uživatele po odkazech a nahradit obvyklá současná řešení využívající přesměrování nebo JavaScript. Funkci je možné vypnout pomocí volby v <code>about:config</code> a v budoucnu to bude možné i přímo v uživatelském rozhraní. Zda bude atribut <code>ping</code> implementován v některé finální verzi prohlížeče ale není zatím rozhodnuto.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/01/19/">19. 1. 06</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/firefox/">Firefox</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2006/01/19/">Ze stejného dne</a></dd>
				<dd><a href="../2006/01/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

