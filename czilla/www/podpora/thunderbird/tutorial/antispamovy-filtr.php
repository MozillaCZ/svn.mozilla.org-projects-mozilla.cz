<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Antispamový filtr');
	$page->setHeadline('Antispamový filtr','Úvod do Thunderbirdu, 5. část');
	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial, spam, antispam, nevyžádaná pošta');
	$page->setDescription ('Návod jak v Mozilla Thunderbirdu pracovat s nevyžádanou poštou');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
	  <a href="./import.php">Import elektronické pošty a&nbsp;kontaktů</a></li>
	<li>Předchozí:
		<a href="./prilohy.php">Práce s přílohami a&nbsp;kontakty</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<h2 class="nice thunderbird">Nevyžádaná pošta</h2>

<p>Jednou z velmi užitečných funkcí programu Thunderbird je filtr nevyžádané 
pošty (spamu). Program Thunderbird má zabudovaný filtr nevyžádané pošty, který 
můžete nastavit a naladit dle vaší potřeby. To si sice vyžádá týden či dva 
určování, co nevyžádaná pošta (spam) je a co není, ale výsledek stojí za to.</p>

<p>První, co potřebujete udělat, je nastavení filtru nevyžádané pošty. Pokud 
v nabídce zvolíte <span class="nabidka">Nástroje -&gt; Nastavení 
nevyžádané pošty...</span> objeví se vám následující dialog:</p>

<div class="img-center">
<img src="../images/t5-obr01.png" 
alt="Správa nevyžádané pošty - nastavení" height="516" width="594" />
</div>

<p>V horní části prvního obrázku můžete zvolit, pro který účet budou 
zvolená pravidla platná. Každý účet tak může mít své vlastní nastavení.</p>

<div class="img-center">
<img src="../images/t5-obr02.png" 
alt="Správa nevyžádané pošty - adaptivní filtry" width="594" height="516" />
</div>

<p>Na tomto obrázku se nachází volba pro aktivaci filtru nevyžádané pošty. 
Ta je implicitně vypnuta. Pokud chcete filtrovat nevyžádanou poštu, 
zaškrtněte volbu <span class="nabidka">Povolit kontrolu na nevyžádanou 
poštu</span>.</p>

<h3>Tlačítko Nevyžádané</h3>

<p>Program Thunderbird používá Bayesovo filtrování. Ze začátku byste měli 
e-mailového klienta naučit, co je nevyžádaná pošta (spam) a co není. To budete 
provádět tak, že vždy označíte danou e-mailovou zprávu a klepnutím na 
tlačítko <span class="nabidka">Nevyžádané</span> volíte mezi tím, zda-li 
je zpráva nevyžádaná či se jedná o korektní e-mailovou zprávu.</p>

<div class="img-center">
<img src="../images/t5-obr03.png" alt="Nevyžádané" width="68" height="47" />
</div>

<p>Označováním a odznačováním e-mailových zpráv jako nevyžádané učíte 
program Thunderbird, co je spam a co ne. Po několika týdnech dokáže 
tento filtr odstranit 99%+ nevyžádaných e-mailových zpráv.</p>

<h2 class="nice thunderbird">Obrázky</h2>
<p>Dalším tipem pro prevenci nevyžádaných zpráv je zakázání načítání obrázků, 
které jsou umístěny na vzdálených serverech a e-mailová zpráva na ně odkazuje. 
Zamezení tohoto načítání zajistí, že tvůrci nevyžádané pošty nemohou tajnými 
obrázky umístěnými v e-mailové zprávě zjistit, kdy jste e-mailovou zprávu 
otevřeli. Jděte do nabídky <span class="nabidka">Nástroje -&gt; Možnosti... 
-&gt; Soukromí</span> a zde zakažte načítání obrázků ze vzdálených serverů. 
To vám pomůže omezit problém s nevyžádanými zprávami.</p>

<div class="img-center">
<img src="../images/t5-obr04.png" alt="Možnosti" width="491" height="450" />
</div>

<div class="ipn-bottom">
<ul>
	<li>Následující:
	  <a href="./import.php">Import elektronické pošty a&nbsp;kontaktů</a></li>
	<li>Předchozí:
		<a href="./prilohy.php">Práce s přílohami a&nbsp;kontakty</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
