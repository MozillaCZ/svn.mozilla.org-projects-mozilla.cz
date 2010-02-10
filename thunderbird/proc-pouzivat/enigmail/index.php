<?php
	require_once '../../inc/page.php';
	$page->setTitle('Enigmail &ndash; podpora pro práci s šifrovanou poštou');
	$page->setDescription('Enigmail &ndash; šifrování pošty v Thunderbirdu');
	$page->setKeywords('Enigmail šifrování šifrovat podepisování openpgp klíče');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Enigmail</h1>

<div class="img-c img-right" style="width:300px">
	<img src="/img/r-enigmail.png" width="300" height="122" alt="" />
	<p class="comment">Zašifrovaná poštovní zpráva.</p>
</div>

<p>Enigmail je rozšíření, které <strong>do Thunderbirdu přidá podporu
pro práci s&nbsp;šifrovanou poštu</strong> pomocí standardu
<abbr title="Open Pretty Good Privacy">OpenPGP</abbr>.</p>

<p>Díky této podpoře budete moci posílat poštu v&nbsp;šifrované podobě, což
zajistí, že si vaši zprávu přečtou pouze pověřené osoby.</p>


<h2 id="co-enigmail-umi">Co umí?</h2>

<p>Enigmail je populární rozšíření a&nbsp;za dobu své existence se
vypracovalo do komplexního nástroje, který nabízí řadu funkcí. Vybíráme
některé z&nbsp;nich:</p>

<ul>
	<li><strong>Šifrování a&nbsp;podepisování zpráv</strong> při odesílání,
	dešifrování a&nbsp;ověřování při přijímání.</li>

	<li>Nastavovat šifrování a&nbsp;podepisování zvlášť <strong>pro každou
	identitu</strong>.</li>

	<li>Nastavovat způsob <strong>šifrování a&nbsp;podpisování podle
	adresáta</strong>.</li>

	<li><strong>Komplexní správu OpenPGP klíčů</strong> včetně snadného
	generování klíče či zobrazení fotografií (PhotoID).</li>

	<li><strong>Získávat veřejné klíče</strong> ze seznamu na Internetu.</li>
</ul>


<h2 id="proc-enigmail-pouzivat">Proč používat?</h2>

<p>Je řada důvodů, proč používat Enigmail. Pro někoho to může být snaha
o&nbsp;bezpečný přenos zpráv a&nbsp;příloh, pro jiné spolehlivé ověřování
identity protistrany. Rozšíření Enigmail je k&nbsp;dispozici pro řadu
platforem, staví na otevřeném standardu
<abbr title="Open Pretty Good Privacy">OpenPGP</abbr>,
je dobře konfigurovatelné a&nbsp;spolupracuje s&nbsp;produktem
<a href="http://www.gnupg.org/"
	title="GnuPG: Domovská stránka"
	hreflang="en" class="l-en">GnuPG</a>.</p>


<h2 id="jak-enigmail-ziska">Jak získat?</h2>

<p>Rozhodli jste se začít Enigmail používat? Výborně! Stáhněte si Enigmail
ze serveru <a href="https://addons.mozilla.org/cs/thunderbird/addon/71">Doplňky Mozilly</a>.
Pokud nevíte, jak se rozšíření instaluje, přečtěte si
<a href="http://www.czilla.cz/podpora/thunderbird/instalace-rozsireni.html">návod na instalaci</a>.</p>

<p>Aby rozšíření Enigmail správně pracovalo, je potřeba, aby na vašem
počítači byl nainstalován program
<a href="http://www.gnupg.org/"
	title="GnuPG: Domovská stránka"
	class="l-en" hreflang="en">GnuPG</a>,
který umožní práci se standardem OpenPGP. Program je ke stažení pro řadu
platforem na
<a href="http://www.gnupg.org/download/index.en.html"
	title="GnuPG: Stránka ke stažení" hreflang="en" class="l-en">domovské stránce</a>.
Pro uživatele Windows je k&nbsp;dispozici
<a href="http://www.root.cz/clanky/sifrujeme-v-ms-outlook-ve-windows-s-gnupg/">návod na konfiguraci GnuPG</a>
nejen pro potřeby šifrování v Thunderbirdu.</p>


<h2 id="jak-enigmail-pouzivat">Jak používat?</h2>

<p>Pro správné používání Enigmailu je dobré pochopit, jak šifrování funguje,
jaké jsou s&nbsp;tím spojené pojmy apod. Kompletní nápovědu naleznete na
<a href="http://enigmail.mozdev.org/help.html"
	title="Enigmail: Stránka s nápovědou"
	class="l-en" hreflang="en">domovské stránce Enigmailu</a>.
Obecný článek o&nbsp;šifrování v&nbsp;češtině naleznete na webu
<a href="http://sorry.vse.cz/~xkecm01/message.php?t=sifry">Michala Kece</a>.
Základní informace jsou též k&nbsp;dispozici na
<a href="http://enigmail.spi.cz/index.html"
	title="Enigmail: Domovská stránka s lokalizovaným rozšířením">domovské stránce lokalizace</a>.</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Další informace</h2>

	<h3 class="first">O Enigmailu</h3>

	<ul>
		<li><a href="#co-enigmail-umi">Co umí?</a></li>
		<li><a href="#proc-enigmail-pouzivat">Proč používat?</a></li>
		<li><a href="#jak-enigmail-ziskat">Jak získat?</a></li>
		<li><a href="#jak-enigmail-pouzivat">Jak používat?</a></li>
	</ul>

	<h3>Důležité odkazy</h3>
	<dl>
		<dt><a href="http://enigmail.mozdev.org/"
				class="l-en" hreflang="en">Stránka projektu</a></dt>
		<dd>Oficiální stránka projektu Enigmail.</dd>

		<dt><a href="http://enigmail.spi.cz/">Stránky lokalizace</a></dt>
		<dd>Oficiální stránky české lokalizace.</dd>

		<dt><a href="http://www.gnupg.org/"
				class="l-en" hreflang="en">GnuPG</a></dt>
		<dd>Stránky projektu GnuPG.</dd>

		<dt><a href="http://www.gpg.cz/">Česká
			<abbr title="Pretty Good Privacy" lang="en">PGP</abbr>
			klíčenka</a></dt>
		<dd>Český server zprostředkovávající výměnu
			<abbr title="Pretty Good Privacy" lang="en">PGP</abbr>
			klíčů.</dd>
	</dl>

</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<a href="../">Proč používat?</a> &gt;
		<strong>Enigmail</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
