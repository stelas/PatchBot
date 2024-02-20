<?php

class IStillDontCareAboutCookiesFF extends PatchBase {
	function __construct() {
		parent::__construct('Guus van der Meer', 'I still don\'t care about cookies', 'https://addons.mozilla.org/en-US/firefox/addon/istilldontcareaboutcookies/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch('https://addons.mozilla.org/en-US/firefox/addon/istilldontcareaboutcookies/'))
			return $this->parse('/"version":"([\d\.]+)"/');
		return false;
	}
}

?>
