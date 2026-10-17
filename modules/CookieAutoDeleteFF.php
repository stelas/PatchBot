<?php

class CookieAutoDeleteFF extends PatchBase {
	function __construct() {
		parent::__construct('CAD Team', 'Cookie AutoDelete', 'https://addons.mozilla.org/en-US/firefox/addon/cookie-autodelete/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/cookie-autodelete/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
