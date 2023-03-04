<?php

class KiCad extends PatchBase {
	function __construct() {
		parent::__construct('KiCad Developers', 'KiCad', 'https://kicad.org/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/KiCad/kicad-source-mirror/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
