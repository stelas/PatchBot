<?php

class Inkscape extends PatchBase {
	function __construct() {
		parent::__construct('Inkscape Authors', 'Inkscape', 'https://inkscape.org/release/');
	}
	function check() : bool {
		if ($this->fetch('https://inkscape.org/release/'))
			return $this->parse('/<h1>Inkscape ([\d\.]+)<\/h1>/');
		return false;
	}
}

?>
