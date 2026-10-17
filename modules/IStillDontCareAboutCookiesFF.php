<?php

class IStillDontCareAboutCookiesFF extends PatchBase {
	function __construct() {
		parent::__construct('Guus van der Meer', 'I still don\'t care about cookies', 'https://addons.mozilla.org/en-US/firefox/addon/istilldontcareaboutcookies/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/istilldontcareaboutcookies/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
