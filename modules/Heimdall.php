<?php

class Heimdall extends PatchBase {
	function __construct() {
		parent::__construct('Chris Hunt', 'Heimdall', 'https://heimdall.site/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/linuxserver/Heimdall/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
