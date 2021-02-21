<?php

class Adminer extends PatchBase {
	function __construct() {
		parent::__construct('Jakub Vrána', 'Adminer', 'https://www.adminer.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/vrana/adminer/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
