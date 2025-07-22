<?php

class Freac extends PatchBase {
	function __construct() {
		parent::__construct('Robert Kausch', 'free audio converter', 'https://www.freac.org/downloads-mainmenu-33');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/enzo1982/freac/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
