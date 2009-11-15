<?php
	/* if the title is longer than $length, trim it and add "…" */
	function trimRSSHeader($header, $length) {
		$header = html_entity_decode ($header);
		if (strlen($header) > $length) {
			return mb_substr($header, 0, $length, 'UTF-8') . '…';
		}
		return $header;
	}

	/* echoes headers for the chosen RSS feed */
	function getRSSHeaders($url, $numHeaders) {

		global $rss;

		/* Try to load and parse RSS file */
		if ($rs = $rss->get($url)) {
			/* Show last published articles (title, link) */
			echo "<ul class=\"lnks\">\n";
			$i = 0;
			foreach($rs['items'] as $item) {
				/* increase internal counter of items */
				$i++;

				$title = trimRSSHeader($item['title'], RSS_HEADER_LENGTH);
				echo "\t<li><a href=\"$item[link]\">" . htmlspecialchars($title) . "</a></li>\n";

				/* stop the loop if maximum allowed number of items is reached */
				if($i >= $numHeaders)
					break;
			};
			echo "</ul>\n";
		} else {
			echo "<p>Nepodařilo se načíst RSS kanál.</p>";
		}
	}

	/* check if browser is old Mozilla Suite */
	function isMozillaSuite() {
		if (isset($_SERVER["HTTP_USER_AGENT"])) {
			$uagent = $_SERVER["HTTP_USER_AGENT"];

			// Suite:    Mozilla/5.0 (Windows; U; Windows NT 5.1; cs-CZ; rv:1.7.8) Gecko/20050511
			// FF:       Mozilla/5.0 (Windows; U; Windows NT 5.1; cs; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1
			// AHA rika: Mozilla/5\.0 \(...; rv:1\.7.*) Gecko/.* a neobsahuje Firefox, Firebird, Camino, SeaMonkey
			if (preg_match("/^Mozilla\/5\.0 \(.*; rv:1\.[45678].*\) Gecko\/.*$/", $uagent)) {
				if (strpos($uagent, "Firefox") !== false || strpos($uagent, "Firebird") !== false
					|| strpos($uagent, "Camino") !== false || strpos($uagent, "SeaMonkey") !== false) {
					return false;
				}
				return true;
			}
			return false;
		}
		return false;
	}

	function isOldFirefox() {
		if (isset($_SERVER["HTTP_USER_AGENT"])) {
			$uagent = $_SERVER["HTTP_USER_AGENT"];

			// FF:       Mozilla/5.0 (Windows; U; Windows NT 5.1; cs; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1
			// stare verze: 0.x, 1.0 PR, 1.0.x (verze 1.5.x a 2.x maji vlastni aktual. mechanismus)
			if (preg_match("/^Mozilla\/5\.0 \(.*\) Gecko\/.*Firefox\/((0\.)|(1\.0)).*$/", $uagent)) {
				return true;
			}
			return false;
		}
		return false;
	}

	/* test if user don't want to show Seamonkey update bar any more */
	function ignoreMozillaSuiteUpdate() {
		if (isset($_COOKIE["ignoreMS17Update"])) {
			if ($_COOKIE["ignoreMS17Update"] == "1") {
				return true;
			}
			return false;
		}
		return false;
	}

	function ignoreFirefoxUpdate() {
		if (isset($_COOKIE["ignoreFFUpdate"])) {
			if ($_COOKIE["ignoreFFUpdate"] == "1") {
				return true;
			}
			return false;
		}
		return false;
	}
