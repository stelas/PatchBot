<?php

class Saucedacity extends PatchBase {
	function __construct() {
		parent::__construct('Saucedacity Team', 'Saucedacity', 'https://saucedacity.github.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/saucedacity/saucedacity/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
