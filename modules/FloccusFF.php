<?php

class FloccusFF extends PatchBase {
	function __construct() {
		parent::__construct('Marcel Klehr', 'floccus', 'https://addons.mozilla.org/en-US/firefox/addon/floccus/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/floccus/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
