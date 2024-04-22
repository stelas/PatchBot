<?php

class Inkscape extends PatchBase {
	function __construct() {
		parent::__construct('Inkscape Authors', 'Inkscape', 'https://inkscape.org/release/');
	}
	function check() : bool {
		if ($this->fetch_header('https://inkscape.org/release/'))
			return $this->parse('/\/release\/inkscape-([\d\.]+)/');
		return false;
	}
}

?>
