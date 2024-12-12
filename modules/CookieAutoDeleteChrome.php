<?php

class CookieAutoDeleteChrome extends PatchBase {
	function __construct() {
		parent::__construct('CAD Team', 'Cookie AutoDelete', 'https://chrome.google.com/webstore/detail/cookie-autodelete/fhcgjolkccmbidfldomjliifgaodjagh');
		$this->patch->setBranch('for Chrome');
	}
	function check() : bool {
		if ($this->fetch('https://chrome.google.com/webstore/detail/cookie-autodelete/fhcgjolkccmbidfldomjliifgaodjagh'))
			return $this->parse('/<div class="N3EXSc">([\d\.]+)<\/div>/');
		return false;
	}
}

?>
