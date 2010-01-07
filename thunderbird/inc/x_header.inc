<body id="thunderbird-czilla-cz">
<div class="page">
<div class="head">
	<div class="head-logo"><a href="/" title="Zpět na titulní stranu"><span><?php echo $web_name; ?></span></a></div>
	<form action="http://jyxo.cz/search.php" method="get"><div>
		<input type="hidden" name="stem" value="on" />
		<input type="hidden" name="d" value="cz@thunderbird.czilla.cz" />
		<label for="sb">prohledat:</label>
		<input type="text" size="12" name="s" id="sb" />
		<input type="submit" value="Hledej" id="ssb" />
	</div></form>
	<div class="ulbox">
<?php
	include($inc_path . "x_menu.inc");
?>
	<div class="cb"><!-- --></div>
	</div>
<hr />
</div>

<div class="cont">
