<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Práce s přílohami');
	$page->setHeadline('Práce s přílohami','Úvod do Thunderbirdu, 4. část');
	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial, přílohy');
	$page->setDescription ('Návod jak v Mozilla Thunderbirdu pracovat s přílohami');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
	  <a href="./antispamovy-filtr.php">Antispamový filtr</a></li>
	<li>Předchozí:
		<a href="./prace-s-postou2.php">Vytváření a&nbsp;používání podpisu</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>Jednou za čas budete určitě potřebovat přiložit k&nbsp;e-mailové zprávě nějaký soubor 
jako přílohu. 4.&nbsp;díl bude hlavně o&nbsp;úpravě příloh a&nbsp;o&nbsp;tlačítkách, které 
naleznete na <span class="nabidka">Liště adresáře</span>. Nyní byste měli být schopni se, 
alespoň částečně, pohybovat v uživatelském prostředí programu Thunderbird. 
V dnešním díle se pokusím přidat další střípky.</p>

<h2 class="nice thunderbird">Jak upravovat přílohy</h2>

<p>Jako první věc potřebujete otevřít novou e-mailovou zprávu.</p>

<div class="img-center">
<img src="../images/t4-obr01.png" alt="Psaní zprávy" width="640" height="473" />
</div>

<p>Pokud již máte, vidíte tlačítko <span class="nabidka">Připojit</span>.</p>

<div class="img-center">
<img src="../images/t4-obr02.png" alt="Připojit" width="56" height="48" />
</div>

<p>Na pravé straně tohoto tlačítka máte též šipku dolů. Po klepnutí na ni máte 
dvě volby: připojit k e-mailové zprávě soubor či webovou stránku. Klepněte na 
tlačítko <span class="nabidka">Připojit</span> a&nbsp;v&nbsp;zobrazeném dialogu můžete 
procházet obsah vašeho disku.</p>

<div class="img-center">
<img src="../images/t4-obr03.png" alt="Zvolte soubor přílohy" width="640" height="472" />
</div>

<p>Zvolte soubor, který chcete připojit k&nbsp;e-mailové zprávě a&nbsp;klepněte na 
tlačítko <span class="nabidka">Otevřít</span>. Vaše e-mailová zpráva má nyní 
jako přílohu soubor. Pokud chcete přidat více souborů, postačí, když celý postup 
zopakujete. Pokud chcete jako přílohu přiložit webovou stránku, zvolte 
<span class="nabidka">Připojit WWW stránku...</span> a&nbsp;v&nbsp;dialogu vyplňte adresu 
stránky.</p>

<div class="img-center">
<img src="../images/t4-obr04.png" alt="Psaní zprávy" width="640" height="473" />
</div>

<h2 class="nice thunderbird">Lišta adresáře</h2>

<ul>
<li><p>Nový kontakt:</p>
<img src="../images/t4-obr05.png" alt="Nový kontakt" width="72" height="48" />
<p>Tlačítko vám umožní vytvořit nový kontakt ve zvolené složce Adresáře. 
Nový kontakt může být kontaktem na vašeho známého, obchodního partnera apod.</p></li>

<li><p>Nový seznam:</p>
<img src="../images/t4-obr06.png" alt="Nová skupina" width="72" height="48" />
<p>Tlačítko otevře nové okno, ve kterém můžete vytvořit nebo editovat 
skupinu adres.</p></li>

<li><p>Vlastnosti:</p>
<img src="../images/t4-obr07.png" alt="Vlastnosti" width="59" height="48" />
<p>Tlačítko umožní upravit označený kontakt.</p></li>

<li><p>Nová zpráva:</p>
<img src="../images/t4-obr08.png" alt="Nová zpráva" width="70" height="48" />
<p>Tlačítko otevře nové okno pro napsání e-mailové zprávy a&nbsp;do 
seznamu příjemců (zprávy) přidá označené kontakty.</p></li>

<li><p>Smazat:</p>
<img src="../images/t4-obr09.png" alt="Smazat" width="48" height="48" />
<p>Tlačítko provede vymazání označeného kontaktu.</p></li>

</ul>

<div class="ipn-bottom">
<ul>
	<li>Následující:
	  <a href="./antispamovy-filtr.php">Antispamový filtr</a></li>
	<li>Předchozí:
		<a href="./prace-s-postou2.php">Vytváření a&nbsp;používání podpisu</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
