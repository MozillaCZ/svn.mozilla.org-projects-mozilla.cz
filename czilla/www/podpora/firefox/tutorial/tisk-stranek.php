<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Tisk webových stránek ve Firefoxu');
	$page->setHeadline('Tisk stránek','Začínáme používat prohlížeč Firefox, 7. část');
	$page->setKeywords ('mozilla, firefox, prohlížeč, browser, začátečník, beginner, návod, tisk, náhled tisku');
	$page->setDescription ('Návod jak ve Firefoxu pracovat s tiskem');		
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/firefox/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./zalozky.php">Záložky</a></li>
	<li>Předchozí:
		<a href="./stahovani-souboru.php">Stahování souborů</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>Dokumenty se často tisknou přímo z&nbsp;prostředí
prohlížeče. Mozilla Firefox umožňuje editovat nastavení tisku stejně dobře
jako textové editory. Jedná se skutečně o&nbsp;multifunkční prohlížeč :-).</p>

<p>Nejprve z&nbsp;hlavní nabídky zvolte <span class="nabidka">Soubor</span> 
a&nbsp;v&nbsp;rozbalené nabídce položku <span class="nabidka">Vzhled stránky...</span> 
Zobrazí se okno <span class="nabidka">Nastavení stránky</span>:</p>

<div class="img-center"><div class="img-c" style="width:409px"><img
	src="../images/t7-obr01.png"
	alt="Nastavení stránky - formát a vzhled"
	style="height:414px;width:409px" />
</div></div>

<p>Na panelu <span class="nabidka">Formát &amp; Volby</span> můžete zvolit orientaci stránky (na výšku či
na šířku). Také zde můžete zvolit měřítko stránky nebo ponechat tuto volbu na
prohlížeči. Pokud chcete tisknout i&nbsp;pozadí stránky (obvykle to není nutné),
pouze klepněte na volbu <span class="nabidka">Tisknout pozadí (barvy &amp; obrázky)</span>.</p>

<div class="img-center"><div class="img-c" style="width:409px"><img
	src="../images/t7-obr02.png"
	alt="Nastavení tisku - okraje a záhlaví/zápatí"
	style="height:414px;width:409px" />
</div></div>

<p>Na druhém panelu <span class="nabidka">Okraje &amp; Záhlaví/zápatí</span> můžete nastavit okraje
stránky. Stejně tak dobře zde lze nastavit to, co se bude tisknout v záhlaví
a&nbsp;zápatí stránky.</p>

<p>Jak vidíte, existuje zde mnoho voleb, které naleznete i&nbsp;v&nbsp;textových
editorech jako OpenOffice.org, Microsoft Word a&nbsp;podobné. Pro další takovou
funkci jděte do hlavní nabídky a&nbsp;zvolte 
<span class="nabidka">Soubor -> Náhled tisku</span>. Zobrazí se
vám následující volby:</p>

<div class="img-center"><div class="img-c" style="width:671px"><img
	src="../images/t7-obr03.png"
	alt="Náhled před tiskem"
	style="height:512px;width:671px" />
</div></div>

<p>Pokud se podíváte na hlavní panel, zjistíte, že zde máte všechny volby na
jednom místě. Máte zde přístup k mnoha funkcím z&nbsp;dialogu 
<span class="nabidka">Vzhled stránky...</span>
a&nbsp;náhled toho, jak bude vytištěná stránka vypadat.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./zalozky.php">Záložky</a></li>
	<li>Předchozí:
		<a href="./stahovani-souboru.php">Stahování souborů</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
