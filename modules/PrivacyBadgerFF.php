<?php

class PrivacyBadgerFF extends PatchBase {
	function __construct() {
		parent::__construct('Electronic Frontier Foundation', 'Privacy Badger', 'https://addons.mozilla.org/en-US/firefox/addon/privacy-badger17/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/privacy-badger17/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
