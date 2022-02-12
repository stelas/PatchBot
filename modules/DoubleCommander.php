<?php

class DoubleCommander extends PatchBase {
	function __construct() {
		parent::__construct('Alexander Koblov', 'Double Commander', 'https://doublecmd.sourceforge.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/doublecmd/doublecmd/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
