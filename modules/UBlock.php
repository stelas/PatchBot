<?php

class UBlock extends PatchBase {
	function __construct() {
		parent::__construct('Raymond Hill', 'uBlcok Origin', 'https://github.com/gorhill/uBlock');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/de/firefox/addon/ublock-origin/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>
