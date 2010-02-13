<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Zpravodaj Mozilla Links - novinky ze světa Mozilly';
	$page->headline = array('Zpravodaj Mozilla Links','Novinky ze světa Mozilly');

	$page->setKeywords('podpora, zpravodaj, nápověda, pomoc, návod, mozilla');
	$page->setDescription('Stránka zpravodaje Mozilla Links');

	$page->includeHeader(); 
?>

<div id="navigation">
	<a href="#co-je-mln">Co je Mozilla Links?</a> &#183;
	<a href="#ceske-verze">České verze</a> &#183;
	<a href="#dalsi-zdroje">Další zdroje informací</a> 
</div>

<h2 id="co-je-mln" class="nice">Co je Mozilla Links?</h2>

<p><b>Mozilla Links</b> je občasný elektronický zpravodaj vydávaný projektem 
<a href="http://newsletter.mozdev.org/" hreflang="en">Mozilla Links Newsletter</a>.
</p>

<p>Ocení ho každý, kdo chce být pravidelně informován o aktuálním dění ve
světě Mozilly. Najdete v něm informace o nových verzích, tipy a rady pro
uživatele Mozilly, Mozilla Firefox či Mozilla Thunderbird a přehled hlavních
událostí souvisejících s Mozilla.org.</p>

<p>Pro odběr <b>české verze</b> se přihlašte na
<a href="http://mail.mozilla.org/listinfo/newsletter-cz">mail.mozilla.org</a>
nebo přes tento formulář:</p>

<p><i>Po odeslání formuláře vám příjde e-mail, na který musíte odpovědět,
abyste potvrdili registraci.</i></p>

<form action="http://mail.mozilla.org/subscribe/newsletter-cz" method="post">
<div class="tbl-1" style="width:300px">
<table border="1">
<tbody>
<tr>
	<td>E-mail:</td>
	<td><input type="text" name="email" size="30" /></td>
</tr>
<tr>
	<td>Heslo:</td>
	<td><input type="password" name="pw" size="15" /></td>
</tr>
<tr>
	<td>Potvrzení hesla:</td>
	<td><input type="password" name="pw-conf" size="15" /></td>
</tr>
<tr>
	<td colspan="2">
		<input type="hidden" name="digest" value="0" />
		<input type="submit" name="email-button" value="Přihlásit k odběru" />
	</td>
</tr>
</tbody>
</table>
</div>
</form>

<h2 id="ceske-verze" class="nice">České verze zpravodaje</h2>
<ul>
	<li><a href="mln-025.html">Číslo 25</a> z 28.1.2005</li>
	<li><a href="mln-024.html">Číslo 24</a> z 13.11.2004</li>
	<li><a href="mle-001.html">Express 1</a> z 9.11.2004</li>
	<li><a href="mln-023.html">Číslo 23</a> z 23.9.2004</li>
</ul>

<p>Starší čísla: 
	<a href="mln-022.html">Číslo 22</a>,
	<a href="mln-021.html">Číslo 21</a>,
	<a href="mln-020.html">Číslo 20</a>,
	<a href="mln-019.html">Číslo 19</a>,
	<a href="mln-018.html">Číslo 18</a>,
	<a href="mls-001.html">Mezinárodní speciál</a>,
	<a href="mln-017.html">Číslo 17</a>,
	<a href="mln-015.html">Číslo 15</a>,
	<a href="mln-014.html">Číslo 14</a>,
	<a href="mln-013.html">Číslo 13</a>,
	<a href="mln-007.html">Číslo 7</a>,
	<a href="mln-006.html">Číslo 6</a>
</p>

<p>České verze připravují 
<a href="/czilla/lide.html#kdo-je-PT">Petr Tomeš</a>,
<a href="/czilla/lide.html#kdo-je-TM">Tomáš Marek</a>,
<a href="/czilla/lide.html#kdo-je-OD">Ondřej Doněk</a>,
<a href="/czilla/lide.html#kdo-je-VO">Vlastimil Ott</a>,
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
	$page->includeFooter();
?>