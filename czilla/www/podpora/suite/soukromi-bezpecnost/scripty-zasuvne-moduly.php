<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Skripty a zásuvné moduly');
	$page->setHeadline('Skripty a zásuvné moduly', 'Soukromí a bezpečnost v Mozilla Suite, 5. část');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<div class="ipn-top">
<ul>
	<li>Předchozí:
		<a href="./hesla.php">Hesla</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<h2 class="nice mozilla">Pátý krok - Skripty a zásuvné moduly (pluginy)</h2>

<p>JavaScript a zásuvné moduly (pluginy) značným způsobem vylepšily zážitek z prohlížení Internetu přidáním funkcí ke stránkám, které 
původně obsahovaly pouze text a obrázky. Mají však také, jako vše, svoje nevýhody, které ale mohou být
zmírněny nastaveními Mozilly.</p>

<div class="img-center"><div class="img-c" style="width:420px">
	<a href="../images/bezpecnost-skripty-moznosti.png"
	class="zoom"><img
	src="../images/bezpecnost-skripty-moznosti-m.png"
	title="Nastavení skriptů"
	alt="Nastavení skriptů"
	height="281" width="420" /></a>
</div></div>

<ul>
  <li>
		<p><strong>Doporučená nastavení rámečku <span class="nabidka">Povolit Javascript pro</span> jsou</strong>:</p>
		<p>Zaškrtněte volbu <span class="nabidka">Prohlížeč</span> a odškrtněte volbu <span class="nabidka">Poštu &amp; Diskusní skupiny</span>.</p>
	<p>Důvodem, proč toto doporučuji je, že neznám jakýkoliv důvod pro používání Javascriptu v&nbsp;poště a&nbsp;diskusních skupinách,kromě užití skriptu pro načtení dat ze vzdáleného serveru (ověřujíce, že jste zprávu přečetli) nebo kromě věcí, které buď nepotřebujete nebo nechcete, aby je skripty dělaly.</p>
	</li>
	<li>
		<p><strong>Doporučená nastavení pro <span class="nabidka">Umožnit skriptům</span> jsou</strong>:</p>
		<p>Vypněte volby <span class="nabidka">Přemisťovat nebo měnit velikost otevřených oken</span>, 
    <span class="nabidka">Přenést okno do popředí nebo do pozadí</span>, 
    <span class="nabidka">Změnit text na stavové liště</span> (to vás pomůže ochránit před oklamáním, např. stránkami, které se vydávají
		za jiné stránky) a&nbsp;<span class="nabidka">Skrýt stavovou lištu</span>.</p>
		<p>Zapněte volby <span class="nabidka">Měnit obrázky</span> (to je např. používáno pro efekty při přejetí myší přes objekt),
		<span class="nabidka">Vytvářet nebo měnit cookies</span> a&nbsp;
		<span class="nabidka">Číst cookies</span>. Ostatní funkce vám (dle mého názoru) neuškodí ani povolené ani zakázané.</p></li>
	<li>

		<p><strong>Doporučené nastavení <span class="nabidka">Povolit zásuvné moduly pro Poštu &amp; Diskusní skupiny</span> je</strong>:</p>
		<p>Vypněte volbu <span class="nabidka">Povolit zásuvné moduly pro Poštu &amp; Diskusní skupiny</span>. Opět zde nevidím důvod pro použití zásuvných modulů v&nbsp;poště a&nbsp; diskusních skupinách, ale naopak vidím potenciál ke zneužití.</p>
	</li>

</ul>

<p>S těmito použitými nastaveními by měla Mozilla ochránit vaše online soukromí a&nbsp;bezpečnost ještě lépe. Avšak, jak jsem řekl na začátku: Bezpečné použití Internetu je také vždy zodpovědností každého uživatele.</p>
<p>To znamená: opatrně s&nbsp;přílohami, které otevíráte (když jste na pochybách, zeptejte se odesílatele co to je, co vám poslal), používejte antivirový program a&nbsp;osobní firewall. Firewally pro domácí použití a&nbsp;osobní firewall jsou zadarmo :-)</p>

<p>Zajímavé rozšíření pro Mozillu je <a href="http://prefbar.mozdev.org/" hreflang="en" title="Domovská stránka rozšíření PrefBar">Prefbar</a>. Přidá nastavitelný ovládací panel, který vám umožní měnit spoustu nastavení, která tu byla zmíněna (plus spoustu dalších).</p>

<div class="ipn-bottom">
<ul>
	<li>Předchozí:
		<a href="./hesla.php">Hesla</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
