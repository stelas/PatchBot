<?php

class PHP extends PatchBase {
	function __construct() {
		parent::__construct('PHP Group', 'PHP', 'https://www.php.net/');
	}
	function check() : bool {
		if ($this->fetch('https://www.php.net/downloads.php'))
			return $this->parse('/Current Stable<\/span>[\s]*PHP ([\d\.]+)/');
		return false;
	}
}

?>
