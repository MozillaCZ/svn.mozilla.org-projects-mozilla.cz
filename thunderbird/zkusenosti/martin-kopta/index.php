<?php
	require_once '../../inc/page.php';
	$page->setTitle('Martin Kopta: E-mailovou adresu měnit nechci, Thunderbird také ne');
	$page->setDescription('Martin Kopta o tom, jak začal používat Thunderbird a zbavil se problému se spamem');
	$page->setKeywords('mozilla thunderbird přechod poštovní klient legálně zdarma');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>E-mailovou adresu měnit nechci, Thunderbird také ne</h1>

<p>Používám stejnou e-mailovou adresu už víc než pět let. Za tu dobu jsem ji
rozdal spoustě lidem a&nbsp;snad tisíckrát zveřejnil na webu. Určitě si
dovedete představit, kolik mi na ni každý den chodí spamu a&nbsp;virů.
E-mailovou adresu měnit nechci, zato už jsem vystřídal několik poštovních
programů.</p>

<p>Teď už víc než půl roku používám Thunderbird. Přijímám a&nbsp;odesílám
v&nbsp;něm poštu z&nbsp;více účtů, takže mi denně přijde několik set
e-mailů. Přesto jsem ho za tu dobu nemusel přeinstalovat. Neobtěžují mě
spamy a&nbsp;protože Thunderbird výborně spolupracuje s&nbsp;antivirem
Avast, můj počítač se ještě nenakazil virem.</p>

<p>Nainstaloval jsem si jednu z vývojových verzí, takže jsem vůči
Thunderbirdu byl z&nbsp;počátku nedůvěřivý. Chyběl mi v&nbsp;něm plánovací
kalendář a&nbsp;sledování úkolů. Ale protože je Thunderbird vyvíjen jako
opensource a&nbsp;nejsem sám, komu v&nbsp;něm některé funkce chyběly,
šikovní programátoři z&nbsp;celého světa zdarma vytvářejí pro můj poštovní
program stále nové doplňky. Nemusím tak mít velký poštovní program se
spoustou funkcí, které nechci a&nbsp;neumím používat. Pokaždé, když
potřebuji novou funkci, přidám si nový doplněk.</p>

<p>Pro mě je ale důležité, že Thunderbird dobře zvládá to základní:
přijímat, třídit a&nbsp;odesílat poštu &ndash; velká kvanta pošty. Navíc je
zadarmo, takže se nemusím starat, jestli ho mám instalovaný legálně.
A&nbsp;protože je Thunderbird svobodný software vyvíjený jako open-source,
stále mám zdarma k&nbsp;dispozici nové verze a&nbsp;doplňky.</p>

<p class="sig">
	Martin Kopta
</p>

</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující odkazy</h2>
<?php
	$page->includeTemplate('stories');
?>
</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $page->getWebName()?></a> &gt;
		<a href="../">Zkušenosti</a> &gt;
		<strong>Martin Kopta</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
