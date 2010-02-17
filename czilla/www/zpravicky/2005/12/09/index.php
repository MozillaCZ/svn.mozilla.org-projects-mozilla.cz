<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky,  9. prosinec 2005');
	$page->setHeadline('Zprávičky,  9. prosinec 2005', 'Přehled zpráviček ze světa Mozilly,  9. prosinec 2005');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2005/12/">prosinec 2005</a>: 	
		
						<a href="/zpravicky/2005/12/01/" title="Počet zpráviček: 3">1.</a>
		 
		|
						<a href="/zpravicky/2005/12/02/" title="Počet zpráviček: 1">2.</a>
		 
		|
						<a href="/zpravicky/2005/12/03/" title="Počet zpráviček: 4">3.</a>
		 
		|
						<a href="/zpravicky/2005/12/05/" title="Počet zpráviček: 2">5.</a>
		 
		|
						<a href="/zpravicky/2005/12/06/" title="Počet zpráviček: 1">6.</a>
		 
		|
						<a href="/zpravicky/2005/12/08/" title="Počet zpráviček: 4">8.</a>
		 
		|
						<strong>9.</strong>
		 
		|
						<a href="/zpravicky/2005/12/12/" title="Počet zpráviček: 3">12.</a>
		 
		|
						<a href="/zpravicky/2005/12/13/" title="Počet zpráviček: 3">13.</a>
		 
		|
						<a href="/zpravicky/2005/12/14/" title="Počet zpráviček: 1">14.</a>
		 
		|
						<a href="/zpravicky/2005/12/15/" title="Počet zpráviček: 1">15.</a>
		 
		|
						<a href="/zpravicky/2005/12/16/" title="Počet zpráviček: 4">16.</a>
		 
		|
						<a href="/zpravicky/2005/12/17/" title="Počet zpráviček: 1">17.</a>
		 
		|
						<a href="/zpravicky/2005/12/18/" title="Počet zpráviček: 1">18.</a>
		 
		|
						<a href="/zpravicky/2005/12/19/" title="Počet zpráviček: 5">19.</a>
		 
		|
						<a href="/zpravicky/2005/12/20/" title="Počet zpráviček: 2">20.</a>
		 
		|
						<a href="/zpravicky/2005/12/21/" title="Počet zpráviček: 1">21.</a>
		 
		|
						<a href="/zpravicky/2005/12/22/" title="Počet zpráviček: 4">22.</a>
		 
		|
						<a href="/zpravicky/2005/12/24/" title="Počet zpráviček: 1">24.</a>
		 
		|
						<a href="/zpravicky/2005/12/27/" title="Počet zpráviček: 1">27.</a>
		 
		|
						<a href="/zpravicky/2005/12/28/" title="Počet zpráviček: 1">28.</a>
		 
		|
						<a href="/zpravicky/2005/12/30/" title="Počet zpráviček: 1">30.</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/thunderbird-1.5-rc-koncem-prosince,-finalni-verze-v-lednu/">Thunderbird 1.5 RC koncem prosince, finální verze v lednu</a></h3>

	<div>Podle upravené <a href="http://www.mozilla.org/projects/thunderbird/roadmap.html" hreflang="en" title="Mozilla Thunderbird 2.0 Roadmap">Thunderbird Roadmap</a> se ještě do konce roku dočkáme druhé <abbr title="Release Candidate" lang="en">RC</abbr> verze <a href="/produkty/thunderbird/" title="Thunderbird: Stránka o produktu">Thunderbirdu</a> 1.5. Pokud vše půjde hladce, finální verze by měla vyjít v lednu. Další vývoj se pak bude soustředit na verzi 2.0 (předběžně plánovanou na léto 2006) a poté na verzi 3.0, založenou na nové verzi vykreslovacího jádra <a href="http://www.mozilla.org/newlayout/" hreflang="en" title="Mozilla Layout Engine">Gecko</a> (vydání předběžné plánovano na počátek roku 2007).</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/12/09/">9. 12. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/chyba-pri-praci-s-historii-ve-firefoxu/">Chyba při práci s historií ve Firefoxu</a></h3>

	<div>Server <a href="http://secunia.com/" title="Secunia.com: Domovská stránka" hreflang="en">Secunia</a> dnes uveřejnil <a href="http://secunia.com/advisories/17934/" title="Mozilla Firefox History Information Denial of Service Weakness" hreflang="en">informaci o chybě</a> ve <a href="/produkty/firefox/" title="Firefox: Stránka o produktu">Firefoxu</a>, která způsobuje zaplnění souboru s historií dlouhými nadpisy stránek (konkrétně se jedná o soubor history.dat), což při příštím spuštění vede k přetečení zásobníku a pádu Firefoxu. Na řešení chyby se již pracuje (viz <a href="https://bugzilla.mozilla.org/show_bug.cgi?id=319004" title="overlong document.title setting can corrupt history data, causing non-responsive temporary hang (crash?) on subsequent startups" hreflang="en">bug 319004</a>). Chybě lze předejít doplněním řádku <tt>user_pref("capability.policy.default.HTMLDocument.title.set", "noAccess");</tt> do souboru <a href="/podpora/firefox/konfigurace.html#user">user.js</a>. Informace o řešení následků chyby naleznete <a href="http://www.mozilla.org/security/history-title.html" title="Long-title temporary startup unresponsiveness">v oficiálním oznámení chyby</a>, možností je také ruční smazání souboru history.dat z uživatelského profilu.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/12/09/">9. 12. 05</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
