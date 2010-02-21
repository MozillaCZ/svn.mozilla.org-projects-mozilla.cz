<?php
	require_once '../../inc/page.php';
	$page->setTitle('Parametry příkazové řádky u Mozilla Suite');
	$page->setHeadline('Parametry příkazové řádky','Jak spouštět Mozilla Suite s parametry');
	$page->setKeywords('podpora, nápověda, pomoc, návod, mozilla, suite');
	$page->setDescription('Stránka s parametry příkazové řádky balíku internetových aplikací Mozilla Suite');
	$page->setMenu('podpora');
	$page->includeTemplate('header');
?>
<div class="obsolete">Vývoj aplikace Mozilla Suite <strong>byl ukončen</strong>,
jejím nástupcem s řadou novinek je aplikace <strong><a href="/produkty/seamonkey/">Seamonkey</a></strong>.</div>

<p>Pomocí nastavení parametrů příkazové řádky můžete "obejít" správce
profilů a otevřít přímo požadovaný profil (používáte-li více profilů). Dále
můžete řídit spouštění Mozilly, určit které komponenty se mají otevírat při spuštění
a co mají dělat. Tato stránka popisuje nejčastěji používané
parametry a jejich použití. Seznam všech parametrů příkazové řádky získáte
použitím parametru <tt>-h</tt>.</p>


<h2 id="jak-pouzivat-parametry">Jak používat parametry</h2>

<p>Pokud máte operační systém <strong>Windows</strong>, klikněte pravým
tlačítkem myši na zástupce Mozilly a z nabídky vyberete <span
class="nabidka">Vlastnosti</span>. Na listu Zástupce v poli <span
class="nabidka">Cíl</span> zadejte parametry <em>za</em> uvozovky,
např.&nbsp;<span class="soubor">"C:\Program
Files\mozilla.org\Mozilla\mozilla.exe" -p mujprofil</span>.</p>

<p>Pokud používáte operační systém <strong>Linux</strong> nebo
<strong>Unix</strong>, zadejte parametry za příkaz, kterým spustíte Mozillu,
např.&nbsp;<span class="soubor">./mozilla -p mujprofil</span>.</p>

<p>Pokud používate <strong>Mac OS</strong>, vytvořte textový soubor,
který bude obsahovat:</p>

<pre class="codearea"><code>type:TEXT
creator:MOZZ
containing:ARGS: <var>-P mujprofil</var></code></pre>

<h2 id="parametry">Parametry příkazové řádky</h2>

<div class="tbl-1">
<table border="1">
<caption>Přehled základních parametrů příkazové řádky Mozilly</caption>
<col align="left" />
<col align="left" />
<col align="left" />
<thead>
<tr>
	<th>Příkaz</th>
	<th>Výsledek</th>
	<th>Příklad</th>
</tr>
</thead>
<tbody>
<tr>
	<td><tt>-h</tt> nebo <tt>-help</tt></td>

	<td>Zobrazí seznam všech parametrů příkazové řádky. Na Windows toto
	funguje pouze u testovacích verzí (chyba <a
	href="https://bugzilla.mozilla.org/show_bug.cgi?id=26761"
	hreflang="en">26761</a>). Tuto funkci můžete použít pouze z
	příkazové řádky.</td>

	<td></td>
</tr>
<tr>
	<td>&quot;<abbr title="Uniform Resource Locator"
	lang="en">URL</abbr>&quot;</td>

	<td>Otevře v Mozille zadané <abbr title="Uniform Resource Locator"
	lang="en">URL</abbr></td>

	<td><tt>mozilla &quot;www.czilla.cz&quot;</tt></td>

</tr>
<tr>
	<td><tt>-turbo</tt></td>

	<td>Spustí Mozillu v módu rychlého spuštění.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-ProfileManager</tt></td>

	<td>Spustí Mozillu spolu se správcem profilů.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-SelectProfile</tt></td>

	<td>Po spuštění Mozilly se zobrazí dialog pro výběr profilu.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-ProfileWizard</tt></td>

	<td>Spustí Mozillu s Průvodcem vytváření profilů.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-CreateProfile</tt> <var>profile_name</var></td>

	<td>Vytvoří nový profil se jménem <var>profile_name</var>, ale
	nespustí Mozillu. Jméno profilu <var>profile_name</var> nesmí
	obsahovat mezery.</td>

	<td><tt>mozilla -createprofile Honza</tt></td>

