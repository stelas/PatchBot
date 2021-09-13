<?php

class PeaZip extends PatchBase {
	function __construct() {
		parent::__construct('Giorgio Tani', 'PeaZip', 'https://peazip.github.io/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/peazip/PeaZip/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
