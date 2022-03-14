<?php

class RVTools extends PatchBase {
	function __construct() {
		parent::__construct('Rob de Veij', 'RVTools', 'https://www.robware.net/rvtools/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.robware.net/rvtools/'))
			return $this->parse('/Latest Version: ([\d.]+)/');
		return false;
	}
}

?>
