<?php
	require_once '../../inc/page.php';
	$page->setTitle('Řazení zpráv v Thunderbirdu');
	$page->setHeadline('Řazení zpráv','Návod jak si seřadit svou poštu v Thunderbirdu');
	$page->setKeywords('řazení zpráv, třídění, podpora, nápověda, pomoc, návod, mozilla, thunderbird, pošťák');
	$page->setDescription('Návod jak si seřadit svou poštu v Thunderbirdu');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<p>Funkce seskupování zpráv vám umožňuje organizovat zprávy do skupin podle
různých vlastností, jako jsou odesílatel nebo důležitost. Pokud například
zvolíte seskupit složku Doručená pošta podle data, zprávy budou zobrazeny
ve skupinách podobných složkám, označených Dnes, Včera, Minulý týden atd. 
Každou takovou skupinu můžete rozbalit nebo sbalit klepnutím na znaménko
<span class="nabidka">+</span> resp. <span class="nabidka">-</span> nalevo
od popisku skupiny.</p>

<p>Zprávy mohou být seskupeny např. podle data, důležitosti, odesílatele, 
příjemce, stavu, předmětu nebo štítku.</p>

<ul>
	<li>Přejete-li si seskupit zprávy, nejprve klepněte na složku, ve které
	chcete zprávy seskupit (např. Doručená pošta) a&nbsp;seřaďte je tak, jak si 
	přejete &ndash; třeba podle sloupce <span class="nabidka">Datum</span>.
	Poté zvolte <span class="nabidka">Zobrazit</span> &gt;
	<span class="nabidka">Seřadit podle</span> &gt; 
	<span class="nabidka">Zobrazit ve skupinách</span> nebo stiskněte
	klávesu <kbd>G</kbd>.</li>
	<li>Přejete-li si seskupování zpráv zrušit, klepněte na kterýkoliv 
	z&nbsp;titulků sloupců v&nbsp;panelu zpráv, nebo zvolte jiný způsob řazení 
	v&nbsp;nabídce <span class="nabidka">Zobrazit</span> &gt;
	<span class="nabidka">Seřadit podle</span>.</li>
</ul>

<h2>Další informace</h2>
<ul>
	<li>Seskupování zpráv funguje pro každou složku zvlášť. Pokud tedy seskupíte
	zprávy např. ve složce Doručená pošta, v Odeslané poště seskupeny nebudou.</li>
	<li>Seskupování zpráv prozatím nefunguje ve 
	<a href="slozky-ulozeneho-hledani.php">složkách uloženého hledání</a>.</li>
</ul>

<?php
	$page->includeTemplate('footer');
?>