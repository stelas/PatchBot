<?php

class Openrport extends PatchBase {
	function __construct() {
		parent::__construct('openrport Authors', 'openrport', 'https://oss.openrport.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/openrport/openrport/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
