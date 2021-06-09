<?php

class LocalCDNFF extends PatchBase {
	function __construct() {
		parent::__construct('nobody', 'LocalCDN', 'https://www.localcdn.org/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/localcdn-fork-of-decentraleyes/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>
