<?php

class InputStickUtilityAPK extends PatchBase {
	function __construct() {
		parent::__construct('Jakub Zawadzki', 'InputStickUtility', 'https://www.inputstick.com/download/');
		$this->patch->setBranch('Android');
	}
	function check() : bool {
		if ($this->fetch('https://www.inputstick.com/download/'))
			return $this->parse('/>InputStickUtility v([\d\.]+)</');
		return false;
	}
}

?>
