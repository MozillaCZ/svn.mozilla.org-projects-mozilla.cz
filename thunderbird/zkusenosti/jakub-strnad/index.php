<?php

	$inc_path		= "../../inc/";

	include($inc_path . "config.inc");

	setTitle("Jakub Strnad: Thunderbird mě překvapil");
	$page_desc		= "Jakub Strnad přešel na Linux a začal používat Thunderbird jako svůj výchozí poštovní program";
	$page_keywords	= "mozilla thunderbird přechod poštovní klient legálně zdarma";

	include($inc_path . "h_head.inc");
	include($inc_path . "x_header.inc");

?>

<div class="main">

<h1>Thunderbird mě překvapil</h1>

<p>Internet používám od roku 1999. Tehdy jsem, stejně jako většina ostatních
uživatelů Windows, používal to, co bylo v&nbsp;operačním systému k dispozici
&ndash; tedy Outlook Express. O&nbsp;rok později jsem na svém
<abbr title="Personal Computer" lang="en">PC</abbr>
přešel na Linux a&nbsp;s&nbsp;tím souvisela i&nbsp;volba nového mailového
klienta.</p>

<p>Vyzkoušel jsem jich velmi mnoho a&nbsp;jako vyhovující se ukázal ten
v&nbsp;Mozille, u&nbsp;kterého jsem pak poměrně dlouho zůstal. Mé požadavky
splňoval, ale za celou tu dobu zůstával pořád stejný, bez výrazných
vylepšení. Chtěl jsem tedy vyzkoušet i&nbsp;něco nového &ndash; přešel jsem
z&nbsp;původní Mozilly na kombinaci Firefox a&nbsp;Thunderbird.</p>

<p>Mailový klient Thunderbird se nejenom ukázal jako velmi dobře použitelný,
ale mnoha věcmi mě překvapil. Například automatická filtrace nevyžádané
pošty bez nutnosti sestavovat ručně pravidla filtru ušetří mnoho času. Vývoj
Thunderbirdu jde velmi rychle dopředu, a&nbsp;tak se brzy jistě dočkáme
dalších užitečných rozšíření.</p>

<p class="sig">
	Jakub Strnad
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
		<strong>Jakub Strnad</strong>
	</p>
</div>
<?php

	include($inc_path . "x_footer.inc");

?>
