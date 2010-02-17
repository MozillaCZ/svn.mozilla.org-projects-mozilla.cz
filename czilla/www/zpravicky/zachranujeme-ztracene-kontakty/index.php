<?php
	require_once '../../inc/page.php';
	$page->setTitle('Zachraňujeme ztracené kontakty');
	$page->setHeadline('Zachraňujeme ztracené kontakty', 'Zprávičky ze světa Mozilly');
	$page->includeTemplate('header');
?>
<div class="zp">
<div class="news">
	<h3><a href="/zpravicky/zachranujeme-ztracene-kontakty/">Zachraňujeme ztracené kontakty</a></h3>

	<div>Nedávno jsem řešil problém, jak získat kontakty z poškozeného souboru <tt>abook.mab</tt>. V případě, že tento soubor obsahuje několik set e-mailů (což byl i můj případ), stává se jeho ztráta dost fatální záležitostí (pokud jste ovšem <a href="http://backup.jasnapaka.com/index_cz.php" title="Na zálohování tu máme Mozilla Backup">nezálohovali</a>). Protože řešení není tak snadné, aby na ně člověk přišel sám, ale podle návodu celý proces určitě zvládne i méně zkušený uživatel (a protože jsem našel takový <a href="http://home.att.net/~cherokee67/ns7manualAB.html" title="Manually Copy the Netscape 7.x Address Book">návod v angličtině</a>), připravil jsem <a href="/clanky/zachrana-kontaktu.html" title="Záchrana kontaktů z poškozené databáze kontaktů">návod pro české uživatele</a>. Vyšel jsem z anglického návodu a přidal pár postřehů, na které jsem při řešení problému narazil. Ještě dodám, že mě se při tomto postupu podařilo zachránit prakticky 100% dat (což potěšilo mne a ještě víc jejich vlastníka :-).</div>
	<div class="ft">
		<a href="/zpravicky/a/hassman/">Martin Hassman</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2003/12/06/">6. 12. 03</a>
	</div>
	<span class="cb"></span>
</div>
<hr />
<dl class="news">
		<dt>Štítky:</dt>
				<dd><a href="/zpravicky/s/czilla/">CZilla</a></dd>
				<dd><a href="/zpravicky/s/suite/">Mozilla Application Suite</a></dd>
				<dd><a href="/zpravicky/s/thunderbird/">Thunderbird</a></dd>
				<dt>Další zprávičky:</dt>
				<dd><a href="../2003/12/06/">Ze stejného dne</a></dd>
				<dd><a href="../2003/12/">Ze stejného měsíce</a></dd>
				<dd><a href="/zpravicky/">Nejnovější zprávičky</a></dd>
</dl>
</div>
<?php
	$page->includeTemplate('footer');
?>
 