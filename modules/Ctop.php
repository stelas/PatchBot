<?php

class Ctop extends PatchBase {
	function __construct() {
		parent::__construct('Bradley Cicenas', 'ctop', 'https://ctop.sh/');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/bcicen/ctop/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
