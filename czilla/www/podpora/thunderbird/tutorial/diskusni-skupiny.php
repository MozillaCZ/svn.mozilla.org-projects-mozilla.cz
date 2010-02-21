<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Diskusní skupiny');
	$page->setHeadline('Diskusní skupiny','Úvod do Thunderbirdu, 8. část');
	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial, diskusní skupiny');
	$page->setDescription ('Návod jak v Mozilla Thunderbirdu pracovat s diskusními skupinami');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
	  <a href="./motivy-vzhledu.php">Motivy vzhledu</a></li>
	<li>Předchozí:
		<a href="./filtry.php">Filtry</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<h2 class="nice thunderbird">Diskusní skupiny</h2>

<p>Pokud máte otázky ohledně toho, jak provozovat diskusní skupiny, 
pak se vám zde na ně pokusím odpovědět.Ukážeme si, jak nastavit konto.</p>

<p>Prvně zvolte v nabídce <span class="nabidka">Nástroje -&gt; 
Nastavení účtu</span>. Otevře se vám následující okno v&nbsp;kterém 
klepnete na tlačítko <span class="nabidka">Přidat účet...</span>:</p>

<div class="img-center">
<img src="../images/t8-obr01.png" alt="Průvodce vytvářením účtu" width="476" height="437" />
</div>

<p>Zvolte <span class="nabidka">Účet pro diskusní skupiny</span> 
a&nbsp;klepněte na tlačítko <span class="nabidka">Další</span>.</p>

<div class="img-center">
<img src="../images/t8-obr02.png" alt="Průvodce vytvářením účtu - Identita" width="476" height="437" />
</div>

<p>Vyplňte svou e-mailovou adresu a&nbsp;jméno, které chcete, 
aby se zobrazovalo v diskusních skupinách. Až budete hotovi, 
klepněte na tlačítko <span class="nabidka">Další</span>.</p>

<div class="img-center">
<img src="../images/t8-obr03.png" alt="Průvodce vytvářením účtu - Informace o serveru" width="476" height="437" />
</div>


<p>Nyní potřebujete vyplnit adresu diskusního serveru. Nevím, 
který server chcete v&nbsp;tomto kontě používat, já zvolím "news.zcu.cz".</p>

<div class="img-center">
<img src="../images/t8-obr04.png" alt="Průvodce vytvářením účtu - Název účtu" width="476" height="437" />
</div>


<p>Jméno účtu zvolte jaké chcete. V&nbsp;tomto příkladu 
ponechám výchozí "news.zcu.cz".</p>

<div class="img-center">
<img src="../images/t8-obr05.png" alt="Průvodce vytvářením účtu - Gratulujeme" width="476" height="437" />
</div>

<p>Zkontrolujte zadané údaje a&nbsp;klepněte 
na tlačítko <span class="nabidka">Dokončit</span>.</p>

<div class="img-center">
<img src="../images/t8-obr06.png" alt="Odebírat" width="478" height="386" />
</div>

<p>Nyní byste měli mít pod <span class="nabidka">Lokálními složkami</span> 
novou složku pojmenovanou "news.zcu.cz" (ve vašem případě se bude jednat 
o&nbsp;jiný server). Označte ji, klepnutím pravého tlačítka myši vyvolejte 
místní nabídku a&nbsp;zvolte <span class="nabidka">Přihlásit k odebírání...</span>. 
Nyní se dostáváme k&nbsp;tomu, co potřebujete. Poklepejte nebo označte 
diskusní skupinu, kterou chcete odebírat a&nbsp;klepněte na 
tlačítko <span class="nabidka">Odebírat</span>.</p>

<div class="img-center">
<img src="../images/t8-obr07.png" alt="Stažení hlaviček zpráv" width="295" height="218" />
</div>

<div class="ipn-bottom">
<ul>
	<li>Následující:
	  <a href="./motivy-vzhledu.php">Motivy vzhledu</a></li>
	<li>Předchozí:
		<a href="./filtry.php">Filtry</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
