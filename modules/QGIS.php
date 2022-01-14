<?php

class QGIS extends PatchBase {
	function __construct() {
		parent::__construct('QGIS Authors', 'QGIS', 'https://qgis.org/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/qgis/QGIS/releases/latest'))
			return $this->parse_json('name');
		return false;
	}
}

?>
