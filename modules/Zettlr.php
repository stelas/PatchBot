<?php

class Zettlr extends PatchBase {
	function __construct() {
		parent::__construct('Hendrik Erz', 'Zettlr', 'https://zettlr.com/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Zettlr/Zettlr/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
