<?php

class PDF24 extends PatchBase {
	function __construct() {
		parent::__construct('geek Software', 'PDF24 Creator', 'https://tools.pdf24.org/en/creator');
	}
	function check() : bool {
		if ($this->fetch('https://en.pdf24.org/'))
			return $this->parse('/<span>PDF24 Creator<\/span>\s*<span>([\d\.]+)<\/span>/');
		return false;
	}
}

?>
