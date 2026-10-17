<?php

class UBlockFF extends PatchBase {
	function __construct() {
		parent::__construct('Raymond Hill', 'uBlock Origin', 'https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/ublock-origin/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
