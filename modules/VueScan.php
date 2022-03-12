<?php

class VueScan extends PatchBase {
	function __construct() {
		parent::__construct('Hamrick Software', 'VueScan', 'https://www.hamrick.com/download.html');
	}
	function check() : bool {
		if ($this->fetch('https://www.hamrick.com/'))
			return $this->parse('/"softwareVersion": "([\d\.]+)"/');
		return false;
	}
}

?>
