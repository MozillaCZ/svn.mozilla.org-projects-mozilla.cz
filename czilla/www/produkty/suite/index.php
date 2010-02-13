<?php
	require_once '../../inc/page.php';
	$page->setTitle('Mozilla Suite &ndash; Populární balík webových aplikací');
	$page->setHeadline('Mozilla Suite','Představení produktu');
	$page->setKeywords ('mozilla, suite, gecko, prohlížeč, poštovní klient, e-mail, email, editor, IRC, chatzilla');
	$page->setDescription ('Produktové stránky balíku internetových aplikací Mozilla Suite');
	$page->setMenu('produkty');
	$page->includeTemplate('header');
?>

<table>
<tr>

	<td style="width:230px"><a href="/img/mozilla-big.png" title="Klepněte pro získání plné velikosti">
	<img src="/img/mozilla.png" alt="Náhled Mozilla Suite" width="200" height="112" />
	</a></td>

	<td style="vertical-align: top">
	<p style="background-color:#ee9e22; text-align:center; padding:10px; border:1px solid #000">Vývoj aplikace Mozilla Suite <strong>byl ukončen</strong>,
	jejím nástupcem s řadou novinek je
	aplikace <strong><a href="../seamonkey/">Seamonkey</a></strong>.</p>

	<p>
	<strong>Mozilla Suite</strong> je balík webových aplikací, které poskytují prvotřídní komfort pro práci na Internetu. Balík obsahuje webový prohlížeč, e-mailový klient, editor webových stránek a&nbsp;IRC klient. Všechny aplikace kladou velký <strong>důraz na bezpečnost</strong>.
  </p>

   <p><img src="/img/download.png" width="16" height="16" alt="" />
  <strong><a href="stahnout.html" title="Stáhnout nejnovější verzi Mozilla Suite v češtině">Stáhnout nejnovější verzi</a></strong></p>

	</td>
</tr>
</table>

<h2 id="suite-nabizi" class="nice mozilla">Co Mozilla Suite nabízí</h2>

<h3>Prohlížeč</h3>

<dl>
	<dt>Prohlížení v panelech</dt>
	<dd>Funkce prohlížení v&nbsp;panelech vám umožní mít otevřeno několik webových stránek v&nbsp;rámci jednoho okna prohlížeče. Získejte rychlý přehled o&nbsp;tom, jaké stránky máte otevřeny.</dd>

	<dt>Blokování vyskakovacích oken</dt>
	<dd>Při prohlížení webových stránek vás již nikdy nebudou obtěžovat vyskakující okna webových stránek, které si nepřejete. Veškerá vyskakovací okna jsou blokována, pokud nezvolíte jinak.</dd>

	<dt>Postranní lišty</dt>
	<dd>Umožní vám mít stále při ruce funkce vašich oblíbených webů. Získejte rychle aktuální zpravodajství, informace
  o&nbsp;dopravní situaci či novinky z vašeho oblíbeného webu.</dd>

	<dt>Propracovaný správce záložek</dt>
	<dd>Dobře řešená správa odkazů na vaše oblíbené stránky. Organizujte si přehledně odkazy na vaše oblíbené stránky tak, jak skutečně chcete.

	</dd>

	<dt>Správce obrázků</dt>
	<dd>Můžete snadno zvolit, ze kterého webu chcete obrázky stahovat a&nbsp;ze kterého ne. Urychlete si prohlížení webových stránek. Nestahujte nic, co nechcete!</dd>
</dl>

<hr />

<h3>Poštovní klient</h3>

<dl>
	<dt>Účinný antispamový filtr</dt>
	<dd>Nevyžádaná pošta bude účinně tříděna od ostatní pošty. Vaše příchozí pošta tak nebude obsahovat žádný spam
  a&nbsp;vy se tak již nebudete muset zabývat jejím tříděním.</dd>

	<dt>Podpora více účtů a&nbsp;identit</dt>
	<dd>Poštovní klient obsahuje podporu práce s&nbsp;více účty, u&nbsp;kterých můžete volit způsob jejich organizace.
  V&nbsp;rámci klientu máte též k&nbsp;dispozici podporu pro virtuální identity.</dd>

	<dt>Pokročilé nástroje pro správu pošty</dt>
	<dd>Přehledná organizace vaší pošty, snadné vyhledávání, filtry pro třídění zpráv a&nbsp;řada dalších funkcí, které vám umožní snadno a&nbsp;rychle spravovat vaši příchozí poštu.</dd>
</dl>

<hr />

<h3>Ostatní</h3>

<dl>
	<dt>Editor webových stránek</dt>
	<dd>S&nbsp;pomocí tohoto <abbr title="What You See Is What You Get" lang="en">WYSIWYG</abbr> editoru můžete snadno tvořit webové stránky založené na <abbr title="HyperText Markup Language" lang="en">HTML</abbr> a&nbsp;<abbr title="Cascading Style Sheets" lang="en">CSS</abbr>. Vytvářejte webové stránky snadno a rychle.</dd>

	<dt>IRC klient</dt>
	<dd>Používání sítě <abbr title=" Internet Relay Chat" lang="en">IRC</abbr> je s&nbsp;ChatZillou opravdu jednoduché. Připojte se k&nbsp;síti a&nbsp;komunikujte s&nbsp;lidmi z&nbsp;celého světa.</dd>

	<dt>Adresář</dt>
	<dd>Jednoduchá a&nbsp;přehledná správa kontaktů.</dd>
</dl>

<h2 id="dalsi-informace" class="nice mozilla">Související informace</h2>
<ul>
	<li><a href="nahledy.php" title="Náhledy na Mozilla Suite">Náhledy na Mozilla Suite</a> &ndash; jak Mozilla Suite vypadá</li>
	<li><a href="poznamky-k-vydani" title="Poznámky k vydání historických verzí Mozilla Suite">Poznámky k vydání</a> &ndash; lokalizované poznámky k vydání historických verzí Mozilla Suite</li>
</ul>
<?php
	$page->includeTemplate('footer');
?>
