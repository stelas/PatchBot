<?php

class Ardour extends PatchBase {
	function __construct() {
		parent::__construct('Paul Davis', 'Ardour', 'https://ardour.org/download.html');
	}
	function check() : bool {
		if ($this->fetch('https://community.ardour.org/download'))
			return $this->parse('/set_release\("([\d\.]+)"\)/');
		return false;
	}
}

?>
