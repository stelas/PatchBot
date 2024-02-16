<?php

class BitwardenChrome extends PatchBase {
	function __construct() {
		parent::__construct('Bitwarden Inc.', 'Bitwarden', 'https://bitwarden.com/download/');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chrome.google.com/webstore/detail/bitwarden-free-password-m/nngceckbapebfimnlniiiahkandclblb'))
			return $this->parse('/\\\"version\\\": \\\"([\d\.]+)\\\"/');
		return false;
	}
}

?>
