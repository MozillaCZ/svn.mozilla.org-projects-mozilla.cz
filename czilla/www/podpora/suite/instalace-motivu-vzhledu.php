<?php
	$rootPath = '../../';
	include($rootPath . '../cas/includes-web.inc.php');
	$page->title    = 'Instalace motivu vzhledu do Mozilla Suite';
	$page->headline = array('Instalace motivu vzhledu','Návod jak nainstalovat nový motiv vzhledu do Mozilla Suite');

	$page->setKeywords('podpora, tipy, triky, nápověda, pomoc, návod, mozilla, mozilla, suite');
	$page->setDescription('Návod jak nainstalovat nový motiv vzhledu do balíku internetových aplikací Mozilla Suite');

	$page->addSideBox('menu','podpora');
	$page->addSideBox('links');
	$page->addSideBox('tips','suite');

	$page->includeHeader();
?>

<p>Možná to znáte: denně pracujete s&nbsp;Mozilla Suite a&nbsp;po čase se vám vzhled
aplikace přestane líbit. Podobně jako aplikace
<a href="/produkty/firefox/"
	title="Mozilla Firefox: Stránka o&nbsp;prohlížeči">Mozilla Firefox</a>
či
<a href="/produkty/thunderbird/"
	title="Mozilla Thunderbird: Stránka o&nbsp;e-mailovém klientu">Mozilla Thunderbird</a>,
i&nbsp;Mozilla Suite umožňuje měnit svůj vzhled. Tento návod vám poví, jak
toho co nejsnadněji docílit.</p>

<h3>Rychlý přehled</h3>

<ul>
	<li><a href="#z-internetu">Instalace motivu vzhledu z&nbsp;Internetu</a></li>
	<li><a href="#z-disku">Instalace motivu vzhledu z&nbsp;disku</a></li>
</ul>

<h2>Stažení motivu vzhledu</h2>

<p>Nový motiv vzhledu lze <a href="/doplnky/motivy-vzhledu/">získat na řadě míst</a>,
nejznámějším místem je server
<a href="https://addons.mozilla.org/themes/"
	title="Mozilla Update: Portál rozšíření a motivů vzhledu"
	hreflang="en" lang="en">Mozilla Update</a>.
Pohodlnou možností instalace nového vzhledu je instalace přímo
z&nbsp;prostředí Internetu. To ale v&nbsp;našich podmínkách není vždy
vhodný způsob, protože řada uživatelů nemůže být kdykoliv připojena. Proto
častěji volí stažení motivu na disk a&nbsp;až následnou instalaci, kterou
pak lze provést kdykoliv (i&nbsp;po reinstalaci systému apod.).</p>


<h2 id="z-internetu">Instalace motivu vzhledu z&nbsp;Internetu</h2>

<p>Navštivte webovou stránku s&nbsp;motivem vzhledu a&nbsp;hledejte odkaz na
jeho instalaci (obvykle pod odkazy <strong
lang="en">Install</strong> či <strong lang="en">Install now</strong>).
Klepněte na odkaz pro instalaci a&nbsp;v&nbsp;zobrazeném dialogu budete
dotázáni, zda si přejete motiv vzhledu skutečně nainstalovat.</p>

<div class="img-center"><div class="img-c" style="width:387px">
	<a href="./images/motivy-vzhledu-instalace.png" class="zoom"><img
	src="images/motivy-vzhledu-instalace-m.png"
	alt="Instalace motivu vzhledu" width="387" height="92" /></a>
</div></div>

<p>
Pokud chcete provést instalaci motivu vzhledu z jiného webového serveru, než z
<a href="https://addons.mozilla.org/" hreflang="en" lang="en"
title="Mozilla Update: Portál rozšíření a motivů vzhledu">Mozilla Update</a>,
musíte jej přidat mezi tzv. bezpečné servery. To provede tak, že do adresního řádku
zadáte adresu <tt>about:config</tt> a&nbsp;ve filtru vyhledáte předvolbu
<tt>xpinstall.whitelist.add</tt>. Označíte ji a&nbsp;pod pravým tlačítkem myši naleznete
volbu <span class="nabidka">Změnit</span>. V zobrazeném dialogu přidejte
adresu serveru, odkud chcete instalaci provést. Nezapomeňte za již zadané
servery napsat čárku. V tomto případě byl přidán fiktivní server <tt>motivy-vzhledu.cz</tt>.
</p>

