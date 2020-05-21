<?php

class FreeCAD extends PatchBase {
	function __construct() {
		parent::__construct('FreeCAD Team', 'FreeCAD', 'https://www.freecadweb.org/downloads.php');
	}
	function check() : bool {
		if ($this->fetch('https://api.github.com/repos/FreeCAD/FreeCAD/releases/latest', true))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
