<?php

class MVT extends PatchBase {
	function __construct() {
		parent::__construct('MVT Authors', 'Mobile Verification Toolkit', 'https://mvt.re/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/mvt-project/mvt/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
