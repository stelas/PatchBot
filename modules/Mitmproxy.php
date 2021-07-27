<?php

class Mitmproxy extends PatchBase {
	function __construct() {
		parent::__construct('Aldo Cortesi', 'mitmproxy', 'https://mitmproxy.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/mitmproxy/mitmproxy/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
