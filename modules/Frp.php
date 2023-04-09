<?php

class Frp extends PatchBase {
	function __construct() {
		parent::__construct('fatedier', 'frp', 'https://gofrp.org/en/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/fatedier/frp/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
