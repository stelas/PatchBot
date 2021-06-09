<?php

class LocalCDNChrome extends PatchBase {
	function __construct() {
		parent::__construct('nobody', 'LocalCDN', 'https://www.localcdn.org/');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chrome.google.com/webstore/detail/localcdn/njdfdhgcmkocbgbhcioffdbicglldapd'))
			return $this->parse('/<meta itemprop="version" content="([\d\.]+)"\/>/');
		return false;
	}
}

?>
