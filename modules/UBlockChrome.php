<?php

class UBlockChrome extends PatchBase {
	function __construct() {
		parent::__construct('Raymond Hill', 'uBlock Origin', 'https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm'))
			return $this->parse('/<div class="nBZElf">([\d\.]+)<\/div>/');
		return false;
	}
}

?>
