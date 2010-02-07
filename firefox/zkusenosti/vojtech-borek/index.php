<?php
	require_once '../../inc/page.php';
	$page->setTitle('Vojtěch Borek: Firefox mě nadchnul');
	$page->setDescription('Vojtěch zažil Válku prohlížečů i resignaci vývojářů MSIE na vývoj moderního prohlížeče. Ale Firefox ho nadchnul.');
	$page->setKeywords('mozilla firefox přechod zkušenost nadšení kompaktní prohlížeč pohodlí');
	$page->includeTemplate('header');
?>
<div class="main">

<h1>Firefox mě nadchnul</h1>

<p>Na Firefox jsem přešel proto, že mi nabídl to, co žádný jiný prohlížeč
nedokáže.</p>

<p>Na Internetu se pohybuji od roku 1995 a Web jsem začínal prohlížet
s&nbsp;Netscape pod Windows&nbsp;3.11. Pamatuji Válku prohlížečů, vítězství
Internet Exploreru, jeho postupné vyhnívání a&nbsp;neschopnost vývojářů ho
udržet v&nbsp;bezpečném stavu až po naprostou resignaci na vývoj moderního
prohlížeče. A&nbsp;v&nbsp;tu chvíli projevil svobodný software svoji
sílu.</p>

<p>Mozilla Suite, kterou několik měsíců používal, mi připomněla to nejlepší
z&nbsp;Netscapu s&nbsp;mnohými dalšími vylepšeními. Ale teprve Firefox mě
nadchnul. Malý kompaktní rychlý prohlížeč s&nbsp;jedinečným důrazem na
pohodlí uživatele. Prohlížení v&nbsp;panelech a&nbsp;blokování pop-up oken
jsou, podle mého názoru, to hlavní, co dělá Firefox tak přívětivým. Nesmírně
oceňuji, když si mohu upravit software podle svého, což mi Firefox plně
umožňuje. Jednak svým otevřeným kódem a&nbsp;jednak nesmírným množstvím
volně přístupných
<a href="https://addons.mozilla.org/cs/firefox/">rozšíření</a>,
která umožňují např. blokování reklamy, ovládání pomocí gest myši a&nbsp;čtení
<abbr title="Really Simple Syndication" lang="en">RSS</abbr>
kanálů. Mezi mé další velmi oblíbené vlastnosti patří možnost použití
klíčových slov v&nbsp;záložkách a&nbsp;správce cookies.</p>

<p>Protože je vývoj Firefoxu velmi dynamický a&nbsp;jeho vývojáři pozorně
sledují názory a&nbsp;přání uživatelů, myslím si, že ho čeká skvělá
budoucnost.</p>


<p class="sig">
	Vojtěch Albert Borek
</p>

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
		<strong>Vojtěch Borek</strong>
	</p>
</div>
<?php
	$page->includeTemplate('footer');
?>
