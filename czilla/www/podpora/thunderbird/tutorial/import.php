<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Import elektronické pošty a kontatků');
	$page->setHeadline('Import elektronické pošty a kontatků','Úvod do Thunderbirdu, 6. část');
	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial, import, Outlook, Outlook Express');
	$page->setDescription ('Návod jak v Mozilla Thunderbirdu importovat poštu');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
	  <a href="./filtry.php">Filtry</a></li>
	<li>Předchozí:
		<a href="./antispamovy-filtr.php">Antispamový filtr</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<h2 class="nice thunderbird">Import elektronické pošty a kontaktů</h2>

<p>Změna programu na správu elektronické pošty nemusí být obtížná, pokud 
máte dobrý návod, který vám pomůže. Pokusím se vám tedy ukázat, jak 
importovat data z&nbsp;vašeho starého správce elektronické pošty. Mluvím 
o&nbsp;klientech jako Outlook, Netscape či Eudora. Tak jdeme na to.</p>

<p>Pokud zvolíte v&nbsp;nabídce <span class="nabidka">Nástroje &gt; Importovat...</span>, 
otevře se vám okno, kde máte tři volby. My budeme mluvit o&nbsp;prvních dvou: 
importu elektronické pošty a&nbsp;kontaktů.</p>

<h3>Import pošty</h3>

<p>První věc, kterou musíte udělat, je import elektronické pošty 
z&nbsp;vašeho předchozího účtu. Zvolte <span class="nabidka">Pošta</span> 
a&nbsp;klepněte na tlačítko <span class="nabidka">Další</span>.</p>

<div class="img-center">
<img src="../images/t6-obr01.png" alt="Importovat položky a nastavení" width="434" height="306" />
</div>

<p>Zvolte z&nbsp;nabídky klienta, kterého jste používali před programem 
Thunderbird. Já pro tento příklad použiji Outlook Express. Klepněte 
na tlačítko <span class="nabidka">Další</span>.</p>

<div class="img-center">
<img src="../images/t6-obr02.png" alt="Importovat položky a nastavení II" width="434" height="306" />
</div>

<p>Jak vidíte, dostali jste informaci o&nbsp;tom, co program Thunderbird 
importoval z&nbsp;předchozího klienta. Jako poslední klepněte na tlačítko 
<span class="nabidka">Dokončit</span>.</p>

<div class="img-center">
<img src="../images/t6-obr03.png" alt="Importovat položky a nastavení III" width="434" height="306" />
</div>

<p>Jak vidíte, označil jsem složku s&nbsp;importovanými emaily. Program 
Thunderbird vždy vytvoří podsložku v&nbsp;<span class="nabidka">Místních
 složkách</span>. Nemůže se tak stát, že se smíchají s&nbsp;ostatními 
 e-mailovými zprávami.</p>

<div class="img-center">
<img src="../images/t6-obr04.png" alt="Importovaná pošta" width="716" height="522" />
</div>

<p>Pokud chcete provést import z&nbsp;dalšího klienta, stačí postup opakovat. Co
myslíte, je to obtížné?</p>

<h3>Import kontaktů</h3>

<p>Pro importování kontaktů z&nbsp;jiných klientů 
zvolte <span class="nabidka">Kontakty</span> a&nbsp;klepněte 
na tlačítko <span class="nabidka">Další</span>.</p>

<div class="img-center">
<img src="../images/t6-obr05.png" alt="Importovat položky a nastavení" width="434" height="306" />
</div>

<p>Zvolte klienta, ze kterého chcete kontakty importovat. 
Já v&nbsp;tomto příkladě zvolím Outlook Express. Klepněte na 
tlačítko <span class="nabidka">Další</span>.</p>

<div class="img-center">
<img src="../images/t6-obr06.png" alt="Importovat položky a nastavení II" width="434" height="306" />
</div>

<p>Ještě jednou získáte informaci o&nbsp;tom, jakou akci program 
Thunderbird dokončil. Tato zpráva se může lišit v závislosti 
na kontaktech kterou importujete.</p>

<div class="img-center">
<img src="../images/t6-obr07.png" alt="Importovat položky a nastavení III" width="434" height="306" />
</div>

<p>Otevřete váš <span class="nabidka">Adresář</span>. Zde uvidíte, 
že program Thunderbird přidal importované kontakty do nové složky kontaktů.</p>

<div class="img-center">
<img src="../images/t6-obr08.png" alt="Adresář" width="670" height="453" />
</div>

<div class="ipn-bottom">
<ul>
	<li>Následující:
	  <a href="./filtry.php">Filtry</a></li>
	<li>Předchozí:
		<a href="./antispamovy-filtr.php">Antispamový filtr</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
