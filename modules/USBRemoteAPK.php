<?php

class USBRemoteAPK extends PatchBase {
	function __construct() {
		parent::__construct('Jakub Zawadzki', 'USB Remote', 'https://www.inputstick.com/download/');
		$this->patch->setBranch('Android');
	}
	function check() : bool {
		if ($this->fetch('https://www.inputstick.com/download/'))
			return $this->parse('/>USB Remote v([\d\.]+)</');
		return false;
	}
}

?>