</tr>
<tr>
	<td><tt>-CreateProfile</tt> &quot;<var>profile_name</var>
	<var>profile_dir</var>&quot;</td>

	<td>Vytvoří nový profil se jménem <var>profile_name</var> v
	adresáři <var>profile_dir/profile_name</var>, ale nespustí Mozillu.
	Jméno profilu <var>profile_name</var> a adresář profilů
	<var>profile_dir</var> jsou v uvozovkách.</td>

	<td><tt>mozilla -createprofile &quot;Pepik
	c:\mozilla\profile\&quot;</tt><br />(Vytvoří profil se jménem
	'Pepik' v adresáři 'c:\mozilla\profile\Pepik\')</td>

</tr>
<tr>
	<td><tt>-p</tt> &quot;<var>profile_name</var>&quot;</td>

	<td>Přeskočí Průvodce profily a spustí Mozillu s profilem se jménem <var>profile_name</var>. Tento parametr je užitečný při využívání více profilů. Ve jméně profilu <var>profile_name</var> je nutné rozlišovat velká a malá písmena.</td>

	<td><tt>mozilla -p &quot;Pepik&quot;</tt></td>

</tr>
<tr>
	<td><tt>-installer</tt></td>

	<td>Spustí Mozillu s migračním oknem Netscape 4.x.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-height</tt> <var>xxx</var></td>

	<td>Nastaví výšku okna.</td>

	<td><tt>mozilla -height 600</tt></td>

</tr>
<tr>
	<td><tt>-width</tt> <var>xxx</var></td>

	<td>Nastaví šířku okna.</td>

	<td><tt>mozilla -width 800</tt></td>

</tr>
<tr>
	<td><tt>-UILocale</tt> <var>locale</var></td>

	<td>Spustí Mozillu ve zvolené lokalizaci.</td>

	<td><tt>mozilla -UILocale cs-CZ</tt>
</td>

</tr>
<tr>
	<td><tt>-contentLocale</tt> <var>locale</var></td>

	<td>Spustí Mozillu s <var>lokalizovaným obsahem</var>.</td>

	<td><tt>mozilla -contentLocale cs-CZ</tt></td>

</tr>
<tr>
	<td><tt>-remote</tt> <var>remote_command</var></td>

	<td>Jen pro operační systémy Unix nebo Linux. Provede vzdálený
	příkaz <var>remote_command</var> na již běžícím procesu Mozilly.
	(Více informací &ndash; <a
	href="http://www.mozilla.org/unix/remote.html"
	hreflang="en">vzdálené řízení</a>.)</td>

	<td><tt>mozilla -remote openURL('www.czilla.cz, new-tab)</tt></td>

</tr>
<tr>
	<td><tt>-browser</tt></td>

	<td>Spustí webový prohlížeč Mozilly.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-mail</tt></td>

	<td>Spustí poštovní klient Mozilly.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-mail</tt> <var>mailto_URL</var></td>

	<td>Otevře okno pro vytvoření emailové zprávy s emailovou adresou
	<var>mailto_URL</var>.</td>

	<td><tt>mozilla -mail mailto:jan@mail.cz?subject=cau</tt></td>

</tr>
<tr>
	<td><tt>-news</tt> <var>news_URL</var></td>

	<td>Spustí News klienta Mozilly. Je-li zadán
	nepovinný údaj <var>news_URL</var>, otevře zadanou skupinu News zpráv.</td>

	<td><tt>mozilla -news news://server/group</tt></td>

</tr>
<tr>
	<td><tt>-compose</tt> <var>message_options</var></td>

	<td>Spustí Mozillu společně s editorem emailu. Pozor na
	<a href="#pravidla-zapisu">pravidla zápisu</a>.</td>

	<td><tt>mozilla -compose &quot;to=pepa@zdepa.cz&quot;</tt></td>

</tr>
<tr>
	<td><tt>-editor</tt> (nebo <tt>-edit</tt>) <abbr
	title="Uniform Resource Locator" lang="en">URL</abbr></td>

	<td>Spustí editor webových stránek Mozilly se zadanou
	<abbr title="Uniform Resource Locator" lang="en">URL</abbr>
	(<abbr title="Uniform Resource Locator" lang="en">URL</abbr>
	je nepovinný parametr).
	</td>

	<td><tt>mozilla -edit www.czilla.cz</tt></td>

</tr>
<tr>
	<td><tt>-addressbook</tt></td>

	<td>Spustí adresář Mozilly.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-chrome</tt> <var>chrom_URL</var></td>

	<td>Otevře zadaný chrome soubor.</td>

	<td><tt>mozilla -chrome chrome://inspector/content</tt><br />
	(Spustí Mozillu s DOM Inspectorem.)</td>

</tr>
<tr>
	<td><tt>-jsconsole</tt></td>

	<td>Spustí konzolu jazyka JavaScript.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-aim</tt></td>

	<td>(pouze Netscape) Spustí Mozillu s Instant Messengerem.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-chat</tt></td>

	<td>Spustí IRC klienta (Chatzillu) Mozilly &ndash; pokud je
	nainstalována.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-nosplash</tt> nebo <tt>-quiet</tt></td>

	<td>Potlačí zobrazení uvítací obrazovky (splash screen). Pro zobrazení
	splash obrazovky použijte přepínač <tt>-splash</tt>. Na některých
	systémech je zobrazení splash obrazovky implicitně zakázáno.</td>

	<td></td>

</tr>
<tr>
	<td><tt>-v</tt> nebo <tt>-version</tt></td>

	<td>Zobrazí verzi Mozilly. Na operačním systému Windows tento přepínač
	funguje pouze v testovacích (debug) verzích - chyba <a
	href="https://bugzilla.mozilla.org/show_bug.cgi?id=26761" hreflang="en">26761</a>.
	</td>

	<td></td>

</tr>
</tbody>
</table>
</div>


<h2 id="pravidla-zapisu">Pravidla zápisu</h2>

<ul>
	<li>Parametry příkazů obsahující mezery musí být uzavřeny do
	uvozovek - např. &quot;Pepa Novak&quot;.</li>

	<li>V příkazech se nerozlišují velká i malá písmena.</li>

	<li>Parametry příkazů - vyjma jmen profilů - nerozlišují velká a
	malá písmena.</li>

	<li>Mezery oddělují příkazy a parametry.</li>

	<li>Při psaní zprávy se používá zápisu <tt><var>položka</var>=<var>hodnota</var>
	</tt>, např.:

	<ul>
		<li><tt>to=pepa@zdepa.cz</tt></li>
		<li><tt>subject=bezva stranka</tt></li>
		<li><tt>attachment=www.czilla.cz</tt></li>
		<li><tt>attachment='file:///c:/soubor.txt'</tt></li>
		<li><tt>body=mrkni na to</tt></li>
	</ul>
	</li>

	<li>V případě použití více parametrů se tyto oddělují čárkou (,),
	např.: <tt>&quot;to=pepa@zdepa.cz,subject=super
	stranka&quot;</tt>. Za čárkou ani před čárkou nesmí být mezera. V
	případě přiřazení více hodnot u některé položky uzavřete tyto
	hodnoty do jednoduchých uvozovek ('), např.: <tt>
	&quot;to='pepa@zdepa.cz,igor@hnizdo.cz',subject=super
	stranka&quot;</tt>.</li>

</ul>

<hr />

<p><small>Z originálního dokumentu <a
href="http://www.mozilla.org/docs/command-line-args.html">Mozilla's Command
Line Options</a> přeložil <a href="/czilla/prispevatele.php#kdo-je-VH">Vlasta
Hopjan</a>.</small></p>

<?php
	$page->includeTemplate('footer');
?>
