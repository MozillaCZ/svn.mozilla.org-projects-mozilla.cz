<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Motivy vzhledu');
	$page->setHeadline('Motivy vzhledu','Úvod do Thunderbirdu, 9. část');
	$page->setKeywords ('mozilla, thunderbird, e-mail, e-mailový klient, začátečník, beginner, návod, tutorial, motivy vzhledu');
	$page->setDescription ('Návod jak v Mozilla Thunderbirdu pracovat s motivy vzhledu');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Některé informace na stránkách podpory mohou být zastaralé. Aktuální informace naleznete na serveru
<a href="http://www.mozilla.cz/podpora/thunderbird/">Mozilla.cz</a>.</div>

<div class="ipn-top">
<ul>
	<li>Předchozí:
		<a href="./diskusni-skupiny.php">Diskusní skupiny</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>


<h2 class="nice thunderbird">Thunderbird a motivy vzhledu</h2>

<p>Čas od času se aktuální motiv vzhledu okouká. Pod pojmem "motiv vzhledu" 
myslím vhled uživatelského rozhraní. Pokud je to i&nbsp;váš případ, pak tu pro vás 
mám tento díl, v&nbsp;kterém ukáži, jak změnit vzhled uživatelského rozhraní.</p>

<p>Spusťte program Mozilla Thunderbird a&nbsp;zvolte v&nbsp;hlavní nabídce 
<span class="nabidka">Nástroje -&gt; Správce motivů vzhledu</span>. Pokud 
jste postupovali správně, měli byste se dívat na následující okno:</p>

<div class="img-center">
<img src="../images/t9-obr01.png" alt="Spráce motivů vzhledu" width="587" height="384" />
</div>

<p>Pokud ještě nemáte stažený motiv vzhledu, klepněte v&nbsp;dialogu na 
odkaz <span class="nabidka">Získat nový motiv vzhledu</span>, který vás 
přesměruje na stránky 
<a href="https://addons.mozilla.org/themes/?application=thunderbird" 
title="Mozilla Update: Domovská stránka">Mozilla Update</a>. Odtud si můžete 
libovolný motiv stáhnout k&nbsp;sobě na disk.</p>

<p>Až bude nový motiv vzhledu mít, klepněte v&nbsp;dialogu na tlačítko 
<span class="nabidka">Instalovat</span> a&nbsp;zvolte umístění motivu vzhledu.</p>

<div class="img-center">
<img src="../images/t9-obr02.png" alt="Volba motivu vzhledu" width="563" height="419" />
</div>

<p>Po zvolení motivu vzhledu budete dotázáni, zdali si přejete motiv vzhledu 
nainstalovat. Pokud skutečně chcete, klepněte na tlačítko 
<span class="nabidka">OK</span>.</p>

<div class="img-center">
<img src="../images/t9-obr03.png" alt="Potvrzující dialog" width="524" height="126" />
</div>

<p>V dialogu je nyní k&nbsp;dispozici nový motiv vzhledu. Pokud jej chcete 
aplikovat, označte jej a&nbsp;klepněte na tlačítko 
<span class="nabidka">Použít motiv vzhledu</span>.</p>

<div class="img-center">
<img src="../images/t9-obr04.png" alt="Správce motivů vzhledu" width="587" height="384" />
</div>

<p>Po zvolení této volby Thunderbird vyžaduje restart. Po restartu 
aplikace se vám ukáže nový vzhled v&nbsp;plné kráse.</p>

<div class="img-center">
<img src="../images/t9-obr05.png" alt="Thunderbird v novém vzhledu" width="716" height="522" />
</div>

<p>Uvedený postup lze kdykoliv zopakovat a&nbsp;mít nainstalováno 
libovolné množství vzhledů mezi kterými lze snadno přepínat.</p>

<div class="ipn-bottom">
<ul>
	<li>Předchozí:
		<a href="./diskusni-skupiny.php">Diskusní skupiny</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
