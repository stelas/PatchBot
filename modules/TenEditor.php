<?php

class TenEditor extends PatchBase {
	function __construct() {
		parent::__construct('SweetScape Software Inc.', '010 Editor', 'https://sweetscape.com/download/010editor/');
	}
	function check() : bool {
		if ($this->fetch('https://sweetscape.com/010editor/'))
			return $this->parse('/<div class="versiontext">v([\d\.]+)<\/div>/');
		return false;
	}
}

?>
