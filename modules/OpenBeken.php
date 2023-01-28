<?php

class OpenBeken extends PatchBase {
	function __construct() {
		parent::__construct('openshwprojects', 'OpenBeken', 'https://github.com/openshwprojects/OpenBK7231T_App');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/openshwprojects/OpenBK7231T_App/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
