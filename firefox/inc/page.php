<?php
class Page
{
	private $webUrl = 'http://firefox.mozilla.cz/';
	private $webName = 'Přejděte na Firefox';
	private $webStat = true;

	private $title = 'Mozilla Firefox';
	private $description;
	private $keywords;

	private $incPath;

	public function __construct()
	{
		error_reporting(0);
		$this->incPath = dirname(__FILE__);
	}

	public function setTitle($title, $prepend = true) {
		$this->title = $title . ( $prepend ? ' - ' . $this->webName : '' );
		return $this;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setKeywords($keywords) {
		$this->keywords = $keywords;
		return $this;
	}

	public function getKeywords() {
		return $this->keywords;
	}

	public function getWebUrl() {
		return $this->webUrl;
	}

	public function getWebName() {
		return $this->webName;
	}

	public function getMeta() {
		$meta = array();
		if(!empty($this->description) && $this->description != 'XXX')  {
			$meta['description'] = $this->description;
		}
		if(!empty($this->keywords) && $this->keywords != 'XXX')  {
			$meta['keywords'] = $this->keywords;
		}
		return $meta;
	}

	public function isWebStat()
	{
		return (bool) $this->webStat;
	}

	public function includeTemplate($name)
	{
		require $this->incPath . '/tpl/' . $name . '.php';
	}

	public function getPlatform()
	{
		$uaString = isset($_SERVER["HTTP_USER_AGENT"]) ? $_SERVER["HTTP_USER_AGENT"] : "";
		if(stristr($uaString, "Linux") || stristr($uaString, "X11") || stristr($uaString, "Lindows")) {
			return "lin";
		}
		if(stristr($uaString, "Mac")) {
			return "mac";
		}
		return "win";
	}

	public function getDownloadData()
	{
		require $this->incPath . '/config.php';

		$link = mysql_connect($mysql_host, $mysql_user, $mysql_pass);
		if (!$link) {
			return false;
		}

		$row = false;
		$db_selected = mysql_select_db($mysql_db, $link);
		if ($db_selected) {
			$query = mysql_query("SELECT * FROM mozsk_produkty WHERE urlid='firefox' ORDER BY datum DESC LIMIT 1");
			if ($query) {
				$row = mysql_fetch_assoc($query);
			}
		}
		mysql_close($link);
		return $row;
	}
}

$page = new Page();
