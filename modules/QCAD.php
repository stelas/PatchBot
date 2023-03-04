<?php

class QCAD extends PatchBase {
	function __construct() {
		parent::__construct('RibbonSoft GmbH', 'QCAD', 'https://qcad.org/en/download');
		$this->patch->setBranch('Community Edition');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/qcad/qcad/tags'))
			return $this->parse_json('name');
		return false;
	}
}

?>
