<?php

class Xming extends PatchBase {
	function __construct() {
		parent::__construct('Colin Harrison', 'Xming', 'http://www.straightrunning.com/XmingNotes/');
	}
	function check() : bool {
		if ($this->fetch('http://www.straightrunning.com/XmingCode/version.def'))
			return $this->parse('/XW32_VERSION_STRING "([\d\.]+)\\\0"/');
		return false;
	}
}

?>
