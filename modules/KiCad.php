<?php

class KiCad extends PatchBase {
	function __construct() {
		parent::__construct('KiCad Developers', 'KiCad', 'https://kicad-pcb.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://kicad-pcb.org/download/source/'))
			return $this->parse('/<p>Current Version: <strong>([\d\.]+)<\/strong><\/p>/');
		return false;
	}
}

?>
