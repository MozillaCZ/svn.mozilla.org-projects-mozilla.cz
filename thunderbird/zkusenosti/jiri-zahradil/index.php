<?php

	$inc_path		= "../../inc/";

	include($inc_path . "config.inc");

	setTitle("Jiří Zahradil: Nejpraktičtější e-mailový program");
	$page_desc  = "Jiří Zahradil o Thunderbirdu jako praktickém e-mailovém programu s povedeným uživatelském rozhraním";
	$page_keywords  = "mozilla thunderbird přechod poštovní klient legálně zdarma";

	include($inc_path . "h_head.inc");
	include($inc_path . "x_header.inc");

?>

<div class="main">

<h1>Nejpraktičtější e-mailový program</h1>

<p>Thunderbird je podle mě jeden z&nbsp;nejpraktičtější e-mailových
programů, a&nbsp;to jsem už používal různé programy, například Outlook
Express a&nbsp;The BAT!</p>

<p>Na Thunderbirdu mě zaujala jednoduchá instalace, střízlivé
a&nbsp;praktické uživatelské prostředí. Konfigurace měla ty důležité věci,
ostatní nebylo třeba měnit. Pro mě je hodně důležitá bezpečnost 
(<abbr title="Internet Message Access Protocol" lang="en">IMAP</abbr>,
<abbr title="Post Office Protocol Version 3" lang="en">POP3</abbr> 
přístup, práce s&nbsp;nebezpečnými přílohami, antispam), stabilita
(nechci přijít o&nbsp;e-maily, výhodou je také uložení v&nbsp;mboxech)
a&nbsp;práce s&nbsp;poštou (rychle vyhledává, vyhledávací složky, označování
e-mailů). Nejdříve jsem ani nevěřil, že to je zdarma. Později jsem začal
přicházet na různé nedostatky &ndash; a&nbsp;v&nbsp;tom je výhoda Thunderbirdu &ndash;
stačí párkrát kliknout a&nbsp;můžete si stáhnout vhodné rozšíření, doplnit
si funkci, kterou potřebujete. Nyní již mám nainstalovány 4&nbsp;rozšíření
a&nbsp;připravuji si jedno vlastní. Oceňuji hlavně hromadnou práci
s&nbsp;přílohami (rozšíření <a 
href="http://www.czilla.cz/doplnky/rozsireni/attachment-tools/">Attachment Tools</a>) 
a&nbsp;rozšíření uživatelského
rozhraní (<a href="http://www.czilla.cz/doplnky/rozsireni/quote-colors/">QuoteCollapse</a> a&nbsp;<a 
href="http://www.czilla.cz/doplnky/rozsireni/mailredirect/">MailRedirect</a>).</p>

<p>Další věc, která se mi na Thunderbirdu líbí a&nbsp;používám ji, je to, že
mohu mít poštu stále s&nbsp;sebou na přenosném 
<abbr title="Universal Serial Bus" lang="en">USB</abbr> disku. Thunderbird lze
všude snadno nainstalovat (dokonce nejen na Windows) a&nbsp;bezproblémů si
vždy otevřu svůj profil s&nbsp;uloženou poštou a&nbsp;nastavením. Tomu říkám
praktický e-mail.</p>

<p>Thunderbird také často instaluji zákazníkům a&nbsp;známým, většinou jsou
z něj nadšeni. Sice neocení možnost přidat rozšíření, ale program si je
získá <b>svou bezpečností</b> (ochrana proti virům), kvalitním antispamovým
filtrem a&nbsp;propracovaným vzhledem a&nbsp;funkcemi, o&nbsp;kterých nemusí
přemýšlet, které prostě fungují.</p>

<p class="sig">
	<a href="http://zahradil.info/">Jiří Zahradil</a>
</p>


</div>

<div class="side"><div class="side-in">
	<hr />
	<h2>Navazující odkazy</h2>

<?php

	include($inc_path . "x_more_stories.inc");

?>

</div></div>
<div class="path">
	<hr />
	<p>
		<a href="/"><?php echo $web_name; ?></a> &gt;
		<a href="../">Zkušenosti</a> &gt;
		<strong>Jiří Zahradil</strong>
	</p>
</div>
<?php

	include($inc_path . "x_footer.inc");

?>
