<?php

class ZAP extends PatchBase {
	function __construct() {
		parent::__construct('ZAP Dev Team', 'Zed Attack Proxy', 'https://www.zaproxy.org/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/zaproxy/zaproxy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
