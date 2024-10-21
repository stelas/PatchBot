<?php

class Espanso extends PatchBase {
	function __construct() {
		parent::__construct('Federico Terzi', 'Espanso', 'https://espanso.org/install/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/espanso/espanso/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
