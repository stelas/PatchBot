<?php

class LocalCDNFF extends PatchBase {
	function __construct() {
		parent::__construct('nobody', 'LocalCDN', 'https://www.localcdn.org/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/localcdn-fork-of-decentraleyes/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
