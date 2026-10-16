<?php

class Tails extends PatchBase {
	function __construct() {
		parent::__construct('Tor Project', 'Tails', 'https://tails.net/install/index.en.html');
	}
	function check() : bool {
		if ($this->fetch('https://tails.net/upgrade/v2/Tails/7.11/amd64/stable/upgrades.yml'))
			return $this->parse('/^ *version: \'([\d\.]+)\'/m');
		return false;
	}
}

?>
