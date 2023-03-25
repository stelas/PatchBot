<?php

class Mosh extends PatchBase {
	function __construct() {
		parent::__construct('Keith Winstein', 'Mosh', 'https://mosh.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/mobile-shell/mosh/releases/latest'))
			return $this->parse_json('tag_name', '/mosh-(.+)/');
		return false;
	}
}

?>
