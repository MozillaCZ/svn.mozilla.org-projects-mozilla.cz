<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Mozilla často kladené otázky');
	$page->setHeadline('Často kladené otázky','Mozilla FAQ: 9. Jak se zapojit do vývoje Mozilly');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<ul>
<li><a href="#9.1">9.1. Jak se mohu zapojit do testování Mozilly a jak nahlašovat chyby?</a></li>
<li><a href="#9.2">9.2. Já (nebo moje společnost) bychom se rádi podílely na vývoji kódu Mozilly.</a></li>
</ul>

<dl class="faq">
<dt id="question-9.1"><a name="9.1">9.1. Jak se mohu zapojit do testování Mozilly a jak nahlašovat chyby?</a></dt>
<dd id="answer-9.1">
<p>Budeme velmi rádi pokud se zapojíte. Začněte na stránkách <a href="http://www.mozilla.org/contribute/">jak se zapojit</a>.</p>

<p><a href="http://www.mozilla.org/docs/mozilla-faq.html">Testovací verze</a> jsou vytvářeny každou <a href="ftp://ftp.mozilla.org/pub/mozilla.org/mozilla/nightly/">noc</a>, stabilnější verze tzv. <a href="http://www.mozilla.org/releases/">milníky</a> každých pět až šest týdnů.
Milníky by měli být výrazně bezpečnější; naproti tomu každodenní verze obsahují nejnovější
vylepšení. Prosím mějte na paměti, že budou ovšem také obsahovat nové chyby - což je důvod proč je potřeba je testovat. Ujistěte se, že jste si zazálohovali data než je budete používat.
</p>

<p>Pokud budete testovat a hlásit chyby zpět na <a href="http://www.mozilla.org/">mozilla.org</a>,
ujistěte se, že používáte balíky, které skutečně pocházejí z mozilla.org a né od některého z
<a href="../">distributorů nebo třetích stran</a>.
Chyby v balících nepocházejících z mozilla.org by měli být v první řadě oznámeny
<a href="../">dodavateli</a>.</p>

<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
<dt id="question-9.2"><a name="9.2">9.2. Já (nebo moje společnost) bychom se rádi podílely na vývoji kódu Mozilly.</a></dt>
<dd id="answer-9.2">
<p>Z toho budeme mít ještě větší radost. Opět začněte na
<a href="http://www.mozilla.org/contribute/">jak se zpojit</a>,
kde se v pokračováních dozvíte celý proces <a href="http://www.mozilla.org/hacking/">vkládání oprav kódu</a> a jak je dostat do Mozilly. <a href="http://www.mozilla.org/community.html">Vývojářská diskusní skupina</a>
vám bude též nápomocna.</p>

<p>Společnosti přející si zapojit se do projektu Mozilla, aby se podíleli na vývoji nebo proto, aby mohli vyvíjet vlastní software používající kód nebo technologie Mozilly, by měli nejdříve kontaktovat
<a href="mailto:mitchell@mozilla.org">Mitchell Baker</a>, tak jedině může <a href="http://www.mozilla.org/">mozilla.org</a> pomoci. Pokud máte zájem o implementaci v českém prostředí můžete se obrátit na <a href="/czilla/">tým CZilla</a>.</p>
<p><small><a href="#top">Na začátek</a> <a href="./">Na obsah</a></small></p>
</dd>
</dl>

<?php
	$page->includeTemplate('footer');
?>
