<?php
	require_once '../../../../inc/page.php';
	$page->setTitle('Zprávičky, 16. září 2006');
	$page->setHeadline('Zprávičky, 16. září 2006', 'Přehled zpráviček ze světa Mozilly, 16. září 2006');
	$page->includeTemplate('header');
?>
<div id="navigation">
			Vybrat zprávičky za <a href="/zpravicky/2006/09/">září 2006</a>: 	
		
						<a href="/zpravicky/2006/09/01/" title="Počet zpráviček: 1">1.</a>
		 
		|
						<a href="/zpravicky/2006/09/06/" title="Počet zpráviček: 1">6.</a>
		 
		|
						<a href="/zpravicky/2006/09/07/" title="Počet zpráviček: 1">7.</a>
		 
		|
						<a href="/zpravicky/2006/09/11/" title="Počet zpráviček: 2">11.</a>
		 
		|
						<a href="/zpravicky/2006/09/15/" title="Počet zpráviček: 3">15.</a>
		 
		|
						<strong>16.</strong>
		 
		|
						<a href="/zpravicky/2006/09/18/" title="Počet zpráviček: 1">18.</a>
		 
		|
						<a href="/zpravicky/2006/09/19/" title="Počet zpráviček: 1">19.</a>
		 
		|
						<a href="/zpravicky/2006/09/21/" title="Počet zpráviček: 1">21.</a>
		 
		|
						<a href="/zpravicky/2006/09/27/" title="Počet zpráviček: 1">27.</a>
		 
		|
		<a href="/zpravicky/">Přehled zpráviček</a>
</div>	

<div class="news">
	<h3><a href="/zpravicky/analyzu-kodu-firefoxu-vetsina-problemu-je-plany-poplach/">Analýzu kódu Firefoxu - většina problémů je planý poplach</a></h3>

	<div>Před několika dny prolétla internetem zpráva o <a href="http://www.czilla.cz/zpravicky/kod-firefoxu-pod-lupou/" title="CZilla: Kód Firefoxu pod lupou">analýze zdrojového kódu Firefoxu nástrojem Klocwork K7</a>, která údajně našla 655 potenciálních chyb a 71 bezpečnostních problémů. Na výsledky analýzy se <a href="http://weblogs.mozillazine.org/roc/archives/2006/09/static_analysis_and_scary_head.html" hreflang="en" title="Well, I&#039;m Back: Static Analysis And Scary Headlines">podrobně podíval vývojář Mozilly Robert O'Callahan</a> a spolu s dalšími vývojáři zjistil, že naprostá většina hlášených problémů je planý poplach. V článku pak uvažuje nad tím, proč většinu  bezpečnostních problémů nástroje na automatickou analýzu kódu těžko odhalí. Váhu O'Callahanovým slovům dodává i fakt, že s těmito nástroji pracoval v rámci doktorského studia.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/09/16/">16. 9. 06</a>
	</div>
	<span class="cb"></span>
</div>
<div class="news">
	<h3><a href="/zpravicky/pripravuje-se-novy-system-pro-hlaseni-padu-aplikaci/">Připravuje se nový systém pro hlášení pádů aplikací</a></h3>

	<div>Pokud používáte produkty Mozilly, možná znáte <a href="http://www.czilla.cz/podpora/talkback.html" title="CZilla: Talkback - pomocník při pádu Mozilly">Talkback</a> (též <em>Mozilla Quality Feedback Agent</em>) &ndash; program, který při pádu aplikace pošle informace vývojářům Mozilly, aby mohli vyšetřit jeho příčinu. Talkback pochází ještě z doby Netscapu, je poněkud nepohodlný na ovládání a vývojářům nedává všechny informace, které potřebují. Proto se Mozilla ve spolupráci s Googlem rozhodla vyvinout náhradu &ndash; <a href="http://code.google.com/p/airbag/" hreflang="en" title="airbag - Google Code">Airbag</a>. Nový program je mulitplatformní, open source (a tedy využitelný nejen pro projekty <a href="http://www.mozilla.org/" hreflang="en" title="Mozilla.org - Home of the Mozilla Project">Mozilla.org</a>) a během několika týdnů by měl být začleněn do nočních sestavení. Podrobnosti <a href="http://benjamin.smedbergs.us/blog/2006-09-12/deploying-the-airbag/" hreflang="en" title="BSBlog &#187; Blog Archive &#187; Deploying the Airbag">najdete u Benjamina Smedberga</a>.</div>
	<div class="ft">
		<a href="/zpravicky/a/majda/">David Majda</a>&nbsp;|&nbsp;<a
			 href="/zpravicky/2006/09/16/">16. 9. 06</a>
	</div>
	<span class="cb"></span>
</div>
<?php
	$page->includeTemplate('footer');
?>
