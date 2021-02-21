<?php

class Arduino extends PatchBase {
	function __construct() {
		parent::__construct('Arduino AG', 'Arduino IDE', 'https://www.arduino.cc/en/software');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/arduino/Arduino/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
