<?php

class OPNsense extends PatchBase {
	function __construct() {
		parent::__construct('Deciso B.V.', 'OPNsense', 'https://opnsense.org/download/');
	}
	function check() : bool {
		if ($this->fetch('https://opnsense.org/download/'))
			return $this->parse('/data-version=\'([\d.]+)\'/');
		return false;
	}
}

?>
