<?php
	require_once '../../inc/page.php';
	$page->setTitle('Koubovi: Čtvrtý člen rodiny');
	$page->setDescription('Mozilla Firefox si u Koubů oblíbila celá rodina.');
	$page->setKeywords('mozilla firefox zkušenost msie přechod jednoduchost variabilita rozšíření gesta myší panely slovník červená panda');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Čtvrtý člen rodiny</h1>

<p>Na
<abbr title="Microsoft Internet Explorer">MSIE</abbr>
jsme si u&nbsp;nás doma nikdy nezvykli. Věčně nám padal, čas od času se
zbláznil, tisíckrát se nám duplikoval a&nbsp;prováděl podobné zlotřilosti.
Byl jsem pověřen najít pro nás vhodnější prohlížeč, který by nás tolik
nezlobil. Po několika experimentech s&nbsp;přeplácanými nadstavbami
<abbr title="Microsoft Internet Explorer">MSIE</abbr>
a&nbsp;překomplikovanou Operou jsme skončili u&nbsp;Firefoxu.</p>

<p>Já na něm miluji naprostou jednoduchost a&nbsp;variabilitu ve formě
<a href="https://addons.mozilla.org/cs/firefox/">úžasných rozšíření</a>,
nad kterými neztrácím kontrolu, a&nbsp;navigaci pomocí
gest myší. Má žena zase využívá ve Firefoxu možnosti desítek otevřených
stránek v&nbsp;jednom okně a&nbsp;lahůdkových rozšíření, jako je třeba
slovník v&nbsp;kontextovém menu. A&nbsp;naše dcera Anička? Ta nedá dopustit
na tu krásnou červenou pandu, která nám zaří na pracovní ploše
displeje...</p>

<p class="sig">
	<a href="http://www.koubovi.cz/">Jirka Kouba</a>
</p>

<div class="img-center"><div class="img-c" style="width:400px">
	<img src="/img/koubovi-anicka.jpg"
		width="400" height="304" alt="Anička a Firefox" />
</div></div>

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
		<strong>Jirka Kouba</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
