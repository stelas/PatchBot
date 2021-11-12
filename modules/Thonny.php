<?php

class Thonny extends PatchBase {
	function __construct() {
		parent::__construct('Aivar Annamaa', 'Thonny', 'https://thonny.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/thonny/thonny/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
