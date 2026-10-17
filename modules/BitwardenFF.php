<?php

class BitwardenFF extends PatchBase {
	function __construct() {
		parent::__construct('Bitwarden Inc.', 'Bitwarden', 'https://bitwarden.com/download/');
		$this->patch->setBranch('for Firefox');
	}
	function check() : bool {
		if ($this->fetch_json('https://addons.mozilla.org/api/v5/addons/addon/bitwarden-password-manager/versions/?page_size=1'))
			return $this->parse_json('version');
		return false;
	}
}

?>
