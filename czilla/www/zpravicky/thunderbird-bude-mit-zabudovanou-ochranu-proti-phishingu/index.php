<?php
	require_once '../../inc/page.php';
	$page->setTitle('Thunderbird bude mít zabudovanou ochranu proti phishingu');
	$page->setHeadline('Thunderbird bude mít zabudovanou ochranu proti phishingu', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/thunderbird-bude-mit-zabudovanou-ochranu-proti-phishingu/">Thunderbird bude mít zabudovanou ochranu proti phishingu</a></h3>

	<div>Do vývojových verzí <a href="/produkty/thunderbird/">Thunderbirdu</a> byl nedávno přidán <a href="http://gemal.dk/blog/2005/01/21/phishing_detection_support_to_thunderbird_checked_in/" title="gemal.dk - Phishing Detection Support to Thunderbird checked in">kód zajišťující částečnou ochranu proti phishingu</a>, tedy klamání uživatele za účelem získání citlivých informací. Pokud kliknete na odkazu obsahujícím místo doménového jména IP adresu, nebo na odkazu, jehož adresa v obsaženém textu se bude lišit od adresy, na kterou doopravdy vede, zobrazí se <a href="https://bugzilla.mozilla.org/attachment.cgi?id=171937" title="Screenshot upozorňovacího dialogu">upozornění</a>. V budoucnu může být ochrana rozšířena i na jiné typy pokusů oklamat uživatele. Více viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=279191" title="Bug 279191 - Add Phishing Detection Support to Thunderbird" hreflang="en">příslušný bug</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/01/24/">24. 1. 05</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/thunderbird/">Thunderbird</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2005/01/24/">Ze stejného dne</a></dd>
				<dd><a href="../2005/01/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>

