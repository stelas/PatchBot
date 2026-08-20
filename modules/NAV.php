<?php

class NAV extends PatchBase {
	function __construct() {
		parent::__construct('Sikt', 'Network Administration Visualized', 'https://nav.uninett.no/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Uninett/nav/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
