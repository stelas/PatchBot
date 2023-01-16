<?php

class Cryptomator extends PatchBase {
	function __construct() {
		parent::__construct('Sebastian Stenzel', 'Cryptomator', 'https://cryptomator.org/downloads/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/cryptomator/cryptomator/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
