<?php

class Ardour extends PatchBase {
	function __construct() {
		parent::__construct('Paul Davis', 'Ardour', 'https://community.ardour.org/download');
	}
	function check() : bool {
		if ($this->fetch('https://community.ardour.org/download?type=source'))
			return $this->parse('/Ardour ([\d\.]+)/');
		return false;
	}
}

?>
