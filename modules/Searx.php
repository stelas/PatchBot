<?php

class Searx extends PatchBase {
	function __construct() {
		parent::__construct('Adam Tauber', 'searx', 'https://searx.github.io/searx/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/searx/searx/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
