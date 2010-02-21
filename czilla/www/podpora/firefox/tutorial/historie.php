<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Historie aneb navštívené stránky ve Firefoxu');
	$page->setHeadline('Procházení historií','Začínáme používat prohlížeč Firefox, 5. část');
	$page->setKeywords ('mozilla, firefox, prohlížeč, browser, začátečník, beginner, návod, tutorial, historie');
	$page->setDescription ('Návod jak ve Firefoxu pracovat s historií');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./stahovani-souboru.php">Stahování souborů</a></li>
	<li>Předchozí:
		<a href="./rozsireni.php">Rozšíření</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>Historie je šikovná funkce, kterou využije každý. Stisknutím
klávesové zkratky <kbd>Ctrl</kbd>-<kbd>H</kbd> se otevře následující
postranní lišta:</p>

<div class="img-center"><div class="img-c" style="width:608px"><img
	src="../images/t5-obr01.png"
	style="height:423px;width:608px"
	alt="Historie" />
</div></div>

<p>Jak vidíte ve zvýrazněné částí obrázku, otevřelo se nové okno s&nbsp;historií
navštívených stránek. Dejme tomu, že potřebujete nalézt adresu nějaké www stránky,
kterou jste navštívili. Volby prohlížení historie vám dají několik možností.
Na obrázku si můžete všimnout, že historie je rozdělena podle dní a&nbsp;vy si můžete
prohlížet jednotlivé z&nbsp;nich.</p>

<div class="img-center"><div class="img-c" style="width:608px"><img
	src="../images/t5-obr02.png"
	style="height:423px;width:608px"
	alt="Hledání v historii" />
</div></div>

<p>Na obrázku níže si můžete všimnout, že lze též vyhledat stránku zadáním klíčového
slova v&nbsp;poli <span class="nabidka">Hledat</span>. Prohlížeč prohledá 
historii navštívených stránek a&nbsp;zobrazí výpis stránek, které obsahují 
v&nbsp;nadpisu zadané slovo. Na obrázku můžete vidět, jak prohlížeč po zadání 
slova "firefox" automaticky vygeneroval seznam navštívených stránek, jejichž 
nadpisy obsahovaly zadané klíčové slovo.</p>

<div class="img-center"><div class="img-c" style="width:608px"><img
	src="../images/t5-obr03.png"
	style="height:423px;width:608px"
	alt="Výsledky hledání v historii" />
</div></div>

<p>Na pravé straně vyhledávacího pole je nabídka voleb, které vám umožní
seřadit výsledek hledání podle zadaného kritéria. Klepněte na nabídku 
a&nbsp;přesvědčte se. Klávesová zkratka <kbd>Ctrl</kbd>-<kbd>H</kbd> je jedna 
z&nbsp;nejhezčích klávesových
zkratek programu Mozilla Firefox. Příště budeme pokračovat s&nbsp;dalšími...</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./stahovani-souboru.php">Stahování souborů</a></li>
	<li>Předchozí:
		<a href="./rozsireni.php">Rozšíření</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
