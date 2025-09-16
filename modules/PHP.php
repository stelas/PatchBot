<?php

class PHP extends PatchBase {
	function __construct() {
		parent::__construct('PHP Group', 'PHP', 'https://www.php.net/downloads');
	}
	function check() : bool {
		if ($this->fetch('https://www.php.net/downloads.php'))
			return $this->parse('/<h3>PHP [\d\.]+ \(([\d\.]+)\)<\/h3>/');
		return false;
	}
}

?>
