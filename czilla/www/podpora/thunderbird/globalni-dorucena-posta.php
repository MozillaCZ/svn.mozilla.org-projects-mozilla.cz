<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Globální doručená pošta';
	$page->headline = array('Globální doručená pošta','Návod, jak si v Thunderbirdu poradit s nastavením typu účtu');

	$page->setKeywords('globální doporučená pota, inbox, IMAP, POP, podpora, nápověda, pomoc, návod, mozilla, thunderbird, pošťák');
	$page->setDescription('Návod, jak si v Thunderbirdu poradit s nastavením typu účtu');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links'); 
	$page->addSideBox('tips','thunderbird');

	$page->includeHeader();
?>

<h2>Při vytváření nového účtu</h2>

<p>Když v Thunderbirdu vytváříte nový učet pro POP server, Průvodce vytvářením
učtu se vás dotáže, zda si pro tento účet přejete použít složku Globální 
doručené pošty. Pokud je tomu tak, zkontrolujte zda je příslušné políčko opravdu 
zaškrtnuté.</p>

<div class="img-center"><div class="img-c" style="width: 250px;">
	<a href="images/globalni-dorucena-posta-01.png" title="Klepněte pro plnou velikost..." class="zoom"><img src="images/globalni-dorucena-posta-01-m.png" alt="Průvodce vytvářením účtu" style="width: 250px; height: 229px;" /></a>
</div></div>

<h2>Změna nastavení Globální doručené pošty pro existující účet</h2>
<p>Pro to, aby existující účet používal složku Globální doručené pošty, je 
zapotřebí provést následující tři kroky.</p>

<h3>Změna cílové složky pro příchozí poštu</h3>
<p>V nabídce <span class="nabidka">Nástoje</span>  &gt; 
<span class="nabidka">Nastavení účtu</span>  &gt; 
<span class="nabidka">Nastavení serveru</span> klepněte na tlačítko "Rozšířené",
v&nbsp;následujícím dialogovém okně klepněte na <span class="nabidka">Globální 
doručená pošta</span> a&nbsp;potvrďte.</p>

<div class="img-center"><div class="img-c" style="width: 250px;">
	<a href="images/globalni-dorucena-posta-02.png" title="Klepněte pro plnou velikost..." class="zoom"><img src="images/globalni-dorucena-posta-02-m.png" alt="Rozšířené nastavení účtu" style="width: 250px; height: 111px;" /></a>
</div></div>

<p><strong>Důležité</strong>: pokud daný účet již nějaké zprávy obsahuje,
měli byste je Místních složek přesunou <strong>předtím</strong>, než
provedete výše zmíněnou změnu nastavení. Pokud tyto zprávy nepřesunete a&nbsp;přesto
zapnete složku Globální doručené pošty, účet se již nebude zobrazovat v panelu 
složek a&nbsp;vy se k jeho zprávám již nedostanete, dokud pro daný účet opětovně 
nezakážete použití složky Globální doručené pošty.</p>

<p>Přejete-li si pro daný účet nepoužívat složku Globální doručené pošty, 
klepněte na <span class="nabidka">Doručená pošta pro tento účet</span> nebo 
<span class="nabidka">Doručená pošta pro jiný účet</span> a&nbsp;potvrďte.</p>

<h3>Kontrola nastavení ostatních složek a filtry</h3>
<p>Poté, co jste změnili nastavení složky Globální doručené pošty, zkontrolujte,
je dobré provést také následující:</p>

<ul>
<li>V nabídce 
<span class="nabidka">Nástoje</span>  &gt; 
<span class="nabidka">Nastavení účtu</span>  &gt; 
<span class="nabidka">Kopie a&nbsp;složky</span> se podívejte na cílové složky
Odelslanou poštu, Koncepty a Šablony. Ujistěte se, že zprávy pro daný účet
budou ukládány do složek podle vašich představ.</li>
<li>Pokud pro daný účet používáte <a href="./nevyzadana-posta.html" 
title="Mozilla Thunderbird: Nastavení filtru nevyžádané pošty">filtr nevyžádané
pošty</a>, zkontrolujte zda je v&nbsp;abídce <span class="nabidka">Nástoje</span> &gt; 
<span class="nabidka">Nastavení nevyžádané pošty</span> pro nevyžádanou poštu
nastavena složka podle vašich představ.</li>
<li>Pokud jste vytvořili nějaké třídíci filtry zpráv, v nabídce 
<span class="nabidka">Nástoje</span>  &gt;  <span class="nabidka">Třídící filtry
zpráv</span> se přesvědčete, že jejich vlastnosti odpovídají vašemu novému nastavení 
složek doručené pošty. Zvláště důležité je to v&nbsp;případě, kdy začínáte používat 
složku Globální doručené pošty &ndash; pokud jakýkoliv filtr přemísťuje poštu do 
složky, kterou jste právě přesměrovali do Globální doručené pošty, měli byste 
tento filtr zakázat či příslušně upravit.</li>
</ul>

<h3>Ukončení a znovuspuštění Thunderbirdu</h3>
<p><strong>Důležité</strong>: Ukončení a&nbsp;znovuspuštění Thunderbirdu je nutné 
provést <strong>předtím</strong>, než začnete do nově nastavených složek
přijímat jakoukoliv poštu. Pokud tak neučiníte, zprávy mohou být stahovány do
svých původních umístění a&nbsp;v&nbsp;krajním případě se tak stát nepřístupnými.</p>

<h2>Další informace</h2>
<ul>
<li>Poštu z&nbsp;více účtů můžete směrovat do jedné složky i&nbsp;v&nbsp;případě, 
že složku Globální doručené pošty nepoužíváte. To uděláte tak, že ve výše zmíněném 
dialogu namísto <span class="nabidka">Globální doručená pošta</span> zvolíte
<span class="nabidka">Doručená pošta pro jiný účet</span> a&nbsp;nastavíte 
příslušný účet.</li>
<li>V nastavení přesměrovávaného účtu si můžete všimnout, že cesta k místnímu 
adresáři nekoresponduje s&nbsp;cestou k vašemu profilu. To je ale v&nbsp;pořádku, 
neboť  v&nbsp;místní složky uchovávají různé soubory specifické pro každý 
uživatelský účet a&nbsp;tak nemohou být všechny uloženy v&nbsp;jedné složce.</li>
</ul>

<?php
	$page->includeFooter();
?>