<?php

class FreeDOS extends PatchBase {
	function __construct() {
		parent::__construct('Jim Hall & FreeDOS Team', 'FreeDOS', 'https://www.freedos.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://www.freedos.org/download/'))
			return $this->parse('/FreeDOS ([\d\.]+)<\/h\d>/');
		return false;
	}
}

?>
