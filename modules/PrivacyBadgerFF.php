<?php

class PrivacyBadgerFF extends PatchBase {
	function __construct() {
		parent::__construct('Electronic Frontier Foundation', 'Privacy Badger', 'https://addons.mozilla.org/en-US/firefox/addon/privacy-badger17/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/privacy-badger17/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>
