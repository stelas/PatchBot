<?php

class Hardcopy extends PatchBase {
	function __construct() {
		parent::__construct('sw4you GmbH', 'Hardcopy', 'https://gen.hardcopy.de/');
	}
	function check() : bool {
		if ($this->fetch('https://gen.hardcopy.de/std.php'))
			return $this->parse('/<I>Version\s+([\d\.]+)\s*<\/I>/');
		return false;
	}
}

?>
