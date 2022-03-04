<?php

class Zim extends PatchBase {
	function __construct() {
		parent::__construct('Jaap Karssenberg', 'Zim', 'https://zim-wiki.org/downloads.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/zim-desktop-wiki/zim-desktop-wiki/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>
