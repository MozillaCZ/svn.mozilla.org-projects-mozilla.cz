<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky,  8. červenec 2005');
	$page->setHeadline('Zprávičky,  8. červenec 2005', 'Přehled zpráviček ze světa Mozilly,  8. červenec 2005');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2005/07/">červenec 2005</a>: 	
		
						<a href="/zpravicky/2005/07/03/" title="Počet zpráviček: 1">3.</a>
		 
		|
						<a href="/zpravicky/2005/07/04/" title="Počet zpráviček: 4">4.</a>
		 
		|
						<a href="/zpravicky/2005/07/06/" title="Počet zpráviček: 1">6.</a>
		 
		|
						<a href="/zpravicky/2005/07/07/" title="Počet zpráviček: 1">7.</a>
		 
		|
						<strong>8.</strong>
		 
		|
						<a href="/zpravicky/2005/07/09/" title="Počet zpráviček: 4">9.</a>
		 
		|
						<a href="/zpravicky/2005/07/11/" title="Počet zpráviček: 2">11.</a>
		 
		|
						<a href="/zpravicky/2005/07/12/" title="Počet zpráviček: 2">12.</a>
		 
		|
						<a href="/zpravicky/2005/07/13/" title="Počet zpráviček: 2">13.</a>
		 
		|
						<a href="/zpravicky/2005/07/14/" title="Počet zpráviček: 5">14.</a>
		 
		|
						<a href="/zpravicky/2005/07/15/" title="Počet zpráviček: 3">15.</a>
		 
		|
						<a href="/zpravicky/2005/07/16/" title="Počet zpráviček: 1">16.</a>
		 
		|
						<a href="/zpravicky/2005/07/19/" title="Počet zpráviček: 1">19.</a>
		 
		|
						<a href="/zpravicky/2005/07/20/" title="Počet zpráviček: 3">20.</a>
		 
		|
						<a href="/zpravicky/2005/07/21/" title="Počet zpráviček: 2">21.</a>
		 
		|
						<a href="/zpravicky/2005/07/22/" title="Počet zpráviček: 4">22.</a>
		 
		|
						<a href="/zpravicky/2005/07/23/" title="Počet zpráviček: 1">23.</a>
		 
		|
						<a href="/zpravicky/2005/07/25/" title="Počet zpráviček: 2">25.</a>
		 
		|
						<a href="/zpravicky/2005/07/26/" title="Počet zpráviček: 4">26.</a>
		 
		|
						<a href="/zpravicky/2005/07/27/" title="Počet zpráviček: 5">27.</a>
		 
		|
						<a href="/zpravicky/2005/07/29/" title="Počet zpráviček: 4">29.</a>
		 
		|
						<a href="/zpravicky/2005/07/30/" title="Počet zpráviček: 1">30.</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/google-toolbar-pro-firefox/">Google Toolbar pro Firefox</a></h3>

	<div><a href="http://www.google.com/" hreflang="en">Google</a> včera vydal <a href="http://toolbar.google.com/firefox/" hreflang="en">beta verzi své lišty pro Firefox</a>. Lišta obsahuje stejné funkce, jako lišta pro <abbr title="Internet Explorer" lang="en">IE</abbr>, s výjimkou funkcí, které jsou již ve <a href="/produkty/firefox/">Firefoxu</a> vestavěny (např. blokování vyskakovacích oken). Kromě lišty vydal Google pro Firefox ještě dvě rozšíření: <a href="http://toolbar.google.com/firefox/extensions/sendtophone/index.html" hreflang="en">Send to Phone</a>, které umožňuje odeslat text z webové stránky na mobilní telefon (jen v USA) a <a href="http://toolbar.google.com/firefox/extensions/suggest/index.html" hreflang="en">Google Suggest</a>, doplňující vyhledávací nápovědu přímo do vyhledávácího políčka Firefoxu. O připravovaném vydání lišty se vědělo již dříve, protože Google o něm <a href="http://www.mozdev.org/pipermail/googlebar/2005-July/001043.html" hreflang="en">informoval vývojáře neoficiálního rozšíření GoogleBar</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/08/">8. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/reseni-problemu-s-idn/">Řešení problémů s IDN</a></h3>

	<div><a href="http://weblogs.mozillazine.org/gerv/archives/008469.html" title="Hacking for Christ: IDN Update (2)" hreflang="en">Gervease Markham oznámil</a>, že produkty <a href="http://www.mozilla.org/" hreflang="en">Mozilla.org</a> nyní budou obsahovat seznam <abbr title="Top Level Domain" lang="en">TLD</abbr>, podle kterého se budou rozhodovat, jak zobrazit domény obsahující v názvu znaky národních abeced (<abbr title="Internationalized Domain Name" lang="en">IDN</abbr>). Domény spadající pod <abbr title="Top Level Domain" lang="en">TLD</abbr>, které nejsou v seznamu, budou zobrazeny v rozkódované podobě, zatímco domény ze seznamu budou zobrazeny pomocí národních znaků. V seznamu budou jen ty <abbr title="Top Level Domain" lang="en">TLD</abbr>, jejichž správci přijali dostatečná opatření proti <abbr title="Internationalized Domain Name" lang="en">IDN</abbr> spoofingu (tj. registraci doménových jmen opticky vypadajících jako jiná jména, což umožňuje záměnu). O problémech s <abbr title="Internationalized Domain Name" lang="en">IDN</abbr> <a href="/archiv-2005.html#news:621cbf7bee805e67bbb217401867ae1" title="Objeveny čtyři nové bezpečnostní problémy">jsme</a> <a href="/archiv-2005.html#news:364d357bd7c0bd02a5cb9ac4ec2142fc" title="Strategie Mozilla.org pro řešení problémů s IDN">několikrát</a> <a href="/archiv-2005.html#news:e80976e06e62f855b30b675e482343b0" title="Změna plánů na řešení IDN spoofingu">psali</a>. Dočasným řešením těchto problémů bylo zobrazování všech domén v rozkódované podobě.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/08/">8. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/konec-softwarovych-patentu-v-eu/">Konec softwarových patentů v EU?</a></h3>

	<div>Vypadá to, že po hlasování Evropského parlamentu a definitivním <a href="http://www.root.cz/zpravicky/ne-softwarovym-patentum/">zamítnutí návrhu o softwarových patentech</a> bude od patentů na nějakou dobu klid. Protože se tato záležitost Mozilly a CZilly také týká a výsledek hlasování nás velmi potěšil, dovolujeme si upozornit na článek <a href="http://www.root.cz/clanky/patenty-je-konec/">Patenty: Je konec?</a> na <a href="http://www.root.cz/">Rootu</a>, který celou situaci přehledně shrnuje.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/08/">8. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/planuje-se-prepsani-kodu-pro-praci-se-zalozkami-ve-firefoxu/">Plánuje se přepsání kódu pro práci se záložkami ve Firefoxu</a></h3>

	<div><a href="http://www.vlad1.com/~vladimir/blog/" hreflang="en">Vladimir Vukićević</a> chce <a href="http://www.vlad1.com/~vladimir/blog/archives/2005/07/05/60/" hreflang="en">přepsat kód Firefoxu pracující se záložkami</a>. Cílem by měla být větší flexibilita a umožnění nových způsobů používání záložek. Tyto trochu vágní cíle se nyní <a href="http://wiki.mozilla.org/Bookmarks_Use_Cases" hreflang="en">zpřesňují</a> ve <a href="http://wiki.mozilla.org/" hreflang="en">Wiki</a>. Přepsání je součástí plánu na <a href="http://wiki.mozilla.org/Mozilla2:Unified_Storage" hreflang="en">sjednocení formátů souborů</a> používaných v uživatelských profilech. Tento plán předpokládá přechod na databázové řešení založené na knihovně <a href="http://www.sqlite.org/" hreflang="en">SQLite</a> a uskuteční se až po vydání Firefoxu 1.1.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2005/07/08/">8. 7. 05</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
