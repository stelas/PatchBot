<?php

class Shiori extends PatchBase {
	function __construct() {
		parent::__construct('Radhi Fadlillah', 'Shiori', 'https://github.com/go-shiori/shiori');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/go-shiori/shiori/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
