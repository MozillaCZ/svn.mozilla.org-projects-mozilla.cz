<?php
class Page
{
	protected $metaTags = array();
	protected $title = 'CZilla';
	protected $webName = 'CZilla';
	protected $headline = array();

	protected $panelHidden = false;
	protected $webStat = true;
	protected $incPath;
	protected $feedHandler;

	public function __construct()
	{
		error_reporting(E_ALL);
		$this->incPath = dirname(__FILE__);
	}

	function setMeta($name, $content, $lang = 'cs')
	{
		$content = str_replace ('"', '&quot;', $content);

		foreach ($this->metaTags as $var => $metaTag) {
			if ($metaTag['name'] == $name && $metaTag['lang'] == $lang) {
				return $this->metaTags[$var]['content'] = htmlspecialchars($content);
			}
		}
		$this->metaTags[] = array(
			'name'    => $name,
			'content' => $content,
			'lang'    => $lang
			);
	}

	function setKeywords($content, $lang = "cs")
	{
		$this->setMeta('keywords', $content, $lang);
		return $this;
	}

	function setDescription($content, $lang = 'cs')
	{
		$this->setMeta('description', $content, $lang);
		return $this;
	}

	function getMeta()
	{
		return $this->metaTags;
	}

	public function setTitle($title, $prepend = true)
	{
		$this->title = $title . ( $prepend ? ' - ' . $this->webName : '' );
		return $this;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setHeadline($firstLine, $secondLine)
	{
		$this->headline = array($firstLine, $secondLine);
		return $this;
	}

	public function getHeadline() {
		return $this->headline;
	}

	public function isWebStat()
	{
		return (bool) $this->webStat;
	}

	public function isPanelHidden()
	{
		return (bool) $this->panelHidden;
	}

	public function getFeedHandler($url)
	{
		if($this->feedHandler === null) {
			require_once $this->incPath . '/lastRSS.php';

			$this->feedHandler = new lastRSS;
			$this->feedHandler->cache_dir = $this->incPath . '/cache';
			$this->feedHandler->cache_time = 1200;
		}
		return $this->feedHandler->get($url);
	}

	public function includeTemplate($name, $variables = null)
	{
		if(!empty($variables) && is_array($variables)) {
			extract($variables);
		}
		require $this->incPath . '/tpl/' . $name . '.php';
	}

	public function setMenu($menu)
	{
		return $this;
	}

	public function writeEmailAddress($address, $text = '')
	{
		$address_encode = $text_encode = '';
		for ($x=0; $x < strlen($address); $x++) {
			$text_encode .= '&#x' . bin2hex($address[$x]).';';
			$address_encode .= (preg_match('!\w!',$address[$x])) ? ('%' . bin2hex($address[$x])) : $address[$x];
		}
		echo '<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;' . $address_encode . '">' . (empty($text) ? $text_encode : $text) . '</a>';
	}

	public function getDownload($product)
	{
		include $this->incPath . '/config.php';
		$mysqlConfig = array(
			'host' => $mysql_host,
			'user' => $mysql_user,
			'pass' => $mysql_pass,
			'db' => $mysql_db
		);

		require $this->incPath . '/download.php';
		return new Download($mysqlConfig, $product);
	}
}

$page = new Page();
