<?php

class Sniffnet extends PatchBase {
	function __construct() {
		parent::__construct('Giuliano Bellini', 'Sniffnet', 'https://sniffnet.net/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/GyulyVGC/sniffnet/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
