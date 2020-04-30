<?php

class CDBurnerXP extends PatchBase {
	function __construct() {
		parent::__construct('Canneverbe Limited', 'CDBurnerXP', 'https://cdburnerxp.se/de/download');
	}
	function check() : bool {
		if ($this->fetch('https://cdburnerxp.se/de/download'))
			return $this->parse('/<small>\(([\d\.]+)\)<\/small>/');
		return false;
	}
}

?>