<div class="img-center">
<img src="images/motivy-vzhledu-povoleni.png" alt="Povoleni instalace" height="140" width="316" />
</div>

<p>Po úspěšné instalaci je ještě potřeba přepnout na nově nainstalovaný
vzhled. V&nbsp;hlavní nabídce zvolte <span class="nabidka">Zobrazit -&gt;
Téma vzhledu</span> a&nbsp;z&nbsp;rozbalené podnabídky zvolte nově
nainstalovaný motiv.</p>

<div class="img-center"><div class="img-c" style="width:355px">
	<img src="images/motivy-vzhledu-restart.png"
	alt="Dialog II"
	width="355" height="123" />
</div></div>

<p>Při dalším spuštění bude mít aplikace nový vzhled.</p>


<h2 id="z-disku">Instalace motivu vzhledu z&nbsp;disku</h2>

<p>
Pokud máte <a href="instalace.html"
title="Návod na instalaci Mozilla Suite">nainstalovanou samotnou aplikaci Mozilla Suite</a>,
je instalace nového motivu komplikovanější. Usnadní vám ji rozšíření
Theme Installer, které si můžete od nás <a href="http://ftp.czilla.cz/other/addons/themer/">stáhnout
lokalizované do češtiny</a>.
</p>


<p>Uvedené rozšíření si stáhněte a&nbsp;nainstalujte. Po provedení instalace
budete mít v&nbsp;Předvolbách (<span class="nabidka">Úpravy ->
Předvolby</span>) novou kategorii <span class="nabidka">Instalátor
motivu</span>.</p>

<div class="img-center"><div class="img-c" style="width:490px">
	<a href="./images/motivy-vzhledu-predvolby.png" class="zoom"><img
		src="./images/motivy-vzhledu-predvolby-m.png"
		alt="Instalace motivu vzhledu v&nbsp;Předvolbách"
		width="490" height="328" /></a>
</div></div>

<p>V&nbsp;této kategorii klepněte na tlačítko <span
class="nabidka">Instalace motivu vzhledu</span> a&nbsp;z&nbsp;disku zvolte
vámi stažený motiv vzhledu. Zobrazí se vám dialog, kde jste dotázáni, zda
skutečně chcete nainstalovat zvolený vzhled. <strong>Klepněte na tlačítko
OK</strong>.</p>

<div class="img-center"><div class="img-c" style="width:387px">
	<a href="./images/motivy-vzhledu-instalace-2.png" class="zoom"><img
		src="images/motivy-vzhledu-instalace-2-m.png"
		alt="Dialog"
		width="387" height="92" /></a>
</div></div>

<p>Po úspěšné instalaci je ještě potřeba přepnout na nově nainstalovaný
vzhled. V&nbsp;hlavní nabídce zvolte <span class="nabidka">Zobrazit -&gt;
Téma vzhledu</span> a&nbsp;z&nbsp;rozbalené podnabídky zvolte nově
nainstalovaný motiv. Aplikace vám oznámí, že nový vzhled bude použit až po
restartu aplikace.</p>

<div class="img-center"><div class="img-c" style="width:355px">
	<img src="images/motivy-vzhledu-restart.png"
	alt="Dialog II"
	width="355" height="123" />
</div></div>

<p><strong>Restartujte tedy aplikaci</strong>. Po opětovném spuštění má
Mozilla Suite zcela nový vzhled.</p>

<div class="img-center"><div class="img-c" style="width:486px">
	<a href="./images/motivy-vzhledu-hlavni-okno.png" class="zoom"><img
		src="images/motivy-vzhledu-hlavni-okno-m.png"
		alt="Mozilla Suite v&nbsp;novém vzhledu"
		width="486" height="330" /></a>
</div></div>

<p>Uvedený postup lze opakovat pro další motivy, které chcete vyzkoušet.
Kdykoliv se také můžete přes volbu <span class="nabidka">Zobrazit -&gt; Téma
vzhledu</span> vrátit k&nbsp;libovolnému motivu vzhledu, který máte
nainstalovaný.</p>

<hr />
<p><small>22. 01. 2005, <a href="/czilla/lide.html#kdo-je-PC">Pavel Cvrček</a>, Tým CZilla</small></p>


<?php
	$page->includeFooter();
?>
