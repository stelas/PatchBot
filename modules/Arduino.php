<?php

class Arduino extends PatchBase {
	function __construct() {
		parent::__construct('Arduino AG', 'Arduino IDE', 'https://www.arduino.cc/');
	}
	function check() : bool {
		if ($this->fetch('https://www.arduino.cc/en/Main/Software'))
			return $this->parse('_<div class="blue-title">[\s]*ARDUINO ([\d\.]+)[\s]*</div>_');
		return false;
	}
}

?>
