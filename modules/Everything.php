<?php

class Everything extends PatchBase {
	function __construct() {
		parent::__construct('David Carpenter', 'Everything', 'https://www.voidtools.com/downloads/');
	}
	function check() : bool {
		if ($this->fetch('https://www.voidtools.com/downloads/'))
			return $this->parse('/>Download Everything ([\d\.]+)</');
		return false;
	}
}

?>
