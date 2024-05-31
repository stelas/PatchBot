<?php

class Blocky extends PatchBase {
	function __construct() {
		parent::__construct('Dimitri Herzog', 'blocky', 'https://0xerr0r.github.io/blocky/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/0xERR0R/blocky/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
