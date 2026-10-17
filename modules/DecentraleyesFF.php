<?php

class DecentraleyesFF extends PatchBase {
	function __construct() {
		parent::__construct('Thomas Rientjes', 'Decentraleyes', 'https://addons.mozilla.org/en-US/firefox/addon/decentraleyes/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/decentraleyes/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
