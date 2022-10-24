<?php

class Betterbird extends PatchBase {
	function __construct() {
		parent::__construct('Betterbird Project', 'Betterbird', 'https://www.betterbird.eu/downloads/index.php');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/Betterbird/thunderbird-patches/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>
