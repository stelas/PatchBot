<?php

class Freeplane extends PatchBase {
	function __construct() {
		parent::__construct('Freeplane Team', 'Freeplane', 'https://www.freeplane.org/wiki/index.php/Home');
	}
	function check() : bool {
		if ($this->fetch('https://www.freeplane.org/wiki/index.php/Home'))
			return $this->parse('/\(this downloads the stable version ([\d\.]+)\)/');
		return false;
	}
}

?>
