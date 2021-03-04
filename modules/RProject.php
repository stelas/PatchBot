<?php

class RProject extends PatchBase {
	function __construct() {
		parent::__construct('R Core Team', 'R', 'https://www.r-project.org/');
	}
	function check() : bool {
		if ($this->fetch('https://cran.r-project.org/src/base/VERSION-INFO.dcf'))
			return $this->parse('/Release: ([\d\.]+)/');
		return false;
	}
}

?>
