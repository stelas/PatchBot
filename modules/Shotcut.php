<?php

class Shotcut extends PatchBase {
	function __construct() {
		parent::__construct('Meltytech LLC', 'Shotcut', 'https://shotcut.org/download/');
	}
	function check() : bool {
		if ($this->fetch_json('https://api.github.com/repos/mltframework/shotcut/releases/latest'))
			return $this->parse_json('tag_name');
		return false;
	}
}

?>
