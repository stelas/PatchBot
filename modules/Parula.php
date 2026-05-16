<?php

class Parula extends PatchBase {
	function __construct() {
		parent::__construct('Beonex GmbH', 'Parula', 'https://parula.beonex.com/download');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/mustang-im/mustang/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
