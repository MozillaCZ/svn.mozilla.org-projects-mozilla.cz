<?php
	/* Vypis vetsiho mnozstvi nahledu; vola predchozi funkci.
	Na vstupu ocekava pole $images:
		0 => Nadpis obrazku,
		1 => Popis obrazku,
		2 => URL obrazku v plne velikosti,
		3 => URL nahledu obrazku,
		4 => Sirka nahledu,
		5 => Vyska nahledu
	$descriptionType definuje, zda zobrazit screenshoty v rezimu "ukecanem" (tj. pod sebou s
	dlouhym komentarem) nebo strucnem. Hodnoty "full" | "brief".
	*/

	if(empty($descriptionType)) {
		$descriptionType = 'brief';
	}
	echo '<div class="' . ($descriptionType == 'full' ? 'nahled-v' : 'nahled-h') . '">' . "\n";
	foreach ($images as $key => $value) {
		$title = $value[0];
		$imageHiRes = $value[2];
		$imageLoRes = $value[3];
		$width = empty($value[4]) ? 200 : $value[4];
		$height = empty($value[5]) ? 150 : $value[5];
		$description = (empty($value[1]) || $descriptionType != 'full') ? $value[0] : $value[1];
		echo '<p><a href="' . $imageHiRes . '" title="' . $title . '"><img src="' . $imageLoRes . '" alt="'
		 . $title . '" height="' . $height . '" width="' . $width . '"/></a>' . '<span>' . $description . '</span></p>' . "\n";
	}
	echo '</div><div class="cleaner">&nbsp;</div>'."\n";
