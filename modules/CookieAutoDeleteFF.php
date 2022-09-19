<?php

class CookieAutoDeleteFF extends PatchBase {
	function __construct() {
		parent::__construct('CAD Team', 'Cookie AutoDelete', 'https://addons.mozilla.org/en-US/firefox/addon/cookie-autodelete/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/cookie-autodelete/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>
