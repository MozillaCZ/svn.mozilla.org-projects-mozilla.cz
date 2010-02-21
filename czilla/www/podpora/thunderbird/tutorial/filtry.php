<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Filtry');
	$page->setHeadline('Filtry','Úvod do Thunderbirdu, 7. část');
	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial, filtry');
	$page->setDescription ('Návod jak v Mozilla Thunderbirdu pracovat s filtry');
// 	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Následující:
	  <a href="./diskusni-skupiny.php">Diskusní skupiny</a></li>
	<li>Předchozí:
		<a href="./import.php">Import elektronické pošty a&nbsp;kontaktů</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<h2 class="nice thunderbird">Filtry</h2>

<p>Pokud máte velký příval e-mailů do příchozí složky, může být časově 
náročné je číst. Jejich automatickým rozdělením ušetříte čas a&nbsp;budete 
tak schopni číst důležité e-maily jako první. To bude vyžadovat, abyste 
do programu Mozilla Thunderbird přidali filtr, který bude příchozí e-maily 
rozdělovat do různých složek. V tomto díle si ukážeme, jak takový filtr 
vytvořit.</p>

<p>První věc, kterou potřebujeme udělat, je vytvořit novou složku. 
Pojmenujeme ji třeba "Důležité".</p>

<div class="img-center">
<img src="../images/t7-obr01.png" alt="Lokální složky" width="716" height="522" />
</div>

<p>Jak vidíte, označil jsem <span class="nabidka">Lokální složky</span>. 
Nyní klepněte na pravé tlačítko myši a&nbsp;v&nbsp;nabídce zvolte 
<span class="nabidka">Nová složka...</span>. Otevře se vám následující okno:</p>

<div class="img-center">
<img src="../images/t7-obr02.png" alt="Nová složka" width="229" height="187" />
</div>

<p>Pojmenujte novou složku (já ji pojmenuji "Důležité", ale můžete zvolit 
libovolné jméno), zvolte místo, kam ji chcete umístit a&nbsp;klepněte na 
tlačítko <span class="nabidka">OK</span>.</p>

<div class="img-center">
<img src="../images/t7-obr03.png" alt="Složka Důležité" width="716" height="522" />
</div>

<p>Pokud jste vše udělali správně, měli byste nyní mít novou podsložku 
ve složce <span class="nabidka">Lokální složky</span>. Novou složku můžete 
též vytvořit v&nbsp;průběhu tvorby filtru. Ovšem dle mého názoru je lépe vytvořit 
složku jako první.</p>

<div class="img-center">
<img src="../images/t7-obr04.png" alt="Třídící filtry zpráv" width="489" height="365" />
</div>

<p>Přejděte do nabídky <span class="nabidka">Nástroje -&gt; 
Poštovní filtry...</span>, otevře se vám nové okno, kde můžete vytvořit 
nový filtr klepnutím na tlačítko <span class="nabidka">Nový...</span>. 
Jak z&nbsp;obrázku vidíte, můžete zvolit, pro které konto bude tento filtr 
aktivní. Klepnutím na tlačítko <span class="nabidka">Nový...</span> získáte dialog:</p>

<div class="img-center">
<img src="../images/t7-obr05.png" alt="Pravidla třídění" width="574" height="506" />
</div>

<p>Prvně potřebujete nový filtr pojmenovat. Já jej pro tento příklad pojmenuji 
"Důležité". Jeho nastavení je omezené pouze tím, co od něj chcete. Nejlepší 
cestou je prozkoumat nastavení na vlastní pěst. Já jsem si vytvořil filtr, 
který bude filtrovat příchozí e-maily na adresu "beruska@beruska.cz" a&nbsp;přesouvat 
ty důležité do složky "Důležité". Jak vidíte z&nbsp;obrázku, můžete též zde vytvořit 
novou složku. Pokud jste hotovi, klepněte na tlačítko <span class="nabidka">OK</span>.</p>

<div class="img-center">
<img src="../images/t7-obr06.png" alt="Třídící filtry zpráv" width="489" height="365" />
</div>

<p>Nyní jste vytvořili nový filtr. Ten nyní můžete libovolně modifikovat dle svých potřeb.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
	  <a href="./diskusni-skupiny.php">Diskusní skupiny</a></li>
	<li>Předchozí:
		<a href="./import.php">Import elektronické pošty a&nbsp;kontaktů</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>


<?php
	$page->includeTemplate('footer');
?>
