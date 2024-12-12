<?php

class LocalCDNChrome extends PatchBase {
	function __construct() {
		parent::__construct('nobody', 'LocalCDN', 'https://www.localcdn.org/');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chrome.google.com/webstore/detail/localcdn/njdfdhgcmkocbgbhcioffdbicglldapd'))
			return $this->parse('/<div class="N3EXSc">([\d\.]+)<\/div>/');
		return false;
	}
}

?>
