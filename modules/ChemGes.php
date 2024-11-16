<?php

class ChemGes extends PatchBase {
	function __construct() {
		parent::__construct('DR-Software', 'ChemGes', 'https://dr-software.com/en/');
	}
	function check() : bool {
		if ($this->fetch('https://dr-software.com/en/'))
			return $this->parse('/Version ([\d\.]+)</');
		return false;
	}
}

?>
