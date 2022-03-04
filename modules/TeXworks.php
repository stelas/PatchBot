<?php

class TeXworks extends PatchBase {
	function __construct() {
		parent::__construct('J. Kew, S. Löffler, C. Sharpsteen', 'TeXworks', 'https://www.tug.org/texworks/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/TeXworks/texworks/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
