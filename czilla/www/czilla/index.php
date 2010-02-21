<?php
	require_once '../inc/page.php';
	$page->setTitle('O projektu CZilla.cz');
	$page->setHeadline('Projekt CZilla.cz','Podpora a propagace projektu Mozilla');
	$page->setKeywords('czilla, tým, projekt');
	$page->setDescription('Rozcestních po stránkách s informacemi o CZilla.cz');
	$page->setMenu('czilla');
	$page->includeTemplate('header');
?>
<p>Server CZilla.cz byl <a href="/zpravicky/oficialni-zahajeni/">oficiálně
spuštěn</a> koncem února 2003 jako reformace <a href="/czilla/historie-czilly.php">serveru Honzy Urbánka</a>
CZilla.org, kde byla Mozilla popularizována již od roku 2001. Další informace
o&nbsp;historii Mozilly a&nbsp;CZilly vám poskytnou články
<a href="mozilla-vcera-dnes-zitra.php">Mozilla včera, dnes a&nbsp;zítra</a>,
<a href="mozilla.org.php">o historii Mozilly</a> a přehledy událostí za rok
<a href="jaky-byl-rok-2004.php">2004</a>,
<a href="jaky-byl-rok-2005.php">2005</a> a
<a href="jaky-byl-rok-2006.php">2006</a>.</p>

<dl>
	<dt><a href="prispevatele.php">Přispěvatelé</a></dt>
	<dd>Lidé, kteří pomáhají či pomáhali projektu CZilla.</dd>

	<dt><a href="tiskove-zpravy/">Tiskové zprávy</a></dt>
	<dd>Tiskové centrum projektu CZilla.</dd>

	<dt><a href="web.php">Webové stránky</a></dt>
	<dd>Rozcestník po webových stránkách projektu CZilla, tvůrci, copyright.</dd>

	<dt><a href="fotky/">Fotografie</a></dt>
	<dd>Fotografie z akcí, kterých se projekt CZilla zúčastnil.</dd>

	<dt><a href="adopce.php">ZOO adopce</a></dt>
	<dd>Adopce pandy červené v pražské ZOO.</dd>

	<dt><a href="anketa.php">Ankety projektu CZilla</a></dt>
	<dd>Archiv historických anket z počátku projektu CZilla.</dd>

	<dt lang="en"><a href="about.php" hreflang="en">For English visitors</a></dt>
	<dd lang="en">To get information about our CZilla project in English.</dd>
</dl>

<p>Níže uvedený <strong>kontakt neslouží</strong> pro zasílání žádostí o radu. Pro tyto
účely navštivte <a href="http://forum.mozilla.cz/" title="Fórum na podporu uživatelů">fórum na podporu uživatelů</a>.</p>

<dl>
	<dt>Kontaktní e-mail &ndash; <a href="mailto:info@czilla.cz">info@czilla.cz</a></dt>
	<dd>Informace o projektu CZilla.</dd>
</dl>

<?php
	$page->includeTemplate('footer');
?>
