<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Obrázky a bannery');
	$page->setHeadline('Obrázky a bannery','Soukromí a bezpečnost v Mozilla Suite, 2. část');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./vyskakovaci-okna.php">Vyskakovací okna</a></li>
	<li>Předchozí:
		<a href="./sprava-cookies.php">Práce s cookies</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<h2 class="nice mozilla">Druhý krok - Obrázky a reklamní bannery</h2>

<p>"Když slova nejsou jasná, zaměřím se na fotografie. Když jsou obrázky nevhodné, spokojím se s mlčením." - Ansel Adams</p>

<p>Další funkcí spojenou s bezpečností a soukromím v <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> je blokování obrázků pomocí <span class="nabidka">Správce obrázků</span>. <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> vám umožňuje blokovat obrázky, jako jsou třeba reklamní bannery.</p>

<div class="img-center"><div class="img-c" style="width:420px">
	<a href="../images/bezpecnost-obrazky-predvolby.png"
	class="zoom"><img
	src="../images/bezpecnost-obrazky-predvolby-m.png"
	title="Okno předvoleb k obrázkům"
	alt="Okno předvoleb k obrázkům"
	height="281" width="420" /></a>
</div></div>

<p>Na obrázku výše můžete vidět okno předvoleb pro obrázky v <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a>.</p>

<ul>
  <li><strong>Doporučená nastavení <span class="nabidka">Nahrávání obrázků</span> jsou</strong>:<br />
  Zvolte <span class="nabidka">Povolit všechny obrázky</span>. Můžete také zvolit <span class="nabidka">Povolit obrázky pouze z registrovaného serveru</span>, avšak díky tomu se mohou některé stránky zobrazit bez obrázků. Pokud byste navštívili například webovou stránku <tt>www.cnn.com</tt>, znamenala by tato volba, že bude <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> přijímat pouze obrázky z adresy <tt>www.cnn.com/...</tt>. Pokud by tato stránka používala server třetí strany pro zajištění multimediálního obsahu v případě vysokého zatížení, což řada rozsáhlých stránek dělá, mohlo by toto nastavení způsobit, že si budete stránku prohlížet bez obrázků. Moje doporučení je tedy povolit všechny obrázky a blokovat je případ od případu.</li>
  <li><strong>Doporučené nastavení položky <span class="nabidka">Nenačítat v poště obrázky ze vzdálených serverů</span> je</strong>:<br />
  Zaškrtněte volbu <span class="nabidka">Nenačítat v poště obrázky ze vzdálených serverů</span>. Toto je velice důležité a šikovné nastavení (pokud používáte poštovního klienta v <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a>), které je často přehlíženo. Může vás ochránit od řady nevyžádané pošty (spamu).<br />
  
Teď se patrně divíte, co mají obrázky společného s nevyžádanou poštou. Jednoduše: Řada spammerů vám pošle nevyžádanou poštu v <abbr title="Hypertext Markup Language" lang="en">HTML</abbr> formátu. Při zobrazení zprávy stáhnete obrázek ze serveru, často "neviditelný" (1x1 pixel) <abbr title="Graphics Interchange Format" lang="en">GIF</abbr>, který má k sobě připojeno ID. To znamená, že pokud je tento obrázek stáhnut ze spammerova serveru, záznam na tomto serveru bude obsahovat ID, které bylo přiřazeno vaší emailové adrese, z čehož spammer zjistí, že vaše adresa je platná a že jste zprávu otevřeli. To zapříčiní nárůst nevyžádané pošty do vaší schránky. Pokud jste někdy dumali nad podivnými zprávami, které zdánlivě nic neobsahovaly, teď již znáte jejich účel - zjistit, zda existujete. <br />

Proto vám silně doporučuji, abyste tuto možnost zaškrtli, čímž znemožníte nahrávání obrázků ze vzdálených serverů. Pokud vás zajímá, zda to také nezpůsobí, že <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> nebude zobrazovat obrázky, které vám poslali bratr nebo sestra z posledního rodinného setkání, nemusíte se ničeho obávat. Tato volba nebude blokovat obrázky, které jsou obsaženy v emailu, pouze ty, které se stahují ze vzdáleného serveru.</li>

<li><strong>Doporučené nastavení volby <span class="nabidka">Animované obrázky se přehrávají</span> je</strong>:<br />
Nastavení této volby závisí na vašich osobních preferencích. Některé stránky používají animované obrázky. Když jsou používány s mírou, mohou vést k efektivnějšímu využití dostupného prostoru na stránce tím, že zobrazí 2 rozdílné věci na jednom místě. Nicméně, příliš mnoho animovaných obrázků, zejména pokud se jedná o špatně navržené reklamní bannery, může otravovat a přidat na stránky rušivé elementy. To vás odvede od toho, co je důležité, např. od obsahu stránky. Takže pokud navštěvujete stránky, u kterých se vám zdá, že jste ve Vegas, doporučil bych nastavení <span class="nabidka">Animované obrázky se přehrávají</span> na hodnotu <span class="nabidka">Jednou</span>, jinak postačí <span class="nabidka">Podle specifikace obrázku</span>.</li>

