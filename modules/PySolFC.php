<?php

class PySolFC extends PatchBase {
	function __construct() {
		parent::__construct('Shlomi Fish', 'PySol Fan Club Edition', 'https://pysolfc.sourceforge.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/shlomif/PySolFC/releases/latest'))
			return $this->parse_json('tag_name', '/pysolfc-(.+)/');
		return false;
	}
}

?>
