<?php

class Krita extends PatchBase {
	function __construct() {
		parent::__construct('Krita Foundation', 'Krita', 'https://krita.org/');
	}
	function check() : bool {
		if ($this->fetch('https://krita.org/en/download/krita-desktop/'))
			return $this->parse('/<h3>Download Krita[\s]*([\d\.]+)<\/h3>/');
		return false;
	}
}

?>
