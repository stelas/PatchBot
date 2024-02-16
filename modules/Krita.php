<?php

class Krita extends PatchBase {
	function __construct() {
		parent::__construct('Krita Foundation', 'Krita', 'https://krita.org/en/download/');
	}
	function check() : bool {
		if ($this->fetch('https://krita.org/en/download/'))
			return $this->parse('/>Download Krita\s+([\d\.]+)<\/h1>/');
		return false;
	}
}

?>
