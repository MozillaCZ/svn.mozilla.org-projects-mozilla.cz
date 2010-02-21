<?php

class TipBuilder {
	var $faq;
	var $category;
	var $index = -1;
	var $sectiona = Array();

	public function __construct($category = null, $faq = false)
	{
		$this->faq = $faq;
		$this->category = $category;
	}

	public function addSection($sectionName, $sectionComment = '')
	{
		$this->sectiona[++$this->index] = new TipBuilder_Section($sectionName, $sectionComment);
	}

	public function addTip($tipHeader, $tipText)
	{
		$this->sectiona[$this->index]->tipa[] = new TipBuilder_Tip($tipHeader, $tipText);
	}

	public function addQuestion($tipHeader, $tipText)
	{
		$this->sectiona[$this->index]->tipa[] = new TipBuilder_Tip($tipHeader, $tipText);
	}

	public function show() {
		echo "<div id=\"top\"></div>\n";
		foreach($this->sectiona as $section) {
			echo "  <div><b>$section->name</b>\n  " . ($this->faq ? '<ol>' : '<ul>') . "\n";
			$section->showContent();
			echo "  " . ($this->faq ? '</ol>' : '</ul>') . "</div>\n";
		}

		foreach($this->sectiona as $section) {
			echo "<h2 id=\"" . $section->secID . "\"" . ($this->category ? " class=\"nice " . $this->category . "\"" : "") . ">$section->name</h2>\n";
			if ($section->comment) echo "$section->comment\n";
			$section->show();
			echo "<p><a href=\"#top\">Zpět na obsah</a></p>\n";
		}
	}

	/** Vytvoření přátelského URL
	 * @param string řetězec v kódování UTF-8, ze kterého se má vytvořit URL
	 * @return string řetězec obsahující pouze čísla, znaky bez diakritiky, podtržítko a pomlčku
	 * @copyright Jakub Vrána, http://php.vrana.cz/
	 */
	public static function friendlyUrl($url) {
		setlocale(LC_ALL, 'cs_CZ.utf-8');
		$url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
		$url = trim($url, "-");
		$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
		$url = strtolower($url);
		$url = preg_replace('~[^-a-z0-9_]+~', '', $url);
		return $url;
	}
}

class TipBuilder_Section
{
	var $name;
	var $comment;
	var $secID;
	var $tipa = Array();

	public function __construct($name, $comment)
	{
		$this->name = $name;
		$this->comment = $comment;
		$this->secID = TipBuilder::friendlyUrl($name);
	}

	public function showContent()
	{
		foreach($this->tipa as $tip)
			echo "    <li><a href=\"#" . $tip->tipID . "\">$tip->header</a></li>\n";
	}

	public function show()
	{
		foreach($this->tipa as $tip) {
			echo "<h3 id=\"" . $tip->tipID . "\">$tip->header</h3>\n";
			echo "$tip->text\n<br/>";
		}
	}
}

class TipBuilder_Tip
{
	var $header;
	var $text;
	var $tipID;

	public function __construct($header, $text)
	{
 		$this->header = $header;
 		$this->text = $text;
		$this->tipID = TipBuilder::friendlyUrl($header);
	}
}
