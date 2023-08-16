<?php

class KiTTY extends PatchBase {
	function __construct() {
		parent::__construct('Cyril Dupont', 'KiTTY', 'http://kitty.9bis.com/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/cyd01/KiTTY/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