</ul>

<p>Klepnutím na tlačítko <span class="nabidka">Zobrazit práva k obrázkům</span> otevřete dialog <span class="nabidka">Správce obrázků</span>.</p>

<div class="img-center">
<img src="../images/bezpecnost-obrazky-spravce.png" alt="Správce obrázků" width="364" height="426" />
</div>

<p><span class="nabidka">Správce obrázků</span> vám ukáže stránky, které mohou či nemohou načítat obrázky. Pro odstranění stránky ze seznamu klepněte na název stránky / serveru a poté na tlačítko <span class="nabidka">Smazat server</span>.</p>

<h2 class="nice mozilla">Cílené blokování obrázků ze serveru</h2>

<p>Pokud jste v předvolbách zvolili <span class="nabidka">Povolit všechny obrázky</span>, budete možná chtít cíleně blokovat otravné reklamní bannery. Pro toto nastavení klepněte pravým tlačítkem na obrázek a v místní nabídce zvolte <span class="nabidka">Blokovat obrázky z tohoto serveru</span>.</p>

<div class="img-center"><div class="img-c" style="width:216px">
  <img src="../images/bezpecnost-obrazky-nabidka.png"
	title="Blokování obrázků"
	alt="Blokování obrázků"
	height="294" width="216" />
</div></div>

<p>Pokud to uděláte, mějte na mysli, že <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> zablokuje celou (pod)doménu. Např. pokud stránky načítají reklamní bannery z adresy <tt>www.nejakastranka.com/reklamy</tt>, znamená to, že Mozilla již nebude přijímat žádné obrázky z adresy <tt>www.nejakastranka.com</tt>, což bude nejspíš obsahovat i obrázky, které chcete vidět. Jestliže jsou ale reklamní bannery načítány z adresy typu <tt>reklamy.nejakastranka.com</tt>, nebo jiného serveru jako <tt>reklamy.kliknizde.net</tt>, budou blokovány pouze reklamy. Takže pokud se vám zdá, že na stránce chybí obrázky, prostě klepněte pravým tlačítkem myši tam, kde by měl být obrázek a zvolte <span class="nabidka">Povolit obrázky z tohoto serveru</span>.</p>

<h2 class="nice mozilla">Flash reklamy a pokročilé blokování</h2>

<p>Patrně jste už zjistili, že Mozilla je ve svých původních schopnostech blokovat reklamu poněkud omezená. Pokud jsou reklamy načítány z podadresářů a ne z poddomén, blokování reklamy bude taktéž blokovat všechny ostatní obrázky. A navíc stále větší počet stránek používá reklamy na bázi flash animací, které nemohou být nastavením Mozilly blokovány. Flashové reklamy navíc mohou mít negativní efekt na rychlost vašeho prohlížeče a celého počítače (platí to pro ty z nás se staršími stroji).</p>

<p>Naštěstí existují způsoby, jak o dost zlepšit schopnost Mozilly blokovat reklamy. Pokud si instalujete rozšíření <a href="/doplnky/rozsireni/adblock/" title="AdBlock v češtině">AdBlock</a>, nebudou již výše zmíněné nevýhody platit. Nyní můžete blokovat podadresáře, specifické typy reklam (např. Flash) a více. 
</p>

<hr />

<p><strong>Zamyšlení se nad blokováním reklam</strong></p>

<p>Asi vám reklamní bannery přijdou tak "užitečné", jako komukoliv jinému, takže se vám možnost je zablokovat jeví jako dobrá věc. Přesto si však uvědomte, že provozovat stránky, které nejsou hobbystické jako třeba tato, může být dost drahé a ti, kteří je spravují jsou rádi, stejně jako vy, když jsou schopni splácet svoje účty. V mnoha případech jsou velkou částí příjmů stránek právě reklamní bannery.</p>

<p>A proto prosím používejte blokování reklamy cíleně. Pokud máte nějaké stránky rádi a reklamy jsou na nich umístěny inteligentním způsobem (takže neobtěžují), neblokujte je. Jsem si jistý, že to majitelé serverů ocení.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./vyskakovaci-okna.php">Vyskakovací okna</a></li>
	<li>Předchozí:
		<a href="./sprava-cookies.php">Práce s cookies</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>
