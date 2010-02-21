<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zpravodaj Mozilla Links - novinky ze světa Mozilly');
	$page->setHeadline('Zpravodaj Mozilla Links','Novinky ze světa Mozilly');
	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');
	$page->includeTemplate('header'); 
?>

<h2 id="co-je-mln" class="nice">Co je Mozilla Links?</h2>

<p><b>Mozilla Links</b> je občasný elektronický zpravodaj vydávaný projektem 
<a href="http://newsletter.mozdev.org/" hreflang="en">Mozilla Links Newsletter</a>.
</p>

<p>Ocení ho každý, kdo chce být pravidelně informován o aktuálním dění ve
světě Mozilly. Najdete v něm informace o nových verzích, tipy a rady pro
uživatele Mozilly, Mozilla Firefox či Mozilla Thunderbird a přehled hlavních
událostí souvisejících s Mozilla.org.</p>

<h2 id="ceske-verze" class="nice">České verze zpravodaje</h2>
<ul>
	<li><a href="mln-025.php">Číslo 25</a> z 28.1.2005</li>
	<li><a href="mln-024.php">Číslo 24</a> z 13.11.2004</li>
	<li><a href="mle-001.php">Express 1</a> z 9.11.2004</li>
	<li><a href="mln-023.php">Číslo 23</a> z 23.9.2004</li>
</ul>

<p>Starší čísla: 
	<a href="mln-022.php">Číslo 22</a>,
	<a href="mln-021.php">Číslo 21</a>,
	<a href="mln-020.php">Číslo 20</a>,
	<a href="mln-019.php">Číslo 19</a>,
	<a href="mln-018.php">Číslo 18</a>,
	<a href="mls-001.php">Mezinárodní speciál</a>,
	<a href="mln-017.php">Číslo 17</a>,
	<a href="mln-015.php">Číslo 15</a>,
	<a href="mln-014.php">Číslo 14</a>,
	<a href="mln-013.php">Číslo 13</a>,
	<a href="mln-007.php">Číslo 7</a>,
	<a href="mln-006.php">Číslo 6</a>
</p>

<p>České verze připravují 
<a href="/czilla/prispevatele.php#kdo-je-PT">Petr Tomeš</a>,
<a href="/czilla/prispevatele.php#kdo-je-TM">Tomáš Marek</a>,
<a href="/czilla/prispevatele.php#kdo-je-OD">Ondřej Doněk</a>,
<a href="/czilla/prispevatele.php#kdo-je-VO">Vlastimil Ott</a>,
Pavel Kurc a Jan Bína.</p>

<h2 id="dalsi-zdroje" class="nice">Další zdroje informací</h2>
<ul>
	<li><a href="http://newsletter.mozdev.org/">Mozilla Links</a> - oficiální web projektu</li>
	<li><a href="http://mail.mozilla.org/pipermail/newsletter-cz/">Archiv českých čísel Mozilla Links</a></li>
	<li><a href="http://mail.mozilla.org/pipermail/newsletter/">Archiv anglických čísel Mozilla Links</a></li>
	<li><a href="http://creativecommons.org/licenses/by-nc-sa/1.0/legalcode/">Creative Commons Attribution-NonCommercial-ShareAlike 1.0</a> - licence, pod kterou je zpravodaj vydáván</li>
	<li><a href="http://mozilla-newsletter.eloquor.org/">Zpravodaj DevLinks</a> (pro vývojáře)</li>
</ul>

<?php
	$page->includeTemplate('footer');
?>
