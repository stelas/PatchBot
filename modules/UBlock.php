<?php

class UBlock extends PatchBase {
	function __construct() {
		parent::__construct('Raymond Hill', 'uBlock Origin', 'https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>
