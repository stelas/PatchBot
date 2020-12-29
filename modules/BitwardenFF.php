<?php

class BitwardenFF extends PatchBase {
	function __construct() {
		parent::__construct('Bitwarden Inc.', 'Bitwarden', 'https://bitwarden.com/download/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/bitwarden-password-manager/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>
