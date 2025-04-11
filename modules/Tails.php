<?php

class Tails extends PatchBase {
	function __construct() {
		parent::__construct('Tor Project', 'Tails', 'https://tails.net/install/index.en.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://gitlab.tails.boum.org/api/v4/projects/tails%2Ftails/repository/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>
