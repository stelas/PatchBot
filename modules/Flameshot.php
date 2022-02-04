<?php

class Flameshot extends PatchBase {
	function __construct() {
		parent::__construct('Alejandro Sirgo Rica', 'Flameshot', 'https://flameshot.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/flameshot-org/flameshot/releases'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
