<?php

class NetIO extends PatchBase {
	function __construct() {
		parent::__construct('Kai Uwe Rommel', 'NetIO', 'https://github.com/kai-uwe-rommel/netio');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/kai-uwe-rommel/netio/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
