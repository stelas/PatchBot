<?php

class PrivacyBadgerChrome extends PatchBase {
	function __construct() {
		parent::__construct('Electronic Frontier Foundation', 'Privacy Badger', 'https://chrome.google.com/webstore/detail/privacy-badger/pkehgijcmpdhfbdbbnkijodmdjhbjlgp');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chrome.google.com/webstore/detail/privacy-badger/pkehgijcmpdhfbdbbnkijodmdjhbjlgp'))
			return $this->parse('/<div class="N3EXSc">([\d\.]+)<\/div>/');
		return false;
	}
}

?>
