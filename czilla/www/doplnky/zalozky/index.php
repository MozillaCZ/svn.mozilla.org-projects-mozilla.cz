<?php
	require_once '../../inc/page.php';
	$page->setTitle('CZilla záložky');
	$page->setHeadline('CZilla záložky','Databáze záložek českých webů');
	$page->setKeywords('záložky, oblíbené, databáze, czilla, firefox, mozilla');
	$page->setDescription('Databáze záložek českých webů');
	$page->includeTemplate('header');
?>
<h2 class="nice">Co jsou CZilla záložky?</h2>

<p><strong>CZilla záložky</strong> jsou pečlivě utříděnou databází záložek českých webů. Tato databáze je standardní součástí záložek každého nového profilu vytvořeného lokalizovanou verzí <a href="/produkty/firefox/" title="Mozilla Firefox: Stránka o produktu">Mozilla Firefoxu</a> či <a href="/produkty/suite/" title="Mozilla Suite: Stránka o produktu">Mozilla Suite</a>. Obsahují více než 350 záložek pečlivě setříděných do kategorií pro vaši snadnou orientaci.</p>

<p>Pokud jste záložky omylem smazali či je chcete mít k&nbsp;dispozici v&nbsp;anglické verzi produktu, můžete si je zde stáhnout samostatně a&nbsp;podle návodu jednoduše importovat.</p>

<ul>
  <li class="download"><a href="stahnout.php" title="Stáhne CZilla záložky">CZilla záložky</a> (85&nbsp;kB,&nbsp;html)</li>
</ul>

<p><strong>Poslední aktualizace</strong>: 17.&nbsp;srpna 2005</p>

<h2 class="nice">Jak provést import?</h2>

<h3>Mozilla Firefox</h3>

<p>V hlavní nabídce zvolte <span class="nabidka">Záložky</span> a&nbsp;v&nbsp;rozbalené nabídce položku <span class="nabidka">Správce záložek...</span>. V&nbsp;zobrazeném dialogu vyberte v&nbsp;nabídce <span class="nabidka">Soubor</span> položku <em class="nabidka">Importovat</em>. Zobrazí se vám průvodce, ve kterém vyberte volbu <span class="nabidka">Ze souboru</span> a&nbsp;klepněte na tlačítko <em class="nabidka">Další</em>. Následně budete dotázáni na soubor, ze kterého budou záložky importovány. Zvolte výše nabízený soubor a&nbsp;klepněte na tlačítko <em class="nabidka">Otevřít</em>. Import bude automaticky proveden a&nbsp;importované záložky naleznete ve složce <span class="nabidka">Personal Toolbar</span>.</p>

<div class="img-center"><div class="img-c" style="width:250px">
	<a href="images/firefox-zalozky.png" class="zoom"><img src="images/firefox-zalozky-m.png" alt="Firefox se záložkami" height="187" width="250" /></a>
</div></div>

<h3>Mozilla Suite</h3>

<p>V hlavní nabídce zvolte <span class="nabidka">Záložky</span> a&nbsp;v&nbsp;rozbalené nabídce položku <span class="nabidka">Upravit záložky...</span>. V&nbsp;zobrazeném dialogu vyberte v nabídce <span class="nabidka">Nástroje</span> položku <span class="nabidka">Importovat</span>. Následně budete dotázání na soubor, z&nbsp;kterého budou záložky importovány. Zvolte výše nabízený soubor a&nbsp;klepněte na tlačítko <em class="nabidka">Otevřít</em>. Import bude automaticky proveden a&nbsp;importované záložky naleznete ve složce <span class="nabidka">Personal Toolbar</span>.</p>

<div class="img-center"><div class="img-c" style="width:250px">
	<a href="images/mozilla-suite-zalozky.png" class="zoom"><img src="images/mozilla-suite-zalozky-m.png" alt="Mozilla Suite se záložkami" height="187" width="250" /></a>
</div></div>

<?php
	$page->includeTemplate('footer');
?>
