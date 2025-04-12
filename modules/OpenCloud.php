<?php

class OpenCloud extends PatchBase {
	function __construct() {
		parent::__construct('OpenCloud GmbH', 'OpenCloud Server', 'https://opencloud.eu/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/opencloud-eu/opencloud/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
