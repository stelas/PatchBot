<?php

class VirtualBox extends PatchBase {
	function __construct() {
		parent::__construct('Oracle', 'VirtualBox', 'https://www.virtualbox.org/wiki/Downloads');
	}
	function check() : bool {
		if ($this->fetch('https://www.virtualbox.org/wiki/Downloads'))
			return $this->parse('_//download\.virtualbox\.org/virtualbox/[\d\.]+/VirtualBox-([\d\.]+[a-z]?-[\d]+)-Win\.exe_');
		return false;
	}
}

?>
