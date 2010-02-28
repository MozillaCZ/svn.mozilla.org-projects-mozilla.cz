<?php

class Error
{
	protected $incPath;

	public function __construct($incPath, $disableErrorHandler = false)
	{
		$this->incPath = $incPath;

		if (!$disableErrorHandler) {
			set_error_handler(array(&$this, 'errorHandler'));
		}
	}

	public function errorHandler($code, $message, $file, $line, $context)
	{
		if (error_reporting() == 0 || !($code & error_reporting())) {
			return;
		}

		$data = array();
		$errorFile = $this->incPath . '/cache/errors.dat';
		$errorId = md5(implode("|", array($code, $message, $file, $line)));

		if (file_exists($errorFile)) {
			$data = (array) unserialize(file_get_contents($errorFile));
		}
		$error = isset($data[$errorId]) ? $data[$errorId] : array('count' => 0);
		$sendMail = isset($error['time']) ? (($error['time'] + 60 * 60 * 24) < time()) : true;
		$error['count'] += 1;
		$error['time'] = time();

		if ($f = @fopen($errorFile, "w")) {
			$data[$errorId] = $error;
			fwrite($f, serialize($data));
			fclose($f);
		}

		if ($sendMail) {
			$text  = 'Code:    ' . $code . "\n";
			$text .= 'Message: ' . $message . "\n";
			$text .= 'File:    ' . $file . "\n";
			$text .= 'Line:    ' . $line . "\n";
			$text .= "\n";

			ob_start();
				echo("Context:\n");
				var_dump($context);
				echo("GET:\n");
				var_dump($_GET);
				echo("POST:\n");
				var_dump($_POST);
				echo("COOKIE:\n");
				var_dump($_COOKIE);
				echo("SERVER:\n");
				var_dump($_SERVER);
				echo("ENV:\n");
				var_dump($_ENV);
				echo("FILES:\n");
				var_dump($_FILES);
			$text .= ob_get_contents();
			ob_end_clean();

			$subject = sprintf('Chyba serveru: %s (%s:%d)', $message, $file, $line);
			$mailSent = @mail('info@mozilla.cz', $subject, $text);
		}
	}

	function handleRedirect()
	{
		$f = fopen($this->incPath . '/data/redirect.txt', 'r');
		if (!$f) {
			return null;
		}
		$redirectInfo = array();
		$from = $to = '';

		while (!feof($f)) {
			$line = rtrim(fgets($f));

			if (preg_match('/^\s*$/', $line) || preg_match('/^\s*#.*$/', $line)) {
				continue;
			}
			if (preg_match('/^From:\s*(.*)$/', $line, $matches)) {
				$from = $matches[1];
				continue;
			}
			if (preg_match('/^To:\s*(.*)$/', $line, $matches)) {
				$to = $matches[1];
				$redirectInfo[$from] = $to;
			}
		}
		fclose($f);

		$originalURL = $_SERVER['REQUEST_URI'];
		$redirectURL = '';
		foreach ($redirectInfo as $key => $value) {
			if ('%' == $key[0] && '%' == $key[strlen($key) - 1]) {
				if (preg_match($key, $originalURL)) {
					$redirectURL = preg_replace($key, $value, $originalURL);
					break;
				}
			} else {
				if (strcmp($key, $originalURL) == 0) {
					$redirectURL = $value;
					break;
				}
			}
		}

		if (!empty($redirectURL)) {
			header('HTTP/1.1 301 Moved Permanently');
			header('Location: ' . $redirectURL);
			header('Connection: close');
			exit;
		}
	}
}
