<?php

class KiCad extends PatchBase {
	function __construct() {
		parent::__construct('KiCad Developers', 'KiCad', 'https://kicad.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://kicad.org/download/source/'))
			return $this->parse('/<p>Current Version: <strong>([\d\.]+)<\/strong><\/p>/');
		return false;
	}
}

?>
