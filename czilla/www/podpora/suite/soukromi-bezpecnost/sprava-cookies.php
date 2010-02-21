<?php
	require_once '../../../inc/page.php';
	$page->setTitle('Práce s cookies');
	$page->setHeadline('Práce s cookies','Soukromí a bezpečnost v Mozilla Suite, 1. část');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>

<div class="ipn-top">
<ul>
	<li>Následující:
		<a href="./obrazky-bannery.php">Obrázky a bannery</a></li>
	<li>Předchozí:
		<a href="./">Obsah</a></li>
	<li class="ipn-index"><a href="./">Obsah</a></li>
</ul>
</div>

<p>Lidé si vybírají <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> z řady důvodů. Někteří proto, že chtějí zkusit "jiný" prohlížeč, jiní, protože se jim líbí možnosti, které <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> nabízí - jedná se například o funkci prohlížení v panelech. Řada uživatelů též oceňuje schopnosti <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> v oblasti soukromí a bezpečnosti, kde nabízí Správce souborů cookie, šifrování ukládaných dat, anti-spamový filtr a mnohé další funkce.</p>

<p>Dle mého názoru jsou <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> a Netscape 7.1 velmi bezpečné prohlížeče. I přesto můžete správným nastavením soukromí a bezpečnosti vylepšit vaši ochranu při prohlížení Internetu. Tato série článků vám ukáže, jak na to. Uvědomte si ale prosím, že pravděpodobně neexistuje žádná 100% bezpečnost. Například se mohou vyskytnout bezpečnostní chyby, které ještě nebyly objeveny. Nejvíce má však zodpovědnost za bezpečné používání Internetu každý konkrétní uživatel.
</p>

<h2 class="nice mozilla">První krok - Jak mít cookies pod kontrolou</h2>

<p>Cookies jsou malé kousky informací, které si váš prohlížeč pamatuje pro určitou stránku. Jsou ukládány v textovém souboru na vašem pevném disku. Cookies samy o sobě nepředstavují žádné bezpečnostní riziko. Nemohou obsahovat počítačový virus, nemohou být použity ke špehování ani nemohou číst obsah vašeho pevného disku. Mohou být však velmi užitečné a usnadňovat vám prohlížení Internetu. Webové stránky si mohou pamatovat, co jste naposledy dělali a přizpůsobit se vám. Nicméně nekteré společnosti vás pomocí cookies sledují a zaznamenávají vaše chování na Internetu. Je to o to horší, že většinou jste s těmito společnostmi nikdy nejednali a tím pádem jste jim nedali povolení vás sledovat.
</p>

<p>U starších prohlížečů, jako je Internet Explorer 5.x nebo Netscape 4.x, jste měli pouze možnost cookies úplně vypnout, a ztratit tak jejich výhody, nebo povolit všechny cookies a nebo muset odpovídat "Ano" či "Ne" na nekonečná výstražná okna, dotazující se, zda je stránce "x" dovoleno vytvořit cookie. Naštěstí, nové prohlížeče, jako např. Mozilla Suite, Netscape 7, Opera 7 a do jisté míry i Internet Explorer 6, vám dávají možnost výběru stránek oprávněných a neoprávněných k vytváření cookies.
</p>

<div class="img-center"><div class="img-c" style="width:420px">
	<a href="../images/bezpecnost-cookies-predvolby.png"
	class="zoom"><img
	src="../images/bezpecnost-cookies-predvolby-m.png"
	title="Okno předvoleb cookies"
	alt="Okno předvoleb cookies"
	height="281" width="420" /></a>
</div></div>

<p>Podle mého názoru je ideální nastavení zvolit <span class="nabidka">Povolit všechny soubory cookie</span> a <span class="nabidka">Upozornit před přijetím souboru cookie</span>. Tak budete odpovídat na dialogy typu "ano", "ne" pouze ve velmi málo případech a pro každou stránku tak učiníte pouze jednou. Stačí v dialogu zaškrtnout možnost <span class="nabidka">Použít moji volbu pro všechny cookie soubory z tohoto serveru</span>.</p>

<div class="img-center"><div class="img-c" style="width:302px">
	<a href="../images/bezpecnost-cookies-potvrzeni.png"
	class="zoom"><img
	src="../images/bezpecnost-cookies-potvrzeni-m.png"
	title="Dialog potvrzení cookies"
	alt="Dialog potvrzení cookies"
	height="71" width="302" /></a>
</div></div>

<p>Je zdě několik možností, které závisí na tom, jak prohlížíte obsah Internetu:</p>

<ul>
  <li>Jestliže nenavštěvujete stránky, které si potřebují zaznamenat, kdo jste nebo vás tato funkce nezajímá a navštěvujete stránky, které vám umožní přihlášení pouze s povolenými cookies, zvolte volbu <span class="nabidka">Přijímat všechny soubory cookie</span> spolu s volbou <span class="nabidka">Povolit pouze pro relaci</span>, čímž vypnete volbu <span class="nabidka">Upozornit před přijetím souboru cookie</span>.<br /> Poté bude <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a> přijímat všechny soubory cookie, ale budou automaticky mazány po ukončení relace (např. když ukončíte Mozilla Suite).</li>
  <li>Další možností k těmto doporučením je zvolit volby <span class="nabidka">Povolit soubory cookie pouze pro stránky jejich původu</span> nebo <span class="nabidka">Přijímat soubory cookie na základě pravidel</span>. Toto by mělo ve většině případů fungovat, obzvláště u větších stránek, ale může se stát, že v některých případech to fungovat nemusí.</li>
</ul>

<p>Pokud jste nechtěně zablokovali nebo povolili cookies pro určitou stránku, můžete to snadno změnit pomocí Správce souborů cookie.</p>

<div class="img-center"><div class="img-c" style="width:308px">
	<a href="../images/bezpecnost-spravce-cookies.png"
	class="zoom"><img
	src="../images/bezpecnost-spravce-cookies-m.png"
	title="Správce souborů cookie"
	alt="Správce souborů cookie"
	height="151" width="308" /></a>
</div></div>

<p>Správce souborů cookie otevřete buď klepnutím na tlačítko <span class="nabidka">Zobrazit uložené soubory cookie</span>, čímž zobrazíte všechny cookies, které jsou momentálně vytvořeny a oprávnění jednotlivých stránek (<span class="nabidka">Nastavení webových serverů</span>), nebo (ne)blokovat cookies pro stránku, kterou máte aktuálně navštívenou volbami <span class="nabidka">Povolit cookie z tohoto serveru</span> nebo <span class="nabidka">Odmítnout soubory cookie z tohoto serveru</span>.</p>

<p>Nyní, když jsme optimalizovali naše cookie nastavení, přesuneme se k obrázkům a reklamním bannerům.</p>

<div class="ipn-bottom">
<ul>
	<li>Následující:
		<a href="./obrazky-bannery.php">Obrázky a bannery</a></li>
	<li>Předchozí:
		<a href="./">Obsah</a></li>
</ul>
</div>

<?php
	$page->includeTemplate('footer');
?>

