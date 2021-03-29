<?php

class OpenSCAD extends PatchBase {
	function __construct() {
		parent::__construct('Marius Kintel', 'OpenSCAD', 'http://www.openscad.org/downloads.html');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/openscad/openscad/releases/latest'))
			return $this->parse_json('tag_name', '/openscad-(.+)/');
		return false;
	}
}

?>
