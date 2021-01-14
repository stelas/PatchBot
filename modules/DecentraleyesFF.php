<?php

class DecentraleyesFF extends PatchBase {
	function __construct() {
		parent::__construct('Thomas Rientjes', 'Decentraleyes', 'https://addons.mozilla.org/en-US/firefox/addon/decentraleyes/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/decentraleyes/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>
